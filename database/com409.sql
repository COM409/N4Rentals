-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2016 at 11:15 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `com409`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(10) unsigned NOT NULL,
  `username` char(30) NOT NULL,
  `password` char(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'jonathan', 'JonathanMcCrink1'),
(3, 'gary', 'GaryMcShane1'),
(4, 'ryan', 'RyanKinley1');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(10) unsigned NOT NULL,
  `custFirstName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `custLastName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `email` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `pword` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `cPword` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `town` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `county` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `custFirstName`, `custLastName`, `DOB`, `email`, `pword`, `cPword`, `address`, `town`, `county`, `pcode`, `country`, `created_at`, `updated_at`) VALUES
(10, 'Jonathan', 'McCrink', '1994-08-08', 'jmccrink895@hotmail.com', 'Password!', 'Password!', '3 CARRICK MEADOWS', 'NEWRY', 'DOWN', 'BT35 7LJ', 'Ireland', '2016-03-31 20:24:22', '0000-00-00 00:00:00'),
(11, 'Pat', 'McCrink', '1957-12-24', 'pat.mccrink@gmail.com', 'PatMcCrink1', 'PatMcCrink1', '5 Barr Hill', 'Newry', 'Down', 'Bt346Li', 'Ireland', '2016-03-31 20:27:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `Product_ID` int(10) unsigned NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Image` blob NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Price` decimal(15,2) NOT NULL,
  `Rating` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Title`, `Description`, `Image`, `Category`, `Price`, `Rating`, `created_at`, `updated_at`) VALUES
(4, 'Ted 2', 'Mark Wahlberg is back in his role as John Bennett in the extended edition of the hit movie Ted which is co-written and directed by Seth MacFarlane. ', 0x546564322d506f73746572322e6a7067, 'DVD', '4.00', '15', '2016-03-30 20:00:24', '0000-00-00 00:00:00'),
(5, 'Far Cry Primal', 'The Far Cry series started life as a vibrant sandbox game in which the player gained special abilities to overcome increasingly tough opponents. That used to be something of a unique selling point, but games like Saints Row, Rocksteadys Batman games and Ubisofts own Assassins Creed titles have crept in that territory. So it begs the question, where does Ubisoft take the Far Cry series now that its visited a host of different locations? The answers quite unconventional - the stone age.', 0x4661724372795072696d616c5053342e4a5047, 'Games', '7.00', '18', '2016-03-30 16:33:01', '0000-00-00 00:00:00'),
(6, 'Specture', 'A cryptic message from the past sends James Bond on a rogue mission to Mexico City and eventually Rome, where he meets Lucia Sciarra (Monica Bellucci), the beautiful and forbidden widow of an infamous criminal. Bond infiltrates a secret meeting and uncovers the existence of the sinister organisation known as SPECTRE.', 0x5370656374726520426c752d5261792e6a7067, 'Blu_Ray', '5.70', '12', '2016-03-30 20:02:12', '0000-00-00 00:00:00'),
(7, 'Vacation', 'Ed Helms and Christina Applegate star in this comedy written and directed by John Francis Daley and Jonathan M. Goldstein. Rusty Griswold (Helms) and his family are in need of a vacation so he surprises his wife Debbie (Applegate) by booking them and their two boys into the soon-to-be-closing Walley World to recreate the memorable vacation he had with his family 30 years ago.', 0x7661636174696f6e20426c752d5261792e6a7067, 'Blu_Ray', '5.00', '15', '2016-03-30 16:43:27', '0000-00-00 00:00:00'),
(8, 'The Good Dinosaur-Bob Peterson', 'Pixar animated feature about the adventures of a young dinosaur and his human friend. Set in an alternate timeline in which the asteroid that caused the extinction of dinosaurs missed the Earth, the story follows Apatosaurus Arlo (voice of Raymond Ochoa), who is left to fend for himself after losing his father in an accident and getting swept away by a river. ', 0x476f6f642044696e6f7361757220426c752d5261792e6a7067, 'Blu_Ray', '5.00', 'PG', '2016-03-30 19:24:51', '0000-00-00 00:00:00'),
(9, 'Tom Clancys The Division', 'A devastating pandemic sweeps through New York City, and one by one, basic services fail. In only days, without food or water, society collapses into chaos. The Division, a classified unit of self-supported tactical agents, is activated. Leading seemingly ordinary lives among us, Division agents are trained to operate independently in order to save society. When society falls, your mission begins.', 0x546f6d20436c616e63797320546865204469766973696f6e2078626f786f6e652e6a7067, 'Games', '7.00', '18', '2016-03-31 12:07:49', '0000-00-00 00:00:00'),
(10, 'Plants vs. Zombies Garden Warfare 2', 'Plants Attack â€” Bring the fight to the zombies for the first time in franchise history. Go on the offensive as the plants in all-new 24-player Herbal Assault mode, or defend Zomburbia in 4-player zombie co-op in Graveyard Ops.\r\nCharacters From All Ages â€” Bring even more strategic depth to this all-out botanical battle with 14 total character classes, and over 100 playable plants and zombies from the past, present, and future.', 0x506c616e745a6f6d6269657347617264656e57617266617265322e6a7067, 'Games', '6.00', 'u', '2016-03-30 16:48:33', '0000-00-00 00:00:00'),
(11, 'Need for Speed', 'With over 20 years of history in its rear view mirror, Need for Speed returns with a reboot that delivers on what Need for Speed stands for - rich customization, authentic urban car culture, a nocturnal open world, and an immersive narrative that drives your Need For Speed game.', 0x4e65656420666f722053706565642058626f784f6e652e6a7067, 'Games', '7.00', '12', '2016-03-30 16:49:08', '0000-00-00 00:00:00'),
(12, 'Pixels', 'Adam Sandler, Kevin James, Josh Gad and Peter Dinklage star in this part-animated comedy directed by Chris Columbus. Back in 1982, NASA sent a time capsule into space containing an insight into life on Earth including the video games Pac-Man, Donkey Kong and Space Invaders.', 0x506978656c732e6a7067, 'DVD', '4.00', '12', '2016-03-30 16:50:11', '0000-00-00 00:00:00'),
(13, 'Paddington', 'Nicole Kidman and Hugh Bonneville star in this family comedy based on the popular childrens books written by Michael Bond. A young Peruvian bear (voice of Ben Whishaw) grows up dreaming of a life in London, having been influenced by his aunt who once met an explorer from England. ', 0x50616464696e67746f6e504f535445522e6a7067, 'DVD', '0.00', 'PG', '2016-03-31 21:05:23', '0000-00-00 00:00:00'),
(14, 'Hotel Transylvania 2 -Genndy Tartakovsky', 'Animated comedy sequel directed by Genndy Tartakovsky. As newly-weds Mavis (voice of Selena Gomez) and Jonathan (Andy Samberg) start their new life as a family with their baby boy, Mavis father, Count Dracula (Adam Sandler), decides to open the doors of his beloved Hotel Transylvania to human guests for the first time.', 0x686f74656c207472616e73796c76616e696120322e6a7067, 'DVD', '3.00', 'u', '2016-03-30 16:52:15', '0000-00-00 00:00:00'),
(15, 'Bourne Identity', 'Badly wounded and suffering from amnesia, Jason Bourne (Matt Damon) is pulled out of the Mediterranean by fishermen, and is able to recall neither who he is nor what happened to him. His only clue to his identity is the number of a Swiss bank account which has been etched into a device implanted in his body', 0x626f75726e652e6a7067, 'Blu_Ray', '0.00', '12', '2016-03-31 20:17:34', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rental_note`
--

CREATE TABLE IF NOT EXISTS `rental_note` (
  `Rental_ID` int(10) unsigned NOT NULL,
  `id` int(10) NOT NULL,
  `Product_ID` int(10) NOT NULL,
  `Duration` int(20) NOT NULL,
  `Date_Rented` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `rental_note`
--
ALTER TABLE `rental_note`
  ADD PRIMARY KEY (`Rental_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rental_note`
--
ALTER TABLE `rental_note`
  MODIFY `Rental_ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
