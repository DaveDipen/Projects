-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 07:01 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `styleit`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_info`
--

CREATE TABLE `address_info` (
  `Address_id` int(11) NOT NULL,
  `U_id` int(11) DEFAULT NULL,
  `Tailor_id` int(11) DEFAULT NULL,
  `Address_City` varchar(25) NOT NULL,
  `Address_State` varchar(25) NOT NULL,
  `Address_Street` varchar(255) NOT NULL,
  `Address_Zipcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_info`
--

INSERT INTO `address_info` (`Address_id`, `U_id`, `Tailor_id`, `Address_City`, `Address_State`, `Address_Street`, `Address_Zipcode`) VALUES
(1, 5, NULL, 'Ahmedabad', 'Gujarat', 'Near Vastrapur', 380015),
(7, 2, NULL, 'Surat', 'Gujarat', 'Near Somewhere', 394230),
(8, 1, NULL, 'Ahmedabad', 'Gujarat', 'Saraspur', 380018),
(9, NULL, 1, 'Ahmedabad', 'Gujarat', 'Near Raikhad Char Rasta', 380001),
(10, NULL, 3, 'Ahmedabad', 'Gujarat', 'Narol, Ahmedabad', 382405),
(11, NULL, 4, 'Ahmedabad', 'Gujarat', 'Near Paldi', 380006),
(12, 5, NULL, 'Surendranagar', 'Gujarat', 'Near Surendranagar', 363001),
(13, NULL, 1, 'Ahmedabad', 'Gujarat', 'Near Ambli', 382463),
(15, NULL, 1, 'Ahmedabad', 'Gujarat', 'Near Elishbridge', 380006);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Admin_id` int(11) NOT NULL,
  `Admin_Name` varchar(30) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_MobileNo` varchar(10) NOT NULL,
  `Admin_userName` varchar(10) NOT NULL,
  `Admin_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Admin_id`, `Admin_Name`, `Admin_Email`, `Admin_MobileNo`, `Admin_userName`, `Admin_Password`) VALUES
(1, 'Dave Dipen', 'admin123@gmail.com', '9879598795', 'Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `city_info`
--

CREATE TABLE `city_info` (
  `City_id` int(11) NOT NULL,
  `City_Name` varchar(30) NOT NULL,
  `State_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city_info`
--

INSERT INTO `city_info` (`City_id`, `City_Name`, `State_id`) VALUES
(1, 'Ahmedabad', 7),
(2, 'Surat', 7),
(3, 'Vadodara', 7),
(4, 'Rajkot', 7),
(5, 'Gandhinagar', 7),
(6, 'Porbandar', 7),
(7, 'Jamnagar', 7),
(8, 'Bhavnagar', 7),
(10, 'Surendranagar', 7),
(11, 'Mumbai', 14),
(13, 'Junagadh', 7);

-- --------------------------------------------------------

--
-- Table structure for table `collar_info`
--

CREATE TABLE `collar_info` (
  `Collar_id` int(11) NOT NULL,
  `Collar_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collar_info`
--

INSERT INTO `collar_info` (`Collar_id`, `Collar_Type`) VALUES
(1, 'The Spread Collar'),
(2, 'The Straight Point Collar'),
(3, 'The Button-Down Collar'),
(4, 'The Wingtip Collar'),
(6, 'The Band Collar	');

-- --------------------------------------------------------

--
-- Table structure for table `collection_info`
--

CREATE TABLE `collection_info` (
  `Collection_id` int(11) NOT NULL,
  `Tailor_id` int(11) NOT NULL,
  `Tailor_Org` varchar(30) NOT NULL,
  `Material_Name` varchar(30) NOT NULL,
  `Material_Color` varchar(10) NOT NULL,
  `Pattern_Type` varchar(25) NOT NULL,
  `Collar_Type` varchar(30) NOT NULL,
  `Sleeve_Type` varchar(15) NOT NULL,
  `Design_Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection_info`
--

INSERT INTO `collection_info` (`Collection_id`, `Tailor_id`, `Tailor_Org`, `Material_Name`, `Material_Color`, `Pattern_Type`, `Collar_Type`, `Sleeve_Type`, `Design_Price`) VALUES
(11, 1, 'Raymond', 'Silk', '#15a7cb', 'Solid', 'The Spread Collar', 'Full Sleeve', 1500),
(12, 1, 'Raymond', 'Cotton', '#00d679', 'Stripes', 'The Wingtip Collar', 'Half Sleeve', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `design_info`
--

CREATE TABLE `design_info` (
  `Design_id` int(11) NOT NULL,
  `U_id` int(11) DEFAULT NULL,
  `M_id` int(11) DEFAULT NULL,
  `Tailor_id` int(11) DEFAULT NULL,
  `Material_Name` varchar(30) NOT NULL,
  `Material_Color` varchar(255) NOT NULL,
  `Pattern_Type` varchar(25) NOT NULL,
  `Collar_Type` varchar(30) NOT NULL,
  `Sleeve_Type` varchar(15) NOT NULL,
  `Tailor_Org` varchar(255) DEFAULT NULL,
  `Design_Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design_info`
--

INSERT INTO `design_info` (`Design_id`, `U_id`, `M_id`, `Tailor_id`, `Material_Name`, `Material_Color`, `Pattern_Type`, `Collar_Type`, `Sleeve_Type`, `Tailor_Org`, `Design_Price`) VALUES
(2, 1, 1, NULL, 'Cotton', '#ffffff', 'Solid', 'The Spread Collar', 'Full Sleeve', NULL, NULL),
(4, 1, 1, NULL, 'Silk', '#ee5391', 'Solid', 'The Spread Collar', 'Full Sleeve', NULL, NULL),
(5, 5, 2, NULL, 'Polyster', '#db0606', 'Stripes', 'The Straight Point Collar', 'Half Sleeve', NULL, NULL),
(6, 5, 2, NULL, 'Lilan', '#228ba0', 'Windowpane', 'The Spread Collar', 'Full Sleeve', NULL, NULL),
(7, 5, 2, NULL, 'Lilan', '#629efe', 'Dot', 'The Wingtip Collar', 'Full Sleeve', NULL, NULL),
(9, 5, 3, NULL, 'Silk', '#18dc2f', 'Stripes', 'The Straight Point Collar', 'Half Sleeve', NULL, NULL),
(14, NULL, NULL, 1, 'Silk', '#15a7cb', 'Solid', 'The Spread Collar', 'Full Sleeve', 'Raymond', 1500),
(15, NULL, NULL, 1, 'Cotton', '#00d679', 'Stripes', 'The Wingtip Collar', 'Half Sleeve', 'Raymond', 1000),
(16, NULL, NULL, 1, 'Lilan', '#004cc7', 'Dot', 'The Button-Down Collar', 'Half Sleeve', 'Raymond', 2000),
(17, NULL, NULL, 1, 'Cotton', '#155dd1', 'Dot', 'The Straight Point Collar', 'Half Sleeve', 'Raymond', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `material_info`
--

CREATE TABLE `material_info` (
  `Material_id` int(11) NOT NULL,
  `Material_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_info`
--

INSERT INTO `material_info` (`Material_id`, `Material_Name`) VALUES
(1, 'Cotton'),
(2, 'Silk'),
(3, 'Lilan'),
(5, 'Polyster');

-- --------------------------------------------------------

--
-- Table structure for table `measurment_info`
--

CREATE TABLE `measurment_info` (
  `M_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `User_Name` varchar(20) NOT NULL,
  `M_Chest` decimal(12,2) NOT NULL,
  `M_Waist` decimal(12,2) NOT NULL,
  `M_Sleeve` decimal(12,2) NOT NULL,
  `M_Shoulder` decimal(12,2) NOT NULL,
  `M_Neck` decimal(12,2) NOT NULL,
  `M_Length` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `measurment_info`
