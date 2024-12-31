-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 05:06 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melody_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(11, 'testing1', 'testing 123 testing 123 testinvgdtg 12', '2024-12-27 11:37:53', '2024-12-29 15:36:55'),
(12, 'fsa', 'test description', '2024-12-29 14:15:27', '2024-12-29 16:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `date`) VALUES
(3, 'shashini', 'bo@gmail', '$2y$10$0/sV7TEaOD4EikgmY4Nrw.EeEOjDYmi1xFCCsoFkxA7', '2024-12-26 00:49:24'),
(4, 'Kaushalya Wijewardhana', 'Kaushalya@gmail.com', '$2y$10$Z8bXnwJ1/JjZghti7V55z.kvB./UnpSkOcd2Px92qiL', '2024-12-26 00:51:17'),
(5, 'Thilini Wijewardhana', 'thilini@gmail.com', '$2y$10$6wXZbs7GRYEmhDvhNko54.nY8ARwfG/RB6b8mDSzZUC', '2024-12-26 01:08:11'),
(0, 'test', 'test@gmail.com', '$2y$10$lvXkJeWRDUX/aD.POrEDXOhVfItMirOOlYcymOrhw3rhmtnXTdXFG', '2024-12-27 05:32:50'),
(0, 'tharuka', 'test@gmail.com', '$2y$10$9t8JxRhusfJhJm.N.lX0COCUN9cuXTxxqr5o0WoAVAdtNbzd5bR/y', '2024-12-29 14:12:52'),
(0, 'tharukas', 'tharukas@gmail.com', '$2y$10$aVerWExgFgrJQMAjU2.rw.zClCL2dGs8uxNvVbN3I73HMq0bCSuXS', '2024-12-29 15:24:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
