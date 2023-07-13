-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 04:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tif`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `arbody` text NOT NULL,
  `enbody` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `image`, `arbody`, `enbody`, `created_at`, `updated_at`) VALUES
(1, 'images/1689245763_image (57).png', 'شركة سعودية ذات مسؤولية محدودة تأسست في الأول من أكتوبر 2019 لها نشاطات متعددة مثل التسويق عبر دراسات السوق وإدارة العلامات التجارية وتقنية المعلومات ببناء أنظمة للتحول الرقمي للمساهمة في تحول القطاع الخاص رقميا اضافة الى صناعة البرامج الترفيهية التي تساهم في تجديد المحتوى الترفيه المحلي تعتمد الشركة برنامج رؤية 2030 مسارا وخطة لأنشطتها إيمانا بها للمساهمة في رفع الناتج المحلي وتنويع مصادر الدخل', 'A Saudi limited liability company established on October 1, 2019. It has multiple activities such as marketing through market studies, brand management and information technology, building digital transformation systems to contribute to the digital transformation of the private sector, in addition to the entertainment programs industry that contributes to the renewal of local entertainment content. The company adopts a vision program 2030 as a path and plan for its activities, believing in it to contribute to raising the domestic product and diversifying sources of income', '2023-07-13 07:56:03', '2023-07-13 07:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `briefs`
--

CREATE TABLE `briefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `arbody` text NOT NULL,
  `enbody` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `briefs`
--

INSERT INTO `briefs` (`id`, `name`, `arbody`, `enbody`, `created_at`, `updated_at`) VALUES
(1, 'home', 'تأسست طيف شغفا وحًبا بـ البيانات وتحليلها مما يجعلها الرائدة في المدينة المنورة في هذا المجال، تستخدم الشركة البيانات في التحول الرقمي من الجوانب التقنية والتسويقية مما يساهم في بناء الاقتصاد المحلي وتنمية الناتج المحلي في المنطقة', 'Taif was founded with a passion and love for data and its analysis, which makes it the leader in Medina in this field. The company uses data in digital transformation from the technical and marketing aspects, which contributes to building the local economy and developing the local product in the region.', '2023-07-13 07:47:30', '2023-07-13 07:47:30'),
(2, 'footer', 'طيف هى شركة سعودية ذات مسؤولية محدودة تأسست في الأول من أكتوبر 2019 لها نشاطات متعددة مثل التسويق عبر دراسات السوق وإدارة العلامات التجارية وتقنية المعلومات ببناء أنظمة للتحول الرقمي للمساهمة في تحول القطاع الخاص رقميا', 'TAIF is a Saudi company with limited liability established on October 1, 2019. It has multiple activities such as marketing through market studies, brand management, and information technology by building digital transformation systems to contribute to the digital transformation of the private sector.', '2023-07-13 07:47:54', '2023-07-13 07:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `users` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`users`)),
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`roles`)),
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `users`, `roles`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'مشرف', NULL, '[\"news\",\"news.viewAny\",\"news.create\",\"news.update\",\"news.delete\",\"users\",\"users.viewAny\",\"users.create\",\"usersupdate\",\"users.delete\",\"users.roles\",\"groups.viewAny\",\"groups.create\",\"groups.update\",\"groups.delete\",\"partners\",\"partners.viewAny\",\"partners.create\",\"partners.update\",\"partners.delete\",\"services\",\"services.viewAny\",\"services.create\",\"services.update\",\"services.delete\"]', 1, '2023-07-13 08:57:49', '2023-07-13 10:11:03'),
(2, 'كاتب', NULL, '[\"news\",\"news.viewAny\",\"news.create\",\"news.update\",\"news.delete\",\"website_content\",\"aboutus.viewAny\"]', 1, '2023-07-13 10:11:40', '2023-07-13 10:11:40');

-- --------------------------------------------------------

--
-- Table structure for table `image_contents`
--

CREATE TABLE `image_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `arname` text DEFAULT NULL,
  `enname` text DEFAULT NULL,
  `arbody` text NOT NULL,
  `enbody` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_contents`
--

