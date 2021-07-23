<?php
class diemModel extends DB
{
    public function index() {
        $arr = array();
        $result = $this->query("SELECT `sv`.`hoten` as `diem`, `sv`.`taikhoan` as `iddiem`, `gv`.`hoten` as `giaovien`, `gv`.`taikhoan` as `idgiaovien` FROM `chunhiem`, `taikhoan` as `sv`, `taikhoan` as `gv` WHERE `chunhiem`.`iddiem` = `sv`.`taikhoan` AND `chunhiem`.`idgiaovien` = `gv`.`taikhoan`;");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function them(){
        if (isset($_POST['giaovien']) && isset($_POST['diem']))
        {
            $giaovien = addslashes($_POST['giaovien']);
            $sql = "INSERT INTO `chunhiem` (`idgiaovien`, `iddiem`) VALUES ";
            foreach($_POST['diem'] as $sv){
                $diem = addslashes($sv);
                $sql .= "('$giaovien', '$diem'),";
            }
            $result = $this->query(rtrim($sql, ","));
            if ($result)
                header("Location: /index.php?url=diem/index&msg=themthanhcong&id=".$idcaytientrinh);
            else
                header("Location: /index.php?url=diem/index&msg=themloi&id=".$idcaytientrinh);
        }
    }
    public function xoa(){
        if (isset($_POST['xoa_idgiaovien']) && isset($_POST['xoa_iddiem']))
        {
            $giaovien = addslashes($_POST['xoa_idgiaovien']);
            $diem = addslashes($_POST['xoa_iddiem']);
            $result = $this->query("DELETE FROM `chunhiem` WHERE `chunhiem`.`iddiem` = '$diem' AND `chunhiem`.`idgiaovien` = '$giaovien'");
            if ($result)
                header("Location: /index.php?url=diem/index&msg=xoathanhcong");
            else
                header("Location: /index.php?url=diem/index&msg=xoaloi");
        }
    }

    public function danhsachdiem() {
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