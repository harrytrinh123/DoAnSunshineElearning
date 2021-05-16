-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2021 at 08:55 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ptud`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(20) NOT NULL,
  `passwork` varchar(20) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--


-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL auto_increment,
  `classname` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `classsize` int(10) NOT NULL,
  `datestart` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `dateend` timestamp NOT NULL default '0000-00-00 00:00:00',
  `courseid` int(10) NOT NULL,
  `scheduleid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `class`
--


-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL auto_increment,
  `content` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `imageurl` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `studentid` int(10) NOT NULL,
  `postid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comment`
--


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) NOT NULL auto_increment,
  `coursename` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `course`
--


-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `email` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `address` varchar(100) character set utf8 collate utf8_unicode_ci NOT NULL,
  `phone` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `accountusername` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `employee`
--


-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `imageurl` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `content` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `studentid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `post`
--


-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `studentid` int(10) NOT NULL,
  `examid` int(10) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--


-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(10) NOT NULL auto_increment,
  `content` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `rate` float NOT NULL,
  `courseid` int(10) NOT NULL,
  `studentid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `review`
--


-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(10) NOT NULL auto_increment,
  `zoomid` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `zoompasswork` varchar(20) character set utf8 collate utf8_unicode_ci NOT NULL,
  `scheduletime` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `schedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `suppost`
--

CREATE TABLE `suppost` (
  `id` int(10) NOT NULL auto_increment,
  `content` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `answer` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL,
  `isreply` char(10) character set utf8 collate utf8_unicode_ci NOT NULL,
  `studentid` int(10) NOT NULL,
  `classid` int(10) NOT NULL,
  `teacherid` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `suppost`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id`) REFERENCES `review` (`id`);
