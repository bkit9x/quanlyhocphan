<?php
class hocky extends Controller
{
    public function __construct()
    {
        if ($this->quyen() != '1')
            header('Location: ' . DOMAIN);
    }
    public function index()
    {
        $model = $this->model("hocKyModel")->index();
        $this->view("hocky/index", ["list" => $model], ["title" => "Học kỳ", ["link" => "index/index", "title" => "Học kỳ"]]);
    }
    public function them()
    {
        $model = $this->model("hocKyModel")->them();
        $this->view("hocky/them", ["list" => $model], ["title" => "Thêm học kỳ", ["link" => "them/them", "title" => "Thêm học kỳ"]]);
    }
    public function sua()
    {
        $model = $this->model("hocKyModel")->sua();
        $this->view("hocky/sua", ["list" => $model], ["title" => "Sửa học kỳ", ["link" => "sua/sua", "title" => "Sửa học kỳ"]]);
    }
    public function xoa()
    {
        $model = $this->model("hocKyModel")->xoa();
        $this->view("hocky/xoa", ["list" => $model], ["title" => "Xóa học kỳ", ["link" => "xoa/xoa", "title" => "Xóa học kỳ"]]);
    }
}
