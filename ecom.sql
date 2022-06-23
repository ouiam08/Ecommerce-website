-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 10 juin 2022 à 21:30
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecom`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(200) NOT NULL AUTO_INCREMENT,
  `author` varchar(25) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `language` varchar(20) NOT NULL,
  `pages` int(32) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stock` int(10) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `title` (`title`),
  KEY `cat` (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`book_id`, `author`, `keywords`, `title`, `price`, `image`, `description`, `language`, `pages`, `date`, `stock`, `id_category`) VALUES
(2, 'Stephen King', 'Stephen, King, It', 'It', 234, 'uploads/it.jpg', 'It Is A 1986 Horror Novel By American Author Stephen King. It Was His 22nd Book And His 17th Novel Written Under His Own Name. The Story Follows The Experiences Of Seven Children As They Are Terrorized By An Evil Entity That Exploits The Fears Of Its Victims To Disguise Itself While Hunting Its Prey. \"It\" Primarily Appears In The Form Of Pennywise The Dancing Clown To Attract Its Preferred Prey Of Young Children.  The Novel Is Told Through Narratives Alternating Between Two Periods And Is Largely Told In The Third-person Omniscient Mode. It Deals With Themes That Eventually Became King Staples: The Power Of Memory, Childhood Trauma And Its Recurrent Echoes In Adulthood, The Malevolence Lurking Beneath The Idyllic FaÃ§ade Of The American Small Town, And Overcoming Evil Through Mutual Trust And Sacrifice.  King Has Stated That He First Conceived The Story In 1978, And Began Writing It In 1981. He Finished Writing The Book In 1985.[2] He Also Stated That He Originally Wanted The Title Character To Be A Troll Like The One In The Children\'s Story \"Three Billy Goats Gruff\", But Who Inhabited The Local Sewer System Rather Than Just The Area Beneath One Bridge. He Also Wanted The Story To Interweave The Stories Of Children And The Adults They Later Become.  The Novel Won The British Fantasy Award In 1987, And Received Nominations For The Locus And World Fantasy Awards That Same Year.[3] Publishers Weekly Listed It As The Best-selling Hardcover Fiction Book In The United States In 1986.[4] It Has Been Adapted Into A 1990 Two-part Miniseries Directed By Tommy Lee Wallace, A Hindi 1998 Television Series Directed By Glen Baretto & Ankush Mohla, And Into A Film Duology Directed By Andy Muschietti; It Was Released In September 2017 And It Chapter Two Was Released In September 2019.', 'English', 1135, '2022-06-10 01:05:19', 12, 3),
(3, 'E L James', 'James, Fifty, Shades, Grey', 'Fifty Shades Of Grey', 120, 'uploads/fiftyshades.jpg', 'Fifty Shades Of Grey Is A 2011 Erotic Romance Novel By British Author E. L. James.[1] It Became The First Instalment In The Fifty Shades Novel Series That Follows The Deepening Relationship Between A College Graduate, Anastasia Steele, And A Young Business Magnate, Christian Grey. It Is Notable For Its Explicitly Erotic Scenes Featuring Elements Of Sexual Practices Involving BDSM (bondage/discipline, Dominance/submission, And Sadism/masochism). Originally Self-published As An Ebook And Print-on-demand In June 2011, The Publishing Rights To The Novel Were Acquired By Vintage Books In March 2012.  Fifty Shades Of Grey Has Topped Best-seller Lists Around The World. It Has Been Translated Into 52 Languages, And Set A Record In The United Kingdom As The Fastest-selling Paperback Of All Time. Critical Reception Of The Book, However, Has Tended Towards The Negative, With The Quality Of Its Prose Generally Seen As Poor, While Its Portrayal Of BDSM Has Been Targeted For Criticism From A Variety Of Perspectives. Universal Pictures And Focus Features Produced An American Film Adaptation, Which Was Released On 13 February 2015,[2] And Was Also Panned Upon Release, Though It Was A Box Office Success.  The Second And Third Volumes Of The Original Trilogy, Fifty Shades Darker And Fifty Shades Freed, Were Published In 2012. The Trilogy Had Sold Over 150 Million Copies Worldwide By October 2017. A Version Of The Novel From Christian\'s Point Of View, Grey: Fifty Shades Of Grey As Told By Christian, Was Published In June 2015 As The Fourth Book. Darker: Fifty Shades Darker As Told By Christian, Published In November 2017, Is The Fifth Book In The Series. Freed: Fifty Shades Freed As Told By Christian, Published In June 2021, Is The Sixth Book In The Series.', 'English', 1200, '2022-06-10 01:48:09', 12, 8),
(4, 'Margaret Mitchell', 'Gone, Wind, Margaret, Mitchell', 'Gone With The Wind', 145, 'uploads/gonewithwind.jpg', '<p><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Since Its Original Publication In 1936,&nbsp;</span><em Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Gone With The Wind</em><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&mdash;winner Of The Pulitzer Prize And One Of The Bestselling Novels Of All Time&mdash;has Been Heralded By Readers Everywhere As The Great American Novel.</span><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Widely Considered The Great American Novel, And Often Remembered For Its Epic Film Version,&nbsp;</span><em Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Gone With The Wind</em><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&nbsp;explores The Depth Of Human Passions With An Intensity As Bold As Its Setting In The Red Hills Of Georgia. A Superb Piece Of Storytelling, It Vividly Depicts The Drama Of The Civil War And Reconstruction.</span><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">This Is The Tale Of Scarlett O&rsquo;Hara, The Spoiled, Manipulative Daughter Of A Wealthy Plantation Owner, Who Arrives At Young Womanhood Just In Time To See The Civil War Forever Change Her Way Of Life. A Sweeping Story Of Tangled Passion And Courage, In The Pages Of&nbsp;</span><em Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Gone With The Wind</em><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">, Margaret Mitchell Brings To Life The Unforgettable Characters That Have Captured Readers For Over Seventy Years.</span></p>l', 'English', 1335, '2022-06-10 02:34:16', 13, 3),
(11, 'Chetan Bhagat', 'Half, Girl,Friend, Chetan, Bhagat', 'Half GirlFriend', 1244, 'uploads/half gf.jpg', '<p>Half Girlfriend Is A Story Of Bihari Boy Madhav Whofalls In Love With Ria.</p> <p>Madhav Belongs To Middle Class Family While Ria Is From Higher Class And Both Have Different Lifestyles.</p> <p>The Story Revolves Around How Will Madhav Make RIa Fall In Love With Him To.</p> <p>To Know More Read The Book.</p>', 'English', 1900, '2022-06-10 03:05:08', 13, 9),
(12, 'Timothy Zahn', 'Timothy, Zahn, Thrawn, Star, War', 'Thrawn Star Wars', 368, 'uploads/starwar.jpg', '<p>This Is The Most Famous Novel .this Book Needs No Introduction.</p> <p>The Star Wars Legacy With A Deep Look At Thrawn</p>', 'English', 1900, '2022-06-10 03:07:25', 13, 2),
(13, 'Sir Arthur Conan Doyle', 'Arthur, Conan, Doyle, Sherlock, Holmes', 'Sherlock Holmes', 368, 'uploads/sherlock.jpg', '<p><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Since His First Appearance In&nbsp;</span><em Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Beeton&rsquo;s Christmas Annual</em><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&nbsp;in 1887, Sir Arthur Conan Doyle&rsquo;s Sherlock Holmes Has Been One Of The Most Beloved Fictional Characters Ever Created. Now, In Two Paperback Volumes, Bantam Presents All Fifty-six Short Stories And Four Novels Featuring Conan Doyle&rsquo;s Classic Hero--a Truly Complete Collection Of Sherlock Holmes&rsquo;s Adventures In Crime!</span><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Volume I Includes The Early Novel&nbsp;</span><strong Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">A Study In Scarlet</strong><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">, Which Introduced The Eccentric Genius Of Sherlock Holmes To The World. This Baffling Murder Mystery, With The Cryptic Word Rache Written In Blood, First Brought Holmes Together With Dr. John Watson. Next,&nbsp;</span><strong Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">The Sign Of Four</strong><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&nbsp;presents Holmes&rsquo;s Famous &ldquo;seven Percent Solution&rdquo; And The Strange Puzzle Of Mary Morstan In The Quintessential Locked-room Mystery.&nbsp;</span><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><br Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\" /><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">Also Included Are Holmes&rsquo;s Feats Of Extraordinary Detection In Such Famous Cases As The Chilling&nbsp;</span><strong Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&ldquo; The Adventure Of The Speckled Band,&rdquo;</strong><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&nbsp;the Baffling Riddle Of&nbsp;</span><strong Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&ldquo;The Musgrave Ritual,&rdquo;</strong><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&nbsp;and The Ingeniously Plotted&nbsp;</span><strong Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&ldquo;The Five Orange Pips,&rdquo;</strong><span Style=\"color: #333333; Font-family: Arial, Sans-serif; Font-size: 14px;\">&nbsp;tales That Bring To Life A Victorian England Of Horse-drawn Cabs, Fogs, And The Famous Lodgings At 221B Baker Street, Where Sherlock Holmes Earned His Undisputed Reputation As The Greatest Fictional Detective Of All Time.</span></p>', 'English', 600, '2022-06-10 03:09:24', 13, 2);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`, `disabled`) VALUES
(1, 'Sciences', 1),
(2, 'Science Fiction', 0),
(3, 'Romance', 0),
(6, 'Horror', 0),
(7, 'Action', 0),
(8, 'Mystery', 1),
(9, 'Drama', 0);

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(200) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `cust_type` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT 'user',
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`cust_id`, `email`, `password`, `cust_type`) VALUES
(33, 'ouaim123@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'user'),
(34, 'ouiam123@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'user'),
(35, 'ouiam.wiwi.2001@hotmail.fr', 'f416168b5eb1a5be010bbbc327eabee876de8b05', 'user'),
(36, 'ouiam.khoudraji@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', 'user'),
(37, 'admin01@gmail.com', '618dcdfb0cd9ae4481164961c4796dd8e3930c8d', 'user'),
(38, 'khoudraji.salma@sophia.ma', '601f1889667efaebb33b8c12572835da3f027f78', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) DEFAULT NULL,
  `message` varchar(11) NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id_message`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'hi'),
