-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2020 at 05:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keontuzb_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(50) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_entry` varchar(1000) NOT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_date` date NOT NULL,
  `contact_message` varchar(500) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_type` varchar(50) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_desc` varchar(500) NOT NULL,
  `project_date` date NOT NULL,
  `project_language` varchar(50) NOT NULL,
  `project_image` varchar(50) NOT NULL,
  `github_link` varchar(100) NOT NULL,
  `live_link` varchar(100) NOT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_type`, `project_name`, `project_desc`, `project_date`, `project_language`, `project_image`, `github_link`, `live_link`) VALUES
(1, 'Web app', 'Personal Website', 'website displaying skills, projects and blog', '2019-12-03', 'HTML, CSS, PHP, MySQL & JavaScript', 'p1.jpg', 'GitHub.com/Keoabetswe/Personal-Website', 'https://www.keonthite.co.za');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'Keo', 'Password1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
