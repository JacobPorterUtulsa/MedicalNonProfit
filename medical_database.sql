SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test_database`
--
DROP DATABASE IF EXISTS KAJERMed;
CREATE DATABASE KAJERMed;
USE KAJERMed;
-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(250) NOT NULL,
  `last_name` VARCHAR(250) NOT NULL,
  `gender` VARCHAR(250) NOT NULL,
  `dob` DATE NOT NULL,
  `genetics` TEXT NOT NULL,
  `diabetes` BOOL NOT NULL,
  `other_conditions` TEXT NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patinets`
--

INSERT INTO `patients` (`patient_id`, `first_name`, `last_name`, `gender`, `dob`, `genetics`, `diabetes`, `other_conditions`) VALUES
(1, 'Jason', 'Jones', 'Male', '1975-04-09', 'His genetics are unknown', 1, 'He has no other known conditions'),
(2, 'Frank', 'Joe', 'Male', '1975-04-09', 'His genetics are unknown', 0, 'He has no other known conditions');

-- --------------------------------------------------------

--
-- Table structure for 'patient_medications'
--

CREATE TABLE IF NOT EXISTS `patient_medications` (
  `patient_id` SMALLINT(5) NOT NULL,
  `medication_id` SMALLINT(5) NOT NULL,
  `vest` BOOL NOT NULL, -- boolean fields are y/n
  `acapella` BOOL NOT NULL,
  `plumozyne_yn` BOOL NOT NULL,
  `plumozyne_quantity` TEXT NOT NULL,
  `plumozyne_date` DATE NOT NULL,
  `inhaled_tobi` BOOL NOT NULL,
  `inhaled_colistin` BOOL NOT NULL,
  `hypertonic_saline` SMALLINT(5) NOT NULL, -- could also be ENUM(`3%`,`7%`,`no`
  `azithromycin` BOOL NOT NULL,
  `clarithromycin` BOOL NOT NULL,
  `inhaled_gentamicin` BOOL NOT NULL,
  `enzymes_yn` BOOL NOT NULL,
  `enzymes_type_dosage` TEXT NOT NULL,
  PRIMARY KEY (`medication_id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

-- -----------------------------------------------------

--
-- dump data here for patient_medications
--

-- -----------------------------------------------------

--
-- table structure for doctor visits
--

CREATE TABLE IF NOT EXISTS `doctor_visits` (
  `patient_id` SMALLINT(5) NOT NULL,
  `visit_id` INT NOT NULL,
  `visit_date` DATE NOT NULL,
  `doctor_seen` VARCHAR(250) NOT NULL,
  `FEV_1` VARCHAR(250) NOT NULL, -- must display highest numerical value, could be SET data type?
  PRIMARY KEY (`visit_id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;