-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2022 at 08:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhom1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` int(12) NOT NULL,
  `product_code` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`manu_id`, `manu_name`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(3, 'Dell'),
(4, 'Sony'),
(5, 'Xiaomi');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'IPhone 12 64GB', 1, 2, 20990000, 'iphone-12-do-1-1-org.jpg', 'Trong những tháng cuối năm 2020, Apple đã chính thức giới thiệu đến người dùng cũng như iFan thế hệ iPhone 12 series mới với hàng loạt tính năng bứt phá, thiết kế được lột xác hoàn toàn, hiệu năng đầy mạnh mẽ và một trong số đó chính là iPhone 12 64GB.', 0, '2022-10-30 13:16:13'),
(2, 'IPhone 13 Pro Max 128GB', 1, 2, 33990000, 'iphone-13-pro-max-gold-1-1.jpg', 'IPhone 13 Pro Max 128GB - siêu phẩm được mong chờ nhất ở nửa cuối năm 2021 đến từ Apple. Máy có thiết kế không mấy đột phá khi so với người tiền nhiệm, bên trong đây vẫn là một sản phẩm có màn hình siêu đẹp, tần số quét được nâng cấp lên 120 Hz mượt mà, cảm biến camera có kích thước lớn hơn, cùng hiệu năng mạnh mẽ với sức mạnh đến từ Apple A15 Bionic, sẵn sàng cùng bạn chinh phục mọi thử thách.', 1, '2022-10-30 13:16:13'),
(3, 'IPhone XR 64GB', 1, 2, 13490000, 'iphone-xr-den-1-1-org.jpg', 'Là chiếc điện thoại iPhone có mức giá dễ chịu, phù hợp với nhiều khách hàng hơn, iPhone Xr vẫn được ưu ái trang bị chip Apple A12 mạnh mẽ, màn hình tai thỏ cùng khả năng kháng nước kháng bụi', 0, '2022-10-30 13:16:13'),
(4, 'IPhone 12 Pro Max 128GB', 1, 2, 31990000, 'iphone-12-pro-max-xanh-duong-1-org.jpg', 'iPhone 12 Pro Max 128 GB một siêu phẩm smartphone đến từ Apple. Máy có một hiệu năng hoàn toàn mạnh mẽ đáp ứng tốt nhiều nhu cầu đến từ người dùng và mang trong mình một thiết kế đầy vuông vức, sang trọng.', 1, '2022-10-30 13:16:13'),
(5, 'IPhone SE 128GB (2020) ', 1, 2, 12490000, 'iphone-se-2020-do-1-1-org.jpg', 'iPhone SE 2020 khi được cho ra mắt đã làm thỏa mãn triệu tín đồ Táo khuyết. Máy sở hữu thiết kế siêu nhỏ gọn như iPhone 8, chip A13 Bionic cho hiệu năng khủng như iPhone 11, nhưng iPhone SE 2020 lại có một mức giá tốt đến bất ngờ.', 0, '2022-10-30 13:16:13'),
(6, 'Samsung Galaxy Z Fold3 5G 512GB', 2, 2, 44990000, 'samsung-galaxy-z-fold-3-green2-org.jpg', 'Galaxy Z Fold3 5G đánh dấu bước tiến mới của Samsung trong phân khúc điện thoại gập cao cấp khi được cải tiến về độ bền cùng những nâng cấp đáng giá về cấu hình hiệu năng, hứa hẹn sẽ mang đến trải nghiệm sử dụng đột phá cho người dùng.', 1, '2022-10-30 13:16:13'),
(7, 'Samsung Galaxy A03s', 2, 2, 3490000, 'samsung-galaxy-a03s-black-gc-org.jpg', 'Nhằm đem đến cho người dùng thêm sự lựa chọn trong phân khúc, Samsung đã cho ra mắt thêm một chiếc điện thoại giá rẻ với tên gọi Galaxy A03s. So với người tiền nhiệm Galaxy A02s, thiết bị sẽ có một số nâng cấp mới, đây hứa hẹn sẽ là sản phẩm đáng để bạn trải nghiệm.', 1, '2022-10-30 13:16:13'),
(8, 'Samsung Galaxy Z Fold2 5G', 2, 2, 44000000, 'samsung-galaxy-z-fold-2-den-1-org.jpg', 'Galaxy Z Fold 2 là tên gọi chính thức của điện thoại màn hình gập cao cấp của Samsung. Với nhiều nâng cấp tiên phong về thiết kế, hiệu năng và camera, hứa hẹn đây sẽ là một siêu phẩm thành công tiếp theo đến từ “ông trùm” sản xuất điện thoại lớn nhất thế giới.', 1, '2022-10-30 13:16:13'),
(9, 'Samsung Galaxy Z Flip3 5G 128GB ', 2, 2, 24990000, 'samsung-galaxy-z-flip-3-kem-1-org.jpg', 'Trong sự kiện Galaxy Unpacked hồi 11/8, Samsung đã chính thức trình làng mẫu điện thoại màn hình gập thế hệ mới mang tên Galaxy Z Flip3 5G 128GB. Đây là một siêu phẩm với màn hình gập dạng vỏ sò cùng nhiều điểm cải tiến và thông số ấn tượng, sản phẩm chắc chắn sẽ thu hút được rất nhiều sự quan tâm của người dùng, đặc biệt là phái nữ.', 1, '2022-10-30 13:16:13'),
(26, 'samsung 14 Pro 128GB', 1, 2, 3099000, 'iphone-14-promax-128gb.jpg', '', 1, '2022-10-30 13:16:13'),
(11, 'Laptop Apple MacBook Air M1 2020', 1, 1, 899000, 'macbook-air-m1-2020-gold-02-org.jpg', 'Laptop Apple MacBook Air M1 2020 thuộc dòng laptop cao cấp sang trọng có cấu hình mạnh mẽ, chinh phục được các tính năng văn phòng lẫn đồ hoạ mà bạn mong muốn, thời lượng pin dài, thiết kế mỏng nhẹ sẽ đáp ứng tốt các nhu cầu làm việc của bạn.', 1, '2022-10-30 13:16:13'),
(12, 'Laptop Apple MacBook Pro 16 M1 Max 2021', 1, 1, 90990000, 'apple-macbook-pro-16-m1-max-2021-1.jpg', 'Thật ấn tượng với Apple MacBook Pro 16 M1 Max 2021 mang trên mình \"bộ áo mới\" độc đáo, cuốn hút mọi ánh nhìn cùng màn hình tai thỏ lần đầu tiên xuất hiện ở dòng Mac và ẩn bên trong là bộ cấu hình mạnh mẽ tuyệt vời đến từ con chip M1 Max tân tiến.', 1, '2022-10-30 13:16:13'),
(13, 'Laptop Apple MacBook Pro 14 M1 Pro 2021', 1, 1, 64990000, 'apple-macbook-pro-14-m1-pro-2021-10-core-cpu-1.jpg', 'Apple MacBook Pro 14 inch M1 Pro 2021 gây ấn tượng mạnh khi mang trên mình vẻ ngoài có nhiều cải tiến mới, độc đáo và cuốn hút mọi ánh nhìn cùng hiệu năng mạnh mẽ, đỉnh cao đến từ con chip M1 Pro hiện đại, đáp ứng tối ưu nhu cầu sử dụng cho giới công nghệ, kỹ thuật cũng như cá nhà sáng tạo nội dung chuyên nghiệp.', 1, '2022-10-30 13:16:13'),
(14, 'Laptop Apple MacBook Pro M1 2020', 1, 1, 39990000, 'space-1-org.jpg', 'Apple Macbook Pro M1 2020 với hiệu năng cực kỳ mạnh mẽ tích hợp chip Apple M1 lần đầu xuất hiện trên dòng Mac, con laptop này hứa hẹn sẽ mang đến cho bạn một sản phẩm “Pro” chưa từng thấy.', 1, '2022-10-30 13:16:13'),
(15, 'Samsung Notebook 9\r\n', 2, 1, 31550000, 'samsung-notebook-9-156-inch-300x300.jpg', 'Laptop Samsung Galaxy Book Flex là chiếc máy tính xách tay chạy hệ điều hành Windows 10 Home, tốc độ xung nhịp 3.7GHz giúp máy chạy mượt mà và đa nhiệm. Laptop được trang bị màn hình kích thước 13.3\" cùng công nghệ IPS và độ phân giải 1920 x 1080pixels đem đến hình ảnh hiện thị sắc nét và chân thực.Laptop Samsung Galaxy Book Flex có trọng lượng chỉ 1.2kg thuận tiện mang theo đi làm mỗi ngày.', 0, '2022-10-30 13:16:13'),
(16, 'Laptop Dell Vostro 3400 i5', 3, 1, 18890000, 'dell-vostro-3400-i5-70253900-1.jpg', 'Với hiệu năng vượt trội đến từ con chip Intel Gen 11 tân tiến ẩn bên trong vẻ ngoài mang phong cách tối giản, thanh lịch, laptop Dell Vostro 3400 i5 (70253900) sẽ là một trong những gợi ý đáng để bạn tìm hiểu và chọn mua.', 1, '2022-10-30 13:16:13'),
(17, 'Laptop Dell Gaming G3 15 i7', 3, 1, 31990000, 'dell-g3-15-i7-p89f002bwh-2-org.jpg', 'Laptop Dell G3 15 i7 (P89F002BWH) thuộc dòng laptop gaming với cấu hình mạnh mẽ, thiết kế trang nhã và rất sang trọng, dễ lựa chọn cho cả người đi đọc, đi làm, là 1 phiên bản tốt để lựa chọn cho cả nhu cầu làm việc, học tập và chơi game giải trí.', 1, '2022-10-30 13:16:13'),
(18, 'Apple Watch SE', 1, 5, 8990000, 'se-40mm-vien-nhom-day-cao-su-xanh-den-01.jpg', 'Apple Watch SE 40mm viền nhôm dây cao su hồng có khung viền chắc chắn, thiết kế bo tròn 4 góc giúp thao tác vuốt chạm thoải mái hơn. Mặt kính cường lực Ion-X strengthened glass với kích thước 1.57 inch, hiển thị rõ ràng. Khung viền nhôm chắc chắn cùng dây đeo cao su có độ đàn hồi cao, êm ái, tạo cảm giác thoải mái khi đeo.', 1, '2022-10-30 13:16:13'),
(19, 'Apple Watch Series 7 LTE', 1, 5, 22990000, 'apple-watch-series-7-lte-45mm-day-thep-bac-1.jpg', 'Apple Watch S7 LTE 45 mm sở hữu khung viền thép không gỉ cứng cáp, sang trọng cùng thiết kế bo cong mềm mại ở phần góc và mặt kính Sapphire có kích thước 1.77 inch (diện tích màn hình tăng 20% so với phiên bản cũ), bảo vệ tốt mặt kính trước những va đập. Phần viền đồng hồ được được làm mỏng nhẹ chỉ 1.7 mm, tạo cảm giác tràn viền nhiều hơn (phần viền mỏng hơn 60% so với Apple Watch S6).', 1, '2022-10-30 13:16:13'),
(20, 'Samsung Galaxy Watch 3', 2, 5, 4990000, 'samsung-galaxy-watch-3-45mm-bac-2-org.jpg', 'Samsung Galaxy Watch 3 45mm viền thép bạc dây da với tấm nền Super AMOLED 1.4 inch và độ phân giải 360x360 pixels, đồng hồ có khả năng hiển thị xuất sắc với màu sắc rực rỡ, thông tin hiển thị đầy đủ, rõ ràng. Khung viền của đồng hồ được làm bằng thép không gỉ chắc chắn và chống ăn mòn.', 1, '2022-10-30 13:16:13'),
(21, 'Samsung Galaxy Watch 4 LTE Classic 46mm', 2, 5, 9990000, 'samsung-galaxy-watch-4-lte-classic-46mm1-org.jpg', 'Samsung Galaxy Watch 4 LTE Classic 46mm mang nét sang trọng, hiện đại cùng với bộ khung viền thép không gỉ cứng cáp, màn hình SUPER AMOLED được bao bọc bởi lớp kính cường lực Gorrilla Glass Dx+ bền bỉ, chịu lực tốt. Dây đeo silicone êm nhẹ, độ đàn hồi cao, không thấm nước, thiết kế đục lỗ cho người dùng sự thông thoáng khi mang.', 1, '2022-10-30 13:16:13'),
(22, 'Xiaomi Watch S1 46.5mm ', 5, 5, 2390000, 'xiaomi-watch-s1-1-1.jpg', 'Đồng hồ thông minh Mi Watch này mang phong cách trẻ trung, cá tính và đậm chất thể thao. Đồng hồ được trang bị công nghệ màn hình AMOLED với kích thước 1.39 inch cùng độ phân giải 454 x 454 pixels và độ sáng lên đến 450 nits giúp người dùng có thể quan sát thông tin rõ nét, chất lượng. Bên cạnh đó, đồng hồ còn được trang bị mặt kính cường lực Gorilla Glass 3 hạn chế trầy xước và tăng độ bền cho thiết bị. ', 1, '2022-10-30 13:16:13'),
(23, 'Mi Band 6', 5, 5, 949000, 'mi-band-6-1-2-org.jpg', 'Vòng đeo tay thông minh Mi Band 6 là phiên bản đáng mong đợi của nhà Xiaomi với thiết kế màn hình tràn viền cho bạn góc nhìn tốt hơn. Mặt kính cường lực chống trầy xước tốt cùng dây đeo cao su với thiết kế ôm trọn cổ tay, không thấm nước khi đeo, mang lại cho bạn cảm giác dễ chịu cả ngày dài.', 1, '2022-10-30 13:16:13'),
(24, 'Tai nghe Bluetooth True Wireless Sony WF-C500', 4, 4, 2290000, 'bluetooth-true-wireless-sony-wf-c500-trang-2.jpg', 'Tai nghe Bluetooth True Wireless Sony WF-C500 được thiết kế nhỏ gọn, bo tròn các góc cạnh để vừa khớp với đôi tai của bạn cho cảm giác dễ chịu khi đeo. Bạn có thể tùy thích lựa chọn chiếc tai nghe phù hợp cho phong cách, sở thích của bản thân với các màu trắng, đen, cam, xanh ngọc.', 1, '2022-10-30 13:16:13'),
(25, 'Samsung Galaxy Book Flex', 2, 1, 31550000, 'galaxy-book-flex2-alpha-4_800x450.jpg\r\n', 'Laptop Samsung Galaxy Book Flex là chiếc máy tính xách tay chạy hệ điều hành Windows 10 Home, tốc độ xung nhịp 3.7GHz giúp máy chạy mượt mà và đa nhiệm. Laptop được trang bị màn hình kích thước 13.3\" cùng công nghệ IPS và độ phân giải 1920 x 1080pixels đem đến hình ảnh hiện thị sắc nét và chân thực.Laptop Samsung Galaxy Book Flex có trọng lượng chỉ 1.2kg thuận tiện mang theo đi làm mỗi ngày.', 1, '2022-10-30 13:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'Laptop'),
(2, 'Smartphone'),
(3, 'Camera'),
(4, 'Earphone'),
(5, 'Smartwatch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `phone`, `email`, `username`, `password`) VALUES
(1, 'Minh', NULL, NULL, 'admin', '123654'),
(2, 'Tuan Anh', '0123456789', 'tuanh@gmail.com', 'user', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
