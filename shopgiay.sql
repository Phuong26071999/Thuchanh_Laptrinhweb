-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2020 lúc 05:17 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay`
--

CREATE TABLE `giay` (
  `magiay` varchar(5) NOT NULL,
  `tengiay` varchar(150) NOT NULL,
  `mota` varchar(150) NOT NULL,
  `gia` int(10) NOT NULL,
  `hinh` varchar(150) DEFAULT NULL,
  `maloai` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `giay`
--

INSERT INTO `giay` (`magiay`, `tengiay`, `mota`, `gia`, `hinh`, `maloai`) VALUES
('c01', 'Urbas Inversion', 'Urbas \"Inversion\" là một pack giày đầy thú vị cho những ai muốn thêm sắc màu cho cuộc sống.', 510000, 'Urbas Inversion-1.jpg,Urbas Inversion-2.jpg,Urbas Inversion-3.jpg,Urbas Inversion-4.jpg', 'L01'),
('c02', 'Vintas Yesterday', '\"Yesterday\" gợi cho người nhìn một cảm giác vừa cổ điển, vừa tân thời.', 480000, 'Vintas Yesterday-1.jpg,Vintas Yesterday-2.jpg,Vintas Yesterday-3.jpg,Vintas Yesterday-4.jpg', 'L01'),
('c03', 'Basas Familiar', 'chưa có mô tả', 420000, 'Basas Familiar-1.jpg,Basas Familiar-2.jpg,Basas Familiar-3.jpg,Basas Familiar-4.jpg', 'L01'),
('c04', 'Basas Simple', 'chưa có mô tả', 370000, 'Basas Simple-1.jpg,Basas Simple-2.jpg,Basas Simple-3.jpg,Basas Simple-4.jpg', 'L01'),
('c05', 'Basas Special', 'chưa có mô tả', 370000, 'Basas Special-1.jpg,Basas Special-2.jpg,Basas Special-3.jpg,Basas Special-4.jpg', 'L01'),
('c06', 'Vintas Saigon', 'chưa có mô tả', 510000, 'Vintas Saigon-1.jpg,Vintas Saigon-2.jpg,Vintas Saigon-3.jpg,Vintas Saigon-4.jpg', 'L01'),
('c07', 'Urbas Lego', 'chưa có mô tả', 450000, 'Urbas Lego-1.jpg,Urbas Lego-2.jpg,Urbas Lego-3.jpg,Urbas Lego-4.jpg', 'L01'),
('c08', 'Urbas Pop-up', 'chưa có mô tả', 420000, 'Urbas Pop-up-1.jpg,Urbas Pop-up-2.jpg,Urbas Pop-up-3.jpg,Urbas Pop-up-4.jpg', 'L01'),
('c09', 'Urbas Cloudy', 'chưa có mô tả', 420000, 'Urbas Cloudy-1.jpg,Urbas Cloudy-2.jpg,Urbas Cloudy-3.jpg,Urbas Cloudy-4.jpg', 'L01'),
('p01', 'Ananas-Hat', 'chưa có mô tả', 270000, 'Hat-black.jpg', 'L03'),
('p02', 'Special-Hat', 'chưa có mô tả', 290000, 'ananas-hat.jpg', 'L03'),
('p03', 'Pink-Hat', 'chưa có mô tả', 200000, 'Hat-pink.jpg', 'L03'),
('p04', 'Crew-Socks B', 'chưa có mô tả', 90000, 'vo_den-1.jpg,vo_den-2.jpg,vo_den-3.jpg', 'L03'),
('p05', 'Crew-Socks W', 'chưa có mô tả', 90000, 'vo_trang-1.jpg,vo_trang-2.jpg,vo_trang-3.jpg', 'L03'),
('p06', 'Hiphop Tee', 'Áo đỏ chứng tỏ YÊU EM(ANH)!!! Câu slogan bá cháy cùng với chiếc áo đỏ mà ai cũng cần phải có để có thể tìm được tình yêu đích t', 350000, 'Ao_do-1.jpg,Ao_do-2.jpg', 'L03'),
('p07', 'Hiphop Graphic Tee', 'Tất cả chúng ta đều trở nên huyền bí khi khoát lên người màu của phái mạnh(đen). và chiếc Hiphop Graphic Tee sinh ra là để làm bạn ', 390000, 'Ao_den-1.jpg,Ao_den-2.jpg', 'L03'),
('s01', 'Bitis Hunter X', 'Một sản phẩm giúp bạn chinh phục mọi địa hình êm ái ngay cả khi chân bạn đã quá mệt.', 699000, 'Bitis Hunter X-1.jpg,Bitis Hunter X-2.jpg,Bitis Hunter X-3.jpg,Bitis Hunter X-4.jpg', 'L02'),
('s02', 'Bitis Hunter', 'Kết hợp giữa sự trẻ trung, năng động với màu xanh Navy.', 500000, 'Bitis hunter-1.jpg,Bitis hunter-2.jpg', 'L02'),
('s03', 'adidas pink', 'chưa có mô tả', 420000, 'Adidas_pink-1.jpg,Adidas_pink-2.jpg,Adidas_pink-3.jpg', 'L02'),
('s04', 'HunterX While', 'chưa có mô tả', 699000, 'Hunter_white-1.jpg,Hunter_white-2.jpg,Hunter_white-3.jpg,Hunter_white-4.jpg', 'L02'),
('s05', 'Hunter Green', 'chưa có mô tả', 500000, 'Hunter Green.jpg', 'L02'),
('s06', 'Hunter Blue', 'chưa có mô tả', 300000, 'Hunter blue.jpg', 'L02'),
('T01', 'test', 'ưqdwfwfwe', 1000, 'phim-hoat-hinh-doremon.jpg', 'L03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `maloai` varchar(5) NOT NULL,
  `tenloai` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('L01', 'classic'),
('L03', 'phụ kiện'),
('L02', 'sport');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantri`
--

CREATE TABLE `quantri` (
  `username` varchar(50) NOT NULL,
  `matkhau` varchar(40) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `quyen` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `quantri`
--

INSERT INTO `quantri` (`username`, `matkhau`, `ten`, `quyen`) VALUES
('phuong', '25d55ad283aa400af464c76d713c07ad', 'phuong', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`magiay`),
  ADD UNIQUE KEY `tengiay` (`tengiay`),
  ADD KEY `maloai` (`maloai`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`),
  ADD UNIQUE KEY `tenloai` (`tenloai`);

--
-- Chỉ mục cho bảng `quantri`
--
ALTER TABLE `quantri`
  ADD PRIMARY KEY (`username`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `giay`
--
ALTER TABLE `giay`
  ADD CONSTRAINT `giay_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
