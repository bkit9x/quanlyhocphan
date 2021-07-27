<?php


class chunhiem extends Controller
{
    public function __construct(){
        if($this->quyen() != '1')
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("chuNhiemModel")->index();
        $danhsachsinhvien = $this->model("chuNhiemModel")->danhsachsinhvien();
        $danhsachgiaovien = $this->model("chuNhiemModel")->danhsachgiaovien();
        $this->view("chunhiem/index", ["list"=>$model, "sinhvien"=>$danhsachsinhvien, "giaovien" => $danhsachgiaovien], ["title" => "Quản lý chủ nhiệm", ["link"=>"index.php?url=chunhiem/index", "title"=>"Chủ nhiệm"]]);
    }

    public function them() {
        $this->model("chuNhiemModel")->them();
    }
    public function xoa() {
        $this->model("chuNhiemModel")->xoa();
    }

}