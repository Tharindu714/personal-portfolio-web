-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sanda
CREATE DATABASE IF NOT EXISTS `sanda` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sanda`;

-- Dumping structure for table sanda.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(60) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.admin: ~0 rows (approximately)
REPLACE INTO `admin` (`email`, `fname`, `lname`, `verification_code`) VALUES
	('tharinduchanaka6@gmail.com', 'Sadeesha', 'Nilakshini', '65e47974a8c28');

-- Dumping structure for table sanda.contact
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `office_address` varchar(170) NOT NULL,
  `call_num` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `whatsapp` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.contact: ~0 rows (approximately)
REPLACE INTO `contact` (`id`, `office_address`, `call_num`, `whatsapp`, `email`) VALUES
	(1, 'Badulla, Sri Lanka', '0766135782', '0751441764', 'tharinduchanaka6@gmail.com');

-- Dumping structure for table sanda.edu
CREATE TABLE IF NOT EXISTS `edu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `qulification` varchar(60) NOT NULL,
  `year` varchar(20) NOT NULL,
  `institute` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.edu: ~2 rows (approximately)
REPLACE INTO `edu` (`id`, `qulification`, `year`, `institute`) VALUES
	(11, 'Front End Developing', '2022 - 2026', 'Java Institute of Advance Technolgy'),
	(12, 'Full Stack software engineering', '2022 - 2026', 'Birmingham city university');

