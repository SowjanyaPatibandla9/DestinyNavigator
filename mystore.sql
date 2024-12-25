-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 30, 2024 at 06:12 PM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'kumari', 'kumari@gmail.com', '$2y$10$lqjOgrMUhOXQdfml36euYeKaoQadq4uzI5IvXUB7mzgHZKwVj1lyC'),
(2, 'bhavani', 'ramya@gmail.com', '$2y$10$fwDBSoB5/ojMvY0gRnf/a.9DbuUvlyRKhXdjUmBIqGdcLaA.2r7Ra'),
(3, 'kavyay', 'kavya@gmail.com', '$2y$10$2EoCP6XH73P.bgPTythXyuPkcXigFKpDFuUf7gHIZ1J6HDwCoB4n.'),
(4, 'bhargavi', 'bhargavi@gmail.com', '$2y$10$BlYDXWXJomjK/jWm4GWjYeUiZ/1TUrSjcMl5I.5vIHdcDCfgi1ot.');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(10) NOT NULL,
  `brand_title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'document form'),
(2, 'BOOK'),
(3, 'gift form');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Biography'),
(2, 'magazine'),
(3, 'compitative'),
(4, 'novels'),
(5, 'story'),
(6, 'technical'),
(7, 'text books'),
(8, 'job'),
(9, 'journels'),
(11, 'other books');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`fname`, `lname`, `email`, `phone`, `message`) VALUES
('chandrika', 'jalluri', 'chandrika@gmail.com', 1234123412, 'not recieved the product.'),
('chandrika', 'jalluri', 'chandrika@gmail.com', 1234123412, 'not recieved the product.'),
('joseph', 'y', 'joseph@gmail.com', 1234561234, 'product not delivered');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(15, 2, 369097562, 72, 1, 'pending'),
(16, 2, 1935769714, 78, 1, 'pending'),
(17, 5, 1221736053, 51, 1, 'pending'),
(18, 2, 489513039, 31, 1, 'pending'),
(19, 2, 98602233, 26, 1, 'pending'),
(20, 2, 330408356, 69, 1, 'pending'),
(21, 2, 220064053, 65, 1, 'pending'),
(22, 2, 156668952, 42, 1, 'pending'),
(23, 2, 706421598, 33, 1, 'pending'),
(24, 2, 240111046, 55, 1, 'pending'),
(25, 2, 120351301, 34, 1, 'pending'),
(26, 2, 1393832549, 27, 1, 'pending'),
(27, 2, 1477421304, 50, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) DEFAULT NULL,
  `product_description` varchar(255) DEFAULT NULL,
  `product_keywords` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `product_image1` varchar(255) DEFAULT NULL,
  `product_image2` varchar(255) DEFAULT NULL,
  `product_image3` varchar(255) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `product_status`) VALUES
(23, 'The Story of my Experiments with Truth', 'This is an autobiography of Gandhi,who is known as father of the nation of India.', 'biography,gandhi', 1, 2, '1.webp', '11.jpeg', '12.jpeg', '530', '2024-04-03 14:56:43', 'true'),
(26, 'stephen hawking biography ', 'stephen hawking biography by kristine larsen.', 'biography,stephen', 1, 2, '2.webp', '21.jpeg', '22.jpeg', '470', '2024-04-03 15:59:38', 'true'),
(27, 'Long walk to Freedom', 'Nelson Mandela auto-biography by himself.', 'nelson mandela,biography', 1, 2, '71.jpeg', '72.jpeg', '7.jpeg', '440', '2024-04-03 16:03:44', 'true'),
(28, 'Conversations With Myself Book by Nelson Mandela', 'This book offers insight to the stoicism and humanitarianism embodied by Nelson Mandela. ', 'nelson mandela,biography', 1, 2, '3.webp', '31.jpeg', '32.jpeg', '390', '2024-04-03 16:09:51', 'true'),
(29, 'Dhirubai Ambani biography', 'The book talk about the real struggle and mindset of dhirubhai amban', 'ambani,biography', 1, 2, '4.webp', '41.jpeg', '42.jpeg', '230', '2024-04-03 16:13:23', 'true'),
(30, 'CAT PREPARATION BOOK', 'This book provides the complete preparation tips to the CAT aspirants.', 'CAT,compitative', 3, 2, 'c1.webp', 'c1.webp', 'c11.jpeg', '540', '2024-04-03 16:23:19', 'true'),
(31, 'CAT PREPARATION BOOK', 'This book provides the complete preparation tips to the CAT aspirants.', 'cat,compitative', 3, 2, 'c2.webp', 'c2.webp', 'c21.jpeg', '710', '2024-04-03 16:25:56', 'true'),
(32, 'GATE Aptitude book', 'This book provides the complete preparation tips to the GATE aspirants in aptitude section', 'gate,compitative', 3, 2, 'g1.webp', 'g1.webp', 'g22.jpeg', '260', '2024-04-03 16:31:01', 'true'),
(33, 'GATE Aptitude book', 'This book provides the complete preparation tips to the GATE aspirants in aptitude section', 'gate,compitative', 3, 2, 'g3.jpeg', 'g33.webp', 'g3.jpeg', '230', '2024-04-03 16:36:15', 'true'),
(34, 'TOEFL Book', 'This book provides the complete preparation tips to the TOEFL aspirants.', 'toefl,compitative', 3, 2, 't1.webp', 't1.webp', 't11.jpeg', '170', '2024-04-03 16:39:52', 'true'),
(35, 'TOEFL Book', 'This book provides the complete preparation tips to the TOEFL aspirants.', 'toefl,compitative', 3, 2, 't2.webp', 't22.jpeg', 't2.webp', '530', '2024-04-03 16:41:26', 'true'),
(36, 'IBPS CLERK GUIDE', 'This IBPS Clerk Books will help you prepare for both the preliminary and main exams', 'ibps,guide,compitative', 8, 2, 'j1.webp', 'j11.png', 'j12.jpeg', '370', '2024-04-04 15:07:29', 'true'),
(37, 'IBPS clerk guide', 'This IBPS Clerk Books will help you prepare for both the preliminary and main exams', 'ibps,clerk,job', 8, 2, '2b.webp', '2b.webp', '2b.webp', '450', '2024-04-04 15:09:49', 'true'),
(38, 'INDIAN HISTORY', ' Comprehensive book which covers ancient, medieval, modern history and national movement', 'india,history,upsc', 8, 2, 'jg1 (copy).webp', 'jg1 (copy).webp', 'jg11.jpeg', '630', '2024-04-04 15:15:20', 'true'),
(39, 'Assistant loco pilot', 'The present book is specially published for the aspirants of Assistant Loco Pilot (ALP) Recruitment Exam', 'locopilot,rrb,job', 8, 2, 'r1.webp', 'r1.webp', 'r1.webp', '440', '2024-04-04 15:21:29', 'true'),
(40, 'RRB', 'Disha Publication Complete Guide for Rrb/ Rrc Group D Level 1 Exam', 'RRB,job', 8, 2, 'r3.webp', 'r3.webp', 'r31.png', '440', '2024-04-04 15:26:42', 'true'),
(41, 'RRB loco pilot', 'GKP Publication Complete Guide for  RRB loco pilot exam', 'rrb,locopilot', 8, 2, 'r2.webp', 'r21.jpeg', 'r2.webp', '550', '2024-04-04 15:30:42', 'true'),
(42, 'General aptitude BOOK', 'This  Aptitude book This book provides the complete preparation tips to the  aspirants in aptitude section', 'aptitude,quantitative', 8, 2, 's1.webp', 's1.webp', 's11.jpeg', '562', '2024-04-04 15:34:06', 'true'),
(43, 'SSC CGL', 'Buy Kiran SSC CGL Tier-I 2021 to 2022 Solved Papers With Detailed Explanations (English Medium) (3794) book online at best prices in India', 'ssc,cgl.job', 8, 2, 's2.webp', 's2.webp', 's21.jpeg', '550', '2024-04-04 15:40:18', 'true'),
(45, 'lapp pinnacle of innovation magazine', 'lapp pinnacle of innovation magazine which provides you bussiness connect.', 'magazine', 2, 2, 'm1.webp', 'm1.webp', 'm1.webp', '120', '2024-04-04 16:08:13', 'true'),
(46, 'VISION IAS ', 'Vision IAS PT 365 2024 Culture, Science & Technology, Social Issues, Environment ,Economy and Polity English Medium Phtocopy (Pack of 6 Books) With Clear Print.', 'magazine,ias,vision', 2, 2, 'm2.webp', 'm11.jpeg', 'm2.webp', '240', '2024-04-04 16:14:10', 'true'),
(49, 'Do it for yourself', 'This best-selling, bold motivational journal is for anyone seeking to boost their productivity', 'journel', 9, 2, '1nt.webp', '1nt.webp', '11nt.jpeg', '110', '2024-04-04 16:25:49', 'true'),
(50, 'CLASSMATE NOTES', 'classmate notes for better writing.', 'notes,classmate', 11, 2, '2nt.webp', '2nt.webp', '2nt.webp', '230', '2024-04-04 16:27:50', 'true'),
(51, 'CLASSMATE NOTES', 'classmate notes for better writing', 'notes,classmate', 11, 2, '3nt.webp', '3nt.webp', '3nt.webp', '50', '2024-04-04 16:30:02', 'true'),
(52, 'CLASSMATE NOTES ', 'classmate notes for better writing', 'notes,classmate', 11, 2, '5nt.webp', '5nt.webp', '5nt.webp', '38', '2024-04-04 16:32:16', 'true'),
(53, 'How to build a Car', 'How to Build a Car explores the story of Adrian?s unrivalled 35-year career in Formula One through the prism of the cars he has designed,', 'adrian,book,car', 11, 2, '1ob.webp', '11ob.jpeg', '12ob.jpeg', '317', '2024-04-05 03:11:44', 'true'),
(54, 'The Hero of Tiger Hill', 'The Hero of Tiger Hill is the true story of a brave soldier who leaves no stone unturned and fights valiantly for the honour of his country.', 'hero,tiger,hill', 11, 2, '2ob.webp', '2ob.webp', '2ob2.jpeg', '439', '2024-04-05 03:13:41', 'true'),
(55, 'The story of Life by Cris', 'This book is a magical journey through life from the beginnings of time to the birth of a child and the adventure that we take on our way to the grave', 'life,cris', 11, 2, '3ob.webp', '3ob.webp', '3ob2.jpeg', '270', '2024-04-05 03:16:24', 'true'),
(56, 'A Mind That Found Itself', '\"A Mind That Found Itself\" is Beers\' personal journey from tragedy, through adversity, to an epiphany of purpose and conviction to see it through', 'mind,found', 11, 2, '4ob.webp', '4ob.webp', '4ob2.jpeg', '320', '2024-04-05 03:42:13', 'true'),
(57, 'Survival in Auschwitz', 'Survival in Auschwitz: If This Is a Man is a book written by the Italian author, Primo Levi. ', 'survival,primo levi', 11, 2, '5ob.webp', '5ob.webp', '5ob2.jpeg', '353', '2024-04-05 03:44:29', 'true'),
(58, 'South to America', 'South to America blends Imani Perry\'s personal experiences, historical events and reporting on the current cultural moment into a work of creative non-fiction', 'south,america', 11, 2, '6ob.webp', '6ob.webp', '6ob2.jpeg', '1200', '2024-04-05 03:46:25', 'true'),
(59, 'IT ENDS WITH US', '“It Ends With Us” is a powerful book that tells a story about love, strength, and tough decisions.', 'it,ends,us', 4, 2, '1nov.webp', '1nov.webp', '11n.jpeg', '470', '2024-04-05 03:49:18', 'true'),
(60, 'The Girl Who Fell from the Sky', '\"The Girl Who Fell from the Sky\" tells a story of a family tragedy and survival from the points of view of five interconnected characters', 'girl,sky', 4, 2, '2nov.jpeg', '2nov.jpeg', '2nov2.jpeg', '220', '2024-04-05 03:51:44', 'true'),
(61, 'The Time Machine', 'The Time Machine is a post-apocalyptic science fiction novella by H. G. Wells, published in 1895', 'time,machine', 4, 2, '2nov.webp', '2nov.webp', '2nov3.jpeg', '440', '2024-04-05 03:54:02', 'true'),
(62, 'Sherlock Holmes', 'The Adventures of Sherlock Holmes by Arthur Conan Doyle is a wonderful collection of Sherlock Holmes stories, some of the most popular out there', 'sherlock,holmes', 4, 2, '3nov.jpeg', '3nov.jpeg', '33nov.webp', '650', '2024-04-05 03:56:58', 'true'),
(63, 'The God of Small Things', 'It is a story about the childhood experiences of fraternal twins whose lives are destroyed by the \"Love Laws\" that lay down \"who should be loved, and how.', 'arundhati roy,god,small', 4, 2, '3nov.webp', '3nov.webp', '34nov.jpeg', '180', '2024-04-05 03:59:25', 'true'),
(64, 'PRINCESS STORIES', 'Buy Princess Stories book online at best prices in India here.', 'princess,story', 5, 2, '1st.webp', '1st.webp', '11st.jpeg', '140', '2024-04-05 04:02:54', 'true'),
(65, 'WINTER STORY', 'Winter Story: Introduce children to the seasons in the gorgeously illustrated classics of Brambly Hedge!', 'winter,story', 5, 2, '2st.webp', '2st.webp', '22st.jpeg', '130', '2024-04-05 04:07:49', 'true'),
(66, 'You are all my Favourites', 'From the creators of Guess How Much I Love You, this enchanting story tells of the unconditional love between a family of bears.', 'all,story,favourites', 5, 2, '4st.webp', '4st.webp', '44st.jpeg', '130', '2024-04-05 04:10:31', 'true'),
(67, 'Networking and Computation', 'Networking and Computation: Technology, Modeling and Performance', 'notworking,technology,computaion', 6, 2, '1th.webp', '1th.webp', '11th.jpeg', '750', '2024-04-05 04:23:35', 'true'),
(68, 'Technical Communication', 'Technical Communication, 3E: Principles and Practice. Meenakshi Raman.', 'technical,communication', 6, 2, '2th.webp', '2th.webp', '22th.jpeg', '620', '2024-04-05 04:25:37', 'true'),
(69, 'CAST IRON TECHNOLOGY', 'This book deals with the technology of making, shaping and treating of cast irons which are produced in the largest tonnage', 'CAST,IRON,TECHNOLOGY', 7, 2, '3th.webp', '3th.webp', '33th.jpeg', '530', '2024-04-05 04:28:43', 'true'),
(70, 'PANKAJ JALOTE\'S SOFTWARE ENGINEERING', 'The book focuses on key tasks in two dimensions - engineering and project management - and discusses concepts and techniques', 'software,engineering', 6, 2, '4th.webp', '4th.webp', '44th.jpeg', '720', '2024-04-05 04:31:00', 'true'),
(71, 'NCERT 6 MATHS', 'NCERT Books for Class 6 Maths updated for 2023-24 is available for purchase.', 'ncert,sixth,6,maths', 7, 2, '6mat.jpg', '6mat.jpg', '66mat.jpeg', '170', '2024-04-05 04:35:35', 'true'),
(72, 'NCERT 6 SET', 'NCERT Books for Class 6  updated for 2023-24 is available for purchase.', 'ncert,set,6,six,text books', 7, 2, '6set.jpeg', '6set.jpeg', '6ncert.jpg', '430', '2024-04-05 04:38:55', 'true'),
(73, 'NCERT 6TH SET', 'NCERT Books for Class 6 set updated for 2023-24 is available for purchase.', 'ncert,6,sixth,text books', 7, 2, '6set2.jpeg', '66set.jpeg', '6set2.jpeg', '230', '2024-04-05 04:41:05', 'true'),
(74, 'NCERT 6TH SET', 'NCERT Books for Class 6 Maths updated for 2023-24 is available for purchase.', 'ncert,6th,text book,set', 7, 2, '6set.jpg', '6set.jpg', '66set2.jpeg', '520', '2024-04-05 04:43:36', 'true'),
(75, 'NCERT 7TH', 'NCERT Books for Class 7 set updated for 2023-24 is available for purchase.', 'ncert,text book,seventh,7', 7, 2, '7set2.jpeg', '7set2.jpeg', '7se.jpeg', '640', '2024-04-05 04:45:48', 'true'),
(76, 'NCERT 7th', 'NCERT Books for Class 7 Maths,Science updated for 2023-24 is available for purchase.', 'ncert,seventh,7', 7, 2, '7sse.jpeg', '7mat.jpeg', '7sci.jpeg', '230', '2024-04-05 04:49:47', 'true'),
(77, 'NCERT 7th', 'NCERT Books for Class 7 set updated for 2023-24 is available for purchase.', 'ncert,seventh,text books', 7, 2, '7set3.jpeg', '7set.jpeg', '7set3.jpeg', '340', '2024-04-05 04:54:12', 'true'),
(78, 'NCERT 8TH', 'NCERT Books for Class 6 Maths updated for 2023-24 is available for purchase.', 'NCERT,books,7,set', 7, 2, '8sett.jpeg', '8sett.jpeg', '8set2.jpeg', '270', '2024-04-05 04:59:48', 'true'),
(79, 'NCERT 11TH', 'NCERT Books for Class 6 Maths updated for 2023-24 is available for purchase.', 'NCERT,11TH,SET', 7, 2, '11set.jpeg', '11sett.jpeg', '11set.jpeg', '340', '2024-04-05 05:04:44', 'true'),
(80, ' 12th class textbooks', ' Books for Class 12TH updated for 2023-24 is available for purchase.', 'textbook,12th', 7, 2, '121.jpeg', '12set.jpeg', '121.jpeg', '290', '2024-04-05 05:08:46', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'team11', 'yramya@gmail.com', 'c27f735c3c31fb94214b2052c0c0f22c', 'admin'),
(2, 'ramya', 'yramya7@gmail.com', '39fc3220dea4234ba5590a116eb5cf18', 'user'),
(3, 'elizabeth', 'yramya2108@gmail.com', '7ecfe64ef00d8b8a848cb0497f294ae6', 'user'),
(4, 'bhanu', 'bhanu@234', '123', 'user'),
(5, 'RAMYA', 'yramya@gmail.com', 'c27f735c3c31fb94214b2052c0c0f22c', 'user'),
(6, 'GROUP 11', 'yramya2108@gmail.com', 'group11', 'admin'),
(7, 'HEPSI', 'hepsi@gmail.com', '77bf8110ff3e7579b91fc9e23557937d', 'user'),
(8, 'ameena', 'ameena@gmail.com', '40be862f8ecbf626f6ab7cd4d33ff058', 'user'),
(9, 'blessy', 'blessy47@gmail.com', '7741b9b64c57afee075b3a4b4b8ae6de', 'user'),
(10, 'beulah', 'beulah77@gmail.com', 'e4b6331ab0ab6de732b6c1050b089ac3', 'user'),
(11, 'elizabeth', 'elizabeth21@gmail.com', '6987d3303ec49d6113457cb43b719428', 'user'),
(12, 'gowri', 'gowri@gmail.com', '335ad3b4b21ab7486efdbe65737d87c1', 'user'),
(13, 'ramya', 'ramya@gmail.com', '904926ace55e2c8aabbcb37211e32729', 'user'),
(14, 'RAMYAYANDRAPATI', 'ramya@gmail.com', '904926ace55e2c8aabbcb37211e32729', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ntime` varchar(255) NOT NULL DEFAULT '-',
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount`, `invoice_number`, `total_products`, `order_date`, `ntime`, `order_status`) VALUES
(18, 2, 430, 369097562, 1, '2024-06-30 08:54:07', '9:00', 'complete'),
(19, 2, 1408, 1935769714, 5, '2024-06-30 07:43:01', '-', 'pending'),
(20, 5, 50, 1221736053, 1, '2024-06-30 08:37:25', '-', 'pending'),
(21, 2, 710, 489513039, 1, '2024-06-30 08:40:33', '-', 'pending'),
(22, 2, 470, 98602233, 1, '2024-06-30 08:41:57', '-', 'pending'),
(23, 2, 1070, 330408356, 2, '2024-06-30 11:47:51', '-', 'pending'),
(24, 6, 130, 220064053, 1, '2024-06-30 13:49:22', '-', 'pending'),
(25, 2, 562, 156668952, 1, '2024-06-30 13:25:40', '-', 'pending'),
(26, 2, 230, 706421598, 1, '2024-06-30 15:00:43', '10-30', 'complete'),
(27, 7, 270, 240111046, 1, '2024-06-30 15:10:49', '12:20', 'complete'),
(28, 2, 170, 120351301, 1, '2024-06-30 15:34:37', '-', 'pending'),
(29, 2, 440, 1393832549, 1, '2024-06-30 15:43:59', '-', 'pending'),
(30, 2, 230, 1477421304, 1, '2024-06-30 15:58:30', '-', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payment`
--

