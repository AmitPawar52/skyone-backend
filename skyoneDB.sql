-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2019 at 03:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skyoneDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagePath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clientspeaks`
--

CREATE TABLE `clientspeaks` (
  `id` int(10) UNSIGNED NOT NULL,
  `clientName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientPosition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clientSays` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgPath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clientspeaks`
--

INSERT INTO `clientspeaks` (`id`, `clientName`, `clientPosition`, `clientSays`, `imgPath`, `created_at`, `updated_at`) VALUES
(1, 'Avadhut Kore', 'Adviser', 'I say something but they dont understand, and they say something that I dont understand but still I understand what they dont understand and they dont understant what I understand. How understanding is this ? I dont know but I understand what they dont... ', 'api/resources/images/testimg.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

CREATE TABLE `contactuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `loanDetail_id` int(10) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `loanDetail_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 1, 'How can I repay my personal loan?\r\n', 'Personal loan can be repaid in equal monthly instalments or EMI. You can provide a post-dated cheque or can give a standing order with your bank or through electronic transfer.', '2019-03-19 03:00:46', '2019-03-19 03:00:46'),
(2, 1, 'What is an EMI ?', 'EMI or Equal Monthly Instalment is the amount that a borrower pays each month towards an outstanding loan to clear off the debt within a specific timeframe. EMI.includes principal and interest.', '2019-03-19 03:08:06', '2019-03-19 03:08:06'),
(3, 1, 'Is part- prepayment allowed on my personal loan?', 'Personal loans can be prepaid in parts or as a whole at any stage. Some banks may charge a prepayment penalty for the same. Some banks do not allow part-prepayment. So, check all the documents before finalising on the loan with the bank.', '2019-03-19 03:08:48', '2019-03-19 03:08:48'),
(4, 1, 'Will I need a guarantor to take a personal loan?', 'No, you will not need a guarantor to take a personal loan.', '2019-03-19 03:19:04', '2019-03-19 03:19:04'),
(5, 1, 'Can I club my income with my spouse to take a personal loan?', 'Yes, you can club the income of your spouse to boost your eligibility to avail a personal loan.', '2019-03-19 03:20:00', '2019-03-19 03:20:00'),
(6, 1, 'How will I be eligible for a relationship discount?', 'If you have been a customer for a particular bank for a while, then the bank might reduce the personal loan interest rate or other such charges. Some banks will also provide you additional services.', '2019-03-19 03:22:35', '2019-03-19 03:22:35'),
(7, 1, 'Do I need to open a bank account to service my personal loan?', 'If you do not have an account with the bank, it is not mandatory to apply for one. But, if you apply for a loan with your existing banker, then you will be eligible for a relationship discount.', '2019-03-19 03:24:03', '2019-03-19 03:24:03'),
(8, 1, 'How do I stop executives from calling me to let me know about other loans?', 'Some banks let you register yourself for ‘Do Not Disturb\'. If you opt for this, the executives will not disturb you with cold sales calls.', '2019-03-19 03:24:53', '2019-03-19 03:24:53'),
(9, 1, 'What is the best way to apply for personal Loan?', 'The best way to apply for an personal loan is by using the online loan application tool at skyonefinance.com The tool can be accessed on this site allowing users to choose personal loan from various banks and NBFCS as per their selection.', '2019-03-19 03:26:52', '2019-03-19 03:26:52');

-- --------------------------------------------------------

--
-- Table structure for table `homesec2s`
--

CREATE TABLE `homesec2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesec2s`
--