(2, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'hi'),
(3, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'hi'),
(11, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'hi'),
(12, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'it gonna worl', 'hi'),
(13, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi hi', 'hi'),
(14, 'Ouiam Khoudraji', 'ouiam.wewe@gmail.com', 'hi', 'fgjtj'),
(15, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'hi'),
(16, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'nnfgnfn', 'ngfgngfn'),
(17, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'de'),
(18, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hi', 'hi'),
(19, 'Ouiam Khoudraji', 'ouiam.khoudraji@gmail.com', 'hello', 'hi');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id_order` int(200) NOT NULL AUTO_INCREMENT,
  `cust_id` int(200) NOT NULL,
  `book_id` int(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL,
  `zip` int(20) NOT NULL,
  `country` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `full_address` varchar(200) NOT NULL,
  `method` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int(200) DEFAULT NULL,
  PRIMARY KEY (`id_order`),
  KEY `cust_id` (`cust_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id_order`, `cust_id`, `book_id`, `first_name`, `last_name`, `phone`, `zip`, `country`, `city`, `full_address`, `method`, `date`, `total`) VALUES
(10, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 07:57:12', 1244),
(11, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:10:04', 1244),
(12, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:10:16', 1244),
(13, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:14:58', 1244),
(14, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:15:56', 1244),
(15, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:16:04', 1244),
(16, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:16:13', 1244),
(17, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:16:45', 1244),
(18, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:18:08', 1244),
(19, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:20:19', 1244),
(20, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:21:37', 1244),
(21, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:21:42', 1244),
(22, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:22:36', 1244),
(23, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:28:12', 1244),
(24, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:30:18', 1244),
(25, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:30:36', 1244),
(26, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:30:45', 1244),
(27, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:31:39', 1244),
(28, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:31:54', 1244),
(29, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:32:58', 1244),
(30, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:34:15', 1244),
(31, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:37:46', 1244),
(32, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:43:04', 1244),
(33, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:43:27', 1244),
(34, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'PayPal', '2022-06-10 08:46:44', 1244),
(35, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:48:53', 1244),
(36, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:50:58', 1244),
(37, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:51:32', 1244),
(38, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:52:33', 1244),
(39, 38, 11, 'Ouiam', 'Khoudraji', 639964613, 38518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 08:54:01', 1244),
(40, 38, 2, 'Ouiam', 'Khoudraji', 639964613, 938518, 'Maroc', 'Marrakech', '424\r\nLOT ZERKTOUNI NO 424 BOUAKKAZ MHAMID MARRAKECH', 'bill', '2022-06-10 09:14:43', 619);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `setting` varchar(30) DEFAULT NULL,
  `value` varchar(2048) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `setting` (`setting`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `value`) VALUES
(1, 'phone_number', '+212 666666666'),
(2, 'email', 'blib@gmail.com'),
(3, 'facebook_link', 'https://m.facebook.com/ouiam.khoudraji.1'),
(4, 'twitter_link', 'https://'),
(5, 'linkedin_link', 'https://www.linkedin.com/in/ouiam-khoudraji-b49b52182/'),
(6, 'google_plus_link', 'https://'),
(7, 'website_link', 'https://');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `cat` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`),
  ADD CONSTRAINT `cust_id` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
