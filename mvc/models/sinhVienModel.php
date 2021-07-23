<?php
class sinhVienModel extends DB
{
    public function index() {
        $arr = array();
        $result = $this->query("SELECT `sv`.`hoten` as `sinhvien`, `sv`.`taikhoan` as `idsinhvien`, `gv`.`hoten` as `giaovien`, `gv`.`taikhoan` as `idgiaovien` FROM `chunhiem`, `taikhoan` as `sv`, `taikhoan` as `gv` WHERE `chunhiem`.`idsinhvien` = `sv`.`taikhoan` AND `chunhiem`.`idgiaovien` = `gv`.`taikhoan`;");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function them(){
        if (isset($_POST['giaovien']) && isset($_POST['sinhvien']))
        {
            $giaovien = addslashes($_POST['giaovien']);
            $sql = "INSERT INTO `chunhiem` (`idgiaovien`, `idsinhvien`) VALUES ";
            foreach($_POST['sinhvien'] as $sv){
                $sinhvien = addslashes($sv);
                $sql .= "('$giaovien', '$sinhvien'),";
            }
            $result = $this->query(rtrim($sql, ","));
            if ($result)
                header("Location: /index.php?url=sinhvien/index&msg=themthanhcong&id=".$idcaytientrinh);
            else
                header("Location: /index.php?url=sinhvien/index&msg=themloi&id=".$idcaytientrinh);
        }
    }
    public function xoa(){
        if (isset($_POST['xoa_idgiaovien']) && isset($_POST['xoa_idsinhvien']))
        {
            $giaovien = addslashes($_POST['xoa_idgiaovien']);
            $sinhvien = addslashes($_POST['xoa_idsinhvien']);
            $result = $this->query("DELETE FROM `chunhiem` WHERE `chunhiem`.`idsinhvien` = '$sinhvien' AND `chunhiem`.`idgiaovien` = '$giaovien'");
            if ($result)
                header("Location: /index.php?url=sinhvien/index&msg=xoathanhcong");
            else
                header("Location: /index.php?url=sinhvien/index&msg=xoaloi");
        }
    }

    public function danhsachsinhvien() {
        $arr = array();
        $result = $this->query("SELECT `taikhoan`, `hoten` FROM `taikhoan` WHERE `loaitaikhoan` = '3'");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function danhsachgiaovien() {
        $arr = array();
        $result = $this->query("SELECT `taikhoan`, `hoten` FROM `taikhoan` WHERE `loaitaikhoan` = '2'");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

}