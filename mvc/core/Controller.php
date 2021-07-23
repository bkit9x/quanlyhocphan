<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[], $breadcrumb = [])
    {
        require_once "./mvc/views/pages/header.php";
        require_once "./mvc/views/".$view.".php";
        require_once "./mvc/views/pages/footer.php";
    }

    public function view2($view, $data=[], $breadcrumb = [])
    {
        require_once "./mvc/views/pages/header2.php";
        require_once "./mvc/views/".$view.".php";
        require_once "./mvc/views/pages/footer2.php";
    }

    public function view3($view, $data=[])
    {
        require_once "./mvc/views/".$view.".php";
    }

    public function kiemTraDangNhap(){
        if (!isset($_SESSION['taikhoan'])){
            header("Location: ". DOMAIN."index.php?url=taikhoan/dangnhap");
        }
    }
    public function quyen(){
        if (isset($_SESSION['idloaitaikhoan']))
            return $_SESSION['idloaitaikhoan'];
        else
            return NULL;
    }
}
