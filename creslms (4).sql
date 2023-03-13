-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2023 at 06:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `creslms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcontent`
--

CREATE TABLE `addcontent` (
  `sno` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `modules` varchar(100) NOT NULL,
  `session` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `flipbook` varchar(100) NOT NULL,
  `assessment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcontent`
--

INSERT INTO `addcontent` (`sno`, `department`, `subjectname`, `semester`, `modules`, `session`, `video`, `flipbook`, `assessment`) VALUES
(1, 'MBA', 'ds', '1', '', '1', 'aa', 'aa', 'aa'),
(2, 'MBA', 'java', '2', '', '1', 'xxx', 'xxx', 'xxx'),
(3, 'MCA', 'c', '1', '1', '1', 'xxx', 'xxx', 'xxx'),
(4, 'MCA', 'c++', '2', '2', '2', 'xx', 'xx', 'xx'),
(5, 'MCA', 'c++', '2', '2', '2', 'xx', 'xx', 'xx'),
(6, 'MCA', 'ds', '3', '1', '1', 'xxx', 'xxxx', 'xxx'),
(7, 'MBA', 'hr', '1', '1', '1', 'xxx', 'xxx', 'xxx'),
(8, 'MBA', 'hr', '1', '1', '1', 'xxx', 'xxx', 'xxx');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `registernumber` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `registernumber`, `email`, `password`, `image`) VALUES
(1, 'ad1', 9876, 'ad1@gmail.com', '1234', '640b50b2cf635admin-icon-male-person-profile-avatar-with-gear-vector-25811110.jpg'),
(2, 'ad3', 99, 'ad3@gmail.com', 'ad3', '6405da7991cd7cres7.png'),
(14, 'Rahul', 1999, 'krish299@mail.com', 'rahul1999', '640835ec8b250WhatsApp Image 2023-02-28 at 22.44.41.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `announcement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `department`, `announcement`) VALUES
(1, 'MCA', 'welcome mca students'),
(3, 'MBA', 'welcome mba student'),
(4, 'MBA', 'welcome students'),
(5, 'MCA', 'hiiii');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 0, 'pre'),
(2, 1, 1, 'Hypertext preprocessor'),
(3, 1, 0, 'hypertext'),
(4, 1, 0, 'processor'),
(5, 2, 1, 'php'),
(6, 2, 0, 'ph'),
(7, 2, 0, 'p'),
(8, 2, 0, 'h'),
(34, 3, 1, 'fyn'),
(35, 3, 0, 'no'),
(36, 3, 0, 'nooo'),
(37, 3, 0, 'nooo'),
(38, 4, 1, 'hey'),
(39, 4, 0, 'h'),
(40, 4, 0, 'e'),
(41, 4, 0, 'y'),
(42, 5, 0, 'hhhhh'),
(43, 5, 1, 'a'),
(44, 5, 0, 'b'),
(45, 5, 0, 'c');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `registernumber` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `phonenumber` int(20) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `name`, `registernumber`, `department`, `email`, `password`, `status`, `phonenumber`, `year`) VALUES
(1, 'srini', 4321, 'MCA', 'nivi@gmail.com', '1234', '', 0, ''),
(2, 'faculty1', 0, 'MBA', 'fac@gmail.com', '', '', 2147483647, '2022'),
(3, 'faculty1', 0, 'MBA', 'fac@gmail.com', '', '', 2147483647, '2022'),
(4, 'priya2', 1011, 'MBA', 'priya2@gmail.com', '', '', 2147483647, '2022'),
(6, 'faculty9', 909, 'MBA', 'f9@gmail.com', 'faculty', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `mca`
--

CREATE TABLE `mca` (
  `user` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mca`
--

INSERT INTO `mca` (`user`, `department`, `semester`, `subject`) VALUES
('user', 'MBA', '1', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `subject_id` int(20) DEFAULT NULL,
  `session_id` int(20) DEFAULT NULL,
  `updated_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `video_link`, `subject_id`, `session_id`, `updated_time`) VALUES
(3, 'SESSION 1', 'videoo.mp4', 35, 1, NULL),
(4, 'SESSION 1', 'videoplayback.mp4', 35, 1, NULL),
(5, 'SESSION 1', 'video2.mp4', 35, 1, NULL),
(6, 'SESSION 1', 'video3.mp4', 35, 1, NULL),
(7, 'SESSION 2', 'video3.mp4', 35, 2, NULL),
(8, 'Session 1', 'videoo.mp4', 36, 7, NULL),
(10, 'Session 1', 'videoo.mp4', 37, 11, NULL),
(20, 'session 3', 'videos/WhatsApp Video 2023-03-04 at 16.32.05.mp4', 35, 3, NULL),
(36, '4', 'videos/WhatsApp Video 2023-03-04 at 16.32.05.mp4', 35, 4, NULL),
(37, '4', 'videos/WhatsApp Video 2023-03-01 at 12.18.04 (1).mp4', 35, 4, NULL),
(38, '1', 'videos/WhatsApp Video 2023-03-04 at 16.30.35.mp4', 36, 7, NULL),
(39, '1', 'videos/WhatsApp Video 2023-03-04 at 16.30.35.mp4', 44, 12, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_number`, `text`) VALUES
(1, 1, 'php stands for?'),
(2, 2, 'php Syntax'),
(16, 3, 'how are u'),
(17, 4, 'hey'),
(18, 5, 'hhhhh');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(255) NOT NULL,
  `que` text NOT NULL,
  `option 1` varchar(222) NOT NULL,
  `option 2` varchar(222) NOT NULL,
  `option 3` varchar(222) NOT NULL,
  `option 4` varchar(222) NOT NULL,
  `ans` varchar(222) NOT NULL,
  `userans` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`, `userans`) VALUES
(1, 'What does PHP stand for?', 'Preprocessed Hypertext Page', 'Hypertext Markup Language', 'Hypertext Preprocessor', 'Hypertext Transfer Protocol', 'Hypertext Preprocessor', 'Hypertext Markup Language'),
(2, 'What will be the value of $var? ', '0', '1', '2', 'NULL', '0', '0'),
(3, ' ____________ function in PHP Returns a list of response headers sent (or ready to send)', 'header', 'headers_list', 'header_sent', 'header_send', 'headers_list', 'header'),
(4, 'Which of the following is the Server Side Scripting Language?', 'HTML', 'CSS', 'JS', 'PHP', 'PHP', 'HTML'),
(5, 'From which website you download this source code?', 'Softglobe.net', 'w3school.com', 'technopoints.co.in', 'php.net', 'technopoints.co.in', 'Softglobe.net');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `Id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `video_link` text DEFAULT NULL,
  `ebook_link` text DEFAULT NULL,
  `assessment_link` text DEFAULT NULL,
  `discussion` text DEFAULT NULL,
  `subject_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`Id`, `name`, `video_link`, `ebook_link`, `assessment_link`, `discussion`, `subject_id`) VALUES
