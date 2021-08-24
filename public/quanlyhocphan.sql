-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql
-- Thời gian đã tạo: Th8 19, 2021 lúc 03:20 PM
-- Phiên bản máy phục vụ: 5.6.51
-- Phiên bản PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlyhocphan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caytientrinh`
--

CREATE TABLE `caytientrinh` (
  `idcaytientrinh` int(11) NOT NULL,
  `tencaytientrinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenkhoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caytientrinh`
--

INSERT INTO `caytientrinh` (`idcaytientrinh`, `tencaytientrinh`, `tenkhoa`) VALUES
(2, 'Truyền thông & mạng máy tính', 'Công nghệ thông tin'),
(3, 'Kỹ thuật phần mềm', 'Công nghệ thông tin'),
(4, 'Khoa học máy tính', 'Công nghệ thông tin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caytientrinh_hocphan`
--

CREATE TABLE `caytientrinh_hocphan` (
  `idcaytientrinh` int(11) NOT NULL,
  `mahocphan` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caytientrinh_hocphan`
--

INSERT INTO `caytientrinh_hocphan` (`idcaytientrinh`, `mahocphan`) VALUES
(2, 'CB1106'),
(3, 'CB1106'),
(2, 'CB1107'),
(3, 'CB1107'),
(3, 'CB1108'),
(3, 'CB1109'),
(3, 'CB1110'),
(2, 'CB1111'),
(3, 'CB1111'),
(3, 'CB1112'),
(3, 'CT1101'),
(3, 'CT1102'),
(3, 'CT1103'),
(3, 'CT1104'),
(3, 'CT1105'),
(3, 'CT1106'),
(3, 'DT1229'),
(3, 'KT1001'),
(3, 'QP1101'),
(3, 'QP1102'),
(3, 'QP1103'),
(3, 'TC1101'),
(3, 'TC111M'),
(3, 'TC112M'),
(3, 'TH1201'),
(3, 'TH1203'),
(3, 'TH1205'),
(3, 'TH1206'),
(3, 'TH1207'),
(3, 'TH1208'),
(3, 'TH1209'),
(3, 'TH1210'),
(3, 'TH1211'),
(3, 'TH1212'),
(3, 'TH1214'),
(3, 'TH1215'),
(3, 'TH1216'),
(3, 'TH1217'),
(3, 'TH1219'),
(3, 'TH1305'),
(3, 'TH1307'),
(3, 'TH1309'),
(3, 'TH1314'),
(3, 'TH1316'),
(3, 'TH1324'),
(3, 'TH1333'),
(3, 'TH1334'),
(3, 'TH1335'),
(3, 'TH1336'),
(3, 'TH1337'),
(3, 'TH1338'),
(3, 'TH1339'),
(3, 'TH1340'),
(3, 'TH1341'),
(3, 'TH1342'),
(3, 'TH1354'),
(3, 'TH1507'),
(3, 'TH1508'),
(3, 'TH1509'),
(3, 'TH1518'),
(3, 'TH1601'),
(3, 'TH1602');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caytientrinh_sinhvien`
--

CREATE TABLE `caytientrinh_sinhvien` (
  `idsinhvien` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `idcaytientrinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caytientrinh_sinhvien`
--

INSERT INTO `caytientrinh_sinhvien` (`idsinhvien`, `idcaytientrinh`) VALUES
('taipt', 3),
('user0', 3),
('user1', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chunhiem`
--

CREATE TABLE `chunhiem` (
  `idsinhvien` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `idgiaovien` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chunhiem`
--

INSERT INTO `chunhiem` (`idsinhvien`, `idgiaovien`) VALUES
('user1', 'giaovien1'),
('taipt', 'hieunv'),
('user0', 'hieunv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `idhocphan` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `idsinhvien` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`idhocphan`, `idsinhvien`, `diem`) VALUES
('CB1106', 'taipt', 7.5),
('CB1106', 'user0', 8.5),
('CB1106', 'user1', 3),
('CB1107', 'taipt', 0),
('CB1107', 'user1', 9),
('CB1108', 'user1', 6.6),
('CB1110', 'taipt', 10),
('TH1341', 'taipt', 3),
('TH1602', 'taipt', 10),
('TH1602', 'user0', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `mahocphan` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `tenhocphan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `hocphantienquyet` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`mahocphan`, `tenhocphan`, `sotinchi`, `hocphantienquyet`) VALUES
('CB1106', 'Toán cao cấp A1', 3, NULL),
('CB1107', 'Toán cao cấp A2', 3, 'CB1106'),
('CB1108', 'Toán cao cấp A3', 3, 'CB1107'),
('CB1109', 'Xác suất thống kê', 3, 'CB1108'),
('CB1110', 'Toán kinh tế', 3, 'CB1109'),
('CB1111', 'Vật lý đại cương A1', 3, NULL),
('CB1112', 'Vật lý đại cương A2', 3, 'CB1111'),
('CT1101', 'Những nguyên lý cơ bản của Chủ nghĩa Mác-Lênin', 5, NULL),
('CT1102', 'Tư tưởng Hồ Chí Minh', 2, 'CT1101'),
('CT1103', 'Đường lối cách mạng của Đảng cộng sản Việt Nam', 3, 'CT1102'),
('CT1104', 'Pháp luật đại cương', 2, 'CT1101'),
('CT1105', 'Con người và môi trường', 2, 'CB1110'),
('CT1106', 'Quản lý HCNN và GDĐT', 2, 'CT1105'),
('DT1229', 'Kỹ thuật số', 3, NULL),
('KT1001', 'Khởi nghiệp', 1, 'CT1103'),
('QP1101', 'Đường lối quân sự của Đảng', 3, NULL),
('QP1102', 'Công tác quốc phòng - An ninh', 2, 'QP1101'),
('QP1103', 'Quân sự chung và chiến thuật KTBS tiểu liên AK', 3, 'QP1102'),
('TC1101', 'Giáo dục thể chất 1', 1, NULL),
('TC111M', 'Giáo dục thể chất 2', 1, 'TC1101'),
('TC112M', 'Giáo dục thể chất 3', 1, 'TC111M'),
('TH1201', 'Tin học cơ sở', 2, NULL),
('TH1203', 'Toán rời rạc', 2, NULL),
('TH1205', 'Cấu trúc máy tính', 3, 'DT1229'),
('TH1206', 'Cấu trúc dữ liệu và giải thuật', 3, 'TH1219'),
('TH1207', 'Cơ sở dữ liệu', 3, NULL),
('TH1208', 'Hệ điều hành', 3, 'TH1205'),
('TH1209', 'Lập trình hướng đối tượng', 3, 'TH1219'),
('TH1210', 'Đồ họa máy tính', 3, 'TH1209'),
('TH1211', 'Lý thuyết ngôn ngữ hình thức và tính toán', 2, 'TH1212'),
('TH1212', 'Phân tích và thiết kế thuật toán', 2, 'TH1206'),
('TH1214', 'Mạng máy tính', 3, 'TH1208'),
('TH1215', 'Truyền số liệu', 2, 'TH1214'),
('TH1216', 'Phần mềm mã nguồn mở', 2, 'TH1208'),
('TH1217', 'An toàn và vệ sinh lao động trong lĩnh vực công nghệ thông tin', 1, NULL),
('TH1219', 'Lập trình căn bản', 4, 'TH1201'),
('TH1305', 'Phân tích thiết kế hệ thống thông tin', 3, 'TH1307'),
('TH1307', 'Hệ quản trị cơ sở dữ liệu', 3, 'TH1207'),
('TH1309', 'Lập trình Java', 3, 'TH1209'),
('TH1314', 'Lập trình mạng', 3, 'TH1316'),
('TH1316', 'Thiết kế mạng máy tính', 3, 'TH1215'),
('TH1324', 'Phân tích thiết kế hướng đối tượng', 3, 'TH1219'),
('TH1333', 'Trí tuệ nhân tạo', 3, 'TH1212'),
('TH1334', 'Ngôn ngữ lập trình', 2, 'TH1211'),
('TH1335', 'Xử lý ảnh', 3, 'TH1209'),
('TH1336', 'Lập trình Web', 4, 'TH1337'),
('TH1337', 'Lập trình dotNET', 4, 'TH1305'),
('TH1338', 'Lập trình ứng dụng cho thiết bị di động', 4, 'TH1324'),
('TH1339', 'Quản trị mạng máy tính', 3, 'TH1316'),
('TH1340', 'Hệ thống phân tán', 3, 'TH1215'),
('TH1341', 'An toàn và an ninh thông tin', 3, 'TH1215'),
('TH1342', 'Công nghệ mạng không dây', 2, 'TH1316'),
('TH1354', 'Anh văn chuyên ngành', 2, NULL),
('TH1507', 'Đồ án CNTT 1', 1, NULL),
('TH1508', 'Đồ án CNTT 2', 1, 'TH1507'),
('TH1509', 'Đồ án CNTT 3', 1, 'TH1508'),
('TH1518', 'Tin học ứng dụng', 3, NULL),
('TH1601', 'Thực tập tốt nghiệp', 2, 'TH1508'),
('TH1602', 'Khóa luận tốt nghiệp', 10, 'TH1340');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `idloaitaikhoan` int(11) NOT NULL,
  `tenloaitaikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`idloaitaikhoan`, `tenloaitaikhoan`) VALUES
(1, 'Phòng đạo tạo'),
(2, 'Giáo viên'),
(3, 'Sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `taikhoan` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'khóa chính',
  `matkhau` char(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'mật khẩu mã hóa md5',
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Họ tên tài khoản',
  `loaitaikhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`taikhoan`, `matkhau`, `hoten`, `loaitaikhoan`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Trưởng phòng', 1),
('giaovien1', 'e10adc3949ba59abbe56e057f20f883e', 'Giáo viên 1', 2),
('hieunv', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Hiếu', 2),
('taipt', 'b59c67bf196a4758191e42f76670ceba', 'Phan Thành Tài', 3),
('user0', 'e10adc3949ba59abbe56e057f20f883e', 'Sinh viên A', 3),
('user1', 'e10adc3949ba59abbe56e057f20f883e', 'Sinh viên B', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `caytientrinh`
--
ALTER TABLE `caytientrinh`
  ADD PRIMARY KEY (`idcaytientrinh`);

--
-- Chỉ mục cho bảng `caytientrinh_hocphan`
--
ALTER TABLE `caytientrinh_hocphan`
  ADD PRIMARY KEY (`idcaytientrinh`,`mahocphan`),
  ADD KEY `fk_hocphan` (`mahocphan`);

--
-- Chỉ mục cho bảng `caytientrinh_sinhvien`
--
ALTER TABLE `caytientrinh_sinhvien`
  ADD PRIMARY KEY (`idsinhvien`,`idcaytientrinh`),
  ADD KEY `fk_caytientrinh_sinhvien` (`idcaytientrinh`);

--
-- Chỉ mục cho bảng `chunhiem`
--
ALTER TABLE `chunhiem`
  ADD PRIMARY KEY (`idsinhvien`,`idgiaovien`),
  ADD KEY `fk_chunhiem_giaovien` (`idgiaovien`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`idhocphan`,`idsinhvien`),
  ADD KEY `fk_diem_sinhvien` (`idsinhvien`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`mahocphan`),
  ADD KEY `fk_hocphan_hocphan` (`hocphantienquyet`);

--
-- Chỉ mục cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`idloaitaikhoan`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`taikhoan`),
  ADD KEY `fk_taikhoan_loaitaikhoan` (`loaitaikhoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `caytientrinh`
--
ALTER TABLE `caytientrinh`
  MODIFY `idcaytientrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `idloaitaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `caytientrinh_hocphan`
--
ALTER TABLE `caytientrinh_hocphan`
  ADD CONSTRAINT `fk_caytientrinh` FOREIGN KEY (`idcaytientrinh`) REFERENCES `caytientrinh` (`idcaytientrinh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hocphan` FOREIGN KEY (`mahocphan`) REFERENCES `hocphan` (`mahocphan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `caytientrinh_sinhvien`
--
ALTER TABLE `caytientrinh_sinhvien`
  ADD CONSTRAINT `fk_caytientrinh_sinhvien` FOREIGN KEY (`idcaytientrinh`) REFERENCES `caytientrinh` (`idcaytientrinh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chunhiem`
--
ALTER TABLE `chunhiem`
  ADD CONSTRAINT `fk_chunhiem_giaovien` FOREIGN KEY (`idgiaovien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chunhiem_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `fk_diem_hocphan` FOREIGN KEY (`idhocphan`) REFERENCES `hocphan` (`mahocphan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_diem_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD CONSTRAINT `fk_hocphan_hocphan` FOREIGN KEY (`hocphantienquyet`) REFERENCES `hocphan` (`mahocphan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_loaitaikhoan` FOREIGN KEY (`loaitaikhoan`) REFERENCES `loaitaikhoan` (`idloaitaikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
