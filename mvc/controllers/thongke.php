<?php


class thongke extends Controller
{
    public function __construct(){
        if($this->quyen() != '2' && $this->quyen() != '3')
            header('Location: '. DOMAIN);
    }

    public function index() {
        if($this->quyen() != '2')
            header('Location: '. DOMAIN);
        $model = $this->model("thongKeModel")->index();
        $caytientrinh = $this->model("thongKeModel")->danhsachcaytientrinh();
        $this->view("thongke/index", ["list"=>$model, "caytientrinh" => $caytientrinh], ["title" => "Thống kê sinh viên", ["link"=>"index.php?url=thongke/index", "title"=>"Thống kê"]]);
    }

    public function tongquat() {
        $model = $this->model("thongKeModel")->tongquat();
        $this->view("thongke/tongquat", ["list"=>$model], ["title" => "Thống kê tổng quát", ["link"=>"index.php?url=thongke/index", "title"=>"Thống kê"]]);
    }
    
    
    public function chuahoc() {
        $model = $this->model("thongKeModel")->chuahoc();
        $this->view("thongke/chuahoc", ["list"=>$model], ["title" => "Thống kê học phần chưa học", ["link"=>"index.php?url=thongke/chuahoc", "title"=>"Học phần"]]);
    }

    public function dahoc() {
        $model = $this->model("thongKeModel")->dahoc();
        $this->view("thongke/dahoc", ["list"=>$model], ["title" => "Thống kê học phần đã học", ["link"=>"index.php?url=thongke/index", "title"=>"Học phần"]]);
    }

    public function chuadat() {
        $model = $this->model("thongKeModel")->chuadat();
        $this->view("thongke/chuadat", ["list"=>$model], ["title" => "Thống kê học phần chưa đạt", ["link"=>"index.php?url=thongke/chuadat", "title"=>"Học phần"]]);
    }
}