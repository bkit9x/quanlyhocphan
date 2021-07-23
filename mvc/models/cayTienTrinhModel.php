<?php
class cayTienTrinhModel extends DB
{
    public function index() {
        $arr = array();
        $result = $this->query("SELECT `idcaytientrinh`, `tencaytientrinh`, `tenkhoa` FROM `caytientrinh` WHERE 1");
        if ($result && $result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $arr[] = $row;
            }
        }
        return $arr;
    }

    public function them(){
        if (isset($_POST['tencaytientrinh']) && isset($_POST['tenkhoa']))
        {
            $tencaytientrinh = addslashes($_POST['tencaytientrinh']);
            $tenkhoa = addslashes($_POST['tenkhoa']);

            $result = $this->query("INSERT INTO `caytientrinh` (`idcaytientrinh`, `tencaytientrinh`, `tenkhoa`) VALUES (NULL, '$tencaytientrinh', '$tenkhoa');");
            if ($result)
                header("Location: /index.php?url=caytientrinh/index&msg=themthanhcong");
            else
                header("Location: /index.php?url=caytientrinh/index&msg=themloi");
        }
    }

    public function sua(){
        if (isset($_POST['sua_idcaytientrinh']) && isset($_POST['sua_tencaytientrinh']) && isset($_POST['sua_tenkhoa']))
        {
            $idcaytientrinh = addslashes($_POST['sua_idcaytientrinh']);
            $tencaytientrinh = addslashes($_POST['sua_tencaytientrinh']);
            $tenkhoa = addslashes($_POST['sua_tenkhoa']);
            $result = $this->query("UPDATE `caytientrinh` SET `tencaytientrinh` = '$tencaytientrinh', `tenkhoa` = '$tenkhoa' WHERE `caytientrinh`.`idcaytientrinh` = '$idcaytientrinh'");
            if ($result)
                header("Location: /index.php?url=caytientrinh/index&msg=suathanhcong");
            else
                header("Location: /index.php?url=caytientrinh/index&msg=sualoi");
        }
    }

    public function xoa(){
        if (isset($_POST['xoa_idcaytientrinh']))
        {
            $idcaytientrinh = addslashes($_POST['xoa_idcaytientrinh']);
            $result = $this->query("DELETE FROM `caytientrinh` WHERE `caytientrinh`.`idcaytientrinh` = '$idcaytientrinh'");
            if ($result)
                header("Location: /index.php?url=caytientrinh/index&msg=xoathanhcong");
            else
                header("Location: /index.php?url=caytientrinh/index&msg=xoaloi");
        }
    }


}