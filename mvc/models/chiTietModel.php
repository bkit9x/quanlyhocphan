<?php
class chiTietModel extends DB
{
    public function index()
    {
        $id = (int) $_GET['id'];
        $arr = array();
        $result = $this->query("SELECT `hocphan`.`mahocphan`, `tenhocphan`, `sotinchi` FROM `hocphan`, `caytientrinh_hocphan` WHERE `caytientrinh_hocphan`.`mahocphan` = `hocphan`.`mahocphan` AND `caytientrinh_hocphan`.`idcaytientrinh`='$id';");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function tencaytientrinh()
    {
        $id = (int)$_GET['id'];
        $result = $this->query("SELECT `tencaytientrinh` FROM `caytientrinh` WHERE `idcaytientrinh`='$id';");
        if ($result && $result->num_rows > 0) {
            return $row = $result->fetch_assoc()['tencaytientrinh'];
        }
    }

    public function them()
    {
        if (isset($_POST['mahocphan'])) {
            $idcaytientrinh = (int) $_POST['id'];
            $sql = "INSERT INTO `caytientrinh_hocphan` (`idcaytientrinh`, `mahocphan`) VALUES ";
            foreach ($_POST['mahocphan'] as $hp) {
                $mahocphan = addslashes($hp);
                $sql .= "('$idcaytientrinh', '$mahocphan'),";
            }
            $result = $this->query(rtrim($sql, ","));
            if ($result)
                header("Location: " . DOMAIN . "chitiet/index&msg=themthanhcong&id=" . $idcaytientrinh);
            else
                header("Location: " . DOMAIN . "chitiet/index&msg=themloi&id=" . $idcaytientrinh);
        }
    }

    public function xoa()
    {
        if (isset($_POST['xoa_mahocphan'])) {
            $idcaytientrinh = (int)$_POST['id'];
            $mahocphan = addslashes($_POST['xoa_mahocphan']);
            $result = $this->query("DELETE FROM `caytientrinh_hocphan` WHERE `caytientrinh_hocphan`.`idcaytientrinh` = '$idcaytientrinh' AND `caytientrinh_hocphan`.`mahocphan` = '$mahocphan'");
            if ($result)
                header("Location: " . DOMAIN . "chitiet/index&msg=xoathanhcong&id=" . $idcaytientrinh);
            else
                header("Location: " . DOMAIN . "chitiet/index&msg=xoaloi&id=" . $idcaytientrinh);
        }
    }

    public function danhsachhocphan()
    {
        $arr = array();
        $result = $this->query("SELECT `mahocphan`, `tenhocphan`, `sotinchi` FROM `hocphan`;");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }
}
