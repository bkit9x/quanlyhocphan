<?php
class sinhVienModel extends DB
{
    public function index() {
        $taikhoangv = $_SESSION['taikhoan'];
        $taikhoangv = 'hieunv';
        $arr = array();
        $result = $this->query("SELECT `sv`.`hoten` as `sinhvien`, `sv`.`taikhoan` as `idsinhvien`, `ctt`.`idcaytientrinh`, `ctt`.`tencaytientrinh`, `ctt`.`tenkhoa` FROM `chunhiem`, `taikhoan` as `sv`, `taikhoan` as `gv`, `caytientrinh` as `ctt`, `caytientrinh_sinhvien` as `cttsv` WHERE `chunhiem`.`idsinhvien` = `sv`.`taikhoan` AND `chunhiem`.`idgiaovien` = `gv`.`taikhoan` AND `cttsv`.`idcaytientrinh` = `ctt`.`idcaytientrinh` AND `cttsv`.`idsinhvien` = `sv`.`taikhoan` AND `gv`.`taikhoan`='$taikhoangv'");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function sua(){
        if (isset($_POST['sua_idsinhvien']) && isset($_POST['sua_idcaytientrinh']) && isset($_POST['sua_idcaytientrinh_old']))
        {
            $idcaytientrinh = addslashes($_POST['sua_idcaytientrinh']);
            $idcaytientrinh_old = addslashes($_POST['sua_idcaytientrinh_old']);
            $idsinhvien = addslashes($_POST['sua_idsinhvien']);
            $result = $this->query("UPDATE `caytientrinh_sinhvien` SET `idcaytientrinh` = '$idcaytientrinh' WHERE `idcaytientrinh` = '$idcaytientrinh_old' AND  `idsinhvien` = '$idsinhvien'");
            if ($result)
                header("Location: /index.php?url=sinhvien/index&msg=suathanhcong");
            else
                header("Location: /index.php?url=sinhvien/index&msg=sualoi");
        }
    }

    public function danhsachcaytientrinh() {
        $arr = array();
        $result = $this->query("SELECT `idcaytientrinh`, `tencaytientrinh`, `tenkhoa` FROM `caytientrinh` WHERE 1");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

}