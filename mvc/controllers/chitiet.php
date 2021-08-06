<?php
class chitiet extends Controller
{
    public function __construct()
    {
        if ($this->quyen() != 1)
            header('Location: ' . DOMAIN);
    }
    public function index()
    {
        $model = $this->model("chiTietModel")->index();
        $danhsachhocphan = $this->model("chiTietModel")->danhsachhocphan();
        $this->view("chitiet/index", ["list" => $model, "hocphan" => $danhsachhocphan], ["title" => "Cây tiến trình " . $this->model("chiTietModel")->tencaytientrinh(), ["link" => "caytientrinh/index", "title" => "Cây tiến trình"]]);
    }

    public function them()
    {
        $this->model("chiTietModel")->them();
    }

    public function xoa()
    {
        $this->model("chiTietModel")->xoa();
    }
}
