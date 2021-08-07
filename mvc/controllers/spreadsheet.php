<?php
class spreadsheet extends Controller
{
    public function __construct()
    {
        if ($this->quyen() != '2')
            header('Location: ' . DOMAIN);
    }
    public function index()
    {
        $this->view("spreadsheet/index", [], ["title" => "Nhập điểm", ["link" => "spreadsheet/index", "title" => "QL điểm"]]);
    }

    public function sua()
    {
        $this->model("spreadSheetModel")->sua();
    }
    public function nhap()
    {
        $this->model("spreadSheetModel")->nhap();
    }
}
