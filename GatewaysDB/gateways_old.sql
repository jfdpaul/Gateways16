-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2014 at 09:53 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gateways`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

create database if not exists gateways_old;

use gateways_old;

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL COMMENT 'teacher or someone else from college',
  `email` varchar(80) NOT NULL,
  `lead` int(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL COMMENT '0-not_registered, 1-registed,2-reported at reception',
  `reported_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `state` (`state`),
  KEY `lead` (`lead`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=219 ;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `city`, `state`, `contact`, `email`, `lead`, `status`, `reported_time`) VALUES
(2, 'St Joseph''s ', 'Bangalore', 17, '', '', NULL, 0, '2014-08-17 09:02:15'),
(3, 'St Martin''s Engineering College', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(4, 'Wesley PG College', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(5, 'Kasturba Gandhi Degree & PG College for Women', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(6, 'Nava Bharathi College of P G Studies', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(7, 'Holy Jesus & Mary PG College for Computer Science', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(8, 'Manpower Development College', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(9, 'Loyola Academy Degree College', 'Secunderabad', 2, NULL, '', NULL, NULL, NULL),
(10, 'Vasavi Degree & PG College', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(11, 'Department of Computer and Information Sciences - University of Hyderabad', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(12, 'JNTU College of Engineering', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(13, 'Osmania University College of Engineering (OUCE)', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(14, 'Vasavi College of Engineering', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(15, 'Sreenidhi Institute of Science & Technology (SNIST)', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(16, 'MVSR Engineering College', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(17, 'Raja Mahendra College of Engineering', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(18, 'CMR College of Engineering & Technology', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(19, 'Deccan College of Engineering & Technology', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(20, 'Vishwa Vishwani Institute of Systems and Management (VVISM)', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(21, 'JB Institute of Engineering & Technology', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(22, 'St Joseph''s PG College', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(23, 'Bankatlal Badruka College for Information Technology', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(24, 'Vivekananda School of Postgraduate Studies', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(25, 'Post Graduate College of Science - Osmania University', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(26, 'Gokaraju Rangaraju Institute of Engineering & Technology', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(27, 'Bhoj Reddy Engineering College for Women', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(28, 'Osmania University College for Women', 'Hyderabad ', 2, NULL, '', NULL, NULL, NULL),
(29, 'Gayatri Vidya Parishad College of Engineering', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(30, 'GITAM University', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(31, 'Anil Neerukonda Institute of Technology & Sciences', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(32, 'MVGR College of Engineering', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(33, 'Al-Ameer College of Engineering & Information Technology', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(34, 'Raghu Engineering College', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(35, 'Dr L Bullayya College', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(36, 'Viswanadha Institute Of Technology and Management', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(37, 'Visakha Institute of Professional Studies (VIPS)', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(38, 'Kaushik College of Engineering', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(39, 'Pydiah College for PG Studies', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(40, 'Abdul Quadir Jeelani Centre for PG Studies', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(41, 'Sanketika Vidya Parishad Engineering College', 'Vishakhapatnam', 2, NULL, '', NULL, NULL, NULL),
(42, 'Intellectual Engineering College', 'Anantapur', 2, NULL, '', NULL, NULL, NULL),
(43, 'Sri Sathya Sai Institute of Higher Learning', 'Anantapur', 2, NULL, '', NULL, NULL, NULL),
(44, 'Presidency College"', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(45, 'New Horizon College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(46, 'AMC Engineering College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(47, ' RNS Institute Of Technology', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(48, 'East West Group Of Institutions', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(49, 'Brindavan College of Engineering', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(50, 'Acharya Institute of Management & Sciences', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(51, 'Al-Ameen Arts, Science & Commerce College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(52, 'BMS College of Engineering', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(53, 'City College ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(54, 'CMR Institute of Technology', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(55, 'DayanandaSagar College of Engineering', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(56, 'Dr Ambedkar Institute of Technology', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(57, 'Garden City College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(58, 'JyotiNivas College ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(59, 'KristuJayanti college of Management & Technology ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(60, 'Krupanidhi College of Management', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(61, 'M S Ramaiah Institute of Technology ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(62, 'Mount Carmel College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(63, ' Jain University School of Engineering & Technology', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(64, 'Bangalore Institute of Technology ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(65, 'The Oxford College of Engineering', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(66, 'The Oxford College of Science   ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(67, 'TJohn College ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(68, 'Surana College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(69, 'SRN Adarsh College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(70, 'Sir M Visvesvaraya Institute of Technology', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(71, 'Reva Institute of Technology & Management', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(72, 'MVJ College of Engineering ', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(73, 'PES Institute of Technology', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(74, 'R N S Institute of Technology Technology Channasandra', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(75, 'StJosephs College', 'Bangalore', 17, NULL, '', NULL, NULL, NULL),
(76, 'Lal Bahadur Shastri Institute of Management (LBSIM)', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(77, ' School of Computer & Systems Sciences - Jawaharlal Nehru University', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(78, 'Indira Gandhi Delhi Technical University for Women', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(79, 'Jagan Institute of Management Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(80, 'CPJ Institute of Management and Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(81, 'World College of Technology & Management', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(82, 'IEC College of Engineering & Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(83, 'HMR Institute of Technology and Management', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(84, 'Jamia Hamdard University', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(85, 'Institute of Information Technology of Management (IITM)', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(86, 'Guru Nanak Institute of Management', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(87, 'Bhai Parmanand Institute of Business Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(88, 'Ideal Institute of Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(89, 'New Delhi Institute for Information Technology and Management (NDIIT)', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(90, 'Delhi Institute of Higher Education (DIHE)', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(91, 'Vivekanand Institute of Professional Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(92, 'ATM Global Business School', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(93, 'CBS Group of Institutions', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(94, 'Tecnia Instiutute of Advanced Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(95, 'Rukmini Devi Institute of Advanced Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(96, 'Govindam Business School', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(97, 'Department of Computer Science - University of Delhi', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(98, 'Delhi School of e-Learning', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(99, 'Gitarattan International Business School', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(100, 'IMS Engineering College', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(101, 'Nam Institute of Professional Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(102, 'Delhi Institute of Advanced Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(103, 'Banarsidas Chandiwala Institute of Information Technology (BCIIT)', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(104, 'RC Institute of Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(105, 'Management Education & Research Institute', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(106, 'Centre for Management Technolgy', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(107, 'Bhartiyam Institute of Profession Education & Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(108, 'Northern India Engineering College', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(109, 'SIOS Sehgal Institute of Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(110, 'Good Luck Institute of Education', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(111, 'IPD College ( International Professional Development College )', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(112, 'Bharati Vidyapeeth''s Institute of Computer Applications & Management', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(113, 'Delhi Institute of Computer Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(114, 'Webuniv - South Extension', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(115, 'Webuniv - Rajouri Garden', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(116, 'NCCE Technical Campus & SD Group of Institutions', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(117, 'Noble Institute of Professional Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(118, 'Mahatma Gandhi University', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(119, 'Winsoft Technologies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(120, 'NAM Institute of Professional Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(121, 'New Delhi Institute of Advanced Studies', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(122, 'SoftDot HI-Tech Educational & Training institute', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(123, 'Panipat Institute of Engineering & Technology', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(124, 'NC College of Engineering', 'Delhi', 10, NULL, '', NULL, NULL, NULL),
(125, 'Don Bosco College', 'Panjim ', 11, NULL, '', NULL, NULL, NULL),
(126, 'IIAS School Of Management', 'Goa', 11, NULL, '', NULL, NULL, NULL),
(127, 'Goa University', 'Taleigao Plateau', 11, NULL, '', NULL, NULL, NULL),
(128, 'RB institute of Management studies', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(129, 'Ahmedabad University', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(130, 'Chimanbhai Patel Institute', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(131, 'Faculty of Technology- Gujarat University', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(132, 'GLS Institute of Computer Technology', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(133, 'Gujarat Vidyapith - Department of Computer Science', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(134, 'I - Compass Academy', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(135, 'L J College of Computer Application', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(136, 'LD College of Engineering', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(137, 'LJ Institute of Engineering & Technology', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(138, 'Siddhpura Institute of Management & IT', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(139, 'LJ Institute of Management Studies', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(140, 'Nirma Institute of Technology', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(141, 'Rollwala Institute Of Computer Studies', 'Ahmedabad', 12, NULL, '', NULL, NULL, NULL),
(142, 'Jagan Nath University', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(143, 'Biyani Institute of Science & Management', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(144, 'NIMS University', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(145, 'Rajasthan Institute of Engineering & Technology (RIET)', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(146, 'Sri Balaji College of Engineering and Technology', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(147, 'Birla Institute of Technology- Jaipur', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(148, 'Kautilya Institute of Technology & Engineering', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(149, 'Apex Institute of Management & Science', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(150, 'Compucom Institute of Information Technology & Management', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(151, 'University of Computer Centre- University of Rajasthan', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(152, 'EDUCOSM - School of Business & Economics - School of Computer', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(153, 'Apex Institute of Engineering & Technology', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(154, 'Maharishi Arvind Institute of Science & Management', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(155, 'Shekhawati Group of Institutions', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(156, 'Rajasthan College of Engineering for Women', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(157, 'Shankara Institute of Technology', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(158, 'International School Of Informatics And Management', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(159, 'Jaipur National University - Faculty Of Engineering', 'Jaipur', 29, NULL, '', NULL, NULL, NULL),
(160, 'RCC Institute of Information Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(161, 'Bengal College of Engineering & Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(162, 'Bengal Institute of Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(163, 'Mayfair Business School', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(164, 'BP Poddar Institute of Management & Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(165, 'JIS College of Engineering', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(166, 'Pailan College of Management & Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(167, 'Nalanda Institute of Advanced Studies', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(168, 'Attitude Management Academy', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(169, 'Future Institute of Engineering and Management', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(170, 'Narula Institute of Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(171, 'Heritage Institute of Technology', 'Kolkata', 36, NULL, '', NULL, NULL, NULL),
(172, 'Arya School of Management & Information Technology (ASMIT)', 'Bhubaneshwar', 26, NULL, '', NULL, NULL, NULL),
(173, 'Berhampur University', 'Berhampur', 26, NULL, '', NULL, NULL, NULL),
(174, 'Biju Patnaik College of Hotel Management, Tourism & Social Work', 'Bhubaneshwar', 26, NULL, '', NULL, NULL, NULL),
(175, 'Ashutosh Maharaj College of Management and Technology', 'Mayurbhanj', 26, NULL, '', NULL, NULL, NULL),
(176, 'Bhadrak Institute of Engineering & Technology', 'Bhadrak', 26, NULL, '', NULL, NULL, NULL),
(177, 'Chakradhara Institute of Rehabilitation Sciences', 'Bhubaneshwar', 26, NULL, '', NULL, NULL, NULL),
(178, 'Mohamed Sathak College of Arts and Science', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(179, 'Loyola college', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(180, 'BS Abdur Rahman University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(181, 'Sathyabama University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(182, 'BS Abdur Rahman Crescent Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(183, 'DG Vaishnav College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(184, 'Ethiraj College for Women', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(185, 'Vels University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(186, 'Dr MGR Educational and Research Institute University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(187, 'Rajalakshmi Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(188, 'Hindustan Institute of Technology & Science', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(189, 'VEL Tech Technical University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(190, 'St Joseph''s College of Engineering', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(191, 'Panimalar Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(192, 'Meenakshi College of Engineering', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(193, 'Saveetha Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(194, 'St Peter''s University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(195, 'Sri Sairam Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(196, 'Easwari Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(197, 'Dhaanish Ahmed College of Engineering', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(198, 'Velammal Engineering College', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(199, 'SRM University', 'Chennai', 31, NULL, '', NULL, NULL, NULL),
(200, 'Chinmaya Institute of Technology', 'Kannur', 18, NULL, '', NULL, NULL, NULL),
(201, 'DE Paul Institute Of Science & Technology', 'Kochi', 18, NULL, '', NULL, NULL, NULL),
(202, 'NIELIT Centre Calicut', 'CALICUT', 18, NULL, '', NULL, NULL, NULL),
(203, 'Govt Engineering College ', 'Thrissur', 18, NULL, '', NULL, NULL, NULL),
(204, 'KVM College Of Engineering & Information Technology', 'Alappuzha', 18, NULL, '', NULL, NULL, NULL),
(205, 'KVVS Institute Of Technology', 'Adoor', 18, NULL, '', NULL, NULL, NULL),
(206, 'KristuJyoti College Of Management Of Technology', 'Changanacherry', 18, NULL, '', NULL, NULL, NULL),
(207, 'MES College Marampally', 'Marampally', 18, NULL, '', NULL, NULL, NULL),
(208, 'Malabar College Of Computer Science', 'Palakkad', 18, NULL, '', NULL, NULL, NULL),
(209, 'Mar Athanasios College For Advanced Studies', 'Tiruvalla', 18, NULL, '', NULL, NULL, NULL),
(210, 'Marian College', 'Kuttikkanam', 18, NULL, '', NULL, NULL, NULL),
(211, 'Marthoma Institute Of Information Technology', 'Chdayamangalam', 18, NULL, '', NULL, NULL, NULL),
(212, 'MES College Of Engineering', 'Kuttipuram', 18, NULL, '', NULL, NULL, NULL),
(213, 'National Institute of Technology Calicut', 'Calicut', 18, NULL, '', NULL, NULL, NULL),
(214, 'Rajagiri College Of Social Sciences', 'Cochin', 18, NULL, '', NULL, NULL, NULL),
(215, 'Regional Centre School Of Technology & Applied', 'Kochi ', 18, NULL, '', NULL, NULL, NULL),
(216, 'Santhigiri College Of Computer Sciences', 'Vazhithala', 18, NULL, '', NULL, NULL, NULL),
(217, 'School of Communication & Management Studies', 'Cochin ', 18, NULL, '', NULL, NULL, NULL),
(218, 'School Of Technology & Applied Science', 'Kottayam', 18, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `content` text,
  `by` int(11) DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `name`, `content`, `by`, `modified`) VALUES
(1, 'email_footer', '<p>Regards,</p>\r\n<p>The Gateways Team.</p>\r\n<p>Website: http://cs.christuniversity.in/gateways/<br />Facebook: https://www.facebook.com/Gateways2013<br />email : gateways@cs.christuniversity.in</p>\r\n<p>For further details contact:-</p>\r\n<p><strong>Nikhit Kushalappa</strong><br />Student Cordinator<br />8861754806</p>\r\n<p><strong>Pinky Jose</strong><br />Student Cordinator<br />9035616190</p>\r\n<p>&nbsp;</p>', 1, '2014-08-29 11:32:21'),
(2, 'email_head', '<p>Greetings from Christ University!!</p>', 1, '2014-08-29 02:16:26'),
(3, 'registration_left_rules', '<h2>General Rules</h2>\r\n<ul>\r\n<li>Maximum 12 students can participate from one college / university.</li>\r\n<li>Individual registration is Rs. 100, which can be payed by cash on the first day of the fest at the registration desk.</li>\r\n<li>All participants must carry their college ID cards to participate in the events.</li>\r\n<li>All team members should be present at the start of the event failing which the team will be disqualified.</li>\r\n<li>Vulgarity or profanity of any form will not be entertained and will result in the immediate disqualification of the participants.</li>\r\n<li>Participants must make sure that there are no clashes in the timing of the events he/she may be part taking in, if so avoid one of them. No rescheduling will be done for the same reason.</li>\r\n<li>Topics in the events may be technical/non-technical.</li>\r\n<li>Judges decision will be final and binding.</li>\r\n</ul>', 1, '2014-08-28 16:59:49'),
(4, 'events_general_description_and_rules', '<h2 class="media-heading" style="font-family: Gateways;">Gateways 2014</h2>\r\n<p>Gateways is a national level inter-collegiate postgraduate IT fest organized by the department of Computer Science. Gateways is a platform for future IT magnates to shine at, for tomorrow''s computer folks to meet up, compete, learn and grow.</p>\r\n<p>Students fight it out in a number of technical and non technical events. The past few years have seen gateways grow from strength to strength With the number of students increasing every year, Gateways has created a niche for itself amongst the computer-savvy cyber folks of today, who have realized that Gateways is the stage where they get to see all of what life has to offer them in the IT industry. This time, we are celebrating the 18th successful year of Gateways. The main reason for coming up with the idea of Gateways is to benefit the students and give them the much needed exposure which will in turn help them know where they stand. It also helps in maintaining a good relationship with other colleges throughout the country. Since it''s a fest organized by the students, it will help the students in developing their soft skills as well as organizational skills.</p>\r\n<h4>General Rules</h4>\r\n<ul>\r\n<li>Maximum 12 students can participate from each college.</li>\r\n<li>Individual registration is Rs.100, which can be paid by cash on the first day of the fest at the registration desk.</li>\r\n<li>All participants must carry their college ID cards to participate in the fest.</li>\r\n<li>All team members should be present at the start of each event, failing which the team will be disqualified.</li>\r\n<li>Vulgarity or profanity of any form will not be entertained and will result in the immediate disqualification of the participants.</li>\r\n<li>Participants must make sure that there are no clashes in the timing of the events he/she may be taking part in, if so avoid one of them. No rescheduling will be done for the same reason.</li>\r\n<li>Topics in the events may be technical or non-technical.</li>\r\n<li>Judges'' decision will be final.</li>\r\n</ul>', 1, '2014-08-30 04:07:13'),
(5, 'email_participant_register_body', '<p>Thanks for joining Gateways 2014 fest. Please do register for the events online. Log on to website to get more updates. Please verify your email address before login.</p>', 1, '2014-08-29 02:24:15'),
(6, 'email_participant_register_subject', '<p>Gateways Registration</p>', 1, '2014-08-29 02:40:08'),
(7, 'about_gateways', '<p>Gateways is a national level inter-collegiate postgraduate IT fest organized by the department of Computer Science. Gateways is a platform for future IT magnates to shine at, for tomorrow''s computer folks to meet up, compete, learn and grow. Students fight it out in a number of technical and non technical events. The past few years have seen gateways grow from strength to strength With the number of students increasing every year, Gateways has created a niche for itself amongst the computer-savvy cyber folks of today, who have realized that Gateways is the stage where they get to see all of what life has to offer them in the IT industry. This time, we are celebrating the 18th successful year of Gateways. The main reason for coming up with the idea of Gateways is to benefit the students and give them the much needed exposure which will in turn help them know where they stand. It also helps in maintaining a good relationship with other colleges throughout the country. Since it''s a fest organized by the students, it will help the students in developing their soft skills as well as organizational skills.</p>', 1, '2014-09-04 16:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `email_counter`
--

CREATE TABLE IF NOT EXISTS `email_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) DEFAULT NULL,
  `purpose` varchar(50) DEFAULT NULL,
  `organizer` int(11) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `email_counter`
--

INSERT INTO `email_counter` (`id`, `email`, `purpose`, `organizer`, `created`) VALUES
(1, 'jophinp@gmail.com', 'ACCOUNT_VERIFICATION', 0, '2014-08-28 13:32:17'),
(2, 'jophin.p@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-28 14:01:14'),
(3, 'pinky.jose@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-28 14:19:49'),
(4, 'jophinp@gmail.com', 'ACCOUNT_VERIFICATION', 0, '2014-08-29 02:44:21'),
(8, 'jophin.p@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-29 03:21:02'),
(9, 'jophin.p@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-29 05:46:28'),
(10, 'pawar.dilip@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-30 01:26:13'),
(11, 'nikhit.kuchalappa@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-30 01:38:24'),
(12, 'nikhit.kushalappa@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', 0, '2014-08-30 01:39:41'),
(13, NULL, 'ACCOUNT_VERIFICATION', NULL, '2014-09-01 14:33:26'),
(14, NULL, 'ACCOUNT_VERIFICATION', NULL, '2014-09-01 14:33:30'),
(15, 'jophin.p@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 14:38:38'),
(16, 'pinky.jose@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 14:38:42'),
(17, 'tanya.bala@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-01 15:14:12'),
(18, 'kizhakkudan.pius@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-01 15:14:16'),
(19, 'shophi.philip@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:21'),
(20, 'jayaraj.purad@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:25'),
(21, 'ashwini.r@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:30'),
(22, 'dennis.bernard@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:35'),
(23, 'jomin.mathew@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:40'),
(24, 'sharath.chandra@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:45'),
(25, 'anish.m@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:49'),
(26, 'persis.fernandes@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:54'),
(27, 'rakshitha.s@mca.christuniversity.in', 'MAILER', NULL, '2014-09-01 15:14:58'),
(28, 'tanya.bala@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 00:35:17'),
(29, 'kizhakkudan.pius@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 00:35:51'),
(30, 'shophi.philip@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:36:05'),
(31, 'jayaraj.purad@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:36:16'),
(32, 'ashwini.r@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:36:26'),
(33, 'dennis.bernard@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:36:39'),
(34, 'sharath.chandra@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:36:58'),
(35, 'anish.m@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:37:05'),
(36, 'persis.fernandes@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:37:12'),
(37, 'rakshitha.s@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:37:19'),
(38, 'tanya.bala@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 00:38:08'),
(39, 'kizhakkudan.pius@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 00:38:17'),
(40, 'shophi.philip@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:22'),
(41, 'jayaraj.purad@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:30'),
(42, 'ashwini.r@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:35'),
(43, 'dennis.bernard@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:40'),
(44, 'jomin.mathew@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:45'),
(45, 'sharath.chandra@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:51'),
(46, 'anish.m@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:38:58'),
(47, 'persis.fernandes@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:39:04'),
(48, 'rakshitha.s@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 00:39:10'),
(49, 'jophin.p@mca.christuniversity.in', 'ACCOUNT_VERIFICATION', NULL, '2014-09-02 00:48:09'),
(50, 'tanya.bala@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 13:14:21'),
(51, 'kizhakkudan.pius@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 13:14:25'),
(52, 'shophi.philip@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:29'),
(53, 'jayaraj.purad@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:32'),
(54, 'ashwini.r@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:36'),
(55, 'dennis.bernard@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:40'),
(56, 'jomin.mathew@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:44'),
(57, 'sharath.chandra@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:47'),
(58, 'anish.m@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:51'),
(59, 'persis.fernandes@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:55'),
(60, 'rakshitha.s@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:14:59'),
(61, 'tanya.bala@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 13:19:26'),
(62, 'kizhakkudan.pius@cs.christuniversity.in ', 'MAILER', NULL, '2014-09-02 13:19:31'),
(63, 'shophi.philip@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:19:35'),
(64, 'jayaraj.purad@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:19:39'),
(65, 'ashwini.r@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:19:43'),
(66, 'dennis.bernard@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:19:47'),
(67, 'jomin.mathew@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:19:51'),
(68, 'sharath.chandra@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:19:56'),
(69, 'anish.m@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:20:00'),
(70, 'persis.fernandes@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:20:05'),
(71, 'rakshitha.s@mca.christuniversity.in', 'MAILER', NULL, '2014-09-02 13:20:09'),
(72, 'mintu@gmail.com', 'ACCOUNT_VERIFICATION', NULL, '2014-09-04 06:56:25'),
(73, 'neha.dubey@gmail.com', 'ACCOUNT_VERIFICATION', NULL, '2014-09-04 09:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `escort`
--

CREATE TABLE IF NOT EXISTS `escort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `register_no` varchar(30) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `college_id` int(11) DEFAULT '0' COMMENT '0-not assigned',
  PRIMARY KEY (`id`),
  KEY `college_id` (`college_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `original_name` varchar(50) DEFAULT NULL,
  `tag_line` varchar(100) NOT NULL,
  `description` mediumtext,
  `rounds` int(2) DEFAULT NULL,
  `latest_status` int(11) DEFAULT NULL,
  `type` int(2) DEFAULT NULL COMMENT '0- Non Technical, 1-Technical, 2-functions',
  `teams_per_college` int(2) DEFAULT '2',
  `participants_per_team` int(2) DEFAULT '1',
  `photo` varchar(100) DEFAULT NULL COMMENT 'event main pic',
  PRIMARY KEY (`id`),
  KEY `latest_status` (`latest_status`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `original_name`, `tag_line`, `description`, `rounds`, `latest_status`, `type`, `teams_per_college`, `participants_per_team`, `photo`) VALUES
(1, 'INAUGRATION', 'INAUGRATION', 'INAUGRATION', '', 1, NULL, 2, NULL, NULL, NULL),
(2, 'CARNIVAL', 'Carnival', '', '', 1, NULL, 2, 0, 0, NULL),
(3, 'CINEASTA', 'Video Making', 'Bring life to motion', '', 1, NULL, 1, 2, 2, NULL),
(4, 'CLIQZURE', 'Photography', 'In the line of sight', '', 1, NULL, 0, 3, 1, NULL),
(5, 'CODE COLLECT', 'Coding & Debugging', 'Talk is cheap. Show me the code', '', 2, NULL, 1, 3, 2, NULL),
(6, 'COUNTERACTION', 'Quiz', 'Question insanity', '', 2, NULL, 1, 2, 2, NULL),
(7, 'DIVERSION', 'Gaming', 'Totally Infectious', '', 1, NULL, 0, 1, 5, NULL),
(8, 'IMPRESARIO', 'Best Manager', ' So who''s the Boss?', '', 2, NULL, 1, 3, 1, NULL),
(9, 'REFLECTO', 'Dumb Charades', 'Act And React', '', 1, NULL, 0, 2, 3, NULL),
(10, 'SPIN OFF', 'Product Launch', 'Expertise your product, Customise your market', '', 1, NULL, 1, 1, 6, NULL),
(11, 'SPIN THE WEB', 'Web Designing', 'Your friendly neighbour', '<p>You have to create a web page with given tools</p>', 1, NULL, 1, 2, 2, NULL),
(12, 'THE LOOK-OUT', 'Treasure Hunt', 'Finders Keepers', '', 1, NULL, 0, 1, 4, NULL),
(13, 'THE UPPER HOUSE', 'Mock Parliament', 'King of the panel', '', 1, NULL, 0, 1, 3, NULL),
(14, 'VALEDICTORY FUNCTION', 'VALEDICTORY FUNCTION', '', '', 0, NULL, 2, 0, 0, NULL),
(15, 'CULTURALS', 'CULTURALS', '', '', 0, NULL, 2, 0, 0, NULL),
(16, 'BUZZ-ER BEAT', 'JAM', 'Got a minute? To win it ', '', 2, NULL, 0, 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_heads`
--

CREATE TABLE IF NOT EXISTS `event_heads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organizer_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizer_id` (`organizer_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `event_heads`
--

INSERT INTO `event_heads` (`id`, `organizer_id`, `event_id`) VALUES
(2, 3, 5),
(3, 1, 11),
(4, 22, 6),
(5, 14, 10),
(6, 15, 8),
(7, 16, 3),
(8, 17, 16),
(9, 18, 13),
(10, 19, 9),
(11, 20, 4),
(12, 21, 12),
(13, 13, 7);

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE IF NOT EXISTS `login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organizer_id` int(11) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organizer_id` (`organizer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `organizer_id`, `created`) VALUES
(1, 1, '2014-08-27 14:51:51'),
(2, 2, '2014-08-27 14:54:08'),
(3, 1, '2014-08-28 00:35:30'),
(4, 2, '2014-08-28 00:48:00'),
(5, 1, '2014-08-28 01:12:09'),
(6, 1, '2014-08-28 01:22:11'),
(7, 1, '2014-08-28 01:22:25'),
(8, 1, '2014-08-28 01:22:37'),
(9, 1, '2014-08-28 01:24:24'),
(10, 1, '2014-08-28 01:37:28'),
(11, 1, '2014-08-28 05:55:28'),
(12, 1, '2014-08-28 09:00:02'),
(13, 10, '2014-08-28 10:24:45'),
(14, 5, '2014-08-28 11:00:24'),
(15, 6, '2014-08-28 11:00:57'),
(16, 7, '2014-08-28 11:01:30'),
(17, 14, '2014-08-28 11:07:14'),
(18, 1, '2014-08-28 14:55:49'),
(19, 1, '2014-08-29 02:12:37'),
(20, 1, '2014-08-29 03:14:10'),
(21, 1, '2014-08-29 07:56:51'),
(22, 1, '2014-08-29 08:05:26'),
(23, 1, '2014-08-29 08:10:37'),
(24, 1, '2014-08-29 11:30:39'),
(25, 10, '2014-08-30 01:32:51'),
(26, 1, '2014-08-30 03:24:48'),
(27, 1, '2014-08-30 04:06:43'),
(28, 14, '2014-08-31 01:54:43'),
(29, 2, '2014-08-31 01:55:28'),
(30, 2, '2014-08-31 02:30:17'),
(31, 1, '2014-08-31 11:01:25'),
(32, 1, '2014-09-01 02:36:39'),
(33, 1, '2014-09-01 06:28:36'),
(34, 1, '2014-09-01 09:27:46'),
(35, 1, '2014-09-01 13:11:09'),
(36, 1, '2014-09-02 00:20:48'),
(37, 1, '2014-09-02 13:10:35'),
(38, 1, '2014-09-03 05:33:49'),
(39, 1, '2014-09-04 00:08:55'),
(40, 11, '2014-09-04 02:11:45'),
(41, 1, '2014-09-04 07:10:47'),
(42, 23, '2014-09-04 07:24:04'),
(43, 1, '2014-09-04 09:16:50'),
(44, 23, '2014-09-04 13:05:05'),
(45, 24, '2014-09-04 15:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `organizers`
--

CREATE TABLE IF NOT EXISTS `organizers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `class` int(3) DEFAULT NULL,
  `register_no` varchar(20) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `email_personal` varchar(60) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `organizers`
--

INSERT INTO `organizers` (`id`, `first_name`, `last_name`, `gender`, `class`, `register_no`, `contact`, `email`, `email_personal`, `photo`, `role`, `password`, `created`, `modified`, `status`) VALUES
(1, 'Jophin', 'P', 'Male', 5, '1225921', '7259909019', 'jophin.p@mca.christuniversity.in', 'jophinp@gmail.com', NULL, 1, '9be4d0808f1d56baa8d488ef8030cf7f', '2014-08-21 04:21:24', '2014-08-29 11:30:58', 1),
(2, 'Pinky', 'Jose', 'Female', 5, '1225937', '9035616190', 'pinky.jose@mca.christuniversity.in', '', '0', 1, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', '2014-08-28 00:55:50', 1),
(3, 'Shophi', 'Philip', 'Female', 5, '1225947', '9739718839', 'shophi.philip@mca.christuniversity.in', '', NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(4, 'Adil ', 'Khanday', 'Male', 3, '1325901', '8904050175', 'adil.khanday@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(5, 'Aneesh', 'M', 'Male', 3, '1325901', '8105253643', 'aneesh.m@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(6, 'Anjana', 'S', 'Female', 3, '1325901', '9008268635', 'anjana.s@mca.christniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(7, 'Saikat ', 'Mukherjee', 'Male', 3, '1325901', '8050223144', 'saikat.mukherjee@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(8, 'Rupen', 'Paul', 'Male', 3, '1325901', '9986957945', 'rupen.paul@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(9, 'Divya ', 'K', 'Female', 3, '1325901', '9964077076', 'divya.k@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(10, 'Apoorva ', 'R', 'Female', 5, '1225907', '9916442513', 'apoorva.r@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(11, 'Kaivalya ', 'Limaye', 'Male', 3, '1325901', '9535216409', 'kaiwalya.limaye@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(12, 'Rakshita ', 'Sunderesh', 'Female', 5, '1225941', '9844068842', 'rakshita.sunderesh@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(13, 'Franco ', 'Pius', 'Male', 4, '1325004', '8197307646', 'kizhakkudan.pius@cs.christuniversity.in ', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(14, 'Ashwini', 'R', 'Female', 5, '1225911', '8553466061', 'ashwini.r@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(15, 'Dennis', 'Bernard', 'Female', 5, '1225914', '7829811380', 'dennis.bernard@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(16, 'Jomin', 'Mathew', 'Male', 5, '1225920', '9986880441', 'jomin.mathew@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(17, 'Sharath', 'Chandra B.C.', 'Male', 5, '1225960', '9538246815', 'sharath.chandra@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(18, 'Anish', 'Kumar', 'Male', 5, '1225903', '9035689682', 'anish.m@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(19, 'Tanya', 'Bala', 'Female', 4, '1325024', '7760222542', 'tanya.bala@cs.christuniversity.in ', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(20, 'Persis', 'Fernandes', 'Female', 5, '1225935', '9743487527', 'persis.fernandes@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(21, 'Rakshita', 'S', 'Female', 5, '1225941', '9844068842', 'rakshitha.s@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', NULL, 0),
(22, 'Jayaraj', 'Purad', 'Male', 5, '1225917', '9844677990', 'jayaraj.purad@mca.christuniversity.in', NULL, NULL, 3, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-21 00:33:33', '2014-08-26 05:21:24', 0),
(23, 'Nikit', 'K', 'Male', 5, '1225931', NULL, 'nikhit.kushalappa@mca.christuniversity.in', NULL, NULL, 2, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-08-28 08:18:53', '2014-08-28 08:18:53', 0),
(24, 'Valent', 'Pawar', 'Male', 5, '1225934', '8088775747', 'pawar.dilip@mca.christuniversity.in', NULL, NULL, 5, '5f4dcc3b5aa765d61d8327deb882cf99', '2014-09-04 00:44:20', '2014-09-04 00:44:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `course` varchar(3) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `register_no` varchar(30) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0 - not varified, 1 - varified',
  `accomodation` int(2) NOT NULL DEFAULT '0' COMMENT '0- no 1-yes',
  PRIMARY KEY (`id`),
  KEY `college_id` (`college_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `first_name`, `last_name`, `gender`, `course`, `college_id`, `register_no`, `contact`, `email`, `password`, `photo`, `created`, `modified`, `status`, `accomodation`) VALUES
(1, 'Jophin', 'P', 'Male', 'MCA', 32, '1225937', '9035616190', 'jophin.p@mca.christuniversity.in', '9be4d0808f1d56baa8d488ef8030cf7f', NULL, '2014-09-02 00:48:03', '2014-09-02 00:48:19', 1, 1),
(2, 'Nikhit', 'Kushalappa', 'Male', 'MCA', 32, '1225937', '9035616190', 'jophinp@gmail.com', '9be4d0808f1d56baa8d488ef8030cf7f', NULL, '2014-09-03 02:14:29', '2014-09-03 02:14:29', 1, 0),
(3, 'Pinky', 'Jose', 'Female', 'MCA', 32, '1225937', '9035616190', 'pinky.jose@mca.christuniversity.in', '9be4d0808f1d56baa8d488ef8030cf7f', NULL, '2014-09-03 02:16:15', '2014-09-03 02:16:15', 1, 1),
(4, 'Livin', 'Varghese', 'Male', 'MCA', 123, '1225937', '9035616190', 'livin.varghese@mca.christuniversity.in', '9be4d0808f1d56baa8d488ef8030cf7f', NULL, '2014-09-04 06:44:37', '2014-09-04 06:44:37', 1, 0),
(5, 'Mintu', 'Movi', 'Male', 'MCA', 121, '1225927', '4567891233', 'mintu@gmail.com', '9be4d0808f1d56baa8d488ef8030cf7f', NULL, '2014-09-04 06:56:11', '2014-09-04 06:56:11', 1, 0),
(6, 'Neha', 'Dubey', 'Female', 'MSC', 31, '1225921', '9887841555', 'neha.dubey@gmail.com', '9be4d0808f1d56baa8d488ef8030cf7f', NULL, '2014-09-04 09:53:50', '2014-09-04 10:15:58', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `participants_events`
--

CREATE TABLE IF NOT EXISTS `participants_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `team_no` int(2) DEFAULT NULL,
  `attendance` int(2) DEFAULT NULL COMMENT '0-absent, 1-present',
  `remarks` varchar(500) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `reported_time` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participant_id` (`participant_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `participants_events`
--

INSERT INTO `participants_events` (`id`, `participant_id`, `event_id`, `team_no`, `attendance`, `remarks`, `created`, `reported_time`) VALUES
(1, 1, 5, NULL, NULL, NULL, '2014-09-03 02:31:51', NULL),
(2, 1, 8, NULL, NULL, NULL, '2014-09-03 02:32:39', NULL),
(3, 1, 16, NULL, NULL, NULL, '2014-09-03 02:32:48', NULL),
(4, 3, 8, NULL, NULL, NULL, '2014-09-03 02:33:24', NULL),
(5, 3, 11, NULL, NULL, NULL, '2014-09-03 02:33:29', NULL),
(6, 3, 16, NULL, NULL, NULL, '2014-09-03 02:33:35', NULL),
(7, 2, 8, NULL, NULL, NULL, '2014-09-03 02:34:33', NULL),
(8, 2, 11, NULL, NULL, NULL, '2014-09-03 02:34:59', NULL),
(9, 4, 6, NULL, NULL, NULL, '2014-09-04 06:48:42', NULL),
(10, 1, 6, NULL, NULL, NULL, '2014-09-04 06:52:23', NULL),
(11, 2, 6, NULL, NULL, NULL, '2014-09-04 06:56:36', NULL),
(12, 5, 6, NULL, NULL, NULL, '2014-09-04 06:58:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participant_login_history`
--

CREATE TABLE IF NOT EXISTS `participant_login_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participant_id` int(11) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `participant_id` (`participant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `participant_login_history`
--

INSERT INTO `participant_login_history` (`id`, `participant_id`, `created`) VALUES
(1, 1, '2014-09-03 03:19:14'),
(2, 1, '2014-09-04 06:41:11'),
(3, 4, '2014-09-04 06:47:23'),
(4, 2, '2014-09-04 06:55:25'),
(5, 5, '2014-09-04 06:57:47'),
(6, 1, '2014-09-04 06:59:13'),
(7, 3, '2014-09-04 07:00:47'),
(8, 6, '2014-09-04 10:03:42'),
(9, 1, '2014-09-04 16:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `participant_id` int(11) DEFAULT NULL,
  `query` varchar(500) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0-not answered, 1-show, 2 -hidden, 3-deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `query_id` int(11) DEFAULT NULL,
  `person_id` int(11) DEFAULT NULL,
  `user_type` int(2) DEFAULT NULL COMMENT '0- organizer, 1- participant',
  `reply` varchar(500) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0-show, 1- do not show, 2 -deleted',
  PRIMARY KEY (`id`),
  KEY `query_id` (`query_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `first` int(11) DEFAULT NULL,
  `second` int(11) DEFAULT NULL,
  `third` int(11) DEFAULT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `permissions` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permissions`) VALUES
(1, 'admin', 1),
(2, 'core', 2),
(3, 'event_head', 3),
(4, 'teachers', 4),
(5, 'viewer', 5);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE IF NOT EXISTS `rules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `content` mediumtext,
  `modified` timestamp NULL DEFAULT NULL,
  `status` int(2) DEFAULT '0' COMMENT '0-not respondded, 1-accepted,2-rejected, 3-dont show',
  `varified_by` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `varified_by` (`varified_by`),
  KEY `added_by` (`added_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`id`, `event_id`, `content`, `modified`, `status`, `varified_by`, `added_by`) VALUES
(1, 1, '<ul>\r\n<li> 2 in a team </li>\r\n<li> no internet </li>\r\n<li> images will be provided </li>\r\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(2, 1, '<p><strong>1.  Elimination Round (1st Round):</strong><br />\nThere are 2 participants per  college out of these only 10 will be selected for actual jamming round i.e. the  final round.</p>\n<ul>\n  <li>Topic is on spot.</li>\n  <li>30secs will be given for a speaker to prepare.</li>\n  <li>60secs is provided for a speaker.</li>\n  <li>He is judged based on the content and his speaking skills.</li>\n  <li>The grading will be done by the judges.</li>\n</ul>\n<p><strong>2. Commentary  Round:</strong></p>\n<ul>\n  <li>Topic is on spot.</li>\n  <li>A video is shown </li>\n  <li>The audio of the video will be muted and the participant  will have to comment about the video</li>\n  <li>The video will be shown to the participant once and the  player should do the entire audio herself/himself entirely in English</li>\n  <li>Judging will be based on how creative and how funny the  commentary is</li>\n  <li>Out of the ten only 6 will be chosen</li>\n</ul>\n<p><strong>3. Jam Round:</strong></p>\n<ul>\n  <li>User will be asked to pick a chit. The chit will be a topic  which the user has to speak about.</li>\n  <li>6  rounds. Each round  will be for one minute</li>\n  <li>Other participants will jam fellow participants based on  hesitation, deviation and repetition. </li>\n  <li>If a jam is correct, the participant will the person to  continue</li>\n  <li>The person speaking at the end of one minute gets a bonus.</li>\n  <li>The judge&rsquo;s decisions   will be final</li>\n  <li>Top 3 will be chosen</li>\n</ul>\n<p><strong>4&amp;5. Jam  Round:</strong><br />\n  This  round will be the same as the round 3. But the top 3 will compete for the top 2  positions. In the end the top 2 will go head to head to decide for the winner.</p>\n<p><strong>Generic Rules:</strong><br />\n  The speakers are challenged to speak for one minute on a given subject  without (basic 3&rsquo;s) i.e., &ldquo;repetition,  hesitation, or deviation&quot;. </p>\n<ul>\n  <li>&quot;Repetition&quot; means  the repetition of any word or phrase, although challenges based upon very  common words such as &quot;and&quot; are generally rejected except in extreme  cases. Words contained in the given subject are exempt unless repeated many  times in quick succession.</li>\n</ul>\n<ul>\n  <li>&quot;Hesitation&quot; is watched very strictly: a  momentary pause before resumption of the subject can give rise to a successful  challenge, as can tripping over one''s words. Even pausing during audience  laughter or applause (known as &quot;riding a laugh&quot;) can be challenged. </li>\n</ul>\n<ul type="disc">\n  <li>&quot;Deviation&quot; means deviating from the subject, but has       also been interpreted as &quot;deviating from the English language as we       know it&quot;, &quot;deviation from grammar as we understand it&quot;,       deviating from the truth, and deviation from logic, although leaps into       the surreal are often allowed.</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(3, 2, NULL, '2014-08-25 07:28:43', 1, 1, 1),
(4, 3, '<ul>\n  <li>Tools will be provided in spot</li>\n  <li>No other tools can be used</li>\n  <li>1.5 hrs will be given to each  team for making the video</li>\n  <li>Theme would be given in the  morning and materials should be collected by the teams till  the event starts.</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(5, 4, '<ul>\n  <li>Photographs  must be taken inside the campus and on the same day of the competition.</li>\n  <li> Maximum No  of images to be submitted by an individual is 3 (In case of edited, submit  both- before and after editing.)</li>\n  <li> Only basic  processing (Crop, Brightness, Contrast ) will be allowed.</li>\n  <li> Submission  :-&nbsp;4 pm&nbsp;(At the reception)</li>\n  <li> Theme for  the photography event is :- Growth</li>\n  <li>Format of  images to be submitted :- Raw format</li>\n  <li> Thought  behind each photograph &nbsp;in 1/2 lines</li>\n  <li> Equipment:- DSLR, Mobile camera.</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(6, 5, '<p>Two rounds in total.<br />\n  Prelims : &rdquo; Jumbled coding  &ldquo; .Participants will be given  jumbled  code . Solve to qualify to finals.<br />\n  Finals :  &ldquo; Reverse coding &ldquo;.Backtrack your coding  skills and develop a code to generate the same output as the given executable  file.</p>', '2014-08-25 07:28:43', 1, 1, 1),
(7, 6, '<p>Two Rounds to be conducted.<br>\n  <strong>Round 1:  Aptitude </strong><br>\n  Round 1 will be an aptitude test.</p>\n<ul>\n  <li>A total of 30 questions will be  asked. </li>\n  <li>Each question carries 1 point  and programming questions carry 2 points. </li>\n  <li>The participants are supposed  to finish the questions in 20 mins.</li>\n  <li>The top 6 teams will go to the  next round.</li>\n</ul>\n<p><strong>Round 2: Stage Round</strong><br>\n  It will have 3 sub rounds.</p>\n<ul>\n  <li>First round will have general  questions from the field of technology, current affairs, logos, </li>\n</ul>\n<p>companies taglines.</p>\n<ul>\n  <li>Questions can be passed to the  next team.</li>\n  <li>10 points for correct answer  and 5 marks for a pass answer.</li>\n  <li> 2 questions per team. </li>\n  <li> 1 team to be eliminated here.</li>\n</ul>\n<ul>\n  <li>Second round will be &ldquo;Pick a  topic&rdquo; and questions will be asked based on the topic. </li>\n  <li>1 team to be eliminated here .</li>\n  <li>No passes allowed in this round.</li>\n</ul>\n<p>&nbsp;</p>\n<ul>\n  <li>Final round will be a rapid  fire round where each team will be bombarded with 5 questions.</li>\n  <li>The top two teams win the first  and second prize.</li>\n</ul>\n<p>NOTE : In case the external Quiz master  doesn&rsquo;t prepare the questions on his/her own, then Stage round will be prepared  in the format given above.</p>', '2014-08-25 07:28:43', 1, 1, 1),
(8, 7, '<p><strong>Counter Strike Rules :</strong></p>\n<ul>\n  <li>Starting Money 800$.</li>\n  <li>No D3/AU-1Rifle   Allowed.</li>\n  <li>No Scope Guns(Bullpup, Krieg Commando)</li>\n  <li>No Shields</li>\n  <li>Race to 10.</li>\n  <li>1 group allowed per team.</li>\n  <li>During toss, Captains can choose map or CT/T.</li>\n  <li>All Bomb Site Maps.</li>\n  <li>In case of Usage of consoles, team will be  disqualified.</li>\n  <li>In case of lag or device issues, round will be reset.</li>\n  <li>After every 5 points, teams will be swapped from CT to  T and vice versa.</li>\n  <li>Snipers are allowed.(Magnum Sniper Rifle, Schmidt  Scout).</li>\n  <li>Friendly Fire will be off.</li>\n</ul>\n<p><strong>Need for Speed Rules :</strong><br>\n  <br>\n  <em>Qualifying  round:</em><br>\n5 players  will be playing at a time. Top 2 will be selected for next round.</p>\n<p><em>Game Type : </em><br>\n  Will be  decided on the day of event<br>\n  At the end  of each match, players must maintain the final screens and receive confirmation  from a referee.</p>\n<p><em>Car Settings</em> :<br>\nNO CHANGING  OF CAR SETTING ALLOWED.</p>\n<p><em>Disconnect</em> :<br>\n  Intentional  Disconnection: Upon judgment by the referee, any offending player will be  charged with a loss <br>\nBy forfeit.</p>\n<p><em>When any  disconnection occurs because of hardware issue:</em><br>\n  If the  disconnection is deemed to be unintentional by the referee, the match will be  restarted. <br>\nIf any  player does not agree to a match restart, that player will lose by default.</p>', '2014-08-25 07:28:43', 1, 1, 1),
(9, 8, '<p><strong>ROUND 1 :</strong></p>\n<ul>\n  <li>Will be announced on the day of  event.</li>\n</ul>\n<p> <strong>ROUND  2:</strong></p>\n<ul>\n  <li>Skill testing</li>\n  <li>Rules for the round will be  said on spot. \n    <ul>\n      <li> The participants will be given a set of products, and  they have to sell the products in the university campus.\n        Based on the amount and number of products sold, the  participants will be selected for the next round. </li>\n    </ul>\n  </li>\n</ul>\n  <p><strong>ROUND 3:</strong></p>\n<ul>\n  <li>Face off [stress interview ]</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(10, 9, '<p><strong>Round 1: Normal DC</strong></p>\n<ul>\n  <li>The words are to be communicated using only  gestures or actions. </li>\n  <li>Chits will contain either technical or  non-technical words. </li>\n  <li>15 points will be awarded for technical  words, 10 for non-technical. </li>\n  <li>No alphabets or objects are to be indicated.</li>\n  <li>One person comes to the front to get a chit  from the pool of chits, and explains the word to the other two team members. </li>\n  <li>The person acting should stand at least 2  feet away from the other team members.   The person can act only within a limited area designated to him or her. </li>\n  <li>For each word being enacted, only one split  will be allowed. </li>\n  <li>For each team the time allotted will be 90  seconds per round, and within that time they can pick and enact the words from  as many chits as they want. </li>\n  <li>Two drops will be allowed. 5 points will be  deducted for every drop there on. </li>\n  <li>The six teams with maximum number of  correct answers will qualify for round 2. </li>\n</ul>\n<p><strong>Round 2:  Pictionary</strong></p>\n<ul>\n  <li>The words are to be communicated by drawing symbols or figures on a  white board using a marker. Writing letters or numbers in any language is not  allowed.</li>\n  <li>For each team the time allotted will be 90  seconds per round, and within that time they can pick and play Pictionary from  as many chits as they want. </li>\n  <li>15 points will be awarded for technical  words, 10 for non-technical. </li>\n  <li>One drop will be allowed. 5 points will be  deducted for every drop there on. </li>\n  <li>The three teams with maximum number of  correct answers will qualify for the finals. </li>\n</ul>\n<p><strong>Round 3: Finals : Choice</strong></p>\n<ul>\n  <li>The three teams will be given a choice of 6 from which they can choose  any one. The team with the highest score selects first, and so on.</li>\n  <li>The options are :</li>\n  <li>Scenes from an advertisement</li>\n  <li>Scenes from a movie</li>\n  <li>Parts of a movie poster</li>\n  <li>Parts of a logo</li>\n  <li>Parts of a series poster</li>\n  <li>Scenes from cartoons.</li>\n  <li>The teams have to guess the particular product/movie/logo/series/cartoon  based on the scene/picture shown.</li>\n  <li>This round will be conducted twice so that all options are used.</li>\n  <li>The single team with the most points wins.</li>\n</ul>\n<p><strong>Tie breaker:</strong><br>\nIf there is  a tie at the end of any round, a normal round of DC will be held to decide the  winner.</p>', '2014-08-25 07:28:43', 1, 1, 1),
(11, 10, '<p>Advertising is 80 percent  exaggeration, 10 percent omission and 10 percent commission&rdquo;. Show your  marketing tactics to make yourself an advertising guru. Show us what you&rsquo;ve  got, a skit or a spoof! Spontaneity, enthusiasm and creativity will be  encouraged. We will offer you a platform to market your product in all possible  ways to show it is &quot;The Best&rdquo;. The event portrays the marketing skills of  a budding entrepreneur in this highly competitive world in a successful way.</p>\n<p><br>\n  <strong>Prelims  :</strong></p>\n<ul>\n  <li>A picture will be given on the spot during the Registration.</li>\n  <li>Review the picture and express the things in attractive  captions.</li>\n  <li>Best rewarded ten teams will be selected for final.</li>\n</ul>\n<p><strong>Final  :</strong></p>\n<ul>\n  <li>This event conducted in front of Judges and participants on  the Dice.</li>\n  <li>The Themes will be given on the spot or you can choose a  theme of your choice (optional).</li>\n  <li>A maximum of 6-8 minutes will be given for launching the  product which includes creative presentation on the product (could be an ad or  a drama) including all aspects about the product with a power point  presentation.</li>\n  <li>Statistical proposal to the panel of investors describing  cost of the product, manufacturing and market impact value.</li>\n  <li>Product has to be creative and original to be accepted (Must  be partly, if not entirely a tech product).</li>\n  <li>The best two teams will be rewarded.</li>', '2014-08-25 07:28:43', 1, 1, 1),
(12, 11, '<p><strong>General</strong></p>\r\n<ul>\r\n<li>No internet access</li>\r\n<li>Theme will be given on spot with the required content.</li>\r\n<li>Softwares : Dreamweaver, Sublime, Notepad++</li>\r\n</ul>\r\n<p><strong>Points will be calculated on the basis of the following criteria:</strong></p>\r\n<ul>\r\n<li>Content</li>\r\n<ol>\r\n<li>Relevance of content</li>\r\n<li>Accuracy of content</li>\r\n</ol>\r\n<li>Aesthetics</li>\r\n<ol>\r\n<li>Visual appeal and style (color, contrast, fonts, white space)</li>\r\n<li>Consistent look and feel</li>\r\n<li>Readability</li>\r\n<li>Minimalist design (avoid extraneous information)</li>\r\n</ol>\r\n<li>Design</li>\r\n<ol>\r\n<li>Adherence to HTML standards</li>\r\n<li>Effective navigation and working links</li>\r\n<li>Effective use of multimedia content (images, audio, video, animation, etc.)</li>\r\n<li>Browser compatibility</li>\r\n<li>Usage of new technologies</li>\r\n</ol>\r\n<li>Quality of a three-minute oral presentation on the website when submitting the website to the judges.</li>\r\n</ul>', '2014-08-29 11:34:58', 1, 1, 1),
(13, 12, '<ul type="disc">\n  <li>The       hunt is set for  1hr 30       min(tentative) where the teams have to solve ten clues(tentative) and perform       certain tasks to get to certain clues. The clues can be in the form of       riddles leading to a certain place or tasks to be performed to jump to a       clue.</li>\n</ul>\n<ul type="disc">\n  <li><em>No prior opening of clues </em>– The teams are not allowed to open the clues before the hunt       starts .</li>\n</ul>\n<ul type="disc">\n  <li><em>No splitting</em> - Teams are not       allowed to split up and divide their work. The teams have to stay together        through out the hunt . The teams       would not be given the next clue unless all the members are present at the       location and they hand over the previous right clue.</li>\n</ul>\n<ul type="disc">\n  <li><em>No tampering or destroying </em>- Teams are not allowed to tamper or create any sort of       obstacles for other teams.</li>\n</ul>\n<ul type="disc">\n  <li><em>No misleading</em> - There must be no sort of discussion with other team members       or trying to mislead other teams.</li>\n</ul>\n<ul type="disc">\n  <li><em>No external help</em> - The teams are not allowed to seek any sort of external help       for the tasks that are set during the hunt.</li>\n</ul>\n<ul type="disc">\n  <li>The       team which reaches the treasure first will be rewarded with the maximum       points.</li>\n</ul>\n<ul type="disc">\n  <li>Whether       or not the teams reach the treasure they have to report to the end point       at the scheduled end time.</li>\n</ul>\n<ul type="disc">\n  <li>If       none of the teams reach to the treasure then the teams will then be       evaluated based on the number of clues they solved and the time taken.</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(14, 13, '<p><strong>Prelims(Day  1)</strong></p>\n<ul>\n  <li>Maximum 5 speakers from each college.</li>\n  <li>Each speaker will be given a topic related to I.T or  Current Affairs (His/Her choice).</li>\n  <li>Speaker will be given 1 minute and 30 seconds to speak on  that topic.</li>\n  <li>Time allotted for each speaker may be increased or be cut  down depending upon the number of participants.<br>\n    <u></u></li>\n</ul>\n<p><strong>Finals  ( Day 2)</strong></p>\n<ul>\n  <li>9 speakers will be selected for the final round.</li>\n  <li>These 9 speakers must form a team of three for the final  round from his/her college team.</li>\n  <li>Rules of the final round will be explained on the day of  the event.</li>\n  <li>Topic of debate of the final round will be given on Day  1.</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1),
(15, 14, NULL, '2014-08-25 07:28:43', 1, 1, 1),
(16, 15, NULL, '2014-08-25 07:28:43', 1, 1, 1),
(17, 16, '<p><strong>1.  Elimination Round (1st Round):</strong><br />\nThere are 2 participants per  college out of these only 10 will be selected for actual jamming round i.e. the  final round.</p>\n<ul>\n  <li>Topic is on spot.</li>\n  <li>30secs will be given for a speaker to prepare.</li>\n  <li>60secs is provided for a speaker.</li>\n  <li>He is judged based on the content and his speaking skills.</li>\n  <li>The grading will be done by the judges.</li>\n</ul>\n<p><strong>2. Commentary  Round:</strong></p>\n<ul>\n  <li>Topic is on spot.</li>\n  <li>A video is shown </li>\n  <li>The audio of the video will be muted and the participant  will have to comment about the video</li>\n  <li>The video will be shown to the participant once and the  player should do the entire audio herself/himself entirely in English</li>\n  <li>Judging will be based on how creative and how funny the  commentary is</li>\n  <li>Out of the ten only 6 will be chosen</li>\n</ul>\n<p><strong>3. Jam Round:</strong></p>\n<ul>\n  <li>User will be asked to pick a chit. The chit will be a topic  which the user has to speak about.</li>\n  <li>6  rounds. Each round  will be for one minute</li>\n  <li>Other participants will jam fellow participants based on  hesitation, deviation and repetition. </li>\n  <li>If a jam is correct, the participant will the person to  continue</li>\n  <li>The person speaking at the end of one minute gets a bonus.</li>\n  <li>The judge&rsquo;s decisions   will be final</li>\n  <li>Top 3 will be chosen</li>\n</ul>\n<p><strong>4&amp;5. Jam  Round:</strong><br />\n  This  round will be the same as the round 3. But the top 3 will compete for the top 2  positions. In the end the top 2 will go head to head to decide for the winner.</p>\n<p><strong>Generic Rules:</strong><br />\n  The speakers are challenged to speak for one minute on a given subject  without (basic 3&rsquo;s) i.e., &ldquo;repetition,  hesitation, or deviation&quot;. </p>\n<ul>\n  <li>&quot;Repetition&quot; means  the repetition of any word or phrase, although challenges based upon very  common words such as &quot;and&quot; are generally rejected except in extreme  cases. Words contained in the given subject are exempt unless repeated many  times in quick succession.</li>\n</ul>\n<ul>\n  <li>&quot;Hesitation&quot; is watched very strictly: a  momentary pause before resumption of the subject can give rise to a successful  challenge, as can tripping over one''s words. Even pausing during audience  laughter or applause (known as &quot;riding a laugh&quot;) can be challenged. </li>\n</ul>\n<ul type="disc">\n  <li>&quot;Deviation&quot; means deviating from the subject, but has       also been interpreted as &quot;deviating from the English language as we       know it&quot;, &quot;deviation from grammar as we understand it&quot;,       deviating from the truth, and deviation from logic, although leaps into       the surreal are often allowed.</li>\n</ul>', '2014-08-25 07:28:43', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `day` int(2) DEFAULT NULL COMMENT '1 - day1, 2-day2',
  `time` time DEFAULT NULL,
  `duration` int(5) DEFAULT NULL COMMENT 'in minutes',
  `venue_id` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`),
  KEY `venue_id` (`venue_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `event_id`, `day`, `time`, `duration`, `venue_id`) VALUES
(45, 1, 1, '09:00:00', 120, 1),
(46, 5, 1, '11:00:00', 60, 6),
(47, 9, 1, '11:00:00', 120, 1),
(48, 8, 1, '11:00:00', 120, 2),
(49, 4, 1, '11:00:00', 300, 7),
(50, 6, 1, '12:00:00', 60, 3),
(51, 2, 1, '13:00:00', 60, 5),
(52, 3, 1, '13:30:00', 90, 6),
(53, 16, 1, '14:00:00', 60, 4),
(54, 12, 1, '14:00:00', 120, 3),
(55, 16, 1, '15:00:00', 90, 3),
(56, 6, 1, '15:00:00', 120, 1),
(57, 5, 2, '09:00:00', 120, 6),
(58, 13, 2, '09:00:00', 120, 1),
(59, 7, 2, '11:00:00', 120, 6),
(60, 10, 2, '11:00:00', 120, 1),
(61, 8, 2, '14:00:00', 90, 1),
(62, 11, 2, '14:00:00', 120, 6),
(63, 14, 2, '16:00:00', 60, 1),
(64, 15, 1, '17:00:00', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli'),
(9, 'Daman and Diu'),
(10, 'National Capital Territory of Delhi'),
(11, 'Goa'),
(12, 'Gujarat'),
(13, 'Haryana'),
(14, 'Himachal Pradesh'),
(15, 'Jammu and Kashmir'),
(16, 'Jharkhand'),
(17, 'Karnataka'),
(18, 'Kerala'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_id` int(11) DEFAULT NULL,
  `day` int(11) DEFAULT NULL COMMENT '1-day1, 2-day2',
  `time` time DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE IF NOT EXISTS `venues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(100) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `reach` varchar(300) DEFAULT NULL,
  `map` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `venue_name`, `description`, `reach`, `map`) VALUES
(1, 'Main Auditorium', 'Main auditorium is present in auditorium block. 3rd floor', 'First block when you enter college from the main entrance, go to 3rd floor, and you will find Audi there', 'comming sooon'),
(2, 'Room No : 808', NULL, NULL, NULL),
(3, 'Room No : 811', NULL, NULL, NULL),
(4, 'Room No : 911', NULL, NULL, NULL),
(5, 'Basketball Court', NULL, NULL, NULL),
(6, 'MCA LAB', NULL, NULL, NULL),
(7, 'Reception', NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `colleges`
--
ALTER TABLE `colleges`
  ADD CONSTRAINT `colleges_ibfk_1` FOREIGN KEY (`state`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `colleges_ibfk_2` FOREIGN KEY (`lead`) REFERENCES `participants` (`id`);

--
-- Constraints for table `escort`
--
ALTER TABLE `escort`
  ADD CONSTRAINT `escort_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`latest_status`) REFERENCES `status` (`id`);

--
-- Constraints for table `event_heads`
--
ALTER TABLE `event_heads`
  ADD CONSTRAINT `event_heads_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `organizers` (`id`),
  ADD CONSTRAINT `event_heads_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `login_history_ibfk_1` FOREIGN KEY (`organizer_id`) REFERENCES `organizers` (`id`);

--
-- Constraints for table `organizers`
--
ALTER TABLE `organizers`
  ADD CONSTRAINT `organizers_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`);

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`);

--
-- Constraints for table `participants_events`
--
ALTER TABLE `participants_events`
  ADD CONSTRAINT `participants_events_ibfk_1` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`),
  ADD CONSTRAINT `participants_events_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `participant_login_history`
--
ALTER TABLE `participant_login_history`
  ADD CONSTRAINT `participant_login_history_ibfk_1` FOREIGN KEY (`participant_id`) REFERENCES `participants` (`id`);

--
-- Constraints for table `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`query_id`) REFERENCES `queries` (`id`);

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`id`) REFERENCES `events` (`id`);

--
-- Constraints for table `rules`
--
ALTER TABLE `rules`
  ADD CONSTRAINT `rules_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `rules_ibfk_2` FOREIGN KEY (`varified_by`) REFERENCES `organizers` (`id`),
  ADD CONSTRAINT `rules_ibfk_3` FOREIGN KEY (`added_by`) REFERENCES `organizers` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`);

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
