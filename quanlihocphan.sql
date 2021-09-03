-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql
-- Thời gian đã tạo: Th8 24, 2021 lúc 08:25 AM
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
-- Cơ sở dữ liệu: `quanlihocphan`
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
(4, 'Khoa học máy tính', 'Công nghệ thông tin'),
(5, 'Kỹ thuật phần mềm', 'Công nghệ thông tin'),
(6, 'Sư phạm', 'Sư phạm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caytientrinhsinhvien`
--

CREATE TABLE `caytientrinhsinhvien` (
  `idsinhvien` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `idcaytientrinh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `caytientrinhsinhvien`
--

INSERT INTO `caytientrinhsinhvien` (`idsinhvien`, `idcaytientrinh`) VALUES
('17004009', 2),
('17004019', 2),
('17004022', 2),
('17004025', 2),
('17004027', 2),
('17004028', 2),
('17004035', 2),
('17004036', 2),
('17004037', 2),
('17004038', 2),
('17004046', 2),
('17004047', 2),
('17004050', 2),
('17004052', 2),
('17004055', 2),
('17004056', 2),
('17004057', 2),
('17004058', 2),
('17004062', 2),
('17004064', 2),
('17004067', 2),
('17004071', 2),
('17004073', 2),
('17004076', 2),
('17004082', 2),
('17004083', 2),
('17004086', 2),
('17004089', 2),
('17004093', 2),
('17004094', 2),
('17004096', 2),
('17004100', 2),
('17004103', 2),
('17004110', 2),
('17004116', 2),
('17004119', 2),
('17004001', 5),
('17004004', 5),
('17004015', 5),
('17004016', 5),
('17004017', 5),
('17004018', 5),
('17004020', 5),
('17004021', 5),
('17004024', 5),
('17004030', 5),
('17004031', 5),
('17004033', 5),
('17004041', 5),
('17004043', 5),
('17004060', 5),
('17004061', 5),
('17004063', 5),
('17004068', 5),
('17004075', 5),
('17004078', 5),
('17004084', 5),
('17004085', 5),
('17004091', 5),
('17004092', 5),
('17004101', 5),
('17004102', 5),
('17004111', 5),
('17004112', 5),
('17004120', 5);

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
('17004001', 'giaovien1'),
('17004004', 'giaovien1'),
('17004009', 'giaovien1'),
('17004015', 'giaovien1'),
('17004016', 'giaovien1'),
('17004017', 'giaovien1'),
('17004018', 'giaovien1'),
('17004019', 'giaovien1'),
('17004020', 'giaovien1'),
('17004021', 'giaovien1'),
('17004022', 'giaovien1'),
('17004024', 'giaovien1'),
('17004025', 'giaovien1'),
('17004027', 'giaovien1'),
('17004028', 'giaovien1'),
('17004030', 'giaovien1'),
('17004031', 'giaovien1'),
('17004033', 'giaovien1'),
('17004035', 'giaovien1'),
('17004036', 'giaovien1'),
('17004037', 'giaovien1'),
('17004038', 'giaovien1'),
('17004041', 'giaovien1'),
('17004043', 'giaovien1'),
('17004046', 'giaovien1'),
('17004047', 'giaovien1'),
('17004050', 'giaovien1'),
('17004052', 'giaovien1'),
('17004055', 'giaovien1'),
('17004056', 'giaovien1'),
('17004057', 'giaovien1'),
('17004058', 'giaovien1'),
('17004060', 'giaovien1'),
('17004061', 'giaovien1'),
('17004062', 'giaovien1'),
('17004063', 'giaovien1'),
('17004064', 'giaovien1'),
('17004067', 'giaovien1'),
('17004068', 'giaovien1'),
('17004071', 'giaovien1'),
('17004073', 'giaovien1'),
('17004075', 'giaovien1'),
('17004076', 'giaovien1'),
('17004078', 'giaovien1'),
('17004082', 'giaovien1'),
('17004083', 'giaovien1'),
('17004084', 'giaovien1'),
('17004085', 'giaovien1'),
('17004086', 'giaovien1'),
('17004089', 'giaovien1'),
('17004091', 'giaovien1'),
('17004092', 'giaovien1'),
('17004093', 'giaovien1'),
('17004094', 'giaovien1'),
('17004096', 'giaovien1'),
('17004100', 'giaovien1'),
('17004101', 'giaovien1'),
('17004102', 'giaovien1'),
('17004103', 'giaovien1'),
('17004110', 'giaovien1'),
('17004111', 'giaovien1'),
('17004112', 'giaovien1'),
('17004116', 'giaovien1'),
('17004119', 'giaovien1'),
('17004120', 'giaovien1'),
('user1', 'giaovien1'),
('taipt', 'hieunv'),
('user0', 'hieunv');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangkyhocphan`
--

CREATE TABLE `dangkyhocphan` (
  `idsinhvien` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `idhocky` int(11) NOT NULL,
  `idhocphan` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `dangkyhocphan`
--

INSERT INTO `dangkyhocphan` (`idsinhvien`, `idhocky`, `idhocphan`) VALUES
('17004004 ', 1, 'TH1326'),
('17004004 ', 1, 'TH1606'),
('17004004 ', 1, 'TH1607'),
('17004004 ', 1, 'TH1608'),
('user0 ', 1, 'CB1106');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `idhocphan` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `idsinhvien` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `diem` float NOT NULL,
  `nguoinhap` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`idhocphan`, `idsinhvien`, `diem`, `nguoinhap`) VALUES
('CB1108', '17004037', 0, 'giaovien1'),
('CB1108', '17004116', 3, 'giaovien1'),
('CB1108', '17004119', 1.5, 'giaovien1'),
('CB1109', '17004025', 0, 'giaovien1'),
('CB1110', '17004086', 3, 'giaovien1'),
('CT1105', '17004037', 2, 'giaovien1'),
('CT1105', '17004038', 3, 'giaovien1'),
('CT1105', '17004041', 2, 'giaovien1'),
('CT1105', '17004078', 0, 'giaovien1'),
('CT1105', '17004083', 3.5, 'giaovien1'),
('CT1105', '17004093', 1.5, 'giaovien1'),
('CT1106', '17004001', 4, 'giaovien1'),
('CT1106', '17004004', 3.5, 'giaovien1'),
('CT1106', '17004019', 3, 'giaovien1'),
('CT1106', '17004020', 2.5, 'giaovien1'),
('CT1106', '17004021', 3.5, 'giaovien1'),
('CT1106', '17004022', 2, 'giaovien1'),
('CT1106', '17004025', 2.5, 'giaovien1'),
('CT1106', '17004028', 3, 'giaovien1'),
('CT1106', '17004030', 4, 'giaovien1'),
('CT1106', '17004031', 4, 'giaovien1'),
('CT1106', '17004033', 3.5, 'giaovien1'),
('CT1106', '17004035', 4, 'giaovien1'),
('CT1106', '17004036', 3.5, 'giaovien1'),
('CT1106', '17004038', 2.5, 'giaovien1'),
('CT1106', '17004041', 1.5, 'giaovien1'),
('CT1106', '17004043', 4, 'giaovien1'),
('CT1106', '17004047', 3, 'giaovien1'),
('CT1106', '17004052', 3, 'giaovien1'),
('CT1106', '17004055', 4, 'giaovien1'),
('CT1106', '17004056', 3.5, 'giaovien1'),
('CT1106', '17004062', 4, 'giaovien1'),
('CT1106', '17004063', 3, 'giaovien1'),
('CT1106', '17004064', 3, 'giaovien1'),
('CT1106', '17004067', 3, 'giaovien1'),
('CT1106', '17004068', 4, 'giaovien1'),
('CT1106', '17004073', 4, 'giaovien1'),
('CT1106', '17004075', 3.5, 'giaovien1'),
('CT1106', '17004078', 3, 'giaovien1'),
('CT1106', '17004082', 2, 'giaovien1'),
('CT1106', '17004083', 3.5, 'giaovien1'),
('CT1106', '17004084', 3.5, 'giaovien1'),
('CT1106', '17004085', 3.5, 'giaovien1'),
('CT1106', '17004089', 3.5, 'giaovien1'),
('CT1106', '17004091', 3.5, 'giaovien1'),
('CT1106', '17004093', 2, 'giaovien1'),
('CT1106', '17004094', 3, 'giaovien1'),
('CT1106', '17004100', 3.5, 'giaovien1'),
('CT1106', '17004102', 4, 'giaovien1'),
('CT1106', '17004110', 3, 'giaovien1'),
('CT1106', '17004112', 3.5, 'giaovien1'),
('CT1106', '17004116', 1.5, 'giaovien1'),
('CT1106', '17004120', 1.5, 'giaovien1'),
('KT1001', '17004041', 3, 'giaovien1'),
('KT1001', '17004078', 3.5, 'giaovien1'),
('KT1001', '17004082', 3, 'giaovien1'),
('KT1001', '17004084', 3, 'giaovien1'),
('KT1001', '17004085', 3, 'giaovien1'),
('KT1001', '17004091', 3, 'giaovien1'),
('KT1001', '17004093', 3, 'giaovien1'),
('KT1001', '17004101', 3, 'giaovien1'),
('KT1001', '17004116', 3, 'giaovien1'),
('KT1001', '17004119', 3.5, 'giaovien1'),
('SP1411', '17004062', 3.5, 'giaovien1'),
('SP1411', '17004102', 4, 'giaovien1'),
('SP1411', '17004112', 3, 'giaovien1'),
('SP1412', '17004058', 4, 'giaovien1'),
('SP1412', '17004102', 4, 'giaovien1'),
('SP1412', '17004112', 4, 'giaovien1'),
('SP1413', '17004102', 4, 'giaovien1'),
('SP1413', '17004112', 3.5, 'giaovien1'),
('SP1414', '17004031', 3, 'giaovien1'),
('SP1414', '17004062', 3, 'giaovien1'),
('SP1414', '17004100', 2.5, 'giaovien1'),
('SP1414', '17004102', 3.5, 'giaovien1'),
('SP1414', '17004112', 3.5, 'giaovien1'),
('SP1415', '17004102', 4, 'giaovien1'),
('SP1416', '17004031', 3, 'giaovien1'),
('SP1416', '17004058', 3, 'giaovien1'),
('SP1416', '17004062', 2.5, 'giaovien1'),
('SP1416', '17004100', 2.5, 'giaovien1'),
('SP1416', '17004102', 3, 'giaovien1'),
('SP1416', '17004112', 3, 'giaovien1'),
('SP1417', '17004058', 4, 'giaovien1'),
('TC112M', '17004025', 3, 'giaovien1'),
('TH1203', '17004119', 0, 'giaovien1'),
('TH1206', '17004083', 2.5, 'giaovien1'),
('TH1208', '17004001', 2, 'giaovien1'),
('TH1208', '17004009', 1, 'giaovien1'),
('TH1208', '17004020', 1, 'giaovien1'),
('TH1208', '17004062', 2, 'giaovien1'),
('TH1210', '17004050', 2.5, 'giaovien1'),
('TH1210', '17004086', 1.5, 'giaovien1'),
('TH1212', '17004009', 1, 'giaovien1'),
('TH1212', '17004035', 2.5, 'giaovien1'),
('TH1212', '17004038', 2, 'giaovien1'),
('TH1212', '17004041', 1.5, 'giaovien1'),
('TH1212', '17004052', 1, 'giaovien1'),
('TH1212', '17004061', 1.5, 'giaovien1'),
('TH1212', '17004063', 1, 'giaovien1'),
('TH1212', '17004078', 2, 'giaovien1'),
('TH1212', '17004083', 1.5, 'giaovien1'),
('TH1212', '17004086', 1, 'giaovien1'),
('TH1212', '17004116', 0, 'giaovien1'),
('TH1212', '17004119', 0, 'giaovien1'),
('TH1214', '17004050', 2, 'giaovien1'),
('TH1214', '17004052', 2.5, 'giaovien1'),
('TH1314', '17004019', 0, 'giaovien1'),
('TH1314', '17004022', 0, 'giaovien1'),
('TH1314', '17004025', 0, 'giaovien1'),
('TH1314', '17004027', 2, 'giaovien1'),
('TH1314', '17004028', 3, 'giaovien1'),
('TH1314', '17004035', 1.5, 'giaovien1'),
('TH1314', '17004036', 2, 'giaovien1'),
('TH1314', '17004037', 1.5, 'giaovien1'),
('TH1314', '17004038', 1, 'giaovien1'),
('TH1314', '17004046', 1.5, 'giaovien1'),
('TH1314', '17004047', 2, 'giaovien1'),
('TH1314', '17004050', 1, 'giaovien1'),
('TH1314', '17004056', 1.5, 'giaovien1'),
('TH1314', '17004057', 1, 'giaovien1'),
('TH1314', '17004061', 0, 'giaovien1'),
('TH1314', '17004063', 1, 'giaovien1'),
('TH1314', '17004064', 2, 'giaovien1'),
('TH1314', '17004067', 1, 'giaovien1'),
('TH1314', '17004071', 1.5, 'giaovien1'),
('TH1314', '17004073', 3.5, 'giaovien1'),
('TH1314', '17004076', 0, 'giaovien1'),
('TH1314', '17004082', 1.5, 'giaovien1'),
('TH1314', '17004083', 1.5, 'giaovien1'),
('TH1314', '17004086', 1, 'giaovien1'),
('TH1314', '17004089', 3, 'giaovien1'),
('TH1314', '17004093', 1.5, 'giaovien1'),
('TH1314', '17004094', 1.5, 'giaovien1'),
('TH1314', '17004100', 2.5, 'giaovien1'),
('TH1314', '17004103', 0, 'giaovien1'),
('TH1314', '17004110', 2.5, 'giaovien1'),
('TH1314', '17004116', 2.5, 'giaovien1'),
('TH1314', '17004119', 1, 'giaovien1'),
('TH1316', '17004009', 0, 'giaovien1'),
('TH1316', '17004019', 3, 'giaovien1'),
('TH1316', '17004022', 1.5, 'giaovien1'),
('TH1316', '17004025', 2.5, 'giaovien1'),
('TH1316', '17004027', 3, 'giaovien1'),
('TH1316', '17004028', 2.5, 'giaovien1'),
('TH1316', '17004035', 2, 'giaovien1'),
('TH1316', '17004036', 1.5, 'giaovien1'),
('TH1316', '17004038', 2, 'giaovien1'),
('TH1316', '17004046', 2, 'giaovien1'),
('TH1316', '17004047', 2.5, 'giaovien1'),
('TH1316', '17004050', 1, 'giaovien1'),
('TH1316', '17004056', 2.5, 'giaovien1'),
('TH1316', '17004057', 2, 'giaovien1'),
('TH1316', '17004063', 2, 'giaovien1'),
('TH1316', '17004064', 1.5, 'giaovien1'),
('TH1316', '17004067', 2.5, 'giaovien1'),
('TH1316', '17004071', 1.5, 'giaovien1'),
('TH1316', '17004073', 2.5, 'giaovien1'),
('TH1316', '17004076', 1.5, 'giaovien1'),
('TH1316', '17004082', 2, 'giaovien1'),
('TH1316', '17004083', 2.5, 'giaovien1'),
('TH1316', '17004086', 2, 'giaovien1'),
('TH1316', '17004089', 2, 'giaovien1'),
('TH1316', '17004093', 2, 'giaovien1'),
('TH1316', '17004094', 2, 'giaovien1'),
('TH1316', '17004100', 3.5, 'giaovien1'),
('TH1316', '17004103', 0, 'giaovien1'),
('TH1316', '17004110', 2.5, 'giaovien1'),
('TH1316', '17004116', 1.5, 'giaovien1'),
('TH1316', '17004119', 1, 'giaovien1'),
('TH1321', '17004001', 2.5, 'giaovien1'),
('TH1321', '17004004', 0, 'giaovien1'),
('TH1321', '17004015', 2.5, 'giaovien1'),
('TH1321', '17004016', 2.5, 'giaovien1'),
('TH1321', '17004017', 3.5, 'giaovien1'),
('TH1321', '17004018', 3, 'giaovien1'),
('TH1321', '17004020', 2.5, 'giaovien1'),
('TH1321', '17004021', 2.5, 'giaovien1'),
('TH1321', '17004024', 3, 'giaovien1'),
('TH1321', '17004030', 3, 'giaovien1'),
('TH1321', '17004031', 3, 'giaovien1'),
('TH1321', '17004033', 4, 'giaovien1'),
('TH1321', '17004041', 3, 'giaovien1'),
('TH1321', '17004043', 3, 'giaovien1'),
('TH1321', '17004055', 2.5, 'giaovien1'),
('TH1321', '17004058', 3, 'giaovien1'),
('TH1321', '17004060', 3, 'giaovien1'),
('TH1321', '17004062', 4, 'giaovien1'),
('TH1321', '17004068', 3, 'giaovien1'),
('TH1321', '17004075', 3.5, 'giaovien1'),
('TH1321', '17004078', 2.5, 'giaovien1'),
('TH1321', '17004084', 4, 'giaovien1'),
('TH1321', '17004085', 2.5, 'giaovien1'),
('TH1321', '17004091', 3, 'giaovien1'),
('TH1321', '17004092', 2.5, 'giaovien1'),
('TH1321', '17004096', 3, 'giaovien1'),
('TH1321', '17004101', 3.5, 'giaovien1'),
('TH1321', '17004102', 3.5, 'giaovien1'),
('TH1321', '17004111', 3, 'giaovien1'),
('TH1321', '17004112', 4, 'giaovien1'),
('TH1322', '17004001', 3.5, 'giaovien1'),
('TH1322', '17004004', 3, 'giaovien1'),
('TH1322', '17004015', 2.5, 'giaovien1'),
('TH1322', '17004016', 4, 'giaovien1'),
('TH1322', '17004017', 4, 'giaovien1'),
('TH1322', '17004018', 4, 'giaovien1'),
('TH1322', '17004020', 2.5, 'giaovien1'),
('TH1322', '17004021', 4, 'giaovien1'),
('TH1322', '17004024', 3.5, 'giaovien1'),
('TH1322', '17004030', 3.5, 'giaovien1'),
('TH1322', '17004031', 4, 'giaovien1'),
('TH1322', '17004033', 2.5, 'giaovien1'),
('TH1322', '17004041', 3, 'giaovien1'),
('TH1322', '17004043', 4, 'giaovien1'),
('TH1322', '17004052', 3, 'giaovien1'),
('TH1322', '17004055', 3.5, 'giaovien1'),
('TH1322', '17004058', 4, 'giaovien1'),
('TH1322', '17004060', 2.5, 'giaovien1'),
('TH1322', '17004062', 4, 'giaovien1'),
('TH1322', '17004068', 3, 'giaovien1'),
('TH1322', '17004075', 2.5, 'giaovien1'),
('TH1322', '17004078', 3.5, 'giaovien1'),
('TH1322', '17004084', 2, 'giaovien1'),
('TH1322', '17004085', 2, 'giaovien1'),
('TH1322', '17004091', 2, 'giaovien1'),
('TH1322', '17004092', 3.5, 'giaovien1'),
('TH1322', '17004096', 3, 'giaovien1'),
('TH1322', '17004101', 3, 'giaovien1'),
('TH1322', '17004102', 4, 'giaovien1'),
('TH1322', '17004111', 3.5, 'giaovien1'),
('TH1322', '17004112', 3.5, 'giaovien1'),
('TH1323', '17004001', 4, 'giaovien1'),
('TH1323', '17004004', 3.5, 'giaovien1'),
('TH1323', '17004015', 3, 'giaovien1'),
('TH1323', '17004016', 4, 'giaovien1'),
('TH1323', '17004017', 4, 'giaovien1'),
('TH1323', '17004018', 4, 'giaovien1'),
('TH1323', '17004020', 3.5, 'giaovien1'),
('TH1323', '17004021', 3.5, 'giaovien1'),
('TH1323', '17004024', 3.5, 'giaovien1'),
('TH1323', '17004030', 4, 'giaovien1'),
('TH1323', '17004031', 4, 'giaovien1'),
('TH1323', '17004033', 2, 'giaovien1'),
('TH1323', '17004041', 3.5, 'giaovien1'),
('TH1323', '17004043', 4, 'giaovien1'),
('TH1323', '17004052', 3, 'giaovien1'),
('TH1323', '17004055', 3, 'giaovien1'),
('TH1323', '17004058', 3.5, 'giaovien1'),
('TH1323', '17004060', 3, 'giaovien1'),
('TH1323', '17004062', 4, 'giaovien1'),
('TH1323', '17004068', 3.5, 'giaovien1'),
('TH1323', '17004075', 2, 'giaovien1'),
('TH1323', '17004078', 3, 'giaovien1'),
('TH1323', '17004084', 2.5, 'giaovien1'),
('TH1323', '17004085', 3, 'giaovien1'),
('TH1323', '17004091', 2.5, 'giaovien1'),
('TH1323', '17004092', 3.5, 'giaovien1'),
('TH1323', '17004096', 4, 'giaovien1'),
('TH1323', '17004101', 4, 'giaovien1'),
('TH1323', '17004102', 3, 'giaovien1'),
('TH1323', '17004111', 3.5, 'giaovien1'),
('TH1323', '17004112', 3, 'giaovien1'),
('TH1326', '17004001', 3.5, 'giaovien1'),
('TH1326', '17004004', 4, '17004004'),
('TH1326', '17004004', 3, 'giaovien1'),
('TH1326', '17004009', 0, 'giaovien1'),
('TH1326', '17004015', 2, 'giaovien1'),
('TH1326', '17004016', 4, 'giaovien1'),
('TH1326', '17004017', 3.5, 'giaovien1'),
('TH1326', '17004018', 4, 'giaovien1'),
('TH1326', '17004020', 3, 'giaovien1'),
('TH1326', '17004021', 3.5, 'giaovien1'),
('TH1326', '17004024', 3.5, 'giaovien1'),
('TH1326', '17004030', 3.5, 'giaovien1'),
('TH1326', '17004031', 3.5, 'giaovien1'),
('TH1326', '17004033', 3, 'giaovien1'),
('TH1326', '17004041', 3, 'giaovien1'),
('TH1326', '17004043', 3.5, 'giaovien1'),
('TH1326', '17004052', 3, 'giaovien1'),
('TH1326', '17004055', 3, 'giaovien1'),
('TH1326', '17004058', 3.5, 'giaovien1'),
('TH1326', '17004060', 3.5, 'giaovien1'),
('TH1326', '17004062', 4, 'giaovien1'),
('TH1326', '17004068', 3, 'giaovien1'),
('TH1326', '17004075', 3.5, 'giaovien1'),
('TH1326', '17004078', 3.5, 'giaovien1'),
('TH1326', '17004084', 3, 'giaovien1'),
('TH1326', '17004085', 2.5, 'giaovien1'),
('TH1326', '17004091', 3, 'giaovien1'),
('TH1326', '17004092', 3, 'giaovien1'),
('TH1326', '17004096', 4, 'giaovien1'),
('TH1326', '17004101', 3.5, 'giaovien1'),
('TH1326', '17004102', 4, 'giaovien1'),
('TH1326', '17004111', 4, 'giaovien1'),
('TH1326', '17004112', 4, 'giaovien1'),
('TH1326', '17004120', 3.5, 'giaovien1'),
('TH1333', '17004041', 3, 'giaovien1'),
('TH1333', '17004052', 3, 'giaovien1'),
('TH1333', '17004083', 2.5, 'giaovien1'),
('TH1333', '17004116', 2.5, 'giaovien1'),
('TH1337', '17004041', 2.5, 'giaovien1'),
('TH1338', '17004035', 2.5, 'giaovien1'),
('TH1338', '17004037', 1.5, 'giaovien1'),
('TH1338', '17004041', 4, 'giaovien1'),
('TH1338', '17004046', 2, 'giaovien1'),
('TH1338', '17004052', 2, 'giaovien1'),
('TH1338', '17004057', 2, 'giaovien1'),
('TH1338', '17004061', 1, 'giaovien1'),
('TH1338', '17004076', 1.5, 'giaovien1'),
('TH1338', '17004103', 1, 'giaovien1'),
('TH1339', '17004009', 1.5, 'giaovien1'),
('TH1339', '17004019', 2.5, 'giaovien1'),
('TH1339', '17004022', 0, 'giaovien1'),
('TH1339', '17004025', 2.5, 'giaovien1'),
('TH1339', '17004027', 2, 'giaovien1'),
('TH1339', '17004028', 3, 'giaovien1'),
('TH1339', '17004035', 2, 'giaovien1'),
('TH1339', '17004036', 1.5, 'giaovien1'),
('TH1339', '17004037', 1, 'giaovien1'),
('TH1339', '17004038', 2.5, 'giaovien1'),
('TH1339', '17004046', 1, 'giaovien1'),
('TH1339', '17004047', 2, 'giaovien1'),
('TH1339', '17004050', 1.5, 'giaovien1'),
('TH1339', '17004056', 2, 'giaovien1'),
('TH1339', '17004057', 1, 'giaovien1'),
('TH1339', '17004061', 2, 'giaovien1'),
('TH1339', '17004063', 2.5, 'giaovien1'),
('TH1339', '17004064', 2.5, 'giaovien1'),
('TH1339', '17004067', 2.5, 'giaovien1'),
('TH1339', '17004071', 1.5, 'giaovien1'),
('TH1339', '17004073', 1, 'giaovien1'),
('TH1339', '17004076', 1.5, 'giaovien1'),
('TH1339', '17004082', 3, 'giaovien1'),
('TH1339', '17004083', 2, 'giaovien1'),
('TH1339', '17004086', 2, 'giaovien1'),
('TH1339', '17004089', 2.5, 'giaovien1'),
('TH1339', '17004093', 1.5, 'giaovien1'),
('TH1339', '17004094', 2, 'giaovien1'),
('TH1339', '17004100', 3, 'giaovien1'),
('TH1339', '17004103', 0, 'giaovien1'),
('TH1339', '17004110', 3, 'giaovien1'),
('TH1339', '17004116', 2.5, 'giaovien1'),
('TH1339', '17004119', 1, 'giaovien1'),
('TH1340', '17004019', 3, 'giaovien1'),
('TH1340', '17004022', 2, 'giaovien1'),
('TH1340', '17004025', 1.5, 'giaovien1'),
('TH1340', '17004027', 3, 'giaovien1'),
('TH1340', '17004028', 2.5, 'giaovien1'),
('TH1340', '17004035', 2.5, 'giaovien1'),
('TH1340', '17004036', 1, 'giaovien1'),
('TH1340', '17004037', 1.5, 'giaovien1'),
('TH1340', '17004038', 2.5, 'giaovien1'),
('TH1340', '17004046', 1, 'giaovien1'),
('TH1340', '17004047', 2, 'giaovien1'),
('TH1340', '17004050', 2.5, 'giaovien1'),
('TH1340', '17004056', 2, 'giaovien1'),
('TH1340', '17004057', 1, 'giaovien1'),
('TH1340', '17004061', 1, 'giaovien1'),
('TH1340', '17004063', 2.5, 'giaovien1'),
('TH1340', '17004064', 2.5, 'giaovien1'),
('TH1340', '17004067', 2.5, 'giaovien1'),
('TH1340', '17004071', 2.5, 'giaovien1'),
('TH1340', '17004073', 3, 'giaovien1'),
('TH1340', '17004076', 1, 'giaovien1'),
('TH1340', '17004082', 2.5, 'giaovien1'),
('TH1340', '17004083', 2, 'giaovien1'),
('TH1340', '17004086', 1, 'giaovien1'),
('TH1340', '17004089', 2.5, 'giaovien1'),
('TH1340', '17004093', 1.5, 'giaovien1'),
('TH1340', '17004094', 1.5, 'giaovien1'),
('TH1340', '17004100', 2.5, 'giaovien1'),
('TH1340', '17004103', 1.5, 'giaovien1'),
('TH1340', '17004110', 2.5, 'giaovien1'),
('TH1340', '17004116', 2.5, 'giaovien1'),
('TH1340', '17004119', 1, 'giaovien1'),
('TH1341', '17004009', 3, 'giaovien1'),
('TH1341', '17004019', 3, 'giaovien1'),
('TH1341', '17004022', 2.5, 'giaovien1'),
('TH1341', '17004025', 3, 'giaovien1'),
('TH1341', '17004027', 3, 'giaovien1'),
('TH1341', '17004035', 2.5, 'giaovien1'),
('TH1341', '17004037', 2.5, 'giaovien1'),
('TH1341', '17004038', 3, 'giaovien1'),
('TH1341', '17004050', 2.5, 'giaovien1'),
('TH1341', '17004061', 2, 'giaovien1'),
('TH1341', '17004063', 3, 'giaovien1'),
('TH1341', '17004064', 3, 'giaovien1'),
('TH1341', '17004071', 3.5, 'giaovien1'),
('TH1341', '17004073', 4, 'giaovien1'),
('TH1341', '17004110', 3, 'giaovien1'),
('TH1342', '17004009', 3, 'giaovien1'),
('TH1342', '17004019', 4, 'giaovien1'),
('TH1342', '17004022', 2, 'giaovien1'),
('TH1342', '17004025', 3.5, 'giaovien1'),
('TH1342', '17004027', 4, 'giaovien1'),
('TH1342', '17004028', 4, 'giaovien1'),
('TH1342', '17004035', 1.5, 'giaovien1'),
('TH1342', '17004036', 2, 'giaovien1'),
('TH1342', '17004037', 3, 'giaovien1'),
('TH1342', '17004038', 3.5, 'giaovien1'),
('TH1342', '17004046', 2, 'giaovien1'),
('TH1342', '17004047', 3, 'giaovien1'),
('TH1342', '17004050', 4, 'giaovien1'),
('TH1342', '17004056', 3.5, 'giaovien1'),
('TH1342', '17004057', 2.5, 'giaovien1'),
('TH1342', '17004061', 2, 'giaovien1'),
('TH1342', '17004063', 3.5, 'giaovien1'),
('TH1342', '17004064', 3, 'giaovien1'),
('TH1342', '17004067', 3.5, 'giaovien1'),
('TH1342', '17004071', 2.5, 'giaovien1'),
('TH1342', '17004073', 3.5, 'giaovien1'),
('TH1342', '17004076', 2.5, 'giaovien1'),
('TH1342', '17004082', 3, 'giaovien1'),
('TH1342', '17004083', 3.5, 'giaovien1'),
('TH1342', '17004086', 3.5, 'giaovien1'),
('TH1342', '17004089', 3.5, 'giaovien1'),
('TH1342', '17004093', 2.5, 'giaovien1'),
('TH1342', '17004094', 4, 'giaovien1'),
('TH1342', '17004100', 4, 'giaovien1'),
('TH1342', '17004103', 3, 'giaovien1'),
('TH1342', '17004110', 4, 'giaovien1'),
('TH1342', '17004116', 3, 'giaovien1'),
('TH1342', '17004119', 1, 'giaovien1'),
('TH1349', '17004001', 3, 'giaovien1'),
('TH1349', '17004004', 3, 'giaovien1'),
('TH1349', '17004015', 3.5, 'giaovien1'),
('TH1349', '17004016', 2, 'giaovien1'),
('TH1349', '17004017', 4, 'giaovien1'),
('TH1349', '17004018', 3.5, 'giaovien1'),
('TH1349', '17004020', 3.5, 'giaovien1'),
('TH1349', '17004021', 3.5, 'giaovien1'),
('TH1349', '17004024', 3.5, 'giaovien1'),
('TH1349', '17004030', 3.5, 'giaovien1'),
('TH1349', '17004031', 3.5, 'giaovien1'),
('TH1349', '17004033', 3, 'giaovien1'),
('TH1349', '17004041', 2, 'giaovien1'),
('TH1349', '17004043', 3, 'giaovien1'),
('TH1349', '17004052', 2.5, 'giaovien1'),
('TH1349', '17004055', 3, 'giaovien1'),
('TH1349', '17004058', 3, 'giaovien1'),
('TH1349', '17004060', 3.5, 'giaovien1'),
('TH1349', '17004062', 3, 'giaovien1'),
('TH1349', '17004068', 2, 'giaovien1'),
('TH1349', '17004075', 2.5, 'giaovien1'),
('TH1349', '17004078', 3.5, 'giaovien1'),
('TH1349', '17004084', 3, 'giaovien1'),
('TH1349', '17004085', 3, 'giaovien1'),
('TH1349', '17004091', 2.5, 'giaovien1'),
('TH1349', '17004092', 3, 'giaovien1'),
('TH1349', '17004096', 4, 'giaovien1'),
('TH1349', '17004101', 4, 'giaovien1'),
('TH1349', '17004102', 3, 'giaovien1'),
('TH1349', '17004111', 4, 'giaovien1'),
('TH1349', '17004112', 3.5, 'giaovien1'),
('TH1350', '17004001', 4, 'giaovien1'),
('TH1350', '17004004', 0, 'giaovien1'),
('TH1350', '17004015', 2.5, 'giaovien1'),
('TH1350', '17004016', 2, 'giaovien1'),
('TH1350', '17004017', 3, 'giaovien1'),
('TH1350', '17004018', 3, 'giaovien1'),
('TH1350', '17004020', 3, 'giaovien1'),
('TH1350', '17004021', 2.5, 'giaovien1'),
('TH1350', '17004024', 3, 'giaovien1'),
('TH1350', '17004030', 3, 'giaovien1'),
('TH1350', '17004031', 3, 'giaovien1'),
('TH1350', '17004033', 3, 'giaovien1'),
('TH1350', '17004041', 2.5, 'giaovien1'),
('TH1350', '17004043', 4, 'giaovien1'),
('TH1350', '17004052', 3, 'giaovien1'),
('TH1350', '17004055', 3, 'giaovien1'),
('TH1350', '17004058', 4, 'giaovien1'),
('TH1350', '17004060', 2.5, 'giaovien1'),
('TH1350', '17004062', 4, 'giaovien1'),
('TH1350', '17004068', 3, 'giaovien1'),
('TH1350', '17004075', 4, 'giaovien1'),
('TH1350', '17004078', 2.5, 'giaovien1'),
('TH1350', '17004084', 2.5, 'giaovien1'),
('TH1350', '17004085', 2.5, 'giaovien1'),
('TH1350', '17004091', 3, 'giaovien1'),
('TH1350', '17004092', 4, 'giaovien1'),
('TH1350', '17004096', 2.5, 'giaovien1'),
('TH1350', '17004101', 4, 'giaovien1'),
('TH1350', '17004102', 3, 'giaovien1'),
('TH1350', '17004111', 3, 'giaovien1'),
('TH1350', '17004112', 3, 'giaovien1'),
('TH1354', '17004063', 2, 'giaovien1'),
('TH1354', '17004086', 1, 'giaovien1'),
('TH1507', '17004004', 3.5, 'giaovien1'),
('TH1507', '17004009', 0, 'giaovien1'),
('TH1507', '17004033', 2.5, 'giaovien1'),
('TH1507', '17004038', 2.5, 'giaovien1'),
('TH1507', '17004041', 2, 'giaovien1'),
('TH1507', '17004047', 2.5, 'giaovien1'),
('TH1507', '17004050', 2.5, 'giaovien1'),
('TH1507', '17004061', 2, 'giaovien1'),
('TH1507', '17004062', 4, 'giaovien1'),
('TH1507', '17004063', 2, 'giaovien1'),
('TH1507', '17004075', 2, 'giaovien1'),
('TH1507', '17004086', 2.5, 'giaovien1'),
('TH1507', '17004110', 3, 'giaovien1'),
('TH1508', '17004015', 2.5, 'giaovien1'),
('TH1508', '17004020', 2.5, 'giaovien1'),
('TH1508', '17004022', 1.5, 'giaovien1'),
('TH1508', '17004035', 2.5, 'giaovien1'),
('TH1508', '17004036', 2.5, 'giaovien1'),
('TH1508', '17004041', 2.5, 'giaovien1'),
('TH1508', '17004050', 2.5, 'giaovien1'),
('TH1508', '17004052', 2.5, 'giaovien1'),
('TH1508', '17004056', 3, 'giaovien1'),
('TH1508', '17004061', 1, 'giaovien1'),
('TH1508', '17004068', 3, 'giaovien1'),
('TH1508', '17004076', 0, 'giaovien1'),
('TH1508', '17004078', 3, 'giaovien1'),
('TH1508', '17004082', 2.5, 'giaovien1'),
('TH1508', '17004083', 3, 'giaovien1'),
('TH1508', '17004084', 3.5, 'giaovien1'),
('TH1508', '17004085', 2, 'giaovien1'),
('TH1508', '17004086', 2, 'giaovien1'),
('TH1508', '17004091', 2, 'giaovien1'),
('TH1508', '17004094', 2, 'giaovien1'),
('TH1508', '17004100', 2.5, 'giaovien1'),
('TH1508', '17004116', 3, 'giaovien1'),
('TH1508', '17004119', 0, 'giaovien1'),
('TH1509', '17004001', 3, 'giaovien1'),
('TH1509', '17004004', 0, 'giaovien1'),
('TH1509', '17004015', 4, 'giaovien1'),
('TH1509', '17004016', 3.5, 'giaovien1'),
('TH1509', '17004017', 4, 'giaovien1'),
('TH1509', '17004018', 4, 'giaovien1'),
('TH1509', '17004019', 3, 'giaovien1'),
('TH1509', '17004020', 1.5, 'giaovien1'),
('TH1509', '17004021', 3, 'giaovien1'),
('TH1509', '17004022', 2.5, 'giaovien1'),
('TH1509', '17004024', 3.5, 'giaovien1'),
('TH1509', '17004025', 3.5, 'giaovien1'),
('TH1509', '17004027', 3.5, 'giaovien1'),
('TH1509', '17004028', 2.5, 'giaovien1'),
('TH1509', '17004030', 3.5, 'giaovien1'),
('TH1509', '17004031', 4, 'giaovien1'),
('TH1509', '17004033', 3, 'giaovien1'),
('TH1509', '17004035', 1, 'giaovien1'),
('TH1509', '17004036', 1, 'giaovien1'),
('TH1509', '17004038', 3, 'giaovien1'),
('TH1509', '17004041', 3, 'giaovien1'),
('TH1509', '17004043', 3, 'giaovien1'),
('TH1509', '17004047', 3, 'giaovien1'),
('TH1509', '17004052', 1, 'giaovien1'),
('TH1509', '17004055', 3.5, 'giaovien1'),
('TH1509', '17004056', 4, 'giaovien1'),
('TH1509', '17004058', 3.5, 'giaovien1'),
('TH1509', '17004060', 3.5, 'giaovien1'),
('TH1509', '17004062', 3, 'giaovien1'),
('TH1509', '17004063', 4, 'giaovien1'),
('TH1509', '17004064', 3, 'giaovien1'),
('TH1509', '17004067', 2, 'giaovien1'),
('TH1509', '17004068', 3.5, 'giaovien1'),
('TH1509', '17004071', 4, 'giaovien1'),
('TH1509', '17004073', 4, 'giaovien1'),
('TH1509', '17004075', 3, 'giaovien1'),
('TH1509', '17004076', 2, 'giaovien1'),
('TH1509', '17004078', 3, 'giaovien1'),
('TH1509', '17004082', 3, 'giaovien1'),
('TH1509', '17004083', 1, 'giaovien1'),
('TH1509', '17004084', 4, 'giaovien1'),
('TH1509', '17004085', 1, 'giaovien1'),
('TH1509', '17004086', 3.5, 'giaovien1'),
('TH1509', '17004089', 3.5, 'giaovien1'),
('TH1509', '17004091', 4, 'giaovien1'),
('TH1509', '17004092', 3.5, 'giaovien1'),
('TH1509', '17004094', 2, 'giaovien1'),
('TH1509', '17004096', 3.5, 'giaovien1'),
('TH1509', '17004100', 2, 'giaovien1'),
('TH1509', '17004101', 3.5, 'giaovien1'),
('TH1509', '17004102', 3, 'giaovien1'),
('TH1509', '17004110', 2.5, 'giaovien1'),
('TH1509', '17004111', 3.5, 'giaovien1'),
('TH1509', '17004112', 3.5, 'giaovien1'),
('TH1509', '17004116', 1, 'giaovien1'),
('TH1509', '17004120', 4, 'giaovien1'),
('TH1602', '17004073', 3.5, 'giaovien1'),
('TH1606', '17004001', 3.5, 'giaovien1'),
('TH1606', '17004004', 2.5, '17004004'),
('TH1606', '17004004', 2.5, 'giaovien1'),
('TH1606', '17004015', 2.5, 'giaovien1'),
('TH1606', '17004016', 3, 'giaovien1'),
('TH1606', '17004017', 3.5, 'giaovien1'),
('TH1606', '17004018', 3, 'giaovien1'),
('TH1606', '17004019', 3.5, 'giaovien1'),
('TH1606', '17004020', 3.5, 'giaovien1'),
('TH1606', '17004021', 3.5, 'giaovien1'),
('TH1606', '17004022', 2.5, 'giaovien1'),
('TH1606', '17004024', 3.5, 'giaovien1'),
('TH1606', '17004025', 3.5, 'giaovien1'),
('TH1606', '17004027', 3.5, 'giaovien1'),
('TH1606', '17004028', 3, 'giaovien1'),
('TH1606', '17004030', 3, 'giaovien1'),
('TH1606', '17004031', 3, 'giaovien1'),
('TH1606', '17004033', 3, 'giaovien1'),
('TH1606', '17004035', 3, 'giaovien1'),
('TH1606', '17004036', 1.5, 'giaovien1'),
('TH1606', '17004037', 1.5, 'giaovien1'),
('TH1606', '17004038', 2.5, 'giaovien1'),
('TH1606', '17004041', 3, 'giaovien1'),
('TH1606', '17004043', 3.5, 'giaovien1'),
('TH1606', '17004046', 3, 'giaovien1'),
('TH1606', '17004047', 3, 'giaovien1'),
('TH1606', '17004050', 1.5, 'giaovien1'),
('TH1606', '17004052', 2.5, 'giaovien1'),
('TH1606', '17004055', 3.5, 'giaovien1'),
('TH1606', '17004056', 3, 'giaovien1'),
('TH1606', '17004057', 3, 'giaovien1'),
('TH1606', '17004058', 3, 'giaovien1'),
('TH1606', '17004060', 3.5, 'giaovien1'),
('TH1606', '17004061', 1.5, 'giaovien1'),
('TH1606', '17004062', 4, 'giaovien1'),
('TH1606', '17004063', 3, 'giaovien1'),
('TH1606', '17004064', 3, 'giaovien1'),
('TH1606', '17004067', 3, 'giaovien1'),
('TH1606', '17004068', 3, 'giaovien1'),
('TH1606', '17004071', 3, 'giaovien1'),
('TH1606', '17004075', 3.5, 'giaovien1'),
('TH1606', '17004076', 3.5, 'giaovien1'),
('TH1606', '17004078', 3.5, 'giaovien1'),
('TH1606', '17004082', 3, 'giaovien1'),
('TH1606', '17004083', 3.5, 'giaovien1'),
('TH1606', '17004084', 3, 'giaovien1'),
('TH1606', '17004085', 2.5, 'giaovien1'),
('TH1606', '17004089', 3, 'giaovien1'),
('TH1606', '17004091', 3, 'giaovien1'),
('TH1606', '17004092', 3, 'giaovien1'),
('TH1606', '17004093', 3.5, 'giaovien1'),
('TH1606', '17004094', 3.5, 'giaovien1'),
('TH1606', '17004096', 3.5, 'giaovien1'),
('TH1606', '17004100', 3, 'giaovien1'),
('TH1606', '17004101', 3, 'giaovien1'),
('TH1606', '17004102', 3, 'giaovien1'),
('TH1606', '17004103', 0, 'giaovien1'),
('TH1606', '17004110', 3, 'giaovien1'),
('TH1606', '17004111', 3.5, 'giaovien1'),
('TH1606', '17004112', 3.5, 'giaovien1'),
('TH1606', '17004116', 3, 'giaovien1'),
('TH1606', '17004119', 2.5, 'giaovien1'),
('TH1606', '17004120', 3, 'giaovien1'),
('TH1607', '17004001', 2, 'giaovien1'),
('TH1607', '17004004', 2.5, 'giaovien1'),
('TH1607', '17004009', 2, 'giaovien1'),
('TH1607', '17004015', 3, 'giaovien1'),
('TH1607', '17004016', 2, 'giaovien1'),
('TH1607', '17004017', 3.5, 'giaovien1'),
('TH1607', '17004018', 4, 'giaovien1'),
('TH1607', '17004019', 2, 'giaovien1'),
('TH1607', '17004020', 2, 'giaovien1'),
('TH1607', '17004021', 3, 'giaovien1'),
('TH1607', '17004022', 3, 'giaovien1'),
('TH1607', '17004024', 4, 'giaovien1'),
('TH1607', '17004025', 2, 'giaovien1'),
('TH1607', '17004027', 2.5, 'giaovien1'),
('TH1607', '17004028', 4, 'giaovien1'),
('TH1607', '17004030', 4, 'giaovien1'),
('TH1607', '17004031', 3.5, 'giaovien1'),
('TH1607', '17004033', 2.5, 'giaovien1'),
('TH1607', '17004035', 4, 'giaovien1'),
('TH1607', '17004036', 2, 'giaovien1'),
('TH1607', '17004037', 2.5, 'giaovien1'),
('TH1607', '17004038', 2.5, 'giaovien1'),
('TH1607', '17004041', 2, 'giaovien1'),
('TH1607', '17004043', 3, 'giaovien1'),
('TH1607', '17004046', 2, 'giaovien1'),
('TH1607', '17004047', 3, 'giaovien1'),
('TH1607', '17004050', 2, 'giaovien1'),
('TH1607', '17004052', 2, 'giaovien1'),
('TH1607', '17004055', 3, 'giaovien1'),
('TH1607', '17004056', 3.5, 'giaovien1'),
('TH1607', '17004057', 3, 'giaovien1'),
('TH1607', '17004058', 4, 'giaovien1'),
('TH1607', '17004060', 4, 'giaovien1'),
('TH1607', '17004061', 2.5, 'giaovien1'),
('TH1607', '17004062', 3.5, 'giaovien1'),
('TH1607', '17004063', 2, 'giaovien1'),
('TH1607', '17004064', 3.5, 'giaovien1'),
('TH1607', '17004067', 3, 'giaovien1'),
('TH1607', '17004068', 4, 'giaovien1'),
('TH1607', '17004071', 4, 'giaovien1'),
('TH1607', '17004075', 4, 'giaovien1'),
('TH1607', '17004076', 2.5, 'giaovien1'),
('TH1607', '17004078', 3.5, 'giaovien1'),
('TH1607', '17004082', 3.5, 'giaovien1'),
('TH1607', '17004083', 2.5, 'giaovien1'),
('TH1607', '17004084', 3.5, 'giaovien1'),
('TH1607', '17004085', 3.5, 'giaovien1'),
('TH1607', '17004086', 2, 'giaovien1'),
('TH1607', '17004089', 4, 'giaovien1'),
('TH1607', '17004091', 2.5, 'giaovien1'),
('TH1607', '17004092', 4, 'giaovien1'),
('TH1607', '17004093', 2, 'giaovien1'),
('TH1607', '17004094', 2.5, 'giaovien1'),
('TH1607', '17004096', 4, 'giaovien1'),
('TH1607', '17004100', 2.5, 'giaovien1'),
('TH1607', '17004101', 3, 'giaovien1'),
('TH1607', '17004102', 4, 'giaovien1'),
('TH1607', '17004103', 2.5, 'giaovien1'),
('TH1607', '17004110', 2.5, 'giaovien1'),
('TH1607', '17004111', 4, 'giaovien1'),
('TH1607', '17004112', 4, 'giaovien1'),
('TH1607', '17004116', 3, 'giaovien1'),
('TH1607', '17004119', 2, 'giaovien1'),
('TH1607', '17004120', 4, 'giaovien1'),
('TH1608', '17004001', 4, 'giaovien1'),
('TH1608', '17004004', 3, 'giaovien1'),
('TH1608', '17004015', 3, 'giaovien1'),
('TH1608', '17004016', 3.5, 'giaovien1'),
('TH1608', '17004017', 3.5, 'giaovien1'),
('TH1608', '17004018', 3.5, 'giaovien1'),
('TH1608', '17004019', 3, 'giaovien1'),
('TH1608', '17004020', 2.5, 'giaovien1'),
('TH1608', '17004021', 3, 'giaovien1'),
('TH1608', '17004022', 2.5, 'giaovien1'),
('TH1608', '17004024', 3, 'giaovien1'),
('TH1608', '17004025', 2.5, 'giaovien1'),
('TH1608', '17004027', 3, 'giaovien1'),
('TH1608', '17004028', 3, 'giaovien1'),
('TH1608', '17004030', 3.5, 'giaovien1'),
('TH1608', '17004031', 4, 'giaovien1'),
('TH1608', '17004033', 3, 'giaovien1'),
('TH1608', '17004035', 3, 'giaovien1'),
('TH1608', '17004036', 3, 'giaovien1'),
('TH1608', '17004037', 2.5, 'giaovien1'),
('TH1608', '17004038', 3, 'giaovien1'),
('TH1608', '17004041', 3, 'giaovien1'),
('TH1608', '17004043', 3.5, 'giaovien1'),
('TH1608', '17004046', 2.5, 'giaovien1'),
('TH1608', '17004047', 2.5, 'giaovien1'),
('TH1608', '17004052', 3.5, 'giaovien1'),
('TH1608', '17004055', 3, 'giaovien1'),
('TH1608', '17004056', 3, 'giaovien1'),
('TH1608', '17004057', 2.5, 'giaovien1'),
('TH1608', '17004058', 3.5, 'giaovien1'),
('TH1608', '17004060', 3.5, 'giaovien1'),
('TH1608', '17004062', 4, 'giaovien1'),
('TH1608', '17004063', 3, 'giaovien1'),
('TH1608', '17004064', 3.5, 'giaovien1'),
('TH1608', '17004067', 2.5, 'giaovien1'),
('TH1608', '17004068', 3.5, 'giaovien1'),
('TH1608', '17004071', 3, 'giaovien1'),
('TH1608', '17004075', 3, 'giaovien1'),
('TH1608', '17004076', 2.5, 'giaovien1'),
('TH1608', '17004078', 2.5, 'giaovien1'),
('TH1608', '17004082', 3, 'giaovien1'),
('TH1608', '17004083', 3, 'giaovien1'),
('TH1608', '17004084', 3.5, 'giaovien1'),
('TH1608', '17004085', 3.5, 'giaovien1'),
('TH1608', '17004086', 2.5, 'giaovien1'),
('TH1608', '17004089', 3, 'giaovien1'),
('TH1608', '17004091', 3.5, 'giaovien1'),
('TH1608', '17004092', 3.5, 'giaovien1'),
('TH1608', '17004093', 2.5, 'giaovien1'),
('TH1608', '17004094', 3, 'giaovien1'),
('TH1608', '17004096', 3.5, 'giaovien1'),
('TH1608', '17004100', 3, 'giaovien1'),
('TH1608', '17004101', 3, 'giaovien1'),
('TH1608', '17004102', 3.5, 'giaovien1'),
('TH1608', '17004103', 1, 'giaovien1'),
('TH1608', '17004110', 3, 'giaovien1'),
('TH1608', '17004111', 3, 'giaovien1'),
('TH1608', '17004112', 3.5, 'giaovien1'),
('TH1608', '17004116', 3, 'giaovien1'),
('TH1608', '17004119', 2.5, 'giaovien1'),
('TH1608', '17004120', 2.5, 'giaovien1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocky`
--

CREATE TABLE `hocky` (
  `mahocky` int(11) NOT NULL,
  `tenhocky` varchar(255) NOT NULL,
  `thoigianbatdau` date NOT NULL,
  `thoigianketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hocky`
--

INSERT INTO `hocky` (`mahocky`, `tenhocky`, `thoigianbatdau`, `thoigianketthuc`) VALUES
(1, 'Học kỳ 2 ,2021-2022', '2021-04-19', '2021-07-18'),
(2, 'Học kỳ hè, 2020-2021', '2021-07-19', '2021-08-29');

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
('SP1411', 'Thiết kế dạy học', 3, NULL),
('SP1412', 'Thực hiện dạy học', 3, NULL),
('SP1413', 'Đánh giá trong dạy học', 3, NULL),
('SP1414', 'Tổ chức hoạt động giáo dục', 3, NULL),
('SP1415', 'Phát triển chương trình đào tạo', 3, NULL),
('SP1416', 'Nghiên cứu khoa học giáo dục nghề nghiệp', 3, NULL),
('SP1417', 'Thực tập sư phạm', 3, NULL),
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
('TH1321', 'Nhập môn công nghệ phần mềm', 3, NULL),
('TH1322', 'Đảm bảo chất lượng phần mềm', 3, NULL),
('TH1323', 'Kiểm thử phần mềm', 3, NULL),
('TH1324', 'Phân tích thiết kế hướng đối tượng', 3, 'TH1219'),
('TH1326', 'Tương tác người máy', 3, NULL),
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
('TH1349', 'Quản lý dự án phần mềm', 3, NULL),
('TH1350', 'Phát triển phần mềm nhúng', 3, NULL),
('TH1354', 'Anh văn chuyên ngành', 2, NULL),
('TH1507', 'Đồ án CNTT 1', 1, NULL),
('TH1508', 'Đồ án CNTT 2', 1, 'TH1507'),
('TH1509', 'Đồ án CNTT 3', 1, 'TH1508'),
('TH1518', 'Tin học ứng dụng', 3, NULL),
('TH1601', 'Thực tập tốt nghiệp', 2, 'TH1508'),
('TH1602', 'Khóa luận tốt nghiệp', 10, 'TH1340'),
('TH1606', 'Thương mại điện tử', 3, NULL),
('TH1607', 'Cơ sở dữ liệu phân tán', 3, NULL),
('TH1608', 'Chuyên đề về CNTT', 3, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphantrongcaytientrinh`
--

CREATE TABLE `hocphantrongcaytientrinh` (
  `idcaytientrinh` int(11) NOT NULL,
  `mahocphan` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphantrongcaytientrinh`
--

INSERT INTO `hocphantrongcaytientrinh` (`idcaytientrinh`, `mahocphan`) VALUES
(2, 'CB1106'),
(5, 'CB1106'),
(2, 'CB1107'),
(5, 'CB1107'),
(5, 'CB1108'),
(5, 'CB1109'),
(5, 'CB1110'),
(2, 'CB1111'),
(5, 'CB1111'),
(5, 'CB1112'),
(5, 'CT1101'),
(5, 'CT1102'),
(5, 'CT1103'),
(5, 'CT1104'),
(5, 'CT1105'),
(5, 'CT1106'),
(5, 'DT1229'),
(5, 'KT1001'),
(5, 'QP1101'),
(5, 'QP1102'),
(5, 'QP1103'),
(6, 'SP1411'),
(6, 'SP1412'),
(6, 'SP1413'),
(6, 'SP1414'),
(6, 'SP1415'),
(6, 'SP1416'),
(6, 'SP1417'),
(5, 'TC1101'),
(5, 'TC111M'),
(5, 'TC112M'),
(5, 'TH1201'),
(5, 'TH1203'),
(5, 'TH1205'),
(5, 'TH1206'),
(5, 'TH1207'),
(5, 'TH1208'),
(5, 'TH1209'),
(5, 'TH1210'),
(5, 'TH1211'),
(5, 'TH1212'),
(5, 'TH1215'),
(5, 'TH1216'),
(5, 'TH1217'),
(5, 'TH1219'),
(5, 'TH1305'),
(5, 'TH1309'),
(5, 'TH1321'),
(5, 'TH1322'),
(5, 'TH1323'),
(5, 'TH1324'),
(5, 'TH1326'),
(5, 'TH1333'),
(5, 'TH1334'),
(5, 'TH1335'),
(5, 'TH1336'),
(5, 'TH1337'),
(5, 'TH1338'),
(5, 'TH1349'),
(5, 'TH1350'),
(5, 'TH1354'),
(5, 'TH1507'),
(5, 'TH1508'),
(5, 'TH1509'),
(5, 'TH1518'),
(5, 'TH1601'),
(5, 'TH1602'),
(5, 'TH1606'),
(5, 'TH1607'),
(5, 'TH1608');

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
-- Cấu trúc bảng cho bảng `lophocphan`
--

CREATE TABLE `lophocphan` (
  `mahocphan` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `magiaovien` varchar(16) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mahocky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
('17004001', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thúy An', 3),
('17004004', 'e10adc3949ba59abbe56e057f20f883e', 'Trương Ngọc Anh', 3),
('17004009', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Tuấn Anh', 3),
('17004015', 'e10adc3949ba59abbe56e057f20f883e', 'Tạ Thanh Bình', 3),
('17004016', 'e10adc3949ba59abbe56e057f20f883e', 'Võ Thị Yến Chi', 3),
('17004017', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thiện Công', 3),
('17004018', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Bạch Cúc', 3),
('17004019', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Trí Cường', 3),
('17004020', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Quốc Cường', 3),
('17004021', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Phương Đài', 3),
('17004022', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Vủ Đang', 3),
('17004024', 'e10adc3949ba59abbe56e057f20f883e', 'Trương Hải Đăng', 3),
('17004025', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Hải Đăng', 3),
('17004027', 'e10adc3949ba59abbe56e057f20f883e', 'Trương Công Đạt', 3),
('17004028', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thành Đạt', 3),
('17004030', 'e10adc3949ba59abbe56e057f20f883e', 'Trương Quốc Đạt', 3),
('17004031', 'e10adc3949ba59abbe56e057f20f883e', 'Huỳnh Thị Bé Diệu', 3),
('17004033', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thành Đông', 3),
('17004035', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Đức', 3),
('17004036', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thị Thùy Dương', 3),
('17004037', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Thùy Dương', 3),
('17004038', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Trọng Duy', 3),
('17004041', 'e10adc3949ba59abbe56e057f20f883e', 'Cao Võ Anh Duy', 3),
('17004043', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Bá Duy', 3),
('17004046', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Phúc Duy', 3),
('17004047', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Thanh Duy', 3),
('17004050', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Trường Giang', 3),
('17004052', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Thanh Hải', 3),
('17004055', 'e10adc3949ba59abbe56e057f20f883e', 'Lâm Khả Hân', 3),
('17004056', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Mỹ Hằng', 3),
('17004057', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Nhựt Hào', 3),
('17004058', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Hồng Phước Hảo', 3),
('17004060', 'e10adc3949ba59abbe56e057f20f883e', 'Hoàng Phúc Hậu', 3),
('17004061', 'e10adc3949ba59abbe56e057f20f883e', 'Phùng Minh Hiển', 3),
('17004062', 'e10adc3949ba59abbe56e057f20f883e', 'Bùi Thanh Hoàng', 3),
('17004063', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Phi Hùng', 3),
('17004064', 'e10adc3949ba59abbe56e057f20f883e', 'Vũ Viết Hưng', 3),
('17004067', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thanh Huy', 3),
('17004068', 'e10adc3949ba59abbe56e057f20f883e', 'Hồng Khắc Huy', 3),
('17004071', 'e10adc3949ba59abbe56e057f20f883e', 'Võ Hoàng Khang Huy', 3),
('17004073', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Hoàng Kha', 3),
('17004075', 'e10adc3949ba59abbe56e057f20f883e', 'Trịnh Tường Khâm', 3),
('17004076', 'e10adc3949ba59abbe56e057f20f883e', 'Võ Đức Khang', 3),
('17004078', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Trung Khánh', 3),
('17004082', 'e10adc3949ba59abbe56e057f20f883e', 'Mai Đăng Khoa', 3),
('17004083', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Quốc Khởi', 3),
('17004084', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Minh Khương', 3),
('17004085', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Phạm Tuấn Kiệt', 3),
('17004086', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Anh Kiệt', 3),
('17004089', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Thị Tiểu Lan', 3),
('17004091', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Hoàng Lên', 3),
('17004092', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Hoàng Linh', 3),
('17004093', 'e10adc3949ba59abbe56e057f20f883e', 'Lê Hoài Linh', 3),
('17004094', 'e10adc3949ba59abbe56e057f20f883e', 'Dương Quang Linh', 3),
('17004096', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Văn Linh', 3),
('17004100', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Hoàng Minh', 3),
('17004101', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Nhựt Minh', 3),
('17004102', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Bảo Minh', 3),
('17004103', 'e10adc3949ba59abbe56e057f20f883e', 'Võ Nhật Minh', 3),
('17004110', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Quốc Nam', 3),
('17004111', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Thị Kim Ngân', 3),
('17004112', 'e10adc3949ba59abbe56e057f20f883e', 'Trần Thị Diễm Ngân', 3),
('17004116', 'e10adc3949ba59abbe56e057f20f883e', 'Huỳnh Phúc Nghiêm', 3),
('17004119', 'e10adc3949ba59abbe56e057f20f883e', 'Phạm Sĩ Nguyên', 3),
('17004120', 'e10adc3949ba59abbe56e057f20f883e', 'Hà Hoàng Nguyên', 3),
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'Trưởng phòng', 1),
('giaovien1', 'e10adc3949ba59abbe56e057f20f883e', 'Giáo viên 1', 2),
('hieunv', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Văn Hiếu', 2),
('taipt', 'e10adc3949ba59abbe56e057f20f883e', 'Phan Thành Tài', 3),
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
-- Chỉ mục cho bảng `caytientrinhsinhvien`
--
ALTER TABLE `caytientrinhsinhvien`
  ADD PRIMARY KEY (`idsinhvien`,`idcaytientrinh`),
  ADD KEY `fk_caytientrinh_sinhvien` (`idcaytientrinh`);

--
-- Chỉ mục cho bảng `chunhiem`
--
ALTER TABLE `chunhiem`
  ADD PRIMARY KEY (`idsinhvien`,`idgiaovien`),
  ADD KEY `fk_chunhiem_giaovien` (`idgiaovien`);

--
-- Chỉ mục cho bảng `dangkyhocphan`
--
ALTER TABLE `dangkyhocphan`
  ADD PRIMARY KEY (`idsinhvien`,`idhocky`,`idhocphan`),
  ADD KEY `dk_hocky` (`idhocky`),
  ADD KEY `dk_hocphan` (`idhocphan`);

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`idhocphan`,`idsinhvien`,`nguoinhap`),
  ADD KEY `fk_diem_sinhvien` (`idsinhvien`);

--
-- Chỉ mục cho bảng `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`mahocky`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`mahocphan`),
  ADD KEY `fk_hocphan_hocphan` (`hocphantienquyet`);

--
-- Chỉ mục cho bảng `hocphantrongcaytientrinh`
--
ALTER TABLE `hocphantrongcaytientrinh`
  ADD PRIMARY KEY (`idcaytientrinh`,`mahocphan`),
  ADD KEY `fk_hocphan` (`mahocphan`);

--
-- Chỉ mục cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`idloaitaikhoan`);

--
-- Chỉ mục cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD PRIMARY KEY (`mahocphan`,`magiaovien`,`mahocky`),
  ADD KEY `b` (`mahocky`),
  ADD KEY `a` (`magiaovien`);

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
  MODIFY `idcaytientrinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `hocky`
--
ALTER TABLE `hocky`
  MODIFY `mahocky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `idloaitaikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `caytientrinhsinhvien`
--
ALTER TABLE `caytientrinhsinhvien`
  ADD CONSTRAINT `fk_caytientrinh_sinhvien` FOREIGN KEY (`idcaytientrinh`) REFERENCES `caytientrinh` (`idcaytientrinh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `chunhiem`
--
ALTER TABLE `chunhiem`
  ADD CONSTRAINT `fk_chunhiem_giaovien` FOREIGN KEY (`idgiaovien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chunhiem_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `dangkyhocphan`
--
ALTER TABLE `dangkyhocphan`
  ADD CONSTRAINT `dk_hocky` FOREIGN KEY (`idhocky`) REFERENCES `hocky` (`mahocky`),
  ADD CONSTRAINT `dk_hocphan` FOREIGN KEY (`idhocphan`) REFERENCES `hocphan` (`mahocphan`),
  ADD CONSTRAINT `dk_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`);

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
-- Các ràng buộc cho bảng `hocphantrongcaytientrinh`
--
ALTER TABLE `hocphantrongcaytientrinh`
  ADD CONSTRAINT `fk_caytientrinh` FOREIGN KEY (`idcaytientrinh`) REFERENCES `caytientrinh` (`idcaytientrinh`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_hocphan` FOREIGN KEY (`mahocphan`) REFERENCES `hocphan` (`mahocphan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `lophocphan`
--
ALTER TABLE `lophocphan`
  ADD CONSTRAINT `a` FOREIGN KEY (`magiaovien`) REFERENCES `taikhoan` (`taikhoan`),
  ADD CONSTRAINT `b` FOREIGN KEY (`mahocky`) REFERENCES `hocky` (`mahocky`),
  ADD CONSTRAINT `c` FOREIGN KEY (`mahocphan`) REFERENCES `hocphan` (`mahocphan`);

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_taikhoan_loaitaikhoan` FOREIGN KEY (`loaitaikhoan`) REFERENCES `loaitaikhoan` (`idloaitaikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;