-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 19, 2022 lúc 03:33 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thuchanh3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(30) NOT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`maloai`, `tenloai`, `trangthai`) VALUES
(1, 'Văn hóa', 1),
(2, 'Xã hội', 1),
(3, 'Thể thao', 1),
(4, 'Y học', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matin` int(11) NOT NULL,
  `maloai` int(11) NOT NULL,
  `tentin` varchar(100) NOT NULL,
  `tomtat` varchar(100) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `hinhanh` varchar(100) DEFAULT NULL,
  `tacgia` varchar(50) DEFAULT NULL,
  `noibat` int(11) DEFAULT 0,
  `docnhieu` int(11) DEFAULT 0,
  `trangthai` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`matin`, `maloai`, `tentin`, `tomtat`, `noidung`, `hinhanh`, `tacgia`, `noibat`, `docnhieu`, `trangthai`) VALUES
(1, 1, 'Tên tin tức 1', 'Tóm tắt tin', 'Nội dung tin tức', 'images/edit.png', 'admin', 0, 0, 0),
(2, 1, 'Tên tin tức 2', 'Tóm tắt tin', 'Nội dung tin tức', 'images/edit.png', 'admin', 0, 0, 0),
(3, 2, 'Tên tin tức 3', 'Tóm tắt tin', 'Nội dung tin tức', 'images/edit.png', 'admin', 0, 0, 0),
(4, 2, 'Tên tin tức 4', 'Tóm tắt tin', 'Nội dung tin tức', 'images/delete.png', 'admin', 0, 0, 0),
(5, 3, 'Tên tin tức 5', 'Tóm tắt tin', 'Nội dung tin tức', 'images/delete.png', 'admin', 0, 0, 0),
(6, 4, 'Tên tin tức 6', 'Tóm tắt tin', 'Nội dung tin tức', 'images/delete.png', 'admin', 0, 0, 0),
(7, 4, 'Tên tin tức 7', 'Tóm tắt tin', 'Nội dung tin tức', '', 'admin', 0, 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matin`),
  ADD KEY `fk_tintuc` (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_tintuc` FOREIGN KEY (`maloai`) REFERENCES `loaitin` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
