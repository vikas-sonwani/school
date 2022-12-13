-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 01:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmngt`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(11) NOT NULL,
  `academic_code` varchar(50) NOT NULL,
  `academic_desc` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `academic_code`, `academic_desc`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, '2022-23', '2022-23', 1, '2022-09-29 19:09:18', 10, '2022-09-29 19:36:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `description` varchar(120) NOT NULL,
  `create_ts` datetime NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `mod_ts` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `create_ts`, `user_id`, `mod_ts`) VALUES
(1, 'GEN', 'GENERAL', '2022-11-13 16:25:18', '1', NULL),
(2, 'OBC', 'OTHER BACKWARD CLASS', '2022-11-13 16:26:12', '1', NULL),
(3, 'SC', 'SCHEDULE CASTE', '2022-11-13 16:26:31', '1', NULL),
(4, 'ST', 'SCHEDULE TRIBE', '2022-11-13 16:26:48', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ISO2` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dialCode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `ISO2`, `dialCode`, `flag`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'AF', '+93', 'https://cdn.kcak11.com/CountryFlags/countries/af.svg', 1, NULL, NULL, NULL),
(2, 'Aland Islands', 'AX', '+358', 'https://cdn.kcak11.com/CountryFlags/countries/ax.svg', 1, NULL, NULL, NULL),
(3, 'Albania', 'AL', '+355', 'https://cdn.kcak11.com/CountryFlags/countries/al.svg', 1, NULL, NULL, NULL),
(4, 'Algeria', 'DZ', '+213', 'https://cdn.kcak11.com/CountryFlags/countries/dz.svg', 1, NULL, NULL, NULL),
(5, 'American Samoa', 'AS', '+1684', 'https://cdn.kcak11.com/CountryFlags/countries/as.svg', 1, NULL, NULL, NULL),
(6, 'Andorra', 'AD', '+376', 'https://cdn.kcak11.com/CountryFlags/countries/ad.svg', 1, NULL, NULL, NULL),
(7, 'Angola', 'AO', '+244', 'https://cdn.kcak11.com/CountryFlags/countries/ao.svg', 1, NULL, NULL, NULL),
(8, 'Anguilla', 'AI', '+1264', 'https://cdn.kcak11.com/CountryFlags/countries/ai.svg', 1, NULL, NULL, NULL),
(9, 'Antarctica', 'AQ', '+672', 'https://cdn.kcak11.com/CountryFlags/countries/aq.svg', 1, NULL, NULL, NULL),
(10, 'Antigua and Barbuda', 'AG', '+1268', 'https://cdn.kcak11.com/CountryFlags/countries/ag.svg', 1, NULL, NULL, NULL),
(11, 'Argentina', 'AR', '+54', 'https://cdn.kcak11.com/CountryFlags/countries/ar.svg', 1, NULL, NULL, NULL),
(12, 'Armenia', 'AM', '+374', 'https://cdn.kcak11.com/CountryFlags/countries/am.svg', 1, NULL, NULL, NULL),
(13, 'Aruba', 'AW', '+297', 'https://cdn.kcak11.com/CountryFlags/countries/aw.svg', 1, NULL, NULL, NULL),
(14, 'Australia', 'AU', '+61', 'https://cdn.kcak11.com/CountryFlags/countries/au.svg', 1, NULL, NULL, NULL),
(15, 'Austria', 'AT', '+43', 'https://cdn.kcak11.com/CountryFlags/countries/at.svg', 1, NULL, NULL, NULL),
(16, 'Azerbaijan', 'AZ', '+994', 'https://cdn.kcak11.com/CountryFlags/countries/az.svg', 1, NULL, NULL, NULL),
(17, 'Bahamas', 'BS', '+1242', 'https://cdn.kcak11.com/CountryFlags/countries/bs.svg', 1, NULL, NULL, NULL),
(18, 'Bahrain', 'BH', '+973', 'https://cdn.kcak11.com/CountryFlags/countries/bh.svg', 1, NULL, NULL, NULL),
(19, 'Bangladesh', 'BD', '+880', 'https://cdn.kcak11.com/CountryFlags/countries/bd.svg', 1, NULL, NULL, NULL),
(20, 'Barbados', 'BB', '+1246', 'https://cdn.kcak11.com/CountryFlags/countries/bb.svg', 1, NULL, NULL, NULL),
(21, 'Belarus', 'BY', '+375', 'https://cdn.kcak11.com/CountryFlags/countries/by.svg', 1, NULL, NULL, NULL),
(22, 'Belgium', 'BE', '+32', 'https://cdn.kcak11.com/CountryFlags/countries/be.svg', 1, NULL, NULL, NULL),
(23, 'Belize', 'BZ', '+501', 'https://cdn.kcak11.com/CountryFlags/countries/bz.svg', 1, NULL, NULL, NULL),
(24, 'Benin', 'BJ', '+229', 'https://cdn.kcak11.com/CountryFlags/countries/bj.svg', 1, NULL, NULL, NULL),
(25, 'Bermuda', 'BM', '+1441', 'https://cdn.kcak11.com/CountryFlags/countries/bm.svg', 1, NULL, NULL, NULL),
(26, 'Bhutan', 'BT', '+975', 'https://cdn.kcak11.com/CountryFlags/countries/bt.svg', 1, NULL, NULL, NULL),
(27, 'Bolivia', 'BO', '+591', 'https://cdn.kcak11.com/CountryFlags/countries/bo.svg', 1, NULL, NULL, NULL),
(29, 'Bosnia and Herzegovina', 'BA', '+387', 'https://cdn.kcak11.com/CountryFlags/countries/ba.svg', 1, NULL, NULL, NULL),
(30, 'Botswana', 'BW', '+267', 'https://cdn.kcak11.com/CountryFlags/countries/bw.svg', 1, NULL, NULL, NULL),
(32, 'Brazil', 'BR', '+55', 'https://cdn.kcak11.com/CountryFlags/countries/br.svg', 1, NULL, NULL, NULL),
(33, 'British Indian Ocean Territory', 'IO', '+246', 'https://cdn.kcak11.com/CountryFlags/countries/io.svg', 1, NULL, NULL, NULL),
(34, 'Brunei Darussalam', 'BN', '+673', 'https://cdn.kcak11.com/CountryFlags/countries/bn.svg', 1, NULL, NULL, NULL),
(35, 'Bulgaria', 'BG', '+359', 'https://cdn.kcak11.com/CountryFlags/countries/bg.svg', 1, NULL, NULL, NULL),
(36, 'Burkina Faso', 'BF', '+226', 'https://cdn.kcak11.com/CountryFlags/countries/bf.svg', 1, NULL, NULL, NULL),
(37, 'Burundi', 'BI', '+257', 'https://cdn.kcak11.com/CountryFlags/countries/bi.svg', 1, NULL, NULL, NULL),
(38, 'Cambodia', 'KH', '+855', 'https://cdn.kcak11.com/CountryFlags/countries/kh.svg', 1, NULL, NULL, NULL),
(39, 'Cameroon', 'CM', '+237', 'https://cdn.kcak11.com/CountryFlags/countries/cm.svg', 1, NULL, NULL, NULL),
(40, 'Canada', 'CA', '+1', 'https://cdn.kcak11.com/CountryFlags/countries/ca.svg', 1, NULL, NULL, NULL),
(41, 'Cape Verde', 'CV', '+238', 'https://cdn.kcak11.com/CountryFlags/countries/cv.svg', 1, NULL, NULL, NULL),
(42, 'Cayman Islands', 'KY', '+1345', 'https://cdn.kcak11.com/CountryFlags/countries/ky.svg', 1, NULL, NULL, NULL),
(43, 'Central African Republic', 'CF', '+236', 'https://cdn.kcak11.com/CountryFlags/countries/cf.svg', 1, NULL, NULL, NULL),
(44, 'Chad', 'TD', '+235', 'https://cdn.kcak11.com/CountryFlags/countries/td.svg', 1, NULL, NULL, NULL),
(45, 'Chile', 'CL', '+56', 'https://cdn.kcak11.com/CountryFlags/countries/cl.svg', 1, NULL, NULL, NULL),
(46, 'China', 'CN', '+86', 'https://cdn.kcak11.com/CountryFlags/countries/cn.svg', 1, NULL, NULL, NULL),
(47, 'Christmas Island', 'CX', '+61', 'https://cdn.kcak11.com/CountryFlags/countries/cx.svg', 1, NULL, NULL, NULL),
(48, 'Cocos (Keeling) Islands', 'CC', '+61', 'https://cdn.kcak11.com/CountryFlags/countries/cc.svg', 1, NULL, NULL, NULL),
(49, 'Colombia', 'CO', '+57', 'https://cdn.kcak11.com/CountryFlags/countries/co.svg', 1, NULL, NULL, NULL),
(50, 'Comoros', 'KM', '+269', 'https://cdn.kcak11.com/CountryFlags/countries/km.svg', 1, NULL, NULL, NULL),
(53, 'Cook Islands', 'CK', '+682', 'https://cdn.kcak11.com/CountryFlags/countries/ck.svg', 1, NULL, NULL, NULL),
(54, 'Costa Rica', 'CR', '+506', 'https://cdn.kcak11.com/CountryFlags/countries/cr.svg', 1, NULL, NULL, NULL),
(55, 'Croatia', 'HR', '+385', 'https://cdn.kcak11.com/CountryFlags/countries/hr.svg', 1, NULL, NULL, NULL),
(56, 'Cuba', 'CU', '+53', 'https://cdn.kcak11.com/CountryFlags/countries/cu.svg', 1, NULL, NULL, NULL),
(58, 'Cyprus', 'CY', '+357', 'https://cdn.kcak11.com/CountryFlags/countries/cy.svg', 1, NULL, NULL, NULL),
(59, 'Czech Republic', 'CZ', '+420', 'https://cdn.kcak11.com/CountryFlags/countries/cz.svg', 1, NULL, NULL, NULL),
(60, 'Denmark', 'DK', '+45', 'https://cdn.kcak11.com/CountryFlags/countries/dk.svg', 1, NULL, NULL, NULL),
(61, 'Djibouti', 'DJ', '+253', 'https://cdn.kcak11.com/CountryFlags/countries/dj.svg', 1, NULL, NULL, NULL),
(62, 'Dominica', 'DM', '+1767', 'https://cdn.kcak11.com/CountryFlags/countries/dm.svg', 1, NULL, NULL, NULL),
(63, 'Dominican Republic', 'DO', '+1849', 'https://cdn.kcak11.com/CountryFlags/countries/do.svg', 1, NULL, NULL, NULL),
(64, 'Ecuador', 'EC', '+593', 'https://cdn.kcak11.com/CountryFlags/countries/ec.svg', 1, NULL, NULL, NULL),
(65, 'Egypt', 'EG', '+20', 'https://cdn.kcak11.com/CountryFlags/countries/eg.svg', 1, NULL, NULL, NULL),
(66, 'El Salvador', 'SV', '+503', 'https://cdn.kcak11.com/CountryFlags/countries/sv.svg', 1, NULL, NULL, NULL),
(67, 'Equatorial Guinea', 'GQ', '+240', 'https://cdn.kcak11.com/CountryFlags/countries/gq.svg', 1, NULL, NULL, NULL),
(68, 'Eritrea', 'ER', '+291', 'https://cdn.kcak11.com/CountryFlags/countries/er.svg', 1, NULL, NULL, NULL),
(69, 'Estonia', 'EE', '+372', 'https://cdn.kcak11.com/CountryFlags/countries/ee.svg', 1, NULL, NULL, NULL),
(70, 'Ethiopia', 'ET', '+251', 'https://cdn.kcak11.com/CountryFlags/countries/et.svg', 1, NULL, NULL, NULL),
(71, 'Falkland Islands (Malvinas)', 'FK', '+500', 'https://cdn.kcak11.com/CountryFlags/countries/fk.svg', 1, NULL, NULL, NULL),
(72, 'Faroe Islands', 'FO', '+298', 'https://cdn.kcak11.com/CountryFlags/countries/fo.svg', 1, NULL, NULL, NULL),
(73, 'Fiji', 'FJ', '+679', 'https://cdn.kcak11.com/CountryFlags/countries/fj.svg', 1, NULL, NULL, NULL),
(74, 'Finland', 'FI', '+358', 'https://cdn.kcak11.com/CountryFlags/countries/fi.svg', 1, NULL, NULL, NULL),
(75, 'France', 'FR', '+33', 'https://cdn.kcak11.com/CountryFlags/countries/fr.svg', 1, NULL, NULL, NULL),
(76, 'French Guiana', 'GF', '+594', 'https://cdn.kcak11.com/CountryFlags/countries/gf.svg', 1, NULL, NULL, NULL),
(77, 'French Polynesia', 'PF', '+689', 'https://cdn.kcak11.com/CountryFlags/countries/pf.svg', 1, NULL, NULL, NULL),
(79, 'Gabon', 'GA', '+241', 'https://cdn.kcak11.com/CountryFlags/countries/ga.svg', 1, NULL, NULL, NULL),
(80, 'Gambia', 'GM', '+220', 'https://cdn.kcak11.com/CountryFlags/countries/gm.svg', 1, NULL, NULL, NULL),
(81, 'Georgia', 'GE', '+995', 'https://cdn.kcak11.com/CountryFlags/countries/ge.svg', 1, NULL, NULL, NULL),
(82, 'Germany', 'DE', '+49', 'https://cdn.kcak11.com/CountryFlags/countries/de.svg', 1, NULL, NULL, NULL),
(83, 'Ghana', 'GH', '+233', 'https://cdn.kcak11.com/CountryFlags/countries/gh.svg', 1, NULL, NULL, NULL),
(84, 'Gibraltar', 'GI', '+350', 'https://cdn.kcak11.com/CountryFlags/countries/gi.svg', 1, NULL, NULL, NULL),
(85, 'Greece', 'GR', '+30', 'https://cdn.kcak11.com/CountryFlags/countries/gr.svg', 1, NULL, NULL, NULL),
(86, 'Greenland', 'GL', '+299', 'https://cdn.kcak11.com/CountryFlags/countries/gl.svg', 1, NULL, NULL, NULL),
(87, 'Grenada', 'GD', '+1473', 'https://cdn.kcak11.com/CountryFlags/countries/gd.svg', 1, NULL, NULL, NULL),
(88, 'Guadeloupe', 'GP', '+590', 'https://cdn.kcak11.com/CountryFlags/countries/gp.svg', 1, NULL, NULL, NULL),
(89, 'Guam', 'GU', '+1671', 'https://cdn.kcak11.com/CountryFlags/countries/gu.svg', 1, NULL, NULL, NULL),
(90, 'Guatemala', 'GT', '+502', 'https://cdn.kcak11.com/CountryFlags/countries/gt.svg', 1, NULL, NULL, NULL),
(91, 'Guernsey', 'GG', '+44', 'https://cdn.kcak11.com/CountryFlags/countries/gg.svg', 1, NULL, NULL, NULL),
(92, 'Guinea', 'GN', '+224', 'https://cdn.kcak11.com/CountryFlags/countries/gn.svg', 1, NULL, NULL, NULL),
(93, 'Guinea-Bissau', 'GW', '+245', 'https://cdn.kcak11.com/CountryFlags/countries/gw.svg', 1, NULL, NULL, NULL),
(94, 'Guyana', 'GY', '+592', 'https://cdn.kcak11.com/CountryFlags/countries/gy.svg', 1, NULL, NULL, NULL),
(95, 'Haiti', 'HT', '+509', 'https://cdn.kcak11.com/CountryFlags/countries/ht.svg', 1, NULL, NULL, NULL),
(97, 'Holy See (Vatican City State)', 'VA', '+379', 'https://cdn.kcak11.com/CountryFlags/countries/va.svg', 1, NULL, NULL, NULL),
(98, 'Honduras', 'HN', '+504', 'https://cdn.kcak11.com/CountryFlags/countries/hn.svg', 1, NULL, NULL, NULL),
(99, 'Hong Kong', 'HK', '+852', 'https://cdn.kcak11.com/CountryFlags/countries/hk.svg', 1, NULL, NULL, NULL),
(100, 'Hungary', 'HU', '+36', 'https://cdn.kcak11.com/CountryFlags/countries/hu.svg', 1, NULL, NULL, NULL),
(101, 'Iceland', 'IS', '+354', 'https://cdn.kcak11.com/CountryFlags/countries/is.svg', 1, NULL, NULL, NULL),
(102, 'India', 'IN', '+91', 'https://cdn.kcak11.com/CountryFlags/countries/in.svg', 1, NULL, NULL, NULL),
(103, 'Indonesia', 'ID', '+62', 'https://cdn.kcak11.com/CountryFlags/countries/id.svg', 1, NULL, NULL, NULL),
(104, 'Iran', 'IR', '+98', 'https://cdn.kcak11.com/CountryFlags/countries/ir.svg', 1, NULL, NULL, NULL),
(105, 'Iraq', 'IQ', '+964', 'https://cdn.kcak11.com/CountryFlags/countries/iq.svg', 1, NULL, NULL, NULL),
(106, 'Ireland', 'IE', '+353', 'https://cdn.kcak11.com/CountryFlags/countries/ie.svg', 1, NULL, NULL, NULL),
(107, 'Isle of Man', 'IM', '+44', 'https://cdn.kcak11.com/CountryFlags/countries/im.svg', 1, NULL, NULL, NULL),
(108, 'Israel', 'IL', '+972', 'https://cdn.kcak11.com/CountryFlags/countries/il.svg', 1, NULL, NULL, NULL),
(109, 'Italy', 'IT', '+39', 'https://cdn.kcak11.com/CountryFlags/countries/it.svg', 1, NULL, NULL, NULL),
(110, 'Jamaica', 'JM', '+1876', 'https://cdn.kcak11.com/CountryFlags/countries/jm.svg', 1, NULL, NULL, NULL),
(111, 'Japan', 'JP', '+81', 'https://cdn.kcak11.com/CountryFlags/countries/jp.svg', 1, NULL, NULL, NULL),
(112, 'Jersey', 'JE', '+44', 'https://cdn.kcak11.com/CountryFlags/countries/je.svg', 1, NULL, NULL, NULL),
(113, 'Jordan', 'JO', '+962', 'https://cdn.kcak11.com/CountryFlags/countries/jo.svg', 1, NULL, NULL, NULL),
(114, 'Kazakhstan', 'KZ', '+77', 'https://cdn.kcak11.com/CountryFlags/countries/kz.svg', 1, NULL, NULL, NULL),
(115, 'Kenya', 'KE', '+254', 'https://cdn.kcak11.com/CountryFlags/countries/ke.svg', 1, NULL, NULL, NULL),
(116, 'Kiribati', 'KI', '+686', 'https://cdn.kcak11.com/CountryFlags/countries/ki.svg', 1, NULL, NULL, NULL),
(118, 'Kosovo', 'XK', '+383', 'https://cdn.kcak11.com/CountryFlags/countries/xk.svg', 1, NULL, NULL, NULL),
(119, 'Kuwait', 'KW', '+965', 'https://cdn.kcak11.com/CountryFlags/countries/kw.svg', 1, NULL, NULL, NULL),
(120, 'Kyrgyzstan', 'KG', '+996', 'https://cdn.kcak11.com/CountryFlags/countries/kg.svg', 1, NULL, NULL, NULL),
(121, 'Latvia', 'LV', '+371', 'https://cdn.kcak11.com/CountryFlags/countries/lv.svg', 1, NULL, NULL, NULL),
(122, 'Lebanon', 'LB', '+961', 'https://cdn.kcak11.com/CountryFlags/countries/lb.svg', 1, NULL, NULL, NULL),
(123, 'Lesotho', 'LS', '+266', 'https://cdn.kcak11.com/CountryFlags/countries/ls.svg', 1, NULL, NULL, NULL),
(124, 'Liberia', 'LR', '+231', 'https://cdn.kcak11.com/CountryFlags/countries/lr.svg', 1, NULL, NULL, NULL),
(126, 'Liechtenstein', 'LI', '+423', 'https://cdn.kcak11.com/CountryFlags/countries/li.svg', 1, NULL, NULL, NULL),
(127, 'Lithuania', 'LT', '+370', 'https://cdn.kcak11.com/CountryFlags/countries/lt.svg', 1, NULL, NULL, NULL),
(128, 'Luxembourg', 'LU', '+352', 'https://cdn.kcak11.com/CountryFlags/countries/lu.svg', 1, NULL, NULL, NULL),
(131, 'Madagascar', 'MG', '+261', 'https://cdn.kcak11.com/CountryFlags/countries/mg.svg', 1, NULL, NULL, NULL),
(132, 'Malawi', 'MW', '+265', 'https://cdn.kcak11.com/CountryFlags/countries/mw.svg', 1, NULL, NULL, NULL),
(133, 'Malaysia', 'MY', '+60', 'https://cdn.kcak11.com/CountryFlags/countries/my.svg', 1, NULL, NULL, NULL),
(134, 'Maldives', 'MV', '+960', 'https://cdn.kcak11.com/CountryFlags/countries/mv.svg', 1, NULL, NULL, NULL),
(135, 'Mali', 'ML', '+223', 'https://cdn.kcak11.com/CountryFlags/countries/ml.svg', 1, NULL, NULL, NULL),
(136, 'Malta', 'MT', '+356', 'https://cdn.kcak11.com/CountryFlags/countries/mt.svg', 1, NULL, NULL, NULL),
(137, 'Marshall Islands', 'MH', '+692', 'https://cdn.kcak11.com/CountryFlags/countries/mh.svg', 1, NULL, NULL, NULL),
(138, 'Martinique', 'MQ', '+596', 'https://cdn.kcak11.com/CountryFlags/countries/mq.svg', 1, NULL, NULL, NULL),
(139, 'Mauritania', 'MR', '+222', 'https://cdn.kcak11.com/CountryFlags/countries/mr.svg', 1, NULL, NULL, NULL),
(140, 'Mauritius', 'MU', '+230', 'https://cdn.kcak11.com/CountryFlags/countries/mu.svg', 1, NULL, NULL, NULL),
(141, 'Mayotte', 'YT', '+262', 'https://cdn.kcak11.com/CountryFlags/countries/yt.svg', 1, NULL, NULL, NULL),
(142, 'Mexico', 'MX', '+52', 'https://cdn.kcak11.com/CountryFlags/countries/mx.svg', 1, NULL, NULL, NULL),
(145, 'Monaco', 'MC', '+377', 'https://cdn.kcak11.com/CountryFlags/countries/mc.svg', 1, NULL, NULL, NULL),
(146, 'Mongolia', 'MN', '+976', 'https://cdn.kcak11.com/CountryFlags/countries/mn.svg', 1, NULL, NULL, NULL),
(147, 'Montenegro', 'ME', '+382', 'https://cdn.kcak11.com/CountryFlags/countries/me.svg', 1, NULL, NULL, NULL),
(148, 'Montserrat', 'MS', '+1664', 'https://cdn.kcak11.com/CountryFlags/countries/ms.svg', 1, NULL, NULL, NULL),
(149, 'Morocco', 'MA', '+212', 'https://cdn.kcak11.com/CountryFlags/countries/ma.svg', 1, NULL, NULL, NULL),
(150, 'Mozambique', 'MZ', '+258', 'https://cdn.kcak11.com/CountryFlags/countries/mz.svg', 1, NULL, NULL, NULL),
(151, 'Myanmar', 'MM', '+95', 'https://cdn.kcak11.com/CountryFlags/countries/mm.svg', 1, NULL, NULL, NULL),
(152, 'Namibia', 'NA', '+264', 'https://cdn.kcak11.com/CountryFlags/countries/na.svg', 1, NULL, NULL, NULL),
(153, 'Nauru', 'NR', '+674', 'https://cdn.kcak11.com/CountryFlags/countries/nr.svg', 1, NULL, NULL, NULL),
(154, 'Nepal', 'NP', '+977', 'https://cdn.kcak11.com/CountryFlags/countries/np.svg', 1, NULL, NULL, NULL),
(155, 'Netherlands', 'NL', '+31', 'https://cdn.kcak11.com/CountryFlags/countries/nl.svg', 1, NULL, NULL, NULL),
(156, 'Netherlands Antilles', 'AN', '+599', 'https://cdn.kcak11.com/CountryFlags/countries/an.svg', 1, NULL, NULL, NULL),
(157, 'New Caledonia', 'NC', '+687', 'https://cdn.kcak11.com/CountryFlags/countries/nc.svg', 1, NULL, NULL, NULL),
(158, 'New Zealand', 'NZ', '+64', 'https://cdn.kcak11.com/CountryFlags/countries/nz.svg', 1, NULL, NULL, NULL),
(159, 'Nicaragua', 'NI', '+505', 'https://cdn.kcak11.com/CountryFlags/countries/ni.svg', 1, NULL, NULL, NULL),
(160, 'Niger', 'NE', '+227', 'https://cdn.kcak11.com/CountryFlags/countries/ne.svg', 1, NULL, NULL, NULL),
(161, 'Nigeria', 'NG', '+234', 'https://cdn.kcak11.com/CountryFlags/countries/ng.svg', 1, NULL, NULL, NULL),
(162, 'Niue', 'NU', '+683', 'https://cdn.kcak11.com/CountryFlags/countries/nu.svg', 1, NULL, NULL, NULL),
(163, 'Norfolk Island', 'NF', '+672', 'https://cdn.kcak11.com/CountryFlags/countries/nf.svg', 1, NULL, NULL, NULL),
(164, 'Northern Mariana Islands', 'MP', '+1670', 'https://cdn.kcak11.com/CountryFlags/countries/mp.svg', 1, NULL, NULL, NULL),
(165, 'Norway', 'NO', '+47', 'https://cdn.kcak11.com/CountryFlags/countries/no.svg', 1, NULL, NULL, NULL),
(166, 'Oman', 'OM', '+968', 'https://cdn.kcak11.com/CountryFlags/countries/om.svg', 1, NULL, NULL, NULL),
(167, 'Pakistan', 'PK', '+92', 'https://cdn.kcak11.com/CountryFlags/countries/pk.svg', 1, NULL, NULL, NULL),
(168, 'Palau', 'PW', '+680', 'https://cdn.kcak11.com/CountryFlags/countries/pw.svg', 1, NULL, NULL, NULL),
(170, 'Panama', 'PA', '+507', 'https://cdn.kcak11.com/CountryFlags/countries/pa.svg', 1, NULL, NULL, NULL),
(171, 'Papua New Guinea', 'PG', '+675', 'https://cdn.kcak11.com/CountryFlags/countries/pg.svg', 1, NULL, NULL, NULL),
(172, 'Paraguay', 'PY', '+595', 'https://cdn.kcak11.com/CountryFlags/countries/py.svg', 1, NULL, NULL, NULL),
(173, 'Peru', 'PE', '+51', 'https://cdn.kcak11.com/CountryFlags/countries/pe.svg', 1, NULL, NULL, NULL),
(174, 'Philippines', 'PH', '+63', 'https://cdn.kcak11.com/CountryFlags/countries/ph.svg', 1, NULL, NULL, NULL),
(175, 'Pitcairn', 'PN', '+872', 'https://cdn.kcak11.com/CountryFlags/countries/pn.svg', 1, NULL, NULL, NULL),
(176, 'Poland', 'PL', '+48', 'https://cdn.kcak11.com/CountryFlags/countries/pl.svg', 1, NULL, NULL, NULL),
(177, 'Portugal', 'PT', '+351', 'https://cdn.kcak11.com/CountryFlags/countries/pt.svg', 1, NULL, NULL, NULL),
(178, 'Puerto Rico', 'PR', '+1939', 'https://cdn.kcak11.com/CountryFlags/countries/pr.svg', 1, NULL, NULL, NULL),
(179, 'Qatar', 'QA', '+974', 'https://cdn.kcak11.com/CountryFlags/countries/qa.svg', 1, NULL, NULL, NULL),
(180, 'Reunion', 'RE', '+262', 'https://cdn.kcak11.com/CountryFlags/countries/re.svg', 1, NULL, NULL, NULL),
(181, 'Romania', 'RO', '+40', 'https://cdn.kcak11.com/CountryFlags/countries/ro.svg', 1, NULL, NULL, NULL),
(183, 'Rwanda', 'RW', '+250', 'https://cdn.kcak11.com/CountryFlags/countries/rw.svg', 1, NULL, NULL, NULL),
(184, 'Saint Barthelemy', 'BL', '+590', 'https://cdn.kcak11.com/CountryFlags/countries/bl.svg', 1, NULL, NULL, NULL),
(186, 'Saint Kitts and Nevis', 'KN', '+1869', 'https://cdn.kcak11.com/CountryFlags/countries/kn.svg', 1, NULL, NULL, NULL),
(187, 'Saint Lucia', 'LC', '+1758', 'https://cdn.kcak11.com/CountryFlags/countries/lc.svg', 1, NULL, NULL, NULL),
(188, 'Saint Martin', 'MF', '+590', 'https://cdn.kcak11.com/CountryFlags/countries/mf.svg', 1, NULL, NULL, NULL),
(189, 'Saint Pierre and Miquelon', 'PM', '+508', 'https://cdn.kcak11.com/CountryFlags/countries/pm.svg', 1, NULL, NULL, NULL),
(190, 'Saint Vincent and the Grenadines', 'VC', '+1784', 'https://cdn.kcak11.com/CountryFlags/countries/vc.svg', 1, NULL, NULL, NULL),
(191, 'Samoa', 'WS', '+685', 'https://cdn.kcak11.com/CountryFlags/countries/ws.svg', 1, NULL, NULL, NULL),
(192, 'San Marino', 'SM', '+378', 'https://cdn.kcak11.com/CountryFlags/countries/sm.svg', 1, NULL, NULL, NULL),
(193, 'Sao Tome and Principe', 'ST', '+239', 'https://cdn.kcak11.com/CountryFlags/countries/st.svg', 1, NULL, NULL, NULL),
(194, 'Saudi Arabia', 'SA', '+966', 'https://cdn.kcak11.com/CountryFlags/countries/sa.svg', 1, NULL, NULL, NULL),
(195, 'Senegal', 'SN', '+221', 'https://cdn.kcak11.com/CountryFlags/countries/sn.svg', 1, NULL, NULL, NULL),
(196, 'Serbia', 'RS', '+381', 'https://cdn.kcak11.com/CountryFlags/countries/rs.svg', 1, NULL, NULL, NULL),
(198, 'Seychelles', 'SC', '+248', 'https://cdn.kcak11.com/CountryFlags/countries/sc.svg', 1, NULL, NULL, NULL),
(199, 'Sierra Leone', 'SL', '+232', 'https://cdn.kcak11.com/CountryFlags/countries/sl.svg', 1, NULL, NULL, NULL),
(200, 'Singapore', 'SG', '+65', 'https://cdn.kcak11.com/CountryFlags/countries/sg.svg', 1, NULL, NULL, NULL),
(201, 'Sint Maarten', 'SX', '+1721', 'https://cdn.kcak11.com/CountryFlags/countries/sx.svg', 1, NULL, NULL, NULL),
(202, 'Slovakia', 'SK', '+421', 'https://cdn.kcak11.com/CountryFlags/countries/sk.svg', 1, NULL, NULL, NULL),
(203, 'Slovenia', 'SI', '+386', 'https://cdn.kcak11.com/CountryFlags/countries/si.svg', 1, NULL, NULL, NULL),
(204, 'Solomon Islands', 'SB', '+677', 'https://cdn.kcak11.com/CountryFlags/countries/sb.svg', 1, NULL, NULL, NULL),
(205, 'Somalia', 'SO', '+252', 'https://cdn.kcak11.com/CountryFlags/countries/so.svg', 1, NULL, NULL, NULL),
(206, 'South Africa', 'ZA', '+27', 'https://cdn.kcak11.com/CountryFlags/countries/za.svg', 1, NULL, NULL, NULL),
(207, 'South Georgia and the South Sandwich Islands', 'GS', '+500', 'https://cdn.kcak11.com/CountryFlags/countries/gs.svg', 1, NULL, NULL, NULL),
(208, 'South Sudan', 'SS', '+211', 'https://cdn.kcak11.com/CountryFlags/countries/ss.svg', 1, NULL, NULL, NULL),
(209, 'Spain', 'ES', '+34', 'https://cdn.kcak11.com/CountryFlags/countries/es.svg', 1, NULL, NULL, NULL),
(210, 'Sri Lanka', 'LK', '+94', 'https://cdn.kcak11.com/CountryFlags/countries/lk.svg', 1, NULL, NULL, NULL),
(211, 'Sudan', 'SD', '+249', 'https://cdn.kcak11.com/CountryFlags/countries/sd.svg', 1, NULL, NULL, NULL),
(212, 'Suriname', 'SR', '+597', 'https://cdn.kcak11.com/CountryFlags/countries/sr.svg', 1, NULL, NULL, NULL),
(213, 'Svalbard and Jan Mayen', 'SJ', '+47', 'https://cdn.kcak11.com/CountryFlags/countries/sj.svg', 1, NULL, NULL, NULL),
(215, 'Sweden', 'SE', '+46', 'https://cdn.kcak11.com/CountryFlags/countries/se.svg', 1, NULL, NULL, NULL),
(216, 'Switzerland', 'CH', '+41', 'https://cdn.kcak11.com/CountryFlags/countries/ch.svg', 1, NULL, NULL, NULL),
(217, 'Syrian Arab Republic', 'SY', '+963', 'https://cdn.kcak11.com/CountryFlags/countries/sy.svg', 1, NULL, NULL, NULL),
(219, 'Tajikistan', 'TJ', '+992', 'https://cdn.kcak11.com/CountryFlags/countries/tj.svg', 1, NULL, NULL, NULL),
(221, 'Thailand', 'TH', '+66', 'https://cdn.kcak11.com/CountryFlags/countries/th.svg', 1, NULL, NULL, NULL),
(222, 'Timor-Leste', 'TL', '+670', 'https://cdn.kcak11.com/CountryFlags/countries/tl.svg', 1, NULL, NULL, NULL),
(223, 'Togo', 'TG', '+228', 'https://cdn.kcak11.com/CountryFlags/countries/tg.svg', 1, NULL, NULL, NULL),
(224, 'Tokelau', 'TK', '+690', 'https://cdn.kcak11.com/CountryFlags/countries/tk.svg', 1, NULL, NULL, NULL),
(225, 'Tonga', 'TO', '+676', 'https://cdn.kcak11.com/CountryFlags/countries/to.svg', 1, NULL, NULL, NULL),
(226, 'Trinidad and Tobago', 'TT', '+1868', 'https://cdn.kcak11.com/CountryFlags/countries/tt.svg', 1, NULL, NULL, NULL),
(227, 'Tunisia', 'TN', '+216', 'https://cdn.kcak11.com/CountryFlags/countries/tn.svg', 1, NULL, NULL, NULL),
(228, 'Turkey', 'TR', '+90', 'https://cdn.kcak11.com/CountryFlags/countries/tr.svg', 1, NULL, NULL, NULL),
(229, 'Turkmenistan', 'TM', '+993', 'https://cdn.kcak11.com/CountryFlags/countries/tm.svg', 1, NULL, NULL, NULL),
(230, 'Turks and Caicos Islands', 'TC', '+1649', 'https://cdn.kcak11.com/CountryFlags/countries/tc.svg', 1, NULL, NULL, NULL),
(231, 'Tuvalu', 'TV', '+688', 'https://cdn.kcak11.com/CountryFlags/countries/tv.svg', 1, NULL, NULL, NULL),
(232, 'Uganda', 'UG', '+256', 'https://cdn.kcak11.com/CountryFlags/countries/ug.svg', 1, NULL, NULL, NULL),
(233, 'Ukraine', 'UA', '+380', 'https://cdn.kcak11.com/CountryFlags/countries/ua.svg', 1, NULL, NULL, NULL),
(234, 'United Arab Emirates', 'AE', '+971', 'https://cdn.kcak11.com/CountryFlags/countries/ae.svg', 1, NULL, NULL, NULL),
(235, 'United Kingdom', 'GB', '+44', 'https://cdn.kcak11.com/CountryFlags/countries/gb.svg', 1, NULL, NULL, NULL),
(237, 'United States Minor Outlying Islands', 'UMI', '+246', 'https://cdn.kcak11.com/CountryFlags/countries/umi.svg', 1, NULL, NULL, NULL),
(238, 'Uruguay', 'UY', '+598', 'https://cdn.kcak11.com/CountryFlags/countries/uy.svg', 1, NULL, NULL, NULL),
(239, 'Uzbekistan', 'UZ', '+998', 'https://cdn.kcak11.com/CountryFlags/countries/uz.svg', 1, NULL, NULL, NULL),
(240, 'Vanuatu', 'VU', '+678', 'https://cdn.kcak11.com/CountryFlags/countries/vu.svg', 1, NULL, NULL, NULL),
(242, 'Vietnam', 'VN', '+84', 'https://cdn.kcak11.com/CountryFlags/countries/vn.svg', 1, NULL, NULL, NULL),
(245, 'Wallis and Futuna', 'WF', '+681', 'https://cdn.kcak11.com/CountryFlags/countries/wf.svg', 1, NULL, NULL, NULL),
(247, 'Yemen', 'YE', '+967', 'https://cdn.kcak11.com/CountryFlags/countries/ye.svg', 1, NULL, NULL, NULL),
(248, 'Zambia', 'ZM', '+260', 'https://cdn.kcak11.com/CountryFlags/countries/zm.svg', 1, NULL, NULL, NULL),
(249, 'Zimbabwe', 'ZW', '+263', 'https://cdn.kcak11.com/CountryFlags/countries/zw.svg', 1, NULL, NULL, NULL),
(250, 'Ascension Island', 'AC', '+247', 'https://cdn.kcak11.com/CountryFlags/countries/ac.svg', 1, NULL, NULL, NULL),
(251, 'Congo', 'CG', '+242', 'https://cdn.kcak11.com/CountryFlags/countries/cg.svg', 1, NULL, NULL, NULL),
(252, 'Democratic Republic of the Congo', 'CD', '+243', 'https://cdn.kcak11.com/CountryFlags/countries/cd.svg', 1, NULL, NULL, NULL),
(253, 'Eswatini', 'SZ', '+268', 'https://cdn.kcak11.com/CountryFlags/countries/sz.svg', 1, NULL, NULL, NULL),
(254, 'Ivory Coast / Cote d\'Ivoire', 'CI', '+225', 'https://cdn.kcak11.com/CountryFlags/countries/ci.svg', 1, NULL, NULL, NULL),
(255, 'Korea, Democratic People\'s Republic of Korea', 'KP', '+850', 'https://cdn.kcak11.com/CountryFlags/countries/kp.svg', 1, NULL, NULL, NULL),
(256, 'Korea, Republic of South Korea', 'KR', '+82', 'https://cdn.kcak11.com/CountryFlags/countries/kr.svg', 1, NULL, NULL, NULL),
(257, 'Laos', 'LA', '+856', 'https://cdn.kcak11.com/CountryFlags/countries/la.svg', 1, NULL, NULL, NULL),
(258, 'Libya', 'LY', '+218', 'https://cdn.kcak11.com/CountryFlags/countries/ly.svg', 1, NULL, NULL, NULL),
(259, 'Macau', 'MO', '+853', 'https://cdn.kcak11.com/CountryFlags/countries/mo.svg', 1, NULL, NULL, NULL),
(260, 'Micronesia, Federated States of Micronesia', 'FM', '+691', 'https://cdn.kcak11.com/CountryFlags/countries/fm.svg', 1, NULL, NULL, NULL),
(261, 'Moldova', 'MD', '+373', 'https://cdn.kcak11.com/CountryFlags/countries/md.svg', 1, NULL, NULL, NULL),
(262, 'North Macedonia', 'MK', '+389', 'https://cdn.kcak11.com/CountryFlags/countries/mk.svg', 1, NULL, NULL, NULL),
(263, 'Palestine', 'PS', '+970', 'https://cdn.kcak11.com/CountryFlags/countries/ps.svg', 1, NULL, NULL, NULL),
(264, 'Russia', 'RU', '+7', 'https://cdn.kcak11.com/CountryFlags/countries/ru.svg', 1, NULL, NULL, NULL),
(265, 'Saint Helena, Ascension and Tristan Da Cunha', 'SH', '+290', 'https://cdn.kcak11.com/CountryFlags/countries/sh.svg', 1, NULL, NULL, NULL),
(266, 'Taiwan', 'TW', '+886', 'https://cdn.kcak11.com/CountryFlags/countries/tw.svg', 1, NULL, NULL, NULL),
(267, 'Tanzania, United Republic of Tanzania', 'TZ', '+255', 'https://cdn.kcak11.com/CountryFlags/countries/tz.svg', 1, NULL, NULL, NULL),
(268, 'United States', 'US', '+1', 'https://cdn.kcak11.com/CountryFlags/countries/us.svg', 1, NULL, NULL, NULL),
(269, 'Venezuela, Bolivarian Republic of Venezuela', 'VE', '+58', 'https://cdn.kcak11.com/CountryFlags/countries/ve.svg', 1, NULL, NULL, NULL),
(270, 'Virgin Islands, British', 'VG', '+1284', 'https://cdn.kcak11.com/CountryFlags/countries/vg.svg', 1, NULL, NULL, NULL),
(271, 'Virgin Islands, U.S.', 'VI', '+1340', 'https://cdn.kcak11.com/CountryFlags/countries/vi.svg', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `academic_year_id` int(11) DEFAULT NULL,
  `short_name` varchar(40) CHARACTER SET latin1 DEFAULT NULL,
  `full_name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `full_name_hi` varchar(255) CHARACTER SET latin1 NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `academic_level_id` int(11) DEFAULT NULL,
  `duration_type_id` int(11) DEFAULT NULL,
  `duration_count` int(11) DEFAULT NULL,
  `academic_type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_fee` float(9,2) DEFAULT 0.00,
  `remark` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `academic_year_id`, `short_name`, `full_name`, `full_name_hi`, `is_active`, `academic_level_id`, `duration_type_id`, `duration_count`, `academic_type`, `exam_fee`, `remark`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'BA', 'Bachelor Of Arts', '', 1, 1, 1, 6, '', 0.00, NULL, '2022-11-13 08:41:41', '2022-11-13 08:41:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_fees`
--

CREATE TABLE `course_fees` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `duration_type_number` int(11) NOT NULL,
  `fees_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_fees`
--

INSERT INTO `course_fees` (`id`, `course_id`, `duration_type_number`, `fees_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 1, 1, '2022-11-13 12:31:27', 0, '2022-11-13 12:31:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `districts_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countries_id` bigint(20) UNSIGNED DEFAULT NULL,
  `states_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `states_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `districts_name`, `countries_id`, `states_id`, `status`, `created_at`, `updated_at`, `deleted_at`, `states_name`) VALUES
(1, 'Nicobar', 102, 1, 1, NULL, NULL, NULL, 'Andaman Nicobar'),
(2, 'North Middle Andaman', 102, 1, 1, NULL, NULL, NULL, 'Andaman Nicobar'),
(3, 'South Andaman', 102, 1, 1, NULL, NULL, NULL, 'Andaman Nicobar'),
(4, 'Anantapur', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(5, 'Chittoor', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(6, 'East Godavari', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(7, 'Guntur', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(8, 'Kadapa', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(9, 'Krishna', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(10, 'Kurnool', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(11, 'Nellore', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(12, 'Prakasam', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(13, 'Srikakulam', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(14, 'Visakhapatnam', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(15, 'Vizianagaram', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(16, 'West Godavari', 102, 2, 1, NULL, NULL, NULL, 'Andhra Pradesh'),
(17, 'Anjaw', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(18, 'Changlang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(19, 'Dibang Valley', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(20, 'East Kameng', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(21, 'East Siang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(22, 'Kamle', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(23, 'Kra Daadi', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(24, 'Kurung Kumey', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(25, 'Lepa Rada', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(26, 'Lohit', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(27, 'Longding', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(28, 'Lower Dibang Valley', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(29, 'Lower Siang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(30, 'Lower Subansiri', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(31, 'Namsai', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(32, 'Pakke Kessang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(33, 'Papum Pare', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(34, 'Shi Yomi', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(35, 'Siang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(36, 'Tawang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(37, 'Tirap', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(38, 'Upper Siang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(39, 'Upper Subansiri', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(40, 'West Kameng', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(41, 'West Siang', 102, 3, 1, NULL, NULL, NULL, 'Arunachal Pradesh'),
(42, 'Bajali', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(43, 'Baksa', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(44, 'Barpeta', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(45, 'Biswanath', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(46, 'Bongaigaon', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(47, 'Cachar', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(48, 'Charaideo', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(49, 'Chirang', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(50, 'Darrang', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(51, 'Dhemaji', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(52, 'Dhubri', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(53, 'Dibrugarh', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(54, 'Dima Hasao', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(55, 'Goalpara', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(56, 'Golaghat', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(57, 'Hailakandi', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(58, 'Hojai', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(59, 'Jorhat', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(60, 'Kamrup', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(61, 'Kamrup Metropolitan', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(62, 'Karbi Anglong', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(63, 'Karimganj', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(64, 'Kokrajhar', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(65, 'Lakhimpur', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(66, 'Majuli', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(67, 'Morigaon', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(68, 'Nagaon', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(69, 'Nalbari', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(70, 'Sivasagar', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(71, 'Sonitpur', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(72, 'South Salmara-Mankachar', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(73, 'Tinsukia', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(74, 'Udalguri', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(75, 'West Karbi Anglong', 102, 4, 1, NULL, NULL, NULL, 'Assam'),
(76, 'Araria', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(77, 'Arwal', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(78, 'Aurangabad', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(79, 'Banka', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(80, 'Begusarai', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(81, 'Bhagalpur', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(82, 'Bhojpur', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(83, 'Buxar', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(84, 'Darbhanga', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(85, 'East Champaran', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(86, 'Gaya', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(87, 'Gopalganj', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(88, 'Jamui', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(89, 'Jehanabad', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(90, 'Kaimur', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(91, 'Katihar', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(92, 'Khagaria', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(93, 'Kishanganj', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(94, 'Lakhisarai', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(95, 'Madhepura', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(96, 'Madhubani', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(97, 'Munger', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(98, 'Muzaffarpur', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(99, 'Nalanda', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(100, 'Nawada', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(101, 'Patna', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(102, 'Purnia', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(103, 'Rohtas', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(104, 'Saharsa', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(105, 'Samastipur', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(106, 'Saran', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(107, 'Sheikhpura', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(108, 'Sheohar', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(109, 'Sitamarhi', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(110, 'Siwan', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(111, 'Supaul', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(112, 'Vaishali', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(113, 'West Champaran', 102, 5, 1, NULL, NULL, NULL, 'Bihar'),
(114, 'Chandigarh', 102, 6, 1, NULL, NULL, NULL, 'Chandigarh'),
(115, 'Balod', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(116, 'Baloda Bazar', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(117, 'Balrampur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(118, 'Bastar', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(119, 'Bemetara', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(120, 'Bijapur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(121, 'Bilaspur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(122, 'Dantewada', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(123, 'Dhamtari', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(124, 'Durg', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(125, 'Gariaband', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(126, 'Gaurela Pendra Marwahi', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(127, 'Janjgir Champa', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(128, 'Jashpur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(129, 'Kabirdham', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(130, 'Kanker', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(131, 'Kondagaon', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(132, 'Korba', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(133, 'Koriya', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(134, 'Mahasamund', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(135, 'Manendragarh', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(136, 'Mohla Manpur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(137, 'Mungeli', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(138, 'Narayanpur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(139, 'Raigarh', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(140, 'Raipur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(141, 'Rajnandgaon', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(142, 'Sakti', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(143, 'Sarangarh Bilaigarh', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(144, 'Sukma', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(145, 'Surajpur', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(146, 'Surguja', 102, 7, 1, NULL, NULL, NULL, 'Chhattisgarh'),
(147, 'Dadra and Nagar Haveli', 102, 8, 1, NULL, NULL, NULL, 'Dadra Nagar Haveli and Daman and Diu'),
(148, 'Daman', 102, 38, 1, NULL, NULL, NULL, 'Dadra Nagar Haveli and Daman and Diu'),
(149, 'Diu', 102, 38, 1, NULL, NULL, NULL, 'Dadra Nagar Haveli and Daman and Diu'),
(150, 'Central Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(151, 'East Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(152, 'New Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(153, 'North Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(154, 'North East Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(155, 'North West Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(156, 'Shahdara', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(157, 'South Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(158, 'South East Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(159, 'South West Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(160, 'West Delhi', 102, 9, 1, NULL, NULL, NULL, 'Delhi'),
(161, 'North Goa', 102, 10, 1, NULL, NULL, NULL, 'Goa'),
(162, 'South Goa', 102, 10, 1, NULL, NULL, NULL, 'Goa'),
(163, 'Ahmedabad', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(164, 'Amreli', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(165, 'Anand', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(166, 'Aravalli', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(167, 'Banaskantha', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(168, 'Bharuch', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(169, 'Bhavnagar', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(170, 'Botad', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(171, 'Chhota Udaipur', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(172, 'Dahod', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(173, 'Dang', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(174, 'Devbhoomi Dwarka', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(175, 'Gandhinagar', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(176, 'Gir Somnath', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(177, 'Jamnagar', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(178, 'Junagadh', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(179, 'Kheda', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(180, 'Kutch', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(181, 'Mahisagar', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(182, 'Mehsana', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(183, 'Morbi', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(184, 'Narmada', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(185, 'Navsari', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(186, 'Panchmahal', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(187, 'Patan', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(188, 'Porbandar', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(189, 'Rajkot', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(190, 'Sabarkantha', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(191, 'Surat', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(192, 'Surendranagar', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(193, 'Tapi', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(194, 'Vadodara', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(195, 'Valsad', 102, 11, 1, NULL, NULL, NULL, 'Gujarat'),
(196, 'Ambala', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(197, 'Bhiwani', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(198, 'Charkhi Dadri', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(199, 'Faridabad', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(200, 'Fatehabad', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(201, 'Gurugram', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(202, 'Hisar', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(203, 'Jhajjar', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(204, 'Jind', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(205, 'Kaithal', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(206, 'Karnal', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(207, 'Kurukshetra', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(208, 'Mahendragarh', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(209, 'Mewat', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(210, 'Palwal', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(211, 'Panchkula', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(212, 'Panipat', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(213, 'Rewari', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(214, 'Rohtak', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(215, 'Sirsa', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(216, 'Sonipat', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(217, 'Yamunanagar', 102, 12, 1, NULL, NULL, NULL, 'Haryana'),
(218, 'Bilaspur', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(219, 'Chamba', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(220, 'Hamirpur', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(221, 'Kangra', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(222, 'Kinnaur', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(223, 'Kullu', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(224, 'Lahaul Spiti', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(225, 'Mandi', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(226, 'Shimla', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(227, 'Sirmaur', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(228, 'Solan', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(229, 'Una', 102, 13, 1, NULL, NULL, NULL, 'Himachal Pradesh'),
(230, 'Anantnag', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(231, 'Bandipora', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(232, 'Baramulla', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(233, 'Budgam', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(234, 'Doda', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(235, 'Ganderbal', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(236, 'Jammu', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(237, 'Kathua', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(238, 'Kishtwar', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(239, 'Kulgam', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(240, 'Kupwara', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(241, 'Poonch', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(242, 'Pulwama', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(243, 'Rajouri', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(244, 'Ramban', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(245, 'Reasi', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(246, 'Samba', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(247, 'Shopian', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(248, 'Srinagar', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(249, 'Udhampur', 102, 14, 1, NULL, NULL, NULL, 'Jammu Kashmir'),
(250, 'Bokaro', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(251, 'Chatra', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(252, 'Deoghar', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(253, 'Dhanbad', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(254, 'Dumka', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(255, 'East Singhbhum', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(256, 'Garhwa', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(257, 'Giridih', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(258, 'Godda', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(259, 'Gumla', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(260, 'Hazaribagh', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(261, 'Jamtara', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(262, 'Khunti', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(263, 'Koderma', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(264, 'Latehar', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(265, 'Lohardaga', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(266, 'Pakur', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(267, 'Palamu', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(268, 'Ramgarh', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(269, 'Ranchi', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(270, 'Sahebganj', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(271, 'Seraikela Kharsawan', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(272, 'Simdega', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(273, 'West Singhbhum', 102, 15, 1, NULL, NULL, NULL, 'Jharkhand'),
(274, 'Bagalkot', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(275, 'Bangalore Rural', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(276, 'Bangalore Urban', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(277, 'Belgaum', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(278, 'Bellary', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(279, 'Bidar', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(280, 'Chamarajanagar', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(281, 'Chikkaballapur', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(282, 'Chikkamagaluru', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(283, 'Chitradurga', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(284, 'Dakshina Kannada', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(285, 'Davanagere', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(286, 'Dharwad', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(287, 'Gadag', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(288, 'Gulbarga', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(289, 'Hassan', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(290, 'Haveri', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(291, 'Kodagu', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(292, 'Kolar', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(293, 'Koppal', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(294, 'Mandya', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(295, 'Mysore', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(296, 'Raichur', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(297, 'Ramanagara', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(298, 'Shimoga', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(299, 'Tumkur', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(300, 'Udupi', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(301, 'Uttara Kannada', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(302, 'Vijayanagara', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(303, 'Vijayapura', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(304, 'Yadgir', 102, 16, 1, NULL, NULL, NULL, 'Karnataka'),
(305, 'Alappuzha', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(306, 'Ernakulam', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(307, 'Idukki', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(308, 'Kannur', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(309, 'Kasaragod', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(310, 'Kollam', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(311, 'Kottayam', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(312, 'Kozhikode', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(313, 'Malappuram', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(314, 'Palakkad', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(315, 'Pathanamthitta', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(316, 'Thiruvananthapuram', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(317, 'Thrissur', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(318, 'Wayanad', 102, 17, 1, NULL, NULL, NULL, 'Kerala'),
(319, 'Kargil', 102, 18, 1, NULL, NULL, NULL, 'Ladakh'),
(320, 'Leh', 102, 18, 1, NULL, NULL, NULL, 'Ladakh'),
(321, 'Lakshadweep', 102, 19, 1, NULL, NULL, NULL, 'Lakshadweep'),
(322, 'Agar Malwa', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(323, 'Alirajpur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(324, 'Anuppur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(325, 'Ashoknagar', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(326, 'Balaghat', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(327, 'Barwani', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(328, 'Betul', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(329, 'Bhind', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(330, 'Bhopal', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(331, 'Burhanpur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(332, 'Chachaura', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(333, 'Chhatarpur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(334, 'Chhindwara', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(335, 'Damoh', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(336, 'Datia', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(337, 'Dewas', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(338, 'Dhar', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(339, 'Dindori', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(340, 'Guna', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(341, 'Gwalior', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(342, 'Harda', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(343, 'Hoshangabad', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(344, 'Indore', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(345, 'Jabalpur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(346, 'Jhabua', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(347, 'Katni', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(348, 'Khandwa', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(349, 'Khargone', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(350, 'Maihar', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(351, 'Mandla', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(352, 'Mandsaur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(353, 'Morena', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(354, 'Nagda', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(355, 'Narsinghpur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(356, 'Neemuch', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(357, 'Niwari', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(358, 'Panna', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(359, 'Raisen', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(360, 'Rajgarh', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(361, 'Ratlam', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(362, 'Rewa', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(363, 'Sagar', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(364, 'Satna', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(365, 'Sehore', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(366, 'Seoni', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(367, 'Shahdol', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(368, 'Shajapur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(369, 'Sheopur', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(370, 'Shivpuri', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(371, 'Sidhi', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(372, 'Singrauli', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(373, 'Tikamgarh', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(374, 'Ujjain', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(375, 'Umaria', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(376, 'Vidisha', 102, 20, 1, NULL, NULL, NULL, 'Madhya Pradesh'),
(377, 'Ahmednagar', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(378, 'Akola', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(379, 'Amravati', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(380, 'Aurangabad', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(381, 'Beed', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(382, 'Bhandara', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(383, 'Buldhana', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(384, 'Chandrapur', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(385, 'Dhule', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(386, 'Gadchiroli', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(387, 'Gondia', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(388, 'Hingoli', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(389, 'Jalgaon', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(390, 'Jalna', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(391, 'Kolhapur', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(392, 'Latur', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(393, 'Mumbai City', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(394, 'Mumbai Suburban', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(395, 'Nagpur', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(396, 'Nanded', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(397, 'Nandurbar', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(398, 'Nashik', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(399, 'Osmanabad', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(400, 'Palghar', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(401, 'Parbhani', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(402, 'Pune', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(403, 'Raigad', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(404, 'Ratnagiri', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(405, 'Sangli', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(406, 'Satara', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(407, 'Sindhudurg', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(408, 'Solapur', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(409, 'Thane', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(410, 'Wardha', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(411, 'Washim', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(412, 'Yavatmal', 102, 21, 1, NULL, NULL, NULL, 'Maharashtra'),
(413, 'Bishnupur', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(414, 'Chandel', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(415, 'Churachandpur', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(416, 'Imphal East', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(417, 'Imphal West', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(418, 'Jiribam', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(419, 'Kakching', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(420, 'Kamjong', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(421, 'Kangpokpi', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(422, 'Noney', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(423, 'Pherzawl', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(424, 'Senapati', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(425, 'Tamenglong', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(426, 'Tengnoupal', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(427, 'Thoubal', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(428, 'Ukhrul', 102, 22, 1, NULL, NULL, NULL, 'Manipur'),
(429, 'East Garo Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(430, 'East Jaintia Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(431, 'East Khasi Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(432, 'Mairang', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(433, 'North Garo Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(434, 'Ri Bhoi', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(435, 'South Garo Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(436, 'South West Garo Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(437, 'South West Khasi Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(438, 'West Garo Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(439, 'West Jaintia Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(440, 'West Khasi Hills', 102, 23, 1, NULL, NULL, NULL, 'Meghalaya'),
(441, 'Aizawl', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(442, 'Champhai', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(443, 'Hnahthial', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(444, 'Khawzawl', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(445, 'Kolasib', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(446, 'Lawngtlai', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(447, 'Lunglei', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(448, 'Mamit', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(449, 'Saiha', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(450, 'Saitual', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(451, 'Serchhip', 102, 24, 1, NULL, NULL, NULL, 'Mizoram'),
(452, 'Chumukedima', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(453, 'Dimapur', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(454, 'Kiphire', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(455, 'Kohima', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(456, 'Longleng', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(457, 'Mokokchung', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(458, 'Mon', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(459, 'Niuland', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(460, 'Noklak', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(461, 'Peren', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(462, 'Phek', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(463, 'Tseminyu', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(464, 'Tuensang', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(465, 'Wokha', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(466, 'Zunheboto', 102, 25, 1, NULL, NULL, NULL, 'Nagaland'),
(467, 'Angul', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(468, 'Balangir', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(469, 'Balasore', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(470, 'Bargarh', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(471, 'Bhadrak', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(472, 'Boudh', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(473, 'Cuttack', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(474, 'Debagarh', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(475, 'Dhenkanal', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(476, 'Gajapati', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(477, 'Ganjam', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(478, 'Jagatsinghpur', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(479, 'Jajpur', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(480, 'Jharsuguda', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(481, 'Kalahandi', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(482, 'Kandhamal', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(483, 'Kendrapara', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(484, 'Kendujhar', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(485, 'Khordha', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(486, 'Koraput', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(487, 'Malkangiri', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(488, 'Mayurbhanj', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(489, 'Nabarangpur', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(490, 'Nayagarh', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(491, 'Nuapada', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(492, 'Puri', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(493, 'Rayagada', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(494, 'Sambalpur', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(495, 'Subarnapur', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(496, 'Sundergarh', 102, 26, 1, NULL, NULL, NULL, 'Odisha'),
(497, 'Karaikal', 102, 27, 1, NULL, NULL, NULL, 'Puducherry'),
(498, 'Mahe', 102, 27, 1, NULL, NULL, NULL, 'Puducherry'),
(499, 'Puducherry', 102, 27, 1, NULL, NULL, NULL, 'Puducherry'),
(500, 'Yanam', 102, 27, 1, NULL, NULL, NULL, 'Puducherry'),
(501, 'Amritsar', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(502, 'Barnala', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(503, 'Bathinda', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(504, 'Faridkot', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(505, 'Fatehgarh Sahib', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(506, 'Fazilka', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(507, 'Firozpur', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(508, 'Gurdaspur', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(509, 'Hoshiarpur', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(510, 'Jalandhar', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(511, 'Kapurthala', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(512, 'Ludhiana', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(513, 'Malerkotla', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(514, 'Mansa', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(515, 'Moga', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(516, 'Mohali', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(517, 'Muktsar', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(518, 'Pathankot', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(519, 'Patiala', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(520, 'Rupnagar', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(521, 'Sangrur', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(522, 'Shaheed Bhagat Singh Nagar', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(523, 'Tarn Taran', 102, 28, 1, NULL, NULL, NULL, 'Punjab'),
(524, 'Ajmer', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(525, 'Alwar', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(526, 'Banswara', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(527, 'Baran', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(528, 'Barmer', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(529, 'Bharatpur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(530, 'Bhilwara', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(531, 'Bikaner', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(532, 'Bundi', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(533, 'Chittorgarh', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(534, 'Churu', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(535, 'Dausa', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(536, 'Dholpur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(537, 'Dungarpur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(538, 'Hanumangarh', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(539, 'Jaipur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(540, 'Jaisalmer', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(541, 'Jalore', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(542, 'Jhalawar', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(543, 'Jhunjhunu', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(544, 'Jodhpur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(545, 'Karauli', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(546, 'Kota', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(547, 'Nagaur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(548, 'Pali', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(549, 'Pratapgarh', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(550, 'Rajsamand', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(551, 'Sawai Madhopur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(552, 'Sikar', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(553, 'Sirohi', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(554, 'Sri Ganganagar', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(555, 'Tonk', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(556, 'Udaipur', 102, 29, 1, NULL, NULL, NULL, 'Rajasthan'),
(557, 'East Sikkim', 102, 30, 1, NULL, NULL, NULL, 'Sikkim'),
(558, 'North Sikkim', 102, 30, 1, NULL, NULL, NULL, 'Sikkim'),
(559, 'South Sikkim', 102, 30, 1, NULL, NULL, NULL, 'Sikkim'),
(560, 'West Sikkim', 102, 30, 1, NULL, NULL, NULL, 'Sikkim'),
(561, 'Ariyalur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(562, 'Chengalpattu', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(563, 'Chennai', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(564, 'Coimbatore', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(565, 'Cuddalore', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(566, 'Dharmapuri', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(567, 'Dindigul', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(568, 'Erode', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(569, 'Kallakurichi', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(570, 'Kanchipuram', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(571, 'Kanyakumari', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(572, 'Karur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(573, 'Krishnagiri', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(574, 'Madurai', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(575, 'Mayiladuthurai', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(576, 'Nagapattinam', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(577, 'Namakkal', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(578, 'Nilgiris', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(579, 'Perambalur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(580, 'Pudukkottai', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(581, 'Ramanathapuram', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(582, 'Ranipet', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(583, 'Salem', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(584, 'Sivaganga', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(585, 'Tenkasi', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(586, 'Thanjavur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(587, 'Theni', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(588, 'Thoothukudi', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(589, 'Tiruchirappalli', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(590, 'Tirunelveli', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(591, 'Tirupattur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(592, 'Tiruppur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(593, 'Tiruvallur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(594, 'Tiruvannamalai', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(595, 'Tiruvarur', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(596, 'Vellore', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(597, 'Viluppuram', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(598, 'Virudhunagar', 102, 31, 1, NULL, NULL, NULL, 'Tamil Nadu'),
(599, 'Adilabad', 102, 32, 1, NULL, '2022-03-03 04:15:55', NULL, 'Telangana'),
(600, 'Bhadradri Kothagudem', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(601, 'Hanamkonda', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(602, 'Hyderabad', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(603, 'Jagtial', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(604, 'Jangaon', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(605, 'Jayashankar', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(606, 'Jogulamba', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(607, 'Kamareddy', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(608, 'Karimnagar', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(609, 'Khammam', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(610, 'Komaram Bheem', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(611, 'Mahabubabad', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(612, 'Mahbubnagar', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(613, 'Mancherial', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(614, 'Medak', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(615, 'Medchal', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(616, 'Mulugu', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(617, 'Nagarkurnool', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(618, 'Nalgonda', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(619, 'Narayanpet', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(620, 'Nirmal', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(621, 'Nizamabad', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(622, 'Peddapalli', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(623, 'Rajanna Sircilla', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(624, 'Ranga Reddy', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(625, 'Sangareddy', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(626, 'Siddipet', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(627, 'Suryapet', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(628, 'Vikarabad', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(629, 'Wanaparthy', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(630, 'Warangal', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(631, 'Yadadri Bhuvanagiri', 102, 32, 1, NULL, NULL, NULL, 'Telangana'),
(632, 'Dhalai', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(633, 'Gomati', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(634, 'Khowai', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(635, 'North Tripura', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(636, 'Sepahijala', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(637, 'South Tripura', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(638, 'Unakoti', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(639, 'West Tripura', 102, 33, 1, NULL, NULL, NULL, 'Tripura'),
(640, 'Agra', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(641, 'Aligarh', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(642, 'Ambedkar Nagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(643, 'Amethi', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(644, 'Amroha', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(645, 'Auraiya', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(646, 'Ayodhya', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(647, 'Azamgarh', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(648, 'Baghpat', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(649, 'Bahraich', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(650, 'Ballia', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(651, 'Balrampur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(652, 'Banda', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(653, 'Barabanki', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(654, 'Bareilly', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(655, 'Basti', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(656, 'Bhadohi', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(657, 'Bijnor', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(658, 'Budaun', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(659, 'Bulandshahr', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(660, 'Chandauli', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(661, 'Chitrakoot', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(662, 'Deoria', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(663, 'Etah', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(664, 'Etawah', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(665, 'Farrukhabad', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(666, 'Fatehpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(667, 'Firozabad', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(668, 'Gautam Buddha Nagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(669, 'Ghaziabad', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(670, 'Ghazipur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(671, 'Gonda', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(672, 'Gorakhpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(673, 'Hamirpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(674, 'Hapur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(675, 'Hardoi', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(676, 'Hathras', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(677, 'Jalaun', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(678, 'Jaunpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(679, 'Jhansi', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(680, 'Kannauj', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(681, 'Kanpur Dehat', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(682, 'Kanpur Nagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(683, 'Kasganj', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(684, 'Kaushambi', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(685, 'Kheri', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(686, 'Kushinagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(687, 'Lalitpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(688, 'Lucknow', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(689, 'Maharajganj', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(690, 'Mahoba', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(691, 'Mainpuri', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(692, 'Mathura', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(693, 'Mau', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(694, 'Meerut', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(695, 'Mirzapur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(696, 'Moradabad', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(697, 'Muzaffarnagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(698, 'Pilibhit', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(699, 'Pratapgarh', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(700, 'Prayagraj', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(701, 'Raebareli', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(702, 'Rampur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(703, 'Saharanpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(704, 'Sambhal', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(705, 'Sant Kabir Nagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(706, 'Shahjahanpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(707, 'Shamli', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(708, 'Shravasti', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(709, 'Siddharthnagar', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(710, 'Sitapur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(711, 'Sonbhadra', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(712, 'Sultanpur', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(713, 'Unnao', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(714, 'Varanasi', 102, 34, 1, NULL, NULL, NULL, 'Uttar Pradesh'),
(715, 'Almora', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(716, 'Bageshwar', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(717, 'Chamoli', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(718, 'Champawat', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(719, 'Dehradun', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(720, 'Haridwar', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(721, 'Nainital', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(722, 'Pauri', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(723, 'Pithoragarh', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(724, 'Rudraprayag', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(725, 'Tehri', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(726, 'Udham Singh Nagar', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(727, 'Uttarkashi', 102, 35, 1, NULL, NULL, NULL, 'Uttarakhand'),
(728, 'Alipurduar', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(729, 'Bankura', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(730, 'Birbhum', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(731, 'Cooch Behar', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(732, 'Dakshin Dinajpur', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(733, 'Darjeeling', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(734, 'Hooghly', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(735, 'Howrah', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(736, 'Jalpaiguri', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(737, 'Jhargram', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(738, 'Kalimpong', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(739, 'Kolkata', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(740, 'Malda', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(741, 'Murshidabad', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(742, 'Nadia', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(743, 'North 24 Parganas', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(744, 'Paschim Bardhaman', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(745, 'Paschim Medinipur', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(746, 'Purba Bardhaman', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(747, 'Purba Medinipur', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(748, 'Purulia', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(749, 'South 24 Parganas', 102, 36, 1, NULL, NULL, NULL, 'West Bengal'),
(750, 'Uttar Dinajpur', 102, 36, 1, NULL, NULL, NULL, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `duration_type`
--

CREATE TABLE `duration_type` (
  `id` int(11) NOT NULL,
  `duration_type` varchar(30) NOT NULL,
  `duration_desc` varchar(100) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `duration_type`
--

INSERT INTO `duration_type` (`id`, `duration_type`, `duration_desc`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Semester', 'This is semester system', 1, '2022-11-13 07:58:53', 0, '2022-11-13 07:58:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_category`
--

CREATE TABLE `fees_category` (
  `id` int(11) NOT NULL,
  `fees_category` varchar(50) NOT NULL,
  `level_id` int(11) NOT NULL,
  `duration_type_number` tinyint(4) NOT NULL,
  `amount` int(11) NOT NULL,
  `is_aided_sfs` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fees_category`
--

INSERT INTO `fees_category` (`id`, `fees_category`, `level_id`, `duration_type_number`, `amount`, `is_aided_sfs`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'BA', 1, 1, 300, NULL, 1, '2022-11-13 07:54:58', 0, '2022-11-13 07:54:58', NULL),
(2, 'BA Sports', 2, 0, 50, NULL, 1, '2022-11-29 12:22:08', 0, '2022-11-29 12:22:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_receipt`
--

CREATE TABLE `fees_receipt` (
  `id` int(11) NOT NULL,
  `academic_year_for_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `duration_type_id` int(11) NOT NULL,
  `duration_type_number` tinyint(1) NOT NULL,
  `total_fees` double(7,2) NOT NULL,
  `pending_fees` double(7,2) NOT NULL,
  `submitted_fees` double(7,2) NOT NULL,
  `is_complete` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fees_receipt`
--

INSERT INTO `fees_receipt` (`id`, `academic_year_for_id`, `student_id`, `course_id`, `duration_type_id`, `duration_type_number`, `total_fees`, `pending_fees`, `submitted_fees`, `is_complete`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 1, 1, 1, 1, 300.00, 0.00, 301.00, 1, '2022-12-07 09:27:15', 10, '2022-12-07 09:32:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_receipt_details`
--

CREATE TABLE `fees_receipt_details` (
  `id` int(11) NOT NULL,
  `fees_receipt_id` int(11) NOT NULL,
  `fees_category_id` int(11) NOT NULL,
  `fees_amount` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_receipt_details`
--

INSERT INTO `fees_receipt_details` (`id`, `fees_receipt_id`, `fees_category_id`, `fees_amount`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 1, 300, '2022-12-07 03:57:16', 10, '2022-12-07 09:27:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fees_receipt_document`
--

CREATE TABLE `fees_receipt_document` (
  `id` int(11) NOT NULL,
  `fees_receipt_id` int(11) NOT NULL,
  `document_no` varchar(40) NOT NULL,
  `document_path` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fees_receipt_pending`
--

CREATE TABLE `fees_receipt_pending` (
  `id` int(11) NOT NULL,
  `fees_receipt_id` int(11) NOT NULL,
  `pending_fees` int(11) NOT NULL,
  `previous_paid_fees` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees_receipt_pending`
--

INSERT INTO `fees_receipt_pending` (`id`, `fees_receipt_id`, `pending_fees`, `previous_paid_fees`, `created_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(6, 1, 201, 100, 10, '2022-12-07 09:32:24', '2022-12-07 09:32:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(16) NOT NULL,
  `created_by` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `name`, `type`, `created_by`, `created_at`, `is_active`, `updated_at`, `updated_by`) VALUES
(1, 'UNDER GRADUATE', 'UG', '', '2022-11-13 07:54:19', 1, '2022-11-13 07:54:19', NULL),
(2, 'POST GRADUATE', 'SD', '', '2022-11-26 10:58:41', 1, '2022-11-26 10:58:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_notification`
--

CREATE TABLE `member_notification` (
  `id` int(11) NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_notification`
--

INSERT INTO `member_notification` (`id`, `msg`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Congratulations! You have qualified for next round.', 1, '2022-07-12 20:30:29', '2022-07-12 20:30:29'),
(3, 'Sorry! You have not qualified for next round.', 1, '2022-07-13 11:04:26', '2022-07-16 12:08:31'),
(4, 'This is for you brother keep calm play temple run.', 1, '2022-07-16 13:07:48', '2022-07-16 13:07:48'),
(5, 'this is demo test', 1, '2022-07-16 13:16:33', '2022-07-16 13:16:33'),
(6, 'this is testtttt', 1, '2022-07-16 13:20:20', '2022-07-16 13:20:20'),
(7, 'testing', 1, '2022-07-17 15:46:38', '2022-07-17 15:46:38'),
(8, 'testing vishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvishwa vijeta times lucknowvish', 0, '2022-07-17 15:51:01', '2022-07-17 15:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `member_notification_data`
--

CREATE TABLE `member_notification_data` (
  `id` int(11) NOT NULL,
  `member_notification_id` int(11) DEFAULT NULL,
  `msg_to` int(11) DEFAULT NULL,
  `msg_from` int(11) DEFAULT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_notification_data`
--

INSERT INTO `member_notification_data` (`id`, `member_notification_id`, `msg_to`, `msg_from`, `seen`, `created_at`, `updated_at`) VALUES
(1, 1, 264, 1, 1, '2022-07-12 20:33:49', '2022-07-17 07:34:38'),
(2, 3, 264, 10, 1, '2022-07-13 11:04:26', '2022-07-17 07:34:38'),
(3, 3, 12, 10, 0, '2022-07-13 11:04:26', '2022-07-13 11:04:26'),
(4, 4, 264, 10, 1, '2022-07-16 13:07:48', '2022-07-17 07:34:38'),
(5, 5, 4, 10, 0, '2022-07-16 13:16:33', '2022-07-16 13:16:33'),
(6, 6, 264, 10, 1, '2022-07-16 13:20:20', '2022-07-17 07:34:38'),
(7, 7, 271, 10, 1, '2022-07-17 15:46:38', '2022-07-17 16:14:16'),
(8, 8, 271, 10, 1, '2022-07-17 15:51:01', '2022-07-17 16:14:16'),
(9, 8, 272, 10, 0, '2022-07-17 15:51:01', '2022-07-17 15:51:01'),
(10, 8, 275, 10, 0, '2022-07-17 15:51:01', '2022-07-17 15:51:01'),
(11, 1, 119, 277, 0, '2022-08-27 08:53:28', '2022-08-27 08:53:28'),
(12, 1, 119, 285, 0, '2022-08-27 11:48:05', '2022-08-27 11:48:05');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_10_27_172019_create_sessions_table', 1),
(7, '2021_11_05_172535_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(14, 'App\\Models\\User', 303),
(17, 'App\\Models\\User', 303),
(15, 'App\\Models\\User', 303),
(16, 'App\\Models\\User', 303),
(31, 'App\\Models\\User', 303),
(33, 'App\\Models\\User', 303),
(32, 'App\\Models\\User', 303),
(42, 'App\\Models\\User', 303),
(30, 'App\\Models\\User', 303),
(2, 'App\\Models\\User', 303),
(27, 'App\\Models\\User', 303),
(29, 'App\\Models\\User', 303),
(28, 'App\\Models\\User', 303),
(26, 'App\\Models\\User', 303),
(23, 'App\\Models\\User', 303),
(25, 'App\\Models\\User', 303),
(24, 'App\\Models\\User', 303),
(22, 'App\\Models\\User', 303),
(39, 'App\\Models\\User', 303),
(41, 'App\\Models\\User', 303),
(40, 'App\\Models\\User', 303),
(38, 'App\\Models\\User', 303),
(12, 'App\\Models\\User', 303),
(11, 'App\\Models\\User', 303),
(10, 'App\\Models\\User', 303),
(9, 'App\\Models\\User', 303),
(19, 'App\\Models\\User', 303),
(21, 'App\\Models\\User', 303),
(20, 'App\\Models\\User', 303),
(18, 'App\\Models\\User', 303),
(4, 'App\\Models\\User', 303),
(8, 'App\\Models\\User', 303),
(7, 'App\\Models\\User', 303),
(3, 'App\\Models\\User', 303),
(35, 'App\\Models\\User', 303),
(37, 'App\\Models\\User', 303),
(36, 'App\\Models\\User', 303),
(34, 'App\\Models\\User', 303),
(1, 'App\\Models\\User', 303),
(5, 'App\\Models\\User', 303),
(6, 'App\\Models\\User', 303),
(13, 'App\\Models\\User', 303),
(43, 'App\\Models\\User', 303),
(44, 'App\\Models\\User', 303),
(45, 'App\\Models\\User', 303),
(46, 'App\\Models\\User', 303),
(47, 'App\\Models\\User', 303),
(15, 'App\\Models\\User', 10),
(17, 'App\\Models\\User', 10),
(16, 'App\\Models\\User', 10),
(14, 'App\\Models\\User', 10),
(31, 'App\\Models\\User', 10),
(33, 'App\\Models\\User', 10),
(32, 'App\\Models\\User', 10),
(42, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 10),
(43, 'App\\Models\\User', 10),
(27, 'App\\Models\\User', 10),
(29, 'App\\Models\\User', 10),
(28, 'App\\Models\\User', 10),
(26, 'App\\Models\\User', 10),
(23, 'App\\Models\\User', 10),
(10, 'App\\Models\\User', 10),
(12, 'App\\Models\\User', 10),
(11, 'App\\Models\\User', 10),
(9, 'App\\Models\\User', 10),
(45, 'App\\Models\\User', 10),
(19, 'App\\Models\\User', 10),
(21, 'App\\Models\\User', 10),
(20, 'App\\Models\\User', 10),
(18, 'App\\Models\\User', 10),
(4, 'App\\Models\\User', 10),
(6, 'App\\Models\\User', 10),
(5, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 10),
(35, 'App\\Models\\User', 10),
(37, 'App\\Models\\User', 10),
(36, 'App\\Models\\User', 10),
(44, 'App\\Models\\User', 10),
(34, 'App\\Models\\User', 10),
(7, 'App\\Models\\User', 10),
(13, 'App\\Models\\User', 10),
(8, 'App\\Models\\User', 10),
(47, 'App\\Models\\User', 10),
(1, 'App\\Models\\User', 10),
(14, 'App\\Models\\User', 1),
(17, 'App\\Models\\User', 1),
(15, 'App\\Models\\User', 1),
(16, 'App\\Models\\User', 1),
(31, 'App\\Models\\User', 1),
(33, 'App\\Models\\User', 1),
(32, 'App\\Models\\User', 1),
(42, 'App\\Models\\User', 1),
(30, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 1),
(27, 'App\\Models\\User', 1),
(29, 'App\\Models\\User', 1),
(28, 'App\\Models\\User', 1),
(26, 'App\\Models\\User', 1),
(23, 'App\\Models\\User', 1),
(25, 'App\\Models\\User', 1),
(24, 'App\\Models\\User', 1),
(22, 'App\\Models\\User', 1),
(39, 'App\\Models\\User', 1),
(41, 'App\\Models\\User', 1),
(40, 'App\\Models\\User', 1),
(38, 'App\\Models\\User', 1),
(12, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 1),
(10, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 1),
(19, 'App\\Models\\User', 1),
(21, 'App\\Models\\User', 1),
(20, 'App\\Models\\User', 1),
(18, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 1),
(7, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 1),
(35, 'App\\Models\\User', 1),
(37, 'App\\Models\\User', 1),
(36, 'App\\Models\\User', 1),
(34, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 1),
(13, 'App\\Models\\User', 1),
(43, 'App\\Models\\User', 1),
(44, 'App\\Models\\User', 1),
(45, 'App\\Models\\User', 1),
(46, 'App\\Models\\User', 1),
(47, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 2),
(8, 'App\\Models\\User', 5),
(8, 'App\\Models\\User', 8),
(7, 'App\\Models\\User', 11),
(8, 'App\\Models\\User', 12),
(1, 'App\\Models\\User', 13),
(8, 'App\\Models\\User', 261),
(8, 'App\\Models\\User', 262),
(8, 'App\\Models\\User', 263),
(2, 'App\\Models\\User', 264),
(2, 'App\\Models\\User', 265),
(2, 'App\\Models\\User', 266),
(2, 'App\\Models\\User', 267),
(2, 'App\\Models\\User', 268),
(8, 'App\\Models\\User', 269),
(8, 'App\\Models\\User', 270),
(2, 'App\\Models\\User', 271),
(2, 'App\\Models\\User', 272),
(8, 'App\\Models\\User', 273),
(8, 'App\\Models\\User', 274),
(2, 'App\\Models\\User', 275),
(8, 'App\\Models\\User', 276),
(2, 'App\\Models\\User', 277),
(8, 'App\\Models\\User', 278),
(2, 'App\\Models\\User', 279),
(8, 'App\\Models\\User', 280),
(8, 'App\\Models\\User', 281),
(2, 'App\\Models\\User', 282),
(8, 'App\\Models\\User', 283),
(2, 'App\\Models\\User', 284),
(2, 'App\\Models\\User', 285),
(8, 'App\\Models\\User', 286),
(8, 'App\\Models\\User', 287),
(4, 'App\\Models\\User', 288),
(8, 'App\\Models\\User', 289),
(8, 'App\\Models\\User', 290),
(8, 'App\\Models\\User', 291),
(8, 'App\\Models\\User', 292),
(8, 'App\\Models\\User', 293),
(8, 'App\\Models\\User', 294),
(8, 'App\\Models\\User', 295),
(8, 'App\\Models\\User', 296),
(8, 'App\\Models\\User', 297),
(8, 'App\\Models\\User', 298),
(8, 'App\\Models\\User', 299),
(8, 'App\\Models\\User', 300),
(8, 'App\\Models\\User', 301),
(8, 'App\\Models\\User', 302),
(8, 'App\\Models\\User', 304),
(8, 'App\\Models\\User', 305),
(8, 'App\\Models\\User', 306),
(8, 'App\\Models\\User', 307),
(8, 'App\\Models\\User', 308),
(8, 'App\\Models\\User', 309),
(8, 'App\\Models\\User', 310),
(8, 'App\\Models\\User', 311),
(8, 'App\\Models\\User', 312),
(8, 'App\\Models\\User', 313),
(8, 'App\\Models\\User', 314),
(8, 'App\\Models\\User', 315),
(8, 'App\\Models\\User', 316),
(8, 'App\\Models\\User', 317),
(8, 'App\\Models\\User', 318),
(8, 'App\\Models\\User', 319),
(8, 'App\\Models\\User', 320),
(8, 'App\\Models\\User', 321),
(8, 'App\\Models\\User', 322),
(8, 'App\\Models\\User', 323),
(8, 'App\\Models\\User', 324),
(8, 'App\\Models\\User', 325),
(8, 'App\\Models\\User', 326),
(8, 'App\\Models\\User', 327),
(8, 'App\\Models\\User', 328),
(8, 'App\\Models\\User', 329),
(8, 'App\\Models\\User', 330),
(8, 'App\\Models\\User', 331),
(8, 'App\\Models\\User', 332),
(8, 'App\\Models\\User', 333),
(8, 'App\\Models\\User', 334),
(8, 'App\\Models\\User', 335),
(8, 'App\\Models\\User', 336),
(8, 'App\\Models\\User', 337),
(8, 'App\\Models\\User', 338),
(8, 'App\\Models\\User', 339),
(8, 'App\\Models\\User', 340),
(8, 'App\\Models\\User', 341),
(8, 'App\\Models\\User', 342),
(8, 'App\\Models\\User', 343),
(8, 'App\\Models\\User', 344),
(8, 'App\\Models\\User', 345),
(8, 'App\\Models\\User', 346),
(8, 'App\\Models\\User', 347),
(8, 'App\\Models\\User', 348),
(8, 'App\\Models\\User', 349),
(8, 'App\\Models\\User', 350),
(2, 'App\\Models\\User', 351),
(4, 'App\\Models\\User', 352),
(15, 'App\\Models\\User', 353),
(2, 'App\\Models\\User', 354),
(4, 'App\\Models\\User', 355),
(8, 'App\\Models\\User', 356),
(8, 'App\\Models\\User', 357),
(8, 'App\\Models\\User', 358),
(8, 'App\\Models\\User', 359),
(8, 'App\\Models\\User', 360),
(8, 'App\\Models\\User', 361),
(8, 'App\\Models\\User', 362),
(8, 'App\\Models\\User', 363),
(8, 'App\\Models\\User', 364),
(8, 'App\\Models\\User', 365),
(8, 'App\\Models\\User', 366),
(8, 'App\\Models\\User', 367),
(8, 'App\\Models\\User', 368),
(8, 'App\\Models\\User', 369),
(8, 'App\\Models\\User', 370),
(8, 'App\\Models\\User', 371),
(8, 'App\\Models\\User', 372),
(8, 'App\\Models\\User', 373),
(8, 'App\\Models\\User', 374),
(8, 'App\\Models\\User', 375),
(8, 'App\\Models\\User', 376),
(8, 'App\\Models\\User', 377),
(8, 'App\\Models\\User', 378),
(8, 'App\\Models\\User', 379),
(13, 'App\\Models\\User', 303),
(7, 'App\\Models\\User', 10),
(13, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('amarjeet.k0903@gmail.com', 'zfHEs53loaMganFym2EUefjvcRI9vwDVj2K3ZNkcI8l0o3n2lXUMyJekv3N2', '2022-06-20 09:12:14'),
('a1@gmail.com', 'Ju1zkoMQwEwiBuUkyHoOnNlz9lJLwwd4MEkdelTjMPVZ3cByOQKFJQdD57tM', '2022-06-20 08:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `sno` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`sno`, `role`, `permission`) VALUES
(1, 1, 1000),
(2, 1, 2100),
(3, 1, 2105),
(4, 1, 2110),
(5, 1, 2200),
(6, 1, 2205),
(7, 1, 2210),
(8, 1, 2300),
(9, 1, 2305),
(10, 1, 2310),
(11, 1, 2400),
(12, 1, 2405),
(13, 1, 2410),
(14, 1, 2500),
(15, 1, 2505),
(16, 1, 2510),
(17, 1, 2600),
(18, 1, 2605),
(19, 1, 2610),
(20, 1, 2700),
(21, 1, 2705),
(22, 1, 2710),
(23, 1, 2800),
(24, 1, 2805),
(25, 1, 2810),
(26, 1, 4000),
(27, 1, 80100),
(28, 1, 80110),
(29, 1, 80120),
(30, 1, 80130),
(31, 1, 80200),
(32, 1, 80210),
(33, 1, 80220),
(34, 1, 80230),
(35, 1, 4005),
(36, 1, 4010),
(37, 1, 4015);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'users_view', 'web', '2021-11-05 20:34:36', '2022-12-01 04:08:51'),
(2, 'dashboard_index', 'web', '2021-11-05 20:34:47', '2022-12-01 04:07:38'),
(3, 'role_view', 'web', '2021-11-05 20:35:02', '2022-12-01 04:05:59'),
(4, 'role_add', 'web', '2021-12-30 05:21:18', '2022-12-01 04:04:26'),
(5, 'role_edit', 'web', '2022-03-03 06:39:37', '2022-12-01 04:12:10'),
(6, 'role_delete', 'web', '2022-03-03 06:39:37', '2022-12-01 04:11:48'),
(7, 'users_add', 'web', '2022-03-03 06:39:37', '2022-12-01 04:02:59'),
(8, 'users_edit', 'web', '2022-03-03 06:39:37', '2022-12-01 04:03:29'),
(9, 'level_view', 'web', '2022-03-03 06:39:37', '2022-12-01 04:05:48'),
(10, 'level_add', 'web', '2022-03-03 06:39:37', '2022-12-01 04:06:30'),
(11, 'level_edit', 'web', '2022-03-03 06:39:37', '2022-12-01 04:06:42'),
(12, 'level_delete', 'web', '2022-03-03 06:39:37', '2022-12-01 04:06:20'),
(13, 'users_delete', 'web', '2022-07-26 09:21:04', '2022-12-01 04:08:08'),
(14, 'academic_year_view', 'web', NULL, NULL),
(15, 'academic_year_create', 'web', NULL, NULL),
(16, 'academic_year_edit', 'web', NULL, '2022-12-01 04:25:09'),
(17, 'academic_year_destroy', 'web', NULL, NULL),
(18, 'permission_view', 'web', '2022-12-01 04:13:04', '2022-12-01 04:13:04'),
(19, 'permission_add', 'web', '2022-12-01 04:13:15', '2022-12-01 04:13:15'),
(20, 'permission_edit', 'web', '2022-12-01 04:13:25', '2022-12-01 04:13:25'),
(21, 'permission_delete', 'web', '2022-12-01 04:13:34', '2022-12-01 04:13:34'),
(22, 'fees_category_view', 'web', '2022-12-01 04:14:20', '2022-12-01 04:14:36'),
(23, 'fees_category_add', 'web', '2022-12-01 04:15:23', '2022-12-01 04:15:23'),
(24, 'fees_category_edit', 'web', '2022-12-01 04:15:49', '2022-12-01 04:15:49'),
(25, 'fees_category_delete', 'web', '2022-12-01 04:16:23', '2022-12-01 04:16:23'),
(26, 'duration_type_view', 'web', '2022-12-01 04:17:26', '2022-12-01 04:17:26'),
(27, 'duration_type_add', 'web', '2022-12-01 04:17:36', '2022-12-01 04:17:36'),
(28, 'duration_type_edit', 'web', '2022-12-01 04:17:48', '2022-12-01 04:17:48'),
(29, 'duration_type_delete', 'web', '2022-12-01 04:19:16', '2022-12-01 04:19:16'),
(30, 'course_view', 'web', '2022-12-01 04:19:59', '2022-12-01 04:19:59'),
(31, 'course_add', 'web', '2022-12-01 04:20:13', '2022-12-01 04:20:13'),
(32, 'course_edit', 'web', '2022-12-01 04:20:23', '2022-12-01 04:20:23'),
(33, 'course_delete', 'web', '2022-12-01 04:20:36', '2022-12-01 04:20:36'),
(34, 'student_view', 'web', '2022-12-01 04:20:53', '2022-12-01 04:20:53'),
(35, 'student_add', 'web', '2022-12-01 04:21:31', '2022-12-01 04:21:31'),
(36, 'student_edit', 'web', '2022-12-01 04:21:39', '2022-12-01 04:21:39'),
(37, 'student_delete', 'web', '2022-12-01 04:21:51', '2022-12-01 04:21:51'),
(38, 'fees_receipt_view', 'web', '2022-12-01 04:22:09', '2022-12-01 04:22:09'),
(39, 'fees_receipt_add', 'web', '2022-12-01 04:22:17', '2022-12-01 04:22:17'),
(40, 'fees_receipt_edit', 'web', '2022-12-01 04:22:26', '2022-12-01 04:22:26'),
(41, 'fees_receipt_delete', 'web', '2022-12-01 04:22:40', '2022-12-01 04:22:40'),
(42, 'course_fees_map', 'web', '2022-12-01 04:23:06', '2022-12-01 04:23:06'),
(43, 'dashboard_main', 'web', '2022-12-01 05:19:12', '2022-12-01 05:19:12'),
(44, 'student_main', 'web', '2022-12-01 05:19:32', '2022-12-01 05:19:32'),
(45, 'master_main', 'web', '2022-12-01 05:19:45', '2022-12-01 05:19:45'),
(46, 'fees_receipt_main', 'web', '2022-12-01 05:20:08', '2022-12-01 05:20:08'),
(47, 'users_roles_main', 'web', '2022-12-01 05:20:26', '2022-12-01 05:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `id` int(11) NOT NULL,
  `religion_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`id`, `religion_name`) VALUES
(1, 'HINDU'),
(2, 'MUSLIM'),
(3, 'SIKH'),
(4, 'CHRISTIAN'),
(5, 'JAIN');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', 'web', '2021-11-05 19:42:22', 1, '2021-11-05 19:42:22', NULL),
(2, 'Referee', 'web', '2021-11-05 19:42:48', 1, '2022-05-03 10:13:49', NULL),
(4, 'Coach', 'web', '2021-11-05 19:43:22', 1, '2021-11-05 19:43:22', NULL),
(7, 'Master', 'web', '2022-03-03 07:01:26', 1, '2022-03-03 07:01:26', NULL),
(8, 'Player', 'web', '2022-03-04 03:49:20', 1, '2022-03-04 03:49:20', NULL),
(10, 'Other', 'web', '2022-05-02 05:28:48', 1, '2022-05-02 05:28:52', NULL),
(13, 'Developer', 'web', '2022-05-03 10:31:37', 1, '2022-05-03 10:31:37', NULL),
(15, 'Instructor', 'web', '2022-05-03 10:31:37', 1, '2022-05-03 10:31:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(3, 2),
(14, 13),
(17, 13),
(15, 13),
(16, 13),
(31, 13),
(33, 13),
(32, 13),
(42, 13),
(30, 13),
(2, 13),
(27, 13),
(29, 13),
(28, 13),
(26, 13),
(23, 13),
(25, 13),
(24, 13),
(22, 13),
(39, 13),
(41, 13),
(40, 13),
(38, 13),
(12, 13),
(11, 13),
(10, 13),
(9, 13),
(19, 13),
(21, 13),
(20, 13),
(18, 13),
(4, 13),
(8, 13),
(7, 13),
(3, 13),
(35, 13),
(37, 13),
(36, 13),
(34, 13),
(1, 13),
(5, 13),
(6, 13),
(13, 13),
(43, 13),
(44, 13),
(45, 13),
(46, 13),
(47, 13),
(15, 7),
(17, 7),
(16, 7),
(14, 7),
(31, 7),
(33, 7),
(32, 7),
(42, 7),
(2, 7),
(43, 7),
(27, 7),
(29, 7),
(28, 7),
(26, 7),
(23, 7),
(10, 7),
(12, 7),
(11, 7),
(9, 7),
(45, 7),
(19, 7),
(21, 7),
(20, 7),
(18, 7),
(4, 7),
(6, 7),
(5, 7),
(3, 7),
(35, 7),
(37, 7),
(36, 7),
(44, 7),
(34, 7),
(7, 7),
(13, 7),
(8, 7),
(47, 7),
(1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fUAr0Zkd7fqY8zpNRl2baISyWSyirdC0dHKu9akB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVDZ6czhGT0xDZTE4NVM3a21sRGxuVW5FZFNoVDhlYmg5c1Rmck5KcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647348073),
('g4R6JX57Uk7S9HD8LpVBrOlDozMA2Ajg4UZL0Fg7', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUY3MlNlbVVPOW5PWHdRNXlwc2tXODE0U09MUE1KeDlsNW1qN3RTNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRGbU1JdkZrVWp5Z2UvdXlkTnpZWDN1UnNyay9MblBUOU9taUF0M3ZUWW1EZFBwNTI0enRBMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yb3VuZCI7fX0=', 1647348188),
('HT3eaCH0ZOGHOCFCzD1TYTWI9WCEpIOlh3E1cnZN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3FRUWZCY1NLMGZXanZnZmtqVFAwWVlwWVlLb2NSRGFYT05tbFZ1SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1647348074),
('fUAr0Zkd7fqY8zpNRl2baISyWSyirdC0dHKu9akB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVDZ6czhGT0xDZTE4NVM3a21sRGxuVW5FZFNoVDhlYmg5c1Rmck5KcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647348073),
('g4R6JX57Uk7S9HD8LpVBrOlDozMA2Ajg4UZL0Fg7', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUY3MlNlbVVPOW5PWHdRNXlwc2tXODE0U09MUE1KeDlsNW1qN3RTNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRGbU1JdkZrVWp5Z2UvdXlkTnpZWDN1UnNyay9MblBUOU9taUF0M3ZUWW1EZFBwNTI0enRBMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yb3VuZCI7fX0=', 1647348188),
('HT3eaCH0ZOGHOCFCzD1TYTWI9WCEpIOlh3E1cnZN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3FRUWZCY1NLMGZXanZnZmtqVFAwWVlwWVlLb2NSRGFYT05tbFZ1SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1647348074),
('fUAr0Zkd7fqY8zpNRl2baISyWSyirdC0dHKu9akB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVDZ6czhGT0xDZTE4NVM3a21sRGxuVW5FZFNoVDhlYmg5c1Rmck5KcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1647348073),
('g4R6JX57Uk7S9HD8LpVBrOlDozMA2Ajg4UZL0Fg7', 10, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidUY3MlNlbVVPOW5PWHdRNXlwc2tXODE0U09MUE1KeDlsNW1qN3RTNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTA7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRGbU1JdkZrVWp5Z2UvdXlkTnpZWDN1UnNyay9MblBUOU9taUF0M3ZUWW1EZFBwNTI0enRBMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9yb3VuZCI7fX0=', 1647348188),
('HT3eaCH0ZOGHOCFCzD1TYTWI9WCEpIOlh3E1cnZN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3FRUWZCY1NLMGZXanZnZmtqVFAwWVlwWVlLb2NSRGFYT05tbFZ1SyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1647348074);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `href` varchar(200) NOT NULL,
  `route_name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `option_type` tinyint(4) NOT NULL,
  `onclick` varchar(200) NOT NULL,
  `is_show` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `href`, `route_name`, `icon`, `name`, `parent`, `type_id`, `option_type`, `onclick`, `is_show`) VALUES
(1000, 'dashboard', 'home', 'icon-home2', 'Dashboard', 0, 1, 0, '', 1),
(1100, 'dashboard', 'home', '', 'Dashboard', 1000, 1, 0, '', 1),
(2000, '', '', 'icon-database', 'Master', 0, 1, 0, '', 1),
(2100, 'academic_year', 'academic_year.index', '', 'Academic Year', 2000, 1, 0, '', 1),
(2105, 'academic_year/create', 'academic_year.create', 'menu-icon mdi mdi-plus-circle si si_green', 'Add Academic Year', 2100, 2, 0, 'add_data', 1),
(2110, 'academic_year/{id}/edit', 'academic_year.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit Academic Year', 2100, 2, 1, 'edit_data', 1),
(2130, 'academic_year/{id}/delete', 'academic_year.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Delete Academic Year', 2100, 2, 1, 'edit_data', 1),
(2200, 'level', 'level.index', '', 'Level', 2000, 1, 0, '', 1),
(2210, 'level/create', 'level.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add Level', 2200, 2, 0, 'add_data', 1),
(2220, 'level/{id}/edit', 'level.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit Level', 2200, 2, 1, 'edit_data', 1),
(2230, 'level/{id}', 'level.show', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Delete Level', 2200, 2, 1, 'delete_data', 1),
(2300, 'fees_category', 'fees_category.index', '', 'Fees Category', 2000, 1, 0, '', 1),
(2305, 'fees_category/create', 'fees_category.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add Fees Category', 2300, 2, 0, 'add_data', 1),
(2310, 'fees_category/{id}/edit', 'fees_category.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit Fees Category', 2300, 2, 1, 'edit_data', 1),
(2400, 'duration_type', 'duration_type.index', '', 'Duration Type', 2000, 1, 0, '', 1),
(2405, 'duration_type/create', 'duration_type.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add Duration Type', 2400, 2, 0, 'add_data', 1),
(2410, 'duration_type/{id}/edit', 'duration_type.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit Duration Type', 2400, 2, 1, 'edit_data', 1),
(2500, 'course', 'course.index', 'menu-icon mdi mdi-telegram', 'Course', 2000, 1, 0, '', 1),
(2505, 'course/create', 'course.create', 'menu-icon mdi mdi-clock si si_green', 'Add Course', 2500, 2, 0, 'add_data', 1),
(2510, 'course/{id}/edit', 'course.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit Course', 2500, 2, 1, 'edit_data', 1),
(2520, 'course/{id}/edit', 'course.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Delete Course', 2500, 2, 1, 'edit_data', 1),
(4000, 'student', '', 'icon-database', 'Student', 0, 1, 0, '', 1),
(4100, 'student', 'student.index', '', 'Student', 4000, 1, 0, '', 1),
(4105, 'student/create', 'student.create', 'menu-icon mdi mdi-plus-circle si si_green', 'Add Student', 4100, 2, 0, 'add_data', 1),
(4110, 'student/{id}/edit', 'student.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit Student', 4100, 2, 1, 'edit_data', 1),
(4115, 'student/{id}', 'student.show', 'menu-icon mdi mdi-printer si si_blue', 'Delete Student', 4000, 2, 1, 'generate_data', 1),
(5000, 'fees_receipt', '', 'icon-database', 'Fees Receipt', 0, 1, 0, '', 1),
(5100, 'fees_receipt', 'fees_receipt.index', 'icon-database', 'Fees Receipt', 5000, 1, 0, '', 1),
(5110, 'fees_receipt/create', 'fees_recipt.create', 'icon-database', 'Fees Receipt Create', 5100, 2, 0, '', 1),
(5120, 'fees_receipt/{id}/edit', 'fees_receipt.view_receipt', 'icon-database', 'Fees Receipt Edit', 5100, 2, 1, '', 1),
(80000, '', '', 'icon-database', 'Users & Roles', 0, 1, 0, '', 0),
(80100, 'users', 'users.index', '', 'Users', 80000, 1, 0, '', 0),
(80110, 'users/create', 'users.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add User', 80100, 2, 0, 'add_data', 0),
(80120, 'users/{id}/edit', 'users.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit User', 80100, 2, 1, 'edit_data', 0),
(80130, 'users/{id}', 'users.show', 'menu-icon mdi mdi-delete si si_red', 'Delete User', 80100, 2, 1, 'delete_data', 0),
(80200, 'roles', 'roles.index', '', 'Roles', 80000, 1, 0, '', 0),
(80210, 'roles/create', 'roles.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add Role', 80200, 2, 0, 'add_data', 0),
(80220, 'roles/{id}/edit', 'roles.edit', 'menu-icon mdi mdi-pencil si si_blue', 'Edit role', 80200, 2, 1, 'edit_data', 0),
(80230, 'roles/{id}/delete', 'roles.delete', 'menu-icon mdi mdi-delete si si_red', 'Delete Role', 80200, 2, 1, 'delete_data', 0),
(80300, 'permission', 'permission.index', '', 'Permission', 80000, 1, 0, '', 0),
(80310, 'permission/create', 'permission.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add Permission', 80300, 2, 0, 'add_data', 0),
(80320, 'permission/{id}/edit', 'permission.edit', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Edit Permission', 80300, 2, 1, 'edit_data', 0),
(80400, 'sidebar_permission', 'sidebar_permission.index', '', 'Sidebar Permission', 80000, 1, 0, '', 0),
(80410, 'sidebar_permission/create', 'sidebar_permission.create', 'menu-icon mdi mdi-plus-circle-outline  si si_green', 'Add SidebarPermission', 80400, 2, 0, 'add_data', 0),
(80411, 'course/{id}/fees_map', '', 'menu-icon mdi mdi-pencil si si_blue', 'Course Fees Map', 2500, 2, 1, 'edit_data', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_permission_map`
--

CREATE TABLE `sidebar_permission_map` (
  `id` int(11) NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `sidebar_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT 1,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebar_permission_map`
--

INSERT INTO `sidebar_permission_map` (`id`, `permission_id`, `sidebar_id`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 14, 2100, '2022-11-30 08:54:13', 1, NULL, NULL),
(2, 15, 2105, '2022-11-30 08:54:56', 1, NULL, NULL),
(3, 16, 2110, '2022-11-30 08:54:57', 1, NULL, NULL),
(5, 9, 2200, '2022-12-01 10:36:08', 1, '2022-12-01 10:36:08', NULL),
(6, 43, 1000, '2022-12-01 10:50:46', 1, '2022-12-01 10:50:46', NULL),
(7, 2, 1100, '2022-12-01 10:50:54', 1, '2022-12-01 10:50:54', NULL),
(8, 45, 2000, '2022-12-01 10:51:05', 1, '2022-12-01 10:51:05', NULL),
(9, 17, 2130, '2022-12-01 10:53:01', 1, '2022-12-01 10:53:01', NULL),
(10, 12, 2210, '2022-12-01 10:53:21', 1, '2022-12-01 10:53:21', NULL),
(11, 10, 2220, '2022-12-01 10:53:41', 1, '2022-12-01 10:53:41', NULL),
(12, 11, 2230, '2022-12-01 10:54:28', 1, '2022-12-01 10:54:28', NULL),
(13, 22, 2300, '2022-12-01 10:54:39', 1, '2022-12-01 10:54:39', NULL),
(14, 23, 2305, '2022-12-01 10:54:54', 1, '2022-12-01 10:54:54', NULL),
(15, 24, 2310, '2022-12-01 10:55:04', 1, '2022-12-01 10:55:04', NULL),
(16, 26, 2400, '2022-12-01 10:55:48', 1, '2022-12-01 10:55:48', NULL),
(17, 27, 2405, '2022-12-01 10:55:56', 1, '2022-12-01 10:55:56', NULL),
(18, 28, 2410, '2022-12-01 10:56:05', 1, '2022-12-01 10:56:05', NULL),
(19, 30, 2500, '2022-12-01 10:56:14', 1, '2022-12-01 10:56:14', NULL),
(20, 31, 2505, '2022-12-01 10:56:23', 1, '2022-12-01 10:56:23', NULL),
(21, 32, 2510, '2022-12-01 10:56:32', 1, '2022-12-01 10:56:32', NULL),
(23, 44, 4000, '2022-12-01 10:58:35', 1, '2022-12-01 10:58:35', NULL),
(24, 34, 4100, '2022-12-01 10:58:43', 1, '2022-12-01 10:58:43', NULL),
(25, 35, 4105, '2022-12-01 10:58:52', 1, '2022-12-01 10:58:52', NULL),
(26, 36, 4110, '2022-12-01 10:59:05', 1, '2022-12-01 10:59:05', NULL),
(27, 37, 4115, '2022-12-01 10:59:19', 1, '2022-12-01 10:59:19', NULL),
(28, 46, 5000, '2022-12-01 10:59:33', 1, '2022-12-01 10:59:33', NULL),
(29, 38, 5100, '2022-12-01 10:59:41', 1, '2022-12-01 10:59:41', NULL),
(30, 39, 5110, '2022-12-01 10:59:48', 1, '2022-12-01 10:59:48', NULL),
(31, 40, 5120, '2022-12-01 10:59:56', 1, '2022-12-01 10:59:56', NULL),
(33, 47, 80000, '2022-12-01 11:00:18', 1, '2022-12-01 11:00:18', NULL),
(34, 13, 80100, '2022-12-01 11:01:51', 1, '2022-12-01 11:01:51', NULL),
(35, 1, 80110, '2022-12-01 11:02:00', 1, '2022-12-01 11:02:00', NULL),
(36, 6, 80120, '2022-12-01 11:02:27', 1, '2022-12-01 11:02:27', NULL),
(37, 5, 80130, '2022-12-01 11:02:45', 1, '2022-12-01 11:02:45', NULL),
(38, 3, 80200, '2022-12-01 11:02:53', 1, '2022-12-01 11:02:53', NULL),
(39, 4, 80210, '2022-12-01 11:03:02', 1, '2022-12-01 11:03:02', NULL),
(40, 7, 80220, '2022-12-01 11:03:11', 1, '2022-12-01 11:03:11', NULL),
(41, 8, 80230, '2022-12-01 11:03:31', 1, '2022-12-01 11:03:31', NULL),
(42, 18, 80300, '2022-12-01 11:03:40', 1, '2022-12-01 11:03:40', NULL),
(43, 19, 80310, '2022-12-01 11:03:48', 1, '2022-12-01 11:03:48', NULL),
(44, 20, 80320, '2022-12-01 11:03:58', 1, '2022-12-01 11:03:58', NULL),
(45, 42, 80411, '2022-12-01 11:06:54', 1, '2022-12-01 11:06:54', NULL),
(46, 33, 2520, '2022-12-02 08:32:08', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `states_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countries_id` bigint(20) UNSIGNED DEFAULT NULL,
  `region` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `states_name`, `countries_id`, `region`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Andaman Nicobar', 102, 'East', 1, NULL, NULL, NULL),
(2, 'Andhra Pradesh', 102, 'South', 1, NULL, NULL, NULL),
(3, 'Arunachal Pradesh', 102, 'East', 1, NULL, NULL, NULL),
(4, 'Assam', 102, 'East', 1, NULL, NULL, NULL),
(5, 'Bihar', 102, 'East', 1, NULL, NULL, NULL),
(6, 'Chandigarh', 102, 'North', 1, NULL, NULL, NULL),
(7, 'Chhattisgarh', 102, 'East', 1, NULL, NULL, NULL),
(8, 'Dadra and Nagar Haveli', 102, 'West', 1, NULL, NULL, NULL),
(9, 'Delhi', 102, 'North', 1, NULL, NULL, NULL),
(10, 'Goa', 102, 'West', 1, NULL, NULL, NULL),
(11, 'Gujarat', 102, 'West', 1, NULL, NULL, NULL),
(12, 'Haryana', 102, 'North', 1, NULL, NULL, NULL),
(13, 'Himachal Pradesh', 102, 'North', 1, NULL, NULL, NULL),
(14, 'Jammu Kashmir', 102, 'North', 1, NULL, NULL, NULL),
(15, 'Jharkhand', 102, 'East', 1, NULL, NULL, NULL),
(16, 'Karnataka', 102, 'South', 1, NULL, NULL, NULL),
(17, 'Kerala', 102, 'South', 1, NULL, NULL, NULL),
(18, 'Ladakh', 102, 'North', 1, NULL, NULL, NULL),
(19, 'Lakshadweep', 102, 'South', 1, NULL, NULL, NULL),
(20, 'Madhya Pradesh', 102, 'West', 1, NULL, NULL, NULL),
(21, 'Maharashtra', 102, 'West', 1, NULL, NULL, NULL),
(22, 'Manipur', 102, 'East', 1, NULL, NULL, NULL),
(23, 'Meghalaya', 102, 'East', 1, NULL, NULL, NULL),
(24, 'Mizoram', 102, 'East', 1, NULL, NULL, NULL),
(25, 'Nagaland', 102, 'East', 1, NULL, NULL, NULL),
(26, 'Odisha', 102, 'East', 1, NULL, NULL, NULL),
(27, 'Puducherry', 102, 'South', 1, NULL, NULL, NULL),
(28, 'Punjab', 102, 'North', 1, NULL, NULL, NULL),
(29, 'Rajasthan', 102, 'West', 1, NULL, NULL, NULL),
(30, 'Sikkim', 102, 'East', 1, NULL, NULL, NULL),
(31, 'Tamil Nadu', 102, 'South', 1, NULL, NULL, NULL),
(32, 'Telangana', 102, 'South', 1, NULL, NULL, NULL),
(33, 'Tripura', 102, 'East', 1, NULL, NULL, NULL),
(34, 'Uttar Pradesh', 102, 'North', 1, NULL, NULL, NULL),
(35, 'Uttarakhand', 102, 'North', 1, NULL, NULL, NULL),
(36, 'West Bengal', 102, 'East', 1, NULL, NULL, NULL),
(38, 'Daman and Diu', 102, 'West', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `enrollment_no` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roll_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `academic_level_id` int(11) DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `academic_year_id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` tinyint(4) NOT NULL COMMENT '1 for male, 2 for female and 3 for others',
  `mobile_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_mobile_no` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'parent mobile no',
  `email_id` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caddress` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `cdistrict` int(11) NOT NULL,
  `cstate` int(11) NOT NULL,
  `cpincode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paddress` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdistrict` int(11) NOT NULL,
  `pstate` int(11) NOT NULL,
  `ppincode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_proof_type` tinyint(1) NOT NULL COMMENT '1 for Aadhar, 2 for voter id card, 3 for pan card and so on..',
  `id_proof_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `is_ews` tinyint(1) NOT NULL,
  `cat_certificate_no` tinyint(4) DEFAULT NULL,
  `is_stu_with_disability` tinyint(1) NOT NULL,
  `disability_type` tinyint(1) NOT NULL COMMENT '0 for na, 1 for Hearing Impaired, 2 for Physical Disablility and 3 for Visually Impaired',
  `nationality` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 for Indian, 2 for others',
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion_id` int(11) NOT NULL,
  `is_minority` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0 for no and 1 for yes',
  `remark` tinytext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photograph` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat_type` tinyint(1) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `enrollment_no`, `roll_no`, `academic_level_id`, `course_id`, `academic_year_id`, `full_name`, `father_name`, `mother_name`, `dob`, `gender`, `mobile_no`, `p_mobile_no`, `email_id`, `caddress`, `cdistrict`, `cstate`, `cpincode`, `paddress`, `pdistrict`, `pstate`, `ppincode`, `id_proof_type`, `id_proof_no`, `category_id`, `is_ews`, `cat_certificate_no`, `is_stu_with_disability`, `disability_type`, `nationality`, `blood_group`, `religion_id`, `is_minority`, `remark`, `photograph`, `signature`, `seat_type`, `is_active`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'JAGARAN0001', '1', 1, 1, 1, 'VIKAS KUMAR SONWANI', 'Susheel Sonwani', 'krishna devi', '1995-09-03', 1, '6388059636', '6388059636', 'vikassonwanipk@gmail.com', '10/85 KHILASI LINE', 682, 34, '208001', '10/85 KHILASI LINE', 682, 34, '208001', 0, '', 1, 0, NULL, 0, 0, 1, NULL, 1, 1, NULL, NULL, NULL, 0, 1, '2022-11-13 18:33:10', 0, '2022-11-13 18:33:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` int(11) NOT NULL,
  `league_id` int(11) DEFAULT NULL,
  `round_id` int(11) DEFAULT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `age_group_id` int(11) DEFAULT NULL,
  `syllabus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `league_id`, `round_id`, `activity_id`, `age_group_id`, `syllabus`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '1st ROUND 8-11 age.pdf', 1, '2022-04-25 14:07:38', '2022-06-20 16:36:44'),
(2, 1, 1, 1, 2, '1st ROUND 11-14.pdf', 1, '2022-04-25 14:07:38', NULL),
(3, 1, 1, 1, 3, '1st ROUND 14-18.pdf', 1, '2022-04-25 14:07:38', NULL),
(4, 1, 1, 1, 4, '1st ROUND 18-25.pdf', 1, '2022-04-25 14:07:38', NULL),
(5, 1, 1, 1, 5, '1st ROUND 25-35.pdf', 1, '2022-04-25 14:07:38', NULL),
(6, 1, 1, 1, 6, '1st ROUND 35 Above.pdf', 1, '2022-04-25 14:07:38', NULL),
(7, 1, 1, 2, 7, '1-6 ARTISTIC YOGASANA.pdf', 1, '2022-04-25 14:07:38', NULL),
(8, 1, 1, 2, 8, '1-6 ARTISTIC YOGASANA SENIOR.pdf', 1, '2022-04-25 14:07:38', NULL),
(9, 1, 2, 1, 1, '2nd ROUND 08-11.pdf', 1, '2022-04-25 14:07:38', NULL),
(10, 1, 2, 1, 2, '2nd ROUND 11-14.pdf', 1, '2022-04-25 14:07:38', NULL),
(11, 1, 2, 1, 3, '2nd ROUND 14-18.pdf', 1, '2022-04-25 14:07:38', NULL),
(12, 1, 2, 1, 4, '2nd ROUND 18-25.pdf', 1, '2022-04-25 14:07:38', NULL),
(13, 1, 2, 1, 5, '2nd ROUND 25-35.pdf', 1, '2022-04-25 14:07:38', NULL),
(14, 1, 2, 1, 6, '2nd ROUND 35 Above.pdf', 1, '2022-04-25 14:07:38', NULL),
(15, 1, 2, 2, 7, '1-6 ARTISTIC YOGASANA.pdf', 1, '2022-04-25 14:07:38', NULL),
(16, 1, 2, 2, 8, '1-6 ARTISTIC YOGASANA SENIOR.pdf', 1, '2022-04-25 14:07:38', NULL),
(17, 1, 3, 1, 1, '3rd ROUND 8-11.pdf', 1, '2022-04-25 14:07:38', NULL),
(18, 1, 3, 1, 2, '3rd ROUND 11-14.pdf', 1, '2022-04-25 14:07:38', NULL),
(19, 1, 3, 1, 3, '3rd ROUND 14-18.pdf', 1, '2022-04-25 14:07:38', NULL),
(20, 1, 3, 1, 4, '3rd ROUND 18-25.pdf', 1, '2022-04-25 14:07:38', NULL),
(21, 1, 3, 1, 5, '3rd ROUND 25-35.pdf', 1, '2022-04-25 14:07:38', NULL),
(22, 1, 3, 1, 6, '3rd ROUND 35+.pdf', 1, '2022-04-25 14:07:38', NULL),
(23, 1, 3, 2, 7, '1-6 ARTISTIC YOGASANA.pdf', 1, '2022-04-25 14:07:38', NULL),
(24, 1, 3, 2, 8, '1-6 ARTISTIC YOGASANA SENIOR.pdf', 1, '2022-04-25 14:07:38', NULL),
(25, 1, 4, 1, 1, '4TH ROUND 8-11.pdf', 0, '2022-04-25 14:07:38', NULL),
(26, 1, 4, 1, 2, '4TH ROUND 11-14.pdf', 0, '2022-04-25 14:07:38', NULL),
(27, 1, 4, 1, 3, '4TH ROUND 14-18.pdf', 0, '2022-04-25 14:07:38', NULL),
(28, 1, 4, 1, 4, '4TH ROUND 18-25.pdf', 0, '2022-04-25 14:07:38', NULL),
(29, 1, 4, 1, 5, '4TH ROUND 25-35.pdf', 0, '2022-04-25 14:07:38', NULL),
(30, 1, 4, 1, 6, '4TH ROUND 35+.pdf', 0, '2022-04-25 14:07:38', NULL),
(31, 1, 4, 2, 7, '1-6 ARTISTIC YOGASANA.pdf', 1, '2022-04-25 14:07:38', NULL),
(32, 1, 4, 2, 8, '1-6 ARTISTIC YOGASANA SENIOR.pdf', 1, '2022-04-25 14:07:38', NULL),
(33, 1, 5, 1, 1, '5th ROUND 08-11.pdf', 0, '2022-04-25 14:07:38', NULL),
(34, 1, 5, 1, 2, '5th ROUND 11-14.pdf', 0, '2022-04-25 14:07:38', NULL),
(35, 1, 5, 1, 3, '5th ROUND 14-18.pdf', 0, '2022-04-25 14:07:38', NULL),
(36, 1, 5, 1, 4, '5th ROUND 18-25.pdf', 0, '2022-04-25 14:07:38', NULL),
(37, 1, 5, 1, 5, '5th ROUND 25-35.pdf', 0, '2022-04-25 14:07:38', NULL),
(38, 1, 5, 1, 6, '5th ROUND 35+.pdf', 0, '2022-04-25 14:07:38', NULL),
(39, 1, 5, 2, 7, '1-6 ARTISTIC YOGASANA.pdf', 1, '2022-04-25 14:07:38', NULL),
(40, 1, 5, 2, 8, '1-6 ARTISTIC YOGASANA SENIOR.pdf', 1, '2022-04-25 14:07:38', NULL),
(41, 1, 6, 1, 1, '6th ROUND 08-11.pdf', 0, '2022-04-25 14:07:38', NULL),
(42, 1, 6, 1, 2, '6th ROUND 11-14.pdf', 0, '2022-04-25 14:07:38', NULL),
(43, 1, 6, 1, 3, '6th ROUND 14-18.pdf', 0, '2022-04-25 14:07:38', NULL),
(44, 1, 6, 1, 4, '6th ROUND 18-25.pdf', 0, '2022-04-25 14:07:38', NULL),
(45, 1, 6, 1, 5, '6th ROUND 25-35.pdf', 0, '2022-04-25 14:07:38', NULL),
(46, 1, 6, 1, 6, '6th ROUND 35+.pdf', 0, '2022-04-25 14:07:38', NULL),
(47, 1, 6, 2, 7, '1-6 ARTISTIC YOGASANA.pdf', 1, '2022-04-25 14:07:38', NULL),
(48, 1, 6, 2, 8, '1-6 ARTISTIC YOGASANA SENIOR.pdf', 1, '2022-04-25 14:07:38', NULL),
(49, 1, 7, 1, 1, NULL, 0, '2022-04-25 14:07:38', NULL),
(50, 1, 7, 1, 2, NULL, 0, '2022-04-25 14:07:38', NULL),
(51, 1, 7, 1, 3, NULL, 0, '2022-04-25 14:07:38', NULL),
(52, 1, 7, 1, 4, NULL, 0, '2022-04-25 14:07:38', NULL),
(53, 1, 7, 1, 5, NULL, 0, '2022-04-25 14:07:38', NULL),
(54, 1, 7, 1, 6, NULL, 0, '2022-04-25 14:07:38', NULL),
(55, 1, 7, 2, 7, NULL, 0, '2022-04-25 14:07:38', NULL),
(56, 1, 7, 2, 8, NULL, 0, '2022-04-25 14:07:38', NULL);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_by`, `created_at`, `updated_by`, `updated_at`, `is_active`) VALUES
(1, 'vikas sonwani', 'vikasdev@gmail.com', NULL, '$2y$10$hZ4GDLh7Xx/.seKg/bwJz.j.1TRd20sEXWxR.pPSqi9Jp.9jkL2mS', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-27 06:24:29', NULL, '2022-12-09 01:30:02', 1),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$6Si8EG2VwR1I5Q73MN/yNO2AldTi0rrZK4sOuIJbjX.lzFh.UoV7y', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 19:45:52', NULL, '2021-11-05 19:45:52', 1),
(3, 'Player 1', 'player1@gmail.com', NULL, '$2y$10$9aDtDzkkkH4CRmsBX0y2le.c1.pbW5bX7iCdyGw9GfL.q2ZydPn5i', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 19:46:37', NULL, '2021-11-05 19:46:37', 1),
(4, 'Player 2', 'player2@gmail.com', NULL, '$2y$10$NHisLA4qC1Y7tEVmUN3q9.dTwS5GslDf/6ufd4vhY/LuJe4eEWEeW', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 19:47:06', NULL, '2022-05-19 07:43:27', 1),
(5, 'Refree 1', 'refree1@gmail.com', NULL, '$2y$10$QaS4g0QoNNnkz/sgB4dLnO.vhG3zDyNsidt3IZaui0CDUNgXEOgUa', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 19:47:46', NULL, '2021-11-05 19:47:46', 1),
(6, 'Refree2', 'refree2@gmail.com', NULL, '$2y$10$wwFGhHwK0GqORseZyEKL8.vt5Kf4h4Vj.qIDCZcjCl5kFIyi3z2Dy', NULL, NULL, NULL, NULL, NULL, NULL, '2021-11-05 19:53:55', NULL, '2021-11-05 19:53:55', 1),
(8, 'Akanksha Sonwani', 'vikassonwanilpk@gmail.com', NULL, '$2y$10$otPkR279nK/kBrKFBJjQU.lCmRyb2napt8C.Jx0A2XJUZgK6NHhNW', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-27 06:51:18', NULL, '2022-06-19 07:26:17', 1),
(9, 'tempuser', 'tempuser@gmail.com', NULL, '$2y$10$RGLJTgbUNc1VknMQb0PJKO0Gywzc8KKksGFTfjJbamMVL/qkrJfOu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-02-28 21:30:18', NULL, '2022-02-28 21:30:18', 1),
(10, 'Master User', 'master@gmail.com', NULL, '$2y$10$FmMIvFkUjyge/uydNzYX3uRsrk/LnPT9OmiAt3vTYmDdPp524ztA2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 07:02:51', NULL, '2022-03-03 07:02:51', 1),
(11, 'Master User2', 'master2@gmail.com', NULL, '$2y$10$QaS4g0QoNNnkz/sgB4dLnO.vhG3zDyNsidt3IZaui0CDUNgXEOgUa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-03 07:07:22', NULL, '2022-03-03 07:07:22', 1),
(12, 'Vikas Player', 'vikasplayer@gmail.com', NULL, '$2y$10$FX.cqvEdcTRCA8KySzUwUeGtGXkyIcWg5UQo69mheKzIBCGug7OWq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-04 03:53:10', NULL, '2022-03-04 03:53:10', 1),
(13, 'Manish kumar', 'kumarmanish140691@gmail.com', NULL, '$2y$10$.RxwSJv6po97vCjIBUtQj.8jNfRIlVg0PAcfzcilILoRrHv9P3o1q', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-12 20:57:58', NULL, '2022-03-14 03:16:44', 1),
(14, 'Manish kumar', 'manish@gmail.com', NULL, '$2y$10$bTr7Q38AbdlhYA4v/Kz9BOIDh3BBKtw1l01z/C82Sw6SUrHGF9OW2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-20 00:06:39', NULL, '2022-03-20 00:06:39', 1),
(15, 'Manish kumar', 'kumarmanish@gmail.com', NULL, '$2y$10$tLsZ2Ydrwm1.vC6XYOy3Ye2YrDOOZuq3M4/OLZZSMVIFrSVt17iOe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-20 10:50:09', NULL, '2022-03-20 10:50:09', 1),
(16, 'gargi gupta', 'gargigupta@gmail.com', NULL, '$2y$10$8HyQuKhknh3EIDq3ID7ug.QJWZpe7mRCd4lRn3epe1iJm.WyBKbU6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-20 11:11:54', NULL, '2022-03-20 11:11:54', 1),
(17, 'asjkd jkasdk', 'jaskda@gmail.com', NULL, '$2y$10$tvahvahhRYYS8zyBNBxQU.hGt5xD4qle8khwWM0pSJPUEaGNE.IXC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 01:22:52', NULL, '2022-03-31 01:22:52', 1),
(18, 'Manish Manish', 'player@gmail.com', NULL, '$2y$10$bGlHUPbmOxZjVlPfdERhs.gmiyaj0RdQgnqPON7G9uWEuKXzx.VUu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 07:39:01', NULL, '2022-03-31 07:39:01', 1),
(19, 'Jimmy Vishwakarma', 'amrit@csjmu.ac.in', NULL, '$2y$10$rIzc2GUry7sYgnLjGFfCcumftUUHsU4Q/VZEqzmmeQFRX.IuKsmju', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-01 00:26:03', NULL, '2022-04-01 00:26:03', 1),
(21, 'Mas shad', 'sajda@gmail.com', NULL, '$2y$10$fPjj8MMf/1URtQ8nhhdbyuOHasLTk.9iRcNNYWRawBl767fph81Qe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-01 08:05:37', NULL, '2022-04-01 08:05:37', 1),
(22, 'Manis kumar', 'dev@gmail.com', NULL, '$2y$10$fwMoKmGdrq0WYU20L3QRduz0HA9D2sq/CLwXe8ZVk1I3tzLw0Tzoq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-01 08:11:26', NULL, '2022-04-01 08:11:26', 1),
(23, 'Test User', 'jimmy@gmail.com', NULL, '$2y$10$05GExIO.l7YZrkMBxTaUtOuL/oHLlsGAE2Toa9MA7GiJJz/jVtwsy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-01 09:51:06', NULL, '2022-04-01 09:51:06', 1),
(24, 'Arpit Kumar', 'aj271298@gmail.com', NULL, '$2y$10$iMg01FoqfGHRK2iFj3CZwuFYQxHy8xaUt3f7kR3PjWvyBhj65VSUG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 00:30:22', NULL, '2022-04-02 00:30:22', 1),
(25, 'Amit Singh', 'amitsingh00020@gmail.com', NULL, '$2y$10$z2pDGyLWDdMjqj0pMbsM3ONtAPHIftLwA7asnW3mm8S4yUrgNJv/m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-02 00:30:50', NULL, '2022-04-02 00:30:50', 1),
(26, 'Coach Coach', 'coach@gmail.com', NULL, '$2y$10$3jOxSOFPDXPFJG3TeSyl3eEpuzSbgjMOsWTRBx96FkPEW6gRuk5jK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-31 01:48:51', NULL, '2022-03-31 01:48:51', 1),
(261, 'Maneesh kumar', 'pl2@gmail.com', NULL, '$2y$10$uisCb3dDck7/1uaHurxeTu6ymnF5VlErDSQ0geUk/8BS8.mOs1kOq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 10:47:19', NULL, '2022-06-16 10:47:19', 1),
(262, 'vikas test 1', 'vikastest1@gmail.com', NULL, '$2y$10$FfGE3Ya8UnLY9WWDplEE/eT6fQEe6GmTu0fd9ldfYgWgcPKwYmjjO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 10:47:41', NULL, '2022-06-19 00:06:18', 1),
(263, 'Referee 2', 'pl1@gmail.com', NULL, '$2y$10$MFmsYcUvz/23xflyy1ymUu4eBuhemGDO0ag4Ld.Fk7CQurhAFBnqG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:06:25', NULL, '2022-06-16 11:06:25', 1),
(264, 'Ref', 'ref1@gmail.com', NULL, '$2y$10$0UAQn8cF90VgeJP1/gN5D.oU/SbnMJWDux/vqTLALuDwivTFbbF1q', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:10:34', NULL, '2022-06-16 11:10:34', 1),
(265, 'Ref 2', 'ref2@gmail.com', NULL, '$2y$10$z4wQlAajtMpa1fqSFELemO4KGAJ3HLVITuLYaa3PUdwDZQD5jmdKW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:12:46', NULL, '2022-06-16 11:12:46', 1),
(266, 'Ref3', 'ref3@gmail.com', NULL, '$2y$10$PkJ2JZpZCMUZZixmB5N.BeeRfdeugC8nDi9IILwezPjFli6bqmefC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:15:38', NULL, '2022-06-16 11:15:38', 1),
(267, 'Ref4', 'ref4@gmail.com', NULL, '$2y$10$q..a61scBxaETFRcLhOdzu5m3BUZ3StrMq.jZh84N3oKq/m4Smsuq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:17:31', NULL, '2022-06-16 11:17:31', 1),
(268, 'Ref5', 'ref5@gmail.com', NULL, '$2y$10$LyHGtZpzBM4TcehEgFyGkOPSF0D4qVC7UIes0cEPg4/j2ijcQB5za', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:19:44', NULL, '2022-06-16 11:19:44', 1),
(269, 'vikas test 2', 'vikastest2@gmail.com', NULL, '$2y$10$4Uqr9qiUMZsGs4LhksYfaOUKT3nhFVVRIZyvyLtXV.lqd0.NvpEoS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:24:16', NULL, '2022-06-16 11:24:16', 1),
(270, 'ab', 'ab@gmail.com', NULL, '$2y$10$szNzEuCRi6TrB6OgsFNyYe.sk9sDl3SkRcnyxp0eDuJX7OI2GnN3W', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-16 11:59:40', NULL, '2022-06-17 03:16:02', 1),
(271, 'j1', 'j1@gmail.com', NULL, '$2y$10$lzER3PbwFBUTJGd.Mh1Zm.Jhj0BR9NDkqb0N901CQGTxh4KunvrOy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 00:54:59', NULL, '2022-06-17 00:54:59', 1),
(272, 'j2', 'j2@gmail.com', NULL, '$2y$10$WmDP45eSokONk4E.WNn9wu/1iAtR9I/EGxForzRCHr97iMfpYzqpu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:06:42', NULL, '2022-06-17 01:06:42', 1),
(273, 'a8-11', 'a@gmail.com', NULL, '$2y$10$zwt9ZOC5F3sibS4/afdWN.R5UiTW4LMCXq5rT9PJIHjYxmCy1psty', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:09:18', NULL, '2022-06-17 01:09:18', 1),
(274, 'a8-11', 'a1@gmail.com', NULL, '$2y$10$Im2oI6uzGyorvY4alv6cDufuoSaDF4rg6d3.tfTouzWMt3XLbGoju', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:16:52', NULL, '2022-06-20 03:10:04', 1),
(275, 'j3', 'j3@gmail.com', NULL, '$2y$10$UFgmGh0fpd6bApaWtMffQeVlKFTKxyOoDEVvzdAoFeceusFJ0UwJ6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:18:06', NULL, '2022-06-17 01:18:06', 1),
(276, 'b8-11', 'b@gmail.com', NULL, '$2y$10$kaLcH4VAF/4XU9qht1tEi.BvSDWLDEazlQSma/kR2W1HDO44Ej0dC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:25:42', NULL, '2022-06-17 01:25:42', 1),
(277, 'j4', 'j4@gmail.com', NULL, '$2y$10$BH0BE/tpcadwTNMVDeZ1nOt9lEKMbktmMV.FtiQwMbfkS0bLi8gPi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:26:01', NULL, '2022-06-17 01:26:01', 1),
(278, '8-11', 'c@gmail.com', NULL, '$2y$10$Im2oI6uzGyorvY4alv6cDufuoSaDF4rg6d3.tfTouzWMt3XLbGoju', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:30:52', NULL, '2022-06-17 01:30:52', 1),
(279, 'r1', 'r1@gmail.com', NULL, '$2y$10$11dXgmjZ7XuQPMHKOGBBHOYM.6OMm1awRvkQpsIdwbDEnpMke29xu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:31:23', NULL, '2022-06-17 01:31:23', 1),
(280, 'D8-11', 'D@GMAIL.COM', NULL, '$2y$10$8NuyujFfQBxDR8QbywCSYufMK9XJC211Vb9SLi6gILuazrCfqUvwK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:33:53', NULL, '2022-06-17 01:33:53', 1),
(281, 'a8-11', 'a11@GMAIL.COM', NULL, '$2y$10$BbocLesbI3QzTyrgwS7HO.bUvtr04OqQRZwkwhb50sHhl8zrFpz2C', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:36:22', NULL, '2022-06-17 01:36:22', 1),
(282, 'r2', 'r2@gmail.com', NULL, '$2y$10$jdBSCrmfXG2b334i94PR6.yQ3wfx0cqqMXiuTXvFJBCYW0pvduK7i', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:42:02', NULL, '2022-06-17 01:42:02', 1),
(283, 'b8-11', 'b1@gmail.com', NULL, '$2y$10$JGvGRAN2j8Nb6xmMi5Myp.wMAtVT34p.lQLeA4NwwWVBLm1uiqbHa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:45:20', NULL, '2022-06-17 01:45:20', 1),
(284, 'r3', 'r3@gmail.com', NULL, '$2y$10$BJHwjJHtgrbpIxrfYOgySOcjiz6SK9lo1KOrwUQPmCUJIASqPoZ.2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:47:01', NULL, '2022-06-17 01:47:01', 1),
(285, 'r4', 'r4@gmail.com', NULL, '$2y$10$mOZxv.saW/292WZFlcQ6XumMr8SzzWET7qU1Yp6qIQNF8w2F6YKD.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:51:54', NULL, '2022-06-17 01:51:54', 1),
(286, 'c8-11', 'c11@gmail.com', NULL, '$2y$10$WDHfUOfm/V/rasBUb5DEq.A1aUt1/JpUArS7F6blh.J82um02tybC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:53:41', NULL, '2022-06-17 01:53:41', 1),
(287, 'd8-11', 'd11@gmail.com', NULL, '$2y$10$uyf4pqrAbwRqmIKW0j4cMuz1jKKlQ6b0Ud3GLPjVndwzW8YWWlA92', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 01:57:07', NULL, '2022-06-17 01:57:07', 1),
(288, 'kavi singh', 'kgf@gmail.com', NULL, '$2y$10$hjTx1KHki8o4rzPHNMX59uSW9KQBgKgHOIf7HzLUq00pbJv4wqgnu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-17 02:43:51', NULL, '2022-06-17 02:43:51', 1),
(289, 'Manish kumar', 'play1@gmail.com', NULL, '$2y$10$Zkt5JddkZ4YxpicHFeFZAep201sg5X.YkZilyduLdBMTM9hvX7CNy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-18 00:10:32', NULL, '2022-06-18 00:10:32', 1),
(290, 'Rohit', 'rohit@gmail.com', NULL, '$2y$10$LnBdmD/yP1vyAkAI8j7.ruENZCC6N3gO8gx.Vjm44zZIzk8DjvLOG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-19 03:08:40', NULL, '2022-06-19 03:08:40', 1),
(291, 'Rahul singh', 'vikasofficial@gmail.com', NULL, '$2y$10$ScjVTVXX.f6XLqzuT81Gge3KVh4oEgYJw5F6ZLigxHqq5xcpcvOda', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-19 11:17:11', NULL, '2022-06-19 11:17:11', 1),
(292, 'Rahoni Yadav', 'rohini@gmail.com', NULL, '$2y$10$8TTpm.dwbgEFfS9TVL5MBOmR6.grbJLlmtLs2mmSF7pO2uKZy27wS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-19 13:11:04', NULL, '2022-06-19 13:11:04', 1),
(293, 'Amarjeet Kumar', 'amarjeet.k0903@gmail.com', NULL, '$2y$10$kfHQjAa8WCp3bB8wS/MSDO98UW4S5BlO7WhUyoQmvQvkwl2W/ASrG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 00:20:50', NULL, '2022-06-20 00:20:50', 1),
(294, 'Amarjeet Kumar', 'amarjit.k0903@gmail.com', NULL, '$2y$10$8CrikKVrNkNlKLGU7MyWO.IjZmrchfB6XAqKIVGYDN2iOR/CWBM6S', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 00:31:48', NULL, '2022-06-20 00:31:48', 1),
(295, 'Amarjeet Kumar', 'amarje0903@gmail.com', NULL, '$2y$10$iSFguGDGvWwysSSzTpvZXuYrcL.g42Ij0JF77HI3/wycx1KBe5GeK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 00:33:59', NULL, '2022-06-20 00:33:59', 1),
(296, 'amarjeet', 'amarjeet6592@gmail.com', NULL, '$2y$10$Ey8bhEvCZriQ.8IoScovhe5atevg0CCGnlF5lZXKK6gbtlXqcKWQO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 00:37:35', NULL, '2022-06-20 00:37:35', 1),
(297, 'kejdfk', 'kjk@gmail.com', NULL, '$2y$10$KEbcU9ylp.b3mTZMgfFkJejUQGxY2HYxedKERjB80P89WZ2QPD5ou', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:18:58', NULL, '2022-06-20 03:18:58', 1),
(298, 'amarjeet', 'amarjt.k0903@gmail.com', NULL, '$2y$10$y0Ow/zFOqoDPoAkA3MHHiOw7BTn20gavFBzb9VVlWiM55lIttAoWC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:54:32', NULL, '2022-06-20 03:54:32', 1),
(299, 'amarjeet', 'ffdfggggf@gmail.com', NULL, '$2y$10$zSJlJ3Gqks9L9kjhMrNRLeFv93uBgPBfKijOLg.aVVb4za.nvPTsa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 03:56:45', NULL, '2022-06-20 03:56:45', 1),
(300, 'Ashu Kumar', 'asshukumar0903@gmail.com', NULL, '$2y$10$vem0S5wdOGXI5ER2Ggq5MO8lm6Rj/rrjcPpL.VPe9XgV7OU3PczxW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 05:58:29', NULL, '2022-06-20 10:54:32', 1),
(301, 'jjj', 'nd.ltp@gmail.com', NULL, '$2y$10$KYPHxrQ0Lv7tilD11fjWN.EcCkAWAGLQ9EJEVcH0/tKywwO2PbDR.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 07:18:26', NULL, '2022-06-20 07:18:26', 1),
(302, 'Ashu Kumar', 'g23@gmail.com', NULL, '$2y$10$ABjD/a74KiG0HgzF/FUdoeN.O7MRxXpw6jXJq7op/vWIgJggw9XoS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 09:53:51', NULL, '2022-06-20 09:53:51', 1),
(303, 'VIKAS KUMAR SONWANI', 'vikassonwanipk@gmail.com', NULL, '$2y$10$q9phd0NQpzM0Ngwu4ZpMHu8uhnhrzWlRPhZFPQqytb4R.H/IKRKBW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 10:12:22', NULL, '2022-12-07 04:26:38', 1),
(304, '123', 'aa111@gmail.com', NULL, '$2y$10$o3.s.3NyBq5E8mvshuzLFuNhQ66.1G2jNLy7N22FSqkqEPsQDL8au', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 10:18:55', NULL, '2022-06-20 10:18:55', 1),
(305, 'p', 'p@gmail.com', NULL, '$2y$10$TtRMnYNOGHtTHUbvL1F26e17Sshl9ok64m5F/88OqYGrOi2Fu6S.a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 10:25:55', NULL, '2022-06-20 10:25:55', 1),
(306, 'zzz', 'zzz@gmail.com', NULL, '$2y$10$vKXn/h1yLyOWAkrN99mSUe/PKfpWSO.B3WNIGEdu8vo8T9ac0bP6S', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 10:29:23', NULL, '2022-06-20 10:29:23', 1),
(307, 'jshf', 'ldkfk@gmail.com', NULL, '$2y$10$DYRkbIfSroUCUrJ6AY2Es.Kd6eAHLD1bHSjkW4Aw/Ec1blyz/HtDe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 11:06:38', NULL, '2022-06-20 11:06:38', 1),
(308, 'Rahul', 'rahul@gamil.com', NULL, '$2y$10$kNMj.BA5LQ9AvvtBOleDyeoeBsAUWB7KZfxuPcZzeAIix.Ij06lWy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 11:12:21', NULL, '2022-06-20 11:12:21', 1),
(309, 'VIKAS KUMAR SONWANI', 'vikasss@gmail.com', NULL, '$2y$10$qjXXRF/Mc2ydlT/DiJGBhecSSruUeVpDjipEkbIismJMF5v7eiZNm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 11:16:48', NULL, '2022-06-20 11:16:48', 1),
(310, 'Ashu Kumar', 'aaaa1@gmail.com', NULL, '$2y$10$sU8JCMsAGyLAeOZyB5fnmeRP0lFynLDESbaO3sA4uFt4CKHpL4DFS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 11:35:12', NULL, '2022-06-20 11:35:12', 1),
(311, 'Ashu Kumar', '123a1@gmail.com', NULL, '$2y$10$ztWpHX2C0o.MToNuM8k5TOmd41e08PQ0wc9CSaLrHhdVDFpnI1rWK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 12:20:23', NULL, '2022-06-20 12:20:23', 1),
(312, 'jxh', 'aggg@gmail.com', NULL, '$2y$10$TZI/se1cJGNFqOIgihdkfOcGEyR8d1LMVcUG8t3KZq3KIEhFuwQPa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-20 12:33:22', NULL, '2022-06-20 12:33:22', 1),
(313, 'gargi gupta', 'gargigupta321@gmail.com', NULL, '$2y$10$pgfMe8nKwXOJq3EpWD/NY.DztrhxisNyiV.OezFbYjrb1rlHbeFCu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 02:53:59', NULL, '2022-06-22 05:49:29', 1),
(314, 'Gargi Gupta', 'gargigupta359@gmail.com', NULL, '$2y$10$hLWMF65iMK2UjOxrVsja0.H/0SYdNCnthKvyS4BQHjkOFmoQy9Y5S', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-22 05:41:47', NULL, '2022-06-22 05:47:50', 1),
(315, 'Arpit', 'aa11@gmail.com', NULL, '$2y$10$G8QKteka672OMIi8Pif9feUY2wEOixxODdOOOr1tbKkaO/IZ9zh2G', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 23:31:18', NULL, '2022-06-25 23:31:18', 1),
(316, 'aa', 'aaaa@gmail.com', NULL, '$2y$10$Svng.f9U.mqohn/1f9ounePcO3dEaSF/14vSv4ulLxOJ.4dhjR2Nq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-25 23:57:03', NULL, '2022-06-25 23:57:03', 1),
(317, 'AA', 'aaa@gmail.com', NULL, '$2y$10$FZZdWuD0./a7Qt.gyakf5uC/IJWkrPEM5fpGRbrZNWxx.KPtRlmai', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:08:17', NULL, '2022-06-27 04:08:17', 1),
(318, 'g', 'g1@gmail.com', NULL, '$2y$10$za4Lu3Kb3flkpaQMwYb7BeTm80G2wby.PQoNxQBN1N08dp2Nu4.G6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:10:04', NULL, '2022-06-27 04:10:04', 1),
(319, 'g', 'g2@gmail.com', NULL, '$2y$10$n8d/UzcQlOqy9/J8JbtDk.d0gIIlIDYNZWY4PIwOshx0ab3.4qvVy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:15:30', NULL, '2022-06-27 04:15:30', 1),
(320, 'BB', 'bb@gmail.com', NULL, '$2y$10$6MbRBsd.Cn28pXWcJgP0t.fJj0lPRD..l4mm2JGcAgQ.7B0QsWAri', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:16:28', NULL, '2022-06-27 04:16:28', 1),
(321, 'CC', 'cc@gmail.com', NULL, '$2y$10$g7hk1fvDp7ddaJ1uuTfuveMRM.HD4h.ViD4Wxvia0A.Ru2rnH/cAm', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:19:26', NULL, '2022-06-27 04:19:26', 1),
(322, 'q', 'q@gmail.com', NULL, '$2y$10$RkQslAY1rtAAsWTZhPonnOIYr8.kfcYD7tlc1o89G0sERQdJ4WhdK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:20:01', NULL, '2022-06-27 04:20:01', 1),
(323, 'DD', 'dd@gmail.com', NULL, '$2y$10$LQi//vX/.lsT8p7v0G19Q.ENRJiNqdMKPzVztCey93RMk0BDeBz.W', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:23:07', NULL, '2022-06-27 04:23:07', 1),
(324, 'q', 'q1@gmail.com', NULL, '$2y$10$4dNiUnlNCXsPsTzwozrf6u5jeMn2bHIEYCRxL2RP/5cMT8nVQ1Keu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:23:44', NULL, '2022-06-27 04:23:44', 1),
(325, 'AAA', 'a12@gmail.com', NULL, '$2y$10$yEUcXiZVhHxi8hDojUZkNOrqacMhh5nwO99kjtKghcZ0CaSr590ra', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:31:40', NULL, '2022-06-27 04:31:40', 1),
(326, 'BBB', 'bbb@gmail.com', NULL, '$2y$10$q7OxWS4G4KJXiPKH2jVtDu6RJyui3XUzxZ91oJ7aP3qufN0FsHk3a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:34:34', NULL, '2022-06-27 04:34:34', 1),
(327, 'y', 'y1@gmail.com', NULL, '$2y$10$NS9CNJh1tQWHbjSN9aVR3eeXxkVGfY3iiMGn1bj0frtoZc5W91I0m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:37:20', NULL, '2022-06-27 04:37:20', 1),
(328, 'CCC', 'ccc@gmail.com', NULL, '$2y$10$dTSfhAznIK2enr04ugPxGuITVTE9S489DJHgVUWjmk3DkPkhXVmem', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:41:22', NULL, '2022-06-27 04:41:22', 1),
(329, 'y', 'y2@gmail.com', NULL, '$2y$10$saDh81yq6CMoiZIbZL4T3.iyN2HDOlZbv.CfUIUodAAeHutvnQx2i', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:43:35', NULL, '2022-06-27 04:43:35', 1),
(330, 'DDD', 'ddd@gmail.com', NULL, '$2y$10$0/J/PQ6X7DiVtC/fMfYXw.w9mtJV7PeITelsxdWlIJO6H.8KMj/Hq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:44:10', NULL, '2022-06-27 04:44:10', 1),
(331, 'x1', 'x1@gmail.com', NULL, '$2y$10$ba24Z.nqdKULv84NLmSk8.hXsGNbn.dOk2AOUfZE.9mkRhU856Jqa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:48:36', NULL, '2022-06-27 04:48:36', 1),
(332, 'y', 'y3@gmail.com', NULL, '$2y$10$MLJ/BW0fLTAjQqGkFmnnzuZiGsFzlDPotrPnQKZ8GFswSpLKALp5O', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:48:41', NULL, '2022-06-27 04:48:41', 1),
(333, 'x2', 'x2@gmail.com', NULL, '$2y$10$PiGvnuqn64w2WxaBgt0l8.d3ml323Dkqo6Ou6nfMMj6LP.C6M5FtK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:51:15', NULL, '2022-06-27 04:51:15', 1),
(334, 'y', 'y4@gmail.com', NULL, '$2y$10$VHy1UHNrlixaU6rZppBqXus7lveRPAMvDe.RfFy4DzXZyRxXJ.F0y', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:53:52', NULL, '2022-06-27 04:53:52', 1),
(335, 'x3', 'x3@gmail.com', NULL, '$2y$10$jnmLZjxz47dtiOAFoR8nh.9KSdQuG3vwOy26SHNlUds7Oj6rmuOpO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:55:36', NULL, '2022-06-27 04:55:36', 1),
(336, 'x4', 'x4@gmail.com', NULL, '$2y$10$qBAjvJ89EyZ6S/hsMNApRuybo64DlVMCc.hIqYAGmFAtu0mFHd2CS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:58:17', NULL, '2022-06-27 04:58:17', 1),
(337, 'm', 'm1@gmail.com', NULL, '$2y$10$Tn3HC2sXH1yX9IXyIJfJEePDQaJSQVZXaavavpor9lvKaJvd9tcFO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 04:58:44', NULL, '2022-06-27 04:58:44', 1),
(338, 'm', 'm@gmail.com', NULL, '$2y$10$W./iXlThDp9Ipwa7hiF6S.gLQ7YjNxRFPtfOYklFF9UT5TymSgQpC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 05:04:29', NULL, '2022-06-27 05:04:29', 1),
(339, 'm', 'm2@gmail.com', NULL, '$2y$10$CGZQmvMi6e9lwvFojKpGJusHorSiGb5JR9Emz8KMHJAReRdhX00r2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 05:09:31', NULL, '2022-06-27 05:09:31', 1),
(340, 'VIKAS KUMAR SONWANI', 'vikassonpk@gmail.com', NULL, '$2y$10$FyQwq8Wv0CVIp/LzgWnTzOfPeiiwPgo5fCnNeW9xPdI7ZK8Sm06BS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-29 13:10:33', NULL, '2022-06-29 13:10:33', 1),
(341, 'm', 'm3@gmail.com', NULL, '$2y$10$bN9gBOqMhMC6dsx7KvXttedsPjQqhoDBYU7yeq3BkoqqSvrzq0I.m', NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-30 04:36:10', NULL, '2022-06-30 04:36:10', 1),
(342, 'c', 'c111@gmail.com', NULL, '$2y$10$fg0Y8WWuAIlnmooY9rnXsu2C3wNMfs8RqEZsSZ3.mZKfOt4B4/IhS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-02 03:16:17', NULL, '2022-07-02 03:16:17', 1),
(343, 'ss', 'ss@gmail.com', NULL, '$2y$10$6hLi0lp2rCnORm8URCW8O.LWP2hEo.HoGFvok1etzPW6YZzzUADYO', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-03 04:59:08', NULL, '2022-07-03 04:59:08', 1),
(344, 'male', 'male@gmail.com', NULL, '$2y$10$wY0vcDSHlf1TcNHqx3GM7Oe.rYtyBX5l4QZ0G4ORwwlc3juwUagj6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-04 08:55:01', NULL, '2022-07-04 08:55:01', 1),
(345, 'PRIYANKA PATEL', 'pinkupatel086@gmail.com', NULL, '$2y$10$gTisWHCHrapo8EXBbL3ro.WsraCkmsMD84C1GOzKA1ePiMgj4jPhS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-13 21:01:43', NULL, '2022-07-13 21:01:43', 1),
(346, 'Arpit', 'arpitfff1@gmail.com', NULL, '$2y$10$TcasgEGhdoEEhVhTer5bsecSbwMFNHh2R0gA66h7Fz40mK5bFv6oS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-15 07:17:41', NULL, '2022-07-15 07:17:41', 1),
(347, 'Yaman Kain', 'yamankumarkain01@gmail.com', NULL, '$2y$10$wwE8WcGdUhpfHnY2E.xDCO8yNk0wP6oaGimMv4LfDstQydCLBoJHy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 10:08:57', NULL, '2022-07-25 10:08:57', 1),
(348, 'Rahul Kumar', 'Rahulkumar01@gmail.com', NULL, '$2y$10$6xMJcObqYVoASTUxooyDEeVNYp011EBhqoJw8HuCqakoqoA/GNkEa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 10:14:19', NULL, '2022-07-25 10:14:19', 1),
(349, 'Jitendra Kumar', 'jitendraKumar@gmail.com', NULL, '$2y$10$cPHuedILn/JK9qszyxZ5Au8BgyZEeiGk3qoQ6TY3mJmkoMYope7ry', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-25 10:32:40', NULL, '2022-07-25 10:32:40', 1),
(350, 'Player Harry', 'player123@gmail.com', NULL, '$2y$10$QFWDf6CW9SEB8VaKc7OYruvfXllwjsL6U.okLJnMwoJtJ.DmYSmBG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 06:07:55', NULL, '2022-07-26 06:07:55', 1),
(351, 'Referee Bhai', 'refereebhai@gmail.com', NULL, '$2y$10$Oo2enzijWdDaGRhOBdAyAe4iYC4kMplQB9ZsOXjeSGmN4VcFG50Wy', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 06:14:07', NULL, '2022-07-26 06:14:07', 1),
(352, 'Coach Bhai', 'coachbhai@gmail.com', NULL, '$2y$10$dMLnU9oHydJZ4U5xzVh.1uGgHm.w/z.HKaCXTBBck/rnRkiI.pcQu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 06:16:27', NULL, '2022-07-26 06:16:27', 1),
(353, 'Instructor bhai', 'instructorbhai@gmail.com', NULL, '$2y$10$aJzJMq9b51Pq8pnN9Xu5l.V7xmuPnCx9vsns7QvujkXTPUAfWbNLS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 06:19:24', NULL, '2022-07-26 06:19:24', 1),
(354, 'Avi Chakrovarty', 'AviChak01@gmail.com', NULL, '$2y$10$Jnn8BoXVbY7sHxYuXHbFJ.70saf/ykpufmQ2LfoBgGbcjo3Elnlxi', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 09:29:10', NULL, '2022-07-26 09:29:10', 1),
(355, 'Suman kumar', 'kumarsuman@gmail.com', NULL, '$2y$10$VuN2q7XVuoQB2qKHQfVvmO3v9I628LwWYa2zgAiYCK6dI5suyMm1W', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-26 10:08:50', NULL, '2022-07-26 10:08:50', 1),
(356, 'g', 'g3@gmail.com', NULL, '$2y$10$tWleOGwZLuHE8XHTs0jRouVom3.Zy/gDbdZ8hLGhnCNtscm3RZHHa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:21:22', NULL, '2022-07-27 03:21:22', 1),
(357, 'g', 'g4@gmail.com', NULL, '$2y$10$KhakMKs9VUjd1Pg6q09meevEA6keaNWgtWhPytAUUJM8i49nijqmK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:26:53', NULL, '2022-07-27 03:26:53', 1),
(358, 'K 8-11', 'k@gmail.com', NULL, '$2y$10$NaRTsgyPgATcMm0AeXdQ.uCeNpHcYsWRQw.DZQRiQKN.4A9.bCG4i', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:28:36', NULL, '2022-07-27 03:28:36', 1),
(359, 'm', 'm4@gmail.com', NULL, '$2y$10$CqQx0FT9EUSkc1OC/w2j4.0Sy5eNLaYgAi7xqWUBPZx32RFx.qVIK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:32:12', NULL, '2022-07-27 03:32:12', 1),
(360, 'Deepak', 'deepak@gmail.com', NULL, '$2y$10$LG3jkRdnCXphDThPqpUip.fAImz21.FLYB/Uuyqcqp8bZPf0zjHm6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:35:57', NULL, '2022-07-27 03:35:57', 1),
(361, 'lavi', 'lavi@gmail.com', NULL, '$2y$10$Vry52rvt9mC619FuwkTRPOYztBkEZ0KfsFE71jzYoSE4IDeo2k2mK', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:42:16', NULL, '2022-07-27 03:42:16', 1),
(362, 'Amit', 'amit@gmail.com', NULL, '$2y$10$9SO3vs0hZgnIeHnIWihxHufSyUJvJc4zTMDcX92BrB0JUX4jEVb4C', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:48:33', NULL, '2022-07-27 03:48:33', 1),
(363, 'q', 'q2@gmail.com', NULL, '$2y$10$wqvW9CgYbu0YLQ.fhvEoUeilKKPncPRtjDmsqQjVbshhwVUH3lO7a', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:49:14', NULL, '2022-07-27 03:49:14', 1),
(364, 'akki', 'akki@gmail.com', NULL, '$2y$10$hQo6TH7opje5/IfbWX.G/Ocqap8963ykQa98WCuGE0v8ZUYTTrL2S', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:53:52', NULL, '2022-07-27 03:53:52', 1),
(365, 'q', 'q3@gmail.com', NULL, '$2y$10$MoiZmcCYo5GBhe9CrUmm9.AlzPE1Jrm1LX8ZnlGVGhyC819f.c.mC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 03:54:35', NULL, '2022-07-27 03:54:35', 1),
(366, 'nishu', 'nishu@gmail.com', NULL, '$2y$10$sSRXXFeYBkI70bnpafQWGuM/i2dt9izi32j8Tgrgk6BNJC2zcVxka', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:01:51', NULL, '2022-07-27 04:01:51', 1),
(367, 'q', 'q4@gmail.com', NULL, '$2y$10$TXtD8mbhkVefrgHuIf1LZ.G6.KL9TqeEpdnj/CQ9dWlpWAvaWNbra', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:04:23', NULL, '2022-07-27 04:06:11', 1),
(368, 'ankit', 'ankit@gmail.com', NULL, '$2y$10$/h7.0T9MpFhmfDgSrKjBVuLnh49qWA59m7Gj1kJJdy5EpK1b1xbXC', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:04:47', NULL, '2022-07-27 04:04:47', 1),
(369, 'vimal', 'vimal@gmail.com', NULL, '$2y$10$/v0wbPv6/DdGRl6UigeROepfcyjlx7YlJo6JYECCBEKJRbmC2mtLu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:08:44', NULL, '2022-07-27 04:08:44', 1),
(370, 'e', 'e@gmail.com', NULL, '$2y$10$EGvcO0AiiBkBpM5eSbEV9OYke3MFFjhEvbFbgTBBbq0LyE3gVDRRW', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:12:54', NULL, '2022-07-27 04:12:54', 1),
(371, 'f', 'f@gmail.com', NULL, '$2y$10$1j3iCRU3IguPbpoUW8soRuv6NnVneuJMKFnJKRrdUjOXgJcbHsfv2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:17:20', NULL, '2022-07-27 04:17:20', 1),
(372, 'q', 'q5@gmail.com', NULL, '$2y$10$aD68QwptTvrIyr63C9/CFOoCUUI82uXDQl/9i5OGrdF8D5ylZkqOu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:19:14', NULL, '2022-07-27 04:19:14', 1),
(373, 'g', 'g@gmail.com', NULL, '$2y$10$qX.DLyiTlJ/8Ulj0uIqx1Oe/qOQ28aD26OxmQS7ggW9BiI6BHQCZG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:20:01', NULL, '2022-07-27 04:20:01', 1),
(374, 'h', 'h@gmail.com', NULL, '$2y$10$aHIqey6PB5VYoJK9ImFzy.zl5ZKm0heXgi.Pz03bxEj34liXTQpGa', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-27 04:22:56', NULL, '2022-07-27 04:22:56', 1),
(375, 's', 's@gmail.com', NULL, '$2y$10$CLTlULYnFf.npAX5TXg8ze7GTpfAVouKcdxfw1mnKOhjTh3TtyOry', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 02:08:09', NULL, '2022-07-29 02:08:09', 1),
(376, 's', 's1@gmail.com', NULL, '$2y$10$UIn1zg7bgvtqsezEfmwMiedniV842hsftfQEuRZNnDw61URuBtdxG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 02:14:28', NULL, '2022-07-29 02:14:28', 1),
(377, 'Jitendra Kumar', 'jitendraKumar001@gmail.com', NULL, '$2y$10$MO8QD5kwJ.furv1L3tX2h.8O2i1kX7T8xoefD5PZmSh56VE9.5GFe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-29 18:28:38', NULL, '2022-07-29 18:28:38', 1),
(378, 'Kabir Singh', 'kabirsingh01@gmail.com', NULL, '$2y$10$m6Sx5u0YErGGjr1K36mrR.NOsjypKddjgmexJfgLmnSF3004ybZIG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-05 04:59:25', NULL, '2022-08-05 04:59:25', 1),
(379, 'Gargi', 'g1998@gmail.com', NULL, '$2y$10$7A2Evi148.08a76OeQt3Zunjoudauks0A30CHtWqRKnV/RdKK4VB6', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-27 03:01:51', NULL, '2022-08-27 03:10:24', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_level_id` (`academic_level_id`),
  ADD KEY `duration_type_id` (`duration_type_id`),
  ADD KEY `academic_year_id` (`academic_year_id`);

--
-- Indexes for table `course_fees`
--
ALTER TABLE `course_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_countries_id_foreign` (`countries_id`),
  ADD KEY `districts_states_id_foreign` (`states_id`);

--
-- Indexes for table `duration_type`
--
ALTER TABLE `duration_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_category`
--
ALTER TABLE `fees_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_receipt`
--
ALTER TABLE `fees_receipt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_receipt_details`
--
ALTER TABLE `fees_receipt_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_receipt_document`
--
ALTER TABLE `fees_receipt_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_receipt_pending`
--
ALTER TABLE `fees_receipt_pending`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar_permission_map`
--
ALTER TABLE `sidebar_permission_map`
  ADD PRIMARY KEY (`id`),
  ADD KEY `spm_idfk_1` (`permission_id`),
  ADD KEY `spm_idfk_2` (`sidebar_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=272;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_fees`
--
ALTER TABLE `course_fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=751;

--
-- AUTO_INCREMENT for table `duration_type`
--
ALTER TABLE `duration_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees_category`
--
ALTER TABLE `fees_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fees_receipt`
--
ALTER TABLE `fees_receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees_receipt_details`
--
ALTER TABLE `fees_receipt_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees_receipt_document`
--
ALTER TABLE `fees_receipt_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_receipt_pending`
--
ALTER TABLE `fees_receipt_pending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80413;

--
-- AUTO_INCREMENT for table `sidebar_permission_map`
--
ALTER TABLE `sidebar_permission_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=380;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sidebar_permission_map`
--
ALTER TABLE `sidebar_permission_map`
  ADD CONSTRAINT `spm_idfk_1` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  ADD CONSTRAINT `spm_idfk_2` FOREIGN KEY (`sidebar_id`) REFERENCES `sidebar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
