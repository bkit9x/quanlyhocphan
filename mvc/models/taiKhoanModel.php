<?php
class taiKhoanModel extends DB
{
    public function index() {

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
                } else {
                    return "Sai tài khoản hoặc mật khẩu";
                }
        } else {
            return NULL;
        }
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
    }
}