
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 19, 2015 at 08:23 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u411650325_rk`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_contactdetails`
--

CREATE TABLE IF NOT EXISTS `db_builder_contactdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `b/c` varchar(255) NOT NULL,
  `BBZBID` int(11) DEFAULT NULL,
  `cmp_name` varchar(43) DEFAULT NULL,
  `city` varchar(6) DEFAULT NULL,
  `email` varchar(52) DEFAULT NULL,
  `mobile` varchar(46) DEFAULT NULL,
  `phone` varchar(47) DEFAULT NULL,
  `fax` varchar(16) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `website` varchar(25) DEFAULT NULL,
  `realEstateHungamaLink` varchar(86) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `BBZBID` (`BBZBID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `db_builder_contactdetails`
--

INSERT INTO `db_builder_contactdetails` (`id`, `b/c`, `BBZBID`, `cmp_name`, `city`, `email`, `mobile`, `phone`, `fax`, `other`, `website`, `realEstateHungamaLink`) VALUES
(1, 'Builder', NULL, 'Akshat Apartments Pvt. Ltd.', 'Jaipur', 'info@akshatapartments.com, akshatapartments@gmail.co', ' +91-99298 05777', '+91-141-6604755, 56', '-6604849', 'www.akshatapartments.com', NULL, 'http://www.realestatehungama.com/builders/akshat-apartments-pvt-ltd.php'),
(2, 'Builder', NULL, 'Anukampa Group', 'Jaipur', 'info@anukampagroup.com', '+91 92140 00000', '-4212171', NULL, 'www.anukampagroup.com', NULL, 'http://www.realestatehungama.com/builders/anukampa-group.php'),
(3, 'Builder', NULL, 'ARG Group', 'Jaipur', 'info@arggroupjaipur.com', '-8824234143', NULL, '-4086716', 'www.arggroupjaipur.com', NULL, 'http://www.realestatehungama.com/builders/arg-group.php'),
(4, 'Builder', NULL, 'Ashapurna Buildcon Limited', 'Jaipur', 'info@ashapurna.com\n marketing@ashapurna.com ', NULL, '0291-2513747/3241747\n0291-3242747\n0291-3258747 ', '0291-2514747', 'www.ashapurna.com', NULL, 'http://www.realestatehungama.com/builders/ashapurna-buildcon-limited.php'),
(5, 'Builder', NULL, 'Ashiana Housing Ltd.', 'Jaipur', 'sales@ashianahousing.com', '+91 9001999108', '+91 141-413 99 99', NULL, 'www.ashianahousing.com', NULL, 'http://www.realestatehungama.com/builders/ashiana-housing-ltd.php'),
(6, 'Builder', NULL, 'Debock Group', 'Jaipur', 'info@debockgroup.com', NULL, '0141-5180751-58', '0141-5117759', 'www.debockgroup.com', NULL, 'http://www.realestatehungama.com/builders/debock-group.php'),
(7, 'Builder', NULL, 'Dream World Infrastructure Limited (DWIL)', 'Jaipur', ' info@dreamworldinfra.com', NULL, ' 0141 - 5102984, 5102784 ', '0141 - 4030610 ', 'www.dreamworldinfra.com', NULL, 'http://www.realestatehungama.com/builders/dream-world-infrastructure-limited-dwil.php'),
(8, 'Builder', NULL, 'Dhanuka Group', 'Jaipur', 'hitesh@dhanukagroup.in', '91-87692 20000, 87694 40000,800358 2222', '-4023242', NULL, 'www.dhanukagroup.in', NULL, 'http://www.realestatehungama.com/builders/dhanuka-colonizer-and-builders-pvt-ltd.php'),
(9, 'Builder', NULL, 'Finetech Developers Pvt. Ltd.', 'Jaipur', 'darya1@rediffmail.com ,info@finetechjaipur.com', '-132526', '-5113168', '-5113168', 'www.finetechjaipur.com', NULL, 'http://www.realestatehungama.com/builders/finetech-developers-pvt-ltd.php'),
(10, 'Builder', NULL, 'Gurupragya Real Mart Pvt. Ltd.', 'Jaipur', 'info@gurupragya.com', '-9001895793', '-4006002', NULL, 'www.gurupragya.com', NULL, 'http://www.realestatehungama.com/builders/gurupragya-real-mart-pvt-ltd.php'),
(11, 'Builder', NULL, 'Joy Bharat Group Builders & Developers', 'Jaipur', 'info@joybharatgroup.co.in', '+91-99503-00005,93144 20057 ', '0141-2218180 ', NULL, 'www.joybharatgroup.co.in', NULL, 'http://www.realestatehungama.com/builders/joy-bharat-group-builders-and-developers.php'),
(12, 'Builder', NULL, 'Landmark Builders and Developers', 'Jaipur', 'info@lbdhousing.com ', '-170200', '0141-4008928', NULL, 'www.lbdhousing.com', NULL, 'http://www.realestatehungama.com/builders/landmark-builders-and-developers.php'),
(13, 'Builder', NULL, 'Mahima Group', 'Jaipur', 'marketing@mahimagroup.org', '+91-9772210111, +91-9828060039\n', '+91-141- 4050606, +91-141- 4050607', NULL, 'www.mahimagroup.com', NULL, 'http://www.realestatehungama.com/builders/mahima-group.php'),
(14, 'Builder', NULL, 'Manglam Group', 'Jaipur', 'info@manglamgroup.com', '-9928037972', '-4311150', NULL, 'www.manglamgroup.com', NULL, 'http://www.realestatehungama.com/builders/manglam-group.php'),
(15, 'Builder', NULL, 'Neelkanth Constructions', 'Jaipur', 'info@neelkanthestate.com', '91-141-2350882', NULL, '91-141-2350582', 'www.neelkanthestate.com', NULL, 'http://www.realestatehungama.com/builders/neelkanth-constructions.php'),
(16, 'Builder', NULL, 'Neelkanth Nirman', 'Jaipur', 'info@neelkanthnirman.com', '+91 9680176000, +91 9414042127', '+91 141 2225155, 2353537', '+91 141 2225155', 'www.neelkanthnirman.com', NULL, 'http://www.realestatehungama.com/builders/neelkanth-nirman.php'),
(17, 'Builder', NULL, 'Okay PLUS Group', 'Jaipur', 'info@okayplus.com', '-99210', NULL, NULL, 'www.okayplusgroup.com', NULL, 'http://www.realestatehungama.com/builders/okay-plus-group.php'),
(18, 'Builder', NULL, 'Orior Developers & Infrastructure Pvt. Ltd.', 'Jaipur', NULL, '-41362.3451', '-5185114', NULL, 'www.oriordevelopers.com', 'www.oriordevelopers.com/G', 'http://www.realestatehungama.com/builders/orior-developers-and-infrastructure-pvt.php'),
(19, 'Builder', NULL, 'Palash Group', 'Jaipur', 'info@palashgroup.com', '+91 9983100555,9828312300', '1800-274-6767, 0141-2379872', '0141-2379862', 'www.palashgroup.com', NULL, 'http://www.realestatehungama.com/builders/palash-developer-pvt-ltd.php'),
(20, 'Builder', NULL, 'Safe Infraprojects Pvt. Ltd.', 'Jaipur', 'safe.infraprojects@gmail.com', '+91-80030-21123, +91-92140-30123', NULL, NULL, 'www.safeinfraprojects.com', NULL, 'http://www.realestatehungama.com/builders/sand-dune-construction-private-limited.php'),
(21, 'Builder', NULL, 'Shivgyan Developers Pvt. Ltd.', 'Jaipur', 'info@shivgyan.com', NULL, '+91 141 2613841, 4024955', NULL, 'www.shivgyan.com', NULL, 'http://www.realestatehungama.com/builders/tulip-infratech-pvt-ltd-.php'),
(22, 'Builder', NULL, 'Sun n Moon Group', 'Jaipur', NULL, NULL, '0141 510 3266', NULL, 'www.sunnmoon.in', NULL, 'http://www.realestatehungama.com/builders/sun-n-moon-group.php'),
(23, 'Builder', 1000001, 'Sand Dune Construction Private Limited', 'Jaipur', 'info@sanddunegroup.com, sales@sanddunegroup.com', '+91-9314874679, +91-9166707111, +91-9829161995', '-5104056', NULL, 'sanddunegroup.com', NULL, 'http://www.realestatehungama.com/builders/sand-dune-construction-private-limited.php'),
(24, 'Builder', NULL, 'Pearl Spytech', 'Jaipur', 'marketing@pearlspytech.com', '-', '+91 97999-31000, +91-141-255-2929', '+91 141 2552922', 'www.pearlspytech.com', NULL, 'http://www.realestatehungama.com/builders/spytech-group.php'),
(25, 'Builder', NULL, 'Sunny Group', 'Jaipur', 'sunnydevelopers@gmail.com', '+ 91 95718 30000, + 91 95713 17000', ' +91-141-2362131, 2362132, 3223340', ' +91-141-2365910', 'www.sunnygroup.in', NULL, 'http://www.realestatehungama.com/builders/sunny-developers-group.php'),
(26, 'Builder', NULL, 'Swift Builders and Developers', 'Jaipur', '-', '9828015007', '1414014462', NULL, '-', NULL, 'http://www.realestatehungama.com/builders/swift-incorporation.php'),
(27, 'Builder', NULL, 'Timurty Colonizers & Builders Pvt. Ltd.', 'Jaipur', 'sales@trimurty.com', '+91 9314 407 007', '+91-141-2374451, +91-141-5107100', '-2372409', 'www.trimurty.com', NULL, 'http://www.realestatehungama.com/builders/trimurty-colonizers-and-builders-pvt-ltd.php'),
(28, 'Builder', NULL, 'Unique Builders', 'Jaipur', 'uniquecare@uniquegroup.in', NULL, '+91 141 4090777, 2712400', '+91 141 2712402', 'www.uniquegroup.in', NULL, 'http://www.realestatehungama.com/builders/unique-builders.php'),
(29, 'Builder', NULL, 'Unique Dream Builders ', 'Jaipur', 'info@udb.in', NULL, '-4077050', NULL, 'www.udb.in', NULL, 'http://www.realestatehungama.com/builders/unique-dream-builders-group.php'),
(30, 'Builder', NULL, 'Unnati Group', 'Jaipur', 'info@unnatigroup.com', '+91-8696910682, +91-9649111999', '-2336487', NULL, 'www.unnatigroup.com', NULL, 'http://www.realestatehungama.com/builders/unnati-group.php'),
(31, 'Builder', NULL, 'Upasana Group', 'Jaipur', 'sales@upasnagroup.com', '-9314499914', '+91 141 4001567', NULL, 'www.upasnagroup.com', NULL, 'http://www.realestatehungama.com/builders/upasana-colonisers-and-resorts-pvt-ltd.php'),
(32, 'Builder', NULL, 'Vardhman Group', 'Jaipur', 'info@vardhmangroup.org', '+91-8955 442 244, +91-9799 345 111', '-4020450', NULL, 'www.vardhmangroup.org', NULL, 'http://www.realestatehungama.com/builders/vardhman-group.php'),
(33, 'Builder', NULL, 'GKB Group', 'Jaipur', 'info@gkbgroup.org', '+91 99826 78640/41/42/43', '+91 141 300 3794 ', NULL, 'www.gkbgroup.org', NULL, 'http://www.realestatehungama.com/builders/dream-world-infrastructure-limited-dwil.php'),
(34, 'Builder', NULL, 'Omaxe', 'Jaipur', NULL, NULL, '+91-11- 41893100,\n41896680,\n41896776', '#NAME?', 'www.omaxe.com', 'http://www.omaxe.com/send', NULL),
(35, 'Builder', NULL, 'RidhiRaj Builders', 'Jaipur', 'info@ridhirajbuilders.com,\nsales@ridhirajbuilders.co', ' +91 9314 888 858', NULL, NULL, 'http://www.ridhirajbuilders.com', NULL, NULL),
(36, 'Builder', NULL, 'Arihant Prime Builders', 'Jaipur', NULL, '+91-9509404488 , +91-9636120184', '0141-2355721', NULL, 'www.arihantbuilders.com', NULL, NULL),
(37, 'Builder', NULL, 'Urbana Jewels', 'Jaipur', 'sales@urbanajewels.com, customerservice@urbanajewels', '-16214179821', '91-141-5119119 / 5117207', NULL, 'www.urbanajewels.com', NULL, NULL),
(38, 'Builder', NULL, 'VN Buildtech', 'Jaipur', 'info@vnbuildtech.com', ' +91-7877711222', 'SMS VNBT to 56767', NULL, 'www.vnbuildtech.com', NULL, NULL),
(39, 'Builder', NULL, 'Guman Group', 'Jaipur', 'info@gumangroup.com', '-9351050909', '+91-141-5155600 (10 Lines),\n+91-141-4382200 (20', NULL, 'http://www.gumangroup.com', NULL, NULL),
(40, 'Builder', NULL, ' SNG Group', 'Jaipur', ' info@snggroupindia.com, contact@snggroupindia.com', ' +91-9314099999', ' +91-141-2207154,+91-141-4012154 ', NULL, 'www.snggroupindia.com', 'SMS ''SNG'' to 56677 ', NULL),
(41, 'Builder', NULL, 'Apeksha Group', 'Jaipur', 'info@apekshagroup.com', ' +91-9829085860', '-2231837', NULL, 'www.apekshagroup.com', NULL, NULL),
(42, 'Builder', NULL, 'Shree Ram Group', 'Jaipur', 'info@shreeramgroup.com', '+91 99506 12222', '+91 141 276 3839', NULL, 'www.shreeramgroup.com', '1800 200 3737 (Toll Free)', NULL),
(43, 'Builder', NULL, 'Sankalp Group', 'Jaipur', 'info@sankalpbuilders.com', '+91-9314-177-177, +91-9314-222-666 (20 Lines)', '+ 91- 141 4027744/5', NULL, 'www.sankalpbuilders.com', NULL, NULL),
(44, 'Builder', NULL, ' Wish Empire', 'Jaipur', 'we@wishempire.com', '+91-9351555556,\n+91-96025 53333', ' 0141-5115221, 5115220, 4012956', NULL, 'www.wishempire.com', NULL, NULL),
(45, 'Builder', NULL, 'Aradhana Buildtech', 'Jaipur', 'info@aradhanabuildtech.com,\naradhanabuildtech@gmail.', '-8696876464', '0141-2521339', NULL, 'www.aradhanabuildtech.com', NULL, NULL),
(46, 'Builder', NULL, 'Pearl India Buildhome (P) Ltd.', 'Jaipur', 'pearlgroup.vijay@gmail.com,\n pearlgroupjaipur@gmail.', '+91-9571216666, 9571316666 ', '+91 141-4014044', NULL, 'www.pearlgroupindia.com', NULL, NULL),
(47, 'Builder', NULL, 'Anukrriti Group', 'Jaipur', ' sales@anukrritigroup.com', '+91 9352 04-05-06\n', '+91-141-401 0456,+91-141-403 0456', NULL, 'www.anukrritigroup.com', NULL, NULL),
(48, 'Builder', NULL, 'Sun India Developers', 'Jaipur', 'info@sunindiadevelopers.com', '-2365607', '+91 ? 141 ? 4 555 555', NULL, 'www.sunindiadevelopers.com', NULL, NULL),
(49, 'Builder', NULL, 'Arihant Group Builders & Developers', 'Jaipur', 'info@arihantgroupjaipur.com', '+91 141 2970900-(6 lines)', NULL, NULL, 'www.arihantgroupjaipur.com', NULL, NULL),
(50, 'Builder', NULL, 'Ranka Group', 'Jaipur', 'info@rankagroup.in', NULL, '0141-2323711, 0141-4017992 ', ' 0141-2310830', 'www.rankagroup.in', NULL, NULL),
(51, 'Builder', NULL, ' Skyline Builders & Developers', 'Jaipur', '', '+91-8049672433, +91-9414047228,+91-9929101777', '-4029326', NULL, 'www.jaipurpropertybazaar.com', NULL, NULL),
(52, 'Builder', NULL, 'Pinkcity Infracon Pvt. Ltd.', 'Jaipur', 'info@pinkcityinfracon.com', '+91 - 8233774455, 8233884455, 8233664455 ', '-4014054', '-4025330', 'www.pinkcityinfracon.com', NULL, NULL),
(53, 'Builder', NULL, 'Vibrant Pinkcity Buildcon', 'Jaipur', 'vibrantpinkcity@gmail.com, vpb@vibrantpinkcity.com, ', '+91-7793808000, +91-979959964, +91-9799599645,', NULL, NULL, 'www.vibrantpinkcity.com', NULL, NULL),
(54, 'Builder', NULL, 'MegaDream Builders', 'Jaipur', 'info@megadreambuilders.com, anurag@megadreambuilders', '-9001292833', '+91-141-5118184, 2972874', NULL, 'www.megadreambuilders.com', NULL, NULL),
(55, 'Builder', NULL, 'Unimaxe Group', 'Jaipur', 'info@unimaxegroup.in', '(+91)  9828702000', '(+91) 0141-6001600, 6000051', NULL, 'www.unimaxegroup.in, www.unimaxegroup.com', NULL, NULL),
(56, 'Builder', NULL, 'Shri Ram Constructions', 'Jaipur', 'info@shriramconstructions.net', NULL, '-2553290', NULL, 'www.shriramconstructions.net', NULL, NULL),
(57, 'Builder', NULL, 'EMGF', 'Jaipur', 'enquiries@emaarmgf.com', NULL, '-41521075', '-41524539', 'www.emaarmgf.com', NULL, NULL),
(58, 'Builder', NULL, 'Vinayak Group Abode Builders & Colonizers', 'Jaipur', NULL, '+91-9829060699, +91-8049672145', '-7000045', NULL, 'www.vinayakgroup.co', NULL, NULL),
(59, 'Builder', NULL, 'Ashadeep Group', 'Jaipur', ' Info@ashadeepgroup.com ', '-9309320909', '-4012992', NULL, 'www.ashadeepgroup.com', NULL, NULL),
(60, 'Builder', NULL, 'Sanjeevni Group India', 'Jaipur', 'info@sanjeevnigroup.com', '-9314166075', NULL, NULL, 'www.sanjeevnigroup.com', NULL, NULL),
(61, 'Builder', NULL, 'Kotecha Group', 'Jaipur', 'pushpenderhada@kotechagroup.org, sales@kotechagroup.', '-9001919020', '-4015600', NULL, 'www.kotechagroup.org', NULL, NULL),
(62, 'Builder', NULL, 'Shiv Shakti Group', 'Jaipur', 'mail@ssgjaipur.com', '-9196', '-6506515', NULL, 'www.ssgjaipur.com', NULL, NULL),
(63, 'Builder', NULL, 'Cedar Group', 'Jaipur', 'info@cedargroup.in', NULL, '+91-141-514 0514', NULL, 'www.cedargroup.in', NULL, NULL),
(64, 'Builder', NULL, 'IPG Group', 'Jaipur', 'contact@ipggroup.co.in', NULL, '+91-82900 70700', NULL, 'www.ipggroup.co.in', NULL, NULL),
(65, 'Builder', NULL, 'Royal Heritage Propmart Pvt Ltd', 'Jaipur', NULL, ' +91-9928087420', NULL, NULL, NULL, NULL, NULL),
(66, 'Builder', NULL, 'Sanrachna Group', 'Jaipur', ' info@sanrachnagroup.com ', NULL, ' 0141-2708600, 1,2,3,4,5', NULL, 'www.sanrachnagroup.com', NULL, NULL),
(67, 'Builder', NULL, 'Evergreen Buildhome', 'Jaipur', NULL, '-9784581186', NULL, NULL, NULL, NULL, NULL),
(68, 'Builder', NULL, 'Rose Garden Coloniser', 'Jaipur', NULL, '-8952042342', NULL, NULL, 'www.rosegardencoloniser.tradeget.com', NULL, NULL),
(69, 'Builder', NULL, 'Shree Krishnam Group', 'Jaipur', NULL, '-9829206570', '0141-4004404, 0141-5125501', NULL, 'www.shreekrishnamgroup.com', 'Toll Free: 1800-2000-551', NULL),
(70, 'Builder', NULL, ' Aashish Group', 'Jaipur', 'support@aashishgroup.in, info@aashishgroup.in', '-104494', '+91-141-4030050, 4030020 ', NULL, 'www.aashishgroup.in', 'Site Visit: +91 - 9314111', NULL),
(71, 'Builder', NULL, 'Shubhashish Group', 'Jaipur', 'info@shubhashish.org', NULL, '-4033081', NULL, 'www.shubhashish.org', NULL, NULL),
(72, 'Builder', NULL, 'Shree Ram Estate', 'Jaipur', 'info@srgjaipur.com, vrijendra@srgjaipur.com', '+91-95717-08200, 97782-89242', ' 0141-2370627', ' 0141-2370627', 'www.srgjaipur.com', NULL, NULL),
(73, 'Builder', NULL, 'Ansal Properties & Infrastructure Ltd.', 'Jaipur', 'customercare@ansalapi.com\nsalesinfo@ansalapi.com\ninf', NULL, '+91-11-23353550 (24 lines),\n+91-11-66302272-73\n', '+91-11-23322009 ', 'www.ansalapi.com\n', 'Toll Free No.18002665565 ', ''),
(74, 'Builder', NULL, 'Vatika Group', 'Jaipur', ' crm@vatikagroup.com ', '+91-9971003564, +91-9650566000 ', '-4355588', NULL, 'www.vatikagroup.com', NULL, NULL),
(75, 'Builder', NULL, 'Siddha Group', 'Jaipur', 'jaipur@siddhagroup.com', NULL, ' +91 141 237 7777', '+91 141 237 4490', 'www.siddhagroup.com', NULL, NULL),
(76, 'Builder', NULL, 'Amrapali Group', 'Jaipur', NULL, NULL, '0141 401 2555', NULL, 'www.amrapali.in', NULL, NULL),
(77, 'Builder', NULL, 'Adarsh Buildestate Limited', 'Jaipur', 'jaipur@abl.in', NULL, '-50.99999975', '-4003718', 'www.abl.in', 'Toll Free Number: 1800-20', NULL),
(78, 'Builder', NULL, 'Paradise Group', 'Jaipur', 'info@paradisegroupindia.co.in', '+91-9351366669, 9799299222', '0141-5106664, 4030330', '', 'www.aurichomes.com', NULL, NULL),
(79, 'Builder', NULL, 'Auric Group', 'Jaipur', 'sales@aurichomes.com, mail@aurichomes.com, manish.sh', '+91-9251066635, 9251066676, 8130999367, 813099', '0141- 6471001 - 4 (4 lines), +91-129 2666098 ', NULL, 'www.aurichomes.com', NULL, NULL),
(80, 'Builder', NULL, 'Suncity Group', 'Jaipur', 'info@suncityprojects.com', NULL, '0124-4691000', ' 0124-4691010 ', 'www.suncityprojects.com', NULL, NULL),
(81, 'Builder', NULL, 'Aastha Group', 'Jaipur', '  info@aasthagroup.org, sales@aasthagroup.org', '+91-9166657666 ,   \n+91-9799926333 ', '-4107690', NULL, 'www.aasthagroup.org', NULL, NULL),
(82, 'Builder', NULL, 'OSD group', 'Jaipur', NULL, '9.20E+11', '-5049989', NULL, 'www.osdgroup.in', NULL, NULL),
(83, 'Builder', NULL, 'Jupiter Infra', 'Jaipur', NULL, NULL, NULL, NULL, 'www.jupiterinfra.com', 'Toll Free No - 1800-1031-', NULL),
(84, 'Builder', NULL, 'Nirala India', 'Jaipur', ' sales@niralaindia.in ', NULL, '+91 120 4143000 ', '+91 120 4143001', 'www.niralaindia.in', NULL, NULL),
(85, 'Builder', NULL, 'Shubhkamna Properties', 'Jaipur', 'info@shubhkamnaproperties.com', '+91-94140-54347, 94140-54348', NULL, '-2811855', 'www.shubhkamnaproperties.com', NULL, NULL),
(86, 'Builder', NULL, 'Larica Estates Ltd.', 'Jaipur', 'customercare@laricagroup.com\nlaricaestates@yahoo.co.', '+91-98309 11111 / 2 / 3 / 4 / 5', NULL, NULL, 'www.laricagroup.com', NULL, NULL),
(87, 'Builder', NULL, 'Innovative Buildestates Pvt. Ltd.', 'Jaipur', 'info@ibestates.com', NULL, '0124-4604150/51/52', NULL, 'www.ibestates.com', 'Toll Free: 1-800-103-1808', NULL),
(88, 'Builder', NULL, 'Shree Shakambhari Developer', 'Jaipur', ' sales@shakambhari.net, info@shakambhari.net', '+91-9694100014, 9694132120', NULL, NULL, 'www.shakambhari.net', NULL, NULL),
(89, 'Builder', NULL, 'Coral Group', 'Jaipur', 'marketing@coralgroup.co.in', NULL, '+91-141-2222153, 2222156, 2221747', '-4012028', 'www.coralgroup.co.in', 'Toll-Free: 1800-200-5812', NULL),
(90, 'Builder', NULL, 'Om Metals Infraprojects Ltd.', 'Jaipur', 'ommljaipur@yahoo.com, jaipur@ommetals.com', NULL, '+91-141? 2366 679 80, +91-141-5163323-33 ', ' +91-141 ? 2371 ', 'www.ommetals.com', NULL, NULL),
(91, 'Builder', NULL, 'Amit Colonizers Ltd.', 'Jaipur', 'info@amitcolonizers.com, sales@amitcolonizers.com', '+91-80586 80587', '0141-222-333-8 ', NULL, 'www.amitcolonizers.com', NULL, NULL),
(92, 'Builder', NULL, 'GHP Group', 'Jaipur', 'info@ghpcorp.com, infojaipur@ghpcorp.com', NULL, '0141- 2203810/2201454', NULL, 'www.ghpcorp.com', NULL, NULL),
(93, 'Builder', NULL, 'Pachar Group', 'Jaipur', 'info@pachargroup.com', ' +91-9829065331, +91-9829051297', '-2222304', '-2226970', 'www.pachargroup.com', NULL, NULL),
(94, 'Builder', NULL, 'S R Builders & Developers', 'Jaipur', 'info@srbuilderanddeveloper.com\nvedsharma1976@gmail.c', '+91-9828058001, 9829527848, 9782051251', NULL, NULL, 'www.srbuilderanddeveloper.com', NULL, NULL),
(95, 'Builder', NULL, 'Laxmiland Developers', 'Jaipur', ' laxmiland@gmail.com', '+91-731-2572094-95, 9098471717, 98260-76569', NULL, NULL, 'www.laxmiland.com', NULL, NULL),
(96, 'Builder', NULL, 'Blue Heaven', 'Jaipur', 'info@blueheavenhotelsjaipur.com', ' +91 90014 00009, +91 8561820279 ', ' +91 141-4050700', NULL, 'www.blueheavenhotelsjaipur.com', NULL, NULL),
(97, 'Builder', NULL, 'SVT Group', 'Jaipur', ' info@svtgroup.co.in\nmarketing@svtgroup.co.in\nsvtrea', '+91-9772101777, 9352555155 ', NULL, NULL, 'www.svtgroup.co.in', NULL, NULL),
(98, 'Builder', NULL, 'Virat Build Homes Pvt. Ltd. & Construction', 'Jaipur', ' \ninfo@viratconstructions.com', '  +91-93146-50871', '-6538111', NULL, 'www.viratbuildhomes.com', NULL, NULL),
(99, 'Builder', NULL, 'Praxis Developers India Pvt. Ltd.', 'Jaipur', 'info@pdipl.in', '-7957351144', '-4567833', NULL, '', 'Toll Free No. : 1800-103-', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_details`
--

CREATE TABLE IF NOT EXISTS `db_builder_details` (
  `BBZBID` int(11) NOT NULL COMMENT 'Builder Id''s',
  `cmp_name` varchar(255) NOT NULL COMMENT 'Builder''s Company Name',
  `hoal1` varchar(255) NOT NULL COMMENT 'Builder''s Head Office Address Line1',
  `hoal2` varchar(255) DEFAULT NULL COMMENT 'Builder''s Head Office Address Line2',
  `hoac` varchar(255) NOT NULL COMMENT 'Builder''s Head Office Address City',
  `hoas` varchar(255) NOT NULL COMMENT 'Builder''s Head Office Address State',
  `hoap` int(11) NOT NULL COMMENT 'Builder''s Head Office Address Pincode',
  `hoce` varchar(255) NOT NULL COMMENT 'Builder''s Head Office Contact Email',
  `hocm` varchar(11) DEFAULT NULL COMMENT 'Builder''s Head Office Contact Mobile',
  `hocp` varchar(11) DEFAULT NULL COMMENT 'Builder''s Head Office Contact Phone',
  `numOfBranch` int(11) NOT NULL COMMENT 'Builder''s Number of Cities',
  `branch` mediumtext COMMENT 'Builder''s Cities Path',
  `numProjectCity` varchar(255) DEFAULT NULL COMMENT 'Builder''s Number of Projects with city ',
  `about` longtext COMMENT 'Builder''s About Us',
  `aim` text COMMENT 'Builder''s  Aim',
  `website` varchar(255) DEFAULT NULL COMMENT 'Builder''s Website',
  `since` int(11) NOT NULL COMMENT 'Builder''s Since',
  `typeOfConstruction` text NOT NULL COMMENT 'Builder''s Type of Construction',
  `ratings` float(3,2) NOT NULL,
  `numOfRatings` int(11) NOT NULL,
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Builder''s Date Of Entry',
  PRIMARY KEY (`BBZBID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_builder_details`
--

INSERT INTO `db_builder_details` (`BBZBID`, `cmp_name`, `hoal1`, `hoal2`, `hoac`, `hoas`, `hoap`, `hoce`, `hocm`, `hocp`, `numOfBranch`, `branch`, `numProjectCity`, `about`, `aim`, `website`, `since`, `typeOfConstruction`, `ratings`, `numOfRatings`, `dateOfEntry`) VALUES
(1000000, 'fdgdfsg', 'dgdfg', NULL, 'dgf', 'dfgd', 23432, 'dfa', '342423', '45345443', 34, 'gerewger', 'fafdf', 'fadfd', 'fdfdf', 'fdd', 433, 'fdd', 0.00, 0, '2015-06-20 18:31:02'),
(1000001, 'Sand Dune Construction Private Limited', 'Karan Heights, Janpath road\r\n  ', 'Behind Vidhan Sabha, Lal kothi', 'Jaipur', 'Rajasthan', 302016, 'sales@sanddunegroup.com', NULL, '141510400', 2, 'Jaipur, Ganganagar', '52_Jaipur, 28_Ganganagar', 'Best Builder in Rajasthan and Providing best facility from last three Decades.', 'Providing Cheap building facility to all over India.', 'www.sanddunegroup.com', 1990, 'Apartment, Building', 3.75, 12, '2015-06-25 19:52:16'),
(1000002, 'GKB Group', '303-304, PRAKASH DEEP', 'NEAR MAYANK TRADE CENTRE, STATION ROAD', 'JAIPUR ', 'Rajasthan', 302006, 'cmd@gkbgroup.org', NULL, NULL, 1, 'Jaipur', '2_Jaipur', NULL, NULL, 'www.gkbgroup.org', 2014, 'Residential', 4.80, 40, '2015-06-30 13:06:52'),
(1000003, 'Unique Dream Builders', 'UDB Tower, Third Floor, SB-59', 'Opposite Jaipur Nagar Nigam ,Tonk Road,', 'Jaipur', 'Rajasthan', 302015, 'info@udb.in', NULL, '1414090777', 1, NULL, '40_Jaipur', NULL, NULL, 'www.udb.in', 2007, 'Residential', 4.50, 40, '2015-06-30 13:42:25'),
(1000004, 'Omaxe', 'Omaxe City, Villa no. 71A, 111th milestone', 'Near Bad Ke Bala Ji Bus Stand, Jaipur-Ajmer\r\nExpressway', 'Jaipur', 'Rajasthan', 302026, 'info@omaxe.com', NULL, NULL, 7, 'Jaipur,ChandiGarh,Lucknow,Indore,Kanpur,Allahabad,Yamuna Nagar', '70_Jaipur', NULL, NULL, 'www.omaxe.com', 2006, 'Residential', 4.50, 40, '2015-06-30 13:42:36'),
(10000001, 'dezyre', 'kllkj', NULL, 'nkljk', 'kljkl', 1111, 'jkbkj', NULL, NULL, 90, NULL, NULL, NULL, NULL, NULL, 900, 'jnm,', 0.00, 0, '2015-06-26 16:22:45');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_info`
--

CREATE TABLE IF NOT EXISTS `db_builder_info` (
  `BBZBID` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Builder Id''s',
  `fname` varchar(255) NOT NULL COMMENT 'Builder''s First Name',
  `mname` varchar(255) DEFAULT NULL COMMENT 'Builder''s Middle Name',
  `lname` varchar(255) NOT NULL COMMENT 'Builder''s Final Name',
  `email` varchar(255) NOT NULL COMMENT 'Builder''s Contact Email',
  `password` varchar(255) NOT NULL COMMENT 'Builder''s Password',
  `sex` enum('M','F','NS') NOT NULL COMMENT 'Builder''s Sex',
  `dateOfBirth` date NOT NULL COMMENT 'Builder''s DOB',
  `mobile` int(11) unsigned DEFAULT NULL COMMENT 'Builder''s Contact Mobile',
  `phone` int(11) unsigned DEFAULT NULL COMMENT 'Builder''s Contact Phone',
  `line1` varchar(255) NOT NULL COMMENT 'Builder''s Address Line1',
  `line2` varchar(255) DEFAULT NULL COMMENT 'Builder''s Address Line2',
  `place` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL COMMENT 'Builder''s Address City',
  `state` varchar(255) NOT NULL COMMENT 'Builder''s Address State',
  `pincode` int(11) unsigned NOT NULL COMMENT 'Builder''s Address Pincode',
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`BBZBID`),
  UNIQUE KEY `email` (`email`),
  KEY `BBBID` (`BBZBID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Builder''s Biodata' AUTO_INCREMENT=10000002 ;

--
-- Dumping data for table `db_builder_info`
--

INSERT INTO `db_builder_info` (`BBZBID`, `fname`, `mname`, `lname`, `email`, `password`, `sex`, `dateOfBirth`, `mobile`, `phone`, `line1`, `line2`, `place`, `city`, `state`, `pincode`, `dateOfEntry`) VALUES
(1000000, 'Ravi', '', 'Kumar', 'rkumar@buildblockz.com', '952a7c238933b79813ee1e70179d52635c0b6c7c', 'M', '1994-12-09', 989898, 7770, 'Jaipur', '', 'ggkjg', 'Jaipur', 'Rajasthan', 0, '2015-06-27 01:58:55'),
(1000001, 'Sandunes', NULL, 'Company', 'info@sanddunegroup.com', '952a7c238933b79813ee1e70179d52635c0b6c7c', 'M', '2015-06-10', NULL, NULL, 'Jaipur', NULL, 'Jaipur', 'Jaipur', 'Rajashtan', 101010, '2015-06-27 12:38:42'),
(1000002, 'Subhash ', NULL, 'Agarwal', 'cmd@gkbgroup.org', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'M', '2015-06-01', NULL, NULL, 'Jaipur', NULL, 'Jaipur', 'Jaipur', 'Rajasthan', 302006, '2015-06-30 12:54:10'),
(1000003, 'Ajit', NULL, 'Singh', 'info@udb.in', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'M', '2015-06-01', NULL, NULL, 'Jaipur', NULL, 'Jaipur', 'Jaipur', 'Jaipur', 302015, '2015-06-30 12:54:10'),
(1000004, 'Pavan', NULL, 'Agarwal', 'info@omaxe.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'M', '2015-06-01', NULL, NULL, 'Jaipur', NULL, 'Jaipur', 'Jaipur', 'Jaipur', 110019, '2015-06-30 13:00:03'),
(10000001, 'Ravi', NULL, 'Kumar', 'ravi@dezyre23.com', '0000', 'M', '2015-06-17', NULL, NULL, 'dfafad', NULL, 'sdfds', 'sfdfsdffds', 'sdfsf909', 909090, '2015-06-23 09:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_keywords`
--

CREATE TABLE IF NOT EXISTS `db_builder_keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(43) DEFAULT NULL,
  `keywords` varchar(183) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `db_builder_keywords`
--

INSERT INTO `db_builder_keywords` (`id`, `cmp_name`, `keywords`) VALUES
(1, 'Akshat Apartments Pvt. Ltd.', 'jaipur akshat akhsatt aksath akshath aksat aksath akshatt apartment apartments aparatment pvt ltd pvt. ltd. apartments apart private limited'),
(2, 'Anukampa Group', 'jaipur anukampa anikapa anukapa anukampaa anukmpa grp group grup anukampas '),
(3, 'ARG Group', 'jaipur arg atma ram gupta argroup arggroup grp group grup groups groups'),
(4, 'Ashapurna Buildcon Limited', 'jaipur ashapurna asharpoorna asapurna aashapurna ashapurn buildcon buildcone asapoorna purna builder builders build com con limited ltd ltd. abl'),
(5, 'Ashiana Housing Ltd.', 'jaipur ashiana aashiana ashiaana asiana asiaana housing hosing houseing aasiana asianaa ashianaa ltd ltd. limited '),
(6, 'Debock Group', 'jaipur devock debock debok deboc devok devoc deback dibock divock grp group grup'),
(7, 'Dream World Infrastructure Limited (DWIL)', 'jaipur dream dreem drim driem dreim infra ionfrastructure infrastructure structure'),
(8, 'Dhanuka Group', 'jaipur dhanuka danuka dhaanuka dhanukaa danukaa daanuka daanukaa grp group grup'),
(9, 'Finetech Developers Pvt. Ltd.', 'jaipur finetech fintech finetek fintek fintec finetec fineteck finteck fynetech fynetek fynetec developer dveloper dveleper develeper developers pvt ltd pvt. ltd.'),
(10, 'Gurupragya Real Mart Pvt. Ltd.', 'jaipur guru gurupragya guroopragya guruparagya gurooparagya maart pvt ltd pvt. ltd.'),
(11, 'Joy Bharat Group Builders & Developers', 'jaipur joy joe joye bharat bhaarat barat baarat developer dveloper dveleper develeper developers'),
(12, 'Landmark Builders and Developers', 'jaipur landmark landmarck lndmark lendmark lendmarck developer dveloper lbd dveleper develeper developers'),
(13, 'Mahima Group', 'jaipur mahima maheema mahimaa mahiema mhima grp group grup'),
(14, 'Manglam Group', 'jaipur magal manglam manglum munglam munglum mungalam mangalam mungalum grp group grup'),
(15, 'Neelkanth Constructions', 'jaipur neelkanth nielkanth nilkanth neelkant nielkant nilkant kneelkanth knielkanth knilkanth kneelkant'),
(16, 'Neelkanth Nirman', 'jaipur neelkanth nielkanth nilkanth neelkant nielkant nilkant kneelkanth knielkanth knilkanth kneelkant nirman nirmaan nerman nermaan nirmaand nirmand'),
(17, 'Okay PLUS Group', 'jaipur okay okie plas plass pluss plus plos ploss ok okk plaas grp group grup'),
(18, 'Orior Developers & Infrastructure Pvt. Ltd.', 'jaipur orion orior oriur oriun ouriour ourior ourion ouriun developer infra ionfrastructure infrastructure structure developer dveloper dveleper develeper developers pvt ltd pvt. ltd.'),
(19, 'Palash Group', 'jaipur plash palash palas plas palaash palaas palaash palaas grp group grup'),
(20, 'Safe Infraprojects Pvt. Ltd.', 'jaipur safe saf sef saif saef infra projects pvt ltd pvt. ltd.'),
(21, 'Shivgyan Developers Pvt. Ltd.', 'jaipur shivgyan shivgyaan shivjnana sivgyaan sivgyan developer dveloper dveleper develeper developers  pvt ltd pvt. ltd.'),
(22, 'Sun n Moon Group', 'jaipur sun and moon mun san son mun soun moun'),
(23, 'Sand Dune Construction Private Limited', 'jaipur sand dune send dun doon snd duen deun saned saind don doun pvt ltd pvt. ltd. private limited sandy sands sands sande sandie sandei dunes sdc'),
(24, 'Pearl Spytech', 'jaipur pearl prl parl pal spy tech spytech spitech spi pral preal'),
(25, 'Sunny Group', 'jaipur sunny sunni sun sonny sonni suni soni sooni soony sony suny'),
(26, 'Swift Builders and Developers', 'jaipur swift swif sift siff shift sit developer dveloper dveleper develeper developers'),
(27, 'Timurty Colonizers & Builders Pvt. Ltd.', 'jaipur timurty timurthy timoorti timoorthy trim trimoorthy trimurty trimoorti timurti timurtee trimurthy pvt ltd pvt. ltd.'),
(28, 'Unique Builders', 'jaipur unique uniq unik unic unike uniqe younique uni younik youniq'),
(29, 'Unique Dream Builders ', 'jaipur unique uniq unik unic unike uniqe younique uni younik youniq dream drem dram dreem driem dreim'),
(30, 'Unnati Group', 'jaipur grp group grup unati unnatee unnat unatti unnatti unnattee oonnati onnati onatti'),
(31, 'Upasana Group', 'jaipur grp group grup upasna upasana upaasna upaasana oopasna oopasana'),
(32, 'Vardhman Group', 'jaipur grp group grup vardhman vardhmaan vardman vardmaan wardhmaan wardman wardmaan vrdhman vrdhmaan'),
(33, 'GKB Group', 'jaipur gkb grp grp. Group grup builders and developers builder developer'),
(34, 'Omaxe', 'jaipur omaxe grp grp. omaxe grup  omax omake omakes'),
(35, 'RidhiRaj Builders', 'jaipur ridhiraj grp grp. builders grup and developers builder developer riddhiraj ridiraj'),
(36, 'Arihant Prime Builders', 'jaipur arihant prime builders grp grp. builder grup  arihant prim pryme'),
(37, 'Urbana Jewels', 'jaipur urbana jewel jewels grp grp. grup group urban arbana arban jwells jwell'),
(38, 'VN Buildtech', 'jaipur vn grp grp. buildtech grup builders vn buildtec buildteck buildtek'),
(39, 'Guman Group', 'jaipur guman grou group grp grp. grup gooman gumaan'),
(40, ' SNG Group', 'jaipur sng grp grp. roup grup builders and developers builder developer sng sngg'),
(41, 'Apeksha Group', 'jaipur apeksha grou group grp grp. grup group upeksha '),
(42, 'Shree Ram Group', 'jaipur shree shri sri ram raaam grp group grp. Grup srg'),
(43, 'Sankalp Group', 'jaipur sankalp grp group grup grop'),
(44, ' Wish Empire', 'jaipur wish empire mpire umpire wis wiss'),
(45, 'Aradhana Buildtech', 'jaipur aradhana aradhna aaradhna aaradhana buildteck build buildtech buildtec buildtek'),
(46, 'Pearl India Buildhome (P) Ltd.', 'jaipur pearl prl parl pal india buildhome buildhom pral preal'),
(47, 'Anukrriti Group', 'jaipur anukrriti group grp grp. grup anukrriti anukriti anukritti anukrritti'),
(48, 'Sun India Developers', 'jaipur sun india developers develop developer sun india son sone'),
(49, 'Arihant Group Builders & Developers', 'jaipur arihant group builders & developers grp grp. develop grup  arihant groups'),
(50, 'Ranka Group', 'jaipra ranka grou group grp grp. grup group ranka aanka arban jwells jwell'),
(51, ' Skyline Builders & Developers', 'jaipur skyline builders & developers grp grp. develop grup  skyline buil pryme and skilin skiline skylyne skylane'),
(52, 'Pinkcity Infracon Pvt. Ltd.', 'jaipur pink city pinkcity infracon infra infracone pvt ltd pvt. ltd. private limited '),
(53, 'Vibrant Pinkcity Buildcon', 'jaipur vibrant pinkcity buildcon grp grp. buildco grup  vibrant pink vbp pinkcity viberant ybranyt build buildcone pink city'),
(54, 'MegaDream Builders', 'jaipur megadream builders and developers builder mega dream megadreem dreem '),
(55, 'Unimaxe Group', 'jaipun unimax unimaxe unimake unimak grp group grup grp.'),
(56, 'Shri Ram Constructions', 'jaipur shri ram constructions grp grp. construction constructions sri shree '),
(57, 'EMGF', 'jaipur emaar emgf mgf developments pjsc properties dubai'),
(58, 'Vinayak Group Abode Builders & Colonizers', 'jaipur vinayak vinayaka adobe abode builder builders grp group grup grp. nd & and colonizers coloniosers colonizer coloniser'),
(59, 'Ashadeep Group', ' jaipur asadeep ashadeep grp group grup asadip ashadip aashadeep aashadip aasadeep aasadip grp.'),
(60, 'Sanjeevni Group India', 'jaipur sanjeevni sanjivni sanjeevani sanjivani froup grp grup india grp.'),
(61, 'Kotecha Group', 'jaipur kotecha kottecha group grp grp.'),
(62, 'Shiv Shakti Group', 'jaipur shiv ssg shakti shaktee shkti shktee group grp grup shiva'),
(63, 'Cedar Group', 'jaipur cedar group grp grup cedaar sedar sedaar luxury'),
(64, 'IPG Group', 'jaipur ipg grp grup group grp.'),
(65, 'Royal Heritage Propmart Pvt Ltd', 'jaipur royal heritage royale haritage propmart pvt ltd private limited pvt. ltd.'),
(66, 'Sanrachna Group', 'jaipur sanrachna sunrachna group grp grup sanarachna sanrachana grp.'),
(67, 'Evergreen Buildhome', 'jaipur evergreen evergrin buildhome bildhome build home'),
(68, 'Rose Garden Coloniser', 'jaipur rose garden colonizer coloniser ross ros graden garten'),
(69, 'Shree Krishnam Group', 'jaipur shree shri sri sree krishna krishnam krisna krisnam grp grup group grp.'),
(70, ' Aashish Group', 'jaipur aashish ashish asish aasish grp group grup grp.'),
(71, 'Shubhashish Group', 'jaipur shubhashish shubhaashish shubashish shubaashish shubhaasish subhaasish group grp grup grp.'),
(72, 'Shree Ram Estate', 'jaipur shree shri sri sree ram raam group grp grup grp. srg estate shri nath state'),
(73, 'Ansal Properties & Infrastructure Ltd.', 'jaipur ansal unsal prop properties & and infra infrastructure ltd limited ltd.'),
(74, 'Vatika Group', 'jaipur vatika group grp grup grop vaatika watika grp.'),
(75, 'Siddha Group', 'jaipur siddha sidha sidhdha group grp grup grp.'),
(76, 'Amrapali Group', 'jaipur amrapali umrapali group grup grop grp amarapali umarapali grp.'),
(77, 'Adarsh Buildestate Limited', 'jaipur adarsh builder buildestate limited ltd estate ltd.'),
(78, 'Paradise Group', 'jaipur paradise paradize grp group grup grop grp.'),
(79, 'Auric Group', 'jaipur auric group grp grup grop oric aurik orik grp.'),
(80, 'Suncity Group', 'jaipur suncity sun city group grp grop grup grp.'),
(81, 'Aastha Group', 'jaipur astha aastha group grp grup grop grp.'),
(82, 'OSD group', 'jaipur osd om sokhal developers developer sokal grp group grup grop grp.'),
(83, 'Jupiter Infra', 'jaipur jupiter infra infrastructure joopiter'),
(84, 'Nirala India', 'jaipur nirala india niraala neerala india'),
(85, 'Shubhkamna Properties', 'jaipur shubhkamna shubkamna shubhkamana shubkamana property properties'),
(86, 'Larica Estates Ltd.', 'jaipur larica estates states ltd limited lerica lareeca larika lerika ltd.'),
(87, 'Innovative Buildestates Pvt. Ltd.', 'jaipur innovative inovative enovative ennovative build estates buildestates pvt private limited ltd pvt. ltd.'),
(88, 'Shree Shakambhari Developer', 'jaipur shree sri shri shakambhari sakambhari sakambari shakambharee developer developers'),
(89, 'Coral Group', 'jaipur coral group grp grup gropkoral keral koral grp.'),
(90, 'Om Metals Infraprojects Ltd.', 'jaipur om metal metals infra infraprojects ltd limited metal ltd.'),
(91, 'Amit Colonizers Ltd.', 'jaipur amit colonizer colonizers limited ltd ltd.'),
(92, 'GHP Group', 'jaipur ghp group grp grup grop grp.'),
(93, 'Pachar Group', 'jaipur pachar group grp grup grop paachar pachr pachaar prachar prachaar grp.'),
(94, 'S R Builders & Developers', 'jaipur sr builders srb srbd and developer developers'),
(95, 'Laxmiland Developers', 'jaipur laxmi lakshmi laxmiland land lakshmiland developer developers'),
(96, 'Blue Heaven', 'jaipur blue heaven haven heven blu'),
(97, 'SVT Group', 'jaipur svt group grp grup grop grp.'),
(98, 'Virat Build Homes Pvt. Ltd. & Construction', 'jaipur virat build homes home bild pvt private limited mtd construction pvt. ltd.'),
(99, 'Praxis Developers India Pvt. Ltd.', 'jaipur pdipl praxis paraxis paraksis developer developers india private limited pvt ltd ltd. pvt.');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_messages_1000001`
--

CREATE TABLE IF NOT EXISTS `db_builder_messages_1000001` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BBZUID` int(11) NOT NULL,
  `sendby` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `file` longblob,
  `dateOfMessage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `db_builder_messages_1000001`
--

INSERT INTO `db_builder_messages_1000001` (`id`, `BBZUID`, `sendby`, `message`, `file`, `dateOfMessage`) VALUES
(1, 100000016, 'Yogesh', 'hey', NULL, '2015-06-29 00:12:31'),
(2, 100000016, 'ravi', 'k', '', '2015-06-29 00:14:32'),
(3, 100000016, 'ravi', 'k', '', '2015-06-29 00:15:33'),
(4, 100000016, 'ravi', 'hey', '', '2015-06-29 00:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_project`
--

CREATE TABLE IF NOT EXISTS `db_builder_project` (
  `BBZBID` int(11) NOT NULL COMMENT 'Builder''s Id',
  `rating` decimal(3,2) unsigned zerofill NOT NULL DEFAULT '0.00' COMMENT 'Builder''s Rating',
  `numRatings` int(11) unsigned zerofill NOT NULL DEFAULT '00000000000' COMMENT 'Builder''s Number of Ratings',
  `reviews` varchar(255) NOT NULL COMMENT 'Builder''s Reviews by Users',
  `numReviews` int(11) unsigned zerofill NOT NULL DEFAULT '00000000000' COMMENT 'Builder''s Number of Reviews',
  `numOldProjects` int(11) unsigned zerofill NOT NULL DEFAULT '00000000000' COMMENT 'Builder''s Number of Old Projects',
  `oldProjects` varchar(255) NOT NULL COMMENT 'Builder''s Of Old Projects',
  `numOngoingProjects` int(11) unsigned zerofill NOT NULL DEFAULT '00000000000' COMMENT 'Builder''s Number of Ongoing Projects',
  `ongoingProjects` varchar(255) NOT NULL COMMENT 'Builder''s Ongoing Projeccts',
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Builder''s Date of Entry'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_projects`
--

CREATE TABLE IF NOT EXISTS `db_builder_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BBZPID` int(11) NOT NULL,
  `BBZBID` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `rating` float(3,2) DEFAULT NULL,
  `numOfRatings` int(11) NOT NULL,
  `bank_approval` mediumtext,
  `address` varchar(255) NOT NULL,
  `constructionType` varchar(255) NOT NULL,
  `constructionTypeDetail` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `features` mediumtext,
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `BBZPID` (`BBZPID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_builder_projects`
--

INSERT INTO `db_builder_projects` (`id`, `BBZPID`, `BBZBID`, `project_name`, `status`, `rating`, `numOfRatings`, `bank_approval`, `address`, `constructionType`, `constructionTypeDetail`, `price`, `start_date`, `end_date`, `features`, `dateOfEntry`) VALUES
(1, 1000001001, 1000001, 'Sample Project 1', 'completed', NULL, 0, '', 'Sample Address with City.', 'Residential', 'Parking Slot, 2 Lifts', 3004000, '2015-06-02', '2015-06-05', NULL, '2015-07-10 11:25:20'),
(2, 1000001002, 1000001, 'Sample Project 2', 'completed', NULL, 0, '', 'Sample Address with City.', 'Residential', 'Parking Slot, 2 Lifts', 984033324, '2015-06-09', '2015-06-17', NULL, '2015-07-10 11:25:25');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_request`
--

CREATE TABLE IF NOT EXISTS `db_builder_request` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `cmp_name` varchar(255) NOT NULL DEFAULT 'RAND()*999999999999',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`),
  UNIQUE KEY `cmp_name` (`cmp_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=230 ;

--
-- Dumping data for table `db_builder_request`
--

INSERT INTO `db_builder_request` (`index`, `cmp_name`, `name`, `email`, `contact`, `city`, `location`, `dateOfEntry`) VALUES
(13, 'daf', 'rohan', 'ravi@dezyre.com', 342, 'dfsfs', '', '2015-06-18 10:23:45'),
(179, '', '', '', 0, '', '', '2015-06-18 15:56:51'),
(187, 'sadkasj', 'rohan', 'ravi_5513@nda.com', 3253, 'dsgf', '', '2015-06-18 16:09:11'),
(189, 'dzvdxz', 'rohan', 'ravi@dezyre.com', 685858, 'dfsfs', '', '2015-06-18 16:35:28'),
(191, 'gdsa', 'patient1', 'dsfs@dezyre.com', 34324, 'dsg', '', '2015-06-18 18:00:19'),
(194, 'sfgdf', 'rohan', 'ravi@dezyre.com', 4634, 'dfsfs', '', '2015-06-18 18:21:43'),
(195, 'dsf', 'sdf', 'ravi@dezyre.com', 32425, 'dfdsf', '', '2015-06-18 18:23:34'),
(197, 'uigk', 'nv hvkj', 'ravi_5513@nda.com', 7589, 'dsadsdas', '', '2015-06-18 18:31:48'),
(199, 'dgs', 'rohan', 'ravi_5513@nda.com', 546, 'dfsfs', '', '2015-06-18 18:38:25'),
(201, 'lgkljb', 'ffhkl', 'ravi@dezyre.com', 7867890, 'ggvkj', '', '2015-06-18 18:48:43'),
(204, 'fdhdhsd', 'dgh', 'ravi_5513@nda.com', 5654, 'dfg', '', '2015-06-18 19:06:19'),
(206, 'dzvdxzwt', 'wtry', 'ravi@dezyre.com', 46, 'dfsfs', '', '2015-06-18 19:12:46'),
(208, 'arer', 'rohan', 'ravi2013@iitg.ac.in', 4542, 'dfsfs', '', '2015-06-18 19:14:28'),
(216, 'dafdf', 'dsfdfd', 'ravi@dezyre.com', 2323, 'dfsfs', '', '2015-06-20 18:52:47'),
(218, 'dafdfdjfjsfjkd', 'dsfdfd', 'ravi@dezyre.com', 2323, 'dfsfs', '', '2015-06-20 18:52:55'),
(220, 'kumar', 'dsfdfd', 'ravi@dezyre.com', 2323, 'dfsfs', '', '2015-06-20 18:53:10'),
(223, 'jhkjkl', 'rohan', 'ravi@dezyre.com', 798, 'dsadsdas', '', '2015-06-29 13:48:53'),
(225, 'dafsdd', 'rohan', 'ravi@dezyre.com', 12, 'dfsfs', '', '2015-06-29 13:51:04'),
(227, 'sadaf', 'rohan', 'ravi@dezyre.com', 312, 'dfsfssad', '', '2015-06-29 13:51:47'),
(229, 'kdashk', 'rohan', 'ravi@dezyre.com', 789, 'dfsfs', '', '2015-06-29 13:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_reviews`
--

CREATE TABLE IF NOT EXISTS `db_builder_reviews` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `BBZBID` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `BBZUID` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `dateOfReview` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `db_builder_reviews`
--

INSERT INTO `db_builder_reviews` (`index`, `BBZBID`, `id`, `BBZUID`, `verified`, `name`, `rating`, `review`, `dateOfReview`) VALUES
(1, 1000001, NULL, 100000016, 'verified', 'Yogesh', 4, 'Very Co-operataive Builder. \r\n', '2015-07-06 18:12:35'),
(2, 1000001, NULL, 100000017, 'verified', 'Ravi', 5, 'Awesome Work from Builder.', '2015-07-05 22:02:42'),
(3, 1000001, NULL, 10000017, 'verified', 'ravi', 3, 'f', '2015-07-05 23:35:50'),
(12, NULL, 1, 0, 'unverified', '', 3, 'M happy with their performance', '2015-07-07 15:41:08'),
(11, 1000001, NULL, 1000001, 'unverified', 'ravi', 4, 'halwa', '2015-07-07 12:48:21'),
(10, 1000001, NULL, 1000001, 'unverified', 'ravi', 4, 'Good one', '2015-07-06 23:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `db_builder_update`
--

CREATE TABLE IF NOT EXISTS `db_builder_update` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `BBZBID` int(11) NOT NULL,
  `cmp_name` varchar(255) DEFAULT NULL,
  `hoal1` varchar(255) NOT NULL,
  `hoal2` varchar(255) DEFAULT NULL,
  `hoac` varchar(255) NOT NULL,
  `hoas` varchar(255) NOT NULL,
  `hoap` int(11) NOT NULL,
  `hoce` varchar(255) NOT NULL,
  `hocm` int(11) DEFAULT NULL,
  `hocp` int(11) DEFAULT NULL,
  `numOfBranch` int(11) DEFAULT NULL,
  `branch` varchar(255) NOT NULL,
  `numProjectCity` varchar(255) DEFAULT NULL,
  `about` longtext,
  `logo` longblob,
  `logoType` varchar(255) DEFAULT NULL,
  `aim` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `since` int(11) DEFAULT NULL,
  `typeOfConstruction` mediumtext,
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `db_builder_update`
--

INSERT INTO `db_builder_update` (`index`, `BBZBID`, `cmp_name`, `hoal1`, `hoal2`, `hoac`, `hoas`, `hoap`, `hoce`, `hocm`, `hocp`, `numOfBranch`, `branch`, `numProjectCity`, `about`, `logo`, `logoType`, `aim`, `website`, `since`, `typeOfConstruction`, `dateOfEntry`) VALUES
(1, 1000000, 'dfdf', 'dffddf', NULL, 'dfds', 'dvcv ', 245243, 'fdgdfsd', 2342, 234, 234, 'dffd', '23', 'dvzvcdf', 0x64667364, NULL, 'dff', 'dfd', 234, 'dfddsf', '2015-06-20 18:28:45'),
(3, 1000000, 'buildblockz', 'dgdfg', '', 'dgf', 'dfgd', 23432, '', 342423, 45345443, 0, 'gerewger', 'fafdf', 'fadfd', '', NULL, 'fdfdf', 'fdd ', 433, '', '2015-06-21 20:24:15'),
(4, 10000001, 'dezyre', 'kllkj', '', 'nkljk', 'kljkl', 1111, '', 0, 0, 0, 'bangalore', '23_bangalore', '', 0x6261636b67726f756e645f77616c6c5f627269636b5f736964655f37363631315f3338343078323430302e6a7067, NULL, '', ' ', 900, '', '2015-06-26 11:26:17'),
(5, 10000001, 'dezyre', 'kllkj', '', 'nkljk', 'kljkl', 1111, '', 0, 0, 90, 'kugiol', '23_bangalores', 'heyds', '', '', 'adas', ' ', 900, NULL, '2015-06-26 12:47:11'),
(6, 10000001, 'dezyre', 'kllkj', '', 'nkljk', 'kljkl', 1111, '', 0, 0, 90, 'bangalore', '23_bangalore', 'hey', 0xffd8ffe2021c4943435f50524f46494c450001010000020c6c636d73021000006d6e74725247422058595a2007dc00010019000300290039616373704150504c0000000000000000000000000000000000000000000000000000f6d6000100000000d32d6c636d7300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000a64657363000000fc0000005e637072740000015c0000000b777470740000016800000014626b70740000017c000000147258595a00000190000000146758595a000001a4000000146258595a000001b80000001472545243000001cc0000004067545243000001cc0000004062545243000001cc0000004064657363000000000000000363320000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000074657874000000004642000058595a20000000000000f6d6000100000000d32d58595a20000000000000031600000333000002a458595a200000000000006fa2000038f50000039058595a2000000000000062990000b785000018da58595a2000000000000024a000000f840000b6cf63757276000000000000001a000000cb01c903630592086b0bf6103f15511b3421f1299032183b92460551775ded6b707a0589b19a7cac69bf7dd3c3e930ffffffe000104a46494600010100000100010000ffdb0043000503040404030504040405050506070c08070707070f0b0b090c110f1212110f111113161c1713141a1511111821181a1d1d1f1f1f13172224221e241c1e1f1effdb0043010505050706070e08080e1e1411141e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1e1effc200110800a0032003012200021101031101ffc4001c0001000202030100000000000000000000000607040501020308ffc4001b01010002030101000000000000000000000002040103050607ffda000c03010002100310000001b940000000000000000000000000000000000000000000000000000000000000000000000000020d39ae2aded5f7d573cceefbf9ebfdac53d86fe23e5af6c97234de398cde5946ec2c54ba187997f9219c0000000000000000000000000000000000000000000000000000000000000003132d860422c6afeadc8ee76167733b560f4da73dcf37aa8fcd78d5ba9ff6dbc678fe86556053571f4f91d85ce68000000000000000000000000000000000000000000000000000000000000000082ceabdab7753de3db1e7776e4e78e7b7e54084c064581c7f458176d5d6958a9d8743900000000000000000000000000000000000003a31dd1cd35be7cf105f6cc268884974daca1a6d0000000000000000000002113782d6b9a3f4c4e9c7f45697357f95ee4d91a187796c78e462cc35efdb4c38e7a1c4c7c28cd55674df6a093c5fd95f3b58da7338509d7763e81ed446f7566d4504db8bf78a0f591cfd3d831aaa62bed413662fdc9f9de57ab374b8e75c9afd852738daea09bb17ea821f41e57ce7ef8cfd13cd3f6969ce779fa44ab464cadba558598acd9599dab1f7c2cc446596f63a614435c6c178fb5ad800d74a1ef05ef93d4f3d8993ddb7575e3cf518d7e595db034eab67d34db8e5fb17845741cfd563ab5e4b255b0b3bd6b593cf323f2f486ed94c7b4664db6413cbcf4f17a3aa7bed59d87667e900dfd73439bb8edd25156a6bfafac6252df4f2113ebd782f5f4127709a97a27dbc72795e8bb75b71d3e0537aebd70670a631e5d11af66d494d176c6fad1fa23eaba03a7ce88f1cf5b4db5a5a0b779f2f977cb69a9bb1986e6c5de5297cb5ceeb4bd0874ede7705596fe8cfa9aad82a473c5ec7959f0afa2b9f2daf2432a22f7d14b1f33b3b07a30f3efe37c549513e972d31b71de5117f39beb18d69775c28eaa551c976cce232db658989b6c18e22731834d6a43220d39834716164e364f4f781e55bce2b8eb79cdf718bdecd2f4c4f5d4cb4e5e6f2f01e85859be328ee249059afa0b105dceaac0e659c4e768bfbb56da08dc76c28655d72f89cb625aa3ccce11bbdb2da4575ba9a9afdfd37d2dbbb35fb42c6c8ae96c457ad0bd0cfaa8e7f3fb79e1cf356998669dcee866486cca0f52ee9bdf43b3e47a0b539e39f45e480e955daf02e775237b8c1ef47a5697cfbf417cf9e9fcb43baf6eb69685bd50dbdcd97cc9aadaeaaf43e9cdd69b73427f3568f79a3e9c3caeda4aeda92b36b8b16b1d39aaf5b9b85763bafa57e6afa5694bddd3cf19f7d6e6e131f3560e760f4e1e1f467ce7f46519ca7e61fa8be739e230e78b789e59b53db1e7e31aebb597c315dac46ccd77dac2e84227d0dda698ee20d3983616164e364f4f7818d5e5975cf4789b01629b51b7c1d9a78e7c3dfe7ddc71cf1ae5acb06b7b0bd85589d835fd81c9ea648bdb403a4674c6530b9843eb423fedb6916310798c73cf4c6c3e741bde96eec3649e3ed5e69d3a78ef5f4e471b32eb8f497a9d60b364042a6b06ab7623e9eb9dccef5a0e39ee79338672ade555ef2fb1df3f552aaf6e69405fd49fa2f355e71caee2c9b83e77b728e699d2edb12c63e92dc6144a9caa4d1c8e39d18795db4ad875b36ad3565e1d5cd1bda57a3bf9cafa57e6ab2abe3695c486b0df1b2ad5a52715654fe0ed755d08f87d19f3cdaf5656750124ae678f3e9df99acb9ef7e9c5c614c2b5e7442c956a966caf3ae46d732333d932a0f3aafb5e2c0f7ad52cd94ad45970cd4ee7a74b9e71b27afca79fa70ce973751efc1ce66a31e55b2f60cf723d9d5aea631fd272b559cac5b6567715909cc2b1fb6b8d811d9644ec4f999c2e69627e71796279adf672188f374cdb32b09dda9f9539bad7d1e579e5fbc96a54f1df79c6b6efe24d5f5bf637e6c5a5359deef64e143e45caef64b5bdaade957ac63c6c52cbe9d38ccf13c7df691ce0db5d72fabc1e23526e2d52f93bc7e93adf746b5ed2ef79a09686fec0d19c9a4af0af738a256436ab79c6c3691c49722098da1bfc88dfa50e8eef0f038ce7db0737299f2c7dc64c552ebaeaed661482dbc0dbaab2eb65e5ce158dc1bd996353cf2196a9b51aa6d46a9b5189961d75db31aa6d46a9b51abf5cf315475b2b577f9306f1b03b6635ae7d89b2d3674dbde557a0074d66d8681bf1a06fc693679018b94317281d7b7435fa5d3cc8d668bca678c44b0fd3b57afb1d4759be731aedc4f58864ccd9b5a7dc27b62f95be6bd91de246c4f43d242463fdb7cce3132cd9a83201c723a73d800070e479c3a5f57a3956556d65e33c39673c71d86269e46c2bed35b48ca96f3bafc356ca7fdecad66bd911f4db6a74edf2b62b7b2ae550dda8000000000000000000000000000060e7470d14c349e26ba65a9d71abdaeff00a91b96e1ed0864ef49bb00ffc40032100001040103030303030305010100000003000102040506111410121513203422323321313516406023242536503070ffda0008010100010502ff00f49d41c9e4ff00c8a3f3dddfc8b2eec8a696497fbb71ca5968c836b2f17af972338c91247fc67546fccde7b33ba33769e5352dd33ee53fe46fbcbb35ca370b50f50f0b20ff00182d7095f875567a42ab6a36072556519d9e0d45e3a96f3a1564aee3a636fa7d4fa560ad30ed7f8d6a418496bd0ab00d2f4792decce8a15edb947bd6984765bfc6b508a73b3204de9d2ae46b6decd523720f8c6651aa650fb7fc675349a36fbe0b1ecfcd6f66a8b2c5b4cff4e359c979bff525268b59cbd71a9668fbb66ca9b36ea39b86f5ce33c3fbfce9651bc52bc6752c3f27955972aba264e8c158cd3121233bca774af1d39588c24730c31f2155790aabc85551bf5644358105bc8555e42aa15dae5216d8053f2155790aabc8554f91a8cd22c222f2155790aabc8555e42aa05909fd85b95c73f2155790aabc8555e42b26b95d449097b244845fd512f544bd512f544bd5126241fabbb33449093fbac9c601d931efcc75c715dacb664fdacd68919cf196640b0397747a48e28ae4817240b9205c80281212eae4833b3b3b7b2538c57ac24dfaa3bec226689194b25724f0b39022107232457b42556dd999c2ced0eb9f986179cb5e72deba6e34a613062423566619aa8da1e8cd60f1b4cccdd3584a50a52cc5a69799b6bccdb58eb86b19dd54493559662d33f99b6b4c5a31737a92c10394f336d799b6bccdb5732162ccac4de5a7df29642bccdb5e66da9666df6e8734e49baea2b24af98f336d799b6bccdb5e66da6cc1d432dfae3f524c4f52c8ac8965be490f084f9435ca1ae50d7286a06849e95b9c2517ee6c97c4115c240bf70fd976d8eb427ead9275292236948961e218331e3d93c493beb3fe8d72d48b29d81c5f9305c98ae4c57262845692a16dddd64be5e24ef27eb6ef4608e6558ce4255eef4b505870d78c556aaf27102018dab9b318cf27c003d49fb35001cb71abbb2e3bc90a99236238db3b96a4fb383292085a131c0a22e1f2122416b389258f7897b93ac0c273ca6ab811e83f7293ecb4a00cd92d5c33f2f69b7493ecc209cb22c26f80b10b1eaf4faa52d12128d37edd3578cfe4b693329beccc3b0edddfaf4d39959e3ed808c51e5be4d30c0b73c70178e02f1c05e3808f8d0f6cbf6c5cfbeb64be21156fc3d4d3618c7618b67d612f5c4b90145b6c86379f5b6df469f27e97e5db56cbbb0b198c87a6d440b8205c102e0815aa038c3bbb5577ee164be5e1be4a31a028dab932a358682a944d6a75298c31598c7d9b878e12fb3c2864e08c73b3ce7ba1348a5a35e35ab7b335193e4a7decf4b7e6f4d991aa572366f12e28d78fd72778360ed4add030d890d431685e52fb7430da71b828bd6b6a5f930b5a1e8d9af024328db1513edd1d5e04a2c28b435806229bfeeb01069e629d618e3d72c084aa5be855a7e90cb475160a04acdd25fb68bbae7a196f938f9342d72ebae5d75cbaeb975d5aba2f4ec11a31c445e35725f108ab7e1eb96fe3eb89cb26a635c4129541ede9bc4dd4cdb8f0d3edb392f864557f0fb26ddd12e38ae7047b4792f978c9c446b17e116b06dd771accb1d8a8c142118b7b324688ab98af39ca4b4c53fd3db9c2ce167904552c6f69bd926ddaff007d7b7179483a7eccdb20ff00b6a5fe454bedd05f8ecfc7b69ff261be2cfeccb7e744fb7447f1eb5706672e401109569bfe6c1f8fae4fe0dbe855a63e01a3dc3be2f4ed74d0c576b396f9243b409c95c95c95c94d6193407df52507164be21156fc3d6cc7bc143f4f65e6da7ecacfe9dabafbd09aadf87df92f973b0ec4197b9103024b1a3afd9ed312221e56f4ac11e4b1d52772d8a1118fdb9eec7bf2901a54cc095b6f6e7987cd69418743b61937fdb52ff24a5f6e82fc767e3db4ff00930df1a7f665bf3a27dba23f8f77d9b515d574feacd69bfe6c1f8e528c57ac2512424b27f06df42ad31f027f6e6e3feb74d14dfef72df2680e24b9c40ae2057102b88152a41763c1865c311fbb25f108ab7e1eaffb4dbd2ca75bb1dc007dc5d1ff004667dce7fe366ab7e1f64df688f205798e4d38e4be5e28719d83d111227ae5aee223b3d4bcd24cfbfb3525ede7bbba8c5602971aafbb38c3e7482393d0addb906f63aca1a04bae4834717e99b2317de3aabe9cba7fdb41cbf4b92edab918f6bfee5c3fc627d996fce89f6e88fe3f2563b1b3e5972d9b6e9a6ff9b07e3d5e698852cdc99f495f358bb91f816fa15698fe3ef1bd2af9d9ff00aaa6fb4744567eccb7c9c73b46df202b9015c80ae4054ed02313cfd42e0fea264be24d00e2617202b9015c80af5c2b391f4eef5237742a3fd2a7268b1ec6eb134e642d91ef55d952b0390b765bb2dd93c995cb43888cfb0f1bf1b25f2f0ff254e0d36b98fd9f7da55ad102abd8199965ee353a92779ca31508aa51322b7d167d38ad3307e1f5d4039cecb563f6d4019adf5dd646d3b45c454e12fa3a6aa4a32137d3aeabc877fa69f392b5cb190892a648d13dac78fd7c8d0876833195956c866a752524edbb62eff145f92de4f115ed1ae612c08e6a5682b08e20de6ce419b2191a768447de7a27e4e5329d977292aef61345a52a994ad58177500fb0939108ab8656ac606a302be6778939305c982e4c17260b9305c98adcf61f1557d00df8bcab4cf18cb9305c982e4c172609ad477c8f71b1f5a6d30f562769a565b6dc8696371484288e2edbb6401314fd782e4097204b9025c81295a82ac235a3821d83cbff00a67c23f717adba63344e12d7785bed9e3cfead6cb5b7bd72314213c9ea535320c11b56de4e593c9510fa14d65af9ead8f336d16c92d5a36fea0c8f09b65aca864eccdc99ac8215db871feab7754ab16d1eb0a210acfe3e37e95a01a99bb996ea535bbc9f4ae2a50945b68eb27db25dccb765dccb480472b957e96e657ee7b109ce1620882a6752c4e364a781a2ea7a760b058d2638d9ea766cda251b9052de2fbb2ee65dd15decabd73da969dc2b0187168c4a28917000b8005c002e0017000b80043ae3874936ecf482efc002e0017000b8005c1023022f5cb12542f3a6b9b353b3393773baaf48e7951c78c3166dbaca2d262500cd78b02f1605e2c0bc581431c06430c07d0c0815041017577d9ae5fa94c71ce624e4bbe36a0cf95c516ab6146c3ff8900a94f1f71ac5fa909871dcc17f4fcd57c130cdd355d9306f73edc5ec5bb0c6e59ddf9477558c5914d60e3942e1649ed991cd6a43a18ac9d87aa08571747593c502dc2de956de5a6ac6e2d32477c669f10557044515a83090be7fe9665fd2ccbfa5996370fc22e487361c3057f6860f2115e2b28cb859482def0946ec9946ea8db65c86da24dd4987389b19408a580c7c9369baa8382aa37c7d6a919422d16fecac551997890af1405e2c0878f04540718ff653dbb70426be5946326c48e391c8947028f17bd5268ca90161f55567e4d6006b834eb30333ecbb8dab727e0b1ea58aab27f0f4d787a8a18aad179e1e9cda187a318f88a3dc1ae117bf65db15dadef96d18d89bcc508b472fb2dba6cb6644ae19ab186a6546d3ee8b88be34e0ba35eb160a37135b51b5174e6dd86477b31fdbff0024bf52d253db18b4cbb064a9bf2329a57febfa8fef585ffb47f7a68f70ad8f2229e1c560f92ffe3daca40149131b4e68982a7245d3e8985bb158bc5da6b7ff00942c692198bf866359162b20e5c8e22168af88c995814020a78da0d4a8dfc735b7f4d53c7b57c975ffc4003511000104010205020208060300000000000100020311041012051321315114223241304050526171a1b115202324429181c1d1ffda0008010301013f01fb4b873774e0238e5c2fa7fa4184fcff0045e99cc3baff0045e8011bbfe91c0e7337b3a1441068fd980d76586e7ba5a1d57b76badab7bbca8b2648cf950ba0780f0de8b89b1a240e60eff66f0f7964e0845e763a9c35e1bbcb031717243dad3f5b978ae2c668b90e31887fcbf42a0cd827351bafea180ddd3555ae54659b767ec9dc3636f4b368e2c101f7dda927c668dc029643238b95ab56ad12ad5a255a0742695ab5681b4f76d0b7bbc2deef0b98ef09aedc8be8d6b248d8dbb9c7a2c9c87e574eccfdd3636b7b04f7d1dad1653f1e7c570c8281b16b99e16f7f85bdfe1364eb453ddb4206c68e92bb26927bacc9cb5f4130c8ef9a7cd5d015821c5bb9c74e1e76cd7f9ade6890e4ee25239c1d4a4cde73adea36b5ff0009e8b3b15b03bda51d42ad023a0d08d06b27c298452b08b82853fe31af1999e26631bf9add91e0295f90287958f8ec81b4d5971f320735604bccc469fc145db5732cda97e141c0056e7f64d601a3b16371dc565b5ac3b5aa1837ba934068a1a70f204d645a92b967d9fb6bc25f5316d5dac98ba3fdbdff00f13b56e8104741a8413b493e14d8c10b94d5ca0a33d693fe31af166d3a393fe3fde9902e32a37ef60722b840fed9de2cd28bb6a5c0297b2e58210259dd0703a4f2f2d96bf12b1a3dadb3af0fae77534a4d9b0fbf5e171ed26471a59537f4dc7723a5a1a040e9b1d574af50af5905841ce03b2deef0b7bfc28da47529e0eeb0b7bbc2deef0b88b4c98cefc3aa6bb70b47b2c2cf8990ed79ea1320972bac9ed6f8f99fcd358d6b768ec86e62e61f0b987c2a738f5520b09bd9523191d5a9ae3f359336e7216fecac4629600dce2e589b79bee16a06b1c698c00adaedbb68293162163604dc768f85a14dc439469c166e6bb24f81a52ad0854ab4665b40aa5ce85ddc2d90391c48dc8e10f914709ebd3483e48b4b7a1fa122fa23c1e2bf6b885fc1a33ddee58fc371e036d1d7e8c8b14bd1c3e17a58bc2f4917851c4d8fe14091d909e41d8af5737de2bd4cbf797a897ef144df53f4050fe40e70ec50c8902196ef9a1983e614cf0f7d8fae7fffc4003011000103020405030207010100000000000100020304111012213105131441512232335261152330344050532071ffda0008010201013f01fecaacda35cdb159ec9cfcfa2ea8fb536a3966ce281bff005845d54b5819aaee2c5646f85253b1e13e399be925511392c7fadab6e68ec845a8c6b1e1a732a039813fcb6514cfd6cbf0f9fc2929e48bdc3f81546d1abb81bdd0ac93c2134920f4a11bc9b14c6060b04c8b30bae9d067af2ae9d31999d65d3a743945d471670ba752332611b339b2e9d74eba729cc2ddd544bca66642aa622e18ba99fe846ae56ea58a1984adb85254164a23b6f8b5a5c6c1410b60d77722e27744b58dcef360a9f89d3d6934ed4744ead25d9636dd75151f42ea2a3e850d5e676478b15533725b9931d99a0e1356b5872b752a22f70bbc5955ce43ec131d23bba7cc76055135c5b98e159f12cbd90a316dd369cc62cd4f791eedd534e641aaa726f64740838875d484b5a9ae2354dd95438deca126f97091c49c1ae2d3a612c8e0ed142f2edd3c5daabfe25048c113755cd6794f9e30ddd70e690d254ffba663c3a36f2dce2ad17943941a5de155d6cb54fccf2b874dc9aa63feeb88b796e7ae1e3f2ef8cb4f9e46bfc2e21f1264f1b631728c92d51b3340a0a6643b6f83a9a371b9554d6b4e56a860ceeb20001618568bc564c8acf1ae3c45bf977baa793d4db154dee4edb09bd980d9547b907653750925baa77b8ffc4def54db9c2bfe250d1c4e60257430f846861544f707ba327653fee998d01d1ccc23f758a9a3e548e61ec9b7be8b8aedaef9755c3fe2c649db1900f75c43e24da28df18f29b24b4be976a1472b64176e134bcb6dd7dcaa68f2b6e71abf8d31c73635efcc0306aa9a101c34501b3b0311054c7d09ad2ed937653b0dee8117d53668ce80a744eba899e9b141a5c7096325d750c65bba95f95aab18e7c766a64b50c686e45cfa8fa173ea3e854903984bdfb9552c939c1ed17b2e7d47d0b9f51f42e1733f9beb164458db0e27c26a24aa2e8dba15052c347a8f53fcf61ff89febbe64c6cd4c4802e17572ff009aeae5ff0034239679039e2c02ad639f1d9aa21660051008b152523a339e15048f77bdb655336672d5fb2b860b2a1199c5caa2f93d254b9c0f5396401d7ba6cb25fde9d393a125474b9c68553530847df06cee6aea7ec9cf2fdd46fc86eba929d36616564ea424dee8453b3da573ea99dd32b668cdd0e2afeed438ab7b85f88b0f759f3eb7fd215efb7a802bf1070d9a14b592cba13fa645c597491785d2c5e174b17851c4d8fda8807746161ecba78fc2e9e3f0b931f84001b7ea9634ee8d3467b2346dec8d1bbb15030b1b63fccfffc4004710000103010309040607050705010000000100020311122131041020223233415191136171810523427292a114526282c1d1e1345060739324304053a2b1f01535437074a3ffda0008010100063f02ff00d92cec5e5a2cff009945bd77f587e69b62493645692feaaf965feb2ba49bfaab19bfa899eb24ad915d646c99e9ef2d6b4477b42a6510f9b55a61aff0d4743ec7e28de3a66f101590ae407019878aca2970ed4d3aaed23377b4de69b2c66e3fc33592263cf7b57ecd0fc01358d8630d2cadcc0aa7b13e2d0a31d8c342e1ec05fb3c5f0aafd162f856e59d15b8591c839581557c51de6fd55ba8be15f46a00d7f2e7fc36ced5cf1a9ec84240e7e34d950d1ceda1c345b256cb64e4de28d97ba9eefeaa397b579a3abbbfd7f86d85a052c73406adaed30b6144486ed8f6c68c1671a95b2b60a1fc34ca9a6a7e6b68287df1a22261a88853cd05137bff007ad49a05465643dd82d5898077abe06abf27ff0052d681c3cd5b8dd51fb8228c59a11c5b5e29cd0194afd40a3ad802d0a9b216fe2f895d3c7f12bf2961f0bd48dc981146d6d1578657dc0af2d3f702394cc055fb22980cd6a47502de7c96f3e4b79f24d60905a76039a064752b82de7c96f3e4bb3649ad4ad1587be8e5bcf92de7c96f3e4aa65a232176a8e2b79f25bcf92de7c96f3e48f66fad31d02c7bf582de7c96f3e4b79f25bc5bd67557381d0a39c079ade37aade37aade37aade37aade37aab9c0f9e7a934540f07cf4edc8ea05f521e01615f1580582a9a2d518217eabb155cf7c8d1e6b7aceab7aceab7aceab7aceab55e0e7a17b479aa835d1d6700b78deb99d7d13a36309a1a5ab58aba57355d953c2a9f48c83c97fdc643e4833b77bb99aa168927bf4232f63cb836ea3a9c557b296ff00b7fa2d897e31f920d0c96a7ed0fc957b37ddf6ff00455b12fc63f24ea472eb0a6f07e49fb42cb6b8a6cee91b211ff8ed569e39d85a687b444523e8b662e8b662e8a0924386002c99c0d0da54a47d16cc5d13a491d525abb461bfb21f8ad98ba2d98ba2d98ba2635e406d706a97f96846db0401c42d98ba2d98ba237463c94b69c4973ea74267c7c862b662e8b662e8b662e8b662e8b5a361f055a3a33cc141b94fac8feb0c5092278734f2cc3dd564d6ab0774583ba2c1dd160ee8b55d7ab2f356aaa720e1e081d1abaf71c1bcd76b941f0672d0ab8ae4d58555c86621a68c54ad4f72d97f45b2fe8b65fd16cbfa2d52415d9c87c0e672317d5d0b316b3917caf5a8caf8ad6c535a3179cf572a0cc5d4d518fe5a2ca3d8357027bd6f22f895d2c7d536b5e87f24e3abf3fc910648c78d55d344ea7da4f124d1b6ad23141d0e53187702d7211656f8bb5e05a76b30ece373c87e011ed185b9e27869a0379509646e7d0f00aae6d335a746e02ce34558e17b8160bc05aeda67696c6e3e0148d0d25d6305af0b9be233d860a94fb6c7375b8e848590bdc081ad4b96b0a67a889c4782a3850e70c7bbd43cdfdc839a6abeea3682d95b2b656ca2e68a108a09c9bef26e839e7068aa7cb31bce1dcb6dab6c2db548c79ab729a9ce0a2c4f28d313720e785b216c85b216ca2f60a1081ef40a727e6abcd151baac565bace56e5c15c3335d1c9186b5b4a395d3c1ff003c97ed5074fd11124b6b306345493409b10f33cce8c340701feeaf8e41f74a86e3b6340da85b7f1a2eda2ab983a855a608bb8a6be4db1739105650d1c0e629e4fd64e1dc826f8a6ba88d42907db39d85c1595116f1aa39a369ef4081a12b8fd528678c91eca749137d6345468358e37b3557dd45cf340b7ad5bd6adeb56f5a8861b44aa5758e08553937de4dd0969c9720b172e3d55d505063b9e81544e43c5374485504d9e48353939d21a05eab58a324af566104379ab5262a8068bad1a0e28b8f1cc72c78ee67e7a4d0d7b86af02b7cef8946d32e2e1c7468a48adba80dd7a94871ba85766e7121e38e6ca7c731527bc9de0878a6f8a6f822a5fe61ceccd035839d4f254612e6f13df9a2f343425f74a19828bdd441530fb673cb1f815f7558b0e2b74f5bb7addbd6e9eaf6b820fb28584e4df793741ede613d87107418fd11e2aa9bef26ff0070e45823268a8e6969ef40bb82f574ae93a479a00b1d5199908fbc7904d63051ad141a50b1f187545313cd7ecedf88a840c9e306d8e274af6026c04e6085947638ac9e8d179cd94f8e62a4f793bc10f14df14df0454bfcc39d8aa8818bae6ab0dbdade39a2f3415e405b6deaae702a5f74a19828bdd454aee726790f82fba8da1c16cad95b2b656ca730704e67229c9bef26e8c8ce7a07b90d01de730f14dd12500f0cb3c6e5509c9f682a59578b4c5698e5665b8f3d1fa330dcddaf1cf6dc3d64979ee1a713def22c81759ef4e3db5deea84f69516c70d27bad540b939d5b9bdca02d73aa2fa59454e39d0e791bf693ddf6534260ef4df0454bfcc39d8bb36e2539bc5a2c8fc73c5e68281cc3eda23e8e3e253b9fc6977252fb850cc147eea71e3c108b8e2ecfda11b457dd44bae0b7adeab78deab78deab78deaabda0f24e7f34f777a726f8a1591bd56f1bd56f1bd56f1bd56f1bd5472f3d02116f2cd52a81768f08b3bb301685562b158ac422d6baae3c914d4e4fcd4215b86e565e28e54da6f25569f2cc5fedbae62a9d0f59211eea34965f893a6757d63aea9e03fe1d06d86d7539abd8a225b83868f65052d381abad0d55701f105256c70a0b62f4fca1c38596a3e299947b2f6d3cf3da8c8a1c4147b573636f1bd39ccd8c028983eb20be8e5d65962b55fd99f6c935766a2c9f23c8dfda4cf34f057f05da1ab5fcc273237b64a792f5903fc68bb6964b1670aaa0cb18bfb46501d66f144e238952f92932495d662b22f54c98da60e398026839a6b1b95000044421d23f9bb045ef3571c733636268a705da52ea2d87f45b2fe8b65fd16cbfa2d97f45b0fe8ac31965b99c02b25afe8b65fd16cbfa2d97f45b2fe8ae6bfa26ca716940e8388c15c151b53deadc8a8d198bdadab56b54792da5b4b696d2d50e7205cda347041a8bc8b8f24e750dfa185eaf05cd55687b4aed1f4b9178ddb6e666b954abb1572a735143f55b99ac8c3082dade16cc5f0a8dd2015c2e4ef14d70c45eb663e888a3303c152ad6fdd5376b2bdc29f8e711b3ccf24d8982e68cce8ce3c0f228c53b08cf7b95960a92bb591bac5513abfe5858ac562a5ca1c47ab6d1a1191d777abe78fe24f7db1aceaac57ac8633e4b754f072d57cadf35a99491e2d4f7be46bc1e4a49a28ead20715ad93c9d151c083deb158ac7352369a73569c2fe25502d60b656cad95b2b656cab9b9a8ab656cad95b2b656ca31d2e445ebd9e8b1f92a1795aad255e2815e2fd0bd6cac160b0582c16a8cdac16a8d0ed32999b1b7bf8a6c5dab8179a36d46e155dae5323226f7a392c7963b27121da742ea15da7d3016d2b5b1faa8e5932eb62415606c66aef24e191650db4cda0586a3c8a747ff00573abb56202e03cc212c3e931231d8111feaafcb7ffcff0054c7bb28b564d69631cf108a57307675bbc56fdfd53a921a556f5fd55f239005eec0f1ee56fb5752bcd5a6cae2159ed5dd55963df5a8c1074f3490c7deebd08d953de713a147b0147b2739aae93fd2b59ee55b2a8066ed897d694b962f58bd62f520a9a39b7a898097b9f80e4addba5782ba45883e4b760ad6c9dfe4b5c11e233e39b59ad77885ad9337eedcaeed59e6b7ae2aa5b541b4a1577f83d619f05b2ae1fe0af527a632816dcf796e4e0e0c60fc551cd07c5655e92ca05b114a6181a70681c518e4607b4e2085e92f45d498a16db86bc1ae1828b283ad2ca368f01c02c8a681dd94b2c9f477b9bc5ae4d821606c6d14017a572365d131ed91a395a17e887cf1da70140b723e6aa63155bb0b6555ad547b2a3c55045f356bb1bfde2bd5c6d6f80fee30586993c917176d5ff9285ae35a0d1c16b46d3e4b62cf82f5331f3575972d685fe4b598f1e5a18a8aff006c7eeb2df2472375d2e4b23a378f3cd96e40fba58b2873a9cda7039bd2d95b2f89ac10b5dcc817ac93dcfc57a37ffb59f8e6f4bf845fedfe39cd1c42a597b9a30a2ede68cb40feeb05ad1b4f92be16ab9b67c17aa99c16a90e4d7ce28d6dff00bae7cbce59239923682138357d2f25ca5f926554a17b0543bc4714d395fa664918d35b11c4195f14dca2399f93e54c146cb1ff00b1e6158ca7d38f745ed08e00c27cd7d1601623b345164ad92d88c52a42c9c990b7b1944b863458acab2d12171ca036ada614d0ffc4002b1001000201020406030003010100000000010011213141105161712091a1b1d1f081c1f15060e14030ffda0008010100013f21ff0065b972e5cb972ffd791ddec0676f5264e273383589eb0ee009b207de5a5abf1f9993f779cb6812439ebbc50a66ad2fa5dcbf3e4992c575aa1f685027a7fad2358759d53e8af786286f1999fd067a4b1172fa47a2d515b58585ae87b4762ee2e5248220e5681d0ad47065f10f4dc793feb214f0a126b80028ddcc2d8e014685aae5a469d08ef172cf8939a3d04b4c4bb90c4d32aa9f329ea1b4eecb220869a66ae7529237feb58ecb60eecd5038d3c8eb30567163cfbcd1c525d1e455986bbf682a025d6f517f315286f0ecff005ad22a2d06ec22b55b0315de553026177ef34780880f3b5ca5ecbf496c4d4c69300e9feb58863a9ef14b96391303aafdf3471748065055cdafea21ad61994e6f5bd8d7fcad098355626d6fb3cd156efc337b7b293e3bff0012b0237abc3e24f33fc05f40b80d4b9caf9083f8ce8fd8e8be75317eac11a4bc813c943e28e9c5f86458db36bafe9289dc7e08099b54ea7e61055a9a27d8a7d0a7d0a5e1453150444aaea9f429f429500f78a95c345d56d3e853e853e85290873460c60ade89f429f429f429f4298cd7d74780589a85389f429f429f4282b54f2627e2cf448659c6c07e4c7f273f939fc9cfe4e7f273d2fa06f85790e6cb22b91e323317acb45a5f4eb07dfe700e85f89d2794080010bd4185f39991a02019df85912af0f18c673d1ed97c2fc8e4c5690e6787763e6d4fe0e205992238b2b0f2974820bced25bba20c6aa50749fbe7354f2bfdcaaaf54a01ce5d40cf800390d01aba317bc8ce388a59daa62d5ad1ac2f4bb42dc7e44178d573486091d310dfa4cc19a80791e92814707380113b33461b5afe67f63f33fb1f98346da600622731b89da2718f1afe67f63f31163e740b304d1d981d1cc7f63f33fb1f99fd8fcc38f83450b7bc7b5cc1c4c2165f79fd8fccfec7e662caad478f59ad448eed13470748d517a590e27f63f33fb1f99fd8fccfe87e67ee50982078990f2a7cc39cb8570f4cf76757760f08842155bb07105bdb9ed0c468cf67ef35465854773c3633616b0746b6b41000a3071fc3c1bbc0bd59b39b04f6b9267ae6a3117422d52d03799fdca17e1a739c7ecc6da30e5a60649e98890d38ac97357336222fe51605bc5e11316580f6791fd25ec0d64c53ed091e8e444cac45742be6edfb785ddaa8535ca775f9be2140b0e80be23c9d637b71992b56c3f34a87ea6773c57fcc149642f9f281d2b951f699f0b5ea0c6184430434decc25a979b2ab82a163e762060c46b7672eda5b9cd66982d65ce15961a9164a96686581b2779c321083b6660a305406584745a053c75e794199a8330a56c711d2695e4395002d4f0d1b59d6340e14b4ea7014d26c8417773871025cd3ec86b7609d14e8a7453a29ba80260dc88ab794f6bef3db4f41e0d4ac280f4dfe839443e6e0e81a3ca526c3cd14b89b3000a0c70b3906650e9108d6aa595ac08eb32c115c666e861c40dc531d412f6e53d9cf53c2af46c6ec4dbb946af78d53d3368311e8d88181b8152b5cc23ade5d3b4b30fce0dc0042f41da8a1eb1d5acadf7073664550bf387c371e3321d502400756af687657ed8054a229a9707aeea147cc8ef7d2fe8cc9ea61f54392b661dc9ad1aa6f029c4d16861c00d9a7eb110691a7b99e8507ad54e4d500dd02f5e35ed1b7de548620c957b7a4f5dc34987f49492f013193da9abf3e1a08109512ba8a437e92e61db81d5ca5a19fd3a4d3ecfdcc1c332f85999874f5451822f3b113a429ed7de7b69e83c179ab81a35603568725c36bd6ae519d9f9f053fa4efe8bd086c3d30d76bc37a6e4d471dd897e6c4f672df13865373f7ac1157994cc55f930002faa54d1e142c277572fccd61969cb83df95bebfa79f880cb9d51bb1df82d6d455dd34780111630eb40741c90c21b0de5cd7ee593d4caf267e66af69e9bec427a49f47a4f5a9ef27a7700f493ea39bc4f5cfbcda68ceb26831acdaca298827d4e93d1783e9b94d5f9f0d11e890825e272b42f5847497a310d3ecfdc7163578f08483daebe92fd2b7af39b4ea9ed7de7b69e83c1d7d4f0d0553da0d97c5d2a2743496fd93da4f49ffc3d9ce67b430fb02dd2e1e065b06a6e42b6f0d041db119825d467497020b7e60c1ca401b1e2c10bd90ab5c98a4d17eb998e02119d7bcd1e1095d58abd79411c10cad8fcca0991b6dc6539cd58f074fb1c3d24fa3d27ad4f793d3b8a4fa8e6f13d73ef09560225ea4aa54358cf3309f53a4f453d531e044298e8cfaee5357e7c3447a27055e0e4fdf07488ed687bcd3ecfdc1ab309d3ce9e74f3a78d8acd369e2214e21edfde7b69e83c02d136e06fae7c164e6b96de95c508ba12f86b1bebe93dbcf49e1abb50582616d0be6086b19ece536398d6818eece66e405593725357e59862c6fc1bbaf237ff0088a78658b7eb03c606baa96ba5d65f38dc5ffdc11882659bcd1e050b571b7944c300775e6a0cbd69725badcfcd181471fa1c33704dd01f484b6c9f49cea6d95d507bc1507a09f51cde27ae7de6f862976e83f3e54c8e1f53a4f4528608bf389775a6beaa31fb60d0662bfb189abf3e1a23d0bda1601650eb082b63ce7858402de2769a7d9fb8af15197c2a739ce92f456cd93b5c749a31ed7de15c0bc61585af01ce70d81d6281d07b434e3d532a645bb85b9a8d8d8e5bb09e04a0a3618c103b2ce9bce74de73a6f3832d23bc3506a0d93af1c12d9b94f673d6f06a262a35b96ccb59394ef1ccbaa9a856eb5381b934aebcff11bbaabbf0f3e097075eeb11da7a2a998445df6aea363df82f83ed03906ecc553f923190cab39c34972f82f03c02183d75b88d53f6de3ea15a6432ef0071cc5f79459cd0a46b2f4433c3ce86698dbb93235d0f26380b00bd8944e91685c60d1b75f286ec59f61e1cb92a0b62639961773bd328c17730f7219cb3beada6900e4b1e64a0d61ee4a901da54f4d27370095089c314a7686c99960e2d7bbc32ebb3c90f374c0acbebb83108db1b6a3a42a9ceaf22032940210a4e2c6be295294a3b70658361776510eb358a8aac8e5e15294a54b6af1157750c01390a78ad16e90895a59acd7cd98b5184532f785a84b819742b525780fd63ef19f78cfbc67de303a87423a876228cd8964c60a9c058be29115839a3e36d26b088137a8aec2c8bd2a3d8e9fd39fe78740136c951af544c28022d708441558f7dfd785c3c859ddeb04f91f30e2450ad6f1eef5fbcd4cb05cdc8fe7f30ab78c53d8be716d3b4f9cafd07a061ca2db798203e86bb42518aa1028813f3794318a238767a9053580e711d77bb29d9805431fad12bc6d010a8fd8ce8a74d3a28c92e719b77f295a195bb34415210e88955b307ca51aa2461ccefaa0f84ba84f654bfa8c1ed974af07d6432b67630bc12d745caded074490a9d34e8b8476f30edd393102d97a9bc1523eae9d1794e8bca745e53a2f29d1794e83ca69740a82cb497e0bed3a2f29d1794e8bca745e5026e9e507790a854417f863a1ee45769181272086021da1abb930920c00a0e3542246ad1e53a19d0ce8674315d30aa13868533468e23632fad60ddd86ac449655ade4a4590850ef7a1ab32936181cad009ca89772b9c1572f910e60cc2e6d0577a86221c54bba78229415da0c1cf654348ac187e78ae4160ab3685d0c6b9b424a6d046c64758ff3188b217bad0c57d6ad90bd84d654321da32b4017cbacea6942fb1f32922355bea2f11653131dea40b05cb521b22baffd43370e85474d7dd72c3c29b4a431c0b13fa93fa13fa12b1ce2cf2bf99619eb9ba4490d6584bd77f4a9b1994b3dac3457cd17a5fb11d8ed520f801994d9100772066446f34fb26a0ec5fde5868dd6576d79b709a360494e15ff008c2c3732e8439440b6446c103a33ff0010b9c4337031e422b51473376c3c2c6c05e619020b7aa839ab0255d5b0cdd78a5a83f80c08ad97222a0f237fcc423d2c916fda994b1c12106197a2b69d31e123b645a63f1398ff009f947ee2eafccfec3f3027febe65188d25e7e6586f707ee605cef9aa5c73f920b53c3c54dc9d2407412b8d4a39128e44684c0b8a306cab968200cc6f3a602b42539128e529ca2fa8f283d4e5935506b41d329a207a625ed0f34d0f7990bca79c2e6c3359a27ae380ef4268f6ff001572cd08c175d21eb47b37e9c184c82eaf81a1e10d187cacf56f74face5c1f4fcfff00b9b585111bab68251f8828fbb9bc3ff8aba87f1c2c1faff0e6e5d50c1fcc666c6d0812e87361a7f8a3233e91675e9cb76688b840f5f105b1999e37916a749bfb7055c8f425a24c055f9b5297091039efd58cd285517372aa6f55ad6c7acfbd41d26a50aebc1fffda000c03010002000300000010e30c30c3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf9d8592aad3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf5f9cde3613cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3a37ce3733cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3cf7cebef38834f3cf3cf3cf3cf3cf28822415108f6307d168fbd0fcdc5646fadeb3c98f7cf381dc2eecbd200168db8ef869b05df2afd6c5767bfa09aca62c825bc201cfdd9b24f7665fcf123aec85b07f3c317f17c6cb541ddf2fc3cf332edfa9af709513efb88c25aad03b0f3675fcf09fdca138b6f3c8360b6f7ce8f3bce2029bc101a0d21816213829f3fc49304f0e63ee1f3dff94ebc0b80e9fef1d9dd9137cd97a7b74a70158c5c964207729442021dcd0b89ccf3cf2cb3cf1ef1d04cf3cf3cf3c73890c18a77cb2c30dbedf3cf2c72cf31ebc32e3a754363cf3cf3cf3cf3cf3cf3cf3cf3cf3cf3871cc34d3cffc4002a1101000201030204060301000000000000010011211031415161718191d12040a1b1c1f03050e1f1ffda0008010301013f10fecb6136772f8999057eb983223d1289057148f7810d1bcd7fd4c12740ba7d5c454149fd622b54c288eec6ff00495d043b094d4eff00d5825ba7472464623a35717800e9593f4feb500073bf8794a6a2c5dba8f78686c8005ecbbaf72244342e0addf17a7cd2816cc883d85fa989ca0fd3a464047191f46be40016c38f2ef06376ab6f74a8ce6c519faca105dd55e844153b0446957f48b1a978a0b9788172f04ca5a9788e9525e5e5e0425906c9a3219608591869aa0a4398eefe973e2e876f581d110726760fcf48af9625871dbf10006cc5ad1bd40b28533212a1d05564c02c54b475447aee1e2c71617c58a18deda3896a8fb195145abe220059b4703ed8e9290bd3fb700661dfb4c73a2595338da0dc10d17a0d2c86482c8950d211b677e04de0417e0053595875727d0827179b145a2d5677f194833cbcbe2cf08bea649d69c3d31f8877ca9528471a476d8b6b0278ee8cc6d60957be6311f3f082360d08d0038c74ef1252987e8f1869745436c71ce6237d438db156fc4e1399c68346c99151abd171da6c9b270d608b3b1a2c27f003e92abc98fb68a83733e99844720fac402bb463fc031f06e83a61af313ac884d9a0373e3c62e55b675f1d553814e71d3bceb4c3c9ed09706f9551b73bee3d200a782831952ba67761c68086281a8cb995d8aa048b6c5026c8022db02d89490a1a9051dc65405ea95fe6683c9bfb4213cc028607de856739c54c1afea17076de1a3a18a81102cd5b0345046a482811094c660cc0a878f63681ea1bb36c5538fcc545233863f181cdf974829481873fe4200b1bfaf69468f66fcfc22a071dff00c82f146c77eae8e884b0a958d082bb101d98973ee10d8840b1679c5fb301b231dc421453fc20146180556f0257958c454cf33da1aba3972fb1e47c152be2365b3325fdefbc7fe84fccfd6bef0743571db54c6ed47b301dbd68addacf7941451e2c4565bfc2d99f837d09ce43ec18ddc8ab6be73fffc400281101000201020504020301000000000000010011213151104161718191b1d1f0a1c13040e150ffda0008010201013f10ff00a4ee9b904465f3168a3dfe601e4ace1819874bb8d9210059ff00300524468ad2535738d5e53a0940aa77312e32477d4964f69fbff9b7fd4422e1c571a88bb6bd2635acd7f6b58752a75c447fd9f30a1acfbb7f42e1bac9ef29f4bbc75b5a3acb1503a43def4232d7d2dbc0616de0b165b799832c1bd25b7985c456de5b78f218fe11ea170b591ef3a9fcc2add79f8e1ec8dc8cf13c76b00f51c8edd7ac6ed5c4033d57f5bb0eb7234b59af37d60b23136139cfaee7d7716245a45e6a323cc1e14061e181f32e5d5112bb877822c2f763075bd3811425e4f79451159a8141aa315f596f4a11b56232e0cc5633746214731546b034b60366520685e0cc7970b840515198a0a9c92f8660fb90c1260e64e9fd48894fa910c61713da7bbc52bd3a5ec6bf994734399b45a7a46585c8e41b07ef5971680bece1fc31c2757d4b8431aaf1631af76668773d98ee380e79d36890babf7d88058bddc1d96586edeb9881f750d681c15835922216e4870246247de1d56a6baeff00ecd4ed3521acd484d29ecc7a9acb7cfe67035e1ad160e1addc80f368739d77ab145027996003f46a7b4f778dbba07d1e14468387ce23ea049e8d4081aa357b0f2a66af77f5c752bd1343b9ecc580a419f1b4469faf2f865dcbe177cdcbbc5cab6cdcc78b6f5b9064ae64b970885357e904caaebae843cfce25952bd2aa3ab18a8d088d99d211faf7b5e7d229bbc0286633a83647c2583009bb1085b6420692b8554a27ef8199a6587bbc6d49c671deff00da8c8b941a6c97b6adbb006b37b6732b9a8f23a39bd5f11b9977acb31ff7c4ea3f3f13a8fcfc4fb7c1e60a0b6fe626bc03da3a0b197d3c7dd7b41a996fca063d0d217543766d8ea7281ac0ef29974794c0690c2d3f7bc2dfa1e6212d9e9105b6b9fea0d648453996e50d5c041d08f7095de26a3308a53b30d63f20fea6802f521b4bc311c88168078615d6dfc228d9142d374ff619de81f985385b18fe3265a332dfbdf99f42fccfbd60482ae1b51866d15e580b7581375f48250afe0ab871a9a6b8017a920b419cd67f73ffc4002a1001000201020309010101010100000000010011213141516171108191a1b1c1d1f0f120e1605040ffda0008010100013f10ff00a5a7194e329c65252538ca4b2590474ff9b66720ba7826ec5661858664abd6054782c4c69d326e2f8364a1e8de34a469b1acd769158542aeee5e521b88a7742375aaee04154005ea5deaa949375f42e65610c872755f247637555d727843fe644ae86e79b3506d2e9e916ed91460ebac45a8a286ad33151ebabd86ec0535001101303cdde5006d497d1321e85962ae3250c7400000e916a9521cabcf83b78ccb39acf35c047fe66f7fe32380a6903ba0fa70972ad0d4aeea70089a82606ea425e2500a01c87081afed748b60b884f912caedeb67889e530e8b308e145780664ee75b6de45c65b7789b72cadc52efadc3a29c1c2861d7704ee254bff9abc8c280939c9ce6a2fae2d8976686e227e2b245d31c27f00d2e633013be4d2d2aed68e6e1620c0282e39a5b6fea9683ade8ee8560e12cff009a5e0029d119d538911b94d5aa4bcf17bc169656954d84f77f03a66115446382713c88e2fed96d7e30291628295be0370d86a01ffdc3f9cf1ffe96b000d8d1f88079c6aaacc78ad588e2bfc1ad2ea042e987900ea30a56840e11f997518cbacaf0258bff00d438517441df044c4719d5ec31cf0213f8890a7d34e701a4f5085306e4483a2173bb68c9c1367b7482ee4be52f94cdebff00d21a2fb9501a429a1a4ca30c5d42d5c044708145bb1d601a2afaeb0fb5689af9c3179c0bf230a75a106cae26ceaf8478cca22b8aea9a48d96de39c9407024eae8072db807182a040bb916dcb58e9327d1e53ecf827d9f04b12b2048150b380b33ee502daaf69f67c33ecf8e04464188820b934b4f18e840bb96d74e0e4cfb3e09f67c13ecf822205d420ef49762ccd0e28dda5e7fe13ecf827d9f0cfb3e2994581162aae91e490cf62d12a48b5a362cba384fb3e09f67c13ecf861404bc4bda0f67790abcf1650c1b4edc585ba435df3ed9ef3ed9ef3ed9ef3ed9ef3ed9ef19a5aea8181a3b1d00ea941df3085ee92f9433fd68dc2377c03763eb37570f378bc883ac9f33cb487d19c84fc1424156a8011a0c944abca12e8bb8bd98f6d82fb12bb74964069499f819f819f819f9183df42d8074978b8900f510f9c3c8ba258ff000b51b0534576f19f44f7825c4c89a332cae5ba9c5f743605b32050a68babd6260ce81c794a299de866f68db28404e2797dc97266c007aac3fa91c852cac9fc6305d5110116723c214d2ed2b57c25a1c7798183780e0bc6862320e548a8ddf799b8f2a3583e5c701dee54034de0f081fe0184215a38eb32070a9351146fa2b9b000003001a7628b5c32244b2e359b9ebda56ac6540d46bba2dcbc63169b191bc7b91d16e6288fc01cae3411b10004113b3d049c0ed5ab56db0e337a59563375335e50184850e5d5076ab56a140c2c956a5ea96db8076a5ccccbcbb35a629769385d4b21da3d5abba3e950fbfc958b6e0c59a7c98f5930515f334f23d6010a3783fef2ec77c890e0d00d594ff294a537aa6c053d2e619bc2ed7d78458ec2c8eb9bec4d3c4f71fc9ae259fc3a4be6c6d7dec7399471ace9a1b100a036ed722bd9f2270a6e0dbfd6524ef6563e5c2a38372c9600453a82d7811f15a229e77e22e446b84efd20d93c17ccfc47ccfc47ccfc5fccd798ad63ce7150c6af2620d32315fd5c4d422a3d7b50154a358a234edefe76226575f2c1ec43617b01e7513734dd2b6a238eaa13839f383e82ac6c70e1508d042cdd0b106082e3ae171a758b98d8bd5dc3b40a3f82d1ee94d92b3accb672c858c2f63cb52aed8c9e903d41a1c03dcf386c0892b30cd821da5036eaf9eb230b8803e2ee976e8c0cb1551914216db84b7532ea5e9a3c348bf953fd9b107430f2d22bb8aa88255517d22784b59b386612c8d02e241e96191ab1d0355905f2d6873851409a448f5d122222e4284e85cb19450acb6f1ce9ce3b561ad0cc25bb2eb4233df5252ae29f8a652b40dd9979562544a451d4ec6e3c09615c6a31ae7b363526974ecd7e935ae3c200de78c58d2412afb141169a20d442c40aee8aa04e41a434da04890752340a8660d80f0dae1d93046c467d27161b63bc429f6e7e3cfc79f8f084037066c8aa1ca31b7b413ee724d5f4eb3cb7f8576ba40171e8119750e1c28a9aa4b83df9785fa26190a7243a1350851b6dafe212003006dd958eb5f8fe4e251823da8ab4dada82eca10d4b607405e49e8c13f2a7e546bf6e3962583689dd7a847d5c89e53d13e87222d110f7f01c022c9a2bb0f37b44b71c6d753ed3282ac450722330932d40141339740374d023253ba785f0fd61fa096bb4ef9221722305d6c1a768816ac59600ee341290e881a9ee60e406dfcb305b2d0335d6988d0005178b08ba46f647866d939504a11c18faa141796336b248c1ceb473f1e31dd605078ed337ed5e761e5329f1a8f993cee5f190c10c0803a1d8f28c1e4b498e4820116bc208c2c38fa90f00add201021c130a223a0a1357a90766aa9159b8d54016b05d23cc7d7b0a71ce139a1ba55b10c15d89654362a835c1415f76dd9e765bfe3c728364c2035cab8d877309274aaa769b4b90d6327252b9405bc13c27d27180388069428f719fa0cfd067e831efba899375611c4aaeb9de018a513ee724d5f4eb3cb7f82c6d6f96cbf2820e9de5d5ec7394979bd217e501af550ab08c643bc6190401e03890c1476f10f23a9999c345658c6fee203593df826383f931c2308ef2b65968bc91b5e553c87a250659416f1ca3d6a5848eb5e596905755e41ec4748bca3f2970d32c0a121b1fcdd016d5cb81cd63c656c1629a0d83904670398db8e98eef69fe21a7f29d90480b55e1e505a15775f32b0905eda8c7f21b21223b8c5d25b55697a0d774180272a2b4bfac4a647a280a8f803bff0084f0f309f77927d9709a60fa4e33ca3b7821a4d7ea76e4b885b680c9405852a4b563d7b1f439ff009afbee29f6ba7679e9f77c21340a324a910155835d4d10db389194cb817bb63e84fa4e314a045ab599f404fa827d413e808546ad649df5142b051b22152a31c27dce49abe9d6796ff06816547518960a05f98fa7f0c132367a367bc211a25f6814b44a8ed759dd2e05f5d9eb3b07c93f95098d61ca790f44400b0dce3a44721e343a197f1760e13a4a1802c293992a2bf91f0b71f23aae25db2a0385dbc0c78c7132621546e69f99b1cd268162b80a0fea954baa006c5d6b99532b4542a9f3c4bc04e8d29cacff002a5ef13cf80f706a3626a220202b32e198a81c03d9c0be0f59e4a06766413cd27dfe49f65c26983e938cf2c9e5fb021a4d7ea766cb880b5807cb086ac357ef397d283dc6a729a27d4e7ec224497448bf19c6f0d1d0f6a1b532a7eea7dae9d9e7a7ddf098f42625a5378e7e108a943b882e5738fa4e30768ee10abd99f933f267e4c5ae5384d96e7455cb1c2009f43926afa759e5bfc121b90b5e507d37bfe0a93247d1960ea59dd8ed50c02d63eec01cae50839af5906397d79e49fcb52a997a5847800880846d120cf21e89a1cad4e443a516109c08302fe48891d84f27e20ccd11ebb840a20e44d1edda0ee348c70fa0f35e11005d7189c2d985f45867e9af36b69671ecb38ff01884d2845dd29d4d21810f354b778241ad51438ab7f92835a9452220daa534ef9b8e23a2349c01de78c7164a64a01c0f098d6c1e0b346100e223e21021e247aa0d0bd9ff00132605571a51544b5ce58af7f08a1b511de2399d845d9821a4d7ea4e2a6511b140757fc8555287744fa8aef86c6a8c2a798f57b39822ead85ec794b7c1ad72ea000858d858078cb9f1f533cefb3b3cf454bf7a43d2946e55f6e5fa7adc2ca3ad2bde434970bcb8231c2e44d4507a33e938c367243d0c28f673f0f3f0f3f0f280798b07712fd2ae07636f295b6db4f127dce48c5ca3b5b19cc2da0888127e1e7e1e7e1e2230280196565a10a715f0c621373b4152c7f244b6cdbe3f9d89423637612b04e0f991be0510ad0863784ee9759d23e08c23ba0d67ce0c7b69f969f968980355004793a62f2dd65bae90c9bacdc7749e53d13ec723b06209b9377d69f3083c158d8e861b4b71b4e8ed3216380ee20893341c9d56669c067ad1bc4fea555aab95e73971505aed880678efbca96d6c578dcba845b9ff0032ac78696c4abd32f01d9aa5c7c040ee39ccd74d6dbcde714296eca97bc7148925415c043c5d549956b6500034bb748b2a4e23eb1ab130f82ba53013022151b6ef17c03c631777aac60cd0868ab4f512ba3182cd2a6d13d7408a08ea738108f1ac9c39f48e8b56ea8dfbd5626aa07b25be919f29ac1cddd944b6ced422d89846e5d82eb961a42b0d14cb0cccd62d7ba8362e8e51df2496e2eec0694b6c2555f71b54afde3c919251bcd738dbccebcf03be1ba51425a2b86d0c806853e23b3a9557ab8a0f58f8041c056a609cfdd31258214e097535699b5c587265abcd18cf603e7370a0ddc4ada99c40ad8bb8e0294fd455dbd311458dbbac409500de3640b4ba8ca644856c1052234376176ef87f90f99f96f99f96f99f96f99f96f994db2ec53e651e74ac870e52a2d3330b52d497c9b8eecb4a09eb3f2df33f2df33f2df33f2df3082c4361af8c0f5a983670fb401080f824bec2440065668a770d62e1156a7042675b558d3a10935396908200ac10b45254526db0c27497506d47f68719f6e539cfb729ce7db94c5abedca089b24a4f1659f19ac755dd803348948dc502dc118c58834f682225dc3cd900cdc34574581ef180d6293de0fa74cca06de1ac013b93749735e2b3d28da72e1eb3cea602b86558b2f0330826b8dc4f362656e1ea41cdeb6fbd2f65f8c79068c20d8218a55756c688bec22b2c8af18fc00d30e684f08c0b2c6f32cd7008aa1109caa8f10454bf963ea9b601b57834011692d0c445ee58ddbb6ce6d7d8de53830b778af35cf7c3703759543a5432106b3e10c23a9b92f013ae201109df052acd056a5d1e502d7a129a08794d7cc3214085028ad627fa53f6a60f7a5c94ab73bee07c7946d6b6aa8bc658c6432b83ce6e26675068636a08c1468a8ebca02ef331165df6999067800f38667b60dbbc4f496b1b61157a89ef1391440b00e20f5dbbfde8e88b54a3b99fb13f422068861c944ea6a520f7ef1b0554195ec40628095f87993f0d3f2d3f2d3f2d3f2d01f8d347e9bd401415009b5a91eaeb5c27e5a7e5a7e5a7e5a0c179c905e5fa54d1964d587395b45373e49a3f4d2e907ad01f088f073412e103a0421d926e40a203876a86ad92240d7927e2cfc59f8b3f125beeae50874192b1504a17993caf4ed48e85d69092f6d6d9c0ed390306fd8b85401995dd8cde6859e1016720580b5a2fda1170516ad559bcab81d6656e88acace206b7881546cab625a04af367507451ceaa2b25b7adcb1875651757e15d77af09a8c43ec5061f7dd0babbd5d7081457662f9419a37e1338fa838f061dcd62a28e544c94219b6be70d411d699e901161c8d04bcf48921885ca5d253aa353bbef81600dad36c7208eb189d159e1e108a44c947571d69df1a6072ece2357ca0068760b058c465b26a0f11d497f798b85e39f388cefc58e32503b7aca1c39d9dec0e4a256443e3a9295151aad72cfcafc4fcc7c4fce7c420b876ec030baaaca01a31b4204da0a20c88a9b142fba67bdd12fc22a3bbe49714317aaabed030b6322bef9a2a26ecc7d9e175170aa1147a78ddc642764f9932423a87c10794cfaf7b63c8cb86da155784162773791c4d0d8c807910c9c1c087ff0a595140c5bd4553e5c07c53e2086d04e531f07021ffc28529db8211a42ac366d00b53855b0d0b08803625ee39198fbc3c05e63397a94f2a7c153077646362116c8a5dd951d5801b204143b2181ba661612e58116f4a385f2209fc60555bf15dd72ef00f9ad54a06d6146dfcddcb55c596b237658af50935ed034fd62392817176b168cce1705780c9b5253e062242d43d3416afb78b7c6ee0602ab1f4784a3db880bdfac3457f3515d07ba29abf74d1877401a01da875067e64fce866042c7081d874cc5ee1319c763446872b955c0c627e24e5bc2725e1355fd4315097889423bb8a94e7ecd4f396c92e254ae187165e902611b37b4c26369a1bef8f6f01c33e914091f09ae6748413400e39f6b975dd697ff0094915481de5ca616a5a0b4dd68c1dedd8270fb1290dc473d31c7b029995654c3bd81dfff0084cd20e7fa9c1ea47c50284a28265e7163a2b15a4cd6da1e1302bfba882426baf5a0c9d584b7ca770cbb35ba11194767ee87590b1847c99bab16362f3f730800d8ff00ca1c9e5371a5a1d7542b59b9667c970e86900c363a5dd154f65c5080a46b3859178ea98e7ac599b78eb744fef0a7a89dc20dbbce9288a56d1555d58d76c56cab20e358cfc32748076e0774b7040488216334ddb777fc7fffd9, 'image/jpeg', 'whatsup', ' ', 900, 'jnm,', '2015-06-26 16:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `db_contactus`
--

CREATE TABLE IF NOT EXISTS `db_contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `dateOfContact` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `db_contactus`
--

INSERT INTO `db_contactus` (`id`, `name`, `email`, `phone`, `message`, `dateOfContact`) VALUES
(2, 'Ravi', 'ravi@dezyre.com', '8789798', 'Messagjkge\r\n', '2015-07-05 21:01:33'),
(3, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:22:31'),
(4, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:26:06'),
(5, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:26:44'),
(6, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:27:10'),
(7, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:27:37'),
(8, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:28:02'),
(9, 'Yogesh Chauhan', 'anujsingh432@gmail.com', '08285250728', 'Message mera msg\r\n', '2015-07-06 17:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `db_feedback`
--

CREATE TABLE IF NOT EXISTS `db_feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `dateOfFeedback` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_feedback`
--

INSERT INTO `db_feedback` (`id`, `email`, `phone`, `feedback`, `dateOfFeedback`) VALUES
(1, 'ravi@dezyre.com', '8798879', 'yiuuik', '2015-07-06 19:35:30'),
(2, 'ravi@dezyre.com', '8798879', '', '2015-07-06 19:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `db_project_reviews`
--

CREATE TABLE IF NOT EXISTS `db_project_reviews` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `BBZPID` int(11) NOT NULL,
  `BBZUID` int(11) DEFAULT NULL,
  `verified` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) DEFAULT NULL,
  `dateOfReview` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`index`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `db_project_reviews`
--

INSERT INTO `db_project_reviews` (`index`, `BBZPID`, `BBZUID`, `verified`, `name`, `rating`, `review`, `dateOfReview`) VALUES
(1, 1000001001, 100000016, '', 'Yogesh', 4, 'Awesome Construction ', '2015-07-06 15:14:43'),
(2, 1000001001, 100000017, '', 'Ravi', 4, 'wonderful design', '2015-07-02 22:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `db_user_info`
--

CREATE TABLE IF NOT EXISTS `db_user_info` (
  `BBZUID` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'User''s Id',
  `verified` int(1) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL COMMENT 'User''s Contact Email',
  `password` varchar(255) NOT NULL COMMENT 'User''s password',
  `fname` varchar(255) NOT NULL COMMENT 'User''s First Name',
  `mname` varchar(255) DEFAULT NULL COMMENT 'User''s Middle Name',
  `lname` varchar(255) NOT NULL COMMENT 'User''s Last Name',
  `sex` enum('M','F','NS') NOT NULL COMMENT 'User''s Sex',
  `dateOfBirth` date NOT NULL COMMENT 'User''s Date of Birth',
  `designation` varchar(255) DEFAULT NULL COMMENT 'User''s Designation',
  `mobile` int(11) unsigned DEFAULT NULL COMMENT 'User''s Contact Mobile',
  `phone` int(11) unsigned DEFAULT NULL COMMENT 'User''s Contact Phone',
  `line1` varchar(255) NOT NULL COMMENT 'User''s Address Line 1',
  `line2` varchar(255) DEFAULT NULL COMMENT 'User''s Address Line 2',
  `place` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL COMMENT 'User''s Address City',
  `state` varchar(255) NOT NULL COMMENT 'User''s Address State',
  `pincode` int(11) unsigned NOT NULL COMMENT 'User''s Address Pincode',
  `dateOfEntry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'User''s Date of Entry',
  PRIMARY KEY (`BBZUID`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='User''s Database' AUTO_INCREMENT=100000019 ;

--
-- Dumping data for table `db_user_info`
--

INSERT INTO `db_user_info` (`BBZUID`, `verified`, `email`, `password`, `fname`, `mname`, `lname`, `sex`, `dateOfBirth`, `designation`, `mobile`, `phone`, `line1`, `line2`, `place`, `city`, `state`, `pincode`, `dateOfEntry`) VALUES
(100000000, 1, 'ravi@dezyre.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'Ravi', '', 'Kumar', 'M', '2015-06-17', 'Student', 2342432, 2354354, 'jsfjv', '', 'kfdsk', 'dsfs', 'sdaf', 0, '2015-06-28 11:04:51'),
(100000012, 0, 'ravi_5513@nda.com', '0000', 'Ravi', '', 'Kumar', 'M', '2015-06-11', '', 0, 0, 'djsf', '', 'dsf', 'dfsfs', '', 0, '2015-06-26 18:19:40'),
(100000016, 1, 'yogesh@dezyre.com', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 'ravi', '', 'kumar', '', '0000-00-00', '', 0, 7435, 'dfs', '', 'sdf', 'sf', 'fsd', 21, '2015-06-27 01:22:33'),
(100000017, 1, 'virat@dezyre.com', 'c77daee23b4958cd79a917ce1901e604ddf37247', '', NULL, '', 'M', '0000-00-00', NULL, NULL, NULL, '', NULL, '', '', '', 0, '2015-07-07 10:28:12'),
(100000018, 1, 'karan.buildblockz@gmail.com', 'f1c9238dff65b5fddb6ec2d2655154176acf4ba0', '', NULL, '', 'M', '0000-00-00', NULL, NULL, NULL, '', NULL, '', '', '', 0, '2015-07-07 15:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `db_user_meetup`
--

CREATE TABLE IF NOT EXISTS `db_user_meetup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `cmp_name` varchar(255) NOT NULL,
  `dateOfRequest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_user_messages_`
--

CREATE TABLE IF NOT EXISTS `db_user_messages_` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BBZBID` int(11) NOT NULL,
  `message` mediumtext NOT NULL,
  `file` longblob,
  `dateOfMessage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `db_user_messages_100000016`
--

CREATE TABLE IF NOT EXISTS `db_user_messages_100000016` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BBZBID` int(11) NOT NULL,
  `sendby` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL,
  `file` longblob,
  `dateOfMessage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `db_user_messages_100000016`
--

INSERT INTO `db_user_messages_100000016` (`id`, `BBZBID`, `sendby`, `message`, `file`, `dateOfMessage`) VALUES
(1, 1000001, 'me', 'hey', NULL, '2015-06-29 00:11:48'),
(2, 1000001, 'me', 'k', '', '2015-06-29 00:15:33'),
(3, 1000001, 'me', 'hey', '', '2015-06-29 00:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `db_user_messages_100000018`
--

CREATE TABLE IF NOT EXISTS `db_user_messages_100000018` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BBZBID` int(11) NOT NULL,
  `sendby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `file` longblob,
  `dateOfMessage` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
