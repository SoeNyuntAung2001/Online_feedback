-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 08:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`, `Date`) VALUES
(31, 'Aye Htet Myat', '0969481601', 0, 'I need a help', '2023-01-20 01:52:43'),
(32, 'Hein Myat Paing', '0969481601', 0, 'I need a girlfriend', '2023-01-20 01:52:59'),
(33, 'Min Thant Zin', '0969481601', 0, 'I need good wifi connection', '2023-01-20 01:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `user_alias` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `programme` varchar(50) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `department` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `user_alias`, `Name`, `designation`, `programme`, `semester`, `year`, `section`, `department`, `email`, `password`, `mobile`, `date`, `status`) VALUES
(1, 'Daw 9912', 'Daw Zar Zar Thin', 'Assistant Lecturer', 'Myanmar', 'i', 'First Year', 'Section-A', 'Department of Languages', 'zarzarthin@ucspyay.edu.mm', 'zarzarthin', 9912472023, '2023-01-18 20:25:36', 0),
(2, 'U He9858', 'U Hein Htet Zaw', 'Tutor', 'Myanmar', 'i', 'First Year', 'Section-A', 'Department of Languages', 'heinhtetzaw@ucspyay.edu.mm', 'heinhtetzaw', 9858385969, '2023-01-18 20:28:20', 0),
(3, 'Daw 9765', 'Daw Swe Swe Myint', 'Associate Professor', 'English', 'i', 'First Year', 'Section-A', 'Department of Languages', 'sweswemyint@ucspyay.edu.mm', 'sweswemyin', 9765335202, '2023-01-18 20:32:10', 0),
(4, 'Daw 9675', 'Daw May Mi Myo Htet Zaw', 'Tutor', 'English', 'i', 'First Year', 'Section-A', 'Department of Languages', 'maymimyohtetzaw@ucspyay.edu.mm', 'maymimyohtetzaw', 9675446755, '2023-01-18 20:34:49', 0),
(5, 'Dr.M9876', 'Dr.Mon Mon Aung', 'Professor', 'Physics', 'ii', 'First Year', 'Section-A', 'Department of Natural Sciences', 'monmonaung@ucspyay.edu.mm', 'monmonaung', 9876567876, '2023-01-18 20:36:43', 0),
(6, 'Daw 9876', 'Daw Ei Mon Zin', 'Assistant Lecturer', 'Physics(Lab)', 'ii', 'First Year', 'Section-A', 'Department of Natural Sciences', 'eimonzin@ucspyay.edu.mm', 'eimonzin', 9876545678, '2023-01-18 20:38:32', 0),
(7, 'U My9876', 'U Myo Lin', 'Lecturer', 'Calculus I', 'i', 'First Year', 'Section-A', 'Faculty of Computational Mathematics', 'myolin@ucspyay.edu.mm', 'myolin', 9876782345, '2023-01-18 20:40:19', 0),
(8, 'Daw 9354', 'Daw Khin Mar Cho', 'Associate Professor', 'Principle of Information Technology', 'i', 'First Year', 'Section-A', 'Faculty of Computer Science', 'khinmarcho@ucspyay.edu.mm', 'khinmarcho', 9448009311, '2023-01-18 20:42:04', 0),
(9, 'U Ht9087', 'U Htet Lin Aung', 'Tutor', 'Principle of Information Technology', 'i', 'First Year', 'Section-A', 'Faculty of Computer Science', 'htetlinaung@ucspyay.edu.mm', 'htetlinaung', 9881305461, '2023-01-18 20:43:13', 0),
(10, 'Daw 9545', 'Daw Wai Wai Myint', 'Lecturer', 'Supporting Skill(office 365)', 'i', 'First Year', 'Section-A', 'Information Technology Support and Maintenance Department', 'waiwaimyint@ucspyay.edu.mm', 'waiwaimyint', 9545666777, '2023-01-18 20:45:10', 0),
(11, 'Daw 9555', 'Daw Hnin Nandar Zaw', 'Tutor', 'Supporting Skill(office 365)', 'i', 'First Year', 'Section-A', 'Faculty of Computer Science ', 'hninnandarzaw@ucspyay.edu.mm', 'hninnandarzaw', 9454456144, '2023-01-18 20:46:28', 0),
(12, 'Daw 9887', 'Daw Zar Zar Thin', 'Assistant Lecturer', 'Myanmar', 'i', 'First Year', 'Section-B', 'Department of Languages', 'zarzarthin@ucspyay.edu.mm', 'zarzarthin', 9912472023, '2023-01-18 20:47:39', 0),
(13, 'U He9654', 'U Hein Htet Zaw', 'Tutor', 'Myanmar', 'i', 'First Year', 'Section-B', 'Department of Languages', 'heinhtetzaw@ucspyay.edu.mm', 'heinhtetzaw', 9654333444, '2023-01-18 20:48:39', 0),
(14, 'Daw 9887', 'Daw Swe Swe Myint', 'Associate Professor', 'English', 'i', 'First Year', 'Section-B', 'Department of Languages', 'sweswemyint@ucspyay.edu.mm', 'sweswemyint', 9887665667, '2023-01-18 20:49:42', 0),
(15, 'Daw 9888', 'Daw May Mi Myo Htet Zaw', 'Tutor', 'English', 'i', 'First Year', 'Section-B', 'Department of Languages', 'maymimyohtetzaw@ucspyay.edu.mm', 'maymimyohtetzaw', 9888877654, '2023-01-18 20:50:53', 0),
(16, 'Dr.M9333', 'Dr.Mon Mon Aung', 'Professor', 'Physics', 'i', 'First Year', 'Section-B', 'Department of Natural Sciences', 'monmonaung@ucspyay.edu.mm', 'monmonaung', 9876567876, '2023-01-18 20:52:07', 0),
(17, 'Daw 9445', 'Daw Ei Mon Zin', 'Assistant Lecturer', 'Physics(Lab)', 'i', 'First Year', 'Section-B', 'Department of Natural Sciences', 'eimonzin@ucspyay.edu.mm', 'eimonzin', 9876545678, '2023-01-18 20:53:09', 0),
(18, 'U My9887', 'U Myo Lin', 'Lecturer', 'Calculus I', 'i', 'First Year', 'Section-B', 'Faculty of Computational Mathematics', 'myolin@ucspyay.edu.mm', 'myolin', 9887766554, '2023-01-18 20:54:37', 0),
(19, 'Dr.A9444', 'Dr.Aye Pa Pa Mya', 'Professor', 'Principle of Information Technology', 'i', 'First Year', 'Section-B', 'Faculty of Computer Science', 'ayepapamya@ucspyay.edu.mm', 'ayepapamya', 9444333222, '2023-01-18 20:56:05', 0),
(20, 'Daw 9888', 'Daw Aye Htet Aung', 'Tutor', 'Principle of Information Technology', 'ii', 'First Year', 'Section-B', 'Faculty of Computer Science', 'ayehtetaung@ucspyay.edu.mm', 'ayehtetaung', 9407545074, '2023-01-18 20:57:18', 0),
(284, 'Daw 9000', 'Daw Ni Ni Khaing', 'Associate Professor', 'Supporting Skill(office 365)', 'i', 'First Year', 'Section-B', 'Information Technology Support and Maintenance Department', 'ninikhaing@ucspyay.edu.mm', 'ninikhaing', 9000888777, '2023-01-18 20:59:06', 0),
(285, 'Daw 9777', 'Daw Zar Zar Thin', 'Assistant Lecturer', 'Myanmar', 'i', 'First Year', 'Section-C', 'Department of Languages', 'zarzarthin@ucspyay.edu.mm', 'zarzarthin', 9912472023, '2023-01-18 21:00:11', 0),
(286, 'U He9888', 'U Hein Htet Zaw', 'Tutor', 'Myanmar', 'i', 'First Year', 'Section-C', 'Department of Languages', 'heinhtetzaw@ucspyay.edu.mm', 'heinhtetzaw', 9888777999, '2023-01-18 21:01:13', 0),
(287, 'Daw 9888', 'Daw Swe Swe Myint', 'Associate Professor', 'English', 'i', 'First Year', 'Section-C', 'Department of Languages', 'sweswemyint@ucspyay.edu.mm', 'sweswemyint', 9888777666, '2023-01-18 21:02:26', 0),
(288, 'Daw 9000', 'Daw May Mi Myo Htet Zaw', 'Tutor', 'English', 'i', 'First Year', 'Section-C', 'Department of Languages', 'maymimyohtetzaw@ucspyay.edu.mm', 'maymimyohtetzaw', 9000888777, '2023-01-18 21:03:35', 0),
(289, 'Dr.M9555', 'Dr.Mon Mon Aung', 'Professor', 'Physics', 'i', 'First Year', 'Section-C', 'Department of Natural Sciences', 'monmonaung@ucspyay.edu.mm', 'monmonaung', 9876567876, '2023-01-18 21:04:38', 0),
(290, 'Daw 9554', 'Daw Ei Mon Zin', 'Assistant Lecturer', 'Physics(Lab)', 'i', 'First Year', 'Section-C', 'Department of Natural Sciences', 'eimonzin@ucspyay.edu.mm', 'eimonzin', 9876545678, '2023-01-18 21:05:33', 0),
(291, 'U My9777', 'U Myo Lin', 'Lecturer', 'Calculus I', 'i', 'First Year', 'Section-C', 'Select Your Department', 'myolin@ucspyay.edu.mm', 'myolin', 9777444555, '2023-01-18 21:06:41', 0),
(292, 'Daw 9666', 'Daw Khin Mar Cho', 'Associate Professor', 'Principle of Information Technology', 'i', 'First Year', 'Section-C', 'Faculty of Computer Science', 'khinmarcho@ucspyay.edu.mm', 'khinmarcho', 9448009311, '2023-01-18 21:07:53', 0),
(293, 'Daw 9555', 'Daw Aye Htet Aung', 'Tutor', 'Principle of Information Technology', 'Select Sem', 'First Year', 'Section-C', 'Faculty of Computer Science', 'ayehtetaung@ucspyay.edu.mm', 'ayehtetaung', 9407545074, '2023-01-18 21:08:53', 0),
(294, 'Daw 9777', 'Daw Ni Ni Khaing', 'Associate Professor', 'Supporting Skill(office 365)', 'i', 'First Year', 'Section-C', 'Information Technology Support and Maintenance Department', 'ninikhaing@ucspyay.edu.mm', 'ninikhaing', 9200888777, '2023-01-18 21:10:27', 0),
(295, 'Daw 9444', 'Daw Hnin Nandar Zaw', 'Tutor', 'Supporting Skill(office 365)', 'i', 'First Year', 'Section-C', 'Faculty of Computer Science', 'hninnandarzaw@ucspyay.edu.mm', 'hninnandarzaw', 9454456144, '2023-01-18 21:11:48', 0),
(296, 'Daw 9666', 'Daw Zar Zar Thin', 'Assistant Lecturer', 'Myanmar', 'ii', 'First Year', 'Section-A', 'Department of Languages', 'zarzarthin@ucspyay.edu.mm', 'zarzarthin', 9912472023, '2023-01-18 21:13:25', 0),
(297, 'Daw 9666', 'Daw Than Myat Wai', 'Lecturer', 'English', 'ii', 'First Year', 'Section-A', 'Department of Languages', 'thanmyatwai@ucspyay.edu.mm', 'thanmyatwai', 9666777888, '2023-01-18 21:14:50', 0),
(298, 'Dr.M9000', 'Dr.Mon Mon Aung', 'Professor', 'Physics', 'Second Sem', 'First Year', 'Section-A', 'Department of Natural Sciences', 'monmonaung@ucspyay.edu.mm', 'monmonaung', 9876567876, '2023-01-18 21:15:45', 0),
(299, 'Daw 9888', 'Daw Ei Mon Zin', 'Assistant Lecturer', 'Physics(Lab)', 'ii', 'First Year', 'Section-A', 'Department of Natural Sciences', 'eimonzin@ucspyay.edu.mm', 'eimonzin', 9876545678, '2023-01-18 21:17:19', 0),
(300, 'Daw 9000', 'Daw San San Swe', 'Assistant Lecturer', 'Discrete Mathematics', 'ii', 'First Year', 'Section-A', 'Faculty of Computational Mathematics', 'sansanswe@ucspyay.edu.mm', 'sansanswe', 9700999777, '2023-01-18 21:18:50', 0),
(301, 'Dr.E9555', 'Dr.Ei Ei Han', 'Lecturer', 'C++ Programming', 'ii', 'First Year', 'Section-A', 'Faculty of Computer Science', 'eieihan@ucspyay.edu.mm', 'eieihan', 9421155564, '2023-01-18 21:20:04', 0),
(302, 'Daw 9876', 'Daw Hnin Nandar Zaw', 'Tutor', 'Supporting Skill(Advanced Office 365)', 'ii', 'First Year', 'Section-A', 'Faculty of Computer Science', 'hninnandarzaw@ucspyay.edu.mm', 'hninnandarzaw', 9454456144, '2023-01-18 21:21:59', 0),
(303, 'Daw 9456', 'Daw Zar Zar Thin', 'Assistant Lecturer', 'Myanmar', 'ii', 'First Year', 'Section-B', 'Department of Languages', 'zarzarthin@ucspyay.edu.mm', 'zarzarthin', 9912472023, '2023-01-18 21:23:08', 0),
(304, 'Daw 9445', 'Daw Than Myat Wai', 'Lecturer', 'English', 'ii', 'First Year', 'Section-B', 'Department of Languages', 'thanmyatwai@ucspyay.edu.mm', 'thanmyatwai', 9445665445, '2023-01-18 21:24:10', 0),
(305, 'Daw 9445', 'Daw Ei Zin Myint', 'Lecturer', 'Physics', 'ii', 'First Year', 'Section-B', 'Department of Natural Sciences', 'eizinmyint@ucspyay.edu.mm', 'eizinmyint', 9445667665, '2023-01-18 21:25:25', 0),
(306, 'Daw 9776', 'Daw San San Swe', 'Assistant Lecturer', 'Discrete Mathematics', 'ii', 'First Year', 'Section-B', 'Faculty of Computational Mathematics', 'sansanswe@ucspyay.edu.mm', 'sansanswe', 9776556778, '2023-01-18 21:26:41', 0),
(307, 'Daw 9667', 'Daw Hnin Hnin Ei Hlaing', 'Lecturer', 'C++ Programming', 'ii', 'First Year', 'Section-B', 'Faculty of Computer Science', 'hninhnineihlaing@ucspyay.edu.mm', 'hninhnineihlaing', 9421712021, '2023-01-18 21:28:19', 0),
(308, 'Daw 9776', 'Daw Ni Ni Khaing', 'Associate Professor', 'Supporting Skill(Advanced Office 365)', 'ii', 'First Year', 'Section-B', 'Information Technology Support and Maintenance Department', 'ninikhaing@ucspyay.edu.mm', 'ninikhaing', 9776778776, '2023-01-18 21:29:21', 0),
(309, 'Daw 9566', 'Daw Hnin Akari', 'Assistant Lecturer', 'English', 'i', 'Second Year', 'Section-A', 'Department of Languages', 'hninakari@ucspyay.edu.mm', 'hninakari', 9566554333, '2023-01-18 21:31:54', 0),
(310, 'U Ky9554', 'U Kyaw Zin Htun', 'Tutor', 'Calculus II', 'i', 'Second Year', 'Section-A', 'Faculty of Computational Mathematics', 'kyawzinhtun@ucspyay.edu.mm', 'kyawzinhtun', 9554333222, '2023-01-18 21:35:46', 0),
(311, 'Daw 9776', 'Daw Hsu Hlaing Hnin', 'Tutor', 'Calculus II', 'i', 'Second Year', 'Section-A', 'Faculty of Computational Mathematics', 'hsuhlainghnin@ucspyay.edu.mm', 'hsuhlainghnin', 9776667776, '2023-01-18 21:38:50', 0),
(312, 'Daw 9554', 'Daw Thuzar Win', 'Lecturer', 'Java Programming', 'i', 'Second Year', 'Section-A', 'Faculty of Computer Science', 'thuzarwin@ucspyay.edu.mm', 'thuzarwin', 9980050502, '2023-01-18 21:40:13', 0),
(313, 'Daw 9776', 'Daw Nwe Ni Win', 'Lecturer', 'Database Mangement System', 'i', 'Second Year', 'Section-A', 'Faculty of Information Science', 'nweniwin@ucspyay.edu.mm', 'nweniwin', 9776788766, '2023-01-18 21:42:04', 0),
(314, 'Daw 9776', 'Daw Ei Thandar Tun', 'Tutor', 'Digital Fundamental', 'i', 'Second Year', 'Section-A', 'Faculty of Computer System and Technology', 'eithandartun@ucspyay.edu.mm', 'eithandartun', 9776554332, '2023-01-18 21:44:02', 0),
(315, 'Daw 9556', 'Daw Hla Hla Htwe', 'Lecturer', 'HTML+CSS', 'i', 'Second Year', 'Section-A', 'Information Technology Support and Maintenance Department', 'hlahlahtwe@ucspyay.edu.mm', 'hlahlahtwe', 9556445443, '2023-01-18 21:45:27', 0),
(316, 'Daw 9334', 'Daw Hnin Akari', 'Assistant Lecturer', 'English', 'i', 'Second Year', 'Section-B', 'Department of Languages', 'hninakari@ucspyay.edu.mm', 'hninakari', 9334554667, '2023-01-18 21:46:54', 0),
(317, 'U Ky9332', 'U Kyaw Zin Htun', 'Tutor', 'Calculus II', 'i', 'Second Year', 'Section-B', 'Faculty of Computational Mathematics', 'kyawzinhtun@ucspyay.edu.mm', 'kyawzinhtun', 9332445667, '2023-01-18 21:48:25', 0),
(318, 'Daw 9554', 'Daw Hsu Hlaing Hnin', 'Tutor', 'Calculus II', 'i', 'Second Year', 'Section-B', 'Faculty of Computational Mathematics', 'hsuhlainghnin@ucspyay.edu.mm', 'hsuhlainghnin', 9554433445, '2023-01-18 21:49:52', 0),
(319, 'Daw 9453', 'Daw Thuzar Win', 'Lecturer', 'Java Programming', 'i', 'Second Year', 'Section-B', 'Faculty of Computer Science', 'thuzarwin@ucspyay.edu.mm', 'thuzarwin', 9980050502, '2023-01-18 21:51:35', 0),
(321, 'Daw 9987', 'Daw Nwe Ni Win', 'Lecturer', 'Database Mangement System', 'i', 'Second Year', 'Section-B', 'Faculty of Information Science', 'nweniwin@ucspyay.edu.mm', 'nweniwin', 9987142520, '2023-01-18 21:53:48', 0),
(322, 'Daw 9813', 'Daw Yin Min Htwe', 'Associate Professor', 'Database Mangement System', 'i', 'Second Year', 'Section-B', 'Faculty of Information Science', 'yinminhtwe@ucspyay.edu.mm', 'yinminhtwe', 9813572091, '2023-01-18 21:55:09', 0),
(323, 'Daw 9632', 'Daw Yin Min Htwe', 'Associate Professor', 'Database Mangement System', 'i', 'Second Year', 'Section-A', 'Faculty of Information Science', 'yinminhtwe@ucspyay.edu.mm', 'yinminhtwe', 9632345850, '2023-01-18 21:58:15', 0),
(324, 'Daw 9452', 'Daw Ei Thandar Tun', 'Tutor', 'Digital Fundamental', 'i', 'Second Year', 'Section-B', 'Faculty of Computer System and Technology', 'eithandartun@ucspyay.edu.mm', 'eithandartun', 9452190241, '2023-01-18 21:59:59', 0),
(325, 'Daw 9421', 'Daw Hla Hla Htwe', 'Lecturer', 'HTML+CSS', 'i', 'Second Year', 'Section-B', 'Information Technology Support and Maintenance Department', 'hlahlahtwe@ucspyay.edu.mm', 'hlahlahtwe', 9556445443, '2023-01-18 22:01:11', 0),
(326, 'Daw 9793', 'Daw Win Thinzar Htun', 'Lecturer', 'Numerical Analysis', 'i', 'Third Year', 'CT', 'Faculty of Computational Mathematics', 'winthinzarhtun@ucspyay.edu.mm', 'winthinzarhtun', 9793671092, '2023-01-18 22:03:34', 0),
(327, 'Daw 9255', 'Daw Nu Nu Hlaing', 'Lecturer', 'Computer Architecture and Organization', 'i', 'Third Year', 'CT', 'Faculty of Computer System and Technology', 'nunuhlaing@ucspyay.edu.mm', 'nunuhlaing', 9255798252, '2023-01-18 22:05:09', 0),
(328, 'Dr.A9255', 'Dr.Aye Pa Pa Mya', 'Professor', 'Artificial Intelligence+Prolog', 'i', 'Third Year', 'CT', 'Faculty of Computer Science', 'ayepapamya@ucspyay.edu.mm', 'ayepapamya', 9420006818, '2023-01-18 22:06:41', 0),
(329, 'Daw 9255', 'Daw Ei Phyu Myint', 'Lecturer', 'Artificial Intelligence+Prolog', 'i', 'Third Year', 'CT', 'Faculty of Computer Science', 'eiphyumyint@ucspyay.edu.mm', 'eiphyumyint', 9262254705, '2023-01-18 22:08:04', 0),
(330, 'Daw 9795', 'Daw Kaung Hsu Wai', 'Tutor', 'Electronics', 'i', 'Third Year', 'CT', 'Faculty of Computer System and Technology', 'kaunghsuwai@ucspyay.edu.mm', 'kaunghsuwai', 9795632113, '2023-01-18 22:09:58', 0),
(331, 'Daw 9798', 'Daw Nu Nu Hlaing', 'Lecturer', 'Control Systems', 'i', 'Third Year', 'CT', 'Faculty of Computer System and Technology', 'nunuhlaing@ucspyay.edu.mm', 'nunuhlaing', 9798321470, '2023-01-18 22:11:29', 0),
(332, 'Dr.T9255', 'Dr.Than Htike Aung', 'Associate Professor', 'Linux Fundamental and Administration', 'i', 'Third Year', 'CT', 'Faculty of Computer Science', 'thanhtikeaung@ucspyay.edu.mm', 'thanhtikeaung', 9255479801, '2023-01-18 22:14:14', 0),
(333, 'Daw 9255', 'Daw Tar Tar Khin', 'Associate Professor', 'Financial Management Accounting', 'i', 'Third Year', 'CT', 'Information Technology Support and Maintenance Department', 'tartarkhin@ucspyay.edu.mm', 'tartarkhin', 9255419046, '2023-01-18 22:16:23', 0),
(334, 'Daw 9982', 'Daw Win Thinzar Htun', 'Lecturer', 'Numerical Analysis', 'i', 'Third Year', 'Section-A', 'Faculty of Computational Mathematics', 'winthinzarhtun@ucspyay.edu.mm', 'winthinzarhtun', 9982560916, '2023-01-18 22:17:45', 0),
(335, 'Daw 9960', 'Daw Nwe Ni Win', 'Lecturer', 'Software Analysis and Design', 'i', 'Third Year', 'Section-A', 'Faculty of Information Science', 'nweniwin@ucspyay.edu.mm', 'nweniwin', 9960120453, '2023-01-18 22:19:15', 0),
(336, 'Daw 9792', 'Daw Nu Nu Hlaing', 'Lecturer', 'Computer Architecture and Organization', 'i', 'Third Year', 'Section-A', 'Faculty of Computer System and Technology', 'nunuhlaing@ucspyay.edu.mm', 'nunuhlaing', 9792016389, '2023-01-18 22:21:49', 0),
(337, 'Daw 9690', 'Daw Hnin Hsu Hlaing', 'Tutor', 'Database System Structure', 'i', 'Third Year', 'Section-A', 'Faculty of Information Science', 'hninhsuhlaing@ucspyay.edu.mm', 'hninhsuhlaing', 9690126402, '2023-01-18 22:23:19', 0),
(338, 'Dr.A9520', 'Dr.Aye Pa Pa Mya', 'Professor', 'Artificial Intelligence+Prolog', 'i', 'Third Year', 'Section-A', 'Faculty of Computer Science', 'ayepapamya@ucspyay.edu.mm', 'ayepapamya', 9420006818, '2023-01-18 22:25:18', 0),
(339, 'Daw 9785', 'Daw Ei Phyu Myint', 'Lecturer', 'Artificial Intelligence+Prolog', 'i', 'Third Year', 'Section-A', 'Faculty of Computer Science', 'eiphyumyint@ucspyay.edu.mm', 'eiphyumyint', 9262254705, '2023-01-18 22:26:34', 0),
(340, 'Daw 9982', 'Daw Wai Wai Myint', 'Lecturer', 'Web Development PHP', 'i', 'Third Year', 'Section-A', 'Information Technology Support and Maintenance Department', 'waiwaimyint@ucspyay.edu.mm', 'waiwaimyint', 9982340126, '2023-01-18 22:27:57', 0),
(341, 'Daw 9256', 'Daw Tar Tar Khin', 'Associate Professor', 'Financial Management Accounting', 'i', 'Third Year', 'Section-A', 'Information Technology Support and Maintenance Department', 'tartarkhin@ucspyay.edu.mm', 'tartarkhin', 9256803165, '2023-01-18 22:29:17', 0),
(342, 'Daw 9250', 'Daw Nilar Win', 'Assistant Lecturer', 'English', 'i', 'Fourth Year', 'Section-A', 'Department of Languages', 'nilarwin@ucspyay.edu.mm', 'nilarwin', 9250474767, '2023-01-18 22:32:04', 0),
(343, 'Dr.A9246', 'Dr.Aye Pa Pa Mya', 'Professor', 'Artificial Intelligence+Prolog', 'i', 'Fourth Year', 'Section-A', 'Faculty of Computer Science', 'ayepapamya@ucspyay.edu.mm', 'ayepapamya', 9420006818, '2023-01-18 22:33:25', 0),
(344, 'Daw 9935', 'Daw Ei Phyu Myint', 'Lecturer', 'Artificial Intelligence+Prolog', 'i', 'Fourth Year', 'Section-A', 'Faculty of Computer Science', 'eiphyumyint@ucspyay.edu.mm', 'eiphyumyint', 9262254705, '2023-01-18 22:35:07', 0),
(345, 'Daw 9945', 'Daw Sandar Pa Pa Thein', 'Associate Professor', 'Mathematics Of Computing IV', 'i', 'Fourth Year', 'Section-A', 'Faculty of Computational Mathematics', 'sandarpapathein@ucspyay.edu.mm', 'sandarpapathein', 9254240011, '2023-01-18 22:37:42', 0),
(346, 'Daw 9735', 'Daw Khin Mar Cho', 'Associate Professor', 'Principle of Information Technology', 'First Seme', 'Fourth Year', 'Section-A', 'Faculty of Computer Science', 'khinmarcho@ucspyay.edu.mm', 'khinmarcho', 9448009311, '2023-01-18 22:39:14', 0),
(347, 'Daw 9457', 'Daw Yin Min Htwe', 'Associate Professor', 'Database Mangement System', 'i', 'Fourth Year', 'Section-A', 'Faculty of Information Science', 'yinminhtwe@ucspyay.edu.mm', 'yinminhtwe', 9457865329, '2023-01-18 22:40:36', 0),
(348, 'U Tu9694', 'U Tun Tin', 'Associate Professor', 'Software Project Management', 'i', 'Fourth Year', 'Section-A', 'Faculty of Information Science', 'tuntin@ucspyay.edu.mm', 'tuntin', 9694526745, '2023-01-18 22:42:35', 0),
(349, 'Dr.E9457', 'Dr.Ei Phyo Wai', 'Professor', 'Introduction To Operating Research', 'i', 'Fourth Year', 'Section-A', 'Faculty of Computational Mathematics', 'eiphyowai@ucspyay.edu.mm', 'eiphyowai', 9457658352, '2023-01-18 22:44:20', 0),
(351, 'Daw 9794', 'Daw Nilar Win', 'Assistant Lecturer', 'English', 'i', 'Fourth Year', 'Section-B', 'Department of Languages', 'nilarwin@ucspyay.edu.mm', 'nilarwin', 9794591234, '2023-01-18 22:47:33', 0),
(352, 'Dr.A9936', 'Dr.Aye Pa Pa Mya', 'Professor', 'Artificial Intelligence+Prolog', 'i', 'Fourth Year', 'Section-B', 'Faculty of Computer Science', 'ayepapamya@ucspyay.edu.mm', 'ayepapamya', 9420006818, '2023-01-18 22:49:04', 0),
(353, 'Daw 9256', 'Daw Ei Phyu Myint', 'Lecturer', 'Artificial Intelligence+Prolog', 'i', 'Fourth Year', 'Section-B', 'Faculty of Computer Science', 'eiphyumyint@ucspyay.edu.mm', 'eiphyumyint', 9262254705, '2023-01-18 22:50:18', 0),
(354, 'Daw 9935', 'Daw Sandar Pa Pa Thein', 'Associate Professor', 'Mathematics Of Computing IV', 'i', 'Fourth Year', 'Section-B', 'Faculty of Computational Mathematics', 'sandarpapathein@ucspyay.edu.mm', 'sandarpapathein', 9254240011, '2023-01-18 22:51:43', 0),
(355, 'Daw 9456', 'Daw Khin Mar Cho', 'Associate Professor', 'Principle of Information Technology', 'First Seme', 'Fourth Year', 'Section-B', 'Faculty of Computer Science', 'khinmarcho@ucspyay.edu.mm', 'khinmarcho', 9448009311, '2023-01-18 22:54:36', 0),
(356, 'Daw 9790', 'Daw Yin Min Htwe', 'Associate Professor', 'Database Mangement System', 'i', 'Fourth Year', 'Section-B', 'Faculty of Information Science', 'yinminhtwe@ucspyay.edu.mm', 'yinminhtwe', 9790875321, '2023-01-18 22:56:29', 0),
(357, 'U Tu9254', 'U Tun Tin', 'Associate Professor', 'Software Project Management', 'i', 'Fourth Year', 'Section-B', 'Faculty of Information Science', 'tuntin@ucspyay.edu.mm', 'tuntin', 9254503216, '2023-01-18 22:57:45', 0),
(358, 'Dr.E9673', 'Dr.Ei Phyo Wai', 'Professor', 'Introduction To Operating Research', 'i', 'Fourth Year', 'Section-B', 'Faculty of Computational Mathematics', 'eiphyowai@ucspyay.edu.mm', 'eiphyowai', 9673756891, '2023-01-18 22:59:19', 0),
(360, 'Daw 9934', 'Daw Nilar Win', 'Assistant Lecturer', 'English', 'i', 'Fourth Year', 'CT', 'Department of Languages', 'nilarwin@ucspyay.edu.mm', 'nilarwin', 9934872190, '2023-01-18 23:02:18', 0),
(361, 'Dr.A9691', 'Dr.Aye Pa Pa Mya', 'Professor', 'Artificial Intelligence+Prolog', 'i', 'Fourth Year', 'CT', 'Faculty of Computer Science', 'ayepapamya@ucspyay.edu.mm', 'ayepapamya', 9420006818, '2023-01-18 23:04:08', 0),
(362, 'Daw 9660', 'Daw Ei Phyu Myint', 'Lecturer', 'Artificial Intelligence+Prolog', 'i', 'Fourth Year', 'CT', 'Faculty of Computer Science', 'eiphyumyint@ucspyay.edu.mm', 'eiphyumyint', 9262254705, '2023-01-18 23:05:26', 0),
(363, 'Daw 9967', 'Daw Sandar Pa Pa Thein', 'Associate Professor', 'Mathematics Of Computing IV', 'i', 'Fourth Year', 'CT', 'Faculty of Computational Mathematics', 'sandarpapathein@ucspyay.edu.mm', 'sandarpapathein', 9254240011, '2023-01-18 23:07:05', 0),
(364, 'Daw 9760', 'Daw Nyein Nyein Hlaing', 'Associate Professor', 'Microcontrollers(online)', 'i', 'Fourth Year', 'CT', 'Faculty of Computer System and Technology', 'nyeinnyeinhlaing@ucspyay.edu.mm', 'nyeinnyeinhlaing', 9760536245, '2023-01-18 23:09:17', 0),
(365, 'Daw 9760', 'Daw Nyein Nyein Hlaing', 'Associate Professor', 'Computer Architecture II', 'i', 'Fourth Year', 'CT', 'Faculty of Computer System and Technology', 'nyeinnyeinhlaing@ucspyay.edu.mm', 'nyeinnyeinhlaing', 9760346245, '2023-01-18 23:10:52', 0),
(366, 'Daw 9699', 'Daw Soe Soe Mon', 'Associate Professor', 'Control Systems', 'i', 'Fourth Year', 'CT', 'Faculty of Computer System and Technology', 'soesoemon@ucspyay.edu.mm', 'soesoemon', 9699872901, '2023-01-18 23:12:45', 0),
(367, 'Dr.M9256', 'Dr.Myat Thuzar', 'Lecturer', 'Computer Networking II', 'i', 'Fourth Year', 'CT', 'Faculty of Computer System and Technology', 'myatthuzar@ucspyay.edu.mm', 'myatthuzar', 9256789013, '2023-01-18 23:14:19', 0),
(368, 'Daw 9255', 'Daw Ei Mon Zin', 'Assistant Lecturer', 'Physics(Lab)', 'ii', 'First Year', 'Section-B', 'Department of Natural Sciences', 'eimonzin@ucspyay.edu.mm', 'eimonzin', 9255096713, '2023-01-19 11:00:43', 0),
(369, 'Daw 9795', 'Daw Win Thinzar Htun', 'Lecturer', 'Calculus II', 'i', 'Second Year', 'Section-A', 'Faculty of Computational Mathematics', 'winthinzarhtun@ucspyay.edu.mm', 'winthinzarhtun', 9795210453, '2023-01-19 11:02:06', 0),
(370, 'Daw 9794', 'Daw Win Thinzar Htun', 'Lecturer', 'Calculus II', 'i', 'Second Year', 'Section-B', 'Faculty of Computational Mathematics', 'winthinzarhtun@ucspyay.edu.mm', 'winthinzarhtun', 9794310325, '2023-01-19 11:03:17', 0),
(372, 'Dr.M9255', 'Dr.Mon Mon Aung', 'Professor', 'Physics', 'i', 'First Year', 'Section-A', 'Department of Natural Sciences', 'monmonaung@ucspyay.edu.mm', 'monmonaung', 9255064310, '2023-01-19 11:25:15', 0),
(373, 'Daw 9790', 'Daw Ei Mon Zin', 'Assistant Lecturer', 'Physics(Lab)', 'i', 'First Year', 'Section-A', 'Department of Natural Sciences', 'eimonzin@ucspyay.edu.mm', 'eimonzin', 9790254331, '2023-01-19 11:26:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `Teacher provided the course outline having weekly content plan w` enum('5','4','3','2','1') NOT NULL,
  `Course objectives,learning outcomes and grading criteria are cle` enum('5','4','3','2','1') NOT NULL,
  `Course integrates throretical course concepts with the real worl` enum('5','4','3','2','1') NOT NULL,
  `Teacher is punctual,arrives on time and leaves on time` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at stimulating the interest in the course conten` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at explaining the subject matter` enum('5','4','3','2','1') NOT NULL,
  `Teacher's presentation was clear,loud ad easy to understand` enum('5','4','3','2','1') NOT NULL,
  `Teacher is good at using innovative teaching methods/ways` enum('5','4','3','2','1') NOT NULL,
  `Teacher is available and helpful during counseling hours` enum('5','4','3','2','1') NOT NULL,
  `Teacher has competed the whole course as per course outline` enum('5','4','3','2','1') NOT NULL,
  `Teacher was always fair and impartial:` enum('5','4','3','2','1') NOT NULL,
  `Assessments conducted are clearly connected to maximize learinin` enum('5','4','3','2','1') NOT NULL,
  `What I liked or dislike about the course` text NOT NULL,
  `date` date NOT NULL,
  `year` varchar(20) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `avg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_id`, `faculty_id`, `Teacher provided the course outline having weekly content plan w`, `Course objectives,learning outcomes and grading criteria are cle`, `Course integrates throretical course concepts with the real worl`, `Teacher is punctual,arrives on time and leaves on time`, `Teacher is good at stimulating the interest in the course conten`, `Teacher is good at explaining the subject matter`, `Teacher's presentation was clear,loud ad easy to understand`, `Teacher is good at using innovative teaching methods/ways`, `Teacher is available and helpful during counseling hours`, `Teacher has competed the whole course as per course outline`, `Teacher was always fair and impartial:`, `Assessments conducted are clearly connected to maximize learinin`, `What I liked or dislike about the course`, `date`, `year`, `section`, `avg`) VALUES
