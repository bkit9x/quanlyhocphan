<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

require_once 'readFilter.php';

class spreadSheetModel extends DB
{
    public function index()
    {
        $taikhoangv = $_SESSION['taikhoan'];
        $sinhvien = addslashes($_GET['sv']);
        $arr = array();
        $result = $this->query("SELECT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi` FROM `hocphan`, `chunhiem`, `hocphantrongcaytientrinh`, `caytientrinhsinhvien` WHERE `caytientrinhsinhvien`.`idsinhvien` = `chunhiem`.`idsinhvien` AND `hocphantrongcaytientrinh`.`mahocphan` = `hocphan`.`mahocphan` AND `hocphantrongcaytientrinh`.`idcaytientrinh` = `caytientrinhsinhvien`.`idcaytientrinh` AND `caytientrinhsinhvien`.`idsinhvien`='$sinhvien' AND `chunhiem`.`idgiaovien`='$taikhoangv';");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                $diem = $this->query("SELECT `diem` FROM `diem` WHERE `idhocphan`='" . $row['mahocphan'] . "' AND `idsinhvien`='$sinhvien'");
                $row['diem'] = NULL;
                if ($diem && $diem->num_rows > 0)
                    $row['diem'] = $diem->fetch_assoc()['diem'];
                $arr[] = $row;
            }
        return $arr;
    }

    public function sua()
    {
        if (isset($_POST['sua_mahocphan']) && isset($_POST['sua_diem'])) {
            $sinhvien = addslashes($_GET['sv']);
            $diem = (float) $_POST['sua_diem'];
            $mahocphan = $_POST['sua_mahocphan'];
            $select = $this->query("SELECT `diem` FROM `diem` WHERE `idhocphan`='$mahocphan' AND `idsinhvien`='$sinhvien'");
            if ($select && $select->num_rows > 0)
                $result = $this->query("UPDATE `diem` SET `diem` = '$diem' WHERE `diem`.`idhocphan` = '$mahocphan' AND `diem`.`idsinhvien` = '$sinhvien'");
            else
                $result = $this->query("INSERT INTO `diem` (`idhocphan`, `idsinhvien`, `diem`) VALUES ('$mahocphan', '$sinhvien', '$diem');");
            if ($result)
                header("Location: " . DOMAIN . "diem/index&msg=suathanhcong&sv=" . $sinhvien);
            else
                header("Location: " . DOMAIN . "diem/index&msg=sualoi&sv=" . $sinhvien);
        }
    }

    public function nhap()
    {
        $inputFileType = 'Xlsx';
        $inputFileName = '././upload/file.xlsx';
        $sheetname = 'Mau DT05b';
        $startRow = 6;
        $soluongsinhvien = 65;
        $endRow = 9 + $soluongsinhvien;

        $filterSubset = new MyReadFilter($startRow, $endRow);

        $reader = IOFactory::createReader($inputFileType);
        $reader->setReadFilter($filterSubset);
        $spreadsheet = $reader->load($inputFileName);

        $sheetData = $spreadsheet->getActiveSheet()->toArray();

        $diem = array();
        $loi = array();
        for ($row = 9; $row <= $endRow; $row++) {
            if ($sheetData[$row][1]) {
                $mssv = $sheetData[$row][1];
                $diem[$mssv] = array();

                for ($col = 3; $col < count($sheetData[$row]) - 1; $col++) {
                    $value = $sheetData[$row][$col];
                    if (is_numeric($value)) {
                        $value = (float) $value;
                        $mamon = $sheetData[5][$col - 1];
                        $mamon = explode(' ', $mamon)[0];
                        $diem[$mssv][$mamon] = $value;
                        var_dump($value);
                        if (!$this->nhapdiemchosinhvien($mssv, $mamon, $value)) {
                            $loi[] = array("Sinh viên $mssv môn $mamon điểm $value");
                        }
                    }
                }
            }
        }
        var_dump($loi);
    }

    public function nhapdiemchosinhvien($sinhvien, $mahocphan, $diem)
    {
        if ($diem <= 4) {
            $select = $this->query("SELECT `diem` FROM `diem` WHERE `idhocphan`='$mahocphan' AND `idsinhvien`='$sinhvien'");
            if ($select && $select->num_rows > 0)
                $result = $this->query("UPDATE `diem` SET `diem` = '$diem' WHERE `diem`.`idhocphan` = '$mahocphan' AND `diem`.`idsinhvien` = '$sinhvien'");
            else
                $result = $this->query("INSERT INTO `diem` (`idhocphan`, `idsinhvien`, `diem`) VALUES ('$mahocphan', '$sinhvien', '$diem');");
            if ($result)
                return true;
            else
                return false;
        } else
            return false;
    }
}