INSERT INTO `image_contents` (`id`, `arname`, `enname`, `arbody`, `enbody`, `created_at`, `updated_at`) VALUES
(1, 'رؤيتنا', 'Our vision', 'انطلقت طيف في عالم الأعمال كشركة رائدة في مجالاتها بتغيير مفهوم تقديم الخدمات والمنتجات بما يتناسب مع التطورات المستمرة في حياتنا', 'Taif started in the business world as a pioneering company in its fields by changing the concept of providing services and products in line with the continuous developments in our lives', '2023-07-13 07:55:05', '2023-07-13 07:55:05'),
(2, 'رسالتنا', 'Our message', 'تهدف رسالتنا على تحفيز موظفينا على الإبداع والانجاز والوفاء والعطاء لديهم', 'Our mission aims to motivate our employees for creativity, achievement, loyalty and giving', '2023-07-13 07:55:05', '2023-07-13 07:55:05'),
(3, 'هدفنا', 'Our goal', 'تقديم خدمات عالية الجودة ترتكن إلى الإبداع في كل تفاصيلها', 'Providing high quality services based on creativity in every detail', '2023-07-13 07:55:05', '2023-07-13 07:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `mailing_lists`
--

CREATE TABLE `mailing_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mailing_lists`
--

INSERT INTO `mailing_lists` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'hethmjal5@gmail.com', '2023-07-13 07:42:03', '2023-07-13 07:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `marketings`
--

CREATE TABLE `marketings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketings`
--

INSERT INTO `marketings` (`id`, `name`, `code`, `image`, `created_at`, `updated_at`) VALUES
(1, 'facebook pixel', 'test code', 'images/1689254461_Group 354.png', '2023-07-13 10:21:01', '2023-07-13 10:22:58');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_07_084447_create_news_table', 1),
(6, '2022_02_07_091624_create_partners_table', 1),
(7, '2022_02_07_094327_create_searches_table', 1),
(8, '2022_02_07_122017_create_services_table', 1),
(9, '2022_02_08_203735_create_groups_table', 1),
(10, '2022_02_09_095325_create_markeings_table', 1),
(11, '2022_02_27_114642_create_sliders_table', 1),
(12, '2022_03_01_102502_create_messages_table', 1),
(13, '2022_03_01_111947_create_briefs_table', 1),
(14, '2022_03_01_112124_create_image_contents_table', 1),
(15, '2022_03_01_112152_create_aboutuses_table', 1),
(16, '2022_03_01_122047_create_tif_descriptions_table', 1),
(17, '2022_03_02_145411_create_mailing_lists_table', 1),
(18, '2022_03_02_150014_create_orders_table', 1),
(19, '2022_03_12_122532_create_partner_images_table', 1),
(20, '2022_03_16_094224_create_sms_data_table', 1),
(21, '2022_03_21_095220_create_roles_table', 1),
(22, '2022_03_21_095229_create_user_roles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artitle` varchar(255) NOT NULL,
  `arbody` text NOT NULL,
  `entitle` varchar(255) NOT NULL,
  `enbody` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `artitle`, `arbody`, `entitle`, `enbody`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'الخطوات لبدء أعمال التجارة الإلكترونية', '<p>عند بدء التجارة الإلكترونية الخاصة بك هناك العديد من الجوانب التي تحتاج إلى أن تأخذها في الإعتبار ولكن السؤال الأهم والذي سوف يحتاج إلى إجابة لأي مشروع للتجارة الإلكترونية هو ما الذي سوف تبيعه</p>\r\n\r\n<p>النجاح المتزايد الذي حققته مواقع التجارة الإلكترونية في جميع أنحاء العالم جعل نمط إقامة المشاريع أكثر واقعية من أي وقت مضى. سواء كنت تبحث عن زيادة لدخلك الشهري، أو تريد البدء في عمل تجاري بدوام كامل أو مجرد تبادل للمنتجات الخاصة بك مع العالم، فيعد أقامة موقع للتجارة الإلكترونية المنصة المثالية لجعل أحلامك حقيقة</p>\r\n\r\n<p>ونحن نريد أن نراك تحول أفكارك التجارية إلي واقع من الأعمال التجارية وخاصة أن التجارة الإلكترونية في الشرق الأوسط من المتوقع أن تنمو إلى 13.4 مليار دولار بحلول عام 2020، ونحن لا نريد أن تفوت ذلك. ولهذا السبب نقدم نبذة موجزة عن كل ما تحتاجه لتأخذ مشروع التجارة الإلكترونية الخاص بك من لوحة التصميم إلي شبكة الإنترنت</p>\r\n\r\n<p>اختيار المنتج<br />\r\nعند بدء التجارة الإلكترونية الخاصة بك هناك العديد من الجوانب التي تحتاج إلى أن تأخذها في الإعتبار، ولكن السؤال الأهم والذي سوف يحتاج إلى إجابة لأي مشروع للتجارة الإلكترونية هو ما الذي سوف تبيعه</p>\r\n\r\n<p>سوق التجارة الإلكترونية يتسم بالتنافسية لذلك عليك النظر إلى المجالات التي لديك فيها ميزة. وهذا قد يعني أن تبيع المنتج الذي صممته، وأن تبيع إلى مجتمع معين في أسواق متخصصة، أو التقاط الاتجاهات الجديدة في وقت مبكر. وضمان أن يكون لديك منتج قابل للأستمرارية والنمو من البداية يساعد على وضع أساس قوي لتجارتك الإلكترونية</p>\r\n\r\n<p>وضع خطة عمل<br />\r\nوضع خطة عمل واضحة أمر بالغ الأهمية لإنشاء مشروع تجاري ناجح، وليس لمجرد أن التجارة الإلكترونية الخاصة بك تتم على الانترنت يجعلها استثناء. فأنت تحتاج لخطة عمل تشمل استراتيجية للتمويل والتسويق، والدعاية والإعلان للعمل التجاري</p>\r\n\r\n<p>فأنت تحتاج إلى بلورة فكرة واضحة عن كيفية الوصول إلي النجاح وما المراحل التي تحتاج إلى تحقيقها على طول الطريق. أهم نتائج هذه المرحلة هو وضع خطة طويلة المدى لما تريد أن يكون عليه عملك</p>\r\n\r\n<p>إنشاء موقع للتجارة الإلكترونية الخاصة بك<br />\r\nإذا كان لديك خلفية تقنية لبناء موقعك من الصفرفهذا يعد دائما خياراً موجوداً، ولكن الاحتمالات هي أنك سوف ترغب في الاستفادة من الموارد المتاحة مسبقاً لإنشاء متجر على الانترنت. مع مواقع مثل Shopify يمكنك شراء اسم النطاق الخاص بك واستخدام الأدوات المتاحة في هذه المواقع لبناء موقع على شبكة الانترنت مخصص من الألف إلى الياء</p>\r\n\r\n<p>بمجرد الإنتهاء من الأجزاء التقنية للموقع ، سوف تحتاج إلى التفكير في التصميم العام لموقع الويب الخاص بك. فسوف تحتاج إلى إعداد إطار عام للموقع، عناوين رئيسية، وتنظيم المنتجات الخاصة بك في في فئات يسهل البحث والتنقل فيها. وسوف تحتاج أيضاً إلى استكمال قسم نبذة عن المتجر وأن تقرر ما إذا كنت سوف تستخدم مدونة للشركة</p>', 'Steps to start an e-commerce business', '<p>When starting your own e-commerce business, there are many aspects that you need to take into consideration, but the most important question that any e-commerce project will need to answer is what you will sell.</p>\r\n\r\n<p>The growing success of e-commerce sites around the world has made the entrepreneurial landscape more realistic than ever. Whether you are looking to increase your monthly income, want to start a full-time business or just exchange your products with the world, setting up an e-commerce site is the perfect platform to make your dreams come true.</p>\r\n\r\n<p>We want to see you turn your business ideas into a business reality, especially since e-commerce in the Middle East is expected to grow to $13.4 billion by 2020, and we don&#39;t want you to miss that. That&#39;s why we provide a brief overview of everything you need to take your e-commerce business from the whiteboard to the web</p>\r\n\r\n<p>Product selection<br />\r\nWhen starting your own e-commerce there are many aspects that you need to take into consideration, but the most important question that will need to be answered for any e-commerce project is what you will sell.</p>\r\n\r\n<p>The e-commerce market is competitive so you need to look at the areas where you have an edge. This could mean selling the product you designed, selling to a specific community in niche markets, or catching new trends early on. Ensuring you have a viable and growing product from the start helps lay a strong foundation for your e-commerce business</p>\r\n\r\n<p>Develop an action plan<br />\r\nDeveloping a clear business plan is crucial to creating a successful business, and just because your e-commerce is done online makes it no exception. You need a business plan that includes a strategy for financing, marketing, and advertising for the business</p>\r\n\r\n<p>You need to have a clear idea of how you will achieve success and what you need to achieve along the way. The most important outcome of this phase is creating a long-term plan for what you want your business to be</p>\r\n\r\n<p>Create your own e-commerce site<br />\r\nIf you have a technical background to build your site from scratch this is always an option, but odds are that you will want to take advantage of the resources already available to create an online store. With sites like Shopify you can buy your own domain name and use the tools available on these sites to build a custom website from the ground up.</p>\r\n\r\n<p>Once you have finished with the technical parts of the website, you will need to think about the overall design of your website. You&#39;ll need to set up a website outline, headlines, and organize your products into categories that are easy to search and navigate. You will also need to complete the About the Store section and decide whether to use a company blog</p>', 'images/1689248609_glenn-carstens-peters-npxXWgQ33ZQ-unsplash1.png', 1, '2023-07-13 08:40:57', '2023-07-13 08:43:29'),
(2, 'كيف تعمل بوابات الدفع الإلكتروني', '<p>إن بوابة الدفع الإلكتروني هي قطع برمجية مخصصة تمكن وتدير عمليات الدفع للعملاء والتجار والبنوك مع ضمان سلامة هذه العمليات لكل الأطراف</p>', 'Steps to start an e-commerce business', '<p>When starting your own e-commerce business, there are many aspects that you need to take into consideration, but the most important question that any e-commerce project will need to answer is what you will sell.</p>\r\n\r\n<p>The growing success of e-commerce sites around the world has made the entrepreneurial landscape more realistic than ever. Whether you are looking to increase your monthly income, want to start a full-time business or just exchange your products with the world, setting up an e-commerce site is the perfect platform to make your dreams come true.</p>\r\n\r\n<p>We want to see you turn your business ideas into a business reality, especially since e-commerce in the Middle East is expected to grow to $13.4 billion by 2020, and we don&#39;t want you to miss that. That&#39;s why we provide a brief overview of everything you need to take your e-commerce business from the whiteboard to the web</p>\r\n\r\n<p>Product selection<br />\r\nWhen starting your own e-commerce there are many aspects that you need to take into consideration, but the most important question that will need to be answered for any e-commerce project is what you will sell.</p>\r\n\r\n<p>The e-commerce market is competitive so you need to look at the areas where you have an edge. This could mean selling the product you designed, selling to a specific community in niche markets, or catching new trends early on. Ensuring you have a viable and growing product from the start helps lay a strong foundation for your e-commerce business</p>\r\n\r\n<p>Develop an action plan<br />\r\nDeveloping a clear business plan is crucial to creating a successful business, and just because your e-commerce is done online makes it no exception. You need a business plan that includes a strategy for financing, marketing, and advertising for the business</p>\r\n\r\n<p>You need to have a clear idea of how you will achieve success and what you need to achieve along the way. The most important outcome of this phase is creating a long-term plan for what you want your business to be</p>\r\n\r\n<p>Create your own e-commerce site<br />\r\nIf you have a technical background to build your site from scratch this is always an option, but odds are that you will want to take advantage of the resources already available to create an online store. With sites like Shopify you can buy your own domain name and use the tools available on these sites to build a custom website from the ground up.</p>\r\n\r\n<p>Once you have finished with the technical parts of the website, you will need to think about the overall design of your website. You&#39;ll need to set up a website outline, headlines, and organize your products into categories that are easy to search and navigate. You will also need to complete the About the Store section and decide whether to use a company blog</p>', 'images/1689248597_image (57) (1).png', 1, '2023-07-13 08:40:57', '2023-07-13 08:44:10'),
(3, 'التحول السريع للمدفوعات الغير نقدية', '<p>نشهد في وقتنا الحاضر المزيد من الاندفاع نحو ثقافة المدفوعات الغير نقدية حيث تقدم الالاف من الشركات طرق دفع غير نقدية جديدة والبعض من هذه الشركات ترفض المدفوعات النقدية بسبب الاحتياطات الصحية الحالية</p>', 'Steps to start an e-commerce business', '<p>When starting your own e-commerce business, there are many aspects that you need to take into consideration, but the most important question that any e-commerce project will need to answer is what you will sell.</p>\r\n\r\n<p>The growing success of e-commerce sites around the world has made the entrepreneurial landscape more realistic than ever. Whether you are looking to increase your monthly income, want to start a full-time business or just exchange your products with the world, setting up an e-commerce site is the perfect platform to make your dreams come true.</p>\r\n\r\n<p>We want to see you turn your business ideas into a business reality, especially since e-commerce in the Middle East is expected to grow to $13.4 billion by 2020, and we don&#39;t want you to miss that. That&#39;s why we provide a brief overview of everything you need to take your e-commerce business from the whiteboard to the web</p>\r\n\r\n<p>Product selection<br />\r\nWhen starting your own e-commerce there are many aspects that you need to take into consideration, but the most important question that will need to be answered for any e-commerce project is what you will sell.</p>\r\n\r\n<p>The e-commerce market is competitive so you need to look at the areas where you have an edge. This could mean selling the product you designed, selling to a specific community in niche markets, or catching new trends early on. Ensuring you have a viable and growing product from the start helps lay a strong foundation for your e-commerce business</p>\r\n\r\n<p>Develop an action plan<br />\r\nDeveloping a clear business plan is crucial to creating a successful business, and just because your e-commerce is done online makes it no exception. You need a business plan that includes a strategy for financing, marketing, and advertising for the business</p>\r\n\r\n<p>You need to have a clear idea of how you will achieve success and what you need to achieve along the way. The most important outcome of this phase is creating a long-term plan for what you want your business to be</p>\r\n\r\n<p>Create your own e-commerce site<br />\r\nIf you have a technical background to build your site from scratch this is always an option, but odds are that you will want to take advantage of the resources already available to create an online store. With sites like Shopify you can buy your own domain name and use the tools available on these sites to build a custom website from the ground up.</p>\r\n\r\n<p>Once you have finished with the technical parts of the website, you will need to think about the overall design of your website. You&#39;ll need to set up a website outline, headlines, and organize your products into categories that are easy to search and navigate. You will also need to complete the About the Store section and decide whether to use a company blog</p>', 'images/1689248619_charles-deluvio-Lks7vei-eAg-unsplash1.png', 1, '2023-07-13 08:40:57', '2023-07-13 08:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `facility_name` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('new','under review','underway','unacceptable','canceled','complete') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `job_title`, `city`, `facility_name`, `message`, `service_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hayitham', 'hayithamjal@gmail.com', '0594557598', 'test', 'test', 'test', 'test', 2, 'new', '2023-07-13 08:12:55', '2023-07-13 08:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `arname` varchar(255) NOT NULL,
  `enname` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `ardes` text DEFAULT NULL,
  `endes` text DEFAULT NULL,
  `link` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `arname`, `enname`, `logo`, `ardes`, `endes`, `link`, `created_at`, `updated_at`) VALUES
(1, 'منديزفلايفر', 'Mendisplayer', 'images/1689248295_asset-4.png', '<p>مطعم متخصص بالأكلات الهندية والصينية بنكهاتها الأصلية وطعمها العريق ويهدف منديز فلايفر إلى أن تكون جميع منتجاته ذات جودة عالية و طعم شهي يأخذك من مكانك الى الموطن الأصلي للمنتج</p>', '<p>A restaurant specializing in Indian and Chinese food with its original flavors and ancient taste. Mendez Flavor aims for all its products to be of high quality and a delicious taste that takes you from your place to the original home of the product.</p>', 'http://localhost:8000/', '2023-07-13 08:38:15', '2023-07-13 08:38:15'),
(2, 'منديزفلايفر', 'Mendisplayer', 'images/1689248295_asset-4.png', '<p>مطعم متخصص بالأكلات الهندية والصينية بنكهاتها الأصلية وطعمها العريق ويهدف منديز فلايفر إلى أن تكون جميع منتجاته ذات جودة عالية و طعم شهي يأخذك من مكانك الى الموطن الأصلي للمنتج</p>', '<p>A restaurant specializing in Indian and Chinese food with its original flavors and ancient taste. Mendez Flavor aims for all its products to be of high quality and a delicious taste that takes you from your place to the original home of the product.</p>', 'http://localhost:8000/', '2023-07-13 08:38:15', '2023-07-13 08:38:15'),
(3, 'منديزفلايفر', 'Mendisplayer', 'images/1689248295_asset-4.png', '<p>مطعم متخصص بالأكلات الهندية والصينية بنكهاتها الأصلية وطعمها العريق ويهدف منديز فلايفر إلى أن تكون جميع منتجاته ذات جودة عالية و طعم شهي يأخذك من مكانك الى الموطن الأصلي للمنتج</p>', '<p>A restaurant specializing in Indian and Chinese food with its original flavors and ancient taste. Mendez Flavor aims for all its products to be of high quality and a delicious taste that takes you from your place to the original home of the product.</p>', 'http://localhost:8000/', '2023-07-13 08:38:15', '2023-07-13 08:38:15'),
(4, 'منديزفلايفر', 'Mendisplayer', 'images/1689248295_asset-4.png', '<p>مطعم متخصص بالأكلات الهندية والصينية بنكهاتها الأصلية وطعمها العريق ويهدف منديز فلايفر إلى أن تكون جميع منتجاته ذات جودة عالية و طعم شهي يأخذك من مكانك الى الموطن الأصلي للمنتج</p>', '<p>A restaurant specializing in Indian and Chinese food with its original flavors and ancient taste. Mendez Flavor aims for all its products to be of high quality and a delicious taste that takes you from your place to the original home of the product.</p>', 'http://localhost:8000/', '2023-07-13 08:38:15', '2023-07-13 08:38:15'),
(5, 'منديزفلايفر', 'Mendisplayer', 'images/1689248295_asset-4.png', '<p>مطعم متخصص بالأكلات الهندية والصينية بنكهاتها الأصلية وطعمها العريق ويهدف منديز فلايفر إلى أن تكون جميع منتجاته ذات جودة عالية و طعم شهي يأخذك من مكانك الى الموطن الأصلي للمنتج</p>', '<p>A restaurant specializing in Indian and Chinese food with its original flavors and ancient taste. Mendez Flavor aims for all its products to be of high quality and a delicious taste that takes you from your place to the original home of the product.</p>', 'http://localhost:8000/', '2023-07-13 08:38:15', '2023-07-13 08:38:15');

-- --------------------------------------------------------

--
-- Table structure for table `partner_images`
--

CREATE TABLE `partner_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_images`
--

INSERT INTO `partner_images` (`id`, `partner_id`, `path`) VALUES
(1, 1, 'partnerImages/jpDYfWl0tL8mGKPyooabkfg65Ibh4Vpp9Mii9YkO.png'),
(2, 1, 'partnerImages/SvBA8tdKXoKcjr0DEpShRQmjosnC7JScbUFvj4RX.png'),
(3, 1, 'partnerImages/ndJskX6Sc6TSTNCGYx438IobCMeic4kcdRQV9wyG.png'),
(4, 1, 'partnerImages/9xawG09jKraEmB0M3ck6d293vWLZkLD3HOdHGMn5.png'),
(5, 1, 'partnerImages/oT3Nd1CRkx7SNV0ulswSsZVvA6ErfqM2duhKWNi4.png');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`roles`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'كاتب', '[\"news\",\"news.viewAny\",\"news.create\",\"news.update\",\"news.delete\"]', '2023-07-13 08:53:12', '2023-07-13 08:53:12'),
(2, 'مشرف', '[\"news\",\"news.viewAny\",\"news.create\",\"news.update\",\"news.delete\",\"partners\",\"partners.viewAny\",\"partners.create\",\"partners.update\",\"partners.delete\",\"services\",\"services.viewAny\",\"services.create\",\"services.update\",\"services.delete\",\"website_content\",\"aboutus.viewAny\",\"orders\",\"orders.viewAny\",\"mail\",\"mails.viewAny\",\"message.viewAny\"]', '2023-07-13 08:53:36', '2023-07-13 08:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artitle` varchar(255) NOT NULL,
  `entitle` varchar(255) NOT NULL,
  `ardes` text NOT NULL,
  `endes` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `artitle` varchar(255) NOT NULL,
  `entitle` varchar(255) NOT NULL,
  `ardes` text NOT NULL,
  `endes` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `artitle`, `entitle`, `ardes`, `endes`, `image`, `created_at`, `updated_at`) VALUES
