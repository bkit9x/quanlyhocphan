<?php
class trangChuModel extends DB
{
    public function index()
    {
        $arr = array();
        //Phòng đào tạo
        if ($_SESSION['idloaitaikhoan'] == '1') {
            $arr[] = array(
                "bg" => "bg-aqua",
                "text1" => "Quản lý",
                "text2" => "Học phần",
                "icon" => "fa fa-mortar-board",
                "link" => "hocphan/index"
            );
            $arr[] = array(
                "bg" => "bg-green",
                "text1" => "Quản lý",
                "text2" => "Cây tiến trình",
                "icon" => "fa fa-code-fork",
                "link" => "caytientrinh/index"
            );
            $arr[] = array(
                "bg" => "bg-yellow",
                "text1" => "Quản lý",
                "text2" => "Chủ nhiệm",
                "icon" => "fa fa-user",
                "link" => "chunhiem/index"
            );
            $arr[] = array(
                "bg" => "bg-red",
                "text1" => "Quản lý",
                "text2" => "Tài khoản",
                "icon" => "fa fa-shield",
                "link" => "taikhoan/index"
            );
        }
        //Giáo viên
        elseif ($_SESSION['idloaitaikhoan'] == '2') {
            $arr[] = array(
                "bg" => "bg-aqua",
                "text1" => "Quản lý",
                "text2" => "Sinh viên",
                "icon" => "fa fa-user",
                "link" => "sinhvien/index"
            );

            $arr[] = array(
                "bg" => "bg-green",
                "text1" => "Xem",
                "text2" => "Thống kê",
                "icon" => "fa fa-pie-chart",
                "link" => "thongke/index"
            );

            $arr[] = array(
                "bg" => "bg-yellow",
                "text1" => "-",
                "text2" => "Nhập điểm",
                "icon" => "fa fa-file-excel-o",
                "link" => "spreadsheet/index"
            );

            $arr[] = array(
                "bg" => "bg-red",
                "text1" => "Quản lý",
                "text2" => "Tài khoản",
                "icon" => "fa fa-shield",
                "link" => "taikhoan/capnhat"
            );
        }
        //Sinh viên
        else {
            $arr[] = array(
                "bg" => "bg-purple",
                "text1" => "Đăng ký",
                "text2" => "Học phần",
                "icon" => "fa fa-mortar-board",
                "link" => "dangkyhocphan/chonhocky"
            );
            $arr[] = array(
                "bg" => "bg-aqua",
                "text1" => "Thống kê",
                "text2" => "Tổng quát",
                "icon" => "fa fa-dashboard",
                "link" => "thongke/tongquat"
            );
            // $arr[] = array(
            //     "bg" => "bg-green",
            //     "text1" => "Học phần",
            //     "text2" => "Chưa học",
            //     "icon" => "fa fa-calendar-o",
            //     "link" => "thongke/chuahoc"
            // );
            $arr[] = array(
                "bg" => "bg-green",
                "text1" => "Học phần",
                "text2" => "Đã học",
                "icon" => "fa fa-calendar-check-o",
                "link" => "thongke/dahoc"
            );
            $arr[] = array(
                "bg" => "bg-yellow",
                "text1" => "Học phần",
                "text2" => "Chưa đạt",
                "icon" => "fa fa-calendar-times-o",
                "link" => "thongke/chuadat"
            );
            $arr[] = array(
                "bg" => "bg-red",
                "text1" => "Quản lý",
                "text2" => "Tài khoản",
                "icon" => "fa fa-shield",
                "link" => "taikhoan/capnhat"
            );
        }
        return $arr;
    }
}
