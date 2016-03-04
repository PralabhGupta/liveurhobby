-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2015 at 05:37 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hobby`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` varchar(200) DEFAULT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `comments` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `username`, `comments`) VALUES
('16', 'id', 'id'),
('16', 'yashi', 'testing'),
('46', 'jishnuyashi', 'jhh'),
('47', 'pralabh', 'nnnn');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `eventdetail` longtext,
  `category` varchar(2000) DEFAULT NULL,
  `subcategory` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `username`, `eventdetail`, `category`, `subcategory`) VALUES
(1, 'sita', 'cjd', 'ahg', 'SH'),
(2, 'pralabh', 'fucking good event', 'music', 'hip hop'),
(3, 'pralabh', 'dhdhdhdh', 'sports', 'hockey'),
(4, 'pralabh', 'ggg', 'music', 'gg'),
(6, 'jishnuyashi', 'nnnn', 'music', 'nnn'),
(7, 'jishnuyashi', 'fdff', 'music', 'ddv'),
(14, 'pralabh', 'kk', 'music', 'kk');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `category` varchar(2000) DEFAULT NULL,
  `screenshot` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `username`, `category`, `screenshot`) VALUES
(3, 'pralabh', 'music', 'IMG_20150908_201822.jpg'),
(4, 'pralabh', 'music', 'pralabh/a.png'),
(5, 'pralabh', 'teaching', 'pralabh/Image (2).jpg'),
(6, 'pralabh', 'sports', 'pralabh/aliencodes.jpeg'),
(7, 'jishnuyashi', 'music', 'jishnuyashi/client1.png'),
(8, 'jishnuyashi', 'music', 'jishnuyashi/man3.jpg'),
(9, 'pralabh', 'art', 'pralabh/');

-- --------------------------------------------------------

--
-- Table structure for table `institutelogin`
--

CREATE TABLE `institutelogin` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `password` varchar(2000) DEFAULT NULL,
  `email` varchar(2000) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institutelogin`
--

INSERT INTO `institutelogin` (`id`, `username`, `password`, `email`, `status`) VALUES
(24, 'pralabh', 'efb36f4077cb9e1f6cda7bcb8cc9c747497475e5', 'pralabhgupta@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `course` varchar(2000) DEFAULT NULL,
  `duration` varchar(2000) DEFAULT NULL,
  `fees` varchar(2000) DEFAULT NULL,
  `totalseats` varchar(2000) DEFAULT NULL,
  `remaining` varchar(2000) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `teachername` varchar(2000) DEFAULT NULL,
  `contact` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `username`, `course`, `duration`, `fees`, `totalseats`, `remaining`, `description`, `teachername`, `contact`) VALUES
(2, 'sita', '', 'abd', 'snd', 'ndb', 'ndbn', 'mdn', 'mnf', 'ndfj'),
(3, 'sita', '', 'ndk', '', '', '', '', 'kjbnkjl', 'kjnj'),
(4, 'sita', '', 'abc', 'anv', 'anv', 'anv', 'anv', 'anb', 'ahs'),
(5, 'pralabh', '', 'dd', 'dd', 'ddd', 'd', 'd', 'ddd', 'dddd'),
(6, 'pralabh', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `coverpic` varchar(2000) DEFAULT NULL,
  `dppic` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `username`, `coverpic`, `dppic`) VALUES
(4, 'ankita', 'picture/coverpic.jpg', 'picture/dppic.jpg'),
(3, 'pralabh', 'pralabh/aliencodes.jpeg', 'pralabh/Image.jpg'),
(5, 'pralabh2', 'picture/coverpic.jpg', 'picture/dppic.jpg'),
(6, 'jishnu', 'picture/coverpic.jpg', 'picture/dppic.jpg'),
(7, 'jishnuyashi', 'picture/coverpic.jpg', 'jishnuyashi/tab1.png'),
(8, 'pralabh', 'picture/coverpic.jpg', 'picture/dppic.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `data` longtext,
  `likes` varchar(100) DEFAULT NULL,
  `comment` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `username`, `data`, `likes`, `comment`) VALUES
(47, 'pralabh', 'abc', '0', ' '),
(46, 'jishnuyashi', 'hello', '0', ' '),
(45, 'jishnuyashi', 'kkk', '0', ' '),
(44, 'jishnuyashi', 'kkk', '0', ' '),
(16, 'yashi', 'Hello world', '1', NULL),
(43, 'pralabh', 'fff', '0', '0'),
(42, 'pralabh', 'fb', '0', '0'),
(41, 'pralabh', 'fgh', '0', '0'),
(40, 'pralabh', 'fb', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pralabh`
--

CREATE TABLE `pralabh` (
  `name` varchar(2000) DEFAULT NULL,
  `owner` varchar(2000) DEFAULT NULL,
  `housenumber` varchar(2000) DEFAULT NULL,
  `city` varchar(2000) DEFAULT NULL,
  `state` varchar(2000) DEFAULT NULL,
  `phone` varchar(2000) DEFAULT NULL,
  `email` varchar(2000) DEFAULT NULL,
  `year` varchar(2000) DEFAULT NULL,
  `services` varchar(2000) DEFAULT NULL,
  `screenshot` varchar(2000) DEFAULT NULL,
  `profilecounter` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pralabh`
--

INSERT INTO `pralabh` (`name`, `owner`, `housenumber`, `city`, `state`, `phone`, `email`, `year`, `services`, `screenshot`, `profilecounter`) VALUES
('a', 'a', 'a', 'Meerut', 'Andaman and Nicobar Islands', '1111111111', 'pralabhgupta53@gmail.com', '2015', '|music|dance|art|sports', 'picture/dppic.jpg ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(2000) DEFAULT NULL,
  `password` varchar(2000) DEFAULT NULL,
  `email` varchar(2000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `email`) VALUES
(1, 'abc', 'abc', 'abc'),
(2, 'aaa', 'acb', 'abc'),
(3, 'abcd', '5f4dcc3b5aa765d61d8327deb882cf99', 'abcd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institutelogin`
--
ALTER TABLE `institutelogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `institutelogin`
--
ALTER TABLE `institutelogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
