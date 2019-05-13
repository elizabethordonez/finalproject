-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 02:47 AM
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
(1, 'Afganistan'),
(2, 'Akrotiri'),
(3, 'Albania'),
(4, 'Alemania'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguila'),
(8, 'Antartida'),
(9, 'Antigua y Barbuda'),
(10, 'Antillas Neerlandesas'),
(11, 'Arabia Saudi'),
(12, 'Arctic Ocean'),
(13, 'Argelia'),
(14, 'Argentina'),
(15, 'Armenia'),
(16, 'Aruba'),
(17, 'Ashmore andCartier Islands'),
(18, 'Atlantic Ocean'),
(19, 'Australia'),
(20, 'Austria'),
(21, 'Azerbaiyan'),
(22, 'Bahamas'),
(23, 'Bahrain'),
(24, 'Bangladesh'),
(25, 'Barbados'),
(26, 'Belgica'),
(27, 'Belice'),
(28, 'Benin'),
(29, 'Bermudas'),
(30, 'Bielorrusia'),
(31, 'Birmania Myanmar'),
(32, 'Bolivia'),
(33, 'Bosnia y Hercegovina'),
(34, 'Botsuana'),
(35, 'Brasil'),
(36, 'Brunei'),
(37, 'Bulgaria'),
(38, 'Burkina Faso'),
(39, 'Burundi'),
(40, 'Butan'),
(41, 'Cabo Verde'),
(42, 'Camboya'),
(43, 'Camerun'),
(44, 'Canada'),
(45, 'Chad'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Clipperton Island'),
(50, 'Colombia'),
(51, 'Comoras'),
(52, 'Congo'),
(53, 'Coral Sea Islands'),
(54, 'Corea del Norte'),
(55, 'Corea del Sur'),
(56, 'Costa de Marfil'),
(57, 'Costa Rica'),
(58, 'Croacia'),
(59, 'Cuba'),
(60, 'Dhekelia'),
(61, 'Dinamarca'),
(62, 'Dominica'),
(63, 'Ecuador'),
(64, 'Egipto'),
(65, 'El Salvador'),
(66, 'El Vaticano'),
(67, 'Emiratos arabes Unidos'),
(68, 'Eritrea'),
(69, 'Eslovaquia'),
(70, 'Eslovenia'),
(71, 'Espana'),
(72, 'Estados Unidos'),
(73, 'Estonia'),
(74, 'Etiopia'),
(75, 'Filipinas'),
(76, 'Finlandia'),
(77, 'Fiyi'),
(78, 'Francia'),
(79, 'Gabon'),
(80, 'Gambia'),
(81, 'Gaza Strip'),
(82, 'Georgia'),
(83, 'Ghana'),
(84, 'Gibraltar'),
(85, 'Granada'),
(86, 'Grecia'),
(87, 'Groenlandia'),
(88, 'Guam'),
(89, 'Guatemala'),
(90, 'Guernsey'),
(91, 'Guinea'),
(92, 'Guinea Ecuatorial'),
(93, 'Guinea-Bissau'),
(94, 'Guyana'),
(95, 'Haiti'),
(96, 'Honduras'),
(97, 'Hong Kong'),
(98, 'Hungria'),
(99, 'India'),
(100, 'Indian Ocean'),
(101, 'Indonesia'),
(102, 'Iran'),
(103, 'Iraq'),
(104, 'Irlanda'),
(105, 'Isla Bouvet'),
(106, 'Isla Christmas'),
(107, 'Isla Norfolk'),
(108, 'Islandia'),
(109, 'Islas Caiman'),
(110, 'Islas Cocos'),
(111, 'Islas Cook'),
(112, 'Islas Feroe'),
(113, 'Islas Georgia del Sur y Sandwi'),
(114, 'Islas Heard y McDonald'),
(115, 'Islas Malvinas'),
(116, 'Islas Marianas del Norte'),
(117, 'IslasMarshall'),
(118, 'Islas Pitcairn'),
(119, 'Islas Salomon'),
(120, 'Islas Turcas y Caicos'),
(121, 'Islas Virgenes Americanas'),
(122, 'Islas Virgenes Britanicas'),
(123, 'Israel'),
(124, 'Italia'),
(125, 'Jamaica'),
(126, 'Jan Mayen'),
(127, 'Japon'),
(128, 'Jersey'),
(129, 'Jordania'),
(130, 'Kazajistan'),
(131, 'Kenia'),
(132, 'Kirguizistan'),
(133, 'Kiribati'),
(134, 'Kuwait'),
(135, 'Laos'),
(136, 'Lesoto'),
(137, 'Letonia'),
(138, 'Libano'),
(139, 'Liberia'),
(140, 'Libia'),
(141, 'Liechtenstein'),
(142, 'Lituania'),
(143, 'Luxemburgo'),
(144, 'Macao'),
(145, 'Macedonia'),
(146, 'Madagascar'),
(147, 'Malasia'),
(148, 'Malaui'),
(149, 'Maldivas'),
(150, 'Mali'),
(151, 'Malta'),
(152, 'Man, Isle of'),
(153, 'Marruecos'),
(154, 'Mauricio'),
(155, 'Mauritania'),
(156, 'Mayotte'),
(157, 'Mexico'),
(158, 'Micronesia'),
(159, 'Moldavia'),
(160, 'Monaco'),
(161, 'Mongolia'),
(162, 'Montserrat'),
(163, 'Mozambique'),
(164, 'Namibia'),
(165, 'Nauru'),
(166, 'Navassa Island'),
(167, 'Nepal'),
(168, 'Nicaragua'),
(169, 'Niger'),
(170, 'Nigeria'),
(171, 'Niue'),
(172, 'Noruega'),
(173, 'Nueva Caledonia'),
(174, 'Nueva Zelanda'),
(175, 'Oman'),
(176, 'Pacific Ocean'),
(177, 'Paises Bajos'),
(178, 'Pakistan'),
(179, 'Palaos'),
(180, 'Panama'),
(181, 'Papua-Nueva Guinea'),
(182, 'Paracel Islands'),
(183, 'Paraguay'),
(184, 'Peru'),
(185, 'Polinesia Francesa'),
(186, 'Polonia'),
(187, 'Portugal'),
(188, 'Puerto Rico'),
(189, 'Qatar'),
(190, 'Reino Unido'),
(191, 'Republica Centroafricana'),
(192, 'Republica Checa'),
(193, 'Republica Democratica del Cong'),
(194, 'Republica Dominicana'),
(195, 'Ruanda'),
(196, 'Rumania'),
(197, 'Rusia'),
(198, 'Sahara Occidental'),
(199, 'Samoa'),
(200, 'Samoa Americana'),
(201, 'San Cristobal y Nieves'),
(202, 'San Marino'),
(203, 'San Pedro y Miquelon'),
(204, 'San Vicente y las Granadinas'),
(205, 'Santa Helena'),
(206, 'Santa Lucia'),
(207, 'Santo Tome y Principe'),
(208, 'Senegal'),
(209, 'Seychelles'),
(210, 'Sierra Leona'),
(211, 'Singapur'),
(212, 'Siria'),
(213, 'Somalia'),
(214, 'Southern Ocean'),
(215, 'Spratly Islands'),
(216, 'Sri Lanka'),
(217, 'Suazilandia'),
(218, 'Sudafrica'),
(219, 'Sudan'),
(220, 'Suecia'),
(221, 'Suiza'),
(222, 'Surinam'),
(223, 'Svalbard y Jan Mayen'),
(224, 'Tailandia'),
(225, 'Taiwan'),
(226, 'Tanzania'),
(227, 'Tayikistan'),
(228, 'TerritorioBritanicodel Oceano '),
(229, 'Territorios Australes Francese'),
(230, 'Timor Oriental'),
(231, 'Togo'),
(232, 'Tokelau'),
(233, 'Tonga'),
(234, 'Trinidad y Tobago'),
(235, 'Tunez'),
(236, 'Turkmenistan'),
(237, 'Turquia'),
(238, 'Tuvalu'),
(239, 'Ucrania'),
(240, 'Uganda'),
(241, 'Union Europea'),
(242, 'Uruguay'),
(243, 'Uzbekistan'),
(244, 'Vanuatu'),
(245, 'Venezuela'),
(246, 'Vietnam'),
(247, 'Wake Island'),
(248, 'Wallis y Futuna'),
(249, 'West Bank'),
(250, 'World'),
(251, 'Yemen'),
(252, 'Yibuti'),
(253, 'Zambia'),
(254, 'Zimbabue');

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