INSERT INTO `user_payment` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(1, 1, 160, 160, 'upi', '2023-11-25 03:16:55'),
(2, 1, 160, 160, 'upi', '2023-11-25 03:16:56'),
(3, 2, 90, 90, 'pay offline', '2023-12-01 05:22:15'),
(4, 3, 110, 110, 'pay offline', '2024-03-12 12:07:05'),
(5, 18, 430, 430, 'upi', '2024-06-30 08:54:07'),
(6, 26, 230, 230, 'net banking', '2024-06-30 15:00:29'),
(7, 27, 270, 270, 'net banking', '2024-06-30 15:03:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_ip`, `user_address`, `user_mobile`) VALUES
(2, 'chandrika', 'chandrika@gmail.com', '$2y$10$cUqREiY7JQqadCDPo1qH6OLYz1alvrr0wHEhgh4qPFSdFHDpqmyFm', ' ::1', 'ongole', '1234567890'),
(3, ' elizabeth', 'elizabeth@gmail.com', '$2y$10$ccz.NnWVDzsw1/cbYJ0S8.rAz6Mlok.9SzONBor1ZO51IwNaMZ3sO', ' ::1', 'ongole', '1231231230'),
(4, 'hepsibeaulah', 'beaulah@gmail.com', '$2y$10$WfBjp9rS1l.0G2CWtVDFBu7NCm2TQ4IBwMpM.N3xNQKfQxlHQw0a6', ' ::1', 'hyd', '9988776655'),
(5, 'joseph', 'joseph@gmail.com', '$2y$10$P.5oZyDCoJJ86nh9lHTiFOTQ8n2Wdoy9sJ1FLE9AAumJxYvOkX9M.', ' ::1', 'chennai', '1234123412'),
(6, 'maryjoseph', 'maryjoseph@gmail.com', '$2y$10$hguI5wbqdo1p6XKEhURNGOnfNRO9trw/Y2imwbnnj/lPQ022WXdwq', ' ::1', 'chennai', '1234512345'),
(7, 'ribecca', 'ribecca@gmail.com', '$2y$10$eKSj/S8RohGVbdXbBZKTpOSSRzmzRfIWmVRvjO6cmltSVKf4tJ3Y6', ' ::1', 'Chennai', '7873456540'),
(8, 'akanksha', 'akanksha@gmail.com', '$2y$10$n8Rg9JR16I7B0DyYG.bQYOkma9KT69A6D9UQbWhmqS.nBa3jsegXG', ' ::1', 'ongole', '1234561234');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_details`
--

CREATE TABLE `wishlist_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `Quantity` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wishlist_details`
--

INSERT INTO `wishlist_details` (`product_id`, `ip_address`, `Quantity`) VALUES
(46, '::1', 0),
(78, '::1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist_details`
--
ALTER TABLE `wishlist_details`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wishlist_details`
--
ALTER TABLE `wishlist_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