(1, 'Session 1', 'xxx', 'https://heyzine.com/flip-book/6201c2f11a.html#page/1', 'https://my.forms.app/form/6401e619f352784965643026', 'xxxxx', 35),
(2, 'Session 2', 'xaxa', 'https://heyzine.com/flip-book/6201c2f11a.html#page/1', 'xaxa', 'aaaa', 35),
(3, 'Session 3', 'xaxa', 'xaxa', 'xaxa', 'aaaa', 35),
(4, 'Session 4', 'xaxa', 'xaxa', 'xaxa', 'aaaa', 35),
(5, 'Session 5', 'xaxa', 'xaxa', 'xaxa', 'xxxx', 35),
(6, 'Session 6', 'xaxa', 'xaxa', 'xaxa', 'xxx', 35),
(7, 'Session 1', 'http://localhost/creslms/ad_video.php', 'xxx', 'xxx', 'xxxx', 36),
(10, 'Session 7', 'xaxa', 'xaxa', 'xaxa', NULL, 35),
(11, 'session 1', 'xxxx', 'xxx', 'xxx', NULL, 37),
(12, 'session 1', 'xxxx', 'xxx', 'xxx', NULL, 44);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(15) NOT NULL,
  `name` varchar(225) NOT NULL,
  `registernumber` int(15) NOT NULL,
  `department` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `phonenumber` int(15) NOT NULL,
  `year` varchar(225) NOT NULL,
  `verify_token` varchar(220) NOT NULL,
  `semester` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `registernumber`, `department`, `email`, `password`, `status`, `phonenumber`, `year`, `verify_token`, `semester`, `image`) VALUES
