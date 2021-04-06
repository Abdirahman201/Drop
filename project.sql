-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2021 at 08:51 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cordinates`
--

CREATE TABLE `cordinates` (
  `lat` double NOT NULL,
  `longitude` double NOT NULL,
  `location_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cordinates`
--

INSERT INTO `cordinates` (`lat`, `longitude`, `location_id`) VALUES
(47.47047424316406, -122.23218536376953, 1),
(47.5455189, -122.376157, 2),
(47.5178605, -122.354901, 3),
(47.7343063, -122.345333, 4),
(47.734507, -122.345203, 5),
(47.761506, -122.102221, 6),
(47.3594834, -122.6037809, 7),
(47.5201634, -122.6301557, 8),
(47.637746, -122.5141293, 9),
(47.6798763, -117.4371961, 10),
(47.6930364, -117.4107202, 11),
(47.6289291, -117.4021422, 12),
(47.3429278, -122.3021499, 13),
(47.3951459, -122.2954628, 14),
(47.2953982, -122.3433511, 15),
(48.4701851, -122.3358373, 16),
(48.5064849, -122.2445941, 17),
(18, 48.508461, -123),
(48.508461, -122.6113629, 18);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(20) NOT NULL,
  `country` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country`) VALUES
(1, 'King County '),
(2, 'Snohomish County\r\n'),
(3, 'Kitsap County '),
(4, 'Spokane County '),
(5, 'Pierce County '),
(6, 'Skagit County ');

-- --------------------------------------------------------

--
-- Table structure for table `Disease`
--

CREATE TABLE `Disease` (
  `id` int(20) NOT NULL,
  `disease` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Disease`
--

INSERT INTO `Disease` (`id`, `disease`) VALUES
(1, 'COVID-19'),
(2, 'Malaria'),
(3, 'Flu'),
(4, 'Chicken Pox');

-- --------------------------------------------------------

--
-- Table structure for table `infect`
--

CREATE TABLE `infect` (
  `id` int(20) NOT NULL,
  `infect_rate` varchar(200) NOT NULL,
  `cases` varchar(200) NOT NULL,
  `disease_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infect`
--

INSERT INTO `infect` (`id`, `infect_rate`, `cases`, `disease_id`) VALUES
(1, '50280', '119000000', 1),
(2, '22800', '229000000', 2),
(3, '34000', '3000000 - 5000000', 3),
(4, '4000000', '10500 to  13000 ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(20) NOT NULL,
  `location` varchar(200) NOT NULL,
  `country_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location`, `country_id`) VALUES
(1, ' 955 Powell Ave SW, Renton, WA 98057\r\n', 1),
(2, '6330 35th Ave SW, Seattle, WA 981263004', 1),
(3, '9456 16th Ave SW, Seattle, WA 981062824', 1),
(4, '14510 Aurora Ave N, Shoreline, WA 98133\r\n', 2),
(5, '17524 Aurora Ave N, Shoreline, WA 981334813\r\n', 2),
(6, '17520 Avondale Rd NE, Woodinville, WA 980779100\r\n', 2),
(7, '4840 Borgen Blvd NW, Gig Harbor, WA 98332\r\n', 3),
(8, '3099 Bethel Rd SE, Port Orchard, WA 98366\r\n', 3),
(9, '1315 Wintergreen Ln NE, Bainbridge Island, WA 98110\r\n', 3),
(10, '1708 W Northwest Blvd, Spokane, WA 99205\r\n', 4),
(11, '12 E Empire Ave, Spokane, WA 99207', 4),
(12, '2830 S Grand Blvd, Spokane, WA 99203', 4),
(13, '28817 Military Rd S, Federal Way, WA 980037912', 5),
(14, '23003 Pacific Hwy S, Des Moines, WA 981987269', 5),
(15, '650 SW Campus Dr, Federal Way, WA 98023\r\n', 5),
(16, '623 S Burlington Blvd, Burlington, WA 982332209', 6),
(17, '320 Harrison St, Sedro-Woolley, WA 982841035', 6),
(18, '909 17th St, Anacortes, WA 98221', 6);

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(20) NOT NULL,
  `symptom` varchar(200) NOT NULL,
  `disease_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `symptom`, `disease_id`) VALUES
(1, 'fever,dry cough,tiredness,aches , pains,sore throat\r\n,diarrhoea', 1),
(2, 'General feeling of discomfort,Headache,Nausea and vomiting,Diarrhea,Abdominal pain,Muscle or joint pain,Fatigue', 2),
(3, 'Fever or feeling feverish chills,Cough,Shortness of breath or difficulty breathing,Fatigue (tiredness),Sore throat,Runny or stuffy nose.', 3),
(4, 'Fever,Loss of appetite,Headache,Tiredness (malaise)', 4);

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `id` int(20) NOT NULL,
  `vaccine` varchar(200) NOT NULL,
  `disease_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`id`, `vaccine`, `disease_id`) VALUES
(1, 'AstraZeneca,Novavax', 1),
(2, 'Atovaquone-proguanil (Malarone),Quinine sulfate (Qualaquin),Primaquine phosphate', 2),
(3, 'oseltamivir phosphate,zanamivir,peramivir ,baloxavir marboxil ', 3),
(4, 'acyclovir, valacyclovir (Valtrex)', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Disease`
--
ALTER TABLE `Disease`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infect`
--
ALTER TABLE `infect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Disease`
--
ALTER TABLE `Disease`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `infect`
--
ALTER TABLE `infect`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
