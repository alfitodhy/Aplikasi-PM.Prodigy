-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2024 pada 13.10
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengaduan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `icon` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`category_id`, `title`, `icon`, `description`) VALUES
(14, 'Project Management Professional', 'LOGO_PT_PMP.png', 'Project Management mungkin bukan hal yang asing bagi kita, namun sudah tau kah kita tentang PMP? Project Management Professional sterfikasi yang paling populer di bidang project management\r\n\r\n\r\nYanda Satria H.S, PMP, PMI-SP, PMI-RMP'),
(15, 'Apa penyebab orang gagal di 1st Attempt PMP Exam?', NULL, 'Sebelum kita bahas penyebab orang gagal di 1st Attempt PMP, maka kita perlu tau syarat kelulusan PMP itu terlebih dahulu.\r\n\r\n\r\nYanda Satria H.S, PMP, PMI-SP, PMI-RMP'),
(16, 'Yakin dan konsisten itu kuncinya', NULL, 'Secuil kisah sukses teman lulus PMP\r\n\r\nYanda Satria H.S, PMP, PMI-SP, PMI-RMP');

-- --------------------------------------------------------

--
-- Struktur dari tabel `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `countries`
--

INSERT INTO `countries` (`country_id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `question` varchar(300) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `visits` int(11) DEFAULT 0,
  `created` datetime DEFAULT NULL,
  `status` enum('0','1','2') DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `faqs`
--

