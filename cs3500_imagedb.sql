-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 11:39 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs3500_imagedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentreply`
--

CREATE TABLE `commentreply` (
  `ReplyID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `CommentID` int(11) NOT NULL,
  `Likes` int(11) NOT NULL,
  `Dislikes` int(11) NOT NULL,
  `Comment` longtext NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `ImageID` int(11) NOT NULL,
  `Comment` longtext,
  `Likes` int(11) NOT NULL,
  `Dislikes` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ImageID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` text,
  `Likes` int(11) DEFAULT NULL,
  `Dislikes` int(11) DEFAULT NULL,
  `ViewCount` int(11) DEFAULT NULL,
  `Privacy` int(1) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagefavorite`
--

CREATE TABLE `imagefavorite` (
  `ImageFavoriteID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `ImageID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `imagetags`
--

CREATE TABLE `imagetags` (
  `ImageTagID` int(11) NOT NULL,
  `ImageID` int(11) NOT NULL,
  `TagID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `TagID` int(11) NOT NULL,
  `Tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `DateOfRegistration` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `Username`, `Password`, `Email`, `DateOfRegistration`, `FirstName`, `LastName`) VALUES
(1, 'test1', 'asdfasdf', 'asdf@gmail.com', '2018-04-11 17:10:33', 'testu', 'testu'),
(3, 'test2', '$2y$10$MrCiM5W5cHrOAV93uY7cgeRy6E91XNs1M.aDMv6I1xAYkzyN2wPma', 'asdf@gmail.com', '2018-04-11 17:36:00', 'testu', 'testu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentreply`
--
ALTER TABLE `commentreply`
  ADD PRIMARY KEY (`ReplyID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ImageID`);

--
-- Indexes for table `imagefavorite`
--
ALTER TABLE `imagefavorite`
  ADD PRIMARY KEY (`ImageFavoriteID`);

--
-- Indexes for table `imagetags`
--
ALTER TABLE `imagetags`
  ADD PRIMARY KEY (`ImageTagID`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`TagID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentreply`
--
ALTER TABLE `commentreply`
  MODIFY `ReplyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `ImageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagefavorite`
--
ALTER TABLE `imagefavorite`
  MODIFY `ImageFavoriteID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `imagetags`
--
ALTER TABLE `imagetags`
  MODIFY `ImageTagID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `TagID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
