<?php
class thongKeModel extends DB
{
    public function tongquat()
    {
        $_GET['sv'] = isset($_GET['sv']) ? $_GET['sv'] : $_SESSION['taikhoan'];
        $sinhvien = addslashes($_GET['sv']);

        $arr = array();


        $arr['chuahoc']['mon'] = 0;
        $arr['chuahoc']['tinchi'] = 0;
        $query_chuahoc = $this->query("SELECT COUNT(*) as `count`, SUM(`hocphan`.`sotinchi`) as `sum` FROM `hocphan`, `hocphantrongcaytientrinh`, `caytientrinhsinhvien` WHERE `hocphantrongcaytientrinh`.`mahocphan` = `hocphan`.`mahocphan` AND `hocphantrongcaytientrinh`.`idcaytientrinh` = `caytientrinhsinhvien`.`idcaytientrinh` AND `caytientrinhsinhvien`.`idsinhvien`='$sinhvien' AND `hocphan`.`mahocphan` NOT IN(SELECT `idhocphan` FROM `dangkyhocphan` WHERE `idsinhvien`='$sinhvien');");
        if ($query_chuahoc && $query_chuahoc->num_rows > 0) {
            $row = $query_chuahoc->fetch_assoc();
            $arr['chuahoc']['mon'] = $row['count'];
            $arr['chuahoc']['tinchi'] = $row['sum'];
        }

        $arr['dahoc']['mon'] = 0;
        $arr['dahoc']['tinchi'] = 0;
        $query_dahoc = $this->query("SELECT COUNT(*) as `count`, SUM(`hocphan`.`sotinchi`) as `sum` FROM `hocphan`, `diem` WHERE `diem`.`idhocphan` = `hocphan`.`mahocphan` AND `diem`.`idsinhvien`='$sinhvien';");
        if ($query_dahoc && $query_dahoc->num_rows > 0) {
            $row = $query_dahoc->fetch_assoc();
            $arr['dahoc']['mon'] = $row['count'];
            $arr['dahoc']['tinchi'] = $row['sum'];
        }


        $arr['chuadat']['mon'] = 0;
        $arr['chuadat']['tinchi'] = 0;
        $query_chuadat = $this->query("SELECT COUNT(*) as `count`, SUM(`hocphan`.`sotinchi`) as `sum` FROM `hocphan`, `diem` WHERE `diem`.`idhocphan` = `hocphan`.`mahocphan` AND `diem`.`diem` < 1 AND `diem`.`idsinhvien`='$sinhvien';");
        if ($query_chuadat && $query_chuadat->num_rows > 0) {
            $row = $query_chuadat->fetch_assoc();
            $arr['chuadat']['mon'] = $row['count'];
            $arr['chuadat']['tinchi'] = $row['sum'] ?: 0;
        }

        $query_diem = $this->query("SELECT `diem`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi` FROM `diem`, `hocphan` WHERE `diem`.`idhocphan` = `hocphan`.`mahocphan` AND `diem`.`idsinhvien` = '$sinhvien';");
        $arr['diem'] = [];
        if ($query_diem && $query_diem->num_rows > 0)
            while ($row = $query_diem->fetch_assoc())
                $arr['diem'][] = ['hocphan' => $row['tenhocphan'], 'diem' => $row['diem'], 'tinchi' => $row['sotinchi']];

        return $arr;
    }
    public function chuahoc()
    {
        $_GET['sv'] = isset($_GET['sv']) ? $_GET['sv'] : $_SESSION['taikhoan'];
        $sinhvien = addslashes($_GET['sv']);
        $arr = array();
        $result = $this->query("SELECT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi`, `hocphan`.`hocphantienquyet` as `mahocphantienquyet` FROM `hocphan`, `hocphantrongcaytientrinh`, `caytientrinhsinhvien` WHERE `hocphantrongcaytientrinh`.`mahocphan` = `hocphan`.`mahocphan` AND `hocphantrongcaytientrinh`.`idcaytientrinh` = `caytientrinhsinhvien`.`idcaytientrinh` AND `caytientrinhsinhvien`.`idsinhvien`='$sinhvien' AND `hocphan`.`mahocphan` NOT IN(SELECT `idhocphan` FROM `dangkyhocphan` WHERE `idsinhvien`='$sinhvien');");
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if ($row['mahocphantienquyet'] != NULL) {
                    $hocphantienquyet = $this->query("SELECT `tenhocphan` FROM `hocphan` WHERE `mahocphan` = '" . $row['mahocphantienquyet'] . "';");
                    if ($hocphantienquyet && $hocphantienquyet->num_rows > 0) {
                        $row['tenhocphantienquyet'] = $hocphantienquyet->fetch_assoc()['tenhocphan'];
                    }
                } else
                    $row['tenhocphantienquyet'] = NULL;

                $arr[] = $row;
            }
        }
        return $arr;
    }
    public function dahoc()
    {
        $_GET['sv'] = isset($_GET['sv']) ? $_GET['sv'] : $_SESSION['taikhoan'];
        $sinhvien = addslashes($_GET['sv']);
        $arr = array();
        $result = $this->query("SELECT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi`, `diem`.`diem` FROM `hocphan`, `diem` WHERE `diem`.`idhocphan` = `hocphan`.`mahocphan` AND `diem`.`idsinhvien`='$sinhvien';");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }
    public function chuadat()
    {
        $_GET['sv'] = isset($_GET['sv']) ? $_GET['sv'] : $_SESSION['taikhoan'];
        $sinhvien = addslashes($_GET['sv']);
        $arr = array();
        $result = $this->query("SELECT `hocphan`.`mahocphan`, `hocphan`.`tenhocphan`, `hocphan`.`sotinchi`, `diem`.`diem` FROM `hocphan`, `diem` WHERE `diem`.`idhocphan` = `hocphan`.`mahocphan` AND `diem`.`diem` < 1 AND `diem`.`idsinhvien`='$sinhvien';");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }

    public function index()
    {
        $taikhoangv = $_SESSION['taikhoan'];
        $arr = array();
        $result = $this->query("SELECT `sv`.`hoten` as `sinhvien`, `sv`.`taikhoan` as `idsinhvien` FROM `chunhiem`, `taikhoan` as `sv`, `taikhoan` as `gv` WHERE `chunhiem`.`idsinhvien` = `sv`.`taikhoan` AND `chunhiem`.`idgiaovien` = `gv`.`taikhoan` AND `gv`.`taikhoan`='$taikhoangv'");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc()) {
                $query = $this->query("SELECT `ctt`.`idcaytientrinh`, `ctt`.`tencaytientrinh`, `ctt`.`tenkhoa` FROM `taikhoan` as `sv`, `caytientrinh` as `ctt`, `caytientrinhsinhvien` as `cttsv` WHERE `cttsv`.`idcaytientrinh` = `ctt`.`idcaytientrinh` AND `cttsv`.`idsinhvien` ='" . $row['idsinhvien'] . "'");
                if ($query && $query->num_rows > 0) {
                    $tmp = $query->fetch_assoc();
                    $row['idcaytientrinh'] = $tmp['idcaytientrinh'];
                    $row['tencaytientrinh'] = $tmp['tencaytientrinh'];
                    $row['tenkhoa'] = $tmp['tenkhoa'];
                } else {
                    $row['idcaytientrinh'] = NULL;
                    $row['tencaytientrinh'] = NULL;
                    $row['tenkhoa'] = NULL;
                }
                $arr[] = $row;
            }
        return $arr;
    }
    public function danhsachcaytientrinh()
    {
        $arr = array();
        $result = $this->query("SELECT `idcaytientrinh`, `tencaytientrinh`, `tenkhoa` FROM `caytientrinh` WHERE 1");
        if ($result && $result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                $arr[] = $row;
        return $arr;
    }
    public function thongtintaikhoan()
    {
        $_GET['sv'] = isset($_GET['sv']) ? $_GET['sv'] : $_SESSION['taikhoan'];
        $taikhoan = addslashes($_GET['sv']);
        $result = $this->query("SELECT `hoten`,`taikhoan` FROM `taikhoan` WHERE `taikhoan`='$taikhoan'");
        if ($result && $result->num_rows > 0)
            return $result->fetch_assoc();
    }
}
