<?php
class dangKyHocPhanModel extends DB
{

    public function index()
    {
        $arr = array();
        $result = $this->query("SELECT `mahocphan`, `tenhocphan`, `sotinchi`, `hocphantienquyet` as mahocphantienquyet FROM `hocphan`;");
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        }
        return $arr;
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
    public function them()
    {
        $hocky = addslashes($_GET['hocky']);
        if (isset($_GET['hocphan']) && isset($_GET['hocky'])) {
            $mahocphan = addslashes($_GET['hocphan']);
            $sinhvien = $_SESSION['taikhoan'];
            $result = $this->query("INSERT INTO `dangkyhocphan` (`idsinhvien`, `idhocky`, `idhocphan`) VALUES ('$sinhvien ', '$hocky', '$mahocphan')");
            if ($result)
                header("Location: " . DOMAIN . "dangkyhocphan/index?hocky=$hocky&msg=themthanhcong");
        } else
            header("Location: " . DOMAIN . "dangkyhocphan/index?hocky=$hocky&msg=themloi");
    }
    public function sua()
    {
        $arr = array();
        $result = $this->query("");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }
    public function xoa()
    {
        $hocky = (int) $_GET['hocky'];
        if (isset($_POST['xoa_mahocphan'])) {
            $sinhvien = $_SESSION['taikhoan'];
            $mahocphan = addslashes($_POST['xoa_mahocphan']);
            $result = $this->query("DELETE FROM `dangkyhocphan` WHERE `idhocphan` = '$mahocphan' AND `idsinhvien`='$sinhvien' AND `idhocky`='$hocky'");
            if ($result)
                header("Location: " . DOMAIN . "dangkyhocphan/index?hocky=$hocky&msg=xoathanhcong");
            else
                header("Location: " . DOMAIN . "dangkyhocphan/index?hocky=$hocky&msg=xoaloi");
        }
    }
    public function dadangky()
    {
        $hocky = (int) $_GET['hocky'];
        $sinhvien = $_SESSION['taikhoan'];
        $arr = array();
        $result = $this->query("SELECT DISTINCT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi` FROM `hocphan`, `dangkyhocphan`, `taikhoan` WHERE `dangkyhocphan`.`idhocphan` = `hocphan`.`mahocphan` AND `dangkyhocphan`.`idsinhvien`='$sinhvien' AND `dangkyhocphan`.`idhocky`='$hocky';");
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $arr[] = $row;
            }
        }
        return $arr;
    }
}
