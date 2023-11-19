-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 07:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

-- Database: `tms`
-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `tms`.`teachers` (`TID` INT NOT NULL AUTO_INCREMENT , 
                                `Name` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL , 
                                `DOB` DATE NOT NULL , 
                                `Age` INT NOT NULL , 
                                `NoClasses` INT NOT NULL , 
                                PRIMARY KEY (`TID`)) ENGINE = InnoDB;

-- --------------------------------------------------------
