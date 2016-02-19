-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 12:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vienpatrickevents`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_registered` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `password`, `role`, `date_registered`) VALUES
(1, 'Mojolagbe Jamiu Babatunde', 'mojolagbe@gmail.com', 'Babatunde', 'ae2b1fca515949e5d54fb22b8ed95575', 'Admin', '2015-08-20'),
(2, 'Administrator', 'info@vienpatrickevents.com', 'Admin', 'ae2b1fca515949e5d54fb22b8ed95575', 'Admin', '2015-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `date_time` varchar(300) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `location`, `image`, `date_time`, `status`, `date_added`) VALUES
(1, 'Website Launch', '<p><span style="color:rgb(92, 101, 102); font-family:open sans; font-size:14px">The website was redesigned by <a href="http://kaisteventures.com">Kaiste Ventures Limited.</a></span></p>\r\n', 'Ketu, Lagos, Nigeria', '574060_website_launch.jpg', '2016/03/25 20:00', 1, '2015-11-13 13:13:25');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(700) NOT NULL,
  `answer` text NOT NULL,
  `date_added` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `question` (`question`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `date_added`) VALUES
(1, 'What happens if I am unable to attend a course and I have already paid?', 'Your payment will be withhold until you attend a course of the same amount.', '2016-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `name` varchar(200) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`name`, `value`) VALUES
('ABOUT_US', '<p><strong>OUR BEGINNING </strong></p>\r\n\r\n<p>Impact Training &amp; Management Consulting Limited was registered and commenced business in 2003, with highly experienced consultants as<br />\r\nits directors.</p>\r\n\r\n<p><strong>OUR OBJECTIVES </strong></p>\r\n\r\n<ul>\r\n	<li>To affect positively our clients business by enhancing the quality<br />\r\n	of their manpower.</li>\r\n	<li>To partner with our clients; working to realise their aspirations.</li>\r\n	<li>To achieve definite and long lasting advantages in the market place.</li>\r\n</ul>\r\n\r\n<p><strong>OUR VALUES </strong></p>\r\n\r\n<ul>\r\n	<li>To act with due diligence in pursuit of excellence for our clients in an environment of mutual respect and trust</li>\r\n	<li>To deliver just-in-time quality learning interventions in the most cost effective way</li>\r\n	<li>To improve worldforce effectiveness at both individual and organisational levels</li>\r\n	<li>To partner with organisations and ensure relevant hands-on-and direct-to-function training.</li>\r\n</ul>\r\n\r\n<p><strong>OUR EXPERIENCE </strong></p>\r\n\r\n<p>Over the decade, we have worked individually and collectively with over three hundred diverse business, spanning all sectors of the Nigerian economy including highly respected multinational companies and indigenous institutions.</p>\r\n\r\n<p><strong>OUR APPROACH </strong></p>\r\n\r\n<p>Our methodologies are competency driven. The required attributes in knowledge, skills and attitudes are designed into our programmes and practically impacted. This way, we relate to clients in different models; as Consultants, Coaches, Advisors, Co-learners and Faciltators in order to infuse conceptual knowledge and ready to use skills.</p>\r\n\r\n<p><strong>OUR LEARNING CENTRE </strong></p>\r\n\r\n<p>We operate in a well equipped learning centre located in an accessible, serene environment in Ilupeju, Lagos.</p>\r\n\r\n<p><strong>OUR PARTNERS </strong></p>\r\n\r\n<p>Our partnership is made up of individuals with pedigree that continues to show high level commitment to insightful consulting and quality training. This is the essence of our profile. We are truly synergistic team with special skills and experience across disciplines and sectors acquired over many years. This is your guarantee of quality service.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
('ADDTHIS_SHARE_BUTTON', '<!-- Go to www.addthis.com/dashboard to customize your tools -->\r\n<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-56a5fbdb49cbb5db" async="async"></script>\r\n'),
('ANALYTICS', '<script></script>'),
('BOOKMARK_BUTTON', '<p>FALSE</p>\r\n'),
('COMPANY_ACC_DETAILS', '<p><strong>Access Bank Plc </strong><strong>Account No: 0034932953 </strong></p>\r\n\r\n<p><strong>Sort Code: 044152273&nbsp;</strong></p>\r\n'),
('COMPANY_ADDRESS', '<span>10, Obokun Street,<br />\r\noff Coker Road, Ilupeju, Lagos State Nigeria.</span>\r\n'),
('COMPANY_ADDRESS_GMAP', '<p>10 Obokun Street</p>\r\n'),
('COMPANY_EMAIL', '<p>info@vienpatrickevents.com</p>'),
('COMPANY_HOTLINE', '<p>+2348033014321</p>\r\n'),
('COMPANY_NAME', '<p>Impact Training &amp; Management Consulting</p>\r\n'),
('COMPANY_NUMBERS', '<p>+234-1-7932390<br />\r\n+234 803-3876456<br />\r\n+234 802-3060462</p>\r\n'),
('COMPANY_OTHER_EMAILS', '<p>info@impactconsultingng.com</p>\r\n'),
('DRIBBBLE_LINK', '<p>https://dribbble.com/</p>\r\n'),
('FACEBOOK_ADMINS', '<p>0</p>\r\n'),
('FACEBOOK_APP_ID', '<p>0</p>\r\n'),
('FACEBOOK_LINK', '<p>https://www.facebook.com/</p>\r\n'),
('GOOGLEPLUS_LINK', '<p>https://www.plus.google.com/</p>\r\n'),
('HOMEPAGE_CORE_SOLUTION_HEADER', '<p>Core Solution</p>\r\n'),
('HOMEPAGE_CORE_SOLUTION_ICON', '<p>cog</p>\r\n'),
('HOMEPAGE_CORE_SOLUTION_LINK', '<p>about-us/</p>\r\n'),
('HOMEPAGE_CORE_SOLUTION_TEXT', '<p>We provide training essentially in Forensic Accounting and Fraud Examination as well as Banking &amp; Finance, Risk, Management and Supply Chain.</p>\r\n'),
('HOMEPAGE_COURSE_CATEGORIES_HEADER', '<p>Course Categories</p>\r\n'),
('HOMEPAGE_COURSE_CATEGORIES_ICON', '<p>graduation-cap</p>\r\n'),
('HOMEPAGE_COURSE_CATEGORIES_LINK', '<p>courses/</p>\r\n'),
('HOMEPAGE_COURSE_CATEGORIES_TEXT', '<p>View list of our course categories from accounting to supply chain management and book a seat for the ones that meets your professional needs.</p>\r\n'),
('HOMEPAGE_DOWNLOAD_BROCHURE_HEADER', '<p>Download Brochure</p>\r\n'),
('HOMEPAGE_DOWNLOAD_BROCHURE_ICON', '<p>download</p>\r\n'),
('HOMEPAGE_DOWNLOAD_BROCHURE_LINK', '<p>download-brochure</p>\r\n'),
('HOMEPAGE_DOWNLOAD_BROCHURE_TEXT', '<p>Download our comprehensive brochure to view all our courses we offer at your convenience round the year and its free.</p>\r\n'),
('HOMEPAGE_WHO_WE_ARE_HEADER', '<p>Who We Are</p>\r\n'),
('HOMEPAGE_WHO_WE_ARE_ICON', '<p>group</p>\r\n'),
('HOMEPAGE_WHO_WE_ARE_LINK', '<p>about-us/</p>\r\n'),
('HOMEPAGE_WHO_WE_ARE_TEXT', '<p>TSI was founded on the corporate vision of &ldquo;Complete Solution&rdquo; in a global arena with strong bias for research and training.</p>\r\n'),
('LINKEDIN_LINK', '<p>https://www.linkedin.com/</p>\r\n'),
('PINTEREST_LINK', '<p>https://www.pinterest.com/</p>\r\n'),
('SETTINGS_PANEL', '<p>FALSE</p>\r\n'),
('TOTAL_DISPLAYABLE_COURSES', '<p>100</p>\r\n'),
('TWITTER_ID', '<p>0</p>\r\n'),
('TWITTER_LINK', '<p>https://twitter.com/impactconslt</p>\r\n'),
('WELCOME_MESSAGE', '<p style="text-align: justify;">We provide training essentially in Forensic Accounting and Fraud Examination as well as Banking &amp; Finance, Risk, Management and Supply Chain. TSI Limited is a one stop shop for high-quality training, research and consultancy services and customer satisfaction is our greatest priority. We hope you can find all your training needs here.</p>\r\n'),
('YOUTUBE_LINK', '<p>https://www.youtube.com/</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `author` varchar(500) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `content`, `author`, `image`) VALUES
(1, 'Being in control of your life and having realistic expectations about your day-to-day challenges are the keys to stress management, which is perhaps the most important ingredient to living a happy, healthy and rewarding life.', 'Marilu Henner', '291958_1453376785.png'),
(2, 'Management is doing things right; leadership is doing the right things.', 'Peter Drucker', '592242_1453376860.jpg'),
(3, 'The biggest risk is not taking any risk... In a world that changing really quickly, the only strategy that is guaranteed to fail is not taking risks.\r\n', 'Mark Zuckerberg', '290365_1453377011.jpe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(200) NOT NULL,
  `company` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL,
  `website` varchar(300) NOT NULL,
  `skype_id` varchar(200) NOT NULL,
  `yahoo_id` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(500) NOT NULL,
  `time_entered` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `facebook_id` varchar(300) NOT NULL,
  `twitter_id` varchar(400) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `company`, `country`, `description`, `picture`, `website`, `skype_id`, `yahoo_id`, `phone`, `address`, `username`, `password`, `time_entered`, `status`, `facebook_id`, `twitter_id`) VALUES
(1, 'Kaiste Ventures Limited', 'info@kaisteventures.com', '', '', '', '', '', '', '', '', '', '', '', '1453378931', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `webpage`
--

CREATE TABLE IF NOT EXISTS `webpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(700) NOT NULL,
  `keywords` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `webpage`
--

INSERT INTO `webpage` (`id`, `name`, `title`, `description`, `keywords`) VALUES
(1, 'home', 'Home', 'We are a consulting and training firm / provider in Nigeria. We offer open programmes, bespoke and implant management training courses in Nigeria.', 'group, home'),
(2, 'contact', 'Contact Us', 'Contact us', 'contact, enquiries'),
(5, 'event-detail', 'Event Details', 'Event description', 'event, detail'),
(7, 'about', 'About Us', 'About Us', 'about, impact, consulting, management'),
(8, 'gallery', 'Our training gallery', 'training gallery - photos and images', 'gallery, photo, image'),
(9, '404', '404 - Page Not Found', 'The page you are looking for cannot be found or has been removed.', '404, found, not, page, remove'),
(10, '403', 'Forbidden Access', 'Access Denied. You are not allowed to access the content of this page.', 'forbidden, 403, access, denied'),
(14, 'events', 'All Upcoming Events', 'All upcoming events. ', 'event, all, upcoming'),
(15, 'search', 'Search Results', 'Search results', 'search, result'),
(21, 'event', 'All Events', 'All upcoming events. ', 'event, all, upcoming');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
