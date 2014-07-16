-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 16 Juillet 2014 à 18:06
-- Version du serveur :  5.6.16
-- Version de PHP :  5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `avalon`
--

-- --------------------------------------------------------

--
-- Structure de la table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_BRANCH` varchar(255) COLLATE utf8_bin NOT NULL,
  `DESCRIPTE_BRANCH` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Contenu de la table `branches`
--

INSERT INTO `branches` (`ID`, `NAME_BRANCH`, `DESCRIPTE_BRANCH`) VALUES
(10, 'chi nhánh 1', '<div>Nếu bạn là thành viên thì hãy&nbsp;<a target=\\"\\" rel=\\"\\">đăng nhập&nbsp;</a>để mua</div><div>Nếu bạn không phải là thành viên :</div><div>-<u>&nbsp;</u><a target=\\"\\" rel=\\"\\"><u>đăng ký</u>&nbsp;</a>tại đây.</div><div>-&nbsp;<a target=\\"\\" rel=\\"\\">Liên hệ&nbsp;</a>để biết nhiều thông tin hơn .</div><div>-đi đến Blue Dolphin Co.Ltd:131D/5 Nguyễn Văn</div><div>Cừ nối dài, Ninh Kiều, Tp Cần Thơ.</div>'),
(11, 'chi nhánh 2', '<div>Nếu bạn là thành viên thì hãy&nbsp;<a target=\\"\\" rel=\\"\\">đăng nhập&nbsp;</a>để mua</div><div>Nếu bạn không phải là thành viên :</div><div>-<u>&nbsp;</u><a target=\\"\\" rel=\\"\\">đăng ký&nbsp;</a>tại đây.</div><div>-&nbsp;<a target=\\"\\" rel=\\"\\">Liên hệ&nbsp;</a>để biết nhiều thông tin hơn .</div><div>-đi đến Blue Dolphin Co.Ltd:131D/5 Nguyễn Văn</div><div>Cừ nối dài, Ninh Kiều, Tp Cần Thơ.</div>'),
(12, 'chi nhánh 3', '<div>Nếu bạn là thành viên thì hãy&nbsp;<a target=\\"\\" rel=\\"\\">đăng nhập&nbsp;</a>để mua</div><div>Nếu bạn không phải là thành viên :</div><div>-<u>&nbsp;</u><a target=\\"\\" rel=\\"\\">đăng ký&nbsp;</a>tại đây.</div><div>-&nbsp;<a target=\\"\\" rel=\\"\\">Liên hệ&nbsp;</a>để biết nhiều thông tin hơn .</div><div>-đi đến Blue Dolphin Co.Ltd:131D/5 Nguyễn Văn</div><div>Cừ nối dài, Ninh Kiều, Tp Cần Thơ.</div>'),
(13, 'chi nhánh 4', '<div>Nếu bạn là thành viên thì hãy&nbsp;<a target=\\"\\" rel=\\"\\">đăng nhập&nbsp;</a>để mua</div><div>Nếu bạn không phải là thành viên :</div><div>-<u>&nbsp;</u><a target=\\"\\" rel=\\"\\">đăng ký&nbsp;</a>tại đây.</div><div>-&nbsp;<a target=\\"\\" rel=\\"\\">Liên hệ&nbsp;</a>để biết nhiều thông tin hơn .</div><div>-đi đến Blue Dolphin Co.Ltd:131D/5 Nguyễn Văn</div><div>Cừ nối dài, Ninh Kiều, Tp Cần Thơ.</div>');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_CAT` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `CATEGORY_NAME_CAT_UNIQUE` (`NAME_CAT`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`ID`, `NAME_CAT`) VALUES
(18, 'Energy boosting'),
(17, 'Beauty supplement'),
(16, 'Weight management'),
(15, 'Detoxification');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(256) COLLATE utf8_bin NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8_bin NOT NULL,
  `CONTACT` text COLLATE utf8_bin NOT NULL,
  `RESPONE` text COLLATE utf8_bin,
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`ID`, `NAME`, `EMAIL`, `CONTACT`, `RESPONE`, `STATUS`) VALUES
(11, 'Nguyễn Mai Thảo', 'nmt_vn@yahoo.com', '', NULL, 0),
(12, 'Nguyễn Mai Thảo', 'thanhthanh1516@gmail.com', '<h1>mmmnn<b></b><i></i></h1>', 'respone', 1),
(13, '43434', 'thanh101682@student.ctu.edu.vn', '43434', 'chó', 1);

