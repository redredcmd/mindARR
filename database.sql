-- ==============================================================
-- Capitol University AR Department Directory
-- Database Schema and Data Setup
-- ==============================================================

CREATE DATABASE IF NOT EXISTS `cu_ar_directory` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `cu_ar_directory`;

-- Table structure for table `departments`
DROP TABLE IF EXISTS `departments`;
CREATE TABLE `departments` (
  `id` varchar(30) NOT NULL,
  `code` varchar(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mascot` varchar(60) NOT NULL,
  `mascot_title` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `accreditation` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `programs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `departments`
INSERT INTO `departments` (`id`, `code`, `name`, `mascot`, `mascot_title`, `logo`, `model`, `accreditation`, `description`, `programs`) VALUES
('ccs', 'CCS', 'College of Computer Studies', 'Philippine Eagle', 'The Soaring Cyber Eagle', 'images/ccs.png', 'models/eagle.glb', 'CHED Center of Development (COD) in IT Education', 'The College of Computer Studies at Capitol University is recognized by the Commission on Higher Education (CHED) as a Center of Development in Information Technology. It prepares students for globally competitive IT careers through cutting-edge curriculum in software engineering, cloud computing, intelligent systems, and networking.', 'BS in Information Technology (BSIT), BS in Computer Science (BSCS)'),

('engr', 'COE', 'College of Engineering', 'Iron Tiger', 'The Mighty Engineering Tiger', 'images/engr.png', 'models/tiger.glb', 'CHED Center of Development (COD) in Civil Engineering | PACUCOA Level III', 'The College of Engineering delivers premier engineering education recognized for technical excellence and high licensure examination performance. Students receive comprehensive laboratory training, structural design competencies, and technological problem-solving skills across diverse engineering disciplines.', 'BS Civil Engineering, BS Mechanical Engineering, BS Electrical Engineering, BS Electronics Engineering'),

('bsba', 'CBA', 'College of Business and Accountancy', 'Golden Bull', 'The Thriving Bull of Commerce', 'images/bsba.png', 'models/bull.glb', 'PACUCOA Accredited | Top CPA Board Performance', 'The College of Business and Accountancy develops ethical, forward-thinking business leaders, entrepreneurs, and certified public accountants. The college blends analytical financial rigor with modern marketing strategies and ethical managerial leadership.', 'BS in Accountancy (BSA), BS in Business Administration (Financial, Marketing, and Human Resource Management)'),

('crim', 'COC', 'College of Criminology', 'Vigilant Wolf', 'The Guardian Wolf of Justice', 'images/crim.png', 'models/wolf.glb', 'CHED Center of Development (COD) in Criminology | PACUCOA Accredited', 'The College of Criminology provides rigorous academic training and tactical discipline for future public safety officers and law enforcement agents. Equipped with state-of-the-art ballistics, dactyloscopy, and criminalistics laboratories, the college upholds values of integrity, law enforcement, and human rights.', 'Bachelor of Science in Criminology (BSCrim)'),

('educ', 'CED', 'College of Education', 'Wise Owl', 'The Enlightened Owl of Wisdom', 'images/educ.png', 'models/owl.glb', 'CHED Center of Excellence (COE) for Teacher Education | PACUCOA Level IV', 'The College of Education is a distinguished Center of Excellence recognized across Northern Mindanao for preparing compassionate, innovative, and pedagogical leaders. The college shapes dynamic educators equipped with modern teaching techniques and digital learning resources.', 'Bachelor of Elementary Education (BEEd), Bachelor of Secondary Education (BSEd) with various majors'),

('maritime', 'CME', 'College of Maritime Education', 'Oceanic Shark', 'The Navigating Shark of the Seas', 'images/maritime.png', 'models/shark.glb', 'CHED & MARINA STCW Compliant | DNV Certified', 'The College of Maritime Education prepares disciplined maritime officers in strict compliance with MARINA and international STCW standards. Featuring world-class navigational bridge and engine room simulators, students undergo rigorous practical training for careers on global merchant vessels.', 'BS Marine Transportation (BSMT), BS Marine Engineering (BSMarE)'),

('arts_and_sciences', 'CAS', 'College of Arts and Sciences', 'Noble Lion', 'The Valiant Lion of Arts & Sciences', 'images/arts_and_sciences.png', 'models/lion.glb', 'PACUCOA Level III Accredited | Foundation of Holistic Learning', 'The College of Arts and Sciences serves as the intellectual cornerstone of Capitol University. It fosters critical inquiry, ethical responsibility, and effective communication through interdisciplinary humanities, social sciences, and behavioral research programs.', 'BA in Communication, BA in Political Science, BS in Psychology'),

('health', 'CHS', 'College of Health Sciences', 'Healing Stallion', 'The Resilient Stallion of Healing', 'images/health.png', 'models/horse.glb', 'PACUCOA Accredited | Outstanding Nursing Licensure Record', 'The College of Health Sciences is renowned for academic excellence in healthcare and patient-centered nursing care. With intensive clinical rotations in hospital and community environments, the college develops competent, compassionate health professionals who excel in local and international healthcare systems.', 'Bachelor of Science in Nursing (BSN)');
