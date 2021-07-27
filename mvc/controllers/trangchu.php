<?php
class trangchu extends Controller
{
    public function __construct(){
        $this->kiemTraDangNhap();
    }
    public function index() {
        $model = $this->model("trangChuModel")->index();
        $this->view("trangchu/index", ["list"=>$model], ["title" => "Quản lý học phần"]);
    }

}
