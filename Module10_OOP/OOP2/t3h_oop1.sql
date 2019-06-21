-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2019 lúc 12:01 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `t3h`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t3h_oop1`
--

CREATE TABLE `t3h_oop1` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `product_desc` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t3h_oop1`
--

INSERT INTO `t3h_oop1` (`id`, `product_name`, `product_desc`, `created`) VALUES
(1, 'son môi', 'mỹ phẩm', '0000-00-00 00:00:00'),
(2, 'sữa rửa mặt', 'làm đẹp', '0000-00-00 00:00:00'),
(3, 'nước hoa', 'mỹ phẩm', '0000-00-00 00:00:00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `t3h_oop1`
--
ALTER TABLE `t3h_oop1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `t3h_oop1`
--
ALTER TABLE `t3h_oop1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
