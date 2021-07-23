<?php


class diem extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("diemModel")->index();
        $danhsachdiem = $this->model("diemModel")->danhsachdiem();
        $danhsachgiaovien = $this->model("diemModel")->danhsachgiaovien();
        $this->view("diem/index", ["list"=>$model, "diem"=>$danhsachdiem, "giaovien" => $danhsachgiaovien], ["title" => "Quản lý sinh viên", ["link"=>"index.php?url=diem/index", "title"=>"Sinh viên"]]);
    }

    public function them() {
        $this->model("diemModel")->them();
    }

    public function sua() {
        $this->model("diemModel")->sua();
    }
    public function xoa() {
        $this->model("diemModel")->xoa();
    }

}