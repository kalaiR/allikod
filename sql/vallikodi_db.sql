-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2017 at 04:13 PM
-- Server version: 5.5.55-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vallikodi_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `BasicSearch`(IN `gender` INT(11), IN `age` INT(11), IN `height_from` INT(11), IN `height_to` INT(11), IN `mar_status` VARCHAR(25))
    NO SQL
SELECT usr.user_fname, usr.user_dob, usr.user_age, rel.rel_nakshathra, rel.rel_religion
FROM reg_userdetail AS usr
INNER JOIN reg_religion_ethnicity AS rel ON rel.reg_user_id = usr.userdetail_id
INNER JOIN reg_physical_expectation AS phy ON phy.reg_user_id = usr.userdetail_id
WHERE usr.user_gender = gender
AND usr.user_age = age
AND phy.height_from = phy_height
AND usr.user_maritalstatus = mar_status$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetOfficeByUser`(IN `userid` INT(11))
BEGIN
	SELECT
		user_email,
		user_fname
	FROM
		reg_userdetail
	INNER JOIN reg_communication_family ON reg_communication_family.reg_user_id = reg_userdetail.userdetail_id
	WHERE
		reg_userdetail.userdetail_id = userid ;
	END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `GetUserCount`()
    NO SQL
select count(*) as total_user,(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='online') as all_onlineuser, 
	(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='online' AND user_active_status=1) as active_onlineuser,
	(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='online' AND user_active_status=0) as inactive_onlineuser,
   	(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='simple') as all_simpleuser, 
	(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='simple' AND user_active_status=1) as active_simpleuser,
	(select COUNT(*) FROM reg_userdetail WHERE user_online_or_simple='simple' AND user_active_status=0) as inactive_simpleuser,
	(select COUNT(*) FROM reg_userdetail WHERE user_active_status=1) as total_activeuser,
	(select COUNT(*) FROM reg_userdetail WHERE user_active_status=0) as total_inactiveuser 
from reg_userdetail$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(100) NOT NULL,
  `admin_pwd` longtext NOT NULL,
  `admin_permission` int(1) NOT NULL,
  `admin_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `online_statues` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `adminuser_id` int(11) NOT NULL AUTO_INCREMENT,
  `adminuser_name` varchar(255) NOT NULL,
  `adminuser_pwd` longtext NOT NULL,
  `adminuser_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `online_statues` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`adminuser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `body_type`
--