INSERT INTO `homesec2s` (`id`, `title`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Home Loan', 'api/resources/images/home/sec2/homeloan-ico.png', NULL, NULL),
(2, 'Buisness Loan', 'api/resources/images/home/sec2/case.png', NULL, NULL),
(3, 'Credit Card', 'api/resources/images/home/sec2/creditcard.png', NULL, NULL),
(4, 'Personal Loan', 'api/resources/images/home/sec2/personalloan-ico.png', NULL, NULL),
(5, 'Loan Against Property', 'api/resources/images/home/sec2/lap.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homesec3s`
--

CREATE TABLE `homesec3s` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` double(8,2) NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesec3s`
--

INSERT INTO `homesec3s` (`id`, `title`, `percentage`, `label`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Lowest Interest in Buisness Loan', 10.99, 'Lowest Intrest', 'api/resources/images/home/sec3/lowinterest.png', '2019-03-19 04:57:01', '2019-03-19 04:57:01'),
(2, 'Easy Personal Loan by Anyone', 10.99, 'Lowest Intrest', 'api/resources/images/home/sec3/easypersonalloan.png', '2019-03-19 04:57:26', '2019-03-19 04:57:26'),
(3, 'Credit & Debit Card with 0 interest', 10.99, 'Lowest Intrest', 'api/resources/images/home/sec3/creditdebit.png', '2019-03-19 04:57:55', '2019-03-19 04:57:55'),
(4, 'New & Recondition Car laon', 10.99, 'Lowest Intrest', 'api/resources/images/home/sec3/newrecognition.png', '2019-03-19 04:58:21', '2019-03-19 04:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `homesec4s`
--

CREATE TABLE `homesec4s` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homesec4s`
--

INSERT INTO `homesec4s` (`id`, `title`, `description`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Home Loan', 'Here we have enumerated different features of a home loan to help you understand the home loans in a better way.', 'api/resources/images/home/sec4/homeloan4.png', '2019-03-19 05:00:39', '2019-03-19 05:00:39'),
(2, 'Personal Loan', 'Here we have enumerated different features of a home loan to help you understand the home loans in a better way.', 'api/resources/images/home/sec4/personalloan4.png', '2019-03-19 05:00:59', '2019-03-19 05:00:59'),
(3, 'Buisness Loan', 'Here we have enumerated different features of a home loan to help you understand the home loans in a better way.', 'api/resources/images/home/sec4/businessloan4.png', '2019-03-19 05:01:23', '2019-03-19 05:01:23'),
(4, 'Credit Cards', 'Here we have enumerated different features of a home loan to help you understand the home loans in a better way.', 'api/resources/images/home/sec4/creditcard4.png', '2019-03-19 05:01:47', '2019-03-19 05:01:47'),
(5, 'Loan Against property', 'Here we have enumerated different features of a home loan to help you understand the home loans in a better way.', 'api/resources/images/home/sec4/lap4.png', '2019-03-19 05:02:12', '2019-03-19 05:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagePath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `title`, `description`, `imagePath`, `created_at`, `updated_at`) VALUES
(1, 'this is a title', 'this is a description of above title, isn\'t it...', 'api/resources/images/home/mainslider/slide.jpg', '2019-03-19 04:31:00', '2019-03-19 04:31:00'),
(2, 'this is a title', 'this is a description of above title, isn\'t it...', 'api/resources/images/home/mainslider/slide1.jpg', '2019-03-19 04:31:08', '2019-03-19 04:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `inquiries`
--

CREATE TABLE `inquiries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `requirement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `loanType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatIsLType` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyChooseTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyChoosePoints` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `whyChooseFooter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptcTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptcPoints` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_details`
--

INSERT INTO `loan_details` (`id`, `loanType`, `whatIsLType`, `whyChooseTitle`, `whyChoosePoints`, `whyChooseFooter`, `ptcTitle`, `ptcPoints`, `created_at`, `updated_at`) VALUES
(1, 'Personal Loan', 'Sit tempore culpa fuga est aut at. Incidunt quo omnis in eaque quaerat doloremque qui. Provident temporibus animi natus voluptatem ut minima quis.', 'Aperiam quos ullam sapiente numquam itaque. Veritatis ut iste fugit deserunt incidunt fugit. Labore quia voluptatem eos officia reprehenderit et.', 'Quaerat distinctio consequatur modi in. Dolorem et itaque qui reprehenderit unde. Et facere ex voluptatem temporibus non optio dolorem. Animi quia nemo dicta voluptatem. Incidunt corporis consequatur ratione velit ratione iusto. Facere repellat quia neque nostrum quod.', 'Iusto et quas debitis et. Qui fuga dolorem libero. Numquam sint iure eligendi magnam eos dolorum ut. Omnis ad quia ducimus eos saepe deleniti et aut.', 'Autem rerum corporis voluptates tempora. Qui nihil est alias inventore provident mollitia. Assumenda eligendi dicta quas quae omnis explicabo. Dolores aliquam nostrum alias quo.', 'Explicabo unde architecto voluptas et et. Repellat nostrum vel dolorem. Id deleniti magnam ullam maiores deleniti dolore. Qui autem ut omnis tempore. Et quis molestiae et explicabo animi ut. Aut velit facilis eos accusamus quos voluptas.', '2019-03-19 03:00:30', '2019-03-19 03:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `loan_processes`
--

CREATE TABLE `loan_processes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_processes`
--

INSERT INTO `loan_processes` (`id`, `title`, `description`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'Inquiry', 'First we will apply for a loan with your needs and amount. First we will apply for a loan with your needs and amount.', 'api/resources/images/home/sec5/inquiry.png', NULL, NULL),
(2, 'Verification', 'First we will apply for a loan with your needs and amount. First we will apply for a loan with your needs and amount.', 'api/resources/images/home/sec5/verification.png', NULL, NULL),
(3, 'Recieve Money', 'First we will apply for a loan with your needs and amount. First we will apply for a loan with your needs and amount.', 'api/resources/images/home/sec5/receivemoney.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(165, '2014_10_12_000000_create_users_table', 1),
(166, '2014_10_12_100000_create_password_resets_table', 1),
(167, '2019_01_03_065751_create_inquiries_table', 1),
(168, '2019_01_04_095446_create_contactuses_table', 1),
(169, '2019_01_09_081814_create_clientspeaks_table', 1),
(171, '2019_02_05_073507_create_home_sliders_table', 1),
(172, '2019_02_05_093235_create_blogs_table', 1),
(173, '2019_02_06_105830_create_loan_details_table', 1),
(174, '2019_03_08_081547_create_partners_table', 1),
(175, '2019_03_08_091308_create_loan_processes_table', 1),
(176, '2019_03_08_095546_create_homesec3s_table', 1),
(177, '2019_03_11_064958_create_homesec4s_table', 1),
(178, '2019_03_11_071121_create_homesec2s_table', 1),
(179, '2019_01_10_090834_create_faqs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `img_url`, `created_at`, `updated_at`) VALUES
(1, 'ICICI', 'api/resources/images/home/partners/partner.png', '2019-03-19 04:26:59', '2019-03-19 04:26:59'),
(2, 'HDFC', 'api/resources/images/home/partners/partner.png', '2019-03-19 04:27:11', '2019-03-19 04:27:11'),
(3, 'AXIS', 'api/resources/images/home/partners/partner.png', '2019-03-19 04:27:23', '2019-03-19 04:27:23'),
(4, 'Kotak Mahindra', 'api/resources/images/home/partners/partner.png', '2019-03-19 04:27:36', '2019-03-19 04:27:36'),
(5, 'Fuilerton', 'api/resources/images/home/partners/partner.png', '2019-03-19 04:27:47', '2019-03-19 04:27:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientspeaks`
--
ALTER TABLE `clientspeaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactuses`
--
ALTER TABLE `contactuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contactuses_email_unique` (`email`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_loandetail_id_foreign` (`loanDetail_id`);

--
-- Indexes for table `homesec2s`
--
ALTER TABLE `homesec2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec3s`
--
ALTER TABLE `homesec3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesec4s`
--
ALTER TABLE `homesec4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiries`
--
ALTER TABLE `inquiries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inquiries_email_unique` (`email`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_processes`
--
ALTER TABLE `loan_processes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientspeaks`
--
ALTER TABLE `clientspeaks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactuses`
--
ALTER TABLE `contactuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `homesec2s`
--
ALTER TABLE `homesec2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homesec3s`
--
ALTER TABLE `homesec3s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homesec4s`
--
ALTER TABLE `homesec4s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inquiries`
--
ALTER TABLE `inquiries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_details`
--
ALTER TABLE `loan_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loan_processes`
--
ALTER TABLE `loan_processes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_loandetail_id_foreign` FOREIGN KEY (`loanDetail_id`) REFERENCES `loan_details` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
