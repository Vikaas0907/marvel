-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 01:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merchandise`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('anjali', 'anjali'),
('vikas', 'vikas');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_pic` varchar(200) NOT NULL,
  `p_price` decimal(9,2) NOT NULL,
  `p_quant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(25) NOT NULL,
  `cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'accessories', 'images/cat_accessories.jpg'),
(2, 'home_decor', 'images/cat_homedec.jpg'),
(3, 'wall_decor', 'images/cat_walldec.jpg'),
(4, 'carpets', 'images/cat_carpet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `user_name`, `password`, `f_name`, `l_name`, `address`, `email`, `contact`) VALUES
(10, 'mani', 'ak v ', 'mani', 'mani', 'aldf ajbaj', 'mani', 'ani'),
(34, 'zoro', 'ioabvdbvb', 'zoro', 'roronoa', 'jdfl vsjh vlsj', 'znakdsvb', '657467'),
(3385, 'luffy', 'luffy', 'luffy', 'luffy', 'luffy', 'luffy', 'luffy');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `shipping_add` varchar(255) NOT NULL,
  `status_id` int(11) NOT NULL,
  `total_price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_det_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `tot_price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `cat_id` int(3) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_descrip` text NOT NULL,
  `prod_qty` int(10) NOT NULL,
  `prod_price` decimal(7,2) NOT NULL,
  `pic1` text NOT NULL,
  `pic2` text NOT NULL,
  `pic3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `cat_id`, `prod_name`, `prod_descrip`, `prod_qty`, `prod_price`, `pic1`, `pic2`, `pic3`) VALUES
