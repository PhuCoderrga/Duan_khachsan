-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2022 lúc 05:39 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `khachsan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `desc_short` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `desc_short`, `created_at`, `updated_at`) VALUES
(1, 'Đà Nẵng', 'da-nang', 'đà nẵng mộng mơ', '2022-08-12 07:51:32', '2022-08-16 00:17:21'),
(2, 'Hà Nội', 'ha-noi', 'hà nội đẹp trai có hồ gươm', '2022-08-12 07:51:55', '2022-08-16 00:17:58'),
(3, 'Quy Nhơn', 'quy-nhon', 'quy nhơn', '2022-08-12 07:52:08', '2022-08-12 07:52:08'),
(4, 'Hải Phòng', 'hai-phong', 'hải phòng', '2022-08-12 07:52:31', '2022-08-12 07:52:31'),
(5, 'Đà Lạt', 'da-lat', 'da lat', '2022-08-12 07:52:44', '2022-08-12 07:52:44'),
(6, 'Hội An', 'hoi-an', 'Thành Phố Cổ', '2022-08-16 00:04:07', '2022-08-16 00:04:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `price_discount` double NOT NULL,
  `desc_short` varchar(255) NOT NULL,
  `desc_long` varchar(255) NOT NULL,
  `feature_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `slug`, `price`, `price_discount`, `desc_short`, `desc_long`, `feature_img`, `created_at`, `updated_at`) VALUES
(16, 'Tour Đà Lạt 3N2Đ 2', 1, 'tour-da-lat-3n2d', 10990000, 8990000, 'Tour đà lạt mộng mơ', 'Tour đà lạt mộng mơ Tour đà lạt mộng mơ Tour đà lạt mộng mơ', 'admin/assets/img/products/2022081605013124.jpeg', '2022-08-15 21:44:53', '2022-08-15 22:45:48'),
(17, 'Tour Quy Nhơn', 2, 'tour-quy-nhon', 15060000, 8900600, 'Quy nhơn đẹp', 'Quy nhơn đẹp Quy nhơn đẹp Quy nhơn đẹp Quy nhơn đẹp', 'admin/assets/img/products/202208160555312.jpeg', '2022-08-15 21:51:40', '2022-08-15 23:04:34'),
(18, 'Tour Nha Trang', 2, 'tour-nha-trang', 10230900, 12650000, 'Nha trang bao đã', 'Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã Nha trang bao đã', 'admin/assets/img/products/20220816061465.jpg', '2022-08-15 23:14:17', '2022-08-15 23:14:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` char(255) DEFAULT NULL,
  `phonenumber` int(11) DEFAULT NULL,
  `cccd` int(11) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `distric` varchar(255) DEFAULT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phonenumber`, `cccd`, `province`, `distric`, `ward`, `address`, `email`, `password`, `id_role`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Trọng Phú', 908379355, 272754434, 'Đồng Nai', 'Nhơn Trạch', 'Vĩnh Thanh', '168, Ấp Hòa Bình', 'Nguyentrongphu143@gmail.com', '$2a$04$nIAxPgAV9pK.T2Chzi4qZeU9qKMUzalGMLLNO5r0b9EtaeT7jxo..', 1, '2022-08-16 07:31:12', '2022-08-16 09:22:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_login`
--

INSERT INTO `user_login` (`id_user`, `password`) VALUES
(1, '7XwIl1Y5eXnCBxCoPl/hNCP02BOaIFVQY3tunxpHR88=');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_tracking`
--

CREATE TABLE `user_tracking` (
  `id_user` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_tracking`
--

INSERT INTO `user_tracking` (`id_user`, `datetime`, `count`) VALUES
(1, '0000-00-00 00:00:00', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Chỉ mục cho bảng `user_tracking`
--
ALTER TABLE `user_tracking`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_tracking`
--
ALTER TABLE `user_tracking`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
