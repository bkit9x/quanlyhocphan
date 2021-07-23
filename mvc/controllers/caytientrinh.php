<?php


class caytientrinh extends Controller
{
    public function __construct(){
        if($this->quyen() != 1)
            header('Location: '. DOMAIN);
    }
    public function index() {
        $model = $this->model("cayTienTrinhModel")->index();
        $this->view("caytientrinh/index", ["list"=>$model], ["title" => "Quản lý cây tiến trình", ["link"=>"index.php?url=caytientrinh/index", "title"=>"Cây tiến trình"]]);
    }

    public function them() {
        $this->model("cayTienTrinhModel")->them();
    }

    public function sua() {
        $this->model("cayTienTrinhModel")->sua();
    }
    public function xoa() {
        $this->model("cayTienTrinhModel")->xoa();
    }

}