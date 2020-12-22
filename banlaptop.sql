-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 04:07 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banlaptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ten_admin` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `taikhoan`, `password`, `ten_admin`) VALUES
(1, 'huukhang', '9aa0e3cd24ef574552fbacc82a632614', 'Huỳnh Hữu Khang'),
(3, 'khanhduy', 'edafd89d38d972e480fad7774b77147c', 'Lê Nguyễn Khánh Duy');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `ten_baiviet` varchar(100) NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text NOT NULL,
  `id_danhmuctin` int(11) NOT NULL,
  `image_baiviet` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_baiviet`, `ten_baiviet`, `tomtat`, `noidung`, `id_danhmuctin`, `image_baiviet`) VALUES
(1, 'Dell XPS 13 và XPS 15 ra mắt, giá từ 39,99 triệu đồng', 'Dòng sản phẩm luôn được đánh giá cao nhờ sở hữu thiết kế truyền cảm hứng và độc nhất, XPS 13 và XPS 15 của Dell đã chính thức có mặt tại Việt Nam.', 'Xuất hiện lần đầu tại sự kiện CES thường niên hồi đầu năm nay, mẫu XPS 13 mới được thiết kế nhỏ và mỏng hơn, màn hình hiển thị lớn hơn, hướng đến trải nghiệm sang trọng và vượt trội nhất có thể với những vật liệu tốt nhất. XPS 13 sở hữu thiết kế thanh lịch, cứng cáp và gọn nhẹ nhờ chế tác tỉ mỉ từ nhôm đúc, sợi carbon và kính cường lực Corning Gorilla được gia cố.\r\n\r\nVới việc thu nhỏ viền màn hình InfinityEdge trên XPS 13, Dell cung cấp nhiều diện tích hiển thị hơn dành cho những người dùng yêu thích màn hình tràn viền, đồng thời mang đến một kiểu dáng gọn và mỏng hơn so với các thế hệ XPS trước đó. Với tỉ lệ 16:10 lớn hơn, tràn ra bốn cạnh, màn hình InfinityEdge mới trên XPS cho độ sáng cao hơn 25%, nhiều không gian hiển thị cho các tác vụ đa nhiệm và thể hiện sống động mọi chi tiết khi thưởng thức những bộ phim nhiều tập mới nhất. Vẫn theo tôn chỉ không ngừng đổi mới của dòng XPS, thiết kế mới mang đến màn hình 13,4 inch trong kiểu dáng của một chiếc máy 11 inch, giúp nằm gọn ở bất kỳ chiếc bàn nào dù là nhỏ nhất trong quán cà phê yêu thích của bạn.\r\nMàn hình tràn viền ở bốn cạnh InfinityEdge với tỉ lệ 16:10 mang đến diện tích hiển thị lớn hơn 5% cùng kích thước nhỏ hơn 5,6% so với thế hệ trước. XPS 15 là mẫu laptop 15,6 inch nhỏ nhất sở hữu hiệu năng cao, tỉ lệ màn hình so với thân máy đạt 92,9%, xấp xỉ 1 triệu điểm ảnh.\r\n\r\nTrang bị vi xử lý Intel Core thế hệ 10 và tùy chọn card đồ họa NVIDIA GeForce GTX 1650 Ti, mẫu XPS 15 mới có thể hoạt động hơn 9 giờ khi bạn xem những bộ phim ưa thích ở độ phân giải UHD+ với viên pin 86WHr. Thiết kế tản nhiệt tiên tiến giúp XPS 15 tích hợp hai quạt, hai ống dẫn nhiệt, và ống thoát nhiệt nằm ẩn bên dưới bản lề trong một thiết kế mỏng hơn 8%.', 1, 'dell_tin1.jpg'),
(2, 'Ra mắt ASUS E210: laptop 11,6-inch nhỏ gọn, pin lên đến 12 tiếng', 'ASUS E210 nhỏ gọn với bản lề 180 độ, nắp lưng họa tiết, hiệu năng tối ưu với 4GB RAM, 128GB eMMC, pin lên đến 12 tiếng; bàn phím số ảo NumberPad.', 'E210 được thiết kế nhỏ gọn để có thể nằm gọn gàng trong balo, túi xách: màn hình 11,6-inch và nhẹ chỉ 1,05kg. Kích thước nhỏ hơn giấy A4 và trọng lượng nhẹ mang lại tính di động cho máy. Với thời lượng pin lên đến 12 tiếng, E210 chỉ cần một lần sạc đầy để hỗ trợ và đồng hành cùng người dùng cả ngày dài.\r\nMáy được trang bị NumberPad, bàn phím số ảo được tích hợp tại bàn di chuột 6-inch. Thiết kế này giúp giải quyết được vấn đề thiếu bàn phím số vật lý thường thấy trên các mẫu laptop nhỏ, chỉ cần chạm vào biểu tượng On/Off tại góc phải bàn di chuột để kích hoạt NumberPad. Laptop này được cài sẵn Windows 10 bản quyền giúp tăng độ bảo mật và tính ổn định.', 2, 'asus_tin1.jpg'),
(3, 'Đánh giá MSI GeForce RTX 3090 Gaming X TRIO: Khi sức mạnh của card đồ họa đã được đẩy đến giới hạn', 'Chơi game 4K là điều RTX 2080 Ti cách đây 2 năm còn phải chật vật, thế mà giờ đây RTX 3090 đã gánh tốt và còn hơn thế nữa.', 'Trong khi phần lớn người đam mê công nghệ sôi sục vì iPhone 12 và việc không có tai nghe với củ sạc ảnh hưởng thế nào, hội đam mê PC vẫn còn đang bận "vật" nhau trên mạng về chuyện bao giờ thì RTX 3000 mới có hàng mà mua. Tuy muộn màng nhưng hôm nay tôi vẫn có trên tay một chiếc MSI GeForce RTX 3090 Gaming X TRIO để thử trải nghiệm cảm giác dùng card đồ họa chơi game khủng nhất thế giới hiện nay. Đây cũng là chiếc card đồ họa cao cấp nhất ở thời điểm hiện tại của MSI.', 5, 'msi3.jpg'),
(13, 'abcxyz', 'xxx', 'zzz', 1, 'acer3.jpg'),
(8, 'qqqq', 'dada', 'dad', 2, 'QL Loai SanPham.jpg'),
(9, 'adada', 'dad', 'dada', 5, 'asus3.jpg'),
(10, 'fgdrhdhdh', 'adad', 'dadad', 3, 'mb2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danhmuc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten_danhmuc`) VALUES
(1, 'Macbook'),
(2, 'Dell'),
(3, 'Acer'),
(4, 'Asus'),
(5, 'MSI');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_tin`
--

CREATE TABLE `danhmuc_tin` (
  `id_danhmuctin` int(11) NOT NULL,
  `ten_danhmuctin` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc_tin`
--

INSERT INTO `danhmuc_tin` (`id_danhmuctin`, `ten_danhmuctin`) VALUES
(1, 'Laptop DELL'),
(2, 'Laptop ASUS'),
(3, 'Laptop Acer'),
(5, 'Laptop MSI ');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `mahang` varchar(50) NOT NULL,
  `id_khachhang` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id_donhang`, `id_sanpham`, `soluong`, `mahang`, `id_khachhang`) VALUES
(26, 2, 1, '2847', 54),
(28, 1, 1, '386', 55),
(29, 7, 9, '775', 55),
(30, 9, 1, '4389', 58),
(31, 1, 1, '4389', 58),
(33, 2, 1, '8376', 61),
(34, 1, 1, '4179', 61),
(35, 1, 3, '7099', 55),
(36, 3, 1, '6213', 55),
(37, 2, 2, '1138', 55),
(38, 1, 1, '9775', 55),
(39, 3, 1, '3657', 55);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(11) NOT NULL,
  `tensanpham` varchar(100) NOT NULL,
  `idsanpham` int(11) NOT NULL,
  `giasanpham` int(11) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `soluong` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id_khachhang` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `giaohang` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id_khachhang`, `name`, `phone`, `address`, `note`, `email`, `giaohang`, `password`) VALUES
(55, 'HDDA', '+84943144514', '433 ', 'DADA', 'abc@gmail.com', 1, '202cb962ac59075b964b07152d234b70'),
(54, 'Khang', '09131331', '73 Ông Ích Khiêm', 'daadada', 'huukhang1999@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(56, 'Huỳnh Hữu Khang', 'sasa', 'dada 113', 'ada', 'DH51700916@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(57, 'Duy', '1123', '73 Ông Ích Khiêm', 'vafafa', 'abcxyz@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(58, 'Huy Lê', '122', 'dada', 'adadad', '123@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(59, 'Toàn Nguyễn', '1234', '73 Ông Ích Khiêm', 'daf', '1@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(60, 'Nguyễn Minh Nhật', '0943144514', '73 Ông Ích Khiêm', 'abcxyz', 'nhat@gmail.com', 0, '202cb962ac59075b964b07152d234b70'),
(61, 'AAAAA', '91010111', '73 Ông Ích Khiêm', 'CON CAC', 'khang123@gmail.com', 1, 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_sanpham` varchar(255) NOT NULL,
  `chitiet_sanpham` text NOT NULL,
  `mota_sanpham` text NOT NULL,
  `gia_sanpham` int(100) NOT NULL,
  `giakm_sanpham` int(100) NOT NULL,
  `status_sanpham` int(11) NOT NULL,
  `hot_sanpham` int(11) NOT NULL,
  `soluong_sanpham` int(11) NOT NULL,
  `image_sanpham` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `id_danhmuc`, `ten_sanpham`, `chitiet_sanpham`, `mota_sanpham`, `gia_sanpham`, `giakm_sanpham`, `status_sanpham`, `hot_sanpham`, `soluong_sanpham`, `image_sanpham`) VALUES
