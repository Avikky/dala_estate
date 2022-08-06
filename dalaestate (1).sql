-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 07:26 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dalaestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_of_kin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_of_kin_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_of_kin_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clienttype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bvn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idtype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idnumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idscan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `lname`, `fname`, `mname`, `phone`, `email`, `dob`, `pob`, `address`, `next_of_kin`, `next_of_kin_phone`, `next_of_kin_address`, `gender`, `marital_status`, `clienttype`, `bvn`, `idtype`, `idnumber`, `idscan`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Blossom', 'Thomas', 'Jensen', '+1 (209) 658-1163', 'ryti@blognet.net', '1996-06-02', 'Sit consequatur', 'Ea ad repudiandae dolorem eius cillum hicdebitis rerum ut aperiam nulla eveniet enim in eaque est nemo vitae labore et non neque', 'Autem est', '+1 (591) 477-4188', 'Nisi rerum magnam autem explicabodebitis rerum ut aperiam nulla eveniet enim in eaque est nemo vitae labore et non neque', 'Male', 'Single', 'Individual', '7654699765', 'NON-REGISTERED CLUB', '587789', 'images/IeVHBmyoSqwl83QbdTtErdyxDiLb9iMtEjg5WLaS.png', 'images/QWKgK9B4omDI6M3dQRp9GdCYxoSLfXdYlQ0aI1xV.jpeg', NULL, NULL, '2019-05-09 09:02:01', '2019-05-09 09:02:01');

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`id`, `name`, `slug`, `post`, `description`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(14, 'CELESTINE O. OKOGBUE', 'celestine-o-okogbue', 'Chairman of The Board', '<p>Professor Celestine O. Okogbue is an Engineering/Environmental Geologist in the staff of the University of Nigeria, Nsukka. He joined the University of Nigeria as Lecturer in 1982, after working briefly with the Soils Department of the Indiana Highway Commission, Indianapolis, Indiana, USA. He rose through the ranks in the University: &ndash; Lecturer II 1982, Lecturer I 1984, Senior Lecturer 1986 and Professor 1990.</p>\r\n\r\n<p>He holds a Ph.D in Engineering Geology from Purdue University, West Lafayette, Indiana, USA and currently heads the Engineering/Environmental Geology group of the Department of Geology at the University of Nigeria. He has produced over 30 M. Sc. and Ph Ds in Engineering Geology some of who are already Readers and Professors.</p>\r\n\r\n<p>Professor Okogbue has represented Africa (1989 &ndash; 2000) on the International Association of Engineering Geology (IAEG) Commission on Landslides and also on the UNESCO International Union of Geological Sciences Working Group on Landslides. He was the Head of Department of Geology, University of Nigeria from 1993 to 1997, Associate Dean of the Faculty of Physical Sciences from 1993 to 1997, and Dean Faculty of Physical Sciences, from 1997 to 1999. Among his previous awards and honours are University of Nigeria Award for best graduating student in Geology (1975), the Elf/Nigerian Mining and Geosciences Society Prize for Best Technical Paper presentation (1989).and the NMGS/VERSA-TECH/PO NWASIKE award,( 2011) for an active member of the NMGS who has contributed immensely to promoting the career of young mining engineers and geoscientists and has also distinguished himself in the profession. Some of the professional associations to which he belongs are the International Association of Engineering Geology and Environment (IAEGE), Association of Environmental and Engineering Geologists (AEG), USA, Nigerian Mining and Geosciences Society (NMGS) where he is a Fellow, Nigerian Association of Engineering Geology and Environment (NAEGE), and Nigerian Association of Hydrogeologists (NAH). He was President of the Nigerian Association of Engineering Geology and Environment from 1988 to 2001.</p>\r\n\r\n<p>Professor Okogbue has published over 95 peer reviewed journal and referred conference proceedings articles and has also presented solicited papers on aspects of Engineering and Environmental Geology at various symposia and workshops including those on landslides (28th International Geological Congress, Washington D.C. USA), Natural Disasters/Gully erosion (Federal Ministry of Science and Technology, Lagos (1986), and Federal Ministry of Solid Minerals, Abuja (2006)). He regularly reviews technical papers for both national and international journals.</p>\r\n\r\n<p>Professor Okogbue is the first Professor of Engineering Geology in Nigeria, the first Professorial Chair Occupant of the Petroleum Technology Development Fund (PTDF) at the University of Nigeria, Nsukka, and a one time member of the Editorial Board of the Journal of Mining and Geology, He is married and blessed with four children.</p>', 'board/hXqviPeJqIiA2Cke8y4sZtvxc2KZNmrYXLGIGh8f.jpeg', NULL, NULL, '2020-10-12 09:39:27', '2021-01-17 21:05:05'),
(15, 'Dr P-J Eze', 'dr-p-j-eze', 'Director of Special Duties', '<p>The Director of Special Duties (DSD) ensures that the minutes of Board meetings as well as the agenda for regular meetings of the Board are produced by the General Services Officer/Secretary of the Bank as may be directed by the Chairman of the Board. He/she oversees the preparation of the Annual General Meeting Report and replies to official letters addressed to the Chairman of the Board as the Chairman may direct. The DSD also oversees the preparation of allowances of members of Board. He/she is in charge of certain functions with regard to employment. He/she signs the appointment papers of junior members of staff. In consultation with the Chairman of the General Purpose Committee, he/she advertises vacant positions in the Bank and shortlists and invites candidates for interview. Also in consultation with the General Purpose Committee, he/she processes applications for candidates looking for industrial attachments, internship or vacation jobs and forwards his/her recommendations to the Chairman of the Board for approval on behalf of the Board.</p>\r\n\r\n<p>P-J Ezeh</p>\r\n\r\n<p>Peter-Jazzy Ezeh&rsquo;s first assignment in the University of Nigeria Microfinance Bank was as a member of the General Purpose Committee. He afterwards worked in several other Committees before being appointed the Director of Special Duties in the Bank in 2013. Dr Ezeh has worked as a journalist in Nigeria and overseas before training as an anthropologist in University of Nigeria, Nsukka. After cutting his teeth on professional journalism in the remarkable provincial, Nigerian Mirror (Onitsha), he went on to join The Punch at the stage when that group was the only independent newspaper group in the country. In his book, The second beginning, he has been passionate about the need for newspapers to be independent if they are to merit their name. For him, the primary function of the press is to protect the weak from governmental or corporate abuse, and therefore it becomes anomalous for government, being too powerful already, to run a paper to aggrandize itself further against the populace. He left The Punch briefly in late 1983 to join the Enugu-based Satellite and left for France in 1985 as the only Nigerian participating in a 22-nation senior-journalist programme organized by the Fondation Journaistes en Europe to familiarize them with Europe in the run-up to the formation of what has now become the European Union. It is in that programme that he met and worked with some of the foremost names in current journalism who even after he later branched off to full-time academics still hold him in high esteem due to his performance then. Perhaps two events during the programme might suffice to underline two traits in Dr Ezeh&rsquo;s character; defiance to reasonable risks and opposition to injustice. When his colleagues on the programme where opting for more familiar projects, he chose, against all dissuasions, to go the Arctic Circle to investigate cod fishing in the frozen Lofoten Islands on the Norwegian Sea. He probably became the only Nigerian who ever did that, all because he said he wanted to engage first-hand the myth that Nigerians surrounded the subject of stockfish. &ldquo;The best way to deal with any doubtful claims, myth or any other type,&rdquo; he says down till today, &ldquo;is to investigate it objectively, empirically.&rdquo; When it was announced that the Frenchman, Claude Simon, had won the Nobel Prize in Literature in 1985, Ezeh became angry and wanted to find out why no African writer was ever been considered good enough for the prize although some of them, in his estimation, were far better than those from other continents who had won. With a shoe-string budget from his scholarship he decided to travel from his base in Paris to go and confront the officials of the Swedish Academy, givers of the prize, who during the engagement told him that no one of African origin ever came to Stockholm to raise the topic. Although they also said that representations could not be taken into account in giving the prize, nevertheless by what Dr Ezeh now prefers to describe as &ldquo;a happy coincidence&rdquo; the Nigerian, Wole Soyinka, won the prize the very next year after Ezeh&rsquo;s efforts. After the Paris projects he returned to rejoin The Punch and rose to become its News Editor. Ezeh has been correspondents to a string of international newspapers that will take much space outlining here. He has also been a Press Fellow at University of Cambridge (Wolfson College). In 1996 the Austrians recognized his efforts in double measure. The major newspaper in Graz, Kleine Zeitung, invited him as a guest editor, and the Foreign Ministry invited him as one of the three Nigerians to give talks in its first African-focused cultural festival, Sura za Afrika, (the Swahili for Images of Africa).</p>\r\n\r\n<p>For his PhD Ezeh became the first Nigerian to study a glotto-cultural group other than his through the participant-observation strategy. The research explored the interstices among linguistics, anthropology and mass communications adapting classic participant observation in a manner that made the authoritative Qualitative Research journal of London to publish the innovation in 2003 ever before he defended his thesis that was named Censorship in traditional Orring mass communication. For his pains he won the Faculty of Social Sciences Vice-Chancellor&rsquo;s Prize for Best PhD Thesis a year afterwards. He has gone on to develop and publish orthography for Korring in the primer that he called Lọgwa ẹ livoro ẹ Kọrịń. Varieties of this previously unwritten language is spoken indigenously in Ebonyi, Cross River and Benue. Dr Ezeh has been a lecturer in anthropology in his alma mater since 1999. In his publications he explores ways of making anthropology relevant to the needs of non-Western peoples in contemporary times. He has about 40 published non-journalistic intellectual works, including the path-finding translation into his native Igbo of Moli&egrave;re&rsquo;s Les femmes savantes as Filamint na ndiotu ya, and journal articles on the traditional African thrift systems.</p>', 'board/i2UX4s16h3rZb6kaoOVMKsIe47wHh6OqmfNLsJpQ.jpeg', NULL, NULL, '2021-01-17 21:06:25', '2021-01-17 21:06:25'),
(16, 'Mrs. Okoye Ifeyinwa Anastesia Ag.', 'mrs-okoye-ifeyinwa-anastesia-ag', 'Managing Director', '<p>She holds B.A (UNN) in Education, PGD (UNN) in Public Admin and Finance and M.C.I.B.&nbsp; She has worked for 20 years in the Bank and still counting. She has 6 years working experience in operations, 8 years experience as a credit officer and currently the acting managing director. She is also a Microfinance Certified Banker of the Chartered Institute of Bankers of Nigeria.</p>', 'board/RvtuJDohvNHZ9qwAzsLk2kI3BEFUXxoO8EP36ksE.jpeg', NULL, NULL, '2021-01-17 21:07:36', '2021-01-17 21:07:36'),
(17, 'Rev. Canon Professor Jacob Okwuchukwu Onyechi', 'rev-canon-professor-jacob-okwuchukwu-onyechi', 'Director', '<p>Rev. Canon Professor Jacob Onyechi is a Professor of Pharmaceutical Technology and Industrial Pharmacy of the University of Nigeria. He was appointed Lecturer II in the Department of Pharmaceutical Tech. and Ind. Pharm. in 1983. In 2010 he rose to the rank of Professor of Pharmaceutical&nbsp; Technology and Industrial Pharmacy.<br />\r\nProfessor Jacob Onyechi has served as Acting Head Department of Pharm. Tech. and Ind. Pharm. between 2006-2008.<br />\r\nAcademic Qualifications<br />\r\n&bull;Ph.D., Pharmaceutical Technology and Industrial Pharmacy, University of Nigeria, 1987<br />\r\n&bull;M. Pharm. Powder Technology, UNN, 1983<br />\r\n&bull;B.Pharm. (Second Class, Upper Division), UNN, 1979<br />\r\n&bull;WASC (Division One with Distinction), Government Secondary School, Afikpo. 1971<br />\r\nMembership of Professional Associations/Bodies<br />\r\n&bull;Registered Pharmacist, Pharmacists Council of Nigeria (PCN), 1979<br />\r\n&bull;Member, Pharmaceutical Society of Nigeria (MPSN)<br />\r\n&bull;Member, National Association of Pharmacists in Academia (NAPA)<br />\r\nServices within the University<br />\r\n&bull;First Appointment, Lecturer II, 1983, Dept. of Pharmaceutical Technology and Industrial Pharmacy<br />\r\n&bull;Production Manager, Pilot Production Unit, Faculty of Pharmaceutical Sciences, 1983-1991<br />\r\n&bull;Acting Head, Department of Pharmaceutical Technology and Industrial Pharmacy 2006-2008<br />\r\n&bull;Chairman, Faculty Curriculum Committee, 1990-1991<br />\r\n&bull;Faculty Representative, UNN Senate, 1990-1991; 2007-2012<br />\r\n&bull;Chairman, Environment Sanitation and Landscape Committee, UNN, 2006-2009<br />\r\n&bull;Chairman Strategic Contact Committee, UNN, 2007-2009<br />\r\n&bull;UNN Representative, UNNMFB Ltd., 2006 till date<br />\r\n&bull;UNN Cricket Coach, 1983 till date<br />\r\n&bull;Chairman, UNN Team Preparation, NUGA 2009<br />\r\n&bull;Vice-Chairman, UNN Sports Council, 2008-2014; Chairman, 2014 till date<br />\r\nServices outside the University<br />\r\n&bull;Consultant Pharmacist and CEO, Pharmconsult (UK) Ltd, 2005<br />\r\n&bull;Visiting Professor, Department of Pharmacy, King&rsquo;s College London, University of London, 1994<br />\r\n&bull;Assoc. Professor of Pharmacy, College of Health Sciences, Al-Ahsa, Kingdom of Saudi Arabia, 1998-2000<br />\r\n&bull;Lecturer in Pharmaceutical Sciences, Department of Pharmacy, University of Brighton, UK, 1995-1997<br />\r\n&bull;Post-Doctoral Research, Department of Pharmacy, King&rsquo;s College London, 1991-1994<br />\r\n&bull;Scientist, MedPharm Ltd., Department of Pharmacy, King&rsquo;s College London, 2002-2005<br />\r\n&bull;External Examiner, Faculty of Pharm. Scs., Undergraduate/Postgraduate Exams, UNIJOS, 2013 till date<br />\r\n&bull;Consultant Pharmacist, Juhel Pharmacy and Stores; Zevis Pharmaceuticals Ltd; Ceenek Pharmaceutical Chemists Ltd; Government Manufacturing Laboratory, Port Harcourt.<br />\r\n&bull;Ordained Priest of the Church of Nigeria Anglican Communion, 1989<br />\r\n&bull;Preferred Canon of the Church of the Nigeria Anglican Communion, 2014<br />\r\n&bull;Adjunct Lecturer/Professor, Nnamdi Azikiwe University, Awka, 1989 till date<br />\r\n&bull;Committed to Community and National Service<br />\r\nResearch/Academic Publications<br />\r\n&bull;Written 9 Books<br />\r\n&bull;Published over 70 Articles in Journals<br />\r\n&bull;Attended and is still attending Local and International Conferences<br />\r\nRev Canon Professor Jacob O. Onyechi is married to Dr Mrs Uchenna A. Onyechi and they have 3 children.</p>', 'board/zAqgJPbGCnE6SZu92e3eL3sP04VMEMIjTzTRTSBT.jpeg', NULL, NULL, '2021-01-17 21:08:39', '2021-01-17 21:08:39'),
(18, 'Prof. Eke Anthony Nnemeka', 'prof-eke-anthony-nnemeka', 'Director', '<p>B.Sc(Hons), M.Phil, Ph.D (University of Nigeria, Nsukka)<br />\r\nChairman, GPC and Member, Board Committee on Risk Management.<br />\r\nEke Anthony Nnemeka is a Professor of Mathematics since 1997 to date and currently lecturing at the University of Nigeria, Nsukka. He has been a member; Board of Directors for 4year now and still counting. He is also a visiting professor of the University of Swaziland, Southern Africa. He is a Member, Nigerian Mathematical Society, Member Mathematical Association of Nigeria, Member American Mathematical society.</p>', 'board/OPehufgYFP5fDPhGTx79SOghttRXyr8ZCqwEepwH.jpeg', NULL, NULL, '2021-01-17 21:09:51', '2021-01-17 21:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `phone`, `email`, `address`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Umuohama', '+2348036661434', 'umuohama@ukpormfb.com.ng', 'Ugwuorie Market, Umuohama, Ukpor', '2019-04-29 08:14:56', NULL, '2018-09-06 12:48:22', '2019-04-29 08:14:56'),
(2, 'Umunuko', '+2348036661434', 'umunuko@ukpormfb.com.ng', 'Nchounu, Ukpor, Nnewi South L.G.A', '2018-09-12 13:11:33', NULL, '2018-09-06 13:35:51', '2018-09-12 13:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `parent`, `slug`, `description`, `image`, `count`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'Savings', NULL, 'savings', NULL, NULL, NULL, '2020-12-15 17:34:08', '2020-12-15 17:34:03', '2020-12-15 17:34:08'),
(10, 'uncategorised', NULL, 'uncategorised', NULL, NULL, NULL, NULL, '2021-01-19 07:22:22', '2021-01-19 07:22:22'),
(11, 'News', NULL, 'news', NULL, NULL, NULL, NULL, '2021-01-19 07:22:32', '2021-01-19 07:22:32');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(20) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `post_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `category_id`, `post_id`) VALUES
(17, 7, 66),
(18, 10, 70);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'GreenBank MFB Ltd Enugu', 'images/dDE2a9tGDHotcnaH5vEOKjC2pNhPMwSKpKGxnFa0.jpeg', '2019-01-15 11:54:12', '2019-01-15 10:39:02', '2019-01-15 11:54:12'),
(2, 'Ohha MFB Ltd Enugu', 'images/rvkmJjGRlRnwxUZkt26AJ2auhjsnwTf4NKgO4uAX.jpeg', '2019-03-05 04:55:18', '2019-01-15 10:40:08', '2019-03-05 04:55:18'),
(3, 'Ogbete MFB Ltd Enugu', 'images/uR1cBXuOnlDPERm2gEbHcyJAon4EuH0k2KMVqac5.jpeg', '2019-09-22 05:16:14', '2019-01-15 10:40:32', '2019-09-22 05:16:14'),
(4, 'UNN MFB Ltd Enugu', 'images/XQ8tAtVt50lQ8qx92iPg6Y6tomrrHn5sgsNpRbrY.jpeg', '2019-09-22 05:16:00', '2019-01-15 10:40:52', '2019-09-22 05:16:00'),
(5, 'Ngbo MFB Ltd Ebonyi', 'images/YRnXJTzzWcIjyEuusOCii0bexJW2hTmnVrMEqKan.jpeg', '2019-06-06 14:28:43', '2019-01-15 10:41:16', '2019-06-06 14:28:43'),
(6, 'Monarch MFB Ltd Ebonyi', 'images/SZlBh9CEA3738g2S5aGzjUYDoNiKStViUniazNqi.jpeg', '2019-06-06 14:28:09', '2019-01-15 10:41:35', '2019-06-06 14:28:09'),
(7, 'Enugu Sports Club Enugu', 'images/8lsGA4stMB2JRfXJ2rCU14x8kbPwPg1y322LX9Nr.jpeg', '2019-02-27 09:47:48', '2019-01-15 10:41:55', '2019-02-27 09:47:48'),
(8, 'Aba Sports Club Aba', 'images/vQxmzKvMVUMPeJIWEt2uxIP39RLwpdX3HkLrYqvG.jpeg', '2019-09-22 05:15:55', '2019-01-15 10:42:13', '2019-09-22 05:15:55'),
(9, 'Lighthill Group', 'images/foHiVySOkNs53Fn29Mm6MUa3yV2x4H7URaHR1dq7.jpeg', '2019-02-27 09:46:07', '2019-01-15 10:42:40', '2019-02-27 09:46:07'),
(10, 'First System Refinishes LTD Lagos', 'images/LdOLn82ieyiMmyIKmxOrzDviYqB1AOFpaiJvjWMx.jpeg', '2019-09-22 05:15:49', '2019-01-15 10:43:01', '2019-09-22 05:15:49'),
(11, 'Trucontact CSR Lagos', 'images/0cEVzs5AVKmK6uLemuV5HGOyeM6yflb7oMhGs9O2.jpeg', '2019-09-22 05:15:41', '2019-01-15 10:43:22', '2019-09-22 05:15:41'),
(12, 'Umuchinemere Procredit MFB', 'images/bBfePSqQfRj0je8fyLi7OlvVVqLzfUrsodFnwS6x.jpeg', '2019-09-22 05:14:29', '2019-01-15 10:43:40', '2019-09-22 05:14:29'),
(13, 'Good Shepherd MFB Ltd Enugu', 'images/b6flyXYlInu1VSjFG8iJWFFAWlMMcpcEwDRFwfoE.jpeg', '2019-09-22 05:14:23', '2019-01-15 10:44:05', '2019-09-22 05:14:23'),
(14, 'Quantum Business School Lagos', 'images/rRiinicPNu4oMXtQ8QCk6dNXC1aHRfTwKPVkKmNo.jpeg', '2019-09-22 05:13:19', '2019-01-15 10:44:24', '2019-09-22 05:13:19'),
(15, 'National Association of MFBs (NAMB) Enugu', 'images/aINQjqkZaYWEM2lYFPPScyCokgiCrvpwRxcMADGo.jpeg', '2019-09-22 05:13:02', '2019-01-15 10:44:44', '2019-09-22 05:13:02'),
(16, 'Gosgra Properties and Investment LTD Lagos', 'images/8STTMLyQsDil3rC8I0TTwJlVZdZ67t8H5p6P8CW5.jpeg', '2019-09-22 05:12:53', '2019-01-15 10:45:03', '2019-09-22 05:12:53'),
(17, 'Treasure Field Polytechnic', 'images/174SpHLQWk10QLg32nHziQ2ufBPjo4pJZ2bYlJkG.jpeg', '2019-10-10 11:45:12', '2019-09-22 05:12:32', '2019-10-10 11:45:12'),
(18, 'Unity', 'images/P6mUemcWRa4WWxUC6TliMc13llifCqE7ISTygrFx.jpeg', '2019-10-10 11:51:04', '2019-10-10 11:45:49', '2019-10-10 11:51:04'),
(19, 'Unity Hostel', 'images/LpLw4lAm7ojJqbUS0STs4EkAw4sm3DiMxXlapqU7.png', '2019-10-10 11:51:53', '2019-10-10 11:49:16', '2019-10-10 11:51:53'),
(20, 'Sylvia Ifunanya Ekeocha', 'images/UR8etrqh2YuTjnRF3fkHlg89x4K4rWgWaSreNhEr.jpeg', '2019-10-10 11:50:34', '2019-10-10 11:50:11', '2019-10-10 11:50:34'),
(21, 'Piquant Media', 'images/BCRzl4TxT9bVXm0lHd4KDoTQInXYjOifSYCG2tdv.jpeg', '2019-10-10 11:51:59', '2019-10-10 11:51:36', '2019-10-10 11:51:59'),
(25, 'Treasure Field Polytechnic', 'images/8SM9bJiH1MEI5Tny7GTuYGq1d2AMVa8JrtcmgqWC.jpeg', '2019-10-30 12:11:10', '2019-10-20 05:59:13', '2019-10-30 12:11:10'),
(26, 'Treasure Field Polytechnic', 'images/d2OtsvByYbu735TpXFXP7DWDof1XW2utT5QEsEli.jpeg', NULL, '2019-10-30 12:11:41', '2019-10-30 12:11:41'),
(27, 'Philip Cotinho', 'images/NjRO0rAF9bX7fhIXFHulLfmU5OgH3XP5zA30w2HF.jpeg', '2019-10-31 07:18:01', '2019-10-31 07:17:50', '2019-10-31 07:18:01'),
(28, 'Bet9ja Betting Company', 'images/aDRFSTWMR1p0gN1LtbKDLDIKWpaE3qyYQ1Jkyh1V.png', NULL, '2020-02-12 04:57:53', '2020-02-12 04:57:53'),
(29, 'Emiren  Int\'l School Investment Ltd', 'images/pDe7jp1OAjHUssnvzZrbbGlouqIUVOUs3Dtryvv3.docx', '2020-04-11 11:10:03', '2020-03-29 09:16:50', '2020-04-11 11:10:03'),
(30, 'Emiren  Int\'l School Investment Ltd', 'images/yFgQjYOF90RAt8TlbjuHluqa74IskGZ9O4j0Du3l.zip', '2020-04-11 11:10:15', '2020-04-11 10:19:09', '2020-04-11 11:10:15'),
(31, 'Emiren  Int\'l School Investment Ltd', 'images/rfTfJS77qiC5K4GUmpCeOGngvslPdlaAz6swK253.jpeg', NULL, '2020-04-11 11:10:40', '2020-04-11 11:10:40');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `email`, `phone`, `message`, `status`, `property_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Fitzgerald Rutledge', 'cisysazijy@yahoo.com', '+1 (197) 557-5518', 'Cillum earum eius cum quam facere', '1', 'A5206BO3081', NULL, '2020-05-29 09:28:11', '2020-05-29 12:06:27'),
(2, 'Derek Benton', 'tyhuzebyt@gmail.com', '+1 (843) 349-6617', 'Cillum earum eius cum quam facere', '0', 'A5206BO3081', NULL, '2020-05-29 09:30:27', '2020-05-29 09:30:27'),
(3, 'Piper Meadows', 'qimev@gmail.com', '+1 (694) 131-6619', 'Cillum earum eius cum quam facere', '0', 'A5206BO3081', NULL, '2020-05-29 09:31:04', '2020-05-29 09:31:04'),
(4, 'September May', 'hibi@gmail.com', '+1 (199) 539-1974', 'Cillum earum eius cum quam facere', '1', NULL, '2020-05-29 12:07:48', '2020-05-29 10:26:47', '2020-05-29 12:07:48'),
(5, 'Benedict Lewis', 'zovuxogum@hotmail.com', '+1 (448) 681-1956', 'Rem neque ea eos ipsum ut qui doloremque et inventore ducimus ea aliquip', '0', 'A3980BfO4429', NULL, '2020-05-29 10:30:26', '2020-05-29 10:30:26'),
(6, 'Justin Hart', 'rapiqep@gmail.com', '+1 (835) 747-9622', 'Aperiam duis magni proident similique sunt nobis corporis excepturi aut quia eum est', '1', NULL, '2020-06-06 15:41:34', '2020-06-06 15:05:14', '2020-06-06 15:41:34'),
(7, 'Emma Caldwell', 'qobaqyh@yahoo.com', '+1 (984) 959-5386', NULL, '1', NULL, NULL, '2020-10-12 11:29:59', '2020-10-12 11:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `venue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `faq_cats_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_cats_id`, `question`, `answer`, `slug`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'What Is The Price range Of Your Properties?', '<h2>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</h2>', 'what-is-the-price-range-of-your-properties', 'faq/s33ogfCY3xDtGXB7LkqXblptxEZaAiNbyB5xr5B7.jpeg', NULL, '2022-08-04 21:44:49', '2022-08-04 21:44:49'),
(2, 1, 'How Long Will It take To Process My Application?', '<h2>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi. Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</h2>', 'how-long-will-it-take-to-process-my-application', 'faq/v6N2gCEeOlRMmSdTf8522zTvNcRdacxi0BoFb3Rw.jpeg', NULL, '2022-08-05 04:59:02', '2022-08-05 04:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `faq_cats`
--

CREATE TABLE `faq_cats` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq_cats`
--

INSERT INTO `faq_cats` (`id`, `name`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Abra Barry', 'Vitae est aperiam ei', 'abra-barry', NULL, '2022-08-04 13:09:28', '2022-08-04 13:09:28'),
(2, 'Quyn Dean', 'Dolore ex est placea', 'quyn-dean', NULL, '2022-08-04 20:57:57', '2022-08-04 20:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `form_uploads`
--

CREATE TABLE `form_uploads` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `file_path` varchar(225) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` varchar(225) DEFAULT NULL,
  `updated_at` varchar(225) DEFAULT NULL,
  `deleted_at` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `file_path`, `description`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(49, 'Aidan Fischer', 'gallery/lsOqjMYJpcJ2vCXmUsxytaIWwzSAM45YMqxSxRUp.jpeg', 'Possimus qui molest', 'aidan-fischer', NULL, '2022-08-02 03:34:54', '2022-08-02 03:34:54'),
(50, 'Harding Walter', 'gallery/yumP6NeEuuaTCdUfeL6kt7Lcn3uZ6SggbpMNKGDk.jpeg', 'Nisi qui repellendus', 'harding-walter', NULL, '2022-08-02 03:35:43', '2022-08-02 03:35:43'),
(51, 'Phillip Workman', 'gallery/zdEZj2qvarIgHax0RLoaTFv0gUImLjzakZCnkPdH.jpeg', 'Aut exercitationem q', 'phillip-workman', NULL, '2022-08-02 03:36:16', '2022-08-02 03:36:16'),
(52, 'Karyn Carrillo', 'gallery/2DGWPCFd3epROJcrR5BzEQN8KsksAEgAj45hh2Io.jpeg', 'Elit labore sunt a', 'karyn-carrillo', NULL, '2022-08-02 03:36:35', '2022-08-02 03:36:35'),
(53, 'Stacy Copeland', 'gallery/L3oY71tEcgJwBDxLHwtoKG5bXf3ZB7ptMBiD4PEA.jpeg', 'Sunt officia veniam', 'stacy-copeland', NULL, '2022-08-02 03:36:51', '2022-08-02 03:36:51'),
(54, 'Phyllis Chaney', 'gallery/AIWnZgB4pW12DIYOSPuHWMqurZsRrR8h0ZRKmjkG.jpeg', 'In consequat Aut al', 'phyllis-chaney', NULL, '2022-08-04 04:33:27', '2022-08-04 04:33:27'),
(55, 'Piper Booth', 'gallery/mQHlSjr7CBURJn9l1jUcHkxooFba7aphZPmYwbl3.jpeg', 'Proident nostrud vo', 'piper-booth', NULL, '2022-08-04 04:40:22', '2022-08-04 04:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `housings`
--

CREATE TABLE `housings` (
  `id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `housings`
--

INSERT INTO `housings` (`id`, `name`, `slug`, `description`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'About The Meadows', 'about-the-meadows', '<h2><strong><span style=\"color:#c0392b\">Affordable Luxury For All</span></strong></h2>\r\n\r\n<p>Lagos Meadows is an exclusive site and service project with a design concept of luxury lifestyle. It is a well thought after project with all the essential amenities and infrastructure to guarantee its stakeholders a bespoke lifestyle.</p>\r\n\r\n<p>It is located in a developed area of the Lekki Free Trade Zone known as Magbon Alade. The site is in close proximity with the Eleko Beach junction and about 4 minutes drive away from Amen Estate.</p>\r\n\r\n<table id=\"eael-data-table-f6968f7\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"\">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Location</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Magbon Alade</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Property type</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Residential Plots &amp; Commercial Plots</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Size</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>500 Sqm</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'housing/wVaUZvCBnVE2txzKJskLyBBZBd2q6AM26xIkV4b5.jpeg', NULL, NULL, '2022-07-30 03:11:03', '2022-07-30 03:54:18'),
(2, 'Martha King', 'martha-king', '<h2>Affordable Luxury For All</h2>\r\n\r\n<p>Lagos Meadows is an exclusive site and service project with a design concept of luxury lifestyle. It is a well thought after project with all the essential amenities and infrastructure to guarantee its stakeholders a bespoke lifestyle.</p>\r\n\r\n<p>It is located in a developed area of the Lekki Free Trade Zone known as Magbon Alade. The site is in close proximity with the Eleko Beach junction and about 4 minutes drive away from Amen Estate.</p>\r\n\r\n<table id=\"eael-data-table-f6968f7\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"\">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Location</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Magbon Alade</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Property type</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Residential Plots &amp; Commercial Plots</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Size</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>500 Sqm</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'housing/Gt0iLVMcrhRosC14UJoP9PVc6NYgVVMipUNj5Mg1.jpeg', NULL, NULL, '2022-07-30 03:51:31', '2022-07-30 03:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` int(20) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `interest` varchar(255) DEFAULT NULL,
  `bvn` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `id_card` varchar(255) DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `nature` text DEFAULT NULL,
  `repayment` text DEFAULT NULL,
  `security` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `firstname`, `middlename`, `lastname`, `email`, `phone`, `address`, `amount`, `interest`, `bvn`, `dob`, `gender`, `photo`, `id_card`, `purpose`, `location`, `experience`, `nature`, `repayment`, `security`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Ramona', NULL, 'Madden', 'zuhaby@hotmail.com', '+1 (286) 157-8569', 'Facilis ex a libero et dolorem soluta lorem reprehenderit', '100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Seen', NULL, '2020-12-18 08:27:41', '2020-12-18 08:41:02'),
(2, 'Aurora', 'Talley', 'Talley', 'jywigydu@mailinator.net', '+1 (803) 727-4313', 'Duis corporis laboru', '280000', '2', '4567987', '2016-10-10', 'Male', 'photo/R12iCogWxO4AavX2poD04eKJCeDmX8Exaq7hTyvE.jpeg', 'id_card/iKzaxwShyl4c7oyK2ptPMKmSTNW1QtZKefW6L6Jr.png', 'Ut ut aut inventore', 'Sit aut obcaecati at', 'Fuga Cupidatat nobi', 'Sapiente voluptas mi', 'Dolor vel sint aut n', 'Voluptas assumenda e', 'Seen', NULL, '2020-12-23 13:06:48', '2020-12-23 13:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `managements`
--

CREATE TABLE `managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managements`
--

INSERT INTO `managements` (`id`, `name`, `slug`, `post`, `image`, `description`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Uche, Basil Chinedu (B.A. MCIB)', 'uche-basil-chinedu-ba-mcib', 'Manager, Enugu Branch', 'Management/pVSM2mGUpsHTREmfw9m4eutqvfNSQ1oSUyL9PTak.jpeg', '<p style=\"text-align:justify\">Mr Uche is a vastly experienced banker, having worked in a commercial bank before joining the services of the UNNMFB. He holds a Bachelor of Arts (BA) Degree from the University of Nigeria and is a certified member of the Chartered Institute of Bankers of Nigeria. He has been the manger of the Enugu branch of the bank since 2005 and is a Microfinance Certified Banker of the Chartered Institute of Bankers of Nigeria (MCIB). Mr Uche is a recipient of the Leadership Excellence award from the Non-Academic Staff Union of the University of Nigeria, Enugu Campus.</p>', NULL, NULL, '2020-10-12 09:45:47', '2021-01-17 21:13:22'),
(10, 'Nnamuch, Nicholas Ani, Mr (B.A)', 'nnamuch-nicholas-ani-mr-ba', 'Internal Auditor', 'Management/NJFbe3gZ1xRPU6nV2mxOiBdXLHttH2q3T8JxOGzg.jpeg', '<p>Mr Nnamuchi holds a Bachelors Degree in Banking and Finance from Abia State University, Uturu. He has over 25 years experience of banking and currently heads the audit department of the bank.</p>', NULL, NULL, '2021-01-17 21:14:38', '2021-01-17 21:14:38'),
(11, 'Cecilia Ifeoma Isiwu (HND, MCIB) Ag.', 'cecilia-ifeoma-isiwu-hnd-mcib-ag', 'Head of Finance and Accounts', 'Management/S4mz0Bi4h64bZfaqUx8Wyvs2uJZNV9oHnV4rRZza.jpeg', '<p>Mrs Isiuwu has been the Head of the Finance and Accounts Department of the bank since 2011. She holds a Higher National Diploma in Accounting and is a Microfinance Certified Banker (MCIB) of the Chartered Institute of Bankers of Nigeria. She joined the services of the bank in 2004 and has served in various capacities in different departments of the bank,&nbsp; namely audit department and credit operations.</p>', NULL, NULL, '2021-01-17 21:15:41', '2021-01-17 21:15:41'),
(12, 'Ene Benjamin Ikechukwu (HND, MBA, MCIB).', 'ene-benjamin-ikechukwu-hnd-mba-mcib', 'Head of Marketing', 'Management/mWudd8pFWmFpjepnJ2lJOmpx6oc0rKqENtYPZVtV.jpeg', '<p>Mr Ene holds a Higher National Diploma (HND) and a Masters Degree in Business Administration (MBA) in marketing. He is a Microfinance Certified Banker of the Chartered Institute of Bankers of Nigeria. Mr Ene joined the services of the bank in 2004 and once headed the credit operations of the bank.</p>', NULL, NULL, '2021-01-17 21:16:28', '2021-01-17 21:16:28'),
(13, 'Asogwa Sunday Ezeugwu HND (London), ACIS (London), MCIB, PGD.', 'asogwa-sunday-ezeugwu-hnd-london-acis-london-mcib-pgd', 'General Services Officer/Company Secretary', 'Management/aTIaISLqRq7dcbof9kl3mcPQ6oIP07F6PG6rEOxU.jpeg', '<p><br />\r\nMr. Asogwa holds a Higher National Diploma in Business Studies and has been the General Services Officer of the Bank since 2008. He is an Associate of the Institute of Marketing (London) and the Chartered Institute of Secretaries and Administrators ( London). He is also a Microfinance Certified Banker of the Chartered Institute of Bankers of Nigeria (MCIB).</p>', NULL, NULL, '2021-01-17 21:17:44', '2021-01-17 21:17:44'),
(14, 'Omeje, Ejiofor Leonard (HND, PGD., MSc.)', 'omeje-ejiofor-leonard-hnd-pgd-msc', 'Head of Information and Communication Technology Department.', 'Management/r2Z5qhkMTywMD3qfJOuP3fzO21RdwZRWNNS3zvAc.jpeg', '<p><br />\r\nMr Ejiofor was educated at the Institute of Management and Technology (IMT), Enugu and the University of Nigeria, Nsukka, from where he bagged a higher National Diploma (HND) in accounting and a Master of Science (MSC) degree in Public Administration and Financial Management. He joined the ICT unit of the bank in 2006 and rose through the ranks to head the unit. He has received many professional trainings in information and communication technology, especially its application in the banking industry. He is also a Microfinance Certified Banker of the Chartered Institute of Bankers of Nigeria (MCIB).</p>', NULL, NULL, '2021-01-17 21:18:45', '2021-01-17 21:18:45'),
(15, 'Mrs. Anyiam Ogochukwu (B.Sc, M.Sc) Ag.', 'mrs-anyiam-ogochukwu-bsc-msc-ag', 'Head of Credit', 'Management/Dz0RV0z6rU2oHWeDgRfgXDV1TTbDTUJt6Tst5EdV.jpeg', '<p><br />\r\nMrs. Anyiam is the Acting Head of Credit Dept. She has worked as the credit office, customer service officer before attaining the current status. She holds Bachelor of Science Degree and Master of Science Degree in Geology from UNN respectively. She is also a Microfinance certified member of the Chartered Institute of Bankers of Nigeria.</p>', NULL, NULL, '2021-01-17 21:19:34', '2021-01-17 21:19:34'),
(16, 'Mrs. Okoye Ifeyinwa Anastesia Ag.', 'mrs-okoye-ifeyinwa-anastesia-ag', 'Managing Director', 'Management/WWuzCW819QhaqBQDcIqcURlkuQzKbteIU9OmVHRH.jpeg', '<p><br />\r\nShe holds B.A (UNN) in Education, PGD (UNN) in Public Admin and Finance and M.C.I.B.&nbsp; She has worked for 20 years in the Bank and still counting. She has 6 years working experience in operations, 8 years experience as a credit officer and currently the acting managing director. She is also a Microfinance Certified Banker of the Chartered Institute of Bankers of Nigeria.</p>', NULL, NULL, '2021-01-17 21:20:32', '2021-01-17 21:20:32');

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
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2018_09_05_141731_create_managements_table', 1),
(20, '2018_09_05_141819_create_boards_table', 1),
(21, '2018_09_05_141834_create_branches_table', 1),
(22, '2018_09_05_141848_create_products_table', 1),
(23, '2018_09_05_141902_create_services_table', 1),
(24, '2018_10_26_183033_create_settings_table', 1),
(25, '2018_09_07_080709_create_sliders_table', 2),
(26, '2018_08_11_211426_create_posts_table', 3),
(27, '2018_08_11_211441_create_categories_table', 3),
(28, '2018_08_11_211455_create_tags_table', 3),
(29, '2018_08_17_201055_create_subcategories_table', 3),
(30, '2018_08_23_190605_create_events_table', 4),
(31, '2018_09_10_204003_create_galleries_table', 5),
(32, '2019_01_15_112830_create_clients_table', 6),
(33, '2019_01_15_112914_create_partners_table', 6),
(34, '2019_01_15_123701_create_projects_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `slug`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9, 'Mining & Quarry Services', 'mining-quarry-services', '<p>We design, erect, construct and operate quarry operations for infrastructural projects which involves approval of quarry site, testing of stone/rock, top soil removal, drilling, blasting, hauling, crushing and producing required product at the required rate. Our stone quality is stupendiously excellent and the bed height gives our customers maximum satisfaction</p>\r\n\r\n<p>&nbsp;</p>', 'service/eh6tFewS1pixReWsHR55lbhB7jnLMElLScbj2fgg.jpeg', NULL, '2020-06-06 10:57:49', '2020-06-06 10:57:49'),
(10, 'Exploration & Prospecting and Management', 'exploration-prospecting-and-management', '<p>As a growing company we provide exploration services covering design, and management of exploration services. We source and explore local supply of raw materials. Materials we source explore and supply includes minerals and gem stones, lead ore, iron ore, galena, zinc ore, copper ore etc</p>\r\n\r\n<p>&nbsp;</p>', 'service/0y9gCvC6n26rBddWBeYW5ZjLkxgGNua4UhGKooYI.jpeg', NULL, '2020-06-06 10:59:28', '2020-06-06 10:59:28'),
(11, 'Construction & Engineering  Services', 'construction-engineering-services', '<p>We are a leading company in Nigeria that provide services to meet a wide variety of infrastructural and structural needs and our core activities include offering consultancy services in preliminary work, building design, construction and maintenance.</p>', 'service/R5fy9Gnf85dSTJsK8ZSgBBRQ3cWt93XdCbQjMRFG.jpeg', NULL, '2020-06-06 10:59:50', '2020-06-06 10:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(21, NULL, 'partner/Ij0bbfRPHf8kufaX7oKY1JTxhNSw90rqqMxDkKxX.jpeg', NULL, '2020-10-09 05:49:48', '2020-10-09 05:49:48'),
(22, NULL, 'partner/luuJLr0OqQTeSTEc1SHLZWtitizFQJn4mbA8X2AU.png', NULL, '2020-10-09 05:49:58', '2020-10-09 05:49:58'),
(23, NULL, 'partner/rvsd1t97yS0flZHZmR7y7KXznX3a0xFm19NOljl6.png', NULL, '2020-10-09 05:50:10', '2020-10-09 05:50:10'),
(24, NULL, 'partner/D1y8dEcwJVdOwIK1pCrfRoCpzBYw30YU0YPtyq4f.jpeg', NULL, '2020-10-09 05:50:28', '2020-10-09 05:50:28'),
(25, NULL, 'partner/fWP8WCOYzHoNfnbept1UAKi2Kyd4UVk2fGE8Zysb.jpeg', NULL, '2020-10-09 05:50:47', '2020-10-09 05:50:47'),
(26, NULL, 'partner/IePnAc3DDK8ANZQEJu5hJ6KEFy38EwIa0w5nI1xe.png', NULL, '2020-10-09 05:51:04', '2020-10-09 05:51:04');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `author`, `slug`, `description`, `status`, `post_count`, `comment_status`, `category`, `tag`, `featured_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(67, 'Mining & Quarry Services', NULL, 'mining-quarry-services', '<p>Our Quary and Ipsum nulla quia praesentium voluptatem fugiat ea ad ea commodi autem excepteur expedita facere dolores ut accusamus minus eius soluta Ipsum nulla quia praesentium voluptatem fugiat ea ad ea commodi autem excepteur expedita facere dolores ut accusamus minus eius soluta</p>\r\n\r\n<p>Our Quary and Ipsum nulla quia praesentium voluptatem fugiat ea ad ea commodi autem excepteur expedita facere dolores ut accusamus minus eius soluta Ipsum nulla quia praesentium voluptatem fugiat ea ad ea commodi autem excepteur expedita facere dolores ut accusamus minus eius soluta</p>', NULL, NULL, NULL, NULL, NULL, 'property/21PvmHiusr1YalDLwJ7I64rOmfoXBHIyGWSuFJU8.jpeg', NULL, '2020-06-06 10:47:26', '2020-06-06 10:47:26'),
(68, 'Construction & Engineering  Services all of the country', NULL, 'construction-engineering-services-all-of-the-country', '<p>Construction &amp; Engineering&nbsp; Id aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fuga</p>\r\n\r\n<p>Id aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fuga</p>\r\n\r\n<p>Id aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fugaId aliquid Nam quia sint in reprehenderit incidunt fuga</p>', NULL, NULL, NULL, NULL, NULL, 'property/guFymBsTkHFlUqfadkoqLzLgbalp7hJBMC2Eakd3.jpeg', NULL, '2020-06-06 10:48:11', '2020-06-06 10:48:11'),
(69, 'Exploration & Prospecting and Management', NULL, 'exploration-prospecting-and-management', '<p>Consequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciunt</p>\r\n\r\n<p>Consequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciuntConsequat Quis iste cupidatat nulla nemo exercitation nulla ad et nostrum optio nesciunt</p>', NULL, NULL, NULL, NULL, NULL, 'property/Y2TWrIXmCtC6WWov5LL52yQ6UhNlLjFSdUFiGzqQ.jpeg', NULL, '2020-06-06 10:48:44', '2020-06-06 10:48:44'),
(70, 'Est et dolores repel', NULL, 'est-et-dolores-repel', '<p>&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>&nbsp; &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', NULL, NULL, NULL, NULL, NULL, 'property/FrHpwyX2SBcDgWnoYlkZVMurCH5KzE80LCmQpSqq.png', NULL, '2021-01-19 07:23:04', '2021-01-19 07:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beneficiary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `service`, `benefits`, `beneficiary`, `requirements`, `description`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'Plastic Poly Bagss', 'plastic-poly-bagss', NULL, 'lkanlfknalf', 'lasknalkf', 'laknlaknla', '<p>Sacclaimed in the industry as a manufacturer, supplier, trader and exporter, we are engaged in offering <strong>Plastic Poly Bags</strong>. Excellent in quality, our offered bags are designed in adherence to the guidelines laid in the industry. Besides, to meet the voluminous demands of customers, we upgrade our machines on regular basis.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Excellent tearing strength</li>\r\n	<li>Lightweight</li>\r\n	<li>Elegant design</li>\r\n</ul>', 'product/2Yoag3i3knqYwL95PmsDZjHnnSholkb8cXOLZn57.jpeg', '2020-12-17 09:58:12', NULL, '2020-10-10 16:17:59', '2020-12-17 09:58:12'),
(24, 'BOPP Printed Poly Bags', 'bopp-printed-poly-bags', NULL, 'lknlkanlf', 'lknlaknvla', NULL, '<p>Creating new benchmarks in the industry as a manufacturer, supplier, trader and exporter, we are engaged in offering <strong>BOPP Printed Poly Bags.</strong> Premium-grade plastic and other material that is obtained from the reliable vendors of the industry are used in the manufacturing process of these bags to attain highest benchmarks of quality. Following ethical business policies, we have mustered huge client-base.<br />\r\n<br />\r\n<strong>Features:</strong></p>\r\n\r\n<ul>\r\n	<li>Convenient to carry</li>\r\n	<li>High tearing strength</li>\r\n	<li>Lightweight</li>\r\n</ul>', 'product/KN8lkuzVJolMIwIBcYdDLtUwI6jyPlDxaSQAUoX5.png', '2020-12-15 17:30:52', NULL, '2020-10-10 18:36:12', '2020-12-15 17:30:52'),
(25, 'OUR BANKING SERVICES', 'our-banking-services', NULL, 'lkanmlkanl', 'lalknfla', 'alknalkfa', '<p>UNN&nbsp;Microfinance Bank provides modern banking methods which allow our dear customers to choose from our numerous savings and current account plans to perfectly meet their individual requirements.</p>\r\n\r\n<p>We have plans for low class, middle class and high class individuals. We also provide innovative banking solutions for business men and women, corporate organizations and NGOs.</p>', 'product/k7DgEpvlUOHuFrD1SYdlAeq4DUFjwcd21DRMLnQB.jpeg', NULL, NULL, '2020-12-17 10:00:14', '2021-01-17 20:25:25'),
(26, 'Current Account', 'current-account', NULL, '<ul>\r\n	<li>&nbsp;Access to both short and long term credit facility.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Customer can guarantee other customer to get loan.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Issuance of cheque to 3rd party.</li>\r\n</ul>', '<ul>\r\n	<li>Adult , Traders both males and females.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Small and medium enterprises owner.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Salary earners.</li>\r\n</ul>', '<p><strong>Minimum Opening balance</strong></p>\r\n\r\n<ul>\r\n	<li>Individual N1, 000.00</li>\r\n	<li>Association N2, 000.00</li>\r\n	<li>Corporate N5, 000.00</li>\r\n	<li>Joint N2, 000.00</li>\r\n	<li>Microfinance Individual N1, 000.00</li>\r\n</ul>\r\n\r\n<p><strong>Cash/Verve card services<br />\r\nNo minimum balance requirement<br />\r\nRequisite for credit facility<br />\r\nCOT charge N5.00 Per &lsquo;000</strong></p>', '<p>This is an account operates through the use of deposit voucher and cheque book.</p>', 'product/Lo7QhcYqvATpI7MCfmyX8WH3pV27G9akzvPR8xlu.png', NULL, NULL, '2022-02-21 18:31:20', '2022-02-21 19:30:30'),
(27, 'SAVINGS ACCOUNT', 'savings-account', NULL, '<ul>\r\n	<li>&nbsp;&nbsp;Customer save and withdrawal cash at convenient time.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Account attracts interest at the end of month.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Account can be opened to finance target project. etc</li>\r\n</ul>', '<ul>\r\n	<li>&nbsp;&nbsp;&nbsp;Adult males and females.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Traders.</li>\r\n	<li>&nbsp;&nbsp;&nbsp;Salary earners.</li>\r\n</ul>', '<p><strong>Minimum opening balance</strong></p>\r\n\r\n<ul>\r\n	<li>Individual N1, 000.00</li>\r\n	<li>Association N5, 000.00</li>\r\n	<li>Joint N2, 000.00</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;&nbsp;&nbsp;Two passport photographs.<br />\r\n&nbsp;&nbsp;&nbsp;Recent Utility bills.<br />\r\n&nbsp;&nbsp;&nbsp;National recognized identity card.</strong></p>', '<p>This is an account open to keep money for short and long period. It is operated through the use of saving deposits and savings withdrawal by the account owner.</p>', 'product/nQ35y8fJz18sBcvwmLCR5KQR53wvQisBPVS80lZM.jpeg', NULL, NULL, '2022-02-21 20:17:22', '2022-02-21 20:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `slug`, `description`, `image`, `link`, `deleted_at`, `created_at`, `updated_at`) VALUES
(44, 'Ezzamgbo Bio Energy Plant', 'ezzamgbo-bio-energy-plant', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'property/1BvxX9lhmMFT8332dPTU6m3z0dCjjAyQ3KHh75cA.jpeg', NULL, NULL, '2020-06-06 13:49:06', '2020-10-12 10:46:10'),
(45, 'People\'s Hill Project', 'peoples-hill-project', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'property/6Sv0SLJhMA5YXHbaE7vhUUrRUFrn6gyVkKmsWOSO.jpeg', NULL, NULL, '2020-06-06 13:55:29', '2020-10-12 10:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `description`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(26, 'Minerals & Gem Stones', 'minerals-gem-stones', NULL, 'service/5NlRGGB3vCE5ze6MSNtBP2nLJBojuifaC2fyU9tm.jpeg', '2020-10-09 05:00:49', NULL, '2020-06-06 11:03:03', '2020-10-09 05:00:49'),
(27, 'Lead Ore', 'lead-ore', NULL, 'service/BRXJbZq092US8HLOlGTMiYYPFFbXZZla4ZllhSF7.jpeg', '2020-10-09 05:00:47', NULL, '2020-06-06 11:05:13', '2020-10-09 05:00:47'),
(28, 'Iron Ore', 'iron-ore', NULL, 'service/DjfFgwwSubMQC6vt0Z2J0gR4XlfHCc9cbkihFMsG.jpeg', '2020-10-09 05:00:46', NULL, '2020-06-06 11:06:32', '2020-10-09 05:00:46'),
(29, 'Galena', 'galena', NULL, 'service/JwpRTwvYuCYGcfEyX7IUrilzMKMbkC3j7mGJFtWc.jpeg', '2020-10-09 05:00:43', NULL, '2020-06-06 11:07:48', '2020-10-09 05:00:43'),
(30, 'Zinc Ore', 'zinc-ore', NULL, 'service/BfBG3GdzCeQKaqgglEM6tGGpPn1AKf7qYgzuLADW.jpeg', '2020-10-09 05:05:05', NULL, '2020-06-06 11:08:53', '2020-10-09 05:05:05'),
(31, 'Copper Ore', 'copper-ore', NULL, 'service/yfkxDh9xohpn9OSQrtprGSTM03zWXAt9A9kzAGhP.jpeg', '2020-10-09 05:00:40', NULL, '2020-06-06 11:09:49', '2020-10-09 05:00:40'),
(32, 'Online Banking & Loans', 'online-banking-loans', '<p><strong><em>1. UNNMFB Saving Account</em></strong><br />\r\nMinimum opening balance<br />\r\n-Individual N1, 000.00<br />\r\n-Association N5, 000.00<br />\r\n-Joint N2, 000.00<br />\r\n-Daily savings scheme N200.00<br />\r\n*Minimum balance N300.00<br />\r\n*Interest rate 5%<br />\r\n<em><strong>2. Pay Slip Investment Plan (PASIP)</strong></em><br />\r\n* Minimum opening balances N2, 000.00 monthly deposits (no upper limit)<br />\r\n*Interest of 3.5% P A on your deposits, compounded monthly will be paid to you at maturity.<br />\r\n*minimum maturity period is 1 year, you can choose as many years as you want (eg.2, 3,5,10 etc)<br />\r\n*Regular personalized cash pick up (daily, weekly or monthly option)<br />\r\n*Allows Standing Order instructions.<br />\r\n*Should you have cause to withdraw a part or the whole of your investment before its maturity, the bank&rsquo;s savings account interest rate will apply.<br />\r\n*In case of death, your next of kin will be paid the accrued benefits or opt to continue with the plan.<br />\r\n*At maturity you can choose to withdraw only the interest, and continue with the plan for another specified term.<br />\r\n***The plan provides you with a bulk sum of money at the time you need it.<br />\r\n***Under the plan, you can opt to have your benefits paid to you on monthly basis.<br />\r\n***When you are sick or incapacitated you can get a monthly income from the investment.<br />\r\n***When you want to borrow, your investment in the plan can serve as collateral or security.<br />\r\n***The scheme enables you to cultivate savings habit to build capital with ease.<br />\r\n<em><strong>3.</strong>&nbsp;<strong>UNNMFB Teen/Education Savings Scheme (Rock-The Foundation Of Your Children&rsquo;s Financial Security)</strong></em><br />\r\n*Minimum opening balances N5, 000.00<br />\r\n*Deposit N1, 000.00 monthly into your child&rsquo;s account or allow standing order instructions.<br />\r\n*Regular personalized cash pick up (daily, weekly or monthly option) by our mobile banking services for non-current account holders.<br />\r\n*Attractive interest rates (1% above standard savings rates)<br />\r\n*Parents could operate account on behave of their children/wards between the ages of 1-17 years of age.<br />\r\n*Interest rate 3.5%<br />\r\n*Free gifts of exercise books at the beginning of the term.<br />\r\n*Your child automatically qualifies for a quiz completion in which he/she can win a scholarship.<br />\r\n*Representation by the bank on graduation ceremonies.<br />\r\n*The bank can transfer money to the child through its correspondent bank by order of the parents. Parents pay for the cost of transfer.<br />\r\n<strong><em>4. August Meeting Savings Scheme Plan (AMSSP)</em></strong><br />\r\n*Minimum opening balances N5000.00<br />\r\n*Regular personalized cash pick up throughout the august/women meeting by UNNMFB staff.<br />\r\n*Attractive interest on deposits 3.5%<br />\r\n*Low interest on loan 30% reducing balance method.<br />\r\n*Memorandum of understanding with the group.<br />\r\n*Access to high quality products from UNN MFB (eg.Agri-business, pay slip investment plan scheme, UNN MFB Festivity scheme etc).<br />\r\n*Duration 1 year<br />\r\n*Access micro loan facility to members<br />\r\n<strong><em>5. UNNMFB Festivity Scheme (Save Money, Live Better)</em></strong><br />\r\nSavings/or birthdays, Christmas, Sallah, Marriage, Graduation, Anniversaries etc)<br />\r\n*Aimed to encourage our esteemed customers to celebrate their festivals in grand style.<br />\r\n*Depositors build funds gradually and conveniently to celebrate their birthdays, marriage etc<br />\r\n*Minimum Opening Balance N1000.00<br />\r\n*Regular personalized cash pick up of N200.00 daily, N1, 200.00 weekly, or N4, 800.00 monthly<br />\r\n*Interest rate 1% per annum above standard savings account interest rate for 6 months and 1.5% for 12 months if no withdrawal is made within the period under the contribution.<br />\r\n*Can be used as collateral for securing loans.<br />\r\n*Minimum duration of 6 months.<br />\r\n*Should the customer have any cause to withdraw a part or the whole of his/her money before its maturity, the bank&rsquo;s savings account interest rate will apply.<br />\r\n*If the depositor die, his/her next of kin will be paid the accrued benefits or continue with the scheme.<br />\r\n*Interest rate (Normal 3.5%)<br />\r\nDOCUMENTATION<br />\r\n2 Pass port size photograph,2 colored passport size photograph of the child and the parent if he/she is between the ages of 1-17 years (minor)<br />\r\nMeans of Identification<br />\r\nAny one of the following:<br />\r\nNational ID, International Passport, Valid Driver&rsquo;s License, National Voters&rsquo; card, Affidavit from court.<br />\r\n2 current account holder&rsquo;s references<br />\r\nDully completion of KYC and UNNMFB opening forms</p>', 'service/Ulq5XVcdTjBehNFm4loUVxik9xW6qsqmMQO0Jp7s.jpeg', '2022-08-01 17:06:31', NULL, '2020-10-09 05:23:02', '2022-08-01 17:06:31'),
(33, 'Building Material', 'building-material', '<p>1.&nbsp;<strong><em>UNNMFB Current Account</em></strong><br />\r\n*Minimum Opening balance<br />\r\n-Individual N1, 000.00<br />\r\n-Association N2, 000.00<br />\r\n-Corporate N5, 000.00<br />\r\n-Joint N2, 000.00<br />\r\n-Microfinance Individual N1, 000.00<br />\r\n*Cash/Verve card services<br />\r\n*No minimum balance requirement<br />\r\n*Requisite for credit facility<br />\r\n*COT charge N5.00 Per &lsquo;000</p>\r\n\r\n<p><strong><em>2. UNNMFB Agri-Business Micro Credit</em></strong><br />\r\nMinimum opening balance<br />\r\n*Individual N1, 000.00<br />\r\n*Groups/Co-operative N5, 000.00<br />\r\n*UNNMFB Agri-business is an offshoot of Federal Government Agricultural Credit Guarantee Scheme Fund established through the Central Bank of Nigeria.<br />\r\nLOAN<br />\r\n*Amount to be given depends on the customer&rsquo;s financial capability or ability.<br />\r\n*Interest rate: 30% P.A at reducing balance method<br />\r\n*Processing fee 3%<br />\r\n*The borrowers fill Nigeria Agricultural Insurance Corporation (NAIC) Risk policy form.<br />\r\n*Insurance premium for crop 2% of the approved loan amount.<br />\r\n* Insurance premium for livestock 2.5% of the approved loan amount.<br />\r\n*Insurance premium for Agro-processing 1.5% of the approved loan amount.<br />\r\n* Insurance premium for livestock 2.5% of the approved loan amount.<br />\r\n* Insurance premium for mixed farming 2% of the approved loan amount.<br />\r\n*Loan that is fully recovered within 12 months attracts 40% of interest refund as incentive by CBN through interest drawback programme (IDP).<br />\r\n*SECURITY: Guarantors that domiciled salary account with our bank.</p>', 'service/58mH0GsgJfvdrBjRiAyP1Opkaust6BSejJCf82Pg.jpeg', NULL, NULL, '2020-10-09 05:30:48', '2022-08-04 03:27:16'),
(34, 'Printing of both low and high density wrappers', 'printing-of-both-low-and-high-density-wrappers', '<p>Printing of both low and high density wrappers is founded on Minning and Quarrying services which remains a core activity of our operations.We design, erect, construct and operate quarry operations for infrastructural projects which involves approval of quarry site, testing of stone/rock, top soil removal, drilling, blasting, hauling, crushing and producing required product at the required rate.</p>\r\n\r\n<p>Other activities we offer include Exploration &amp; Prospecting, Construction and Management. We source and explore local supply of raw materials. Materials we source explore and supply includes minerals and gem stones, lead ore, iron ore, galena, zinc ore, copper ore etc</p>', 'service/LUz9vR3vr0Bux6naGhi2rQHsNYrGVbS25ILa5n1o.jpeg', '2020-12-15 17:20:52', NULL, '2020-10-09 05:40:39', '2020-12-15 17:20:52'),
(35, 'Investment Account', 'investment-account', '<p><strong>UNNMFB Teen/Education Savings Scheme (Rock-The Foundation Of Your Children&rsquo;s Financial Security)</strong><br />\r\n*Minimum opening balances N5, 000.00<br />\r\n*Deposit N1, 000.00 monthly into your child&rsquo;s account or allow standing order instructions.<br />\r\n*Regular personalized cash pick up (daily, weekly or monthly option) by our mobile banking services for non-current account holders.<br />\r\n*Attractive interest rates (1% above standard savings rates)<br />\r\n*Parents could operate account on behave of their children/wards between the ages of 1-17 years of age.<br />\r\n*Interest rate 3.5%<br />\r\n*Free gifts of exercise books at the beginning of the term.<br />\r\n*Your child automatically qualifies for a quiz completion in which he/she can win a scholarship.<br />\r\n*Representation by the bank on graduation ceremonies.<br />\r\n*The bank can transfer money to the child through its correspondent bank by order of the parents. Parents pay for the cost of transfer.</p>', 'service/MLMxVKDKGbZg6XuK3u22lE5kjsrW7vjirIAgyGnd.jpeg', '2022-08-01 17:06:39', NULL, '2020-10-09 05:47:20', '2022-08-01 17:06:39'),
(36, 'Real Estate Construction', 'real-estate-construction', '<p><span style=\"font-size:18px\"><strong><span style=\"color:#c0392b\">Affordable Luxury For All</span></strong></span></p>\r\n\r\n<p>Lagos Meadows is an exclusive site and service project with a design concept of luxury lifestyle. It is a well thought after project with all the essential amenities and infrastructure to guarantee its stakeholders a bespoke lifestyle.</p>\r\n\r\n<p>It is located in a developed area of the Lekki Free Trade Zone known as Magbon Alade. The site is in close proximity with the Eleko Beach junction and about 4 minutes drive away from Amen Estate.</p>\r\n\r\n<table id=\"eael-data-table-f6968f7\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"\">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Location</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Magbon Alade</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Property type</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Residential Plots &amp; Commercial Plots</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Size</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>500 Sqm</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'service/akLFLsM3wRSDk1MwVvAFa6OicO51biD8SRGIf9bf.jpeg', NULL, NULL, '2021-01-17 20:39:34', '2022-08-04 03:26:54'),
(37, 'Property Marketing', 'property-marketing', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempo</p>', 'service/kf2Iw7awC8zmE00tiSHVl3rAN0f7jfUmvP2I6Iwg.jpeg', NULL, NULL, '2022-02-21 20:16:27', '2022-08-04 03:26:23'),
(38, 'Real Estate Consultation', 'real-estate-consultation', '<p>hould you have cause to withdraw a part or the whole of your investment before its maturity, the bank&rsquo;s savings account interest rate will apply.<br />\r\n*In case of death, your next of kin will be paid the accrued benefits or opt to continue with the plan.<br />\r\n*At maturity you can choose to withdraw only the interest, and continue with the plan for another</p>', 'service/ATeCDzQgRvs6N5nPy2MPNNI8engMtyH8Pjzt55rj.jpeg', NULL, NULL, '2022-02-21 20:19:51', '2022-08-04 03:27:38'),
(39, 'Property Development', 'property-development', '<h2><span style=\"color:#c0392b\"><strong>Build Your Dream Home!</strong></span></h2>\r\n\r\n<p>Living in a community that takes you away from all the fuss of the city life to a fine country living, this is what The Fairmont Hilltop represents.</p>\r\n\r\n<p>Located in Alagbado, within the close proximity to necessary amenities capable of serving the fairmont lifestyle, the estate gives you a complete hilltop experience, with magnificent view of the city.</p>\r\n\r\n<p>The Fairmont Hilltop with serviced plots is the ideal community to build your dream home.</p>\r\n\r\n<table id=\"eael-data-table-1d3e64ad\">\r\n	<thead>\r\n		<tr>\r\n			<th colspan=\"\">&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Location</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Alagbado, Lagos</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Title</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Certificate of Occupancy</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p><strong>Available Units</strong></p>\r\n			</td>\r\n			<td colspan=\"\" rowspan=\"\">\r\n			<p>Sold Out</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'service/SURXfQm3wC4XQNmyVg5fJUwMty2Srr7bCwJWmhLG.jpeg', NULL, NULL, '2022-07-30 03:02:07', '2022-08-04 03:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sitetitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sitename`, `sitetitle`, `email`, `phone`, `about`, `mission`, `vision`, `address`, `facebook`, `twitter`, `linkedin`, `googleplus`, `logo`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Dala Estate Nigeria', NULL, 'ddalaakukwunigltd@gmail.com', '+(234)916 1711 613, (234)803 3561 990, (234)908 514 3757', '<p>Dala Property Limited is a real estate development firm charged with the responsibility of redefining the Nigerian Real Estate Market. We focus essentially on developing properties at promising locations that will generate massive return on investment over a short period of time. We have a dynamic team who are&nbsp;focused on identifying real estate opportunities for all our subscribers.</p>\r\n\r\n<p>At Dala Property Limited , we have been able to bridge the gap between investors and the Nigerian Real estate industry by creating affordable,<br />\r\nsecured and amazing real estates investment for all. Professionalism is our core competence and we deliver our promises without compromising our standards.</p>', 'To render excellent financial and social services to the active poor, micro, small, \r\nand medium entrepreneurs in rural and urban areas through operations that promote economic\r\nand social growth of our clients.', 'To lead in the provision of financial and social services in the Microfinance Banking sector towards the economic growth and development of Nigeria.', 'Ado Bayero Way, University of Nigeria, Nsukka.', 'https://web.facebook.com/unn.microfinace.bank2/', 'https://www.twitter..com/abc', 'https://www.linkedin.com/abc', 'https://www.googleplus.com/iotglobal', 'logo/Yirwlmd7DJPIJDhC8POv5Kn5LN1Z4egIYRAfhsrh.png', NULL, '2018-09-17 23:00:00', '2022-08-04 03:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(20) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `color`, `description`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Leomarks International', NULL, 'Aspire to be there. Ae are a Mining, Exploration and Construction Company.', 'slider/uvRJBhLkJrirTDI1bVUo2PZLhPZfliTrCZSRjkPn.jpeg', '2020-12-15 17:37:51', NULL, '2020-06-06 10:42:05', '2020-12-15 17:37:51'),
(2, 'Invest with us', NULL, 'We provide investment banking account, open an account today lets help you manage your investment account', 'slider/FFvVvzhpCy0UVSX613tINEsmB9ujftmqu2s49f6P.png', NULL, NULL, '2020-06-06 10:43:00', '2022-07-31 13:00:43'),
(3, 'Saving Vs Current Account', NULL, 'We provide  savings and current account for our customers, talk to us today lets help you set up an account', 'slider/hhrp0jkhAE6CRk2pzaNad5WuzxI43pY0RD3XhtTv.png', NULL, NULL, '2020-06-06 10:43:44', '2022-07-31 13:01:00'),
(4, 'E-banking Services', NULL, 'We provide services to meet a wide variety of infrastructural and structural needs', 'slider/79Ejds4bb7Ju0o6sKTnkCKdnFhwR7ArXACrVIoZ5.png', NULL, NULL, '2020-06-06 10:44:32', '2022-07-31 13:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` bigint(20) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `title`, `slug`, `parent`, `count`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Savings Account', 'savings-account', 'Accounts', NULL, NULL, NULL, NULL, '2018-09-10 10:47:57', '2018-09-10 10:47:57'),
(2, 'Fixed Deposit Account', 'fixed-deposit-account', 'Accounts', NULL, NULL, NULL, NULL, '2018-09-10 10:49:26', '2018-09-10 10:49:26'),
(3, 'CISCO', 'cisco', 'Networks', NULL, NULL, NULL, NULL, '2019-02-27 09:55:10', '2019-02-27 09:55:10'),
(4, 'Career', 'career', NULL, NULL, NULL, NULL, NULL, '2019-11-01 17:59:31', '2019-11-01 17:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'bank', NULL, NULL, '2020-06-04 09:14:21', '2018-09-10 10:50:14', '2020-06-04 09:14:21'),
(2, NULL, 'bank', NULL, NULL, '2020-06-04 09:14:47', '2018-09-10 10:53:27', '2020-06-04 09:14:47'),
(3, NULL, 'one', NULL, NULL, '2020-06-04 09:14:50', '2018-09-10 10:53:27', '2020-06-04 09:14:50'),
(4, NULL, 'quisquam', NULL, NULL, '2020-06-04 09:14:51', '2019-01-09 13:15:16', '2020-06-04 09:14:51'),
(5, NULL, 'deleniti', NULL, NULL, '2020-06-04 09:14:52', '2019-01-09 13:15:16', '2020-06-04 09:14:52'),
(6, NULL, 'aut', NULL, NULL, '2020-06-04 09:14:53', '2019-01-09 13:15:16', '2020-06-04 09:14:53'),
(7, NULL, 'laborum', NULL, NULL, '2020-06-04 09:14:58', '2019-01-09 13:15:16', '2020-06-04 09:14:58'),
(8, NULL, 'sit', NULL, NULL, '2020-06-04 09:15:00', '2019-01-09 13:15:17', '2020-06-04 09:15:00'),
(9, NULL, 'exercitation', NULL, NULL, '2020-06-04 09:15:01', '2019-01-09 13:15:17', '2020-06-04 09:15:01'),
(10, NULL, 'et', NULL, NULL, '2020-06-04 09:15:02', '2019-01-09 13:15:17', '2020-06-04 09:15:02'),
(11, NULL, 'autem', NULL, NULL, '2020-06-04 09:15:04', '2019-01-09 13:15:17', '2020-06-04 09:15:04'),
(12, NULL, 'mollitia', NULL, NULL, '2020-06-04 09:15:05', '2019-01-09 13:15:17', '2020-06-04 09:15:05'),
(13, NULL, '', NULL, NULL, '2020-06-04 09:15:07', '2019-02-27 10:03:27', '2020-06-04 09:15:07'),
(21, '[]', '', NULL, NULL, '2020-06-04 09:15:12', '2019-02-27 13:54:42', '2020-06-04 09:15:12'),
(22, '[]', '', NULL, NULL, '2020-06-04 09:15:13', '2019-02-28 11:20:11', '2020-06-04 09:15:13'),
(23, '[]', '', NULL, NULL, '2020-06-04 09:15:15', '2019-02-28 12:07:47', '2020-06-04 09:15:15'),
(24, '[]', '', NULL, NULL, '2020-06-04 09:15:17', '2019-06-07 12:49:33', '2020-06-04 09:15:17'),
(25, '[]', '', NULL, NULL, '2020-06-04 09:15:18', '2019-06-07 14:21:00', '2020-06-04 09:15:18'),
(26, '[]', '', NULL, NULL, '2020-06-04 09:15:20', '2019-06-10 09:33:35', '2020-06-04 09:15:20'),
(27, '[]', '', NULL, NULL, '2020-06-04 09:15:21', '2019-06-11 10:43:32', '2020-06-04 09:15:21'),
(28, '[]', '', NULL, NULL, '2020-06-04 09:15:23', '2019-06-14 09:13:44', '2020-06-04 09:15:23'),
(29, '[]', '', NULL, NULL, '2020-06-04 09:15:25', '2019-06-14 11:12:05', '2020-06-04 09:15:25'),
(30, '[]', '', NULL, NULL, '2020-06-04 09:15:26', '2019-06-14 12:03:02', '2020-06-04 09:15:26'),
(31, '[]', '', NULL, NULL, '2020-06-04 09:15:28', '2019-06-19 12:18:32', '2020-06-04 09:15:28'),
(32, '[]', '', NULL, NULL, '2020-06-04 09:15:29', '2019-06-25 11:50:58', '2020-06-04 09:15:29'),
(33, '[]', '', NULL, NULL, '2020-06-04 09:15:31', '2019-07-10 15:07:06', '2020-06-04 09:15:31'),
(34, '[]', '', NULL, NULL, '2020-06-04 09:15:33', '2019-07-16 14:38:42', '2020-06-04 09:15:33'),
(35, '[]', '', NULL, NULL, '2020-06-04 09:15:34', '2019-07-25 13:27:32', '2020-06-04 09:15:34'),
(36, '[\"Laborum', 'laborum', NULL, NULL, '2020-06-04 09:15:09', '2019-11-01 18:25:53', '2020-06-04 09:15:09'),
(37, 'Nostrum', 'nostrum', NULL, NULL, '2020-06-04 09:15:37', '2019-11-01 18:25:53', '2020-06-04 09:15:37'),
(38, 'atq\"]', 'atq', NULL, NULL, '2020-06-04 09:15:36', '2019-11-01 18:25:53', '2020-06-04 09:15:36'),
(39, '[\"Voluptate', 'voluptate', NULL, NULL, '2020-06-04 09:15:11', '2019-11-01 19:30:06', '2020-06-04 09:15:11'),
(40, 'perferendi\"]', 'perferendi', NULL, NULL, '2020-06-04 09:15:39', '2019-11-01 19:30:06', '2020-06-04 09:15:39'),
(41, 'Dolor', 'dolor', 'Ipsam totam anim corporis accusantium ex odio earum sint non ea neque et nemo qui delectus magnam', NULL, NULL, '2020-06-04 09:15:45', '2020-06-04 09:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `post`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Ina Crosby', 'MD. UBA', 'Laborum minus laborum reprehenderit voluptates voluptatibus cillum nostrum illum recusandae Dolorem ut laborum Dolor', 'Testimonial/6IkXVTBfC7xxA7JVGdgyK2XhUMw11Q8K1Q3svgPq.jpeg', NULL, '2020-10-09 05:52:10', '2020-10-09 05:52:10'),
(6, 'Stephanie Smith', 'CEO, Colliery Bread', 'Quia deserunt cillum dolor mollitQuo libero aspernatur qui exercitationem quasi sunt modi', 'Testimonial/C2ojnpv881OhbqX6uJz9V8XxrOAsMenrMwdjlfZS.png', NULL, '2020-10-09 05:53:05', '2020-10-09 05:53:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 'Head Admin', 'admin@admin.com', 'Super Admin', '$2y$10$mQ8k.LdMmLRjgDov/eVWlulHN9LKSoySfp5ddGhstiDPN4biLe4kC', 'ffA8GisIIW4Y6flyk0NUWVnm1y8PfM73JA8jvdi1JU2Wf7NYQWc9TMQeruPS', NULL, '2018-09-11 08:21:14', '2018-09-11 08:21:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_mname_unique` (`mname`);

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `events_author_unique` (`author`),
  ADD UNIQUE KEY `events_title_unique` (`title`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_cats`
--
ALTER TABLE `faq_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_uploads`
--
ALTER TABLE `form_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `housings`
--
ALTER TABLE `housings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managements`
--
ALTER TABLE `managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_email_unique` (`email`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_title_unique` (`title`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq_cats`
--
ALTER TABLE `faq_cats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form_uploads`
--
ALTER TABLE `form_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `housings`
--
ALTER TABLE `housings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managements`
--
ALTER TABLE `managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
