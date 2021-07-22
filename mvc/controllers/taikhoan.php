<?php
class taikhoan extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            $config = $this->getConfig();
            header("Location: $config->domain");
        } else {
            $taiKhoanModel = $this->model("taiKhoanModel");
            $checkdangNhap = $taiKhoanModel->dangNhap();
            $this->view("taikhoan/index", $checkdangNhap);
        }
    }
    public function dangnhap()
    {
        if (isset($_SESSION['taikhoan'])) {
            header("Location: ".DOMAIN);
        } else {
            $taiKhoanModel = $this->model("taiKhoanModel")->dangnhap();
            $this->view2("taikhoan/dangnhap", $taiKhoanModel);
        }
    }
    public function dangky()
    {
        if (isset($_SESSION['taikhoan'])) {
            header("Location: ".DOMAIN);
        } else {
            $taiKhoanModel = $this->model("taiKhoanModel")->dangky();
            $this->view2("taikhoan/dangky", $taiKhoanModel);
        }
    }
    public function dangxuat()
    {
            $this->model("taiKhoanModel")->dangxuat();
            header("Location: ".DOMAIN);
    }
}
