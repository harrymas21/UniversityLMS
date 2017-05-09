-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2016 at 08:02 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `replied` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `like` int(20) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `replied`, `question_id`, `answer_detail`, `datetime`, `user_id`, `like`) VALUES
(4, 0, '13', 'this is mehuls answer 1.... to the above asked question....', '2012-04-04 06:45:49', 0, 0),
(5, 0, '13', 'rgua ua nt BIRWGEA baWEQWEHkah', '2012-04-05 11:44:56', 0, 0),
(6, 0, '12', 'using the connectivity query', '2012-04-06 06:49:11', 8, 0),
(7, 0, '14', 'the various stages are \r\nNew,Ready,Running,Blocked,Terminate', '2012-04-07 07:33:43', 9, 4),
(8, 0, '16', 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', '2012-04-08 06:14:09', 9, 0),
(9, 0, '16', 'In the star topology there is a centralized hub. The communication between various nodes through the hub.\r\nIn this type of network there is a bottleneck of the centralized hub.It is widely used in LAN connection.', '2012-04-09 13:45:22', 9, 0),
(11, 0, '17', 'You can do it withing Borland or VC++ IDE & Compiler.', '2012-04-11 01:15:51', 8, 0),
(12, 0, '17', 'this is reply 1. and this reply is not 2nd...', '2012-04-13 03:49:44', 8, 0),
(13, 0, '17', 'scheduling algorithm is carried out by various methods such as first come first schedule,round robin scheduling,etc;', '2012-04-11 13:33:46', 8, 0),
(15, 0, '17', 'It has many method to explain the sheduling ', '2012-04-12 20:18:28', 12, 0),
(16, 0, '21', 'swing is swing and applet is not swing.', '2012-04-13 12:20:50', 17, 0),
(17, 0, '17', 'scheduling is....', '2012-04-18 11:49:44', 8, 0),
(18, 0, '11', 'i got the answer', '2012-04-18 13:06:22', 9, 0),
(20, 0, '12', 'connectivity with use of execute query and non-execute query\r\n', '2012-04-19 02:27:14', 8, 0),
(21, 0, '17', '\r\n', '2012-04-21 12:30:38', 8, 0),
(22, 0, '29', 'the thread is sub process...', '2012-04-24 14:41:23', 30, 1),
(23, 0, '29', 'are vah', '2012-04-24 14:54:00', 8, 1),
(24, 0, '31', '>This problem is faced with several of people all you have to do is make it stop doing MIME sniffing. You can disable this MIME sniffing by selecting IE the go to tools then to internet options then click custom level after that select Miscellaneous section. After that scroll down in this section then check enable underâ€ open files based on content, not the file extensionâ€', '2012-04-25 13:48:39', 12, 0),
(25, 0, '32', 'The problem was with the theme. Actually it was customized video game theme that was causing the error. Now its working proper.', '2012-04-25 13:49:35', 12, 0),
(26, 0, '32', 'Can you post a screenshot of the problem ? Even I had never seen such problem that notifications turned black. If possible post the screenshot so that I can see what type of pop message in black color is coming in laptop. Till than you can try setting some another them and see if it works. Hope it will work.', '2012-04-25 13:50:25', 9, 0),
(27, 0, '33', 'As i have doubt if you could reset it from the safe mode. But you can surely do it with the help of an application called "Windows Password Key". Here is the step by step process for doing the same:\r\n\r\n\r\nâ€¢	Download Windows Password key from http://www.lostwindowspassword.com/downloads/Windows_Password_Key_Standard_Demo.exe.\r\nâ€¢	Install it on any other PC that you can access easily.\r\nâ€¢	Now you need to burn a bootable CD/DVD Or better create a USB Flash Drive.\r\nâ€¢	Connect this USB or insert bootable DVD to your Windows 8 system and recover the password.\r\nThats it. \r\n', '2012-04-25 13:50:59', 9, 0),
(28, 0, '34', 'C:WindowsSystem32shutdown.exe -s -t 0 -f', '2012-04-25 13:54:52', 9, 0),
(29, 0, '35', 'I have read your question and I would keen to tell you that you can use Mozilla Firefox 10 in Linux-32 bit but before you do that you have to visit official site of the Mozilla Firefox. After that you need to select system and language below download option and then choose Linux installed and download that in your machine. Now you have to install it in your machine. I guess this will bring an end to your problem.', '2012-04-25 14:07:16', 12, 0),
(30, 0, '36', 'Hi friends, as o know there are many users who are really in need of the Google chrome themes but are unable to install the same. So I have started this thread to give you people a fair idea regarding the same. So now to install the theme you just need to follow the below mentioned steps:\r\n\r\nStep 1: Start Google Chrome and go to this web address . Google runs its own themes, in fact online.\r\n\r\nStep 2: Navigate in the themes and click Apply Theme, once it is selected.\r\n\r\nStep 3: Downloading and installation are automatic, and your theme is applied instantly. However, you can cancel it by clicking the Cancel button in the upper right of the browser!', '2012-04-25 14:16:37', 9, 0),
(31, 0, '37', 'Happili.com is deeply infiltrated into victimsâ€™ system. To remove Happili.com, please follow below instruction:\r\n1.       reboot your system into safe mode with networking;\r\n2.       download Anvi Smart Defender and install it;\r\n3.       Fully scan your computer;\r\n4.       delete Happili.com Redirect Virus related file:\r\nQuote\r\n    * %AllUsersProfile%{random}\r\n    * %AllUsersProfile%{random}*.lnk\r\n    * HKEY_CURRENT_USERSoftwareMicrosoftWindowsCurrentVersionRunOnce [RANDOM]\r\n    * HKEY_CURRENT_USERSoftwareMicrosoftWindowsCurrentVersionRun [RANDOM]\r\n    * HKEY_LOCAL_MACHINESOFTWAREMicrosoftWindowsCurrentVersionRun [RANDOM].exe\r\n    * HKEY_CURRENT_USERSoftware[RANDOM]\r\n5.  restart your computer;\r\n', '2012-04-25 14:27:26', 15, 2),
(32, 0, '38', 'The Google Redirect Virus is a real and serious threat to PCs around the world.  The main symptom of this virus is that the search results of Google users will be diverted, and instead of being directed to legitimate sites will redirect to malicious websites distributing spyware to sell rogue security tools and distribution of viruses and infections.  The Google Redirect Virus is hidden in your PC, and once activated will make it nearly impossible for the user to use any search engine. What makes Google Redirect Virus hijackers even more dangerous than a normal search engine is the fact that you can use up to 100% of system resources, making the system almost impossible to operate.  Google Redirect Virus will also create a backdoor on the system that other types of malware that exploit the system for easy entry.\r\n\r\nAlthough it is popularly referred to by the title of the virus, the virus is more skillfully Google Redirect classified as a rootkit or Trojan.  This threat is caused by several types of TDSS rootkit, some of which goes by the name of: \r\nâ€¢	Alureon \r\nâ€¢	Tidserv \r\nâ€¢	Backdoor.Tidserv \r\nâ€¢	Trojan: WinNT / Alureon.D \r\nâ€¢	TrojanSpy: Win32/Chadem.A and many other\r\nGoogle Redirect Virus blocks ads and Google search pages show random ads that contain dubious and link spammers and malware sites.  In fact, Google search results are hijacked, making it impossible for the user to perform an online search.After the user is redirected to a website unrelated to their initial research, some websites you can use to generate false traffic to increase their payments to affiliate marketing, while others attempt to trick you to buy harmful rogue security tools. Another big problem with Google Redirect Virus is that you can hide from security tools installed.  It will not be picked up by many security tools, and then the user may find it difficult to detect and remove Google Redirect virus from the system.  It does this by injecting the same memory and processes to enabl', '2012-04-25 14:30:56', 15, 5),
(37, 0, '39', 'As for a listing on a wired network, it needs to be physically connected by Wi-Fi, anyone within range of the network can potentially connect to it.  And this is even more annoying than the intruder may not be visible: this can be a neighbor, passing in the street, in short, anyone.  Then he is free to browse the hard drive of your PC connected to the unprotected or using your Internet inappropriately, you yourself are responsible for the acts he might commit.  Fortunately, it is possible to prevent this. \r\n\r\nThe default settings for access points and wireless routers are not secure and allow anyone to connect to your network.  Thus, the majority of users switching to Wi-Fi, seeing that the wireless works straight start, do not go further and do not seek to secure it, which is extremely risky.  Here is how to properly configure your Wi-Fi to make it safer.\r\n\r\nIn our example, we used Orange Livebox. However, the features and options listed are present in most of the box, routers and access points Wi-Fi market.  Do not hesitate to refer to your hardware documentation for more information and find out how to access a specific feature.\r\n', '2012-04-25 14:45:57', 9, 1),
(40, 0, '40', 'If your broadband connection is slower than it should be, it may be due to the configuration of your network or computer.  If you tell your company that your Internet connection is slow, probably say that the problem is on your computer and will not be responsible.  This guide will show you what you can do to improve the speed of your connection. Before making any changes to your settings, turn off the router or access point to Internet and back on.  Sometimes the connection can be slow due to a failure point in the output device to the Internet. ', '2012-04-25 14:53:40', 15, 1),
(41, 0, '14', 'thre are 5 stages witch are ready,running,wait,block,release ', '2012-04-26 12:55:00', 15, 6),
(42, 0, '14', '1.ready\r\n2.running\r\n3.wait\r\n4.block\r\n5.release', '2012-04-26 12:56:15', 8, 10),
(43, 0, '7', 'jjjjjjj', '2012-04-27 04:44:09', 8, 0),
(44, 0, '41', 'THIS HAS FIVE STAPE', '2012-04-27 06:06:41', 8, 1),
(45, 0, '39', 'ddddddddd', '2015-10-25 07:11:16', 8, 2),
(46, 0, '39', 'dfdfdf', '2015-10-25 07:11:31', 8, 5),
(47, 0, '42', 'Rasmus Lerdorfffffffff', '2015-10-25 07:12:40', 8, 2),
(48, 0, '23', 'i have no idea', '2016-06-03 13:13:00', 0, 0),
(49, 0, '23', 'no idea', '2016-06-03 13:13:34', 0, 0),
(50, 0, '36', 'no idea..', '2016-06-03 14:31:22', 0, 0),
(51, 0, '17', 'no', '2016-06-03 14:33:38', 0, 0),
(52, 0, '17', 'nooo', '2016-06-03 14:34:04', 0, 0),
(53, 0, '17', 'gfyfytc', '2016-06-03 14:41:51', 0, 0),
(54, 0, '17', 'gvvgv', '2016-06-03 14:42:03', 0, 0),
(55, 0, '17', 'fdgasf', '2016-06-03 14:55:31', 0, 0),
(56, 0, '17', 'wdfas', '2016-06-03 14:59:39', 0, 0),
(57, 0, '17', 'uuchfchfcjhf', '2016-06-03 15:02:36', 0, 0),
(58, 0, '34', ' j j ibuvtcy', '2016-06-03 15:08:02', 0, 0),
(59, 0, '20', 'hchchgc', '2016-06-06 19:04:34', 0, 0),
(60, 0, '35', '?????????????', '2016-06-07 01:06:29', 34, 0),
(61, 0, '14', 'test 1', '2016-06-11 11:05:44', 34, 2),
(62, 0, '14', 'The various stages are New,Ready,Running,Blocked,Terminate.... hope it helps.', '2016-06-11 11:19:08', 34, 3),
(63, 0, '15', 'test 2....', '2016-06-12 00:36:55', 32, 1),
(64, 0, '15', 'no idea...', '2016-06-13 08:17:00', 15, 0),
(65, 0, '15', 'pardon???', '2016-06-13 08:21:46', 15, 0),
(66, 0, '44', 'no idea sir....', '2016-06-20 13:13:31', 32, 6),
(67, 0, '23', 'I have no idea.....', '2016-06-24 17:43:17', 35, 0),
(68, 0, '40', 'nice try mahesh...........', '2016-06-29 14:21:39', 9, 0),
(69, 0, '39', 'have a good password system.....', '2016-06-29 14:24:06', 9, 0),
(70, 0, '44', 'i have no idea', '2016-07-14 12:15:56', 35, 5),
(71, 0, '42', 'Rasmus Lerdoff', '2016-07-19 22:18:16', 15, 0),
(72, 0, '14', 'The various stages are New,Ready,Running,Blocked,Terminate.... hope it helps', '2016-08-13 10:55:09', 40, 0),
(73, 0, '14', 'The various stages are New,Ready,Running,Blocked,Terminate.... hope it helps', '2016-08-13 10:55:35', 40, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `chatdetail_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  PRIMARY KEY (`chatdetail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatdetail_id`, `cdatetime`, `message`, `user_id`, `chat_id`) VALUES
(13, '2012-04-17 14:28:03', 'hi fabin im hardik', 8, 5),
(14, '2012-04-17 14:28:22', 'ka vikla', 8, 6),
(15, '2012-04-17 14:41:26', 'hi', 9, 5),
(16, '2012-04-17 14:42:12', 'how r u', 9, 5),
(17, '2012-04-17 14:42:55', 'hello', 9, 5),
(18, '2012-04-17 14:43:32', 'hi', 9, 5),
(19, '2012-04-17 14:43:52', 'kaise ho ?', 9, 5),
(20, '2012-04-17 14:43:58', 'm fine', 9, 5),
(21, '2012-04-17 14:44:36', 'this is hardik', 9, 5),
(22, '2012-04-17 14:46:39', 'now its fine', 9, 5),
(23, '2012-04-17 14:46:49', 'hardik here', 8, 5),
(24, '2012-04-18 09:37:31', 'shu karo 6o', 5, 7),
(25, '2012-04-18 09:41:37', 'are hardik hu hato ato', 12, 8),
(26, '2012-04-18 09:46:28', 'are shu photo mast mukyo 6e', 8, 9),
(27, '2012-04-19 12:12:32', 'are dipak avyo 6e ', 12, 8),
(28, '2012-04-21 11:53:43', 'hi\r\n', 8, 10),
(35, '2012-04-24 14:52:42', 'shu bhai', 30, 16),
(36, '2012-04-26 13:08:05', 'what is message passing system in the distributed application?', 9, 17),
(37, '2012-04-26 13:09:39', 'why synchronization require in the distributed system? ', 9, 18),
(38, '2012-04-27 04:46:00', 'how is your work going on?\r\n', 8, 19),
(43, '2016-06-03 13:37:16', 'heyyy', 5, 7),
(44, '2016-06-07 01:04:53', 'kgjhg', 33, 22),
(46, '2016-06-07 01:17:15', 'HEY THIS IS A SENT MESSAGE.', 32, 22),
(47, '2016-06-07 01:29:24', 'i have no idea!!!!', 15, 17),
(59, '2016-06-12 16:09:30', 'good my friend!!!!', 15, 19),
(60, '2016-06-18 10:17:11', 'testing message functionality...', 33, 22),
(61, '2016-06-18 15:45:01', 'welcome to online uni lms....', 35, 25),
(62, '2016-06-20 12:57:59', 'jgfasc', 34, 26),
(63, '2016-07-03 18:47:05', 'thank you...', 37, 25),
(64, '2016-07-03 19:12:03', 'Hey student, how may i help you?', 37, 26),
(67, '2016-07-03 21:04:37', 'test 1', 34, 29),
(68, '2016-07-13 20:58:21', 'test 1', 30, 16),
(69, '2016-07-16 20:18:36', '\r\n\r\nWas inquiring about the various requirements for internship position at safaricom.', 34, 26),
(71, '2016-07-19 22:36:11', 'hey..', 15, 31),
(72, '2016-07-19 22:39:23', 'hghg hghgf h fr', 15, 32),
(73, '2016-07-19 22:47:14', 'how come? havent you done that topic....', 15, 17),
(74, '2016-07-19 22:50:13', 'heyy', 15, 31),
(75, '2016-07-21 12:45:46', 'home', 48, 33),
(84, '2016-07-23 16:19:25', 'hello mr. alfred', 35, 37),
(85, '2016-07-23 17:33:08', 'what?', 5, 9),
(86, '2016-07-23 18:04:57', 'heyy', 40, 38),
(95, '2016-07-23 21:31:11', 'yes', 40, 46),
(96, '2016-08-10 14:41:45', 'a', 34, 47),
(97, '2016-08-12 22:21:28', 'hey', 35, 48),
(98, '2016-08-13 11:13:18', 'i have forgotten my password...', 40, 49),
(99, '2016-08-14 11:29:17', 'n', 33, 49),
(100, '2016-08-14 11:29:44', 'n', 33, 49),
(101, '2016-08-14 11:44:19', 'n', 33, 50);

-- --------------------------------------------------------

--
-- Table structure for table `chatmaster`
--

CREATE TABLE IF NOT EXISTS `chatmaster` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `chatmaster`
--

INSERT INTO `chatmaster` (`chat_id`, `user_id_from`, `user_id_to`) VALUES
(5, 8, 9),
(6, 8, 12),
(7, 5, 8),
(8, 12, 8),
(9, 8, 5),
(10, 8, 9),
(15, 29, 8),
(16, 30, 5),
(17, 9, 15),
(18, 9, 12),
(19, 8, 15),
(22, 33, 32),
(25, 35, 37),
(26, 34, 37),
(29, 34, 36),
(31, 15, 44),
(32, 15, 45),
(33, 48, 33),
(37, 35, 48),
(38, 40, 49),
(46, 40, 27),
(47, 34, 48),
(48, 35, 49),
(49, 40, 5),
(50, 33, 32);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(5) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(50) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `added_by` int(8) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `school_name`, `faculty_name`, `added_by`) VALUES
(1, 'INFORMATION TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(2, 'COMPUTER TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(3, 'COMPUTER NETWORKS', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(7, 'ARCHITECTURE', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 33),
(8, 'QUANTITY SURVEYING', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(9, 'CONSTRUCTION MANAGEMENT', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(10, 'BUILDING CONSTRUCTION', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(11, 'REAL ESTATE', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(12, 'GEO-SPATIAL ENGINEERING', 'SURVEYING AND GEOSPATIAL SCIENCES', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(13, 'GEO-INFORMATICS', 'SURVEYING AND GEOSPATIAL SCIENCES', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(14, 'GEO-INFORMATION TECHNOLOGY', 'SURVEYING AND GEOSPATIAL SCIENCES', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(15, 'SURVEYING TECHNOLOGY', 'SURVEYING AND GEOSPATIAL SCIENCES', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(16, 'LAND ADMINSTRATION', 'SURVEYING AND GEOSPATIAL SCIENCES', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(18, 'ELECTRICAL AND ELECTRONIC ENGINEERING', 'ELECTRICAL AND ELECTRONIC ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(19, 'CIVIL ENGINEERING', 'INFRASTRUCTURE AND RESOURCE ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(20, 'AERONAUTICAL ENGINEERING', 'MECHANICAL AND PROCESS ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(21, 'CHEMICAL ENGINEERING', 'MECHANICAL AND PROCESS ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(22, 'MECHANICAL ENGINEERING', 'MECHANICAL AND PROCESS ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(23, 'MECHANICAL ENGINEERING TECHNOLOGY', 'MECHANICAL AND PROCESS ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 5),
(24, 'APPLIED STATISTICS', 'MATHEMATICS AND STATISTICS', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(25, 'MATHEMATICS', 'MATHEMATICS AND STATISTICS', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(26, 'ACTURIAL SCIENCE', 'MATHEMATICS AND STATISTICS', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(27, 'COMMUNICATION AND COMPUTER NETWORKS', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(28, 'INDUSTRIAL CHEMISTRY', 'PHYSICAL SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(29, 'ANALYTICAL CHEMISTRY', 'PHYSICAL SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 5),
(30, 'HOSPITALITY MANAGEMENT', 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(31, 'TOURISM & TRAVEL MANAGEMENT', 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(32, 'HOTEL & RESTAURANT MANAGEMENT', 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(33, 'INSTITUTIONAL CATERING & ACCOMODATION MANAGEMENT', 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(34, 'EVENT & CONVENTION MANAGEMENT', 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(39, 'DESIGN', 'CREATIVE ARTS AND TECHNOLOGIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(40, 'FASHION DESIGN', 'CREATIVE ARTS AND TECHNOLOGIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(41, 'PRINTING', 'CREATIVE ARTS AND TECHNOLOGIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(42, 'MUSIC', 'CREATIVE ARTS AND TECHNOLOGIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(43, 'COUNSELLING PSYCHOLOGY', 'SOCIAL AND DEVELOPMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(44, 'INTERNATIONAL RELATIONS & DIPLOMACY', 'SOCIAL AND DEVELOPMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(45, 'INFORMATION SCIENCE', 'INFORMATION AND COMMUNICATION STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(46, 'INFORMATION STUDIES', 'INFORMATION AND COMMUNICATION STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(47, 'JOURNALISM & MASS COMMUNICATION', 'INFORMATION AND COMMUNICATION STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(48, 'COMMERCE', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(49, 'BUSINESS COMMERCE', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(50, 'ACCOUNTANCY', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(51, 'BUSINESS INFORMATION TECHNOLOGY', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(52, 'OFFICE ADMINSTRATION & TECHNOLOGY', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33),
(53, 'COMMUNITY & PUBLIC HEALTH', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 33),
(54, 'MEDICAL LABORATORY TECHNOLOGY', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 33),
(55, 'HEALTH RECORDS & IT', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 33),
(56, 'NUTRITION AND DIETETICS', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 33),
(57, 'PHARMACEUTICAL TECHNOLOGY', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 33);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(8) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(25) NOT NULL,
  `event_date` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `venue` varchar(25) NOT NULL,
  `added_by` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `type`, `venue`, `added_by`, `timestamp`) VALUES
(2, 'SEVEN SEAS DAY', '30/6/2016', 'ICT TALK', 'MAIN HALL, TUK', 31, '2016-06-17 12:28:10'),
(12, 'jfhfh', 'fhgfhgf', 'hgfhgf', 'hgfhg', 35, '2016-06-26 11:34:04'),
(13, 'GOOGLE DAY', '21/2/2016', 'TECHeXPO', 'IhUB', 35, '2016-07-23 16:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE IF NOT EXISTS `faculties` (
  `faculty_id` int(11) NOT NULL AUTO_INCREMENT,
  `faculty_name` varchar(50) NOT NULL,
  `added_by` int(5) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`faculty_id`, `faculty_name`, `added_by`) VALUES
(1, 'APPLIED SCIENCES AND TECHNOLOGY', 34),
(2, 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(3, 'ENGINEERING SCIENCES AND TECHNOLOGY', 9);

-- --------------------------------------------------------

--
-- Table structure for table `gcm_users`
--

CREATE TABLE IF NOT EXISTS `gcm_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gcm_instance_id` text,
  `gcm_regid` text,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gcm_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `material_uploads`
--

CREATE TABLE IF NOT EXISTS `material_uploads` (
  `material_id` int(20) NOT NULL AUTO_INCREMENT,
  `material_name` varchar(30) NOT NULL,
  `file` varchar(150) NOT NULL,
  `unit_code` varchar(30) NOT NULL,
  `unit_name` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `added_by` int(10) NOT NULL,
  `rating` int(10) NOT NULL,
  `views` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`material_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `material_uploads`
--

INSERT INTO `material_uploads` (`material_id`, `material_name`, `file`, `unit_code`, `unit_name`, `course_name`, `added_by`, `rating`, `views`, `timestamp`) VALUES
(1, 'Introduction', 'files/Oulms.pdf', '1000', 'E LEARNING', 'INFORMATION TECHNOLOGY', 35, 23, 4, '2016-06-08 20:11:02'),
(2, 'Principles of programmin', 'files/Oulms2.pdf', '1001', 'C++', 'Computer technology', 35, 9, 3, '2016-06-12 14:12:52'),
(3, 'IT general knowledge', 'files/', '0001', 'all', 'in', 31, 5, 0, '2016-06-13 09:03:36'),
(4, 'IT general knowledge', 'files/Oulms2_2.pdf', '0002', 'all', 'INFORMATION TECHNOLOGY', 31, 5, 0, '2016-06-13 09:05:46'),
(5, 'tendering in kenya', 'files/Oulms2_4.pdf', '00300', 'estimation and tendering', 'INFORMATION TECHNOLOGY', 35, 6, 2, '2016-06-13 20:36:14'),
(7, 'JHGJHGJH', 'HJGJHGH', 'GHJGJHGHJ', 'GJHGHJGJHGJ', 'HJGJHG', 854, 54, 545, '2016-07-27 14:10:27'),
(8, 'vvhgvhv', 'hgvhvhgv', 'vhgvhgv', 'hgvhgvhgvhg', 'vgvhgv', 54, 54, 54, '2016-07-27 14:32:26'),
(9, 'jjhgjhg', 'jhghjgg', 'jgjhgjh', 'jgjhgjg', 'hgjgjgjhg', 87, 87, 87, '2016-07-27 14:41:17'),
(10, 'gfghf', 'hgfhgfhgf', 'ghfhgfhf', 'hgfhgfhgf', 'hgfhgff', 54, 54, 54, '2016-07-27 14:50:11'),
(11, 'jhjhgj', 'gjhgjhgj', 'gjhgjgj', 'gjgjhgjhg', 'jhgjg', 14, 54, 54, '2016-07-27 15:15:32'),
(12, 'Advanced Web Programmin', 'files/Oulms2_8.pdf', 'ADWP', 'WEB PROGRAMMING', 'INFORMATION TECHNOLOGY', 35, 0, 0, '2016-08-12 16:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE IF NOT EXISTS `mentors` (
  `user_id` int(10) NOT NULL,
  `field` varchar(25) NOT NULL,
  `organization` varchar(25) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `added_by` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`user_id`, `field`, `organization`, `bio`, `added_by`, `timestamp`) VALUES
(36, 'SOFTWARE DEVELOPMENT', 'ROC-TECH SYSTEMS', 'Always have confidence in yourself. ', 33, '2016-06-17 15:53:45'),
(37, 'HUMAN RESOURCE', 'SAFARICOM', 'â€˜â€˜...I shall give you this good advice. Be many people. Give up the game of being always you. You have worried too much about yourself, so that you have been really aslave and prisoner.  You have not done anything without first considering how it would affect your happiness and prestige. You were always much afraid that you might do a stupid thing, or be bored.  What would it really have mattered?  All over the world people are doing stupid things...â€™â€™', 33, '2016-06-17 16:29:25'),
(41, 'NETWORKING', 'CARBONARA INC.', 'if you have any questions in CCNA, SERVERS and HARDWARE feel free to contact me. \r\nCERTIFICATIONS: CCNA, CCIE(DATA), CCIE(VOICE), CCNA(ROUTING & SWITCHING), MICROSOFT SERVER 2012, LINUX/UBUNTU SERVER.', 5, '2016-07-16 20:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` int(5) NOT NULL AUTO_INCREMENT,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL,
  PRIMARY KEY (`que_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 9, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 9, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 9, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0),
(31, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0),
(41, 14, 'WHAT DOES RAM STAND FOR?', 'Readily accessed mailer', 'Random Authorization Mechanism', 'Remote Authorization Mechanism', 'Random access memory', 4),
(42, 14, 'How much information can a Compact Disk usually store?', '650MB', '1.4MB', '10MB', '150MB', 1),
(43, 14, 'Which is not a computer manufacturer?', 'Microsoft', 'Apple', 'IBM', 'Sun', 4),
(44, 14, 'Which of these is an operating system used on computers?', 'Microsoft windows', 'Netscape', 'Microsoft Word', 'Android', 1),
(45, 14, 'which part is the "brain" of the computer?', 'CPU', 'monitor', 'rom', 'ram', 1),
(46, 14, 'which company is famous for manufacturing computer processors?', 'sony', 'intel', 'macromedia', 'corel', 2),
(47, 17, 'Question 1 of calculus?', 'AA', 'BB', 'CC', 'DD', 3),
(48, 17, 'Question 2 of calculus?', 'GG', 'HH', 'KK', 'LL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('34', 11, '0000-00-00 00:00:00', 0),
('34', 14, '0000-00-00 00:00:00', 6),
('32', 14, '2016-07-03 00:00:00', 5),
('32', 9, '0000-00-00 00:00:00', 2),
('34', 10, '0000-00-00 00:00:00', 0),
('15', 10, '2016-07-19 12:35:19', 5),
('12', 10, '2016-07-19 12:35:19', 4),
('9', 10, '2016-07-19 12:35:43', 3),
('27', 10, '2016-07-19 12:35:43', 5),
('32', 10, '2016-07-19 12:36:03', 5),
('15', 8, '0000-00-00 00:00:00', 0),
('15', 9, '0000-00-00 00:00:00', 1),
('34', 9, '0000-00-00 00:00:00', 2),
('48', 8, '2016-07-21 12:44:08', 3),
('34', 8, '2016-07-21 13:14:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
  `sub_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(25) DEFAULT NULL,
  `course_name` varchar(50) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`, `course_name`) VALUES
(1, 'VB', 'INFORMATION TECHNOLOGY'),
(2, 'Oracle', 'INFORMATION TECHNOLOGY'),
(3, 'Java', 'INFORMATION TECHNOLOGY'),
(4, 'PHP', 'INFORMATION TECHNOLOGY'),
(5, 'Computer Fundamental', 'COMPUTER TECHNOLOGY'),
(6, 'Networking', 'COMPUTER NETWORKS'),
(7, 'mysql', 'COMPUTER TECHNOLOGY'),
(8, 'ETHICAL HACKING', 'COMPUTER TECHNOLOGY'),
(9, 'COMPUTER HARDWARE', 'COMPUTER TECHNOLOGY'),
(10, 'CCNA', 'COMPUTER NETWORKS'),
(11, 'calculus', 'COMPUTER TECHNOLOGY'),
(12, 'e-commerce', '');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_id` int(5) NOT NULL AUTO_INCREMENT,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_year` int(1) NOT NULL,
  `total_que` varchar(15) DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `course_name`, `course_year`, `total_que`, `added_by`) VALUES
(8, 1, 'VB Basic Test', 'INFORMATION TECHNOLOGY', 2, '3', 35),
(9, 1, 'Essentials of VB', 'COMPUTER TECHNOLOGY', 2, '5', 35),
(10, 1, 'Creating User Services', 'INFORMATION TECHNOLOGY', 4, '5', 35),
(11, 7, 'function', 'COMPUTER TECHNOLOGY', 0, '5', 38),
(12, 8, 'ET001', 'INFORMATION TECHNOLOGY', 4, '10', 35),
(13, 9, 'CAT 1', 'INFORMATION TECHNOLOGY', 1, '10', 35),
(14, 9, 'cat 2', 'COMPUTER TECHNOLOGY', 0, '5', 38),
(15, 10, 'Subnetting', 'INFORMATION TECHNOLOGY', 3, '5', 38),
(16, 3, 'java.net', 'COMPUTER TECHNOLOGY', 4, '10', 35),
(17, 11, 'calculus 101', 'COMPUTER TECHNOLOGY', 2, '2', 35),
(18, 12, 'e commerce cat 1', 'INFORMATION TECHNOLOGY', 4, '3', 35);

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('3m69f2bqu1938e3fimf62faki3', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('3m69f2bqu1938e3fimf62faki3', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('4vgm3dg21ol0qhkadughop0qn0', 14, 'WHAT DOES RAM STAND FOR?', 'Readily accessed mailer', 'Random Authorization Mechanism', 'Remote Authorization Mechanism', 'Random access memory', 4, 4),
('4vgm3dg21ol0qhkadughop0qn0', 14, 'How much information can a Compact Disk usually store?', '650MB', '1.4MB', '10MB', '150MB', 1, 1),
('4vgm3dg21ol0qhkadughop0qn0', 14, 'Which is not a computer manufacturer?', 'Microsoft', 'Apple', 'IBM', 'Sun', 4, 4),
('4vgm3dg21ol0qhkadughop0qn0', 14, 'Which of these is an operating system used on computers?', 'Microsoft windows', 'Netscape', 'Microsoft Word', 'Android', 1, 1),
('4vgm3dg21ol0qhkadughop0qn0', 14, 'which part is the "brain" of the computer?', 'CPU', 'monitor', 'rom', 'ram', 1, 1),
('4vgm3dg21ol0qhkadughop0qn0', 14, 'which company is famous for manufacturing computer processors?', 'sony', 'intel', 'macromedia', 'corel', 2, 2),
('pjpo5shij03tpslnvb6rra2bk1', 14, 'WHAT DOES RAM STAND FOR?', 'Readily accessed mailer', 'Random Authorization Mechanism', 'Remote Authorization Mechanism', 'Random access memory', 4, 4),
('pjpo5shij03tpslnvb6rra2bk1', 14, 'How much information can a Compact Disk usually store?', '650MB', '1.4MB', '10MB', '150MB', 1, 1),
('pjpo5shij03tpslnvb6rra2bk1', 14, 'Which is not a computer manufacturer?', 'Microsoft', 'Apple', 'IBM', 'Sun', 4, 4),
('pjpo5shij03tpslnvb6rra2bk1', 14, 'Which of these is an operating system used on computers?', 'Microsoft windows', 'Netscape', 'Microsoft Word', 'Android', 1, 3),
('pjpo5shij03tpslnvb6rra2bk1', 14, 'which part is the "brain" of the computer?', 'CPU', 'monitor', 'rom', 'ram', 1, 4),
('53dferq6k173l2ad0papf7d6g6', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('53dferq6k173l2ad0papf7d6g6', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 4),
('53dferq6k173l2ad0papf7d6g6', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 4),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3, 4),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3, 4),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('c0vungq5kd559j6hg4ifj8akq1', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('e451ele91l4i3qmo15u570m452', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('e451ele91l4i3qmo15u570m452', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 1),
('e451ele91l4i3qmo15u570m452', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 1),
('fv7n5s1dgodor8ni9bo6vg7u15', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 2),
('fv7n5s1dgodor8ni9bo6vg7u15', 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3, 4),
('fv7n5s1dgodor8ni9bo6vg7u15', 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4, 1),
('fv7n5s1dgodor8ni9bo6vg7u15', 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3, 1),
('fv7n5s1dgodor8ni9bo6vg7u15', 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `podcasts`
--

CREATE TABLE IF NOT EXISTS `podcasts` (
  `podcast_id` int(8) NOT NULL AUTO_INCREMENT,
  `podcast_name` varchar(25) NOT NULL,
  `file` varchar(100) NOT NULL,
  `podcast_description` varchar(150) NOT NULL,
  `uploader_id` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`podcast_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `podcasts`
--

INSERT INTO `podcasts` (`podcast_id`, `podcast_name`, `file`, `podcast_description`, `uploader_id`, `timestamp`) VALUES
(1, 'Importance of groupwork', 'podcasts/tutorial.webm', 'Podcast tries to list and give examples of pros and maybe cons of groupwork.', 35, '2016-06-13 21:26:18'),
(16, 'HTML5', 'podcasts/tutorial4.webm', 'using jquery-mobile to create hybrid apps', 35, '2016-07-22 11:44:36'),
(17, 'ADVANCED WEB PROGRAMMING', 'podcasts/tutorial2.webm', 'Avoiding SQL injection in modern websites', 35, '2016-07-22 11:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `question_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `heading`, `question_detail`, `datetime`, `user_id`, `subtopic_id`, `views`) VALUES
(7, 'table connectivity', 'query of the connecting table with form?', '2012-04-11 09:42:44', 8, 7, 9),
(8, 'Window Xp', 'how to debbuge the ble screen error?', '2012-04-11 00:25:00', 8, 5, 1),
(9, 'Window vista', 'hot to change the administrator password from cmd?', '2012-04-03 17:51:44', 8, 5, 0),
(10, 'Window 7', 'how to make uninstall set up? ', '2012-04-05 02:24:42', 8, 5, 3),
(11, 'linux', 'how to use the live source of l\r\n', '2012-04-07 00:51:42', 9, 5, 6),
(12, 'connectivity', 'how to connect form with database?', '2012-04-09 09:01:36', 8, 2, 5),
(14, 'Thread life cycle', 'What are the different stages of thread life cycle?\r\n', '2012-04-09 23:04:43', 9, 12, 259),
(15, 'applet controls ', 'how to create simple applet program? ', '2012-04-12 12:02:44', 9, 13, 22),
(16, 'STAR topology', 'how connection established in the star topology?\r\n', '2012-04-26 22:14:01', 9, 17, 1),
(17, 'Scheduling', 'Hello,\r\n\r\nI want to create a program that supports multi-threading with scheduling. The program must', '2012-04-17 15:41:54', 8, 12, 98),
(18, 'Sheduling algorithm', 'Explain the various scheduling algorithm?\r\n', '2012-04-11 13:13:25', 8, 0, 0),
(19, 'Sheduling algorithm', 'Explain the various scheduling algorithm?\r\n', '2012-04-11 13:13:54', 8, 0, 1),
(20, 'scheduling algorithm', 'Explain various scheduling algorithm used in the cpu scheduling?', '2012-04-11 13:18:47', 8, 12, 12),
(21, 'Swing Applet', 'I want to know the difference between normal Applet and Swing Applet.....\r\n\r\nAnd I also want to know', '2012-04-13 12:13:35', 16, 13, 12),
(22, 'Applet Class', 'What is applet class ?', '2012-04-13 13:13:37', 26, 13, 2),
(23, 'what is applet ?', 'what is applet ?\r\n\r\nIs it as class or package ?', '2012-04-13 13:18:45', 27, 13, 16),
(24, 'a', '', '2012-04-21 12:53:31', 8, 12, 6),
(25, 'thread ', 'explain the  various stages of thread', '2012-04-22 05:39:06', 8, 12, 7),
(26, '', '', '2012-04-24 04:15:11', 8, 12, 0),
(27, 'a', '', '2012-04-24 04:15:33', 8, 12, 0),
(28, 'a', '', '2012-04-24 04:17:32', 8, 12, 0),
(29, 'what', 'what is what', '2012-04-24 14:18:15', 28, 12, 10),
(30, 'What is thread ?', 'What is thread ?', '2012-04-24 14:38:03', 29, 12, 1),
(31, 'window 7', 'Windows 7, how can I open .jnlp extension in Internet Explorer 9?', '2012-04-25 13:25:05', 8, 12, 5),
(32, 'window vista', 'Unable to see taskbar notifications in Windows Vista SP2?', '2012-04-25 13:26:24', 8, 12, 5),
(33, 'window 8', 'How can i recover lost windows 8 Administrator password?', '2012-04-25 13:27:06', 8, 12, 4),
(34, 'windows 8', ' How to easily Shutdown Windows 8 Consumer preview?', '2012-04-25 13:52:35', 8, 12, 6),
(35, 'Mozila Browser', 'Operate Mozilla Firefox 10 in linux-32 Bit?', '2012-04-25 14:05:47', 9, 18, 68),
(36, 'Google Chrome Browser', 'How to install Google chrome themes?', '2012-04-25 14:14:33', 12, 18, 10),
(37, 'Happili ', 'How to remove Happili redirecting virus?', '2012-04-25 14:24:11', 9, 19, 26),
(38, 'Google Redirect Virus', 'How to remove Google redirect virus from Web browser?', '2012-04-25 14:29:52', 9, 19, 28),
(39, 'Secure Wi-Fi', 'Tips to create secure Wi-Fi', '2012-04-25 14:45:07', 15, 20, 33),
(40, 'Connection speed', 'How to increase the speed of your broadband connection?', '2012-04-25 14:53:08', 9, 20, 10),
(41, 'THREADING', 'WHAT IS THREADING?', '2012-04-27 06:05:09', 32, 12, 12),
(42, 'Who is the father of php', 'Any one tell me who is the father of php ???????', '2015-10-25 07:12:11', 8, 12, 9),
(43, 'processors', 'jhavsdjvhd???', '2016-06-03 15:04:17', 0, 16, 0),
(44, 'IMPLEMENTATION', 'How do you implement an MPESA API into an aplication?', '2016-06-18 13:10:19', 35, 21, 33);

-- --------------------------------------------------------

--
-- Table structure for table `repository`
--

CREATE TABLE IF NOT EXISTS `repository` (
  `rep_id` int(10) NOT NULL AUTO_INCREMENT,
  `document_name` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `file` varchar(100) NOT NULL,
  `added_by` int(10) NOT NULL,
  `upvote` int(10) NOT NULL,
  `downvote` int(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `repository`
--

INSERT INTO `repository` (`rep_id`, `document_name`, `description`, `file`, `added_by`, `upvote`, `downvote`, `timestamp`) VALUES
(1, 'ON THE ETHICS OF EXPLOITS AND EXPLOITATION', 'A paper discussing professional, ethical and legal issues in ICT exploits.', 'files/cheruiyot.txt', 34, 5, 5, '2016-07-28 14:55:32'),
(2, 'HOTEL RESERVATION SYSTEM', 'Project documentation for the system.', 'files/Oulms2_4.pdf', 35, 1, 0, '2016-08-08 21:07:19'),
(3, 'PRIVACY IN COMPUTING', 'A paper on the proffessional ethics in computing.', 'files/Oulms2_7.pdf', 35, 1, 0, '2016-08-08 21:08:35'),
(4, 'STUXNET PROGRAM', 'Research paper on the stuxnet malware that corrupted iranian nuclear PLCs.', 'files/Oulms2_10.pdf', 35, 0, 0, '2016-08-08 21:13:29'),
(5, 'ONLINE VOTING SYSTEM', 'Project documentation for the system.', 'files/Oulms2_9.pdf', 35, 1, 0, '2016-08-08 21:17:18'),
(6, 'THE DARKNET', 'Research paper discussing what the darknet entails in details.', 'files/Oulms2_8.pdf', 35, 1, 0, '2016-08-08 21:19:52'),
(7, 'PAST PAPERS YEAR 4', 'All past semester examination past papers.', 'files/past papers y4.rar', 35, 0, 0, '2016-08-13 10:25:55'),
(8, 'PAST PAPERS YEAR 3', 'All year 3 past semester examination papers.', 'files/Past Papers Btch y3.zip', 35, 0, 0, '2016-08-13 10:27:16');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE IF NOT EXISTS `schools` (
  `school_id` int(5) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `added_by` int(5) NOT NULL,
  PRIMARY KEY (`school_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`school_id`, `school_name`, `faculty_name`, `added_by`) VALUES
(5, 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 34),
(7, 'BIOLOGICAL AND LIFE SCIENCES', 'APPLIED SCIENCES AND TECHNOLOGY', 9),
(8, 'PHYSICAL SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 9),
(9, 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 9),
(10, 'MATHEMATICS AND STATISTICS', 'APPLIED SCIENCES AND TECHNOLOGY', 9),
(11, 'ELECTRICAL AND ELECTRONIC ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 9),
(12, 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 9),
(13, 'INFRASTRUCTURE AND RESOURCE ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 9),
(14, 'MECHANICAL AND PROCESS ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 9),
(15, 'SURVEYING AND GEOSPATIAL SCIENCES', 'ENGINEERING SCIENCES AND TECHNOLOGY', 9),
(16, 'ENGINEERING INNOVATION AND PRODUCTION', 'ENGINEERING SCIENCES AND TECHNOLOGY', 9),
(17, 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(18, 'CREATIVE ARTS AND TECHNOLOGIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(19, 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(20, 'INFORMATION AND COMMUNICATION STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(21, 'SOCIAL AND DEVELOPMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(23, 'CREATIVE AND CULTURAL INDUSTRIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 9),
(24, 'SOCIAL AND DEVELOPMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 33);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `studentid` int(30) NOT NULL AUTO_INCREMENT,
  `regno` varchar(30) NOT NULL,
  `user_id` int(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `course_year` int(1) NOT NULL,
  `score` int(5) NOT NULL,
  `quiz_score` int(5) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `time registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `forum_block` int(1) NOT NULL DEFAULT '1',
  `blocked_by` int(10) NOT NULL,
  PRIMARY KEY (`studentid`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentid`, `regno`, `user_id`, `course`, `school`, `faculty`, `course_year`, `score`, `quiz_score`, `mobilenumber`, `time registered`, `forum_block`, `blocked_by`) VALUES
(1, '113/00287', 34, 'INFORMATION TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 4, 1005, 7, '+254705222568', '2016-06-03 12:12:53', 1, 0),
(11, '113/00100', 32, 'COMPUTER TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 4, 110, 0, '+254705222587', '2016-06-12 13:12:25', 1, 0),
(13, '113/00101', 15, 'INFORMATION TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 3, 32, 0, '+254728621783', '2016-06-12 16:10:18', 1, 0),
(14, '115/00021', 12, 'COMPUTER TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 4, 20, 0, '+254738125748', '2016-06-18 19:48:04', 1, 0),
(21, '113/00103', 9, 'COMPUTER NETWORKS', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 4, 29, 0, '+254705222510', '2016-06-28 07:16:06', 1, 0),
(22, '112/00104', 27, 'COMPUTER NETWORKS', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 2, 20, 0, '+254710254879', '2016-06-28 08:07:00', 1, 0),
(23, '115/00214', 30, 'ARCHITECTURE', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 3, 23, 0, '+254705100210', '2016-07-13 20:57:12', 1, 0),
(25, '115/00278', 46, 'REAL ESTATE', 'ARCHTECTURE AND BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 3, 20, 0, '+254715987451', '2016-07-19 16:46:23', 1, 0),
(27, '113/12548', 28, 'QUANTITY SURVEYING', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 3, 20, 0, '+254798745123', '2016-07-19 16:58:18', 1, 0),
(28, '113/00193', 48, 'INFORMATION TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 2, 26, 3, '+254701446780', '2016-07-21 12:42:04', 1, 0),
(29, '113/00214', 49, 'INFORMATION TECHNOLOGY', 'COMPUTING AND INFORMATION TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 1, 20, 0, '+254729710368', '2016-07-21 12:53:00', 1, 0),
(30, 'f16/1234/2013', 52, 'CIVIL ENGINEERING', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 3, 20, 0, '+254712456378', '2016-07-24 08:31:26', 1, 0),
(31, '114/00258', 53, 'CONSTRUCTION MANAGEMENT', 'ARCHITECTURE AND THE BUILT ENVIRONMENT', 'ENGINEERING SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254705222510', '2016-08-10 15:52:59', 1, 0),
(32, '114/00257', 54, 'MECHANICAL ENGINEERING', 'MECHANICAL AND PROCESS ENGINEERING', 'ENGINEERING SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254712456378', '2016-08-10 15:56:42', 1, 0),
(33, '115/00219', 55, 'ACCOUNTANCY', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254701446780', '2016-08-10 15:59:57', 1, 0),
(34, '114/00251', 56, 'DESIGN', 'CREATIVE ARTS AND TECHNOLOGIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254705222510', '2016-08-10 16:04:42', 1, 0),
(35, '115/00220', 57, 'TOURISM & TRAVEL MANAGEMENT', 'HOSPITALITY AND TOURISM', 'SOCIAL SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254738125748', '2016-08-10 16:07:43', 1, 0),
(36, '114/00259', 58, 'BUSINESS INFORMATION TECHNOLOGY', 'BUSINESS AND MANAGEMENT STUDIES', 'SOCIAL SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254714789365', '2016-08-10 16:10:29', 1, 0),
(37, '115/00218', 59, 'MEDICAL LABORATORY TECHNOLOGY', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254705222587', '2016-08-10 16:13:13', 1, 0),
(38, '114/00252', 60, 'NUTRITION AND DIETETICS', 'HEALTH SCIENCES AND TECHNOLOGY', 'APPLIED SCIENCES AND TECHNOLOGY', 0, 5, 0, '+254798745123', '2016-08-10 16:16:05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE IF NOT EXISTS `subtopic` (
  `subtopic_id` int(11) NOT NULL AUTO_INCREMENT,
  `subtopic_name` varchar(50) NOT NULL,
  `subtopic_description` varchar(500) NOT NULL,
  `s_status` varchar(20) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`subtopic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`subtopic_id`, `subtopic_name`, `subtopic_description`, `s_status`, `topic_id`) VALUES
(2, 'php', 'web', 'tr', 10),
(3, 'connectivity', 'data table', 'ss', 11),
(4, 'html', 'web page design', 'ss', 13),
(6, 'Threading', 'Info about Thread & Runnable', 'tr', 7),
(7, 'file management', 'exception handling', 'tr', 8),
(8, 'i/o management', 'data string handler', 'tr', 8),
(11, 'Move', 'how to move file from one location to another', 'tr', 13),
(12, 'Threading', 'About Thread Life Cycle', 'true', 17),
(13, 'applet controls', 'discussion of the controls of applet', 'true', 18),
(14, 'SQL QUERIES', 'types of sql queries IN PHP', 'true', 19),
(15, 'Non Executing Query', 'Select Query', 'false', 19),
(16, '8085 processor', 'block diagram discription', 'tr', 21),
(17, 'network types', 'types of topologies', 'tr', 22),
(18, 'Application Related', 'Any querys Related Apps', 'tr', 23),
(20, 'Network Related', 'Network Related Querys', 'tr', 25),
(21, 'MPESA API', 'intergration into systems', 'true', 27),
(22, 'spring framework', 'introduction to the spring MVC', 'true', 28);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(50) NOT NULL,
  `topic_type` varchar(50) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `topic_type`) VALUES
(17, 'Operating System', 'Threading'),
(18, 'Applet', 'JAVA'),
(19, 'Php Database connectivity', 'PHP'),
(21, 'Microprocessor', 'Processor'),
(23, 'Applications', 'Os Applications'),
(24, 'Virus', 'Virus solution and types'),
(25, 'Networks', 'Networks Related Querys'),
(27, 'API', 'twitter and mpesa API'),
(28, 'JAVA', 'SPRING mvc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_acc_active` tinyint(1) DEFAULT NULL,
  `dob` varchar(10) NOT NULL,
  `e_mail` varchar(100) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `uimg` varchar(255) NOT NULL,
  `isuser` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `country`, `city`, `address`, `role`, `username`, `fullname`, `password`, `user_acc_active`, `dob`, `e_mail`, `gender`, `uimg`, `isuser`) VALUES
(5, 'kenya', 'NAIROBI', '', 'admin', 'admin', 'admin', 'admin', NULL, '12/1/1988', 'jhggf@jhg.com', '1', 'ups/admin.jpg', 1),
(8, '-', '-', '-', 'student', 'clinton', 'Clinton Lumosi', '123', NULL, '0000-00-00', 'abcd@gmail.com', '1', 'ups/hardik.jpg', 0),
(9, 'kenya', 'kisii', '', 'student', 'fabin', 'Christian Fabin Mathew', 'fabinlj', NULL, '0000-00-00', 'fabin.christian@gmail.com', '1', 'ups/124.jpg', 0),
(12, 'kenya', 'kisumu', '', 'student', 'Vikas ', 'Vikas Patel', 'vikas', NULL, '1990-04-03', 'vikas.patel@gmail.com', '1', 'ups/1.jpg', 1),
(15, 'India', 'Gujarat', 'porbandar', 'student', 'mahesh', 'mahesh narvani', 'm', NULL, '1990-04-27', 'mahesh.narvani@gmail.com', '1', 'ups/Pink Rose For You-504352.jpeg', 0),
(27, 'kenya', 'lodwar', '', 'student', 'Jasmin', 'Jasmin Vuguza', 'jasmin', NULL, '1986-11-25', 'jasmin.patel@gmail.com', '1', 'ups/7.jpg', 0),
(28, 'India', 'Gujarat', 'gdhjsbb', 'student', 'rest', 'rushabh joshi', 'resti', NULL, '0000-00-00', 'rushabh.joshi@gmail.com', '1', 'ups/', 0),
(30, 'j', 'j', 'j', 'student', 'Mehul', 'Mehul Varia', '123', NULL, '1986-11-25', 'ms.mainframe@gmail.com', '1', 'ups/1.jpg', 0),
(31, 'kenya', 'nyeri', '', 'teacher', 'satish', 'Solomon Mwangi', 'satish', NULL, '0000-00-00', 'satish.babariya@gmail.com', '1', 'ups/Red Roses Love-262228.jpeg', 0),
(32, 'nairobi', 'juja', 'juja, opposite jkuat campus', 'student', 'abc', 'anthony buss cann', 'busscann', NULL, '1986-11-25', 'ab@gmail.com', '1', 'ups/page5_img1.jpg', 0),
(33, 'kenya', 'nairobi', '32 50308', 'admin', 'harry', 'HARRY MASIDZA', 'harry1', NULL, '0000-00-00', 'harry@gmail.com', '1', 'ups/IMG_20160412_222229.jpg', 0),
(34, 'KENYA', 'NAIROBI', 'south c', 'student', 'gabby', 'gabby kisia', 'gabbykisia', NULL, '0000-00-00', 'gabby@gmail.com', '1', 'ups/20160424185010.jpg', 0),
(35, 'KENYA', 'NAIROBI', '54216', 'teacher', 'joel', 'joel igadwa', 'joeligadwa', NULL, '15/9/1960', 'joel@gmail.com', '1', 'ups/page4_img1.jpg', 0),
(36, 'kenya', 'nairobi', '', 'mentor', 'billyg', 'BILL GRAHAM', 'billgraham1', NULL, '0000-00-00', 'bilgraham@roctech.com', '1', 'files/page4_img3.jpg', 0),
(37, 'KENYA', 'NAIROBI', '', 'mentor', 'wako.anne', 'ANNE WAKO', 'annewako1', NULL, '0000-00-00', 'annewako@safcom.com', '2', 'files/page3_img3.jpg', 0),
(38, 'KENYA', 'NAIROBI', 'south b', 'teacher', 'candela', 'candela aoko', 'candela1', NULL, '0000-00-00', 'candela@gmail.com', '2', 'ups/page3_img2.jpg', 0),
(39, '', '', '', 'mentor', '', '', '', NULL, '0000-00-00', '', '1', 'files/', 0),
(40, 'KENYA', 'NAIROBI', 'NAIROBI', 'mentor', 'yui', 'JACKSON OGOLLA', 'YUILONG1', NULL, '10/1/1954', 'JAC@GMAIL.COM', '1', 'files/page5_img1.jpg', 0),
(41, 'kenya, usa', 'nairobi, los angeles', '', 'mentor', 'igadwa', 'IGADWA MASIDZA', 'igadwamasidza', NULL, '', 'masidza@carbo.com', '1', 'files/2page-img2.jpg', 0),
(42, 'jhgjhgjhgjg', 'hjgjhgjhg', 'kkjgjh', '', 'gjfjf', 'jfjfjhfhg', 'fhgfhgfhg', NULL, '', 'fhgfhgf', '', '', 0),
(44, 'kjhjhj', 'hgjhgjg', 'hjgjg', '', 'kjgh', 'gjhgjhg', 'jhgjhgjh', NULL, '', 'gjhg', '', '', 0),
(45, '', '', '', '', 'gfhf', 'gfhfhf', '', NULL, '', 'hgfhgf', '', '', 0),
(46, 'kenya', 'kisumu', 'kisumu', 'student', 'gajey', 'Sharr gaj', 'gajey1', NULL, '', 'gajey@gmail.com', '', '', 0),
(48, 'KENYA', 'NAIROBI', '52428', 'student', 'alfred', 'alfred moseti', '123', NULL, '15/9/1994', 'mosetialfred@gmail.com', '1', 'ups/2page-img2.jpg', 0),
(49, 'KENYA', 'NAIROBI', '52553', 'student', 'jak', 'David Mwinami', '123', NULL, '2/9/1992', 'dmwinami@gmail.com', '1', 'ups/question.png', 0),
(50, 'hgjhghg', 'jgjgjhgjhg', 'gjgjhg', 'student', 'jgjhgjhgg', 'jhgjhgjhgg', 'jhghgjgg', NULL, '', 'jhggf@jhg.com', '', '', 0),
(51, 'jhg', 'jhg', 'jgj', 'student', 'kui', 'kui kui', 'kuikui', NULL, '', 'abc@gmail.com', '', '', 0),
(52, 'kenya', 'nairobi', 'p.o box 43-00200', 'student', 'daisy a', 'daisy aliviza', 'idaq', NULL, '23/11/1993', 'qida@hotmail.com', '2', 'ups/topleft.jpg', 0),
(53, 'KENYA', 'NAIROBI', '54123', 'student', 'Anthony', 'anthony mutinge', 'mutinge', NULL, '15/06/1992', 'mut@gmail.com', '1', 'ups/newsletter-bg.gif', 0),
(54, 'KENYA', 'NAIROBI', '21548 - 00100', 'student', 'anthony m', 'anthony musilwa', 'musilwa', NULL, '10/1/1991', 'mus@gmail.com', '1', 'ups/newsletter-bg.gif', 0),
(55, 'KENYA', 'NAIROBI', '14587 - 00200', 'student', 'Sharon', 'sharon adhiambo', 'sharon', NULL, '12/1/1990', 'shar@gmail.com', '2', 'ups/icon6.png', 0),
(56, 'KENYA', 'NAIROBI', '54654', 'student', 'marcel', 'marcel omondi', 'omondi', NULL, '10/1/1991', 'mar@gmail.com', '1', 'ups/newsletter-bg.gif', 0),
(57, 'UGANDA', 'KAMPALA', '64654', 'student', 'david', 'david nduati', 'nduati', NULL, '14/02/1992', 'dav@gmail.com', '1', 'ups/newsletter-bg.gif', 0),
(58, 'RWANDA', 'KIGALI', '32456', 'student', 'eve', 'everleen nimmo', 'nimmo', NULL, '14/02/1992', 'nim@gmail.com', '2', 'ups/newsletter-bg.gif', 0),
(59, 'tanzania', 'dodoma', '46446\r\n075412555', 'student', 'joyce', 'joyce juma', 'juma', NULL, '10/1/1991', 'juma@gmail.com', '2', 'ups/icon5.png', 0),
(60, 'KENYA', 'NYERI', '565445', 'student', 'faith', 'faith kagia', 'kagia', NULL, '14/02/1992', 'fait@gmail.com', '2', 'ups/newsletter-bg.gif', 0),
(61, 'gjhg', 'hgjhgjhg', 'hgjghg', 'student', 'gabb', 'jhghhGJHGJH', 'hgjhgjh', NULL, '', 'hgjghg', '', '', 0);
