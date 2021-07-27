<?php
class trangChuModel extends DB
{
    public function index(){
        $arr = array();
        if($_SESSION['idloaitaikhoan'] == '1'){
            $arr[] = array(
                "bg"=>"bg-aqua",
                "text1"=>"Quản lý",
                "text2"=>"Học phần",
                "icon"=>"fa fa-mortar-board",
                "link"=>"./index.php?url=hocphan/index"
            );            
            $arr[] = array(
                "bg"=>"bg-green",
                "text1"=>"Quản lý",
                "text2"=>"Cây tiến trình",
                "icon"=>"fa fa-code-fork",
                "link"=>"./index.php?url=caytientrinh/index"
            );            
            $arr[] = array(
                "bg"=>"bg-yellow",
                "text1"=>"Quản lý",
                "text2"=>"Chủ nhiệm",
                "icon"=>"fa fa-user",
                "link"=>"./index.php?url=chunhiem/index"
            );            
            $arr[] = array(
                "bg"=>"bg-red",
                "text1"=>"Quản lý",
                "text2"=>"Tài khoản",
                "icon"=>"fa fa-shield",
                "link"=>"./index.php?url=taikhoan/index"
            );            
        }
        elseif($_SESSION['idloaitaikhoan'] == '2'){
            $arr[] = array(
                "bg"=>"bg-aqua",
                "text1"=>"Quản lý",
                "text2"=>"Sinh viên",
                "icon"=>"fa fa-user",
                "link"=>"./index.php?url=sinhvien/index"
            );            
            $arr[] = array(
                "bg"=>"bg-green",
                "text1"=>"Xem",
                "text2"=>"Thống kê",
                "icon"=>"fa fa-pie-chart",
                "link"=>"./index.php?url=thongke/index"
            );            
         
            $arr[] = array(
                "bg"=>"bg-red",
                "text1"=>"Quản lý",
                "text2"=>"Tài khoản",
                "icon"=>"fa fa-shield",
                "link"=>"./index.php?url=taikhoan/capnhat"
            );            
        
        }
        else{
            $arr[] = array(
                "bg"=>"bg-aqua",
                "text1"=>"Thống kê",
                "text2"=>"Tổng quát",
                "icon"=>"fa fa-dashboard",
                "link"=>"./index.php?url=thongke/tongquat"
            );            
            $arr[] = array(
                "bg"=>"bg-green",
                "text1"=>"Học phần",
                "text2"=>"Chưa học",
                "icon"=>"fa fa-calendar-o",
                "link"=>"./index.php?url=thongke/chuahoc"
            );            
            $arr[] = array(
                "bg"=>"bg-yellow",
                "text1"=>"Học phần",
                "text2"=>"Đã học",
                "icon"=>"fa fa-calendar-check-o",
                "link"=>"./index.php?url=thongke/dahoc"
            );            
            $arr[] = array(
                "bg"=>"bg-blue",
                "text1"=>"Học phần",
                "text2"=>"Chưa đạt",
                "icon"=>"fa fa-calendar-times-o",
                "link"=>"./index.php?url=thongke/chuadat"
            );            
            $arr[] = array(
                "bg"=>"bg-red",
                "text1"=>"Quản lý",
                "text2"=>"Tài khoản",
                "icon"=>"fa fa-shield",
                "link"=>"./index.php?url=taikhoan/capnhat"
            );            
        }
        return $arr;
    }
}
