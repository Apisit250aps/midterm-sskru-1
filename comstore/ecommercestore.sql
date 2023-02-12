-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 02:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommercestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_name` varchar(200) NOT NULL,
  `unit` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` mediumint(9) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_brand` varchar(200) NOT NULL,
  `price` mediumint(9) NOT NULL,
  `quantity` smallint(6) NOT NULL,
  `img_source` varchar(500) NOT NULL,
  `desc` longtext NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brand`, `price`, `quantity`, `img_source`, `desc`, `category`) VALUES
(10035, 'Intel Core i5-10400F Desktop Processor 6 Cores up to 4.3 GHz ', 'INTEL', 100, 31, '../upload/products/INTEL 1200 CORE I3-10105F 3.7 GHz/Intel-Core-i3-10100F-1.jpg', '\r\nBrand	Intel\r\nCPU Manufacturer	Intel\r\nCPU Model	Core i5\r\nCPU Speed	2.9 GHz\r\nCPU Socket	BGA 437', 'CPU'),
(10036, 'AMD Ryzen™ 7 5800X3D 8-core, 16-Thread Desktop Processor with AMD 3D V-Cache™ Technology', 'Ryzen', 359, 48, '../upload/products/AMD Ryzen™ 7 5800X3D 8-core, 16-Thread Desktop Processor/61Kq99IRdcL.jpg', '\r\nBrand	AMD\r\nCPU Manufacturer	AMD\r\nCPU Model	Ryzen 7\r\nCPU Speed	4.5 GHz\r\nCPU Socket	Socket AM4', 'CPU'),
(10037, 'Kingston FURY Beast RGB 32GB (2x16GB) 3200MT/s DDR4 CL16 Desktop Memory Kit of 2 | Infrared Syncing | Intel XMP | AMD Ryzen | Plug n Play | KF432C16BBAK2/32', 'Kingston', 139, 31, '../upload/products/Kingston FURY Beast RGB 32GB (2x16GB) DDR4/71nQp70NhYL._AC_SX679_.jpg', 'About this item\r\nStunning RGB lighting with aggressive style\r\nPatented Kingston FURY Infrared Sync Technology\r\nIntel XMP-ready\r\nReady for AMD Ryzen\r\nPlug N Play functionality at 2666MT/s\r\n', 'RAM'),
(10038, 'AMD Ryzen 9 5900X', 'Ryzen ', 339, 35, '../upload/products/AMD Ryzen 9 5900X 12-core, 24-Thread Unlocked Desktop Processor/616VM20+AzL._AC_UY218_.jpg', '', 'CPU'),
(10039, 'AMD Ryzen 5 5600X', 'Ryzen', 159, 50, '../upload/products/AMD Ryzen 5 5600X 6-core, 12-Thread Unlocked Desktop Processor with Wraith Stealth Cooler/61vGQNUEsGL._AC_UY218_.jpg', '', 'CPU'),
(10040, 'Intel® Core™ i5-11400F', 'INTEL', 129, 69, '../upload/products/Intel® Core™ i5-11400F Desktop Processor 6 Cores up to 4.4 GHz LGA1200 (Intel® 500 Series & Select 400 Series Chipset) 65W/71LIKeM7GGL._AC_UY218_.jpg', '', 'CPU'),
(10041, 'Intel Core i9-13900K', 'INTEL', 599, 99, '../upload/products/Intel Core i9-13900K Desktop Processor 24 cores (8 P-cores + 16 E-cores) 36M Cache, up to 5.8 GHz/71LIKeM7GGL._AC_UY218_.jpg', '', 'CPU'),
(10042, 'Kingston FURY Beast RGB 128GB', 'Kingston', 343, 100, '../upload/products/Kingston FURY Beast RGB 128GB (4x32GB)/61S6j08k-+L._AC_UY218_.jpg', '', 'RAM'),
(10043, 'NZXT H5 Elite Compact ATX Mid-Tower', 'NZXT ', 139, 119, '../upload/products/NZXT H5 Elite Compact ATX Mid-Tower PC Gaming Case/51s-mwoepKL._AC_UY218_.jpg', '', 'Case'),
(10044, 'GIM ATX Mid-Tower Case White Gaming PC Case', 'GIM ', 135, 95, '../upload/products/GIM ATX Mid-Tower Case White Gaming PC Case/71trPZXJJeL._AC_UY218_.jpg', '', 'Case'),
(10045, 'NZXT H5 Flow Compact ATX Mid-Tower PC Gaming Case', 'NZXT ', 96, 200, '../upload/products/NZXT H5 Flow Compact ATX Mid-Tower PC Gaming Case/71vxQVgSgjL._AC_SX569_.jpg', '', 'Case'),
(10046, 'Gigabyte GeForce RTX 4070 Ti Gaming OC 12G Graphics Card', 'Gigabyte', 849, 99, '../upload/products/Gigabyte GeForce RTX 4070 Ti Gaming OC 12G Graphics Card, 3X WINDFORCE Fans/71T1fQI83iL._AC_UY218_.jpg', '', 'VGA'),
(10047, 'MSI Gaming GeForce RTX 4080 24GB GDRR6X 384-Bit', 'MSI', 1399, 100, '../upload/products/MSI Gaming GeForce RTX 4080 24GB GDRR6X 384-Bit/71kQNdsk4jL._AC_UY218_.jpg', '', 'VGA'),
(10048, 'MSI Gaming GeForce RTX 4070 Ti 12GB GDRR6X 192-Bit', 'MSI', 879, 150, '../upload/products/MSI Gaming GeForce RTX 4070 Ti 12GB GDRR6X 192-Bit/71-djDvKjfL._AC_UY218_.jpg', '', 'VGA'),
(10049, 'MSI MAG B550 TOMAHAWK Gaming Motherboard', 'MSI', 159, 10, '../upload/products/MSI MAG B550 TOMAHAWK Gaming Motherboard/910jyKG9QlL._AC_UY218_.jpg', '', 'Mainboard'),
(10050, 'MSI B550M PRO-VDH WiFi ProSeries Motherboard', 'MSI', 119, 10, '../upload/products/MSI B550M PRO-VDH WiFi ProSeries Motherboard/91beeVTo4pL._AC_UY218_.jpg', '', 'Keyboard'),
(10051, 'WD_BLACK 1TB SN850X NVMe Internal Gaming SSD Solid State Drive', 'WD', 119, 50, '../upload/products/WD_BLACK 1TB SN850X NVMe Internal Gaming SSD Solid State Drive - Gen4 PCIe/61u-w0nMDTL._AC_UY218_.jpg', '', 'Storage'),
(10052, 'Kingston 240GB A400 SATA 3 25 internal SSD', 'Kingston', 17, 10, '../upload/products/Kingston 240GB A400 SATA 3 25 internal SSD/91RL+MhTWbL._AC_UY218_.jpg', '', 'Storage'),
(10053, 'ROG Maximus Z690 Formula(WiFi 6E)LGA1700(Intel 12th Gen)ATX Water cooling gaming motherboard(PCIe 5.0,DDR5,20+1 power stages,LiveDash 2”OLED,5xM.2,2xThunderbolt 4,PCIe 5.0 Hyper M.2 Card bundled)', 'ASUS', 700, 94, '../upload/products/ROG M/81fUCaEA7gL._AC_SX679_.jpg', 'Brand	ASUS\r\nCPU Socket	LGA 1700\r\nCompatible Devices	Personal Computer\r\nRAM Memory Technology	DDR5\r\nCompatible Processors	Intel Core\r\nChipset Type	Intel\r\nMemory Speed	3200 MHz\r\nPlatform	Windows\r\nGraphics Card Interface	PCI Express\r\nMemory Slots Available	4', 'Mainboard'),
(10054, 'ROG Crosshair X670E Extreme(WiFi 6E) Socket AM5(LGA 1718) Ryzen 7000 EATX Gaming Motherboard(20+2 Power Stages, PCIe® 5.0, DDR5, 5xM.2 Slots,USB 3.2 Gen 2x2 Front-Panel,USB4™ Ports,Anime Matrix)', 'ASUS', 1000, 100, '../upload/products/ROG Crossh/61vRh8Ef+dL._AC_SX679_.jpg', '\r\nBrand	ASUS\r\nCPU Socket	LGA 1718\r\nCompatible Devices	Personal Computer\r\nRAM Memory Technology	DDR5\r\nChipset Type	AMD X670\r\nMemory Speed	6400 MHz\r\nPlatform	No Operating System\r\nSeries	ROG CROSSHAIR X670E EXTREME\r\nRAM Memory Maximum Size	128 GB\r\nGraphics Card Interface', 'Mainboard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `img_source` (`img_source`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10055;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
