-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 08:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ducshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idsp` int(11) NOT NULL,
  `ngaybinhluan` varchar(255) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idsp`, `ngaybinhluan`, `iduser`) VALUES
(16, 'Tuyệt man', 4, '03:44:57am 09/12/2023', 3),
(17, 'Cũng tạm thôi', 3, '03:49:45am 09/12/2023', 3),
(18, 'Tạm tạm', 15, '03:55:33am 09/12/2023', 3),
(19, 'Yè', 9, '07:10:44am 09/12/2023', 3),
(20, 'Tuyệt man', 5, '10:06:49am 09/12/2023', 3);

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(255) NOT NULL,
  `iddonhang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `idsp`, `soluong`, `thanhtien`, `iddonhang`) VALUES
(23, 7, 1, 270000, 14),
(24, 2, 3, 450000, 14),
(25, 15, 2, 300000, 15),
(26, 3, 1, 148000, 15),
(27, 7, 1, 270000, 16),
(28, 3, 1, 148000, 15),
(29, 7, 1, 270000, 18),
(30, 6, 1, 180000, 19),
(31, 7, 1, 270000, 20),
(32, 6, 1, 180000, 21),
(33, 2, 1, 150000, 22),
(34, 15, 1, 150000, 23),
(35, 5, 4, 600000, 24),
(36, 10, 3, 150000, 25),
(37, 2, 1, 150000, 26),
(38, 3, 1, 148000, 40),
(39, 4, 1, 50000, 41),
(40, 3, 4, 592000, 42),
(41, 2, 4, 600000, 42),
(42, 1, 1, 35000, 43),
(43, 1, 1, 35000, 44),
(44, 1, 1, 35000, 45),
(45, 5, 1, 150000, 46),
(46, 4, 1, 50000, 46),
(47, 1, 1, 35000, 47),
(48, 3, 1, 148000, 48),
(49, 4, 1, 50000, 49),
(50, 1, 1, 35000, 50),
(51, 5, 1, 150000, 51),
(52, 9, 1, 65000, 52),
(53, 14, 1, 80000, 53),
(54, 4, 1, 50000, 54),
(55, 5, 1, 150000, 55),
(56, 1, 1, 35000, 56),
(57, 1, 1, 35000, 57),
(58, 1, 1, 35000, 58),
(59, 10, 1, 50000, 59),
(60, 2, 1, 150000, 60),
(61, 11, 1, 75000, 61),
(62, 15, 1, 150000, 62),
(63, 1, 1, 35000, 63),
(64, 3, 1, 148000, 64),
(65, 3, 1, 148000, 65),
(66, 6, 1, 180000, 66),
(67, 10, 1, 50000, 68),
(68, 1, 1, 35000, 69),
(69, 4, 1, 50000, 70),
(70, 9, 1, 65000, 71),
(71, 12, 1, 75000, 72),
(72, 16, 1, 215000, 73),
(73, 12, 2, 150000, 74),
(74, 12, 1, 75000, 75),
(75, 13, 1, 45000, 76),
(76, 15, 1, 150000, 77),
(77, 9, 1, 65000, 78),
(78, 9, 1, 65000, 79),
(79, 1, 1, 35000, 80),
(80, 1, 1, 35000, 81),
(81, 2, 1, 150000, 82),
(82, 1, 1, 35000, 83),
(83, 3, 1, 148000, 84),
(84, 2, 1, 150000, 85),
(85, 2, 1, 150000, 86),
(86, 1, 2, 70000, 87),
(87, 9, 1, 65000, 88),
(88, 14, 1, 80000, 89),
(89, 9, 1, 65000, 90),
(90, 1, 1, 35000, 91),
(91, 11, 1, 75000, 92),
(92, 12, 1, 75000, 93),
(93, 3, 1, 148000, 94),
(94, 4, 1, 50000, 95),
(95, 4, 1, 50000, 96),
(96, 4, 1, 50000, 97),
(97, 2, 1, 150000, 98),
(98, 1, 1, 35000, 98),
(99, 4, 1, 50000, 99);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Gel bôi trơn cao cấp'),
(2, 'Bao cao su 3D'),
(3, 'Bao cao su có gân, gai'),
(4, 'Bao cao su có hương thơm'),
(5, 'Bao cao su cổ điển'),
(7, 'Bao cao su cao cấp');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `iddonhang` int(11) NOT NULL,
  `madonhang` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `magiamgia` varchar(255) DEFAULT NULL,
  `ghichu` text DEFAULT NULL,
  `pttt` int(11) NOT NULL,
  `tong` int(255) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`iddonhang`, `madonhang`, `hoten`, `phone`, `diachi`, `magiamgia`, `ghichu`, `pttt`, `tong`, `tinhtrang`, `ngaydat`, `iduser`) VALUES
(95, 'PMD966416', 'Phùng Mạnh Đức', 921044773, 'Hà Nội', 'TETXUAN24', '', 3, 65000, 1, '2023-12-04 18:26:57', 3),
(96, 'PMD378328', 'Phùng Mạnh Đức', 921044773, 'Hà Nội', '', '', 3, 80000, 1, '2023-12-05 13:15:03', 3),
(97, 'PMD720876', 'Phùng Mạnh Đức', 921044773, 'Hà Nội', '', '', 1, 80000, 3, '2023-12-09 02:56:42', 3),
(98, 'PMD988092', 'Phùng Mạnh Đức', 921044773, 'Hà Nội', 'TETXUAN24', '', 3, 200000, 5, '2023-12-09 13:04:05', 3),
(99, 'PMD886163', 'Phùng Mạnh Đức', 889564869, 'Hà Nội', '', '', 1, 80000, 1, '2023-12-13 06:14:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `id` int(11) NOT NULL,
  `magiamgia` varchar(255) NOT NULL,
  `sotiengiam` int(11) NOT NULL,
  `thoigiantao` datetime NOT NULL,
  `thoigianhet` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`id`, `magiamgia`, `sotiengiam`, `thoigiantao`, `thoigianhet`) VALUES
(12, 'TETXUAN24', 15000, '2023-12-02 11:10:32', '2023-12-30 17:10:00'),
(13, 'TESTMA', 25000, '2023-12-02 11:21:08', '2023-12-01 17:21:00'),
(14, 'TRIANKH24', 20000, '2023-12-09 12:27:55', '2024-01-31 18:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `mota` text DEFAULT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `iddanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `price`, `image`, `mota`, `view`, `iddanhmuc`) VALUES
(1, 'Bao cao su Xtreme Super Thin (Hộp 2)', 35000, 'bcscc3.jpg', 'Bao cao su Sagami Xtreme Super Thin thăng hoa cảm xúc<br>\nBao cao su Sagami Xtreme Super Thin là loại bao cao su được thiết kế dành riêng cho đôi lứa muốn hưởng thụ cảm giác chân thật, nguyên sơ từ bạn tình mà không gặp rào cản, cũng bởi sản phẩm chỉ mỏng bằng một nửa các sản phẩm bao cao su thông thường khác vì vậy khi quan hệ, đôi bạn như quên đi cảm giác đang dùng áo mưa mà tiếp xúc “da chạm da”.<br>\n\nCông nghệ khử mùi cao su của hãng Sagami đến từ Nhật Bản cực tốt với màu sắc tương đồng màu da người lại không hề có mùi cao su khó chịu, là lựa chọn hoàn hảo với những người không chịu nổi mùi cao su.<br>\n\nĐộ bền cao, tự co giãn theo kích thước: Sagami Xtreme Super Thin được làm từ cao su tự nhiên không mùi, có tính truyền nhiệt cực nhanh, độ bền cao, co giãn tốt theo kích cỡ cơ thể.<br>\n\n\n\nChứa nhiều gel bôi trơn: Sản phẩm có chứa chất bôi trơn cao cấp, giúp nam giới dễ mặc đeo tháo báo, làm cho cuộc yêu trở nên trơn tru và tăng khoái cảm\n<br>\nXuất xứ: Nhật bản\nQuy cách: Hộp 2 Chiếc\nHướng dẫn sử dụng bao cao su Sagami Xtreme Super Thin:\n- Xé dọc một bên gói, tránh làm rách bao cao su bên trong.\n<br>\n- Mang bao cao su vào trong khi dương vật cương.\n<br>\n- Ngay sau khi xuất tinh, rút dương vật ra khi vẫn còn đang cương bằng cách giữ chặt bao cao su. Chỉ tháo bao cao su ra khi dương vật đã được rút ra hoàn toàn.\n<br>\n- Hủy bao cao su đã dùng một cách vệ sinh. Gói bao cao su lại và bỏ vào thùng rác.\n<br>\nSản phẩm bao cao su Sagami Xtreme Super Thin đúng như tên gọi siêu mỏng ôm khít là sự lựa chọn thông minh cho các bạn nam khi hẹn hò cũng như là sản phẩm nên có trong tủ của các cặp vợ chồng mỗi khi việc quan hệ trở nên nhàm chán.', 16, 5),
(2, 'Bao cao su Sagami Super Thin (Hộp 10)', 150000, 'bcscc2.jpg', 'Sản phẩm bao cao su Sagami Xtreme Super Thin hộp 10 cái<br>\r\nĐúng như tên gọi, bao cao su Sagami Xtreme Superthin siêu mỏng, độ bền cao, có khả năng co giãn, đàn hồi tốt kết hợp cùng gel bôi trơn cao cấp là lựa chọn lý tưởng giúp tăng cường hưng phấn, cho cảm giác chân thật, tự nhiên và bảo vệ bạn khỏi nguy cơ lây nhiễm các mầm bệnh lây qua đường tình dục nguy hiểm.<br>\r\n\r\nBao cao su Sagami Xtreme Super Thin là loại bao cao su siêu siêu mỏng, chỉ 0.03mm, mỏng bằng một nửa so với các loại bao cao su thông thường, hãng Sagami luôn cải tiến và hứa hẹn cho ra mắt nhiều sản phẩm bao cao su mỏng hơn nữa, hiện nay sản phẩm bao cao su Sagami Original mỏng nhất là 0.01 mm mang đến những trải nghiệm thú vị cho người dùng.\r\n<br>\r\nNếu so sánh với các loại bao cao su mỏng và có cùng mức giá của các hãng khác thì ta thấy độ mỏng của bao cao su Sagami Xtreme super thin là hơn hẳn. Bởi vì rất mỏng nên bao cao su Sagami Xtreme Super Thin có tính truyền nhiệt nhanh, cho cảm giác rất thật đến mức cảm giác rõ hơi ấm nóng như \"da chạm da\" từ âm đạo bạn gái truyền sang chứ không bị giảm bớt cảm giác như các loại bao cao su dầy khác.\r\n\r\n<br>\r\n\r\nNếu lo lắng sản phẩm mỏng nhẹ như vậy sẽ dễ bị “rách” khi hành sự thì bạn đang lo lắng thái quá rồi vì sản phẩm này có độ bền cao theo tiêu chuẩn chất lượng khắt khe của Nhật Bản.<br>\r\n\r\nCác sản phẩm bao cao su Sagami đều được sử dụng công nghệ khử mùi rất kỹ nên không còn mùi cao su khó chịu nữa. Trên thị trường Việt Nam hiện nay chỉ có sản phẩm bao cao su Sagami Nhật Bản mới làm được điều này, vì vậy nếu bạn gái của bạn bị dị ứng với bao cao su hay không thích mùi cao su thì lựa chọn bao cao su Sagami Xtreme Super Thin là một lựa chọn hợp lý.\r\n<br>\r\nBao cao su Sagami Xtreme Super Thin có khả năng tự co giãn tốt theo kích cỡ dương vật.\r\nNếu so sánh bao cao su Sagami Xtreme Super Thin với các sản phẩm cùng loại trên thị trường thì ta có thể dễ dàng thấy rằng:\r\n<br>\r\n+ Xét về độ mỏng trong các dòng bao cao su thông dụng thì hiếm loại nào mỏng hơn Sagami Xtreme Super Thin.\r\n<br>\r\n+ Xét về độ an toàn thì bao cao su Sagami Xtreme Super Thin chắc chắn được đánh giá cao hơn, không phải ngẫu nhiên mà người Việt Nam ta lâu nay hay chuộng hàng Nhật Bản, bởi các hàng xuất xứ Nhật bản thường thực sự có chất lượng tốt.\r\n<br>\r\n+ Xét về giá bán thì bao cao su Sagami Xtreme Super Thin lại khá rẻ, bởi nó không đầu tư quá nhiều cho quảng cáo nên người tiêu dùng được tận hưởng một sản phẩm giá thấp với chất lượng vượt trội.\r\n<br>\r\nXuất xứ: Nhật bản\r\n<br>\r\nQuy Cách: Hộp 10 Chiếc', 18, 5),
(3, 'Bao cao su Sagami Classic (Hộp 12)', 148000, 'bcscc.jpg', 'Bao cao su Sagami Classic ôm khít, mỏng nhẹ được yêu thích hàng đầu <br>\r\nBao cao su Sagami Classic là dòng sản phẩm kiểu truyền thống của Sagami với nhiều tính năng vượt trôi như: siêu mỏng, truyền nhiệt nhanh, tự động co giãn theo kích cỡ người sử dụng, giúp đôi bạn nhập cuộc nhanh, dễ dàng lan tỏa hơi ấm cho nhau. Ngoài ra chất bôi trơn có trong Sagami Classic giúp quý ông dễ dàng nhập cuộc và đeo tháo bao nhanh chóng, vì vậy nó xứng đáng là trợ thủ đắc lực bảo vệ sức khỏe cho các cặp tình nhân, độ an toàn là tuyệt đối. <br>\r\n\r\nBao cao su Sagami Classic thuộc dòng bao cao su truyền thống, phù hợp với mọi đối tượng sử dụng. <br>\r\nSiêu mỏng: Tất cả các dòng sản phẩm bao cao su của hãng Sagami đều nổi bật ở tính năng siêu mỏng, khó có dòng sản phẩm nào sánh bằng. Bao cao su Sagami Classic thuộc kiểu bao truyền thống của hãng, được làm từ chất liệu mủ cao su tự nhiên, tạo cảm giác chân thật như không dùng áo mưa, giúp quý ông thêm hứng khởi mà vẫn an toàn.\r\n <br>\r\nTruyền nhiệt tốt: Do được thiết kế siêu mỏng, làm từ chất liệu mủ cao su thiên nhiên cao cấp nên bao cao su Sagami Classic  truyền nhiệt cực tốt, phù hợp với đôi nam nữ yêu thích sự nguyên sơ vốn có trong đời sống tình dục. <br>\r\n\r\nCó chất bôi trơn: Sản phẩm có chứa chất bôi trơn ở cả mặt trong và ngoài bao, chất liệu dầu bôi trơn silicon cao cấp dễ dàng làm sạch sau khi sử dụng hơn các loại bao cao su thông thường có gel bôi trơn khác.\r\n <br>\r\nCông nghệ khử mùi cao loại bỏ hoàn toàn mùi cao su, đây là ưu điểm khi dùng Sagami Classic nói riêng cũng như các dòng sản phẩm bao cao su Sagami nói chung, dù là hàng cao cấp hay hàng bình dân.', 13, 5),
(4, 'Bao cao su Sagami Original 0.02 siêu mỏng (Hộp 1)', 50000, 'sp4.jpg', 'Bao cao su Sagami Original 0.02 siêu mỏng cho cảm giác chân thật <br>\r\nSau nhiều năm nghiên cứu, hãng Sagami cho ra đời sản phẩm bao cao su Sagami Original 0.02 nhằm mang đến cho bạn sự an toàn và tự nhiên cao nhất mà không mất đi những xúc cảm thăng hoa như không có vật cản nào cả.<br>\r\n\r\nKhác với các loại bao cao su khác, chất liệu Polyurethane làm nên bao cao su Sagami Original 0.02 là loại vật liệu tương thích sinh học, thường dùng để chế tạo các bộ phận cấy ghép trong y học giúp cho Sagami Original 0.02 đạt tột đỉnh về độ mỏng, siêu dẻo dai, không phản ứng với các loại dầu và dịch bôi trơn, không mùi, không độc, không gây dị ứng hay mẩn ngứa, truyền nhiệt nhanh, tuổi thọ cao… đây là những tính năng vượt trội mà không phải dòng bao tránh thai thông thường làm từ mủ cao su có được.<br>\r\n\r\n\r\n\r\nBao cao su Sagami Original 0.02 mang tới cho người dùng Việt Nam những trải nghiệm khác lạ tuyệt vời như giới sành điệu trên khắp thế giới đang được trải nghiệm.<br>\r\n\r\nHãy sử dụng bao cao su Sagami Original 0.02 để cảm nhận sự khác biệt<br>\r\n\r\nMỏng chỉ 0.02mm nhưng lại có khả năng chịu áp suất gấp 3 lần và lực kéo gấp 2 lần giúp nam giới chấm dứt nỗi lo gặp sự cố “rách – thủng” khi quan hệ quá mạnh, ngoài ra, cảm giác tự nhiên như không hề dùng khiến bạn tình khó mà nhận biết được bạn có mang bao hay không.\r\nKhi sử dụng sản phẩm bao cao su cao cấp này, bạn có thể nói lời tạm biệt mùi cao su khó chịu, tạm biệt sự ngứa ngáy sau mỗi lần sử dụng, tạm biệt kiểu bao gói nhàm chán vì không giống như các loại bao tránh thai thông thường, bao cao su Sagami Original không có mùi, không có màu và không tương tác với dịch để tạo ra các tác nhân gây dị ứng, mẩn ngứa hay viêm nhiễm, đặc biệt tốt khi bạn dễ bị dị ứng, nhất là dị ứng với cao su.<br>\r\n\r\nCho những xúc cảm hoàn hảo nhất: bao cao su Sagami Original có bề mặt cực mịn, đàn ­hồi và siêu dẫn nhiệt giúp bạn nhận thấy ngay sự nóng ấm từ bạn tình cùng cảm giác êm ái và tự nhiên như thật.', 11, 7),
(5, 'Bao cao su Sagami Original 0.01 siêu mỏng <br>(Hộp 1 )', 150000, 'sagami-001-hop-1.jpg', 'Bao cao su Sagami Original 0.01 siêu mỏng, siêu dai <br>\r\nChúng ta đều biết tầm quan trọng của bao cao su, nó không chỉ mang đến sự an toàn, phòng tránh các bệnh lây lan nguy hiểm nhất là HIV, AIDS mà còn có những sản phẩm được sử dụng để tăng cường cảm xúc, sự tươi mới cho những cặp đôi. Sagami Original 0.01 là sản phẩm  như vậy, với xuất thân là dòng sản phẩm cao cấp mới nhất của hãng SAGAMI - nhà sản xuất bao cao su đầu tiên tại Nhật Bản, không quá khi nói về nó: \"đắt xắt ra miếng\"\r\n<br>\r\n\r\n\r\nbao cao su Sagami Original 0.01 tương đương 1/6 kích cỡ sợi tóc, tức là nó dày chỉ 0,01mm được sản xuất từ Polyurethane và ngoài việc vẫn thừa hưởng các đặc tính nổi trội của sản phẩm thế hệ trước là Sagami Original 0.02 thì nó còn vượt trội hơn hẳn về độ dày, nếu bạn còn lăn tăn hãy xem ngay bài viết chất liệu Polyurethane là gì để hiểu rõ hơn sản phẩm nhé\r\n<br>\r\nViệc cho ra đời sản phẩm Sagami Original 0.01 một lần nữa càng khẳng định vai trò tiên phong trong ngành công nghiệp sản xuất bao cao su của hãng Sagami, vốn đứng vững ở thị trường có nền công nghiệp xuất khẩu phim người lớn hàng đầu thế giới là Nhật bản\r\n\r\n     <br>\r\n\r\nVấn đề nhiều người lo ngại nhất khi liên hệ đến sagamivietnam.com là thắc mắc không biết với độ dày siêu mỏng như vậy, liệu bao cao su này có thực sự an toàn, không ai muốn đang trong cuộc vui mà gặp phải những sự cố dở khóc dở cười cả, nếu có thắc mắc trên thì bạn hoàn toàn có thể yên tâm được rồi nhé, chất liệu làm nên bao cao su này là dẻo dai vô địch, được sử dụng và ứng dụng rất nhiều trong cuộc sống. hãy trải nghiệm để thấy sự khác biệt của bao cao su Sagami Original 0.01\r\n<br>\r\n \r\n\r\n \r\n\r\n\r\n\r\n\r\n \r\n\r\nTrăm nghe không bằng một thấy, hãy tự mình trải nghiệm và chia sẻ với chúng tôi bạn nhé. Sagamivietnam.com là đơn vị nhập khẩu chính hãng sản phẩm bao cao su Sagami tại Nhật với giá cả cạnh tranh, đảm bảo chất lượng cao nhất.', 2, 7),
(6, 'Bao cao su Sagami Original 002 Extra<br>(Hộp 3 chiếc)', 180000, 'sagami-original-002-extra.jpg', 'Bao cao su Sagami Original 0.02 Extra, siêu mỏng, nhiều gel hơn 30%.<br>\r\nVới đội ngũ kĩ sư nhiều kinh nghiệm và công nghệ hiện đại, hãng bao cao su Nhật Bản Sagami đã có thể chế tạo ra loại bao cao su siêu mỏng, mỏng chỉ 0.01mm. Đây là giới hạn rất khó vượt qua đối với các loại bao cao su làm từ Latex - Cao su tự nhiên.\r\n<br>\r\nCác nhà nghiên cứu Sagami nói rằng, họ đang nghiên cứu khả năng phát triển bao cao su mỏng hơn nữa, có thể đạt mức 0,009 mm, thậm chí là 0,008 mm, nhưng đó là câu chuyện của tương lai, còn giờ chúng ta sẽ cùng nhau tìm hiểu vì sao sản phẩm bao cao su Sagami Original 0.02 lại bán chạy tại Nhật Bản cũng như tại Việt Nam.\r\n<br>\r\n\r\n\r\nBao cao su Sagami Original 0.02 Non latex, mỏng nhẹ, siêu dai tạo nên đẳng cấp<br>\r\n1. Về độ dày:<br>\r\n\r\nVới độ dày chỉ 0.02mm nhưng loại bao này lại có khả năng chịu áp suất gấp 3 lần và lực kéo gấp 2 lần giúp nam giới tự do, thoải mái hoạt động mà không còn lo gặp sự cố  rách, thủng khi quan hệ quá mạnh. Ngoài ra, cảm giác tự nhiên như thật khiến loại bao này được rất nhiều người ưa thích.<br>\r\n\r\n2. Về chất liệu:<br>\r\n\r\nSagami Original 0.02 được làm từ Polyurathane - Non latex. Giúp truyền nhiệt nhanh, không màu, không mùi, sử dụng được cho người dị ứng cao su. Ngoài ra, bao cao su làm từ Polyurathane chịu được lực ma sát gấp 3 lần, lực kéo gấp 2 lần các loại bao cao su truyền thống.<br>\r\n\r\n3. Giá bán.<br>\r\n\r\nMặc dù Sagami 0.01 là sản phẩm tiêu biểu của Sagami, nhưng mức giá 150.000đ/chiếc cũng là một rào cản không nhỏ đối với những người sử dụng thường xuyên. Thay vào đó, bạn có thể trải nghiệm dòng sản phẩm 0.02 với mức giá chỉ 50.000 / chiếc hoặc 60.000đ/chiếc đối với dòng 002 Extra. Đây là một lựa chọn thông minh đối với chiếc ví của tất cả mọi người.<br>\r\n\r\n4. Đóng gói <br>\r\n\r\nTạm biệt kiểu bao gói nhàm chán vì không giống như các loại bao tránh thai thông thường, bao cao su Sagami Original sử dụng đóng gói dạng \"cup\" cứng, an toàn khi để vào túi, cặp xách. Ngoài ra chiều bao cao su được đặt cố định hướng chóp lên trên. Vì vậy chỉ cần nhấc lên và đặt vào \"cậu bé\" khi sử dụng.<br>\r\n\r\n5. Nhiều gel hơn.<br>\r\n\r\nBằng sự lắng nghe đóng góp của khách hàng, Sagami đã cho ra mắt dòng sản phẩm 002 Extra nhiều gel hơn 30% so với các sản phẩm 002 truyền thống. Giờ đây, có thể tự tin trong các cuộc vui dù trong mùa \"hạn hán\". Đây thể hiện sự tri ân đối với khách hàng đã mua và sử dụng, góp ý cho các sản phẩm của Sagami.\r\n<br>\r\nHãy mua, trải nghiệm sản phẩm Sagami 0.02 Extra và cảm nhận sự khác biệt.', 2, 7),
(7, 'Bao cao su Sagami Original 001 - Hộp 2 chiếc ', 270000, 'bao-cao-su-001-hop-2-web.jpg', 'Bao cao su Sagami Original 0.01 Non latex, mỏng nhẹ, siêu dai tạo nên đẳng cấp<br>\r\n1. Về độ dày:<br>\r\nVới độ dày chỉ 0.01mm nhưng loại bao này lại có khả năng chịu áp suất gấp 3 lần và lực kéo gấp 2 lần giúp nam giới tự do, thoải mái hoạt động mà không còn lo gặp sự cố  rách, thủng khi quan hệ quá mạnh. Ngoài ra, cảm giác tự nhiên như thật khiến loại bao này được rất nhiều người ưa thích.<br>\r\n2. Về chất liệu:<br>\r\nSagami Original 0.01 được làm từ Polyurathane - Non latex. Giúp truyền nhiệt nhanh, không màu, không mùi, sử dụng được cho người dị ứng cao su. Ngoài ra, bao cao su làm từ Polyurathane chịu được lực ma sát gấp 3 lần, lực kéo gấp 2 lần các loại bao cao su truyền thống.<br>\r\n3. Giá bán.<br>\r\nVới đóng gói hộp đơn 1 chiếc, sản phẩm 001 có mức giá 150.000đ/chiếc cũng là một rào cản không nhỏ đối với những người sử dụng thường xuyên. Với mẫu 001/ Hộp 2 chiếc. Giá sản phẩm chỉ còn 135.000/ chiếc mà chất lượng không đổi. Đây là sự cố gắng không nhỏ của Sagami Việt Nam và nhà máy Sagami để đưa sản phẩm tới tay người tiêu dùng.<br>\r\n4. Đóng gói <br>\r\nTạm biệt kiểu bao gói nhàm chán vì không giống như các loại bao tránh thai thông thường, bao cao su Sagami Original sử dụng đóng gói dạng \"cup\" cứng, an toàn khi để vào túi, cặp xách. Ngoài ra chiều bao cao su được đặt cố định hướng chóp lên trên. Vì vậy chỉ cần nhấc lên và đặt vào \"cậu bé\" khi sử dụng.<br>\r\n\r\nHãy mua, trải nghiệm sản phẩm Sagami 0.01 và cảm nhận sự khác biệt của dòng bao cao su SIÊU MỎNG tới từ xứ sở hoa anh đào.', 15, 7),
(9, 'Bao cao su Sagami Spearmint (Hộp 3) - Hương bạc hà', 65000, 'bcsht2.jpg', 'Có gì đặc biệt ở bao cao su Sagami Xtreme Spearmint?<br>\r\nBao cao su Sagami Xtreme Spearmint là sản phẩm bảo vệ sức khỏe sinh sản thông minh được thiết kế với nhiều tính năng ưu việt cho người dùng có nhiều trải nghiệm khi ân ái.\r\n <br>\r\n\r\n\r\n\r\nVới tinh chất bạc hà được bổ sung thêm trong chất bôi trơn, loại bao cao su này sẽ mang đến cảm giác tươi mát dễ chịu, làm tăng thêm sự hưng phấn và kích thích cho cả hai khi yêu. Những mùi khó chịu khi quan hệ sẽ bị lấn át hoàn toàn\r\n\r\nThêm vào đó, hương bạc hà có trong Sagami Xtreme Spearmint còn có tác dụng làm tê dịu nhẹ lên lớp da biểu bì ngoài dương vật, giảm bớt sự nhạy cảm ở nam giới, kìm hãm sự xuất tinh sớm và giúp gia tăng thời gian quan hệ.\r\n<br>\r\nNgoài ra, bao cao su Nhật Sagami Xtreme Spearmint còn là dòng bao cao su mỏng trơn giúp giữ trọn cảm giác khi yêu, không gây vướng víu khó chịu và giúp làm tăng hưng phấn khi ân ái.\r\n<br>\r\nCó nhiều chất bôi trơn giúp việc đeo bao và lúc quan hệ được diễn ra trơn tru hơn, hưng phấn hơn.<br>\r\n\r\nBất kể là những người lần đầu ân ái hay những cặp đôi muốn tìm kiếm cảm giác mới lạ khi sử dụng sản phẩm này đều đạt được sự hài lòng<br>\r\n\r\nSản phẩm không gây dị ứng, tạo cảm giác an toàn nhất khi yêu.', 12, 4),
(10, 'Bao cao su Sagami Cola (Hộp 3)', 50000, 'bcsht.jpg', 'Bao cao su hương thơm Sagami Xtreme Cola tự tin, thoải mái cho mọi cuộc yêu.<br>\r\nThay vì sử dụng các biện pháp tránh thai truyền thống như đặt vòng, uống thuốc có thể gây hại đến sức khỏe, nhiều cặp vợ chồng đã chuyển sang sử dụng các loại bao cao su, vừa để dễ dàng phòng tránh thai cũng như hạn chế các bệnh nguy hiểm, vừa để gia tăng thêm cảm xúc cho cuộc yêu<br>\r\n\r\nHướng đến đối tượng bình dân, dòng sản phẩm bao cao su Sagami Xtreme Cola được thiết kế siêu mỏng với kiểu trơn truyền thống và màu da tự nhiên sẽ cho bạn cảm giác hoàn toàn thoải mái khi sử dụng.\r\n<br>\r\n\r\n\r\nChất liệu cao su cao cấp cộng với sự co giãn linh động tùy theo kích cỡ cậu nhỏ và khả năng truyền nhiệt cực nhanh là những gì dòng Xtreme của Sagami mang lại cho người dùng.\r\n<br>\r\nBạn sẽ cảm thấy thật ngọt ngào, hấp dẫn với mùi hương nước uống Coca Cola của sản phẩm, là giải pháp cứu cánh cho những lần muốn quan hệ nhưng cơ thể chưa sạch sẽ, sản phẩm giúp tăng tự tin cho phái mạnh và tăng hưng phấn cho phái yếu\r\n<br>\r\nNgoài ra, bao cao su Sagami Nhật mỏng dai Xtreme Cola sử dụng chất bôi trơn Silicone cao cấp cho bạn cảm giác mềm mượt, thoải mái và dễ dàng vệ sinh sau khi sử dụng.\r\n\r\n ', 11, 4),
(11, 'Bao cao su Sagami Type E (Hộp 5)', 75000, 'bcsgg.jpg', 'Trải nghiệm mới lạ từ bao cao su Sagami Type E<br>\r\nNhằm đáp ứng nhu cầu của phần lớn người dùng cũng như gia tăng trải nghiệm trong việc yêu, hãng Sagami đã tung ra dòng sản phẩm bao cao su Sagami Type E, được mệnh danh là sản phẩm mang đến sự hứng khởi. Sagami Type E được thiết kế mỏng manh khiến đôi bạn cảm nhận hơi ấm nồng nàn từ đối phương, chân thật nhất như không sử dụng bao. Khi yêu, các gân gai sẽ cọ xát vào các dây thần kinh cực nhạy trong âm đạo nàng, khiến nàng rung lên từng hồi theo nhịp yêu của bạn\r\n\r\n<br>\r\n\r\nSản phẩm tạo cảm giác chân thật như không dùng áo mưa, giúp quý ông thêm hứng khởi mà vẫn đạt được sự an toàn. Ngoài ra, Sagami Tye E thiết kế có một lần thắt với các đường gân và gai phân bố đều quanh thân bao, khi quan hệ kích thích khoái cảm nữ giới.\r\n<br>\r\nThiết kế có một lần thắt giúp ôm sát dương vật, tạo cảm giác an toàn, sung mãn mà không lo tuột bao, thêm vào đó, chất bôi trơn nhiều ở cả 2 mặt giúp bạn dễ dàng xâm nhập vào \" cô bé\" cũng như dễ dàng thay đổi các tư thế liên tục\r\n<br>\r\nBao cao su Sagami Type E được làm từ chất liệu cao cấp, lại có thiết kế siêu mỏng nên có khả năng truyển nhiệt cực nhạy, giúp đôi bạn nhập cuộc nhanh, cảm giác nồng ấm lan tỏa.\r\n<br>\r\nCấu tạo\r\n<br>\r\n- Thiết kế một lằn thắt.\r\n<br>\r\n- Màu xanh trong suốt, không mùi, mềm mại\r\n<br>\r\nXuất xứ: Nhật Bản\r\n<br>\r\nHãng sản xuất: Sagami\r\n<br>\r\nQuy Cách: Hộp 5 Chiếc', 3, 3),
(12, 'Bao cao su Sagami Are - Are (Hộp 5)', 75000, 'bcsgg2.jpg', 'Sử dụng bao cao su Sagami Are Are để bảo vệ sức khỏe bản thân và người khác<br>\r\nChúng ta đều biết tầm quan trọng của việc sử dụng bao cao su để tránh những bệnh lây truyền qua đường tình dục và phòng tránh thai hiệu quả. Bao cao su Sagami Are - Are (hộp 5 chiếc) có thiết kế siêu mỏng và ôm khít, có gai nổi li ti tăng cường kích thích, tăng hưng phấn giúp 2 phái đạt cảm giác như lần đầu quan hệ.\r\n<br>\r\nƯu điểm nổi trội của bao cao su Sagami Are - Are (hộp 5 chiếc):\r\nCác dòng sản phẩm bao cao su Sagami luôn đặt tính năng siêu mỏng lên hàng đầu, bao cao su Sagami Are Are giúp đôi bạn có cảm giác thật nhất, quên mất cảm giác đang dùng áo mưa, ngoài ra việc một chiếc bao cao su như tấm lưới bảo vệ siêu mỏng sẽ giúp truyền nhiệt nhanh giữa 2 cơ thể, không còn rào cản nữa.\r\n<br>\r\n\r\n\r\nHộp bao cao su Sagami gồm 5 sản phẩm\r\n<br>\r\nViệc có gân gai bi nổi lên trong thiết kế khiến sản phẩm trở nên hoàn hào cho đôi lứa có một cuộc yêu nóng bỏng. Các đường gân gai nổi được bố trí thông minh thành một mạng lưới toàn thân, khi bạn nam di chuyển, các gân gai này sẽ kích thích dây thần kinh khoái cảm trong âm đạo này, khiến cơ thể nàng rung lên trong sự sung sướng mà nếu không sử dụng bao cao su sẽ khó thể có những cảm giác này.\r\n<br>\r\nSản phẩm bao cao su hãng Sagami này còn được thiết kế gồm một lần thắt giúp ôm khít cậu nhỏ, không còn lo bị tuột bao trong khi hành sự cho dù nam giới có mạnh mẽ đến thế nào đi nữa.\r\n<br>\r\nGel bôi trơn là thành phần không thể thiếu được cho một cuộc yêu trơn tru, cho dù bạn tình có “tốt nước” đến đâu đi chăng nữa, gel bôi trơn sẽ là sản phẩm rất tốt để đạt được sự êm mượt cho cuộc yêu. Việc chứa nhiều gel bôi trơn ở cả hai mặt bao cũng giúp cho việc đeo tháo bao và thay đổi nhiều tư thế khi lâm trận vô cùng dễ dàng.\r\n<br>\r\nHãng sản xuất: Sagami<br>\r\nXuất xứ: Nhật Bản<br>\r\nKích thước: Tiêu chuẩn, co giãn theo mọi kích thước<br>\r\nQuy cách: hộp 5 chiếc<br>\r\nHiện nay trên thị trường có rất nhiều sản phẩm hàng giả, hàng nhái kém chất lượng có thể ảnh hưởng đến sức khỏe cũng như sự an toàn của quý khách khi sử dụng. Vì vậy, hãy sử dụng các sản phẩm chính hãng uy tín như: sagamivietnam.com để luôn được bảo vệ an toàn mọi lúc, mọi nơi.', 5, 3),
(13, 'Bao cao su Sagami Whitebox (Hộp 3) - Có gân gai', 45000, 'bcsgg3.jpg', 'Tăng khoái cảm bằng sử dụng bao cao su Sagami Xtreme White có gai<br>\r\nĐáp ứng nhu cầu của phần lớn người dùng cũng như gia tăng sự đổi mới và trải nghiệm trong việc yêu, hãng Sagami tung ra dòng sản phẩm bao cao su Sagami Xtreme White, đây là sản phẩm bán chạy nhất theo tính năng “cần tạo ra sự hứng khởi” của hãng. Sagami Xtreme White được thiết kế cực mỏng, khiến đôi bạn cảm nhận hơi ấm nồng nàn từ đối phương, chân thật nhất như không đeo bao.\r\n<br>\r\nTrong khi di chuyển, các gân gai sẽ cọ xát vào các dây thần kinh khoái cảm trong âm đạo nàng, khiến nàng rung lên từng hồi theo nhịp yêu của bạn, dễ đạt cực khoái hơn hẳn các loại bao khác.\r\n<br>\r\n\r\n\r\nDòng bao cao su Sagami Xtreme White với chất liệu cao su thiên nhiên cao cấp, chứa nhiều gel bôi trơn giúp cho việc quan hệ trở nên dễ dàng hơn.<br>\r\n\r\nKhông có mùi cao su là ưu điểm nổi trội của các loại bao cao su Sagami Nhật Bản mà ít dòng bao cao su khác có thể làm được. Nhiều chị em, cả nam giới cũng vậy, cảm thấy rất khó chịu với mùi cao su và đôi khi còn dị ứng với các loại cao su có mùi cao su nồng nặc. Nhưng với bao cao su Sagami Xtreme thì không còn lo nữa vì toàn bộ mùi cao su đã được khử đi rồi.<br>\r\n\r\nTính năng nổi bật: có gai, gân, siêu mỏng\r\n<br>\r\nChất liệu: 100% cao su thiên nhiên cao cấp.<br>\r\nKiểu dáng: thắt ở đầu bao<br>\r\nGel bôi trơn: Nhiều<br>\r\nKích cỡ: 52 mm<br>\r\nGân/gai: Có gân và nhiều gai dọc thân bao<br>\r\nXuất xứ: Nhật Bản<br>\r\nHãng sản xuất: Sagami<br>\r\nQuy cách : Hộp 3 Chiếc\r\n ', 2, 3),
(14, 'Bao cao su Sagami Miracle Fit (Hộp 5)', 80000, 'bcs3d.jpg', 'Bao cao su Sagami Miracle Fit là sản phẩm mới được thiết kế với kiểu dáng đặc biệt.<br>\r\nBao cao su Miracle Fit là dòng sản phẩm ghi dấu ấn tượng với thiết kế 360 độ cực kỳ ôm khít không còn bóng thừa ở đầu bao, để giữ lại nguyên vẹn những nét gợi cảm quyến rũ của \"cậu bé\" khi cương. Ngoài tính năng phòng tránh thai và các bệnh lây nhiễm qua đường tình dục, sản phẩm còn giúp gia tăng hưng phấn tuyệt vời cho nữ giới nhờ thiết kế ôm sát dương vạt, tăng ma sát, tăng sự kích thích khi chạm lên thành âm đạo cùng thiết kế siêu mỏng nhằm đem lại sự chân thật nhất cho mọi cuộc yêu.<br>\r\n\r\n bao cao su sagami miracle fit ôm khít, thoải mái<br>\r\n\r\nBao cao su Sagami Miracle Fit có hình dáng 360 độ mô phỏng theo hình dáng của dương vật, do vậy với thiết kế đặc biệt này sẽ tạo sự ôm sát không sộc xệch mang đến cho bạn những cảm giác thăng hoa chân thật nhất không vướng víu, không sợ tụt bao ra ngoài .\r\n<br>\r\nBao cao su Sagami Miracle Fit với gel bôi trơn gốc silicone siêu trơn an toàn theo chuẩn Y tế Nhật Bản tạo sự êm ái trơn mượt khi cậu bé lướt nhẹ nhàng mà không hề gây đau rát hay làm tổn thương vùng kín khô hạn của bạn gái, an toàn và dễ dàng làm sạch sau khi quan hệ.\r\n<br>\r\nĐối tượng sử dụng :<br>\r\n Sản phẩm rất phù hợp để mang lại cảm giác tươi mới và không gian yêu lãng mạn thay thế cho đêm ân ái nhàm chán mọi khi. Với kích thước nhỏ chỉ 49mm, Bao cao su Sagami Miracle Fit được thiết kế dành riêng cho nam giới Châu Á với khả năng ôm khít và chống trơn tuột tối đa\r\n<br>\r\nThông số<br>\r\n\r\n* Chất liệu :  Natural Rubber Latex<br>\r\n\r\n* Màu sắc :   Màu tự nhiên<br>\r\n\r\n* Kích thước : 49±2mm x dài 185±10mm<br>\r\n\r\n* Đóng gói :    Hộp 05 chiếc', 5, 2),
(15, 'Bao cao su Sagami Tight - Fit (Hộp 12)', 150000, 'bcs3d3.jpg', 'Bao cao su Sagami Tight-Fit (hộp 12 chiếc) thiết kế siêu mỏng chỉ 0.03mm<br>\r\nThuộc dòng sản phẩm cao cấp đến từ Nhật Bản, bao cao su Sagami Tight-Fit (hộp 12 chiếc) được rất nhiều người lựa chọn bởi thiết kế siêu mỏng 0.03mm giúp quan hệ cho cảm giác chân thật nhất. Kiểu dáng ôm khít vào \"cậu bé\" cùng đó là 6 lớp lượn sóng giúp kích thích vùng \"cô bé\" của nữ giới, tạo sự hưng phấn cho cả đôi trai gái đồng thời giúp ngăn ngừa việc trơn tuột sẽ mang đến cho 2 bạn cảm giác mới lạ, thoải mái khi sử dụng.\r\n<br>\r\n\"Cuộc yêu\" sẽ trở nên hoàn hảo hơn bao giờ hết khi bạn không phải lo lắng bao cao su bị tuột hay rách khi hoạt động quá mạnh.\r\n<br>\r\nTính năng nổi bật của bao cao su nam Sagami Tight-Fit (hộp 12 chiếc)<br>\r\nThiết kế siêu ôm: Bao cao su Sagami Tight Fit được thiết kế ôm khít, không có đầu thừa ở đầu bao như các sản phẩm khác. Chất liệu cao su cao cấp và thiết kế siêu mỏng giúp cho sản phẩm này có khả năng truyền nhiệt cực nhanh và tự co giãn tùy theo kích thước.\r\n\r\n<br>\r\n\r\nTích hợp dầu bôi trơn: Sagami Tight Fit sử dụng chất bôi trơn silicon cao cấp cho bạn cảm giác mềm mượt, thoải mái và dễ dàng làm sạch sau khi sử dụng.\r\n<br>\r\nMàu sắc được nhuộm không độc hại: Bao có màu tím sẽ giúp “cuộc yêu” trở nên ngọt ngào, lãng mạn hơn.\r\n<br>\r\nLợi ích khi sử dụng bao cao su:\r\n<br>\r\nBao cao su Sagami Tight Fit không chỉ là giải pháp tránh thai an toàn và hiệu quả dành cho hai bạn. Sản phẩm còn giúp mang tới những giây phút yêu thương chân thật nhất, cảm xúc hơn, trơn mượt hơn. Cuộc yêu thật trọn vẹn và hạnh phúc.\r\n<br>\r\nSagami Tight Fit sử dụng chất bôi trơn Silicone cao cấp cho bạn cảm giác mềm mượt, thoải mái và dễ dàng làm sạch sau khi sử dụng.', 2, 2),
(16, 'Gel bôi trơn Sagami Original', 215000, 'gbt.jpg', 'Gel bôi trơn Sagami Original, sản phẩm tuyệt vời hỗ trợ quan hệ<br>\r\nViệc “khô hạn” khi quan hệ tình dục rất thường hay bắt gặp với bất kỳ ai ở bất kỳ độ tuổi nào, có rất nhiều nguyên nhân gây nên tình trạng trên có thể liệt kê như sau:<br>\r\n\r\nCăng thẳng thần kinh hay mệt mỏi về thể chất<br>\r\nQuan hệ tình dục kéo dài<br>\r\nSau khi sinh hoặc trong thời gian cho con bú<br>\r\nTới thời kỳ mãn kinh<br>\r\nThay vì khổ sở chịu đựng, hãy tận hưởng cảm giác tuyệt vời mà sản phẩm gel bôi trơn Sagami Original mang lại nhé.\r\n<br>\r\nSản xuất tại Nhật Bản, Sagami Original là gel bôi trơn cao cấp thế hệ mới giúp cân bằng, duy trì độ ẩm tự nhiên và kéo dài cảm xúc đam mê bất tận mà bạn không thể tìm được ở các loại gel thông thường khác.\r\n<br>\r\nTính năng sản phẩm:<br>\r\n\r\nBôi trơn lâu dài nhờ công thức duy trì độ ẩm đặc biệt<br>\r\nMịn màng và không dính nhớt<br>\r\nGel gốc nước nên dễ dàng được rửa sạch<br>\r\nKhông màu, không mùi<br>\r\nNguyên liệu tinh lọc và vô khuẩn<br>\r\nKhông gây dị ứng<br>\r\nKhông sử dụng hóa chất và hóc môn làm chất kích thích<br>\r\nCách sử dụng: Dùng được cho cả nam và nữ với một lượng vừa đủ để thoa lên bộ phận sinh dục. Sau khi sử dụng, rửa sạch lại bằng nước ấm.<br>\r\n\r\nChú ý:<br>\r\n\r\nSản phẩm là gel bôi trơn, không phải là thuốc tránh thai.<br>\r\n\r\nHiểu được tầm quan trọng trong việc duy trì độ ẩm, độ PH cũng như phải đảm bảo sức khỏe sinh sản, gel bôi trơn Original của Sagami được làm từ nguyên liệu cao cấp, vô trùng, tinh khiết và an toàn. Không sử dụng hóa chất và các hóc môn kích thích nội tiết tố hoặc tăng khoái cảm độc hại.\r\n<br>\r\nSản phẩm này thích hợp nhất là sử dụng với các loại bao cao su tự nhiên và bao cao su Polyurethane như bao cao su Sagami Original 0.02mm.\r\n<br>\r\nĐể tự bảo vệ bản thân trong bất kỳ trường hợp đặc biệt ngoại lệ nào, trước khi dùng, bạn nên tự thử dị ứng bằng cách bôi lên cổ tay xem có an toàn không.\r\n\r\n<br>\r\n\r\nSản phẩm được bảo hành năm năm trước khi mở niêm phong. Nếu đã mở nắp, bạn nên dùng càng sớm càng tốt.\r\n<br>\r\nĐóng gói: Dạng tuýp 60g (tương ứng cho khoảng 100 lần sử dụng)<br>\r\n\r\nThành phần: Aqua, Propylene glycol, Glycerin, Sodium polyacrylate, Carbomer, Paraben, Sodium hyaluronate, pH adjuster.', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spdaxoa`
--

CREATE TABLE `spdaxoa` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(255) NOT NULL,
  `price` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `iddanhmuc` int(11) NOT NULL,
  `ngayxoa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spdaxoa`
--

INSERT INTO `spdaxoa` (`id`, `tensanpham`, `price`, `image`, `mota`, `view`, `iddanhmuc`, `ngayxoa`) VALUES
(3, 'Thử nghiệm 2', 150000, '333705062_1214577485855586_8384702271121310301_n.jpg', 'B', 0, 7, '06:40:14pm 18/10/2023'),
(14, 'Thử nghiệm', 123000, '208881333_570403627669708_1144919725520007167_n.jpg', 'a', 0, 1, '05:09:07am 01/12/2023'),
(15, 'Bao cao suaaaaaaaaaaaaaa', 25000, 'bao-cao-su-001-hop-2-web.jpg', 'a', 0, 7, '10:48:56am 02/12/2023');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `hoten` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `hoten`, `password`, `email`, `image`, `address`, `phone`, `role`) VALUES
(1, 'manhduc', 'Phùng Mạnh Đức', '123', 'ducpmph33321@gmail.com', 'my.jpg', 'Hà Nội', '0889564869', 0),
(3, 'admin', 'Phùng Mạnh Đức', 'admin', 'phungmanhduc2209@gmail.com', 'chel.png', 'Hà Nội', '0921044773', 1),
(9, 'vietduong', NULL, '123', 'duong@gmail.com', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `id` int(11) NOT NULL,
  `giatri` int(11) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tinhtrang`
--

INSERT INTO `tinhtrang` (`id`, `giatri`, `tinhtrang`) VALUES
(1, 1, 'Chờ xác nhận'),
(2, 2, 'Đã xác nhận'),
(3, 3, 'Đang giao hàng'),
(4, 4, 'Đã giao hàng'),
(5, 5, 'Hủy đơn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`iddonhang`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sanpham_danhmuc` (`iddanhmuc`);

--
-- Indexes for table `spdaxoa`
--
ALTER TABLE `spdaxoa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `iddonhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `magiamgia`
--
ALTER TABLE `magiamgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `spdaxoa`
--
ALTER TABLE `spdaxoa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sanpham_danhmuc` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