CREATE TABLE IF NOT EXISTS `body_type` (
  `bodytype_id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bodytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `complexion`
--

CREATE TABLE IF NOT EXISTS `complexion` (
  `complexion_id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`complexion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `edu_categoryid` int(11) NOT NULL,
  `edu_name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`education_id`),
  KEY `edu_categoryid` (`edu_categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `education_category`
--

CREATE TABLE IF NOT EXISTS `education_category` (
  `educationcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`educationcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employed_in`
--

CREATE TABLE IF NOT EXISTS `employed_in` (
  `employedin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`employedin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `family_status`
--

CREATE TABLE IF NOT EXISTS `family_status` (
  `familystatus_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`familystatus_id`),
  KEY `familystatus_id` (`familystatus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `family_type`
--

CREATE TABLE IF NOT EXISTS `family_type` (
  `familytype_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`familytype_id`),
  KEY `familytype_id` (`familytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `food_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`food_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_category` int(11) NOT NULL,
  `gallery_image` longtext NOT NULL,
  `gallert_desc` varchar(200) NOT NULL,
  `createdon` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `updatedon` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`gallery_id`),
  UNIQUE KEY `gallery_category` (`gallery_category`),
  KEY `gallery_category_2` (`gallery_category`),
  KEY `gallery_category_3` (`gallery_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_category`
--

CREATE TABLE IF NOT EXISTS `gallery_category` (
  `gallery_categoryid` int(11) NOT NULL AUTO_INCREMENT,
  `category_role` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`gallery_categoryid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `height_relation`
--

CREATE TABLE IF NOT EXISTS `height_relation` (
  `heightrelation_id` int(11) NOT NULL AUTO_INCREMENT,
  `feet_value` varchar(255) NOT NULL,
  `feet` varchar(255) NOT NULL,
  `cms` int(11) NOT NULL,
  PRIMARY KEY (`heightrelation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `luknam`
--

CREATE TABLE IF NOT EXISTS `luknam` (
  `luknam_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`luknam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `marital_category`
--

CREATE TABLE IF NOT EXISTS `marital_category` (
  `maritalcategory_id` int(11) NOT NULL,
  `marital_name` varchar(200) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`maritalcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mother_tongue`
--

CREATE TABLE IF NOT EXISTS `mother_tongue` (
  `mothertongue_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`mothertongue_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nakshathra`
--

CREATE TABLE IF NOT EXISTS `nakshathra` (
  `nakshathra_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`nakshathra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE IF NOT EXISTS `occupation` (
  `occupation_id` int(11) NOT NULL AUTO_INCREMENT,
  `occupation_catid` int(11) NOT NULL,
  `occupation_name` varchar(200) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`occupation_id`),
  KEY `occupation_catid` (`occupation_catid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `occupation_category`
--

CREATE TABLE IF NOT EXISTS `occupation_category` (
  `occ_category_id` int(11) NOT NULL AUTO_INCREMENT,
  `occupation_name` varchar(200) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`occ_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registered_by`
--

CREATE TABLE IF NOT EXISTS `registered_by` (
  `registeredby_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`registeredby_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `reg_communication_family`
--

CREATE TABLE IF NOT EXISTS `reg_communication_family` (
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
  `comm_about_family` longtext NOT NULL,
  KEY `comm_family_status` (`comm_family_status`),
  KEY `comm_family_type` (`comm_family_type`),
  KEY `reg_user_id` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_education_occupation`
--

CREATE TABLE IF NOT EXISTS `reg_education_occupation` (
  `educationoccupation_id` int(30) NOT NULL,
  `reg_user_id` int(11) NOT NULL COMMENT 'Stores the user id to map which user details',
  `edu_education` int(11) NOT NULL,
  `edu_educationdetails` longtext NOT NULL,
  `edu_occupation` int(11) NOT NULL,
  `edu_employedin` int(11) NOT NULL,
  `edu_montlyincome` varchar(100) NOT NULL,
  `edu_occupationdetail` longtext NOT NULL,
  PRIMARY KEY (`educationoccupation_id`),
  KEY `reg_user_id` (`reg_user_id`),
  KEY `edu_employedin` (`edu_employedin`),
  KEY `edu_education` (`edu_education`),
  KEY `edu_occupation` (`edu_occupation`),
  KEY `edu_employedin_2` (`edu_employedin`),
  KEY `edu_occupation_2` (`edu_occupation`),
  KEY `edu_education_2` (`edu_education`),
  KEY `reg_user_id_2` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_image_horoscope`
--

CREATE TABLE IF NOT EXISTS `reg_image_horoscope` (
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
  `a_10` int(11) NOT NULL,
  PRIMARY KEY (`imagehoroscope_id`),
  KEY `reg_user_id` (`reg_user_id`),
  KEY `reg_user_id_2` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_payment`
--

CREATE TABLE IF NOT EXISTS `reg_payment` (
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
  `enddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`regpayment_id`),
  KEY `reg_user_id` (`reg_user_id`),
  KEY `reg_user_id_2` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_physical_expectation`
--

CREATE TABLE IF NOT EXISTS `reg_physical_expectation` (
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
  `phy_expectationabout_lifepartner` longtext NOT NULL,
  PRIMARY KEY (`physicalexpectation_id`),
  KEY `reg_user_id` (`reg_user_id`),
  KEY `phy_food` (`phy_food`),
  KEY `phy_complexion` (`phy_complexion`),
  KEY `phy_bodytype` (`phy_bodytype`),
  KEY `phy_bodytype_2` (`phy_bodytype`),
  KEY `phy_complexion_2` (`phy_complexion`),
  KEY `phy_food_2` (`phy_food`),
  KEY `reg_user_id_2` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_religion_ethnicity`
--

CREATE TABLE IF NOT EXISTS `reg_religion_ethnicity` (
  `religionethnicity_id` int(30) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `rel_timeofbirth` varchar(100) NOT NULL,
  `rel_mothertongue_id` int(11) NOT NULL,
  `rel_religion` varchar(50) NOT NULL,
  `rel_caste` varchar(50) NOT NULL,
  `rel_dhosham` varchar(255) NOT NULL,
  `rel_nakshathra_id` int(11) NOT NULL,
  `rel_luknam_id` int(11) NOT NULL,
  `rel_gothra` varchar(255) NOT NULL,
  `rel_zodiacsign_id` int(11) NOT NULL,
  PRIMARY KEY (`religionethnicity_id`),
  KEY `reg_user_id` (`reg_user_id`),
  KEY `reg_user_id_2` (`reg_user_id`),
  KEY `reg_user_id_3` (`reg_user_id`),
  KEY `rel_nakshathra_id` (`rel_nakshathra_id`),
  KEY `rel_luknam_id` (`rel_luknam_id`),
  KEY `rel_zodiacsign_id` (`rel_zodiacsign_id`),
  KEY `reg_user_id_4` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg_userdetail`
--

CREATE TABLE IF NOT EXISTS `reg_userdetail` (
  `userdetail_id` int(11) NOT NULL,
  `userdetail_profile_id` int(11) NOT NULL,
  `user_email` longtext NOT NULL,
  `user_pwd` longtext NOT NULL,
  `user_fname` varchar(255) NOT NULL,
  `user_gender` int(11) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_dob` date NOT NULL DEFAULT '0000-00-00',
  `user_online_or_simple` varchar(15) NOT NULL,
  `user_active_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `user_added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_maritalstatus` int(11) NOT NULL,
  `user_registeredby` int(11) NOT NULL,
  PRIMARY KEY (`userdetail_id`),
  KEY `user_maritalstatus` (`user_maritalstatus`,`user_registeredby`),
  KEY `user_registeredby` (`user_registeredby`),
  KEY `userdetail_profile_id` (`userdetail_profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `renew_detail`
--

CREATE TABLE IF NOT EXISTS `renew_detail` (
  `renewdetail_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `starting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ending_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `totalno_of_profile` int(11) NOT NULL,
  `no_of_profile_viewed` int(11) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`renewdetail_id`),
  KEY `reg_user_id` (`reg_user_id`),
  KEY `reg_user_id_2` (`reg_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE IF NOT EXISTS `success_stories` (
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
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`successstories_id`),
  KEY `vallikodi_id` (`vallikodi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE IF NOT EXISTS `user_images` (
  `userimages_id` int(11) NOT NULL,
  `reg_user_id` int(11) NOT NULL,
  `images` longtext NOT NULL,
  `user_profile_id` int(11) NOT NULL,
  PRIMARY KEY (`userimages_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `zodiac_sign`
--

CREATE TABLE IF NOT EXISTS `zodiac_sign` (
  `zodiacsign_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT '1',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`zodiacsign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`edu_categoryid`) REFERENCES `education_category` (`educationcategory_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`gallery_category`) REFERENCES `gallery_category` (`gallery_categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marital_category`
--
ALTER TABLE `marital_category`
  ADD CONSTRAINT `marital_category_ibfk_1` FOREIGN KEY (`maritalcategory_id`) REFERENCES `reg_userdetail` (`user_maritalstatus`);

--
-- Constraints for table `occupation`
--
ALTER TABLE `occupation`
  ADD CONSTRAINT `occupation_ibfk_1` FOREIGN KEY (`occupation_catid`) REFERENCES `occupation_category` (`occ_category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_communication_family`
--
ALTER TABLE `reg_communication_family`
  ADD CONSTRAINT `reg_communication_family_ibfk_1` FOREIGN KEY (`comm_family_status`) REFERENCES `family_status` (`familystatus_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_communication_family_ibfk_2` FOREIGN KEY (`comm_family_type`) REFERENCES `family_type` (`familytype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_communication_family_ibfk_3` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_education_occupation`
--
ALTER TABLE `reg_education_occupation`
  ADD CONSTRAINT `reg_education_occupation_ibfk_1` FOREIGN KEY (`edu_employedin`) REFERENCES `employed_in` (`employedin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_education_occupation_ibfk_2` FOREIGN KEY (`edu_occupation`) REFERENCES `occupation` (`occupation_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_education_occupation_ibfk_3` FOREIGN KEY (`edu_education`) REFERENCES `education` (`education_id`),
  ADD CONSTRAINT `reg_education_occupation_ibfk_4` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_image_horoscope`
--
ALTER TABLE `reg_image_horoscope`
  ADD CONSTRAINT `reg_image_horoscope_ibfk_1` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_payment`
--
ALTER TABLE `reg_payment`
  ADD CONSTRAINT `reg_payment_ibfk_1` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`);

--
-- Constraints for table `reg_physical_expectation`
--
ALTER TABLE `reg_physical_expectation`
  ADD CONSTRAINT `reg_physical_expectation_ibfk_1` FOREIGN KEY (`phy_bodytype`) REFERENCES `body_type` (`bodytype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_physical_expectation_ibfk_2` FOREIGN KEY (`phy_complexion`) REFERENCES `complexion` (`complexion_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_physical_expectation_ibfk_3` FOREIGN KEY (`phy_food`) REFERENCES `food` (`food_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_physical_expectation_ibfk_4` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_religion_ethnicity`
--
ALTER TABLE `reg_religion_ethnicity`
  ADD CONSTRAINT `reg_religion_ethnicity_ibfk_1` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_religion_ethnicity_ibfk_2` FOREIGN KEY (`rel_nakshathra_id`) REFERENCES `nakshathra` (`nakshathra_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_religion_ethnicity_ibfk_3` FOREIGN KEY (`rel_luknam_id`) REFERENCES `luknam` (`luknam_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reg_religion_ethnicity_ibfk_4` FOREIGN KEY (`rel_zodiacsign_id`) REFERENCES `zodiac_sign` (`zodiacsign_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reg_userdetail`
--
ALTER TABLE `reg_userdetail`
  ADD CONSTRAINT `reg_userdetail_ibfk_1` FOREIGN KEY (`user_registeredby`) REFERENCES `registered_by` (`registeredby_id`);

--
-- Constraints for table `renew_detail`
--
ALTER TABLE `renew_detail`
  ADD CONSTRAINT `renew_detail_ibfk_1` FOREIGN KEY (`reg_user_id`) REFERENCES `reg_userdetail` (`userdetail_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD CONSTRAINT `success_stories_ibfk_1` FOREIGN KEY (`vallikodi_id`) REFERENCES `reg_userdetail` (`userdetail_profile_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
