-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2020 at 11:31 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csmerp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asset`
--

CREATE TABLE `tbl_asset` (
  `id_asset` varchar(12) NOT NULL,
  `tanggal_pemeriksaan` date DEFAULT NULL,
  `no_asset` varchar(3) DEFAULT NULL,
  `kategori` varchar(25) DEFAULT NULL,
  `nama_device` varchar(50) DEFAULT NULL,
  `brand` varchar(25) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `motherboard` varchar(100) DEFAULT NULL,
  `cpu` varchar(100) DEFAULT NULL,
  `ram` varchar(50) DEFAULT NULL,
  `gpu` varchar(100) DEFAULT NULL,
  `storage` varchar(50) DEFAULT NULL,
  `optical_drive` varchar(50) DEFAULT NULL,
  `psu` varchar(100) DEFAULT NULL,
  `display_unit` varchar(100) DEFAULT NULL,
  `operating_system` varchar(100) DEFAULT NULL,
  `komputer_type` varchar(50) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `mac_address` varchar(50) DEFAULT NULL,
  `connectivity` varchar(20) DEFAULT NULL,
  `internet` varchar(5) DEFAULT NULL,
  `user` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `link_to` varchar(50) DEFAULT NULL,
  `maint_date` date DEFAULT NULL,
  `maint_next_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_asset`
--

INSERT INTO `tbl_asset` (`id_asset`, `tanggal_pemeriksaan`, `no_asset`, `kategori`, `nama_device`, `brand`, `type`, `motherboard`, `cpu`, `ram`, `gpu`, `storage`, `optical_drive`, `psu`, `display_unit`, `operating_system`, `komputer_type`, `ip_address`, `mac_address`, `connectivity`, `internet`, `user`, `password`, `location`, `link_to`, `maint_date`, `maint_next_date`) VALUES
('03.001.001', '2020-02-11', '13', 'Note Book', 'DIR-NB', 'Dell', 'Dell Inspiron 11-3168', 'Dell 0G70RP', 'Intel Pentium N3710 @ 1.60 GHz', '4Gb DDR3, Single', 'Intel HD Graphics', 'Toshiba 500Gb', '-', 'Dell', '11,6\"', 'Windows 10', 'Office', '192.168.1.192', '90:CD:B6:3F:B2:97', 'Wireless', 'Yes', 'Nandjar Nugraha', 'mustafa', 'Mobile', 'WiFi Router', '2020-02-20', '2020-06-24'),
('03.001.002', '2020-02-11', '-', 'Note Book', 'ENG01-NB', 'Lenovo', 'Ideapad 700-15ISK', 'Lenovo', 'Intel Core i7-6700HQ 2,60GHz', '8,00 GB', '-', '-', '-', '-', '15\"6', 'Windows 10', 'Engineering', '192.168.1.199', 'C8:FF:28:5D:98:35', 'Wireless', 'Yes', 'Aman Wardana', '', 'Mobile', 'WiFi Router', '2020-02-21', '2020-06-25'),
('03.001.003', '2020-02-11', '7', 'Note Book', 'CNCCADCAM-NB', 'Asus', 'Asus N43s', 'Asus', 'Intel Core i5-2430M (4 CPU) ~ 2,40 GHz', '2X4Gb DDR3, Dual', 'NVIDIA GeForce GT 540M 2Gb, Intel HD Graphics', 'Corsair Force SSD 120Gb', 'Asus', 'Asus', '14\"', 'Windows 7', 'Office', '192.168.1.198', '74:2F:68:70:EB:38', 'Wireless', 'Yes', 'Ius Rusmana', '', 'Mobile', 'WiFi Router', '2020-02-26', '2020-06-30'),
('03.001.004', '2020-02-11', '5', 'Note Book', 'ENG03-NB', 'Asus', 'Asus A456U', 'Asus', 'Intel i5-6200U', '2 x 4Gb DDR4', 'NVIDIA GF930MX', 'Seagate Sata 1Tb', 'DVDRW', 'Asus', '14\"', 'Windows 10', 'Engineering', '192.168.1.56', '74:C6:3B:67:FF:B3', 'Wireless', 'No', 'Ahmad Suparto', '', 'Mobile', 'WiFi Router', '2020-02-25', '2020-06-29'),
('03.001.005', '2020-02-11', '2', 'Note Book', 'DE01-NB', 'Acer', 'Acer A315-41G', 'RR_Metapod_RR', 'AMD Ryzen 5 Mobile 2500U (8 CPU) ~ 2.00 GHz', '2x4Gb DDR4, Dual', 'AMD Radeon (TM) Vega 8 Graphic 1Gb, Radeon 535S 2Gb', 'Tosibha, 1Tb', '-', 'Acer', '15,6\"', 'Windows 10', 'Engineering', '192.168.1.58', '70:85:C2:5A:C7:D4', 'Wireless', 'No', 'Ahmad Suparto', '', 'Mobile', 'WiFi Router', '2020-02-25', '2020-06-29'),
('03.001.006', '2020-02-11', '8', 'Note Book', 'CNC01-NB', 'Asus', 'Asus A456U', 'Asus', 'Intel i5-6200U', '2x4Gb DDR4', 'NVIDIA GF930MX', 'Seagate Sata 1Tb', 'DVDRW', 'Asus', '14\"', 'Windows 10', 'Engineering', '192.168.1.87', '70:85:C2:5A:C7:D4', 'Wireless', 'No', 'Ahmad Suparto', '', 'Mobile', 'WiFi Router', '2020-02-29', '2020-07-03'),
('03.001.007', '2020-02-11', '0', 'Note Book', 'MAN01-NB', 'Dell', 'Dell Inspiron N5110', 'Dell', 'Intel i7 2670QM', '2 X 4Gb DDR3', 'NVIDIA GT525M', 'Toshiba 500Gb SSD', 'HL-DT DVDRW', 'Dell', '18,5\" W', '-', 'Engineering', '192.168.1.55', 'AC:72:89:B0:E3:DE', 'Wireless', 'No', 'Ahmad Suparto', '', 'Mobile', 'WiFi Router', '2020-02-26', '2020-06-30'),
('03.001.008', '2020-02-11', '9', 'Note Book', 'HP-Pav20', 'HP', 'HP Pavilion 20', 'Degatron Corp, 24ED', 'Intel Pentium G2020 @ 2,90 GHz', '2x2Gb DDR3, Dual', 'Intel HD Graphics', 'Seagate 500Gb', 'HP', 'HP', 'HP 22\"', 'Windows 7', 'Office', '192.168.1.193', '50:3E:AA:A3:D5:F9', 'Wireless', 'Yes', 'Ahmad Suparto', 'alimurtadha', 'Kantor Atas', 'WiFi Router', '2020-02-26', '2020-06-30'),
('03.001.009', '2020-02-11', '0', 'Komputer', 'FIN01-PC', '-', '-', 'ECS 6100SM', 'AMD X2 5600+', 'Kingstone 2x1Gb DDR2 PC667', 'On Board', 'Seagate 40Gb', 'Asus CDRW', 'Simbadda 380W', 'LG L1742S 17\"S', '-', 'Office', '192.168.1.196', '64:66:B3:3B:0B:C3', 'Wireless', 'Yes', 'Ahmad Suparto', 'alimurtadha', 'Kantor Atas', 'WiFi Router', '2020-02-26', '2020-06-30'),
('03.001.010', '2020-02-11', '10', 'Komputer', 'FIN02-PC', '-', '-', 'Gigabyte Tech, G41MT-S2D', 'Intel Pentium E5700 @ 3,00 GHz', 'V-Gen 2x2Gb DDR3, Dual', 'Intel G41 Express Chipset', 'Toshiba 500 Gb', '-', 'Acbel 470', 'LG L1742S 17\"S', 'Windows 7', 'Office', '192.168.1.193', '64:66:B3:FA:C8:F2', 'Wireless', 'Yes', 'Ahmad Suparto', '12345678', 'Kantor Atas', 'WiFi Router', '2020-02-26', '2020-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_os`
--

CREATE TABLE `tbl_os` (
  `id_os` varchar(12) NOT NULL,
  `nama_os` varchar(100) DEFAULT NULL,
  `type_os` varchar(5) DEFAULT NULL,
  `license_key` varchar(100) DEFAULT NULL,
  `tgl_pembelian` date DEFAULT NULL,
  `expire_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(15) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `role` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `nama_depan`, `nama_belakang`, `foto`, `role`, `password`) VALUES
('1', 'nn', 'Nandjar', 'Nugraha', 'foto1.png', 'admin', 'nn'),
('2', 'aw', 'Aman', 'Wardana', 'foto2.png', 'admin', 'aw'),
('3', 'ir', 'Ius', 'Rusmana', 'foto3.jpg', 'admin', 'ir'),
('4', 'as', 'Ahmad', 'Suparto', 'foto4.jpg', 'admin', 'as');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_asset`
--
ALTER TABLE `tbl_asset`
  ADD PRIMARY KEY (`id_asset`);

--
-- Indexes for table `tbl_os`
--
ALTER TABLE `tbl_os`
  ADD PRIMARY KEY (`id_os`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
