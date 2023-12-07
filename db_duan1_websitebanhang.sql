-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th12 06, 2023 lúc 05:59 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_1_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `id_nguoidung` int NOT NULL,
  `id_sp` int DEFAULT NULL,
  `ngaybinhluan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `id_nguoidung`, `id_sp`, `ngaybinhluan`) VALUES
(44, 'Áo đẹp quá', 2, 49, '06/12/2023'),
(45, 'Đẹp quá đi ', 2, 45, '06/12/2023'),
(46, 'Áo đẹp thật', 2, 45, '06/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendm` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendm`, `img`) VALUES
(32, 'Quần âu', 'quan72.JPG'),
(33, 'Áo phông', 'ao13.jpg'),
(34, 'Quần bò', 'quan12.jpg'),
(35, 'Quần đùi', 'quan27.JPG'),
(36, 'Áo gió', 'ao27.jpg'),
(37, 'Giày da', '50.jpg'),
(38, 'Áo khoác', 'ao41.jpg'),
(40, 'Sơ mi', 'ao21.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int NOT NULL,
  `nguoidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoigian_mua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pt_thanhtoan` int NOT NULL,
  `soluong` int NOT NULL,
  `id_trangthai_donhang` int NOT NULL DEFAULT '1',
  `id_taikhoan` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `nguoidung`, `sdt`, `email`, `diachi`, `thoigian_mua`, `pt_thanhtoan`, `soluong`, `id_trangthai_donhang`, `id_taikhoan`) VALUES
(2, 'ronaldohaha  ', '0948327283', 'ronaldo@gmail.com', 'Bồ Đào Nha', '05/12/2023', 0, 2, 3, 1),
(12, 'Đỗ Khánh Vũ    ', '0936273444', 'khanhvux@gmail.com', 'Thôn Bến - Xã Dị Nậu - Thạch Thất - Hà Nội', '06/12/2023', 0, 1, 8, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id` int NOT NULL,
  `id_tk` int NOT NULL,
  `id_sp` int NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int NOT NULL,
  `id_donhang` int NOT NULL,
  `id_trangthai_donhang` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id`, `id_tk`, `id_sp`, `tensp`, `img`, `giasp`, `soluong`, `id_donhang`, `id_trangthai_donhang`) VALUES
(3, 1, 45, 'Áo khoác nâu trắng', 'ao41.jpg', '350.000', 1, 2, 1),
(4, 1, 38, 'Quần đùi mùa hè', 'quan36.jpg', '500.000', 1, 2, 1),
(5, 2, 45, 'Áo khoác nâu trắng', 'ao41.jpg', '350.000 ', 1, 3, 1),
(6, 2, 44, 'Áo gió xanh rêu', 'ao27.jpg', '250.000 ₫', 1, 4, 1),
(7, 2, 49, 'Sơ mi cộc tay', 'ao21.jpg', '250.000 ₫', 1, 5, 1),
(8, 2, 38, 'Quần đùi mùa hè', 'quan36.jpg', '500.000', 1, 6, 1),
(9, 2, 45, 'Áo khoác nâu trắng', 'ao41.jpg', '350.000 ₫', 1, 7, 1),
(10, 2, 49, 'Sơ mi cộc tay', 'ao21.jpg', '250.000', 1, 8, 1),
(11, 2, 38, 'Quần đùi mùa hè', 'quan36.jpg', '500.000', 1, 9, 1),
(12, 2, 46, 'Áo khoác  đen có mũ ', 'ao43.jpg', '350.000', 1, 10, 1),
(13, 2, 49, 'Sơ mi cộc tay', 'ao21.jpg', '250.000 ₫', 1, 11, 1),
(14, 2, 44, 'Áo gió xanh rêu', 'ao27.jpg', '250.000 ₫', 1, 12, 1),
(15, 2, 40, 'Áo gió xanh', 'ao28.jpg', '250.000 ₫', 1, 13, 1),
(16, 2, 41, 'Quần đùi bò ', 'quan28.JPG', '300.000 ₫', 2, 13, 1),
(17, 2, 49, 'Sơ mi cộc tay', 'ao21.jpg', '250.000 ₫', 1, 14, 1),
(18, 2, 35, 'Quần âu xanh kẻ caro', 'quan48.JPG', '350.000 ₫', 1, 15, 1),
(19, 2, 44, 'Áo gió xanh rêu', 'ao27.jpg', '250.000 ₫', 1, 16, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int NOT NULL,
  `name_role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`) VALUES
(1, 'Admin'),
(2, 'Nhân viên'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `tensp` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `giasp` decimal(10,3) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mota` text COLLATE utf8mb4_general_ci NOT NULL,
  `iddm` int NOT NULL,
  `id_sptheomua` int NOT NULL,
  `soluong` int DEFAULT NULL,
  `luotxem` int DEFAULT NULL,
  `trangthai` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `giasp`, `img`, `mota`, `iddm`, `id_sptheomua`, `soluong`, `luotxem`, `trangthai`) VALUES
