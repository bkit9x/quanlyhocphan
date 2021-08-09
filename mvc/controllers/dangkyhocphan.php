<?php
class dangkyhocphan extends Controller
{
    public function __construct()
    {
        if ($this->quyen() != '3')
            header('Location: ' . DOMAIN);
    }
    public function index()
    {
        $list = $this->model("dangKyHocPhanModel")->index();
        $dadangky = $this->model("dangKyHocPhanModel")->dadangky();
        $this->view("dangkyhocphan/index", ["list" => $list, "dadangky" => $dadangky], ["title" => "Đăng ký học phần", ["link" => "index/index", "title" => "Đăng ký học phần"]]);
    }
    public function chonhocky()
    {
        $model = $this->model("dangKyHocPhanModel")->chonhocky();
        $this->view("dangkyhocphan/chonhocky", ["list" => $model], ["title" => "Chọn học kỳ", ["link" => "chonhocky/chonhocky", "title" => "Chọn học kỳ"]]);
    }
    public function them()
    {
        $model = $this->model("dangKyHocPhanModel")->them();
    }
    public function xoa()
    {
        $model = $this->model("dangKyHocPhanModel")->xoa();
    }
}
