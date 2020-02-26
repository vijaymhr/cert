-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2020 at 08:56 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cert`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ourclient` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `author`, `ourclient`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Jeremy </strong>established <strong>Haselden &amp; CO NZ</strong> Limited in January 2001 having previously worked in agriculture, industry and the multinational corporate sectors. This background sowed the seeds for his consulting <em>practice </em>encompassing the implementation of quality assurance, workplace safety, environmental compliance and commercial risk relating to insurance transparency and adequacy. Establishing concise and repeatable operational standards that deliver manufacturing and service industry excellence that results in sound returns on capital invested, is the crux of what we do.<strong> Doing this work on behalf of clients is something that </strong>delights and absorbs Jeremy. All our systems are online and are individual and bespoke to each client&#39;s requirements. He also works on behalf of companies when faced with workplace safety incidents involving Worksafe New Zealand to resolve the circumstances and minimise prosecution. He has a broad client base ranging from Heavy Engineering, Manufacturing, Timber Industry, Food Industry, Rural Transportation, Fleet Service Providers and Large Scale Agriculture. Jeremy is a qualified ISO Lead Auditor.</p>', '<p>Our clients receive an individually designed business platform from which to optimise efficiency and operational transparency. We assist senior management with the agility, to influence and play an active role at all levels. This pathway is delivered through Quality Assurance, linked to customer satisfaction and sales, Workplace Safety, Environmental Compliance, Risk Management and Business Continuity Planning. These are the cornerstones of &ldquo;best practice&rdquo;, and it is these that we specialise in.<br />\r\nOur clients come from many sectors including Heavy Engineering, Manufacturing, Timber Industry, Food Industry, Rural Transportation, Ready-Mix Concrete, Fleet Service Providers and Large Scale Agriculture.</p>', '2020-02-17 11:00:00', '2020-02-25 17:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `fname`, `email`, `mobile`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Andrii', 'andrii.krysko@gmail.com', '+380631531169', 'sadfa', 'zxcfasdf', '2020-02-23 09:59:55', '2020-02-23 09:59:55'),
(2, 'Andrii', 'admin@admin.com', '+380631531169', 'sadfa', 'es', '2020-02-23 10:12:53', '2020-02-23 10:12:53'),
(3, 'Andrii', 'andrii.krysko@gmail.com', '+380631531169', 'ISO9001', 'Please help me', '2020-02-23 18:52:43', '2020-02-23 18:52:43'),
(4, 'John', 'admin@admin.com', '+380631531169', 'Help with Environmental', 'Hello, Jeremy. Please help me. Could you reach me on that phone: 012301023', '2020-02-23 19:47:03', '2020-02-23 19:47:03'),
(5, 'cxg', 'andrii.krysko@gmail.com', '+380631531169', 'df', 'df', '2020-02-25 18:39:21', '2020-02-25 18:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `address`, `contact`, `email`, `created_at`, `updated_at`) VALUES
(1, '851 Picton Ave, Riccarton, Christchurch 80112', '+64212654593', 'info@haselden.co.nz', NULL, '2020-02-19 08:29:03');

-- --------------------------------------------------------

--
-- Table structure for table `iso`
--

CREATE TABLE `iso` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso_9001` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_45001` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_14001_1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_14001_2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_14001_3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iso`
--

INSERT INTO `iso` (`id`, `iso_9001`, `iso_45001`, `iso_14001_1`, `iso_14001_2`, `iso_14001_3`, `created_at`, `updated_at`) VALUES
(1, '<ul>\r\n	<li>Essentially this process is a check of the business management systems</li>\r\n	<li>Haselden &amp; Co NZ Limited provides not only the management system but a Quality Assurance practitioner who can become part of your QAM Team should this be the right option.</li>\r\n	<li>We build a quality assurance management system specific to our clients activities and requirements.</li>\r\n	<li>Assistance with the implementation of our management system or transition to the ISO9001 Quality Assurance Standards is also available to interested company&rsquo;s</li>\r\n</ul>', '<ul>\r\n	<li>The New Zealand HSWA now requires formal management systems to be in place for the management of Occupational Health &amp; Safety. Haselden &amp; Co NZ Limited provides not only the management system but an OH&amp;S practitioner who becomes part of your OH&amp;S Team, 24/7.</li>\r\n	<li>We build an Occupational Health &amp; Safety management system that is specific to your company&rsquo;s activities and requirements. It is procedural in relation to law and practical in terms of application.</li>\r\n	<li>Assistance with the implementation of this management system or transition to the ISO45001 OH&amp;S Standards is also available to interested company&rsquo;s.</li>\r\n</ul>', '<ul>\r\n	<li>Our system provides reviews and monitoring of environmental impacts of your business operations. Again, we build an environmental management system that is specific to our client&#39;s activities and requirements.</li>\r\n	<li>This requirement has become a critical operational procedure and requires careful RMA consideration and compliance, particularly for the agriculture and export/import sectors.</li>\r\n	<li>Assistance with the implementation of this management system or transition to the ISO14001 OH&amp;S Standards is also available to interested company&rsquo;s.</li>\r\n</ul>', '<ul>\r\n	<li>This is a key Senior Management responsibility commercial entities</li>\r\n	<li>A business continuity impact analysis identifies the effects resulting from a disruption of business functions or processes. It also uses the information to make decisions about recovery priorities and strategies. Haselden &amp; Co can assist in implementing your BCP.</li>\r\n	<li>It&rsquo;s a &ldquo;must-do&rdquo; given recent earthquake events in Christchurch NZ and further afield.</li>\r\n</ul>', '<ul>\r\n	<li>Insurance Risk Management</li>\r\n	<li>Haselden &amp; Co assist in identifying and analysing business risk and loss.</li>\r\n	<li>We make available options to minimise the financial impact by evaluating, mitigating, and monitoring the company&#39;s operational and strategic risk.</li>\r\n	<li>Too often, we find our clients and new clients have not given adequate attention to the actual coverage being purchased and the associated charges.</li>\r\n</ul>', NULL, '2020-02-23 18:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_18_033814_create_about_table', 1),
(5, '2020_02_18_035041_create_about_table', 2),
(6, '2020_02_18_061036_create_iso_table', 3),
(7, '2020_02_18_090802_create_info_table', 4),
(8, '2020_02_18_093827_create_feedbacks_table', 5),
(9, '2020_02_21_025714_create_iso_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vijay Maharjan', 'vijaymaharjan911@gmail.com', NULL, '$2y$10$gWaLsnpWgtSttI0UCL7l..AaLffYN1oai7VjcY/mFo9We02Ttz61q', NULL, '2020-02-22 12:41:08', '2020-02-22 12:41:08'),
(2, 'Andrii Krysko', 'andrii.krysko@gmail.com', NULL, '$2y$10$BQ9JSy203Xb04.1VpS.o2O5vsv2EhH6RKF8WAkuusUgVvQbBq64Si', NULL, '2020-02-23 10:03:05', '2020-02-23 10:03:05'),
(3, 'Jeremy Haselden', 'andrii.rvpr@gmail.com', NULL, '$2y$10$ICSX9xZdGecabGHn0pISjeUlwwqueo/ebmaRTInliFvOVOJ4ovdz.', NULL, '2020-02-23 10:10:39', '2020-02-23 10:10:39'),
(4, 'Jeremy Haselden', 'info@haselden.co.nz', NULL, '$2y$10$I0tXo3TI/7B4Q6sKjuqtnOxI744FKkBdNdqiE.yPBuQyk8chhe9u6', NULL, '2020-02-23 18:54:56', '2020-02-23 18:54:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iso`
--
ALTER TABLE `iso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
