-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2019 at 09:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toprankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answertbl`
--

CREATE TABLE `answertbl` (
  `answer_id` int(11) NOT NULL,
  `exam_no` varchar(225) NOT NULL,
  `q_id` varchar(225) NOT NULL,
  `stud_id` varchar(225) NOT NULL,
  `final_ans` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answertbl`
--

INSERT INTO `answertbl` (`answer_id`, `exam_no`, `q_id`, `stud_id`, `final_ans`) VALUES
(18, '2019-35589872', '7', '2019-student', 'b'),
(19, '2019-35589872', '9', '2019-student', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `program` varchar(255) NOT NULL,
  `block_name` varchar(225) NOT NULL,
  `slots` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `lecturer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`block_id`, `program`, `block_name`, `slots`, `year`, `lecturer`) VALUES
(4, 'Criminology', 'Block 1', '50', '2019-season1', 'Tran, Ming Nhat'),
(5, 'Criminology', 'block 2', '30', '2019-season1', 'Tran, Ming Nhat'),
(6, 'Rad Tech', 'Block1', '30', '2019-season1', 'Tran, Ming Nhat'),
(7, 'Information Technology', 'test', '10', '2019-season1', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `emptbl`
--

CREATE TABLE `emptbl` (
  `emp_id` int(11) NOT NULL,
  `e_id` varchar(225) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `emp_bday` varchar(225) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `telphone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emptbl`
--

INSERT INTO `emptbl` (`emp_id`, `e_id`, `fname`, `mname`, `lname`, `emp_bday`, `address`, `gender`, `telphone`, `password`, `position`) VALUES
(2, 'admin', 'asdasd', 'asd', 'asd', '2019-02-15', 'asdasdasdas', 'Female', '231312321', 'YWRtaW4=', 'admin'),
(3, '2019-lecturer', 'dsadsad', 'asddasdasdasas', 'dsadsadsa', '2019-08-09', 'asdasdasd', 'Female', '23213123213', 'bGVjdHVyZXI=', 'lecturer'),
(4, '2019-student', 'sdasdasdasdas', 'sdaasdasd', 'asdasdasdasd', '2019-02-21', 'asdsadasd', 'Female', '23213213', 'c3R1ZGVudA==', 'student'),
(5, '2019-99786486', 'rose', 'mary', 'tran', '2019-02-15', 'manila', 'Female', '231312312321312', 'dHJhbg==', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `enrolltbl`
--

CREATE TABLE `enrolltbl` (
  `enroll_id` int(11) NOT NULL,
  `enroll_date` varchar(255) NOT NULL,
  `datee` date NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `program` varchar(225) NOT NULL,
  `block_id` varchar(255) NOT NULL,
  `tuition` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolltbl`
--

INSERT INTO `enrolltbl` (`enroll_id`, `enroll_date`, `datee`, `student_number`, `program`, `block_id`, `tuition`) VALUES
(7, '2019-season1', '0000-00-00', '2019-5855', 'Information Technology', '7', '1.00'),
(8, '2019-season1', '0000-00-00', '2019-4254', 'Information Technology', '7', '1.00'),
(9, '2019-season1', '2019-04-04', '2019-student', 'Criminology', '5', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `evaltbl`
--

CREATE TABLE `evaltbl` (
  `eval_id` int(11) NOT NULL,
  `stud_no` varchar(255) NOT NULL,
  `exam_no` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `a1` varchar(225) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a4` varchar(255) NOT NULL,
  `a5` varchar(255) NOT NULL,
  `a6` varchar(255) NOT NULL,
  `a7` varchar(255) NOT NULL,
  `a8` varchar(255) NOT NULL,
  `a9` varchar(255) NOT NULL,
  `a10` varchar(255) NOT NULL,
  `a11` varchar(255) NOT NULL,
  `a12` varchar(255) NOT NULL,
  `a13` varchar(255) NOT NULL,
  `a14` varchar(255) NOT NULL,
  `a15` varchar(255) NOT NULL,
  `a16` varchar(255) NOT NULL,
  `a17` varchar(255) NOT NULL,
  `a18` varchar(255) NOT NULL,
  `a19` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaltbl`
--

INSERT INTO `evaltbl` (`eval_id`, `stud_no`, `exam_no`, `active`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `a11`, `a12`, `a13`, `a14`, `a15`, `a16`, `a17`, `a18`, `a19`, `comment`) VALUES
(16, '2019-student', '2019-35589872', '2019-season1', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', '2', '3', 'zczxczxbdjskdbhsdsa\r\ndas\r\nd\r\nsad\r\nasd\r\nas\r\ndasldjkashdklasjkdljaskldjlaskjdlkajslkdjaslkda'),
(19, '2019-student', '2019-35474353', '2019-season1', '4', '3', '3', '3', '3', '3', '3', '3', '4', '4', '4', '4', '3', '4', '3', '3', '3', '3', '3', '');

-- --------------------------------------------------------

--
-- Table structure for table `examtbl`
--

CREATE TABLE `examtbl` (
  `exam_id` int(11) NOT NULL,
  `exam_no` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(225) NOT NULL,
  `a` varchar(225) NOT NULL,
  `b` varchar(255) NOT NULL,
  `c` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examtbl`
--

INSERT INTO `examtbl` (`exam_id`, `exam_no`, `question`, `answer`, `a`, `b`, `c`, `points`) VALUES
(1, '2019-65767715', '2-2', 'c', '1', '2', '0', '1'),
(2, '2019-65767715', '12-1', 'a', '11', '161', '1', '1'),
(3, '2019-35474353', 'who is tran?', 'a', 'weak', 'noob', 'shit', '1'),
(4, '2019-54396675', 'test', 'b', 'test1', 'test2', 'test3', '1'),
(6, '2019-54396675', 'assa', 'c', 'apsa', 'tiger', 'toprank', '1'),
(7, '2019-35589872', 'how many power ranger in original', 'a', '5', '4', '3', '1'),
(9, '2019-35589872', 'what is the color of pikachu', 'c', 'red', 'blue', 'yellow', '1');

-- --------------------------------------------------------

--
-- Table structure for table `lexamtb`
--

CREATE TABLE `lexamtb` (
  `lexamtbl_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `program` varchar(225) NOT NULL,
  `exam_no` varchar(255) NOT NULL,
  `actyear` varchar(225) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lexamtb`
--

INSERT INTO `lexamtb` (`lexamtbl_id`, `exam_name`, `program`, `exam_no`, `actyear`, `status`) VALUES
(8, 'quiz 1 ', 'Criminology', '2019-35474353', '2019-season1', '1'),
(9, 'quiz 1 ', 'Nurse', '2019-54396675', '2019-season1', '0'),
(10, 'quiz 1 ', 'Information Technology', '2019-41429791', '2019-season1', '0'),
(11, 'quiz 1 ', 'Business Administrator', '2019-29292472', '2019-season1', '0'),
(12, 'quiz 1 ', 'Rad Tech', '2019-62842523', '2019-season1', '0'),
(13, 'test2 ', 'Criminology', '2019-35589872', '2019-season1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `logtbl`
--

CREATE TABLE `logtbl` (
  `log_id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logtbl`
--

INSERT INTO `logtbl` (`log_id`, `user`, `pass`, `position`) VALUES
(4, 'admin', 'YWRtaW4=', 'admin'),
(5, '2019-student', 'c3R1ZGVudA==', 'student'),
(6, '2019-lecturer', 'bGVjdHVyZXI=', 'lecturer'),
(7, '2019-4254', 'dHJhbg==', 'student'),
(9, '2019-99786486', 'dHJhbg==', 'lecturer'),
(10, '2019-5855', 'c3R1ZGVudA==', 'student'),
(11, '2019-3426', '', 'student'),
(12, '2019-8127', '', 'student'),
(13, '2019-3248', 'MjAxOS0zMjQ4', 'student'),
(14, '2019-9149', 'MTExMTE=', 'student'),
(15, '2019-5526', 'NTU1', 'student'),
(16, '2019-9263', 'MTEx', 'student'),
(17, '2019-7597', 'MjIy', 'student'),
(18, '2019-7939', 'OTk5', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `programtbl`
--

CREATE TABLE `programtbl` (
  `program_id` int(11) NOT NULL,
  `program_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programtbl`
--

INSERT INTO `programtbl` (`program_id`, `program_name`) VALUES
(1, 'Nurse'),
(2, 'Criminology'),
(4, 'Information Technology'),
(5, 'Business Administrator'),
(6, 'Rad Tech');

-- --------------------------------------------------------

--
-- Table structure for table `reporttbl`
--

CREATE TABLE `reporttbl` (
  `report_id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `stud_no` varchar(255) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `stud_id` int(11) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Suffix` varchar(255) NOT NULL,
  `Nickname` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `EnrolledSchool` varchar(255) NOT NULL,
  `Program` varchar(225) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Package` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `GuardianName` varchar(255) NOT NULL,
  `GContactNumber` varchar(255) NOT NULL,
  `Relationship` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`stud_id`, `student_number`, `FirstName`, `MiddleName`, `LastName`, `Suffix`, `Nickname`, `Address`, `EnrolledSchool`, `Program`, `Status`, `Package`, `Gender`, `ContactNumber`, `GuardianName`, `GContactNumber`, `Relationship`, `Password`, `balance`) VALUES
(1, '2019-student', 'Erick', 'M', 'N', '', '', 'Manila', 'enrolledschool', 'Criminology', '', '', 'male', '', '', '652981905606', '', 'c3R1ZGVudA==', '182.00'),
(15, '2019-4254', 'rose', 'mary', 'tran', '', '', 'manila', 'informatics', 'Information Technology', '', '', 'Female', '', '', '02020202', '', 'dHJhbg==', '99.00'),
(16, '2019-5855', 'test1', 'test1', 'test1', '', '', 'test1', 'test1', 'Information Technology', '', '', 'Male', '', '', '212131', '', 'c3R1ZGVudA==', '99.00'),
(17, '2019-8127', 'Educ', 'Rizal', 'Jose', 'Jr', '', 'Manila', 'UE', 'Rad Tech', 'FirstTake', 'FirstTake', 'Male', '', '', 'Father', '', '', '0.00'),
(18, '2019-3248', 'Nadine', 'Na', 'Na', 'Jr', '', 'Manila', 'UE', 'Business Administrator', 'FirstTake', 'Retake', 'Female', '', '', 'Mother', '', 'MjAxOS0zMjQ4', '0.00'),
(19, '2019-9149', 'Ruroni', 'Ken', 'Kenshin', 'Jr', '', 'Japan', 'Tokyo Uni', 'Rad Tech', 'FirstTake', 'Retake', 'Male', '', '', 'Mom', '', 'MTExMTE=', '0.00'),
(20, '2019-5526', 'AAAA', 'BBB', 'CCC', 'Jr', 'ABC', 'Manila', 'UE', 'Nurse', 'FirstTake', 'FirstTake', 'Male', '', '', 'father', '', 'NTU1', '0.00'),
(21, '2019-9263', 'Donal', 'Dol', 'Trump', '', 'Donalboy', 'New York', 'Havard', 'Rad Tech', 'FirstTake', 'FirstTake', 'Male', '090981021', 'Daddy', '0909556541650', 'father', 'MTEx', '0.00'),
(22, '2019-7597', 'Steve', 'SJ', 'Jobs', '', 'Apple', 'New York', 'Havard', 'Rad Tech', 'FirstTake', 'FirstTake', 'Male', '09091926', 'Daddy', '099992566', 'father', 'MjIy', '0.00'),
(23, '2019-7939', 'wda', 'wfad', 'wfad', '', 'wdwdddd', 'acssc', 'sacasc', 'Criminology', 'FirstTake', 'Intensive', 'Male', '111112112', 'adwd', '112212', 'father', 'OTk5', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `timetbl`
--

CREATE TABLE `timetbl` (
  `timer_id` int(11) NOT NULL,
  `exam_id` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetbl`
--

INSERT INTO `timetbl` (`timer_id`, `exam_id`, `duration`) VALUES
(3, '2019-54396675', '1'),
(5, '2019-62842523', '3'),
(7, '2019-35474353', '60'),
(8, '2019-35589872', '1');

-- --------------------------------------------------------

--
-- Table structure for table `transactiontbl`
--

CREATE TABLE `transactiontbl` (
  `trans_id` int(11) NOT NULL,
  `stud_id` varchar(225) NOT NULL,
  `description` varchar(255) NOT NULL,
  `receipt` varchar(225) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `trans_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactiontbl`
--

INSERT INTO `transactiontbl` (`trans_id`, `stud_id`, `description`, `receipt`, `amount`, `trans_date`) VALUES
(14, '2019-student', 'Down payment', 'cfdghg', '9.00', '2019-04-03'),
(15, '2019-student', 'Down payment', '1', '1.00', '2019-04-03'),
(16, '2019-student', 'Down payment', 'd21', '2.00', '2019-04-03'),
(17, '2019-student', 'Down payment', 'fgfgrf', '5.00', '2019-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `yeartbl`
--

CREATE TABLE `yeartbl` (
  `year_id` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yeartbl`
--

INSERT INTO `yeartbl` (`year_id`, `year`, `status`) VALUES
(10, '2019-season1', '1'),
(11, '2019-season2', '0'),
(12, '2019-season3', '0'),
(13, '2019-season4', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answertbl`
--
ALTER TABLE `answertbl`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `emptbl`
--
ALTER TABLE `emptbl`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `enrolltbl`
--
ALTER TABLE `enrolltbl`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `evaltbl`
--
ALTER TABLE `evaltbl`
  ADD PRIMARY KEY (`eval_id`);

--
-- Indexes for table `examtbl`
--
ALTER TABLE `examtbl`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `lexamtb`
--
ALTER TABLE `lexamtb`
  ADD PRIMARY KEY (`lexamtbl_id`);

--
-- Indexes for table `logtbl`
--
ALTER TABLE `logtbl`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `programtbl`
--
ALTER TABLE `programtbl`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `studenttbl`
--
ALTER TABLE `studenttbl`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `timetbl`
--
ALTER TABLE `timetbl`
  ADD PRIMARY KEY (`timer_id`);

--
-- Indexes for table `transactiontbl`
--
ALTER TABLE `transactiontbl`
  ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `yeartbl`
--
ALTER TABLE `yeartbl`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answertbl`
--
ALTER TABLE `answertbl`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `emptbl`
--
ALTER TABLE `emptbl`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enrolltbl`
--
ALTER TABLE `enrolltbl`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `evaltbl`
--
ALTER TABLE `evaltbl`
  MODIFY `eval_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `examtbl`
--
ALTER TABLE `examtbl`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lexamtb`
--
ALTER TABLE `lexamtb`
  MODIFY `lexamtbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logtbl`
--
ALTER TABLE `logtbl`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `programtbl`
--
ALTER TABLE `programtbl`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `timetbl`
--
ALTER TABLE `timetbl`
  MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactiontbl`
--
ALTER TABLE `transactiontbl`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `yeartbl`
--
ALTER TABLE `yeartbl`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
