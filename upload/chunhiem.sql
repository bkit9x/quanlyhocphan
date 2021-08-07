-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: mysql
-- Thời gian đã tạo: Th8 07, 2021 lúc 04:50 AM
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

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chunhiem`
--
ALTER TABLE `chunhiem`
  ADD PRIMARY KEY (`idsinhvien`,`idgiaovien`),
  ADD KEY `fk_chunhiem_giaovien` (`idgiaovien`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chunhiem`
--
ALTER TABLE `chunhiem`
  ADD CONSTRAINT `fk_chunhiem_giaovien` FOREIGN KEY (`idgiaovien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chunhiem_sinhvien` FOREIGN KEY (`idsinhvien`) REFERENCES `taikhoan` (`taikhoan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
