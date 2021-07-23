<?php


class sinhvien extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("sinhVienModel")->index();
        $danhsachsinhvien = $this->model("sinhVienModel")->danhsachsinhvien();
        $danhsachgiaovien = $this->model("sinhVienModel")->danhsachgiaovien();
        $this->view("sinhvien/index", ["list"=>$model, "sinhvien"=>$danhsachsinhvien, "giaovien" => $danhsachgiaovien], ["title" => "Quản lý sinh viên", ["link"=>"index.php?url=sinhvien/index", "title"=>"Sinh viên"]]);
    }

    public function them() {
        $this->model("sinhVienModel")->them();
    }
    public function xoa() {
        $this->model("sinhVienModel")->xoa();
    }

}