<?php
class hocKyModel extends DB
{

    public function index()
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
        if (isset($_POST['tenhocky']) && isset($_POST['thoigianbatdau']) && isset($_POST['thoigianketthuc'])) {
            $tenhocky = addslashes($_POST['tenhocky']);
            $thoigianbatdau = addslashes($_POST['thoigianbatdau']);
            $thoigianketthuc = addslashes($_POST['thoigianketthuc']);

            $result = $this->query("INSERT INTO `hocky` (`mahocky`, `tenhocky`, `thoigianbatdau`, `thoigianketthuc`) VALUES (NULL, '$tenhocky', '$thoigianbatdau', '$thoigianketthuc');");
            if ($result)
                header("Location: " . DOMAIN . "hocky/index&msg=themthanhcong");
            else
                header("Location: " . DOMAIN . "hocky/index&msg=themloi");
        }
    }

    public function sua()
    {
        if (isset($_POST['sua_mahocky']) && isset($_POST['sua_tenhocky']) && isset($_POST['sua_thoigianbatdau']) && isset($_POST['sua_thoigianketthuc'])) {
            $mahocky = addslashes($_POST['sua_mahocky']);
            $tenhocky = addslashes($_POST['sua_tenhocky']);
            $thoigianbatdau = addslashes($_POST['sua_thoigianbatdau']);
            $thoigianketthuc = addslashes($_POST['sua_thoigianketthuc']);
            $result = $this->query("UPDATE `hocky` SET `tenhocky` = '$tenhocky', `thoigianbatdau` = '$thoigianbatdau', `thoigianketthuc` = '$thoigianketthuc' WHERE `hocky`.`mahocky` = '$mahocky'");
            if ($result)
                header("Location: " . DOMAIN . "hocky/index&msg=suathanhcong");
            else
                header("Location: " . DOMAIN . "hocky/index&msg=sualoi");
        }
    }

    public function xoa()
    {
        if (isset($_POST['xoa_mahocky'])) {
            $mahocky = addslashes($_POST['xoa_mahocky']);
            $result = $this->query("DELETE FROM `hocky` WHERE `hocky`.`mahocky` = '$mahocky'");
            if ($result)
                header("Location: " . DOMAIN . "hocky/index&msg=xoathanhcong");
            else
                header("Location: " . DOMAIN . "hocky/index&msg=xoaloi");
        }
    }
}
