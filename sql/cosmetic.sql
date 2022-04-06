-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 04:18 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Ad_ID` varchar(15) NOT NULL,
  `Ad_Name` varchar(50) DEFAULT NULL,
  `Ad_Password` varchar(15) DEFAULT NULL,
  `Ad_Email` varchar(30) DEFAULT NULL,
  `Ad_Phone` varchar(11) DEFAULT NULL,
  `Ad_Position` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Ad_ID`, `Ad_Name`, `Ad_Password`, `Ad_Email`, `Ad_Phone`, `Ad_Position`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Cont_ID` int(11) NOT NULL,
  `Cont_Name` varchar(50) DEFAULT NULL,
  `Cont_Email` varchar(30) DEFAULT NULL,
  `Cont_Tele` varchar(11) DEFAULT NULL,
  `Cont_Content` varchar(500) DEFAULT NULL,
  `Cont_Status` char(1) DEFAULT NULL,
  `Cont_DateAdd` datetime DEFAULT NULL,
  `Cont_DateRep` datetime DEFAULT NULL,
  `Ad_ID` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_ID` int(11) NOT NULL,
  `Order_Date` date DEFAULT NULL,
  `Order_Total` int(11) DEFAULT NULL,
  `Order_Address` varchar(200) DEFAULT NULL,
  `Order_Status` char(1) DEFAULT NULL,
  `User_ID` varchar(15) DEFAULT NULL,
  `Ad_ID` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `Order_ID` int(11) NOT NULL,
  `Perfume_ID` int(11) NOT NULL,
  `Detail_Price` int(11) DEFAULT NULL,
  `Detail_Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `perfume`
--

CREATE TABLE `perfume` (
  `Perfume_ID` int(11) NOT NULL,
  `Perfume_Name` varchar(100) DEFAULT NULL,
  `Perfume_Price` int(11) DEFAULT NULL,
  `Perfume_Quantity` int(11) DEFAULT NULL,
  `Perfume_Image` varchar(500) DEFAULT NULL,
  `Perfume_Description` varchar(500) DEFAULT NULL,
  `Type_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfume`
--

INSERT INTO `perfume` (`Perfume_ID`, `Perfume_Name`, `Perfume_Price`, `Perfume_Quantity`, `Perfume_Image`, `Perfume_Description`, `Type_ID`) VALUES
(1, 'Bleu De Chanel', 4800000, 10, 'Bleu De Chanel.jpg', 'lớp hương đầu và hương giữa như hòa quyện với nhau, lớp hương này đan xen lớp hương khác tạo nên một hương vị đầy màu sắc và hứng khởi. Vị bạc hà the mát dẫn lối cho hương bưởi, được trộn với tinh dầu lá bạc hà tạo nên tinh chất dầu vàng óng. Bleu De Chanel là sự hòa quyện của bản lĩnh, đam mê và nhiệt huyết.', 2),
(2, 'Versace Eros', 2000000, 10, 'Versace Eros EDT.jpg', 'Versace Eros lấy nguồn cảm hứng từ vị thần tình yêu trong thần thoại Hy Lạp. Versace Eros đại diện của tình yêu, là trung tâm của các hương thơm, là sự kết hợp và thể hiện của niềm đam mê vô tận và ham muốn mãnh liệt.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `perfume_type`
--

CREATE TABLE `perfume_type` (
  `Type_ID` int(11) NOT NULL,
  `Type_Name` varchar(50) DEFAULT NULL,
  `Type_Description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `perfume_type`
--

INSERT INTO `perfume_type` (`Type_ID`, `Type_Name`, `Type_Description`) VALUES
(2, 'Eau de Parfum', 'Có chứa 15 – 20% tinh chất nước hoa'),
(3, 'Eau de Toilette', 'tinh dầu khoảng 5 – 15%, độ lưu hương tương đối ổn từ 4 – 7h.'),
(4, 'Eau de Cologne', 'tinh dầu khá thấp khoảng từ 2 – 5%, độ lưu hương từ 3 – 4h'),
(6, 'test', 'test'),
(13, 'abc', '1'),
(17, 'Extrait de Parfum ', 'nồng độ tinh dầu cao nhất (từ 15 - 30%), độ lưu hương kéo dài từ 8 - 12 giờ.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` varchar(15) NOT NULL,
  `User_Name` varchar(50) DEFAULT NULL,
  `User_Password` varchar(15) DEFAULT NULL,
  `User_Email` varchar(50) DEFAULT NULL,
  `User_Address` varchar(100) DEFAULT NULL,
  `User_Tele` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `User_Name`, `User_Password`, `User_Email`, `User_Address`, `User_Tele`) VALUES
('hoangmap', 'hoangmap', 'hoangmap', 'hoangmap@gmail.com', 'hoangmap', '014725836');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Ad_ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Cont_ID`),
  ADD KEY `IX_Relationship3` (`Ad_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_ID`),
  ADD KEY `IX_Relationship1` (`User_ID`),
  ADD KEY `IX_Relationship4` (`Ad_ID`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`Order_ID`,`Perfume_ID`),
  ADD KEY `include` (`Perfume_ID`);

--
-- Indexes for table `perfume`
--
ALTER TABLE `perfume`
  ADD PRIMARY KEY (`Perfume_ID`),
  ADD KEY `IX_Relationship2` (`Type_ID`);

--
-- Indexes for table `perfume_type`
--
ALTER TABLE `perfume_type`
  ADD PRIMARY KEY (`Type_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Cont_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfume`
--
ALTER TABLE `perfume`
  MODIFY `Perfume_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perfume_type`
--
ALTER TABLE `perfume_type`
  MODIFY `Type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `Relationship3` FOREIGN KEY (`Ad_ID`) REFERENCES `admins` (`Ad_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `Relationship1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`User_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Relationship4` FOREIGN KEY (`Ad_ID`) REFERENCES `admins` (`Ad_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `includ` FOREIGN KEY (`Order_ID`) REFERENCES `order` (`Order_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `include` FOREIGN KEY (`Perfume_ID`) REFERENCES `perfume` (`Perfume_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `perfume`
--
ALTER TABLE `perfume`
  ADD CONSTRAINT `HAVE` FOREIGN KEY (`Type_ID`) REFERENCES `perfume_type` (`Type_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
