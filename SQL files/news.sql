-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 10:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newspub`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL DEFAULT '1',
  `news_topic` text NOT NULL,
  `news` longtext NOT NULL,
  `post_date` datetime NOT NULL,
  `source` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `type_id`, `staff_id`, `news_topic`, `news`, `post_date`, `source`) VALUES
(1, 1, 1, 'All you need to know: UEFA Europa League Final', 'Who is in the final?\r\n\r\nThe right to lift the distinctive UEFA Europa League trophy will be contested by former European champions Marseille and two-time winners Atlético.\r\n\r\nWhen does it take place?\r\n\r\nThe game will be played on Wednesday 16 May, with kick-off at 20:45CET.\r\n\r\nWho are the \'home\' team?\r\n\r\nMarseille are the nominal home team as a result of a draw made for administrative purposes following last month\'s semi-final draw. Both teams may wear their first choice of colours but if there is a clash the team designated as the away team (i.e. Atlético) must wear alternative colours.\r\n\r\nWhere is it being played?\r\n\r\nStade de Lyon, 10km east of the centre of France\'s third largest city. The venue, also known as Parc OL, replaced Stade de Gerland as the home of Lyon in time to stage six games at UEFA EURO 2016. The stadium has a capacity of 56,500.\r\n\r\nCan I still get tickets?\r\n\r\nThere were 23,000 tickets available to the public via UEFA.com in March. The number of tickets reserved for fans of the finalists will be confirmed soon.\r\n\r\nWhat does the winner get?\r\n\r\nThe story behind the UEFA Europa League trophy\r\n\r\nThe UEFA Europa League trophy is, at 15kg, the heaviest of all UEFA silverware. To make things extra interesting, it comes without handles. There are 40 medals for players and staff. Then there is the not insignificant matter of a place in the UEFA Champions League group stage.\r\n\r\nHow can I watch the final?\r\n\r\nThe full list of global UEFA Europa League broadcast partners is available here.\r\n\r\nWhat else is going on?\r\n\r\nFrench DJ duo Ofenbach, the brains behind the hit singles Be Mine and Katchi, will perform at the opening ceremony.\r\n\r\nWho\'s the ambassador?\r\n\r\nFormer France defender Éric Abidal. Born in a suburb of Lyon, he won a title in each of his three seasons with OL before a successful six-year stint at Barcelona.', '2018-05-04 08:15:00', 'http://www.uefa.com'),
(2, 3, 1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2018-05-07 07:40:18', 'Lorem'),
(3, 4, 1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non    ', '2018-05-07 13:05:31', 'mmcm'),
(4, 6, 1, 'Pixar-style stealth horror game Hello Neighbor coming to Android', '\r\n    The 2017 stealth horror hit Hello Neighbor is launching on Android and iOS on July 27.\r\n    The game will feature all three acts, with the first being free and the other available as in-app purchases.\r\n    Beta signups are available now on the official Hello Neighbor forums.\r\n\r\nPut on your running shoes and donâ€™t look back, because Hello Neighbor is coming to Android and iOS on July 27.\r\n\r\nFor those unfamiliar with Hello Neighbor, itâ€™s a stealth horror game with Pixar-style graphics. It takes place over three acts, and in the first the player is a child investigating his mysterious neighborâ€™s house. The neighbor exhibits all kinds of suspicious behavior, and has something locked in the basement of his enormous labyrinth of a house.\r\n\r\nYou have to sneak through the house and try to figure out what your creepy neighbor is up to. If he catches you, youâ€™ll end up back in your house and have to start over. And he will catch you. Over and over.\r\n\r\nHello Neighbor also features procedural AI, so your potentially criminal neighbor will set up cameras and bear traps where you last entered the house. He also analyzes your movements and finds shortcuts to bear down on you even faster. This keeps gameplay exciting and tense, even as you attempt to break in for the thousandth time.\r\n\r\nThe mobile version of Hello Neighbor will have all three acts with the same graphics and gameplay optimized for mobile devices. The first act is free, with the remaining two available as in-app purchases.                ', '2018-05-11 14:06:12', 'https://www.androidauthority.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `news_id` (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `news_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
