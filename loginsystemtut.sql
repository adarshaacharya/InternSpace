-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 02:10 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystemtut`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `emailusers` varchar(255) NOT NULL,
  `pwdusers` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `uidusers` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `estd` date NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `emailusers`, `pwdusers`, `about`, `uidusers`, `name`, `estd`, `file_name`) VALUES
(7, 'frogy@gmail.com', '$2y$10$xHrdCHAW9ZBx4lkm2BsDEe5jDCrdHxWAktud5UGQvlxgcx06jwPcK', 'Frog Frog', 'LeapFrog', 'Leap Frog', '2019-05-08', 'r44.jpg'),
(8, 'deerwalk@gmail.com', '$2y$10$Lr1NiyYRtIPy6yvSEzP92efssmzcqRNcxWtBUXIvbuX95bJAaUqFS', 'It is an amazing company!', 'Deerwalk', 'Deerwalk', '2019-05-15', '56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `software_engineer`
--

CREATE TABLE `software_engineer` (
  `id` int(6) UNSIGNED NOT NULL,
  `job` varchar(30) NOT NULL,
  `descript` text NOT NULL,
  `requirement` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `salary` int(6) UNSIGNED NOT NULL,
  `deadline` date NOT NULL,
  `vacancy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `software_engineer`
--

INSERT INTO `software_engineer` (`id`, `job`, `descript`, `requirement`, `name`, `salary`, `deadline`, `vacancy`) VALUES
(1, 'JavaScript Engineer', 'E-commerce website with SpringBoot Framework', 'Basic knowledge of Java Programming\r\nKnowledge of OOP\r\n', 'Leapfrog', 0, '2019-05-18', 0),
(2, 'JavaScript Developer', 'Development of a sports web application with node.js', 'JavaScript Programming Language\r\nConcept of OOP\r\nBasic knowledge of Node.js framework\r\nKnowledge of unit-testing', 'Varisk', 5000, '2019-05-18', 0),
(9, 'Django Developer', 'Django Developer', 'BIT running', 'LeapFrog', 12333, '2019-05-12', 0),
(10, 'C++', 'OOP', 'BIT running', 'LeapFrog', 23434, '2019-05-02', 1),
(11, 'Django', 'Django Developer', 'Bachelors running', 'Deerwalk', 30000, '2019-05-16', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `uidusers` tinytext NOT NULL,
  `emailusers` tinytext NOT NULL,
  `pwdusers` longtext NOT NULL,
  `gender` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `uidusers`, `emailusers`, `pwdusers`, `gender`, `file_name`, `cv`) VALUES
(31, 'Suparth', 'suparthnarayanghimire2014@gmail.com', '$2y$10$W8gZ2fnKKLjCogtF65Q3MOS8ITaXG/F00OUjsB1RPd/cWZ3vhh.BS', 'male', 'Photo !.jpg', 'ff.pdf'),
(32, 'Pemba', 'pemba@gmail.com', '$2y$10$vBpytWg.pPbTmg/ipHsgauaZ1H0RWqSbdD8ZDQWrAIyFUaNLZaxaO', 'male', 'rr55.jpg', 'Note.pdf'),
(33, 'Gopal', 'gopal@gmail.com', '$2y$10$xENwTzpf6TpLNNyBRNR/lOc0czW.N8Ex26W1SaMJY0YLxoDdZia3m', 'male', 'Photo !.jpg', 'fff.pdf'),
(34, 'Aadarsha', 'ad@gmail.com', '$2y$10$c/OjiTY28W2NjJiGVz19iu1kR3Uf2/aUIBvSd7TOme.R33LWLgRpC', 'male', '3.jpg', 'fffg.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software_engineer`
--
ALTER TABLE `software_engineer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `software_engineer`
--
ALTER TABLE `software_engineer`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
