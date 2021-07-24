<?php

//tạo lơp học
class diem extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("diemModel")->index();
        $this->view("diem/index", ["list"=>$model], ["title" => "Quản lý điểm", ["link"=>"index.php?url=diem/index", "title"=>"QL điểm"]]);
    }

    public function sua() {
        $this->model("diemModel")->sua();
    }
}