-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 01:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r.s.i_company`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `img`, `link`, `created_at`, `updated_at`) VALUES
(1, '1538636869.jpg', 'http://www.spc.com.sy/', '2018-10-04 04:07:50', '2018-10-04 04:07:50'),
(2, '1538636950.jpg', 'www.gpc.com.sy/', '2018-10-04 04:09:10', '2018-10-04 04:09:10'),
(3, '1538636993.jpg', 'hga.com', '2018-10-04 04:09:53', '2018-10-04 04:09:53'),
(4, '1538637094.jpg', 'https://www.novatechnologies.com/', '2018-10-04 04:11:34', '2018-10-04 04:11:34'),
(5, '1538637139.jpg', 'abu_zineh.com', '2018-10-04 04:12:19', '2018-10-04 04:12:19'),
(6, '1538637164.jpg', 'russiancompany.com', '2018-10-04 04:12:44', '2018-10-04 04:12:44'),
(7, '1538637189.jpg', 'https://www.uaz.ru/en/cars', '2018-10-04 04:13:09', '2018-10-04 04:13:09'),
(8, '1538637206.jpg', 'moava.com', '2018-10-04 04:13:26', '2018-10-04 04:13:26'),
(9, '1538637246.jpg', 'www.gradient-geo.com/en/a_events.php\r\nS', '2018-10-04 04:14:06', '2018-10-04 04:14:06'),
(10, '1538637257.jpg', 'nh.com', '2018-10-04 04:14:17', '2018-10-04 04:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title_ar`, `title_en`, `title_ru`, `token`, `description_en`, `description_ar`, `description_ru`, `created_at`, `updated_at`) VALUES
(2, 'التصميم الداخلي1221', 'Interior designasdadasdasd', 'Interior designdads', '$2y$10$7sVk49phaeVGoNIilnrO.O7jfBq6PT5LhQ859P.L.UKuf0zQVgcUO', 'sddsads', 'asdaddsdsad', 'dadsdasdasd', '2018-09-12 05:59:53', '2018-09-16 03:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `cat_id`, `image`, `created_at`, `updated_at`) VALUES
(9, 1, '1538900402.Zedge-Wallpapers-For-Desktop-014.jpg', '2018-10-07 05:20:02', '2018-10-07 05:20:02'),
(10, 1, '1538900402.6979549-zedge-wallpapers-for-pc-free.jpg', '2018-10-07 05:20:02', '2018-10-07 05:20:02'),
(11, 1, '1538900402.6979509-zedge-wallpapers-for-pc-free.jpg', '2018-10-07 05:20:03', '2018-10-07 05:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `title_ar`, `title_en`, `title_ru`, `slag`, `created_at`, `updated_at`) VALUES
(1, 'روميكس 2017', 'romix 2017', 'romix 2017', 'romix', '2018-10-04 10:30:50', '2018-10-04 10:30:50'),
(2, 'سيرفكس 2016', 'serfix 2016', 'serfix 2016', 'serfix', '2018-10-04 10:31:29', '2018-10-04 10:31:29'),
(4, 'مؤتمر رجال الاعمال 2018', 'Business Conference 2018', 'Конференция бизнесменов 2018', 'Business Conference', '2018-10-04 10:32:34', '2018-10-04 10:32:34');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2018_09_12_080111_create_articles_table', 2),
(18, '2018_09_12_122929_create_services_table', 3),
(19, '2018_09_12_130904_create_service_images_table', 3),
(20, '2018_09_16_085047_create_activities_table', 4),
(21, '2018_09_16_085303_create_activity_images_table', 4),
(28, '2018_09_10_092825_create_sliders_table', 5),
(29, '2018_09_24_113025_create_slider_images_table', 5),
(34, '2018_10_03_120012_create_gallery_categories_table', 6),
(35, '2018_10_03_121344_create_agents_table', 6),
(37, '2018_10_04_075151_create_pages_table', 7),
(38, '2018_10_04_075007_create_options_table', 8),
(42, '2018_10_03_115933_create_galleries_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `option_name`, `option_value`, `created_at`, `updated_at`) VALUES
(2, 'facebook', 'https://www.facebook.com/', '2018-10-04 09:27:36', '2018-10-04 09:33:23'),
(3, 'mail', 'mail.mail@mail.com', '2018-10-04 09:28:53', '2018-10-04 09:28:53'),
(4, 'phone', '+9639332222', '2018-10-04 09:29:18', '2018-10-04 09:29:18'),
(5, 'twitter', 'https://twitter.com/', '2018-10-04 09:31:44', '2018-10-04 09:31:44'),
(6, 'Telegram', 'https://tlgrm.eu/channels/@telegram', '2018-10-04 09:34:14', '2018-10-04 09:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slag` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slag`, `title_ar`, `title_en`, `title_ru`, `description_ar`, `description_en`, `description_ru`, `image`, `created_at`, `updated_at`) VALUES
(2, 'hamza', 'adsadasdasdasd/asdasd', 'التصميم الداخلي1221', 'Interior designdads', 'дизайн интерьера', '<p>Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;<br></p>', '<p>Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;<br></p>', '<p>Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;Interior designdads&nbsp;<br></p>', '1538900544.jpg', '2018-10-07 05:22:24', '2018-10-07 05:22:24'),
(3, 'founder', '/founder', 'كلمة المدير العام', 'General Director Speech', 'Речь Генерального директора', '<p>إن المرافق التي تبنى على خطط واستراتيجيات دقيقة وطموحة مدركة ألهدافها وغاياتها تكون بالطبع قادرة على تخطي\r\nالعثرات بخطى متسارعة.\r\nوهكذا يكون الحال عندما نتحدث عن الشركة الروسية السورية لالستثمار و التجارة التي استطاعت خالل فترة قصيرة أن تقف\r\nعلى أقدامها صلبة العود قوية اإلرادة والعزم، متجهة إلى ترجمة الرؤى والتوجُهات لعملية اعادة اعمار سورية وتحقيق التنمية\r\nالمنشودة للوطن .\r\nلذلك فإن الشركة ترى مكانتها المستقبلية فيما تستطيع أن تقدمه في مجال االستثمار خصوصا في قطاع النفط و الغاز.\r\nوبعد تلك الخطوات التي خطتها الشركة، أذكر بالمقولة التي تقول: “ إن مسافة األلف ميل تبدأ بخطوة واحدة “ وتلك الخطوة\r\nنعتقد أننا نخطوها اآلن بثقة واقتدار .\r\nمعززين بسالح العلم والمعرفة والذي يتمتع به كادر الشركة حيث تحرص الشركة دائما علي تأهيله في جميع المجاالت الفنية\r\nواإلدارية والمعلوماتية و كذلك من خالل التحالفات القوية التي قامت شركتنا ببناءها مع الشركات العالمية وخاصة الروسية\r\nمنها .\r\n</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\" كثيرون يصتعون أنفسهم بالتميز لكن قليلون هم الذين يثبتون ذلك \"</p><p><br></p>', '<p>Facilities built on precise and ambitious plans and strategies that are aware of their goals and objectives are of course able to overcome hurdles at an accelerated pace.</p><p>This is the case when we talk about the Syrian Russian company for investment and trade, which in a short time could stand on its feet solid Oud strong will and determination, aimed at translating visions and directions to the process of reconstruction of Syria and achieve the desired development of the homeland.</p><p>Therefore, the company sees its future position in what it can offer in the field of investment, especially in the oil and gas sector.</p><p>Therefore, the company sees its future position in what it can offer in the field of investment, especially in the oil and gas sector.</p><p>Following these steps, I recall the saying: \"The distance of a thousand miles begins with one step\" and that step we believe we are now making with confidence and power.</p><p>The company is always keen to rehabilitate it in all technical, administrative and informational fields, as well as through strong alliances that our company has built with international companies, especially Russian ones.&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\"Many are enjoying themselves with distinction, but few are the ones who prove it.\"</p>', '<p>Средства, построенные на точных и амбициозных планах и стратегиях, которые знают о\r\nсвоих целях и задачах, конечно же, способны преодолевать препятствия ускоренными\r\nтемпами.\r\nЭто тот случай, когда мы говорим о сирийской российской компании по инвестициям и\r\nторговле, которая за короткое время могла бы встать на ноги солидно и решительно\r\nрешила Оуд, направленную на перевод видений и направлений на процесс восстановления\r\nСирии и достижение желаемого развития Родины.\r\nПоэтому компания видит свою будущую позицию в том, что она может предложить в\r\nобласти инвестиций, особенно в нефтегазовом секторе\r\nSredstva, postroyennyye na tochnykh i ambitsioznykh planakh i strategiyakh, kotoryye znayut o\r\nsvoikh tselyakh i zadachakh, konechno zhe, sposobny preodolevat\' prepyatstviya uskorennymi\r\ntempami.\r\nEto tot sluchay, kogda my govorim o siriyskoy rossiyskoy kompanii po investitsiyam i torgovle,\r\nkotoraya za korotkoye vremya mogla by vstat\' na nogi solidno i reshitel\'no reshila Oud,\r\nnapravlennuyu na perevod videniy i napravleniy na protsess vosstanovleniya Sirii i dostizheniye\r\nzhelayemogo razvitiya Rodiny.\r\nPoetomu kompaniya vidit svoyu budushchuyu pozitsiyu v tom, chto ona mozhet predlozhit\' v\r\noblasti investitsiy, osobenno v neftegazovom sektore\r\nСледуя этим шагам, я вспоминаю высказывание: «Расстояние в тысячу миль начинается с\r\nодного шага», и этот шаг, на наш взгляд, мы теперь делаем с уверенностью и силой.\r\nКомпания всегда стремится реабилитировать ее во всех областях технического,\r\nадминистративного и информационного характера, а также благодаря сильным союзам,\r\nкоторые наша компания построила с международными компаниями, особенно с\r\nроссийскими.\r\nSleduya etim shagam, ya vspominayu vyskazyvaniye: «Rasstoyaniye v\r\n</p><p><br></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Многие наслаждаются различием, но мало кто это доказывает).&nbsp;</p>', '1538909086.jpg', '2018-10-07 06:56:32', '2018-10-07 07:44:46'),
(4, 'WhoWeAre', '/WhoWeAre', 'شركتنا', 'Our Company', 'Наша компания', '<p>نحن الشركة السورية الروسية للاستثمار والتجارة. انطلاقاً من الدور الريادي للاتحاد الروسي ، نقوم بشراء فرص مجدية وتضامن في مشاريع المجالات المختلفة عموماً في الشرق الأوسط وتحديداً في سوريا وفقاً للمعايير والمواصفات الدولية. .</p><p>نحن نؤمن بأن التعاون بين الشركات والدول سيؤدي إلى فوائد اقتصادية وتطويرية للمواطنين بالإضافة إلى تطوير الصناعات والبنية التحتية والخدمات المقدمة للناس. .</p><p>انطلاقاً من التزامنا بأن نكون مميزين إلى الأبد ، أدركنا أهمية وضع علامة على القيم التي نؤمن بها ونعالج مصداقيتها وشفافيتها ، وننشئ مشاريع على مستوى الشرق الأوسط ، وخاصة سوريا التي تعد الآن لعملية إعادة البناء مع النظر في معدل المخاطر من رأس المال .</p><p>لذلك ، نحن نختلف أنشطتنا لتقديم أفضل الخدمات لعملائنا ونوظف أفضل جهودنا وعلاقاتنا لتكون شركاء عملائنا في النجاح .</p><div><br></div>', '<p>We are the Russian Syrian Co. for Investment and Trade. Based on the leading role of Russian Federation, we procure investing feasible chances and solidarity in projects of different domains generally in the Middle East and specifically in Syria according to International Standards and specifications.</p><p>We believe that cooperation between companies and countries shall result in economic and developing benefit for the citizens in addition to development of industries &amp; infrastructure and services provided to the people.</p><p>Based on our commitment to be distinctive forever we realized the importance of putting sign for the values which we believe and deal with credibility and transparency , create projects on the level of the middle east , specially Syria which is now preparing for the process of reconstruction with considering rate of risk by capital .</p><p>Therefore, we vary our activities to provide best services to our clients and employ our best efforts and relations to be our clients partners in success.</p>', '<p>Мы - российская сирийская компания для инвестиций и торговли. Основываясь на ведущей роли Российской Федерации, мы закупаем возможные возможности и солидарность в проектах различных областей, как правило, на Ближнем Востоке и в частности в Сирии в соответствии с международными стандартами и спецификациями.</p><p>Мы считаем, что сотрудничество между компаниями и странами приведет к экономическим и развивающимся выгодам для граждан в дополнение к развитию отраслей, инфраструктуры и услуг, предоставляемых людям.</p><p>Основываясь на нашей приверженности быть отличительной навсегда, мы осознали важность того, чтобы поставить знак ценностей, которые мы верим, и справиться с доверием и прозрачностью, создать проекты на уровне среднего востока, особенно Сирии, которая сейчас готовится к процессу реконструкции с учитывая ставку риска по капиталу .</p><p>Поэтому мы меняем нашу деятельность, чтобы предоставлять лучшие услуги нашим клиентам и прилагаем все усилия и отношения, чтобы быть нашими партнерами-партнерами в успехе.</p>', NULL, '2018-10-07 08:38:46', '2018-10-07 08:38:46');

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_ar`, `title_en`, `title_ru`, `description_ar`, `description_en`, `description_ru`, `token`, `img`, `created_at`, `updated_at`) VALUES
(4, 'التعاون الثقافي', 'Cultural Cooperation', 'Культурное сотрудничество', 'التعاون الثقافي هذا النص هو مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، لوريم إيبسوم هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت.\r\n', 'Cultural Cooperation this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web.', '\r\nКультурное сотрудничествоэтот текст - статья для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст это статья для теста На веб-странице, Lorem Ipsum, этот текст - статья для теста. На веб-сайте Lorem Ipsum этот текст является статьей для теста на веб-сайте.', '$2y$10$0Yjv2XeZt2WYpjPNAj1rjOmcZU.901FAwF6WjvCGtqMeI2MsJRFzC', '1537099150.jpg', '2018-09-16 08:59:10', '2018-09-16 08:59:10'),
(5, 'الاستثمارات الصناعية', 'Industrial Investments', 'Промышленные инвестиции', 'Lorem Ipsum هذا النص هو مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، لوريم إيبسوم هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت.\r\n', 'Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web.', '\r\nLorem Ipsum этот текст - статья для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст это статья для теста На веб-странице, Lorem Ipsum, этот текст - статья для теста. На веб-сайте Lorem Ipsum этот текст является статьей для теста на веб-сайте.', '$2y$10$42VD0NBkqZXFcuv32LUAOpohV0tw2pAr.Wx4Bt3g8qThsf2vczS', '1537099195.jpg', '2018-09-16 08:59:55', '2018-09-16 08:59:55'),
(6, 'استيراد وتصدير', 'Import and Export', 'Импорт и экспорт', 'Lorem Ipsum هذا النص هو مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، لوريم إيبسوم هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت.\r\n', 'Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web.', '\r\nLorem Ipsum этот текст - статья для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст это статья для теста На веб-странице, Lorem Ipsum, этот текст - статья для теста. На веб-сайте Lorem Ipsum этот текст является статьей для теста на веб-сайте.', '$2y$10$36ERmJDZNe4WaOj2Pd4gMuetC66.lU5v8jU9cgjsRQJsDV4nJ6mq', '1537099247.jpg', '2018-09-16 09:00:47', '2018-09-16 09:00:47'),
(7, 'استيراد الاستثمار السياحي والتصدير', 'Tourist Investment Import and Export', 'Импорт и экспорт туристических инвестиций', 'Lorem Ipsum هذا النص هو مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص مقال للاختبار على الويب ، Lorem Ipsum هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، لوريم إيبسوم هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت ، أبجد هوز هذا النص هو مقال للاختبار على شبكة الإنترنت.\r\n', 'Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web,Lorem Ipsum this text is an article for test On web.', '\r\nLorem Ipsum этот текст - статья для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст является статьей для теста На веб-сайте Lorem Ipsum этот текст является статьей для теста На веб-странице Lorem Ipsum этот текст это статья для теста На веб-странице, Lorem Ipsum, этот текст - статья для теста. На веб-сайте Lorem Ipsum этот текст является статьей для теста на веб-сайте.', '$2y$10$FLpkojWwifR8cTCx5PZruywl7Foomz0cuZYu.7.cXcCURasuY.6', '1537099290.jpg', '2018-09-16 09:01:30', '2018-09-16 09:01:30'),
(15, 'التصميم الداخلي1212', 'Interior designdads', 'дизайн интерьера', 'asdasd', 'asdsad', 'adasdas', '$2y$10$F5umlwZNQPAGkfwNCYoaNOblR8FxfOWvmamQAzhIpXZZ67u6TjMe', '1538899879.jpg', '2018-10-07 05:11:19', '2018-10-07 05:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE `service_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, '1538660459.jpg', '2018-09-17 08:16:00', '2018-10-04 10:40:59'),
(2, 4, '1538660477.jpg', '2018-09-17 08:49:13', '2018-10-04 10:41:17'),
(3, 4, '1538660493.jpg', '2018-09-17 08:49:30', '2018-10-04 10:41:33'),
(4, 7, '1538660530.jpg', '2018-09-17 08:50:07', '2018-10-04 10:42:10'),
(5, 4, '1538660543.jpg', '2018-09-17 08:16:00', '2018-10-04 10:42:23'),
(6, 5, '1538660559.jpg', '2018-09-17 08:49:13', '2018-10-04 10:42:39'),
(7, 6, '1538660577.jpg', '2018-09-17 08:49:30', '2018-10-04 10:42:57'),
(8, 7, '1538660594.jpg', '2018-09-17 08:50:07', '2018-10-04 10:43:14'),
(9, 4, '1538660605.jpg', '2018-09-17 08:16:00', '2018-10-04 10:43:25'),
(10, 5, '1538660621.jpg', '2018-09-17 08:49:13', '2018-10-04 10:43:41'),
(11, 6, '1538660643.jpg', '2018-09-17 08:49:30', '2018-10-04 10:44:03'),
(12, 7, '1538660665.jpg', '2018-09-17 08:50:07', '2018-10-04 10:44:25'),
(13, 4, '1538660683.jpg', '2018-09-17 08:16:00', '2018-10-04 10:44:43'),
(14, 5, '1538660701.jpg', '2018-09-17 08:49:13', '2018-10-04 10:45:01'),
(15, 6, '1538660714.jpg', '2018-09-17 08:49:30', '2018-10-04 10:45:14'),
(16, 7, '1538660725.jpg', '2018-09-17 08:50:07', '2018-10-04 10:45:25');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Main Slider', '2018-09-23 21:00:00', '2018-10-04 04:35:28'),
(3, 'Our Vision Slider', '2018-09-24 09:20:08', '2018-10-04 04:35:58');

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `mobile_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `desktop_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title_ar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title_en` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_title_ru` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ar` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title_ru` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `mobile_img`, `desktop_img`, `main_title_ar`, `main_title_en`, `main_title_ru`, `sub_title_ar`, `sub_title_en`, `sub_title_ru`, `slider_id`, `created_at`, `updated_at`) VALUES
(1, 'mobile1537165789.jpg', '1537165789.jpg', 'ابجد هوز', 'Lorem Ipsum', 'содержимое слайдера', 'ابجد هوز', 'Lorem Ipsum', 'содержимое слайдера', 1, '2018-09-12 01:45:24', '2018-09-18 00:34:12'),
(2, 'mobile1537165802.jpg', '1537165802.jpg', 'أبجد هوز', 'Lorem Ipsum', 'содержимое слайдера', 'أبجد هوز', 'Lorem Ipsum', 'содержимое слайдера', 1, '2018-09-12 03:51:17', '2018-09-18 00:34:33'),
(3, 'mobile1537165830.jpg', '1537165830.jpg', 'أبجد هوز', 'Lorem Ipsum', 'содержимое слайдера', 'أبجد هوز', 'Lorem Ipsum', 'содержимое слайдера', 1, '2018-09-17 00:30:30', '2018-09-18 00:35:00'),
(5, 'mobile1537793557.jpg', '1537793557.jpg', 'رؤيتنا', 'Our Vision', 'Наше видение', 'لتحقيق الأهداف المستهدفة للشركاء المؤسسين من خلال الاعتقاد القوي\r\nفي العلاقات القديمة العميقة بين الاتحاد الروسي والعرب السوري\r\nالجمهورية في جميع المجالات خاصة المجال الاقتصادي وتوسيع الأرض من\r\nالعملاء والمشاريع الاستثمارية على مستوى الشرق الأوسط خاصة\r\nسوريا والتعامل مع العملاء بشفافية ومصداقية.', 'To achieve the targeted aims of the founding partners by strong believing\r\nin the deep old relations between Russian Federation and Syrian Arab\r\nRepublic in all fields specially economic field and to expand the ground of\r\nclients and investing projects on the level of the Middle East specially\r\nSyria and to deal with clients with transparency and credibility.', 'Для достижения целевых целей партнеров-основателей\r\nв глубоких старых отношениях между Российской Федерацией и сирийскими арабскими\r\nРеспублики во всех областях, особенно в экономической сфере, и расширить\r\nклиентов и инвестиционных проектов на уровне Ближнего Востока, особенно\r\nСирии, и иметь дело с клиентами с прозрачностью и доверием.', 3, '2018-09-24 09:52:37', '2018-09-24 09:52:37'),
(6, 'mobile1537793636.jpg', '1537793636.jpg', 'اهدافنا', 'Our Goals', 'Наша цель', 'للتطوير واستثمار المشاريع الاقتصادية ، ووضع الاتفاقيات الاستراتيجية\r\nمع أعظم الشركات الإقليمية والدولية التي تطبق أفضل\r\nالمعايير في أعمالهم ، وجعل شركتنا كدعم\r\nالاقتصاد الوطني السوري من خلال جذب الاستثمارات الأجنبية. وخلق\r\nالجو المناسب والفرصة للمستثمرين الروس.', 'To develop and invest economic projects, to establish strategic conventions\r\nwith greatest regional and international companies which apply best\r\nstandards in their business, and to make our company as the support of\r\nSyrian National Economy by attracting foreign investments. and creating\r\nsuitable atmosphere and chance for the Russian Investors.', 'Развивать и инвестировать экономические проекты, создавать стратегические конвенции\r\nс наибольшими региональными и международными компаниями, которые\r\nстандартов в их бизнесе и сделать нашу компанию в качестве поддержки\r\nСирийской национальной экономики путем привлечения иностранных инвестиций. и создание\r\nподходящая атмосфера и шанс для российских инвесторов.', 3, '2018-09-24 09:53:56', '2018-09-24 09:53:56'),
(7, 'mobile1537793703.jpg', '1537793703.jpg', 'اهدافنا', 'Our Aims', 'Наши цели', '<ul>\r\n<li>لبناء أساس عملاء في سوريا.</li>\r\n<li>التضامن في مشاريع مجدية.</li>\r\n<li>لخلق فرص الاستثمار من خلال المعايير الدولية.</li>\r\n<li>لإبرام العقود مع الحكومة عن طريق الاشتراك في المناقصات العامة.</li> \r\n<li>للحصول على وكالة الشركات الروسية والتمثيل في سوريا.</li>\r\n<li>لإدارة وتسويق المشاريع داخل وخارج سوريا.</li>\r\n</ul> \r\n</h4>', '<ul>\r\n<li>to build ground of clients in Syria.</li>\r\n<li>solidarity in feasible projects.</li>\r\n<li>to create investing chances by international standards.</li>\r\n<li>to conclude contracts with government by subscription in public tenders.</li> \r\n<li>to have Russian companies agency and representation in Syria.</li>\r\n<li>to manage and market projects inside and outside Syria.</li>\r\n</ul>', '<ul>\r\n  <li>создать основу для клиентов в Сирии.</li>\r\n<li>солидарность в осуществимых проектах.</li>\r\n<li>для создания инвестиционных возможностей по международным стандартам.</li>\r\n<li>заключать контракты с правительством путем подписки на публичные торги.</li> \r\n<li>иметь агентство и представительство российских компаний в Сирии.</li>\r\n<li>для управления и реализации проектов как внутри, так и за пределами Сирии.</li>\r\n</ul>', 3, '2018-09-24 09:55:03', '2018-09-24 09:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `token`, `email_verified_at`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$NGXQSsX.Mj7wWVqHgtYINuUFaRPjQ8QUM5H0B4ebgNqwV8p5ez7W', NULL, '$2y$10$lR5mUUh6RUyIwDBfbjbCZ.gx7jBGl.zl5Mo962TUFKTyfo4PV1l4K', 'admin', 'L6LVorXrmLQStb8UATeT93XYn2NnpUHrh4Z1Yz564uT8Bkl7unshj0jDApIG', '2018-09-12 04:41:45', '2018-09-12 04:41:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_images`
--
ALTER TABLE `service_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_images_service_id_foreign` (`service_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_images_slider_id_foreign` (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_token_unique` (`token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `service_images`
--
ALTER TABLE `service_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `service_images`
--
ALTER TABLE `service_images`
  ADD CONSTRAINT `service_images_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD CONSTRAINT `slider_images_slider_id_foreign` FOREIGN KEY (`slider_id`) REFERENCES `sliders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
