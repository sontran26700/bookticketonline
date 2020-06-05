-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 02:55 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_marketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
`maphim` int(11) NOT NULL,
`name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`daodien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NUll,
`dienvien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`TheLoai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`ThoiLuong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`KhoiChieu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`NgonNgu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`Link` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`MoTa` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NUll,
`image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
PRIMARY KEY (`maphim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `product`(`maphim`,`name`,`daodien`,`dienvien`,`TheLoai`,`ThoiLuong`,`KhoiChieu`,`NgonNgu`,`Link`,`MoTa`,`image`) VALUES
(1,'End Game','Anthony Russo, Joe Russo','Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Benedict Cumberbatch,...','Hành Động','182 Phút','26/04/2019','Tiếng Anh với phụ đề tiếng Việt','https://www.youtube.com/embed/TcMBFSGVi1c','Cực Kì Kinh Dị','upload/endgame.jpg'),
(2,'MẸ MA THAN KHÓC LA LLORONA','Michael Chaves','Linda Cardellini, Raymond Cruz, Patricia Velasquez,...','  Hồi hộp, Kinh Dị','98 phút
',' 03/05/2019','Tiếng Anh với phụ đề tiếng Việt','https://www.youtube.com/embed/ydbdWLSt1gg','Một bom tấn từ ông hoàng phim kinh dị James Wan (The Conjuring, Annabelle, The Nun), bộ phim lấy bối cảnh năm 1973 tại Los Angeles, với nhân vật chính là Anna Garcia (Linda Cardellini đóng), một nhân viên công tác xã hội góa chồng đang nuôi nấng hai đứa con nhỏ.','upload/mema.jpg'),
(3,'CORGI: NHỮNG CHÚ CHÓ HOÀNG GIA','Ben Stassen','Jack Whitehall, Ray Winstone, Sheridan Smith, Julie Walters','Hoạt Hình, Phiêu Lưu, Tình cảm','85 phút','26/04/2019','Tiếng Anh với phụ đề và lồng tiếng Việt','https://www.youtube.com/embed/JtnTiPkKHkE','CORGI: NHỮNG CHÚ CHÓ HOÀNG GIA là câu chuyện về cuộc phưu lưu của Rex, chú chó corgi đáng yêu nhất Hoàng gia Anh. Trong một lần vô tình, Rex bị lưu lạc ra thế giới bên ngoài, nơi mà có rất nhiều thử thách cũng như các nguy hiểm rình rập. Để trở về bên cạnh Nữ Hoàng, Rex đã phải trải qua những thử thách và ở đó Rex đã tìm ra được tình yêu cũng như tìm được chính bản thân mình.','upload/corghi.jpg'),
(4,'CHUYẾN VIẾNG THĂM TỬ THẦN','Evgeniy Abyzov',' Yuri Chursin, Angelina Strechina, Mikhail Meshcheryakov,...','Hồi hộp, Kinh Dị','88 Phút','03/05/2019','Tiếng Anh với phụ đề tiếng Việt','https://youtu.be/embed/cOEFqs5dTvs','Katya và nhóm bạn chợt nảy ra một ý tưởng điên rồ - tổ chức tiệc tùng trong ngôi nhà bỏ hoang. Màn đêm buông xuống, họ tiếp tục thách thức lòng gan dạ bằng cách thực hiện nghi thức cầu cơ vào đúng nửa đêm; nhưng không ngờ rằng, ngôi nhà đã bị một linh hồn cổ xưa từ thế kỉ trước chiếm giữ. Những điều kinh khủng bắt đầu xảy ra, những bóng ma săn đuổi cả nhóm. Katya dần phát hiện ra nhiều điều bí ẩn, đặc biệt là với chủ nhân căn nhà - người con trai mà cô phải lòng.
','upload/tuthan.jpg'),
(5,'Lật Mặt Nhà Có Khách ','Lý Hải',' Katleen Phan Võ, Jay Quân, Mạc Văn Khoa, Lê Hoàng, Tiến Ngô,..','Hài','105 phút','12/04/2019','Việt Nam','https://youtu.be/embed/JvHqCk3l3UE','Lật Mặt: Nhà Có Khách xoay quanh chuyến trở về nhà ngỡ tưởng rất vui vẻ đầm ấm của Vy cùng bạn bè. Thế nhưng, một chuỗi những tai nạn và sự việc bất thường diễn ra đã đẩy tình thế của tất cả mọi người, đặc biệt là Vy vào tình thế nguy hiểm. Làm sao để có thể cứu Vy và ngăn những mối nguy hiểm tiếp theo xảy ra? Tai nạn đã xảy đến với mẹ của Vy và cậu em trai có liên quan gì đến những thế lực hiểm ác đang đeo bám tất cả mọi người?','upload/latmatnhacokhach.jpg'),
(6,'HỘI THÚ BÔNG NGỘ NGHĨNH','Kelly Asbury','Kelly Clarkson, Nick Jonas','Hoạt Hình','95 phút','01/05/2019','Tiếng Anh với phụ đề tiếng Việt và lồng tiếng Việt','https://youtu.be/embed/APnLWPdecgc','Hội thú bông xấu xí đã có một cuộc phiêu lưu đầy bất ngờ, thú vị nhưng cũng đầy gian nan tại nơi này, khi phải chống lại búp bê hoàn hảo Lu Đẹp Trai.','upload/hoithu.jpg'),
(7,'UPIN & IPIN - TRUYỀN THUYẾT THẦN ĐAO','  Adam Bin Amiruddin','Asyiela Putri, Ahmad Mawardi',' Hoạt Hình','100 phút',' 26/04/2019','Lồng tiếng Việt','https://youtu.be/embed/f322Ujlk4vM','Upin và Ipin - hai cậu bé năm tuổi trong series ăn khách cùng tên của Malaysia. Họ hiếu động, giàu năng lượng, sống cùng chị và bà sau khi bố mẹ qua đời. Trong phim điện ảnh, Upin và Ipin tìm thấy cánh cổng đưa họ cùng các bạn đến một vương quốc kỳ ảo.','upload/upin.jpg'),
(8,'BREAK: BỜ VỰC TỬ THẦN',' Tigran Saakyan','Irina Antonenko, Mikhail Filippov, Denis Kosyakov, Andrey Nazimov, Ingrid Olerinskaya','Hồi hộp, Kinh Dị','85 Phút','19/04/2019','Tiếng Nga phụ đề tiếng Việt','https://youtu.be/embed/olmc9TSKKQg','Bờ Vực Tử Thần (Break) chuyến du ngoạn cáp treo của một nhóm bạn nhanh chóng biến thành ác mộng kinh hoàng. Buồng cáp treo bị đứt ở lưng chừng trên không, có thể rơi xuống vực sâu bất cứ lúc nào. Để có thể tồn tại, các thành viên buộc phải làm mọi cách lẫn mọi thủ đoạn, bộc lộ những bản chất nguyên thuỷ trong mỗi người.','upload/bovuc.jpg');


-- --------------------------------------------------------
CREATE TABLE `lichchieu`(
  `marap` int(11) NOT NULL ,
  `thoigian` varchar(50) NOT NULL ,
  `maphim` int(11) NOT NULL,
  `ngay` varchar(50) NOT NULL, 
  `mangay` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`mangay`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `lichchieu` (`marap`,`thoigian`,`maphim`,`ngay`,`mangay`) VALUES
(1,'14:00 PM','1','04/05/2019',1),
(1,'15:00 PM','2','06/05/2019',2),
(1,'16:00 PM','2','07/05/2019',3),
(1,'17:00 PM','3','08/05/2019',4),
(1,'09:00 PM','3','09/05/2019',5),
(1,'08:00 PM','5','10/05/2019',6),
(1,'12:00 PM','6','11/05/2019',7),
(1,'10:00 PM','7','12/05/2019',8),
(1,'20:00 PM','8','13/05/2019',9),
(1,'21:00 PM','8','14/05/2019',10),
(1,'14:25 PM','8','16/05/2019',11);


CREATE TABLE `phimsapchieu`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL ,
  `daodien` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NUll,
  `dienvien` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TheLoai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci  NOT NULL,
  `ThoiLuong` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `KhoiChieu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgonNgu` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MoTa` varchar(1000)CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NUll,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

INSERT INTO `phimsapchieu`(`id`,`name`,`daodien`,`dienvien`,`TheLoai`,`ThoiLuong`,`KhoiChieu`,`NgonNgu`,`Link`,`MoTa`,`image`) VALUES
(1,'End Game','Anthony Russo, Joe Russo','Robert Downey Jr., Chris Hemsworth, Mark Ruffalo, Chris Evans, Benedict Cumberbatch,...','Hành Động','182 Phút','30/04/2019','Tiếng Anh với phụ đề tiếng Việt','https://www.youtube.com/embed/TcMBFSGVi1c','Cực Kì Kinh Dị','upload/endgame.jpg'),
(2,'MẸ MA THAN KHÓC LA LLORONA','Michael Chaves','Linda Cardellini, Raymond Cruz, Patricia Velasquez,...','  Hồi hộp, Kinh Dị','98 phút
',' 08/05/2019','Tiếng Anh với phụ đề tiếng Việt','https://www.youtube.com/embed/ydbdWLSt1gg','Một bom tấn từ ông hoàng phim kinh dị James Wan (The Conjuring, Annabelle, The Nun), bộ phim lấy bối cảnh năm 1973 tại Los Angeles, với nhân vật chính là Anna Garcia (Linda Cardellini đóng), một nhân viên công tác xã hội góa chồng đang nuôi nấng hai đứa con nhỏ.','upload/mema.jpg');

CREATE TABLE `contact`(
`contact_id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
`subject` varchar(100) NOT NULL,
`message` varchar(1000) NOT NULL,
PRIMARY KEY (`contact_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

Insert into `contact` (`name`,`email`,`subject`,`message`) VALUES
('sontran','sontran26700@gmail.com','Bộ Phận Chăm Sóc Khách Hàng','khuyến mãi thế nào ?' );

CREATE TABLE `rap`(
`marap` int(11) NOT NULL AUTO_INCREMENT,
`place` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`FAX` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`sdt` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
`image` varchar(100) NOT NULL,
PRIMARY KEY (`marap`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

Insert into `rap` (`marap`,`place`,`FAX`,`sdt`,`image`) VALUES
(3,'Lầu 5, Trung tâm thương mại SC VivoCity-1058 Nguyễn Văn Linh, Quận 7','+84 4 6 275 5240','1900 6017','upload/vivo.png');


CREATE TABLE `user` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);


INSERT INTO `user` (`username`, `password`) VALUES
('admin', '1234');




CREATE TABLE member (
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `member` (`username`,`email`, `password`) VALUES
('member','member@gmail.com', '1234');


ALTER TABLE `lichchieu`
  ADD CONSTRAINT `lichchieuFK` FOREIGN KEY (`maphim`) REFERENCES `product` (`maphim`);







/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