-- --------------------------------------------------------

--
-- Structure de la table `defines`
--

CREATE TABLE IF NOT EXISTS `defines` (
  `DEFINE_NAME` varchar(200) COLLATE utf8_bin NOT NULL,
  `DEFINE_VALUE` varchar(200) COLLATE utf8_bin NOT NULL,
  `DEFINE_TYPE` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`DEFINE_NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `defines`
--

INSERT INTO `defines` (`DEFINE_NAME`, `DEFINE_VALUE`, `DEFINE_TYPE`) VALUES
('', '', b'0'),
('BROZONE_MEMBER_OFF', '0.03', b'1'),
('BROZONE_MEMBER_POINTS', '100', b'1'),
('CATEGORIES_PER_PAGE', '10', b'1'),
('CONTACTS_PER_PAGE', '10', b'1'),
('CUSTOMERS_PER_PAGE', '10', b'1'),
('GOLD_MEMBER_OFF', '0.07', b'1'),
('GOLD_MEMBER_POINTS', '300', b'1'),
('ORDERS_PER_PAGE', '10', b'1'),
('PRODUCTS_PER_PAGE', '10', b'1'),
('PROMOTIONS_PER_PAGE', '10', b'1'),
('SLIVER_MEMBER_OFF', '0.05', b'1'),
('SLIVER_MEMBER_POINTS', '200', b'1'),
('USD_PER_POINT', '5', b'1'),
('VND_PER_POINT', '100000', b'1');

-- --------------------------------------------------------

--
-- Structure de la table `details_order`
--

CREATE TABLE IF NOT EXISTS `details_order` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PRO` int(11) NOT NULL,
  `ID_ORDER` int(11) NOT NULL,
  `AMOUNT` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_HAVE_PRODUCTS` (`ID_ORDER`),
  KEY `FK_HAVE_BEEN_ORDERED` (`ID_PRO`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=47 ;

--
-- Contenu de la table `details_order`
--

INSERT INTO `details_order` (`ID`, `ID_PRO`, `ID_ORDER`, `AMOUNT`) VALUES
(33, 42, 35, 1),
(34, 46, 35, 1),
(35, 45, 35, 1),
(36, 42, 36, 8),
(37, 44, 36, 7),
(38, 44, 37, 5),
(39, 45, 37, 5),
(40, 42, 38, 2),
(41, 51, 39, 1),
(42, 51, 40, 1),
(43, 50, 41, 1),
(44, 51, 42, 15),
(45, 50, 43, 3),
(46, 51, 43, 1);

-- --------------------------------------------------------

--
-- Structure de la table `details_promotion`
--

CREATE TABLE IF NOT EXISTS `details_promotion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PROMOTION` int(11) NOT NULL,
  `ID_PRO` int(11) NOT NULL,
  `PRICE_OFF` float(8,2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_DETAILS_PROMOTIONS_PRODUCT` (`ID_PRO`),
  KEY `FK_PROMOTION_DETAILS` (`ID_PROMOTION`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `details_promotion`
--

INSERT INTO `details_promotion` (`ID`, `ID_PROMOTION`, `ID_PRO`, `PRICE_OFF`) VALUES
(4, 6, 47, 0.06),
(5, 6, 42, 0.06),
(10, 6, 44, 0.10),
(11, 6, 43, 0.03),
(12, 6, 45, 0.10),
(13, 6, 48, 0.50),
(14, 9, 49, 0.45),
(15, 0, 50, 0.00),
(16, 0, 50, 0.00),
(17, 0, 51, 0.00),
(18, 0, 52, 0.00),
(19, 0, 53, 0.00),
(20, 0, 54, 0.00),
(21, 0, 50, 0.00),
(22, 0, 51, 0.00),
(23, 0, 53, 0.00),
(24, 0, 52, 0.00),
(25, 0, 52, 0.00),
(26, 10, 50, 0.30),
(27, 11, 50, 0.30),
(28, 12, 50, 0.10),
(29, 0, 51, 0.00),
(30, 0, 53, 0.00),
(31, 0, 52, 0.00),
(32, 0, 55, 0.00),
(33, 0, 55, 0.00),
(34, 0, 55, 0.00),
(35, 0, 55, 0.00),
(36, 0, 55, 0.00),
(37, 0, 55, 0.00),
(38, 0, 55, 0.00);

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_CUSTOMER` int(11) NOT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `TIME_ORDER` datetime NOT NULL,
  `TIME_PROCESS` datetime DEFAULT NULL,
  `STATUS_ORDER` tinyint(4) NOT NULL,
  `PRICE_SET` char(3) COLLATE utf8_bin NOT NULL,
  `CURRENT_POINTS` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `FK_HAVE_ORDERS` (`ID_ADMIN`),
  KEY `FK_PROCESS_ORDERS` (`ID_CUSTOMER`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=45 ;

--
-- Contenu de la table `orders`
--

INSERT INTO `orders` (`ID`, `ID_CUSTOMER`, `ID_ADMIN`, `TIME_ORDER`, `TIME_PROCESS`, `STATUS_ORDER`, `PRICE_SET`, `CURRENT_POINTS`) VALUES
(39, 10, NULL, '2014-07-04 14:23:51', NULL, 0, 'USD', 0),
(40, 10, NULL, '2014-07-04 16:06:57', NULL, 0, 'VND', 0),
(41, 1, NULL, '2014-07-04 16:18:33', NULL, 0, 'VND', 0),
(42, 10, NULL, '2014-07-06 21:05:14', NULL, 0, 'VND', 0),
(43, 10, NULL, '2014-07-07 15:29:51', NULL, 0, 'VND', 0),
(44, 10, NULL, '2014-07-07 15:30:06', NULL, 0, 'VND', 0);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ID_UNIT` int(11) NOT NULL,
  `ID_CAT` int(11) NOT NULL,
  `INFO_PRO` text COLLATE utf8_bin NOT NULL,
  `NAME_PRO` varchar(256) COLLATE utf8_bin NOT NULL,
  `PRICE_USD` float(8,2) NOT NULL,
  `PRICE_VND` float(10,2) NOT NULL,
  `URL` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `THUMB` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `URL_PDF` varchar(1024) COLLATE utf8_bin DEFAULT NULL,
  `SLIDE_SHOW` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`ID`),
  KEY `FK_HAVE_CATEGORY` (`ID_CAT`),
  KEY `FK_HAVE_UNITS` (`ID_UNIT`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=56 ;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`ID`, `ID_UNIT`, `ID_CAT`, `INFO_PRO`, `NAME_PRO`, `PRICE_USD`, `PRICE_VND`, `URL`, `THUMB`, `URL_PDF`, `SLIDE_SHOW`) VALUES
(53, 13, 17, '<div><br></div><div><span>Modern and westernised lifestyle often brings forth the misconception that ginseng is a tonic for the older generation. In fact, ginseng is a supreme tonic that encompass numerous benefits that will enhance the health of both the young and the elderly. In countries such as Korea and China where diet plays a very important role in their daily lives, people start to appreciate and experience benefits of ginseng from young.&nbsp;<br><br>When do I need to take American Ginseng?<ul><li>Before intense mental work</li><li>Before and after exercise</li><li>Travelling</li><li>Lack of energy</li><li>Learning, examinations, feeling tense</li><li>Easy to get flu infection</li><li>Chest tightness, asthma, cough</li><li>Dryness in the mouth and constant thirst</li><li>Poor quality of sleep</li><li>Poor memory and concentration</li><li>Post surgery, post delivery, and recovering from an illness</li></ul>Why is AVALON™ American Ginseng Slice with Honey unique?&nbsp;<br><br>Modernize Traditional Usage of American Ginseng – Experience its goodness in a simple step by chewing. The benefits are optimized by immediate absorption via the capillaries in the mouth during the chewing process.<br><br>Enhanced with Linden Honey – Contains of anti-inflammatory properties, linden honey can soothe and relieve sore throat as well as nourish our lungs. When combined with premium American ginseng, the health benefits are doubled and it enhances our body\\\\\\\\\\\\\\''s immunity and overall well being.<br><br>Hygiene and Standardized Dosage – The product is ready-to-eat, vacuum-packed in sachets with standardized dosage of 5g per serving.&nbsp;</span></div>', 'AVALON™ American Ginseng Slice with Honey', 100.00, 300000.00, './public/products/imgs/pro_53.png', './public/products/imgs/thumb_pro_53.png', '', b'1'),
(50, 2, 17, 'TASTES GREAT, LOOK GREAT!<br>Beauty is no longer the exclusive domain of women. Healthy and radiant skin is coveted by both sexes of this new age generation. <br>AVALON™ Japanese Fish Collagen uses the most premium ingredients, such as Japanese fish collagen of molecular weight of less than 3,000 Daltons and believed to be the best for absorption by the human body. In addition, it is the only collagen product in the market to be fortified with Probiotic complex – a combination of strains of beneficial bacteria. These work together to balance intestinal microflora and facilitate the rebuilding of healthy intestinal system to boost absorption of collagen peptides and L-Vitamin C, doubling the effectiveness of anti-aging and anti-oxidant properties, leaving us with radiant skin to reveal beauty from inside out.<br>Available in 3 refreshing flavours, AVALON™ makes consumption of collagen a pleasurable daily affair. Besides, every serving is individually packed for great convenience, catering to busy individuals who want to keep healthy glowing skin while they are on the go. With no added sugar, AVALON™ Japanese Fish Collagen is one great choice for diabetics as well as weight watchers. <br>It is never too early to start on collagen as the natural production of collagen in our body declines when we are 20 years old. Thus get your daily dose of AVALON™ Japanese Fish Collagen today to start enjoying the awesome benefits of it!', 'AVALON™ Japanese Fish Collagen', 100.00, 2000000.00, './public/products/imgs/pro_50.png', './public/products/imgs/thumb_pro_50.png', './public/products/pdf/pdf_pro_50.pdf', b'1'),
(51, 2, 17, 'JustUme™, more than just a plum<br>Taking fruit such as plums will help cleanse our digestive tract. JustUme™ contains&nbsp;<br>the Japanese Umeboshi plums combined with 2 strains of probiotic and a special<br>blend of herbs to get rid of digestion problems. So take JustUme™ today and feel&nbsp;<br>cleaner, clearer and healthier.<br><br>Who is JustUme™ made for?<br>Fast paced modern working life tends to result in many modern day problems. Internal&nbsp;<br>problems such as constipation, excessive flatulence, bloating will lead to external&nbsp;<br>issues such as skin problems, weight gain and lethargy. These problems occur when&nbsp;<br>the pH of our body gets too acidic.<br><br>You need JustUme™ if you have these symptoms:<br><div><ul><li>Poor digestion</li><li>Water retention</li><li>Bloating &amp; flatulence</li><li>Fatigue, low energy</li><li>Prone to sickness</li><li>Poor and dull complexion</li><li>Excessive weight gain</li></ul></div>', 'JustUme™', 20.00, 300000.00, './public/products/imgs/pro_51.png', './public/products/imgs/thumb_pro_51.png', '', b'1'),
(52, 8, 17, 'AVALON™ Fat Burner Plus is an improved formula of AVALON™ Fat Burner. It is an all-natural healthy slimming formula which contains green tea extract, curcumin extract, piperine extract, probiotics complex and water soluble dietary fiber. AVALON™ Fat Burner Plus does not contain diuretic, laxative, appetite suppressant, ephedrine and caffeine, thus will not induce dehydration, diarrhea, anorexia and heart palpitation.<br><br>The highly potent and safe ingredients of AVALON™ Fat Burner Plus produce powerful synergistic effect to make the product stronger and effective than regular fat burner formula with no adverse effects. AVALON™ Fat Burner Plus only burns fats and does not cause loss of body fluid thus after weight loss is achieved, skin complexion remain toned and no weight bounce will be experienced.Functions of AVALON™ Fat Burner Plus:<ul><li>Burn excess body fat</li><li>Increase metabolism</li><li>Prevent fat absorption</li><li>Prevent carbohydrates from turning into fats</li><li>Help maintain healthy cholesterol and blood sugar level</li><li>Support liver, kidney and joint health</li></ul>', 'AVALON™ Fat Burner Plus', 150.00, 300000.00, './public/products/imgs/pro_52.png', './public/products/imgs/thumb_pro_52.png', '', b'1');

-- --------------------------------------------------------

--
-- Structure de la table `promotions`
--

CREATE TABLE IF NOT EXISTS `promotions` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_PROMOTION` varchar(256) COLLATE utf8_bin NOT NULL,
  `CONTENT_PROMOTION` text COLLATE utf8_bin NOT NULL,
  `TIME_START` date NOT NULL,
  `TIME_END` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `promotions`
--

INSERT INTO `promotions` (`ID`, `NAME_PROMOTION`, `CONTENT_PROMOTION`, `TIME_START`, `TIME_END`) VALUES
(12, 'Khuyến mãi mùa hè', '<b>Chương trình khuyến mãi abc<br></b><b>Chương trình khuyến mãi abc<br></b><b>Chương trình khuyến mãi abc<br></b><b>Chương trình khuyến mãi abc<br></b><h6><b>Chương trình khuyến mãi abc</b></h6><h5><b>Chương trình khuyến mãi abc</b></h5><b><u><i>Chương trình khuyến mãi abc</i></u></b><b><br></b>', '2014-07-02', '2014-07-05');

-- --------------------------------------------------------

--
-- Structure de la table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UNIT_NAME` varchar(100) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `UNIT_NAME_UNIQUE` (`UNIT_NAME`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Contenu de la table `unit`
--

INSERT INTO `unit` (`ID`, `UNIT_NAME`) VALUES
(8, 'Cái'),
(2, 'Hộp'),
(10, 'Vỉ'),
(11, 'thùng'),
(12, 'bao'),
(13, 'box');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(200) COLLATE utf8_bin NOT NULL,
  `PASSWORD` varchar(256) COLLATE utf8_bin NOT NULL,
  `NAME` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `BIRTH` date DEFAULT NULL,
  `ADDRESS` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `STREET` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `DISTRICT` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `PROVINCE` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `NUMBERPHONE` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `EMAIL` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `ROLE` tinyint(4) NOT NULL,
  `POINT` int(11) DEFAULT '0',
  `STATUS` tinyint(1) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `USER_USERNAME_UNIQUE` (`USERNAME`),
  UNIQUE KEY `USER_EMAIL_UNIQUE` (`EMAIL`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `NAME`, `BIRTH`, `ADDRESS`, `STREET`, `DISTRICT`, `PROVINCE`, `NUMBERPHONE`, `EMAIL`, `ROLE`, `POINT`, `STATUS`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'Lê thanh tùng', '1992-01-28', 'home', 'home', 'homep', 'Cần Thơ', '01259201059', 'thanhthanh1516@gmail.com', 1, 18, 1),
(3, 'user1', '202cb962ac59075b964b07152d234b70', 'Nguyễn Mai Thảo', '1990-06-17', '138', 'Nguyễn Văn Cừ', 'Ninh Kiều', 'TP Cần Thơ', '0918726003', 'nmt_vn@yahoo.com', 0, 229, 1),
(10, 'user', '202cb962ac59075b964b07152d234b70', 'Ngô Giang Thanh', '1992-08-25', '132/28, Hưng Lợi, Ninh Kiều, Cần Thơ', '3/2', 'Ninh Kiều', 'Cần Thơ', '0946344123', 'thanh101683@student.ctu.edu.vn', 0, 0, 1),
(11, '123', 'c4ca4238a0b923820dcc509a6f75849b', '3', '2014-07-04', '1', '2', '3', '4', '3333333333333', 'thanh101682@student.ctu.edu.vn', 0, 0, 1),
(12, 'user2', '202cb962ac59075b964b07152d234b70', '2', '2014-07-04', '2', '2', '2', '2', '1234567890', 'thanh1thanh1516@gmail.com', 0, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
