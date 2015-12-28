-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Apr 30, 2015 at 08:11 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `babydaycare`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `accountant`
-- 

CREATE TABLE `accountant` (
  `accountant_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `address` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  `appointment_date` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `twiter` longtext NOT NULL,
  `google_plus` longtext NOT NULL,
  PRIMARY KEY  (`accountant_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- 
-- Dumping data for table `accountant`
-- 

INSERT INTO `accountant` (`accountant_id`, `name`, `email`, `password`, `address`, `gender`, `phone_number`, `appointment_date`, `facebook`, `twiter`, `google_plus`) VALUES 
(10, 'Rabiul', 'sdf@ds.com', '2344567890', '0', 'male', '0', '0', 'facebook.com', 'twitter.com', 'googleplus.com'),
(9, 'Aunok', 'rabiulkhan90@yahoo.com', '12345', '0', '', '0', '0', 'facebook.com', 'twitter.com', 'googleplus.com'),
(12, 'Rabiul', 'rabiulkhan90@yahoo.com', '56789', 'rampura', 'male', '4567', '8.8.99', 'facebook.com', 'twitter.com', 'googleplus.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `admission`
-- 

CREATE TABLE `admission` (
  `admission_id` int(11) NOT NULL auto_increment,
  `admission_date` longtext NOT NULL,
  `baby_name` longtext NOT NULL,
  `age_category` longtext NOT NULL,
  `education_level` longtext NOT NULL,
  `education_category` longtext NOT NULL,
  `guardian_name` longtext NOT NULL,
  `relation` longtext NOT NULL,
  PRIMARY KEY  (`admission_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `admission`
-- 

INSERT INTO `admission` (`admission_id`, `admission_date`, `baby_name`, `age_category`, `education_level`, `education_category`, `guardian_name`, `relation`) VALUES 
(2, '1-1-15', 'rabs', '11 to 15', '10', 'Arts', 'Rabiul', 'bro');

-- --------------------------------------------------------

-- 
-- Table structure for table `age_category`
-- 

CREATE TABLE `age_category` (
  `age_category_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `start_age` longtext NOT NULL,
  `end_age` longtext NOT NULL,
  PRIMARY KEY  (`age_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `age_category`
-- 

INSERT INTO `age_category` (`age_category_id`, `name`, `start_age`, `end_age`) VALUES 
(5, 'low', '0', '5'),
(4, 'high', '11', '15');

-- --------------------------------------------------------

-- 
-- Table structure for table `care_time_category`
-- 

CREATE TABLE `care_time_category` (
  `care_time_category_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  PRIMARY KEY  (`care_time_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `care_time_category`
-- 

INSERT INTO `care_time_category` (`care_time_category_id`, `name`) VALUES 
(3, 'Day and Night'),
(4, 'Day'),
(5, 'night');

-- --------------------------------------------------------

-- 
-- Table structure for table `education_category`
-- 

CREATE TABLE `education_category` (
  `education_category_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `level` longtext NOT NULL,
  PRIMARY KEY  (`education_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `education_category`
-- 

INSERT INTO `education_category` (`education_category_id`, `name`, `level`) VALUES 
(3, 'Arts', '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `education_level`
-- 

CREATE TABLE `education_level` (
  `education_level_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  PRIMARY KEY  (`education_level_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `education_level`
-- 

INSERT INTO `education_level` (`education_level_id`, `name`) VALUES 
(3, '10'),
(2, '1');

-- --------------------------------------------------------

-- 
-- Table structure for table `guardians`
-- 

CREATE TABLE `guardians` (
  `guardians_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `address` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `twiter` longtext NOT NULL,
  `google_plus` longtext NOT NULL,
  PRIMARY KEY  (`guardians_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `guardians`
-- 

INSERT INTO `guardians` (`guardians_id`, `name`, `email`, `password`, `address`, `phone_number`, `facebook`, `twiter`, `google_plus`) VALUES 
(2, 'Rabiul', 'rabiulkhan90@yahoo.com', '0234vv', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `nurse`
-- 

CREATE TABLE `nurse` (
  `nurse_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `address` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  `appointment_date` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `twiter` longtext NOT NULL,
  `google_plus` longtext NOT NULL,
  PRIMARY KEY  (`nurse_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `nurse`
-- 

INSERT INTO `nurse` (`nurse_id`, `name`, `email`, `password`, `address`, `phone_number`, `appointment_date`, `facebook`, `twiter`, `google_plus`) VALUES 
(2, 'rafat', 'rabsbbb@ds.com', '12345', 'malibag', '12344', '6.7.88', 'facebook.com', 'twitter.com', 'googleplus.com');

-- --------------------------------------------------------

-- 
-- Table structure for table `teachers`
-- 

CREATE TABLE `teachers` (
  `teachers_id` int(11) NOT NULL auto_increment,
  `name` longtext NOT NULL,
  `email` longtext NOT NULL,
  `password` longtext NOT NULL,
  `address` longtext NOT NULL,
  `phone_number` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `appointment_date` longtext NOT NULL,
  `facebook` longtext NOT NULL,
  `twiter` longtext NOT NULL,
  `google_plus` longtext NOT NULL,
  PRIMARY KEY  (`teachers_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `teachers`
-- 

INSERT INTO `teachers` (`teachers_id`, `name`, `email`, `password`, `address`, `phone_number`, `gender`, `appointment_date`, `facebook`, `twiter`, `google_plus`) VALUES 
(2, 'Rabiul', 'rabiulkhan90@yahoo.com', '', '', '', '', '', '', '', '');