(458, 'Aye Htet Myat', 'hlahlahtwe@ucspyay.edu.mm', '5', '3', '5', '3', '4', '4', '3', '4', '2', '4', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(459, 'Aye Htet Myat', 'hlahlahtwe@ucspyay.edu.mm', '5', '5', '5', '5', '4', '4', '4', '4', '4', '4', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(460, 'Min Thant Zin', 'hninakari@ucspyay.edu.mm', '4', '4', '4', '3', '4', '3', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(461, 'Min Thant Zin', 'kyawzinhtun@ucspyay.edu.mm', '4', '4', '4', '3', '3', '3', '3', '5', '4', '4', '5', '3', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(462, 'Min Thant Zin', 'hsuhlainghnin@ucspyay.edu.mm', '4', '4', '4', '3', '3', '3', '3', '3', '3', '3', '3', '3', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(463, 'Min Thant Zin', 'thuzarwin@ucspyay.edu.mm', '4', '4', '4', '3', '3', '3', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(464, 'Min Thant Zin', 'nweniwin@ucspyay.edu.mm', '5', '5', '4', '3', '3', '3', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(465, 'Min Thant Zin', 'eithandartun@ucspyay.edu.mm', '5', '5', '3', '3', '3', '3', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(466, 'Min Thant Zin', 'hlahlahtwe@ucspyay.edu.mm', '5', '5', '5', '3', '3', '3', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(467, 'Min Thant Zin', 'yinminhtwe@ucspyay.edu.mm', '4', '4', '4', '3', '3', '3', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(468, 'Min Thant Zin', 'winthinzarhtun@ucspyay.edu.mm', '5', '4', '4', '2', '2', '2', '2', '2', '2', '2', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(469, 'Min Thant Zin', 'winthinzarhtun@ucspyay.edu.mm', '5', '5', '5', '3', '3', '4', '3', '3', '3', '3', '4', '4', 'No suggession', '2023-01-20', 'Second Year', 'Section-A', 0),
(470, 'Hein Myat Paing', 'winthinzarhtun@ucspyay.edu.mm', '5', '5', '4', '3', '3', '3', '4', '4', '3', '3', '3', '3', 'No suggession', '2023-01-20', '', '', 0),
(471, 'Hein Myat Paing', 'nweniwin@ucspyay.edu.mm', '4', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'No suggession', '2023-01-20', '', '', 0),
(472, 'Hein Myat Paing', 'nunuhlaing@ucspyay.edu.mm', '5', '4', '4', '3', '2', '2', '2', '2', '2', '2', '3', '3', 'No suggession', '2023-01-20', '', '', 0),
(473, 'Hein Myat Paing', 'ayepapamya@ucspyay.edu.mm', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'No suggession', '2023-01-20', '', '', 0),
(474, 'Hein Myat Paing', 'eiphyumyint@ucspyay.edu.mm', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'No suggession', '2023-01-20', '', '', 0),
(475, 'Hein Myat Paing', 'waiwaimyint@ucspyay.edu.mm', '4', '4', '4', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'No suggession', '2023-01-20', '', '', 0),
(476, 'Hein Myat Paing', 'tartarkhin@ucspyay.edu.mm', '4', '3', '3', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'No suggession', '2023-01-20', '', '', 0),
(477, 'Aye Htet Myat', 'yinminhtwe@ucspyay.edu.mm', '5', '4', '4', '3', '3', '4', '4', '4', '4', '4', '4', '4', 'No suggession', '2023-01-20', '', '', 0),
(479, 'Aye Htet Myat', 'winthinzarhtun@ucspyay.edu.mm', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '\r\nThis teacher is perfect.', '2023-01-20', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_staff`
--

CREATE TABLE `feedback_staff` (
  `id` int(11) NOT NULL,
  `staff_id` varchar(50) NOT NULL,
  ` Do you feel like you are treated with respect?` enum('5','4','3','2','1') NOT NULL,
  `Do you feel valued?` enum('5','4','3','2','1') NOT NULL,
  `Do you feel there is opportunity to grow?` enum('5','4','3','2','1') NOT NULL,
  `Do you enjoy on your job?` enum('5','4','3','2','1') NOT NULL,
  `How can I better support you in your work?` enum('5','4','3','2','1') NOT NULL,
  `How likely is it that you would recommend to a friend?` enum('5','4','3','2','1') NOT NULL,
  `How stisfied are you with the policies that this univesity sets?` enum('5','4','3','2','1') NOT NULL,
  `How satisfied are you with the compensation at this university?` enum('5','4','3','2','1') NOT NULL,
  `How reasonable is the teaching requirement at this univesity?` enum('5','4','3','2','1') NOT NULL,
  `How satisfied are you with the availability of resources ?` enum('5','4','3','2','1') NOT NULL,
  `How well does this university recongnize achievements?` enum('5','4','3','2','1') NOT NULL,
  `How respectfully do members of your department treat ?` enum('5','4','3','2','1') NOT NULL,
  `How satisfied are you with your department leadership?` enum('5','4','3','2','1') NOT NULL,
  `How satisfied are you with the opportunities for professional?` enum('5','4','3','2','1') NOT NULL,
  `Do you have any other comments,questions,or concerns?` text NOT NULL,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_staff`
--

INSERT INTO `feedback_staff` (`id`, `staff_id`, ` Do you feel like you are treated with respect?`, `Do you feel valued?`, `Do you feel there is opportunity to grow?`, `Do you enjoy on your job?`, `How can I better support you in your work?`, `How likely is it that you would recommend to a friend?`, `How stisfied are you with the policies that this univesity sets?`, `How satisfied are you with the compensation at this university?`, `How reasonable is the teaching requirement at this univesity?`, `How satisfied are you with the availability of resources ?`, `How well does this university recongnize achievements?`, `How respectfully do members of your department treat ?`, `How satisfied are you with your department leadership?`, `How satisfied are you with the opportunities for professional?`, `Do you have any other comments,questions,or concerns?`, `start_date`) VALUES
(20, 'waiyanaung@ucspyay.edu.mm', '5', '4', '3', '4', '4', '4', '4', '4', '4', '4', '5', '4', '4', '4', '', '2023-01-20'),
(21, 'zinhninoo@ucspyay.edu.mm', '4', '4', '4', '5', '5', '5', '5', '5', '4', '4', '5', '5', '5', '5', '', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `notice_id` int(11) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`notice_id`, `attachment`, `subject`, `Description`, `Date`) VALUES
(8, 'AteekCV_java (1).docx', 'aaaaa', 'dfdfdfd', '2016-07-03 12:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `rating5` varchar(5) NOT NULL,
  `rating4` varchar(5) NOT NULL,
  `rating3` varchar(5) NOT NULL,
  `rating2` varchar(5) NOT NULL,
  `rating1` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `rating5`, `rating4`, `rating3`, `rating2`, `rating1`) VALUES
(1, 'Teacher provided the course outline having weekly content plan with list of  required text book:', '', '', '', '', ''),
(2, 'Course objectives,learning outcomes and grading criteria are clear to me:', '', '', '', '', ''),
(3, 'Course integrates throretical course concepts with the real world examples:', '', '', '', '', ''),
(4, 'Teacher is punctual,arrives on time and leaves on time:', '', '', '', '', ''),
(5, 'Teacher is good at stimulating the interest in the course content:', '', '', '', '', ''),
(6, 'Teacher is good at explaining the subject matter:', '', '', '', '', ''),
(7, 'Teacher\'s presentation was clear,loud ad easy to understand:', '', '', '', '', ''),
(8, 'Teacher is good at using innovative teaching methods/ways:', '', '', '', '', ''),
(9, 'Teacher is available and helpful during counseling hours:', '', '', '', '', ''),
(10, 'Teacher has competed the whole course as per course outline:', '', '', '', '', ''),
(11, 'Teacher was always fair and impartial:', '', '', '', '', ''),
(12, 'Assessments conducted are clearly connected to maximize learining objectives:', '', '', '', '', ''),
(13, 'Why I liked (or) unlike about the course:', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Job_Position` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(75) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `start_date` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Date_Of_Birth` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `Name`, `Job_Position`, `year`, `department`, `email`, `password`, `mobile`, `start_date`, `status`, `Gender`, `Date_Of_Birth`) VALUES
(6, 'Daw Myint Myint Maw', 'Director', '2018', 'Admin', 'myintmyintmaw@ucspyay.edu.mm', 'myintmyintmaw', 9255246674, '2023-01-19 19:4', 0, 'f', ''),
(7, 'Daw Khin San Lin', 'Head of Branch', '2018', 'Admin', 'khinsanlin@ucspyay.edu.mm', 'khinsanlin', 9255246674, '2023-01-19 19:4', 0, 'f', ''),
(8, 'Daw Thandar Aye', 'Office Superintendent', '2018', 'Admin', 'thandaraye@ucspyay.edu.mm', 'thandaraye', 9255246674, '2023-01-19 19:5', 0, 'f', ''),
(10, 'Daw Zin Hnin Oo', 'Branch Clerk', '2018', 'Admin', 'zinhninoo@ucspyay.edu.mm', 'zinhninoo', 9255246674, '2023-01-19 19:5', 0, 'f', ''),
(11, 'Daw Wai Mar Thin', 'Branch Clerk', '2018', 'Admin', 'waimarthin@ucspyay.edu.mm', 'waimarthin', 9255246674, '2023-01-19 19:5', 0, 'f', ''),
(13, 'Daw Thin Htet Htet Hlaing', 'Lower Clerk', '2018', 'Admin', 'thinhtethtethlaing@ucspyay.edu.mm', 'thinhtethtethlaing', 9255246674, '2023-01-19 20:0', 0, 'f', ''),
(14, 'Daw Wai Thu Soe', 'Lower Clerk', '2018', 'Admin', 'waithusoe@ucspyay.edu.mm', 'waithusoe', 9255246674, '2023-01-19 20:0', 0, 'f', ''),
(15, 'Daw Yu Yu Thin', 'Lower Clerk', '2018', 'Admin', 'yuyuthin@ucspyay.edu.mm', 'yuyuthin', 9255246674, '2023-01-19 20:0', 0, 'f', ''),
(16, 'U Soe Min Thien', 'Lower Clerk', '2018', 'Student Affair', 'soeminthein@ucspyay.edu.mm', 'soeminthein', 9255246674, '2023-01-19 20:1', 0, 'm', ''),
(17, 'U Wai Yan Aung', 'Staff Assistant', '2020', 'Admin', 'waiyanaung@ucspyay.edu.mm', 'waiyanaung', 9255246674, '2023-01-19 20:1', 0, 'm', ''),
(18, 'Daw Khin Soe Han', 'Assistant Registrar', '2014', 'Student Affair', 'khinsoehan@ucspyay.edu.mm', 'khinsoehan', 9255246674, '2023-01-19 20:2', 0, 'f', ''),
(19, 'Daw Khine Thinzar Mg Mg', 'Office Superintendent', '2014', 'Student Affair', 'khinethinzarmgmg@ucspyay.edu.mm', 'khinethinzarmgmg', 9255246674, '2023-01-19 20:2', 0, 'f', ''),
(21, 'Daw Zin Win Shwe', 'Branch Clerk', '2018', 'Student Affair', 'zinwinshwe@ucspyay.edu.mm', 'zinwinshwe', 9255246674, '2023-01-19 20:2', 0, 'f', ''),
(22, 'Daw May Thu Aung', 'Lower Clerk', '2018', 'Student Affair', 'maythuaung@ucspyay.edu.mm', 'maythuaung', 9255246674, '2023-01-19 20:2', 0, 'f', ''),
(23, 'Daw Swe Swe Oo', 'Head of Division', '2018', 'Finance', 'swesweoo@ucspyay.edu.mm', 'swesweoo', 9793549564, '2023-01-19 20:3', 0, 'f', ''),
(24, 'Daw Khin Moe Myint', 'Head of Branch', '2018', 'Finance', 'khinmoemyint@ucspyay.edu.mm', 'khinmoemyint', 9765401129, '2023-01-19 20:3', 0, 'f', ''),
(25, 'Daw Su Su Mar', 'Head of Branch', '2018', 'Finance', 'susumar@ucspyay.edu.mm', 'susumar', 9691541046, '2023-01-19 20:3', 0, 'f', ''),
(26, 'Daw Lin Let Paing', 'Accountant4', '2022', 'Finance', 'linletpaing@ucspyay.edu.mm', 'linletpaing', 9945623098, '2023-01-19 20:3', 0, 'f', ''),
(27, 'Daw Hsu Myat Moe', 'Accountant(4)', '2022', 'Finance', 'hsumyatmoe@ucspyay.edu.mm', 'hsumyatmoe', 9987235612, '2023-01-19 20:4', 0, 'f', ''),
(28, 'Daw Thet Thet Oo', 'Cashier', '2014', 'Finance', 'thetthetoo@ucspyay.edu.mm', 'thetthetoo', 9654312678, '2023-01-19 20:4', 0, 'f', ''),
(29, 'Daw Hnin Wai Lwin', 'Cashier', '2014', 'Finance', 'hninwailwin@ucspyay.edu.mm', 'hninwailwin', 9457823670, '2023-01-19 20:4', 0, 'f', ''),
(31, 'Daw Khin Thuzar Htet', 'Assistant Libraian', '2022', 'Finance', 'khinthuzarhtet@ucspyay.edu.mm', 'khinthuzarhtet', 9887665435, '2023-01-19 21:1', 0, 'f', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuID` int(20) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `class` varchar(50) CHARACTER SET latin1 NOT NULL,
  `class_name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `major` varchar(50) CHARACTER SET latin1 NOT NULL,
  `gmail` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuID`, `name`, `class`, `class_name`, `major`, `gmail`) VALUES
(1, 'Shwe Nadi', 'First year', 'Section-A', 'B.C.Sc', 'shwenadi@ucspyay.edu.mm'),
(2, 'Thiri', 'First year', 'Section-B', 'B.C.Sc', 'thiri@ucspyay.edu.mm'),
(3, 'Lamin Oo', 'First year', 'Section-C', 'B.C.Sc', 'laminoo@ucspyay.edu.mm'),
(4, 'Wai Min Khant', 'First year', 'Section-A', 'B.C.Sc', 'waiminkhant@ucspyay.edu.mm'),
(5, 'Mon Myat Theingi', 'Second year', 'Section-B', 'B.C.Sc', 'monmyattheingi@ucspyay.edu.mm'),
(6, 'Hnin Ei Phyu', 'First year', 'Section-A', 'B.C.Sc', 'hnineiphyu@ucspyay.edu.mm'),
(7, 'La Pyae Ko', 'First year', 'Section-A', 'B.C.Sc', 'lapyaeko@ucspyay.edu.mm'),
(8, 'Min Thaw', 'First year', 'Section-A', 'B.C.Sc', 'minthaw@ucspyay.edu.mm'),
(9, 'Hein Myat Paing', 'Third year', 'Section-A', 'B.C.Sc', 'heinmyatpaing@ucspyay.edu.mm'),
(10, 'Myo Zaw Thant', 'First year', 'Section-A', 'B.C.Sc', 'myozawthant@ucspyay.edu.mm'),
(11, 'Myint Myat Thu', 'First year', 'Section-A', 'B.C.Sc', 'myintmyatthu@ucspyay.edu.mm'),
(12, 'May Phoo Paing', 'First year', 'Section-A', 'B.C.Sc', 'mayphoopaing@ucspyay.edu.mm'),
(13, 'Thura Naing', 'First year', 'Section-A', 'B.C.Sc', 'thuranaing@ucspyay.edu.mm'),
(14, 'Lin Chan Nyein', 'First year', 'Section-A', 'B.C.Sc', 'linchannyein@ucspyay.edu.mm'),
(15, 'Zin Lay Nwe', 'First year', 'Section-A', 'B.C.Sc', 'zinlaynwe@ucspyay.edu.mm'),
(16, 'Soe Nyunt Aung', 'Third year', 'Section-A', 'B.C.Sc', 'soenyuntaung@ucspyay.edu.mm'),
(17, 'Khin Hnin Shwe', 'Third year', 'Section-A', 'B.C.Sc', 'khinhninshwe@ucspyay.edu.mm'),
(18, 'Hnin Waty San', 'Third year', 'Section-A', 'B.C.Sc', 'hninwatysan@ucspyay.edu.mm'),
(19, 'Phyoe Myat Mon', 'Third year', 'Section-A', 'B.C.Sc', 'phyoemyatmon@ucspyay.edu.mm'),
(20, 'Khin Nyein Chan', 'Third year', 'Section-A', 'B.C.Sc', 'khinnyeinchan@ucspyay.edu.mm'),
(21, 'Nyein Thu', 'Third year', 'Section-A', 'B.C.Sc', 'nyeinthu@ucspyay.edu.mm'),
(22, 'Swan Htet Ko', 'Third year', 'Section-A', 'B.C.Sc', 'swanhtetko@ucspyay.edu.mm'),
(23, 'Si Thu Htet', 'Third year', 'Section-A', 'B.C.Sc', 'sithuhtet@ucspyay.edu.mm'),
(24, 'Aye Myat Ko', 'Third year', 'Section-A', 'B.C.Sc', 'ayemyatko@ucspyay.edu.mm'),
(25, 'Khat Hsu Lwin', 'Third year', 'CT', 'B.C.Tech', 'khathsulwin@ucspyay.edu.mm'),
(26, 'Aung Pyae Phyo Hlyan', 'Third year', 'CT', 'B.C.Tech', 'aungpyaephyohlyan@ucspyay.edu.mm'),
(27, 'Zin Min Htet', 'Third year', 'CT', 'B.C.Tech', 'zinminhtet@ucspyay.edu.mm'),
(28, 'Ye Naing Tun', 'Third year', 'CT', 'B.C.Tech', 'yenaingtun@ucspyay.edu.mm'),
(29, 'Khin Myat Mon', 'First year', 'Section-B', 'B.C.Sc', 'khinmyatmon@ucspyay.edu.mm'),
(30, 'Cherry Thin', 'First year', 'Section-B', 'B.C.Sc', 'cherrythin@ucspyay.edu.mm'),
(31, 'Thura Oo', 'First year', 'Section-B', 'B.C.Sc', 'thuraoo@ucspyay.edu.mm'),
(32, 'Min Myat Thu', 'First year', 'Section-B', 'B.C.Sc', 'minmyatthu@ucspyay.edu.mm'),
(33, 'May La Win', 'First year', 'Section-B', 'B.C.Sc', 'maylawin@ucspyay.edu.mm'),
(34, 'Khaing Hnin Wai', 'First year', 'Section-B', 'B.C.Sc', 'khainghninwai@ucspyay.edu.mm'),
(35, 'Zun Pwint Aung', 'First year', 'Section-B', 'B.C.Sc', 'zunpwintaung@ucspyay.edu.mm'),
(36, 'Kaung Khant Kyaw', 'First year', 'Section-B', 'B.C.Sc', 'kaungkhantkyaw@ucspyay.edu.mm'),
(37, 'Khin Phyu Phyu Htet', 'First year', 'Section-B', 'B.C.Sc', 'khinphyuphyuhtet@ucspyay.edu.mm'),
(38, 'April Aung', 'First year', 'Section-B', 'B.C.Sc', 'aprilaung@ucspyay.edu.mm'),
(39, 'Htoo Aung Lwin', 'First year', 'Section-C', 'B.C.Sc', 'htooaunglwin@ucspyay.edu.mm'),
(40, 'Hsu Hlaing Htet', 'First Year', 'Section-C', 'B.C.Sc', 'hsuhlainghtet@ucspyay.edu.mm'),
(41, 'May Thu Thu Naing', 'First Year', 'Section-C', 'B.C.Sc', 'maythuthunaing@ucspyay.edu.mm'),
(42, 'Aye Myat Thu', 'First Year', 'Section-C', 'B.C.Sc', 'ayemyatthu@ucspyay.edu.mm'),
(43, 'Hnin Hnin Wai', 'First Year', 'Section-C', 'B.C.Sc', 'hninhninwai@ucspyay.edu.mm'),
(44, 'Yoon Thiri', 'First Year', 'Section-C', 'B.C.Sc', 'yoonthiri@ucspyay.edu.mm'),
(45, 'Moe Thae Cho', 'First Year', 'Section-C', 'B.C.Sc', 'moethaecho@ucspyay.edu.mm'),
(46, 'Chan Min Htet', 'First Year', 'Section-C', 'B.C.Sc', 'chanminhtet@ucspyay.edu.mm'),
(47, 'Hein Htet Zaw', 'First Year', 'Section-C', 'B.C.Sc', 'heinhtetzaw@ucspyay.edu.mm'),
(48, 'Hnin Wai Htet', 'First Year', 'Section-A', 'B.C.Sc', 'hninwaihtet@ucspyay.edu.mm'),
(49, 'Hnin Yu Hlaing', 'First Year', 'Section-A', 'B.C.Sc', 'hninyuhlaing@ucspyay.edu.mm'),
(50, 'Zwe Pyae Bhone', 'First Year', 'Section-A', 'B.C.Sc', 'zwepyaebhone@ucspyay.edu.mm'),
(51, 'Htet Htet Hlaing', 'First Year', 'Section-A', 'B.C.Sc', 'htethtethlaing@ucspyay.edu.mm'),
(52, 'Thazin Oo Htet', 'First Year', 'Section-A', 'B.C.Sc', 'thazinoohtet@ucspyay.edu.mm'),
(53, 'La Pyae Won', 'First Year', 'Section-A', 'B.C.Sc', 'lapyaewon@ucspyay.edu.mm'),
(54, 'La Pyae Htun', 'First Year', 'Section-A', 'B.C.Sc', 'lapyaehtun@ucspyay.edu.mm'),
(55, 'Ye Htet Aung', 'First Year', 'Section-A', 'B.C.Sc', 'yehtetaung@ucspyay.edu.mm'),
(56, 'Hsu Myat Noe', 'First Year', 'Section-A', 'B.C.Sc', 'hsumyatnoe@ucspyay.edu.mm'),
(57, 'Si Thu Phyo', 'First Year', 'Section-A', 'B.C.Sc', 'sithuphyo@ucspyay.edu.mm'),
(58, 'Kaung Myat Naing', 'First year', 'Section-B', 'B.C.Sc', 'kaungmyatnaing@ucspyay.edu.mm'),
(59, 'Lu Myint Myat', 'First Year', 'Section-B', 'B.C.Sc', 'lumyintmyat@ucspyay.edu.mm'),
(60, 'Sitt Paing Phyo', 'First Year', 'Section-B', 'B.C.Sc', 'sittpaingphyo@ucspyay.edu.mm'),
(61, 'Hlaine Myat Thu', 'First Year', 'Section-B', 'B.C.Sc', 'hlainemyatthu@ucspyay.edu.mm'),
(62, 'Pyae Sone Aung', 'First Year', 'Section-B', 'B.C.Sc', 'pyaesoneaung@ucspyay.edu.mm'),
(63, 'Khaing Khaing Nwe', 'First Year', 'Section-B', 'B.C.Sc', 'khaingkhaingnwe@ucspyay.edu.mm'),
(64, 'Pyae Sone Phyo', 'First Year', 'Section-B', 'B.C.Sc', 'pyaesonephyo@ucspyay.edu.mm'),
(65, 'Thae Lin Oo', 'First Year', 'Section-B', 'B.C.Sc', 'thaelinoo@ucspyay.edu.mm'),
(66, 'Phyu Phyu Thin', 'First Year', 'Section-B', 'B.C.Sc', 'phyuphyuthin@ucspyay.edu.mm'),
(67, 'Pyae Phyo Maung', 'First Year', 'Section-B', 'B.C.Sc', 'pyaephyomaung@ucspyay.edu.mm'),
(68, 'Eaint Yupar', 'Second Year', 'Section-A', 'B.C.Sc', 'eaintyupar@ucspyay.edu.mm'),
(69, 'Thiri Zin', 'Second Year', 'Section-A', 'B.C.Sc', 'thirizin@ucspyay.edu.mm'),
(70, 'Shwe Akari', 'Second Year', 'Section-A', 'B.C.Sc', 'shweakari@ucspyay.edu.mm'),
(71, 'Aye Htet Myat', 'Second Year', 'Section-A', 'B.C.Sc', 'ayehtetmyat@ucspyay.edu.mm'),
(72, 'Min Thant Zin', 'Second Year', 'Section-A', 'B.C.Sc', 'minthantzin@ucspyay.edu.mm'),
(73, 'Khin Phyo Wai', 'Second Year', 'Section-A', 'B.C.Sc', 'khinphyowai@ucspyay.edu.mm'),
(74, 'Yamone Oo', 'Second Year', 'Section-A', 'B.C.Sc', 'yamoneoo@ucspyay.edu.mm'),
(75, 'Win Pa Pa Min', 'Second Year', 'Section-A', 'B.C.Sc', 'winpapamin@ucspyay.edu.mm'),
(76, 'Hsu Swe Zin', 'Second Year', 'Section-A', 'B.C.Sc', 'hsuswezin@ucspyay.edu.mm'),
(77, 'Kyaw Lwin Oo', 'Second Year', 'Section-A', 'B.C.Sc', 'kyawlwinoo@ucspyay.edu.mm'),
(78, 'Hlaing Myat Mon', 'Second Year', 'Section-B', 'B.C.Sc', 'hlaingmyatmon@ucspyay.edu.mm'),
(79, 'Ye Yint Aung', 'Second Year', 'Section-B', 'B.C.Sc', 'yeyintaung@ucspyay.edu.mm'),
(80, 'Su Phoo Wai', 'Second Year', 'Section-B', 'B.C.Sc', 'suphoowai@ucspyay.edu.mm'),
(81, 'Khaing Zin Thant', 'Second Year', 'Section-B', 'B.C.Sc', 'khaingzinthant@ucspyay.edu.mm'),
(82, 'Hsu Wai Hlaing', 'Second Year', 'Section-B', 'B.C.Sc', 'hsuwaihlaing@ucspyay.edu.mm'),
(83, 'Kyal Sin Win', 'Second Year', 'Section-B', 'B.C.Sc', 'kyalsinwin@ucspyay.edu.mm'),
(84, 'Kyal Sin Lin', 'Second Year', 'Section-B', 'B.C.Sc', 'kyalsinlin@ucspyay.edu.mm'),
(85, 'May Phuu Kyaw', 'Second Year', 'Section-B', 'B.C.Sc', 'mayphuukyaw@ucspyay.edu.mm'),
(86, 'Htet Paing Kyaw', 'Second Year', 'Section-B', 'B.C.Sc', 'htetpaingkyaw@ucspyay.edu.mm'),
(87, 'Ei Phyu Thin', 'Fourth Year', 'Section-A', 'B.C.Sc', 'eiphyuthin@ucspyay.edu.mm'),
(88, 'Aye Sandar', 'Fourth Year', 'Section-A', 'B.C.Sc', 'ayesandar@ucspyay.edu.mm'),
(89, 'Khin Khin Cho', 'Fourth Year', 'Section-A', 'B.C.Sc', 'khinkhincho@ucspyay.edu.mm'),
(90, 'Thazin Oo', 'Fourth Year', 'Section-A', 'B.C.Sc', 'thazinoo@ucspyay.edu.mm'),
(91, 'Hsu Hsu Yee', 'Fourth Year', 'Section-A', 'B.C.Sc', 'hsuhsuyee@ucspyay.edu.mm'),
(92, 'Khaing Khaing Htet', 'Fourth Year', 'Section-A', 'B.C.Sc', 'khaingkhainghtet@ucspyay.edu.mm'),
(93, 'Kay Thi Htun', 'Fourth Year', 'Section-A', 'B.C.Sc', 'kaythihtun@ucspyay.edu.mm'),
(94, 'Ei Ei Chaw', 'Fourth Year', 'Section-A', 'B.C.Sc', 'eieichaw@ucspyay.edu.mm'),
(95, 'Myint Myat Moe', 'Fourth Year', 'Section-A', 'B.C.Sc', 'myintmyatmoe@ucspyay.edu.mm'),
(96, 'Swan Yi Htet', 'Fourth Year', 'Section-A', 'B.C.Sc', 'swanyihtet@ucspyay.edu.mm'),
(97, 'Nilar Win', 'Fourth Year', 'Section-B', 'B.C.Sc', 'nilarwin@ucspyay.edu.mm'),
(98, 'Soe Yadanar', 'Fourth Year', 'Section-B', 'B.C.Sc', 'soeyadanar@ucspyay.edu.mm'),
(99, 'Chan Myae Thu', 'Fourth Year', 'Section-B', 'B.C.Sc', 'chanmyaethu@ucspyay.edu.mm'),
(100, 'Wai Yan Hein', 'Fourth Year', 'Section-B', 'B.C.Sc', 'waiyanhein@ucspyay.edu.mm'),
(101, 'Soe Htet Paing', 'Fourth Year', 'Section-B', 'B.C.Sc', 'soehtetpaing@ucspyay.edu.mm'),
(102, 'Kaung Myat Win', 'Fourth Year', 'Section-B', 'B.C.Sc', 'kaungmyatwin@ucspyay.edu.mm'),
(103, 'Aung Aung Lin', 'Fourth Year', 'Section-B', 'B.C.Sc', 'aungaunglin@ucspyay.edu.mm'),
(104, 'Khant Win Htut', 'Fourth Year', 'Section-B', 'B.C.Sc', 'khantwinhtut@ucspyay.edu.mm'),
(105, 'Shoon Lae Oo', 'Fourth Year', 'Section-B', 'B.C.Sc', 'shoonlaeoo@ucspyay.edu.mm'),
(106, 'Soe Yu Nandar', 'Fourth Year', 'Section-B', 'B.C.Sc', 'soeyunandar@ucspyay.edu.mm'),
(107, 'Khant Si Thu', 'Fourth Year', 'CT', 'B.C.Tech', 'khantsithu@ucspyay.edu.mm'),
(108, 'Ei Ei Mon', 'Fourth Year', 'CT', 'B.C.Tech', 'eieimon@ucspyay.edu.mm'),
(109, 'Aung Ye Kyaw', 'Fourth Year', 'CT', 'B.C.Tech', 'aungyekyaw@ucspyay.edu.mm'),
(110, 'Min Htet Naing', 'Fourth Year', 'CT', 'B.C.Tech', 'minhtetnaing@ucspyay.edu.mm'),
(111, 'Min Htet Naing', 'Select Academic Year', 'Select Your Section', 'Select Your Major', 'minhtetnaing@ucspyay.edu.mm'),
(112, 'Shin Thant Ko', 'Fourth Year', 'CT', 'Select Your Major', 'shinthantko@ucspyay.edu.mm'),
(113, 'Thandar Nwe', 'Fourth Year', 'CT', 'B.C.Tech', 'thandarnwe@ucspyay.edu.mm'),
(114, 'Swe Zin Thet', 'Fourth Year', 'CT', 'B.C.Tech', 'swezinthet@ucspyay.edu.mm'),
(115, 'Naing Win Moe', 'Fourth Year', 'CT', 'B.C.Tech', 'naingwinmoe@ucspyay.edu.mm'),
(116, 'Zaw Htut Aung', 'Fourth Year', 'CT', 'B.C.Tech', 'zawhtutaung@ucspyay.edu.mm'),
(117, 'Pyae Phyo Thaw', 'Fourth Year', 'CT', 'B.C.Tech', 'pyaephyothaw@ucspyay.edu.mm'),
(118, 'Ye Yint Naing', 'First Year', 'Section-A', 'B.C.Sc', 'yeyintnaing@ucspyay.edu.mm'),
(119, 'Htet Myat Noe(1)', 'First Year', 'Section-A', 'B.C.Sc', 'htetmyatnoe1@ucspyay.edu.mm'),
(120, 'Shine Wunna Oo', 'First Year', 'Section-A', 'B.C.Sc', 'shinewunnaoo@ucspyay.edu.mm'),
(121, 'Nay Chi Theint', 'First Year', 'Section-A', 'B.C.Sc', 'naychitheint@ucspyay.edu.mm'),
(122, 'Eaint Hmue Aung', 'First Year', 'Section-A', 'B.C.Sc', 'eainthmueaung@ucspyay.edu.mm'),
(123, 'Ei Ei Phway', 'First Year', 'Section-A', 'B.C.Sc', 'eieiphway@ucspyay.edu.mm'),
(124, 'Thae Su Lwin', 'First Year', 'Section-A', 'B.C.Sc', 'thaesulwin@ucspyay.edu.mm'),
(125, 'Ingyin Khaing', 'First Year', 'Section-A', 'B.C.Sc', 'ingyinkhaing@ucspyay.edu.mm'),
(126, 'Thin Zarchi Maung', 'First Year', 'Section-A', 'B.C.Sc', 'thinzarchimaung@ucspyay.edu.mm'),
(127, 'Kyawt Kay Thwe(1)', 'First Year', 'Section-A', 'B.C.Tech', 'kyawtkaythwe1@ucspyay.edu.mm'),
(128, 'Thiri Win Htet', 'First Year', 'Section-B', 'B.C.Sc', 'thiriwinhtet@ucspyay.edu.mm'),
(129, 'Yoon Thet Htar', 'First Year', 'Section-B', 'B.C.Sc', 'yoonthethtar@ucspyay.edu.mm'),
(130, 'Si Thu Htet(1)', 'First Year', 'Section-B', 'B.C.Sc', 'sithuhtet1@ucspyay.edu.mm'),
(131, 'Lwin Yu Yu Aung ', 'First Year', 'Section-B', 'B.C.Sc', 'lwinyuyuaung@ucspyay.edu.mm'),
(132, 'Phoo Pyae Pyae Thwe', 'First Year', 'Section-B', 'B.C.Sc', 'phoopyaepyaethwe@ucspyay.edu.mm'),
(133, 'Yati Su Khin', 'First Year', 'Section-B', 'Select Your Major', 'yatisukhin@ucspyay.edu.mm'),
(134, 'Pyae Phyo Kyaw', 'First Year', 'Section-B', 'B.C.Sc', 'pyaephyokyaw@ucspyay.edu.mm'),
(135, 'Zun Pwint Aung', 'First Year', 'Section-B', 'B.C.Sc', 'zunpwintaung@ucspyay.edu.mm'),
(136, 'Aye Nyein Thet', 'First Year', 'Section-B', 'B.C.Sc', 'ayenyeinthet@ucspyay.edu.mm'),
(137, 'Lamin Po Po', 'First Year', 'Section-B', 'B.C.Sc', 'laminpopo@ucspyay.edu.mm'),
(138, 'Phyu Zin Moe', 'First Year', 'Section-C', 'B.C.Sc', 'phyuzinmoe@ucspyay.edu.mm'),
(139, 'Ei Thu Thu Maung', 'First Year', 'Section-C', 'B.C.Sc', 'eithuthumaung@ucspyay.edu.mm'),
(140, 'Htet Naing Htut', 'First Year', 'Section-C', 'B.C.Sc', 'htetnainghtut@ucspyay.edu.mm'),
(141, 'Thet Mon Phyo(2)', 'First Year', 'Section-C', 'B.C.Sc', 'thetmonphyo2@ucspyay.edu.mm'),
(142, 'Su Wai Hlaing', 'First Year', 'Section-C', 'B.C.Sc', 'suwaihlaing@ucspyay.edu.mm'),
(143, 'Eaint Hmue Khin', 'First Year', 'Section-C', 'B.C.Sc', 'eainthmuekhin@ucspyay.edu.mm'),
(144, 'Su Pyae Eain', 'First Year', 'Section-C', 'B.C.Sc', 'supyaeeain@ucspyay.edu.mm'),
(145, 'Cho Zin Htun', 'First Year', 'Section-C', 'B.C.Sc', 'chozinhtun@ucspyay.edu.mm'),
(146, 'Su Shwe Yi Htet', 'First Year', 'Section-C', 'B.C.Sc', 'sushweyihtet@ucspyay.edu.mm'),
(147, 'Saw Su Pyae Mon', 'First Year', 'Section-C', 'B.C.Sc', 'sawsupyaemon@ucspyay.edu.mm'),
(148, 'Chaw Su Hlaing', 'First Year', 'Section-A', 'B.C.Sc', 'chawsuhlaing@ucspyay.edu.mm'),
(149, 'Salai Win Thiha Oo', 'First Year', 'Section-A', 'B.C.Sc', 'salaiwinthihaaung@ucspyay.edu.mm'),
(150, 'Myo Sandar Aung', 'First Year', 'Section-A', 'B.C.Sc', 'myosandaraung@ucspyay.edu.mm'),
(151, 'Paing Zin Phyo Zaw', 'First Year', 'Section-A', 'B.C.Sc', 'paingzinphyozaw@ucspyay.edu.mm'),
(152, 'Myo Sandar Win', 'First Year', 'Section-A', 'B.C.Sc', 'myosandarwin@ucspyay.edu.mm'),
(153, 'Naw Yoon Nadi', 'First Year', 'Section-A', 'B.C.Sc', 'nawyoonnadi@ucspyay.edu.mm'),
(154, 'Pyone Thiri Thwe', 'First Year', 'Section-A', 'B.C.Sc', 'pyonethirithwe@ucspyay.edu.mm'),
(155, 'Bhone Min Khant', 'First Year', 'Section-A', 'B.C.Sc', 'bhoneminkhant@ucspyay.edu.mm'),
(156, 'Shin Bhone Wai Thu', 'First Year', 'Section-A', 'B.C.Sc', 'shinbhonewaithu@ucspyay.edu.mm'),
(157, 'Htet Eaindray', 'First Year', 'Section-A', 'B.C.Sc', 'hteteaindray@ucspyay.edu.mm'),
(158, 'Thet Htoo San', 'First Year', 'Section-B', 'B.C.Sc', 'thethtoosan@ucspyay.edu.mm'),
(159, 'Zaw Win Khant', 'First Year', 'Section-B', 'B.C.Sc', 'zawwinkhant@ucspyay.edu.mm'),
(160, 'Chuu Kalayar Soe', 'First Year', 'Section-B', 'B.C.Sc', 'chuukalayarsoe@ucspyay.edu.mm'),
(161, 'Kyaw Min Htet', 'First Year', 'Section-A', 'B.C.Sc', 'kyawminhtet@ucspyay.edu.mm'),
(162, 'Nan Naychi Oo', 'First Year', 'Section-B', 'B.C.Sc', 'nannaychioo@ucspyay.edu.mm'),
(163, 'Nan Naychi Oo', 'First Year', 'Section-B', 'B.C.Sc', 'nannaychioo@ucspyay.edu.mm'),
(164, 'Nan Naychi Oo', 'First Year', 'Section-B', 'B.C.Sc', 'nannaychioo@ucspyay.edu.mm'),
(165, 'Nan Naychi Oo', 'First Year', 'Section-B', 'B.C.Sc', 'nannaychioo@ucspyay.edu.mm'),
(166, 'Nan Naychi Oo', 'First Year', 'Section-B', 'B.C.Sc', 'nannaychioo@ucspyay.edu.mm'),
(167, 'Khine Thazin Oo', 'First Year', 'Section-B', 'B.C.Sc', 'khinethazinoo@ucspyay.edu.mm'),
(168, 'Shwe Min Thant', 'First Year', 'Section-B', 'B.C.Sc', 'shweminthant@ucspyay.edu.mm'),
(169, 'Thiri Shoon Lae', 'First Year', 'Section-B', 'B.C.Sc', 'thirishoonlae@ucspyay.edu.mm'),
(170, 'San Lin Aung', 'First Year', 'Section-B', 'B.C.Sc', 'sanlinaung@ucspyay.edu.mm'),
(171, 'Thet Htet Su Mon', 'First Year', 'Section-B', 'B.C.Sc', 'thethtetsumon@ucspyay.edu.mm'),
(172, 'Myat Theigi Kyaw', 'Second Year', 'Section-A', 'B.C.Sc', 'myattheigikyaw@ucspyay.edu.mm'),
(173, 'Yoon Pa Pa Htun', 'Second Year', 'Section-A', 'B.C.Sc', 'yoonpapahtun@ucspyay.edu.mm'),
(174, 'Khin Lapyae Won', 'Second Year', 'Section-A', 'B.C.Sc', 'khinlapyaewon@ucspyay.edu.mm'),
(175, 'Kyi Sin Thant', 'Second Year', 'Section-B', 'B.C.Sc', 'kyisinthant@ucspyay.edu.mm'),
(176, 'Zun Pwint Phyu', 'Second Year', 'Section-A', 'B.C.Sc', 'zunpwintphyu@ucspyay.edu.mm'),
(177, 'Khin Swe Kyaw ', 'Second Year', 'Section-A', 'B.C.Sc', 'khinswekyaw@ucspyay.edu.mm'),
(178, 'Thazin Thet Oo', 'Second Year', 'Section-A', 'B.C.Sc', 'thazinthetoo@ucspyay.edu.mm'),
(179, 'Khin Swe Zin Han', 'Second Year', 'Section-A', 'B.C.Sc', 'khinswezinhan@ucspyay.edu.mm'),
(180, 'Theint Tharaphi Myint', 'Second Year', 'Section-A', 'B.C.Sc', 'theinttharaphimyint@ucspyay.edu.mm'),
(181, 'Yu Shwe Yi Kyaw', 'Second Year', 'Section-A', 'B.C.Sc', 'yushweyikyaw@ucspyay.edu.mm'),
(182, 'Hnin Akary Hlaing', 'Second Year', 'Section-B', 'B.C.Sc', 'hninakaryhlaing@ucspyay.edu.mm'),
(183, 'Wai Phyo Lwin', 'Second Year', 'Section-B', 'B.C.Sc', 'waiphyolwin@ucspyay.edu.mm'),
(184, 'Hsu Lin Lae', 'Second Year', 'Section-B', 'B.C.Sc', 'hsulinlae@ucspyay.edu.mm'),
(185, 'Ei Zu Zu Maung', 'Second Year', 'Section-B', 'B.C.Sc', 'eizuzumaung@ucspyay.edu.mm'),
(186, 'Khaing Zin Thant', 'Second Year', 'Section-B', 'B.C.Sc', 'khaingzinthant@ucspyay.edu.mm'),
(187, 'Paing Zin Zaw', 'Second Year', 'Section-B', 'B.C.Sc', 'paingzinzaw@ucspyay.edu.mm'),
(188, 'Paing Zin Zaw', 'Second Year', 'Section-B', 'B.C.Sc', 'paingzinzaw@ucspyay.edu.mm'),
(189, 'Kyi Zin Ko', 'Second Year', 'Section-B', 'B.C.Sc', 'kyizinko@ucspyay.edu.mm'),
(190, 'Depar Htwe', 'Second Year', 'Section-B', 'B.C.Sc', 'deparhtwe@ucspyay.edu.mm'),
(191, 'Nyein Chan Ko Ko', 'Second Year', 'Section-B', 'B.C.Sc', 'nyeinchankoko@ucspyay.edu.mm'),
(192, 'Arkar Kyaw Thu', 'Second Year', 'Section-B', 'B.C.Sc', 'arkarkyawthu@ucspyay.edu.mm'),
(193, 'Ei Shwe Sin Min', 'Third Year', 'Section-A', 'B.C.Sc', 'eishwesinmin@ucspyay.edu.mm'),
(194, 'Htet Po Po', 'Third Year', 'Section-A', 'B.C.Sc', 'htetpopo@ucspyay.edu.mm'),
(195, 'Phyoe Pa Pa Nyein', 'Third Year', 'Section-A', 'B.C.Sc', 'phyoepapanyein@ucspyay.edu.mm'),
(196, 'Chuu Myat Phyo', 'Third Year', 'Section-A', 'B.C.Sc', 'chuumyatphyo@ucspyay.edu.mm'),
(197, 'Htet Lin Kyaw', 'Third Year', 'Section-A', 'B.C.Sc', 'htetlinkyaw@ucspyay.edu.mm'),
(198, 'Zin Mar Win', 'Third Year', 'Section-A', 'B.C.Sc', 'zinmarwin@ucspyay.edu.mm'),
(199, 'Nway Nway Lin', 'Third Year', 'Section-A', 'B.C.Sc', 'nwaynwaylin@ucspyay.edu.mm'),
(200, 'San Min Aung', 'Third Year', 'Section-A', 'B.C.Sc', 'sanminaung@ucspyay.edu.mm'),
(201, 'Shine Wai Yan', 'Third Year', 'Section-A', 'B.C.Sc', 'shinewaiyan@ucspyay.edu.mm'),
(202, 'Htet Htet Kyaw', 'Third Year', 'Section-A', 'B.C.Sc', 'htethtetkyaw@ucspyay.edu.mm'),
(203, 'Thiri Win Myint', 'Fourth Year', 'Section-A', 'B.C.Sc', 'thiriwinmyint@ucspyay.edu.mm'),
(204, 'San Thi Thi Nyein', 'Fourth Year', 'Section-A', 'B.C.Sc', 'santhithinyein@ucspyay.edu.mm'),
(205, 'Thet Ngone Phuu', 'Fourth Year', 'Section-A', 'B.C.Sc', 'thetngonephuu@ucspyay.edu.mm'),
(206, 'Chuu Thinzar', 'Fourth Year', 'Section-A', 'B.C.Sc', 'chuuthinzar@ucspyay.edu.mm'),
(208, 'Wutyi Aung', 'Fourth Year', 'Section-A', 'B.C.Sc', 'wutyiaung@ucspyay.edu.mm'),
(209, 'Arnt Thu Kyaw ', 'Fourth Year', 'Section-A', 'B.C.Sc', 'arntthukyaw@ucspyay.edu.mm'),
(210, 'Yoon Yanadar Oo', 'Fourth Year', 'Section-A', 'B.C.Sc', 'yoonyanadaroo@ucspyay.edu.mm'),
(211, 'Saint Yati Htun', 'Fourth Year', 'Section-A', 'B.C.Sc', 'saintyatihtun@ucspyay.edu.mm'),
(212, 'Lin Htut Kyaw', 'Fourth Year', 'Section-A', 'B.C.Sc', 'linhtutkyaw@ucspyay.edu.mm'),
(213, 'aungaung', 'Third Year', 'Section-A', 'B.C.Sc', 'aungaung@gmail.com'),
(214, 'aungaung', 'Third Year', 'Section-A', 'B.C.Sc', 'aungaung@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE `suggest` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `suggest` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tID` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` int(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tID`, `Name`, `designation`, `programme`, `semester`, `year`, `section`, `department`, `email`, `mobile`, `date`) VALUES
(0, 'Dr.Myat Thu Zar', 'Lecturer', 'Subject', 'ii', 'Fourth Year', 'CT', 'Faculty of Computer System and Technology', 'myatthuzar@ucspyay.edu.mm', 901999999, '2021-07-02 14:26:05'),
(8, 'Daw Thuzar Win', 'Lecturer', 'Object Oriented Programming', 'ii', 'First Year', 'Section-A', 'Faculty of Computer Science', 'thuzarwin@ucspyay.edu.mm', 2147483647, '2023-01-18 20:27:47'),
(11, 'Dr.K Kay', 'Lecturer', 'Subject', 'i', 'Third Year', 'Section-A', 'Faculty of Information Science', 'kkay@ucspyay.edu.mm', 901990189, '2023-01-18 21:25:53'),
(12, 'Dr.Khaing Wah Wah Lin', 'Lecturer', 'Informatin Security', 'i', 'Fifth Year', 'Section-A', 'Faculty of Information Science', 'khaingwahwahlin@ucspyay.edu.mm', 901990789, '2023-01-18 21:27:11'),
(15, 'Daw Ei Ni Tar Htun', 'Lecturer', 'Subject', 'i', 'Second Year', 'CT', 'Faculty of Computer System and Technology', 'einitarhtun@ucspyay.edu.mm', 901996789, '2023-01-18 23:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `programme` varchar(20) NOT NULL,
  `Class` varchar(20) NOT NULL,
  `class_name` varchar(20) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(40) NOT NULL,
  `Language` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `regid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `programme`, `Class`, `class_name`, `semester`, `gender`, `hobbies`, `Language`, `image`, `dob`, `regid`) VALUES
(119, 'Shwe Nadi', 'shwenadi@ucspyay.edu.mm', 'shwenadi', 9255064310, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'female', 'singing', 'java', 'ww.jpg', '2005-08-09', '2023-01-19 11:15:53'),
(120, 'Thiri', 'thiri@ucspyay.edu.mm', 'thiri', 9265001432, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'dancing,playing football', 'c', 'IMG-1a5e1590dc2738b28adf46cd65e20204-V.jpg', '2005-06-03', '2023-01-19 11:37:53'),
(121, 'Lamin Oo', 'laminoo@ucspyay.edu.mm', 'laminoo', 9766402154, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'male', 'playing backetball', 'android', 'FB_IMG_1635296884780.jpg', '2004-10-10', '2023-01-19 11:48:20'),
(122, 'Wai Min Khant', 'waiminkhant@ucspyay.edu.mm', 'waiminkhant', 9766042153, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'male', 'reading', 'java', 'FB_IMG_1635296884780.jpg', '2004-10-10', '2023-01-19 11:54:13'),
(123, 'Mon Myat Theingi', 'monmyattheingi@ucspyay.edu.mm', 'monmyattheingi', 94532210685, 'B.C.Sc', 'Second Year', 'Section-B', 'i', 'female', 'singing', 'android', 'FB_IMG_1635296884780.jpg', '2003-10-10', '2023-01-19 11:58:49'),
(124, 'Khat Hsu Lwin', 'khathsulwin@ucspyay.edu.mm', 'khathsulwin', 9255014492, 'B.C.Tech', 'Third Year', 'Section-A', 'i', '', 'reading', 'networking', 'FB_IMG_1635296884780.jpg', '2002-10-10', '2023-01-19 14:04:28'),
(125, 'Phyo Myat Mon', 'phyoemyatmon@ucspyay.edu.mm', 'phyoemyatmon', 9255246674, 'B.C.Sc', 'Third Year', 'Section-A', 'i', '', 'reading', 'javascript', 'IMG_20221222_224758.jpg', '2002-06-13', '2023-01-19 15:33:02'),
(126, 'Thazin Oo', 'thazinoo@ucspyay.edu.mm', 'thazinoo', 9654312678, 'B.C.Sc', 'Fourth Year', 'Section-A', 'i', 'female', 'reading', 'java', 'FB_IMG_1635296884780.jpg', '1998-08-08', '2023-01-19 20:53:40'),
(127, 'Nilar Win', 'nilarwin@ucspyay.edu.mm', 'nilarwin', 9987235612, 'B.C.Sc', 'Fourth Year', 'Section-B', 'i', 'female', 'reading', 'java', 'FB_IMG_1635296884780.jpg', '1999-06-06', '2023-01-19 20:59:09'),
(128, 'Hnin Ei Phyu', 'hnineiphyu@ucspyay.edu.mm', 'hnineiphyu', 9776556778, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'f', 'reading,playing', 'java', 'FB_IMG_1635296884780.jpg', '2004-02-01', '2023-01-19 21:21:38'),
(129, 'La Pyae Ko', 'lapyaeko@ucspyay.edu.mm', 'lapyaeko', 9776554223, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'male', 'gaming', 'c', 'FB_IMG_1635296884780.jpg', '2004-04-04', '2023-01-19 21:24:57'),
(130, 'Min Thaw', 'minthaw@ucspyay.edu.mm', 'minthaw', 9334556778, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'male', 'dancing', 'javascript', 'FB_IMG_1635296884780.jpg', '2003-05-07', '2023-01-19 21:27:32'),
(131, 'Myo Zaw Thant', 'myozawthant@ucspyay.edu.mm', 'myozawthant', 9999000888, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'male', 'singing', 'java', 'FB_IMG_1635296884780.jpg', '2004-02-04', '2023-01-19 21:29:35'),
(132, 'Myint Myat Thu', 'myintmyatthu@ucspyay.edu.mm', 'myintmyatthu', 9112332223, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'male', 'gaming', 'java', 'FB_IMG_1635296884780.jpg', '2003-06-07', '2023-01-19 21:31:13'),
(133, 'May Phoo Paing', 'mayphoopaing@ucspyay.edu.mm', 'mayphoopaing', 9880776556, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'female', 'dancing', 'networking', 'FB_IMG_1635296884780.jpg', '2004-06-07', '2023-01-19 21:33:40'),
(134, 'Thura Naing', 'thuranaing@ucspyay.edu.mm', 'thuranaing', 9665443225, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'male', 'reading', 'c', 'FB_IMG_1635296884780.jpg', '2004-05-14', '2023-01-19 21:35:46'),
(135, 'Lin Chan Nyein', 'linchannyein@ucspyay.edu.mm', 'linchannyein', 9776880999, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'male', 'singing', 'c', 'FB_IMG_1635296884780.jpg', '2003-08-09', '2023-01-19 21:38:09'),
(136, 'Zin Lay Nwe', 'zinlaynwe@ucspyay.edu.mm', 'zinlaynwe', 9887667556, 'B.C.Sc', 'First Year', 'Section-A', 'i', 'female', 'reading', 'android', 'll.jpg', '2004-06-04', '2023-01-19 21:43:49'),
(137, 'Khin Myat Mon', 'khinmyatmon@ucspyay.edu.mm', 'khinmyatmon', 9779999008, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'singing', 'java', 'll.jpg', '2004-06-04', '2023-01-19 21:50:23'),
(138, 'Cherry Thin', 'cherrythin@ucspyay.edu.mm', 'cherrythin', 9667556443, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'reading', 'java', 'll.jpg', '2004-08-17', '2023-01-19 21:58:25'),
(139, 'Thura Oo', 'thuraoo@ucspyay.edu.mm', 'thuraoo', 9789765678, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'male', 'reading', 'javascript', 'ww.jpg', '2003-05-17', '2023-01-19 22:05:36'),
(140, 'Min Myat Thu', 'minmyatthu@ucspyay.edu.mm', 'minmyatthu', 9555666444, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'male', 'singing', 'java', 'ww.jpg', '2004-11-01', '2023-01-19 22:07:31'),
(141, 'May La Win', 'maylawin@ucspyay.edu.mm', 'maylawin', 9453245768, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'dancing', 'javascript', 'll.jpg', '2003-07-10', '2023-01-19 22:09:14'),
(142, 'Khaing Hnin Wai', 'khainghninwai@ucspyay.edu.mm', 'khainghninwai', 9768765456, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'reading', 'java', 'll.jpg', '2004-06-04', '2023-01-19 22:11:24'),
(143, 'Kaung Khant Kyaw', 'kaungkhantkyaw@ucspyay.edu.mm', 'kaungkhantkyaw', 9212232343, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'male', 'reading,gaming', 'java', 'ww.jpg', '2004-09-02', '2023-01-19 22:16:26'),
(144, 'Khin Phyu Phyu Htet', 'khinphyuphyuhtet@ucspyay.edu.mm', 'khinphyuphyuhtet', 9666765567, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'reading', 'javascript', 'll.jpg', '2003-07-12', '2023-01-19 22:18:38'),
(145, 'April Aung', 'aprilaung@ucspyay.edu.mm', 'aprilaung', 9787666543, 'B.C.Sc', 'First Year', 'Section-B', 'i', 'female', 'dancing', 'java', 'll.jpg', '2004-09-07', '2023-01-19 22:22:09'),
(146, 'Htoo Aung Lwin', 'htooaunglwin@ucspyay.edu.mm', 'htooaunglwin', 9554346754, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'male', 'singing', 'java', 'ww.jpg', '2004-08-03', '2023-01-19 22:26:54'),
(147, 'Hsu Hlaing Htet', 'hsuhlainghtet@ucspyay.edu.mm', 'hsuhlainghtet', 9342536764, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'female', 'dancing', 'java', 'll.jpg', '2004-03-11', '2023-01-19 22:30:46'),
(148, 'May Thu Thu Naing', 'maythuthunaing@ucspyay.edu.mm', 'maythuthunaing', 93625473645, 'B.C.Sc', 'First Year', 'Section-C', 'i', '', 'reading', 'javascript', 'll.jpg', '2003-12-05', '2023-01-19 22:32:52'),
(149, 'Aye Myat Thu', 'ayemyatthu@ucspyay.edu.mm', 'ayemyatthu', 9544556665, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'female', 'reading', 'java', 'll.jpg', '2004-09-14', '2023-01-19 22:34:48'),
(150, 'Hnin Hnin Wai', 'hninhninwai@ucspyay.edu.mm', 'hninhninwai', 9463774778, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'female', 'reading', 'java', 'll.jpg', '2003-06-04', '2023-01-19 22:36:53'),
(151, 'Yoon Thiri', 'yoonthiri@ucspyay.edu.mm', 'yoonthiri', 9887556446, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'female', 'reading', 'java', 'll.jpg', '2003-08-05', '2023-01-19 22:39:06'),
(152, 'Moe Thae Cho', 'moethaecho@ucspyay.edu.mm', 'moethaecho', 9352635478, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'female', 'reading,gaming', 'java', 'll.jpg', '2004-12-17', '2023-01-19 22:41:21'),
(153, 'Chan Min Htet', 'chanminhtet@ucspyay.edu.mm', 'chanminhtet', 9241332445, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'male', 'gaming', 'java', 'ww.jpg', '2004-05-03', '2023-01-19 22:43:03'),
(154, 'Hein Htet Zaw', 'heinhtetzaw@ucspyay.edu.mm', 'heinhtetzaw', 9887667776, 'B.C.Sc', 'First Year', 'Section-C', 'i', 'male', 'gaming', 'javascript', 'ww.jpg', '2003-10-06', '2023-01-19 22:45:02'),
(155, 'Hnin Wai Htet', 'hninwaihtet@ucspyay.edu.mm', 'hninwaihtet', 9555444111, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'female', 'reading', 'java', 'll.jpg', '2003-06-01', '2023-01-19 22:46:50'),
(156, 'Hnin Yu Hlaing', 'hninyuhlaing@ucspyay.edu.mm', 'hninyuhlaing', 9564354634, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'female', 'singing', 'javascript', 'll.jpg', '2003-06-01', '2023-01-19 22:48:15'),
(157, 'Zwe Pyae Bhone', 'zwepyaebhone@ucspyay.edu.mm', 'zwepyaebhone', 9465777889, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'male', 'gaming', 'javascript', 'ww.jpg', '2003-08-10', '2023-01-19 22:49:55'),
(158, 'Htet Htet Hlaing', 'htethtethlaing@ucspyay.edu.mm', 'htethtethlaing', 9334334554, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'female', 'dancing', 'javascript', 'll.jpg', '2003-07-08', '2023-01-19 22:51:42'),
(159, 'Thazin Oo Htet', 'thazinoohtet@ucspyay.edu.mm', 'thazinoohtet', 9665445231, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'female', 'reading', 'javascript', 'll.jpg', '2003-08-22', '2023-01-19 22:53:34'),
(160, 'La Pyae Won', 'lapyaewon@ucspyay.edu.mm', 'lapyaewon', 9554111222, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'female', 'reading,singing', 'java', 'll.jpg', '2003-10-26', '2023-01-19 22:55:24'),
(161, 'La Pyae Htun', 'lapyaehtun@ucspyay.edu.mm', 'lapyaehtun', 9443223445, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'male', 'reading', 'java', 'ww.jpg', '2003-07-13', '2023-01-19 22:57:25'),
(162, 'Ye Htet Aung', 'yehtetaung@ucspyay.edu.mm', 'yehtetaung', 9777555432, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'male', 'gaming', 'java', 'ww.jpg', '2003-08-02', '2023-01-19 22:59:08'),
(163, 'Hsu Myat Noe', 'hsumyatnoe@ucspyay.edu.mm', 'hsumyatnoe', 9847564352, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'female', 'reading', 'java', 'll.jpg', '2003-11-14', '2023-01-19 23:01:24'),
(164, 'Si Thu Phyo', 'sithuphyo@ucspyay.edu.mm', 'sithuphyo', 9352445666, 'B.C.Sc', 'First Year', 'Section-A', 'ii', 'male', 'gaming,dancing', 'javascript', 'ww.jpg', '2003-06-26', '2023-01-19 23:03:02'),
(165, 'Kaung Myat Naing', 'kaungmyatnaing@ucspyay.edu.mm', 'kaungmyatnaing', 9342111333, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'male', 'gaming,dancing', 'javascript', 'ww.jpg', '2003-03-01', '2023-01-19 23:04:55'),
(166, 'Lu Myint Myat', 'lumyintmyat@ucspyay.edu.mm', 'lumyintmyat', 9887667666, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'male', 'gaming', 'javascript', 'ww.jpg', '2002-10-13', '2023-01-19 23:06:55'),
(167, 'Sitt Paing Phyo', 'sittpaingphyo@ucspyay.edu.mm', 'sittpaingphyo', 9332443554, 'B.C.Sc', 'First Year', 'Section-B', 'ii', '', 'singin,playing', 'java', 'ww.jpg', '2002-05-21', '2023-01-19 23:08:48'),
(168, 'Hlaine Myat Thu', 'hlainemyatthu@ucspyay.edu.mm', 'hlainemyatthu', 9445445445, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'female', 'reading', 'java', 'll.jpg', '2003-09-17', '2023-01-19 23:10:53'),
(169, 'Pyae Sone Aung', 'pyaesoneaung@ucspyay.edu.mm', 'pyaesoneaung', 9556773111, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'male', 'gaming', 'javascript', 'ww.jpg', '2003-12-09', '2023-01-19 23:12:33'),
(170, 'Khaing Khaing Nwe', 'khaingkhaingnwe@ucspyay.edu.mm', 'khaingkhaingnwe', 9085847483, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'female', 'reading', 'javascript', 'll.jpg', '2003-03-13', '2023-01-19 23:27:14'),
(171, 'Pyae Sone Phyo', 'pyaesonephyo@ucspyay.edu.mm', 'pyaesonephyo', 9353645212, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'male', 'gaming', 'java', 'ww.jpg', '2003-05-01', '2023-01-19 23:29:03'),
(172, 'Thae Lin Oo', 'thaelinoo@ucspyay.edu.mm', 'thaelinoo', 9775665774, 'B.C.Sc', 'First Year', 'Section-B', 'ii', 'male', 'singing', 'java', 'ww.jpg', '2003-02-11', '2023-01-19 23:31:12'),
(173, 'Aye Htet Myat', 'ayehtetmyat@ucspyay.edu.mm', 'ayehtetmyat', 969481601, 'B.C.Sc', 'Second Year', 'Section-A', 'i', 'female', 'reading', 'java', 'll.jpg', '2002-05-13', '2023-01-20 01:06:16'),
(174, 'Min Thant Zin', 'minthantzin@ucspyay.edu.mm', 'minthantzin', 969481601, 'B.C.Sc', 'Second Year', 'Section-A', 'i', 'male', 'gaming', 'java', 'ww.jpg', '2002-09-15', '2023-01-20 01:09:50'),
(175, 'Hein Myat Paing', 'heinmyatpaing@ucspyay.edu.mm', 'heinmyatpaing', 969481601, 'B.C.Sc', 'Third Year', 'Section-A', 'i', 'male', 'singing', 'javascript', 'ww.jpg', '2000-11-15', '2023-01-20 01:16:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_staff`
--
ALTER TABLE `feedback_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuID`);

--
-- Indexes for table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=480;

--
-- AUTO_INCREMENT for table `feedback_staff`
--
ALTER TABLE `feedback_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