(1, 4, 'Carpet Avengers Heroes', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Polyester</td> </tr>\r\n        <tr> <td >Color </td>	<td> Multi</td> </tr>\r\n        <tr> <td >Item Weight </td>	<td> 500 grams </td> </tr>\r\n		<tr> <td >Size </td>	<td> 2 x 4.5 ft</td> </tr>\r\n		<tr> <td >Item Shape</td>	<td> Rectangular</td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product Description</strong></p>\r\n\r\n		<p><li>Durable & Kid friendly<br>\r\n		These carpets are made using Azo-free dyes and chemicals. And are very safe for the child to play on.<br>\r\n		These carpets are coated with anti-skid latex, making it steady and stable on the floor.</li>\r\n\r\n		<li>Standard Size<br>\r\n		These carpets come in a single size of 90cm x 150cm. This is ideal to be used along the bedside or to be used as a playmat.<br>\r\n		These carpets can be bought along with the coordinated design of doormat and runner.</li>\r\n\r\n		<li>Wow, this is Washable!!<br>\r\n		These Carpets are washable and easy to care.<br>\r\n		Wash dark colors separately Wash using cold water Do not wring Drip dry do not Iron.</li>\r\n		</p>', 15, '1199.00', 'Carpet Avengers Heroes1.jpg', 'Carpet Avengers Heroes2.jpg', 'Carpet Avengers Heroes3.jpg'),
(2, 4, 'Carpet Marvel Logo', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Polyester Blend</td> </tr>\r\n        <tr> <td >Color </td>	<td> Black </td> </tr>\r\n        <tr> <td >Pattern </td>	<td> Classic </td> </tr>\r\n		<tr> <td >Size </td>	<td> 2 ft x 4.5 ft</td> </tr>\r\n		<tr> <td >Item Shape</td>	<td> Rectangular</td> </tr>\r\n		</table>\r\n		</p>\r\n\r\n		<p><strong>Product Description</strong></p>\r\n\r\n		<p><li>Durable & Kid friendly<br>\r\n		These carpets are made using Azo-free dyes and chemicals. And are very safe for the child to play on.<br>\r\n		These carpets are coated with anti-skid latex, making it steady and stable on the floor.</li>\r\n\r\n		<li>Standard Size<br>\r\n		These carpets come in a single size of 90cm x 150cm. This is ideal to be used along the bedside or to be used as a playmat.<br>\r\n		These carpets can be bought along with the coordinated design of doormat and runner.</li>\r\n\r\n		<li>Wow, this is Washable!!<br>\r\n		These Carpets are washable and easy to care.<br>\r\n		Wash dark colors separately Wash using cold water Do not wring Drip dry do not Iron.</li>\r\n		</p>', 10, '1199.00', 'Carpet Marvel Logo1.jpg', 'Carpet Marvel Logo2.jpg', 'Carpet Marvel Logo3.jpg'),
(3, 4, 'Avengers Carpet', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Polyester Blend</td> </tr>\r\n        <tr> <td >Color </td>	<td> Multi </td> </tr>\r\n        <tr> <td >Pattern </td>	<td> Cartoon </td> </tr>\r\n		<tr> <td >Size </td>	<td> 2ft x 5ft (90x150 cm)</td> </tr>\r\n		<tr> <td >Item Shape</td>	<td> Rectangular</td> </tr>\r\n		<tr> <td> Weight</td>	<td> 800 grams </td> </tr>\r\n		</table>\r\n		</p>\r\n		<p><strong>Product Description</strong></p>\r\n\r\n		<p><li>Durable & Kid friendly<br>\r\n		These carpets are made using Azo-free dyes and chemicals. And are very safe for the child to play on.<br>\r\n		These carpets are coated with anti-skid latex, making it steady and stable on the floor.</li>\r\n\r\n		<li>Standard Size<br>\r\n		These carpets come in a single size of 90cm x 150cm. This is ideal to be used along the bedside or to be used as a playmat.<br>\r\n		These carpets can be bought along with the coordinated design of doormat and runner.</li>\r\n\r\n		<li>Wow, this is Washable!!<br>\r\n		These Carpets are washable and easy to care.<br>\r\n		Wash dark colors separately Wash using cold water Do not wring Drip dry do not Iron.</li>\r\n		</p>', 14, '1599.00', 'Avengers Carpet1.jpg', 'Avengers Carpet2.jpg', 'Avengers Carpet3.jpg'),
(4, 3, 'Wall Sticker Cap America Shield', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Vinyl </td> </tr>\r\n        <tr> <td >Color </td>	<td> Black </td> </tr>\r\n		<tr> <td >Item Dimensions </td>	<td> 1 x 510 x 700 Millimeters</td> </tr>\r\n		<tr> <td >Item Shape</td>	<td> Rectangular</td> </tr>\r\n		<tr> <td> Installation Type </td>	<td> Peel and Stick </td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product description</strong><p>\r\n		<p>\r\n		<li>Omega Nitcon 100 % New brand and good quality . This vinyl will stick of any smooth surface such as vehicles, windows, laptop , wall. </li>\r\n		<li>Sticker can be applied anwhere on the Body of the Car, Bike, Laptop, Wall. Easy cleaning and maintenance. </li>\r\n		<li>Do not textile, uneven surface and newly painted wall</li>\r\n		<li>High-Quality die-cut Vinyl,Durability,Waterproof</li>\r\n		<li>Comes with easy to use instructions. Easily removed, and will not damage walls</li>\r\n		<li>Remove in seconds without damaging your paint.</li>\r\n		</p>', 18, '289.00', 'Wall Sticker Cap America Shield.jpg', 'Wall Sticker Cap America Shield.jpg', 'Wall Sticker Cap America Shield.jpg'),
(5, 3, 'Wall Sticker IronMan', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Vinyl </td> </tr>\r\n        <tr> <td >Color </td>	<td> MultiColor</td> </tr>\r\n        <tr> <td >Item Weight </td>	<td> 110 grams </td> </tr>\r\n		<tr> <td >Item Size </td>	<td> 23 cm x 4.2 cm x 4.2 cm </td> </tr>\r\n		<tr> <td >Package Contents </td>	<td> WallStickers</td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product description</strong><p>\r\n		<p>\r\n		<li>Omega Nitcon 100 % New brand and good quality . This vinyl will stick of any smooth surface such as vehicles, windows, laptop , wall. </li>\r\n		<li>Sticker can be applied anwhere on the Body of the Car, Bike, Laptop, Wall. Easy cleaning and maintenance. </li>\r\n		<li>High-Quality die-cut Vinyl,Durability,Waterproof</li>\r\n		<li>Comes with easy to use instructions. Easily removed, and will not damage walls</li>\r\n		</p>\r\n		\r\n		<p><strong>Application Instructions: </strong></p>\r\n		</p>\r\n			<li>Make sure the wall surface is smooth, free of moisture, dust and dirt.</li>\r\n			<li>Gently and carefully peel out the pre-cut pieces.</li>\r\n			<li>Follow the numbers mentioned on the pre-cut pieces and join them to form the pattern.</li>\r\n			<li>Press firmly along the border of the wall stickers to ensure no loose edges.</li>\r\n			<li>If you notice any air bubbles, you can use a pin or needle to release the air and squeeze out the air.</li>\r\n			<li>Voila! You did it.</li>\r\n		</p>', 20, '349.00', 'Wall Sticker IronMan1.jpg', 'Wall Sticker IronMan2.jpg', 'Wall Sticker IronMan3.jpg'),
(6, 3, 'Wall Sticker Hulk', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Vinyl</td> </tr>\r\n        <tr> <td >Color </td>	<td> Multi</td> </tr>\r\n        <tr> <td >Wall Covering Area </td>	<td> 48 x 23 Inch </td> </tr>\r\n		<tr> <td >Item Dimensions</td>	<td> 73.7 x 55.9 x 1 cm </td> </tr>\r\n		<tr> <td >Item Shape</td>	<td> Rectangular</td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product description</strong><p>\r\n		<p>\r\n			<li>Self-adhesive vinyl stickers.</li> \r\n			<li>Matte Finish Thin PVC/Vinyl Film </li>\r\n			<li>A great alternative to wallpaper, paint or stencils and they give you choice.</li>\r\n			<li>Choose your space, plan the design you\'d like to make, and then apply.</li> \r\n			<li>They are extremely durable and are available in various designs.</li>\r\n			<li>Easy to apply them on your walls or any flat, smooth surface.</li>\r\n		</p>', 30, '299.00', 'Wall Sticker Hulk1.jpg', 'Wall Sticker Hulk2.jpg', 'Wall Sticker Hulk3.jpg'),
(7, 3, 'Avengers Endgame Framed Poster', '<p><strong>About this item</strong></p>\r\n		<p>Synthetic Wood Avengers Endgame Stars Framed Poster</p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Wood </td> </tr>\r\n        <tr> <td >Color </td>	<td> Black</td> </tr>\r\n        <tr> <td >Frame Type </td>	<td> Framed </td> </tr>\r\n		<tr> <td >Item Size </td>	<td> 13.5 X 19.5 Inches</td> </tr>\r\n		<tr> <td >Item Shape </td>	<td> Rectangular </td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong> Product Description </strong> </p>\r\n		<p>\r\n		 <li> Certified Quality Synthetic Wood Frame.</li>\r\n		 <li> Laminated High Quality Digital Print on 200 GSM Super White Paper.</li>\r\n		 <li> No Glass. 250 Micron Lamination gives the look of the glass.</li>\r\n		 <li> GreenPly MDF board for durable backing. </li>\r\n		 <li> Metal Hanging clip at the back.</li>\r\n		</p>', 30, '500.00', 'Avengers Endgame Framed Poster1.jpg', 'Avengers Endgame Framed Poster2.jpg', 'Avengers Endgame Framed Poster3.jpg'),
(8, 2, 'Groot Multi Purpose Flower Pot / Pen Stand', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> PVC</td> </tr>\r\n        <tr> <td >Color </td>	<td> Brown </td> </tr>\r\n        <tr> <td >Finish Type </td>	<td> Painted </td> </tr>\r\n		<tr> <td >Mounting Type </td>	<td> TableTop</td> </tr>\r\n		<tr> <td >Weight </td>	<td> 400 g </td> </tr>\r\n		<tr> <td >Item Shape </td>	<td> Novelty </td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product description</strong><p>\r\n		<p>\r\n		<li> Multi purpose: can be used as flower pot and pen holder and showpiece.</li>\r\n		<li> Suitable for table tops or gardens</li>\r\n		<li> High detailed design</li>\r\n		<li> A perfect item for your home decoration</li>\r\n		</p>', 27, '399.00', 'Groot Ceramic MutliPurpose Flower Pot-pen Stand1.jpg', 'Groot Ceramic MutliPurpose Flower Pot-pen Stand2.jpg', 'Groot Ceramic MutliPurpose Flower Pot-pen Stand3.jpg'),
(9, 2, 'Illusion color changing LED night light', '<p><strong>About this item</strong></p>\r\n		<p> Marvel 3D Illusion LED Night Light, Iron Cool Spiderman, 7 Colors Changing, Smart Touch Button USB Powered</p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Acrylic</td> </tr>\r\n        <tr> <td >Color </td>	<td> Multi </td> </tr>\r\n        <tr> <td >Finish Type </td>	<td> Polished </td> </tr>\r\n		<tr> <td >Weight </td>	<td> 250 g </td> </tr>\r\n		<tr> <td >Light Source Type </td>	<td> LED </td> </tr>\r\n		<tr> <td >Voltage </td>	<td> 5 Volts</td> </tr>\r\n		</table>\r\n		</p>\r\n\r\n		<p> <strong>Product Description: </strong> </p>\r\n		<p>\r\n		<li>Works on USB port power source like computer, Laptop, mobile chargers, power bank etc.</li>\r\n		<li>Lamp can also be used with 3 AA batteries (batteries not included).</li>\r\n		<li>Touch Control 7 Color Change (Red, Green, Blue, Yellow, Cyan, Purple, White) </li>\r\n		<li>Touch button: Press one time, one color light up, press it again, it turns off. Press it thirdly, another color light up. </li>\r\n		<li>Comes With automatically color changing mode. </li>\r\n		<li>Wear-resisting, no fade. </li>\r\n		<li>Energy saving. Power spend: 0.012kw.h/24 hours. LED life span: 10000hours </li>\r\n		<li>It can be put in a bedroom, child room, living room, bar, shop, cafe, restaurant, etc as decorative light. </li>\r\n		</p>\r\n\r\n\r\n		<p> <strong>Instructions: </strong> </p>\r\n		<p>\r\n		<li> Please tear off the protective film on the both side of acrylic. </li>\r\n		<li> Hold the edge of the acrylic,put it into the lamp base.</li>\r\n		<li> Use Touch Mode to turn on/off the lamp or change the colors.</li>\r\n		<li> With these 7 colour changing night lamp have a good night.</li>\r\n		</p>', 40, '1399.00', 'Illusion color changing LED night light1.jpg', 'Illusion color changing LED night light2.jpg', 'Illusion color changing LED night light3.jpg'),
(10, 1, 'Captain America BackPack', '<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Polyester with Coating</td> </tr>\r\n        <tr> <td >Capacity </td>	<td> 25 L</td> </tr>\r\n        <tr> <td >Item Dimenisons </td>	<td> 17.5 x 13 x 6.5 in</td> </tr>\r\n		<tr> <td >Item Type </td>	<td> Backpack</td> </tr>\r\n		</table>\r\n		</p>\r\n		<p> <strong>Product Desciption</strong></p>\r\n		<p> \r\n		<li>Made with High Quality Polyester with Polyurethane coating. </li>\r\n		<li>Adjustable padded shoulder straps, 2 zippered compartments, one flap pocket, a laptop slot (can fit a 15 inch laptop). </li>\r\n		<li>Made of extremely light, high quality water resistant fabric to ensure durability and maximum comfort. </li>\r\n		</p>', 38, '1299.00', 'Captain America Backpack1.jpg', 'Captain America Backpack2.jpg', 'Captain America Backpack3.jpg'),
(11, 1, 'Doodle Avengers A5 Diary Notebook', '		<p>Doodle Avengers Hard Bound A5 Diary Notebook with Metal Slider<p>\r\n		<p>\r\n		<p><strong>About this item</strong></p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Color </td>	<td> Red</td> </tr>\r\n        <tr> <td >Item Weight </td>	<td> 80 grams </td> </tr>\r\n		<tr> <td >Size </td>	<td> 5.5 x 8.5 inches</td> </tr>\r\n		<tr> <td >Ruling </td>	<td> Ruled</td> </tr>\r\n		<tr> <td> No.of Pages</td> <td> 192 </td> </tr>\r\n		</table>\r\n		</p>\r\n		<p><strong>Product Decription </strong> </p>\r\n		<p>\r\n		<li> High quality 80 GSM Natural shade writing paper which causes less strain to the eyes.</li>\r\n		<li> A5 sized stylish soft to touch Avengers Montage Notebook bound in beautiful PU leather and all-over embossing gives an incredible tactile sensation. \r\n		     An attractive theme-based metal slider adds to the charm. </li>\r\n		<li> Each page with a themed artwork carried on each page for the Avenger fan.</li>\r\n		<li> Add-on: Collectable trivia card, theme-based activities as separators through the book.</li>\r\n		<li>Perfect gift for Avenger fans. Great for daily journaling.</li>\r\n		</p>', 29, '350.00', 'Doodle Avengers A5 Diary Notebook1.jpg', 'Doodle Avengers A5 Diary Notebook2.jpg', 'Doodle Avengers A5 Diary Notebook3.jpg'),
(12, 1, 'Avengers Infinity Stones Bracelet', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Leather</td> </tr>\r\n        <tr> <td >Color </td>	<td> Brown, Gold</td> </tr>\r\n        <tr> <td >Chain Type </td>	<td> Rope Chain</td> </tr>\r\n		<tr> <td >Clasp Type </td>	<td> Lobster Claw</td> </tr>\r\n		<tr> <td >Item Size</td>	<td> Length: 23 cm </td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product Decription </strong> </p>\r\n		<p>\r\n		<li> Stylish Wrap Leather Bracelet with your Favorite Avengers Thanos Symbols as Charms.</li>\r\n		<li> Infinity Stones Magnett Bracelets,Leather rope weaving Magnet buckle bangle. \r\n		Six Infinity Stones:Time, Power, Soul, Space, Mind, and Reality </li>\r\n		<li> The product comes in a beautiful Elegant Ready-to-Gift Box.</li>\r\n		<li> Gift for Girls / Boys! - Ideal Valentine, Birthday, Anniversary gift for someone you LOVE.</li>\r\n		</p>\r\n		', 24, '370.00', 'Avengers Infinity Stones Bracelet1.jpg', 'Avengers Infinity Stones Bracelet2.jpg', 'Avengers Infinity Stones Bracelet3.jpg'),
(13, 1, 'Doctor Strange Chain-pendant', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Metal </td> </tr>\r\n		<tr> <td> Metal </td> <td> Imported Steel </td> </tr>\r\n        <tr> <td >Clasp </td>	<td> Lobster Claw Clasp  </td> </tr>\r\n        <tr> <td >Item Type </td>	<td> Rotating Pendant with chain</td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product Decription </strong> </p>\r\n		<p>\r\n		<li> Avengers Rotating Doctor Strange Pendant.</li>\r\n		<li> Nickel free and Lead free as per International Standards.</li>\r\n		<li> Keep away from water, perfume and other chemicals as they may react with the metal or plating.</li>\r\n		<li> Clean it with Dry and soft cloth.</li>\r\n		</p>', 9, '289.00', 'Doctor Strange Chain-pendant1.jpg', 'Doctor Strange Chain-pendant2.jpg', 'Doctor Strange Chain-pendant3.jpg'),
(14, 1, 'Avengers Aluminium Bottle', '<p><strong>About this item</strong></p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Aluminium</td> </tr>\r\n        <tr> <td >Color </td>	<td> White </td> </tr>\r\n        <tr> <td >Item Weight </td>	<td> 150 g </td> </tr>\r\n		<tr> <td >Capacity </td>	<td> 600 ml </td> </tr>\r\n		<tr> <td >Components</td>	<td> Printed Sipper Bottle</td> </tr>\r\n		</table>\r\n		<p>\r\n		\r\n		<p><strong>Product Decription </strong> </p>\r\n		<p>\r\n		<li> Cool sporty printed Sipper Bottle for kids, sports, gym & outdoor activities. </li>\r\n		<li> The Imprinted design is printed on both side of the sipper bottle.</li>\r\n		<li> Can be used anytime anywhere when feeling thirsty & dehydrated.</li>\r\n		<li> High quality Korean ink used to give you the best quality effect. </li>\r\n		<li> It is light in weight thus making it very easy to carry around.</li>\r\n		<li> It comes with a special hook which can be used to attach the bottle to bags, hence keeping your hands free. </li>\r\n		<li> Perfect gifting product to every age group. Eco friendly, long lasting bottle & Spillage proof. </li>\r\n		</p>', 299, '38.00', 'Avengers Aluminium Bottle1.jpg', 'Avengers Aluminium Bottle2.jpg', 'Avengers Aluminium Bottle3.jpg'),
(15, 1, 'Captain America Coffee Mug', '<p><strong>About this item</strong></p>\r\n		\r\n		<p> Avenger Caption America Shiled Coffee Mug - 320ml </p>\r\n		<p>\r\n		<table style=\"display:block; border-spacing: 5px;\">\r\n        <tr> <td >Material </td>	<td> Ceramic </td> </tr>\r\n        <tr> <td >Color </td>	<td> MultiColor</td> </tr>\r\n        <tr> <td >Item Weight </td>	<td> 300 g </td> </tr>\r\n		<tr> <td >Capacity </td>	<td> 320 ml / 11 OZ</td> </tr>\r\n		<tr> <td >Item Dimensions</td>	<td> 12 x 12 x 12 cm</td> </tr>\r\n		</table>\r\n		</p>\r\n		\r\n		<p><strong>Product Decription </strong> </p>\r\n		<p>\r\n		<li> Premium Quality Gloss Finished Mug |High Quality Digital Printed | Thermocol Safe Packaging </li>\r\n		<li> Highly Durable and has a Capacity of 320 ML liquid.</li>\r\n		<li> The print will NEVER FADE no matter how many times it is washed.</li>\r\n		<li> Can also be later used aspen stand or a mug planter.</li>\r\n		<li> Perfect Gift for Kids, Birthday Gift for friends.</li>\r\n		</p>\r\n		\r\n		<p><strong>Mug-Care Instructions :-</strong> </p>\r\n		<p>\r\n		<li> Do not scrub</li>\r\n		<li> Dishwasher safe</li>\r\n		<li> Microwave Safe</li>\r\n		</p>', 20, '426.00', 'Captain America Coffee mug1.jpg', 'Captain America Coffee mug2.jpg', 'Captain America Coffee mug3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `stat_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`stat_id`, `status`) VALUES
(1, 'Placed'),
(2, 'Shipped'),
(3, 'Delivered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_det_id`),
  ADD KEY `order_od_fk` (`order_id`),
  ADD KEY `orderdet_prod_fk` (`prod_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`stat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3386;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `products` (`prod_id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`stat_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
