SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- Database: `test_database`

DROP DATABASE IF EXISTS KAJERMed;
CREATE DATABASE KAJERMed;
USE KAJERMed;

-- --------------------------------------------------------
-- Table structure for table `patients`

CREATE TABLE IF NOT EXISTS `patients` (
  `patient_id` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(250) NOT NULL,
  `last_name` VARCHAR(250) NOT NULL,
  `gender` VARCHAR(250) NOT NULL,
  `dob` DATE NOT NULL,
  `genetics` TEXT NOT NULL,
  `diabetes` TINYINT(1) NOT NULL,
  `other_conditions` TEXT NOT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

-- Bit data type: 0 false, 1 true

-- -------------------------------------------------------
-- test data for table `patients`

INSERT INTO `patients`(`first_name`, `last_name`, `gender`, `dob`, `genetics`, `diabetes`, `other_conditions`) 
VALUES('Jason', 'Jones', 'Male', '1975-04-09', 'His genetics are unknown', '1', 'He has no other known conditions'),
('Frank', 'Joe', 'Male', '1975-04-09', 'His genetics are unknown', '0', 'He has no other known conditions'),
('Barbara', 'Miller', 'Female', '1965-01-21', 'Her genetics are unknown', '0', 'High blood pressure'),
('Olivia', 'White', 'Female', '1985-03-15', 'Her genetics are unknown', '0', 'She has no other known conditions'),
('Harold', 'Williams', 'Male', '1935-08-20', 'His genetics are unknown', '0', 'He has glaucoma and arthritis');

-- --------------------------------------------------------
-- table structure for 'patient_medications'

CREATE TABLE IF NOT EXISTS `patient_medications` (
  `medications_patient_id` SMALLINT(5) UNSIGNED NOT NULL,
  `medication_id` SMALLINT(5) NOT NULL,
  `vest` TINYINT(1) NOT NULL, -- boolean fields are y/n
  `acapella` TINYINT(1) NOT NULL,
  `plumozyne_yn` TINYINT(1) NOT NULL,
  `plumozyne_quantity` TEXT NOT NULL,
  `plumozyne_date` DATE,
  `inhaled_tobi` TINYINT(1) NOT NULL,
  `inhaled_colistin` TINYINT(1) NOT NULL,
  `hypertonic_saline` SMALLINT(5) NOT NULL,
  `azithromycin` TINYINT(1) NOT NULL,
  `clarithromycin` TINYINT(1) NOT NULL,
  `inhaled_gentamicin` TINYINT(1) NOT NULL,
  `enzymes_yn` TINYINT(1) NOT NULL,
  `enzymes_type_dosage` TEXT NOT NULL,
  PRIMARY KEY (`medication_id`),
  FOREIGN KEY (`medications_patient_id`) REFERENCES `patients`(`patient_id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

-- -----------------------------------------------------
-- test data for patient_medications

INSERT INTO `patient_medications` (`medications_patient_id`,`medication_id`, `vest`, `acapella`, `plumozyne_yn`, 
`plumozyne_quantity`, `plumozyne_date`, `inhaled_tobi`, `inhaled_colistin`, `hypertonic_saline`, `azithromycin`, 
`clarithromycin`, `inhaled_gentamicin`, `enzymes_yn`, `enzymes_type_dosage`)
VALUES('1','1', '0', '0', '0','0', 'NULL', '0', '0', '0', '0', '0', '0', '0', 'none'),
('2','2', '1', '0', '1','2mg', '2020-03-15', '0', '0', '0', '0', '0', '0', '0', 'none'),
('3','3', '0', '0', '0','0', 'NULL', '0', '0', '3', '0', '0', '0', '1', 'trypsin 50mcg');

-- -----------------------------------------------------
-- table structure for doctor visits

CREATE TABLE IF NOT EXISTS `doctor_visits` (
  `dr_patient_id` SMALLINT(5) UNSIGNED NOT NULL,
  `visit_id` INT NOT NULL,
  `visit_date` DATE NOT NULL,
  `doctor_seen` VARCHAR(250) NOT NULL,
  `FEV_1_first` VARCHAR(250),
  `FEV_1_second` VARCHAR(250),
  `FEV_1_third` VARCHAR(250),
  PRIMARY KEY (`visit_id`),
  FOREIGN KEY (`dr_patient_id`) REFERENCES `patients`(`patient_id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

-- ----------------------------------------------------------
-- test data for doctor_visits
INSERT INTO `doctor_visits`(`dr_patient_id`, `visit_id`, `visit_date`, `doctor_seen`, `FEV_1_first`, 
`FEV_1_second`, `FEV_1_third`)
VALUES('1','1','2010-01-16','Dr. Simpson','72','69','70'),
('2','2','2010-02-02','Dr. Wilson','64','63','60'),
('1','3','2010-02-13','Dr. Simpson','71','65','72');

-- ----------------------------------------------------------
-- table structure for users

CREATE TABLE IF NOT EXISTS `users`(
`username` VARCHAR(50) NOT NULL,
`password` VARCHAR(250) NOT NULL,
`is_admin` TINYINT(1) NOT NULL,
PRIMARY KEY (`username`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------
-- test data for users

INSERT INTO `users`(`username`, `password`, `is_admin`)
VALUES('katie', 'pass123', '1'),
('doctorbob', 'smartguy11', '0');