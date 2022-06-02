-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 06:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprotfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_section`
--

CREATE TABLE `about_us_section` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us_section`
--

INSERT INTO `about_us_section` (`id`, `name`, `age`, `address`, `description`, `photo`, `status`) VALUES
(1, 'Majadul Islam Pallab', 26, '1650 Monohardi, Narshingdi, Dhaka, Bangadesh(BD)', 'I am passionate about UI/UX design and Web Design. I am a skilled front-end developer and master of graphic design tools such as Photoshop and Sketch. I am a quick learner and a team worker that gets the job done. I can easily capitalize on low hanging fruits and quickly maximize timely deliverables for real-time schemas.', 'images/users/avatar.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_review_section`
--

CREATE TABLE `client_review_section` (
  `id` int(11) NOT NULL,
  `client_name` varchar(60) NOT NULL,
  `client_title` varchar(70) NOT NULL,
  `client_photo` varchar(255) NOT NULL,
  `client_review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_review_section`
--

INSERT INTO `client_review_section` (`id`, `client_name`, `client_title`, `client_photo`, `client_review`) VALUES
(1, 'Aiyana', 'CEO / Web Design Company', 'images/testimonials/client4.jpg', 'MI Pallab displays exemplary professionalism and is able to take on challenges. He learns quickly and is an asset to any team. 3'),
(2, 'Alexander', 'CEO / Web Design Company', 'images/testimonials/client3.jpg', 'MI Pallab displays exemplary professionalism and is able to take on challenges. He learns quickly and is an asset to any team. 4'),
(3, 'Ariya', 'Web Developer', 'images/testimonials/client2.jpg', 'MI Pallab is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player 2'),
(4, 'Braiden', 'Web Designer', 'images/testimonials/client1.jpg', 'MI Pallab is a great co-worker and problem solver. He is quick to extend his helping hand and makes a good team player. 1');

-- --------------------------------------------------------

--
-- Table structure for table `contact_section`
--

CREATE TABLE `contact_section` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_section`
--

INSERT INTO `contact_section` (`id`, `title`, `heading`, `paragraph`) VALUES
(1, 'Contact Me', 'Let’s talk how I can help you!', '<p>If you like my work and want to avail my services then drop me a message using the contact form.</p> \n\n<p>Or get in touch using my email, skype or my contact number.</p>\n\n<p>See you!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `my_service_section`
--

CREATE TABLE `my_service_section` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `icon_header` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `my_service_section`
--

INSERT INTO `my_service_section` (`id`, `icon`, `icon_header`) VALUES
(1, 'images/services/web-design.svg', 'Web Design'),
(2, 'images/services/graphic-design.svg', 'Graphic Design'),
(3, 'images/services/ui-ux.svg', 'UI/UX'),
(4, 'images/services/app-development.svg', 'App Development');

-- --------------------------------------------------------

--
-- Table structure for table `section_&_skill`
--

CREATE TABLE `section_&_skill` (
  `id` int(11) NOT NULL,
  `title_name` varchar(40) NOT NULL,
  `paragraph` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_&_skill`
--

INSERT INTO `section_&_skill` (`id`, `title_name`, `paragraph`) VALUES
(1, 'My Services', 'I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design'),
(2, 'My Skills', 'I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design');

-- --------------------------------------------------------

--
-- Table structure for table `skill_section`
--

CREATE TABLE `skill_section` (
  `id` int(11) NOT NULL,
  `lan_name` varchar(20) NOT NULL,
  `skill_persent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill_section`
--

INSERT INTO `skill_section` (`id`, `lan_name`, `skill_persent`) VALUES
(1, 'HTML', 90),
(2, 'CSS3', 90),
(3, 'JavaScript', 80),
(4, 'React', 75),
(5, 'PHP', 70),
(6, 'WordPress', 70),
(7, 'MySQL', 60),
(8, 'Photoshop', 60);

-- --------------------------------------------------------

--
-- Table structure for table `social_link`
--

CREATE TABLE `social_link` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `behance` varchar(255) NOT NULL,
  `redit` varchar(255) NOT NULL,
  `what's_app` varchar(255) NOT NULL,
  `imo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_link`
--

INSERT INTO `social_link` (`id`, `facebook`, `skype`, `twitter`, `instagram`, `linkedin`, `behance`, `redit`, `what's_app`, `imo`, `email`, `phone`, `name`) VALUES
(1, 'https://www.facebook.com/majadul.islam.3532/', 'https://www.skype.com/en/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/in/majadul-islam-pallab-908322231/', 'https://www.behance.net/', 'https://www.reddit.com/', '+8801713564842', '+8801713564842', 'pallab4842@gmail.com', '+8801713564842', 'Majadul Islam Pallab');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `pass`, `role`, `email`, `address`, `name`, `profession`, `age`) VALUES
(1, 'MI_Pallab', 'Pallab@123', 'admin', 'pallab4842@gmail.com', '1650 Monohardi, Narshingdi, Dhaka, Bangadesh', 'Majadul Islam Pallab', 'Full Stack Developer', 26);

-- --------------------------------------------------------

--
-- Table structure for table `user_massage`
--

CREATE TABLE `user_massage` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `massage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_massage`
--

INSERT INTO `user_massage` (`id`, `name`, `email`, `massage`) VALUES
(1, 'Majadul Islam Pallab', 'pallab@gmail.com', 'If you like my work and want to avail my services then drop me a message using the contact form');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_section`
--
ALTER TABLE `about_us_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_review_section`
--
ALTER TABLE `client_review_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_section`
--
ALTER TABLE `contact_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_service_section`
--
ALTER TABLE `my_service_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_&_skill`
--
ALTER TABLE `section_&_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill_section`
--
ALTER TABLE `skill_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_link`
--
ALTER TABLE `social_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_massage`
--
ALTER TABLE `user_massage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us_section`
--
ALTER TABLE `about_us_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_review_section`
--
ALTER TABLE `client_review_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_section`
--
ALTER TABLE `contact_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `my_service_section`
--
ALTER TABLE `my_service_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_&_skill`
--
ALTER TABLE `section_&_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill_section`
--
ALTER TABLE `skill_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `social_link`
--
ALTER TABLE `social_link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_massage`
--
ALTER TABLE `user_massage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
