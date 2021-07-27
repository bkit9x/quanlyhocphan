<?php
class sinhVienModel extends DB
{
    public function index()
    {
        $taikhoangv = $_SESSION['taikhoan'];
        $arr = array();
        $result = $this->query("SELECT `sv`.`hoten` as `sinhvien`, `sv`.`taikhoan` as `idsinhvien` FROM `chunhiem`, `taikhoan` as `sv`, `taikhoan` as `gv` WHERE `chunhiem`.`idsinhvien` = `sv`.`taikhoan` AND `chunhiem`.`idgiaovien` = `gv`.`taikhoan` AND `gv`.`taikhoan`='$taikhoangv'");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                $query = $this->query("SELECT `ctt`.`idcaytientrinh`, `ctt`.`tencaytientrinh`, `ctt`.`tenkhoa` FROM `taikhoan` as `sv`, `caytientrinh` as `ctt`, `caytientrinh_sinhvien` as `cttsv` WHERE `cttsv`.`idcaytientrinh` = `ctt`.`idcaytientrinh` AND `cttsv`.`idsinhvien` ='" . $row['idsinhvien'] . "'");
                if ($query && $query->num_rows > 0) {
                    $tmp = $query->fetch_assoc();
                    $row['idcaytientrinh'] = $tmp['idcaytientrinh'];
                    $row['tencaytientrinh'] = $tmp['tencaytientrinh'];
                    $row['tenkhoa'] = $tmp['tenkhoa'];
                } else {
                    $row['idcaytientrinh'] = NULL;
                    $row['tencaytientrinh'] = NULL;
                    $row['tenkhoa'] = NULL;
                }
                $arr[] = $row;
            }
        return $arr;
    }

    public function sua()
    {
        if (isset($_POST['sua_idsinhvien']) && isset($_POST['sua_idcaytientrinh'])) {
            $idcaytientrinh = addslashes($_POST['sua_idcaytientrinh']);
            $idsinhvien = addslashes($_POST['sua_idsinhvien']);
            if (isset($_POST['sua_idcaytientrinh_old']) && $_POST['sua_idcaytientrinh_old'] != ''){
                $idcaytientrinh_old = addslashes($_POST['sua_idcaytientrinh_old']);
                $sql = "UPDATE `caytientrinh_sinhvien` SET `idcaytientrinh` = '$idcaytientrinh' WHERE `idcaytientrinh` = '$idcaytientrinh_old' AND  `idsinhvien` = '$idsinhvien'";
            }
            else{
                $sql = "INSERT INTO `caytientrinh_sinhvien` (`idsinhvien`, `idcaytientrinh`) VALUES ('$idsinhvien', '$idcaytientrinh')";
            }
            $result = $this->query($sql);
            if ($result)
                header("Location: /index.php?url=sinhvien/index&msg=suathanhcong");
            else
                header("Location: /index.php?url=sinhvien/index&msg=sualoi");
        }
        header("Location: /index.php?url=sinhvien/index&msg=sualoi");
    }

    public function danhsachcaytientrinh()
    {
        $arr = array();
        $result = $this->query("SELECT `idcaytientrinh`, `tencaytientrinh`, `tenkhoa` FROM `caytientrinh` WHERE 1");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }
}