(1, 'تحسين الجودة وتطوير الأداء', 'Quality improvement and performance development', '<p>هذه المنصة من شركة طيف تساعدك على التحكم في التسويق الالكترونى تنفيذ و تطوير مشروعك و مستقبلك باتقان وبدقة</p>', '<p>This platform from Taif Company helps you control e-marketing, implement and develop your project and future with perfection and accuracy</p>', 'images/1689246121_Group 354.png', '2023-07-13 08:02:01', '2023-07-13 08:02:01'),
(2, 'القائمة الالكترونية من طيف', 'Quality improvement and performance development', '<p>هذه المنصة من شركة طيف تساعدك على التحكم في التسويق الالكترونى تنفيذ و تطوير مشروعك و مستقبلك باتقان وبدقة</p></p>', '<p>This platform from Taif Company helps you control e-marketing, implement and develop your project and future with perfection and accuracy</p>', 'images/1689246121_Group 354.png', '2023-07-13 08:02:01', '2023-07-13 08:05:03'),
(3, 'التسويق الالكترونى من طيف', 'Quality improvement and performance development', '<p>هذه المنصة من شركة طيف تساعدك على التحكم في التسويق الالكترونى تنفيذ و تطوير مشروعك و مستقبلك باتقان وبدقة</p>\n', '<p>This platform from Taif Company helps you control e-marketing, implement and develop your project and future with perfection and accuracy</p>', 'images/1689246121_Group 354.png', '2023-07-13 08:02:01', '2023-07-13 08:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(500) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'slider 1', 'images/1689245921_businessman-pointing-graphs-symbols.png', 'http://localhost:8000/', '2023-07-13 07:58:41', '2023-07-13 07:58:41'),
(2, 'slider 2', 'images/1689245940_businessman-pointing-graphs-symbols.png', 'http://localhost:8000/', '2023-07-13 07:59:00', '2023-07-13 07:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `sms_data`
--

CREATE TABLE `sms_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_sender` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_data`
--

INSERT INTO `sms_data` (`id`, `username`, `user_sender`, `api_key`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', 'test', 'images/1689254566_marguerite-729510_1280.jpg', '2023-07-13 10:22:46', '2023-07-13 10:22:46');

-- --------------------------------------------------------

--
-- Table structure for table `tif_descriptions`
--

CREATE TABLE `tif_descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `number` double NOT NULL,
  `artitle` varchar(255) NOT NULL,
  `entitle` varchar(255) NOT NULL,
  `arbody` text NOT NULL,
  `enbody` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tif_descriptions`
--

INSERT INTO `tif_descriptions` (`id`, `image`, `number`, `artitle`, `entitle`, `arbody`, `enbody`, `created_at`, `updated_at`) VALUES
(1, 'images/1689245445_1.png', 1, 'المسؤولية الاجتماعية', 'Social Responsibility', 'بقاء أي شركة واستمرارها يحتم عليها أن تلتزم وتستوفي مسؤوليتها الاجتماعية عند أدائها لوظائفها المختلفة', 'The survival and continuity of any company necessitates that it adhere to and fulfill its social responsibility when performing its various functions', '2023-07-13 07:50:45', '2023-07-13 07:50:45'),
(2, 'images/1689245445_2.png', 2, 'استقطاب المواهب', 'Attracting talent', 'تحرص الشركة على استقطاب المواهب وتدريبها وتطويرها لإتاحة فرص وظيفية أكثر لمن لا يملكون خبرات عملية سابقة', 'The company is keen to attract, train and develop talents to provide more job opportunities for those who do not have previous practical experience', '2023-07-13 07:50:45', '2023-07-13 07:50:45'),
(3, 'images/1689245445_3.png', 3, 'الحوكمة', 'governance', 'تحرص الشركة على ممارسات العمل الأخلاقية في معاملة موظفيها بطريقة عادلة وأخلاقية وتوفير بيئة عمل آمنة وصحية', 'The company is keen on ethical work practices in treating its employees in a fair and ethical manner and providing a safe and healthy work environment', '2023-07-13 07:50:45', '2023-07-13 07:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` enum('admin','user') NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`roles`)),
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `type`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hayitham', 'hethmjal5@gmail.com', NULL, '$2y$10$Cw/I.1IqO4HW0F0OeNPl8uvXRCcMD5jApPL8CKf5B5ojQ01qTbBf2', '0594557598', 'admin', '[\"news\"]', NULL, '2023-07-13 10:45:22', '2023-07-13 10:45:22'),
(2, 'test', 'hethmjal6@gmail.com', NULL, '$2y$10$FkVMFhAKnpy2oqaSr9FdxOx1JeXsShkFCof6O24QmJLIGbFLlWpnO', '12321321', 'user', '[\"news\",\"news.viewAny\",\"news.create\",\"news.update\",\"news.delete\",\"website_content\",\"aboutus.viewAny\",\"mail\",\"mails.viewAny\",\"message.viewAny\"]', NULL, '2023-07-13 08:58:57', '2023-07-13 10:14:55'),
(4, 'Hayitham Business', 'hethmjal7@gmail.com', NULL, '$2y$10$wjKv1MIjxh/8O.Svg.sSZO6El6gkcPqJ3O2v7Seh/hAqsEUxD8hzm', '0594557598', 'user', '[\"news\",\"news.viewAny\",\"news.create\",\"news.update\",\"news.delete\",\"partners\",\"partners.viewAny\",\"partners.create\",\"partners.update\",\"partners.delete\",\"services\",\"services.viewAny\",\"services.create\",\"services.update\",\"services.delete\",\"marketing\",\"marketing.viewAny\",\"marketing.delete\"]', NULL, '2023-07-13 10:02:13', '2023-07-13 10:10:41'),
(5, 'test 2', 'hethmjal62@gmail.com', NULL, '$2y$10$jhj3.KUjy.r8xJOLHma4PulSPUBicCJ74UsGJeB8ILDcPgWjPWYcu', '12321321', 'user', NULL, NULL, '2023-07-13 10:15:25', '2023-07-13 10:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `user_id`, `role_id`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 1, '2023-07-13 10:02:13', '2023-07-13 10:02:13'),
(2, 2, NULL, 2, '2023-07-13 10:14:41', '2023-07-13 10:14:41'),
(3, 5, NULL, 1, '2023-07-13 10:15:25', '2023-07-13 10:15:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `briefs`
--
ALTER TABLE `briefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `image_contents`
--
ALTER TABLE `image_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mailing_lists`
--
ALTER TABLE `mailing_lists`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mailing_lists_email_unique` (`email`);

--
-- Indexes for table `marketings`
--
ALTER TABLE `marketings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_service_id_foreign` (`service_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_images`
--
ALTER TABLE `partner_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `partner_images_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_data`
--
ALTER TABLE `sms_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tif_descriptions`
--
ALTER TABLE `tif_descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `briefs`
--
ALTER TABLE `briefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image_contents`
--
ALTER TABLE `image_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mailing_lists`
--
ALTER TABLE `mailing_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marketings`
--
ALTER TABLE `marketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `partner_images`
--
ALTER TABLE `partner_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_data`
--
ALTER TABLE `sms_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tif_descriptions`
--
ALTER TABLE `tif_descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);

--
-- Constraints for table `partner_images`
--
ALTER TABLE `partner_images`
  ADD CONSTRAINT `partner_images_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `partners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