(26, 'Áo phông phong cách', 300.000, 'ao13.jpg', 'Áo phông mẫu mới nhất', 33, 2, 5, 10, 0),
(31, 'Áo phông xám', 350.000, 'ao4.jpg', 'Áo mới hot nhất năm nay', 33, 2, 5, 15, 0),
(32, 'Áo phông xanh', 500.000, 'ao3.jpg', 'Mẫu mới nhất năm nay nhanh tay ! nhanh tay !', 33, 1, 0, 20, 0),
(33, 'Quần âu nâu đất', 300.000, 'quan7.jpg', 'QUần âu mới về giá hợp túi tiền', 32, 3, 0, 5, 0),
(34, 'Quần âu đen', 300.000, 'quan63.JPG', 'Quần âu nam phong cách', 32, 2, 0, 7, 0),
(35, 'Quần âu xanh kẻ caro', 350.000, 'quan48.JPG', 'Quần áo phong cách Âu Mỹ', 32, 3, 0, 2, 0),
(36, 'Quần âu xám caro', 300.000, 'quan57.JPG', 'Quần âu mẫu mới về', 32, 1, 0, 7, 0),
(37, 'Quần bò phong cách', 350.000, 'quan12.jpg', 'Mẫu mới Hàn Quốc', 34, 3, 0, 9, 0),
(38, 'Quần đùi mùa hè', 500.000, 'quan36.jpg', 'Chất liều bền, đẹp', 35, 2, 6, 2, 0),
(39, 'Giày da nâu', 250.000, '50.jpg', 'Giày da đẹp siêu bền', 37, 2, 6, 15, 0),
(40, 'Áo gió xanh', 250.000, 'ao28.jpg', 'Áo gió đẹp', 36, 4, 2, 19, 0),
(41, 'Quần đùi bò ', 300.000, 'quan28.JPG', 'Quần đùi bò đẹp, bền ', 35, 1, 8, 11, 0),
(42, 'Quần bò xanh đậm', 255.000, 'quan15.jpg', 'Quần bò đẹp siêu bền', 34, 1, 8, 2, 0),
(43, 'Áo gió xám', 300.000, 'ao29.jpg', 'Áo gió chất liệu bền', 36, 4, 8, 2, 0),
(44, 'Áo gió xanh rêu', 250.000, 'ao27.jpg', 'Áo gió siêu đẹp, giá hời', 36, 4, 10, 2, 0),
(45, 'Áo khoác nâu trắng', 350.000, 'ao41.jpg', 'Đông đã về nhanh tay đặt mua ngay', 38, 4, 10, 0, 0),
(46, 'Áo khoác  đen có mũ ', 350.000, 'ao43.jpg', 'Áo khoác đẹp giá rẻ ', 38, 3, 10, 7, 0),
(49, 'Sơ mi cộc tay', 250.000, 'ao21.jpg', 'Áo sơ mi chất liệu cotton', 40, 1, 10, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sptheomua`
--

CREATE TABLE `sptheomua` (
  `id_mua` int NOT NULL,
  `ten_mua` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sptheomua`
--

INSERT INTO `sptheomua` (`id_mua`, `ten_mua`) VALUES
(1, 'Xuân'),
(2, 'Hạ'),
(3, ' Thu'),
(4, 'Đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `nguoidung` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_role` int NOT NULL DEFAULT '3' COMMENT '1- Admin\r\n2-Nhân viên,\r\n3-Khách hàng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `nguoidung`, `matkhau`, `email`, `img`, `diachi`, `sdt`, `id_role`) VALUES
(1, 'ronaldohaha  ', '141220047', 'ronaldo@gmail.com', 'ronaldo_7.jpg', 'Bồ - Đào - Nha', '0912345678', 1),
(2, 'Đỗ Khánh Vũ     ', '1234567899', 'khanhvux@gmail.com', 'anh4.jpg', 'Thôn Bến - Xã Dị Nậu - Thạch Thất - Hà Nội', '0936273444', 1),
(3, 'Đặng Quang Vinh ', '44444444', 'vinhdq@gmail.com', 'anh4.jpg', 'Hà Nội', '0948327283', 3),
(4, 'Trần Đăng Diện ', '44446666', 'dientd@gmail.com', 'anh4.jpg', 'Hà Nội - Việt Nam', '0912345678', 3),
(5, 'Nguyễn Văn A', '444666888', 'a@gmail.com', '16.jpg', 'Japan', '096364724', 3),
(6, 'Nguyễn Thị Lan', '12345678', 'lannt@gmail.com', 'anh5.jpg', 'Hòa Bình', '09374626472', 3),
(7, 'Messi', '1012345678', 'messi@gmail.com', 'tay1.webp', 'Argentina', '09647263747', 3),
(8, 'Nguyễn Thúy  ', '12345678910', 'thuyn@gamil.com', 'tay2.jpg', 'Hà Nội - Việt Nam', '09462648287', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trangthai_donhang`
--

CREATE TABLE `trangthai_donhang` (
  `id_trangthai` int NOT NULL,
  `ten_trangthai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trangthai_donhang`
--

INSERT INTO `trangthai_donhang` (`id_trangthai`, `ten_trangthai`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Đã xác nhận'),
(3, 'Đang xử lý'),
(4, 'Đang vận chuyển'),
(5, 'Giao hàng thành công'),
(6, 'Chờ thanh toán'),
(7, 'Đã thanh toán'),
(8, 'Đã hủy');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_binhluan_sanpham` (`id_sp`),
  ADD KEY `lk_binhluan_taikhoan` (`id_nguoidung`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_donhang_trangthai_donhang` (`id_trangthai_donhang`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddm`),
  ADD KEY `lk_sanpham_sptheomua` (`id_sptheomua`);

--
-- Chỉ mục cho bảng `sptheomua`
--
ALTER TABLE `sptheomua`
  ADD PRIMARY KEY (`id_mua`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_taikhoan_role` (`id_role`);

--
-- Chỉ mục cho bảng `trangthai_donhang`
--
ALTER TABLE `trangthai_donhang`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `sptheomua`
--
ALTER TABLE `sptheomua`
  MODIFY `id_mua` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `trangthai_donhang`
--
ALTER TABLE `trangthai_donhang`
  MODIFY `id_trangthai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `lk_binhluan_sanpham` FOREIGN KEY (`id_sp`) REFERENCES `sanpham` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_binhluan_taikhoan` FOREIGN KEY (`id_nguoidung`) REFERENCES `taikhoan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `lk_donhang_trangthai_donhang` FOREIGN KEY (`id_trangthai_donhang`) REFERENCES `trangthai_donhang` (`id_trangthai`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `lk_sanpham_sptheomua` FOREIGN KEY (`id_sptheomua`) REFERENCES `sptheomua` (`id_mua`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `lk_taikhoan_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