--

INSERT INTO `measurment_info` (`M_id`, `U_id`, `User_Name`, `M_Chest`, `M_Waist`, `M_Sleeve`, `M_Shoulder`, `M_Neck`, `M_Length`) VALUES
(1, 1, 'Kirtan', '40.00', '38.00', '25.00', '18.00', '16.00', '28.00'),
(2, 5, 'Dipen', '42.00', '40.00', '26.25', '19.00', '16.00', '28.00'),
(3, 5, 'Harsh', '42.00', '40.00', '25.00', '17.50', '16.00', '28.00'),
(11, 5, 'Mihir', '42.00', '35.00', '26.25', '17.50', '15.50', '28.00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE `offer_info` (
  `Offer_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `Tailor_id` int(11) NOT NULL,
  `Design_id` int(11) NOT NULL,
  `M_id` int(11) NOT NULL,
  `Offer_Price` int(11) NOT NULL,
  `Offer_Answer` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`Offer_id`, `U_id`, `Tailor_id`, `Design_id`, `M_id`, `Offer_Price`, `Offer_Answer`) VALUES
(3, 1, 1, 4, 1, 500, 'Accepted'),
(4, 1, 1, 2, 1, 450, 'Accepted'),
(5, 1, 3, 2, 1, 600, 'Pending'),
(6, 1, 4, 4, 1, 550, 'Pending'),
(7, 5, 1, 5, 2, 600, 'Rejected'),
(8, 5, 1, 6, 2, 550, 'Pending'),
(9, 5, 1, 9, 3, 500, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `Order_id` int(11) NOT NULL,
  `Design_id` int(11) DEFAULT NULL,
  `Tailor_id` int(11) NOT NULL,
  `U_id` int(11) NOT NULL,
  `M_id` int(11) NOT NULL,
  `Order_Cost` int(11) NOT NULL,
  `Order_Date` date NOT NULL DEFAULT current_timestamp(),
  `Order_Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`Order_id`, `Design_id`, `Tailor_id`, `U_id`, `M_id`, `Order_Cost`, `Order_Date`, `Order_Status`) VALUES