-- Dumping structure for table sanda.exp
CREATE TABLE IF NOT EXISTS `exp` (
  `id` int NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.exp: ~2 rows (approximately)
REPLACE INTO `exp` (`id`, `position`, `year`, `company_name`) VALUES
	(5, 'Front end Developer', '2023 to now', 'Delta Codex Software Solutions'),
	(6, 'UI/UX Designer', '2022-2023', '1000D Technology');

-- Dumping structure for table sanda.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'No User Name',
  `feed_desc` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `job_title` varchar(70) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `code` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci,
  `status` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.feedback: ~5 rows (approximately)
REPLACE INTO `feedback` (`id`, `user_name`, `feed_desc`, `job_title`, `code`, `status`) VALUES
	(17, 'Sadeesha Nilakshini', 'Had amazing experience from work with her and there is no big deal with front - end side when she assigns to it. recommended UI/UX designer', 'Front end developer', 'resource//gallery//0_65e1eed7c11e0.jpeg', 2),
	(18, 'Tharindu Chanaka', 'Had amazing experience from work with her and there is no big deal with front - end side when she assigns to it. recommended UI/UX designer', 'Back End Developer', 'resource//gallery//0_65e1f2166a4d2.jpeg', 2),
	(19, 'Danushka Lakmal', 'Had amazing experience from work with her and there is no big deal with front - end side when she assigns to it. recommended UI/UX designer', 'Database architecture', 'resource//gallery//0_65e1f26e7d121.jpeg', 2),
	(20, 'Kasuni Jayamali', 'Had amazing experience from work with her and there is no big deal with front - end side when she assigns to it. recommended UI/UX designer', 'UI/UX designer', 'resource//gallery//0_65e1f9b9b365f.jpeg', 2),
	(21, 'Maleesha Shehan', 'Had amazing experience from work with her and there is no big deal with front - end side when she assigns to it. recommended UI/UX designer', 'Database Manager', 'resource//gallery//0_65e1fa08ae1a8.jpeg', 2),
	(22, 'Samadhi Kavindaya', 'Had amazing experience from work with her and there is no big deal with front - end side when she assigns to it. recommended UI/UX designer', 'Graphic Designer ', 'resource//gallery//0_65e1fa4a2179e.jpeg', 2);

-- Dumping structure for table sanda.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(170) NOT NULL,
  `link` text NOT NULL,
  `tutorial_proj_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tutorial_proj_idx` (`tutorial_proj_id`) USING BTREE,
  CONSTRAINT `FK_images_sanda.tutorial_proj` FOREIGN KEY (`tutorial_proj_id`) REFERENCES `tutorial_proj` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.images: ~25 rows (approximately)
REPLACE INTO `images` (`id`, `code`, `link`, `tutorial_proj_id`) VALUES
	(5, 'resource//gallery//0_65e066867cd05.jpeg', 'https://youtu.be/yStAGuPPyZ0?si=5nc6JFB87xRMseK7', 1),
	(7, 'resource//gallery//0_65e3987b198b0.jpeg', 'https://youtu.be/w1RHkqh9XOA?si=GKNrjyJbVoVCtA-z', 1),
	(8, 'resource//gallery//0_65e3989390012.jpeg', 'https://youtu.be/ZaMqHx4oMtI?si=Q0nN1u0WnJ-g2zSS', 1),
	(9, 'resource//gallery//0_65e398a670f68.jpeg', 'https://youtu.be/_5XsTWSBY1Q?si=PBQ0KaVlpb3Ca6zS', 1),
	(10, 'resource//gallery//0_65e398b89faa5.jpeg', 'https://youtu.be/Fb7YV2EAw4s?si=15TaNmwiuBRsXY9k', 1),
	(11, 'resource//gallery//0_65e398cbd6593.jpeg', 'https://youtu.be/vkGXsac2zw8?si=WMsNPgRFr4qRWnOK', 1),
	(12, 'resource//gallery//0_65e42a1e5d150.jpeg', 'https://youtu.be/ixIVmb9EXVY?si=GgEHMr8KLg1Ab_bP', 1),
	(13, 'resource//gallery//0_65e42a331f782.jpeg', 'https://youtu.be/eosWCXN9vaU?si=XQ1osht4BuZ-VYiw', 1),
	(14, 'resource//gallery//0_65e42a5bf16fb.jpeg', 'https://youtu.be/HKlx0y-PMxg?si=Qeu8_EvKwvUJt9Ds', 1),
	(15, 'resource//gallery//0_65e42a77ced12.jpeg', 'https://youtu.be/YigXnsNtvJ0?si=cYHUs879NUrQ5hLx', 1),
	(16, 'resource//gallery//0_65e42a9445226.jpeg', 'https://youtu.be/imdxvJY3MbE?si=2d2colc5urD0U16K', 1),
	(17, 'resource//gallery//0_65e47a0becaf6.jpeg', 'https://youtu.be/uUv11XsPA9M?si=fWXqP6EgskCenHGu', 1),
	(18, 'resource//gallery//0_65e48b55c83c1.jpeg', 'https://youtu.be/b2kVJ9dhVbk?si=DJVuY_F5RaBwpkRS', 1),
	(19, 'resource//gallery//0_65e48b6a7914b.jpeg', 'https://youtu.be/3Wht1d_fOqc?si=phRxG0_PhxqvcM5p', 1),
	(20, 'resource//gallery//0_65e48b84d8f2e.jpeg', 'https://youtu.be/5vf6VeGkk-M?si=3k0_2iSE-DnMO5rk', 1),
	(21, 'resource//gallery//0_65e48bb8589f0.jpeg', 'https://youtu.be/66TICIubelk?si=4sluYZlFqFxI4Q7t', 1),
	(22, 'resource//gallery//0_65e48bcbdd49e.jpeg', 'https://youtu.be/mKz_58W2S78?si=-I0r3LiYM62u1E7w', 1),
	(23, 'resource//gallery//0_65e48bf4ac10b.jpeg', 'https://youtu.be/Xh5Fb_BM_7g?si=398LI_jan9IT4RWY', 1),
	(24, 'resource//gallery//0_65e48c070e0cc.jpeg', 'https://youtu.be/Vyq0THHqD7A?si=px4le2K2Rfvo32_3', 1),
	(25, 'resource//gallery//0_65e48c19966a4.jpeg', 'https://youtu.be/6H-jTapkOlk?si=dsmYVaZtJFQRziPp', 1),
	(26, 'resource//gallery//0_65e48c59def3d.jpeg', 'https://youtu.be/HB2JMve0uhQ?si=NhPCRMeiKQO0n9Af', 1),
	(27, 'resource//gallery//0_65e48c6f0b8b9.jpeg', 'https://youtu.be/Fb3vI_uVBp0?si=ou8XTcidNQhog_rd', 1),
	(28, 'resource//gallery//0_65e48c89265c5.jpeg', 'https://youtu.be/OIz8wXK0CRg?si=srvHs5wa_ULMzpNX', 1),
	(29, 'resource//gallery//0_65e48ca0c323e.jpeg', 'https://youtu.be/3AguhcE3CyA?si=Fzi7bxjv-V2_xXWt', 1),
	(30, 'resource//gallery//0_65e48cbd49790.jpeg', 'https://youtu.be/NzsfbH95nhY?si=aYRgjwboHWWOjugd', 1),
	(31, 'resource//gallery//0_65e48cde9a6c5.jpeg', 'https://youtu.be/AJAyOzhgxj0?si=oIBlTE0O-7TUmiQJ', 1),
	(32, 'resource//gallery//0_65e48d11a0142.jpeg', 'https://youtu.be/QVae8F6VFNQ?si=os8ezd0N-_MXCxV5', 1);

-- Dumping structure for table sanda.my_details
CREATE TABLE IF NOT EXISTS `my_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pdf` varchar(75) NOT NULL,
  `video` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.my_details: ~0 rows (approximately)

-- Dumping structure for table sanda.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `subject` varchar(75) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.orders: ~4 rows (approximately)
REPLACE INTO `orders` (`id`, `name`, `email`, `mobile`, `subject`, `message`) VALUES
	(1, 'Tharindu Chanaka', 'tharinduchanaka6@gmail.com', '0751441764', 'web application inquary', 'I need responsive web application for my new business that started recently'),
	(2, 'Sadeesha Nilakshini', 'sadeeshanilakshi@gmail.com', '0766135782', 'Inventory control system', 'I need inventory control system for my new retail shop and it\'s important that I want the application based with latest technology'),
	(3, 'Tharindu Chanaka', 'tharinduchanaka6@gmail.com', '0751441764', 'web application inquiry', 'I need responsive web application for my new business that started recently'),
	(4, 'Tharindu Chanaka', 'tharinduchanaka6@gmail.com', '0751441764', 'web application inquiry', 'I need responsive web application for my new business that started recently'),
	(5, 'Chanaka Sanjeewaa', 'tharinduchanaka6@gmail.com', '0751441764', 'E commerce web application', 'I need responsive web application for my new business that started recently');

-- Dumping structure for table sanda.other_updates
CREATE TABLE IF NOT EXISTS `other_updates` (
  `update_ID` int NOT NULL AUTO_INCREMENT,
  `ytlink` text NOT NULL,
  `ProfilePhoto` text NOT NULL,
  `clientPhoto1` text NOT NULL,
  `clientPhoto2` text NOT NULL,
  `googleMap` text NOT NULL,
  `weblink` varchar(78) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `business_name` varchar(50) NOT NULL,
  PRIMARY KEY (`update_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.other_updates: ~1 rows (approximately)
REPLACE INTO `other_updates` (`update_ID`, `ytlink`, `ProfilePhoto`, `clientPhoto1`, `clientPhoto2`, `googleMap`, `weblink`, `business_name`) VALUES
	(1, 'https://youtu.be/KWQ3-OuWAss?si=vI63wu4WlG_dZ-EE', 'img/profile.png', 'img/about-1.jpg', 'img/about-2.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15841.247539573225!2d81.03100027141112!3d6.972482888449444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae46251cb80ef17%3A0x9aa9428398ef4b8d!2sBogahamaditta!5e0!3m2!1sen!2slk!4v1708686437444!5m2!1sen!2slk', 'Infinitix.com', 'Infinitix');

-- Dumping structure for table sanda.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Satisfied_Customer` int NOT NULL,
  `Succesful_projects` int NOT NULL,
  `YearOf_Exp` int NOT NULL,
  `updated_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.portfolio: ~0 rows (approximately)
REPLACE INTO `portfolio` (`id`, `Satisfied_Customer`, `Succesful_projects`, `YearOf_Exp`, `updated_date`) VALUES
	(2, 25, 12, 1, '2024-02-24');

-- Dumping structure for table sanda.professions
CREATE TABLE IF NOT EXISTS `professions` (
  `prof_ID` int NOT NULL AUTO_INCREMENT,
  `profession` varchar(50) NOT NULL,
  PRIMARY KEY (`prof_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.professions: ~2 rows (approximately)
REPLACE INTO `professions` (`prof_ID`, `profession`) VALUES
	(1, 'Front End Developer'),
	(2, 'Back End Developer'),
	(3, 'Graphic Designer');

-- Dumping structure for table sanda.quality_service
CREATE TABLE IF NOT EXISTS `quality_service` (
  `Q_service` int NOT NULL AUTO_INCREMENT,
  `service` varchar(100) NOT NULL,
  PRIMARY KEY (`Q_service`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.quality_service: ~2 rows (approximately)
REPLACE INTO `quality_service` (`Q_service`, `service`) VALUES
	(1, 'Afordable Prices'),
	(2, 'High Quality Product'),
	(3, 'On Time Project Delivery');

-- Dumping structure for table sanda.seo_desc
CREATE TABLE IF NOT EXISTS `seo_desc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `about_me` text NOT NULL,
  `clients` text NOT NULL,
  `project` text NOT NULL,
  `skil_desc` text NOT NULL,
  `contact_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.seo_desc: ~0 rows (approximately)
REPLACE INTO `seo_desc` (`id`, `about_me`, `clients`, `project`, `skil_desc`, `contact_desc`) VALUES
	(1, 'Motivated, proactive, innovative and hands-on developer with years of experience developing and managing information systems for software development. Energetic team collaborator with strong organizational skills, professional front-end skills, UI/UX engineering with SQL operations, and supporting process improvement efforts', 'I am here to provide the best quality service with affordable prices on time. With years of trusted excellence and recommended service, I will fulfil your software requirement with the latest technology and innovative skills', 'With the years of experince and recommanded service I have done many web application projects and software projects. Bring your requirement to me and I am gladly here to fulfil your all new software requirement with the latest technology\r\n\r\n', 'For recommended service, It is important to have better knowledge about my skills and experience. This part is to give you the trusted statement for my skills & experiences', 'Contact me now. Send your software or design requirement briefly here. I will contact you as soon as possible');

-- Dumping structure for table sanda.service
CREATE TABLE IF NOT EXISTS `service` (
  `title` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` int NOT NULL,
  `description` text NOT NULL,
  `image_icon` text NOT NULL,
  PRIMARY KEY (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.service: ~3 rows (approximately)
REPLACE INTO `service` (`title`, `price`, `description`, `image_icon`) VALUES
	(' Web Design', 5000, 'I will do unique and attractive web page designs for your requirement. Bring your creative web design requirement to me. I will give you the best designs with latest technology\r\n', 'fa fa-code fa-2x text-dark'),
	('Creative Design', 1500, 'I will do any creative design for your requirement. I am able to design creative E-book covers, Magazine cover pages, Banner designs etc...', 'fa fa-crop-alt fa-2x text-dark'),
	('Graphic Design', 1200, 'I will provide unique artworks and logo designs to fulfil your graphic design requirement with recommended skills and years of good experience', 'fa fa-code-branch fa-2x text-dark'),
	('UI/UX Design', 10000, 'You can hire me to UI/UX engineering for your company considering my skills and experience that mentioned above', 'fa fa-laptop-code fa-2x text-dark');

-- Dumping structure for table sanda.skills
CREATE TABLE IF NOT EXISTS `skills` (
  `langauge` varchar(45) NOT NULL,
  `percentage` int NOT NULL,
  `color` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`langauge`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.skills: ~5 rows (approximately)
REPLACE INTO `skills` (`langauge`, `percentage`, `color`) VALUES
	('Angular JS', 30, 'dark'),
	('Bootstrap CSS', 100, 'primary'),
	('CSS', 80, 'danger'),
	('Graphic Designing', 70, 'success'),
	('HTML', 95, 'warning'),
	('JavaScript', 60, 'dark');

-- Dumping structure for table sanda.social_media
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fb` text NOT NULL,
  `whatsapp` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `linkedin` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.social_media: ~0 rows (approximately)
REPLACE INTO `social_media` (`id`, `fb`, `whatsapp`, `instagram`, `youtube`, `linkedin`) VALUES
	(1, 'https://web.facebook.com/tharindu.chanaka.14', 'https://wa.me/qr/LYBYW3SM4QBOO1', 'https://www.instagram.com/delta.codex.software.solutions/', 'https://www.youtube.com/@tchabro', 'https://www.linkedin.com/in/tharinduchanaka8754');

-- Dumping structure for table sanda.tutorial_proj
CREATE TABLE IF NOT EXISTS `tutorial_proj` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tutorial` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table sanda.tutorial_proj: ~4 rows (approximately)
REPLACE INTO `tutorial_proj` (`id`, `tutorial`) VALUES
	(1, 'Ecommerce web Apps'),
	(2, 'Database Management'),
	(3, 'Standalone Apps'),
	(4, 'Mobile Apps'),
	(5, 'Robotic projects'),
	(6, 'Computer Hardware Network');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
