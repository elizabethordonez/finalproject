-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 06:56 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visaprocess`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `applicant_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `citizenship` int(11) NOT NULL,
  `country_of_residence` int(11) NOT NULL,
  `gender` char(1) NOT NULL,
  `language_id` int(11) NOT NULL,
  `civil_status_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `ielts_65` char(1) NOT NULL,
  `money_scale_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_date` date NOT NULL,
  `appointment_hour` time NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `civil_status`
--

CREATE TABLE `civil_status` (
  `civil_status_id` int(11) NOT NULL,
  `civil_status_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil_status`
--

INSERT INTO `civil_status` (`civil_status_id`, `civil_status_desc`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Separated'),
(4, 'Legal Separated'),
(5, 'Divorced'),
(6, 'Widowed');

-- --------------------------------------------------------

--
-- Table structure for table `consultant`
--

CREATE TABLE `consultant` (
  `consultant_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Countries';

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Albania'),
(3, 'Algeria'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguilla'),
(8, 'Antarctica'),
(9, 'Antigua and Barbuda'),
(10, 'Argentina'),
(11, 'Armenia'),
(12, 'Aruba'),
(13, 'Australia'),
(14, 'Austria'),
(15, 'Azerbaijan'),
(16, 'Bahamas'),
(17, 'Bahrain'),
(18, 'Bangladesh'),
(19, 'Barbados'),
(20, 'Belarus'),
(21, 'Belgium'),
(22, 'Belize'),
(23, 'Benin'),
(24, 'Bermuda'),
(25, 'Bhutan'),
(26, 'Bolivia'),
(27, 'Bosnia and Herzegovina'),
(28, 'Botswana'),
(29, 'Bouvet Island'),
(30, 'Brazil'),
(31, 'British Indian Ocean Territory'),
(32, 'Brunei Darussalam'),
(33, 'Bulgaria'),
(34, 'Burkina Faso'),
(35, 'Burundi'),
(36, 'Cambodia'),
(37, 'Cameroon'),
(38, 'Canada'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Chile'),
(44, 'China'),
(45, 'Christmas Island'),
(46, 'Cocos (Keeling) Islands'),
(47, 'Colombia'),
(48, 'Comoros'),
(49, 'Congo'),
(50, 'Cook Islands'),
(51, 'Costa Rica'),
(52, 'Croatia (Hrvatska)'),
(53, 'Cuba'),
(54, 'Cyprus'),
(55, 'Czech Republic'),
(56, 'Denmark'),
(57, 'Djibouti'),
(58, 'Dominica'),
(59, 'Dominican Republic'),
(60, 'East Timor'),
(61, 'Ecuador'),
(62, 'Egypt'),
(63, 'El Salvador'),
(64, 'Equatorial Guinea'),
(65, 'Eritrea'),
(66, 'Estonia'),
(67, 'Ethiopia'),
(68, 'Falkland Islands (Malvinas)'),
(69, 'Faroe Islands'),
(70, 'Fiji'),
(71, 'Finland'),
(72, 'France'),
(73, 'France, Metropolitan'),
(74, 'French Guiana'),
(75, 'French Polynesia'),
(76, 'French Southern Territories'),
(77, 'Gabon'),
(78, 'Gambia'),
(79, 'Georgia'),
(80, 'Germany'),
(81, 'Ghana'),
(82, 'Gibraltar'),
(83, 'Guernsey'),
(84, 'Greece'),
(85, 'Greenland'),
(86, 'Grenada'),
(87, 'Guadeloupe'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guinea'),
(91, 'Guinea-Bissau'),
(92, 'Guyana'),
(93, 'Haiti'),
(94, 'Heard and Mc Donald Islands'),
(95, 'Honduras'),
(96, 'Hong Kong'),
(97, 'Hungary'),
(98, 'Iceland'),
(99, 'India'),
(100, 'Isle of Man'),
(101, 'Indonesia'),
(102, 'Iran (Islamic Republic of)'),
(103, 'Iraq'),
(104, 'Ireland'),
(105, 'Israel'),
(106, 'Italy'),
(107, 'Ivory Coast'),
(108, 'Jersey'),
(109, 'Jamaica'),
(110, 'Japan'),
(111, 'Jordan'),
(112, 'Kazakhstan'),
(113, 'Kenya'),
(114, 'Kiribati'),
(115, 'Korea, Democratic People\'s Rep'),
(116, 'Korea, Republic of'),
(117, 'Kosovo'),
(118, 'Kuwait'),
(119, 'Kyrgyzstan'),
(120, 'Lao People\'s Democratic Republ'),
(121, 'Latvia'),
(122, 'Lebanon'),
(123, 'Lesotho'),
(124, 'Liberia'),
(125, 'Libyan Arab Jamahiriya'),
(126, 'Liechtenstein'),
(127, 'Lithuania'),
(128, 'Luxembourg'),
(129, 'Macau'),
(130, 'Macedonia'),
(131, 'Madagascar'),
(132, 'Malawi'),
(133, 'Malaysia'),
(134, 'Maldives'),
(135, 'Mali'),
(136, 'Malta'),
(137, 'Marshall Islands'),
(138, 'Martinique'),
(139, 'Mauritania'),
(140, 'Mauritius'),
(141, 'Mayotte'),
(142, 'Mexico'),
(143, 'Micronesia, Federated States o'),
(144, 'Moldova, Republic of'),
(145, 'Monaco'),
(146, 'Mongolia'),
(147, 'Montenegro'),
(148, 'Montserrat'),
(149, 'Morocco'),
(150, 'Mozambique'),
(151, 'Myanmar'),
(152, 'Namibia'),
(153, 'Nauru'),
(154, 'Nepal'),
(155, 'Netherlands'),
(156, 'Netherlands Antilles'),
(157, 'New Caledonia'),
(158, 'New Zealand'),
(159, 'Nicaragua'),
(160, 'Niger'),
(161, 'Nigeria'),
(162, 'Niue'),
(163, 'Norfolk Island'),
(164, 'Northern Mariana Islands'),
(165, 'Norway'),
(166, 'Oman'),
(167, 'Pakistan'),
(168, 'Palau'),
(169, 'Palestine'),
(170, 'Panama'),
(171, 'Papua New Guinea'),
(172, 'Paraguay'),
(173, 'Peru'),
(174, 'Philippines'),
(175, 'Pitcairn'),
(176, 'Poland'),
(177, 'Portugal'),
(178, 'Puerto Rico'),
(179, 'Qatar'),
(180, 'Reunion'),
(181, 'Romania'),
(182, 'Russian Federation'),
(183, 'Rwanda'),
(184, 'Saint Kitts and Nevis'),
(185, 'Saint Lucia'),
(186, 'Saint Vincent and the Grenadin'),
(187, 'Samoa'),
(188, 'San Marino'),
(189, 'Sao Tome and Principe'),
(190, 'Saudi Arabia'),
(191, 'Senegal'),
(192, 'Serbia'),
(193, 'Seychelles'),
(194, 'Sierra Leone'),
(195, 'Singapore'),
(196, 'Slovakia'),
(197, 'Slovenia'),
(198, 'Solomon Islands'),
(199, 'Somalia'),
(200, 'South Africa'),
(201, 'South Georgia South Sandwich I'),
(202, 'South Sudan'),
(203, 'Spain'),
(204, 'Sri Lanka'),
(205, 'St. Helena'),
(206, 'St. Pierre and Miquelon'),
(207, 'Sudan'),
(208, 'Suriname'),
(209, 'Svalbard and Jan Mayen Islands'),
(210, 'Swaziland'),
(211, 'Sweden'),
(212, 'Switzerland'),
(213, 'Syrian Arab Republic'),
(214, 'Taiwan'),
(215, 'Tajikistan'),
(216, 'Tanzania, United Republic of'),
(217, 'Thailand'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad and Tobago'),
(222, 'Tunisia'),
(223, 'Turkey'),
(224, 'Turkmenistan'),
(225, 'Turks and Caicos Islands'),
(226, 'Tuvalu'),
(227, 'Uganda'),
(228, 'Ukraine'),
(229, 'United Arab Emirates'),
(230, 'United Kingdom'),
(231, 'United States'),
(232, 'United States minor outlying i'),
(233, 'Uruguay'),
(234, 'Uzbekistan'),
(235, 'Vanuatu'),
(236, 'Vatican City State'),
(237, 'Venezuela'),
(238, 'Vietnam'),
(239, 'Virgin Islands (British)'),
(240, 'Virgin Islands (U.S.)'),
(241, 'Wallis and Futuna Islands'),
(242, 'Western Sahara'),
(243, 'Yemen'),
(244, 'Zaire'),
(245, 'Zambia'),
(246, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `education_level`
--

CREATE TABLE `education_level` (
  `education_id` int(11) NOT NULL,
  `education_level_desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_level`
--

INSERT INTO `education_level` (`education_id`, `education_level_desc`) VALUES
(1, 'High School'),
(2, 'Associate\'s degree, 2 years'),
(3, 'Bachelor\'s degree, 4 years'),
(4, 'Master\'s degree, 1-2 years'),
(5, 'Doctoral degree, 5-7 years');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `language_id` int(11) NOT NULL,
  `language_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`language_id`, `language_name`) VALUES
(1, 'Acholi'),
(2, 'Afrikaans'),
(3, 'Akan'),
(4, 'Albanian'),
(5, 'Amharic'),
(6, 'Arabic'),
(7, 'Ashante'),
(8, 'Asl'),
(9, 'Assyrian'),
(10, 'Azerbaijani'),
(11, 'Azeri'),
(12, 'Bajuni'),
(13, 'Basque'),
(14, 'Behdini'),
(15, 'Belorussian'),
(16, 'Bengali'),
(17, 'Berber'),
(18, 'Bosnian'),
(19, 'Bravanese'),
(20, 'Bulgarian'),
(21, 'Burmese'),
(22, 'Cakchiquel'),
(23, 'Cambodian'),
(24, 'Cantonese'),
(25, 'Catalan'),
(26, 'Chaldean'),
(27, 'Chamorro'),
(28, 'Chao-chow'),
(29, 'Chavacano'),
(30, 'Chin'),
(31, 'Chuukese'),
(32, 'Cree'),
(33, 'Croatian'),
(34, 'Czech'),
(35, 'Dakota'),
(36, 'Danish'),
(37, 'Dari'),
(38, 'Dinka'),
(39, 'Diula'),
(40, 'Dutch'),
(41, 'Edo'),
(42, 'English'),
(43, 'Estonian'),
(44, 'Ewe'),
(45, 'Fante'),
(46, 'Farsi'),
(47, 'Fijian Hindi'),
(48, 'Finnish'),
(49, 'Flemish'),
(50, 'French'),
(51, 'French Canadian'),
(52, 'Fukienese'),
(53, 'Fula'),
(54, 'Fulani'),
(55, 'Fuzhou'),
(56, 'Ga'),
(57, 'Gaddang'),
(58, 'Gaelic'),
(59, 'Gaelic-irish'),
(60, 'Gaelic-scottish'),
(61, 'Georgian'),
(62, 'German'),
(63, 'Gorani'),
(64, 'Greek'),
(65, 'Gujarati'),
(66, 'Haitian Creole'),
(67, 'Hakka'),
(68, 'Hakka-chinese'),
(69, 'Hausa'),
(70, 'Hebrew'),
(71, 'Hindi'),
(72, 'Hmong'),
(73, 'Hungarian'),
(74, 'Ibanag'),
(75, 'Ibo'),
(76, 'Icelandic'),
(77, 'Igbo'),
(78, 'Ilocano'),
(79, 'Indonesian'),
(80, 'Inuktitut'),
(81, 'Italian'),
(82, 'Jakartanese'),
(83, 'Japanese'),
(84, 'Javanese'),
(85, 'Kanjobal'),
(86, 'Karen'),
(87, 'Karenni'),
(88, 'Kashmiri'),
(89, 'Kazakh'),
(90, 'Kikuyu'),
(91, 'Kinyarwanda'),
(92, 'Kirundi'),
(93, 'Korean'),
(94, 'Kosovan'),
(95, 'Kotokoli'),
(96, 'Krio'),
(97, 'Kurdish'),
(98, 'Kurmanji'),
(99, 'Kyrgyz'),
(100, 'Lakota'),
(101, 'Laotian'),
(102, 'Latvian'),
(103, 'Lingala'),
(104, 'Lithuanian'),
(105, 'Luganda'),
(106, 'Luo'),
(107, 'Maay'),
(108, 'Macedonian'),
(109, 'Malay'),
(110, 'Malayalam'),
(111, 'Maltese'),
(112, 'Mandarin'),
(113, 'Mandingo'),
(114, 'Mandinka'),
(115, 'Marathi'),
(116, 'Marshallese'),
(117, 'Mien'),
(118, 'Mina'),
(119, 'Mirpuri'),
(120, 'Mixteco'),
(121, 'Moldavan'),
(122, 'Mongolian'),
(123, 'Montenegrin'),
(124, 'Navajo'),
(125, 'Neapolitan'),
(126, 'Nepali'),
(127, 'Nigerian Pidgin'),
(128, 'Norwegian'),
(129, 'Oromo'),
(130, 'Pahari'),
(131, 'Papago'),
(132, 'Papiamento'),
(133, 'Pashto'),
(134, 'Patois'),
(135, 'Pidgin English'),
(136, 'Polish'),
(137, 'Portug.creole'),
(138, 'Portuguese'),
(139, 'Pothwari'),
(140, 'Pulaar'),
(141, 'Punjabi'),
(142, 'Putian'),
(143, 'Quichua'),
(144, 'Romanian'),
(145, 'Russian'),
(146, 'Samoan'),
(147, 'Serbian'),
(148, 'Shanghainese'),
(149, 'Shona'),
(150, 'Sichuan'),
(151, 'Sicilian'),
(152, 'Sinhalese'),
(153, 'Slovak'),
(154, 'Somali'),
(155, 'Sorani'),
(156, 'Spanish'),
(157, 'Sudanese Arabic'),
(158, 'Sundanese'),
(159, 'Susu'),
(160, 'Swahili'),
(161, 'Swedish'),
(162, 'Sylhetti'),
(163, 'Tagalog'),
(164, 'Taiwanese'),
(165, 'Tajik'),
(166, 'Tamil'),
(167, 'Telugu'),
(168, 'Thai'),
(169, 'Tibetan'),
(170, 'Tigre'),
(171, 'Tigrinya'),
(172, 'Toishanese'),
(173, 'Tongan'),
(174, 'Toucouleur'),
(175, 'Trique'),
(176, 'Tshiluba'),
(177, 'Turkish'),
(178, 'Twi'),
(179, 'Ukrainian'),
(180, 'Urdu'),
(181, 'Uyghur'),
(182, 'Uzbek'),
(183, 'Vietnamese'),
(184, 'Visayan'),
(185, 'Welsh'),
(186, 'Wolof'),
(187, 'Yiddish'),
(188, 'Yoruba'),
(189, 'Yupik');

-- --------------------------------------------------------

--
-- Table structure for table `money_scale`
--

CREATE TABLE `money_scale` (
  `money_scale_id` int(11) NOT NULL,
  `minimum_quantity` int(11) NOT NULL,
  `maximum_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `money_scale`
--

INSERT INTO `money_scale` (`money_scale_id`, `minimum_quantity`, `maximum_quantity`) VALUES
(1, 0, 30000),
(2, 30000, 35000),
(3, 35000, 40000),
(4, 40000, 45000),
(5, 45000, 50000),
(6, 50000, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`applicant_id`),
  ADD KEY `country_applicant_citizenship_fk` (`citizenship`),
  ADD KEY `civilstatus_applicant_fk` (`civil_status_id`),
  ADD KEY `country_applicant_residence_fk` (`country_of_residence`),
  ADD KEY `educatiolevel_applicant_fk` (`education_id`),
  ADD KEY `language_applicant_fk` (`language_id`),
  ADD KEY `moneyscale_applicant_fk` (`money_scale_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_date`,`appointment_hour`,`consultant_id`,`applicant_id`),
  ADD KEY `applicant_appointment_fk` (`applicant_id`),
  ADD KEY `consultant_appointment_fk` (`consultant_id`);

--
-- Indexes for table `civil_status`
--
ALTER TABLE `civil_status`
  ADD PRIMARY KEY (`civil_status_id`) COMMENT 'civil_statua_pk';

--
-- Indexes for table `consultant`
--
ALTER TABLE `consultant`
  ADD PRIMARY KEY (`consultant_id`) COMMENT 'consultant_pk';

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`) COMMENT 'country_pk';

--
-- Indexes for table `education_level`
--
ALTER TABLE `education_level`
  ADD PRIMARY KEY (`education_id`) COMMENT 'education_level_pk';

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`language_id`) COMMENT 'language_pk';

--
-- Indexes for table `money_scale`
--
ALTER TABLE `money_scale`
  ADD PRIMARY KEY (`money_scale_id`) COMMENT 'money_scale_pk';

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `applicant_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicant`
--
ALTER TABLE `applicant`
  ADD CONSTRAINT `civilstatus_applicant_fk` FOREIGN KEY (`civil_status_id`) REFERENCES `civil_status` (`civil_status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `country_applicant_citizenship_fk` FOREIGN KEY (`citizenship`) REFERENCES `country` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `country_applicant_residence_fk` FOREIGN KEY (`country_of_residence`) REFERENCES `country` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `educatiolevel_applicant_fk` FOREIGN KEY (`education_id`) REFERENCES `education_level` (`education_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `language_applicant_fk` FOREIGN KEY (`language_id`) REFERENCES `language` (`language_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `moneyscale_applicant_fk` FOREIGN KEY (`money_scale_id`) REFERENCES `money_scale` (`money_scale_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `applicant_appointment_fk` FOREIGN KEY (`applicant_id`) REFERENCES `applicant` (`applicant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `consultant_appointment_fk` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`consultant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