(1, 5, 'Laptop MSI Bravo 17 A4DDR ', 'Đây là chi tiết', 'Đây là mô tả', 23900000, 21990000, 1, 0, 5, 'msi1.jpg'),
(2, 5, 'Laptop MSI Modern 14 B11SB 074VN', 'Đây là chi tiết', 'Đây là mô tả', 22990000, 22190000, 1, 0, 10, 'msi2.jpg'),
(3, 4, 'Laptop ASUS ZenBook 14 UX425EA BM113T', 'Đây là chi tiết', 'Đây là mô tả', 28990000, 27990000, 1, 1, 10, 'asus1.jpg'),
(4, 4, 'Laptop ASUS X509JP EJ013T', 'Đây là chi tiết', 'Đây là mô tả', 15990000, 15590000, 1, 1, 20, 'asus2.jpg'),
(5, 3, 'Laptop Acer Predator Helios 300 ', 'Đây là chi tiết', 'Đây là mô tả', 43490000, 40490000, 1, 0, 10, 'acer1.jpg'),
(6, 3, 'Laptop Acer Nitro 5 AN515 55 77P9', 'Đây là chi tiết', 'Đây là mô tả', 28990000, 26990000, 1, 0, 10, 'acer2.jpg'),
(7, 2, 'Laptop Dell Inspiron 15 7501 X3MRY1', 'Đây là chi tiết', 'Đây là mô tả', 30490000, 28990000, 1, 1, 10, 'dell1.jpg'),
(8, 2, 'Laptop Dell Inspiron G3 3590 70203973', 'Đây là chi tiết', 'Đây là mô tả', 32990000, 29990000, 1, 0, 10, 'dell2.jpg'),
(9, 1, 'Laptop Apple MacBook Air 2018 13" MREA2', 'Đây là chi tiết', 'Đây là mô tả', 31900000, 29900000, 1, 0, 10, 'mb1.jpg'),
(10, 1, 'Laptop Apple Macbook Pro 2018 13.3" MR9U2', 'Đây là chi tiết', 'Đây là mô tả', 44390000, 41390000, 1, 0, 10, 'mb2.jpg'),
(11, 5, 'Laptop MSI Bravo 17 A4DDR ', 'Đây là chi tiết', 'Đây là mô tả', 23990000, 21990000, 1, 1, 5, 'msi3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `image_slider` varchar(100) NOT NULL,
  `caption_slider` text NOT NULL,
  `status_slider` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `image_slider`, `caption_slider`, `status_slider`) VALUES
(1, 'b1.jpg', 'Sản phẩm 1', 1),
(2, 'b3.jpg', 'slider 2', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `danhmuc_tin`
--
ALTER TABLE `danhmuc_tin`
  ADD PRIMARY KEY (`id_danhmuctin`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_khachhang`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `danhmuc_tin`
--
ALTER TABLE `danhmuc_tin`
  MODIFY `id_danhmuctin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_khachhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