INSERT INTO `faqs` (`faq_id`, `category_id`, `question`, `answer`, `visits`, `created`, `status`) VALUES
(3, 14, 'Jika berbicara tentang Project Management, maka kita tidak bisa lepas dari lembaga yang bernama PMI (Project Management Institute) yang bermarkas di Pensylvania, Amerika', '<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">PMI ini merupakan satu dari lembaga keprofessian Project Management yang sangat terkenal dan terstruktur diantara yang lain. PMI melayani lebih dari lima juta professionals termasuk lebih dari 680,000 members in 218 negara diseluruh the world, dengan 304 cabang daerah dan 14,000 volunteers yang melayani members lokal di seluruh 180 negara.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Ada beberapa sterfikasi yang dikeluarkan oleh PMI. yang paling terkenal dan akan kita bahas adalah PMP (Project Management Professional) sudah diselenggarakan sejak tahun 1984 hingga hari ini, total member yang sudah PMP ada sekitar 1 juta Professional di seluruh dunia</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Lalu bagaimana persyaratan untuk bisa ikut ujian PMP?</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Secara umum ada dua syarat, pengalaman kerja di bidang Project Management minimal 3 tahun untuk teman teman lulusan Sarjana atau 5 tahun untuk teman-teman yang lulusan diploma.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Lalu yang paling penting 35 Hours Education Professional Project Management.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Sebenarnya tidak sulit jika melihat syaratnya, namun fakta nya 40-50% orang yang ikut ujian PMP gagal di 1st Attempt nya, sungguh mengejutkan sebenarnya.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Kesempatan selanjutnya kita akan bahas Faktor yang meyebabkan kegagalan para peserta dalam melakukan ujian PMP.</span></p>', 6, '2024-06-20 16:24:32', '0'),
(4, 15, 'Kegagalan bukan karena kita tidak bisa, namun kurangnya persiapan yang sering kali membuat kita gagal.', '<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Real Exam PMP terdiri dari 180 soal yang harus dikerjakan selama 230 menit (hampir empat jam) dan diberikan waktu break sekitar 10 menit tiap selesai sesi 1 dan sesi 2, jadi Exam PMP dibagi menjadi 3 sesi, dimana setiap sesi diberikan 60 pertanyaan yang harus kita jawab.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Sampai hari ini memang belum ada pengumuman resmi dari PMI mengenai syarat minimal berapa persen soal yang harus dijawab dengan benar, informasi yang kami dapatkan dari beberapa sumber mengatakan bahwa di tahun 2005 pernah ada Statement bahwa syarat kelulusan PMP adalah 60% soal harus dijawab dengan benar.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Dari mentor, study group, dan forum forum membahas syarat minimal kelulusan PMP, rata menyarankan diatas 70 - 80% soal harus benar, namun pribadi dari kami dengan nilai diatas 70% saya sudah cukup untuk anda lulus serta mendapatkan label Certified PMP.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Lalu apa penyebab orang gagal dalam 1st Attempt PMP Exam?</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Mari kita bahas.</strong></span></p>\r\n\r\n<p><strong><span style=\"font-size:14px\">Pertama</span>,</strong><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\"> jelas kurang persiapan, bahkan sering kali sudah mendaftar eligble PMP namun pascanya sangat kurang persiapan, latihan soal, dan pemahaman konsep sehingga saat real exam PMP pastilah akan gagal.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Kedua,</strong></span><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\"> skill reading yang masih perlu banyak peningkatan, ujian PMP memang ada dalam bahasa Indonesia, namun istilah atau terminologi jika di bahasa Indonesia kan itu akan menjadi sangat aneh, maka lebih baik mengambil ujiannya dalam bahasa Inggris, sedangkan sebagian dari kita sangat jarang mendapatkan ujian dalam bahasa Inggris, sehingga ini berdampak ke pemahaman soal yang kurang tepat, maka solusi nya adalah latihan soal PMP sebanyak mungkin untuk meningkat kemampuan reading bahasa Inggris kita.</span></p>\r\n\r\n<p><strong><span style=\"font-size:14px\">Ketiga</span>,</strong><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\"> motivasi yang kurang, buat teman-teman yang diperintahkan oleh perusahaan untuk mengambil sterfikasi PMP ini acap kali kurang serius setelahnya, kunci paling penting dari persiapan PMP ini adalah konsistensi, dengan konsisten maka kita bisa sabar melalui proses pembelajaran untuk lulus PMP.</span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Keempat,</strong></span><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\"><span style=\"font-size:14px\"> </span>tidak punya mentor atau pembimbing yang bisa mengarahkan. Ingat mentor atau coach atau pembimbing ini sangat perlu untuk kita mempercepat proses belajar, kita tidak perlu lagi melakukan banyak trial and error, uji coba kesalahan, dan fokus dengan langkah yang dijamin efektif serta efisien dalam proses persiapan real exam PMP.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Bagi kalian yang masih bingung mau mulai dari mana, apa yang harus disiapkan, apa yg harus dipelajari, ada baiknya gabung dengan study grup kami dengan mentor mentor yang sudah meluluskan banyak Certified PMP, silakan email atau kontak admin kami untuk mendaftarkan diri kalian.</span></p>\r\n\r\n<p>&nbsp;</p>', 7, '2024-06-20 16:28:47', '0'),
(6, 16, 'Teman saya asal medan ini sangat ingin mempunyai sterfikasi International di bidang Project management, lebih dari 8 tahun bekerjan di salah satu perusahaan pengolahan alumunium terbesar di Indonesia, spesifiknya bekerja di proyek-proyek pengembangan operation pabrik alumunium ini', '<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Awal mula kenal dengan beliau melalui sobat kampus saya. Di awal kita ngobrol tentang persiapan beliau untuk ujian PMP yang hanya sisa 2 pekan lagi. Lalu saya berikan beberapa tips sehingga 2 pekan terakhir beliau ini fokus sekali melalukan latihan soal sampai-sampai banyak waktu dengan keluarga yang dikesampingkan.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Tibalah di hari ujian, mengikuti ujian dengan penuh ketegangan, karena baru pertama kali ujian dalam bahasa inggris dengan standard sterfikasi International, serta melatih endurance dan mental untuk menjawab semua 180 soal dalam waktu 230 menit atau 4 jam. Karena terlalu tegang dan pertama kali sehingga teman ini kebelet untuk ke belakang diwaktu sesi pertama sedang berlangsung, padahal peraturan PMP melarang orang untuk menjauh dari kamera ketika ujian sedang berlangsung, sehingga dengan tegas PMP langsung mengeluarkan teman kita dari system ujiannya dan dinyatakan gagal. Sempat sedih namun teman ini benar-benar tidak mau menyerah, langsung disaat itu juga mengajukan banding ke PMI untuk diberikan kesempatan ujian lagi, setelah memberikan alasan tepat 2 hari kemudian PMI menjawab permintaan teman ini dan diberikan kesempatan sekali lagi untuk ujian di satu bulan berikutnya.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Kemudian teman saya ini menceritakan masalahnya ke saya, lalu kami berdiskusi apa saja milestone yang harus ia kejar agar bulan depan bisa siap dan lulus PMP. Kita adakan beberapa pekan kelas bersama beserta dengan Mock Testnya, selama kita melakukan Mock Up Test, teman ini selalu urutan pertama atau kedua terakhir dari paling bawah. Jujur diwaktu itu saya merasa teman ini harus lebih digembleng lagi dengan serius agar ujian yang tinggal mengitung pekan itu membuat d&iacute;a siap untuk ujian PMP.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Berminggu-minggu kita lewati, tak terasa sudah melewati hari H ujian, teman saya tenyata lulus dan d&iacute;a sangat terharu dengan pencapaian ini, saya bisa merasakan kenapa d&iacute;a begitu terharu, ternyata banyak pengorbanan yang sudah ia lakukan semenjak bulan 3 bulan belakangan. Jika saya coba merincikan dari hasil sharing kami, seperti begadang untuk Latihan soal, membuat catatan pribadi semua materi dari Amer Ali, pergi dan pulang kerja dalam bus disambi dengan latihan soal, diakhir pekan tetap lanjut latihan soal. Ketika saya tanya jika ditotal sudah berapa soal yang dikerjakan, ia menjawab sudah lebih dari 1.500 soal tidak terasa sudah ia coba. Ternyata ini lah jurus-nya. Teman kita dari medan ini fokus ke latihan soal terus menerus diluar saya duga. Beliau sangat yakin dan konsisten dengan cara ini Insha Allah bisa lulus PMP. Alhamdulillah Allah mewujudkan impiannya.</span></p>\r\n\r\n<p><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">Buat teman-teman semua yang sedang membaca pengalaman ini, semoga bisa kita ambil pembelajarannya. Walaupun hari ini kita berada diurutan terbawah, tapi tetaplah yakin dengan m&eacute;tode yang sudah disarankan oleh para mentor atau rekan kita yang sudah lulus lebih dulu dari kita.&nbsp;</span><strong>Jurus yang berulang dan konsisten itu lebih ampun dari pada banyak jurus namun tidak ada yang konsisten</strong><span style=\"color:rgb(0, 0, 0); font-size:var(--fontSizeDesktop)\">, sebenarnya tidak sulit jika melihat syaratnya, namun fakta nya 40-50% orang yang ikut ujian PMP gagal di 1st Attempt-nya, sungguh mengejutkan sebenarnya.</span></p>', 6, '2024-06-20 16:59:52', '0'),
(8, 16, 'Internet Sulit bukan hambatan untuk lulus PMP', '<p><span style=\"color:rgb(29, 30, 32); font-family:inter,sans-serif; font-size:16px; text-align:center\">Hari ini terkesan tidak mungkin ada area yang masih belum tercover internet, apalagi daerah itu di pulau jawa, sunggu diluar dugaan jika itu terjadi.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong style=\"color:rgb(0, 0, 0); font-family:inter,sans-serif; font-weight:700; white-space-collapse:break-spaces\">Impian dan cita-cita itu berat, bukan berat karena dipikul, tapi beratnya untuk melangkah diawal</strong></span></p>\r\n\r\n<p>Ini cerita dari rekan kita yang tinggal di Jawa Timur, teman ini bekerja di salah satu proyek strategis nasional saat ini, beliau sudah mengenal PMP sejak tahun 2022 akhir, waktu itu perusahaannya memberikan materi Project Management yang diisi oleh Trainer dengan certified PMP.</p>\r\n\r\n<p>Teman yang merupakan lulusan teknik industri ini tertarik untuk mengambil certification PMP sebagai pembuktian bahwa ilmu yang didapatkan di Bangku Kuliah selama ini bisa menjadi lebih mantap dengan adanya certified PMP ini.</p>\r\n\r\n<p>Di awal tahun 2023 dimulai perjalan PMP dengan membaca sumber seperti Kim Heldman PMP, mulai mengenal mengenai PMP, lalu mengambil kursus seharga 400 ribu rupiah di coursera Google Project Management.</p>\r\n\r\n<p>Buku dan Training ini diikuti dengan seksama, namun karena kesibukan kerja akhirnya molor hingga berbulan-bulan dan hampir saja terlupakan PMP ini, padahal sudah dapat eligble untuk ujian PMP sejak Januari 2023 pasca Training Project Management dari Kantor dan Coursera.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:18px\"><strong>Semua orang pasti mempunya&nbsp;hambatan, yang membedakan orang yang mau berkembang dengan orang diam, yaitu bagaimana cara dia menghadapi hambatan tersebut</strong></span></p>\r\n\r\n<p>Tepatnya di bulan Juli, salah satu professional certified PMP memberikan sesi latihan soal PMP dan pembahasannya secara gratis, program ini dipromosikan di Linkedin.</p>\r\n\r\n<p>Selama sebulan dilakukan 4 kali pertemuan dengan membahas 100 soal PMP, disertai tips dan trick menjawab PMP, serta sumber mentor yang kredibel seperti Amer Ali, David Mclachlan, dan Eduhubspot untuk memperkuat Fundamental PMP nya. Sejak saat itu teman ini aktif mendengarkan materi PMP terutama dari Amer Ali.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Hambatan berikutnya datang</strong>, Lokasi Project di jawa timur ini ternyata sangat susah mendapatkan sinyal, apa solusi yang ia lakukan? dia mendownload video Amer Ali dari YT lalu mencovert video itu ke format MP3, agar bisa didengarkan setiap saat. Ketika sedang santai, ketika sedang di mess, ketika dalam perjalanan pergi dan pulang kantor, ini yang dilakukan oleh sobat kita ini.</p>\r\n\r\n<p>lalu ia juga berani keluar modal untuk membeli Study Hall di PMI seharga $55 untuk aktivasi selama 3 bulan, sebagai bahan untuk latihan soal lebih dalam, berbulan-bulan ia lakukan dari mendengarkan materi Amer Ali kemudian latihan soal di Study Hall PMP, akhirnya tibalah waktunya untuk ujian PMP setelah merasa siap dengan perjalan konsisten dan panjang ini, tepat diawal Oktober teman kita ini lulus PMP dengan 1st Attempt dan score semua domainnya above target.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"color:inherit; font-size:var(--fontSizeDesktop)\"><strong>Pesan singkat dari teman yang lulus PMP ini,</strong></span> belajar <strong><strong><em>PMP bukan tentang seberapa pintar kamu, namun seberapa besar kamu ingin memaksakan dirimu untuk menyempatkan waktu belajar, waktu mendengarkan materi, dan mengurangi waktu istirahatmu</em></strong></strong>. Karena keinginan yang sangat besar untuk lulus PMP, Qodarullah rekan kita ini sempat sakit selama sepekan karena melakukan latihan soal sepulang kerja dari pukul 08.00 malam hingga jam 12 atau 1 malam dan itu tidak sekali, ditambah pagi-pagi jam 6 harus sudah siap-siap pergi ke site Construction. Alhamdulillah semua perjuang itu terbayar sudah sekarang.</p>\r\n\r\n<p>Semoga kisah ini memberikan inspirasi buat kita semua yang sedang berjuang menuju Certified PMP.. Semangat.</p>', 9, '2024-06-20 17:05:08', '0'),
(9, 16, 'Kisah salah satu Lead di perusahaan minyak, orang pertama yang lulus PMP diantara rekan-rekan yang satu batch training dikala itu', '<p><span style=\"color:rgb(29, 30, 32); font-family:inter,sans-serif; font-size:16px\">Kebijakan terbaru dari SKK migas yang berencana akan menstandardkan pengetahuan mengenai PROJECT MANAGEMENT diantara pimpinan proyek di Industri Oil and Gas Indonesia mulai terasa, beberapa operator Oil and Gas Industry di Indonesia sudah mulai memfasilitasi para pimpinan proyek untuk mengambil sterfikasi project management, salah satunya, PMP (Project Management Professional).</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong><span style=\"color:rgb(0, 0, 0)\">Walaupun sendirian, asalkan punya keinginan dan tekad ternyata terlewati juga</span></strong></span></p>\r\n\r\n<p>Kisah ini terjadi pada beliau yang tinggal di Balikpapan dan bekerja di salah satu perusahaan Oil and Gas di Indonesia.</p>\r\n\r\n<p>Tahun 2022 bulan November beliau di trainingkan persiapan ujian PMP di Jakarta bersama rekan-rekan yang lain yang berjumlah 8-12 orang, training selama sepekan telah berlalu.</p>\r\n\r\n<p>Lalu hari-hari setelahnya tidak ada yang spesial, beliau tidak melanjutkan belajar seperti latihan soal atau buka materi PMP lagi, atau konsultasi ke mentornya kembali, sehingga berbulan bulan berlalu.</p>\r\n\r\n<p>Namun ada di satu titik beliau sadar, bahwa untuk bisa melangkah lebih jauh dan mendapatkan mandat serta nilai jual skill yang lebih diakui sebagai pimpinan atau Leader dalam suatu proyek, beliau harus punya sterfikasi PMP, mengingat dalam waktu dekat SKK Migas akan menerapkan sterfikasi project management ke semua KKKS Oil and Gas di Indonesia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tepat di bulan April 2023 </strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Beliau kembali membuka materi PMP dulu saat training di tahun 2022, kemudian aktif mendengarkan Youtube Channel mengenai PMP seperti video dari David Mclachan, Eduhubspot, dan PMP with Ray. Dari sana beliau mencoba konsisten dan serius untuk mengejar impian untuk Certified PMP yang sempat TERKUBUR.</p>\r\n\r\n<p>setelah ini untuk membuktikan keseriusan nya ingin lulus PMP, maka di bulan Juni beliau put date awal september harus ujian dan putuskan untuk ambil pembelajaran latihan soal dan memperkuat materi dari situs PMI langsung, yaitu program study hall plus dengan biaya $55 untuk durasi 3 bulan subscribes.</p>\r\n\r\n<p>Berhari hari beliau ikuti semua instruksi yang ada di PMI Study Hall tersebut, kemudian latihan soal ia lakukan lebih dari 1000 soal dikerjakan, membaca atau mendengarkan materi ketika lagi menunggu cucian mobil atau disaat lagi ngopi pagi dan di waktu saat senggang lainnya,</p>\r\n\r\n<p>Alhamdulillah beliau menikmati prosesnya dan konsisten menjalaninya, sehingga di akhir Agustus (beliau percepat 1 pekan dari target awalnya) beliau ambil real Exam PMP dan Masha Allah beliau lulus PMP di 1st Attempt exam, lalu yang paling membanggakan adalah sampai tulisan ini dibuat di bulan Oktober 2023 hanya beliau satu satu nya dari para rekan-rekan yang berbarengan ikut training dikala itu.</p>\r\n\r\n<p><strong>Pesan dari beliau</strong><span style=\"color:rgb(0, 0, 0); font-family:inter,sans-serif; font-size:18px\">,&nbsp;</span><span style=\"font-size:12px\"><span style=\"color:rgb(0, 0, 0); font-family:inter,sans-serif\">put date, taruh tanggal ujianmu kapan, ketika kamu sudah taruh tanggal ujianmu, energi - fikiran - waktu - semangat mu akan mendorongmu untuk mewujudkan itu, hilangkan kekhawatiran dan keraguan, karena orang lain saja bisa, maka Insha Allah saya juga bisa.</span></span></p>', 17, '2024-06-20 17:09:55', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq_actions`
--

CREATE TABLE `faq_actions` (
  `faq_action_id` int(11) NOT NULL,
  `faq_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `halaman_id` int(11) NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `permalink` varchar(300) DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`halaman_id`, `title`, `permalink`, `content`) VALUES
