<?php
class taiKhoanModel extends DB
{
    public function index() {
        $result = $this->query("SELECT `taikhoan`, `matkhau`, `hoten`, `tenloaitaikhoan` FROM `taikhoan`, `loaitaikhoan` WHERE `taikhoan`.`loaitaikhoan` = `loaitaikhoan`.`idloaitaikhoan`");
        $arr = array();
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;

    }
    public function capnhat() {
        if ($_SESSION['idloaitaikhoan'] == '1')
            $_GET['u'] = isset($_GET['u']) ? $_GET['u'] : $_SESSION['taikhoan'];
        else
            $_GET['u'] = $_SESSION['taikhoan'];
        $taikhoan = addslashes($_GET['u']);
        $result = $this->query("SELECT `taikhoan`,`hoten`, `loaitaikhoan` FROM `taikhoan` WHERE `taikhoan`='$taikhoan'");
        if ($result && $result->num_rows > 0)
            return $result->fetch_assoc();

    }
    public function dangnhap() {
        if (isset($_POST['taikhoan']) && isset($_POST['matkhau'])) {
            $taikhoan = addslashes($_POST['taikhoan']);
            $matkhau = md5($_POST['matkhau']);
            if ($result = $this->query("SELECT taikhoan, hoten, tenloaitaikhoan, idloaitaikhoan FROM `taikhoan`, `loaitaikhoan` WHERE `taikhoan` = '$taikhoan' AND `matkhau` = '$matkhau' AND `idloaitaikhoan` = `loaitaikhoan`"))
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $_SESSION["taikhoan"] = $taikhoan;
                    $_SESSION["hoten"] = $row['hoten'];
                    $_SESSION["loaitaikhoan"] = $row['tenloaitaikhoan'];
                    $_SESSION["idloaitaikhoan"] = $row['idloaitaikhoan'];
                    header("Location: ".DOMAIN);
                    return "Đăng nhập thành công";
                }
                else
                    return "Sai tài khoản hoặc mật khẩu";
        }
        else
            return NULL;
    }
    public function dangky() {
        if (isset($_POST['taikhoan']) && isset($_POST['matkhau']) && isset($_POST['hoten'])) {
            $taikhoan = addslashes($_POST['taikhoan']);
            $hoten = addslashes($_POST['hoten']);
            $matkhau = md5($_POST['matkhau']);
            $result = $this->query("SELECT taikhoan FROM `taikhoan` WHERE `taikhoan` = '$taikhoan'");
            if ($result && $result->num_rows > 0) {
                return "Tài khoản này đã tồn tại";
            } else {
                $result = $this->query("INSERT INTO taikhoan (`taikhoan`, `matkhau`, `hoten`, `loaitaikhoan`) VALUES('$taikhoan', '$matkhau', '$hoten', '3')");
                if ($result){
                    header("Location: ".DOMAIN.'index.php?url=taikhoan/dangnhap');
                    return "Đăng ký thành công";
                }
            }
        } else {
            return NULL;
        }
    }
    public function dangxuat() {
        unset($_SESSION["taikhoan"]);
        unset($_SESSION["hoten"]);
        unset($_SESSION["loaitaikhoan"]);
        unset($_SESSION["idloaitaikhoan"]);
        
    }

    public function loaitaikhoan(){
        $arr = array();
        $result = $this->query("SELECT * FROM `loaitaikhoan`");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function sua(){
        if (isset($_POST['taikhoan']) && isset($_POST['hoten']))
        {
            $taikhoan = addslashes($_POST['taikhoan']);
            $hoten = addslashes($_POST['hoten']);
            $matkhau = md5($_POST['matkhau']);
            $matkhaumoi = md5($_POST['matkhaumoi']);
            $doiloai = "";
            if(isset($_POST['loaitaikhoan'])){
                $loaitaikhoan = addslashes($_POST['loaitaikhoan']);
                $doiloai = ", `loaitaikhoan` = '$loaitaikhoan'";
            }
            if (isset($_POST['matkhau']) && $_POST['matkhau'] != '' && isset($_POST['matkhaumoi']) && $_POST['matkhaumoi'] != ''){
                $kt = $this->query("SELECT hoten FROM `taikhoan` WHERE `taikhoan` = '$taikhoan' AND `matkhau` = '$matkhau'");
                if ($kt && $kt->num_rows > 0)
                    $sql = "UPDATE `taikhoan` SET `matkhau` = '$matkhaumoi', `hoten` = '$hoten'$doiloai WHERE `taikhoan`.`taikhoan` = '$taikhoan'";
                else
                    header("Location: /index.php?url=taikhoan/index&msg=matkhaukhongdung&u=".$taikhoan);
            }
            else
                $sql = "UPDATE `taikhoan` SET `hoten` = '$hoten'$doiloai WHERE `taikhoan`.`taikhoan` = '$taikhoan'";

            $result = $this->query($sql);
            if ($result)
                header("Location: /index.php?url=taikhoan/index&msg=suathanhcong&u=".$taikhoan);
        }
        else
            header("Location: ".$_SERVER['HTTP_REFERER'].'&msg=sualoi');
    }

}