-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 07:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Phone Number` varchar(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Name`, `Address`, `District`, `Phone Number`, `Email`) VALUES
('A-0001', 'Shahriyar', 'shafipur,kaliakoir,gazipur,dhaka', 'Gazipur', '01956424568', 'shazib.shahriyar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `citys`
--

CREATE TABLE `citys` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citys`
--

INSERT INTO `citys` (`id`, `name`) VALUES
(1, 'Adabor'),
(2, 'Uttar Khan'),
(3, 'Uttara'),
(4, 'Kadamtali'),
(5, 'Kalabagan'),
(6, 'Kafrul'),
(7, 'Kamrangirchar'),
(8, 'Cantonment'),
(9, 'Kotwali'),
(10, 'Khilkhet'),
(11, 'Khilgaon'),
(12, 'Gulshan'),
(13, 'Gendaria'),
(14, 'Chawkbazar Model'),
(15, 'Demra'),
(16, 'Turag'),
(17, 'Tejgaon'),
(18, 'Dakshinkhan'),
(19, 'Darus Salam'),
(20, 'Dhanmondi'),
(21, 'New Market'),
(22, 'Paltan'),
(23, 'Pallabi'),
(24, 'Bangshal'),
(25, 'Badda'),
(26, 'Bimanbandar'),
(27, 'Motijheel'),
(28, 'Mirpur Model'),
(29, 'Mohammadpur'),
(30, 'Jatrabari'),
(31, 'Ramna'),
(32, 'Rampura'),
(33, 'Lalbagh'),
(34, 'Shah Ali'),
(35, 'Shahbagh'),
(36, 'Sher-e-Bangla Nagar'),
(37, 'Shyampur'),
(38, 'Sabujbagh'),
(39, 'Sutrapur'),
(40, 'Hazaribagh'),
(41, 'Gazipur');

-- --------------------------------------------------------

--
-- Table structure for table `delivery info`
--

CREATE TABLE `delivery info` (
  `OrderId` varchar(8) NOT NULL,
  `Del_userName` varchar(8) NOT NULL,
  `ShopUsername` varchar(8) NOT NULL,
  `Shopid` varchar(8) NOT NULL,
  `shop_Name` varchar(50) NOT NULL,
  `ReceiverName` varchar(50) NOT NULL,
  `ReceiverAdd` varchar(250) NOT NULL,
  `Reciever District` varchar(50) NOT NULL,
  `Reciever phonenum` varchar(11) NOT NULL,
  `pay_status` varchar(5) NOT NULL,
  `del_status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery info`
--

INSERT INTO `delivery info` (`OrderId`, `Del_userName`, `ShopUsername`, `Shopid`, `shop_Name`, `ReceiverName`, `ReceiverAdd`, `Reciever District`, `Reciever phonenum`, `pay_status`, `del_status`) VALUES
('O-0001', 'D-0001', 'S-0001', 'E-0001', 'XYZ Medicine corner', 'Korim', 'konabari,gazipur,Dhaka', 'Gazipur', '0192688001', 'payed', 'delivered'),
('O-0002', 'D-0001', 'S-0001', 'E-0001', 'XYZ medicine corner', 'Sifat', 'Kaliakoir,Gazipur,Dhaka', 'Gazipur', '01587954962', 'cash', 'processing'),
('O-0003', 'D-0001', 'S-0001', 'E-0001', 'XYZ Medicine corner', 'fahim', 'konabari gazipur', 'Gazipur', '0192688001', 'payed', 'shipped'),
('O-0004', 'D-0003', 'S-0001', 'E-0001', 'XYZ medicine corner', 'khairul', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'dhaka', '01234567891', 'cash', 'pending'),
('O-0006', 'D-0003', 'S-0001', 'E-0001', 'XYZ medicine corner', 'sobuj', 'rampura,dhaka', 'dhaka', '01234567898', 'bank', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_man`
--

CREATE TABLE `delivery_man` (
  `Username` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `District` varchar(50) NOT NULL,
  `transport type` varchar(20) NOT NULL,
  `phone num` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_man`
--

INSERT INTO `delivery_man` (`Username`, `Name`, `Address`, `District`, `transport type`, `phone num`, `email`) VALUES
('D-0001', 'Atik', 'konabari,gazipur,Dhaka', 'Gazipur', 'motorcycle', '01658257612', 'atiq@gmail.com'),
('D-0003', 'shahadat hossain', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Dhaka', 'motorcycle', '01956424568', '18-36610-1@student.aiub.edu'),
('D-0004', 'korim', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Gazipur', 'other', '01956424565', 'shazib.shahriyar@yahoo.com'),
('Z-001', 'Zakaria', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Gazipur', 'motorcycle', '01956424563', 'zakaria@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_req`
--

CREATE TABLE `delivery_req` (
  `OrderId` varchar(8) NOT NULL,
  `Shop_Owner_Username` varchar(8) NOT NULL,
  `Shop_name` varchar(50) NOT NULL,
  `ShopId` varchar(8) NOT NULL,
  `Shop_add` varchar(250) NOT NULL,
  `Shop District` varchar(50) NOT NULL,
  `Reciver name` varchar(150) NOT NULL,
  `reciever Address` varchar(250) NOT NULL,
  `Reciever District` varchar(50) NOT NULL,
  `reciever phone` varchar(11) NOT NULL,
  `payment type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery_req`
--

INSERT INTO `delivery_req` (`OrderId`, `Shop_Owner_Username`, `Shop_name`, `ShopId`, `Shop_add`, `Shop District`, `Reciver name`, `reciever Address`, `Reciever District`, `reciever phone`, `payment type`) VALUES
('O-0005', 'S-0001', 'XYZ medicine corner', 'E-0001', 'konabari,gazipur,Dhaka', 'Gazipur', 'kabir', 'malibagh', 'Sutrapur', '01234567893', 'cash'),
('O-0007', 'S-0001', 'XYZ medicine corner', 'E-0001', 'konabari,gazipur,Dhaka', 'Gazipur', 'shafiq', 'uttora', 'Hazaribagh', '01235478526', 'cash'),
('O-0008', 'S-0001', 'XYZ medicine corner', 'E-0001', 'konabari,gazipur,Dhaka', 'Gazipur', 'israt', 'chander desh', 'dhaka', '01234567891', 'cash'),
('O-0010', 'S-0001', 'XYZ medicine corner', 'E-0001', 'konabari,gazipur,Dhaka', 'Gazipur', 'shafiq', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Badda', '01234567891', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `shopowner`
--

CREATE TABLE `shopowner` (
  `Username` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `District` varchar(50) NOT NULL,
  `ShopName` varchar(50) NOT NULL,
  `ShopId` varchar(8) NOT NULL,
  `Shop_add` varchar(200) NOT NULL,
  `ShopDistrict` varchar(50) NOT NULL,
  `Phone_num` varchar(11) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopowner`
--

INSERT INTO `shopowner` (`Username`, `Name`, `Address`, `District`, `ShopName`, `ShopId`, `Shop_add`, `ShopDistrict`, `Phone_num`, `Email`) VALUES
('junayed', 'Junayed', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Gazipur', 'junayed medi store', 'E-0010', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Gazipur', '01956424568', 'shazib.shahriyar@gmail.com'),
('S-0001', 'shajib', 'konabari,gazipur,Dhaka', 'Gazipur', 'XYZ medicine corner', 'E-0001', 'konabari,gazipur,Dhaka', 'Gazipur', '01547854471', 'shazib@gamil.com'),
('S-0005', 'hossain', 'kaliakoir,gazipur,dhaka', 'Dhaka', 'acd medicine shop', 'E-0005', 'kaliakor, gazipur dhaka', 'Dhaka', '01956424569', 'shazib.shahriyar@outlook.com'),
('S-0006', 'alibaba', 'chander desh', 'dhaka', 'alibaba medicin shop', 'E-0006', 'chander desh', 'dhaka', '01234567891', 'alibaba@gmail.com'),
('z-0001', 'Zakaria', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Gazipur', 'zakaria medi shop', 'E-0011', 'bishwaspara, Shafipur, kaliakoir, gazipur, Dhaka', 'Gazipur', '01956424568', 'zakaria@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup_req`
--

CREATE TABLE `signup_req` (
  `Username` varchar(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Phonenum` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(12) NOT NULL,
  `Shopname` varchar(50) DEFAULT NULL,
  `Shop address` varchar(250) DEFAULT NULL,
  `Shop District` varchar(50) DEFAULT NULL,
  `type of vachile` varchar(15) DEFAULT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_req`
--

INSERT INTO `signup_req` (`Username`, `Name`, `Address`, `District`, `Phonenum`, `email`, `type`, `Shopname`, `Shop address`, `Shop District`, `type of vachile`, `password`) VALUES
('S-0004', 'efwfw', 'efwfw', 'Dhaka', '01956424565', 'shazib.shahriyar@yahoo.com', 'Shop Owner', 'abcd', 'esfsfef', 'Dhaka', '', '12378'),
('S-0007', 'Kamal', 'road:05,uttorbadda', 'Badda', '0195642455', 'kamal@mai.com', 'Shop Owner', 'kamal medicine corner', 'road:05,uttorbadda', 'Badda', '', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(8) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `password`, `status`) VALUES
('A-0001', '123', 'Admin'),
('A-0002', '1452', 'Admin'),
('D-0001', '1236', 'Delivery Man'),
('D-0003', '1239', 'Delivery Man'),
('D-0004', '1235', 'Delivery Man'),
('junayed', '123', 'Shop Owner'),
('S-0001', '1235', 'Shop Owner'),
('S-0005', '1238', 'Shop Owner'),
('S-0006', '6000', 'Shop Owner'),
('z-0001', '124', 'Shop Owner'),
('Z-001', '123', 'Delivery Man');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `citys`
--
ALTER TABLE `citys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery info`
--
ALTER TABLE `delivery info`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `delivery_man`
--
ALTER TABLE `delivery_man`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `delivery_req`
--
ALTER TABLE `delivery_req`
  ADD PRIMARY KEY (`OrderId`);

--
-- Indexes for table `shopowner`
--
ALTER TABLE `shopowner`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `signup_req`
--
ALTER TABLE `signup_req`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citys`
--
ALTER TABLE `citys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
