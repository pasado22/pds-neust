-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 03:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pds_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `act_no` int(11) NOT NULL,
  `act_time` datetime NOT NULL DEFAULT current_timestamp(),
  `act_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`act_no`, `act_time`, `act_text`) VALUES
(5, '2022-04-30 14:46:19', 'A user named: Alg Bed, has just created an account.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` varchar(11) NOT NULL,
  `admin_name` varchar(24) NOT NULL,
  `admin_pass` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `admin_name`, `admin_pass`) VALUES
('pg0srvtv0kz', 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `user_addr_tbl`
--

CREATE TABLE `user_addr_tbl` (
  `user_id` varchar(11) NOT NULL,
  `addr_user_hbl` varchar(12) DEFAULT NULL,
  `addr_user_strt` varchar(12) DEFAULT NULL,
  `addr_user_subdiv` varchar(12) DEFAULT NULL,
  `addr_user_brgy` varchar(12) NOT NULL,
  `addr_user_city` varchar(12) NOT NULL,
  `addr_user_prov` varchar(12) NOT NULL,
  `addr_user_zip` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_addr_tbl`
--

INSERT INTO `user_addr_tbl` (`user_id`, `addr_user_hbl`, `addr_user_strt`, `addr_user_subdiv`, `addr_user_brgy`, `addr_user_city`, `addr_user_prov`, `addr_user_zip`) VALUES
('5ebff8cb235', NULL, NULL, NULL, 'san', 'Pal', 'Nue', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_card_tbl`
--

CREATE TABLE `user_card_tbl` (
  `user_id` varchar(11) NOT NULL,
  `card_user_gsis` varchar(24) DEFAULT NULL,
  `card_user_ibig` varchar(24) DEFAULT NULL,
  `card_user_phil` varchar(24) DEFAULT NULL,
  `card_user_sss` varchar(24) DEFAULT NULL,
  `card_user_tin` varchar(24) DEFAULT NULL,
  `card_user_mply` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_card_tbl`
--

INSERT INTO `user_card_tbl` (`user_id`, `card_user_gsis`, `card_user_ibig`, `card_user_phil`, `card_user_sss`, `card_user_tin`, `card_user_mply`) VALUES
('5ebff8cb235', '123456789', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_child_tbl`
--

CREATE TABLE `user_child_tbl` (
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_educbg_tbl`
--

CREATE TABLE `user_educbg_tbl` (
  `user_id` varchar(11) NOT NULL,
  `educbg_level` varchar(48) DEFAULT NULL,
  `educbg_school_name` varchar(48) DEFAULT NULL,
  `educbg_basic_degree` varchar(48) DEFAULT NULL,
  `educbg_period_from` date DEFAULT NULL,
  `educbg_period_to` date DEFAULT NULL,
  `educbg_level_earn` varchar(24) DEFAULT NULL,
  `educbg_grad_year` year(4) DEFAULT NULL,
  `educbg_honor_receiv` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_educbg_tbl`
--

INSERT INTO `user_educbg_tbl` (`user_id`, `educbg_level`, `educbg_school_name`, `educbg_basic_degree`, `educbg_period_from`, `educbg_period_to`, `educbg_level_earn`, `educbg_grad_year`, `educbg_honor_receiv`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_fmly_tbl`
--

CREATE TABLE `user_fmly_tbl` (
  `user_id` varchar(11) NOT NULL,
  `fmly_spous_sname` varchar(12) DEFAULT NULL,
  `fmly_spous_fname` varchar(12) DEFAULT NULL,
  `fmly_spous_mname` varchar(12) DEFAULT NULL,
  `fmly_spous_occup` varchar(24) DEFAULT NULL,
  `fmly_spous_emplyr_name` varchar(24) DEFAULT NULL,
  `fmly_spous_busines_addr` varchar(24) DEFAULT NULL,
  `fmly_spous_telno` varchar(24) DEFAULT NULL,
  `fmly_user_sname_fthr` varchar(12) DEFAULT NULL,
  `fmly_user_fname_fthr` varchar(12) DEFAULT NULL,
  `fmly_user_mname_fthr` varchar(12) DEFAULT NULL,
  `fmly_user_maiden_mthr` varchar(12) DEFAULT NULL,
  `fmly_user_sname_mthr` varchar(12) DEFAULT NULL,
  `fmly_user_fname_mthr` varchar(12) DEFAULT NULL,
  `fmly_user_mname_mthr` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_fmly_tbl`
--

INSERT INTO `user_fmly_tbl` (`user_id`, `fmly_spous_sname`, `fmly_spous_fname`, `fmly_spous_mname`, `fmly_spous_occup`, `fmly_spous_emplyr_name`, `fmly_spous_busines_addr`, `fmly_spous_telno`, `fmly_user_sname_fthr`, `fmly_user_fname_fthr`, `fmly_user_mname_fthr`, `fmly_user_maiden_mthr`, `fmly_user_sname_mthr`, `fmly_user_fname_mthr`, `fmly_user_mname_mthr`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_lnd_tbl`
--

CREATE TABLE `user_lnd_tbl` (
  `user_id` varchar(11) NOT NULL,
  `lnd_title_program` varchar(288) DEFAULT NULL,
  `lnd_inclu_date_from` date DEFAULT NULL,
  `lnd_inclu_date_to` date DEFAULT NULL,
  `lnd_number_hrs` varchar(6) DEFAULT NULL,
  `lnd_type_Ld` varchar(24) DEFAULT NULL,
  `lnd_conduc_spons` varchar(288) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_lnd_tbl`
--

INSERT INTO `user_lnd_tbl` (`user_id`, `lnd_title_program`, `lnd_inclu_date_from`, `lnd_inclu_date_to`, `lnd_number_hrs`, `lnd_type_Ld`, `lnd_conduc_spons`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_main_tbl`
--

CREATE TABLE `user_main_tbl` (
  `user_id` varchar(11) NOT NULL,
  `main_user_email` varchar(50) NOT NULL,
  `main_user_pass` varchar(24) NOT NULL,
  `main_created` datetime NOT NULL DEFAULT current_timestamp(),
  `main_modified` datetime DEFAULT NULL,
  `main_verify` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_main_tbl`
--

INSERT INTO `user_main_tbl` (`user_id`, `main_user_email`, `main_user_pass`, `main_created`, `main_modified`, `main_verify`) VALUES
('5ebff8cb235', 'sample@email.com', '12345', '2022-04-30 14:46:19', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_other1_tbl`
--

CREATE TABLE `user_other1_tbl` (
  `user_id` varchar(11) NOT NULL,
  `other_skills` varchar(288) DEFAULT NULL,
  `other_recog` varchar(288) DEFAULT NULL,
  `other_member` varchar(288) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_other1_tbl`
--

INSERT INTO `user_other1_tbl` (`user_id`, `other_skills`, `other_recog`, `other_member`) VALUES
('5ebff8cb235', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_other2_tbl`
--

CREATE TABLE `user_other2_tbl` (
  `user_id` varchar(11) NOT NULL,
  `other_degre_txt` varchar(288) DEFAULT NULL,
  `other_guilty_txt` varchar(288) DEFAULT NULL,
  `other_charged_date` varchar(288) DEFAULT NULL,
  `other_charged_stts` varchar(288) DEFAULT NULL,
  `other_violation_txt` varchar(288) DEFAULT NULL,
  `other_separate_txt` varchar(288) DEFAULT NULL,
  `other_candidate_txt` varchar(288) DEFAULT NULL,
  `other_resignation_txt` varchar(288) DEFAULT NULL,
  `other_immigrant_txt` varchar(288) DEFAULT NULL,
  `other_indigenous_txt` varchar(288) DEFAULT NULL,
  `other_disability_txt` varchar(288) DEFAULT NULL,
  `other_solop_txt` varchar(288) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_other2_tbl`
--

INSERT INTO `user_other2_tbl` (`user_id`, `other_degre_txt`, `other_guilty_txt`, `other_charged_date`, `other_charged_stts`, `other_violation_txt`, `other_separate_txt`, `other_candidate_txt`, `other_resignation_txt`, `other_immigrant_txt`, `other_indigenous_txt`, `other_disability_txt`, `other_solop_txt`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_proof_tbl`
--

CREATE TABLE `user_proof_tbl` (
  `user_id` varchar(11) NOT NULL,
  `prf_user_img_name` varchar(288) DEFAULT NULL,
  `prf_user_img_path` varchar(288) DEFAULT NULL,
  `prf_govid_num` varchar(24) DEFAULT NULL,
  `prf_licen_num` varchar(24) DEFAULT NULL,
  `prf_issuance` varchar(288) DEFAULT NULL,
  `prf_signiture_img_name` varchar(288) DEFAULT NULL,
  `prf_signiture_img_path` varchar(288) DEFAULT NULL,
  `prf_signiture_date` date DEFAULT NULL,
  `prf_thumbmark_img_name` varchar(288) DEFAULT NULL,
  `prf_thumbmark_img_path` varchar(288) DEFAULT NULL,
  `prf_affiant_name` varchar(48) DEFAULT NULL,
  `prf_signiture_img_name_affi` varchar(288) DEFAULT NULL,
  `prf_signiture_img_path_affi` varchar(288) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_proof_tbl`
--

INSERT INTO `user_proof_tbl` (`user_id`, `prf_user_img_name`, `prf_user_img_path`, `prf_govid_num`, `prf_licen_num`, `prf_issuance`, `prf_signiture_img_name`, `prf_signiture_img_path`, `prf_signiture_date`, `prf_thumbmark_img_name`, `prf_thumbmark_img_path`, `prf_affiant_name`, `prf_signiture_img_name_affi`, `prf_signiture_img_path_affi`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_psl_tbl`
--

CREATE TABLE `user_psl_tbl` (
  `user_id` varchar(11) NOT NULL,
  `psl_user_sname` varchar(12) NOT NULL,
  `psl_user_fname` varchar(12) NOT NULL,
  `psl_user_mname` varchar(12) NOT NULL,
  `psl_user_bdate` date NOT NULL,
  `psl_user_bplace` varchar(24) DEFAULT NULL,
  `psl_user_sex` varchar(6) DEFAULT NULL,
  `psl_user_civil` varchar(12) DEFAULT NULL,
  `psl_user_height` double DEFAULT NULL,
  `psl_user_weight` int(6) DEFAULT NULL,
  `psl_user_blood` varchar(6) DEFAULT NULL,
  `psl_user_ctzn` varchar(24) DEFAULT NULL,
  `psl_user_ctzn_other` varchar(24) DEFAULT NULL,
  `psl_user_tel` varchar(24) DEFAULT NULL,
  `psl_user_mobile` varchar(24) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_psl_tbl`
--

INSERT INTO `user_psl_tbl` (`user_id`, `psl_user_sname`, `psl_user_fname`, `psl_user_mname`, `psl_user_bdate`, `psl_user_bplace`, `psl_user_sex`, `psl_user_civil`, `psl_user_height`, `psl_user_weight`, `psl_user_blood`, `psl_user_ctzn`, `psl_user_ctzn_other`, `psl_user_tel`, `psl_user_mobile`) VALUES
('5ebff8cb235', 'Bed', 'Alg', 'Ser', '2000-02-24', '', '', '', 10.2, 5, '', '', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_ref_tbl`
--

CREATE TABLE `user_ref_tbl` (
  `user_id` varchar(11) NOT NULL,
  `ref_prsn_name` varchar(288) DEFAULT NULL,
  `ref_prsn_addr` varchar(288) DEFAULT NULL,
  `ref_prsn_telp` varchar(288) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ref_tbl`
--

INSERT INTO `user_ref_tbl` (`user_id`, `ref_prsn_name`, `ref_prsn_addr`, `ref_prsn_telp`) VALUES
('5ebff8cb235', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_service_tbl`
--

CREATE TABLE `user_service_tbl` (
  `user_id` varchar(11) NOT NULL,
  `serv_license` varchar(24) DEFAULT NULL,
  `serv_rating` varchar(24) DEFAULT NULL,
  `serv_date` date DEFAULT NULL,
  `serv_place` varchar(48) DEFAULT NULL,
  `serv_number` varchar(48) DEFAULT NULL,
  `serv_valid` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_service_tbl`
--

INSERT INTO `user_service_tbl` (`user_id`, `serv_license`, `serv_rating`, `serv_date`, `serv_place`, `serv_number`, `serv_valid`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_vlntry_tbl`
--

CREATE TABLE `user_vlntry_tbl` (
  `user_id` varchar(11) NOT NULL,
  `vlntry_organization_name_addr` varchar(288) DEFAULT NULL,
  `vlntry_inclu_date_from` date DEFAULT NULL,
  `vlntry_inclu_date_to` date DEFAULT NULL,
  `vlntry_num_hours` varchar(6) DEFAULT NULL,
  `vlntry_work_position` varchar(48) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_vlntry_tbl`
--

INSERT INTO `user_vlntry_tbl` (`user_id`, `vlntry_organization_name_addr`, `vlntry_inclu_date_from`, `vlntry_inclu_date_to`, `vlntry_num_hours`, `vlntry_work_position`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_work_tbl`
--

CREATE TABLE `user_work_tbl` (
  `user_id` varchar(11) NOT NULL,
  `work_date_from` date DEFAULT NULL,
  `work_date_to` date DEFAULT NULL,
  `work_title_position` varchar(64) DEFAULT NULL,
  `work_name` varchar(64) DEFAULT NULL,
  `work_mon_salary` varchar(64) DEFAULT NULL,
  `work_pay_grade` varchar(64) DEFAULT NULL,
  `work_status_app` varchar(64) DEFAULT NULL,
  `work_gov_serv` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_work_tbl`
--

INSERT INTO `user_work_tbl` (`user_id`, `work_date_from`, `work_date_to`, `work_title_position`, `work_name`, `work_mon_salary`, `work_pay_grade`, `work_status_app`, `work_gov_serv`) VALUES
('5ebff8cb235', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD UNIQUE KEY `act_no` (`act_no`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user_addr_tbl`
--
ALTER TABLE `user_addr_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_card_tbl`
--
ALTER TABLE `user_card_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_child_tbl`
--
ALTER TABLE `user_child_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_educbg_tbl`
--
ALTER TABLE `user_educbg_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_fmly_tbl`
--
ALTER TABLE `user_fmly_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_lnd_tbl`
--
ALTER TABLE `user_lnd_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_main_tbl`
--
ALTER TABLE `user_main_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_other1_tbl`
--
ALTER TABLE `user_other1_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_other2_tbl`
--
ALTER TABLE `user_other2_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_proof_tbl`
--
ALTER TABLE `user_proof_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_psl_tbl`
--
ALTER TABLE `user_psl_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_ref_tbl`
--
ALTER TABLE `user_ref_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_service_tbl`
--
ALTER TABLE `user_service_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_vlntry_tbl`
--
ALTER TABLE `user_vlntry_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_work_tbl`
--
ALTER TABLE `user_work_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `act_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_addr_tbl`
--
ALTER TABLE `user_addr_tbl`
  ADD CONSTRAINT `user_addr_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_card_tbl`
--
ALTER TABLE `user_card_tbl`
  ADD CONSTRAINT `user_card_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_child_tbl`
--
ALTER TABLE `user_child_tbl`
  ADD CONSTRAINT `user_child_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_educbg_tbl`
--
ALTER TABLE `user_educbg_tbl`
  ADD CONSTRAINT `user_educbg_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_fmly_tbl`
--
ALTER TABLE `user_fmly_tbl`
  ADD CONSTRAINT `user_fmly_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_lnd_tbl`
--
ALTER TABLE `user_lnd_tbl`
  ADD CONSTRAINT `user_lnd_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_other2_tbl`
--
ALTER TABLE `user_other2_tbl`
  ADD CONSTRAINT `user_other2_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_proof_tbl`
--
ALTER TABLE `user_proof_tbl`
  ADD CONSTRAINT `user_proof_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_psl_tbl`
--
ALTER TABLE `user_psl_tbl`
  ADD CONSTRAINT `user_psl_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_ref_tbl`
--
ALTER TABLE `user_ref_tbl`
  ADD CONSTRAINT `user_ref_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_service_tbl`
--
ALTER TABLE `user_service_tbl`
  ADD CONSTRAINT `user_service_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_vlntry_tbl`
--
ALTER TABLE `user_vlntry_tbl`
  ADD CONSTRAINT `user_vlntry_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `user_work_tbl`
--
ALTER TABLE `user_work_tbl`
  ADD CONSTRAINT `user_work_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_main_tbl` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
