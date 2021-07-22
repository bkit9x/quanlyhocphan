<?php
class dangnhap extends Controller
{
    public function index()
    {
        if (isset($_SESSION['user'])) {
            $config = $this->getConfig();
            header("Location: $config->domain");
        } else {
            $dangNhapModel = $this->model("dangNhapModel");
            $checkdangNhap = $dangNhapModel->dangNhap();
            $this->view2("dangnhap", $checkdangNhap);
        }
    }
}
