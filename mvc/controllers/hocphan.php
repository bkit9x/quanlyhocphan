<?php


class hocphan extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("hocPhanModel")->index();
        $this->view("hocphan/index", ["list"=>$model], ["title" => "Quản lý học phần", ["link"=>"index.php?url=hocphan/index", "title"=>"Học phần"]]);
    }
    public function them() {
        $model = $this->model("hocPhanModel")->them();
        $this->view("hocphan/them", $model);
    }
    public function sua() {

        $model = $this->model("hocPhanModel")->index();
        $this->view("hocphan/index", $model);
    }
    public function xoa() {

        $model = $this->model("hocPhanModel")->index();
        $this->view("hocphan/index", $model);
    }

}