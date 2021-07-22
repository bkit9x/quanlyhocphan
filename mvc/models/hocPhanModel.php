<?php
class hocPhanModel extends DB
{
    public function index() {
        return $this->query("SELECT `mahocphan`, `tenhocphan`, `sotinchi`, `hocphantienquyet` as mahocphantienquyet FROM `hocphan`;");
    }
//INSERT INTO `hocphan` (`mahocphan`, `tenhocphan`, `sotinchi`, `hocphantienquyet`) VALUES ('CB1106', 'Toán cao cấp A1', '3', NULL), ('CB1111', 'Vật lý đại cương A1', '3', NULL);
}