<?php
class trangchu extends Controller
{
    public function index()
    {
        $this->kiemTraDangNhap();
        $this->view("trangchu/index");
    }
}
