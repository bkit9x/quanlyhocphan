<?php
class diem extends Controller
{
    public function __construct()
    {
        if ($this->quyen() != '2' && $this->quyen() != '3')
            header('Location: ' . DOMAIN);
    }
    public function index()
    {
        $model = $this->model("diemModel")->index();
        $this->view("diem/index", ["list" => $model], ["title" => "Quản lý điểm", ["link" => "diem/index", "title" => "QL điểm"]]);
    }
    public function chonhocky()
    {
        $model = $this->model("diemModel")->chonhocky();
        $this->view("diem/chonhocky", ["list" => $model], ["title" => "Chọn học kỳ", ["link" => "diem/chonhocky", "title" => "Chọn học kỳ"]]);
    }

    public function sua()
    {
        $this->model("diemModel")->sua();
    }
    public function nhap()
    {
        $this->model("diemModel")->nhap();
    }
}
