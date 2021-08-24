<?php
class diemModel extends DB
{
    public function index()
    {
        if (isset($_GET['hocky'])) {
            $hocky = (int) $_GET['hocky'];
            if ($this->quyen() == '2') {
                //giao vien
                $sinhvien = addslashes($_GET['sv']);
            } else {
                //sinh vien
                $sinhvien = $_SESSION["taikhoan"];
            }

            $arr = array();
            $result = $this->query("SELECT DISTINCT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi` FROM `hocphan`, `dangkyhocphan`, `taikhoan` WHERE `dangkyhocphan`.`idhocphan` = `hocphan`.`mahocphan` AND `dangkyhocphan`.`idsinhvien`='$sinhvien' AND `dangkyhocphan`.`idhocky`='$hocky';");

            if ($result && $result->num_rows > 0)
                while ($row = $result->fetch_assoc()) {
                    $row['diem'] = array();

                    $diem = $this->query("SELECT `diem`, `nguoinhap` FROM `diem` WHERE `idhocphan`='" . $row['mahocphan'] . "' AND `idsinhvien`='$sinhvien' AND `nguoinhap` != '$sinhvien'");
                    if ($diem && $diem->num_rows > 0) {
                        $r = $diem->fetch_assoc();
                        $row['diem']['giaovien'] = array('nguoinhap' => $r['nguoinhap'], 'diem' => $r['diem']);
                    }

                    $diem = $this->query("SELECT `diem`, `nguoinhap` FROM `diem` WHERE `idhocphan`='" . $row['mahocphan'] . "' AND `idsinhvien`='$sinhvien' AND `nguoinhap` = '$sinhvien'");
                    if ($diem && $diem->num_rows > 0) {
                        $r = $diem->fetch_assoc();
                        $row['diem']['sinhvien'] = array('nguoinhap' => $r['nguoinhap'], 'diem' => $r['diem']);
                    }

                    $arr[] = $row;
                }
            return $arr;
        }
        header("Location: " . DOMAIN);
    }
    public function chonhocky()
    {
        $arr = array();
        $result = $this->query("SELECT * FROM `hocky`");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function sua()
    {
        if (isset($_POST['sua_mahocphan']) && isset($_POST['sua_diem']) && isset($_GET['hocky'])) {
            if ($this->quyen() == '2') {
                //giao vien
                $sinhvien = addslashes($_GET['sv']);
            } else {
                //sinh vien
                $sinhvien = $_SESSION["taikhoan"];
            }

            $hocky = (int) $_GET['hocky'];
            $diem = (float) $_POST['sua_diem'];
            $mahocphan = $_POST['sua_mahocphan'];
            $nguoinhap = $_SESSION["taikhoan"];
            $select = $this->query("SELECT `diem` FROM `diem` WHERE `idhocphan`='$mahocphan' AND `idsinhvien`='$sinhvien' AND `nguoinhap`='$nguoinhap'");
            if ($select && $select->num_rows > 0)
                $result = $this->query("UPDATE `diem` SET `diem` = '$diem' WHERE `diem`.`idhocphan` = '$mahocphan' AND `diem`.`idsinhvien` = '$sinhvien' AND `nguoinhap`='$nguoinhap'");
            else
                $result = $this->query("INSERT INTO `diem` (`idhocphan`, `idsinhvien`, `diem`,`nguoinhap`) VALUES ('$mahocphan', '$sinhvien', '$diem','$nguoinhap');");
            if ($result)
                header("Location: " . DOMAIN . "diem/index&msg=suathanhcong&sv=" . $sinhvien . "&hocky=" . $hocky);
            else
                header("Location: " . DOMAIN . "diem/index&msg=sualoi&sv=" . $sinhvien . "&hocky=" . $hocky);
        }
    }
}
