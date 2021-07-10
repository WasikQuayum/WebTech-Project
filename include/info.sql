-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2020 at 07:14 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info`
--

-- --------------------------------------------------------

--
-- Table structure for table `cs_answer`
--

CREATE TABLE `cs_answer` (
  `cs_ansid` int(20) NOT NULL,
  `cs_ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs_answer`
--

INSERT INTO `cs_answer` (`cs_ansid`, `cs_ans`) VALUES
(1, 'False'),
(2, 'Seymour Cray'),
(3, 'Steave Russell'),
(4, 'Seymour Cray'),
(5, '1988'),
(6, 'Vint Cerf'),
(7, 'FORTRAN'),
(8, 'WordStar'),
(9, 'SahasraT'),
(10, '1991'),
(11, 'James Gosling'),
(12, 'RAM'),
(13, '1024'),
(14, 'Christopher Latham Sholes'),
(15, 'iOS'),
(16, 'Linux'),
(17, 'Archie'),
(18, '128 bit'),
(19, 'Nexus'),
(20, 'java'),
(21, 'Creeper Virus'),
(22, 'Prolog'),
(23, 'Security'),
(24, '50 GB'),
(25, 'C'),
(26, 'COBOL'),
(27, '7'),
(28, '128 Byte'),
(29, 'Apple'),
(30, 'Washington'),
(31, 'Image file'),
(32, 'Linux'),
(33, 'Facebook'),
(34, 'IBM'),
(35, 'Malware'),
(36, 'HTML'),
(37, 'POP3'),
(38, 'SMTP'),
(39, 'Assembler'),
(40, 'PARAM Yuva II'),
(41, 'Vijay Bhatkar'),
(42, 'binary'),
(43, '.xlsx'),
(44, 'UDP'),
(45, 'Interface'),
(46, 'LOTUS'),
(47, 'Connectivity'),
(48, 'Graphical User Interface'),
(49, '9'),
(50, 'con');

-- --------------------------------------------------------

--
-- Table structure for table `cs_question`
--

CREATE TABLE `cs_question` (
  `cs_ques_id` int(20) NOT NULL,
  `cs_ques` varchar(3000) NOT NULL,
  `cs_opt1` varchar(500) NOT NULL,
  `cs_opt2` varchar(500) NOT NULL,
  `cs_opt3` varchar(500) NOT NULL,
  `cs_opt4` varchar(500) NOT NULL,
  `cs_ans` varchar(500) NOT NULL,
  `c_ansid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cs_question`
--

INSERT INTO `cs_question` (`cs_ques_id`, `cs_ques`, `cs_opt1`, `cs_opt2`, `cs_opt3`, `cs_opt4`, `cs_ans`, `c_ansid`) VALUES
(1, 'O(N)(linear time) is better than O(1)', 'True', 'False', 'None', 'opt1', 'False', 1),
(2, 'Who is known as the father of supercomputing', 'David J. Brown', 'Gene Amdahl', 'Adam Dunkels', 'Seymour Cray', 'Seymour Cray', 2),
(3, 'Who programmed the first computer game \'Spacewar!\' in 1962', 'Steave Russell', 'Konard Zuse', 'Alan Emtage', 'Tim Berners-Lee', 'Steave Russell', 3),
(4, 'Who created the C Programming Language?', 'David J. Brown', 'Gene Amdahl', 'Adam Dunkels', 'Seymour Cray', 'Seymour Cray', 4),
(5, 'When NASSCOM (National Association of Software and Services Companies) was established ', '1988', '1997', '1993', '1882', '1988', 5),
(6, 'Who is known as the father of internet', 'Alan Perlis', 'Jean E. Sammet', 'Vint Cerf', 'Steve Lawrence', 'Vint Cerf', 6),
(7, 'Which one is the first high level programming language?', 'C', 'COBOL', 'FORTRAN', 'C++', 'FORTRAN', 7),
(8, 'Which one is the first word processor application?', 'MS Word', 'Apple i Work', 'Sun StarOffice', 'WordStar', 'WordStar', 8),
(9, 'Which one is the current fastest Supercomputer in India?', 'Aaditya', 'SAGA-220', 'SahasraT', 'HP Apollo 6000', 'SahasraT', 9),
(10, 'India\'s first Super Computer PARAM 8000 was installed in ', '1988', '1991', '1995', '1981', '1991', 10),
(11, 'Who developed Java Programming Language?', 'James Gosling', 'Douglas Engelbart', 'Edmund M. Clarke', 'James D. Foley', 'James Gosling', 11),
(12, 'Which one is volatile memory in a computer system?', 'HardDisk', 'RAM', 'ROM', 'Optical Drive', 'RAM', 12),
(13, 'One Terabyte (1 TB) is equal to', '1028 GB', '1012 GB', '1000 GB', '1024 GB', '1024', 13),
(14, 'Who first developed QWERTY keyboard used in computers and phones', 'Raphael Finkel', 'Wim Ebbinkhuijsen', 'Shafi Goldwasser', 'Christopher Latham Sholes', 'Christopher Latham Sholes', 14),
(15, 'Which operating system is developed and used by Apple Inc', 'Windows', 'Android', 'iOS', 'UNIX', 'iOS', 15),
(16, 'Linus Torvalds develop which operating system', 'Windows', 'Mac OS', 'UNIX', ' Linux', ' Linux', 16),
(17, 'Which one is the first search engine in internet', 'Google', 'Archie', 'Altavista', ' WAIS', 'Archie', 17),
(18, 'Number of bit used by the IPv6 address', '32 bit', '64 bit', '128 bit', '256 bit', '128 bit', 18),
(19, 'Which one is the first web browser invented in 1990', 'Internet Explorer', 'Mosaic', 'Mozilla', 'Nexus', 'Nexus', 19),
(20, 'Which of the following programming language is used to create programs like applets?', 'COBOL', 'C Language', 'Java', 'BASIC', 'Java', 20),
(21, 'First computer virus is known as', 'Rabbit', 'Creeper Virus', 'Elk Cloner', 'SCA Virus', 'Creeper Virus', 21),
(22, 'Which one programming language is exclusively used for artificial intelligence', 'C', 'Java', 'J2EE', 'Prolog', 'Prolog', 22),
(23, 'Firewall in computer is used for', 'Security', 'Data Transmission', 'Authentication', 'Monitoring', 'Security', 23),
(24, 'A dual layer Blue-ray Disc can store data upto', '20GB', '35 GB', '12 GB', '50 GB', '50 GB', 24),
(25, 'Which of the following is not an operating system', 'DOS', 'Mac', 'C', 'Linux', 'C', 25),
(26, 'Which of the following is not a database management software', 'MySQL', 'Oracle', 'Sybase', 'COBOL', 'COBOL', 26),
(27, 'Number of layers in the OSI (Open Systems Interconnection) Model', '9', '3', '7', '11', '7', 27),
(28, '1024 bit is equal to how many byte', '1 Byte', '128 Byte', '32 Byte', '64 Byte', '128 Byte', 28),
(29, 'Mac Operating System is developed by which company', 'IBM', 'Apple', 'Microsoft', 'Samsung', 'Apple', 29),
(30, 'Where is the headquter of Microsoft office located', 'Texas', 'NewYork', 'California', 'Washington', 'Washington', 30),
(31, '.gif is an extension of', 'Image file', 'Video file', 'Audio file', 'Word file', 'Image file', 31),
(32, 'Which one is the first fully supported 64-bit operating system', 'Windows Vista', 'Mac', 'Linux', 'Windows XP', 'Linux', 32),
(33, 'Which of the following is not a web browser', 'MOSAIC', 'WWW', 'Facebook', ' Netscape navigator', 'Facebook', 33),
(34, 'Computer Hard Disk was first introduced in 1956 by', 'Dell', 'Apple', 'Microsoft', 'IBM', 'IBM', 34),
(35, 'In computer world, Trojan refer to', 'Virus', 'Malware', 'Worm', 'Spyware', 'Malware', 35),
(36, 'Which one of the followings is a programming language', 'HTTP', 'HTML', 'HPML', 'FTP', 'HTML', 36),
(37, 'Which protocol is used to received e-mail', 'SMTP', 'POP3', 'HTTP', 'FTP', 'POP3', 37),
(38, 'Which protocol is used to send e-mail', 'HTTP', 'POP3', 'SMTP', 'SSH', 'SMTP', 38),
(39, 'Which computer program converts assembly language to machine language', 'Interpreter', 'Compiler', 'Assembler', 'Comparator', 'Assembler', 39),
(40, 'Which one is the latest one from PARAM SuperSries computers', 'PARAM Yuva II', 'PARAM 10000', 'PARAM Padma', 'PARAMnet', 'PARAM Yuva II', 40),
(41, 'Who is also know as the father of Indian Supercomputing', 'Ragunath Mashelkar', 'Vijay Bhatkar', 'Jayant Narlikar', 'Nandan Nilekani', 'Vijay Bhatkar', 41),
(42, 'A computer use which type of number system to calculate and to store data', 'decimal', 'octal', 'binary', 'hexadecimal', 'binary', 42),
(43, 'What is the extension type of the excel 2007 files', '.xls', '.xlsx', '.xsl', 'None of the above', '.xlsx', 43),
(44, 'Which one is an example of connectionless protocols', 'TCP', 'IPX/SPX', 'Frame Relay', 'UDP', 'UDP', 44),
(45, 'A common boundary between two computer systems is known as', 'Intradiction', 'Surface', 'Interface', 'None of the above', 'Interface', 45),
(46, 'Which one of the following is not a computer language', 'BASIC', 'LOTUS', 'C++', 'JAVA', 'LOTUS', 46),
(47, 'Network Interface Card (NIC) is generally used for', 'Connectivity', 'Programming', 'Printing', 'None of the above', 'Connectivity', 47),
(48, 'The GUI means?', 'Graphical User Interface', 'General User Interaction', 'Guided User Interface', 'Genernal User Interface', 'Graphical User Interface', 48),
(49, 'The total number of pins in a serial port', '5', '7', '9', '15', '9', 49),
(50, 'A folder in windows computer can\'t be made with the name', 'can', 'con', 'mak', 'make', 'con', 50);

-- --------------------------------------------------------

--
-- Table structure for table `gk_answer`
--

CREATE TABLE `gk_answer` (
  `gk_ansid` int(20) NOT NULL,
  `gk_ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gk_answer`
--

INSERT INTO `gk_answer` (`gk_ansid`, `gk_ans`) VALUES
(1, 'Ramesh Pokhriyal'),
(2, ''),
(3, 'Modernization of Public Distribution System'),
(4, 'Chlorine'),
(5, '1977-80'),
(6, 'Yangtze Kiang River'),
(7, 'Robert Edwards'),
(8, 'Indonesia'),
(9, 'Japan'),
(10, 'Hockey'),
(11, 'Lacrosse/Ice hockey'),
(12, 'Hockey'),
(13, 'India'),
(14, 'Vatican City'),
(15, 'Dante'),
(16, 'Natwar Singh'),
(17, '33%'),
(18, '3rd March'),
(19, 'Nitrogen'),
(20, 'China'),
(21, 'World Peace Day'),
(22, '3 March'),
(23, 'All the above'),
(24, 'ICAR'),
(25, '1956'),
(26, '2013'),
(27, 'Esala Weerakoon'),
(28, 'Richard Kozul-Wright'),
(29, 'Birmingham'),
(30, 'Rupaka'),
(31, 'O-'),
(32, 'Fats'),
(33, 'Vehicle-kilometer'),
(34, 'Antibiotics'),
(35, 'Rome'),
(36, 'Electrum'),
(37, 'Mitochondria'),
(38, 'World Wildlife Fund'),
(39, 'Jaipur'),
(40, 'Siderite'),
(41, 'Proteins'),
(42, 'Six months'),
(43, 'Soil protection'),
(44, 'Square planar'),
(45, 'Spain'),
(46, 'World Wide Web'),
(47, 'Green vegetables'),
(48, 'Bombay stock exchange'),
(49, 'Deciduous trees'),
(50, 'Caruna');

-- --------------------------------------------------------

--
-- Table structure for table `gk_question`
--

CREATE TABLE `gk_question` (
  `gk_ques_id` int(20) NOT NULL,
  `gk_ques` varchar(500) NOT NULL,
  `gk_opt1` varchar(500) NOT NULL,
  `gk_opt2` varchar(500) NOT NULL,
  `gk_opt3` varchar(500) NOT NULL,
  `gk_opt4` varchar(500) NOT NULL,
  `gk_ans` varchar(500) NOT NULL,
  `gk_ansid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gk_question`
--

INSERT INTO `gk_question` (`gk_ques_id`, `gk_ques`, `gk_opt1`, `gk_opt2`, `gk_opt3`, `gk_opt4`, `gk_ans`, `gk_ansid`) VALUES
(1, 'Which Union Minister launched MHRD AICTE COVID-19 Student Helpline Portal?', 'Ramesh Pokhriyal', 'B.Amit Shah', 'Rajnath Singh', 'Nitin Gadkari', 'Ramesh Pokhriyal', 1),
(2, 'Koyoto Protocol is related to -', 'Air polution', 'Green House gases', 'Climate change', 'Water polution', '', 2),
(3, 'National Food Grain Movement Plan is primarily related to which among the following.', 'Development of new seed varieties of food grains', 'Opening food grain seeds villages', 'Modernization of Public Distribution System', 'All the', 'Modernization of Public Distribution System', 3),
(4, 'Which of the following is used to treat Municipal water in India?', 'Chlorine', 'Potassium permanganate', 'Sodium Chloride', 'Sodium Carbonate', 'Chlorine', 4),
(5, 'During which of the following period the Bharat Ratna awards were discontinued?', '1958-61 ', '1963-66 ', '1977-80 ', '1997-2005', '1977-80 ', 5),
(6, 'Which is the longest river of Asia?', 'Yellow River', 'Yangtze Kiang River', 'Mekong River ', 'Lena River', 'Yangtze Kiang River', 6),
(7, 'Who among the following devised the Technique IVF(In vitro Fertilization)?', 'Robert Edwards', 'Dr. Martin Cooper ', 'Edward Jenner ', 'Sir Frank Whittle', 'Robert Edwards', 7),
(8, 'Kalimantan is the part of which among the following countries?', 'Thailand ', 'Malaysia', 'Indonesia', 'Cambodia', 'Indonesia', 8),
(9, 'Which of the following countries calls itself Nippon?', 'Switzerland', 'Sri Lanka ', 'China', 'Japan', 'Japan', 9),
(10, 'Sultan Azlan Shah Cup is related to which among the following Sports?', 'Badminton', 'Hockey', 'Table Tennis', 'Golf', 'Hockey', 10),
(11, 'Which is the national sport of Canada?', 'Lacrosse/Ice hockey', 'Cricket', 'Field hockey', 'Volleyball', 'Lacrosse/Ice hockey', 11),
(12, 'The National Game of India is', 'Cricket', ' Football', 'Tennis', 'Hockey', 'Hockey', 12),
(13, '2010 Commonwealth Games held in?', 'Canada', 'India', 'Britain', 'Malaysia', 'India', 13),
(14, 'The world smallest country is', 'Canada', 'Russia', 'Maldives', 'Vatican City', 'Vatican City', 14),
(15, 'Who is the author of “Divine Comedy”?', 'Goethe', 'Milton', 'Dante', 'Shakespeare', 'Dante', 15),
(16, 'Who is the author of the book \"One life is not Enough\"?', 'Prabir De', 'Natwar Singh', 'Leema Dhar', 'Salman Rushdie', 'Natwar Singh', 16),
(17, 'What percentage of land area should remain covered by forest to maintain Ecological balance?', '10%', '5%', '33%', 'None of these', '33%', 17),
(18, 'World Wildlife Day is celebrated at:', '25th January', '2nd February', '27th February', '3rd March', '3rd March', 18),
(19, 'The concentration of which gas is highest in our environment?', 'Oxygen', 'Hydrogen', 'Nitrogen', 'Carbon dioxide', 'Nitrogen', 19),
(20, 'In which country Novel Corona virus has been found?', 'Russia', 'Thailand', 'China', 'Indonesia', 'China', 20),
(21, 'Which day is celebrated on January 1 every year?', 'International Literacy Day', 'World Peace Day', 'World Egg Day', 'International Volunteer Day for Economic and Social Development', 'World Peace Day', 21),
(22, 'When is the World Hearing Day observed?', '1 March', '2 March', '3 March', '5 March', '3 March', 22),
(23, 'Multilingual Incredible India website was launched in _______.', 'Chinese', 'Arabic', 'Spanish', 'All the above', 'All the above', 23),
(24, '________ publications were released in the Pusa Krishi Vigyan Mela 2020.', 'CSIR', 'IIT-Madras', 'APEDA', 'ICAR', 'ICAR', 24),
(25, 'National Handicapped Finance Development Corporation (NHFDC) was established under Section 25 of the Companies Act, ________.', '1956', '1964', '1971', '1989', '1956', 25),
(26, 'When did UNGA decided to designate 3 March as World Wildlife Day?', '2010', '2013', '2016', '2018', '2013', 26),
(27, 'Who is the Secretary-General of SAARC?', 'Esala Weerakoon', 'Amjad Hussain B. Sial', 'Arjun Bahadur Thapa', 'Pabitra Regina', 'Esala Weerakoon', 27),
(28, 'Who is the Director, Division on Globalization and Development Strategies at the United Nations Conference on Trade and Development (UNCTAD)?', 'Robert Rowthorn', 'Rob Vos', 'Frank Ackerman', 'Richard Kozul-Wright', 'Richard Kozul-Wright', 28),
(29, 'Where was the All England Open 2020 held?', 'London', 'Bristol', 'Birmingham', 'Glasgow', 'Birmingham', 29),
(30, 'What was the name of the silver coins issued by Guptas?', 'Karshapana', 'Rupaka', 'Dinara', 'Pana', 'Rupaka', 30),
(31, 'Which blood group is universal donor?', 'AB+', 'AB-', 'O+', 'O-', 'O-', 31),
(32, '1 gm of which of the following will produce maximum ATPs?', 'Protein', 'Carbohydrate', 'Fats ', 'Minerals', 'Fats ', 32),
(33, 'Which among the following is a measure of traffic flow?', 'Passenger hour kilometer      ', 'Passenger Kilometer', 'Vehicle-kilometer ', 'Passenger-mile', 'Vehicle-kilometer', 33),
(34, 'Actinomycetes are good source of which of the following?', 'Vitamins', 'Antihistamines', 'Antibiotics', 'Antibodies', 'Antibiotics', 34),
(35, 'The Eternal City” is a nick name of ________?', 'Rome', 'Athens', 'Jerusalem', 'New York', 'Rome', 35),
(36, 'Which of the following is a naturally occurring alloy of Gold and Silver?', 'Bronze', 'Electrum', 'Duralumin', 'Nordic gold', 'Electrum', 36),
(37, 'Which among the following is also called as ‘power house of the cell’?', 'Cell wall', 'Mitochondria', 'Golgi bodies', 'Plastids', 'Mitochondria', 37),
(38, 'Earth Hour is organized by ___?', 'UNESCO', 'Earth Hour Foundation', 'World Wildlife Fund', 'United Nations Environment Programme', 'World Wildlife Fund', 38),
(39, 'Where is the National Institute of Agricultural Marketing located?', 'Jaipur', 'New Delhi', 'Nagpur', 'Hyderabad', 'Jaipur', 39),
(40, 'Which of the following is an ore of iron?', 'Siderite', 'Epsom', 'Galena', 'Dolomite', 'Siderite', 40),
(41, 'Which among the following is more required by the Growing children?', 'Proteins', 'Carbohydrates', 'Vitamins', 'All of these', 'Proteins', 41),
(42, 'What is the maximum period during which Parliament may not meet?', 'Six months', 'One year', 'Two years', 'Three years', 'Six months', 42),
(43, 'How does forests help soil?', 'Soil erosion', 'Soil protection', 'Depleting the soil of its moisture', 'All of the above', 'Soil protection', 43),
(44, 'What is the shape of XeF4 molecule?', 'T-shaped', 'Bent', 'See-saw', 'Square planar', 'Square planar', 44),
(45, 'Bull fighting is the national game of which of the following countries?', 'Portugal', 'Spain', 'Hungary', 'Poland', 'Spain', 45),
(46, 'World Wide Web uses an addressing scheme known as URL to indicate the location of files on the web?', 'World Wide Web', 'JavaScript', 'String', 'SQL', 'World Wide Web', 46),
(47, 'Which of the following is the rich source of iron?', 'Eggs', 'Green vegetables', 'Pulses', 'Milk', 'Green vegetables', 47),
(48, 'Which of the following is the first stock exchange in Asia?', 'Amsterdam stock exchange', 'Tokyo stock exchange ', 'New Delhi stock exchange', 'Bombay stock exchange', 'Bombay stock exchange', 48),
(49, 'Which of the following trees shed their leaves once in a year?', 'Deciduous trees ', 'Coniferous trees', 'Both deciduous and Coniferous trees ', 'Evergreen trees', 'Deciduous trees ', 49),
(50, 'What is the name of the initiative to fight Coronavirus which was formed by IAS and IPS officers?', 'COVID-19', 'Corona Virus ', 'Caruna', 'virus', 'Caruna', 50);

-- --------------------------------------------------------

--
-- Table structure for table `history_answer`
--

CREATE TABLE `history_answer` (
  `hstry_ansid` int(20) NOT NULL,
  `hstry_ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_answer`
--

INSERT INTO `history_answer` (`hstry_ansid`, `hstry_ans`) VALUES
(1, 'Taslima Nasreen'),
(2, '1971'),
(3, ''),
(4, 'East Pakistan\r\n'),
(5, ''),
(6, 'Awami League'),
(7, 'J. S. Aurora'),
(8, 'Sheikh Mujibur Rahman'),
(9, 'Siraj-ud-Daulah'),
(10, 'Brahmaputra'),
(11, 'Bhutan'),
(12, 'Bangladesh broke away from Pakistan'),
(13, 'Babur and Lodi'),
(14, '1487'),
(15, '1498'),
(16, '1775'),
(17, 'Mesopotamian Civilization'),
(18, 'Hippocrates'),
(19, 'Octavian'),
(20, 'Virgil'),
(21, 'Chalukyas'),
(22, 'Rashtrakutas'),
(23, 'Akbar and Hemu'),
(24, '1764'),
(25, 'Cornwallis'),
(26, '1789'),
(27, 'Pali'),
(28, '1099'),
(29, '776 BC'),
(30, '1783'),
(31, '1939'),
(32, '1933'),
(33, 'Mein Kompf'),
(34, 'Romulus August ulus'),
(35, '1707'),
(36, '336 BC'),
(37, '1815'),
(38, '1776'),
(39, 'Leonardo da Vinci'),
(40, 'Louis XVI'),
(41, 'England and French'),
(42, 'Tudor'),
(43, '1773'),
(44, '1789'),
(45, '1870'),
(46, '1913'),
(47, 'Orissa'),
(48, 'Normans'),
(49, 'Fort William'),
(50, 'Warren Hastings');

-- --------------------------------------------------------

--
-- Table structure for table `history_ques`
--

CREATE TABLE `history_ques` (
  `hsty_ques_id` int(20) NOT NULL,
  `hstry_ques` varchar(500) NOT NULL,
  `hstry_opt1` varchar(500) NOT NULL,
  `hstry_opt2` varchar(500) NOT NULL,
  `hstry_opt3` varchar(500) NOT NULL,
  `hstry_opt4` varchar(500) NOT NULL,
  `hstry_ans` varchar(500) NOT NULL,
  `hstry_ansid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_ques`
--

INSERT INTO `history_ques` (`hsty_ques_id`, `hstry_ques`, `hstry_opt1`, `hstry_opt2`, `hstry_opt3`, `hstry_opt4`, `hstry_ans`, `hstry_ansid`) VALUES
(1, 'Which writer came to India after life became difficult for her in Bangladesh after her novel Lajja was published?', 'Anita Desai\r\n', 'Kiran Desai\r\n\r\n', 'Jhumpa Lahiri\r\n\r\n', 'Taslima Nasreen\r\n', 'Taslima Nasreen', 1),
(2, 'When did Bangladesh become an independent country?', '1965', '1971', '1975', '1981', '1971', 2),
(3, 'Who was the first Saka king in India?', 'Moga', 'Rudradaman', 'Azes', 'Ghatotkacha', 'Moga', 3),
(4, 'How was Bangladesh known when it was part of Pakistan?', 'Baluchistan', 'Sindh', 'East Pakistan', 'Baltistan', 'East Pakistan', 4),
(5, 'Which district of Bangladesh was part of Assam?', 'Chittagong', 'Dinajpur', 'Khulna', 'Sylhet', 'Sylhet', 5),
(6, 'Which party won the elections in Pakistan in 1970 and was not allowed to form government?Which party won the elections in Pakistan in 1970 and was not allowed to form government?', 'Awami League', 'Muslim League', 'Justice Party', 'Pakistan People’s Party', 'Awami League', 6),
(7, 'To which Indian Lieutenant General did Pakistani Lieutenant General A. A. K. Niazi surrender?', 'J. F. R. Jacob', 'J. S. Aurora', 'Shankar Roychowdhury', 'S. F. Rodrigues', 'J. S. Aurora', 7),
(8, 'Who was assassinated on 15 August 1975?', 'Zia-ur-Rahman', 'Sheikh Mujibur Rahman', 'Tikka Khan', 'Zia-ul-Haq', 'Sheikh Mujibur Rahman', 8),
(9, 'Who was defeated in the battle of Plassey?', 'Shah Alam II', 'Siraj-ud-Daulah', 'Aurangzeb', 'Mir Qasim', 'Siraj-ud-Daulah', 9),
(10, 'Which river of Bangladesh originates in Tibet?', 'Brahmaputra', 'Tista', 'Padma', 'Surma', 'Brahmaputra', 10),
(11, 'Which is the second country to recognize Bangladesh?', 'Nepal', 'Bhutan', ' China', 'Pakistan', 'Bhutan', 11),
(12, 'What was the major event of 1971?', 'Nawaz Sharif became Prime Minister', 'Bangladesh broke away from Pakistan', 'Tashkent Agreement', 'Pakistan broke away from Bangladesh', 'Bangladesh broke away from Pakistan', 12),
(13, 'First battle of Panipat was fought between?', 'Babur and Lodi', 'Akbar and Hemu', 'Mughal and British', 'Akbar and Lodi', 'Babur and Lodi', 13),
(14, 'In which year Bartholomew Diaz reached Cape of Good Hope?', '1480', '1487', '1495', '1500', '1487', 14),
(15, 'Vasco da Gama reached in India in the year?', '1495', '1496', '1497', '1498', '1498', 15),
(16, 'In which year American Revolution started?', '1774', '1775', '1776', '1777', '1775', 16),
(17, 'Which is considered as the oldest civilization of the world?', 'Mesopotamian Civilization', 'Egyptian Civilization', 'Harappan Civilization', 'Chinese Civilization', 'Mesopotamian Civilization', 17),
(18, 'Who is known as the father of Modern Medicine?', 'Euclid', 'Pythagoras', 'Hippocrates', 'Eratosthenes', 'Hippocrates', 18),
(19, 'Which was not a Roman Philosopher?', 'Cicero', 'Seneca', 'Lucretius', 'Octavian', 'Octavian', 19),
(20, 'Who was among the famous Roman poets?', 'Tacitus', 'Plinky', 'Virgil', 'Marcus', 'Virgil', 20),
(21, 'Arabs were defeated in 738 A.D. by….', 'Pratiharas ', 'Rashtrakutas ', 'Palas ', 'Chalukyas ', 'Chalukyas ', 21),
(22, 'Which rulers built the Ellora temples?', 'Chalukyas', 'Sunga', 'Rashtrakutas', 'Pallavas', 'Rashtrakutas', 22),
(23, 'Second battle of Panipat was fought between?', 'Babur and Lodi', 'Akbar and Hemu', 'Mughal and British', 'Akbar and Lodi', 'Akbar and Hemu', 23),
(24, 'Battle of Buxar was fought in?', '1762', '1764', '1768', '1772', '1764', 24),
(25, 'The treaty of Srirangapatna was signed between Tipu Sultan and', 'Robert Clive', 'Cornwallis', 'Warren Hastings', 'Dalhousie', 'Cornwallis', 25),
(26, 'The French Revolution took place in the year', '1786', '1787', '1788', '1789', '1789', 26),
(27, 'In which language were the Buddhist literary works generally written?', 'Sanskrit', 'Tamil', 'Pali', 'Prakrit', 'Pali', 27),
(28, 'First war of Crusade was ended in the year', '1099', '1095', '1123', '1323', '1099', 28),
(29, 'When the first Ancient Geek Olympic Game was begun', '776 BC', '552 BC', '800 BC', '235 BC', '776 BC', 29),
(30, 'In which year American Independence was acknowledged by England?', '1782', '1783', '1784', '1785', '1783', 30),
(31, 'When did World War 2 start?', '1937', '1938', '1939', '1940', '1939', 31),
(32, 'In which year Hitler became the Chancellor of Germany?', '1932', '1933', '1944', '1945', '1933', 32),
(33, 'What is the name of the autobiography of Adolf Hitler?', 'First Attack', 'Mein Kompf', 'My Spirit', 'Ray of Hope', 'Mein Kompf', 33),
(34, 'Who was the last Emperor of Rome?', 'Nero', 'Cesare', 'Romulus August ulus', 'Julius', 'Romulus August ulus', 34),
(35, 'The Parliament of Great Britain was formed in the year?', '1705', '1706', '1707', '1708', '1707', 35),
(36, 'In which year, Alexander the Great become the king of Macedonia', '336 BC\r\n', '323 BC\r\n\r\n', '350 BC\r\n \r\n', '200 BC \r\n', '336 BC', 36),
(37, 'The Battle of Waterloo was fought in the year', '1800', '1805\r\n\r\n', '1807\r\n\r\n', '1815 \r\n', '1815 ', 37),
(38, 'In which year America got independence', '1760\r\n\r\n', '1776\r\n\r\n', '1780\r\n\r\n', '1782\r\n', '1776\r\n', 38),
(39, 'Who is known as the Artist of the world-famous painting \'Mona Lisa\'', 'Filippo Brunelleschi\r\n\r\n', 'Michelangelo\r\n\r\n', 'Vincent van Gogh\r\n\r\n', 'Leonardo da Vinci\r\n', 'Leonardo da Vinci', 39),
(40, 'Who was the king during the French revolution', 'Napoleon\r\n\r\n', 'Louis XV\r\n', 'Louis XVI\r\n\r\n', 'Charles IX\r\n', 'Louis XVI', 40),
(41, 'The Hundred Years\' War (from 1337 to 1453) was fought between', 'England and French\r\n\r\n', 'Germany and Russia\r\n\r\n', 'America and Argentina\r\n\r\n', 'England and Germany\r\n', 'England and French', 41),
(42, 'Queen Elizabeth I of England belongs to which dynasty', 'Stuart\r\n\r\n', 'York\r\n', 'Tudor\r\n\r\n', 'Normandy\r\n', 'Tudor\r\n', 42),
(43, '\"Boston Tea Party\" incident happened in?', '1770', '1771', '1772', '1773', '1773', 43),
(44, 'French Revolution was started in the Year?', '1786', '1787', '1788', '1789', '1789', 44),
(45, 'Rome was liberated by the Italian soldiers in the year?', '1869', '1870', '1871', '1872', '1870', 45),
(46, 'When was Bulkan War II fought?', '1912', '1913', '1914', '1915', '1913', 46),
(47, 'Where did British first open their factories in East part of India? ', 'Assam', 'Orissa', 'Bihar', 'Sikim', 'Orissa', 47),
(48, 'When East India Company was came into existence, England was ruled by', 'Hanovarians\r\n', 'Stuarts\r\n\r\n', 'Normans\r\n\r\n', 'None of the above\r\n', 'Normans', 48),
(49, 'In Bengal, the headquarters of East India Company were located at', 'Fort St David\r\n\r\n', 'Fort William\r\n', 'Fort St George\r\n\r\n', 'None of the above\r\n', 'Fort William', 49),
(50, 'First Governor-General of Bengal was', 'Robert Clive\r\n', 'William Bentinck\r\n\r\n', 'Wellesley\r\n', 'Warren Hastings', 'Warren Hastings', 50);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `userType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `pass`, `email`, `userType`) VALUES
(1, 'Wasik', '1111', 'wasikquayum8@gmail.ccom', 'admin'),
(2, 'Ab', '3030', 'ab@yahoo.com', 'user'),
(3, 'ami', '9999', 'ami@gmail.com', 'user'),
(10, 'Rifat', '9999', 'rtf@gmail.com', 'admin'),
(11, 'Shushanto', 'janina', 'shu@gmail.com', 'user'),
(12, 'pewdipe', 'pp', 'pewdipe@gmail.com', 'user'),
(14, 'Tanvir', '9090', 'Tanvir@gmail.com', 'user'),
(16, 'Abir', '007', 'abir@aiub.edu', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mat_answer`
--

CREATE TABLE `mat_answer` (
  `mat_ansid` int(20) NOT NULL,
  `mat_ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mat_answer`
--

INSERT INTO `mat_answer` (`mat_ansid`, `mat_ans`) VALUES
(1, '4'),
(2, '4'),
(3, '0.4'),
(4, '22'),
(5, '1 846 000'),
(6, '( - infinity , 2]'),
(7, '40'),
(8, '300'),
(9, '4000'),
(10, '10x-5'),
(11, '4 1/3 < 4.67'),
(12, '24/25'),
(13, '4.25'),
(14, '480000m'),
(15, '10000m/h'),
(16, '{-9,8}'),
(17, '2.5km'),
(18, '5 29/72'),
(19, '75'),
(20, '4, -/3, 1 -3/5. -0.8'),
(21, '{-3,7}'),
(22, '-3, -3/10, 3, 3.3'),
(23, 'on the x axis'),
(24, 'A = a + 3, B = -2 b +3'),
(25, 'perpendicula'),
(26, 'do not intersect'),
(27, '(-5 , -1)'),
(28, '(?/2 , ?)'),
(29, '0, 2 and 5'),
(30, '- 2, 4, and 11/2'),
(31, '2100'),
(32, '3!'),
(33, 'mean = 15 , standard deviation = 1'),
(34, '106'),
(35, 'an even function'),
(36, '? / 3'),
(37, '1.2 cm'),
(38, '?'),
(39, '0.057'),
(40, '12'),
(41, '0.4'),
(42, '10X2'),
(43, 'Circle'),
(44, 'Cube'),
(45, 'Vertex'),
(46, 'The Prime factors of a number'),
(47, 'Formula'),
(48, 'Gallon'),
(49, '17.5'),
(50, '180');

-- --------------------------------------------------------

--
-- Table structure for table `mat_question`
--

CREATE TABLE `mat_question` (
  `mat_id` int(20) NOT NULL,
  `mat_ques` varchar(500) NOT NULL,
  `mat_opt1` varchar(500) NOT NULL,
  `mat_opt2` varchar(500) NOT NULL,
  `mat_opt3` varchar(500) NOT NULL,
  `mat_opt4` varchar(500) NOT NULL,
  `mat_ans` varchar(500) NOT NULL,
  `mat_ansid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mat_question`
--

INSERT INTO `mat_question` (`mat_id`, `mat_ques`, `mat_opt1`, `mat_opt2`, `mat_opt3`, `mat_opt4`, `mat_ans`, `mat_ansid`) VALUES
(1, '2+2', '1', '2', '3', '4', '4', 1),
(2, 'If Logx (1 / 8) = - 3 / 2, then x is equal to', '- 4\r\n', '4', '1 / 4', '10', '4', 2),
(3, '20 % of 2 is equal to', '20\r\n\r\n\r\n\r\n', '4\r\n\r\n\r\n\r\n', '0.4\r\n\r\n\r\n\r\n', '0.04\r\n', '0.4', 3),
(4, 'If Log 4 (x) = 12, then log 2 (x / 4) is equal to', '11\r\n\r\n', '48\r\n', '-12\r\n\r\n', '22\r\n', '22', 4),
(5, 'The population of a country increased by an average of 2% per year from 2000 to 2003. If the population of this country was 2 000 000 on December 31, 2003, then the population of this country on January 1, 2000, to the nearest thousand would have been', '1 846 000\r\n\r\n', '1 852 000\r\n\r\n', '1 000 000\r\n\r\n', '1 500 000\r\n', '1 846 000', 5),
(6, 'f is a quadratic function whose graph is a parabola opening upward and has a vertex on the x-axis. The graph of the new function g defined by g(x) = 2 - f(x - 5) has a range defined by the interval', '[ -5 , + infinity)\r\n\r\n', '[ 2 , + infinity)\r\n', '( - infinity , 2]\r\n', '( - infinity , 0]\r\n', '( - infinity , 2]', 6),
(7, 'The ratio of students who take the bus to school to the total population of a high school is 2:5. Which of the following is the percent of students who take the bus? ', '10\r\n\r\n', '20', '40', '60', '40', 7),
(8, 'The attendance at a nursing convention was 400 members, 75% of whom voted for an increase in membership dues.Which of the following is the numbers of members who voted for the increase? ', '75\r\n\r\n', '100\r\n\r\n', '300\r\n\r\n', '325\r\n', '300', 8),
(9, 'A typist can type an average of 1000 words in 15 min. At this rate, how many words can the typist type in 1 hour?', '250\r\n\r\n', '1500\r\n\r\n', '4000\r\n\r\n', '60000\r\n', '4000', 9),
(10, '(x^2 + 4x + 4) - ( x^2 - 6x +9)Simplify the expression above. Which of the following is correct? ', '10x+13\r\n\r\n', '10x-5\r\n\r\n', '-2x+13\r\n', '-2x-5', '10x-5\r\n', 10),
(11, 'Which of the following expressions appropriately compares 4.67 and 4 1/3? ', '4.67< 41/3\r\n', '41/3 >/=4.67\r\n\r\n', '4.67= 4 1/3\r\n\r\n', '4 1/3 < 4.67\r\n', '4 1/3 < 4.67\r\n', 11),
(12, 'Which of the following fractions represents the sum of 0.3, 0.6, 0.04, and 0.02? ', '3/20\r\n\r\n', '24/25\r\n\r\n', '25/24\r\n\r\n', '3/2\r\n', '24/25', 12),
(13, 'Which of the following expresses 4.25% as a decimal?', '0.0425\r\n\r\n', '0.425\r\n', '4.25', '425', '4.25', 13),
(14, 'The distance fro Chicago, IL to St Louis, MO is 300 miles. which of the following is the distance in  meters (m) between these two cities? (note: 1 mile = 1.6 km)', '187.5m\r\n', '480m\r\n\r\n', '187000m\r\n\r\n', '480000m\r\n', '480000m', 14),
(15, 'Nancy ran a distance of 5 km in 30 minutes. What is her speed in meters (m) per hour (hr)', '10000m/h\r\n', '6000m/h\r\n\r\n', '300000m/h\r\n\r\n', '150m/h\r\n', '10000m/h', 15),
(16, '[2x + 1] = 17Solve the equation for x. Which of the following solution sets is correct?', '{8,9}\r\n\r\n', '{-8,9}\r\n\r\n', '{-9,-8}\r\n\r\n', '{-9,8}\r\n', '{-9,8}\r\n', 16),
(17, 'The distance between A and E in the graphic below represents 10km. The distance between B and E, as well as A and D, is 8km. If the distance between A and C is 4.5 km, which of following is the distance between B and C?__A__B_____C__________D____E____', '2.0 km\r\n\r\n', '2.5km\r\n\r\n', '3.5km\r\n\r\n', '6.0km\r\n', '2.5km', 17),
(18, '5/8 + 1 7/9 + 3Simplify the expression above. Which of the following is correct? ', '4 29/72\r\n\r\n', '4 12/17\r\n', '5 7/18\r\n\r\n', '5 29/72\r\n', '5 29/72', 18),
(19, 'If 5 gallons of paint will cover 2,000 sq. ft, how many gallons of paint are needed to paint 30,000 sq. ft. ? ', '15\r\n', '6000', '400', '75', '75', 19),
(20, 'Which of the following lists the given values from the greatest to least? -/3, 1, 4, -0.8, -3/5', '-/3, 1 ,4 , -0.8, -3/5\r\n\r\n', '4, 1 ,-0.8, -3/5, -/3\r\n\r\n', '4, -/3, 1 -3/5. -0.8\r\n\r\n', '4,-/3, -0.8, -3/5\r\n', '4, -/3, 1 -3/5. -0.8', 20),
(21, 'Use the graph below to answer the question5(x-2)^2 = 125', '{-3,-7}\r\n\r\n', '{-3,7}\r\n\r\n', '{3,-7}\r\n\r\n', '{3,7}\r\n', '{-3,7}\r\n', 21),
(22, 'Which of the following lists the values in order from least to greatest?', '-3, 3/10, 3.3,3\r\n', '-3/10, -3,3, 3.3\r\n', '-3, -3/10, 3, 3.3\r\n', '-3/10, 3, -3, 3.3\r\n', '-3, -3/10, 3, 3.3', 22),
(23, 'f is a function such that f(x) < 0. The graph of the new function g defined by g(x) = | f(x) | is a reflection of the graph of f', 'on the y axis\r\n\r\n', 'on the x axis\r\n', 'on the line y = x\r\n\r\n', 'on the line y = - x\r\n', 'on the x axis\r\n', 23),
(24, 'If the graph of y = f(x) is transformed into the graph of 2y - 6 = - 4 f(x - 3), point (a , b) on the graph of y = f(x) becomes point (A , B) on the graph of 2y - 6 = - 4 f(x - 3) where A and B are given by', 'A = a - 3, B = b\r\n\r\n', 'A = a - 3, B = b\r\n\r\n', 'A = a + 3, B = -2 b\r\n\r\n', 'A = a + 3, B = -2 b +3\r\n', 'A = a + 3, B = -2 b +3', 24),
(25, 'The graphs of the two linear equations a x + b y = c and b x - a y = c, where a, b and c are all not equal to zero,', 'are parallel\r\n\r\n', 'intersect at one point\r\n\r\n', 'perpendicular\r\n', 'intersect at two points\r\n\r\n', 'perpendicular', 25),
(26, 'The graphs of the two equations y = a x 2 + b x + c and y = A x 2 + B x + C, such that a and A have different signs and that the quantities b 2 - 4 a c and B 2 - 4 A C are both negative,', 'intersect at two points\r\n\r\n', 'intersect at one point\r\n\r\n', 'do not intersect\r\n\r\n', 'none of the above\r\n', 'do not intersect\r\n', 26),
(27, 'When a parabola represented by the equation y - 2x 2= 8 x + 5 is translated 3 units to the left and 2 units up, the new parabola has its vertex at', '(-5 , -1)\r\n\r\n', '(-5 , -5)\r\n\r\n', '(-1 , -3)\r\n\r\n', '(-2 , -3)\r\n', '(-5 , -1)', 27),
(28, 'For x greater than or equal to zero and less than or equal to 2 ?, sin x and cos x are both decreasing on the intervals', '(0 , ?/2)\r\n\r\n', '(?/2 , ?)\r\n\r\n', '(? , 3 ? / 2)\r\n\r\n', '(3 ? / 2 , 2 ?)\r\n', '(?/2 , ?)', 28),
(29, 'The three solutions of the equation f(x) = 0 are -2, 0, and 3. Therefore, the three solutions of the equation f(x - 2) = 0 are', '- 4, -2, and 1\r\n\r\n', '-2, 0 and 3\r\n\r\n', '4, 2, and 5\r\n\r\n', '0, 2 and 5\r\n', '0, 2 and 5', 29),
(30, 'The three solutions of the equation f(x) = 0 are - 4, 8, and 11. Therefore, the three solutions of the equation f(2 x) = 0 are', '- 2, 4, and 11/2\r\n\r\n', '- 8, 16 and 22\r\n\r\n', '- 4, 8, and 11\r\n\r\n', '2, 19 / 2 and 7 / 2\r\n', '- 2, 4, and 11/2\r\n', 30),
(31, 'A school committee consists of 2 teachers and 4 students. The number of different committees that can be formed from 5 teachers and 10 students is', '10\r\n\r\n', '15', '2100', '8', '2100', 31),
(32, 'Five different books (A, B, C, D and E) are to be arranged on a shelf. Books C and D are to be arranged first and second starting from the right of the shelf. The number of different orders in which books A, B and E may be arranged is', '5!', '3!', '2!', '3!*2!', '3!', 32),
(33, 'The mean of a data set is equal to 10 and its standard deviation is equal to 1. If we add 5 to each data value, then the mean and standard deviation become', 'mean = 15 , standard deviation = 6\r\n\r\n', 'mean = 10 , standard deviation = 6\r\n\r\n', 'mean = 15 , standard deviation = 1\r\n\r\n', 'mean = 10 , standard deviation = 1\r\n', 'mean = 15 , standard deviation = 1\r\n', 33),
(34, 'The exam scores of all 500 students were recorded and it was determined that these scores were normally distributed. If Jane\'s score is 0.8 standard deviation above the mean, then how many, to the nearest unit, students scored above Jane?', '394', '250', '400', '106', '106', 34),
(35, 'If f(x) is an odd function, then | f(x) | is', 'an odd function\r\n\r\n', 'an even function\r\n\r\n', 'neither odd nor even\r\n\r\n', 'even and odd\r\n', 'an even function', 35),
(36, 'The period of | sin (3x) | is', '2 ?\r\n', '2 ? / 3\r\n\r\n', '? / 3\r\n\r\n', '3 ?\r\n', '? / 3', 36),
(37, 'When a metallic ball bearing is placed inside a cylindrical container, of radius 2 cm, the height of the water, inside the container, increases by 0.6 cm. The radius, to the nearest tenth of a centimeter, of the ball bearing is', '1 cm\r\n\r\n', '1.2 cm\r\n\r\n', '2 cm\r\n\r\n', '0.6 cm\r\n', '1.2 cm', 37),
(38, 'The period of 2 sin x cos x is', '4 ? 2\r\n\r\n', '2 ?\r\n\r\n', '4 ?\r\n', '?\r\n', '?', 38),
(39, 'The probability that an electronic device produced by a company does not function properly is equal to 0.1. If 10 devices are bought, then the probability, to the nearest thousandth, that 7 devices function properly is', '0.057\r\n\r\n', '0.478\r\n\r\n', '0.001\r\n\r\n', '0\r\n', '0.057', 39),
(40, 'Which number is a multiple of 4?', '18', '13', '12', '23', '12', 40),
(41, 'If Derek Jeter bats 100 times and gets 40 hits, what is his batting average?', '0.4', '0.5', '0.245', '0.318', '0.4', 41),
(42, 'Which gives the same answer as 5+5+5+5?', '10X2\r\n\r\n', '20X2\r\n', '10+2\r\n\r\n', '5+2\r\n', '10X2', 42),
(43, 'Which one of the following is not a parallelogram?', 'Rectangle\r\n\r\n', 'Rhombus\r\n', 'Square\r\n\r\n', 'Circle\r\n', 'Circle\r\n', 43),
(44, 'What is the name of a solid figure with six square faces?', 'Cube\r\n\r\n', 'Circle\r\n\r\n', 'Globe\r\n\r\n', 'Triangle\r\n', 'Cube\r\n', 44),
(45, 'Where is the corner where three or more edges meet in a solid figure?', 'Middle', 'Diameter\r\n\r\n', 'Vertex\r\n\r\n', 'Center\r\n', 'Vertex', 45),
(46, 'What does a factor tree show?', 'The Prime factors of a number\r\n\r\n', 'A Table\r\n\r\n', 'The facts\r\n\r\n', 'Number Graphs\r\n', 'The Prime factors of a number\r\n', 46),
(47, 'What is a set of symbols that expresses a mathematical rule called?', 'Point\r\n\r\n', 'Formula', 'Graph\r\n\r\n', 'Line\r\n', 'Formula', 47),
(48, 'Which of the following is largest?', 'Gallon\r\n\r\n', 'Pint\r\n', 'Liter\r\n\r\n', 'Ounce\r\n', 'Gallon', 48),
(49, 'If a truck travels 350 miles on 20 gallons of fuel, how many miles per gallon is the truck getting?', '5.7\r\n', '17.5\r\n\r\n', '7000\r\n\r\n', '70 \r\n', '17.5', 49),
(50, 'What is the price of a $300 watch marked down 40 percent?', '200', '120', '180', '240', '180', 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cs_answer`
--
ALTER TABLE `cs_answer`
  ADD PRIMARY KEY (`cs_ansid`);

--
-- Indexes for table `cs_question`
--
ALTER TABLE `cs_question`
  ADD PRIMARY KEY (`cs_ques_id`);

--
-- Indexes for table `gk_answer`
--
ALTER TABLE `gk_answer`
  ADD PRIMARY KEY (`gk_ansid`);

--
-- Indexes for table `gk_question`
--
ALTER TABLE `gk_question`
  ADD PRIMARY KEY (`gk_ques_id`);

--
-- Indexes for table `history_answer`
--
ALTER TABLE `history_answer`
  ADD PRIMARY KEY (`hstry_ansid`);

--
-- Indexes for table `history_ques`
--
ALTER TABLE `history_ques`
  ADD PRIMARY KEY (`hsty_ques_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mat_answer`
--
ALTER TABLE `mat_answer`
  ADD PRIMARY KEY (`mat_ansid`);

--
-- Indexes for table `mat_question`
--
ALTER TABLE `mat_question`
  ADD PRIMARY KEY (`mat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cs_answer`
--
ALTER TABLE `cs_answer`
  MODIFY `cs_ansid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `cs_question`
--
ALTER TABLE `cs_question`
  MODIFY `cs_ques_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gk_answer`
--
ALTER TABLE `gk_answer`
  MODIFY `gk_ansid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `gk_question`
--
ALTER TABLE `gk_question`
  MODIFY `gk_ques_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `history_answer`
--
ALTER TABLE `history_answer`
  MODIFY `hstry_ansid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `history_ques`
--
ALTER TABLE `history_ques`
  MODIFY `hsty_ques_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mat_answer`
--
ALTER TABLE `mat_answer`
  MODIFY `mat_ansid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `mat_question`
--
ALTER TABLE `mat_question`
  MODIFY `mat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
