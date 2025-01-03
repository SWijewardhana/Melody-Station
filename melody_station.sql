-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2024 at 04:12 PM
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
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `image`, `description`, `created_at`) VALUES
(30, 'Acoustic Guitar', 'R.jpg', 'Known for its rich and resonant sound, this guitar is commonly used in folk, country, and pop music. It has a wooden body and uses steel strings.', '2024-12-31 14:44:56'),
(31, 'Electric Guitar', 's.jpg', 'Sleek and versatile, the electric guitar is essential for rock, metal, and jazz genres. It requires amplification to produce sound.', '2024-12-31 14:47:06'),
(32, 'Classical Guitar', 't.jpg', 'With nylon strings and a wider neck, the classical guitar is ideal for classical, flamenco, and fingerstyle music, offering a softer and warmer tone.', '2024-12-31 14:48:19'),
(33, 'Bass Guitar', 'u.jpg', 'Featuring four thick strings, the bass guitar provides the deep, rhythmic foundation in music. It\'s larger than most guitars and has a distinctive, low-end sound.', '2024-12-31 14:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `nic` varchar(20) NOT NULL,
  `date_of_pickup` date NOT NULL,
  `date_of_return` date NOT NULL,
  `price` int(11) NOT NULL,
  `slip_path` varchar(255) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `name`, `email`, `phone_no`, `nic`, `date_of_pickup`, `date_of_return`, `price`, `slip_path`, `note`, `created_at`) VALUES
(1, 'Kasun Liyanage', 'kasun@gmail.com', '0765373752', '976601726V', '2024-12-31', '2025-01-01', 1200, 'uploads/slip_67715bc7eaf9d_gallery-8-2.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 14:25:11'),
(2, 'Kasun Liyanage', 'kasun@gmail.com', '0765373752', '976601726V', '2024-12-29', '2024-12-31', 1800, 'uploads/slip_67715c32791df_gallery-8-2.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 14:26:58'),
(3, 'Kasun Liyanage', 'kasun@gmail.com', '0765373752', '976601726V', '2024-12-30', '2025-01-02', 2400, 'uploads/slip_67715ccc5847b_gallery-8-2.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 14:29:32'),
(4, 'Kasun Liyanage', 'kasun@gmail.com', '0765373752', '976601726V', '2024-12-30', '2024-12-31', 1200, 'uploads/slip_67715e0337194_gallery-9.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 14:34:43'),
(5, 'Kasun Liyanage', 'kasun@gmail.com', '0765373752', '976601726V', '2024-12-18', '2025-01-02', 9600, 'uploads/slip_67715ff0ac8bc_gallery-8.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 14:42:56'),
(6, 'shashini Wijewardhana', 'shashini@gmail.com', '0774539245', '984561240V', '2024-12-31', '2025-01-02', 1800, 'uploads/slip_67716158e3d88_gallery-12.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 14:48:56'),
(7, 'shashini Wijewardhana', 'shashini@gmail.com', '0774539245', '984561240V', '2024-12-25', '2025-01-08', 9000, 'uploads/slip_67717872edf65_gallery-8-2.jpg', 'Price: Rs. 600 per day. Payment methods: cash or upload slip.', '2024-12-29 16:27:30');

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
(3, 'shashini', 'bo@gmail', '$2y$10$0/sV7TEaOD4EikgmY4Nrw.EeEOjDYmi1xFCCsoFkxA7', '2024-12-26 06:19:24'),
(4, 'Kaushalya Wijewardhana', 'Kaushalya@gmail.com', '$2y$10$Z8bXnwJ1/JjZghti7V55z.kvB./UnpSkOcd2Px92qiL', '2024-12-26 06:21:17'),
(5, 'Thilini Wijewardhana', 'thilini@gmail.com', '$2y$10$6wXZbs7GRYEmhDvhNko54.nY8ARwfG/RB6b8mDSzZUC', '2024-12-26 06:38:11'),
(6, 'Kasun Liyanage', 'kasun@gmail.com', '$2y$10$BqYLlInuPJndoN/7x6cFv.ARv1xNV5BC7WnjI/0S5bfrMhlxUzqkG', '2024-12-29 13:20:55'),
(7, 'Tharul Wijewardhana', 'tharul@gmail.com', '$2y$10$57cdUDRJc4PzPFg0zU/cq.Syg2wZ0Mn4ea/7WAtn1vVZtmqjRqBPi', '2024-12-29 13:36:33'),
(8, 'Ravindu Hashan', 'ravindu@gmail.com', '$2y$10$uivwRAKK8I0oGcTMZi7JzOEgxp6XrcMrnMwPtlz82ncQuWs1jdY3u', '2024-12-29 16:21:14'),
(9, 'Upeksha Sandamini', 'upe@gmail.com', '$2y$10$6uf2Wukp.6yXaOTNzDHo/euodSC6WIj0p.L5rWG2UqbJp9ncbLvyi', '2024-12-31 05:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
