<?php


class sinhvien extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("sinhVienModel")->index();
        $caytientrinh = $this->model("sinhVienModel")->danhsachcaytientrinh();
        $this->view("sinhvien/index", ["list"=>$model, "caytientrinh" => $caytientrinh], ["title" => "Quản lý sinh viên", ["link"=>"index.php?url=sinhvien/index", "title"=>"Sinh viên"]]);
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