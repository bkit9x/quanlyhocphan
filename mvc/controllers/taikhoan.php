<?php
class taikhoan extends Controller
{
    public function index()
    {
        if ($this->quyen() != '1')
            header('Location: ' . DOMAIN);
        $model = $this->model("taiKhoanModel")->index();
        $this->view("taikhoan/index", ["list" => $model], ["title" => "Quản lý tài khoản", ["link" => "taikhoan/index", "title" => "Tài khoản"]]);
    }

    public function capnhat()
    {
        if ($this->quyen() == NULL)
            header('Location: ' . DOMAIN);
        $model = $this->model("taiKhoanModel")->capnhat();
        $loaitaikhoan = $this->model("taiKhoanModel")->loaitaikhoan();
        $this->view("taikhoan/capnhat", ["taikhoan" => $model, "loaitaikhoan" => $loaitaikhoan], ["title" => "Quản lý tài khoản", ["link" => "taikhoan/index", "title" => "Tài khoản"]]);
    }
    public function dangnhap()
    {
        if (isset($_SESSION['taikhoan'])) {
            header("Location: " . DOMAIN);
        } else {
            $taiKhoanModel = $this->model("taiKhoanModel")->dangnhap();
            $this->view2("taikhoan/dangnhap", $taiKhoanModel);
        }
    }
    public function dangky()
    {
        if (isset($_SESSION['taikhoan'])) {
            header("Location: " . DOMAIN);
        } else {
            $taiKhoanModel = $this->model("taiKhoanModel")->dangky();
            $this->view2("taikhoan/dangky", $taiKhoanModel);
        }
    }
    public function dangxuat()
    {
        $this->model("taiKhoanModel")->dangxuat();
        header("Location: " . DOMAIN);
    }

    public function sua()
    {
        $this->model("taiKhoanModel")->sua();
    }
}
