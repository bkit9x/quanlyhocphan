<?php
class diem extends Controller
{
    public function __construct()
    {
        if ($this->quyen() != '2' || !isset($_GET['sv']))
            header('Location: ' . DOMAIN);
    }
    public function index()
    {
        $model = $this->model("diemModel")->index();
        $this->view("diem/index", ["list" => $model], ["title" => "Quản lý điểm", ["link" => "diem/index", "title" => "QL điểm"]]);
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
