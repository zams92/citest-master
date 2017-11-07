-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2017 at 05:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citest`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `creat_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `products_id`, `name`, `text`, `creat_at`) VALUES
(1, 4, 'john', 'Good', '2017-11-07 03:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `textutama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `textutama`) VALUES
(1, '<p><tt><strong>I&#39;m Programer</strong>, <strong>I can any program language that needed because any program language</strong> is same about logic on the center of it.</tt></p>\r\n\r\n<p><tt><strong>As long as there example program for that program language and internet for searching an answer I can study it</strong> just around 3 months for nothing to advance, 4&nbsp;weeks for nothing to intermediate.</tt></p>\r\n\r\n<h3><tt><strong>So why not to have me ?&nbsp;</strong></tt></h3>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `pictures` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `info`, `category`, `pictures`) VALUES
(3, 'Umroh dan Travel', '<p><tt>Fusce in porttitor augue. Ut gravida mi eget dolor scelerisque luctus. Etiam tempus nulla at nibh vestibulum, vel ullamcorper leo feugiat. Nulla non risus magna. Pellentesque id egestas mi, at egestas nibh. Quisque suscipit tortor at mauris pulvinar, ac accumsan ex accumsan. Integer in sapien at mi efficitur tristique non sed felis. </tt></p>\r\n\r\n<p><tt>Sed in sapien vehicula, facilisis quam vitae, ullamcorper magna. Nulla facilisi. Proin eu consequat nulla, quis vehicula dolor. Pellentesque mattis, velit a mattis tempor, diam felis posuere nibh, ut posuere arcu dolor non orci. Nulla at sem elit. Phasellus elit ex, pulvinar sed vestibulum eu, congue in ligula. Morbi sagittis, magna sit amet aliquam pretium, quam risus commodo elit, non commodo nisl eros at metus. Vestibulum nulla tortor, pretium in massa vel, rutrum lacinia leo.</tt></p>\r\n', 'PHP', 'Travel.jpg'),
(4, 'Sistem Pendiagnosa Penyakit Kulit Psoriasis', '<p>Sistem ini membantu masyrakat dalam mendiagnosa penyakit psoriasis</p>\r\n\r\n<p>dalam sistem ini menggunakan metode case base reasoning yakni sebuah metode dari sistem pakar yang mendiagnosa sesuatu dengan gejala-gejala dari kasus lama yang ada dalam data akan dibandingkan dengan gejala-gejala yang dialami oleh pengguna.</p>\r\n\r\n<p>sehingga pengguna akan mendapatkan persentasi kedekatan dari kasus-kasus lama yang ada, lalu dengan persentase tertinggi merupakan kasus yang termirip dengan kasus pengguna dan pengguna akan diberikan solusi dan diagnosa penyakit yang dialami</p>\r\n', 'C#', 'datagejala.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `name`, `email`, `info`) VALUES
(1, 'Muhammad Zamakhsyari', 'zamakhsyari.muhammad@gmail.com', '<p>Data Pendidikan</p>\r\n\r\n<table align=\"center\" border=\"1\" bordercolor=\"#ccc\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse:collapse\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">NO</th>\r\n			<th scope=\"col\">Nama Tempat Pendidikan</th>\r\n			<th scope=\"col\">Tahun Masuk</th>\r\n			<th scope=\"col\">Tahun Lulus</th>\r\n			<th scope=\"col\">Indeks Prestasi</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>SDN 060853 Medan</td>\r\n			<td>1998</td>\r\n			<td>2004</td>\r\n			<td>-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>SMPN 11 Medan</td>\r\n			<td>2004</td>\r\n			<td>2007</td>\r\n			<td>-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>SMAN 3 Medan</td>\r\n			<td>2007</td>\r\n			<td>2010</td>\r\n			<td>-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>Diploma Institut Pertanian Bogor (D3)</td>\r\n			<td>2010</td>\r\n			<td>2013</td>\r\n			<td>2.99/4.00</td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>STMIK Trigunadharma (S1)</td>\r\n			<td>2015</td>\r\n			<td>2017</td>\r\n			<td>3.19/4.00</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `zipcode`, `register_date`) VALUES
(1, 'zamakhsyari', 'zamakhsyari.muhammad@gmail.com', 'zams', '827ccb0eea8a706c4c34a16891f84e7b', '20225', '2017-11-05 05:59:29'),
(2, 'john', 'johntravolta@gmail.com', 'john', '827ccb0eea8a706c4c34a16891f84e7b', '20231', '2017-11-07 03:08:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
