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
        $this->model("hocPhanModel")->them();
    }

    public function sua() {
        $this->model("hocPhanModel")->sua();
    }
    public function xoa() {
        $this->model("hocPhanModel")->xoa();
    }

}