CREATE DATABASE IF NOT EXISTS `kata` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kata`;

-- --------------------------------------------------------

--
-- Table structure for table `kata`
--

CREATE TABLE `kata` (
  `id` int(200) NOT NULL,
  `content_kata` varchar(100) NOT NULL,
  `author_kata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kata`
--

INSERT INTO `kata` (`id`, `content_kata`, `author_kata`) VALUES
(1, 'Ketika aku berdoa, Tuhan tak pernah menanyakan agamaku.', 'Joko Pinurbo'),
(2, 'Kurang atau lebih, setiap rezeki perlu dirayakan dengan secangkir kopi.', 'Joko Pinurbo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kata`
--
ALTER TABLE `kata`
  ADD PRIMARY KEY (`id`);
