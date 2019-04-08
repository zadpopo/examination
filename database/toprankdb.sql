-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 03:39 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
(1, '2019-65767715', '1', '2019-student', 'b'),
(2, '2019-65767715', '2', '2019-student', 'a'),
(3, '2019-35474353', '3', '2019-student', 'c');

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
  `student_number` varchar(255) NOT NULL,
  `block_id` varchar(255) NOT NULL,
  `tuition` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolltbl`
--

INSERT INTO `enrolltbl` (`enroll_id`, `enroll_date`, `student_number`, `block_id`, `tuition`) VALUES
(2, '2019-season1', '2019-student', '5', '500.00'),
(3, '2019-season1', '2019-4254', '7', '1.00');

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
(6, '2019-54396675', 'assa', 'c', 'apsa', 'tiger', 'toprank', '1');

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
(12, 'quiz 1 ', 'Rad Tech', '2019-62842523', '2019-season1', '0');

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
(10, '2019-5855', 'c3R1ZGVudA==', 'student');

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
-- Table structure for table `studenttbl`
--

CREATE TABLE `studenttbl` (
  `stud_id` int(11) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `MiddleName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `EnrolledSchool` varchar(255) NOT NULL,
  `Program` varchar(225) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `TelPhone` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `balance` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`stud_id`, `student_number`, `FirstName`, `MiddleName`, `LastName`, `Address`, `EnrolledSchool`, `Program`, `Gender`, `TelPhone`, `Password`, `balance`) VALUES
(1, '2019-student', 'Erick', 'M', 'N', 'Manila', 'enrolledschool', 'Criminology', 'male', '652981905606', 'c3R1ZGVudA==', '489.00'),
(15, '2019-4254', 'rose', 'mary', 'tran', 'manila', 'informatics', 'Information Technology', 'Female', '02020202', 'dHJhbg==', '0.00'),
(16, '2019-5855', 'test1', 'test1', 'test1', 'test1', 'test1', 'Information Technology', 'Male', '212131', 'c3R1ZGVudA==', '0.00');

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
(2, '', '30');

-- --------------------------------------------------------

--
-- Table structure for table `transactiontbl`
--

CREATE TABLE `transactiontbl` (
  `trans_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `receipt` varchar(225) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `trans_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactiontbl`
--

INSERT INTO `transactiontbl` (`trans_id`, `description`, `receipt`, `amount`, `trans_date`) VALUES
(2, 'Down payment', '1', '1.00', '2019-03-21 00:00:00'),
(9, 'Full payment', '2', '2.00', '2019-03-21 00:00:00'),
(10, 'Full payment', '23d', '2.00', '2019-03-21 00:00:00'),
(11, 'Down payment', 'dsdasda', '1.00', '2019-03-25 00:00:00');

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `examtbl`
--
ALTER TABLE `examtbl`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lexamtb`
--
ALTER TABLE `lexamtb`
  MODIFY `lexamtbl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `logtbl`
--
ALTER TABLE `logtbl`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `programtbl`
--
ALTER TABLE `programtbl`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studenttbl`
--
ALTER TABLE `studenttbl`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `timetbl`
--
ALTER TABLE `timetbl`
  MODIFY `timer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transactiontbl`
--
ALTER TABLE `transactiontbl`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `yeartbl`
--
ALTER TABLE `yeartbl`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
