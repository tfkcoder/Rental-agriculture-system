-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 10:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rais_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(20) NOT NULL,
  `name` varchar(40) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `created_on`) VALUES
(7, 'Mbegu za mahindi', '2023-05-07'),
(9, 'Alizet', '2023-05-07'),
(10, 'Sprayer', '2023-05-09'),
(17, 'TRACTOR', '2023-05-10'),
(19, 'Mbegu za mchicha', '2023-05-13'),
(73, 'Parachichi', '2023-06-13'),
(74, 'Matunda', '2023-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(200) NOT NULL,
  `category_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `p_info` varchar(250) NOT NULL,
  `photo` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_on` date NOT NULL,
  `user_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `category_id`, `name`, `p_info`, `photo`, `price`, `created_on`, `user_id`) VALUES
(17, 2, 'HP ', 'HHH PPP', '20220311_160827.jpg', 350000, '2023-05-12', 0),
(18, 2, 'Hp folio ', 'hp folio corei5 ram 6gb hdd 500 gb', '20220521_212132.jpg', 450000, '2023-05-12', 0),
(19, 1, 'Hp desktop ', 'Desktop cimputer ram 4Gb camera 12pxls hdd 500gb', '20220311_160918.jpg', 5640000, '2023-05-12', 0),
(24, 15, 'SAMSUNG NOTE 10', 'RAM 4GB STRAGE 34GB', '20220606_143200.jpg', 360000, '2023-05-13', 0),
(27, 19, 'Infinix hot 10', 'nn nn nn nn nnn ', '20220311_160918.jpg', 650000, '2023-05-13', 0),
(29, 19, 'TECNO C9', 'Tecno smartphone', '', 230000, '2023-05-13', 0),
(30, 19, 'Tecno W3Lite', 'Tecno company smartphone ', '', 1600000, '2023-05-13', 0),
(32, 2, 'Desktop PC', 'bbbb', '20220311_160827.jpg', 340000, '2023-05-15', 0),
(34, 15, 'SABOOFER', 'BBBN NN  NN', '', 670000, '2023-06-02', 0),
(35, 20, 'HISENSE INC 32', 'Smart Tv hisence inch 32 ', '', 250000, '2023-06-02', 0),
(36, 20, 'Sunder TV', 'Sunder TV inch 32 ', 'Screenshot (5).png', 350000, '2023-06-02', 0),
(37, 9, 'KIKATA MPUNGA', 'BVBVBV BVHGYG N VHGHG', '', 67890, '2023-06-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(255) NOT NULL,
  `user_id` int(255) DEFAULT NULL,
  `created_on` date NOT NULL,
  `status1` int(2) NOT NULL,
  `types` int(2) NOT NULL,
  `equipment` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL,
  `days` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `user_id`, `created_on`, `status1`, `types`, `equipment`, `quantity`, `days`) VALUES
(4, NULL, '2023-06-13', 1, 0, 'FARM TRACTOR', 8, 100),
(5, NULL, '2023-06-13', 0, 0, 'tractor', 4, 100),
(11, NULL, '2023-06-13', 1, 1, 'farm track', 6, 60),
(15, NULL, '2023-06-13', 0, 0, 'Mbegu za mahindi', 30, 1),
(16, NULL, '2023-06-13', 0, 0, 'Parachich', 2000000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_logs`
--

CREATE TABLE `system_logs` (
  `logs_id` int(250) NOT NULL,
  `category_id` int(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `operation_type` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(250) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `status1` int(2) NOT NULL,
  `types` int(2) NOT NULL,
  `activate_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `reset_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `phone`, `email`, `address`, `gender`, `password`, `photo`, `status1`, `types`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'Benard', 'Molison', 678456734, 'benmolson@gmail.com', 'p.o.box 234 Ghana', 'Male', '$2y$10$3.Z63ttkTXnBlHEqHfncFOYnFyNpiS049pvQeJIqwMQ9UmNaHJB/e', '', 1, 1, NULL, NULL, '2023-05-09'),
(2, 'stephan', 'Joshua', 678463421, 'joshua@gmail.com', 'p.o.box 12 nigeria', 'Male', '$2y$10$XNcYymuu3FohXepTQ.tzoOzeUIVMmIcwbDS0aADwtrjXzFaHFUL4y', '', 1, 1, NULL, NULL, '2023-05-09'),
(3, 'Mussa', 'Juma', 784563412, 'mussajuma@gmail.com', 'p.o.box 23 njombe', 'Male', '$2y$10$NwhwFKX0z8Qr3yj1DCpdBeAYfScZLbkk5oe2nxFIWKzDSznBTAlPK', '', 1, 1, NULL, NULL, '2023-05-09'),
(4, 'Mariam', 'Joshua', 689456732, 'mariamu@gmail.com', 'p.o.box 34 Mwanza', 'Female', '$2y$10$tm4jpRtpq5GIJPID6G4WSuslFPlJDOv.qB.yba6/iHlMZ/OWmPWbG', '20220523_095200.jpg', 1, 2, NULL, NULL, '2023-05-09'),
(5, 'Anna', 'James', 764563423, 'anna@gmail.com', 'p.o.box 56 Morogoro', 'Female', '$2y$10$xIt9jJ5Xbd2pf0mZdJvtE.raSWDV1zudbH85HNQelfj92kuuvZfPe', '', 0, 1, NULL, NULL, '2023-05-09'),
(6, 'Magda', 'Jerome', 789567845, 'magdajerome@gmail.com', 'p.o.box 57 Magu', 'Female', '$2y$10$MMk1b8n5nUVCcrQYbwgRj.t8zUeNJ7t2vbQFFXq/zQylaBhJmhA8O', '', 1, 1, NULL, NULL, '2023-05-09'),
(10, 'Benny', 'Athanas', 747696834, 'bennycive@gmail.com', 'p.o.box 51 Geita', 'Male', '$2y$10$Cwka7af.cV8D8xyTM7/GH.8pj.N4Ok9iAz80vx9iVR9LI0sJzyi12', '20220322_145458.jpg', 1, 2, NULL, NULL, '2023-05-09'),
(14, 'Vero', 'Jackson', 768567213, 'veronicajackson@gmail.com', 'p.o.box 34 dodoma', 'Female', '$2y$10$aVE0QXjt961pZgb/pv2btuDZ3vhMHgSgWIlrR9SaUuVHsn0K/RE4a', '', 0, 2, NULL, NULL, '2023-05-09'),
(15, 'Makoye', 'Makenzi', 672346217, 'makoye.mak@yahoo.com', 'p.o.box 78 Mbeya', 'Male', '$2y$10$0TftqyE9dKGKb67htvARzu7BNqZsQ1TOwkQxfJrfmPyezaohsife.', '', 1, 2, NULL, NULL, '2023-05-09'),
(16, 'Anjera', 'John', 754678943, 'anjeram@gmail.com', 'p.o.box 430 Magu', 'Female', '$2y$10$GtMHf7CbsjObK28NXmUrsukD5O6YXATKY4QvX2RHKsxo5SEEZOUye', '', 0, 2, NULL, NULL, '2023-05-09'),
(17, 'Veronica', 'Mathew', 765483513, 'veronicamathew2@yahoo.com', 'p.o.box 45 moshi', 'Female', '$2y$10$BQfWe.wtyfGAqbLTIuZvFee.LJ.MRKeyKLL7J.BqU82VnpT6Sckrq', '', 0, 2, NULL, NULL, '2023-05-09'),
(18, 'Rahabu', 'Mwakifuna', 757457812, 'rahabumwak@email.com', 'p.o.box 210 Mbeya', 'Female', '$2y$10$fEeLUG7RnHiQyg59..HMduCtai18eFTrkmJkTB8swO1x7a.J7ox.e', '', 1, 2, NULL, NULL, '2023-05-09'),
(19, 'Alex', 'Shija', 67845341748, 'alexshija@gmail.com', 'p.o.box 351 kahama', 'Female', '$2y$10$qJ7yLxbcFJUekC5/doWfZuj49vZOrVpFKi4kSCBoLL3Tpotc8lZKS', '', 1, 2, NULL, NULL, '2023-05-09'),
(20, 'Rama', 'Technitian', 789567342, 'ramatech@gmail.com', 'p.o.box 170 Geita', 'Male', '$2y$10$mCu.QuZkv9aNJDf6dIPjGuGfA8p5N04hvhr34/EjY3mXJ9TLwnWmm', '', 1, 2, NULL, NULL, '2023-05-09'),
(21, 'Veronica', 'Moshi', 652367329, 'veromosh1@gmail.com', 'p.o.box 90 moshi', 'Female', '$2y$10$bbFAMH6Y68skNR5/xzsPx.6S3njNatkua.Cz/F6IqsW32aYQCeaoW', '', 1, 2, NULL, NULL, '2023-05-09'),
(22, 'Benny', 'Athanas', 68456789, 'b@gmail.com', 'P.o.box 51 Geita', 'Male', '$2y$10$vYQ1W8dcnSzMW9buOuazje/z48Yw9AOLYzteGalQrLPez5wYooHmG', '', 1, 0, NULL, NULL, '2023-05-09'),
(23, 'Frida', 'Kimaro', 789564319, 'fridaj@gmail.com', 'P.o.Box 128 Kibosho', 'Female', '$2y$10$070E/sWiKg7tSswVug.d4OMPju9oSiZtZ50wFIwwGwyRidDU/.5mu', '', 1, 2, NULL, NULL, '2023-05-09'),
(24, 'Jackobo', 'Papa', 789567845, 'jcb@gmail.com', 'P.o.box 300 Dodoma', 'Male', '$2y$10$Px8rbfhXfQogtXV1T3L5O.1YN/oVo8P785KATVQAzOoHkaq/FFaHG', '', 0, 1, NULL, NULL, '2023-05-10'),
(25, 'Mage', 'Juma', 789456723, 'mage@yahoo.com', 'p.o.box 345 mwanza', 'Female', '$2y$10$BQAZPg.HeHcrB53uT9ABAul0saaOboenQ0zPS7vWKm018LtCQvSyO', '', 0, 1, NULL, NULL, '2023-05-10'),
(26, 'Mtaki', 'Gedah', 789456731, 'mtakigeda@gmail.com', 'p.o.box 201 Dodoma', 'Male', '$2y$10$XW9xvOmNlDFVt1wa1Eu.GeF1RcNOUkfeQKuR7eRQStvYb45X0Ep4e', 'IMG_0276.JPG', 0, 1, NULL, NULL, '2023-05-10'),
(27, 'Masele', 'Jemsi', 789562314, 'masejems@gmail.com', 'p.o.box 34 Dar-es-salaam', 'Male', '$2y$10$1uvKiPGXsQv7WdKLflJ86u4VjaKvgSVpE9DsBdmiX53oPnEWDraUm', '', 0, 1, NULL, NULL, '2023-05-10'),
(28, 'Makoye', 'Simon', 768943120, 'makoye@gmail.com', 'P.o.box 200 Geita', 'Male', '$2y$10$EPnL0rvOYyaro6Cm3G1Ydegt3GdOxNjOsXqxnaL3wb13qKdBcosme', '', 1, 1, NULL, NULL, '2023-05-10'),
(31, 'Mwajuma', 'Juma', 678451144, 'mwajuma@yahoo.ac.com', 'p.o.box 300 Mwanza', 'Female', '$2y$10$2akIcXpKB16svVreiRcVP.WHgjIlFmEAoZKDdcR33D613L.PyWB3G', '', 1, 2, NULL, NULL, '2023-05-13'),
(32, 'Mwanaid', 'Jems', 7895566773, 'mwana@gmail.com', 'p.o.box 30 mwanza', 'Female', '$2y$10$etzlkWnIpTfCdB2FdV.6S.idRG2P5Yuj3Hcszlami2ZYiBaVgblli', '', 1, 2, NULL, NULL, '2023-05-13'),
(33, 'Mario', 'Hasani', 789456789, 'marios@gmail.com', 'dar', 'Male', '$2y$10$9hbK03yPIxkJ87fMm44/x.VBLGi03Q9ORudUGRNy57HxOhgDZVs6q', '', 0, 1, NULL, NULL, '2023-05-14'),
(34, 'Anjera', 'Masawe', 76588456, 'anjera1@gmail.com', 'mwanza', 'Female', '$2y$10$DfviGizURA4mvtxGeNyaHO1cPRHsst.ilWDVQtvmXzNgqr7ZP/hOq', '', 0, 2, NULL, NULL, '2023-05-14'),
(35, 'Marco', 'James', 7895678, 'marco@gmail.com', 'njombe', 'Male', '$2y$10$EUgmJJnfuZ9MP9Z/H.Hnueox2N8Aj7EXBbEJSx8A/.cjoI2Bqkcka', '', 0, 2, NULL, NULL, '2023-05-15'),
(36, 'masanja', 'Mussa', 789553344, 'example@gmail.com', 'Njombe', 'Male', '$2y$10$gtka5WXUic9V5ZmCmaEP5OEE3My.on79FKfmun70C4O3D6Xi7MZmy', '', 1, 2, NULL, NULL, '2023-05-15'),
(38, 'Mandango', 'Juma', 7895634562, 'mandango@gmail.com', 'mwanza', 'Male', '$2y$10$Te0mcWmPD/vQrWCb29QPg.XY5Huca2V0LJkJMjHfdXnRpvL2K5AX6', '', 0, 2, NULL, NULL, '2023-05-15'),
(41, 'joyce', 'Lomalisa', 789675645, 'joyce@gmail.com', 'joyce', 'Female', '$2y$10$hNxGar6zmw4ct8Py2ZvmheSsNFJ0Opv6mDFAyJZ7tRcDQfCbTrEYm', '', 1, 1, NULL, NULL, '2023-06-07'),
(42, 'Admin', 'Admin', 7895678, 'a@gmail.com', 'Dodoma', 'Male', '$2y$10$0MwptTcNuww0hAK0PhaoTOeyOzb.D13DSs60MkHSef8h7hAlxZ/9C', '', 1, 0, NULL, NULL, '2023-06-08'),
(43, 'Mariamu', 'Makoye', 768567890, 'mariam@gmail.com', 'p.o.box 200 mwanza', 'Female', '$2y$10$LmZGDy9VrZrbR/mN4oVKRuz17imMJs5XP4NLZYFnDeUiNMgLW8.yy', '', 1, 1, NULL, NULL, '2023-06-08'),
(44, 'Maria', 'Juma', 6785634512, 'mariaj200@yahoo.com', 'P.o.box 120 Dodoma', 'Female', '$2y$10$eai0At0Q98KeBZ96TQe9tO7Am208iO/Hr0XvJ4zkhPHTPx.vuc8iy', '', 1, 2, NULL, NULL, '2023-06-08'),
(45, 'Joshua', 'Juma', 78956771122, 'joshua123@gmail.com', 'p.o.box 200 Dodoma', 'Male', '$2y$10$VJNhmx8M0YiPwYu5Nxdliu/dW678kSJDc3YljFxRh5pa2FaxVoZI.', '', 1, 2, NULL, NULL, '2023-06-08'),
(46, 'farmer', 'farmer', 1231234455, 'f@gmail.com', 'farmer', 'Male', '$2y$10$6L2oW.llVR90LDDeha09geng.lJWkki6P3oISslHEzA/UoF8aGt.W', '', 1, 1, NULL, NULL, '2023-06-09'),
(47, 'man', 'man', 9223372036854775807, 'man@gmail.com', 'mwanza', 'Male', '$2y$10$uACP17M.HnIYw7arUR4JFek6YvSyH/H8/ioQyDvsXmVnIt02Ym9yS', '', 1, 2, NULL, NULL, '2023-06-11'),
(48, 'masalu', 'juma', 223311, 'masa@gmail.com', 'mwana', 'Male', '$2y$10$ZP54F06xJQcGxTT2oMeMc./R4a4jpV1ZDsGAf7jNl1j102LKZn6D6', '', 0, 1, NULL, NULL, '2023-06-11'),
(51, 'mass', 'mm', 112211221122, 'mase@gmail.com', NULL, NULL, '$2y$10$RdJIroEbiooI0btS6zW32uDEcWvzxNkXAQ12crrJtsceNyJsGtma2', NULL, 0, 1, NULL, NULL, '2023-06-11'),
(52, 'kk', 'kk', 6677, 'kk@gmail.com', NULL, 'Male', '$2y$10$SmM3cEkpy4QPilMmQn0RU.wloYPspaefcbdwl2JKDmfjCCKtcZQj2', NULL, 0, 1, NULL, NULL, '2023-06-12'),
(57, 'maja', 'joshua', 123400011, 'maja@gmail.com', NULL, 'Male', '$2y$10$Od8e6ESTrDrQEIzFtpIzs..Zb32jj0X1RQ.r9xclOsKFLvlBLLKe.', NULL, 0, 2, NULL, NULL, '2023-06-12'),
(58, 'makoye', 'juma', 996789567, 'mjuma@gmail.com', 'mwanza', 'Male', '$2y$10$pf9LW3E56ukKlESMkLtCl.UtqIf1xbaPLRtPNODOOM3kS6HN5/lty', NULL, 1, 2, NULL, NULL, '2023-06-12'),
(60, 'supplier', 'supplier', 1122, 's@gmail.com', 'Dodoma', 'Other', '$2y$10$RkRMzxNIqryu/U29ENKX8.WSfieLmaNrWYY/BQnC7lBq6.4CCPUTm', '', 1, 2, NULL, NULL, '2023-06-12'),
(61, 'makoye', 'joshua', 78905678, 'makoyemusa@yahoo.com', 'dodoma', 'Male', '$2y$10$WaVg177gVr2Wud/vk9Gn7.V6ERpEhDiV/4lMnAg15AKXxxvjyUnNO', NULL, 1, 2, NULL, NULL, '2023-06-12'),
(62, 'Udom', 'Cive', 223366, 'udom@gmail.com', 'p.box 290 Dodoma', 'Other', '$2y$10$YT79iU3Edmo2EUOiE2In0.hz.ZQUTkhLkpee1/LolafRRlkJOXDPy', '', 1, 1, NULL, NULL, '2023-06-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `system_logs`
--
ALTER TABLE `system_logs`
  ADD PRIMARY KEY (`logs_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`,`email`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `system_logs`
--
ALTER TABLE `system_logs`
  MODIFY `logs_id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
