-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2016 at 09:17 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_zone`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `subject`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'iPhone 7 release date, news and rumors', 'Has the iPhone 7''s release date been hiding in plain sight? Is Apple making special headphones for it? Will it really be waterproof? Will it come in blue as well? And has the first proper chassis look been leaked?\r\n\r\nWant to know the iPhone 7 release date or all the incoming features? You''ve come to the right place. It''s going to be a big change this year, as the iPhone 6S is underwhelming because it doesn''t bring anything amazing aside from fancy new 3D Touch technology.', 1, 0, 0),
(2, 'samsung s7', 'Its an awesome phone and i want to buy it asap but i dont have the money for it', 1, 0, 0),
(3, 'Samsung Galaxy S7 and S7 Edge: Concepts with Reviews', 'I had trusted the Galaxy Note 7 would be a powerhouse of a handset, however watching the dispatch of the phablet yesterday made it clear that Samsung''s most recent handset is no more at the highest point of the tree. It''s a vital handset, however it''s no more number one.', 1, 0, 0),
(4, 'Design Story: HTC Ice View Case', 'Welcome back to Design Story, where we share how your favorite products are designed and created. Following on the release of the HTC 10, this time weâ€™re looking at an innovative accessory designed specifically for HTCâ€™s flagship phone: the HTC Ice View case.\r\nAs the HTC 10 took shape in our design labs, we took inspiration from our award-winning HTC Dot View Case to create the perfect accessory for the new flagship phoneâ€”Ice View, a stylish protective flip case with a solid fit. It accentuates the phoneâ€™s design and advances novel methods of interacting with everyday information.', 1, 0, 0),
(5, 'Bacon Breathes, Calling All Henchmen, and Open Sales on the Double', 'Itâ€™s been one hell of a week â€“ the last seven days passed in the blink of an eye. The entire OnePlus teamâ€™s been looking forward to sharing this weekâ€™s twists and turns with you. The year may still be young, but weâ€™re back to firing on all cylinders. We feel confident in saying weâ€™ve embarked on a very exciting new chapter in the never-ending story of OnePlus.', 1, 0, 0),
(6, 'Hello', 'Hello, Class is full of students', 1, 0, 0),
(8, 'eerwrwerwe', 'werwerwerwe', 1, 0, 0),
(9, 'eerwrwerwe', 'werwerwerwe', 1, 0, 0),
(10, 'asdasdasads', 'asdasdasdasdas', 1, 0, 0),
(11, 'asdasdasads', 'asdasdasdasdas', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(50) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `order_id`, `user_id`, `product_id`, `title`, `qty`, `price`, `subtotal`) VALUES
(7, 1054448454, 1, 22, 'OnePlus 2', 1, 650, 650),
(8, 1631759641, 11, 23, 'iPhone 5c', 2, 499, 998),
(9, 1631759641, 11, 22, 'OnePlus 2', 1, 650, 650),
(10, 1631759641, 11, 16, 'Samsung S6', 2, 999, 1998),
(11, 144213998, 11, 16, 'Samsung S6', 1, 999, 999);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `list_price` int(10) NOT NULL,
  `brand` int(11) NOT NULL,
  `categories` enum('other','mobiles','tablets','accesstories') NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `title`, `price`, `list_price`, `brand`, `categories`, `image`, `description`, `date_added`) VALUES
(1, 'LG G4', 799, 850, 0, 'mobiles', '57bfb7609ca7f.jpg', 'Awesome phone changed by admin', '2016-08-23 23:53:15'),
(15, 'Oneplus3', 699, 699, 0, 'mobiles', '57bd139397ea9.png', 'Itâ€™s about time for the OnePlus 3.A smartphone conceived and built by tech enthusiasts, hand-in-hand with users. A smartphone born from amazing technology, design, and innovation', '2016-08-24 03:25:07'),
(16, 'Samsung S6', 999, 1099, 0, 'mobiles', '57bd13d2f4114.jpg', 'The GS6 is ready to move when you are with super-fast charging; only 10 minutes of charging gives you up to 4 hours standard use', '2016-08-24 03:26:11'),
(19, 'Xiaomi Redmi Pro', 399, 450, 0, 'mobiles', '57bd20030c2db.jpg', 'Xiaomi Redmi Pro smartphone was launched in July 2016. The phone comes with a 5.50-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels at a PPI of 342 pixels per inch.', '2016-08-24 04:18:11'),
(20, 'Samsung S7', 1399, 1299, 0, 'mobiles', '57bd2196b0e95.jpg', 'The S7 is ready to move when you are with super-fast charging; only 10 minutes of charging gives you up to 4 hours standard use', '2016-08-24 04:24:54'),
(21, 'HTC One S9', 599, 699, 0, 'mobiles', '57bd22bb3e117.jpg', 'The HTC One S9 comes with a full host of connectivity options including nine LTE bands with Cat.4 speeds, Wi-Fi a/b/g/n/ac, Bluetooth v4.1 and GPS/GLONASS/Beidou support', '2016-08-24 04:29:47'),
(22, 'OnePlus 2', 650, 699, 0, 'mobiles', '57bd24042d354.jpg', 'OnePlus 2 is clearly more sophisticated. Still a big handset but looking better than its predecessor. It uses some of the best tech currently available and the latest Android OS, while the breakup with CyanoGen is another sign of the company''s emancipation', '2016-08-24 04:35:16'),
(23, 'iPhone 5c', 499, 550, 0, 'mobiles', '57bd281e91efe.jpg', 'The iPhone 5S (marketed with a stylized lowercase ''s'' as iPhone 5s) is a smartphone designed and marketed by Apple Inc', '2016-08-24 04:52:46'),
(24, 'Samsung Galaxy J1', 190, 200, 0, 'mobiles', '57bd2cc2387b5.jpg', 'Be heard loud and clear no matter where you are with the Samsung Galaxy J1. It features dual microphones that use noise cancellation technology so that your words are heard perfectly', '2016-08-24 05:12:34'),
(26, 'HTC Desire 830', 389, 450, 0, 'mobiles', '57bd2eae585b1.jpg', 'Introducing HTC Desire 830 dual sim, the smartphone that delivers top-tier imaging with Optical Image Stabilisation in the main camera â€ for noticeably sharper and clearer photos', '2016-08-24 05:20:46'),
(27, 'OnePlus One', 399, 450, 0, 'mobiles', '57bd2f3d1045d.jpg', 'OnePlus creates beautifully designed products with premium build quality & brings the best technology to users around the world', '2016-08-24 05:23:09'),
(32, 'Xiaomi Redmi 3', 250, 300, 0, 'mobiles', '57beeb35baf47.jpg', 'Xiaomi Redmi 3. The Xiaomi Redmi 3 is powered by 1.2GHz octa-core Qualcomm Snapdragon 616 processor and it comes with 2GB of RAM. The phone packs 16GB of internal storage that can be expanded up to 128GB via a microSD card', '2016-08-25 12:57:25'),
(33, 'HTC One S9', 400, 499, 0, 'mobiles', '57beebfba46b6.jpg', 'The HTC One S9 houses 16GB of inbuilt storage, which can be expanded via microSD card (up to 2TB). On the camera front, the handset sports a 13-megapixel autofocus rear camera with BSI sensor, OIS, f/2.0 aperture and LED flash, along with a front-facing 4-Ultrapixel fixed focus BSI sensor with 2um pixels, and f/2.0 aperture', '2016-08-25 13:00:43'),
(34, 'Samsung Galaxy Note5', 755, 800, 0, 'mobiles', '57beedf636d34.jpg', 'Awesome Phone', '2016-08-25 13:09:10'),
(35, 'iPhone 6', 949, 1000, 0, 'mobiles', '57beef4bd9656.png', 'IPhone  is a line of smartphones designed and marketed by Apple Inc. They run Apple''s iOS mobile operating system. The first generation iPhone was released on June 29, 2007', '2016-08-25 13:14:52'),
(36, 'iPhone 6', 949, 1000, 0, 'mobiles', '57bef22d161b0.png', 'IPhone  is a line of smartphones designed and marketed by Apple Inc. They run Apple''s iOS mobile operating system. The first generation iPhone was released on June 29, 2007', '2016-08-25 13:27:09'),
(38, 'LG G4', 450, 499, 0, 'mobiles', '57bef2fc1f234.jpg', 'From the 5.5 inch LG G4 screen size and bright, bold LG G4 Quad HD display, to the Android Lollipop OS, the LG G4''s specs are turning heads', '2016-08-25 13:30:36'),
(39, 'Xiaomi Mi 4c', 200, 299, 0, 'mobiles', '57bef4278b00e.jpg', 'Awesome Phone', '2016-08-25 13:35:35'),
(40, 'Samsung S6', 1299, 1399, 0, 'mobiles', '57bef575374fe.jpg', 'Awesome Phone', '2016-08-25 13:41:09'),
(41, 'IPHONE 5s', 389, 400, 0, 'mobiles', '57bef5d43f72d.jpg', 'Awesome Phone', '2016-08-25 13:42:44'),
(42, 'LG G3', 383, 400, 0, 'mobiles', '57bef7268faed.jpg', 'Awesome Phone', '2016-08-25 13:48:22'),
(43, 'Xiaomi Mi 4s', 299, 350, 0, 'mobiles', '57bef7b9b1217.jpg', 'Awesome Phone', '2016-08-25 13:50:49'),
(44, 'HTC Desire 626', 250, 299, 0, 'mobiles', '57bef94e6702c.png', 'HTC Desire 626 Dual SIM smartphone was launched in February 2016.The HTC Desire 626 Dual SIM is powered by 1.7GHz octa-core MediaTek MT6752 processor', '2016-08-25 13:57:34'),
(45, 'LG Ray', 599, 680, 0, 'mobiles', '57bef9f3041a9.jpg', 'LG Ray smartphone with 5.50-inch 720x1280 display powered by 1.4GHz processor alongside 1GB RAM and 13-megapixel rear came', '2016-08-25 14:00:19'),
(47, 'IPHONE 6S', 1399, 1299, 0, 'mobiles', '57bfe62813be8.jpg', 'The moment you use iPhone 6s, you know youâ€™ve never felt anything like it. With a single press, 3D Touch lets you do more than ever before. Live Photos bring your memories to life in a powerfully vivid way', '2016-08-26 06:48:08'),
(48, 'Samsung S7 Edge', 1399, 1400, 0, 'mobiles', '57bfe6c1d607f.jpg', 'It''s not just a new phone. It brings a new way of thinking about what a phone can do. You defined the possibilities and we redefined the phone. The Galaxy S7 and S7 edge. Rethink what a phone can do', '2016-08-26 06:50:41'),
(49, 'HTC', 1099, 1299, 0, 'mobiles', '57bfe76ddd622.jpg', 'HTC One M9+ Prime Camera Edition smartphone was launched in May 2016. The phone comes with a 5.20-inch touchscreen display with a resolution of 1080 pixels by 1920 pixels', '2016-08-26 06:53:33'),
(54, 'LG g4', 999, 1099, 0, 'mobiles', '57bfebb3e9eee.jpg', 'The G4â€™s state-of-the-art, infrared-sensitive color spectrum sensor analyzes and measures all of the visible light within a scene before a shot is snapped, ensuring that an imageâ€™s colors appear natural and vivid even in dim conditions', '2016-08-26 07:11:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilege` enum('user','admin') NOT NULL,
  `confirm_password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `privilege`, `confirm_password`) VALUES
(1, 'Amit', 'Kumar', 'amit.k03377@gmail.com', '$2y$10$JOLVbwAluZbUKNZjmukKmeqZr5raI5a85RqVC3bmcsKlLKMVd8fxm', 'admin', '$2y$10$l0Dgwe1J2EkoWuoYN0gsMuXqzz8TcLezL78ijbQTtnruyZc8s7N3O'),
(2, 'Krishna', 'Nautiyal', 'krishna.nautiyal@gmail.com', '$2y$10$dunkaeLtiLO/JEXtzp7zjOFn95HybJjSHcoFRS4DXHhhLq.0.8JFS', 'user', '$2y$10$zIBgjeLjMb2TwFH8rWRoTuxS5vKZWwhKY.r22PH.MMLYoXqxAjUBu'),
(3, 'Shivneel', 'Kumar', 'shivneelk32@yahoo.co.nz', '$2y$10$QeyJfHVJn/beZH23hyXFeOrS8UPq/idtC4Mw6QoU/39wvcjhvGviK', 'user', '$2y$10$gg8XY8oVqKtZ9d8nX/lpyOiWbl5OUON6v3I91bxib05u3rgGp0oym'),
(4, 'Alexander', 'Kremer', 'alexander.k@gmail.com', '$2y$10$Cvep.J80DoyFnenrG2DhX.tPf2Q6m6GgYdkNAANd9D5z2PDFGskiy', 'user', '$2y$10$bfFAmfXCAo5Nu5GQG.sE4.KJ2hBbubDxSaTxwF8gvfmXZmbL9VaiG'),
(9, 'omphalus ', 'kua', 'haluskua.one@gmail.com', '$2y$10$Zz08Jy1xyGD3dU0DOUN.heGOpu5poWZ5SXyUaslHjveEMsZxudxqu', 'user', '$2y$10$H.uNqgOyRY0ZA/be67N.7eCbMa/xidsNZufcJku19ubmc.fbKenA2'),
(10, 'subrato', 'roy', 'subrato.roy@gmail.com', '$2y$10$ExGKyuIH7/Sr6qHg8ZPRdetGeNmIwJmPIbYO1nFAYwf55Cj2ajoKi', 'user', '$2y$10$mSDVul0dPMRCr8OeQ2HXG.e66q7f.95UhC11kGLn3FNpxMYh3cC2y'),
(11, 'Adam', 'Halsall', 'adam.halsall@gmail.com', '$2y$10$A.8qgTgH3Jrn40wS840f8uDDcaRNvoMG8cHa19.iBcdj1W2TU05IK', 'user', '$2y$10$QbNeIL3U93BkYmm0XnnSEeSpl1E.mthsNoUvIYZ0so1CbXXTgRj2m'),
(12, 'Renaud', 'gaudin', 'renaud.gaudin@gmail.com', '$2y$10$XWvp1Hsbnkmy7wtC9QgU1OJ09jTzlyj5DORJ5P/QdnjVxfnpl3OE2', 'user', '$2y$10$1tSssXUsDy93qBNnZ2ZIzullspQR5w6CGhlcqYnC7dfj8BGAvB7jy'),
(13, 'andrew', 'wood', 'andrew.wood@gmail.com', '$2y$10$/f9F7zH9Twb8BnANbKOiz.GzMtfWPUmvLDiAXRaLjpJEiSXzaj27K', 'user', '$2y$10$ecwZ6z4mBV0JaPtxFDE1xeHdFCbAKFzRIkBiCaXRE2ZiMcw.2u0ni'),
(16, 'Mitin', 'Kumar', 'mitin.kumar@gmail.com', '$2y$10$jgCVqVV7ziVQOs7rUTNtq.WWX6tD6t45MENzNci3JfEh83zVxUI3q', 'user', ''),
(17, 'Gytso', 'Butia', 'gytso.bhutia@gmail.com', '$2y$10$Yig.tMhqoDXON6RW5xBcw.Xu8VuIgPZ.IWD02RvZhabEgHcn5eaNG', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `mobiles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
