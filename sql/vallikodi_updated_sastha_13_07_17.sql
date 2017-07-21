-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 12:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vallikodi`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BasicSearch` (IN `gender` INT(11), IN `age` INT(11), IN `height_from` INT(11), IN `height_to` INT(11), IN `mar_status` VARCHAR(25))  NO SQL
SELECT usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra, rel.rel_religion
FROM reg_userdetail AS usr
INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id
WHERE usr.user_gender = gender
AND usr.user_age = age
AND phy.height_from = phy_height
AND usr.user_maritalstatus = mar_status$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetOfficeByUser` (IN `userid` INT(11))  BEGIN
	SELECT
		user_email,
		user_fname
	FROM
		reg_userdetail
	INNER JOIN reg_communication_family ON reg_communication_family.reg_user_id = reg_userdetail.userdetail_id
	WHERE
		reg_userdetail.userdetail_id = userid ;
	END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_pwd` longtext NOT NULL,
  `admin_permission` int(1) NOT NULL,
  `admin_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `online_statues` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `adminuser_id` int(11) NOT NULL,
  `adminuser_name` varchar(255) NOT NULL,
  `adminuser_pwd` longtext NOT NULL,
  `adminuser_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `online_statues` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE `body_type` (
  `bodytype_id` int(11) NOT NULL,
  `typename` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complexion`
--

CREATE TABLE `complexion` (
  `complexion_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `countries_name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `edu_categoryid` int(11) NOT NULL,
  `edu_name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `education_category`
--

CREATE TABLE `education_category` (
  `educationcategory_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employed_in`
--

CREATE TABLE `employed_in` (
  `employedin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_status`
--

CREATE TABLE `family_status` (
  `familystatus_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `family_type`
--

CREATE TABLE `family_type` (
  `familytype_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_category` int(11) NOT NULL,
  `gallery_image` longtext NOT NULL,
  `gallert_desc` varchar(200) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `updatedon` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE `gallery_category` (
  `gallery_categoryid` int(11) NOT NULL,
  `category_role` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `height_relation`
--

CREATE TABLE `height_relation` (
  `heightrelation_id` int(11) NOT NULL,
  `feet_value` varchar(255) NOT NULL,
  `feet` varchar(255) NOT NULL,
  `cms` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luknam`
--

CREATE TABLE `luknam` (
  `luknam_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `marital_category`
--

CREATE TABLE `marital_category` (
  `maritalcategory_id` int(11) NOT NULL,
  `marital_name` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mother_tongue`
--

CREATE TABLE `mother_tongue` (
  `mothertongue_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nakshathra`
--

CREATE TABLE `nakshathra` (
  `nakshathra_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `occupation_id` int(11) NOT NULL,
  `occupation_catid` int(11) NOT NULL,
  `occupation_name` varchar(200) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `occupation_category`
--

CREATE TABLE `occupation_category` (
  `occ_category_id` int(11) NOT NULL,
  `occupation_name` varchar(200) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_by`
--

CREATE TABLE `registered_by` (
  `registeredby_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_communication_family`
--

CREATE TABLE `reg_communication_family` (
  `communicationfamily_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL COMMENT 'Stores the user id to map which user details',
  `comm_residence` varchar(255) NOT NULL,
  `comm_current_countrycountry` varchar(255) NOT NULL,
  `comm_current_city` varchar(255) NOT NULL,
  `comm_current_district` varchar(255) NOT NULL,
  `comm_communication_address` varchar(255) NOT NULL,
  `comm_phone_no` varchar(20) NOT NULL,
  `comm_mobile_no` varchar(20) NOT NULL,
  `comm_father_name` varchar(155) NOT NULL,
  `comm_mother_name` varchar(155) NOT NULL,
  `comm_father_employment` varchar(255) NOT NULL,
  `comm_mother_employment` varchar(255) NOT NULL,
  `comm_family_status` int(11) NOT NULL,
  `comm_family_type` int(11) NOT NULL,
  `comm_number_of_brothers_el` int(11) NOT NULL,
  `comm_number_of_brothers_yo` int(11) NOT NULL,
  `comm_number_of_brothers_el_mar` int(11) NOT NULL,
  `comm_number_of_brothers_yo_mar` int(11) NOT NULL,
  `comm_number_of_sisters_el` int(11) NOT NULL,
  `comm_number_of_sisters_yo` int(11) NOT NULL,
  `comm_number_of_sisters_el_mar` int(11) NOT NULL,
  `comm_number_of_sisters_yo_mar` int(11) NOT NULL,
  `comm_about_family` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_communication_family`
--

INSERT INTO `reg_communication_family` (`communicationfamily_id`, `reg_user_id`, `comm_residence`, `comm_current_countrycountry`, `comm_current_city`, `comm_current_district`, `comm_communication_address`, `comm_phone_no`, `comm_mobile_no`, `comm_father_name`, `comm_mother_name`, `comm_father_employment`, `comm_mother_employment`, `comm_family_status`, `comm_family_type`, `comm_number_of_brothers_el`, `comm_number_of_brothers_yo`, `comm_number_of_brothers_el_mar`, `comm_number_of_brothers_yo_mar`, `comm_number_of_sisters_el`, `comm_number_of_sisters_yo`, `comm_number_of_sisters_el_mar`, `comm_number_of_sisters_yo_mar`, `comm_about_family`) VALUES
(1, 2, 'nehru street', 'india', 'puduchery', 'puducherry', 'nehru stree', '9874561230', '9874561230', 'father', 'mother', 'retried man', 'home maker', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'good family');

-- --------------------------------------------------------

--
-- Table structure for table `reg_education_occupation`
--

CREATE TABLE `reg_education_occupation` (
  `educationoccupation_id` int(30) NOT NULL,
  `reg_user_id` int(11) NOT NULL COMMENT 'Stores the user id to map which user details',
  `edu_education` int(11) NOT NULL,
  `edu_educationdetails` longtext NOT NULL,
  `edu_occupation` int(11) NOT NULL,
  `edu_employedin` int(11) NOT NULL,
  `edu_montlyincome` varchar(100) NOT NULL,
  `edu_occupationdetail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_image_horoscope`
--

CREATE TABLE `reg_image_horoscope` (
  `imagehoroscope_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `r_1` int(11) NOT NULL,
  `r_2` int(11) NOT NULL,
  `r_3` int(11) NOT NULL,
  `r_4` int(11) NOT NULL,
  `r_5` int(11) NOT NULL,
  `r_6` int(11) NOT NULL,
  `r_7` int(11) NOT NULL,
  `r_8` int(11) NOT NULL,
  `r_9` int(11) NOT NULL,
  `r_10` int(11) NOT NULL,
  `a_1` int(11) NOT NULL,
  `a_2` int(11) NOT NULL,
  `a_3` int(11) NOT NULL,
  `a_4` int(11) NOT NULL,
  `a_5` int(11) NOT NULL,
  `a_6` int(11) NOT NULL,
  `a_7` int(11) NOT NULL,
  `a_8` int(11) NOT NULL,
  `a_9` int(11) NOT NULL,
  `a_10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_payment`
--

CREATE TABLE `reg_payment` (
  `regpayment_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `bill_number` int(11) NOT NULL,
  `bank_name` longtext NOT NULL,
  `cheque_dd_number` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `period_in_month` int(11) NOT NULL,
  `no_of_profiles_viewed` int(5) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0',
  `startdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_physical_expectation`
--

CREATE TABLE `reg_physical_expectation` (
  `physicalexpectation_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL COMMENT 'Stores the user id to map which user details',
  `phy_height` varchar(20) NOT NULL,
  `phy_weight` varchar(20) NOT NULL,
  `phy_bodytype` int(11) NOT NULL,
  `phy_complexion` int(11) NOT NULL,
  `phy_physicalstatus` varchar(50) NOT NULL,
  `phy_food` int(11) NOT NULL,
  `phy_yourpersonality` longtext NOT NULL,
  `phy_searchage_from` int(11) NOT NULL,
  `phy_searchage_to` int(11) NOT NULL,
  `phy_searchmarital_status` varchar(11) NOT NULL,
  `phy_searchedu_status` varchar(255) NOT NULL,
  `phy_expectationfood` int(3) NOT NULL,
  `phy_expectationabout_lifepartner` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_religion_ethnicity`
--

CREATE TABLE `reg_religion_ethnicity` (
  `religionethnicity_id` int(30) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `rel_timeofbirth` varchar(100) NOT NULL,
  `rel_mothertongue` varchar(255) NOT NULL,
  `rel_religion` varchar(50) NOT NULL,
  `rel_caste` varchar(50) NOT NULL,
  `rel_dhosham` varchar(255) NOT NULL,
  `rel_nakshathra` varchar(255) NOT NULL,
  `rel_luknam` varchar(255) NOT NULL,
  `rel_gothra` varchar(255) NOT NULL,
  `rel_zodiacsign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_religion_ethnicity`
--

INSERT INTO `reg_religion_ethnicity` (`religionethnicity_id`, `reg_user_id`, `rel_timeofbirth`, `rel_mothertongue`, `rel_religion`, `rel_caste`, `rel_dhosham`, `rel_nakshathra`, `rel_luknam`, `rel_gothra`, `rel_zodiacsign`) VALUES
(1, 2, '12:00', 'tamil', 'hindu', 'mbc', '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `reg_userdetail`
--

CREATE TABLE `reg_userdetail` (
  `userdetail_id` int(11) NOT NULL,
  `user_email` longtext NOT NULL,
  `user_pwd` longtext NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_gender` int(11) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_dob` date NOT NULL DEFAULT '0000-00-00',
  `user_maritalstatus` int(11) NOT NULL,
  `user_registeredby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renew_detail`
--

CREATE TABLE `renew_detail` (
  `renewdetail_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `starting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ending_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `totalno_of_profile` int(11) NOT NULL,
  `no_of_profile_viewed` int(11) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `successstories_id` int(11) NOT NULL,
  `vallikodi_id` int(11) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `male_name` varchar(255) NOT NULL,
  `female_name` varchar(255) NOT NULL,
  `title` longtext NOT NULL,
  `image` longtext NOT NULL,
  `description` longtext NOT NULL,
  `marriage_date` date NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `userimages_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `images` longtext NOT NULL,
  `user_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zodiac_sign`
--

CREATE TABLE `zodiac_sign` (
  `zodiacsign_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`adminuser_id`);

--
-- Indexes for table `body_type`
--
ALTER TABLE `body_type`
  ADD PRIMARY KEY (`bodytype_id`);

--
-- Indexes for table `complexion`
--
ALTER TABLE `complexion`
  ADD PRIMARY KEY (`complexion_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `education_category`
--
ALTER TABLE `education_category`
  ADD PRIMARY KEY (`educationcategory_id`);

--
-- Indexes for table `employed_in`
--
ALTER TABLE `employed_in`
  ADD PRIMARY KEY (`employedin_id`);

--
-- Indexes for table `family_status`
--
ALTER TABLE `family_status`
  ADD PRIMARY KEY (`familystatus_id`),
  ADD KEY `familystatus_id` (`familystatus_id`);

--
-- Indexes for table `family_type`
--
ALTER TABLE `family_type`
  ADD PRIMARY KEY (`familytype_id`),
  ADD KEY `familytype_id` (`familytype_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`),
  ADD UNIQUE KEY `gallery_category` (`gallery_category`),
  ADD KEY `gallery_category_2` (`gallery_category`);

--
-- Indexes for table `gallery_category`
--
ALTER TABLE `gallery_category`
  ADD PRIMARY KEY (`gallery_categoryid`);

--
-- Indexes for table `height_relation`
--
ALTER TABLE `height_relation`
  ADD PRIMARY KEY (`heightrelation_id`);

--
-- Indexes for table `luknam`
--
ALTER TABLE `luknam`
  ADD PRIMARY KEY (`luknam_id`);

--
-- Indexes for table `marital_category`
--
ALTER TABLE `marital_category`
  ADD PRIMARY KEY (`maritalcategory_id`);

--
-- Indexes for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
  ADD PRIMARY KEY (`mothertongue_id`);

--
-- Indexes for table `nakshathra`
--
ALTER TABLE `nakshathra`
  ADD PRIMARY KEY (`nakshathra_id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`occupation_id`);

--
-- Indexes for table `occupation_category`
--
ALTER TABLE `occupation_category`
  ADD PRIMARY KEY (`occ_category_id`);

--
-- Indexes for table `registered_by`
--
ALTER TABLE `registered_by`
  ADD PRIMARY KEY (`registeredby_id`);

--
-- Indexes for table `reg_communication_family`
--
ALTER TABLE `reg_communication_family`
  ADD PRIMARY KEY (`communicationfamily_id`),
  ADD KEY `reg_user_id` (`reg_user_id`),
  ADD KEY `comm_family_status` (`comm_family_status`,`comm_family_type`);

--
-- Indexes for table `reg_education_occupation`
--
ALTER TABLE `reg_education_occupation`
  ADD PRIMARY KEY (`educationoccupation_id`),
  ADD KEY `reg_user_id` (`reg_user_id`),
  ADD KEY `edu_employedin` (`edu_employedin`),
  ADD KEY `edu_education` (`edu_education`),
  ADD KEY `edu_occupation` (`edu_occupation`);

--
-- Indexes for table `reg_image_horoscope`
--
ALTER TABLE `reg_image_horoscope`
  ADD PRIMARY KEY (`imagehoroscope_id`),
  ADD KEY `reg_user_id` (`reg_user_id`);

--
-- Indexes for table `reg_payment`
--
ALTER TABLE `reg_payment`
  ADD PRIMARY KEY (`regpayment_id`),
  ADD KEY `reg_user_id` (`reg_user_id`);

--
-- Indexes for table `reg_physical_expectation`
--
ALTER TABLE `reg_physical_expectation`
  ADD PRIMARY KEY (`physicalexpectation_id`),
  ADD KEY `reg_user_id` (`reg_user_id`),
  ADD KEY `phy_food` (`phy_food`),
  ADD KEY `phy_complexion` (`phy_complexion`),
  ADD KEY `phy_bodytype` (`phy_bodytype`);

--
-- Indexes for table `reg_religion_ethnicity`
--
ALTER TABLE `reg_religion_ethnicity`
  ADD PRIMARY KEY (`religionethnicity_id`),
  ADD KEY `reg_user_id` (`reg_user_id`);

--
-- Indexes for table `reg_userdetail`
--
ALTER TABLE `reg_userdetail`
  ADD PRIMARY KEY (`userdetail_id`),
  ADD KEY `user_maritalstatus` (`user_maritalstatus`,`user_registeredby`),
  ADD KEY `user_registeredby` (`user_registeredby`);

--
-- Indexes for table `renew_detail`
--
ALTER TABLE `renew_detail`
  ADD PRIMARY KEY (`renewdetail_id`),
  ADD KEY `reg_user_id` (`reg_user_id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`successstories_id`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`userimages_id`);

--
-- Indexes for table `zodiac_sign`
--
ALTER TABLE `zodiac_sign`
  ADD PRIMARY KEY (`zodiacsign_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `adminuser_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `body_type`
--
ALTER TABLE `body_type`
  MODIFY `bodytype_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `education_category`
--
ALTER TABLE `education_category`
  MODIFY `educationcategory_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employed_in`
--
ALTER TABLE `employed_in`
  MODIFY `employedin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family_status`
--
ALTER TABLE `family_status`
  MODIFY `familystatus_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `family_type`
--
ALTER TABLE `family_type`
  MODIFY `familytype_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_category`
--
ALTER TABLE `gallery_category`
  MODIFY `gallery_categoryid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `height_relation`
--
ALTER TABLE `height_relation`
  MODIFY `heightrelation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `luknam`
--
ALTER TABLE `luknam`
  MODIFY `luknam_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
  MODIFY `mothertongue_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nakshathra`
--
ALTER TABLE `nakshathra`
  MODIFY `nakshathra_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `occupation_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `occupation_category`
--
ALTER TABLE `occupation_category`
  MODIFY `occ_category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registered_by`
--
ALTER TABLE `registered_by`
  MODIFY `registeredby_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `marital_category`
--
ALTER TABLE `marital_category`
  ADD CONSTRAINT `marital_category_ibfk_1` FOREIGN KEY (`maritalcategory_id`) REFERENCES `reg_userdetail` (`user_maritalstatus`);

--
-- Constraints for table `reg_userdetail`
--
ALTER TABLE `reg_userdetail`
  ADD CONSTRAINT `reg_userdetail_ibfk_1` FOREIGN KEY (`user_registeredby`) REFERENCES `registered_by` (`registeredby_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