(1, 4, 1, 1, 1, 500, '2023-01-29', 'Pending'),
(4, 2, 1, 1, 1, 450, '2023-01-30', 'Finish'),
(6, 9, 1, 5, 3, 500, '2023-02-19', 'Finish'),
(11, 14, 1, 5, 2, 1500, '2023-03-17', 'Pending'),
(13, 15, 1, 1, 1, 1000, '2023-03-17', 'Finish'),
(14, 15, 1, 5, 3, 1000, '2023-04-09', 'Pending'),
(16, 17, 1, 5, 2, 2500, '2023-04-21', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `pattern_info`
--

CREATE TABLE `pattern_info` (
  `Pattern_id` int(11) NOT NULL,
  `Pattern_Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pattern_info`
--

INSERT INTO `pattern_info` (`Pattern_id`, `Pattern_Type`) VALUES
(1, 'Solid'),
(2, 'Dot'),
(3, 'Graph Check'),
(4, 'Plaid'),
(5, 'Windowpane'),
(7, 'Stripes');

-- --------------------------------------------------------

--
-- Table structure for table `sleeve_info`
--

CREATE TABLE `sleeve_info` (
  `Sleeve_id` int(11) NOT NULL,
  `Sleeve_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sleeve_info`
--

INSERT INTO `sleeve_info` (`Sleeve_id`, `Sleeve_Type`) VALUES
(1, 'Half Sleeve'),
(3, 'Full Sleeve	');

-- --------------------------------------------------------

--
-- Table structure for table `state_info`
--

CREATE TABLE `state_info` (
  `State_id` int(11) NOT NULL,
  `State_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_info`
--

INSERT INTO `state_info` (`State_id`, `State_Name`) VALUES
(1, 'Andhra Pradesh'),
(2, 'Arunachal Pradesh'),
(3, 'Assam'),
(4, 'Bihar'),
(5, 'Chhattisgarh'),
(6, 'Goa'),
(7, 'Gujarat'),
(8, 'Haryan'),
(9, 'Himachal Pradesh'),
(10, 'Jharkhand'),
(11, 'Karnataka'),
(12, 'Kerla'),
(13, 'Madhya Pradesh'),
(14, 'Maharashtra'),
(15, 'Manipur'),
(16, 'Meghalaya'),
(17, 'Mizoram'),
(18, 'Nagaland'),
(19, 'Odisha'),
(20, 'Punjab'),
(21, 'Rajasthan'),
(22, 'Sikkim'),
(23, 'Tamil Nadu'),
(24, 'Telangana'),
(25, 'Tripura'),
(26, 'Uttarakhand'),
(27, 'Uttar Pradesh'),
(28, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `tailor_info`
--

CREATE TABLE `tailor_info` (
  `Tailor_id` int(11) NOT NULL,
  `Tailor_Name` varchar(30) NOT NULL,
  `Tailor_MobileNo` varchar(10) NOT NULL,
  `Tailor_Email` varchar(50) NOT NULL,
  `Tailor_Org` varchar(20) NOT NULL,
  `Tailor_userName` varchar(10) NOT NULL,
  `Tailor_Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tailor_info`
--

INSERT INTO `tailor_info` (`Tailor_id`, `Tailor_Name`, `Tailor_MobileNo`, `Tailor_Email`, `Tailor_Org`, `Tailor_userName`, `Tailor_Password`) VALUES
(1, 'Parmar Mihir Jagdishbhai', '9512289515', 'mihir123@gmail.com', 'Raymond', 'Mihir', '123'),
(3, 'Vaghela Vilash', '9099798816', 'vilash123@gmail.com', 'Raymond', 'Vilash', '123'),
(4, 'Akshat Shah', '7043891236', 'akshat123@gmail.com', 'Shah & Sons', 'Akshat', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `U_id` int(11) NOT NULL,
  `U_Name` varchar(35) NOT NULL,
  `U_MobileNo` varchar(10) NOT NULL,
  `U_Email` varchar(50) NOT NULL,
  `U_userName` varchar(10) NOT NULL,
  `U_Password` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`U_id`, `U_Name`, `U_MobileNo`, `U_Email`, `U_userName`, `U_Password`, `created_at`, `updated_at`) VALUES
(1, 'Panchal Kirtan Hareshbhai', '9512893101', 'panchalkirtan2302@gmail.com', 'Kirtan', '756', NULL, NULL),
(2, 'Banavali Dhruv', '6546546549', 'Dhruv123@gmail.com', 'Dhruv', '123', NULL, NULL),
(5, 'Dipen Dave', '9979201303', 'dipen123@gmail.com', 'Dipen', '123', NULL, NULL),
(10, 'Jay Panchal', '9876987646', 'jay@gmail.com', 'Jay', '123', NULL, NULL),
(11, 'Vaghela Vilash', '9876556789', 'vilash@gmail.com', 'Vilash', '123', '2023-04-06 13:56:35', '2023-04-06 13:56:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_info`
--
ALTER TABLE `address_info`
  ADD PRIMARY KEY (`Address_id`),
  ADD KEY `address_User` (`U_id`),
  ADD KEY `address_tailor` (`Tailor_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `city_info`
--
ALTER TABLE `city_info`
  ADD PRIMARY KEY (`City_id`),
  ADD KEY `state` (`State_id`);

--
-- Indexes for table `collar_info`
--
ALTER TABLE `collar_info`
  ADD PRIMARY KEY (`Collar_id`);

--
-- Indexes for table `collection_info`
--
ALTER TABLE `collection_info`
  ADD PRIMARY KEY (`Collection_id`),
  ADD KEY `tailor_Collection` (`Tailor_id`);

--
-- Indexes for table `design_info`
--
ALTER TABLE `design_info`
  ADD PRIMARY KEY (`Design_id`),
  ADD KEY `design_info` (`U_id`),
  ADD KEY `measurment_info` (`M_id`),
  ADD KEY `tailorid` (`Tailor_id`);

--
-- Indexes for table `material_info`
--
ALTER TABLE `material_info`
  ADD PRIMARY KEY (`Material_id`);

--
-- Indexes for table `measurment_info`
--
ALTER TABLE `measurment_info`
  ADD PRIMARY KEY (`M_id`),
  ADD KEY `measurment` (`U_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_info`
--
ALTER TABLE `offer_info`
  ADD PRIMARY KEY (`Offer_id`),
  ADD KEY `tailor_info` (`Tailor_id`),
  ADD KEY `user_info` (`U_id`),
  ADD KEY `offer_info` (`Design_id`),
  ADD KEY `measurments` (`M_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `design` (`Design_id`),
  ADD KEY `user` (`U_id`),
  ADD KEY `tailor` (`Tailor_id`),
  ADD KEY `user_Measurment` (`M_id`);

--
-- Indexes for table `pattern_info`
--
ALTER TABLE `pattern_info`
  ADD PRIMARY KEY (`Pattern_id`);

--
-- Indexes for table `sleeve_info`
--
ALTER TABLE `sleeve_info`
  ADD PRIMARY KEY (`Sleeve_id`);

--
-- Indexes for table `state_info`
--
ALTER TABLE `state_info`
  ADD PRIMARY KEY (`State_id`);

--
-- Indexes for table `tailor_info`
--
ALTER TABLE `tailor_info`
  ADD PRIMARY KEY (`Tailor_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_info`
--
ALTER TABLE `address_info`
  MODIFY `Address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `Admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city_info`
--
ALTER TABLE `city_info`
  MODIFY `City_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `collar_info`
--
ALTER TABLE `collar_info`
  MODIFY `Collar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `collection_info`
--
ALTER TABLE `collection_info`
  MODIFY `Collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `design_info`
--
ALTER TABLE `design_info`
  MODIFY `Design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `material_info`
--
ALTER TABLE `material_info`
  MODIFY `Material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `measurment_info`
--
ALTER TABLE `measurment_info`
  MODIFY `M_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offer_info`
--
ALTER TABLE `offer_info`
  MODIFY `Offer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `Order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pattern_info`
--
ALTER TABLE `pattern_info`
  MODIFY `Pattern_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sleeve_info`
--
ALTER TABLE `sleeve_info`
  MODIFY `Sleeve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state_info`
--
ALTER TABLE `state_info`
  MODIFY `State_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tailor_info`
--
ALTER TABLE `tailor_info`
  MODIFY `Tailor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address_info`
--
ALTER TABLE `address_info`
  ADD CONSTRAINT `address_User` FOREIGN KEY (`U_id`) REFERENCES `user_info` (`U_id`),
  ADD CONSTRAINT `address_tailor` FOREIGN KEY (`Tailor_id`) REFERENCES `tailor_info` (`Tailor_id`);

--
-- Constraints for table `city_info`
--
ALTER TABLE `city_info`
  ADD CONSTRAINT `state` FOREIGN KEY (`State_id`) REFERENCES `state_info` (`State_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `collection_info`
--
ALTER TABLE `collection_info`
  ADD CONSTRAINT `tailor_Collection` FOREIGN KEY (`Tailor_id`) REFERENCES `tailor_info` (`Tailor_id`);

--
-- Constraints for table `design_info`
--
ALTER TABLE `design_info`
  ADD CONSTRAINT `design_info` FOREIGN KEY (`U_id`) REFERENCES `user_info` (`U_id`),
  ADD CONSTRAINT `measurment_info` FOREIGN KEY (`M_id`) REFERENCES `measurment_info` (`M_id`),
  ADD CONSTRAINT `tailorid` FOREIGN KEY (`Tailor_id`) REFERENCES `tailor_info` (`Tailor_id`);

--
-- Constraints for table `measurment_info`
--
ALTER TABLE `measurment_info`
  ADD CONSTRAINT `measurment` FOREIGN KEY (`U_id`) REFERENCES `user_info` (`U_id`);

--
-- Constraints for table `offer_info`
--
ALTER TABLE `offer_info`
  ADD CONSTRAINT `measurments` FOREIGN KEY (`M_id`) REFERENCES `measurment_info` (`M_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offer_info` FOREIGN KEY (`Design_id`) REFERENCES `design_info` (`Design_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tailor_info` FOREIGN KEY (`Tailor_id`) REFERENCES `tailor_info` (`Tailor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_info` FOREIGN KEY (`U_id`) REFERENCES `user_info` (`U_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `design` FOREIGN KEY (`Design_id`) REFERENCES `design_info` (`Design_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tailor` FOREIGN KEY (`Tailor_id`) REFERENCES `tailor_info` (`Tailor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`U_id`) REFERENCES `user_info` (`U_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_Measurment` FOREIGN KEY (`M_id`) REFERENCES `measurment_info` (`M_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