(6, 'Project Management Consultant', 'project-management-consultant', '<p>Project Management Consultant</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `pengaduan_id` int(11) NOT NULL,
  `parent_id` int(11) DEFAULT 0,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `email` varchar(400) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `status` enum('buka','selesai') DEFAULT NULL,
  `priority` enum('tinggi','sedang','lemah') NOT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `attachment` varchar(200) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `unread` datetime DEFAULT NULL,
  `email_opened` datetime DEFAULT NULL,
  `important` enum('0','1') DEFAULT '0',
  `last_reply` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `key` varchar(100) NOT NULL,
  `value` text DEFAULT NULL,
  `default_value` text DEFAULT NULL,
  `required` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`key`, `value`, `default_value`, `required`) VALUES
('address', 'Jl. HR Rasuna Said Kav C-5 Gd Wirausaha Lt.1 Unit 104, Karet, Setiabudi, Jakarta Selatan, DKI Jakarta, 12940', NULL, 0),
('copyright', 'Project Management Consultant', '© All rights reserved.', 1),
('default_timezone', 'Asia/Jakarta', 'Africa/Cairo', 0),
('description', 'Aplikasi Konsultasi manajement project', NULL, 0),
('direction', 'ltr', NULL, 0),
('display_tickets', '1', NULL, 0),
('disqus_username', 'admin', NULL, 0),
('email', 'info@gmail.com', NULL, 0),
('facebook', 'PM. Prodigy', NULL, 0),
('favicon', 'pm.jpeg', NULL, 1),
('google_key', '', NULL, 0),
('google_secret_key', '', NULL, 0),
('home_banner_description', 'PM Prodigy is a platform that is committed to assisting recent graduates and professionals in obtaining their professional PMI Certificates and finding the ideal job for them. We offer a comprehensive range of services, including online learning, consulting, tutorials, and job information. Our online learning programs equip individuals with the necessary knowledge and skills to excel in the project management field. Our consulting services provide personalized guidance and support to help individuals navigate their career paths successfully. Our tutorials offer in-depth explanations and practical examples to enhance learning outcomes. Additionally, we provide up-to-date job information, ensuring that individuals are aware of the latest opportunities in the industry. With PM Prodigy, individuals can confidently pursue their career goals and thrive in the project management profession.', NULL, 0),
('home_banner_title', 'PM - Prodigy', NULL, 0),
('instagram', 'PM. Prodigy', NULL, 0),
('language', 'english', 'english', 1),
('logo', 'logopm1.png', NULL, 1),
('meta_description', 'PM. Prodigy', 'desc', 0),
('pagination_limit', '20', NULL, 0),
('phone', '08117781201', '0', 0),
('support', '08117781201', NULL, 0),
('support_email', 'admin@pm-prodigy.com', NULL, 0),
('tickets_off_message', '<p><span [removed]=\"\" 46,=\"\" 47);=\"\" font-family:arimo,helvetica=\"\" neue,helvetica,arial,sans-serif\"=\"\">Pesan Konsultasi tidak aktif</p>', NULL, 0),
('ticket_off_replies', '<p><span [removed]=\"\" 46,=\"\" 47);=\"\" font-family:arimo,helvetica=\"\" neue,helvetica,arial,sans-serif\"=\"\">Pesan balasan Konsultasi Tidak Aktif</p>', NULL, 0),
('title', 'Project Management Consultant', 'I-Chef', 1),
('twitter', 'PM. Prodigy', NULL, 0),
('visitors', '226', '0', 0),
('webmaster_email', 'admin@pm-prodigy.com', NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usergroups`
--

CREATE TABLE `usergroups` (
  `usergroup_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `usergroups`
--

INSERT INTO `usergroups` (`usergroup_id`, `title`) VALUES
(1, 'Admin'),
(2, 'Normal User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usergroup_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `gender` enum('pria','wanita') DEFAULT NULL,
  `status` enum('aktif','nonaktif') DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `usergroup_id`, `email`, `username`, `firstname`, `lastname`, `image`, `password`, `country_id`, `gender`, `status`, `created`) VALUES
(1, 1, 'admin@gmail.com', 'admin', 'admin', 'admin', 'admin.png', '21232f297a57a5a743894a0e4a801fc3', 100, 'pria', 'aktif', '2020-04-17 21:18:35'),
(10, 2, 'alfitodhiyu5@gmail.com', 'alfito', '', '', NULL, '3b393640f9a2a7f0d1115e5d473b5e8b', 100, 'pria', 'aktif', '2024-05-18 16:17:41'),
(11, 2, 'alfito@gmail.com', 'user', 'Alfito Dhiyu', 'Priawan', 'aku1.jpg', 'ee11cbb19052e40b07aac0ca060c23ee', 100, 'pria', 'aktif', '2024-06-19 05:35:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indeks untuk tabel `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indeks untuk tabel `faq_actions`
--
ALTER TABLE `faq_actions`
  ADD PRIMARY KEY (`faq_action_id`);

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`halaman_id`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`pengaduan_id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `usergroups`
--
ALTER TABLE `usergroups`
  ADD PRIMARY KEY (`usergroup_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT untuk tabel `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `faq_actions`
--
ALTER TABLE `faq_actions`
  MODIFY `faq_action_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `halaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `pengaduan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `usergroups`
--
ALTER TABLE `usergroups`
  MODIFY `usergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
