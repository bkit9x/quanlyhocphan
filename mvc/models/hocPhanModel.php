<?php
class hocPhanModel extends DB
{
    public function index() {
        $arr = array();
        $result = $this->query("SELECT `mahocphan`, `tenhocphan`, `sotinchi`, `hocphantienquyet` as mahocphantienquyet FROM `hocphan`;");
        if ($result && $result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                if($row['mahocphantienquyet'] != NULL)
                {
                    $hocphantienquyet = $this->query("SELECT `tenhocphan` FROM `hocphan` WHERE `mahocphan` = '".$row['mahocphantienquyet']."';");
                    if ($hocphantienquyet && $hocphantienquyet->num_rows > 0) {
                        $row['tenhocphantienquyet'] = $hocphantienquyet->fetch_assoc()['tenhocphan'];
                    }
                }
                else
                    $row['tenhocphantienquyet'] = NULL;

                $arr[] = $row;
            }
        }
        return $arr;
    }

    public function them(){
        if (isset($_POST['mahocphan']) && isset($_POST['tenhocphan']) && isset($_POST['sotinchi']) && isset($_POST['hocphantienquyet']))
        {
            $mahocphan = addslashes($_POST['mahocphan']);
            $tenhocphan = addslashes($_POST['tenhocphan']);
            $sotinchi = addslashes($_POST['sotinchi']);
            $hocphantienquyet = addslashes($_POST['hocphantienquyet']);
            $hocphantienquyet = $hocphantienquyet == "NULL" ? "NULL" : "'".$hocphantienquyet."'";

            $result = $this->query("INSERT INTO `hocphan` (`mahocphan`, `tenhocphan`, `sotinchi`, `hocphantienquyet`) VALUES ('$mahocphan', '$tenhocphan', '$sotinchi', $hocphantienquyet);");
            if ($result)
                header("Location: /index.php?url=hocphan/index&msg=themthanhcong");
        }
        header("Location: /index.php?url=hocphan/index&msg=themloi");
    }

    public function sua(){
        if (isset($_POST['sua_mahocphan']) && isset($_POST['sua_mahocphan_old']) && isset($_POST['sua_tenhocphan']) && isset($_POST['sua_sotinchi']))
        {
            $mahocphan = addslashes($_POST['sua_mahocphan']);
            $mahocphan_old = addslashes($_POST['sua_mahocphan_old']);
            $tenhocphan = addslashes($_POST['sua_tenhocphan']);
            $sotinchi = addslashes($_POST['sua_sotinchi']);
            $hocphantienquyet = addslashes($_POST['sua_hocphantienquyet']);
            $hocphantienquyet = $hocphantienquyet == "NULL" ? "NULL" : "'".$hocphantienquyet."'";
            $result = $this->query("UPDATE `hocphan` SET `mahocphan` = '$mahocphan', `tenhocphan` = '$tenhocphan', `sotinchi` = '$sotinchi', `hocphantienquyet` = $hocphantienquyet WHERE `hocphan`.`mahocphan` = '$mahocphan_old'");
            if ($result)
                header("Location: /index.php?url=hocphan/index&msg=suathanhcong");
            else
                header("Location: /index.php?url=hocphan/index&msg=sualoi");
        }
    }

    public function xoa(){
        if (isset($_POST['xoa_mahocphan']))
        {
            $mahocphan = addslashes($_POST['xoa_mahocphan']);
            $result = $this->query("DELETE FROM `hocphan` WHERE `hocphan`.`mahocphan` = '$mahocphan'");
            if ($result)
                header("Location: /index.php?url=hocphan/index&msg=xoathanhcong");
            else
                header("Location: /index.php?url=hocphan/index&msg=xoaloi");
        }
    }
}