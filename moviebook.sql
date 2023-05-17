-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 11:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_movie`
--

CREATE TABLE `add_movie` (
  `id` int(25) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `directer` varchar(100) NOT NULL,
  `release_date` varchar(100) NOT NULL,
  `categroy` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `you_tube_link` varchar(250) NOT NULL,
  `show` varchar(100) NOT NULL,
  `action` varchar(100) NOT NULL,
  `decription` varchar(300) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_movie`
--

INSERT INTO `add_movie` (`id`, `movie_name`, `directer`, `release_date`, `categroy`, `language`, `you_tube_link`, `show`, `action`, `decription`, `image`, `status`) VALUES
(9, 'Ant-Man and the Wasp: Quantumania', 'Peyton Reed\r\n\r\n', '17 February 2023', 'Action', 'English', 'https://www.youtube.com/watch?v=ZlNFpri-Y40', '18:00,21:00', 'upcoming', 'Scott Lang and Hope Van Dyne are dragged into the Quantum Realm, along with Hope\'s parents and Scott\'s daughter Cassie.', 'Ant-man and the wasp quantumania.jpg', 1),
(10, 'Guardians-of-galaxy3', 'James Gunn\r\n\r\n', '5 May 2023', 'Comedy', 'English', 'https://www.youtube.com/watch?v=JqcncLPi9zw', '18:00,21:00', 'running', 'Still reeling from the loss of Gamora, Peter Quill rallies his team to defend the universe and one of their own - a mission that could mean the end of the Guardians if not successful.', 'Guardians-of-galaxy3.jpg', 1),
(11, 'Avatar-2', 'James Cameron', '16 December 2022', 'Science Fiction', 'English', 'https://www.youtube.com/watch?v=d9MyW72ELq0', '21:00', 'running', 'Avatar: The Way of Water reaches new heights and explores undiscovered depths as James Cameron returns to the world of Pandora in this emotionally packed action adventure. \r\n', 'Avatar 2.jpg', 1),
(12, 'Baloch', 'Prakash Janardan Pawar', '5 October 2022', 'Historical', 'Marathi', 'https://www.youtube.com/watch?v=Ri7NZb3qPfk', '21:00', 'running', 'Loosely based on historic events post the Battle of Panipat, \'Baloch\' is about the struggles of the Marathas being transported to Afghanistan as bonded labourers.', 'Baloch.jpg', 1),
(13, 'Maharastara-Shahir', 'Kedar Shinde', '28 April 2023', 'Historical', 'Marathi', 'https://www.youtube.com/watch?v=RD_drMIqFwM', '18:00', 'upcoming', 'Maharashtra Shahir is an Indian Marathi-language musical-biographical film based on the life of Padma Shri Shahir Sable, a Maharashtrian singer, playwright, performer and folk theatre producer and director. It is directed by Kedar Shinde and produced by Sanjay Chhabria and Bela Shinde.', 'Maharashtra_Shahir.jpg', 1),
(14, 'Ved', 'Ritiesh Deshmukh', '30 December 2022', 'Romantic', 'Marathi', 'https://www.youtube.com/watch?v=FY5VHRkrZVc', '18:00,15:15', 'running', '    Ved is a 2022 Indian Marathi-language romantic drama film directed by Riteish Deshmukh, in his directorial debut, and produced by Genelia D\'Souza, both of whom also star. Ashok Saraf and Jiya Shankar play supporting roles.', 'Ved.jpg', 1),
(15, 'Pathaan', 'Siddharth Anand', '25 January 2023', 'Action', 'Hindi', 'https://www.youtube.com/watch?v=vqu4z34wENw', '21:15,03:15', 'running', 'An Indian spy battles against the leader of a gang of mercenaries who have a heinous plot for his homeland.', 'Pathaan..jpg', 1),
(16, 'RRR', 'S. S. Rajamouli', '24 March 2022', 'Action', 'Hindi', 'https://www.youtube.com/watch?v=f_vbAtFSEc0', '21:00,24:00', 'running', 'A fearless revolutionary and an officer in the British force, who once shared a deep bond, decide to join forces and chart out an inspirational path of freedom against the despotic rulers.', 'RRR poster.jpg', 1),
(17, 'Tu Jhoothi Main Makkaar', 'Luv Ranjan', '8 March 2023', 'Romantic', 'Hindi', 'https://www.youtube.com/watch?v=Cx_Dtwn4ayw', '18:00', 'running', 'To earn extra cash, Mickey helps couples break up. However, life gets complicated when he falls for Tinni, a career woman with an independent streak.', 'tu-jhoothi-main-makakar.jpg', 1),
(18, 'The Kashmir Files', 'Vivek Agnihotri ', '11 March 2022', 'Historical', 'Hindi', 'https://www.youtube.com/watch?v=A179apttY58', '15:00', 'running', 'The film presents a fictional storyline centred around the 1990s exodus of Kashmiri Hindus from Indian-administered Kashmir.', 'The_Kashmir_Files_poster.jpg', 1),
(19, 'The Kerala Story\r\n', 'Sudipto Sen', '5 May 2023', 'Drama', 'Hindi', 'https://www.youtube.com/watch?v=14fPOYDFMZE', '18:00', 'running', 'The plot follows the story of a group of women from Kerala who converted to Islam and joined the Islamic State of Iraq and Syria (ISIS). The film has courted controversy for falsely claiming that thousands of women from Kerala were being converted to Islam and recruited into ISIS.', 'The-Kerala-Story.jpg', 1),
(20, 'Raabta', 'Dinesh Vijan', '9 June 2017 ', 'Drama', 'Hindi', 'https://www.youtube.com/watch?v=YXjYfpqg8Z0', '15:00', 'running', 'Shiv and Saira fall in love with each other and soon become inseparable. Their relationship is put to the test when Saira\'s reincarnated lover from her past life returns.', 'raabta.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(1, 'Sakshi', 'Sakshidivate@gmail.com', 'Sakshi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `movie` varchar(100) NOT NULL,
  `show_time` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `totalseat` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `payment_date` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `card_name` varchar(100) NOT NULL,
  `card_number` varchar(25) NOT NULL,
  `ex_date` varchar(100) NOT NULL,
  `cvv` int(5) NOT NULL,
  `custemer_id` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uid`, `movie`, `show_time`, `seat`, `totalseat`, `price`, `payment_date`, `booking_date`, `card_name`, `card_number`, `ex_date`, `cvv`, `custemer_id`) VALUES
(2, 1, 'RRR', '21:00', 'I6,I7,F6,F7', '4', '500', 'Tue-05-23 ', 'Wed-05-23 ', 'Aniket', '9652 4562 4587', '2026-05-05', 986, 1549993315),
(3, 2, 'Guardians-of-galaxy3', '18:00', 'A1,A2,A11,A12', '4', '1200', 'Tue-05-23 ', 'Wed-05-23 ', 'Drashan', '4524 8456 7812', '2025-11-05', 849, 423868375),
(4, 5, 'Baloch', '21:00', 'F5,F6,E5,E6', '4', '600', 'Tue-05-23 ', 'Wed-05-23 ', 'Satal', '4886 4594 3489', '2025-03-29', 320, 1471973136),
(5, 4, 'Pathaan', '21:15', 'F6,F7', '2', '300', 'Tue-05-23 ', 'Wed-05-23 ', 'Harpic', '4578 4546 2426', '2027-10-20', 456, 204633595);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `massage`) VALUES
(1, 'Aniket', 'Anikettiwari@gmail.com', 'Cineflex Theatre is widely use now days.'),
(2, 'Darshan', 'Darshantholiya@gmail.com@gmail.com', 'You can easily book your Tickets anywhere in city .'),
(3, 'Harpic', 'HarpicZambare@gmail.com', 'You easily choose your sheets.'),
(4, 'Sanket', 'Sanketshevare@gmail.com', 'Customer service is very good.');

-- --------------------------------------------------------

--
-- Table structure for table `theater_show`
--

CREATE TABLE `theater_show` (
  `id` int(25) NOT NULL,
  `show` varchar(100) NOT NULL,
  `theater` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theater_show`
--

INSERT INTO `theater_show` (`id`, `show`, `theater`) VALUES
(1, '21:00', '1'),
(2, '15:00', '1'),
(3, '18:00', '1'),
(4, '18:15', '2'),
(5, '15:15', '2'),
(6, '21:15', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `city` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `mobile`, `city`, `password`, `image`) VALUES
(1, 'Aniket', 'Anikettiwari@gmail.com', 942314568, 'Pune', '6969', ''),
(2, 'Darshan', 'Darshantholiya@gmail.com', 942684575, 'Dhule', '786345', ''),
(3, 'Sanket', 'Sanketshevare@gmail.com', 942558799, 'Mumbai', '256969', ''),
(4, 'Harpic', 'HarpicZhambare@gmail.com', 912345678, 'Ohio', '8546', ''),
(5, 'Satal', 'satal@gmail.com', 987456123, 'surat', '123456', 'eye candy wallpapers 6 by deadpxl.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_movie`
--
ALTER TABLE `add_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_show`
--
ALTER TABLE `theater_show`
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
-- AUTO_INCREMENT for table `add_movie`
--
ALTER TABLE `add_movie`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `theater_show`
--
ALTER TABLE `theater_show`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
