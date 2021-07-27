<?php
class diemModel extends DB
{
    public function index() {
        $taikhoangv = $_SESSION['taikhoan'];
        $sinhvien = addslashes($_GET['sv']);
        $arr = array();
        $result = $this->query("SELECT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi` FROM `hocphan`, `chunhiem`, `caytientrinh_hocphan`, `caytientrinh_sinhvien` WHERE `caytientrinh_sinhvien`.`idsinhvien` = `chunhiem`.`idsinhvien` AND `caytientrinh_hocphan`.`mahocphan` = `hocphan`.`mahocphan` AND `caytientrinh_hocphan`.`idcaytientrinh` = `caytientrinh_sinhvien`.`idcaytientrinh` AND `caytientrinh_sinhvien`.`idsinhvien`='$sinhvien' AND `chunhiem`.`idgiaovien`='$taikhoangv';");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc()){
                $diem = $this->query("SELECT `diem` FROM `diem` WHERE `idhocphan`='".$row['mahocphan']."' AND `idsinhvien`='$sinhvien'");
                $row['diem'] = NULL;
                if ($diem && $diem->num_rows > 0) 
                    $row['diem'] = $diem->fetch_assoc()['diem'];
                $arr[] = $row;
            }
        return $arr;
    }

    public function sua(){
        if (isset($_POST['sua_mahocphan']) && isset($_POST['sua_diem']))
        {
            $sinhvien = addslashes($_GET['sv']);
            $diem = (float) $_POST['sua_diem'];
            $mahocphan = $_POST['sua_mahocphan'];
            $select = $this->query("SELECT `diem` FROM `diem` WHERE `idhocphan`='$mahocphan' AND `idsinhvien`='$sinhvien'");
            if($select && $select->num_rows > 0)
                $result = $this->query("UPDATE `diem` SET `diem` = '$diem' WHERE `diem`.`idhocphan` = '$mahocphan' AND `diem`.`idsinhvien` = '$sinhvien'");
            else
                $result = $this->query("INSERT INTO `diem` (`idhocphan`, `idsinhvien`, `diem`) VALUES ('$mahocphan', '$sinhvien', '$diem');");
            if ($result)
                header("Location: /index.php?url=diem/index&msg=suathanhcong&sv=".$sinhvien);
            else
                header("Location: /index.php?url=diem/index&msg=sualoi&sv=".$sinhvien);
        }
    }

}