(1, 'snekha', 103, 'MBA', 'studentcres06@gmail.com', '123456789', '', 0, '', 'ca9ff924d5e17e01d56b4954f328228b', 2, '640b506eb8909male-student-graduation-avatar-profile-vector-12055254.jpg'),
(2, 'nandhini', 81, 'MCA', 'nandhini@gmail.com', '123456789', '', 0, '', '', 1, '640eab936485aimage (1).png'),
(4, 'student1', 10101, 'MCA', 'student1@gmail.com', '123456789', '', 0, '', 'dfbaf9d7efe47f05fc96b6926b8bb5a9', 3, ''),
(5, 'snekha2', 103103, 'MCA', 'sn@gmail.com', '123456789', '', 0, '', '', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_code` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `semester` int(10) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `department` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `video_content` varchar(255) DEFAULT NULL,
  `flip_book` varchar(255) DEFAULT NULL,
  `assessment` varchar(255) DEFAULT NULL,
  `subject_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `course_code`, `description`, `semester`, `created_date`, `department`, `session`, `video_content`, `flip_book`, `assessment`, `subject_image`) VALUES
(35, 'Mathematical foundation for Computer applications\r\n', 'MAD 6188', 'Maths subject \r\n', 1, '2023-02-20 06:54:27', 'MCA', '1', 'xxx', 'xxx', 'xxx', 'maths.jpeg'),
(36, 'Computer Organization and Operating system', 'CAD6121', NULL, 1, '2023-02-20 06:55:29', 'MCA', '1', 'xxx', 'xxx', 'xxxx', 'coos.jpg'),
(37, 'Database Management \r\nSystems', 'CAD 6122', NULL, 1, '2023-02-20 06:56:58', 'MCA', '1', 'xxx', 'xxx', 'xxx', 'DBMS.png'),
(38, 'Computer\r\nNetworks', 'CAD 6123', NULL, 1, '2023-02-20 06:58:37', 'MCA', '1', 'xxx', 'xxx', 'xxx', 'computer-networking.jpg'),
(39, 'Data Structure', 'CAD 6124', NULL, 1, '2023-02-20 06:59:47', 'MCA', '1', 'xxx', 'xxx', 'xxx', 'ds.jpg'),
(40, 'C prog', 'CAD 6127', 'coos subject', 4, '2023-02-20 07:01:17', 'MCA', '1', 'xxx', 'xxx', 'xxx', ''),
(42, 'java 2', 'C1111', 'java subject', 3, '2023-02-20 12:02:50', 'MCA', '1', 'xxx', 'xxx', 'xxx', ''),
(44, 'HR', 'C0077', NULL, 1, '2023-03-06 05:15:40', 'MBA', '1', 'xxx', 'xxx', 'xxx', ''),
(45, 'python', '1111', NULL, 2, '2023-03-07 07:29:44', 'MCA', '1', 'xxx', 'xxxx', 'xxxx', ''),
(46, '', '', NULL, 0, '2023-03-11 05:24:02', 'MBA', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`user_id`, `username`, `password`) VALUES
(1, 'admin1', '1234'),
(2, 'admin2', '5678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcontent`
--
ALTER TABLE `addcontent`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcontent`
--
ALTER TABLE `addcontent`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
