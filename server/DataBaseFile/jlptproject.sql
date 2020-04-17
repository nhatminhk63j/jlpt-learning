-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 07:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jlptproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `CodeExam` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`CodeExam`, `Level`) VALUES
('12234234', 'N3'),
('11556', 'N4');

-- --------------------------------------------------------

--
-- Table structure for table `grammar`
--

CREATE TABLE `grammar` (
  `id` int(11) NOT NULL,
  `CodeExam` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `Level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grammar`
--

INSERT INTO `grammar` (`id`, `CodeExam`, `content`, `Level`) VALUES
(44, '12234234', '1236548', 'N3'),
(45, '11556', 'aaaaaaaaâ', 'N4');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`name`) VALUES
('N1'),
('N2'),
('N3'),
('N4'),
('N5');

-- --------------------------------------------------------

--
-- Table structure for table `listenning`
--

CREATE TABLE `listenning` (
  `id` int(11) NOT NULL,
  `CodeExam` varchar(255) NOT NULL,
  `filename` text NOT NULL,
  `content` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `Level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questiongrammar`
--

CREATE TABLE `questiongrammar` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `answerA` varchar(255) NOT NULL,
  `answerB` varchar(255) NOT NULL,
  `answerC` varchar(255) NOT NULL,
  `answerD` varchar(255) NOT NULL,
  `answerTrue` varchar(255) NOT NULL,
  `idGrammar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questiongrammar`
--

INSERT INTO `questiongrammar` (`id`, `title`, `answerA`, `answerB`, `answerC`, `answerD`, `answerTrue`, `idGrammar`) VALUES
(11, 'Hello Nhật', 'Nhật có đang xem cái này không', 'Hay lại là thằng Hào lz', 'Hào êy Lên Hà Lội chưa', 'Nhà đang bẩn lắm lên dọn đi', 'C', 44),
(12, 'Lên dọn nhà nào', 'Huy ăn cứt', 'Cứt ăn Huy', 'Đây là đáp án của thằng Huy', 'Sao thằng Hào lại nhẩy vào đọc', 'A', 44),
(13, 'Có phải mình đang ở đây không', 'Làm gì để có người yêu đây', 'Nhật có người yêu cả rồi', 'Sao mình vẫn chưa có người yêu', 'Mình không thể như HUy Đc', 'A', 44),
(14, 'Bạn ơi,', 'Bạn đnag làm gì thế', 'Có đang đi ỉa không', 'oôtke', 'Hêlo', 'A', 44);

-- --------------------------------------------------------

--
-- Table structure for table `questionlistening`
--

CREATE TABLE `questionlistening` (
  `id` int(11) NOT NULL,
  `titile` text NOT NULL,
  `answerA` varchar(255) NOT NULL,
  `answerB` varchar(255) NOT NULL,
  `answerC` varchar(255) NOT NULL,
  `answerD` varchar(255) NOT NULL,
  `answerTrue` varchar(255) NOT NULL,
  `idListening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questionreading`
--

CREATE TABLE `questionreading` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `answerA` varchar(255) NOT NULL,
  `answerB` varchar(255) NOT NULL,
  `answerC` varchar(255) NOT NULL,
  `answerD` varchar(255) NOT NULL,
  `answerTrue` varchar(255) NOT NULL,
  `idReading` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reading`
--

CREATE TABLE `reading` (
  `id` int(11) NOT NULL,
  `CodeExam` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `Level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `typeexam`
--

CREATE TABLE `typeexam` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `typeexam`
--

INSERT INTO `typeexam` (`id`, `name`) VALUES
(1, 'Reading'),
(2, 'Grammar'),
(3, 'Listenning');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`CodeExam`),
  ADD KEY `Level` (`Level`) USING BTREE;

--
-- Indexes for table `grammar`
--
ALTER TABLE `grammar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levelG` (`Level`),
  ADD KEY `CodeExam` (`CodeExam`) USING BTREE;

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `listenning`
--
ALTER TABLE `listenning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `LevelL` (`Level`) USING BTREE,
  ADD KEY `codex` (`CodeExam`);

--
-- Indexes for table `questiongrammar`
--
ALTER TABLE `questiongrammar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idG` (`idGrammar`);

--
-- Indexes for table `questionlistening`
--
ALTER TABLE `questionlistening`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idlisten` (`idListening`);

--
-- Indexes for table `questionreading`
--
ALTER TABLE `questionreading`
  ADD PRIMARY KEY (`id`),
  ADD KEY `igRead` (`idReading`);

--
-- Indexes for table `reading`
--
ALTER TABLE `reading`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levelR` (`Level`),
  ADD KEY `codeR` (`CodeExam`);

--
-- Indexes for table `typeexam`
--
ALTER TABLE `typeexam`
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
-- AUTO_INCREMENT for table `grammar`
--
ALTER TABLE `grammar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `listenning`
--
ALTER TABLE `listenning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `questiongrammar`
--
ALTER TABLE `questiongrammar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `questionlistening`
--
ALTER TABLE `questionlistening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questionreading`
--
ALTER TABLE `questionreading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reading`
--
ALTER TABLE `reading`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `typeexam`
--
ALTER TABLE `typeexam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `Level` FOREIGN KEY (`Level`) REFERENCES `level` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grammar`
--
ALTER TABLE `grammar`
  ADD CONSTRAINT `CodeExam` FOREIGN KEY (`CodeExam`) REFERENCES `exam` (`CodeExam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levelG` FOREIGN KEY (`Level`) REFERENCES `exam` (`Level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listenning`
--
ALTER TABLE `listenning`
  ADD CONSTRAINT `codex` FOREIGN KEY (`CodeExam`) REFERENCES `exam` (`CodeExam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idlevel` FOREIGN KEY (`Level`) REFERENCES `exam` (`Level`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questiongrammar`
--
ALTER TABLE `questiongrammar`
  ADD CONSTRAINT `idG` FOREIGN KEY (`idGrammar`) REFERENCES `grammar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionlistening`
--
ALTER TABLE `questionlistening`
  ADD CONSTRAINT `idlisten` FOREIGN KEY (`idListening`) REFERENCES `listenning` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questionreading`
--
ALTER TABLE `questionreading`
  ADD CONSTRAINT `igRead` FOREIGN KEY (`idReading`) REFERENCES `reading` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reading`
--
ALTER TABLE `reading`
  ADD CONSTRAINT `codeR` FOREIGN KEY (`CodeExam`) REFERENCES `exam` (`CodeExam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `levelR` FOREIGN KEY (`Level`) REFERENCES `exam` (`Level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
