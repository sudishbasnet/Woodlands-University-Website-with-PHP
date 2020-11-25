-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 03:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities_tb`
--

CREATE TABLE `activities_tb` (
  `activity_id` int(11) NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `activity_description` varchar(255) NOT NULL,
  `activity_file` varchar(255) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activities_tb`
--

INSERT INTO `activities_tb` (`activity_id`, `activity_name`, `activity_description`, `activity_file`, `module_id`) VALUES
(1, 'First Activty For This Module', 'This is the file for the purpose of testing followed by First exxercise presentation description', 'Activity 1', 11),
(2, 'Second Activity For This Module', 'This is the second activity for group from the universityThis is the first activity for group from the universityThis is the first activity for group from the university', 'Activity 2', 11);

-- --------------------------------------------------------

--
-- Table structure for table `admission_tb`
--

CREATE TABLE `admission_tb` (
  `admission_id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `course_assign` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` char(1) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `parent_contact` varchar(255) NOT NULL,
  `father_email` varchar(255) NOT NULL,
  `year_assign` int(11) NOT NULL,
  `reason_for_dormant` varchar(255) NOT NULL,
  `record_status` varchar(255) NOT NULL,
  `letter_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_tb`
--

INSERT INTO `admission_tb` (`admission_id`, `username`, `first_name`, `middle_name`, `surname`, `email`, `address`, `phone_number`, `course_assign`, `date_of_birth`, `gender`, `father_name`, `mother_name`, `parent_contact`, `father_email`, `year_assign`, `reason_for_dormant`, `record_status`, `letter_status`) VALUES
(20120100, 0, 'Julie', '', 'Calvert ', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'live', 'unconditional'),
(20120102, 0, 'Matthew', '', 'Whitworth', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'live', 'conditional'),
(20120103, 0, 'Lalita', '', 'Hunt', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'live', 'conditional'),
(20120104, 0, 'Michael', '', 'Su', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'live', 'conditional'),
(20120111, 0, 'Michael', '', 'Osborne', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'live', 'unconditional'),
(20120115, 0, 'Peter', '', 'Gornall', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'live', 'unconditional'),
(20120118, 0, 'Oliver', '', 'Halstead', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'live', 'unconditional'),
(20120121, 0, 'Mandeep', '', 'Brazell', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'live', 'conditional'),
(20120129, 0, 'Kapil', '', 'Wells', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120135, 0, 'Matthew', '', 'Beeby', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120139, 0, 'Matthew', '', 'Stryjek', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120140, 0, 'Laura', '', 'Clark', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120142, 0, 'Michelle', '', 'Christie', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120153, 0, 'Matthew', '', 'Ghunowa', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120154, 0, 'Miles', '', 'Broughton', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120163, 0, 'Michael', '', 'Behagg', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120167, 0, 'Mark', '', 'Kamuzonde', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120168, 0, 'Mark', '', 'Goss', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120171, 0, 'Mario', '', 'Gregson', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120173, 0, 'Laura', '', 'Early', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120174, 0, 'Kirsty', '', 'Early', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120179, 0, 'Julia', '', 'Chari', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120181, 0, 'Julia', '', 'Brazell', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120183, 0, 'John', '', 'Clark', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120186, 0, 'Paul', '', 'Bari', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120188, 0, 'John', '', 'Calvert ', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120193, 0, 'Michael', '', 'Barrett', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120197, 0, 'Laura', '', 'Woolston', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120206, 0, 'Paul', '', 'Neal', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120209, 0, 'Michael', '', 'Mathias', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120210, 0, 'Michael', '', 'Redmond', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120215, 0, 'Kapil', '', 'Wood', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120216, 0, 'Michael', '', 'Bradley', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120221, 0, 'Mario', '', 'Abdillah', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120223, 0, 'Michael', '', 'Broughton', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120224, 0, 'Melissa', '', 'Lee', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120227, 0, 'Peter', '', 'Vinitchaikul', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120230, 0, 'Lukman', '', 'Mcgregor', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120232, 0, 'Matthew', '', 'Patel', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120236, 0, 'Nassir', '', 'Begum', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120237, 0, 'Micheal', '', 'Macdonald', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120244, 0, 'Justin', '', 'Brown', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120249, 0, 'Matthew', '', 'Norman', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120250, 0, 'Michelle', '', 'Baban', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120254, 0, 'Mohammad', '', 'Albert', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120267, 0, 'Julie', '', 'Beeby', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120270, 0, 'Kenny', '', 'Ahmed', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120271, 0, 'Kieran', '', 'Abdillah', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120275, 0, 'Laura', '', 'Wood', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120278, 0, 'Lalita', '', 'Sonagara', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120285, 0, 'Luke', '', 'Lloyd', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120287, 0, 'Mathew', '', 'Barrios', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120292, 0, 'Matthew', '', 'Patel', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120299, 0, 'Michael', '', 'Horton', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120300, 0, 'Michael', '', 'Lee', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120301, 0, 'Michael', '', 'Vartanian', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120303, 0, 'Michael', '', 'Ricci', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120306, 0, 'Michael', '', 'Miller', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120310, 0, 'Marie', '', 'Cox', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120312, 0, 'Mark', '', 'Collis', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120316, 0, 'Kai', '', 'Bradley', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120317, 0, 'Justin', '', 'Barrett', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120321, 0, 'Paul', '', 'James', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120323, 0, 'Oliver', '', 'Muna', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120327, 0, 'Kevin', '', 'Vokes', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120332, 0, 'Kieran', '', 'Broughton', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120342, 0, 'Peter', '', 'Bevins', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120347, 0, 'Melissa', '', 'Walia', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120352, 0, 'Mark', '', 'Wright', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120355, 0, 'Mathew', '', 'Harwood', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120357, 0, 'Michael', '', 'Porter', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120359, 0, 'Kevin', '', 'Thomas', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120361, 0, 'Luke', '', 'Miller', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120363, 0, 'Mohammad', '', 'Horne', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120366, 0, 'Paul', '', 'Knight', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120367, 0, 'Marie', '', 'Shen', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120368, 0, 'Mandeep', '', 'Barnes', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120369, 0, 'Matthew', '', 'Chinner', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120370, 0, 'Micheal', '', 'Chong', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120371, 0, 'Miao miao', '', 'Zheng', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120380, 0, 'Lukman', '', 'Zheng', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 2, '', 'provisional', 'conditional'),
(20120381, 0, 'Kenny', '', 'Christie', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 2, '', 'provisional', 'conditional'),
(20120383, 0, 'Kai', '', 'Baban', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 2, '', 'provisional', 'unconditional'),
(20120385, 0, 'Nassir', '', 'Caudle', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 2, '', 'provisional', 'unconditional'),
(20120394, 0, 'Kirsty', '', 'Halstead', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 2, '', 'provisional', 'unconditional'),
(20130106, 0, 'Christopher', '', 'Edwards', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'live', 'unconditional'),
(20130107, 0, 'Graham', '', 'Vinitchaikul', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'live', 'conditional'),
(20130113, 0, 'Asad', '', 'Cox', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'live', 'conditional'),
(20130116, 0, 'Andrew', '', 'Carpenter ', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'live', 'conditional'),
(20130117, 0, 'Alexander', '', 'Begum', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'live', 'unconditional'),
(20130119, 0, 'Adam', '', 'Stevenson', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'live', 'unconditional'),
(20130122, 0, 'Benjamin', '', 'Corke', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'live', 'unconditional'),
(20130124, 0, 'Andrew', '', 'Brown', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'live', 'conditional'),
(20130127, 0, 'David', '', 'O\'toole', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'live', 'conditional'),
(20130128, 0, 'Darren', '', 'Mathoo', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'live', 'conditional'),
(20130130, 0, 'Adam', '', 'Wright', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'live', 'unconditional'),
(20130132, 0, 'Andrew', '', 'Bonney', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130133, 0, 'Japhet', '', 'Horton', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130134, 0, 'Anesley', '', 'Bowers', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130136, 0, 'Francisco', '', 'Ruffell', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130137, 0, 'Benjamin', '', 'Dempster', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130138, 0, 'Daniel', '', 'Girdlestone', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130141, 0, 'Ian', '', 'Riggs', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130143, 0, 'Hiren', '', 'Stevens', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130144, 0, 'Benjamin', '', 'Dzialoszynski', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130145, 0, 'Jaskarn', '', 'Davies', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130148, 0, 'Brul', '', 'Ghunowa', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130149, 0, 'Daniel', '', 'Howard', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130150, 0, 'Darren', '', 'Nichols', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130151, 0, 'Darren', '', 'Johal', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130155, 0, 'Gavin', '', 'Stevenson', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130156, 0, 'Graham', '', 'Ruffell', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130160, 0, 'Graham', '', 'Wise', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130161, 0, 'Graham', '', 'Seth', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130164, 0, 'Gary', '', 'O\'toole', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130165, 0, 'Dhunny', '', 'Neech', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130169, 0, 'David', '', 'Pell', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130170, 0, 'Daryll', '', 'Norman', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130172, 0, 'Daniel', '', 'Hayle', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130175, 0, 'Christopher', '', 'Dodd', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130178, 0, 'Ben ', '', 'Edwards', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130180, 0, 'Audrey', '', 'Chaggar', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130182, 0, 'Asad', '', 'Crawley', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130187, 0, 'Ian', '', 'Shen', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130189, 0, 'Christopher', '', 'Guven', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130190, 0, 'Brul', '', 'Girdlestone', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130192, 0, 'David', '', 'Nichols', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130196, 0, 'James', '', 'Johnson', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130198, 0, 'Darren', '', 'Meek', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130199, 0, 'Aaron', '', 'Adams', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130201, 0, 'Difei', '', 'Riggs', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130202, 0, 'Giuseppe', '', 'Redmond', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130203, 0, 'Daniel', '', 'Mathoo', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130205, 0, 'Graham', '', 'Younis', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130207, 0, 'Daryll', '', 'Patchett', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130208, 0, 'David', '', 'Mcrae', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130218, 0, 'Daniel', '', 'Lloyd', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130220, 0, 'Darren', '', 'Meek', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130226, 0, 'Graham', '', 'York', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130234, 0, 'Christopher', '', 'Fletcher', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130235, 0, 'Aaron', '', 'Smith', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130239, 0, 'James', '', 'James', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130240, 0, 'Hiren', '', 'Smith', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130241, 0, 'Benjamin', '', 'Edwards', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130245, 0, 'Gerard', '', 'Pocket', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130247, 0, 'Ian', '', 'Patel', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130252, 0, 'Ian', '', 'Mohammed', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130253, 0, 'Adam', '', 'Ahmed', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130255, 0, 'Adrian', '', 'Aslam', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130256, 0, 'Alan', '', 'Barnes', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130257, 0, 'Alexander', '', 'York', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130259, 0, 'James', '', 'Hosking', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130263, 0, 'Japhet', '', 'Hosking', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130264, 0, 'Andrew', '', 'Barrett', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130269, 0, 'Benjamin', '', 'Crawley', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130272, 0, 'Christopher', '', 'Grimes', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130273, 0, 'Christopher', '', 'Grainger', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130276, 0, 'Colin', '', 'Hickman', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130288, 0, 'David', '', 'Mathias', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130289, 0, 'Dhunny', '', 'Patel', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130290, 0, 'Francisco', '', 'Nichols', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130295, 0, 'Gavin', '', 'Stretton', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130296, 0, 'Gerard', '', 'Swallow', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130297, 0, 'Giuseppe', '', 'Tipper', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130318, 0, 'Jayne', '', 'Dodd', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130322, 0, 'Jaime', '', 'Mcrae', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130324, 0, 'Imran', '', 'Muna', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130325, 0, 'Christopher', '', 'Davies', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130330, 0, 'Imran', '', 'Macdonald', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130331, 0, 'James', '', 'Kilner', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130333, 0, 'Colin', '', 'Hayle', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130336, 0, 'Jaskarn', '', 'Horne', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130340, 0, 'Jayne', '', 'Davies', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130343, 0, 'Anesley', '', 'Chari', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130344, 0, 'Andrew', '', 'Bevins', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130346, 0, 'Gavin', '', 'Singh', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130351, 0, 'James', '', 'Hanson', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130353, 0, 'Amity', '', 'Bari', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130356, 0, 'Adrian', '', 'Vartanian', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130358, 0, 'Gurjeet', '', 'Tipper', 'grant@gmail.com', 'Northampton, Uk', '24342345', 1, '0000-00-00', 'M', 'Felix', 'Kaitlin', '57987909', 'felix@hotmail.com', 1, '', 'provisional', 'unconditional'),
(20130360, 0, 'James', '', 'Hussain', 'dean@example.com', 'London, Uk', '23345454', 1, '0000-00-00', 'F', 'Jeremy', 'Navada', '67898909', 'Jeremy@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130364, 0, 'Alan', '', 'Gravett', 'johndev@gmail.com', 'London, Uk', '98598940', 1, '0000-00-00', 'M', 'Johnny', 'Andy', '12345455', 'johnny@gmail.com', 1, '', 'provisional', 'unconditional'),
(20130365, 0, 'Benjamin', '', 'Forsythe', 'gary@hotmail.com', 'Northampton, Uk', '56745334', 1, '0000-00-00', 'M', 'Sasha', 'Emmy', '56765455', 'sahsa@hotmail.com', 1, '', 'provisional', 'conditional'),
(20130372, 0, 'Daniel', '', 'Holland', 'nikkibytes@gmail.com', 'London, Uk', '12345445', 1, '0000-00-00', 'F', 'Adam', 'Noelle', '67785548', 'adam@gmail.com', 1, '', 'provisional', 'conditional'),
(20130373, 0, 'David', '', 'Pocket', 'betty@example.com', 'Northampton, Uk', '13545546', 1, '0000-00-00', 'F', 'Aron', 'Mona', '89086765', 'aron@hotmail.com', 1, '', 'live', 'conditional');

-- --------------------------------------------------------

--
-- Table structure for table `announcements_tb`
--

CREATE TABLE `announcements_tb` (
  `announcement_id` int(11) NOT NULL,
  `announcement_date` date NOT NULL,
  `announcement_description` varchar(255) NOT NULL,
  `announcement_visible` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements_tb`
--

INSERT INTO `announcements_tb` (`announcement_id`, `announcement_date`, `announcement_description`, `announcement_visible`) VALUES
(3, '2019-04-24', 'There will be no classes for tomorrow for all the first year students', 'visible');

-- --------------------------------------------------------

--
-- Table structure for table `assignments_tb`
--

CREATE TABLE `assignments_tb` (
  `assignment_id` int(11) NOT NULL,
  `assignment_name` varchar(255) NOT NULL,
  `assignment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `assignment_file` varchar(255) NOT NULL,
  `module_id` int(11) NOT NULL,
  `submission_visibility` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assignments_tb`
--

INSERT INTO `assignments_tb` (`assignment_id`, `assignment_name`, `assignment_date`, `assignment_file`, `module_id`, `submission_visibility`) VALUES
(3, 'Assignment Introdcution', '2019-04-24 18:44:16', 'first assignment', 11, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_submission_tb`
--

CREATE TABLE `assignment_submission_tb` (
  `submission_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `submission_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignment_submission_tb`
--

INSERT INTO `assignment_submission_tb` (`submission_id`, `student_id`, `module_id`, `assignment_id`, `submission_filename`) VALUES
(4, 92, 11, 3, 'Asad_first_assignment_20130113'),
(5, 90, 11, 3, 'assignment_submission'),
(6, 93, 11, 3, '20130116_Assignment');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_tb`
--

CREATE TABLE `attendance_tb` (
  `attendance_id` int(11) NOT NULL,
  `attendance` int(11) NOT NULL DEFAULT '0',
  `attendance_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attendance_total` int(11) NOT NULL,
  `attendance_archive` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance_tb`
--

INSERT INTO `attendance_tb` (`attendance_id`, `attendance`, `attendance_date`, `attendance_total`, `attendance_archive`, `student_id`, `staff_id`, `module_id`) VALUES
(29, 1, '2019-04-25 13:03:28', 0, 0, 90, 6, 11),
(30, 1, '2019-04-25 13:03:31', 0, 0, 91, 6, 11),
(31, 1, '2019-04-25 13:03:33', 0, 0, 92, 6, 11),
(32, 1, '2019-04-25 13:03:36', 0, 0, 93, 6, 11),
(33, 1, '2019-04-25 13:03:38', 0, 0, 94, 6, 11),
(34, 1, '2019-04-25 13:03:41', 1, 0, 94, 6, 11),
(35, 1, '2019-04-25 13:03:43', 0, 0, 95, 6, 11),
(36, 0, '2019-04-25 13:03:47', 0, 0, 96, 6, 11),
(37, 0, '2019-04-25 13:03:50', 0, 0, 97, 6, 11),
(38, 0, '2019-04-25 13:03:52', 0, 0, 98, 6, 11),
(39, 1, '2019-04-25 13:03:55', 0, 0, 99, 6, 11),
(40, 1, '2019-04-25 13:03:57', 0, 0, 100, 6, 11),
(41, 1, '2019-04-25 13:03:59', 0, 0, 101, 6, 11),
(42, 1, '2019-04-25 13:04:02', 1, 0, 90, 6, 11),
(43, 1, '2019-04-25 13:04:04', 1, 0, 91, 6, 11),
(44, 1, '2019-04-25 13:04:05', 1, 0, 93, 6, 11),
(45, 1, '2019-04-25 13:04:09', 1, 0, 92, 6, 11),
(46, 1, '2019-04-25 13:04:32', 0, 0, 90, 5, 13),
(47, 1, '2019-04-25 13:04:35', 0, 0, 91, 5, 13),
(48, 1, '2019-04-25 13:04:37', 0, 0, 92, 5, 13),
(49, 1, '2019-04-25 13:04:38', 0, 0, 93, 5, 13),
(50, 0, '2019-04-25 13:04:41', 0, 0, 94, 5, 13),
(51, 0, '2019-04-25 13:04:43', 0, 0, 95, 5, 13),
(52, 0, '2019-04-25 13:04:45', 0, 0, 96, 5, 13),
(53, 0, '2019-04-25 13:04:47', 0, 0, 97, 5, 13),
(54, 0, '2019-04-25 13:04:49', 0, 0, 98, 5, 13),
(55, 0, '2019-04-25 13:04:51', 0, 0, 99, 5, 13),
(56, 1, '2019-04-25 13:04:54', 0, 0, 100, 5, 13),
(57, 1, '2019-04-25 13:04:56', 0, 0, 101, 5, 13),
(58, 1, '2019-04-25 15:45:39', 0, 0, 102, 6, 11),
(59, 0, '2019-04-25 15:45:42', 0, 0, 109, 6, 11),
(60, 0, '2019-04-25 15:45:44', 0, 0, 108, 6, 11),
(61, 0, '2019-04-25 15:45:46', 0, 0, 107, 6, 11),
(62, 0, '2019-04-25 15:45:48', 0, 0, 106, 6, 11),
(63, 0, '2019-04-25 15:45:50', 0, 0, 105, 6, 11),
(64, 0, '2019-04-25 15:45:53', 0, 0, 104, 6, 11),
(65, 0, '2019-04-25 15:45:55', 0, 0, 103, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `courses_tb`
--

CREATE TABLE `courses_tb` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_archive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses_tb`
--

INSERT INTO `courses_tb` (`course_id`, `course_name`, `course_description`, `course_archive`) VALUES
(1, 'BSc Computing ', 'Bachelor of Science in Computing', 0);

-- --------------------------------------------------------

--
-- Table structure for table `grades_tb`
--

CREATE TABLE `grades_tb` (
  `grade_id` int(11) NOT NULL,
  `grade_name` varchar(255) NOT NULL,
  `grade_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `submission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades_tb`
--

INSERT INTO `grades_tb` (`grade_id`, `grade_name`, `grade_date`, `student_id`, `assignment_id`, `submission_id`) VALUES
(4, 'B+', '2019-04-25 13:07:31', 92, 3, 4),
(5, 'A+', '2019-04-25 16:57:57', 90, 3, 5),
(6, 'A', '2019-04-25 16:59:53', 93, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `modules_tb`
--

CREATE TABLE `modules_tb` (
  `module_id` int(11) NOT NULL,
  `module_code` varchar(255) NOT NULL,
  `module_name` varchar(255) NOT NULL,
  `module_description` varchar(255) NOT NULL,
  `module_year` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `module_archive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modules_tb`
--

INSERT INTO `modules_tb` (`module_id`, `module_code`, `module_name`, `module_description`, `module_year`, `course_id`, `module_archive`) VALUES
(7, 'C1001', 'Computing Mathematics', 'Computing Mathematics', 1, 1, 0),
(8, 'C1002', 'Systems Architecture', 'Systems Architecture', 1, 1, 0),
(9, 'C1003', 'Problems Solving', 'Problems Solving', 1, 1, 0),
(10, 'C1004', 'Software Modelling 1', 'Software Modelling 1', 1, 1, 0),
(11, 'C1005', 'Software Implementation 1', 'Software Implementation 1', 1, 1, 0),
(12, 'C1006', 'Distributed Systems', 'Distributed Systems', 1, 1, 0),
(13, 'C2001', 'Software Modelling 2', 'Software Modelling 2', 2, 1, 0),
(14, 'C2002', 'Software Implementation 2', 'Software Implementation 2', 2, 1, 0),
(15, 'C2003', 'Knowledge Processing', 'Knowledge Processing', 2, 1, 0),
(16, 'C2004', 'Formal Specification of Software Systems 1', 'Formal Specification of Software Systems 1', 2, 1, 0),
(17, 'C2005', 'Database Technology ', 'Database Technology ', 2, 1, 0),
(18, 'C2006', 'Group Project and Project Management', 'Group Project and Project Management', 1, 1, 0),
(19, 'C3001', 'Software Modelling 3', 'Software Modelling 3', 3, 1, 0),
(20, 'C3002', 'Software Implementation 3', 'Software Implementation 3', 3, 1, 0),
(21, 'C3003', 'Applications of Artificial Intelligence', 'Applications of Artificial Intelligence', 3, 1, 0),
(22, 'C3004', 'Formal Specification of Software Systems 2', 'Formal Specification of Software Systems 2', 3, 1, 0),
(23, 'C3005', 'Dissertation ', 'Dissertation ', 3, 1, 0),
(24, '', '', '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resources_tb`
--

CREATE TABLE `resources_tb` (
  `resource_id` int(11) NOT NULL,
  `resource_name` varchar(255) NOT NULL,
  `resource_link` varchar(255) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources_tb`
--

INSERT INTO `resources_tb` (`resource_id`, `resource_name`, `resource_link`, `module_id`) VALUES
(3, 'Refered college account name', 'www.northampton.ac.uk', 11);

-- --------------------------------------------------------

--
-- Table structure for table `staffs_tb`
--

CREATE TABLE `staffs_tb` (
  `staff_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `archive_status` int(11) NOT NULL,
  `reason_for_dormant` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffs_tb`
--

INSERT INTO `staffs_tb` (`staff_id`, `year`, `archive_status`, `reason_for_dormant`, `user_id`, `module_id`) VALUES
(5, 2, 0, '', 38, 13),
(6, 1, 0, '', 39, 11),
(7, 2, 0, '', 40, 15),
(8, 3, 0, '', 41, 21),
(9, 3, 0, '', 42, 17),
(10, 2, 0, '', 43, 18),
(11, 2, 0, '', 44, 17),
(12, 1, 0, '', 45, 12),
(13, 1, 0, '', 46, 8),
(14, 1, 0, '', 47, 15),
(15, 1, 0, '', 48, 13),
(16, 1, 0, '', 49, 10),
(17, 1, 0, '', 50, 24);

-- --------------------------------------------------------

--
-- Table structure for table `students_tb`
--

CREATE TABLE `students_tb` (
  `student_id` int(11) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `parent_contact` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `passed_out` int(11) NOT NULL,
  `father_email` varchar(255) NOT NULL,
  `course_assign` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students_tb`
--

INSERT INTO `students_tb` (`student_id`, `father_name`, `mother_name`, `parent_contact`, `year`, `passed_out`, `father_email`, `course_assign`, `user_id`) VALUES
(90, 'Johnny', 'Andy', '12345455', 1, 0, 'johnny@gmail.com', 1, 112),
(91, 'Sasha', 'Emmy', '56765455', 1, 0, 'sahsa@hotmail.com', 1, 113),
(92, 'Adam', 'Noelle', '67785548', 1, 0, 'adam@gmail.com', 1, 114),
(93, 'Aron', 'Mona', '89086765', 1, 0, 'aron@hotmail.com', 1, 115),
(94, 'Felix', 'Kaitlin', '57987909', 1, 0, 'felix@hotmail.com', 1, 116),
(95, 'Jeremy', 'Navada', '67898909', 1, 0, 'Jeremy@gmail.com', 1, 117),
(96, 'Johnny', 'Andy', '12345455', 1, 0, 'johnny@gmail.com', 1, 118),
(97, 'Sasha', 'Emmy', '56765455', 1, 0, 'sahsa@hotmail.com', 1, 119),
(98, 'Adam', 'Noelle', '67785548', 1, 0, 'adam@gmail.com', 1, 120),
(99, 'Aron', 'Mona', '89086765', 1, 0, 'aron@hotmail.com', 1, 121),
(100, 'Felix', 'Kaitlin', '57987909', 1, 0, 'felix@hotmail.com', 1, 122),
(101, 'Aron', 'Mona', '89086765', 1, 0, 'aron@hotmail.com', 1, 123),
(102, 'Johnny', 'Andy', '12345455', 2, 0, 'johnny@gmail.com', 1, 124),
(103, 'Sasha', 'Emmy', '56765455', 2, 0, 'sahsa@hotmail.com', 1, 125),
(104, 'Adam', 'Noelle', '67785548', 2, 0, 'adam@gmail.com', 1, 126),
(105, 'Aron', 'Mona', '89086765', 2, 0, 'aron@hotmail.com', 1, 127),
(106, 'Felix', 'Kaitlin', '57987909', 2, 0, 'felix@hotmail.com', 1, 128),
(107, 'Jeremy', 'Navada', '67898909', 2, 0, 'Jeremy@gmail.com', 1, 129),
(108, 'Johnny', 'Andy', '12345455', 2, 0, 'johnny@gmail.com', 1, 130),
(109, 'Sasha', 'Emmy', '56765455', 2, 0, 'sahsa@hotmail.com', 1, 131);

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE `users_tb` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`user_id`, `username`, `password`, `first_name`, `middle_name`, `surname`, `date_of_birth`, `phone_number`, `email`, `gender`, `status`, `role`) VALUES
(30, 'Simon', 'Simon', 'Simon', '', 'White', '1990-10-01', '123456789', 'admin@mail.com', 'male', 1, 'admin'),
(38, '99100101', '$2y$10$Xa2kXEsMmNUZrXcpk.voKuPO76vFQG/95mrdF4FAIsUUB7al7RAHy', 'David', '', 'Adams', '1990-04-09', '123456789', 'adams@mail.com', 'M', 0, 'staff'),
(39, '99100190', '$2y$10$fJBkuwNHpUtkh8JxvX0ij.kBWlA9KxA4mLcnuU.0NclyqNNs1Okhe', 'Daniel', '', 'Barnes', '1990-04-10', '123456789', 'Barnes@mail.com', 'M', 0, 'staff'),
(40, '99100279', '$2y$10$KvkIljqB9LZ6J2V7Au8rH.T2XpLHw07CdY7quyC7GvXdWU16JmOoy', 'Andrew', '', 'Fletcher', '1990-04-10', '123456789', 'fletcher@mail.com', 'M', 0, 'staff'),
(41, '99100368', '$2y$10$2NgLNjdc3ktqtmn5dzJnMeKFcfA5e9X87uu5zbYd47nQ0s32qDhMa', 'Ryan', '', 'Hickman', '1990-04-03', '123456789', 'hickman@mail.com', 'M', 0, 'staff'),
(42, '99100457', '$2y$10$yPY2UHwKBkiGCirorDLuku1NVDEqlU0Vlz6/yln0cELvgMinr1U3W', 'Paul', '', 'Jones', '1990-04-17', '123456789', 'paul@mail.com', 'M', 0, 'staff'),
(43, '99100546', '$2y$10$lik6hZ1Px0GlztwW8w4eU.G3OWUP5thSh5U2L2KdKWlEPQJ7PdOOm', 'Matthew', '', 'Smith', '1990-04-03', '123456789', 'smith@mail.com', 'F', 0, 'staff'),
(44, '99100635', '$2y$10$YFtuUwHDTBgWlT2QAMDBFORS.NFCDranOjAnVgNhfjFFg3DpDO.F6', 'Mark', '', 'Neal', '2019-05-02', '123456789', 'mark@mail.com', 'M', 0, 'staff'),
(45, '99100724', '$2y$10$3RxpsrUR99WBmDlCJw3fouFZZjjPGSrNe2b8J5qJlA7kEyHVyqI3C', 'Julie', '', 'Neech', '2019-05-01', '123456789', 'neech@mail.com', 'F', 0, 'staff'),
(46, '99100813', '$2y$10$i51Uu0Eja0CM4a7kMJELY.V5UzIZUr/wnBQgChEFil913AXLPYrJu', 'Daniel', '', 'Osborne', '2019-04-15', '123456789', 'osborne@mail.com', 'M', 0, 'staff'),
(47, '99100902', '$2y$10$9rkDWR5ATnHhVInHcUZM1eMr4l3DJv.nLNW9i/FTfrev14OlL98ZC', 'Thomas', '', 'Redmond', '2019-04-02', '123456789', 'redmond@mail.com', 'M', 0, 'staff'),
(48, '99100991', '$2y$10$GHG0JyRlQ6ggnMmDbhjky.2aBSZ1KQw/7KgMLGhX/nPdqDzuzgvay', 'Melissa', '', 'Rose', '2019-04-02', '123456789', 'rose@mail.com', 'F', 0, 'staff'),
(49, '99101080', '$2y$10$XRFXeOjEFBF5FkKrJ/mAJuaq52uOc2g/7vlLn82CPetyl7Y6Fugm.', 'Raja', '', 'Patel', '2019-04-15', '123456789', 'patel@mail.com', 'M', 0, 'staff'),
(50, '99101072', '$2y$10$7o0OyjE2qfXlskbMXWz4bOBlY7l8i/m9ZBsNnY37R882jbykhEx8.', 'Mark', '', 'Williams', '1990-04-02', '123456789', 'williams@mail.com', 'M', 0, 'staff'),
(112, '20130106', '$2y$10$KmEGy2k5B28xHb7DFeZRUO8gJUugwtj50ENWeNDUKDc4BsLE3AIGW', 'Christopher', '', 'Edwards', '0000-00-00', '98598940', 'johndev@gmail.com', 'M', 0, 'student'),
(113, '20130107', '$2y$10$CUXnxl.80S6vjKhyLHuB0usRWghJ8uX09wiUBPHAUIy.6GZ2OuhSK', 'Graham', '', 'Vinitchaikul', '0000-00-00', '56745334', 'gary@hotmail.com', 'M', 0, 'student'),
(114, '20130113', '$2y$10$QdACypHCh1e0QQ/CoKuTOedJ2g.UAOCt0ez59j8Y690Fk9n0t9Oi.', 'Asad', '', 'Cox', '0000-00-00', '12345445', 'nikkibytes@gmail.com', 'F', 0, 'student'),
(115, '20130116', '$2y$10$G4FHwwyEardRUPL.tlaRTeajGdKWpAMxIQ/sjxkM4qWP9GjYPq2TS', 'Andrew', '', 'Carpenter ', '0000-00-00', '13545546', 'betty@example.com', 'F', 0, 'student'),
(116, '20130117', '$2y$10$3qyvYZLzErCpb63RzYb/XuTr7.h18YC.maAucYCPyuzwD.3wLWUum', 'Alexander', '', 'Begum', '0000-00-00', '24342345', 'grant@gmail.com', 'M', 0, 'student'),
(117, '20130119', '$2y$10$vW7N.h3x0YZELjSILSKU2.CTE.NaqdNd.sn4TiLovgCfAzfKqXcCm', 'Adam', '', 'Stevenson', '0000-00-00', '23345454', 'dean@example.com', 'F', 0, 'student'),
(118, '20130122', '$2y$10$cSI0ANeNlz2l1HsISPcI0ebFHD4h6E32z2lyxf1I9zKVle9xKmHea', 'Benjamin', '', 'Corke', '0000-00-00', '98598940', 'johndev@gmail.com', 'M', 0, 'student'),
(119, '20130124', '$2y$10$XZV3Zx9tMKStos8POrh35.V8tom5gm/pI/ezZjfQbE6kSTjONdDMG', 'Andrew', '', 'Brown', '0000-00-00', '56745334', 'gary@hotmail.com', 'M', 0, 'student'),
(120, '20130127', '$2y$10$kZqD0hQWSpOkAXi7pMyhSuafCoGrb.LGcP02Owtp8shSgWdMO0EUS', 'David', '', 'O\'toole', '0000-00-00', '12345445', 'nikkibytes@gmail.com', 'F', 0, 'student'),
(121, '20130128', '$2y$10$ylHKbgtLpEl1iOC.AatlKeK22LvFB/cZPAWwPGBPI0foVhxqR9lVK', 'Darren', '', 'Mathoo', '0000-00-00', '13545546', 'betty@example.com', 'F', 0, 'student'),
(122, '20130130', '$2y$10$pBAmCpfRZztSZK3kdjQhMuCEhsbPStCXDCIh3ybVAr99tV7Hy9x4i', 'Adam', '', 'Wright', '0000-00-00', '24342345', 'grant@gmail.com', 'M', 0, 'student'),
(123, '20130373', '$2y$10$8.NmGroOvRYczGEjI6L1oO5KhPqCXfns1GFz.R1DDXH/0exo1G78m', 'David', '', 'Pocket', '0000-00-00', '13545546', 'betty@example.com', 'F', 0, 'student'),
(124, '20120100', '$2y$10$N1SVJqS14yGJFso9OOrM2eSlmca3nyW/n5t5e3qshjmMtjNCL419.', 'Julie', '', 'Calvert ', '0000-00-00', '98598940', 'johndev@gmail.com', 'M', 0, 'student'),
(125, '20120102', '$2y$10$2G63WQ4r2cUNLkUoPhF1PO9e5kusN7GywYWp9J05oe91lCqXu9eXC', 'Matthew', '', 'Whitworth', '0000-00-00', '56745334', 'gary@hotmail.com', 'M', 0, 'student'),
(126, '20120103', '$2y$10$s6K.ZjKQ9fuM2bi0EPvX5OKnFp1YEkbXd3GF9SavxJ4O4lD.WVlf6', 'Lalita', '', 'Hunt', '0000-00-00', '12345445', 'nikkibytes@gmail.com', 'F', 0, 'student'),
(127, '20120104', '$2y$10$34kLZVL6uur5qb.qenutNOSWWTQ5txEBYSNrlMa1IaQbSeBmrViK.', 'Michael', '', 'Su', '0000-00-00', '13545546', 'betty@example.com', 'F', 0, 'student'),
(128, '20120111', '$2y$10$2DyMBB/2W50kOQJ4g7JTUOVlm6oXHW23pmiBeEHSKXd5fXXsgV4jK', 'Michael', '', 'Osborne', '0000-00-00', '24342345', 'grant@gmail.com', 'M', 0, 'student'),
(129, '20120115', '$2y$10$lXuJ47QbYZ7TgpYMHX/hpurfFwNeHOTLeheLjaG9MxbG.gHdWqsqC', 'Peter', '', 'Gornall', '0000-00-00', '23345454', 'dean@example.com', 'F', 0, 'student'),
(130, '20120118', '$2y$10$VzE2SREaLNUXTnwrvIXUR.CkkbB0EuqFZTQLz1k0si8Cc2gaLGsJm', 'Oliver', '', 'Halstead', '0000-00-00', '98598940', 'johndev@gmail.com', 'M', 0, 'student'),
(131, '20120121', '$2y$10$n6OU8IHmb98tv9X7MPHVjeLScHCyw4NcRQqBqPRYkfpSi2XRS0anG', 'Mandeep', '', 'Brazell', '0000-00-00', '56745334', 'gary@hotmail.com', 'M', 0, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities_tb`
--
ALTER TABLE `activities_tb`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `admission_tb`
--
ALTER TABLE `admission_tb`
  ADD PRIMARY KEY (`admission_id`);

--
-- Indexes for table `announcements_tb`
--
ALTER TABLE `announcements_tb`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `assignments_tb`
--
ALTER TABLE `assignments_tb`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `assignment_submission_tb`
--
ALTER TABLE `assignment_submission_tb`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `attendance_tb`
--
ALTER TABLE `attendance_tb`
  ADD PRIMARY KEY (`attendance_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `staff_id` (`staff_id`),
  ADD KEY `fk_module_attendance` (`module_id`);

--
-- Indexes for table `courses_tb`
--
ALTER TABLE `courses_tb`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `grades_tb`
--
ALTER TABLE `grades_tb`
  ADD PRIMARY KEY (`grade_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `assignment_id` (`assignment_id`),
  ADD KEY `assignment_id_2` (`assignment_id`),
  ADD KEY `fk_submission_grades` (`submission_id`);

--
-- Indexes for table `modules_tb`
--
ALTER TABLE `modules_tb`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `resources_tb`
--
ALTER TABLE `resources_tb`
  ADD PRIMARY KEY (`resource_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `staffs_tb`
--
ALTER TABLE `staffs_tb`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `students_tb`
--
ALTER TABLE `students_tb`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_assign` (`course_assign`);

--
-- Indexes for table `users_tb`
--
ALTER TABLE `users_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities_tb`
--
ALTER TABLE `activities_tb`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admission_tb`
--
ALTER TABLE `admission_tb`
  MODIFY `admission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20130374;

--
-- AUTO_INCREMENT for table `announcements_tb`
--
ALTER TABLE `announcements_tb`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignments_tb`
--
ALTER TABLE `assignments_tb`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assignment_submission_tb`
--
ALTER TABLE `assignment_submission_tb`
  MODIFY `submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `attendance_tb`
--
ALTER TABLE `attendance_tb`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `courses_tb`
--
ALTER TABLE `courses_tb`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `grades_tb`
--
ALTER TABLE `grades_tb`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `modules_tb`
--
ALTER TABLE `modules_tb`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `resources_tb`
--
ALTER TABLE `resources_tb`
  MODIFY `resource_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffs_tb`
--
ALTER TABLE `staffs_tb`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `students_tb`
--
ALTER TABLE `students_tb`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `users_tb`
--
ALTER TABLE `users_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities_tb`
--
ALTER TABLE `activities_tb`
  ADD CONSTRAINT `fk_module_activies` FOREIGN KEY (`module_id`) REFERENCES `modules_tb` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `assignments_tb`
--
ALTER TABLE `assignments_tb`
  ADD CONSTRAINT `assignments_tb_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules_tb` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `attendance_tb`
--
ALTER TABLE `attendance_tb`
  ADD CONSTRAINT `fk_module_attendance` FOREIGN KEY (`module_id`) REFERENCES `modules_tb` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_staff_attendance` FOREIGN KEY (`staff_id`) REFERENCES `staffs_tb` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_attendance` FOREIGN KEY (`student_id`) REFERENCES `students_tb` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grades_tb`
--
ALTER TABLE `grades_tb`
  ADD CONSTRAINT `fk_assignment_grade` FOREIGN KEY (`assignment_id`) REFERENCES `assignments_tb` (`assignment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_student_grades` FOREIGN KEY (`student_id`) REFERENCES `students_tb` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_submission_grades` FOREIGN KEY (`submission_id`) REFERENCES `assignment_submission_tb` (`submission_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `modules_tb`
--
ALTER TABLE `modules_tb`
  ADD CONSTRAINT `fk_course_modules` FOREIGN KEY (`course_id`) REFERENCES `courses_tb` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources_tb`
--
ALTER TABLE `resources_tb`
  ADD CONSTRAINT `resources_tb_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules_tb` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staffs_tb`
--
ALTER TABLE `staffs_tb`
  ADD CONSTRAINT `fk_module_staff` FOREIGN KEY (`module_id`) REFERENCES `modules_tb` (`module_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_staff` FOREIGN KEY (`user_id`) REFERENCES `users_tb` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students_tb`
--
ALTER TABLE `students_tb`
  ADD CONSTRAINT `fk_course_students` FOREIGN KEY (`course_assign`) REFERENCES `courses_tb` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_students` FOREIGN KEY (`user_id`) REFERENCES `users_tb` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
