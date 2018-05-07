-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 03:44 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookStore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` double(8,2) NOT NULL,
  `description` varchar(4098) NOT NULL,
  `image_url` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `posted_by` int(11) NOT NULL,
  `sold` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `price`, `description`, `image_url`, `category_id`, `posted_by`, `sold`) VALUES
(1, 'Harry potter and the sorcerer\'s stone', 50.00, 'Excellent condition. Need money.', 'https://images-na.ssl-images-amazon.com/images/I/51HSkTKlauL._SX346_BO1,204,203,200_.jpg', 13, 1, 0),
(2, 'Biology Book for 1301 students', 100.00, 'Ok condition, has some tear and wear, dont need it anymore.', 'https://www.pearsonhighered.com/assets/bigcovers/0/8/0/5/0805366245.jpg', 1, 1, 0),
(3, 'Horton hears a who', 10.00, 'For kids', 'https://images-na.ssl-images-amazon.com/images/I/51AdV1UFjQL._SX365_BO1,204,203,200_.jpg', 13, 1, 0),
(4, '1984', 20.00, 'Very interesting read.', 'https://images-na.ssl-images-amazon.com/images/I/514CVwOrybL._SX333_BO1,204,203,200_.jpg', 11, 1, 0),
(5, 'Fahrenheit 451', 80.00, 'They burn books in this book...', 'https://images-na.ssl-images-amazon.com/images/I/61MvIVaurSL.jpg', 11, 1, 0),
(6, 'Of Mice and Men', 5.00, 'How could he shoot lenny??!', 'https://images-na.ssl-images-amazon.com/images/I/51wuHv30-ML._SX359_BO1,204,203,200_.jpg', 12, 1, 0),
(7, 'Hunger Games: Mockingjay', 20.00, 'KATNISS!', 'https://images-na.ssl-images-amazon.com/images/I/71X7lgH1nRL.jpg', 11, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent`, `name`, `description`) VALUES
(1, 0, 'Students', 'Books required by your school, sold by other students.'),
(2, 0, 'Nonfiction', 'Prose writing that is based on facts, real events, and real people, such as biography or history.'),
(3, 0, 'Fiction', 'Prose, especially short stories and novels, that describes imaginary events and people.'),
(4, 0, 'Foklore', 'The traditional beliefs, customs, and stories of a community, passed through the generations by word of mouth.'),
(5, 0, 'Drama', 'A composition in prose or verse presenting in dialogue or pantomime a story involving conflict or contrast of character.'),
(6, 2, 'Persuasive Writing', 'Presenting reasons and examples to influence action or thought.'),
(7, 2, 'Informative Writing', 'Soul purpose of educating on a certain topic.'),
(8, 2, 'Autobiography', 'An account of a person\'s life written by that person.'),
(9, 2, 'Biography', 'An account of someone\'s life written by someone else.'),
(10, 3, 'Historical Fiction', 'A story that is made up but is set in the past and sometimes borrows true characteristics of the time period in which it is set.'),
(11, 3, 'Science Fiction', 'Imagined future scientific or technological advances and major social or environmental changes, frequently portraying space or time travel and life on other planets.'),
(12, 3, 'Realistic Fiction', 'Consisting of stories that could have actually occurred to people or animals in a believable setting. '),
(13, 3, 'Fantasy', 'Contains a plot that cannot occur in the real world. Its plot usually involves witchcraft or magic, taking place on an undiscovered planet of an unknown world.'),
(14, 4, 'Fable', 'A fictional story that features animals, legendary creatures, plants, inanimate objects, or forces of nature that are anthropomorphized and that illustrates or leads to a particular moral lesson.'),
(15, 4, 'Myth', 'A legendary or a traditional story that usually concerns an event or a hero, with or without using factual or real explanations.'),
(16, 4, 'Tall Tale', 'A story with unbelievable elements, related as if it were true and factual. '),
(17, 4, 'Legend', 'A traditional story or group of stories told about a particular person or place.'),
(18, 4, 'Fairytale', 'A short story that typically features entities such as dwarfs, dragons, elves, fairies, giants, gnomes, goblins, griffins, mermaids, talking animals, trolls, unicorns, or witches, and usually magic or enchantments.'),
(19, 5, 'Comedy', 'A type of dramatic work that is amusing and satirical in its tone, mostly having a cheerful ending. '),
(20, 5, 'Tragedy', 'The main character is brought to ruin or suffers extreme sorrow, especially as a consequence of a tragic flaw, moral weakness, or inability to cope with unfavorable circumstances.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `date_joined` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `date_joined`) VALUES
(1, 'Oscar R Torres', 'oscar0812torres@gmail.com', '$2a$12$9I4hqDmeComM0x0gJV27muYZ0QbAYz0k9BENuYI7IghHXXngLY/oO', 1525413600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posted_by` (`posted_by`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`posted_by`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
