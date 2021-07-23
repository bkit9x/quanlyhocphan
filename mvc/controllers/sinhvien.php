<?php


class sinhvien extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("sinhVienModel")->index();
        $this->view("sinhvien/index", ["list"=>$model], ["title" => "Quản lý học phần", ["link"=>"index.php?url=sinhvien/index", "title"=>"Học phần"]]);
    }

    public function them() {
        $this->model("sinhVienModel")->them();
    }

    public function sua() {
        $this->model("sinhVienModel")->sua();
    }
    public function xoa() {
        $this->model("sinhVienModel")->xoa();
    }

}