-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2018 at 07:02 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.6.32-1+ubuntu14.04.1+deb.sury.org+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vcommers_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE IF NOT EXISTS `admin_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_user_id` int(11) NOT NULL,
  `as_admin` tinyint(1) NOT NULL DEFAULT '0',
  `manage_sub_admin` tinyint(1) NOT NULL DEFAULT '0',
  `manage_member` tinyint(1) NOT NULL DEFAULT '0',
  `manage_carousel` tinyint(1) NOT NULL DEFAULT '0',
  `audit` tinyint(1) NOT NULL DEFAULT '0',
  `chat` tinyint(1) NOT NULL DEFAULT '0',
  `view_errors` tinyint(1) NOT NULL DEFAULT '0',
  `statistic` tinyint(1) NOT NULL DEFAULT '0',
  `account_alarm` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_user_id` (`admin_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `admin_user_id`, `as_admin`, `manage_sub_admin`, `manage_member`, `manage_carousel`, `audit`, `chat`, `view_errors`, `statistic`, `account_alarm`, `created_at`) VALUES
(1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, '2017-12-11 18:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `cometchat`
--

CREATE TABLE IF NOT EXISTS `cometchat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` int(10) unsigned NOT NULL,
  `to` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `sent` int(10) unsigned NOT NULL DEFAULT '0',
  `read` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `direction` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`),
  KEY `direction` (`direction`),
  KEY `read` (`read`),
  KEY `sent` (`sent`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `cometchat`
--

INSERT INTO `cometchat` (`id`, `from`, `to`, `message`, `sent`, `read`, `direction`) VALUES
(1, 96, 196, 'Hello', 1515525905, 0, 0),
(2, 203, 96, 'Hi', 1515526601, 1, 0),
(3, 203, 96, 'you there?', 1515526628, 1, 0),
(4, 96, 203, 'yes', 1515526648, 1, 0),
(5, 96, 203, 'how are you', 1515526655, 1, 0),
(6, 96, 203, '<div style="display:none;">has sent a file (PHP_error.jpg). </div><br/><a class="imagemessage mediamessage" pluginname ="filetransfer" filename="PHP_error.jpg" encfilename="6bd31624f663cec29ea39d03c4e0be2d.jpg" mediatype="1" link="//www.vcommers.com/dev/cometchat/plugins/filetransfer/download.php?file=6bd31624f663cec29ea39d03c4e0be2d.jpg&amp;unencryptedfilename=PHP_error.jpg" href="//www.vcommers.com/dev/cometchat/plugins/filetransfer/download.php?file=6bd31624f663cec29ea39d03c4e0be2d.jpg&amp;unencryptedfilename=PHP_error.jpg" pluginpath="/plugins/filetransfer/"><img class="file_image" type="image" src="/dev/cometchat/writable/filetransfer/uploads/6bd31624f663cec29ea39d03c4e0be2d.jpg" style="max-height:70px;"/></a>', 1515526684, 1, 0),
(7, 96, 203, '<img class="cometchat_smiley" height="20" width="20" src="/dev/cometchat/writable/images/smileys/smiley.png" title="Smiley">', 1515526734, 1, 0),
(8, 203, 96, '<img class="cometchat_smiley" height="20" width="20" src="/dev/cometchat/writable/images/smileys/two.png" title="Two">', 1515527336, 1, 0),
(9, 96, 203, '<img class="cometchat_smiley" height="20" width="20" src="/dev/cometchat/writable/images/smileys/laughing.png" title="Laughing">', 1515527356, 1, 0),
(10, 203, 96, 'hello', 1515528523, 1, 0),
(11, 203, 96, 'what''s up?', 1515528614, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_announcements`
--

CREATE TABLE IF NOT EXISTS `cometchat_announcements` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `announcement` text NOT NULL,
  `time` int(10) unsigned NOT NULL,
  `to` int(10) NOT NULL,
  `recd` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `time` (`time`),
  KEY `to_id` (`to`,`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5000 ;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_block`
--

CREATE TABLE IF NOT EXISTS `cometchat_block` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fromid` int(10) unsigned NOT NULL,
  `toid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fromid` (`fromid`),
  KEY `toid` (`toid`),
  KEY `fromid_toid` (`fromid`,`toid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_bots`
--

CREATE TABLE IF NOT EXISTS `cometchat_bots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `keywords` text CHARACTER SET utf8,
  `avatar` varchar(200) NOT NULL,
  `apikey` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_chatroommessages`
--

CREATE TABLE IF NOT EXISTS `cometchat_chatroommessages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `chatroomid` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `sent` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `chatroomid` (`chatroomid`),
  KEY `sent` (`sent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_chatrooms`
--

CREATE TABLE IF NOT EXISTS `cometchat_chatrooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lastactivity` int(10) unsigned NOT NULL,
  `createdby` int(10) unsigned NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` tinyint(1) unsigned NOT NULL,
  `vidsession` varchar(512) DEFAULT NULL,
  `invitedusers` text,
  `guid` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lastactivity` (`lastactivity`),
  KEY `createdby` (`createdby`),
  KEY `type` (`type`),
  KEY `guid` (`guid`),
  KEY `guid_2` (`guid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_chatrooms_users`
--

CREATE TABLE IF NOT EXISTS `cometchat_chatrooms_users` (
  `userid` int(10) unsigned NOT NULL,
  `chatroomid` int(10) unsigned NOT NULL,
  `isbanned` int(1) DEFAULT '0',
  PRIMARY KEY (`userid`,`chatroomid`) USING BTREE,
  KEY `chatroomid` (`chatroomid`),
  KEY `userid` (`userid`),
  KEY `userid_chatroomid` (`chatroomid`,`userid`),
  KEY `isbanned` (`isbanned`),
  KEY `isbanned_2` (`isbanned`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_colors`
--

CREATE TABLE IF NOT EXISTS `cometchat_colors` (
  `color_key` varchar(100) NOT NULL,
  `color_value` text NOT NULL,
  `color` varchar(50) NOT NULL,
  UNIQUE KEY `color_index` (`color_key`,`color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cometchat_colors`
--

INSERT INTO `cometchat_colors` (`color_key`, `color_value`, `color`) VALUES
('color1', 'a:3:{s:7:"primary";s:6:"56a8e3";s:9:"secondary";s:6:"3777A7";s:5:"hover";s:6:"ECF5FB";}', 'color1'),
('color10', 'a:3:{s:7:"primary";s:6:"23025E";s:9:"secondary";s:6:"3D1F84";s:5:"hover";s:6:"E5D7FF";}', 'color10'),
('color11', 'a:3:{s:7:"primary";s:6:"24D4F6";s:9:"secondary";s:6:"059EBB";s:5:"hover";s:6:"DBF9FF";}', 'color11'),
('color12', 'a:3:{s:7:"primary";s:6:"289D57";s:9:"secondary";s:6:"09632D";s:5:"hover";s:6:"DDF9E8";}', 'color12'),
('color13', 'a:3:{s:7:"primary";s:6:"D9B197";s:9:"secondary";s:6:"C38B66";s:5:"hover";s:6:"FFF1E8";}', 'color13'),
('color14', 'a:3:{s:7:"primary";s:6:"FF67AB";s:9:"secondary";s:6:"D6387E";s:5:"hover";s:6:"F3DDE7";}', 'color14'),
('color15', 'a:3:{s:7:"primary";s:6:"8E24AA";s:9:"secondary";s:6:"7B1FA2";s:5:"hover";s:6:"EFE8FD";}', 'color15'),
('color2', 'a:3:{s:7:"primary";s:6:"4DC5CE";s:9:"secondary";s:6:"068690";s:5:"hover";s:6:"D3EDEF";}', 'color2'),
('color3', 'a:3:{s:7:"primary";s:6:"FFC107";s:9:"secondary";s:6:"FFA000";s:5:"hover";s:6:"FFF8E2";}', 'color3'),
('color4', 'a:3:{s:7:"primary";s:6:"FB4556";s:9:"secondary";s:6:"BB091A";s:5:"hover";s:6:"F5C3C8";}', 'color4'),
('color5', 'a:3:{s:7:"primary";s:6:"DBA0C3";s:9:"secondary";s:6:"D87CB3";s:5:"hover";s:6:"ECD9E5";}', 'color5'),
('color6', 'a:3:{s:7:"primary";s:6:"3B5998";s:9:"secondary";s:6:"213A6D";s:5:"hover";s:6:"DFEAFF";}', 'color6'),
('color7', 'a:3:{s:7:"primary";s:6:"065E52";s:9:"secondary";s:6:"244C4E";s:5:"hover";s:6:"AFCCAF";}', 'color7'),
('color8', 'a:3:{s:7:"primary";s:6:"FF8A2E";s:9:"secondary";s:6:"CE610C";s:5:"hover";s:6:"FDD9BD";}', 'color8'),
('color9', 'a:3:{s:7:"primary";s:6:"E99090";s:9:"secondary";s:6:"B55353";s:5:"hover";s:6:"FDE8E8";}', 'color9');

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_guests`
--

CREATE TABLE IF NOT EXISTS `cometchat_guests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10000001 ;

--
-- Dumping data for table `cometchat_guests`
--

INSERT INTO `cometchat_guests` (`id`, `name`) VALUES
(10000000, 'guest-10000000');

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_languages`
--

CREATE TABLE IF NOT EXISTS `cometchat_languages` (
  `lang_key` varchar(255) NOT NULL COMMENT 'Key of a language variable',
  `lang_text` text NOT NULL COMMENT 'Text/value of a language variable',
  `code` varchar(20) NOT NULL COMMENT 'Language code for e.g. en for English',
  `type` varchar(20) NOT NULL COMMENT 'Type of CometChat add on for e.g. module/plugin/extension/function',
  `name` varchar(50) NOT NULL COMMENT 'Name of add on for e.g. announcement,smilies, etc.',
  UNIQUE KEY `lang_index` (`lang_key`(50),`code`,`type`,`name`(20)) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Stores all CometChat languages';

--
-- Dumping data for table `cometchat_languages`
--

INSERT INTO `cometchat_languages` (`lang_key`, `lang_text`, `code`, `type`, `name`) VALUES
('rtl', '0', 'en', 'core', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_recentconversation`
--

CREATE TABLE IF NOT EXISTS `cometchat_recentconversation` (
  `convo_id` varchar(100) NOT NULL,
  `id` int(10) unsigned NOT NULL,
  `from` int(10) unsigned NOT NULL,
  `to` int(10) unsigned NOT NULL,
  `message` text NOT NULL,
  `sent` varchar(100) NOT NULL,
  UNIQUE KEY `convo_id` (`convo_id`),
  KEY `fromid` (`from`),
  KEY `toid` (`to`),
  KEY `fromid_toid` (`from`,`to`),
  KEY `from` (`from`),
  KEY `to` (`to`),
  KEY `from_2` (`from`),
  KEY `to_2` (`to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cometchat_recentconversation`
--

INSERT INTO `cometchat_recentconversation` (`convo_id`, `id`, `from`, `to`, `message`, `sent`) VALUES
('452c8a36ffa844106ef36b85a07f2920', 11, 203, 96, 'what''s up?', '1515528614'),
('b600b64e9cd22a57513c22a733e7393a', 1, 96, 196, 'Hello', '1515525905');

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_session`
--

CREATE TABLE IF NOT EXISTS `cometchat_session` (
  `session_id` char(32) NOT NULL,
  `session_data` text NOT NULL,
  `session_lastaccesstime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cometchat_session`
--

INSERT INTO `cometchat_session` (`session_id`, `session_data`, `session_lastaccesstime`) VALUES
('', '', '2018-01-09 18:43:39'),
('8g3perlu6rcpnao8s907h82m10', 'cometchat|a:4:{s:20:"cometchat_admin_user";s:9:"cometchat";s:20:"cometchat_admin_pass";s:9:"cometchat";s:13:"VERSION_CHECK";i:1;s:6:"MsgCnt";i:0;}', '2018-01-09 18:46:12');

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_settings`
--

CREATE TABLE IF NOT EXISTS `cometchat_settings` (
  `setting_key` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Configuration setting name. It can be PHP constant, variable or array',
  `value` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Value of the key.',
  `key_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'States whether the key is: 0 = PHP constant, 1 = atomic variable or 2 = serialized associative array.',
  PRIMARY KEY (`setting_key`),
  KEY `key` (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Stores all the configuration settings for CometChat';

--
-- Dumping data for table `cometchat_settings`
--

INSERT INTO `cometchat_settings` (`setting_key`, `value`, `key_type`) VALUES
('BASE_URL', '/dev/cometchat/', 0),
('color', 'color1', 1),
('crplugins', 'a:16:{i:0;s:5:"style";i:1;s:12:"filetransfer";i:2;s:7:"smilies";i:3;s:9:"audiochat";i:4;s:6:"avchat";i:5;s:9:"broadcast";i:6;s:9:"handwrite";i:7;s:11:"screenshare";i:8;s:8:"stickers";i:9;s:11:"chathistory";i:10;s:17:"clearconversation";i:11;s:4:"save";i:12;s:13:"transliterate";i:13;s:9:"voicenote";i:14;s:10:"writeboard";i:15;s:10:"whiteboard";}', 2),
('dbversion', '28', 1),
('extensions', 'a:3:{i:0;s:9:"mobileapp";i:1;s:7:"desktop";i:2;s:3:"ads";}', 2),
('extensions_core', 'a:4:{s:3:"ads";s:14:"Advertisements";s:9:"mobileapp";s:10:"Mobile App";s:7:"desktop";s:11:"Desktop App";s:4:"bots";s:4:"Bots";}', 2),
('modules_core', 'a:11:{s:13:"announcements";a:9:{i:0;s:13:"announcements";i:1;s:13:"Announcements";i:2;s:31:"modules/announcements/index.php";i:3;s:6:"_popup";i:4;s:3:"280";i:5;s:3:"310";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:16:"broadcastmessage";a:9:{i:0;s:16:"broadcastmessage";i:1;s:17:"Broadcast Message";i:2;s:34:"modules/broadcastmessage/index.php";i:3;s:6:"_popup";i:4;s:3:"385";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:9:"chatrooms";a:9:{i:0;s:9:"chatrooms";i:1;s:6:"Groups";i:2;s:27:"modules/chatrooms/index.php";i:3;s:6:"_popup";i:4;s:3:"600";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:1:"1";}s:8:"facebook";a:9:{i:0;s:8:"facebook";i:1;s:17:"Facebook Fan Page";i:2;s:26:"modules/facebook/index.php";i:3;s:6:"_popup";i:4;s:3:"500";i:5;s:3:"460";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:5:"games";a:9:{i:0;s:5:"games";i:1;s:19:"Single Player Games";i:2;s:23:"modules/games/index.php";i:3;s:6:"_popup";i:4;s:3:"465";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:4:"home";a:8:{i:0;s:4:"home";i:1;s:4:"Home";i:2;s:1:"/";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";}s:17:"realtimetranslate";a:9:{i:0;s:17:"realtimetranslate";i:1;s:23:"Translate Conversations";i:2;s:35:"modules/realtimetranslate/index.php";i:3;s:6:"_popup";i:4;s:3:"280";i:5;s:3:"310";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:11:"scrolltotop";a:8:{i:0;s:11:"scrolltotop";i:1;s:13:"Scroll To Top";i:2;s:40:"javascript:jqcc.cometchat.scrollToTop();";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";}s:5:"share";a:8:{i:0;s:5:"share";i:1;s:15:"Share This Page";i:2;s:23:"modules/share/index.php";i:3;s:6:"_popup";i:4;s:3:"350";i:5;s:2:"50";i:6;s:0:"";i:7;s:1:"1";}s:9:"translate";a:9:{i:0;s:9:"translate";i:1;s:19:"Translate This Page";i:2;s:27:"modules/translate/index.php";i:3;s:6:"_popup";i:4;s:3:"280";i:5;s:3:"310";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:7:"twitter";a:8:{i:0;s:7:"twitter";i:1;s:7:"Twitter";i:2;s:25:"modules/twitter/index.php";i:3;s:6:"_popup";i:4;s:3:"500";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";}}', 2),
('plugins', 'a:17:{i:0;s:7:"smilies";i:1;s:17:"clearconversation";i:2;s:9:"audiochat";i:3;s:6:"avchat";i:4;s:9:"broadcast";i:5;s:12:"filetransfer";i:6;s:9:"handwrite";i:7;s:11:"screenshare";i:8;s:6:"report";i:9;s:8:"stickers";i:10;s:5:"block";i:11;s:11:"chathistory";i:12;s:4:"save";i:13;s:13:"transliterate";i:14;s:10:"whiteboard";i:15;s:9:"voicenote";i:16;s:10:"writeboard";}', 2),
('plugins_core', 'a:18:{s:9:"audiochat";a:2:{i:0;s:10:"Audio Chat";i:1;i:0;}s:6:"avchat";a:2:{i:0;s:16:"Audio/Video Chat";i:1;i:0;}s:5:"block";a:2:{i:0;s:10:"Block User";i:1;i:1;}s:9:"broadcast";a:2:{i:0;s:21:"Audio/Video Broadcast";i:1;i:0;}s:11:"chathistory";a:2:{i:0;s:12:"Chat History";i:1;i:0;}s:17:"clearconversation";a:2:{i:0;s:18:"Clear Conversation";i:1;i:0;}s:12:"filetransfer";a:2:{i:0;s:11:"Send a file";i:1;i:0;}s:9:"handwrite";a:2:{i:0;s:19:"Handwrite a message";i:1;i:0;}s:6:"report";a:2:{i:0;s:19:"Report Conversation";i:1;i:1;}s:4:"save";a:2:{i:0;s:17:"Save Conversation";i:1;i:0;}s:11:"screenshare";a:2:{i:0;s:17:"Share Your Screen";i:1;i:0;}s:7:"smilies";a:2:{i:0;s:5:"Emoji";i:1;i:0;}s:8:"stickers";a:2:{i:0;s:8:"Stickers";i:1;i:0;}s:5:"style";a:2:{i:0;s:15:"Color your text";i:1;i:2;}s:13:"transliterate";a:2:{i:0;s:22:"Write in your language";i:1;i:0;}s:10:"whiteboard";a:2:{i:0;s:25:"Share Whiteboard Document";i:1;i:0;}s:10:"writeboard";a:2:{i:0;s:28:"Share Collaborative Document";i:1;i:0;}s:9:"voicenote";a:2:{i:0;s:16:"Share Voice Note";i:1;i:0;}}', 2),
('theme', 'docked', 1),
('trayicon', 'a:11:{s:4:"home";a:9:{i:0;s:4:"home";i:1;s:4:"Home";i:2;s:1:"/";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";}s:9:"chatrooms";a:9:{i:0;s:9:"chatrooms";i:1;s:9:"Chatrooms";i:2;s:27:"modules/chatrooms/index.php";i:3;s:6:"_popup";i:4;s:3:"600";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:1:"1";}s:13:"announcements";a:9:{i:0;s:13:"announcements";i:1;s:13:"Announcements";i:2;s:31:"modules/announcements/index.php";i:3;s:6:"_popup";i:4;s:3:"280";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:5:"games";a:9:{i:0;s:5:"games";i:1;s:19:"Single Player Games";i:2;s:23:"modules/games/index.php";i:3;s:6:"_popup";i:4;s:3:"465";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:5:"share";a:9:{i:0;s:5:"share";i:1;s:15:"Share This Page";i:2;s:23:"modules/share/index.php";i:3;s:6:"_popup";i:4;s:3:"350";i:5;s:2:"50";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:11:"scrolltotop";a:9:{i:0;s:11:"scrolltotop";i:1;s:13:"Scroll To Top";i:2;s:40:"javascript:jqcc.cometchat.scrollToTop();";i:3;s:0:"";i:4;s:0:"";i:5;s:0:"";i:6;s:0:"";i:7;s:0:"";i:8;s:0:"";}s:8:"facebook";a:9:{i:0;s:8:"facebook";i:1;s:17:"Facebook Fan Page";i:2;s:26:"modules/facebook/index.php";i:3;s:6:"_popup";i:4;s:3:"500";i:5;s:3:"460";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:17:"realtimetranslate";a:9:{i:0;s:17:"realtimetranslate";i:1;s:23:"Translate Conversations";i:2;s:35:"modules/realtimetranslate/index.php";i:3;s:6:"_popup";i:4;s:3:"280";i:5;s:3:"310";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:9:"translate";a:9:{i:0;s:9:"translate";i:1;s:19:"Translate This Page";i:2;s:27:"modules/translate/index.php";i:3;s:6:"_popup";i:4;s:3:"280";i:5;s:3:"310";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}s:7:"twitter";a:8:{i:0;s:7:"twitter";i:1;s:7:"Twitter";i:2;s:25:"modules/twitter/index.php";i:3;s:6:"_popup";i:4;s:3:"500";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";}s:16:"broadcastmessage";a:9:{i:0;s:16:"broadcastmessage";i:1;s:17:"Broadcast Message";i:2;s:34:"modules/broadcastmessage/index.php";i:3;s:6:"_popup";i:4;s:3:"385";i:5;s:3:"300";i:6;s:0:"";i:7;s:1:"1";i:8;s:0:"";}}', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_status`
--

CREATE TABLE IF NOT EXISTS `cometchat_status` (
  `userid` int(10) unsigned NOT NULL,
  `message` text,
  `status` enum('available','away','busy','invisible','offline') DEFAULT NULL,
  `typingto` int(10) unsigned DEFAULT NULL,
  `typingtime` int(10) unsigned DEFAULT NULL,
  `isdevice` int(1) unsigned NOT NULL DEFAULT '0',
  `lastactivity` int(10) unsigned NOT NULL DEFAULT '0',
  `lastseen` int(10) unsigned NOT NULL DEFAULT '0',
  `lastseensetting` int(1) unsigned NOT NULL DEFAULT '0',
  `readreceiptsetting` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`userid`),
  KEY `typingto` (`typingto`),
  KEY `typingtime` (`typingtime`),
  KEY `status` (`status`),
  KEY `lastactivity` (`lastactivity`),
  KEY `status_2` (`status`),
  KEY `isdevice` (`isdevice`),
  KEY `lastactivity_2` (`lastactivity`),
  KEY `isdevice_2` (`isdevice`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cometchat_status`
--

INSERT INTO `cometchat_status` (`userid`, `message`, `status`, `typingto`, `typingtime`, `isdevice`, `lastactivity`, `lastseen`, `lastseensetting`, `readreceiptsetting`) VALUES
(96, NULL, 'available', NULL, NULL, 0, 1515528943, 1515528943, 0, 1),
(203, NULL, 'available', NULL, NULL, 0, 1515648078, 1515648078, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_users`
--

CREATE TABLE IF NOT EXISTS `cometchat_users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 NOT NULL,
  `displayname` varchar(100) CHARACTER SET utf8 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `grp` varchar(25) NOT NULL,
  `friends` text NOT NULL,
  `uid` varchar(255) NOT NULL,
  `roleid` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  KEY `username_2` (`username`),
  KEY `username_3` (`username`),
  KEY `role` (`role`),
  KEY `role_2` (`role`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cometchat_videochatsessions`
--

CREATE TABLE IF NOT EXISTS `cometchat_videochatsessions` (
  `username` varchar(255) NOT NULL,
  `identity` varchar(255) NOT NULL,
  `timestamp` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`username`),
  KEY `username` (`username`),
  KEY `identity` (`identity`),
  KEY `timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(1) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `creation_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adm_id` bigint(20) NOT NULL DEFAULT '0',
  `adm_name` varchar(255) NOT NULL,
  `adm_email` varchar(255) NOT NULL,
  `adm_password` varchar(255) NOT NULL,
  `adm_created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `adm_type` blob,
  `adm_status` enum('A','I','D') NOT NULL,
  `adm_last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adm_id`, `adm_name`, `adm_email`, `adm_password`, `adm_created_on`, `adm_type`, `adm_status`, `adm_last_login`) VALUES
(1, 'admin', 'admin@trdstation.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-12-16 17:19:59', '', 'A', '2017-01-22 15:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_users`
--

CREATE TABLE IF NOT EXISTS `tbl_admin_users` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL,
  `security_code` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profile_image` mediumblob,
  `online_status` tinyint(1) NOT NULL DEFAULT '0',
  `is_suspended` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`),
  UNIQUE KEY `uniqe_scode` (`security_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_admin_users`
--

INSERT INTO `tbl_admin_users` (`id`, `username`, `email`, `security_code`, `password`, `profile_image`, `online_status`, `is_suspended`, `is_deleted`, `created_by`, `created_at`, `modified_by`, `modified_at`) VALUES
(0000000001, 'trd admin', 'admin@trd.com', 'Trd@951753', 'TrdAdmin943167', NULL, 0, 0, 0, 0, '2017-12-11 16:41:21', 1, '2017-12-11 16:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ads_info`
--

CREATE TABLE IF NOT EXISTS `tbl_ads_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ms_price` double NOT NULL,
  `fc_price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_ads_info`
--

INSERT INTO `tbl_ads_info` (`id`, `ms_price`, `fc_price`) VALUES
(1, 250, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alert`
--

CREATE TABLE IF NOT EXISTS `tbl_alert` (
  `alt_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `alt_user_id` int(11) NOT NULL,
  `alt_type` varchar(25) NOT NULL,
  `alt_sent_by` int(11) NOT NULL,
  `alt_created_on` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `alt_read_flag` int(11) NOT NULL DEFAULT '0',
  `alt_request_id` int(11) NOT NULL,
  `alt_chat_id` int(11) NOT NULL,
  `alt_inquiry_id` int(11) NOT NULL,
  PRIMARY KEY (`alt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bstation_post`
--

CREATE TABLE IF NOT EXISTS `tbl_bstation_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `product_item_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` text,
  `usd_price` varchar(255) NOT NULL,
  `quantity` varchar(128) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_locked` tinyint(4) DEFAULT '0',
  `is_deleted` tinyint(4) DEFAULT '0',
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `tbl_bstation_post`
--

INSERT INTO `tbl_bstation_post` (`id`, `busi_id`, `product_item_id`, `title`, `image1`, `image2`, `image3`, `image4`, `description`, `usd_price`, `quantity`, `created_date`, `is_locked`, `is_deleted`, `status`) VALUES
(1, 98, 0, 'Shoes New Arrivals', 'images/bstation_images/comp1.jpg', 'images/bstation_images/comp2.jpg', '', '', 'Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agen', '', '0', '2017-10-20 16:42:19', NULL, 0, 1),
(2, 100, 13, 'Ladies Sandals New Arrivals', 'images/user_images/185/product/1508573101.4229L1.jpg', 'images/user_images/185/product/1508573101.4229L2.jpg', 'images/user_images/185/product/1508573101.4229L3.jpg', 'images/user_images/185/product/1508573101.423L4.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New.', '100', '1', '2017-10-21 16:08:53', NULL, 0, 0),
(3, 100, 13, 'Ladies Shoes & Sandals', 'images/user_images/185/product/1508573101.4229L1.jpg', 'images/user_images/185/product/1508573101.4229L2.jpg', 'images/user_images/185/product/1508573101.4229L3.jpg', 'images/user_images/185/product/1508573101.423L4.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '1000', '1', '2017-10-21 16:52:11', NULL, 0, 0),
(4, 100, 12, 'Shoes and sandals', 'images/user_images/185/product/1508569003.03391.jpg', 'images/user_images/185/product/1508569003.03392.jpg', 'images/user_images/185/product/1508569003.03393.jpg', 'images/user_images/185/product/1508569003.03394.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New.', '1000', '1', '2017-10-22 11:41:20', NULL, 0, 0),
(5, 100, 12, 'Sandals', 'images/user_images/185/product/1508569003.03392.jpg', 'images/user_images/185/product/1508569003.03393.jpg', 'images/user_images/185/product/1508569003.03394.jpg', 'images/user_images/185/product/1508569003.0341.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '1000', '1', '2017-10-22 11:47:33', NULL, 0, 0),
(6, 100, 12, 'boots and laces new arrivals', 'images/user_images/185/product/1508569003.03392.jpg', 'images/user_images/185/product/1508569003.03393.jpg', 'images/user_images/185/product/1508569003.03394.jpg', 'images/user_images/185/product/1508569003.0341.jpg', 'Brown boots is the best for the season, it''s the new style and the best fashion for spring 2018..Brown boots is the best for the season, it''s the new style and the best fashion for spring 2018..Brown boots is the best for the season, it''s the new style and the best fashion for spring 2018..', '100', '1', '2017-10-22 16:13:56', NULL, 1, 1),
(7, 100, 13, 'Ladies stylish sandals with 4 charming colors', 'images/user_images/185/product/1508573101.4229L2.jpg', 'images/user_images/185/product/1508573101.4229L3.jpg', 'images/user_images/185/product/1508573101.423L4.jpg', 'images/user_images/185/product/1508573101.423L5.jpg', 'Go gold, black, sliver or brass, go what you like, wearing what any color you wish all will makes you so elegant this evening, the collection of the summer will some soom', '10', '1', '2017-10-22 16:17:04', NULL, 0, 1),
(8, 100, 12, 'Opening a new company for best quality', 'images/bstation_images/1508669420.0397bstation.jpg', 'images/bstation_images/1508669420.0398bstation.jpg', 'images/bstation_images/1508669420.0398bstation.jpg', 'images/bstation_images/1508669420.0399bstation.jpg', 'Image resolution and pixels is our target for world-wide and international global customers, we provide our technology with and easy to use api and sdk just no compression process requires', '10', '0', '2017-10-22 16:20:20', NULL, 0, 1),
(9, 100, 12, 'This is the fourth post', 'images/user_images/185/product/1508569003.03391.jpg', 'images/user_images/185/product/1508569003.03392.jpg', 'images/user_images/185/product/1508569003.03393.jpg', 'images/user_images/185/product/1508569003.03394.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much MoreSell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much MoreSell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '100', '1', '2017-10-22 16:33:32', NULL, 0, 1),
(10, 100, 13, 'This the sixth post for me today', 'images/user_images/185/product/1508573101.4229L3.jpg', 'images/user_images/185/product/1508573101.423L4.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '100', '1', '2017-10-22 16:34:04', NULL, 0, 1),
(11, 100, 12, 'This is the seventh post today', 'images/user_images/185/product/1508569003.03394.jpg', 'images/user_images/185/product/1508569003.0341.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '100', '1', '2017-10-22 16:34:31', NULL, 0, 1),
(12, 100, 12, 'this is the third post today', 'images/user_images/185/product/1508569003.03393.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '1000', '1', '2017-10-22 16:35:39', NULL, 0, 1),
(13, 100, 12, 'Number 8 post will carry lots', 'images/bstation_images/1508670390.9633bstation.jpg', 'images/bstation_images/1508670390.9634bstation.jpg', 'images/bstation_images/1508670390.9634bstation.jpg', 'images/bstation_images/1508670390.9635bstation.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '100000', '10000', '2017-10-22 16:36:30', NULL, 0, 1),
(14, 100, 12, 'Number 9 post today', 'images/bstation_images/1508670425.6139bstation.jpg', 'images/bstation_images/1508670425.614bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '10', '1', '2017-10-22 16:37:05', NULL, 0, 1),
(15, 100, 12, 'Finally the 10th for today', 'images/bstation_images/1508670500.5797bstation.jpg', 'images/bstation_images/1508670500.5797bstation.jpg', 'images/bstation_images/1508670500.5798bstation.jpg', 'images/bstation_images/1508670500.5799bstation.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More', '22', '1', '2017-10-22 16:38:20', NULL, 0, 1),
(16, 100, 12, 'the eleventh post ', 'images/bstation_images/1508670641.117bstation.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '11', '1', '2017-10-22 16:40:41', NULL, 0, 1),
(17, 98, 0, 'Receive Elite Manufactures Offers', 'images/bstation_images/shoes-slide2.jpg', '', '', '', 'Receive Elite Manufactures Offers, you can send this Receive Elite Manufactures Offers, you can send this Receive Elite Manufactures Offers, you can send this Receive Elite Manufactures Offers, you can send this Receive Elite Manufactures Offers, you can send this ', '', '0', '2017-10-22 19:53:12', NULL, 0, 1),
(18, 46, 2, '1000 Rs. e-wallet Credit on Paid Membership', 'images/user_images/94/product/1500196594.36main_product.jpg', 'images/user_images/94/product/1500196594.36sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '2500', '1', '2017-11-02 01:01:32', NULL, 0, 1),
(19, 102, 14, 'New sofas with many colors', 'images/user_images/190/product/1509623080.1939sofa6.jpg', 'images/user_images/190/product/1509623080.1939sofa2.jpg', 'images/user_images/190/product/1509623080.194sofa1.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New', '520.00', '1', '2017-11-02 23:56:35', NULL, 0, 1),
(20, 102, 0, 'This is a high neck shoes', 'images/bstation_images/1509648077.6997bstation.jpg', 'images/bstation_images/1509648077.7002bstation.jpg', 'images/bstation_images/1509648077.7002bstation.jpg', 'images/bstation_images/1509648077.7003bstation.jpg', 'These are the new collection of high neck boots, it is available in many charming colors and suitable for many even, please don''t hesitate to contact us', '130.00', '300', '2017-11-03 00:11:17', NULL, 0, 1),
(21, 102, 14, 'This black sofas', 'images/user_images/190/product/1509623080.194sofa4.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More.', '1000.00', '1', '2017-11-03 00:27:04', NULL, 0, 1),
(22, 102, 14, 'New vision', 'images/user_images/190/product/1509623080.194sofa4.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '1500', '1', '2017-11-03 00:29:09', NULL, 0, 1),
(23, 102, 0, 'My Company', 'images/bstation_images/1509649689.8954bstation.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '100', '1', '2017-11-03 00:38:09', NULL, 0, 1),
(24, 102, 0, 'My company', 'images/bstation_images/1509649732.0899bstation.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '100', '1', '2017-11-03 00:38:52', NULL, 0, 1),
(25, 102, 14, 'Sofas are here', 'images/user_images/190/product/1509623080.194sofa1.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'images/user_images/190/product/1509623080.194sofa5.jpg', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '11100.00', '1', '2017-11-03 00:40:22', NULL, 0, 1),
(26, 102, 15, 'Gray Fabric Sofa', 'images/user_images/190/product/1509650428.2314sofa4.jpg', 'images/user_images/190/product/1509650428.2315sofa4.jpg', 'images/user_images/190/product/1509650428.2315sofa4.jpg', 'images/user_images/190/product/1509650428.2315sofa4.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '1500', '1', '2017-11-03 00:52:03', NULL, 0, 1),
(27, 102, 15, 'Gray Fabric sofa is available', '', '', '', '', 'Gray Fabric sofa is availableGray Fabric sofa is availableGray Fabric sofa is availableGray Fabric sofa is availableGray Fabric sofa is availableGray Fabric sofa is availableGray Fabric sofa is available', '2355.00', '2', '2017-11-03 14:54:41', NULL, 0, 1),
(28, 101, 0, 'I need this Navy Boots', 'images/bstation_images/1.jpg', 'images/bstation_images/2.jpg', 'images/bstation_images/3.jpg', 'images/bstation_images/4.jpg', 'Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..', '', '0', '2017-11-04 19:04:09', NULL, 0, 1),
(29, 46, 2, 'FreightBazaar | Diwali Dhamaka Offer', 'images/user_images/94/product/1500196594.36main_product.jpg', 'images/user_images/94/product/1500196594.36sub_product.jpg', 'images/user_images/94/product/1500196594.36sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '4500', '10', '2017-11-06 20:31:28', NULL, 0, 1),
(30, 46, 2, 'Truck available from pune to mumbai', 'images/user_images/94/product/1500196594.36main_product.jpg', 'images/user_images/94/product/1500196594.36sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..\r\n\r\nSell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..\r\n\r\n', '500.75', '3 Containers', '2017-11-06 20:46:24', NULL, 0, 1),
(31, 46, 0, 'We have tops for women', 'images/bstation_images/1509987046.2492bstation.jpg', 'images/bstation_images/1509987046.2493bstation.jpg', 'images/bstation_images/1509987046.2493bstation.jpg', 'images/bstation_images/1509987046.2495bstation.jpg', 'Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..\r\n\r\nBuyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..\r\n\r\nBuyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..\r\n\r\n', '2500.00', '1 Container', '2017-11-06 22:20:46', NULL, 0, 1),
(32, 102, 0, 'Yeah This My company introductions', 'images/bstation_images/1510175148.1147bstation.jpg', 'images/bstation_images/1510175148.1148bstation.jpg', 'images/bstation_images/1510175148.1148bstation.jpg', 'images/bstation_images/1510175148.115bstation.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Of', '10000', '10000 Ocs', '2017-11-09 02:35:48', NULL, 0, 1),
(33, 102, 14, 'Title should include the keywords', 'images/user_images/190/product/1509623080.194sofa1.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..\r\n\r\n', '1000', '1 container', '2017-11-09 02:53:34', 1, 1, 1),
(34, 101, 0, 'I Need This Post Covers All Kind Of Stock', 'images/bstation_images/sofa5.jpg', 'images/bstation_images/service1.jpg', 'images/bstation_images/srvices2.jpg', '', 'Buyers Post Covers All Buyers Requirements, Such As Getting A Quote, Sourcing A Potential Seller For A Particular Product, Looking For A Product Agency, Manufacturing A New Item And Much More..', '', '', '2017-11-09 04:51:50', NULL, 0, 1),
(35, 99, 0, 'Title should include the keywords members may', 'images/bstation_images/1510185132.9881bstation.jpg', 'images/bstation_images/1510185132.9881bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..\r\n\r\n', '0', '1', '2017-11-09 05:22:12', NULL, 0, 1),
(36, 99, 0, 'Title should include the keywords members may', 'images/bstation_images/1510185224.3146bstation.jpg', 'images/bstation_images/1510185224.3146bstation.jpg', '', '', 'Title should include the keywords members may type to find your post above all.Title should include the keywords members may type to find your post above all.Title should include the keywords members may type to find your post above all.', '0', '1', '2017-11-09 05:23:44', NULL, 0, 1),
(37, 99, 0, 'Title should include the keywords members may', 'images/bstation_images/1510185654.1416bstation.jpg', 'images/bstation_images/1510185654.1417bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:30:54', NULL, 0, 1),
(38, 99, 0, 'post no 4', 'images/bstation_images/1510185714.6446bstation.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:31:54', NULL, 0, 1),
(39, 99, 0, 'post no 5', 'images/bstation_images/1510185768.31bstation.jpg', '', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:32:48', NULL, 0, 1),
(40, 99, 0, 'Post no6', 'images/bstation_images/1510185802.7599bstation.jpg', 'images/bstation_images/1510185802.76bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:33:22', NULL, 1, 1),
(41, 99, 0, 'post no 7', 'images/bstation_images/1510185860.6734bstation.jpg', '', '', '', 'Boost It Now..\r\nSell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:34:20', NULL, 0, 1),
(42, 99, 0, 'Post no.8', 'images/bstation_images/1510185889.7826bstation.jpg', 'images/bstation_images/1510185889.7827bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:34:49', NULL, 0, 1),
(43, 99, 0, 'Post no9', 'images/bstation_images/1510186106.4205bstation.jpg', 'images/bstation_images/1510186106.4205bstation.jpg', 'images/bstation_images/1510186106.4206bstation.jpg', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:38:26', NULL, 0, 1),
(44, 99, 0, 'post No 10', 'images/bstation_images/1510186210.3952bstation.jpg', 'images/bstation_images/1510186210.3953bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '0', '1', '2017-11-09 05:40:10', 1, 0, 1),
(45, 65, 0, 'We need sports shoes for Men', 'images/bstation_images/shoes32.jpg', 'images/bstation_images/shoes41.jpg', 'images/bstation_images/shoes51.jpg', 'images/bstation_images/shoes6.jpg', 'A pair of black casual shoes, has central lace-ups\nSynthetic upper, has perforations and a reinforced heel collar\nCushioned footbed\nTextured outsole with patterned grooves\nWarranty: 3 months from the date of purchase against manufacturing defects\nMaterial & Care\nTo clean just wipe off dirt with a wet cloth. Don''t use detergents or solvents. Do not machine wash.', '', '', '2017-11-10 19:18:21', NULL, 0, 1),
(46, 46, 0, 'My Other Image Test', 'images/bstation_images/1510326389.8944bstation.jpg', 'images/bstation_images/1510326389.8945bstation.jpg', '', '', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..\r\n\r\nSell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..\r\n\r\n', '300', '1 Container', '2017-11-10 20:36:29', NULL, 0, 1),
(47, 102, 0, 'Title should include the keywords members may', 'images/user_images/190/product/1509623080.194sofa1.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'images/bstation_images/1510394676.7639bstation2.jpg', 'images/bstation_images/1510394676.7655bstation3.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '10', '1 container', '2017-11-11 15:34:36', NULL, 0, 1),
(48, 102, 0, 'The mixed products', 'images/bstation_images/1513755866.2051bstation.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'images/user_images/190/product/1509623080.194sofa5.jpg', 'images/bstation_images/1513755866.2077bstation3.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Of', '500', '1 container', '2017-12-20 13:14:26', NULL, 1, 1),
(49, 102, 0, 'The New Arrivals', 'images/user_images/190/product/1509623080.1939sofa2.jpg', 'images/user_images/190/product/1509623080.194sofa1.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'images/bstation_images/1513756356.187bstation3.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '100.00', '10000 Pairs', '2017-12-20 13:22:36', NULL, 0, 1),
(50, 102, 0, 'The mixed products', 'images/bstation_images/1513756437.7227bstation.jpg', 'images/bstation_images/1513756437.7227bstation1.jpg', 'images/bstation_images/1513756437.7228bstation2.jpg', 'images/bstation_images/1513756437.7228bstation3.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Of', '1000.00', '1 container', '2017-12-20 13:23:57', NULL, 0, 1),
(51, 101, 0, 'This is new order who say yes..!', 'images/bstation_images/sofa1.jpg', 'images/bstation_images/21.jpg', 'images/bstation_images/41.jpg', 'images/bstation_images/31.jpg', 'i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. \r\ni need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. quantity such as 2 or 5 containers monthly. i need a huge quantity of the showing images in good quality and in reasonable price, i''m ready with the max. qua', '', '', '2017-12-20 13:50:14', NULL, 0, 1),
(52, 102, 0, 'Test the hidden profile', 'images/bstation_images/1513758601.2556bstation.jpg', 'images/bstation_images/1513758601.2557bstation1.jpg', '', '', 'Test the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest the hidden profileTest ', '1000.00', '1 container', '2017-12-20 14:00:01', 1, 0, 1),
(53, 102, 0, 'Test on jan the 3rd', 'images/user_images/190/product/1509623080.194sofa1.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'images/user_images/190/product/1509623080.194sofa5.jpg', 'images/bstation_images/1514948838.2039bstation3.jpg', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', '1000.00', '1 container', '2018-01-03 08:37:18', NULL, 0, 1),
(54, 101, 0, 'fvxdf sf sdf sdf f', 'images/bstation_images/shipping_services2.jpg', 'images/bstation_images/shoes-slide4.jpg', '', '', 'dffdgdf gfgdg dsgd sdgds sdgd dsg sdgg dg dgdgd dgdg sdg sdg dgdsg dsgdgdg ddffdgdf gfgdg dsgd sdgds sdgd dsg sdgg dg dgdgd dgdg sdg sdg dgdsg dsgdgdg ddffdgdf gfgdg dsgd sdgds sdgd dsg sdgg dg dgdgd dgdg sdg sdg dgdsg dsgdgdg ddffdgdf gfgdg dsgd sdgds sdgd dsg sdgg dg dgdgd dgdg sdg sdg dgdsg dsgdgdg ddffdgdf gfgdg dsgd sdgds sdgd dsg sdgg dg dgdgd dgdg sdg sdg dgdsg dsgdgdg d', '', '', '2018-01-04 19:16:58', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bstation_post_offers`
--

CREATE TABLE IF NOT EXISTS `tbl_bstation_post_offers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `message` text,
  `details` text,
  `price` double DEFAULT '0',
  `unit_type` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `contact_person` varchar(128) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `additional_email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_bstation_post_offers`
--

INSERT INTO `tbl_bstation_post_offers` (`id`, `post_id`, `seller_id`, `buyer_id`, `message`, `details`, `price`, `unit_type`, `quantity`, `attachment`, `contact_person`, `company`, `additional_email`, `phone`, `country`, `created_date`, `status`) VALUES
(1, 45, 102, 65, 'Free Delivery on order above Rs. 49', 'Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49', 1, 'FOB', '500', NULL, 'Peter Cruise', 'Mega Factory For Sofas Group', 'pt@udtalks.com', '13660638247', 'Turkey', '2017-11-10 19:43:51', 1),
(2, 34, 102, 101, 'Hi i have a good price for your request', 'I have a similar product for your request as you can see in the attached image, in different poses. Also we can make you exact sample in a very good quality and at a very low price.', 10, 'Ex-Work', '1 container', 'images/user_images/190/selleroffer1510395457.1161br.jpg', 'Peter Cruise', 'Mega Factory For Sofas Group', 'pt@udtalks.com', '13660638247', 'Turkey', '2017-11-11 15:47:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bstation_post_requests`
--

CREATE TABLE IF NOT EXISTS `tbl_bstation_post_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `message` text,
  `details` text,
  `attachment` varchar(255) DEFAULT NULL,
  `contact_person` varchar(128) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `additional_email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_bstation_post_requests`
--

INSERT INTO `tbl_bstation_post_requests` (`id`, `post_id`, `seller_id`, `buyer_id`, `message`, `details`, `attachment`, `contact_person`, `company`, `additional_email`, `phone`, `country`, `created_date`, `status`) VALUES
(1, 16, 100, 98, 'How much final', 'How much finalHow much finalHow much finalHow much finalHow much finalHow much finalHow much final', 'images/user_images/178/buyerrequest1508677018.6154br.jpg', 'ry', 'ryry', 'ryrty@hotmail.com', '13660638247', 'China ', '2017-10-22 18:26:58', 1),
(2, 31, 46, 65, 'Applicable tax on the basis of exact location', 'Material & Care\r\nTo clean just wipe off dirt with a wet cloth. Don''t use detergents or solvents. Do not machine wash.', 'images/user_images/116/buyerrequest1510321943.7372br.jpg', 'khalil ya', 'GG', 'zaki-hazem@hotmail.com', '613660638247', 'India', '2017-11-10 19:22:23', 1),
(3, 43, 99, 65, 'Free Delivery on order above Rs. 49', 'Tax: Applicable tax on the basis of exact location & discount will be charged at the time of checkout\r\n\r\n100% Original Products\r\n\r\nFree Delivery on order above Rs. 49\r\nCash on delivery might be available\r\n\r\nEasy 30 days returns & 30 days exchanges\r\n\r\nTry & Buy might be available', NULL, 'khalil ya', 'GG', 'zaki-hazem@hotmail.com', '613660638247', 'China', '2017-11-10 19:26:22', 1),
(4, 43, 99, 65, 'Free Delivery on order above Rs. 49', 'Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49Free Delivery on order above Rs. 49', NULL, 'khalil ya', 'GG', 'zaki-hazem@hotmail.com', '613660638247', 'China', '2017-11-10 19:31:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buisness_info`
--

CREATE TABLE IF NOT EXISTS `tbl_buisness_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL,
  `company_country` varchar(255) DEFAULT NULL,
  `company_province` varchar(255) DEFAULT NULL,
  `company_city` varchar(255) DEFAULT NULL,
  `company_street` varchar(255) DEFAULT NULL,
  `license_company_name` varchar(255) DEFAULT NULL,
  `license_company_country` varchar(255) DEFAULT NULL,
  `license_company_province` varchar(255) DEFAULT NULL,
  `license_company_city` varchar(255) DEFAULT NULL,
  `license_company_street` varchar(255) DEFAULT NULL,
  `telephone_code` varchar(10) DEFAULT NULL,
  `telephone_city_code` varchar(10) DEFAULT NULL,
  `telephone_number` varchar(12) DEFAULT NULL,
  `telephone_number1` varchar(12) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `p_o_box` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `business_logo` varchar(255) DEFAULT NULL,
  `annual_trad_volume` varchar(300) DEFAULT NULL,
  `company_rendom_carousel` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=no,1=yes',
  `plan_id` int(11) DEFAULT '1',
  `gaurantee_term` text,
  `gaurantee_period` int(11) DEFAULT '0',
  `product_certs` text,
  `export_lic_number` varchar(128) DEFAULT NULL,
  `export_license` varchar(255) DEFAULT NULL,
  `rank` float DEFAULT '0',
  `is_logo_verified` tinyint(4) DEFAULT '0',
  `verification_id` varchar(128) DEFAULT NULL,
  `verify_url` varchar(255) DEFAULT NULL,
  `visit` bigint(20) DEFAULT '0',
  `likes` bigint(20) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `accept_chat` tinyint(4) DEFAULT '1',
  `accept_offer` tinyint(4) DEFAULT '1',
  `accept_community` tinyint(4) DEFAULT '1',
  `accept_email` tinyint(4) DEFAULT '1',
  `created_date` datetime DEFAULT NULL,
  `plan_upgraded_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `message_flag` tinyint(4) DEFAULT '0' COMMENT '0=not show,1=show',
  `is_disable` tinyint(4) DEFAULT '0' COMMENT '1=disable,0= not disable',
  `is_deleted` tinyint(4) DEFAULT '0' COMMENT '1=deleted,0=not deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `tbl_buisness_info`
--

INSERT INTO `tbl_buisness_info` (`id`, `company_name`, `company_country`, `company_province`, `company_city`, `company_street`, `license_company_name`, `license_company_country`, `license_company_province`, `license_company_city`, `license_company_street`, `telephone_code`, `telephone_city_code`, `telephone_number`, `telephone_number1`, `fax`, `p_o_box`, `website`, `company_email`, `business_logo`, `annual_trad_volume`, `company_rendom_carousel`, `plan_id`, `gaurantee_term`, `gaurantee_period`, `product_certs`, `export_lic_number`, `export_license`, `rank`, `is_logo_verified`, `verification_id`, `verify_url`, `visit`, `likes`, `shares`, `accept_chat`, `accept_offer`, `accept_community`, `accept_email`, `created_date`, `plan_upgraded_date`, `expiry_date`, `message_flag`, `is_disable`, `is_deleted`) VALUES
(38, 'Flipkart', 'India', 'Gujarat', 'Rajkot', 'Vrundavan Park', '8734MKJL', 'India', 'Gujarat', 'Rajkot', 'A1, Akay Apartment', '91', '7868', '987883763888', '999823483822', '7676483', '7883', '', 'flip@gmail.com', 'images/user_images/81/business/1499092736new.jpg', '', 0, 1, 'Money back for the products not match the buyer specification which mentioned in the contract.', 6, 'ISO, SACO and CE', '4516548f', NULL, 15, 1, NULL, NULL, 3, 0, 0, 1, 1, 1, 1, '2017-07-03 20:16:51', NULL, NULL, 0, 0, 1),
(39, 'Amazon', 'India', 'Gujarat', 'Ahambadabad', 'Govindpura', 'YJM5799623', 'India', 'Gujarat', 'Ahambadabad', 'VilashNagar', '7324', '237423', '988932423222', '873432332222', '342344', '234', 'www.amazon.com', 'amazon@gmail.com', 'images/user_images/82/business/1499101721new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-03 22:42:23', NULL, NULL, 0, 0, 0),
(40, 'Reliance', 'India', 'UP', 'Lakhnav', 'ulashnagar', 'UIL345345345', 'India', 'UP', 'Lakhnav', 'ulashnagar', '91', '234234', '923432233333', '98233242334', '23423', '2423', 'www.reliance.com', 'reliance@gmail.com', 'images/user_images/83/business/1499137758new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-04 08:44:44', NULL, NULL, 0, 0, 0),
(41, 'ebay', 'India', 'UP', 'Kanpur', 'Shivajinagar', 'KLO7842342', 'India', 'UP', 'Kanpur', 'Shivajinagar', '91', '234234', '9234234233', '92342343324', '232342', '234', 'www.ebay.com', 'ebay@gmail.com', 'images/user_images/84/business/1499142434new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, '2017-07-04 10:00:04', NULL, NULL, 0, 0, 0),
(42, 'myntra', 'India', 'Maharastra', 'Pune', 'wakad', 'MK823423', 'India', 'Maharastra', 'Pune', 'wakad', '234', '23434', '924343444432', '8345345433', '434535234', '24234', 'www.myntra.com', 'myntra@gmail.com', 'images/user_images/85/business/1499142934new.jpg', '23', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 0, 1, '2017-07-04 10:07:35', NULL, NULL, 0, 0, 0),
(43, 'Bidu', 'India', 'Maharastra', 'Pune', 'VimanNagar', 'UH82423423', 'India', 'Maharastra', 'Pune', 'VimanNagar', '92', '24234', '9234234233', '9823432232', '234324', '234', 'www.bidu.com', 'bidu@gmail.com', 'images/user_images/86/business/1499143239new.jpg', '43', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 2, 1, 0, 1, 1, 1, 1, '2017-07-04 10:13:49', NULL, NULL, 0, 0, 0),
(44, 'Test', 'ind', 'mah', 'pune', '123', 'test', 'ind', 'mah', 'pune', '1234', '91', '10', '1234567890', '', '12', '0', '', 'prashantmyname@gmail.com', 'images/user_images/87/business/1499536910new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-08 23:33:59', NULL, NULL, 0, 0, 0),
(45, 'ABV', 'ind', 'ma', 'puneq', '123', '134', 'ind', 'maah', 'pune', '124', '01', '09', '1234567890', '', '0', '1', '', 'prashantmyname@gmail.com', 'images/user_images/93/business/1499801429new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-12 01:01:30', NULL, NULL, 0, 0, 0),
(46, 'UFO Electronics Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', 'UFO Electronics Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '020', '9021609385', '', '4444444455', '', '', 'er.pradeep007@gmail.com', 'images/user_images/94/business/1499841634new.jpg', '', 0, 3, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 31, 0, 0, 1, 1, 1, 1, '2017-07-12 12:14:15', NULL, '2018-10-24', 0, 0, 0),
(47, 'Hosam Zaki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-13 18:32:00', NULL, NULL, 0, 0, 0),
(48, 'Prashant Sal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 2, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 3, 0, 0, 1, 1, 1, 1, '2017-07-15 13:40:24', NULL, NULL, 0, 0, 0),
(49, 'Prashant Buyer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-15 14:16:15', NULL, NULL, 0, 0, 0),
(50, 'wqe', 'ds', 'sd', 'sd', '3', '2', 'sa', '1212', '1', '3', '3', '3', '3', '3', '33', '', '33', 'raginikhadke@yahoo.in', 'images/user_images/98/business/1500111456new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-07-15 15:10:56', NULL, NULL, 0, 0, 0),
(51, 'Hotline Technical Goods Co. Ltd', 'China', 'Guagdong', 'Guangzhou', 'Office No. 207, Hengsheng Buidling No. 205, Fakosan.', 'Hotline Technical Goods Co. Ltd', 'China', 'Guagdong', 'Guangzhou', 'Office No. 207, Hengsheng Buidling No. 205, Fakosan.', '0086', '20', '97759856', '97759856', '97759856', '', 'www.myudpluses.com', 'mybuyers@udtalks.com', 'images/user_images/100/business/1502792865new.jpg', '100 Parcels', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, NULL, NULL, 0, 1, 0, 1, 1, 1, 1, '2017-08-15 16:39:36', NULL, NULL, 1, 0, 0),
(52, 'Ahmed Hazem Zaki', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-08-16 16:52:53', NULL, NULL, 0, 0, 0),
(53, 'Hotline Internet& technology Co.', 'China', 'Guangdong', 'Guangzhou', 'Office no. 207 hensheng building', 'Hotline Internet& technology Co.', 'China', 'Guangdong', 'Guangzhou', 'Office no. 207 hensheng building', '0086', '20', '8989898', '8989898', '8989896', '510010', 'www.any.com', 'zak@hotmail.com', 'images/user_images/102/business/1503149062new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-08-19 19:07:54', NULL, NULL, 0, 0, 0),
(54, 'Midtrans Shipping Co. Ltd', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'Midtrans Shipping Co. Ltd as show in license', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in license', '002', '8660004', '8660004', '8660004', '8660009', '5200', 'www.any.com', 'za@hotmail.com', 'images/user_images/103/business/1503231745new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 2, 0, 0, 1, 1, 1, 1, '2017-08-20 17:57:48', NULL, NULL, 0, 0, 0),
(55, 'Sleek Makeup Group', 'Egypt', 'Giza', 'Faisal', 'This is the Company Address in english', 'مجموعة سيليك لمستحضرات التجميل المحدودة', 'مصؤ', 'الجيزة', 'فيصل', 'هذا عنوان الشركة باللغة العربية', '002', '02', '55555555', '55555556', '55555557', '5100', 'www.sleek.com', 'sleek@hotmail.com', 'images/user_images/104/business/1504092999new.jpg', '100 Parcels', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-08-30 17:16:50', NULL, NULL, 1, 1, 0),
(56, 'MIDTRANS SHIPPING & SERVICES LLC ', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'MIDTRANS SHIPPING & SERVICES LLC as in license', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address as in license', '0086', '20', '20555555', '20555555', '20555556', '510', 'www.any.com', 'any@hotmail.com', 'images/user_images/105/business/1504352110new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 6, 0, 0, 1, 1, 1, 1, '2017-09-02 21:10:13', NULL, NULL, 0, 0, 0),
(57, 'Saanvad Ventures Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', 'Saanvad Ventures Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '020', '9021609385', '', '4444444455', '345', '', 'er.pradeep007@gmail.com', 'images/user_images/107/business/1504441415new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, '2017-09-03 17:55:07', NULL, NULL, 0, 0, 0),
(58, 'poojara logistics', 'India', 'asdf', 'asdf', 'asdf', '8734MKJL', 'Andorra', 'sadf', 'sadf', 'A1, Akay Apartment', '91', '234234', '9823343444', '912341234', '3425345', '3123', 'www.amazon.com', 'sdaf@sdf.sadf', 'images/user_images/108/business/1504443811new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-03 18:33:46', NULL, NULL, 0, 0, 0),
(59, 'poojara logistics', 'Andorra', 'asdf', 'asdf', 'asdf', '8734MKJL', 'Andorra', 'asdf', 'sadf', 'A1, Akay Apartment', '91', '234234', '9823343444', '912341234', '234234', '234', 'fsfdg', 'sdaf@sdf.sadf', 'images/user_images/109/business/1504444033new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-03 18:38:07', NULL, NULL, 0, 0, 0),
(60, 'poojara logistics', 'Andorra', 'asdf', 'asdf', 'asdf', 'asdf', 'Andorra', 'sadf', 'sadf', 'asdf', '91', '34342', '9234234233', '912341234', '234234', '234', 'www.amazon.com', 'sdaf@sdf.sadf', 'images/user_images/110/business/1504444404new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-03 18:44:21', NULL, NULL, 0, 0, 0),
(61, 'Fashion With Style Co. Ltd', 'China', 'Guangdong', 'Foshan', 'This is the Company Address in english', 'شركة ستايل للفاشون والموديلات المحدودة', 'الصين', 'جواندوج', 'كوانزو', 'هذا عنوان الشركة باللغة العربية', '0086', '020', '8665665525', '8665668', '8665661', '51000', 'www.any.com', 'any@hotmail.com', 'images/user_images/111/business/1504623737new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 4, 0, 0, 1, 1, 1, 1, '2017-09-05 21:03:56', NULL, NULL, 0, 0, 0),
(62, 'Pra Dance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-08 01:07:31', NULL, NULL, 0, 0, 0),
(63, 'Dance ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-08 01:14:55', NULL, NULL, 0, 0, 0),
(64, 'Sleek MakeUp Group', 'Egypt', 'Giza', 'Faisal', 'This is the Company Address in english', 'شركة سيليك للماكاب المحدودة', ' مصر ', 'الجيزة', 'فيصل', 'هذا هو عنوان الشركة كما في الرخصة', '002', '02', '1234567892', '2365064', '2365066', '51020', 'www.any.com', 'sleek@hotmail.com', 'images/user_images/115/business/1505353610new.jpg', '30 Parcels ', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, NULL, NULL, 0, 0, 0, 0, 1, 1, 1, '2017-09-14 07:26:31', NULL, NULL, 1, 0, 1),
(65, 'GG', 'China', 'GDS', 'GSD', 'SDG', 'DS', 'SDG', 'D', 'DF', 'SDDG', '0086', '020', '1234567111', '1234567', '1234567', '51011', 'www.any.com', 'any@hotmail.com', 'images/user_images/116/business/1505382645new.jpg', 'CONTAINER', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-14 15:22:19', NULL, NULL, 1, 0, 0),
(66, 'Tareq Shuail', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-15 08:02:43', NULL, NULL, 0, 0, 0),
(67, 'Sleek MakeUp Group', 'China', 'Guangdong', 'Guangzhou', 'Office no. 207 hensheng building', '贷款的框架 看吕剧的框架看到 框架框架的', '贷款的框架', '贷款', '贷款', '贷款的框架 看吕剧的框架看到 ', '0086', '20', '1234567111', '1234567', '1234565', '510010', 'www.any.com', 'zaki-hazem@hotmail.com', 'images/user_images/118/business/1505444025new.jpg', '', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-15 08:34:20', NULL, NULL, 0, 0, 0),
(68, 'New Shipping Lines Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', 'New Shipping Lines Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '020', '9021609385', '', '44444444', '7654', '', 'er.pradeep007@gmail.com', 'images/user_images/121/business/1505836944new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-19 21:35:10', NULL, NULL, 0, 0, 0),
(69, 'Sunshine Import & Export Co.', 'China', 'Guangdong', 'Shenzen', 'This is the Company Add in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'الصين', 'جواندونج', 'فوشان', 'هذا هو عنوان الشركة كما في الرخصة', '0086', '20', '1234567', '1234568', '1234568', '510010', 'www.any.com', 'any@hotmail.com', 'images/user_images/122/business/1505886154new.jpg', '1 Container', 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 0, 0, 1, 1, '2017-09-20 11:19:50', NULL, NULL, 1, 0, 0),
(70, 'Style fashion co. ltd.', 'Egypt', 'Giza', 'Faisal', 'This is the Company Address in english', 'شركة سيليك للماكاب المحدودة', 'جمهورية مصر العربية', 'الجيزة', 'فيصل', 'هذا هو عنوان الشركة كما في الرخصة', '002', '02', '1234567', '1234568', '1234569', '511', 'www.any.com', 'any@hotmail.com', 'images/user_images/131/business/1506321322new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-25 12:19:54', NULL, NULL, 0, 0, 0),
(71, 'Style Garment Group', 'Egypt', 'Giza', 'Faisal', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'جمهورية مصر العربية', 'الجيزة', 'فيصل', 'هذا هو عنوان الشركة كما في الرخصة', '002', '020', '1234567', '1234568', '1234569', '510', 'www.any.com', 'any@hotmail.com', 'images/user_images/132/business/1506322538new.jpg', '1 Container', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 3, 0, 0, 1, 1, 1, 1, '2017-09-25 12:29:07', NULL, NULL, 1, 0, 0),
(72, 'Seven Seas Shipping Co. Ltd.', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'الصين', 'جواندونج', 'جولنوة', 'هذا هو عنوان الشركة كما في الرخصة', '0086', '020', '55555555', '56556555', '53655442', '510', 'www.any.com', 'any@hotmail.com', 'images/user_images/136/business/1506413012new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 7, 0, 0, 1, 1, 1, 1, '2017-09-26 13:38:43', NULL, NULL, 0, 0, 0),
(73, 'Any Any', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 15:34:21', NULL, NULL, 0, 0, 0),
(74, 'asdf', 'asfd', 'asdf', 'asdf', 'asdf', 'asdf', 'asf', 'asdf', 'asdf', 'asdf', '23', '324234', '234324', '23', '234', '234', '', 'af@sf.sd', 'images/user_images/140/business/1506425458new.jpg', '23', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 17:01:34', NULL, NULL, 1, 0, 0),
(75, 'sdfad', 'asfd', 'sdf', 'sadf', 'sadf', 'asdf', 'sadf', 'sadf', 'sadf', 'asdf', '23', '234', '5345', '354', '345435', '34', '', 'sgsdf@ert.ert', 'images/user_images/141/business/1506439534new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 20:58:54', NULL, NULL, 0, 0, 0),
(76, 'sd', 'ds', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', '434', '234', '234', '234', '234', '324', '', 'df@fds.sdf', 'images/user_images/143/business/1506442266new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 21:41:55', NULL, NULL, 0, 0, 0),
(77, 'cxvc', 'zxcv', 'zxcv', 'zxcv', 'zxcv', 'zvz', 'zxcv', 'zxcv', 'xzcv', 'zxcv', '324', '5345', '453345', '345345', '345345', '345', '', 'sdfsdfs@fdgsdf.sdfg', 'images/user_images/144/business/1506446645new.jpg', '345', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 22:54:43', NULL, NULL, 1, 0, 0),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 22:52:35', NULL, NULL, 0, 0, 0),
(79, 'sd', 'asd', 'asdfasdf', 'asdf', 'asdf', 'asdf', 'asdf', 'sadf', 'asdf', 'sadf', '324', '234', '234243', '234234', '234234', '324', '', 'asdas2SF@FFD.SDF', 'images/user_images/145/business/1506447242new.jpg', '234', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-26 23:05:27', NULL, NULL, 1, 0, 0),
(80, 'dfdf', 'adf', 'sdf', 'sd', 'sdf', 'sadfs', 'asdf', 'sd', 'sfd', 'df', '213', '1123', '34324', '234234', '234', '23', '', 'sdf@hsfdg.we', 'images/user_images/147/business/1506450653new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-09-27 00:00:59', NULL, NULL, 0, 0, 0),
(81, 'Truck Up Group Co. Ltd', 'Egypt', 'Gizah', 'Cairo', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'جمهورية مصر العربية', 'الجيزة', 'فيصل', 'هذا هو عنوان الشركة كما في الرخصة', '002', '055', '2365063', '2365062', '2365062', '5100', 'www.any.com', 'any@hotmail.com', 'images/user_images/148/business/1506866386new.jpg', '1000 Parcels', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, '2017-10-01 19:24:15', NULL, NULL, 1, 0, 0),
(82, 'GG', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'gg', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in license', '0086', '020', '1234567', '1234568', '1234565', '201', 'www.any.com', 'any@hotmail.com', 'images/user_images/152/business/1506945379new.jpg', '100 Parcels', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-02 17:27:59', NULL, NULL, 1, 0, 0),
(83, 'Pra Importers Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', 'Pra Importers Pvt. Ltd.', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '020', '9021609385', '', '34567890', '3234', '', 'er.pradeep007@gmail.com', 'images/user_images/153/business/1506955315new.jpg', '40 Containers', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-02 20:16:15', NULL, NULL, 1, 0, 0),
(84, 'Speed Growth Group', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'جمهورية مصر العربية', 'القاهرة', 'فيصل', 'هذا هو عنوان الشركة كما في الرخصة', '0086', '020', '1234567', '1234568', '1234565', '510', 'www.any.com', 'any@hotmail.com', 'images/user_images/154/business/1507371086new.jpg', '50 containers', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, 'Ht21320', 'http://www.udtalks.com', 2, 0, 0, 1, 1, 1, 1, '2017-10-07 15:50:55', NULL, NULL, 1, 0, 0),
(85, 'Cargo Faster Logistics Company', 'China', 'Guangdong', 'Shenzen', '13, xiaolian, lufan lu, Shenzen', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودةx', 'جمهورية مصر العربيةx', 'الجيزةx', 'فيصلx', 'هذا هو عنوان الشركة كما في الرخصةx', '009', '029', '1234569', '1234569', '1234569', '51110', 'www.udtalks.com', 'gami@hotmail.com', 'images/user_images/158/business/1507471869new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, '2017-10-08 19:47:47', NULL, NULL, 0, 0, 0),
(86, 'Funico Manufacturer Co. Ltd', 'China', 'Shngahi', 'Shanghai', 'This is Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية ', 'جمهورية مصر العربية', 'القاهرة', 'فيصل', 'هذا هو عنوان الشركة ', '0086', '030', '123456', '123455', '123444', '05621', 'www.anyy.com', 'anyy@hotmail.com', 'images/user_images/161/business/1507555182new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-09 18:32:05', NULL, NULL, 0, 0, 0),
(87, 'Keeps Loading Group Co. Ltd.', 'Egypt', 'Giza', 'Cairo', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'جمهورية مصر العربية', 'الجيزة', 'القاهرة', 'هذا هو عنوان الشركة كما في الرخصة', '002', '020', '1234567', '1234568', '1234569', '3621', 'www.any.com', 'any@hotmail.com', 'images/user_images/163/business/1507646060new.jpg', '60 Containers', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, 'xv', 'vc', 0, 0, 0, 1, 1, 1, 1, '2017-10-10 20:14:12', NULL, NULL, 1, 0, 0),
(88, 'Manisha Singh 5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-11 21:14:35', NULL, NULL, 0, 0, 0),
(89, 'Tom Hover', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-12 02:27:20', NULL, NULL, 0, 0, 0),
(90, 'International Cargo Gears logistics co.', 'China', 'Guangdong', 'Sania', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'الصين', 'جواندونج', 'سانيا', 'هذا هو عنوان الشركة كما في الرخصة', '0086', '020', '1234567', '1234568', '1234569', '540', 'www.any.com', 'any@hotmail.com', 'images/user_images/167/business/1507755980new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, '2017-10-12 02:42:39', NULL, NULL, 0, 0, 0),
(91, 'Tang Yan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-12 22:05:36', NULL, NULL, 1, 0, 0),
(92, 'Tang Yan Group Co. Ltd', 'China', 'Guangdong', 'Foshan', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'China', '-Choose a state-', 'Guangzhou', 'Office no. 207 hensheng building', '+861366063', '+861366063', '613660638247', '+86136606382', '1234566', '5520', 'www.any.com', 'zaki-hazem@hotmail.com', 'images/user_images/170/business/1507826746new.jpg', '2 Containers', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, '', '', 0, 0, 0, 0, 0, 0, 1, '2017-10-12 22:19:41', NULL, NULL, 1, 0, 0),
(93, 'Pixel Care Group Co. Ltd.', 'Saudi Arabia', 'Reyadh', 'Reyadh', 'This is the Company Address in english', 'اللغة العربية', 'السعودية', 'الرياض', 'الرياض', 'هذا هو عنوان الشركة كما في الرخصة', '00966', '050', '1234566', '1324566', '1236555', '253180', 'www.any.com', 'any@hotmail.com', 'images/user_images/173/business/1507852604new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-13 05:31:20', NULL, NULL, 0, 0, 0),
(94, 'any company name ', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'هوت لاين ', 'جمهورية مصر العربية', 'الفسبنهم', 'لنمةينم', 'هذا هو عنوان الشركة كما في الرخصة', '0086', '20', '7894563', '7895632', '2354789', '89723', 'www.any.com', 'any@hotmail.com', 'images/user_images/174/business/1507896153new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-13 17:35:47', NULL, NULL, 0, 0, 0),
(95, 'Xiao yan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-14 19:59:33', NULL, NULL, 0, 0, 0),
(96, 'Rose ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-10-14 20:01:23', NULL, NULL, 0, 0, 0),
(97, 'Joystart Shoes Manufacture Co.', 'China', 'Fonan', 'Changsha', 'This is the Company Address in english', '贷款的框架 看吕剧的框架看到 框架框架的', '到 框架框架的', '到 框架框架的', '到 框架框架的', '到 框架框架的', '0086', '0730', '1234567', '1234568', '1234569', '53662', 'www.any.com', 'any@hotmail.com', 'images/user_images/177/business/1507992263new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 1, 0, 0, 1, 1, 1, 1, '2017-10-14 20:22:37', NULL, NULL, 0, 0, 0),
(98, 'Tamkein Technology Co. Ltd.', 'Saudi Arabia', 'Reyadh', 'Reyadh', 'This is the Company Address in english', 'شركة تمكين النظم المحدودة', 'China', '-Choose a state-', 'Guangzhou', 'Office no. 207 hensheng building', '+861366063', '+861366063', '613660638247', '+86136606382', '123455', '2356', 'www.any.com', 'zaki-hazem@hotmail.com', 'images/user_images/178/business/1508475424new.jpg', '50 containers', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, '', '', 1, 0, 0, 1, 0, 1, 1, '2017-10-20 10:29:59', NULL, NULL, 1, 0, 0),
(99, 'Mega Shipping Cargo Group Co. Limited', 'China', 'Guangdong', 'Guangzhou', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'الصين', 'جواندونج', 'جولنوة', 'هذا هو عنوان الشركة كما في الرخصة', '0086', '020', '1234567', '1234568', '1234569', '52152', 'www.any.com', 'any@hotmail.com', 'images/user_images/183/business/1508486028new.jpg', '', 1, 2, NULL, 0, NULL, NULL, NULL, 0, 1, '', '', 7, 0, 0, 1, 1, 1, 1, '2017-10-20 13:30:42', NULL, '2018-11-09', 0, 0, 0),
(100, 'Istanbul Turkey Fashion Trends Co. Ltd ', 'Turkey', 'Istanbul', 'Istanbul', 'This is the Company Address in english', 'هوت لاين ', 'تركيا', 'أسطنبول', 'إسطنبول', 'هذا هو عنوان الشركة كما في الرخصة', '0088', '022', '123456', '123456', '123456', '586', 'www.myudpluses.com', 'any@hotmail.com', 'images/user_images/185/business/1508566391new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 3, 0, 0, 1, 1, 1, 1, '2017-10-21 11:48:25', NULL, NULL, 0, 0, 0),
(101, 'Loca Buying And Shopping Co.', 'Egypt', 'Alex', 'Alex', 'This is the Company Address in english', 'لوكا ياينج ان شوبينج', 'مصر', 'الاسكندرية', 'الاسكندرية', 'هذا هو عنوان الشركة كما في الرخصة', '002', '055', '1234563', '1334564', '1234567', '535', 'www.any.com', 'lok@hotmail.com', 'images/user_images/187/business/1509463584new.jpg', '1 Container', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 1, 'H12345', 'any platform', 32, 0, 0, 1, 1, 1, 1, '2017-10-31 21:00:57', NULL, NULL, 1, 0, 0),
(102, 'Mega Factory For Sofas Group', 'Turkey', 'Istanbul', 'Istanbul', 'This is the Company Address in english', 'شركة الخط الساخن للمنتجات التكنولوجية المحدودة', 'تركيا', 'اسطنبول', 'إسطنبول', 'هذا هو عنوان الشركة كما في الرخصة', '005', '022', '123456', '123456', '123456', '5326', 'www.any.com', 'any@hotmail.com', 'images/user_images/190/business/1509612650new.jpg', '', 1, 2, 'Send spare parts of the non-working products, to the buyer country and carry its shipping cost.', 6, 'CE, SASO, ICQ', '2586', NULL, 74, 1, 'Paid Member Test', 'www.udtalks.com/my-verifications', 105, 6, 1, 1, 1, 1, 1, '2017-11-02 14:27:49', NULL, '2018-11-05', 0, 0, 0),
(103, 'dewds af', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-12-22 14:24:18', NULL, NULL, 0, 0, 0),
(104, 'Test trade', 'India', 'KA', 'BLR', 'Ba 123', 'English', 'India', 'KA', 'BLR', 'Ba 123', '0', '0', '122432425', '', '123', '560003', '', 'shettyanusha16@gmail.com', 'images/user_images/203/business/1515528392new.jpg', '', 1, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 9, 0, 0, 1, 1, 1, 1, '2018-01-10 01:37:37', NULL, NULL, 0, 0, 0),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, NULL, 0, NULL, NULL, NULL, 0, 0, NULL, NULL, 0, 0, 0, 1, 1, 1, 1, '2017-12-24 00:42:25', NULL, NULL, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_businessroutes`
--

CREATE TABLE IF NOT EXISTS `tbl_businessroutes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `from_location` varchar(1000) NOT NULL,
  `to_location` varchar(1000) NOT NULL,
  `created_date` datetime NOT NULL,
  `from_country_id` int(11) DEFAULT '0',
  `to_country_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `tbl_businessroutes`
--

INSERT INTO `tbl_businessroutes` (`id`, `busi_id`, `from_location`, `to_location`, `created_date`, `from_country_id`, `to_country_id`) VALUES
(7, 40, 'Mumbai,Kolkatta,Udepur', 'Jamnagar,Rajkot', '2017-07-04 08:44:44', 0, 0),
(8, 41, 'US,Dubai', 'India,England', '2017-07-04 10:00:04', 0, 0),
(9, 45, 'test', 'test', '2017-07-12 01:01:29', 0, 0),
(10, 54, 'Yantian, Shenzen', 'Dubai, Riyadh, Alexandria, Shoqina', '2017-08-20 17:57:48', 0, 0),
(11, 56, 'Shenzhen, Yntian', 'Dubai, Sharga', '2017-09-02 21:10:13', 45, 223),
(12, 56, '', '', '2017-09-02 21:10:13', 0, 0),
(21, 64, '', '', '2017-09-14 08:24:14', 0, 0),
(22, 65, '', '', '2017-09-14 15:23:09', 0, 0),
(31, 67, 'Shenzen, Shangahi, Yantian, Guangzhou', '', '2017-09-15 09:21:34', 45, 0),
(32, 68, 'Mumbai, Kolkata', 'Madras, Kakinaka', '2017-09-19 21:35:10', 0, 0),
(39, 69, '', '', '2017-09-20 12:20:40', 0, 0),
(43, 61, '', '', '2017-09-21 15:34:29', 0, 0),
(49, 71, '', '', '2017-09-25 12:47:14', 0, 0),
(55, 72, 'Shenzen, Shangahi, Yantian, Guangzhou', '', '2017-09-26 14:18:11', 45, 0),
(57, 75, '', '', '2017-09-27 16:38:31', 0, 0),
(64, 81, '', '', '2017-10-01 20:18:16', 0, 0),
(65, 83, '', '', '2017-10-02 23:50:15', 0, 0),
(67, 84, '', '', '2017-10-07 15:58:05', 0, 0),
(80, 85, 'Shenzen, Shangahi, Yantian, Guangzhou', '', '2017-10-08 20:49:07', 45, 0),
(85, 86, '', '', '2017-10-09 18:51:47', 0, 0),
(86, 87, '', '', '2017-10-10 20:15:38', 0, 0),
(89, 92, '', '', '2017-10-12 22:27:33', 0, 0),
(92, 90, 'Ningbo, Yantian, Shenzen', 'Sokhina', '2017-10-13 04:17:34', 45, 63),
(93, 93, '', '', '2017-10-13 05:41:14', 0, 0),
(97, 98, '', '', '2017-10-20 10:34:53', 45, 45),
(102, 100, '', '', '2017-10-21 11:55:10', 0, 0),
(103, 101, '', '', '2017-11-01 14:15:22', 0, 0),
(108, 99, 'Shenzen, Shangahi, Yantian, Guangzhou', 'Dubai, Sharga', '2017-11-12 16:40:46', 45, 223),
(110, 102, '', '', '2017-12-23 16:37:23', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_branches`
--

CREATE TABLE IF NOT EXISTS `tbl_business_branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `country_code` varchar(8) DEFAULT NULL,
  `city_code` varchar(8) DEFAULT NULL,
  `telephone1` varchar(12) DEFAULT NULL,
  `telephone2` varchar(12) DEFAULT NULL,
  `fax` varchar(25) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `tbl_business_branches`
--

INSERT INTO `tbl_business_branches` (`id`, `busi_id`, `country`, `province`, `city`, `street`, `country_code`, `city_code`, `telephone1`, `telephone2`, `fax`, `email`, `is_deleted`) VALUES
(3, 38, 'India', 'Gujarat', 'Ahamdabad', 'Setelite', '83458', '88345', '9846272342', '9823423433', '7827364762348', NULL, 0),
(4, 56, 'Egypt', 'Cairo', 'Giza', 'this other office address', '0086', '20555555', '20555555', '20555555', '20555555', NULL, 0),
(12, 61, 'Egypt', 'Giza', 'Cairo', 'this is the address in Egypt branch', '002', '055', '2365063222', '2365063222', '2365063', 'wer@sf.asd', 0),
(13, 70, 'china', 'guandong', 'Guangzhou', 'Office no. 207 hensheng building', '0086', '20', '1234567', '1234587', '1234567', 'za@udtalks.com', 0),
(14, 70, 'USA', 'NY', 'NY', 'any address in this branch', '001', '01', '1234567', '1234566', '1234569', 'za@udtalks.com', 0),
(16, 75, 'qwefjqfq', 'wfqwf', 'asdf', 'asdf', '42524', '2345', '235', '2354', 'sdfg', 'srsdfg2@dfg.sdfg', 0),
(23, 86, 'Egypt', 'Giza', 'Faisal', 'this thr address in Egypt branch', '002', '020', '1233335', '1333332', '1234567', 'anyg@udtalks.com', 0),
(26, 93, 'Egypt', 'Giza', 'Cairo', 'this thr address in Egypt branch', '002', '055', '1234567', '1234567', '12345689', 'any@udtalks.com', 0),
(30, 100, 'Egypt', 'Cairo', 'Giza', 'this thr address in Egypt branch', '002', '055', '123456', '123456', '1234567', 'zaki-hazem@hotmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_info_image`
--

CREATE TABLE IF NOT EXISTS `tbl_business_info_image` (
  `busi_id` int(11) NOT NULL,
  `desksite_bg1` varchar(255) DEFAULT NULL,
  `desksite_bg2` varchar(255) DEFAULT NULL,
  `website_bg1` varchar(255) DEFAULT NULL,
  `website_bg2` varchar(255) DEFAULT NULL,
  `info_img1` varchar(255) DEFAULT NULL,
  `info_img2` varchar(255) DEFAULT NULL,
  `company_info_img1` varchar(255) DEFAULT NULL,
  `company_info_img2` varchar(255) DEFAULT NULL,
  `company_info_img3` varchar(255) DEFAULT NULL,
  `company_info_img4` varchar(255) DEFAULT NULL,
  UNIQUE KEY `busi_info` (`busi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_business_info_image`
--

INSERT INTO `tbl_business_info_image` (`busi_id`, `desksite_bg1`, `desksite_bg2`, `website_bg1`, `website_bg2`, `info_img1`, `info_img2`, `company_info_img1`, `company_info_img2`, `company_info_img3`, `company_info_img4`) VALUES
(38, 'images/user_images/81/info/1499097253.88ds1.jpg', 'images/user_images/81/info/1499097253.88ds2.jpg', 'images/user_images/81/info/1499097297.7web1.jpg', 'images/user_images/81/info/1499097297.7web2.jpg', 'images/user_images/81/info/1499097329.51web1.jpeg', 'images/user_images/81/info/1499097329.51web2.jpeg', NULL, NULL, NULL, NULL),
(39, 'images/user_images/82/info/1499102087.04ds1.jpg', 'images/user_images/82/info/1499102087.04ds2.jpg', 'images/user_images/82/info/1499102145.6web1.jpg', 'images/user_images/82/info/1499102145.6web2.jpg', 'images/user_images/82/info/1499102224.8web1.jpeg', 'images/user_images/82/info/1499102224.8web2.jpeg', NULL, NULL, NULL, NULL),
(40, 'images/user_images/83/info/1499138229.23ds1.jpg', 'images/user_images/83/info/1499138229.23ds2.jpg', 'images/user_images/83/info/1499138242.91web1.jpg', 'images/user_images/83/info/1499138242.91web2.jpg', 'images/user_images/83/info/1499138247.89web1.jpeg', 'images/user_images/83/info/1499138247.89web2.jpeg', 'images/user_images/83/info/1499138319.14web1.jpg', 'images/user_images/83/info/1499138319.14web2.jpg', 'images/user_images/83/info/1499138319.14web2.jpg', NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'images/user_images/86/info/1499772011.52ds1.jpg', 'images/user_images/86/info/1499772011.52ds2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'images/user_images/94/info/1499844525.69ds1.jpg', 'images/user_images/94/info/1499844525.69ds2.jpg', 'images/user_images/94/info/1499844553web1.jpg', 'images/user_images/94/info/1499844553web2.jpg', 'images/user_images/94/info/1499844578.05web1.jpg', 'images/user_images/94/info/1499844578.05web2.jpg', NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'images/user_images/98/info/1500113150.48ds1.jpg', 'images/user_images/98/info/1500113150.48ds2.jpg', 'images/user_images/98/info/1500113155.94web1.jpg', 'images/user_images/98/info/1500113155.94web2.jpg', 'images/user_images/98/info/1500113160.13web1.jpg', 'images/user_images/98/info/1500113160.13web2.jpg', 'images/user_images/98/info/1500113171.47web1.jpg', 'images/user_images/98/info/1500113171.47web2.jpg', 'images/user_images/98/info/1500113171.47web2.jpg', 'images/user_images/98/info/1500113171.47web2.jpg'),
(51, 'images/user_images/100/info/1502807046.42ds1.jpg', 'images/user_images/100/info/1502807046.42ds2.jpg', NULL, NULL, 'images/user_images/100/info/1502807026.44web1.jpg', 'images/user_images/100/info/1502807026.44web2.jpg', NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'images/user_images/115/info/1505360680.41ds1.jpg', 'images/user_images/115/info/1505360255.35ds2.jpg', NULL, NULL, 'images/user_images/115/info/1505360342.66web1.jpg', 'images/user_images/115/info/1505360342.66web2.jpg', 'images/user_images/115/info/1505360661.49web1.jpg', 'images/user_images/115/info/1505360661.49web2.jpg', 'images/user_images/115/info/1505360661.49web2.jpg', 'images/user_images/115/info/1505360661.49web2.jpg'),
(65, 'images/user_images/116/info/1505382839.02ds1.jpg', NULL, NULL, NULL, 'images/user_images/116/info/1505382840.87web1.jpg', 'images/user_images/116/info/1505382840.87web2.jpg', NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'images/user_images/118/info/1505451571.81ds1.jpg', 'images/user_images/118/info/1505451571.81ds2.jpg', 'images/user_images/118/info/1505451577.81web1.jpg', 'images/user_images/118/info/1505451577.81web2.jpg', 'images/user_images/118/info/1505451596.94web1.jpg', 'images/user_images/118/info/1505451596.94web2.jpg', 'images/user_images/118/info/1505451613.86web1.jpg', 'images/user_images/118/info/1505451613.86web2.jpg', 'images/user_images/118/info/1505451613.86web2.jpg', 'images/user_images/118/info/1505451613.86web2.jpg'),
(68, 'images/user_images/121/info/1507141587.5538wb-1.jpg', 'images/user_images/121/info/1507141587.5538wb-2.jpg', 'images/user_images/121/info/1507141587.5538wb-3.jpg', 'images/user_images/121/info/1507141587.5538wb-4.jpg', 'images/user_images/121/info/1507141587.5538pro-1.jpg', 'images/user_images/121/info/1507141587.5539pro-2.jpg', 'images/user_images/121/info/1507141587.5539comp4.jpg', 'images/user_images/121/info/1507141587.5539comp3.jpg', 'images/user_images/121/info/1507141587.5539comp2.jpg', 'images/user_images/121/info/1507141587.5539comp1.jpg'),
(69, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'images/user_images/132/info/1506324931.3ds1.jpg', 'images/user_images/132/info/1506324931.3ds2.jpg', NULL, NULL, 'images/user_images/132/info/1506324931.3web1.jpg', 'images/user_images/132/info/1506324931.3web2.jpg', 'images/user_images/132/info/1506324931.3web1.jpg', 'images/user_images/132/info/1506324931.3web2.jpg', 'images/user_images/132/info/1506324931.3web2.jpg', 'images/user_images/132/info/1506324931.3web2.jpg'),
(72, 'images/user_images/136/info/1506416415.81ds1.jpg', 'images/user_images/136/info/1506416415.81ds2.jpg', 'images/user_images/136/info/1506416415.81web1.jpg', 'images/user_images/136/info/1506416415.81web2.jpg', 'images/user_images/136/info/1506416415.81web1.jpg', 'images/user_images/136/info/1506416415.81web2.jpg', 'images/user_images/136/info/1506416415.81web1.jpg', 'images/user_images/136/info/1506416415.91web2.jpg', 'images/user_images/136/info/1506416415.91web2.jpg', 'images/user_images/136/info/1506416415.91web2.jpg'),
(73, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'images/user_images/148/info/1506868330.88ds1.jpg', 'images/user_images/148/info/1506868330.88ds2.jpg', NULL, NULL, 'images/user_images/148/info/1506943887.77web1.jpg', 'images/user_images/148/info/1506943887.77web2.jpg', 'images/user_images/148/info/1506868330.88web1.jpg', 'images/user_images/148/info/1506868330.88web2.jpg', 'images/user_images/148/info/1506868330.88web3.jpg', 'images/user_images/148/info/1506868820.83web2.jpg'),
(82, 'images/user_images/152/info/1507034860.541Car0.jpg', 'images/user_images/152/info/1507034860.541Car1.jpg', NULL, NULL, 'images/user_images/152/info/1507034860.5411shipping_services1.jpg', 'images/user_images/152/info/1507034860.5411shipping_services2.jpg', 'images/user_images/152/info/1507034860.5411comp2.jpg', 'images/user_images/152/info/1507034860.5411comp3.jpg', 'images/user_images/152/info/1507034860.5411comp1.jpg', 'images/user_images/152/info/1507034860.5411comp4.jpg'),
(83, 'images/user_images/153/info/1506967831.3008wb-1.jpg', 'images/user_images/153/info/1506967831.3008wb-2.jpg', NULL, NULL, 'images/user_images/153/info/1506967831.3009pro-2.jpg', 'images/user_images/153/info/1506967831.3009pro-1.jpg', 'images/user_images/153/info/1506967831.3009comp4.jpg', 'images/user_images/153/info/1506967831.3009comp3.jpg', 'images/user_images/153/info/1506967831.3009comp2.jpg', 'images/user_images/153/info/1506967831.3009comp1.jpg'),
(84, 'images/user_images/154/info/1507372785.1906Car1.jpg', 'images/user_images/154/info/1507372785.1906Car0.jpg', NULL, NULL, 'images/user_images/154/info/1507372785.1907Buyer-information-image.jpg', 'images/user_images/154/info/1507372785.19074qbiynvcp4.jpg', 'images/user_images/154/info/1507372785.1907comp1.jpg', 'images/user_images/154/info/1507372785.1907comp2.jpg', 'images/user_images/154/info/1507372785.1907comp3.jpg', 'images/user_images/154/info/1507372785.1907comp4.jpg'),
(85, 'images/user_images/158/info/1507474830.2758Car1.jpg', 'images/user_images/158/info/1507474830.2758Car0.jpg', 'images/user_images/158/info/1507474830.2758Car0.jpg', 'images/user_images/158/info/1507474830.276Car1.jpg', 'images/user_images/158/info/1507474830.276shipping_services2.jpg', 'images/user_images/158/info/1507474830.276shipping_services1.jpg', 'images/user_images/158/info/1507474830.276comp1.jpg', 'images/user_images/158/info/1507474830.2761comp2.jpg', 'images/user_images/158/info/1507474830.2761comp3.jpg', 'images/user_images/158/info/1507474830.2761comp4.jpg'),
(86, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'images/user_images/163/info/1507647472.6884Car0.jpg', 'images/user_images/163/info/1507647472.6884Car1.jpg', NULL, NULL, 'images/user_images/163/info/1507647472.6884shipping-b.jpg', 'images/user_images/163/info/1507647472.6884shipping-a.jpg', 'images/user_images/163/info/1507647472.6885comp1.jpg', 'images/user_images/163/info/1507647472.6885comp2.jpg', 'images/user_images/163/info/1507647472.6885comp3.jpg', 'images/user_images/163/info/1507647472.6885comp4.jpg'),
(88, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'images/user_images/167/info/1507849045.0394Car0.jpg', 'images/user_images/167/info/1507849045.0394Car1.jpg', 'images/user_images/167/info/1507849045.0394Car1.jpg', 'images/user_images/167/info/1507849045.0396Car0.jpg', 'images/user_images/167/info/1507849045.0396shipping_services2.jpg', 'images/user_images/167/info/1507849045.0396shipping_services1.jpg', 'images/user_images/167/info/1507849045.0396comp1.jpg', 'images/user_images/167/info/1507849045.0396comp2.jpg', 'images/user_images/167/info/1507849045.0396comp3.jpg', 'images/user_images/167/info/1507849045.0397comp4.jpg'),
(91, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'images/user_images/170/info/1507827726.6471Car1.jpg', 'images/user_images/170/info/1507827726.6472Car0.jpg', NULL, NULL, 'images/user_images/170/info/1507827726.6472shipping_services2.jpg', 'images/user_images/170/info/1507827726.6472shipping_services1.jpg', 'images/user_images/170/info/1507827726.6472comp1.jpg', 'images/user_images/170/info/1507827726.6472comp2.jpg', 'images/user_images/170/info/1507827726.6472comp3.jpg', 'images/user_images/170/info/1507827726.6473comp4.jpg'),
(93, 'images/user_images/173/info/1507854738.5121Car0.jpg', 'images/user_images/173/info/1507859217.6706Car1.jpg', 'images/user_images/173/info/1507854738.5121Car1.jpg', 'images/user_images/173/info/1507854738.5123Car0.jpg', 'images/user_images/173/info/1507854738.5123shipping_services2.jpg', 'images/user_images/173/info/1507854738.5123shipping_services1.jpg', 'images/user_images/173/info/1507854738.5123comp1.jpg', 'images/user_images/173/info/1507854738.5123comp2.jpg', 'images/user_images/173/info/1507854738.5124comp3.jpg', 'images/user_images/173/info/1507854738.5124comp4.jpg'),
(94, 'images/user_images/174/info/1507896525.1332Car0.jpg', 'images/user_images/174/info/1507896525.1332Car1.jpg', 'images/user_images/174/info/1507896525.1332Car1.jpg', 'images/user_images/174/info/1507896525.1334Car0.jpg', 'images/user_images/174/info/1507896525.1334shipping_services1.jpg', 'images/user_images/174/info/1507896525.1334shipping_services2.jpg', 'images/user_images/174/info/1507896525.1334comp1.jpg', 'images/user_images/174/info/1507896525.1334comp2.jpg', 'images/user_images/174/info/1507896525.1334comp3.jpg', 'images/user_images/174/info/1507896525.1335comp4.jpg'),
(95, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'images/user_images/177/info/1507994790.0304SHOES1.jpg', 'images/user_images/177/info/1507994790.0304SHOES2.jpg', 'images/user_images/177/info/1507994790.0304SHOES2.jpg', 'images/user_images/177/info/1507994790.0306SHOES1.jpg', 'images/user_images/177/info/1507994790.0306shoes-slide.jpg', 'images/user_images/177/info/1507994790.0306shoes-slide2.jpg', 'images/user_images/177/info/1507994790.0306comp1.jpg', 'images/user_images/177/info/1507994790.0306comp2.jpg', 'images/user_images/177/info/1507994790.0306comp3.jpg', 'images/user_images/177/info/1507994790.0307comp4.jpg'),
(98, 'images/user_images/178/info/1508476247.0073Car0.jpg', 'images/user_images/178/info/1508476247.0073Car1.jpg', NULL, NULL, 'images/user_images/178/info/1508476247.0073shoes-slide.jpg', 'images/user_images/178/info/1508476247.0073shoes4.jpg', 'images/user_images/178/info/1508476247.0073comp2.jpg', 'images/user_images/178/info/1508476247.0073comp1.jpg', 'images/user_images/178/info/1508476247.0073comp3.jpg', 'images/user_images/178/info/1508476247.0074comp4.jpg'),
(99, 'images/user_images/183/info/1508488592.7411Car0.jpg', 'images/user_images/183/info/1508488592.7411Car1.jpg', 'images/user_images/183/info/1508488592.7412SHOES1.jpg', 'images/user_images/183/info/1508488592.7412SHOES2.jpg', 'images/user_images/183/info/1508488592.7412shipping_services1.jpg', 'images/user_images/183/info/1508488592.7412shipping_services2.jpg', 'images/user_images/183/info/1508488592.7412comp1.jpg', 'images/user_images/183/info/1508488592.7412comp2.jpg', 'images/user_images/183/info/1508488592.7412comp3.jpg', 'images/user_images/183/info/1508488592.7412comp4.jpg'),
(100, 'images/user_images/185/info/1508568165.4531SHOES1.jpg', 'images/user_images/185/info/1508568165.4531SHOES2.jpg', 'images/user_images/185/info/1508568165.4531Car0.jpg', 'images/user_images/185/info/1508568165.4531Car1.jpg', 'images/user_images/185/info/1508568165.4531shoes-slide.jpg', 'images/user_images/185/info/1508568165.4531shoes-slide2.jpg', 'images/user_images/185/info/1508568165.4532comp1.jpg', 'images/user_images/185/info/1508568165.4532comp2.jpg', 'images/user_images/185/info/1508568165.4532comp3.jpg', 'images/user_images/185/info/1508568165.4532comp4.jpg'),
(101, 'images/user_images/187/info/1509528446.9849Car0.jpg', 'images/user_images/187/info/1509528446.9849Car1.jpg', NULL, NULL, 'images/user_images/187/info/1509528446.9849shoes4.jpg', 'images/user_images/187/info/1509528446.9849shoes-slide.jpg', 'images/user_images/187/info/1509528446.9849comp1.jpg', 'images/user_images/187/info/1509528446.985comp2.jpg', 'images/user_images/187/info/1509528446.985comp3.jpg', 'images/user_images/187/info/1509528446.985comp4.jpg'),
(102, 'images/user_images/190/info/1512411986.3573Car0.jpg', 'images/user_images/190/info/1509616768.3764SHOES1.jpg', 'images/user_images/190/info/1509616768.3764Car1.jpg', 'images/user_images/190/info/1509616768.3764Car0.jpg', 'images/user_images/190/info/1509616768.3764shoes-slide2.jpg', 'images/user_images/190/info/1509616768.3764shoes-slide.jpg', 'images/user_images/190/info/1509616768.3764comp1.jpg', 'images/user_images/190/info/1509616768.3764comp2.jpg', 'images/user_images/190/info/1509616768.3764comp3.jpg', 'images/user_images/190/info/1509616768.3765comp4.jpg'),
(103, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business_visitors`
--

CREATE TABLE IF NOT EXISTS `tbl_business_visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_id` int(11) DEFAULT '0',
  `busi_id` int(11) NOT NULL,
  `likes` tinyint(4) DEFAULT '0',
  `shares` tinyint(4) DEFAULT '0',
  `city` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `visit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `tbl_business_visitors`
--

INSERT INTO `tbl_business_visitors` (`id`, `visitor_id`, `busi_id`, `likes`, `shares`, `city`, `country`, `ip_address`, `visit_date`) VALUES
(1, 102, 102, 0, 0, 'Foshan', 'China', '219.130.235.36', '2017-12-21'),
(2, 102, 102, 0, 0, 'Foshan', 'China', '219.130.235.36', '2017-12-21'),
(3, 102, 101, 0, 0, 'Pune', 'India', '106.210.203.197', '2017-12-21'),
(4, 102, 102, 0, 0, 'Foshan', 'China', '219.130.235.36', '2017-12-21'),
(5, 46, 102, 0, 0, 'Foshan', 'China', '219.130.235.36', '2017-12-22'),
(6, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(7, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(8, 102, 101, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(9, 102, 101, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(10, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(11, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(12, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(13, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(14, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(15, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(16, 102, 101, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(17, 102, 101, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(18, 101, 102, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(19, 99, 101, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(20, 46, 102, 0, 0, 'Foshan', 'China', '219.130.232.223', '2017-12-24'),
(21, 102, 101, 0, 0, 'Foshan', 'China', '219.130.232.223', '2017-12-24'),
(22, NULL, 102, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(23, NULL, 102, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(24, NULL, 102, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(25, NULL, 102, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(26, NULL, 102, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(27, NULL, 99, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(28, NULL, 54, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(29, NULL, 72, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(30, NULL, 72, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(31, NULL, 90, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(32, NULL, 85, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(33, NULL, 54, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(34, NULL, 56, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(35, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.235.125', '2017-12-25'),
(36, NULL, 72, 0, 0, 'Foshan', 'China', '219.130.235.125', '2017-12-25'),
(37, NULL, 72, 0, 0, 'Foshan', 'China', '219.130.235.125', '2017-12-25'),
(38, 102, 102, 0, 0, 'Hadapsar', 'India', '49.35.73.182', '2017-12-25'),
(39, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.235.125', '2017-12-25'),
(40, NULL, 71, 0, 0, '', 'India', '103.230.149.188', '2017-12-26'),
(41, NULL, 102, 0, 0, 'Pune', 'India', '103.221.73.37', '2017-12-27'),
(42, NULL, 102, 0, 0, 'Guangzhou', 'China', '121.9.143.10', '2018-01-02'),
(43, NULL, 102, 0, 1, 'Guangzhou', 'China', '121.9.143.10', '2018-01-02'),
(44, NULL, 102, 0, 0, 'Guangzhou', 'China', '121.9.143.10', '2018-01-02'),
(45, NULL, 97, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-03'),
(46, NULL, 100, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-03'),
(47, NULL, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-03'),
(48, 102, 101, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-03'),
(49, NULL, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(50, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(51, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(52, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(53, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(54, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(55, 102, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(56, 102, 101, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(57, 101, 102, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(58, 99, 99, 0, 0, 'Guangzhou', 'China', '121.9.140.41', '2018-01-05'),
(59, NULL, 99, 0, 0, 'Pune', 'India', '49.35.84.57', '2018-01-06'),
(60, NULL, 99, 0, 0, 'Pune', 'India', '49.35.84.57', '2018-01-06'),
(61, NULL, 99, 0, 0, 'Pune', 'India', '49.35.84.57', '2018-01-06'),
(62, 102, 102, 0, 0, 'Foshan', 'China', '219.130.234.222', '2018-01-09'),
(63, 102, 102, 0, 0, 'Foshan', 'China', '219.130.234.222', '2018-01-09'),
(64, NULL, 102, 0, 0, 'Pune', 'India', '106.210.203.31', '2018-01-10'),
(65, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(66, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(67, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(68, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(69, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-11'),
(70, NULL, 104, 0, 0, 'San Francisco', 'United States', '159.203.196.79', '2018-01-11'),
(71, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-11'),
(72, 104, 104, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-11'),
(73, NULL, 104, 0, 0, 'New York', 'United States', '162.243.69.215', '2018-01-11'),
(74, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(75, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(76, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(77, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(78, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(79, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(80, NULL, 46, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(81, NULL, 46, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-11'),
(82, 46, 43, 0, 0, 'Asegaon', 'India', '49.35.118.4', '2018-01-11'),
(83, 46, 43, 0, 0, 'Asegaon', 'India', '49.35.118.4', '2018-01-11'),
(84, 46, 102, 0, 0, 'Asegaon', 'India', '49.35.118.4', '2018-01-11'),
(85, 46, 102, 0, 0, 'Asegaon', 'India', '49.35.118.4', '2018-01-11'),
(86, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(87, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(88, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(89, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(90, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(91, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(92, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(93, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(94, NULL, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(95, NULL, 46, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(96, NULL, 46, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(97, 102, 101, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(98, 102, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(99, 102, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(100, 101, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(101, 102, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(102, 102, 102, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buyer_verify_docs`
--

CREATE TABLE IF NOT EXISTS `tbl_buyer_verify_docs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `doc_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_buyer_verify_docs`
--

INSERT INTO `tbl_buyer_verify_docs` (`id`, `busi_id`, `doc_url`) VALUES
(1, 84, 'images/user_images/154/verified/1507374116.0789India2.jpg'),
(2, 84, 'images/user_images/154/verified/1507374116.0789ISO 2000ok.jpg'),
(3, 84, 'images/user_images/154/verified/1507374116.079ISO-9001-CERTIFICATE.jpg'),
(4, 84, 'images/user_images/154/verified/1507374116.079ISO-9001-Certification.jpg'),
(5, 87, 'images/user_images/163/verified/1507650826.27354qbiynvcp4.jpg'),
(6, 87, 'images/user_images/163/verified/1507650826.2735Caro.jpg'),
(7, 87, 'images/user_images/163/verified/1507650826.2735comp1.jpg'),
(8, 87, 'images/user_images/163/verified/1507650826.2735login way.jpg'),
(9, 87, 'images/user_images/163/verified/1507650826.2736Profile Back.jpg'),
(10, 92, 'images/user_images/170/verified/1507828148.0935Certificate of Honor2004.jpg'),
(11, 92, 'images/user_images/170/verified/1507828148.0935India2.jpg'),
(12, 92, 'images/user_images/170/verified/1507828148.0935ISO 2000ok.jpg'),
(13, 92, 'images/user_images/170/verified/1507828148.0935ISO-9001-CERTIFICATEok.jpg'),
(14, 92, 'images/user_images/170/verified/1507828148.0936ISO-9001-Certificationok.jpg'),
(15, 98, 'images/user_images/178/verified/1508477417.7252India.jpg'),
(16, 101, 'images/user_images/187/verified/1509528738.4607India.jpg'),
(17, 101, 'images/user_images/187/verified/1509528738.4607iso_9001_certification.gif'),
(18, 101, 'images/user_images/187/verified/1509528738.4608ISO-9001-Certificationok.jpg'),
(19, 102, 'images/user_images/190/verified/1509882885.7645India.jpg'),
(20, 102, 'images/user_images/190/verified/1509882885.7645ISO 2000ok.jpg'),
(21, 102, 'images/user_images/190/verified/1509882885.7646iso_9001_certification.gif'),
(22, 102, 'images/user_images/190/verified/1509882885.7646ISO-9001-CERTIFICATE.jpg'),
(23, 102, 'images/user_images/190/verified/1509882885.7646ISO-9001-Certificationok.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate_info`
--

CREATE TABLE IF NOT EXISTS `tbl_certificate_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `license` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `renwal_date` date NOT NULL,
  `scope` text,
  `certificate` varchar(300) DEFAULT NULL,
  `certificate_name` varchar(300) DEFAULT NULL,
  `certificate_no` varchar(300) DEFAULT NULL,
  `cert_image1` varchar(255) DEFAULT NULL,
  `cert_image2` varchar(255) DEFAULT NULL,
  `cert_image3` varchar(255) DEFAULT NULL,
  `cert_image4` varchar(255) DEFAULT NULL,
  `morecert_image1` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `tbl_certificate_info`
--

INSERT INTO `tbl_certificate_info` (`id`, `busi_id`, `license`, `start_date`, `renwal_date`, `scope`, `certificate`, `certificate_name`, `certificate_no`, `cert_image1`, `cert_image2`, `cert_image3`, `cert_image4`, `morecert_image1`, `created_date`) VALUES
(34, 38, '88234KJHGF', '2017-04-03', '2017-10-12', 'Text', NULL, NULL, NULL, 'images/user_images/81/certificate/cartificate.jpeg', 'images/user_images/81/certificate/certificate1.png', NULL, NULL, NULL, '2017-07-03 20:20:14'),
(35, 39, 'PLKK8787878', '2017-05-01', '2017-07-07', 'PPP', NULL, NULL, NULL, 'images/user_images/82/certificate/certificate3.jpeg', 'images/user_images/82/certificate/certificate4.jpeg', NULL, NULL, NULL, '2017-07-03 22:44:07'),
(36, 40, 'OU7834534', '2017-05-01', '2017-07-21', 'Test', NULL, NULL, NULL, 'images/user_images/83/certificate/cartificate.jpeg', 'images/user_images/83/certificate/certificate1.png', NULL, NULL, NULL, '2017-07-04 08:45:59'),
(37, 41, 'PJH234234', '2017-05-01', '2017-09-15', 'Test', NULL, NULL, NULL, 'images/user_images/84/certificate/cartificate.jpeg', 'images/user_images/84/certificate/certificate1.png', NULL, NULL, NULL, '2017-07-04 10:01:18'),
(38, 44, '123', '2017-07-08', '2017-07-31', 'qwewe', NULL, NULL, NULL, 'images/user_images/87/certificate/Tulips.jpg', 'images/business_images/44/certificate/1499537313.14certificate2.jpg', 'images/business_images/44/certificate/1499537313.14certificate3.jpg', 'images/business_images/44/certificate/1499537313.14certificate4.jpg', NULL, '2017-07-08 23:36:42'),
(39, 45, '1235', '2017-07-12', '2017-07-31', 'fsd', NULL, NULL, NULL, 'images/user_images/93/certificate/Tulips.jpg', NULL, NULL, NULL, NULL, '2017-07-12 01:02:00'),
(40, 46, 'GST 985789', '2017-07-01', '2019-05-31', 'Penawaran Istimewa & Terbatas di Video Audio! CHANGHONG ', NULL, NULL, NULL, 'images/user_images/94/certificate/Geotrackers Restful API release 21-2-17.pdf', 'images/business_images/46/certificate/1508001530.1098certificate2.jpg', '', '', NULL, '2017-07-12 12:48:03'),
(41, 48, '123', '2017-03-01', '2017-04-07', 'sdg', NULL, NULL, NULL, 'images/user_images/96/certificate/Tulips.jpg', NULL, NULL, NULL, NULL, '2017-07-15 13:48:53'),
(42, 52, 'HL521000-001', '2016-01-04', '2017-01-05', 'Textile, Bedding, Home fabric, Trade and manufacturing', NULL, NULL, NULL, 'images/user_images/101/certificate/India-CPGI-ISO-9001-certificateok.jpg', 'images/user_images/101/certificate/ISO 2000ok.jpg', 'images/user_images/101/certificate/ISO-9001-CERTIFICATEok.jpg', '', NULL, '2017-08-16 20:19:42'),
(43, 53, 'kg12454', '2017-08-25', '2017-08-31', 'adadas', NULL, NULL, NULL, 'images/user_images/102/certificate/Shipper_logo.jpg', 'images/user_images/102/certificate/Shipper_logo0.jpg', 'images/user_images/102/certificate/shipper_logo0.png', NULL, NULL, '2017-08-19 19:13:10'),
(44, 54, 'hg52201-52', '2017-08-01', '2017-09-28', 'The scope of business.\r\nShipping and Services.', NULL, NULL, NULL, 'images/user_images/103/certificate/ISO 2000ok.jpg', 'images/user_images/103/certificate/ISO-9001-CERTIFICATEok.jpg', 'images/user_images/103/certificate/ISO-9001-Certificationok.jpg', NULL, NULL, '2017-08-20 18:13:20'),
(45, 56, 'R531265-55', '2017-09-01', '2018-08-02', 'Shipping\r\nCargo Following Up\r\nInspections', NULL, NULL, NULL, 'images/user_images/105/certificate/ISO-740.jpg', 'images/user_images/105/certificate/WCA2017.jpg', 'images/user_images/105/certificate/India2.jpg', 'images/user_images/105/certificate/ISO-9001-Certification.jpg', NULL, '2017-09-02 21:24:29'),
(46, 57, 'JHG  JUHDID', '2017-09-01', '2017-09-30', 'Host your own checkout pages or use PayPal-hosted checkout pages for accepting credit and other payment card transactions on your website, in addition to PayPal payments.', NULL, NULL, NULL, 'images/user_images/107/certificate/img3509.png', 'images/user_images/107/certificate/img3508.png', 'images/user_images/107/certificate/img3508.png', 'images/user_images/107/certificate/mem-delete.png', NULL, '2017-09-03 17:56:46'),
(47, 60, 'asdf', '2017-09-05', '2017-09-14', 'test', NULL, NULL, NULL, 'images/user_images/110/certificate/cartificate.jpeg', 'images/user_images/110/certificate/certificate1.png', 'images/user_images/110/certificate/certificate3.jpeg', 'images/user_images/110/certificate/certificate4.jpeg', NULL, '2017-09-03 18:46:17'),
(48, 61, 'R531265-55', '2017-09-01', '2018-07-26', 'This is the scope of business:\r\nManufacturing, Selling, Export and Import.', NULL, NULL, NULL, 'images/user_images/111/certificate/ISO-740.jpg', 'images/user_images/111/certificate/India-CPGI-ISO-9001-certificateok.jpg', 'images/user_images/111/certificate/ISO-9001-Certificationok.jpg', NULL, NULL, '2017-09-05 21:11:45'),
(49, 67, '45242ghjkh', '1971-02-15', '2017-09-20', 'Your will be requested to renew your business certificate documents ( dates, inforamtions and images) after expiry date..', NULL, NULL, NULL, 'images/user_images/118/certificate/India2.jpg', 'images/user_images/118/certificate/ISO-9001-CERTIFICATEok.jpg', 'images/user_images/118/certificate/ISO-9001-Certification.jpg', 'images/user_images/118/certificate/ISO 2000ok.jpg', NULL, '2017-09-15 08:43:28'),
(50, 68, 'JHG  JUHDID', '2017-09-01', '2017-09-30', 'While our eco-friendly vessels primarily operate in Asia Pacific & Atlantic regions, we also engage in cross trade between Atlantic & Pacific. Our ability to trade worldwide in a multitude of trade routes, carrying a wide range of cargoes for a varied set of customers, gives us a competitive edge.\r\n\r\nWe offer long term voyage and time charters to our customers through our customized freight structures, which helps them to gain control on their costs and manage the supply chain effectively. We have successfully delivered solutions to big blue chip companies like Tata Steel, Tata Power, SAIL, JSW ISPAT.\r\n\r\nWe have attained ISO 9001:2008 and ISO 14001:2004 certifications which re-enforces our long term goal of having strong processes with high quality and environmental standards.\r\n\r\nTATA NYK is headquartered in Singapore to take advantage of its strategic location as a global shipping hub. The company has a wholly owned subsidiary in India (Tata NYK Shipping Pte. Ltd.) and has offices in Kolkata and Mumbai.', NULL, NULL, NULL, 'images/user_images/121/certificate/samsungledtv.jpg', 'images/user_images/121/certificate/honda-activa.jpg', 'images/user_images/121/certificate/motoe4plus.jpeg', 'images/user_images/121/certificate/ram1.jpg', NULL, '2017-09-19 21:38:41'),
(51, 72, 'f512fd', '2017-09-07', '2018-05-10', 'This Part must follow the typing way:\r\nLike this.... i take a line space.\r\nand this\r\nand this\r\nand so on.\r\n\r\n', NULL, NULL, NULL, 'images/user_images/136/certificate/India2.jpg', 'images/user_images/136/certificate/India-CPGI-ISO-9001-certificateok.jpg', 'images/user_images/136/certificate/ISO-9001-Certificationok.jpg', NULL, NULL, '2017-09-26 13:44:33'),
(52, 75, 'sgf', '2017-09-07', '2017-09-22', 'dfg', NULL, NULL, NULL, 'images/user_images/141/certificate/cartificate.jpeg', 'images/business_images/75/certificate/1506450928.66certificate2.jpeg', 'images/business_images/75/certificate/1506450928.66certificate3.jpeg', '', NULL, '2017-09-26 21:21:08'),
(53, 85, '5550124x', '2000-10-04', '2018-10-04', 'Logistics, shipping, port agency and argo', NULL, NULL, NULL, 'images/user_images/158/certificate/1507472412.9021India2.jpg', 'images/user_images/158/certificate/1507472412.9022ISO 2000.jpg', 'images/user_images/158/certificate/1507472412.9022ISO-9001-CERTIFICATE.jpg', '', NULL, '2017-10-08 19:50:12'),
(54, 86, '201525', '2017-10-12', '2020-10-12', 'Any scope here', NULL, NULL, NULL, 'images/user_images/161/certificate/1507554492.0046India2.jpg', 'images/user_images/161/certificate/1507554492.0046ISO 2000.jpg', 'images/user_images/161/certificate/1507554492.0046ISO-9001-CERTIFICATE.jpg', NULL, NULL, '2017-10-09 18:38:12'),
(55, 90, 'yes55616515', '2017-01-01', '2018-01-01', 'sfsfs sfsdf sfs sfsf sfsf sff sdfhtfy ui', NULL, NULL, NULL, 'images/user_images/167/certificate/1507756491.3076India2.jpg', 'images/user_images/167/certificate/1507756491.3077ISO 2000ok.jpg', 'images/user_images/167/certificate/1507756491.3077ISO-9001-CERTIFICATEok.jpg', '', NULL, '2017-10-12 02:44:51'),
(56, 93, '125-55-256345564-00', '2017-10-12', '2018-10-12', 'Manufacturing, Products Supping, Brand Agent ', NULL, NULL, NULL, 'images/user_images/173/certificate/1507853193.893India2.jpg', 'images/user_images/173/certificate/1507853193.893ISO 2000.jpg', 'images/user_images/173/certificate/1507853193.893ISO-9001-CERTIFICATE.jpg', NULL, NULL, '2017-10-13 05:36:33'),
(57, 94, 'hi12350', '2017-01-10', '2018-01-10', 'sas fsafs sf sadf ', NULL, NULL, NULL, 'images/user_images/174/certificate/1507896458.7748India2.jpg', 'images/user_images/174/certificate/1507896458.7748ISO-9001-CERTIFICATE.jpg', 'images/user_images/174/certificate/1507896458.7748ISO-9001-Certification.jpg', 'images/user_images/174/certificate/1507896458.7748ISO 2000ok.jpg', NULL, '2017-10-13 17:37:38'),
(58, 97, 'JS1236547258', '2017-10-12', '2018-10-12', 'Manufacture, Supplier, Exporter, Trading and brand agency', NULL, NULL, NULL, 'images/user_images/177/certificate/1507993617.4886India2.jpg', 'images/user_images/177/certificate/1507993617.4886ISO 2000ok.jpg', 'images/user_images/177/certificate/1507993617.4886ISO-9001-CERTIFICATE.jpg', 'images/user_images/177/certificate/1507993617.4886ISO-9001-Certification.jpg', NULL, '2017-10-14 20:36:57'),
(59, 99, 'HD120-3664', '2001-10-14', '2017-10-14', 'Your will be requested to renew your business certificate documents ( dates, information and images) after expiry date..', NULL, NULL, NULL, 'images/user_images/183/certificate/1508486540.7534India2.jpg', 'images/business_images/99/certificate/1508488023.5945certificate2.jpg', 'images/business_images/99/certificate/1508488153.8614certificate3.jpg', 'images/business_images/99/certificate/1508488178.4417certificate4.jpg', NULL, '2017-10-20 13:32:20'),
(60, 100, 'dd12364', '2017-10-07', '2018-10-07', 'Trade, Manufacturing, Shipping', NULL, NULL, NULL, 'images/user_images/185/certificate/1508566980.6555ISO-9001-CERTIFICATE.jpg', 'images/business_images/100/certificate/1508567429.4003certificate2.jpg', '', '', NULL, '2017-10-21 11:53:00'),
(61, 102, 'HL12350-23698/23', '2017-11-09', '2018-11-09', 'Manufactring, Buying, import, export, trade', NULL, NULL, NULL, 'images/user_images/190/certificate/1509613579.3552India2.jpg', 'images/user_images/190/certificate/1509613579.3552ISO 2000ok.jpg', 'images/user_images/190/certificate/1509613579.3552ISO-9001-CERTIFICATE.jpg', NULL, NULL, '2017-11-02 14:36:19'),
(62, 104, '1234343', '2006-01-10', '2018-01-26', 'safsadfsad', NULL, NULL, NULL, 'images/user_images/203/certificate/1515528572.4348test.png', 'images/user_images/203/certificate/1515528572.4349test.png', NULL, NULL, NULL, '2018-01-10 01:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_certificate_type`
--

CREATE TABLE IF NOT EXISTS `tbl_certificate_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_type` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_certificate_type`
--

INSERT INTO `tbl_certificate_type` (`id`, `certificate_type`) VALUES
(1, 'Management System Certifications'),
(2, 'Product Certifications / Test Report'),
(3, 'License'),
(4, 'Intellectual Property Rights/Copy Right'),
(5, 'Honor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chat_messages`
--

CREATE TABLE IF NOT EXISTS `tbl_chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext NOT NULL,
  `from_busi_id` int(11) NOT NULL,
  `to_busi_id` int(11) NOT NULL,
  `file_url` varchar(255) DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT '0',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_member`
--

CREATE TABLE IF NOT EXISTS `tbl_community_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_busi_id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_community_member`
--

INSERT INTO `tbl_community_member` (`id`, `my_busi_id`, `busi_id`, `status`, `created_date`, `is_deleted`) VALUES
(1, 84, 46, 0, '2017-10-01 14:10:00', 0),
(3, 102, 51, 0, '2017-12-01 17:16:00', 0),
(4, 102, 101, 1, '2017-12-05 16:29:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_post`
--

CREATE TABLE IF NOT EXISTS `tbl_community_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `product_item_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `usd_price` varchar(255) NOT NULL,
  `quantity` varchar(35) DEFAULT NULL,
  `postviews` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `comment` int(11) NOT NULL,
  `share_id` int(11) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_community_post`
--

INSERT INTO `tbl_community_post` (`id`, `busi_id`, `product_item_id`, `title`, `image1`, `image2`, `image3`, `image4`, `description`, `usd_price`, `quantity`, `postviews`, `likes`, `comment`, `share_id`, `created_date`, `status`) VALUES
(1, 102, 17, 'This the first post as a test.', 'images/user_images/190/product/1509798700.4865L4.jpg', 'images/user_images/190/product/1509798700.4865L2.jpg', 'images/user_images/190/product/1509798700.4865L5.jpg', 'images/user_images/190/product/1509798700.4865L1.jpg', 'This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.This the first post as a test.', '1000', '1', 23, 1, 9, 102, '2017-12-23 16:25:27', 1),
(2, 102, 16, 'sdaf', 'images/user_images/190/product/1509798532.3014.jpg', '', '', '', 'safd', '1000', '0', 5, 1, 6, 0, '2017-12-24 20:14:34', 1),
(3, 102, 14, 'sdasdad adad adad dd adad sfsf', '', '', '', '', 'ICP FAQ\r\nJameson S. \r\nJune 19, 2017 06:18\r\nFollow\r\nTable of contents:\r\n________________________________________\r\n•What is an ICP number and why do I need one to operate a website inside of China?\r\n•Which type of ICP number do I need?\r\n•How do I apply for an ICP?\r\n•Required Documents\r\n•What do I need to do after receiving an ICP number?\r\nWhat is an ICP number and why do I need one to operate a website inside of China?\r\nAn ICP (Internet Content Provider) number is a state-issued registration number that allows you to host your website on, or serve content from, a mainland Chinese server. All public websites in mainland China must have an ICP number. The ICP number must appear on your website home page. If you do not have an ICP number, your website may be shut down by the hosting provider with no notice.\r\nAn ICP Number can be used for multiple websites owned by the same company. You can use the MIIT website to check whether a domain already has an ICP Nsd yhfh dfhfh dfhfh fdh dfh fhfh fhfh dfhf  ggd', '', '0', 4, 1, 0, 0, '2017-12-24 20:19:45', 1),
(4, 101, 0, 'This a many dimensions post', 'images/community_images/1515069614.6793bstation.jpg', 'images/community_images/1515069614.68bstation1.jpg', 'images/community_images/1515069614.68bstation2.jpg', 'images/community_images/1515069614.6801bstation3.jpg', 'All posts will be expired within 1 month , as long as you can resend it whenever you like. \r\n* Once your post achieve your target, you can mark it and click delete ( Click My Posts / Mark the \r\n  required post / Click Delete).. \r\n* Don''t repeat, duplicate or send the same post twice, so as you not affect the storage of your \r\n  (Community) Box.All posts will be expired within 1 month , as long as you can resend it whenever you like. \r\n* Once your post achieve your target, you can mark it and click delete ( Click My Posts / Mark the \r\n  required post / Click Delete).. \r\n* Don''t repeat, duplicate or send the same post twice, so as you not affect the storage of your \r\n  (Community) Box.All posts will be expired within 1 month , as long as you can resend it whenever you like. \r\n* Once your post achieve', '100', '1 container', 19, 0, 0, 102, '2018-01-04 18:10:14', 1),
(5, 101, 0, 'dfsd sdf sfasf ', 'images/community_images/1515073328.1446bstation.jpg', '', '', '', 'sdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsfsdf dsfd sdfsf sdfsf', '2', '1 container', 0, 0, 0, 0, '2018-01-04 19:12:08', 1),
(6, 101, 0, 'this from other computer', 'images/community_images/1515769290.1728bstation.jpg', '', '', '', 'this from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computer', '1000', '2container', 0, 0, 0, 0, '2018-01-12 20:31:30', 1),
(7, 101, 0, 'this from other computer', 'images/community_images/1515769347.4102bstation.jpg', '', '', '', 'this from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computerthis from other computer', '1000', '2 container', 0, 0, 0, 0, '2018-01-12 20:32:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_post_comment`
--

CREATE TABLE IF NOT EXISTS `tbl_community_post_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `commented_by` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `liked_by` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_community_post_comment`
--

INSERT INTO `tbl_community_post_comment` (`id`, `post_id`, `user_id`, `commented_by`, `image`, `comment`, `status`, `liked_by`, `created_datetime`) VALUES
(1, 1, 102, 102, '', 'nice', 1, 0, '2018-01-04 04:42:35'),
(2, 1, 102, 102, '', 'df gdg fgdg', 1, 0, '2018-01-04 04:42:45'),
(3, 1, 102, 102, '', 'gfd gdfgf gd gdf \njghjj', 1, 0, '2018-01-04 04:42:56'),
(4, 1, 102, 102, '', 'The image displayed in the likes or in comments should be the contact person image same as in post layer. ', 1, 0, '2018-01-04 05:02:39'),
(5, 1, 102, 102, '', 'frrf ', 1, 0, '2018-01-04 05:11:06'),
(6, 1, 102, 102, '', 'jhjhd', 1, 0, '2018-01-04 05:14:52'),
(7, 1, 102, 102, '', 'gfgfg', 1, 0, '2018-01-04 05:14:56'),
(8, 1, 102, 102, '', 'gfgffgg', 1, 0, '2018-01-04 05:14:59'),
(9, 1, 102, 102, '', 'fgfgf ', 1, 0, '2018-01-04 05:15:07'),
(10, 2, 102, 102, '', 'adsad', 1, 0, '2018-01-12 07:39:10'),
(11, 2, 102, 102, '', 'ddd  dasd dad ', 1, 0, '2018-01-12 07:39:17'),
(12, 2, 102, 102, '', 'reee', 1, 0, '2018-01-12 07:39:25'),
(13, 2, 102, 102, '', 'df dfff f', 1, 0, '2018-01-12 07:39:32'),
(14, 2, 102, 102, '', 'this is  Way rhich him rich to you by upwards jhjhf jkdashfjkh jkdhh ajkkdfh jhajksh slfthind dhid huoiie ', 1, 0, '2018-01-12 07:40:15'),
(15, 2, 102, 102, '', 'this is Way rhich him rich to you by upwards jhjhf jkdashfjkh jkdhh ajkkdfh jhajksh slfthind dhid huoiiethis is Way rhich him rich to you by upwards jhjhf jkdashfjkh jkdhh ajkkdfh jhajksh slfthind dhid huoiiethis is Way rhich him rich to you by upwar', 1, 0, '2018-01-12 07:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_post_like`
--

CREATE TABLE IF NOT EXISTS `tbl_community_post_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `liked_by` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_community_post_like`
--

INSERT INTO `tbl_community_post_like` (`id`, `post_id`, `status`, `liked_by`, `created_datetime`) VALUES
(1, 3, 1, 102, '2018-01-04 04:59:46'),
(2, 1, 1, 102, '2018-01-04 05:01:06'),
(3, 2, 1, 102, '2018-01-04 05:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_post_offers`
--

CREATE TABLE IF NOT EXISTS `tbl_community_post_offers` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `message` text,
  `details` text,
  `price` double DEFAULT '0',
  `unit_type` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `contact_person` varchar(128) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `additional_email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_community_post_requests`
--

CREATE TABLE IF NOT EXISTS `tbl_community_post_requests` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `message` text,
  `details` text,
  `attachment` varchar(255) DEFAULT NULL,
  `contact_person` varchar(128) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `additional_email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_info`
--

CREATE TABLE IF NOT EXISTS `tbl_company_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `year_of_registration` int(11) NOT NULL DEFAULT '0',
  `company_owner_name` varchar(255) DEFAULT NULL,
  `company_size` int(11) NOT NULL DEFAULT '0',
  `total_no_of_emp` int(11) NOT NULL DEFAULT '0',
  `company_introduction` longtext CHARACTER SET latin1 NOT NULL,
  `hot_presentation` longtext,
  `company_image1` varchar(255) DEFAULT NULL,
  `company_image2` varchar(255) DEFAULT NULL,
  `company_image3` varchar(255) DEFAULT NULL,
  `company_image4` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_person_flag` tinyint(4) NOT NULL COMMENT '1=own,2=new contact person',
  `company_bank_account` varchar(255) DEFAULT NULL,
  `account_no` varchar(300) DEFAULT NULL,
  `account_name` varchar(300) DEFAULT NULL,
  `bank_name` varchar(300) DEFAULT NULL,
  `bank_code` varchar(300) DEFAULT NULL,
  `bank_address` mediumtext,
  `swift_code` varchar(300) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `tbl_company_info`
--

INSERT INTO `tbl_company_info` (`id`, `busi_id`, `year_of_registration`, `company_owner_name`, `company_size`, `total_no_of_emp`, `company_introduction`, `hot_presentation`, `company_image1`, `company_image2`, `company_image3`, `company_image4`, `contact_person`, `contact_person_flag`, `company_bank_account`, `account_no`, `account_name`, `bank_name`, `bank_code`, `bank_address`, `swift_code`, `created_date`) VALUES
(1, 1, 7, 'Dhaval Vithalani', 100, 100, 'testsdaf', 'testasdf', NULL, NULL, NULL, NULL, 'Akash Vithalani', 0, 'test', '', '', '', '', '', '', '2017-04-16 09:17:38'),
(2, 2, 1765, 'asdf', 500, 4, 'sdfasf', 'sfd', NULL, NULL, NULL, NULL, 'asasd', 0, 'asfasdf', '', '', '', '', '', '', '2017-04-17 16:18:27'),
(3, 3, 1990, 'Pradeep Singh', 100, 30, 'asadasd', 'asdasd', 'images/user_images/24/business/Array', 'images/user_images/24/business/Array', NULL, NULL, 'Pradeep Singh', 0, 'test', '', '', '', '', '', '', '2017-04-20 22:12:30'),
(4, 4, 1990, 'Pradeep Singh', 500, 30, 'bhha daj dasdjkakp jkap jaskkjkd ka', ' mnjhjajd h jsdjkasdjkajskdja  jasdj ad  jdkakdjkasdk', 'images/user_images/25/business/Array', 'images/user_images/25/business/Array', NULL, NULL, 'Pradeep Singh', 0, 'mn ajdhasd a  a diiasjdjkasjdk', '', '', '', '', '', '', '2017-04-21 00:21:14'),
(5, 5, 1990, 'Pradeep Singh', 500, 30, 'bhha daj dasdjkakp jkap jaskkjkd ka', ' mnjhjajd h jsdjkasdjkajskdja  jasdj ad  jdkakdjkasdk', 'images/user_images/25/business/Array', 'images/user_images/25/business/Array', NULL, NULL, 'Pradeep Singh', 0, 'mn ajdhasd a  a diiasjdjkasjdk', '', '', '', '', '', '', '2017-04-21 00:22:36'),
(6, 6, 34534, 'karan', 500, 12, 'jjkasdkjfjksdjf', 'kkgjkhjkfg', NULL, NULL, NULL, NULL, 'karan', 0, 'klrjkwelkjt', '', '', '', '', '', '', '2017-04-21 12:18:44'),
(7, 7, 334, 'serer', 500, 345, 'sfdgs', 'dfg', NULL, NULL, NULL, NULL, 'serer', 0, 'sdfg', '', '', '', '', '', '', '2017-05-03 21:57:57'),
(8, 8, 1, '23', 500, 3, 'sd', 'cd', NULL, NULL, NULL, NULL, '23', 0, 'v', '', '', '', '', '', '', '2017-05-04 00:42:33'),
(9, 9, 2, 'p', 100, 2, '''', 'o', NULL, NULL, NULL, NULL, 'p', 0, 'o', '', '', '', '', '', '', '2017-05-04 23:57:35'),
(10, 10, 2443, 'dsf', 100, 234, 'fds', 'sdfdsfg', NULL, NULL, NULL, NULL, 'dsf', 0, 'ffsdfg', '', '', '', '', '', '', '2017-05-06 09:55:45'),
(11, 11, 99, '00', 100, 9, 'H', 'I', NULL, NULL, NULL, NULL, '00', 0, '9', '', '', '', '', '', '', '2017-05-06 14:37:48'),
(12, 12, 234, 'asdf', 500, 234, 'asdfasfasdf', 'asfasfasd', NULL, NULL, NULL, NULL, 'asdf', 0, 'safaasfda', '', '', '', '', '', '', '2017-05-11 11:30:07'),
(13, 13, 9, '0', 100, 0, '9999999999', '9999999999', NULL, NULL, NULL, NULL, '0', 0, 'k', '', '', '', '', '', '', '2017-05-12 00:32:01'),
(14, 14, 1996, 'Tang Yang', 500, 20, 'Mobile phone No. has a problem from the above screen I can not press save and continue till I remove the last digit (9), then the words (PLEASE ENTER POSITION) disappeared and can continue..!!\r\n\r\nMobile phone No. has a problem from the above screen I can not press save and continue till I remove the last digit (9), then the words (PLEASE ENTER POSITION) disappeared and can continue..!!', 'Mobile phone No. has a problem from the above screen I can not press save and continue till I remove the last digit (9), then the words (PLEASE ENTER POSITION) disappeared and can continue..!!', NULL, NULL, NULL, NULL, 'Tang Yang', 0, 'Mobile phone No. has a problem from the above screen I can not press save and continue till I remove the last digit (9), then the words (PLEASE ENTER POSITION) disappeared and can continue..!!', '', '', '', '', '', '', '2017-05-13 21:33:36'),
(15, 17, 2, '3', 100, 32, 'kjikdeds', 'sdlkkjkj', NULL, NULL, NULL, NULL, '3', 0, 'sxz', '', '', '', '', '', '', '2017-05-17 23:58:41'),
(16, 18, 1990, 'Pradeep Singh', 500, 30, 'Saanvad Ventures Pvt Ltd is founded with an aim is to provide innovative, customer centric, cost-effective and sustainable solutions to stakeholders.  We strive to enrich the experience of not only our customers but also other stakeholders. This is the only way through which we believe we can establish long-term relationships with our customers.  \r\n\r\n', 'Saanvad Ventures Pvt Ltd is founded with an aim is to provide innovative, customer centric, cost-effective and sustainable solutions to stakeholders.  We strive to enrich the experience of not only our customers but also other stakeholders. This is the only way through which we believe we can establish long-term relationships with our customers.  \r\n\r\n', NULL, NULL, NULL, NULL, 'Pradeep Singh', 1, 'test', '', '', '', '', '', '', '2017-05-18 15:25:01'),
(17, 20, 900, '000', 100, 98, 'kjk', 'kjkj', NULL, NULL, NULL, NULL, '000', 0, 'ioipo', '', '', '', '', '', '', '2017-05-19 00:35:12'),
(18, 23, 234, 'karan', 500, 12, 'adkakjd asdfasfd', 'akdkasdjkladjs', NULL, NULL, NULL, NULL, 'we', 2, 'sdkaskdfj', '', '', '', '', '', '', '2017-05-21 22:57:26'),
(19, 25, 0, '', 0, 0, '', 'sjlahjkh;hsd', NULL, NULL, NULL, NULL, 'ex3', 1, '', '', '', '', '', '', '', '2017-05-22 07:32:50'),
(21, 26, 0, '', 0, 0, 'akfhjkahfjafd', 'asafjlsd', NULL, NULL, NULL, NULL, 'ex4', 1, NULL, '', '', '', '', '', '', '2017-05-22 07:46:01'),
(22, 27, 234, 'karan', 100, 12, 'klslkfkasdflsaldjf', 'dsfasfdlasdfk', NULL, NULL, NULL, NULL, 'we', 2, 'lksdklasdfkl', '', '', '', '', '', '', '2017-05-22 09:54:44'),
(23, 22, 1991, 'Hazem Zaki', 100, 20, 'this a test and should be in clear this a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clear', 'this a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clearthis a test and should be in clear', NULL, NULL, NULL, NULL, 'Hazem Zaki', 2, 'HSBC', '', '', '', '', '', '', '2017-05-24 01:48:36'),
(24, 28, 0, '', 0, 0, 'Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, ', 'Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, Do it any it will be cool, ', NULL, NULL, NULL, NULL, 'Tota lee', 1, NULL, '', '', '', '', '', '', '2017-05-25 00:28:36'),
(25, 29, 0, '', 0, 0, '', 'sgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsgsgsfdg dfgdsg', NULL, NULL, NULL, NULL, 'Hazem Zaki', 2, NULL, '', '', '', '', '', '', '2017-05-25 21:47:20'),
(26, 31, 234, 'karan', 500, 12, 'asdasdfasfd', 'asdfasdfasd', NULL, NULL, NULL, NULL, 'qqq pp', 1, 'asdfasdfsadfsdf', '', '', '', '', '', '', '2017-05-26 14:37:08'),
(32, 38, 1989, 'Mahesh', 500, 33, 'It is good Company', 'It is good Company', NULL, NULL, NULL, NULL, 'Abhay', 2, '89477932730823433423', '', '', '', '', '', '', '2017-07-03 20:16:51'),
(33, 39, 1979, 'Kalpesh', 1000, 78, 'This is Number one Company', 'Test', NULL, NULL, NULL, NULL, 'Pooja', 1, 'Test', '', '', '', '', '', '', '2017-07-03 22:42:23'),
(34, 40, 0, '', 0, 0, '', 'It is world wide comapny', NULL, NULL, NULL, NULL, 'kunal', 2, NULL, '', '', '', '', '', '', '2017-07-04 08:44:44'),
(35, 41, 0, '', 0, 0, '', 'Average Company', NULL, NULL, NULL, NULL, 'Tara', 1, NULL, '', '', '', '', '', '', '2017-07-04 10:00:04'),
(36, 42, 0, '', 0, 0, 'test', 'test', NULL, NULL, NULL, NULL, 'Kartik', 1, NULL, '', '', '', '', '', '', '2017-07-04 10:07:35'),
(37, 43, 0, '', 0, 0, 'test', 'test', NULL, NULL, NULL, NULL, 'Nayara', 1, NULL, '', '', '', '', '', '', '2017-07-04 10:13:49'),
(38, 44, 1233, '000', 2000, 1345, 'sdfg', 'fdg', NULL, NULL, NULL, NULL, 'test', 2, 'scdf', '', '', '', '', '', '', '2017-07-08 23:33:59'),
(39, 45, 0, '', 0, 0, '', 'test', NULL, NULL, NULL, NULL, 'tester', 1, NULL, '', '', '', '', '', '', '2017-07-12 01:01:30'),
(40, 46, 1983, 'Pradeep Singh', 1000, 300, 'UFO Electronics is a retail electronics store with a wide branch network spread across strategic corners in Indonesia. By leveraging wide distribution and network marketing coverage, UFO Electronics is able to deliver services that benefit customers, from very competitive prices to free shipping! UFO Electronics sells various electronic goods from LED TV, LCD, Plasma, Computer, Laptop, Office Supplies, Mobile Phone (Mobile), Aneka Gadgets, Speaker, Home Theater, Digital Camera, Kitchenware Equipment, Household Furniture. UFO Electronics and find the product you want with the best price and very competitive!', 'UFO Electronics is a retail electronics store with a wide branch network spread across strategic corners in Indonesia. By leveraging wide distribution and network marketing coverage, UFO Electronics is able to deliver services that benefit customers, from very competitive prices to free shipping! UFO Electronics sells various electronic goods from LED TV, LCD, Plasma, Computer, Laptop.', NULL, NULL, NULL, NULL, 'Pradeep Singh', 1, 'CATEGORY OF SHOPPING\r\nSNEAKER DEAL\r\nUNIHOME\r\nAUDIO VIDEO\r\nHOUSEHOLD\r\nAIR CONDITIONER\r\nKITCHEN', '', '', '', '', '', '', '2017-07-12 12:14:15'),
(41, 47, 0, '', 0, 0, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', NULL, NULL, NULL, NULL, 'shany', 2, NULL, '', '', '', '', '', '', '2017-07-13 18:59:15'),
(42, 48, 1233, 'sfr', 100, 98, 'fgdfg', 'dfdfdfd', NULL, NULL, NULL, NULL, 'AbD', 2, 'bank', '', '', '', '', '', '', '2017-07-15 13:45:32'),
(43, 50, 0, '', 0, 0, 'fdfdf', 'dfsdf', NULL, NULL, NULL, NULL, 'ABC', 2, NULL, '', '', '', '', '', '', '2017-07-15 15:10:56'),
(44, 51, 0, '', 0, 0, 'Beyondsoft (Shenzhen Stock Exchange listed, 002649) is a global IT Consulting, Solutions and Services provider.  Founded in 1995 and headquartered in Beijing, China, Beyondsoft has over 30 nationwide offices, R&D bases and delivery centers, as well as facilities in United States, Japan, India, Canada and Singapore.  Relying on its strong R&D heritage and ability to innovate, Beyondsoft is now focusing on using emerging, disruptive technologies, like cloud, mobility, big data and analytics, to provide powerful solutions and products for clients in a wide range of industries including: high-tech, eCommerce, finance, automobile, retail, logistics, energy, manufacturing, healthcare, telecommunications, media & entertainment, and travel.\r\n\r\nBeyondsoft follows rigid security measures that are in strict compliance with multi-national quality & safety standards. Beyondsoft’s management and development processes are also CMMI 3, ISO 20000, ISO9001, ISO 27001 certified. Beyondsoft’s comprehensive worldwide delivery and service network is built on years of deep industry experience and business process excellence.  It’s supported by an international team of experts with the practical abilities, dedication and innovative spirit to help global clients to achieve and maintain the levels of operational excellence and profitability, and continuously create value for their stakeholders, Beyondsoft (Shenzhen Stock Exchange listed, 002649) is a global IT Consulting, Solutions and Services provider.  Founded in 1995 and headquartered in Beijing, China, Beyondsoft has over 30 nationwide offices, R&D bases and delivery centers, as well as facilities in United States, Japan, India, Canada and Singapore.  Relying on its strong R&D heritage and ability to innovate, Beyondsoft is now focusing on using emerging, disruptive technologies, like cloud, mobility, big data and analytics, to provide powerful solutions and products for clients in a wide range of industries including: high-tech, eCommerce, finance, automobile, retail, logistics, energy, manufacturing, healthcare, telecommunications, media & entertainment, and travel.\r\n\r\nBeyondsoft follows rigid security measures that are in strict compliance with multi-national quality & safety standards. Beyondsoft’s management and development processes are also CMMI 3, ISO 20000, ISO9001, ISO 27001 certified. Beyondsoft’s comprehensive worldwide delivery and service network is built on years of deep industry experience and business process excellence.  It’s supported by an international team of experts with the practical abilities, dedication and innovative spirit to help global clients to achieve and maintain the levels of operational excellence and profitability, and continuously create value for their stakeholders., Beyondsoft (Shenzhen Stock Exchange listed, 002649) is a global IT Consulting, Solutions and Services provider.  Founded in 1995 and headquartered in Beijing, China, Beyondsoft has over 30 nationwide offices, R&D bases and delivery centers, as well as facilities in United States, Japan, India, Canada and Singapore.  Relying on its strong R&D heritage and ability to innovate, Beyondsoft is now focusing on using emerging, disruptive technologies, like cloud, mobility, big data and analytics, to provide powerful solutions and products for clients in a wide range of industries including: high-tech, eCommerce, finance, automobile, retail, logistics, energy, manufacturing, healthcare, telecommunications, media & entertainment, and travel.\r\n\r\nBeyondsoft follows rigid security measures that are in strict compliance with multi-national quality & safety standards. Beyondsoft’s management and development processes are also CMMI 3, ISO 20000, ISO9001, ISO 27001 certified. Beyondsoft’s comprehensive worldwide delivery and service network is built on years of deep industry experience and business process excellence.  It’s supported by an international team of experts with the practical abilities, dedication.', 'Beyondsoft (Shenzhen Stock Exchange listed, 002649) is a global IT Consulting, Solutions and Services provider.  Founded in 1995 and headquartered in Beijing, China, Beyondsoft has over 30 nationwide offices, R&D bases and delivery centers, as well as facilities in United States, Japan, India, Canada and Singapore.  Relying on its strong R&D heritage and ability to innovate, Beyondsoft is now.', NULL, NULL, NULL, NULL, 'Contact Person', 2, NULL, '', '', '', '', '', '', '2017-08-15 16:39:36'),
(45, 52, 1999, 'Bader Mutlaq', 500, 20, 'Products developed from A&D''s unique skills in analog-to-digital and digital-to-analog conversion technology have helped to produce state-of-the-art equipment, including electronic balances, scales, weighing indicators and blood pressure monitors. Our range allows users to measure accurately in innovative ways that fit their individual needs, while at the same time providing cost-effective, reliable and user-friendly products.\r\nA&D has built its reputation on a commitment to providing quality products and services while rapidly responding to international needs for innovative and accurate measurement tools. A primary strategy is superior customer satisfaction. A&D constantly analyzes market needs around the world to develop a full range of products for business, industry, education and healthcare us, Products developed from A&D''s unique skills in analog-to-digital and digital-to-analog conversion technology have helped to produce state-of-the-art equipment, including electronic balances, scales, weighing indicators and blood pressure monitors. Our range allows users to measure accurately in innovative ways that fit their individual needs, while at the same time providing cost-effective, reliable and user-friendly products.\r\nA&D has built its reputation on a commitment to providing quality products and services while rapidly responding to international needs for innovative and accurate measurement tools. A primary strategy is superior customer satisfaction. A&D constantly analyzes market needs around the world to develop a full range of products for business, industry, education and healthcare us, Products developed from A&D''s unique skills in analog-to-digital and digital-to-analog conversion technology have helped to produce state-of-the-art equipment, including electronic balances, scales, weighing indicators and blood pressure monitors. Our range allows users to measure accurately in innovative ways that fit their individual needs, while at the same time providing cost-effective, reliable and user-friendly products.\r\nA&D has built its reputation on a commitment to providing quality products and services while rapidly responding to international needs for innovative and accurate measurement tools. A primary strategy is superior customer satisfaction. A&D constantly analyzes market needs around the world to develop a full range of products for business, industry, education and healthcare us, Products developed from A&D''s unique skills in analog-to-digital and digital-to-analog conversion technology have helped to produce state-of-the-art equipment, including electronic balances, scales, weighing indicators and blood pressure monitors. Our range allows users to measure accurately in innovative ways that fit their individual needs, while at the same time providing cost-effective, reliable and user-friendly products.\r\nA&D has built its reputation on a commitment to providing quality products and services while rapidly responding to international needs for innovative and accurate measurement tools. A primary strategy is superior customer satisfaction. A&D constantly analyzes market needs around the world to develop a full range of products for business, industry, education and healthcare us, Products developed from A&D''s unique skills in analog-to-digital and digital-to-analog conversion technology have helped to produce state-of-the-art equipment, including electronic balances, scales, weighing indicators and blood pressure monitors. Our range allows users to measure accurately in innovative ways that fit their individual needs, while at the same time providing cost-effective, reliable and user-friendly products.\r\nA&D has built its reputation on a commitment to providing quality products and services while rapidly responding to international needs for innovative and accurate measurement tools. A primary strategy is superior customer satisfaction. A&D constantly analyzes market needs around the world to develop a full range of product', 'This is products developed from A&D''s unique skills in analog-to-digital and digital-to-analog conversion technology have helped to produce state-of-the-art equipment, including electronic balances, scales, weighing indicators and blood pressure monitors. Our range allows users to measure accurately in innovative ways that fit their individual needs, while at the same time providing cost-effective', NULL, NULL, NULL, NULL, 'Omar Hazem', 2, 'Here the bank account\r\n5555 2222 3333 4444\r\nswift code : H152348948\r\nBeneficiary: Bank Of China', '', '', '', '', '', '', '2017-08-16 18:18:14'),
(46, 53, 1991, 'toto toto', 100, 20, 'hgkgh', 'hjkgh', NULL, NULL, NULL, NULL, 'Tang Yang', 1, 'hkhk', '', '', '', '', '', '', '2017-08-19 19:07:54'),
(47, 54, 0, '', 0, 0, '', 'This is the Hot Presentation part, not the main About us one, This is the Hot Presentation part, not the main About us one, This is the Hot Presentation part, not the main About us one, This is the Hot Presentation part, not the main About us one, This is the Hot Presentation part, not the main About us one, This is the Hot Presentation part, not the main About us one, This is the Hot Presentation', NULL, NULL, NULL, NULL, 'Elizabith Dior', 1, NULL, '', '', '', '', '', '', '2017-08-20 17:57:48'),
(48, 58, 23, 'dgdfs', 500, 43, 'ewrwereew', 'ewerwe', NULL, NULL, NULL, NULL, 'chinki', 1, 'rwerew', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-03 18:33:46'),
(49, 59, 1989, 'Mahesh', 1000, 43, 'asfsdf', 'afasdf', NULL, NULL, NULL, NULL, 'sujal', 1, 'asfasd', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-03 18:38:07'),
(50, 60, 23, 'Mahesh', 1000, 43, 'asfasdf', 'asdfasdf11111', NULL, NULL, NULL, NULL, 'saurya', 1, 'asdfasdf', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-03 18:44:21'),
(51, 61, 1996, 'Hotline Internet& technology Co.', 100, 20, 'About this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery and are committed to taking the necessary steps to prevent it within our operations and supply chain.\r\n\r\nOur Fashion Footprint programmer continues to monitor and manage the ethical, social and environmental impacts of our business. Arcadia’s Code of Conduct clearly communicates our minimum expectations to our suppliers, and our Ethical Trading programmers monitor and improve working conditions in the factories that our suppliers use to manufacture goods for us.\r\n\r\nThis statement has been published in accordance with the Modern Slavery Act 2015. It sets out the steps taken by Arcadia Group Limited and its subsidiaries, during their financial year September 2015 – August 2016, to prevent modern slavery in their business operations and supply chains. It has been approved by the Board of Arcadia Group Limited and signed by Ian Grabiner, CEO of Arcadia Group Limited.\r\n\r\nAbout Arcadia\r\nThe Arcadia Group began life in the early 1900s and is now an international business comprising of eight high street brands; Burton, Dorothy Perkins, Evans, Miss Selfridge, Outfit, Topshop, Topman and Wallis.\r\n\r\nWe have 2766 outlets across the globe, consisting of owned stores, concessions and international franchise stores, as well as all our various e-commerce websites. We employ over 24,000 people globally and have three main distribution centres in the UK.\r\n\r\nWe are proud of the improvements to working conditions that our Ethical Trading programme has achieved. More information on this can be found here.\r\n\r\nOur supply chain\r\nWe have a global supply chain in which we do not own or operate factories and are rarely dominant in an individual factory. We recognise that we have a responsibility across our supply chain to ensure our goods are made in an ethical, legal and responsible manner. In order to support this we strive to form strong working relationships with our product suppliers and work together with them on compliance with our Code of Conduct. At present, 57% of our product suppliers have been with us for three years or more.\r\nAbout this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery and are committed to taking the necessary steps to prevent it within our operations and supply chain.\r\nAbout this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery and are committed to taking the necessary steps to prevent it within our operations and supply chain.\r\nAbout this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery and are committed to taking the necessary steps to prevent it within our operations and supply chain.\r\nAbout this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery and are committed to taking the necessary steps to prevent it within our operations and supply chain.\r\nAbout this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery and are committed to taking the necessary steps to prevent it within our operations and supply chain.\r\nAbout this statement\r\nWe are committed to sourcing our products in an ethical, legal and responsible manner. We do not tolerate forced, bonded or involuntary labour, human trafficking or any forms of slavery.', 'The Hot Presentation Says" Since November 18, 2004; dedicated to be the number one resource for the “Fashion and Color Trends” topics, Fashion Trendsetter has a competitive advantage with its free of charge services among other trend offices.\r\nFocused on publishing the best color and fashion trend sources on the internet, our aim is to inspire our readers with our color and trend directions exclus.', NULL, NULL, NULL, NULL, 'Ahmed Hasan', 2, '5555 5555  6666 2302 Ahmed Hasan HSBC  7025623  China, Guangzhou, Garden Hotel Brach  HN56623', '5555 5555  6666 2302', 'High Style Fashion Co. ', 'HSBC', '7025623', 'China, Guangzhou, Garden Hotel Brach', 'HN56623', '2017-09-05 21:03:56'),
(52, 64, 0, '', 0, 0, 'This is the company INTRODUCTIO, In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation on file size here please add a popup message ( Your image pass the allowed file size limitation “40 KB”), In the second registration screen ( Business information), Click to add Company Logo, when press crop and save ( no loading process showing and the screen frozen on under screen, May be it happened because I added ( 500 KB image size), So if you adding limitation.', 'This is the hot presentation which will be showing as a summary in the buyer information layer, and also in buyer''s Desksite, under the company name, yeah this is the hot presentation, as a summary in the buyer information layer, and also in buyer''s Desksite, under the company name, yeah this is the hot presentation, same i works for many itms such as and also in buyer''s Desksite, under the.', NULL, NULL, NULL, NULL, 'Bader Mutlaq', 1, '        ', '', '', '', '', '', '', '2017-09-14 07:26:31'),
(53, 65, 0, '', 0, 0, 'GRRGRG', 'GDGDGSGDG', NULL, NULL, NULL, NULL, 'khalil ya', 1, '        ', '', '', '', '', '', '', '2017-09-14 15:22:19'),
(54, 67, 19991, 'Hazem Zaki', 500, 50, '3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers,shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… ', 'Hot presentation.. add worldwide branches: Please note that all the members Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… 3)	In add worldwide branches: Please note that all the members ( Buyer, Sellers, shippers) are free to add many offices not only one. So our system is only allowing them to add one… ', NULL, NULL, NULL, NULL, 'Tareq Shuail', 1, '        ', '', '', '', '', '', '', '2017-09-15 08:34:20'),
(55, 68, 1990, 'Anant Singh', 100, 30, 'New Era Handling agency was promoted by Shri V. G. Jadhav, Shri Atul V. Jadhav, Smt. Ratnaprabha V. Jadhav in the year 1978, to undertake the work as Contractors of Zuari Industries ‘Bagging Plant’.\r\n\r\nLater the group diversified in barge operations, registering New Era Barges Pvt. Ltd in 1983, with Mr. Atul V. Jadhav, Mr. V. G. Jadhav and Mrs. Ratnaprabha V. Jadhav, as Directors. The Company purchased a barge m.v. “GOPAL”.\r\nThe group i.e. New Era Handling Agency & New Era Barges Pvt. Ltd., was managed by Shri Atul V. Jadhav. Two barges were purchased in the subsequent years.\r\nNew Era Barges Pvt Ltd was renamed as New Era Shipping Ltd and now it is renamed again as New Era Shipping Pvt Ltd w.e.f. from 17.09.11.\r\nDuring the year 2005-06, the Company entered into shipping business and acquired their first sea going vessel m.v. “HERMEEZ”. A sister vessel m.v. “KINSHIP MODESTY” was acquired in the year 2006-07.', 'We have a diversified, high-performance, environment friendly Japanese-built vessels. Our fleet mix of 8 Supras, 4 Panas [* 1 Own/ 3 Long term chartered in], offers diversity in carriage capacities and flexibility to serve different customer segments across a wide spectrum of businesses and geographies. Tata NYK works with the NYK fleet, a total of more than 300 vessels in all segments of the dry ', NULL, NULL, NULL, NULL, 'Pradeep Singh', 1, '        ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-19 21:35:10'),
(56, 69, 0, '', 0, 0, 'This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the company introduction, which will be reflected in about us tab, part.', 'Hot Presentation will be displayed in desksite from this data, Hot Presentation will be displayed in desksite from this data, Hot Presentation will be displayed in desksite from this data, Hot Presentation will be displayed in desksite from this data, Hot Presentation will be displayed in desksite from this data, Hot Presentation will be displayed in desksite from this data, Hot Presentation.', NULL, NULL, NULL, NULL, 'Mohamed Zaki', 1, '        ', '', '', '', '', '', '', '2017-09-20 11:19:50'),
(57, 70, 1994, 'Hazem Zaki', 100, 50, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent, This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', 'This is the hot presentation about your company, which will be showing on the search result along with your information, and also will be showing in your desksite most part that attracts the visitors in your site, write quick but attractive words to present your talent..', NULL, NULL, NULL, NULL, 'Omar Hazem Zaki', 1, '1112352 Style Fahion Co. Ltd. HSBC  803  any address  0024', '1112352', 'Style Fahion Co. Ltd.', 'HSBC', '803', 'any address', '0024', '2017-09-25 12:19:54');
INSERT INTO `tbl_company_info` (`id`, `busi_id`, `year_of_registration`, `company_owner_name`, `company_size`, `total_no_of_emp`, `company_introduction`, `hot_presentation`, `company_image1`, `company_image2`, `company_image3`, `company_image4`, `contact_person`, `contact_person_flag`, `company_bank_account`, `account_no`, `account_name`, `bank_name`, `bank_code`, `bank_address`, `swift_code`, `created_date`) VALUES
(58, 71, 0, '', 0, 0, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts', 'This is the Hot Presentation which will be showing in the result along with your information and also in company desksite in the upper part, most part that attracts the visitors in your site, write quick but attractive words to present your talent, yeah', NULL, NULL, NULL, NULL, 'Mohamed Khalifa', 2, '        ', '', '', '', '', '', '', '2017-09-25 12:29:07'),
(59, 72, 2001, 'Nader Shahrori', 100, 30, 'This is the company about us which will be showing in the main website about us tab, and, This is the company about us which will be showing in the main website about us tab, and, This is the company about us which will be showing in the main website about us tab, and, This is the company about us which will be showing in the main website about us tab, and, This is the company about us which will be showing in the main website about us tab, and, hfghfhff', 'This is the hot presentation about us which will be showing in the main website about us tab, and, This is the hot presentation about us which will be showing in the main website about us tab, and, This is the hot presentation about us which will be showing in the main website about us tab, and, dfhfhf', NULL, NULL, NULL, NULL, 'Fouda Ammar', 2, '        ', '', '', '', '', '', '', '2017-09-26 13:38:43'),
(60, 74, 0, '', 0, 0, 'asdf', 'adf', NULL, NULL, NULL, NULL, 'riddhi', 1, '        ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-26 17:01:34'),
(61, 75, 24, 'afadf', 500, 24, 'asdfsfd', 'sadfsdfsdf', NULL, NULL, NULL, NULL, 'avani', 2, 'sdfd fdsd sdf  sd  sdf  sdf', 'sdfd', 'fdsd', 'sdf', 'sd', 'sdf', 'sdf', '2017-09-26 20:58:54'),
(62, 76, 432, 'asdfsadf', 500, 24, 'sdfasdf', 'asdf', NULL, NULL, NULL, NULL, 'raina', 1, 'sadf sadf df  sdf  sdf  dfg', 'sadf', 'sadf', 'df', 'sdf', 'sdf', 'dfg', '2017-09-26 21:41:55'),
(63, 77, 0, '', 0, 0, 'sdfgdfsdfg', 'dsfgsdg', NULL, NULL, NULL, NULL, 'ravi', 1, '        ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-26 22:54:43'),
(64, 79, 0, '', 0, 0, 'asdsdf', 'saasd', NULL, NULL, NULL, NULL, 'nilam', 1, '        ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-09-26 23:05:27'),
(65, 80, 32, 'sadasd', 1000, 234, 'asdsfs', 'dfss', NULL, NULL, NULL, NULL, 'vimala', 1, 'df sdf sdfs  dfs  fd  sdf', 'df', 'sdf', 'sdfs', 'dfs', 'fd', 'sdf', '2017-09-27 00:00:59'),
(66, 81, 0, '', 0, 0, 'This introduction will be shown in "About Us" tab, This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present.', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts.', NULL, NULL, NULL, NULL, 'Ahmed Mursy', 1, '        ', '', '', '', '', '', '', '2017-10-01 19:24:15'),
(67, 82, 0, '', 0, 0, 'fgfgf ggg', ' gg g gfggg', NULL, NULL, NULL, NULL, 'Any Any', 1, '        ', NULL, NULL, NULL, NULL, NULL, NULL, '2017-10-02 17:27:59'),
(68, 83, 0, '', 0, 0, 'Marianne Rowden is President and CEO of AAEI following years of service as the Association’s General Counsel. Marianne came to AAEI after having practiced law with Katten Muchin Rosenman and concentrated in international trade and transportation regulatory compliance. Ms. Rowden has advised importers and exporters on a wide range of trade compliance issues relating to the entire global supply chain, from sourcing goods and trade security to customs entry and delivery of goods to customers.\r\n\r\nMs. Rowden has also represented many companies engaged in international trade before the principal U.S. federal agencies regulating trade, including Customs and Border Protection, Department of Commerce, Office of Foreign Assets Control, and International Trade Commissions. In addition to import matters, she has advised companies on export compliance issues such as licensing requirements of the Export Administration Regulations, Foreign Corrupt Practices Act, embargoes, and has conducted due diligence reviews of mergers and acquisitions involving foreign corporations.\r\n\r\nBecause of Ms. Rowden’s extensive experience in transporation law, she has also advised many companies on joining the Customs-Trade Partnership Against Terrorism (C-TPAT) and conducted self-assessments of global supply chain security programs of multi-national corporations. She also advises shippers, carriers, and logistics providers concerning interstate and international transportation matters.\r\n\r\nMs. Rowden serves as an Adjunct Professor at The John Marshall School of Law and has lectured on customs, international trade and transportation topics for AAEI, the Council of Logistics Management, the Transportation Law Association, and the Transportation Law Institute.', 'Marianne Rowden is President and CEO of AAEI following years of service as the Association’s General Counsel. Marianne came to AAEI after having practiced law with Katten Muchin Rosenman and concentrated in international trade and transportation regulatory compliance.', NULL, NULL, NULL, NULL, 'Pradeep Singh1', 1, '        ', '', '', '', '', '', '', '2017-10-02 20:16:15'),
(69, 84, 0, '', 0, 0, 'Something that I have wanted to do for a long time is take a look at the web’s best About Us pages.\r\n\r\nWhy? Because a good About Us page is very hard to come by.\r\n\r\nNormally they are a boring, self-serving mix of me me me and us us us. But a they are so vital to your business. In fact, its usually the first place people look before they start to take you seriously. Get it wrong and you could be turning people off without even knowing it.\r\n\r\nIn this post I am going to show you what I consider to be 12 of the best About Us pages on the internet. I’m going to go through them all, one by one, and show you what makes them so good.\r\n\r\nThe definition of a good About Us page\r\n\r\nI need to start this article by qualifying what makes an amazing About Us page. The reason for this is that some About Us pages look amazing but have terrible content whilst others look terrible but grab your attention immediately. The list I have compiled here are based on the fact that they:\r\n\r\n\r\nGet the point across\r\nFirst and foremost an About Us page has to get a point across. Everything else is completely useless unless the content and the layout is achieving a goal. That goal is to tell the user who you are by showing them what you can do for them or have done for others.\r\nGive you the information you need\r\nSome About Us pages spend the whole time talking about what it is that the company does and nothing about the staff members. Some do the opposite. Unless the page gives the information that you need based on the type of site you are on then it won’t make the list.\r\nGive you social proof, testimonials and other authenticity statements\r\nA good About Us page always needs to have some mention of past successes, achievements, social proof, etc. Giving concrete examples of why your site or blog is worth reading is extremely important for these pages.\r\nDon’t let design elements negate the potency\r\nSome of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.\r\nSome of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.Some of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.Some of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.Some of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust; as long as the design doesn’t detract from the message I’m cool with however it looks.Some of the About Us pages I am about to show you will make you weep because they are so beautiful. Some not so much. But it is important to note that I haven’t included any pages on here purely because they look nice. This last dot point is all about that Blue-Shirt Trust.', 'This is the hot presentation that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..', NULL, NULL, NULL, NULL, 'Zako Daly', 2, '        ', '', '', '', '', '', '', '2017-10-07 15:50:55'),
(70, 85, 1999, 'Hazem Mohamed Zakix', 1000, 300, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present oopx', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that x.', NULL, NULL, NULL, NULL, 'Donald Speeder', 2, '        ', '', '', '', '', '', '', '2017-10-08 19:47:47'),
(71, 86, 2000, 'Hazem Mohamed Zaki', 500, 50, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent.', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts.', NULL, NULL, NULL, NULL, 'Mohamed Zaki', 2, '444 222 322 838 Hotline Internet& technology Co. HSBC  838  Hong Kong, Wanshi, Hong Kong Island  00245136', '444 222 322 83', 'Hotline Internet& technology Co.', 'HSBC', '838', 'Hong Kong, Wanshi, Hong Kong Island', '00245136', '2017-10-09 18:32:05'),
(72, 87, 0, '', 0, 0, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts.', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts.', NULL, NULL, NULL, NULL, 'Noha Hasan', 1, '        ', '', '', '', '', '', '', '2017-10-10 20:14:12'),
(73, 90, 2001, 'Hazem Mohamed Zaki', 500, 40, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts.', NULL, NULL, NULL, NULL, 'Lolo', 2, '        ', '', '', '', '', '', '', '2017-10-12 02:42:39'),
(74, 92, 0, '', 0, 0, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', NULL, NULL, NULL, NULL, 'Hazem Zaki', 2, '        ', '', '', '', '', '', '', '2017-10-12 22:19:41'),
(75, 93, 2000, 'Hazem Mohamed Zaki', 1000, 50, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the ', NULL, NULL, NULL, NULL, 'Fadi Hemsy', 1, '803803565803 Pixle Care Group HSBC  803  Hong Kong,  Wanshi, Hong Kong Iland  556630803', '803803565803', 'Pixle Care Group', 'HSBC', '803', 'Hong Kong,  Wanshi, Hong Kong Iland', '556630803', '2017-10-13 05:31:20'),
(76, 94, 2001, 'Hazem Zaki', 1000, 20, 'This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..', 'This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..This introduction will be shown in "About Us" tab..', NULL, NULL, NULL, NULL, 'Mahmoud Allam', 1, '803803565803 Any Company account HSBC  803  Hong Kong, Wanchi, Henssy street   0085464', '803803565803', 'Any Company account', 'HSBC', '803', 'Hong Kong, Wanchi, Henssy street ', '0085464', '2017-10-13 17:35:47'),
(77, 97, 1991, 'Rose', 1000, 50, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining...', 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400 Remining.....This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..\r\n400', NULL, NULL, NULL, NULL, 'Rose', 1, '8036669862452 Joystar Shoes Manufacture CO. Ltd. HSBC  803  Hong Kong, Wanshi, Henssy District, Hong Kong Island  HL56329863', '8036669862452', 'Joystar Shoes Manufacture CO. Ltd.', 'HSBC', '803', 'Hong Kong, Wanshi, Henssy District, Hong Kong Island', 'HL56329863', '2017-10-14 20:22:37'),
(78, 98, 0, '', 0, 0, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..', 'This is the Hotpresentation the visitors in your site, write quick but attractive words to present your talent..', NULL, NULL, NULL, NULL, 'Buyer Test', 2, '        ', '', '', '', '', '', '', '2017-10-20 10:29:59'),
(79, 99, 2000, 'Hazem Mohamed Zaki', 1000, 60, 'the visitors in your site, write quick but attractive words to present your talent..the visitors in your site, write quick but attractive words to present your talent..the visitors in your site, write quick but attractive words to present your talent..the visitors in your site, write quick but attractive words to present your talent..the visitors in your site, write quick but attractive words to present your talent..', 'the visitors in your site, write quick but attractive words to present your talent..the visitors in your site, write quick but attractive words to present your talent..', NULL, NULL, NULL, NULL, 'Shipper Tester', 2, '        ', '', '', '', '', '', '', '2017-10-20 13:30:42');
INSERT INTO `tbl_company_info` (`id`, `busi_id`, `year_of_registration`, `company_owner_name`, `company_size`, `total_no_of_emp`, `company_introduction`, `hot_presentation`, `company_image1`, `company_image2`, `company_image3`, `company_image4`, `contact_person`, `contact_person_flag`, `company_bank_account`, `account_no`, `account_name`, `bank_name`, `bank_code`, `bank_address`, `swift_code`, `created_date`) VALUES
(80, 100, 2000, 'The Owner Name', 500, 35, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts.', 'This is the Hot presentation of the company the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent.', NULL, NULL, NULL, NULL, 'Seller Tester', 1, '55552355636695 Istanbul Turkey Fashion National Bank Of Tuykey  0803  Turkey, Istanbul  hjk123456', '55552355636690', 'Istanbul Turkey Fashion', 'National Bank Of Tuykey', '0803', 'Turkey, Istanbul', 'hjk123456', '2017-10-21 11:48:25'),
(81, 101, 0, '', 0, 0, 'This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..', 'This is the hot presentation part that attracts the visitors in your site, write quick but attractive words to present your talent..This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..', NULL, NULL, NULL, NULL, 'Rosita', 2, '        ', '', '', '', '', '', '', '2017-10-31 21:00:57'),
(82, 102, 2002, 'Hazem Mohamed Zaki', 500, 25, 'The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name, The official bank account is the account assigned and associated with your company registered name.', 'This is hot presentation the most part that attracts the visitors in your site, write quick but attractive words to present your talent,This is hot presentation the most part that attracts the visitors in your site, write quick but attractive words to present your talent,This is hot presentation the most part that attracts the visitors in your site, write quick but attractive words to present your', NULL, NULL, NULL, NULL, 'Sadat Seller', 2, '2563 2365 2362 Mega Group Agriculture Bank Of China  0532  China, Guangdong, Guangzhou  hy1235-2665', '2563 2365 2362', 'Mega Group', 'Agriculture Bank Of China', '0532', 'China, Guangdong, Guangzhou', 'hy1235-2665', '2017-11-02 14:27:49'),
(83, 104, 2006, 'ANUSHA SHETTY', 100, 10, 'Testing', 'Great going', NULL, NULL, NULL, NULL, 'ANUSHA SHETTY', 1, '13254365476478458 Hytasfsdgf sagfsdg  dsgsdfgsdgdfs  dsgsd  453456', '13254365476478458', 'Hytasfsdgf', 'sagfsdg', 'dsgsdfgsdgdfs', 'dsgsd', '453456', '2018-01-10 01:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactperson`
--

CREATE TABLE IF NOT EXISTS `tbl_contactperson` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `name_prefix` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `text_password` varchar(300) NOT NULL,
  `mobile_code` varchar(100) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `position` varchar(200) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `tbl_contactperson`
--

INSERT INTO `tbl_contactperson` (`id`, `busi_id`, `name_prefix`, `name`, `email`, `password`, `text_password`, `mobile_code`, `mobile`, `position`, `picture`, `created_date`, `is_deleted`) VALUES
(11, 38, 'Mr', 'Abhay', 'abhay@gmail.com', '', '', '91', '982343433333', 'mumbai', 'images/user_images/81/business/1499093186new.jpg', NULL, 0),
(12, 40, 'Mr', 'kunal', 'kunal@gmail.com', '', '', '37453', '9345344444', 'clerck', 'images/user_images/83/business/1499138064new.jpg', NULL, 0),
(13, 44, 'Mr', 'test', 'prashantmyname@gmail.com', '', '', '91', '1234567890', 'tester', 'images/user_images/87/business/1499537021new.jpg', NULL, 0),
(14, 47, 'Miss', 'shany', 'shany@udtaks.com', '', '', '002', '12335889485', 'Marketing manager', 'images/user_images/95/business/1499952208new.jpg', NULL, 0),
(15, 48, 'Mr', 'AbD', 'my@gmIL.COM', '', '', '12', '12478447790', 'Representive', 'images/user_images/96/business/1500106489new.jpg', NULL, 0),
(16, 50, 'Mr', 'ABC', 'pras@g.com', '', '', '3', '312734568900', 'QA', 'images/user_images/98/business/1500111622new.jpg', NULL, 0),
(17, 51, 'Mr', 'Contact Person', 'mybuyers@udtalks.com', '', '', '0086', '13660638244', 'General Manager', 'images/user_images/100/business/1502794892new.jpg', NULL, 0),
(18, 52, 'Mr', 'Omar Hazem', 'anyemail@hotmail.com', '', '', '008', '13666638247', 'Market Manager ', 'images/user_images/101/business/1502887462new.jpg', NULL, 0),
(19, 55, 'Miss', 'Anna Donald', 'btest@udtalks.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '002', '01148050090', 'CEO', 'images/user_images/104/business/1504093461new.jpg', NULL, 0),
(21, 64, 'Miss', 'Noha Hazem', 'noha@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '002', '01148050000', 'CEO', 'images/user_images/115/business/1505357242new.jpg', NULL, 1),
(23, 61, 'Mr', 'pina', 'pina@gmail.com', '4eae35f1b35977a00ebd8086c259d4c9', 'www', '23', '07841069144', 'asfd', 'images/user_images/111/business/1505988204new.jpg', '2017-09-21 15:33:36', 0),
(24, 71, 'Mr', 'Hazem zaki', 'an@udtalks.com', '7d2154b2bc755e1f1a13ae92e885bed6', 'yesyes', '002', '01148050090', 'CEO', 'images/user_images/132/business/1506323630new.jpg', '2017-09-25 12:44:52', 0),
(25, 72, 'Mr', 'hazem zaki', 'hazem@udtalks.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13660638247', 'Marketing manager', 'images/user_images/136/business/1506415161new.jpg', '2017-09-26 14:10:19', 0),
(26, 75, 'Mr', 'avani1', 'avani@gmail.com', 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '23', '435345345', 'ssdfds', 'images/user_images/141/business/1506439587new.jpg', NULL, 0),
(28, 84, 'Miss', 'toleen', 'toleen@udtalks.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '008', '13660638888', 'operation Manager', 'images/user_images/154/business/1507372067new.jpg', '2017-10-07 15:58:05', 0),
(30, 85, 'Mr', 'Halima Altoni', 'halima@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '1366638247', 'Public Relation Manager', 'images/user_images/158/business/1507473706new.jpg', '2017-10-08 20:11:52', 0),
(31, 86, 'Mr', 'zordi yak', 'zordi@udtalks.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13660638247', 'Marketing Manager', 'images/user_images/161/business/1507555259new.jpg', '2017-10-09 18:51:47', 0),
(33, 90, 'Miss', 'Lolo', 'lolo@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13666666666', 'Operation Manager', 'images/user_images/167/business/1507756299new.jpg', NULL, 0),
(34, 92, 'Mr', 'Hazem Zaki', 'zak@udtalks.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13660638247', 'CEO', 'images/user_images/170/business/1507827249new.jpg', '2017-10-12 22:27:33', 0),
(35, 98, 'Mr', 'Hazem Zaki', 'azem@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13660638247', 'Marketing Manager', 'images/user_images/178/business/1508475880new.jpg', '2017-10-20 10:34:53', 0),
(36, 99, 'Mr', 'Mona trawly', 'mona@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13660638247', 'General Manager', 'images/user_images/183/business/1508488459new.jpg', '2017-10-20 14:04:46', 0),
(38, 101, 'Miss', 'Rosita', 'rosita@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '006', '13662638247', 'Operation Manager okay ', 'images/user_images/187/business/1509463799new.jpg', NULL, 0),
(39, 102, 'Mr', 'Peter Cruise', 'info@udtalks.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', '0086', '13660638247', 'Operation Manager', 'images/user_images/190/business/1510175846new.jpg', '2017-11-09 02:48:23', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_us`
--

CREATE TABLE IF NOT EXISTS `tbl_contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT '0',
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `message` text,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE IF NOT EXISTS `tbl_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `flag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=237 ;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `name`, `flag`) VALUES
(1, 'Afghanistan', 'afghanistan-flag-round-xs.png'),
(2, 'Aland Islands', 'aland-islands-flag-round-xs.png'),
(3, 'Albania', 'albania-flag-round-xs.png'),
(4, 'Algeria', 'algeria-flag-round-xs.png'),
(5, 'American Samoa', 'american-samoa-flag-round-xs.png'),
(6, 'Andorra', 'andorra-flag-round-xs.png'),
(7, 'Angola', 'angola-flag-round-xs.png'),
(8, 'Anguilla', 'anguilla-flag-round-xs.png'),
(9, 'Antarctica', 'antarctica-flag-round-xs.png'),
(10, 'Antigua and Barbuda', 'antigua-and-barbuda-flag-round-xs.png'),
(11, 'Argentina', 'argentina-flag-round-xs.png'),
(12, 'Armenia', 'armenia-flag-round-xs.png'),
(13, 'Aruba', 'aruba-flag-round-xs.png'),
(14, 'Australia', 'australia-flag-round-xs.png'),
(15, 'Austria', 'austria-flag-round-xs.png'),
(16, 'Azerbaijan', 'azerbaijan-flag-round-xs.png'),
(17, 'Bahamas', 'bahamas-flag-round-xs.png'),
(18, 'Bahrain', 'bahrain-flag-round-xs.png'),
(19, 'Bangladesh', 'bangladesh-flag-round-xs.png'),
(20, 'Barbados', 'barbados-flag-round-xs.png'),
(21, 'Belarus', 'belarus-flag-round-xs.png'),
(22, 'Belgium', 'belgium-flag-round-xs.png'),
(23, 'Belize', 'belize-flag-round-xs.png'),
(24, 'Benin', 'benin-flag-round-xs.png'),
(25, 'Bermuda', 'bermuda-flag-round-xs.png'),
(26, 'Bhutan', 'bhutan-flag-round-xs.png'),
(27, 'Bolivia', 'bolivia-flag-round-xs.png'),
(28, 'Bosnia and Herzegovina', 'bosnia-and-herzegovina-flag-round-xs.png'),
(29, 'Botswana', 'botswana-flag-round-xs.png'),
(30, 'Bouvet Island', 'bouvet-island-flag-round-xs.png'),
(31, 'Brazil', 'brazil-flag-round-xs.png'),
(32, 'British Indian Ocean Territory', 'british-indian-ocean-territory-flag-round-xs.png'),
(33, 'Brunei Darussalam', 'brunei-flag-round-xs.png'),
(34, 'Bulgaria', 'bulgaria-flag-round-xs.png'),
(35, 'Burkina Faso', 'burkina-faso-flag-round-xs.png'),
(36, 'Burundi', 'burundi-flag-round-xs.png'),
(37, 'Cambodia', 'cambodia-flag-round-xs.png'),
(38, 'Cameroon', 'cameroon-flag-round-xs.png'),
(39, 'Canada', 'canada-flag-round-xs.png'),
(40, 'Cape Verde', 'cape-verde-flag-round-xs.png'),
(41, 'Cayman Islands', 'cayman-islands-flag-round-xs.png'),
(42, 'Central African Republic', 'central-african-republic-flag-round-xs.png'),
(43, 'Chad', 'chad-flag-round-xs.png'),
(44, 'Chile', 'chile-flag-round-xs.png'),
(45, 'China', 'china-flag-round-xs.png'),
(46, 'Christmas Island', 'christmas-Island-flag-round-xs.png'),
(47, 'Cocos (Keeling) Islands', 'cocos-(keeling)-Islands-flag-round-xs.png'),
(48, 'Colombia', 'colombia-flag-round-xs.png'),
(49, 'Comoros', 'comoros-flag-round-xs.png'),
(50, 'Congo', 'congo-democratic-republic-of-the-flag-round-xs.png'),
(51, 'Cook Islands', 'cook-Islands-flag-round-xs.png'),
(52, 'Costa Rica', 'costa-rica-flag-round-xs.png'),
(53, 'Cote D''Ivoire', 'cote-d-ivoire-flag-round-xs.png'),
(54, 'Croatia', 'croatia-flag-round-xs.png'),
(55, 'Cuba', 'cuba-flag-round-xs.png'),
(56, 'Cyprus', 'cyprus-flag-round-xs.png'),
(57, 'Czech Republic', 'czech-republic-flag-round-xs.png'),
(58, 'Denmark', 'denmark-flag-round-xs.png'),
(59, 'Djibouti', 'djibouti-flag-round-xs.png'),
(60, 'Dominica', 'dominica-flag-round-xs.png'),
(61, 'Dominican Republic', 'dominican-republic-flag-round-xs.png'),
(62, 'Ecuador', 'ecuador-flag-round-xs.png'),
(63, 'Egypt', 'egypt-flag-round-xs.png'),
(64, 'El Salvador', 'el-salvador-flag-round-xs.png'),
(65, 'Equatorial Guinea', 'equatorial-guinea-flag-round-xs.png'),
(66, 'Eritrea', 'eritrea-flag-round-xs.png'),
(67, 'Estonia', 'estonia-flag-round-xs.png'),
(68, 'Ethiopia', 'ethiopia-flag-round-xs.png'),
(69, 'Falkland Islands', 'falkland-Islands-flag-round-xs.png'),
(70, 'Faroe Islands', 'faroe-Islands-flag-round-xs.png'),
(71, 'Fiji', 'fiji-flag-round-xs.png'),
(72, 'Finland', 'finland-flag-round-xs.png'),
(73, 'France', 'france-flag-round-xs.png'),
(74, 'French Guiana', 'french-guiana-flag-round-xs.png'),
(75, 'French Polynesia', 'french-polynesia-flag-round-xs.png'),
(76, 'French Southern Territories', 'french-southern-territories-flag-round-xs.png'),
(77, 'Gabon', 'gabon-flag-round-xs.png'),
(78, 'Gambia', 'gambia-flag-round-xs.png'),
(79, 'Georgia', 'georgia-flag-round-xs.png'),
(80, 'Germany', 'germany-flag-round-xs.png'),
(81, 'Ghana', 'ghana-flag-round-xs.png'),
(82, 'Gibraltar', 'gibraltar-flag-round-xs.png'),
(83, 'Greece', 'greece-flag-round-xs.png'),
(84, 'Greenland', 'greenland-flag-round-xs.png'),
(85, 'Grenada', 'grenada-flag-round-xs.png'),
(86, 'Guadeloupe', 'guadeloupe-flag-round-xs.png'),
(87, 'Guam', 'guam-flag-round-xs.png'),
(88, 'Guatemala', 'guatemala-flag-round-xs.png'),
(89, 'Guinea', 'guinea-bissau-flag-round-xs.png'),
(90, 'Guinea-Bissau', 'guinea-bissau-flag-round-xs.png'),
(91, 'Guyana', 'guyana-flag-round-xs.png'),
(92, 'Haiti', 'haiti-flag-round-xs.png'),
(93, 'Heard Island and Mcdonald Islands', 'heard-island-and-mcdonald-islands-flag-round-xs.png'),
(94, 'Vatican City', 'vatican-city-flag-round-xs.png'),
(95, 'Honduras', 'honduras-flag-round-xs.png'),
(96, 'Hong Kong', 'hong-kong-flag-round-xs.png'),
(97, 'Hungary', 'hungary-flag-round-xs.png'),
(98, 'Iceland', 'iceland-flag-round-xs.png'),
(99, 'India', 'india-flag-round-xs.png'),
(100, 'Indonesia', 'indonesia-flag-round-xs.png'),
(101, 'Iran', 'iran-flag-round-xs.png'),
(102, 'Iraq', 'iraq-flag-round-xs.png'),
(103, 'Ireland', 'ireland-flag-round-xs.png'),
(104, 'Israel', 'israel-flag-round-xs.png'),
(105, 'Italy', 'italy-flag-round-xs.png'),
(106, 'Jamaica', 'jamaica-flag-round-xs.png'),
(107, 'Japan', 'japan-flag-round-xs.png'),
(108, 'Jordan', 'jordan-flag-round-xs.png'),
(109, 'Kazakhstan', 'kazakhstan-flag-round-xs.png'),
(110, 'Kenya', 'kenya-flag-round-xs.png'),
(111, 'Kiribati', 'kiribati-flag-round-xs.png'),
(112, 'South Korea', 'south-korea-flag-round-xs.png'),
(113, 'North Korea', 'north-korea-flag-round-xs.png'),
(114, 'Kuwait', 'kuwait-flag-round-xs.png'),
(115, 'Kyrgyzstan', 'kyrgyzstan-flag-round-xs.png'),
(116, 'Laos', 'laos-flag-round-xs.png'),
(117, 'Latvia', 'latvia-flag-round-xs.png'),
(118, 'Lebanon', 'lebanon-flag-round-xs.png'),
(119, 'Lesotho', 'lesotho-flag-round-xs.png'),
(120, 'Liberia', 'liberia-flag-round-xs.png'),
(121, 'Libya', 'libya-flag-round-xs.png'),
(122, 'Liechtenstein', 'liechtenstein-flag-round-xs.png'),
(123, 'Lithuania', 'lithuania-flag-round-xs.png'),
(124, 'Luxembourg', 'luxembourg-flag-round-xs.png'),
(125, 'Macao', 'macau-flag-round-xs.png'),
(126, 'Macedonia', 'macedonia-flag-round-xs.png'),
(127, 'Madagascar', 'madagascar-flag-round-xs.png'),
(128, 'Malawi', 'malawi-flag-round-xs.png'),
(129, 'Malaysia', 'malaysia-flag-round-xs.png'),
(130, 'Maldives', 'maldives-flag-round-xs.png'),
(131, 'Mali', 'mali-flag-round-xs.png'),
(132, 'Malta', 'malta-flag-round-xs.png'),
(133, 'Marshall Islands', 'marshall-islands-flag-round-xs.png'),
(134, 'Martinique', 'martinique-flag-round-xs.png'),
(135, 'Mauritania', 'mauritania-flag-round-xs.png'),
(136, 'Mauritius', 'mauritius-flag-round-xs.png'),
(137, 'Mayotte', 'mayotte-flag-round-xs.png'),
(138, 'Mexico', 'mexico-flag-round-xs.png'),
(139, 'Micronesia', 'micronesia-flag-round-xs.png'),
(140, 'Moldova', 'moldova-flag-round-xs.png'),
(141, 'Monaco', 'monaco-flag-round-xs.png'),
(142, 'Mongolia', 'mongolia-flag-round-xs.png'),
(143, 'Montserrat', 'montserrat-flag-round-xs.png'),
(144, 'Morocco', 'morocco-flag-round-xs.png'),
(145, 'Mozambique', 'mozambique-flag-round-xs.png'),
(146, 'Myanmar', 'myanmar-flag-round-xs.png'),
(147, 'Namibia', 'namibia-flag-round-xs.png'),
(148, 'Nauru', 'nauru-flag-round-xs.png'),
(149, 'Nepal', 'nepal-flag-round-xs.png'),
(150, 'Netherlands', 'netherlands-flag-round-xs.png'),
(151, 'Netherlands Antilles', 'netherlands-antilles-flag-round-xs.png'),
(152, 'New Caledonia', 'new-caledonia-flag-round-xs.png'),
(153, 'New Zealand', 'new-zealand-flag-round-xs.png'),
(154, 'Nicaragua', 'nicaragua-flag-round-xs.png'),
(155, 'Niger', 'niger-flag-round-xs.png'),
(156, 'Nigeria', 'nigeria-flag-round-xs.png'),
(157, 'Niue', 'niue-flag-round-xs.png'),
(158, 'Norfolk Island', 'norfolk-island-flag-round-xs.png'),
(159, 'Northern Mariana Islands', 'northern-mariana-islands-flag-round-xs.png'),
(160, 'Norway', 'norway-flag-round-xs.png'),
(161, 'Oman', 'oman-flag-round-xs.png'),
(162, 'Pakistan', 'pakistan-flag-round-xs.png'),
(163, 'Palau', 'palau-flag-round-xs.png'),
(164, 'Palestinian Territory', 'palestinian-territory-flag-round-xs.png'),
(165, 'Panama', 'panama-flag-round-xs.png'),
(166, 'Papua New Guinea', 'papua-new-guinea-flag-round-xs.png'),
(167, 'Paraguay', 'paraguay-flag-round-xs.png'),
(168, 'Peru', 'peru-flag-round-xs.png'),
(169, 'Philippines', 'philippines-flag-round-xs.png'),
(170, 'Pitcairn', 'pitcairn-flag-round-xs.png'),
(171, 'Poland', 'poland-flag-round-xs.png'),
(172, 'Portugal', 'portugal-flag-round-xs.png'),
(173, 'Puerto Rico', 'puerto-rican-flag-round-xs.png'),
(174, 'Qatar', 'qatar-flag-round-xs.png'),
(175, 'Reunion', 'reunion-flag-round-xs.png'),
(176, 'Romania', 'romania-flag-round-xs.png'),
(177, 'Russian Federation', 'russia-flag-round-xs'),
(178, 'Rwanda', 'rwanda-flag-round-xs.png'),
(179, 'Saint Helena', 'saint-helena-flag-round-xs.png'),
(180, 'Saint Kitts And Nevis', 'saint-kitts-and-nevis-flag-round-xs.png'),
(181, 'Saint Lucia', 'saint-lucia-flag-round-xs.png'),
(182, 'Saint Pierre and Miquelon', 'saint-pierre-and-miquelon-flag-round-xs.png'),
(183, 'Saint Vincent and The Grenadines', 'saint-vincent-and-the-grenadines-flag-round-xs.png'),
(184, 'Samoa', 'samoa-flag-round-xs.png'),
(185, 'San Marino', 'san-marino-flag-round-xs.png'),
(186, 'Sao Tome and Principe', 'sao-tome-and-principe-flag-round-xs.png'),
(187, 'Saudi Arabia', 'saudi-arabia-flag-round-xs.png'),
(188, 'Senegal', 'senegal-flag-round-xs.png'),
(189, 'Serbia and Montenegro', 'serbia-and-montenegro-flag-round-xs.png'),
(190, 'Seychelles', 'seychelles-flag-round-xs.png'),
(191, 'Sierra Leone', 'sierra-leone-flag-round-xs.png'),
(192, 'Singapore', 'singapore-flag-round-xs.png'),
(193, 'Slovakia', 'slovakia-flag-round-xs.png'),
(194, 'Slovenia', 'slovenia-flag-round-xs'),
(195, 'Solomon Islands', 'solomon-islands-flag-round-xs.png'),
(196, 'Somalia', 'somalia-flag-round-xs.png'),
(197, 'South Africa', 'south-africa-flag-round-xs.png'),
(198, 'Spain', 'spain-flag-round-xs.png'),
(199, 'Sri Lanka', 'sri-lanka-flag-round-xs.png'),
(200, 'Sudan', 'sudan-flag-round-xs.png'),
(201, 'Suriname', 'suriname-flag-round-xs.png'),
(202, 'Svalbard and Jan Mayen', 'svalbard-and-jan-mayen-flag-round-xs.png'),
(203, 'Swaziland', 'swaziland-flag-round-xs.png'),
(204, 'Sweden', 'sweden-flag-round-xs.png'),
(205, 'Switzerland', 'switzerland-flag-round-xs.png'),
(206, 'Syrian Arab Republic', 'syria-flag-round-xs.png'),
(207, 'Taiwan', 'taiwan-flag-round-xs.png'),
(208, 'Tajikistan', 'tajikistan-flag-round-xs.png'),
(209, 'Tanzania', 'tanzania-flag-round-xs.png'),
(210, 'Thailand', 'thailand-flag-round-xs.png'),
(211, 'Timor-Leste', 'togo-flag-round-xs.png'),
(212, 'Togo', 'togo-flag-round-xs.png'),
(213, 'Tokelau', 'tokelau-flag-round-xs.png'),
(214, 'Tonga', 'tonga-flag-round-xs.png'),
(215, 'Trinidad and Tobago', 'trinidad-and-tobago-flag-round-xs.png'),
(216, 'Tunisia', 'tunisia-flag-round-xs.png'),
(217, 'Turkey', 'turkey-flag-round-xs.png'),
(218, 'Turkmenistan', 'turkmenistan-flag-round-xs.png'),
(219, 'Turks and Caicos Islands', 'turks-and-caicos-islands-flag-round-xs.png'),
(220, 'Tuvalu', 'tuvalu-flag-round-xs.png'),
(221, 'Uganda', 'uganda-flag-round-xs.png'),
(222, 'Ukraine', 'ukraine-flag-round-xs.png'),
(223, 'United Arab Emirates', 'united-arab-emirates-flag-round-xs.png'),
(224, 'United Kingdom', 'united-kingdom-flag-round-xs.png'),
(225, 'United States', 'united-states-of-america-flag-round-xs.png'),
(226, 'Uruguay', 'uruguay-flag-round-xs.png'),
(227, 'Uzbekistan', 'uzbekistan-flag-round-xs.png'),
(228, 'Vanuatu', 'vanuatu-flag-round-xs.png'),
(229, 'Venezuela', 'venezuela-flag-round-xs.png'),
(230, 'Vietnam', 'vietnam-flag-round-xs.png'),
(231, 'Virgin Islands', 'virgin-islands-flag-round-xs.png'),
(232, 'Wallis and Futuna', 'wallis-and-futuna-flag-round-xs.png'),
(233, 'Western Sahara', 'western-sahara-flag-round-xs.png'),
(234, 'Yemen', 'yemen-flag-round-xs.png'),
(235, 'Zambia', 'zambia-flag-round-xs.png'),
(236, 'Zimbabwe', 'zimbabwe-flag-round-xs.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_factory_info`
--

CREATE TABLE IF NOT EXISTS `tbl_factory_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `fact_province` varchar(255) NOT NULL,
  `fact_city` varchar(255) NOT NULL,
  `fact_street` varchar(255) NOT NULL,
  `fact_license_province` varchar(255) NOT NULL,
  `fact_license_city` varchar(255) NOT NULL,
  `fact_license_street` varchar(255) NOT NULL,
  `telephone_code` varchar(10) DEFAULT NULL,
  `telephone_city_code` varchar(10) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `fact_size` int(11) DEFAULT '0',
  `no_of_production_line` int(11) DEFAULT '0',
  `production_lead_time` int(11) DEFAULT '0',
  `no_of_rnd_staff` int(11) DEFAULT '0',
  `no_of_control_staff` int(11) DEFAULT '0',
  `rnd_capacity` varchar(255) DEFAULT NULL,
  `rnd_capacity_type` varchar(255) DEFAULT NULL,
  `annual_turnover` varchar(25) DEFAULT '0',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_factory_info`
--

INSERT INTO `tbl_factory_info` (`id`, `busi_id`, `fact_province`, `fact_city`, `fact_street`, `fact_license_province`, `fact_license_city`, `fact_license_street`, `telephone_code`, `telephone_city_code`, `telephone`, `fact_size`, `no_of_production_line`, `production_lead_time`, `no_of_rnd_staff`, `no_of_control_staff`, `rnd_capacity`, `rnd_capacity_type`, `annual_turnover`, `created_date`) VALUES
(16, 44, 'mah', 'pune', '1234', 'mah', 'pune', '123', '91', '1234', '1', 2000, 1, 1, 2, 1, '1', '2,3', '92', '2017-07-08 23:35:39'),
(17, 46, 'Maharashtra', 'Pune', 'Dhanori', 'Maharashtra', 'Pune', 'Dhanori', '91', '020', '9021609385', 1000, 5, 48, 12, 6, '', '1,2,3', '3000000', '2017-07-12 12:15:19'),
(18, 48, 'mah', 'pune', 'oijoi', 'ijiojio', 'iooi', 'ioio', '000', '456', '243435556778', 500, 0, 1, 3, 5, '', '1', '77', '2017-07-15 13:46:34'),
(19, 52, 'Shenzen', 'Shenzen', 'Factory address is typed here', 'Shenzen', 'Shenzen', 'Factory address is typed here', '0086', '20', '88888666', 1000, 2, 45, 2, 2, '', '1,2', '1', '2017-08-16 19:51:19'),
(20, 57, 'Maharashtra', 'Pune', 'Mayur Kilbill', 'Maharashtra', 'Pune', 'Dhanori', '91', '020', '9021609385', 100, 7, 24, 30, 6, '', '1,2', '3000000', '2017-09-03 17:55:41'),
(21, 60, 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '234', '234234', '34234234', 1000, 2, 3, 3, 4, '', '2', '234', '2017-09-03 18:44:47'),
(22, 61, 'Guangdong', 'Foshan', 'This The Factory Details', 'جواندونج', 'فوشان', 'هنا عنوان المصنع', '0086', '20', '5632653', 500, 1, 45, 3, 3, 'We can Make customer own brand', '4', '10', '2017-09-05 21:06:30'),
(23, 70, 'Guangdong', 'Guangzhou', 'This The Factory Details', 'جواندونج', 'جولتزو', 'سييس ييي ي ي يعنوان المصنع', '0086', '020', '1234566', 100, 2, 45, 20, 20, 'Make your own brand', '1,4', '1', '2017-09-25 19:28:51'),
(24, 70, 'Guangdong', 'Guangzhou', 'This The Factory Details', 'جواندونج', 'جوانزو', 'العنوان للمصنع بالعربي', '0086', '02', '1234568', 100, 4, 45, 20, 20, 'own brand', '1,4', '1', '2017-09-25 19:31:12'),
(25, 70, 'Guangdong', 'Guangzhou', 'This The Factory Details', 'Guangdong', 'Guangzhou', 'This The Factory Details', '0086', '020', '1234567', 100, 2, 45, 10, 10, 'own brans', '1,4', '1', '2017-09-25 19:34:45'),
(26, 70, 'Guangdong', 'Guangzhou', 'This The Factory Details', 'Guangdong', 'Guangzhou', 'This The Factory Details', '0086', '020', '1234567', 100, 2, 45, 10, 10, 'own brans', '1,4', '1', '2017-09-25 19:42:02'),
(27, 70, 'yther', 'yrtyrty', 'ertyery', 'eryer', 'eryry', 'eryer', '0086', '020', '1234567', 100, 12, 22, 22, 22, '', '1', '1', '2017-09-25 19:43:07'),
(28, 70, 'gjgjg', 'gjggjg', 'gjgj gjhfgj gjfgj fgj', 'gjgj ', 'jhgjgj ', ' fgjfgj g gjgj ghjg', '0086', '020', '6666666', 100, 10, 10, 2, 10, 'Make yr own brand', '1,4', '1', '2017-09-25 21:40:12'),
(31, 75, 'dfasdf', 'aasdfsdf', 'sdfsadf', 'asfsd', 'asdf', 'asdf', '324', '2423', '234234', 500, 234, 24, 34, 243, '', '1,2', '324', '2017-09-26 21:18:46'),
(32, 86, 'Shangahi', 'Shanghai', 'This is the factory addressx', 'شنجهاي', 'شانجهاي', 'هنا عنوان المصنع في شانجهاي', '0085', '035', '1234565', 2100, 5, 30, 20, 30, '', '1', '20', '2017-10-09 18:34:02'),
(33, 93, 'Reyadh', 'Reyadh', 'this the factory address', 'الرياض', 'الرياض', 'هنا عنوان المصنع', '00966', '050', '1366325', 2100, 5, 45, 30, 20, 'We can make your own products and samples', '1,4', '5', '2017-10-13 05:33:12'),
(34, 97, 'Guangdong', 'Foshan', 'This the factory address', 'Guangdong', 'Foshan', 'This the factory same as in license ', '0086', '0730', '1234566', 2100, 5, 45, 30, 20, 'I can make your own brand', '1,2,4', '10', '2017-10-14 20:29:32'),
(35, 100, 'Istanbul', 'Istanbul', 'This the factory address', 'إسطنبول', 'إسطنبول', 'هنا عنوان المصنع', '0088', '055', '1326548', 1000, 2, 30, 20, 20, '', '1,3', '10', '2017-10-21 11:49:40'),
(36, 102, 'Instanbul', 'Instanbul', 'This the factory address', 'إسطنبول', 'إسطنبول', 'هنا عنوان المصنع', '002', '020', '1234569', 500, 2, 45, 25, 25, 'make your own brand', '1,4', '1', '2017-11-02 14:33:49'),
(37, 104, 'KARNATAKA', 'BANGALORE', 'MALLESHWARAM', 'KARNATAKA', 'BANGALORE', 'MALLESHWARAM', '0', '0', '12345', 100, 2, 2, 0, 0, '', '1', '13', '2018-01-10 01:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_3d_products`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_3d_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `product3d_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_carousel_ads`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_carousel_ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `is_paid` tinyint(4) DEFAULT '0',
  `amount` double DEFAULT '0',
  `payment_id` varchar(128) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_catalogue`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_catalogue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `fc_id` int(11) NOT NULL,
  `catalogue_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_featured_catalogue`
--

INSERT INTO `tbl_featured_catalogue` (`id`, `busi_id`, `fc_id`, `catalogue_id`, `start_date`, `end_date`, `status`) VALUES
(1, 46, 1, 1, '2017-11-01 00:00:00', '2018-01-31 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_products`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_videos`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_world_buyer`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_world_buyer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_featured_world_seller`
--

CREATE TABLE IF NOT EXISTS `tbl_featured_world_seller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fc_id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaurantee_terms`
--

CREATE TABLE IF NOT EXISTS `tbl_gaurantee_terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_gaurantee_terms`
--

INSERT INTO `tbl_gaurantee_terms` (`id`, `name`) VALUES
(1, 'Provide the buyer with %20 spare parts of the total goods, to be shipped with the order.'),
(2, 'Send spare parts of the non-working products, to the buyer country and carry its shipping cost.'),
(3, 'Money back for the products not match the buyer specification which mentioned in the contract.'),
(4, 'Replace the non-working products, with other new one with the same specifications. Total shipping cost to be carried by both of us.'),
(5, 'Replace the items doesn''t match the buyer specifications which mentioned in the contract. Total shipping cost to be carried by both of us.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home_page_ads`
--

CREATE TABLE IF NOT EXISTS `tbl_home_page_ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `main_banner` varchar(255) DEFAULT NULL,
  `is_paid` tinyint(1) DEFAULT '0',
  `amount` double NOT NULL,
  `content` longtext,
  `video_id` int(11) NOT NULL,
  `catalogue_id` int(11) NOT NULL,
  `payment_id` varchar(128) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_home_page_ads`
--

INSERT INTO `tbl_home_page_ads` (`id`, `busi_id`, `from_date`, `to_date`, `main_banner`, `is_paid`, `amount`, `content`, `video_id`, `catalogue_id`, `payment_id`, `created_date`, `status`) VALUES
(1, 102, '2017-11-13 00:00:00', '2017-11-19 23:59:59', 'images/user_images/190/ads1509887339.275ads.jpg', 1, 250, 'We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money,We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money, We present a new generation about shoes industries by mixing the product with high touch spirit, it manufactured by love for innovation not for money,  ', 0, 2, 'PAY-0FN49937EK952680RLH7Q25A', '2017-11-05 18:38:59', 1),
(2, 102, '2017-11-13 00:00:00', '2017-11-19 23:59:59', NULL, 0, 250, NULL, 0, 0, '', NULL, 0),
(3, 99, '2017-11-13 00:00:00', '2017-11-19 23:59:59', NULL, 0, 250, NULL, 0, 0, '', NULL, 0),
(4, 102, '2017-11-20 00:00:00', '2017-11-26 23:59:59', NULL, 0, 250, NULL, 0, 0, '', NULL, 0),
(5, 102, '2017-11-20 00:00:00', '2017-11-26 23:59:59', NULL, 0, 250, NULL, 0, 0, '', NULL, 0),
(6, 46, '2017-11-20 00:00:00', '2017-11-26 23:59:59', NULL, 0, 250, NULL, 0, 0, '', NULL, 0),
(7, 102, '2017-11-20 00:00:00', '2017-11-26 23:59:59', 'images/user_images/190/ads1510900228.5563ads.jpg', 1, 250, 'fgjjgh', 0, 0, 'PAY-98M1541060627770TLIHIEPY', '2017-11-17 12:00:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hot_sale_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_hot_sale_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_hot_sale_menu`
--

INSERT INTO `tbl_hot_sale_menu` (`id`, `busi_id`, `item_id`, `created_date`) VALUES
(1, 61, 6, '2017-09-07 19:15:42'),
(2, 93, 7, '2017-10-13 06:55:59'),
(3, 93, 8, '2017-10-13 07:50:06'),
(4, 100, 12, '2017-10-21 13:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry`
--

CREATE TABLE IF NOT EXISTS `tbl_inquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `requester_busi_id` int(11) NOT NULL,
  `inquiry_type_id` int(11) NOT NULL,
  `inquiry_subject` text,
  `inquiry_body` text,
  `product_id` int(11) NOT NULL,
  `attachment1` varchar(300) DEFAULT NULL,
  `attachment1_size` varchar(300) DEFAULT NULL,
  `attachment2` varchar(300) DEFAULT NULL,
  `attachment2_size` varchar(300) NOT NULL,
  `attachment3` varchar(300) DEFAULT NULL,
  `attachment3_size` varchar(300) NOT NULL,
  `attachment4` varchar(300) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company` varchar(128) DEFAULT NULL,
  `attachment4_size` varchar(300) NOT NULL,
  `unreadmark` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=read,0=unread',
  `pin_unpin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=pin,0=unpin',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  `post_id` int(11) DEFAULT '0',
  `post_type` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_inquiry`
--

INSERT INTO `tbl_inquiry` (`id`, `busi_id`, `requester_busi_id`, `inquiry_type_id`, `inquiry_subject`, `inquiry_body`, `product_id`, `attachment1`, `attachment1_size`, `attachment2`, `attachment2_size`, `attachment3`, `attachment3_size`, `attachment4`, `name`, `email`, `phone`, `company`, `attachment4_size`, `unreadmark`, `pin_unpin`, `created_date`, `is_deleted`, `post_id`, `post_type`) VALUES
(1, 1, 18, 1, 'I need a Quotes for the following items', 'Dear Sir<br>\nGreetings<br><br>\n\nPlease provide me with your best price for the item attached in your offer Titled: New Arrival....\n<br><br>\nOR\n<br><br>\nPlease provide me with your best price for the following item:', 1, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, '', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(2, 1, 18, 1, 'I need a Quotes for the following items', 'Dear Sir<br>\r\nGreetings<br><br>\r\n\r\nPlease provide me with your best price for the item attached in your offer Titled: New Arrival....\r\n<br><br>\r\nOR\r\n<br><br>\r\nPlease provide me with your best price for the following item:', 1, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, '', 0, 0, '0000-00-00 00:00:00', 0, 0, 0),
(3, 18, 1, 4, 'sssdsfddss', 'sdf', 1, 'images/business_images/1/offer/akashcom3.jpg', '57592', 'images/business_images/1/offer/akashcom5.jpg', '118313', NULL, '', NULL, NULL, NULL, NULL, NULL, '', 0, 0, '2017-07-09 15:33:44', 0, 0, 0),
(4, 46, 0, 1, 'General Enquiry', '', 0, 'images/user_images//buyerrequest1513610890.481br.jpg', '59534', NULL, '', NULL, '', NULL, '', '', '', '', '', 0, 0, '2017-12-18 20:58:10', 0, 0, 0),
(5, 102, 102, 1, 'General Enquiry', '', 0, NULL, NULL, NULL, '', NULL, '', NULL, 'Peter Cruise', 'any@hotmail.com', '', 'Mega Factory For Sofas Group', '', 1, 0, '2017-12-20 12:32:19', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquiry_type`
--

CREATE TABLE IF NOT EXISTS `tbl_inquiry_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inqury_type` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_inquiry_type`
--

INSERT INTO `tbl_inquiry_type` (`id`, `inqury_type`, `created_date`) VALUES
(1, 'General Inquiry', '2017-06-26 00:00:00'),
(2, 'Product Inquiry', '2017-06-26 00:00:00'),
(3, 'Post inquiry', '2017-06-26 00:00:00'),
(4, 'Offer Reply', '2017-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_international_trade`
--

CREATE TABLE IF NOT EXISTS `tbl_international_trade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_international_trade`
--

INSERT INTO `tbl_international_trade` (`id`, `trade_name`) VALUES
(1, 'FOB'),
(2, 'CFR'),
(3, 'CIF'),
(4, 'DAT'),
(5, 'FAS'),
(6, 'DDP'),
(7, 'DAP'),
(8, 'CIP'),
(9, 'CPT'),
(10, 'EXW'),
(11, 'Express');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE IF NOT EXISTS `tbl_invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `buyer_prefix` varchar(50) DEFAULT NULL,
  `buyer_name` varchar(200) DEFAULT NULL,
  `buyer_companyname` varchar(200) DEFAULT NULL,
  `buyer_address` text NOT NULL,
  `buyer_contry` varchar(200) DEFAULT NULL,
  `buyer_province` varchar(200) DEFAULT NULL,
  `buyer_city` varchar(200) DEFAULT NULL,
  `buyer_street` varchar(600) DEFAULT NULL,
  `buyer_citycode` varchar(200) DEFAULT NULL,
  `buyer_telcode` varchar(200) DEFAULT NULL,
  `buyer_telephone` varchar(50) DEFAULT NULL,
  `buyer_telephone1` varchar(50) DEFAULT NULL,
  `buyer_mobilecode` varchar(50) DEFAULT NULL,
  `buyer_mobile` varchar(50) DEFAULT NULL,
  `buyer_poboxno` varchar(200) NOT NULL,
  `seller_bankaccount` varchar(400) NOT NULL,
  `production_leadtime` text,
  `product_warranty` text NOT NULL,
  `document_certificate` text NOT NULL,
  `obligation` text NOT NULL,
  `declaration` text NOT NULL,
  `currency` varchar(200) DEFAULT NULL,
  `payment_method` varchar(500) DEFAULT NULL,
  `clause` longtext NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`id`, `order_id`, `buyer_prefix`, `buyer_name`, `buyer_companyname`, `buyer_address`, `buyer_contry`, `buyer_province`, `buyer_city`, `buyer_street`, `buyer_citycode`, `buyer_telcode`, `buyer_telephone`, `buyer_telephone1`, `buyer_mobilecode`, `buyer_mobile`, `buyer_poboxno`, `seller_bankaccount`, `production_leadtime`, `product_warranty`, `document_certificate`, `obligation`, `declaration`, `currency`, `payment_method`, `clause`, `created_date`, `is_deleted`) VALUES
(2, 1, 'Miss', 'Riddhi Vithalani', 'poojara logistics', 'sama katha, Morbi, Gujarat, india, P.O.Box 123', NULL, NULL, NULL, NULL, '3453', '+92', '9344353478', '9345345345', '+91', '9273687347', '', 'test123', '45 days from the date of receiving the down payment.\r\n			The first party obligates to produce and devliver the above mentioned products according to the reuired remarks and specifications mentioned above.', '6 months guarantee on all items.\r\n			Terms:\r\n			Changing the non prober items with good one ( shipping charges will be carried by both parties).', 'SASO certificate is required to be stamped ( legalized) by the second party Embassy and Chamber of commerce.\r\n			Invoice, Packing list, Bill of loading and Certificate of origin, ( to be stamped by the second party embassy).', 'Both the parties agreed and obligated that the international courts on any country over the world shall be competent to settle any dispute that may rise between both the parties according to resulting of signature ( agree and press on confirm button) hereto from rights, specifications, conditions, obligations and financial commitments that have been approved from both parties.', 'Both the parties understand and accept that the Trade Station online order acts as an official reference without bearing any responsibilities towards both the parties or any other destination. \n			For more secure, Trade Station advise both the parties to issue an additional internal contract signed and stamped with each party seal.', '', 'T/T,D/P,Credit Card, 30% in advance, plus 70% to be paid against documents, 30% in advance, plus 70% to be paid against documents, 30% in advance, plus 70% to be paid against documents, 30% in advance, plus 70% to be paid against documents', 'iyuyuuniuhiu', '2017-08-18 17:42:56', 0),
(3, 2, 'Mr', 'Zako Daly', 'Speed Growth Group', 'This is the Company Address in english, Guangzhou, Guangdong, China, P.O.Box 510', NULL, NULL, NULL, NULL, '020', '0086', '1234567', '1234568', '0086', '613660638247', '', 'CATEGORY OF SHOPPING\r\nSNEAKER DEAL\r\nUNIHOME\r\nAUDIO VIDEO\r\nHOUSEHOLD\r\nAIR CONDITIONER\r\nKITCHEN', '45 days from the date of receiving the down payment.\r\n			The first party obligates to produce and devliver the above mentioned products according to the reuired remarks and specifications mentioned above.', '6 months guarantee on all items.\r\n			Terms:\r\n			Changing the non prober items with good one ( shipping charges will be carried by both parties).', 'SASO certificate is required to be stamped ( legalized) by the second party Embassy and Chamber of commerce.\r\n			Invoice, Packing list, Bill of loading and Certificate of origin, ( to be stamped by the second party embassy).', 'Both the parties agreed and obligated that the international courts on any country over the world shall be competent to settle any dispute that may rise between both the parties according to resulting of signature ( agree and press on confirm button) hereto from rights, specifications, conditions, obligations and financial commitments that have been approved from both parties.', 'Both the parties understand and accept that the Trade Station online order acts as an official reference without bearing any responsibilities towards both the parties or any other destination. \n			For more secure, Trade Station advise both the parties to issue an additional internal contract signed and stamped with each party seal.', '', 'T/T,Cash, 30% in advance, plus 70% to be paid against documents', '', '2017-10-07 17:13:17', 0),
(4, 4, 'Mr', 'Sadat Seller', 'Mega Factory For Sofas Group', 'This is the Company Address in english, Istanbul, Istanbul, Turkey, P.O.Box 5326', NULL, NULL, NULL, NULL, '022', '005', '123456', '123456', '005', '1234567892', '', 'bank', '45 days from the date of receiving the down payment.\r\n			The first party obligates to produce and devliver the above mentioned products according to the reuired remarks and specifications mentioned above.', '6 months guarantee on all items.\r\n			Terms:\r\n			Changing the non prober items with good one ( shipping charges will be carried by both parties).', 'SASO certificate is required to be stamped ( legalized) by the second party Embassy and Chamber of commerce.\r\n			Invoice, Packing list, Bill of loading and Certificate of origin, ( to be stamped by the second party embassy).', 'Both the parties agreed and obligated that the international courts on any country over the world shall be competent to settle any dispute that may rise between both the parties according to resulting of signature ( agree and press on confirm button) hereto from rights, specifications, conditions, obligations and financial commitments that have been approved from both parties.', 'Both the parties understand and accept that the Trade Station online order acts as an official reference without bearing any responsibilities towards both the parties or any other destination. \n			For more secure, Trade Station advise both the parties to issue an additional internal contract signed and stamped with each party seal.', '', 'T/T, 30% in advance, plus 70% to be paid against documents', 'dfd fdsf', '2018-01-04 12:49:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE IF NOT EXISTS `tbl_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(500) NOT NULL,
  `english_name` varchar(255) DEFAULT NULL,
  `created_busi_id` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `language`, `english_name`, `created_busi_id`, `created_date`) VALUES
(1, '中文', 'Chinese', 0, '2017-09-03 00:00:00'),
(2, 'العربية', 'Arabic', 0, '2017-09-03 00:00:00'),
(3, 'Türk Dili', 'Turkish', 0, NULL),
(4, '日本語', 'Japanese', 0, NULL),
(5, '한국어', 'Korean', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagebusiness`
--

CREATE TABLE IF NOT EXISTS `tbl_languagebusiness` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `personal_info` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not complete,1=complete',
  `compay_info` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not complete,1=complete',
  `main_product` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not complete,1=complete',
  `product_spec_serv` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not complete,1=complete',
  `allow_to_publish` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not allow,1=allow',
  `is_publish` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not publish,1=publish',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_languagebusiness`
--

INSERT INTO `tbl_languagebusiness` (`id`, `busi_id`, `language_id`, `personal_info`, `compay_info`, `main_product`, `product_spec_serv`, `allow_to_publish`, `is_publish`) VALUES
(1, 84, 1, 1, 1, 0, 0, 0, 0),
(2, 84, 2, 1, 1, 1, 0, 0, 0),
(3, 84, 3, 0, 0, 0, 0, 0, 0),
(4, 83, 1, 1, 1, 1, 0, 0, 1),
(5, 87, 2, 1, 1, 1, 0, 0, 1),
(6, 87, 1, 0, 0, 0, 0, 0, 0),
(7, 87, 3, 0, 0, 0, 0, 0, 0),
(8, 84, 0, 0, 0, 0, 0, 0, 0),
(9, 92, 1, 1, 1, 1, 0, 0, 1),
(10, 46, 1, 1, 1, 1, 0, 0, 0),
(11, 92, 2, 1, 0, 0, 0, 0, 0),
(12, 92, 4, 0, 0, 0, 0, 0, 0),
(13, 98, 2, 1, 1, 1, 0, 1, 1),
(14, 98, 1, 0, 0, 0, 0, 0, 0),
(18, 101, 2, 1, 1, 1, 0, 1, 1),
(23, 46, 3, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagecertificate`
--

CREATE TABLE IF NOT EXISTS `tbl_languagecertificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `scope` text NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_languagecertificate`
--

INSERT INTO `tbl_languagecertificate` (`id`, `busi_id`, `language_id`, `scope`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 'wefdf', '2017-07-11 22:09:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagecompanyinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_languagecompanyinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `company_introduction` text NOT NULL,
  `hot_presentation` longtext,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_languagecompanyinfo`
--

INSERT INTO `tbl_languagecompanyinfo` (`id`, `busi_id`, `language_id`, `company_name`, `owner_name`, `company_introduction`, `hot_presentation`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 'qwr', 'qqwe', 'sfdd', NULL, '2017-07-11 22:09:15', 0),
(2, 83, 1, 'Pra Importers Pvt. Ltd.', 'Pradeep Singh', 'Marianne Rowden is President and CEO of AAEI following years of service as the Association’s General Counsel. Marianne came to AAEI after having practiced law with Katten Muchin Rosenman and concentrated in international trade and transportation regulatory compliance. Ms. Rowden has advised importers and exporters on a wide range of trade compliance issues relating to the entire global supply chain, from sourcing goods and trade security to customs entry and delivery of goods to customers. Ms. Rowden has also represented many companies engaged in international trade before the principal U.S. federal agencies regulating trade, including Customs and Border Protection, Department of Commerce, Office of Foreign Assets Control, and International Trade Commissions. In addition to import matters, she has advised companies on export compliance issues such as licensing requirements of the Export Administration Regulations, Foreign Corrupt Practices Act, embargoes, and has conducted due diligence reviews of mergers and acquisitions involving foreign corporations. Because of Ms. Rowden’s extensive experience in transporation law, she has also advised many companies on joining the Customs-Trade Partnership Against Terrorism (C-TPAT) and conducted self-assessments of global supply chain security programs of multi-national corporations. She also advises shippers, carriers, and logistics providers concerning interstate and international transportation matters. Ms. Rowden serves as an Adjunct Professor at The John Marshall School of Law and has lectured on customs, international trade and transportation topics for AAEI, the Council of Logistics Management, the Transportation Law Association, and the Transportation Law Institute.', 'Marianne Rowden is President and CEO of AAEI following years of service as the Association’s General Counsel. Marianne came to AAEI after having practiced law with Katten Muchin Rosenman and concentrated in international trade and transportation regulatory compliance.\r\n', '2017-10-09 23:00:49', 0),
(3, 87, 2, 'شبلي', 'سيل', 'نممت منمت متنم', 'سيل', '2017-10-10 21:27:39', 0),
(4, 84, 2, 'يبليبل ', '', '', '', '2017-10-11 19:49:28', 0),
(5, 92, 1, 'dfhdf', 'dfhdf', 'dfhh', 'fdhfd', '2017-10-12 22:52:39', 0),
(6, 46, 1, '', '', '', '', '2017-10-13 23:26:09', 0),
(7, 98, 2, 'gg', '', '', '', '2017-10-20 11:13:00', 0),
(8, 101, 2, 'شركة بوكا', 'حازم زكي', 'اي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيفاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءك الشركة جاءك', 'اي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءكاي شئ في تعربيف الشركة جاءك', '2017-11-01 15:12:37', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagefactorydetail`
--

CREATE TABLE IF NOT EXISTS `tbl_languagefactorydetail` (
  `id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `country` varchar(200) NOT NULL,
  `province` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `street` varchar(400) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_languagefactorydetail`
--

INSERT INTO `tbl_languagefactorydetail` (`id`, `busi_id`, `language_id`, `country`, `province`, `city`, `street`, `created_date`, `is_deleted`) VALUES
(0, 1, 1, '', 'afasdf', 'sdaf', 'asdf', '2017-07-11 22:09:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagefieldtranslatation`
--

CREATE TABLE IF NOT EXISTS `tbl_languagefieldtranslatation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `language_name` varchar(500) DEFAULT NULL,
  `contact_address` varchar(500) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `positiontitle` varchar(300) DEFAULT NULL,
  `company_name` varchar(500) DEFAULT NULL,
  `owner_name` varchar(300) DEFAULT NULL,
  `company_introduction` varchar(500) DEFAULT NULL,
  `hot_presentation` varchar(128) DEFAULT NULL,
  `factory_address` varchar(500) DEFAULT NULL,
  `nearest_port` varchar(500) DEFAULT NULL,
  `portwith` varchar(500) DEFAULT NULL,
  `scope_of_business` varchar(500) DEFAULT NULL,
  `main_product` varchar(500) DEFAULT NULL,
  `sub_product` varchar(500) DEFAULT NULL,
  `product_name` varchar(500) DEFAULT NULL,
  `about_product` varchar(500) DEFAULT NULL,
  `product_description` varchar(500) DEFAULT NULL,
  `product_specification` varchar(500) DEFAULT NULL,
  `service_name` varchar(300) DEFAULT NULL,
  `service_description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_languagefieldtranslatation`
--

INSERT INTO `tbl_languagefieldtranslatation` (`id`, `language_id`, `language_name`, `contact_address`, `name`, `positiontitle`, `company_name`, `owner_name`, `company_introduction`, `hot_presentation`, `factory_address`, `nearest_port`, `portwith`, `scope_of_business`, `main_product`, `sub_product`, `product_name`, `about_product`, `product_description`, `product_specification`, `service_name`, `service_description`) VALUES
(1, 1, '中文', '联系地址', '名称', '位置/标题', '公司名', '所有者名称', '公司介绍', '热展示', '联系地址', '最近的港口', '和', '业务范围', '主要产品', '子产品', '产品名称', '关于本产品', '产品描述', '产品规格', '名称', '产品描述'),
(2, 2, 'العربية', 'عنوان الإتصال', 'اسم', 'المسمى الوظيفي', 'اسم الشركة', 'اسم المالك', 'تعريف عن الشركة', 'عرض ساخن', 'عنوان المصنع', 'أقرب ميناء / منافذ', 'مع', 'مجال العمل', 'المنتجات الرئيسية', 'المنتجات الفرعية', 'اسم المنتج', 'حول هذا المنتج', 'وصف المنتج', 'مواصفات المنتج', 'اسم الخدمة', 'وصف الخدمة'),
(3, 3, 'Türk Dili', '\r\nİletişim Adresi', 'isim', 'Görev Ünvanı', 'Şirket Adı', 'Sahibi Adı', 'şirket tanıtımı', 'Sıcak Sunum', 'Fabrika Adresi', 'Limana / Limanlara Yakın', '\r\nile', '\r\nİşin Kapsamı', 'Ana Ürünler', 'Alt Ürünler', '\r\nÜrün adı', 'Bu Ürün Hakkında', '\r\nÜrün Açıklaması', '\r\nÜrün Özellikleri', '\r\nhizmet adı', '\r\nServis açıklaması'),
(4, 4, '日本語', '連絡先住所', '名', 'ポジションタイトル', '会社名', '所有者名', '会社概要', 'ホットプレゼンテーション', '工場アドレス', 'ニア・ポート/ポート', '〜と', '事業の範囲', '主な製品', 'サブ製品', '商品名', 'この製品について', '製品説明', '製品仕様', 'サービス名', 'サービスの説明'),
(5, 5, '한국어', '연락처', '이름', '직책 / 직책', '회사 이름', '소유자 이름', '회사 소개', '핫 프레 젠 테이션', '공장 주소', '니어 포트 / 포트', '와', '사업 범위', '주요 상품', '하위 제품', '상품명', '이 제품 정보', '상품 설명', '제품 사양', '서비스 이름', '서비스 설명');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagemainproduct`
--

CREATE TABLE IF NOT EXISTS `tbl_languagemainproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `main_product_id` int(11) NOT NULL,
  `mainproduct` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `tbl_languagemainproduct`
--

INSERT INTO `tbl_languagemainproduct` (`id`, `busi_id`, `language_id`, `main_product_id`, `mainproduct`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 1, 'qq', '2017-07-12 15:43:24', 0),
(2, 1, 1, 2, 'qq', '2017-07-12 15:43:24', 0),
(3, 1, 1, 4, 'q', '2017-07-12 15:43:24', 0),
(4, 1, 1, 3, 'qq', '2017-07-12 15:43:24', 0),
(5, 1, 1, 5, 'q', '2017-07-12 15:43:24', 0),
(6, 1, 1, 6, 'q', '2017-07-12 15:43:24', 0),
(7, 1, 1, 7, 'q', '2017-07-12 15:43:24', 0),
(8, 1, 1, 8, 'q', '2017-07-12 15:43:24', 0),
(9, 1, 1, 9, 'q', '2017-07-12 15:43:24', 0),
(10, 1, 1, 10, 'q', '2017-07-12 15:43:24', 0),
(11, 83, 1, 94, 'Laptops', '2017-10-09 23:00:15', 0),
(12, 83, 1, 95, 'Laptops', '2017-10-09 23:00:15', 0),
(13, 87, 2, 115, 'xfc', '2017-10-10 21:25:36', 0),
(14, 87, 2, 116, 'dffd', '2017-10-10 21:25:36', 0),
(15, 87, 2, 117, 'dff', '2017-10-10 21:25:36', 0),
(16, 87, 2, 118, 'fdfd', '2017-10-10 21:25:36', 0),
(17, 87, 2, 119, '', '2017-10-10 21:25:36', 0),
(18, 87, 2, 120, '', '2017-10-10 21:25:36', 0),
(19, 87, 2, 121, '', '2017-10-10 21:25:36', 0),
(20, 87, 2, 122, '', '2017-10-10 21:25:36', 0),
(21, 87, 2, 123, '', '2017-10-10 21:25:36', 0),
(22, 87, 2, 124, '', '2017-10-10 21:25:36', 0),
(23, 87, 2, 125, '', '2017-10-10 21:25:36', 0),
(24, 87, 2, 126, '', '2017-10-10 21:25:36', 0),
(25, 87, 2, 127, '', '2017-10-10 21:25:36', 0),
(26, 87, 2, 128, '', '2017-10-10 21:25:36', 0),
(27, 84, 2, 98, 'ييل', '2017-10-11 19:49:44', 0),
(28, 84, 2, 99, 'بلابا', '2017-10-11 19:49:44', 0),
(29, 84, 2, 100, 'بيابا', '2017-10-11 19:49:44', 0),
(30, 84, 2, 103, 'يباب', '2017-10-11 19:49:44', 0),
(31, 84, 2, 104, '', '2017-10-11 19:49:44', 0),
(32, 84, 2, 105, '', '2017-10-11 19:49:44', 0),
(33, 84, 2, 106, '', '2017-10-11 19:49:44', 0),
(34, 84, 2, 107, '', '2017-10-11 19:49:44', 0),
(35, 84, 2, 108, '', '2017-10-11 19:49:44', 0),
(36, 84, 2, 109, '', '2017-10-11 19:49:44', 0),
(37, 84, 2, 110, '', '2017-10-11 19:49:44', 0),
(38, 84, 2, 111, '', '2017-10-11 19:49:44', 0),
(39, 84, 2, 112, '', '2017-10-11 19:49:44', 0),
(40, 84, 2, 113, '', '2017-10-11 19:49:44', 0),
(41, 84, 2, 114, '', '2017-10-11 19:49:44', 0),
(42, 92, 1, 129, 'df', '2017-10-12 22:51:37', 0),
(43, 92, 1, 130, 'df', '2017-10-12 22:51:37', 0),
(44, 92, 1, 131, '', '2017-10-12 22:51:37', 0),
(45, 92, 1, 132, '', '2017-10-12 22:51:37', 0),
(46, 46, 1, 1, '', '2017-10-13 23:26:12', 0),
(47, 46, 1, 2, '', '2017-10-13 23:26:12', 0),
(48, 46, 1, 3, '', '2017-10-13 23:26:12', 0),
(49, 46, 1, 4, '', '2017-10-13 23:26:12', 0),
(50, 46, 1, 5, '', '2017-10-13 23:26:12', 0),
(51, 46, 1, 6, '', '2017-10-13 23:26:12', 0),
(52, 46, 1, 7, '', '2017-10-13 23:26:12', 0),
(53, 46, 1, 8, '', '2017-10-13 23:26:12', 0),
(54, 46, 1, 9, '', '2017-10-13 23:26:12', 0),
(55, 46, 1, 10, '', '2017-10-13 23:26:12', 0),
(56, 98, 2, 158, '', '2017-10-20 11:12:45', 0),
(57, 98, 2, 159, '', '2017-10-20 11:12:45', 0),
(58, 98, 2, 160, '', '2017-10-20 11:12:45', 0),
(59, 98, 2, 161, '', '2017-10-20 11:12:45', 0),
(60, 98, 2, 162, '', '2017-10-20 11:12:45', 0),
(61, 98, 2, 163, '', '2017-10-20 11:12:45', 0),
(62, 98, 2, 164, '', '2017-10-20 11:12:45', 0),
(63, 98, 2, 165, '', '2017-10-20 11:12:45', 0),
(64, 98, 2, 166, '', '2017-10-20 11:12:45', 0),
(65, 98, 2, 167, '', '2017-10-20 11:12:45', 0),
(66, 98, 2, 168, '', '2017-10-20 11:12:45', 0),
(67, 98, 2, 169, '', '2017-10-20 11:12:45', 0),
(68, 98, 2, 170, '', '2017-10-20 11:12:45', 0),
(69, 98, 2, 171, '', '2017-10-20 11:12:45', 0),
(70, 101, 2, 176, 'مكائن', '2017-11-01 15:13:33', 0),
(71, 101, 2, 177, 'ولاعات', '2017-11-01 15:13:33', 0),
(72, 101, 2, 178, 'كمبيوتر', '2017-11-01 15:13:33', 0),
(73, 101, 2, 179, 'كيبورد', '2017-11-01 15:13:33', 0),
(74, 101, 2, 180, 'اي شئ', '2017-11-01 15:13:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagepersonalinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_languagepersonalinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `language_id` int(11) NOT NULL,
  `province` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `street` varchar(400) NOT NULL,
  `name_prefix` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_languagepersonalinfo`
--

INSERT INTO `tbl_languagepersonalinfo` (`id`, `busi_id`, `country`, `language_id`, `province`, `city`, `street`, `name_prefix`, `name`, `position`, `created_date`, `is_deleted`) VALUES
(1, 1, 'asd', 1, 'asdf', 'sadf', 'sadf', 'Mr', 'safd', 'sadf', '2017-07-10 20:25:50', 0),
(2, 83, 'India', 1, 'Maharashtra', 'Pune', 'Dhanori', 'Mr', 'Pradeep Singh', 'CTO', '2017-10-09 23:00:44', 0),
(3, 87, 'ببي ', 2, 'سيب', 'سيب', 'يسب', 'Mr', 'سيب', 'سي', '2017-10-10 21:27:52', 0),
(4, 84, 'جمهورية مصر العربية', 2, '', '', '', 'Mr', 'حازم محمد زكي', '', '2017-10-11 19:47:37', 0),
(5, 92, 'vccxv', 2, '', '', '', 'Mr', '', '', '2017-10-14 21:31:36', 0),
(6, 46, '', 1, '', '', '', 'Mr', '', '', '2017-10-13 23:26:05', 0),
(7, 98, 'gg', 2, '', '', '', 'Mr', '', '', '2017-10-20 11:12:56', 0),
(8, 101, 'مصر', 2, 'الاسكندرية', 'الاسكندرية', 'عنوان الشركة باللغة العربية', 'Mr', 'لوكا', 'مدير عام', '2017-11-01 15:09:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languageproduct`
--

CREATE TABLE IF NOT EXISTS `tbl_languageproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `about_product` text NOT NULL,
  `product_description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_languageproduct`
--

INSERT INTO `tbl_languageproduct` (`id`, `busi_id`, `language_id`, `product_id`, `product_name`, `about_product`, `product_description`, `created_date`, `is_deleted`) VALUES
(2, 1, 1, 1, '', '', '', '2017-07-13 17:04:28', 0),
(3, 1, 1, 2, 'dasd', 'asdasdf', 'dsfsd', '2017-07-13 17:17:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languageproductspecification`
--

CREATE TABLE IF NOT EXISTS `tbl_languageproductspecification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `spec_name` varchar(200) NOT NULL,
  `spec_value` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_languageproductspecification`
--

INSERT INTO `tbl_languageproductspecification` (`id`, `busi_id`, `language_id`, `product_id`, `spec_name`, `spec_value`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 1, '', '', '2017-07-13 17:04:28', 0),
(2, 1, 1, 1, '', '', '2017-07-13 17:04:28', 0),
(3, 1, 1, 2, 'as', 'sdf', '2017-07-13 17:17:48', 0),
(4, 1, 1, 2, 'fd', 'sd', '2017-07-13 17:17:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languageservice`
--

CREATE TABLE IF NOT EXISTS `tbl_languageservice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_name` varchar(300) NOT NULL,
  `service_description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_languageservice`
--

INSERT INTO `tbl_languageservice` (`id`, `busi_id`, `language_id`, `service_id`, `service_name`, `service_description`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 1, 'asd', 'adasd', '2017-07-23 16:47:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagesubproduct`
--

CREATE TABLE IF NOT EXISTS `tbl_languagesubproduct` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `main_product_id` int(11) NOT NULL,
  `sub_product_id` int(11) NOT NULL,
  `sub_product` varchar(300) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_languagesubproduct`
--

INSERT INTO `tbl_languagesubproduct` (`id`, `busi_id`, `language_id`, `main_product_id`, `sub_product_id`, `sub_product`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 1, 2, 'q1', '2017-07-12 17:40:45', 0),
(2, 1, 1, 1, 6, 'q2', '2017-07-12 17:40:45', 0),
(3, 1, 1, 2, 1, 'q3', '2017-07-12 17:40:45', 0),
(4, 1, 1, 3, 5, 'q4', '2017-07-12 17:40:45', 0),
(5, 1, 1, 4, 3, 'q5', '2017-07-12 17:40:45', 0),
(6, 46, 1, 1, 2, '', '2017-10-13 23:26:12', 0),
(7, 46, 1, 1, 6, '', '2017-10-13 23:26:12', 0),
(8, 46, 1, 2, 1, '', '2017-10-13 23:26:12', 0),
(9, 46, 1, 3, 5, '', '2017-10-13 23:26:12', 0),
(10, 46, 1, 4, 3, '', '2017-10-13 23:26:12', 0),
(11, 46, 1, 9, 8, '', '2017-10-13 23:26:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_languagetradeinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_languagetradeinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `port1` varchar(100) NOT NULL,
  `port2` varchar(100) NOT NULL,
  `port3` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_languagetradeinfo`
--

INSERT INTO `tbl_languagetradeinfo` (`id`, `busi_id`, `language_id`, `port1`, `port2`, `port3`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 'q213', '1243', '124w', '2017-07-11 22:09:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mainsubproductvedio`
--

CREATE TABLE IF NOT EXISTS `tbl_mainsubproductvedio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `mainproduct_id` int(11) NOT NULL DEFAULT '0',
  `subproduct_id` int(11) NOT NULL DEFAULT '0',
  `vedio_file` varchar(500) NOT NULL,
  `vedio_size` varchar(200) NOT NULL,
  `vedio_title` varchar(500) NOT NULL,
  `vedio_description` varchar(1000) NOT NULL,
  `start_price` double NOT NULL DEFAULT '0',
  `end_price` double NOT NULL DEFAULT '0',
  `video_likes` int(11) DEFAULT '0',
  `visit` int(11) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not delete,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_mainsubproductvedio`
--

INSERT INTO `tbl_mainsubproductvedio` (`id`, `busi_id`, `mainproduct_id`, `subproduct_id`, `vedio_file`, `vedio_size`, `vedio_title`, `vedio_description`, `start_price`, `end_price`, `video_likes`, `visit`, `shares`, `created_date`, `is_deleted`) VALUES
(1, 46, 0, 8, 'images/business_images/46/Myvedio/1508785762.4029vedio.mp4', '7.48 MB', '4 GB RAM', 'Kingston 4 GB RAM for Macbook. Its highly compatible.', 3000, 4000, 4, 4, 0, '2017-10-24 00:39:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_main_product`
--

CREATE TABLE IF NOT EXISTS `tbl_main_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subcat_id` int(11) NOT NULL,
  `sortorder` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=196 ;

--
-- Dumping data for table `tbl_main_product`
--

INSERT INTO `tbl_main_product` (`id`, `busi_id`, `name`, `subcat_id`, `sortorder`, `status`) VALUES
(1, 46, 'Motherboard New', 6, 1, 1),
(2, 46, 'Monitor', 4, 2, 1),
(3, 46, 'Laptops', 13, 3, 1),
(4, 46, 'Cabinets', 2, 4, 1),
(5, 46, 'Server', 11, 5, 1),
(6, 46, 'Mobile Accesories', 17, 6, 1),
(7, 46, 'Notebooks', 13, 7, 1),
(8, 46, 'Drives', 18, 8, 1),
(9, 46, 'Memory Cards', 19, 9, 1),
(10, 46, 'Computer Accessories', 3, 10, 1),
(11, 48, 'Foot Wear', 21, 1, 1),
(12, 48, 'Top Wear', 21, 2, 1),
(13, 48, 'Bottom Wear', 21, 3, 1),
(14, 48, 'Casual Wear', 21, 4, 1),
(15, 48, 'Sports Wear', 21, 5, 1),
(16, 48, 'Foot Wear', 22, 6, 1),
(17, 48, 'Top Wear', 22, 7, 1),
(18, 48, 'Bottom Wear', 22, 8, 1),
(19, 48, 'Casual Wear', 22, 9, 1),
(20, 48, 'Sports Wear', 22, 10, 1),
(21, 42, 'Mainboard', 6, 1, 1),
(22, 42, 'Mouse', 9, 2, 0),
(23, 42, 'Mouse Pads', 9, 3, 1),
(24, 51, 'Lady Fashion', 22, 1, 1),
(25, 51, 'Men Fashion', 21, 2, 1),
(26, 51, 'Baby Fashion', 22, 3, 1),
(27, 51, 'Kids Fashion', 21, 4, 1),
(28, 51, 'Infant Fashion', 21, 5, 1),
(29, 51, 'Grand Ma Fashion', 22, 6, 1),
(30, 51, 'Grand Ba', 22, 7, 1),
(31, 51, 'Any', 21, 8, 1),
(32, 51, 'Any', 22, 9, 1),
(33, 51, 'Uncle Fashion', 21, 10, 0),
(34, 51, 'Anti Fashion', 21, 0, 1),
(35, 52, 'Shoes', 21, 1, 1),
(36, 52, 'Belts', 22, 2, 1),
(37, 52, 'Sandalss', 21, 3, 1),
(38, 52, 'Kids Footwear', 22, 4, 1),
(39, 52, 'Infant Footwear', 22, 5, 1),
(40, 52, 'Slippers', 22, 6, 1),
(41, 52, 'Wallets', 21, 7, 1),
(42, 52, 'Laces', 21, 8, 1),
(43, 52, 'Any', 22, 9, 1),
(44, 52, 'Any', 21, 10, 1),
(45, 52, 'Eleventh', 21, 0, 0),
(46, 55, 'Shoes', 21, 1, 1),
(47, 55, 'Sandals', 22, 2, 1),
(48, 55, 'Slippers', 21, 3, 1),
(49, 55, 'Footwea', 22, 4, 1),
(50, 55, 'Footwea', 21, 5, 1),
(51, 55, 'Belds', 22, 6, 1),
(52, 55, 'Ties', 21, 7, 1),
(53, 55, 'Shirts', 21, 8, 1),
(54, 55, 'T-Shirts', 21, 9, 0),
(55, 55, 'Other', 21, 10, 1),
(56, 55, 'Shoe', 21, 1, 1),
(57, 55, 'Sandals', 22, 2, 1),
(58, 55, 'Slippers', 21, 3, 1),
(59, 55, 'Footwea', 22, 4, 1),
(60, 55, 'Footwea', 21, 5, 1),
(61, 55, 'Belds', 22, 6, 1),
(62, 55, 'Ties', 21, 7, 1),
(63, 55, 'Shirts', 21, 8, 1),
(64, 55, 'T-Shirts', 21, 9, 1),
(65, 55, 'Other', 21, 10, 0),
(66, 61, 'Men Shoes', 21, 1, 0),
(67, 61, 'Lady Shoes', 22, 3, 1),
(68, 61, 'Baby Footwear', 21, 4, 1),
(69, 61, 'Men Shoes', 22, 2, 1),
(70, 61, 'Men Shoes', 21, 4, 0),
(71, 64, 'Eyeshadow', 21, 1, 1),
(72, 64, 'Lip sticks', 22, 2, 1),
(73, 64, 'Eyeshadowa', 22, 1, 1),
(74, 64, 'Lip sticks', 22, 2, 1),
(75, 64, 'One More', 22, 5, 0),
(76, 64, 'Shoes', 21, 5, 0),
(77, 65, 'fhdfhfdh', 22, 1, 1),
(78, 65, 'fhdfhfdh', 22, 1, 1),
(79, 71, 'Shoes', 21, 1, 1),
(80, 71, 'Belts ', 21, 2, 1),
(81, 71, 'Wallets', 21, 3, 1),
(82, 71, 'Belt Bukkle', 22, 4, 1),
(83, 71, 'hihi ', 22, 5, 0),
(84, 81, 'Shoe', 22, 1, 0),
(85, 81, 'Laces', 22, 2, 1),
(86, 81, 'Sandals', 22, 3, 1),
(87, 81, 'Furniture', 2, 4, 1),
(88, 81, 'CPU', 1, 4, 1),
(89, 81, 'Garments', 21, 5, 1),
(90, 81, 'Long Dress', 22, 6, 1),
(91, 81, 'Skirts', 22, 7, 1),
(92, 81, 'Monitor', 4, 8, 1),
(93, 81, 'Mather Boards', 6, 9, 1),
(94, 83, 'Laptops', 5, 1, 1),
(95, 83, 'Motherboard', 6, 2, 1),
(96, 82, 'Shoes', 21, 1, 1),
(97, 82, 'Sandals', 22, 2, 1),
(98, 84, 'Glasess', 21, 1, 1),
(99, 84, 'Optics', 22, 2, 1),
(100, 84, 'Optics Frame', 22, 3, 1),
(101, 84, 'Optics Pad', 2, 4, 0),
(102, 84, 'jhggj', 21, 4, 0),
(103, 84, '123', 21, 4, 1),
(104, 84, '1234', 21, 5, 1),
(105, 84, 'cbc', 2, 6, 1),
(106, 84, 'kjhjh', 22, 7, 1),
(107, 84, 'jhkjhhjkhj', 22, 8, 1),
(108, 84, 'this may take more', 22, 9, 1),
(109, 84, 'yes may take more and more', 1, 10, 1),
(110, 84, 'gdgdg', 3, 11, 1),
(111, 84, 'ssss', 3, 12, 1),
(112, 84, 'ffff', 2, 13, 1),
(113, 84, 'fffffffffff', 3, 14, 1),
(114, 84, 'ggf', 1, 15, 1),
(115, 87, 'Sandals', 21, 1, 1),
(116, 87, 'Slippers', 21, 2, 1),
(117, 87, 'Boots', 2, 3, 1),
(118, 87, 'Shoes', 21, 4, 1),
(119, 87, 'Baby Shoes', 22, 5, 1),
(120, 87, 'Footware', 22, 6, 1),
(121, 87, 'Socks', 21, 7, 1),
(122, 87, 'Lady Socks', 22, 8, 1),
(123, 87, 'Baby Socks', 21, 9, 1),
(124, 87, 'Children Footware', 21, 10, 1),
(125, 87, 'Mom Footware', 21, 11, 1),
(126, 87, 'Mom & Dad Footware', 2, 12, 1),
(127, 87, 'Anti Footware', 21, 13, 1),
(128, 87, 'More By Us', 21, 14, 1),
(129, 92, 'Sandal', 21, 1, 1),
(130, 92, 'Shoes', 22, 2, 1),
(131, 92, 'Slippers', 22, 3, 1),
(132, 92, 'jkghsdjkf', 22, 4, 1),
(133, 93, 'Sheos', 21, 2, 1),
(134, 93, 'Sandals', 22, 2, 1),
(135, 93, 'Slippers', 2, 1, 1),
(136, 93, 'any', 0, 2, 1),
(137, 93, 'Footware', 21, 2, 0),
(138, 93, 'four', 2, 2, 1),
(139, 93, 'other', 22, 2, 1),
(140, 93, 'More', 22, 2, 1),
(141, 93, 'Six', 21, 2, 1),
(142, 93, 'much them too', 0, 2, 1),
(143, 93, 'Match more', 22, 2, 1),
(144, 93, 'More & Again', 22, 2, 1),
(145, 93, 'The last', 0, 2, 1),
(146, 93, 'Last', 22, 2, 1),
(147, 94, 'hi', 21, 1, 1),
(148, 94, 'hello', 21, 2, 1),
(149, 94, 'yeah', 22, 3, 1),
(150, 94, 'empty', 22, 4, 1),
(151, 97, 'Shoes', 21, 1, 1),
(152, 97, 'Sandals', 21, 2, 1),
(153, 97, 'Slippers', 22, 3, 1),
(154, 97, 'Footware', 21, 4, 1),
(155, 97, 'Boots', 21, 5, 1),
(156, 92, 'cxcxc', 21, 5, 1),
(157, 92, 'fsdf', 21, 6, 1),
(158, 98, 'Sandal', 22, 1, 1),
(159, 98, 'Shoes', 21, 2, 1),
(160, 98, 'Baby Footware', 22, 3, 1),
(161, 98, 'Kids Shoes', 21, 4, 1),
(162, 98, 'Boots', 21, 5, 1),
(163, 98, 'Casual Boots', 21, 6, 1),
(164, 98, 'Sport Shoes', 22, 7, 1),
(165, 98, 'Classic Shoes', 21, 8, 1),
(166, 98, 'Night Boots', 21, 9, 1),
(167, 98, 'Outdoors Footware', 21, 10, 1),
(168, 98, 'indoors Footware', 21, 11, 1),
(169, 98, 'PVC shoes', 2, 12, 1),
(170, 98, 'Many Kind', 21, 13, 1),
(171, 98, 'Egyptian Leather Shoes', 21, 14, 1),
(172, 100, 'Shoes', 21, 1, 1),
(173, 100, 'Sandals', 21, 2, 1),
(174, 100, 'Slipper', 22, 3, 1),
(175, 100, 'Footware', 22, 4, 1),
(176, 101, 'Machines', 21, 1, 1),
(177, 101, 'Lighters', 22, 2, 1),
(178, 101, 'Computer', 9, 3, 1),
(179, 101, 'Keyboard', 22, 4, 1),
(180, 101, 'any', 22, 5, 1),
(181, 101, 'Morw', 2, 6, 0),
(182, 101, 'other', 2, 6, 1),
(183, 102, 'Indoors Wooden Funtiture', 22, 1, 1),
(184, 102, 'Beds', 21, 3, 1),
(185, 102, 'Garden', 22, 2, 1),
(186, 102, 'Any', 22, 4, 1),
(187, 102, 'Chairs', 21, 5, 1),
(188, 101, 'test', 21, 7, 1),
(189, 101, 'New test keep going', 2, 8, 1),
(190, 101, 'The no9 product', 9, 9, 1),
(191, 101, 'Card Readers', 12, 10, 1),
(192, 101, 'other products come soon', 12, 11, 1),
(193, 101, 'Lady Fashion', 22, 12, 1),
(194, 101, 'More product', 1, 13, 1),
(195, 101, 'Any thing', 21, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_markets`
--

CREATE TABLE IF NOT EXISTS `tbl_markets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_markets`
--

INSERT INTO `tbl_markets` (`id`, `name`) VALUES
(1, 'North America'),
(2, 'South America'),
(3, 'Estern Europe'),
(4, 'Southeast Asia'),
(5, 'Africa'),
(6, 'Oceania'),
(7, 'Middle East'),
(8, 'Eastern Asia'),
(9, 'Western Europe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_more_certificates`
--

CREATE TABLE IF NOT EXISTS `tbl_more_certificates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `certificate_name` varchar(255) DEFAULT NULL,
  `certificate_no` varchar(128) DEFAULT NULL,
  `certificate_type` int(11) DEFAULT NULL,
  `certificate_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_more_certificates`
--

INSERT INTO `tbl_more_certificates` (`id`, `busi_id`, `certificate_name`, `certificate_no`, `certificate_type`, `certificate_url`) VALUES
(21, 38, 'Domasite', '726376234', 1, 'images/user_images/81/certificate/1499093414.25certificate3.jpeg'),
(22, 39, 'National', 'JKJ77878', 2, 'images/user_images/82/certificate/1499102047.2certificate5.jpeg'),
(23, 40, 'Bonifide', 'HK853454', 2, 'images/user_images/83/certificate/1499138159.23certificate5.jpeg'),
(24, 41, 'Domastic', 'IUUE2343', 2, 'images/user_images/84/certificate/1499142678.37certificate3.jpeg'),
(25, 46, 'Test', 'FGH76453256', 2, 'images/user_images/94/certificate/1499843883.99comp1.jpg'),
(26, 48, 'dfdf', 'dsfd', 1, 'images/user_images/96/certificate/1500106733.14Jellyfish.jpg'),
(27, 48, 'dfdf', 'dsfd', 2, ''),
(28, 48, 'dfdf', 'dsfd', 2, ''),
(29, 52, 'ISO2001', 'HO-25501-5005', 1, 'images/user_images/101/certificate/1502894982.83ISO-9001-Certificationok.jpg'),
(30, 52, 'IOS-2003', 'XZ123=333', 1, 'images/user_images/101/certificate/1502894982.83ISO 2000ok.jpg'),
(31, 54, 'ISO2001', 'fg21505505541', 1, 'images/user_images/103/certificate/1503233000.43iso_9001_certification.gif'),
(32, 54, 'CE 2001', 'DD11231', 2, 'images/user_images/103/certificate/1503233000.43iso_9001_certification.gif'),
(33, 56, 'ISO2001', 'HG5633215', 1, 'images/user_images/105/certificate/1504367669.15iso_9001_certification.gif'),
(34, 56, 'Honor Certificate', 'H2253156', 5, 'images/user_images/105/certificate/1504367669.15Certificate of Honor2004.jpg'),
(35, 60, 'National', 'JKJ77878', 2, 'images/user_images/110/certificate/1504444577.92certificate5.jpeg'),
(36, 61, 'CE', '70210', 2, 'images/user_images/111/certificate/1504626105.67iso_9001_certification.gif'),
(37, 67, 'ISO2001', 'fg21505505541', 1, 'images/user_images/118/certificate/1505445208.99India-CPGI-ISO-9001-certificateok.jpg'),
(38, 72, 'ISO2001', '15244', 1, ''),
(39, 75, 'sdfg', 'sdfg', 2, 'images/user_images/141/certificate/1506441068.73certificate4.jpeg'),
(40, 85, 'ISO2002x', 'Io111231x', 1, 'images/user_images/158/certificate/1507472412.9021ISO-9001-Certification.jpg'),
(41, 85, 'sdsd', 'dsdsd', 2, 'images/business_images/85/certificate/1507473304.0537morecertificate.gif'),
(42, 86, 'ISO2002', '02455665', 1, 'images/user_images/161/certificate/1507554492.0045ISO-9001-Certification.jpg'),
(43, 86, 'ISO2001', 'ghf12545', 1, 'images/user_images/161/certificate/1507554492.0046Certificate of Honor2004.jpg'),
(44, 90, 'ISO2001', 'hj250554', 1, 'images/user_images/167/certificate/1507756491.3076ISO-9001-Certificationok.jpg'),
(45, 90, 'ISO2002', '145252', 3, 'images/user_images/167/certificate/1507756491.3076iso_9001_certification.gif'),
(46, 90, 'gdfgd', 'gdfgdf', 5, 'images/business_images/90/certificate/1507848952.6023morecertificate.jpg'),
(47, 93, 'ISO2002', 'hl-522-963', 1, 'images/user_images/173/certificate/1507853193.893iso_9001_certification.gif'),
(48, 97, 'ISO2002', 'fsdjkfjk 122454', 1, 'images/user_images/177/certificate/1507993617.4886iso_9001_certification.gif'),
(49, 99, 'ISO2001', 'fg21505505541', 1, 'images/user_images/183/certificate/1508486540.7534ISO-9001-CERTIFICATE.jpg'),
(50, 100, 'ISO2001', 'fg21505505541', 1, 'images/user_images/185/certificate/1508566980.6554ISO-9001-Certificationok.jpg'),
(51, 102, 'ISO2002', 'ti1253-5566-', 1, 'images/user_images/190/certificate/1509613579.3552ISO-9001-Certification.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mycart`
--

CREATE TABLE IF NOT EXISTS `tbl_mycart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `product_item_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_mycart`
--

INSERT INTO `tbl_mycart` (`id`, `busi_id`, `product_item_id`, `created_date`, `is_deleted`) VALUES
(1, 84, 1, '2017-10-07 17:11:32', 0),
(2, 84, 2, '2017-10-07 17:12:31', 0),
(3, 101, 17, '2017-11-10 05:08:37', 1),
(4, 101, 16, '2017-11-10 05:08:42', 0),
(5, 101, 15, '2017-11-10 05:08:46', 0),
(6, 101, 14, '2017-11-10 05:08:50', 0),
(7, 101, 1, '2017-11-10 05:08:56', 0),
(8, 102, 3, '2017-12-19 21:07:53', 0),
(9, 102, 3, '2017-12-19 21:07:59', 0),
(10, 102, 3, '2017-12-19 21:09:36', 0),
(11, 102, 14, '2018-01-04 12:40:34', 0),
(12, 102, 4, '2018-01-04 12:40:34', 0),
(13, 102, 14, '2018-01-04 12:41:45', 0),
(14, 102, 15, '2018-01-04 12:41:45', 0),
(15, 104, 14, '2018-01-10 20:21:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myfavorite`
--

CREATE TABLE IF NOT EXISTS `tbl_myfavorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `favorite_id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=seller,2=shipper,3=buyer,4=product,5=video,6=R3D pro,7=catalouge,8=ads,9=posts',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `tbl_myfavorite`
--

INSERT INTO `tbl_myfavorite` (`id`, `busi_id`, `favorite_id`, `type`, `created_date`, `is_deleted`) VALUES
(1, 48, 48, 1, '2017-07-16 14:11:41', 0),
(2, 46, 1, 5, '2017-08-05 00:07:18', 0),
(3, 41, 1, 5, '2017-08-06 14:36:53', 0),
(4, 41, 3, 1, '2017-08-11 16:06:34', 0),
(5, 56, 54, 2, '2017-09-03 00:41:07', 0),
(6, 56, 46, 1, '2017-09-03 00:44:20', 0),
(7, 56, 52, 1, '2017-09-03 00:44:25', 0),
(8, 56, 39, 1, '2017-09-03 00:44:30', 1),
(9, 61, 46, 1, '2017-09-07 21:48:20', 0),
(10, 61, 39, 1, '2017-09-07 21:48:51', 0),
(11, 61, 56, 2, '2017-09-07 21:49:23', 0),
(12, 61, 98, 3, '2017-09-07 21:49:48', 0),
(13, 61, 100, 3, '2017-09-07 21:50:21', 0),
(14, 69, 40, 2, '2017-09-20 13:31:08', 0),
(15, 69, 48, 1, '2017-09-20 13:31:19', 0),
(16, 69, 54, 2, '2017-09-20 13:32:31', 0),
(17, 69, 67, 2, '2017-09-20 13:32:36', 0),
(18, 69, 46, 1, '2017-09-20 13:32:57', 0),
(19, 69, 52, 1, '2017-09-20 13:33:03', 0),
(20, 69, 61, 1, '2017-09-20 13:33:08', 1),
(21, 69, 3, 1, '2017-09-20 13:33:21', 0),
(22, 69, 4, 1, '2017-09-20 13:33:30', 0),
(23, 69, 4, 5, '2017-09-20 16:28:39', 0),
(24, 69, 3, 5, '2017-09-20 16:28:42', 0),
(25, 69, 5, 5, '2017-09-20 16:28:44', 0),
(26, 46, 46, 1, '2017-09-21 21:21:13', 0),
(27, 46, 39, 1, '2017-09-21 21:21:21', 0),
(28, 46, 98, 3, '2017-09-21 21:22:04', 0),
(29, 46, 40, 2, '2017-09-21 21:23:17', 0),
(30, 46, 67, 2, '2017-09-21 21:23:22', 0),
(31, 46, 3, 1, '2017-09-21 21:30:44', 0),
(32, 46, 4, 1, '2017-09-21 21:30:48', 0),
(33, 46, 1, 1, '2017-09-21 21:30:54', 0),
(34, 46, 100, 3, '2017-09-21 21:32:01', 0),
(35, 71, 4, 5, '2017-09-25 15:16:37', 1),
(36, 71, 5, 5, '2017-09-25 15:16:41', 0),
(37, 71, 3, 5, '2017-09-25 15:16:43', 0),
(38, 71, 1, 5, '2017-09-25 15:16:46', 0),
(39, 71, 3, 4, '2017-09-25 15:16:58', 0),
(40, 71, 40, 2, '2017-09-25 15:17:05', 0),
(41, 71, 52, 1, '2017-09-25 15:17:13', 0),
(42, 71, 54, 2, '2017-09-25 15:17:25', 0),
(43, 71, 95, 3, '2017-09-25 15:18:04', 0),
(44, 71, 100, 3, '2017-09-25 15:18:16', 0),
(45, 75, 48, 1, '2017-09-26 23:41:25', 0),
(46, 75, 46, 1, '2017-09-26 23:41:30', 0),
(47, 75, 61, 1, '2017-09-26 23:41:39', 0),
(48, 75, 4, 4, '2017-09-28 10:12:12', 0),
(49, 75, 4, 5, '2017-09-28 10:17:50', 0),
(50, 75, 5, 5, '2017-09-28 10:17:54', 0),
(51, 75, 72, 2, '2017-09-28 10:19:49', 0),
(52, 46, 95, 3, '2017-09-30 01:09:24', 0),
(53, 46, 3, 4, '2017-09-30 01:09:47', 0),
(54, 46, 4, 4, '2017-09-30 01:09:53', 0),
(55, 46, 125, 3, '2017-09-30 01:12:47', 0),
(56, 46, 116, 3, '2017-09-30 01:22:25', 0),
(57, 46, 47, 3, '2017-09-30 02:01:38', 0),
(58, 46, 51, 3, '2017-09-30 02:02:22', 0),
(59, 81, 3, 4, '2017-10-01 20:35:16', 1),
(60, 81, 4, 4, '2017-10-01 20:35:23', 0),
(61, 81, 1, 4, '2017-10-01 20:35:29', 0),
(62, 81, 4, 5, '2017-10-01 20:35:39', 0),
(63, 81, 3, 5, '2017-10-01 20:35:42', 0),
(64, 81, 1, 5, '2017-10-01 20:35:44', 0),
(65, 81, 48, 1, '2017-10-01 20:35:50', 0),
(66, 81, 46, 1, '2017-10-01 20:35:56', 0),
(67, 81, 51, 3, '2017-10-01 20:36:49', 0),
(68, 84, 46, 1, '2017-10-07 17:10:09', 0),
(69, 92, 46, 1, '2017-10-12 22:54:32', 1),
(70, 92, 48, 1, '2017-10-12 22:54:37', 0),
(71, 92, 4, 5, '2017-10-12 22:54:51', 0),
(72, 99, 3, 5, '2017-10-20 15:29:26', 0),
(73, 101, 102, 1, '2017-11-10 05:09:41', 0),
(74, 101, 46, 1, '2017-11-10 05:10:35', 0),
(75, 101, 61, 1, '2017-11-10 05:11:13', 0),
(76, 101, 97, 1, '2017-11-10 05:11:36', 0),
(77, 101, 4, 5, '2017-11-10 05:11:49', 0),
(78, 101, 3, 5, '2017-11-10 05:11:52', 0),
(79, 101, 14, 4, '2017-11-10 05:12:04', 1),
(80, 101, 15, 4, '2017-11-10 05:12:08', 0),
(81, 101, 16, 4, '2017-11-10 05:12:13', 0),
(82, 101, 99, 2, '2017-11-10 05:12:29', 0),
(83, 101, 101, 3, '2017-11-10 05:12:46', 0),
(84, 102, 5, 7, '2017-12-04 22:33:36', 0),
(85, 102, 102, 1, '2017-12-04 23:32:01', 0),
(86, 102, 2, 7, '2017-12-04 23:58:42', 0),
(87, 102, 1, 7, '2017-12-18 18:39:31', 0),
(88, 102, 51, 3, '2017-12-18 19:15:33', 0),
(89, 102, 3, 4, '2017-12-19 21:08:03', 0),
(90, 102, 102, 7, '2018-01-04 11:01:45', 0),
(91, 101, 102, 7, '2018-01-09 16:17:49', 0),
(92, 101, 2, 7, '2018-01-09 16:23:38', 0),
(93, 101, 1, 7, '2018-01-09 16:29:55', 0),
(94, 101, 46, 7, '2018-01-09 16:30:04', 0),
(95, 104, 14, 4, '2018-01-10 20:21:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_myfile`
--

CREATE TABLE IF NOT EXISTS `tbl_myfile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `file` varchar(400) DEFAULT NULL,
  `dispaly_name` varchar(200) DEFAULT NULL,
  `file_type` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `file_size` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `file_remaining_size` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `file_access_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=public,2=private',
  `password` varchar(300) DEFAULT NULL,
  `download_count` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `tbl_myfile`
--

INSERT INTO `tbl_myfile` (`id`, `busi_id`, `file`, `dispaly_name`, `file_type`, `file_size`, `file_remaining_size`, `file_access_type`, `password`, `download_count`, `created_date`, `created_by`, `is_deleted`) VALUES
(1, 74, 'images/business_images/74/Myfiles/1506439100.72publicfile.png', 'txtfile.png', 'image', '30606', NULL, 1, NULL, 0, '2017-09-26 20:48:20', 140, 0),
(2, 74, 'images/business_images/74/Myfiles/1506439158.23publicfile.docx', 'My Staion-shipper.docx', 'word', '568895', NULL, 1, NULL, 0, '2017-09-26 20:49:18', 140, 0),
(3, 74, 'images/business_images/74/Myfiles/1506439228.29publicfile.docx', 'Buyer Registration.docx', 'word', '176517', NULL, 1, NULL, 0, '2017-09-26 20:50:28', 140, 0),
(4, 74, 'images/business_images/74/Myfiles/1506439310.37publicfile.docx', 'Catalogue Clarifications.docx', 'word', '1089642', NULL, 1, NULL, 0, '2017-09-26 20:51:50', 140, 0),
(5, 81, 'images/business_images/81/Myfiles/1506867871.45publicfile.docx', 'remins.docx', 'word', '16484', NULL, 1, NULL, 0, '2017-10-01 19:54:31', 148, 0),
(6, 81, 'images/business_images/81/Myfiles/1506867927.88publicfile.docx', 'new tam vission.docx', 'word', '24476', NULL, 1, NULL, 0, '2017-10-01 19:55:27', 148, 1),
(7, 81, 'images/business_images/81/Myfiles/1506868017.04publicfile.jpg', 'shipping_services2.jpg', 'image', '47566', NULL, 2, '123', 0, '2017-10-01 19:56:57', 148, 0),
(8, 81, 'images/business_images/81/Myfiles/1506872624.43publicfile.jpg', 'India-CPGI-ISO-9001-certificateok.jpg', 'image', '65174', NULL, 1, NULL, 0, '2017-10-01 21:13:44', 148, 0),
(9, 81, 'images/business_images/81/Myfiles/1506872727.94publicfile.rar', 'Alerts.rar', 'zip', '1432397', NULL, 1, NULL, 0, '2017-10-01 21:15:27', 148, 0),
(10, 81, 'images/business_images/81/Myfiles/1506873352.91publicfile.xlsx', 'New Microsoft Office Excel Worksheet.xlsx', 'excel', '8714', NULL, 1, NULL, 0, '2017-10-01 21:25:52', 148, 0),
(11, 81, 'images/business_images/81/Myfiles/1506875444.71publicfile.pdf', '17457806.pdf', 'pdf', '261558', NULL, 1, NULL, 0, '2017-10-01 22:00:44', 148, 0),
(12, 82, 'images/business_images/82/Myfiles/1506945747.15publicfile.jpg', 'Company-about-us.jpg', 'image', '62923', NULL, 1, NULL, 0, '2017-10-02 17:32:27', 152, 1),
(13, 83, 'images/business_images/83/Myfiles/1506968309.8878publicfile.jpg', 'myfiles_sample.jpg', 'image', '69903', NULL, 1, NULL, 1, '2017-10-02 23:48:29', 153, 0),
(14, 83, 'images/business_images/83/Myfiles/1506968331.5607publicfile.jpeg', 'motoe4plus.jpeg', 'image', '21402', NULL, 2, 'pradeep', 2, '2017-10-02 23:48:51', 153, 0),
(15, 82, 'images/business_images/82/Myfiles/1507042566.2654publicfile.jpg', 'Profile Back.jpg', 'image', '165180', NULL, 1, NULL, 0, '2017-10-03 20:26:06', 152, 0),
(16, 82, 'images/business_images/82/Myfiles/1507048229.0566publicfile.gif', 'iso_9001_certification.gif', 'image', '4244', NULL, 1, NULL, 0, '2017-10-03 22:00:29', 152, 0),
(17, 82, 'images/business_images/82/Myfiles/1507048235.0138publicfile.jpg', 'India2.jpg', 'image', '222239', NULL, 1, NULL, 0, '2017-10-03 22:00:35', 152, 0),
(18, 82, 'images/business_images/82/Myfiles/1507048241.0972publicfile.jpg', 'ISO-9001-CERTIFICATE.jpg', 'image', '200499', NULL, 1, NULL, 0, '2017-10-03 22:00:41', 152, 0),
(19, 82, 'images/business_images/82/Myfiles/1507048245.219publicfile.jpg', 'Certificate of Honor2004.jpg', 'image', '17426', NULL, 1, NULL, 0, '2017-10-03 22:00:45', 152, 0),
(20, 83, 'images/business_images/83/Myfiles/1507137707.1506publicfile.xls', 'item_options_update.xls', 'excel', '1488896', NULL, 1, NULL, 0, '2017-10-04 22:51:47', 153, 0),
(21, 83, 'images/business_images/83/Myfiles/1507139140.0984publicfile.docx', 'August. 20 - Buyer test- fixed.docx', 'word', '3400575', NULL, 1, NULL, 1, '2017-10-04 23:15:40', 153, 0),
(22, 83, 'images/business_images/83/Myfiles/1507215971.6698publicfile.jpg', 'shoes2.jpg', 'image', '22638', NULL, 1, NULL, 0, '2017-10-05 20:36:11', 153, 0),
(23, 83, 'images/business_images/83/Myfiles/1507215990.7073publicfile.jpg', 'honda-activa.jpg', 'image', '15948', NULL, 1, NULL, 0, '2017-10-05 20:36:30', 153, 0),
(24, 84, 'images/business_images/84/Myfiles/1507374206.2702publicfile.jpg', 'India.jpg', 'image', '2151435', NULL, 1, NULL, 0, '2017-10-07 16:33:26', 154, 0),
(25, 84, 'images/business_images/84/Myfiles/1507374226.1852publicfile.jpg', 'India-CPGI-ISO-9001-certificateok.jpg', 'image', '65174', NULL, 1, NULL, 1, '2017-10-07 16:33:46', 154, 0),
(26, 84, 'images/business_images/84/Myfiles/1507374254.6515publicfile.docx', '????? ????.docx', 'word', '44304', NULL, 1, NULL, 0, '2017-10-07 16:34:14', 154, 1),
(27, 84, 'images/business_images/84/Myfiles/1507374367.3003publicfile.docx', '????? ????.docx', 'word', '44304', NULL, 1, NULL, 0, '2017-10-07 16:36:07', 154, 0),
(28, 84, 'images/business_images/84/Myfiles/1507374386.7397publicfile.jpg', '4qbiynvcp4.jpg', 'image', '24801', NULL, 1, NULL, 0, '2017-10-07 16:36:26', 154, 0),
(29, 84, 'images/business_images/84/Myfiles/1507374399.039publicfile.jpg', 'Caro.jpg', 'image', '59136', NULL, 1, NULL, 0, '2017-10-07 16:36:39', 154, 0),
(30, 84, 'images/business_images/84/Myfiles/1507374407.8903publicfile.jpg', 'comp3.jpg', 'image', '67526', NULL, 1, NULL, 0, '2017-10-07 16:36:47', 154, 0),
(31, 84, 'images/business_images/84/Myfiles/1507374418.2551publicfile.jpg', 'comp1.jpg', 'image', '67060', NULL, 1, NULL, 0, '2017-10-07 16:36:58', 154, 0),
(32, 84, 'images/business_images/84/Myfiles/1507375718.6172publicfile.pdf', '??????? ?????? ??????? ????? ??? ????? ??????? ???????? ???? ??????? ?????? ?????? ?????? ?????? ?????? ????? ??????.pdf', 'pdf', '128871', NULL, 1, NULL, 0, '2017-10-07 16:58:38', 154, 0),
(33, 84, 'images/business_images/84/Myfiles/1507375742.6899publicfile.rar', 'Profile.rar', 'zip', '1036321', NULL, 1, NULL, 0, '2017-10-07 16:59:02', 154, 0),
(34, 84, 'images/business_images/84/Myfiles/1507375763.225publicfile.xlsx', 'dgf.xlsx', 'excel', '8714', NULL, 1, NULL, 0, '2017-10-07 16:59:23', 154, 0),
(35, 84, 'images/business_images/84/Myfiles/1507375787.161publicfile.pdf', 'Profile.pdf', 'pdf', '1086837', NULL, 1, NULL, 0, '2017-10-07 16:59:47', 154, 0),
(36, 87, 'images/business_images/87/Myfiles/1507646812.5917publicfile.jpg', '4qbiynvcp4.jpg', 'image', '24801', NULL, 2, '123', 5, '2017-10-10 20:16:52', 163, 0),
(37, 87, 'images/business_images/87/Myfiles/1507647067.2547publicfile.docx', 'buyer 1st-october.docx', 'word', '2883469', NULL, 1, NULL, 1, '2017-10-10 20:21:07', 163, 0),
(38, 87, 'images/business_images/87/Myfiles/1507650193.8399publicfile.jpg', '4qbiynvcp4.jpg', 'image', '24801', NULL, 1, NULL, 0, '2017-10-10 21:13:13', 163, 1),
(39, 92, 'images/business_images/92/Myfiles/1507828637.3879publicfile.rar', 'New Microsoft Office Excel Worksheet.rar', 'zip', '5328', NULL, 1, NULL, 0, '2017-10-12 22:47:17', 170, 0),
(40, 92, 'images/business_images/92/Myfiles/1507828648.6254publicfile.xlsx', 'New Microsoft Office Excel Worksheet.xlsx', 'excel', '8714', NULL, 1, NULL, 1, '2017-10-12 22:47:28', 170, 0),
(41, 92, 'images/business_images/92/Myfiles/1507828700.7342publicfile.jpg', '4qbiynvcp4.jpg', 'image', '24801', NULL, 2, '123', 0, '2017-10-12 22:48:20', 170, 0),
(42, 46, 'images/business_images/46/Myfiles/1508001499.172publicfile.jpg', 'member-desksite-streched.jpg', 'image', '188805', NULL, 1, NULL, 4, '2017-10-14 22:48:19', 94, 0),
(43, 98, 'images/business_images/98/Myfiles/1508477444.5277publicfile.jpg', 'India2.jpg', 'image', '222239', NULL, 1, NULL, 0, '2017-10-20 11:00:44', 178, 0),
(44, 98, 'images/business_images/98/Myfiles/1508477464.6885publicfile.jpg', 'India.jpg', 'image', '2151435', NULL, 1, NULL, 1, '2017-10-20 11:01:04', 178, 0),
(45, 98, 'images/business_images/98/Myfiles/1508477486.8834publicfile.xlsx', 'dgf.xlsx', 'excel', '8714', NULL, 2, '123', 1, '2017-10-20 11:01:26', 178, 0),
(46, 98, 'images/business_images/98/Myfiles/1508477509.2488publicfile.pdf', 'Profile.pdf', 'pdf', '1086837', NULL, 1, NULL, 0, '2017-10-20 11:01:49', 178, 0),
(47, 98, 'images/business_images/98/Myfiles/1508477536.6626publicfile.docx', 'تقرير يودي.docx', 'word', '44304', NULL, 1, NULL, 0, '2017-10-20 11:02:16', 178, 0),
(48, 98, 'images/business_images/98/Myfiles/1508477551.4694publicfile.jpg', 'hazem2.jpg', 'image', '9122', NULL, 1, NULL, 0, '2017-10-20 11:02:31', 178, 0),
(49, 98, 'images/business_images/98/Myfiles/1508477559.7868publicfile.png', 'Front_View_iPhone6_PSD_Template.png', 'image', '179086', NULL, 1, NULL, 0, '2017-10-20 11:02:39', 178, 1),
(50, 101, 'images/business_images/101/Myfiles/1509526692.3433publicfile.png', 'buyer1.png', 'image', '31019', NULL, 1, NULL, 4, '2017-11-01 14:28:12', 187, 0),
(51, 101, 'images/business_images/101/Myfiles/1509526696.446publicfile.jpg', 'buy9.jpg', 'image', '34339', NULL, 1, NULL, 6, '2017-11-01 14:28:16', 187, 0),
(52, 101, 'images/business_images/101/Myfiles/1509526752.0804publicfile.xlsx', 'bandwidth.xlsx', 'excel', '10734', NULL, 1, NULL, 3, '2017-11-01 14:29:12', 187, 0),
(53, 101, 'images/business_images/101/Myfiles/1509526764.5259publicfile.docx', 'تقرير يودي.docx', 'word', '44304', NULL, 1, NULL, 9, '2017-11-01 14:29:24', 187, 0),
(54, 101, 'images/business_images/101/Myfiles/1509526846.6229publicfile.gif', '36.gif', 'image', '2883', NULL, 2, '111', 3, '2017-11-01 14:30:46', 187, 0),
(55, 101, 'images/business_images/101/Myfiles/1509526876.9889publicfile.rar', 'hazem2.rar', 'zip', '8910', NULL, 1, NULL, 2, '2017-11-01 14:31:16', 187, 0),
(56, 101, 'images/business_images/101/Myfiles/1509527208.3774publicfile.docx', 'remins. on 25th Oct.docx', 'word', '12472', NULL, 1, NULL, 2, '2017-11-01 14:36:48', 187, 0),
(57, 102, 'images/business_images/102/Myfiles/1509883979.5214publicfile.jpg', 'India.jpg', 'image', '2151435', NULL, 1, NULL, 3, '2017-11-05 17:42:59', 190, 1),
(58, 46, 'images/business_images/46/Myfiles/1510426018.3834publicfile.docx', '24th Oct. Pro-Video-reply-feedback-fixed.docx', 'word', '1037853', NULL, 1, NULL, 1, '2017-11-12 00:16:58', 94, 0),
(59, 46, 'images/business_images/46/Myfiles/1510426063.5013publicfile.docx', 'buyer 31 oct-fixed.docx', 'word', '457670', NULL, 2, 'pradeep', 1, '2017-11-12 00:17:43', 94, 0),
(60, 99, 'images/business_images/99/Myfiles/1510485839.8989publicfile.png', 'Untitled (2).png', 'image', '35389', NULL, 1, NULL, 0, '2017-11-12 16:53:59', 183, 0),
(61, 99, 'images/business_images/99/Myfiles/1510485886.2478publicfile.docx', 'Chat features to buy from Cometchat.docx', 'word', '505804', NULL, 1, NULL, 0, '2017-11-12 16:54:46', 183, 0),
(62, 99, 'images/business_images/99/Myfiles/1510485921.4523publicfile.xlsx', 'dgf.xlsx', 'excel', '8714', NULL, 1, NULL, 0, '2017-11-12 16:55:21', 183, 0),
(63, 99, 'images/business_images/99/Myfiles/1510485945.4168publicfile.pdf', 'Profile.pdf', 'pdf', '1086837', NULL, 2, '123', 1, '2017-11-12 16:55:45', 183, 1),
(64, 99, 'images/business_images/99/Myfiles/1510485972.2954publicfile.pdf', 'إتفاقية برنامج التعاون الفني بين وزارة التجارة والصناعة وبين المصلحة العامة لرقابة الجودة والفحص والحجر الصحي بالصين.pdf', 'pdf', '128871', NULL, 1, NULL, 0, '2017-11-12 16:56:12', 183, 0),
(65, 102, 'images/business_images/102/Myfiles/1512562262.306publicfile.docx', 'ICP.docx', 'word', '15795', NULL, 1, NULL, 3, '2017-12-06 17:41:02', 190, 0),
(66, 102, 'images/business_images/102/Myfiles/1512562311.4711publicfile.docx', 'آي سي بي.docx', 'word', '15795', NULL, 2, '123', 0, '2017-12-06 17:41:51', 190, 0),
(67, 102, 'images/business_images/102/Myfiles/1512567315.4331publicfile.docx', 'آي سي بي.docx', 'word', '15795', NULL, 1, NULL, 0, '2017-12-06 19:05:15', 190, 0),
(68, 102, 'images/business_images/102/Myfiles/1512567385.2452publicfile.rar', 'yes.rar', 'zip', '5514', NULL, 1, NULL, 0, '2017-12-06 19:06:25', 190, 0),
(69, 102, 'images/business_images/102/Myfiles/1512567396.0885publicfile.xlsx', 'yes.xlsx', 'excel', '8271', NULL, 1, NULL, 0, '2017-12-06 19:06:36', 190, 0),
(70, 102, 'images/business_images/102/Myfiles/1513751343.6791publicfile.docx', 'googlear.docx', 'word', '10127', NULL, 2, '123', 0, '2017-12-20 11:59:03', 190, 0),
(71, 102, 'images/business_images/102/Myfiles/1513751462.476publicfile.jpg', 'sofa1.jpg', 'image', '26822', NULL, 1, NULL, 0, '2017-12-20 12:01:02', 190, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mystorage`
--

CREATE TABLE IF NOT EXISTS `tbl_mystorage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `desksite` double DEFAULT '0',
  `files` double DEFAULT '0',
  `udtalk` double DEFAULT '0',
  `products` double DEFAULT '0',
  `community` double DEFAULT '0',
  `offers` double DEFAULT '0',
  `inquiries` double DEFAULT '0',
  `videos` double DEFAULT '0',
  `bstation` double DEFAULT '0',
  `stockmarket` double DEFAULT '0',
  `freespace` double DEFAULT '0',
  `usedspace` double DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `tbl_mystorage`
--

INSERT INTO `tbl_mystorage` (`id`, `busi_id`, `desksite`, `files`, `udtalk`, `products`, `community`, `offers`, `inquiries`, `videos`, `bstation`, `stockmarket`, `freespace`, `usedspace`) VALUES
(1, 38, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(2, 39, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(3, 40, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(4, 41, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(5, 42, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(6, 43, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(7, 44, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(8, 45, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(9, 46, 425, 1644.85, 1, 1111.31, 0, 0, 0, 2969.6, 431.90999999999997, 0, -6583.669999999999, 6583.669999999999),
(10, 47, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(11, 48, 425, 0, 1, 664, 0, 0, 0, 3450.88, 0, 0, -4540.88, 4540.88),
(12, 49, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(13, 50, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(14, 51, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(15, 52, 425, 0, 0, 332, 0, 0, 0, 0, 0, 0, -757, 757),
(16, 53, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(17, 54, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(18, 55, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(19, 56, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(20, 57, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(21, 58, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(22, 59, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(23, 60, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(24, 61, 425, 0, 230, 332, 0, 0, 0, 0, 0, 0, -987, 987),
(25, 62, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(26, 63, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(27, 64, 425, 0, 67, 0, 0, 0, 0, 0, 0, 0, -492, 492),
(28, 65, 425, 0, 0, 0, 0, 0, 0, 0, 412.59, 0, -837.5899999999999, 837.5899999999999),
(29, 66, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(30, 67, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(31, 68, 1229.5900000000001, 0, 221.64, 0, 0, 0, 0, 0, 0, 0, -1451.23, 1451.23),
(32, 69, 425, 0, 4, 0, 0, 0, 0, 0, 0, 0, -429, 429),
(33, 70, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(34, 71, 425, 0, 1, 0, 0, 0, 0, 0, 0, 0, -426, 426),
(35, 72, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(36, 73, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(37, 74, 425, 1822, 0, 0, 0, 0, 0, 0, 0, 0, -2247, 2247),
(38, 75, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(39, 76, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(40, 77, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(41, 78, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(42, 79, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(43, 80, 425, 0, 0, 0, 0, 0, 0, 0, 0, 0, -425, 425),
(44, 81, 425, 1789, 1, 0, 0, 0, 0, 0, 0, 0, -2215, 2215),
(45, 82, 425, 595, 1, 0, 0, 0, 0, 0, 0, 0, -1021, 1021),
(46, 83, 425, 4901.679999999999, 1, 0, 0, 0, 0, 0, 0, 0, -5327.679999999999, 5327.679999999999),
(64, 84, 777.75, 4672.349999999999, 242.48, 0, 0, 0, 0, 0, 0, 0, -5692.579999999999, 5692.579999999999),
(65, 85, 3244.6800000000007, 0, 137.54, 0, 0, 0, 0, 0, 0, 0, -3382.2200000000007, 3382.2200000000007),
(66, 86, 644.62, 0, 0, 0, 0, 0, 0, 0, 0, 0, -644.62, 644.62),
(67, 87, 844.85, 2864.3299999999995, 0, 0, 0, 0, 0, 0, 0, 0, -3709.18, 3709.18),
(68, 88, 13.89, 0, 0, 0, 0, 0, 0, 0, 0, 0, -13.89, 13.89),
(69, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 90, 2041.4499999999998, 0, 358.55, 0, 0, 0, 0, 0, 0, 0, -2399.9999999999995, 2399.9999999999995),
(71, 91, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 92, 812.96, 37.93, 24.22, 0, 0, 0, 0, 0, 0, 0, -875.1100000000001, 875.1100000000001),
(73, 93, 1709.96, 0, 0, 1870.08, 0, 0, 0, 0, 0, 0, -3580.04, 3580.04),
(74, 94, 1904.8400000000001, 0, 0, 1939.21, 0, 0, 0, 0, 0, 0, -3844.05, 3844.05),
(75, 95, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 96, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 97, 1687.34, 0, 0, 978.9, 0, 0, 0, 0, 0, 0, -2666.24, 2666.24),
(78, 98, 801.59, 3614.9800000000005, 221.01, 0, 0, 0, 0, 0, 0, 0, -4637.580000000001, 4637.580000000001),
(79, 99, 2324.57, 1724.2299999999998, 110.61, 0, 0, 0, 0, 0, 770.39, 0, -4929.8, 4929.8),
(80, 100, 1423.61, 0, 62.56, 1920.71, 0, 0, 0, 0, 0, 0, -3406.8799999999997, 3406.8799999999997),
(81, 101, 816.6600000000001, 141.26999999999998, 439.37, 0, 381.31, 0, 0, 0, 672.0799999999999, 0, -2450.69, 2450.69),
(82, 102, 1803.2799999999997, 2196.8100000000004, 260.01, 3445.8999999999996, 0, 256.09, 0, 0, 898.25, 0, -3655.290000000001, 8865.19),
(83, 103, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(84, 104, 41.27, 0, 0, 0, 0, 0, 0, 0, 0, 0, -41.27, 41.27),
(85, 105, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_new_arrival_menu`
--

CREATE TABLE IF NOT EXISTS `tbl_new_arrival_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_new_arrival_menu`
--

INSERT INTO `tbl_new_arrival_menu` (`id`, `busi_id`, `item_id`, `created_date`) VALUES
(1, 61, 6, '2017-09-07 19:16:13'),
(2, 100, 13, '2017-10-21 13:36:53'),
(3, 102, 14, '2017-11-02 17:40:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer`
--

CREATE TABLE IF NOT EXISTS `tbl_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `offer_sender_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT '0',
  `offer_type_id` int(11) NOT NULL,
  `offer_subject` text,
  `offer_body` text,
  `attachment1` varchar(300) DEFAULT NULL,
  `attachment1_size` varchar(300) NOT NULL,
  `attachment2` varchar(300) DEFAULT NULL,
  `attachment2_size` varchar(300) NOT NULL,
  `attachment3` varchar(300) DEFAULT NULL,
  `attachment3_size` varchar(300) NOT NULL,
  `attachment4` varchar(300) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT '0',
  `qty` varchar(45) DEFAULT '0',
  `fob` varchar(18) DEFAULT '',
  `post_id` int(11) DEFAULT '0',
  `post_type` tinyint(4) DEFAULT '0' COMMENT '1-bstation,2-stockmarket,3-community',
  `attachment4_size` varchar(300) NOT NULL,
  `unreadmark` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=read,0=unread',
  `pin_unpin` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=pin,0=unpin',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_offer`
--

INSERT INTO `tbl_offer` (`id`, `busi_id`, `offer_sender_id`, `product_id`, `offer_type_id`, `offer_subject`, `offer_body`, `attachment1`, `attachment1_size`, `attachment2`, `attachment2_size`, `attachment3`, `attachment3_size`, `attachment4`, `name`, `email`, `phone`, `company`, `price`, `qty`, `fob`, `post_id`, `post_type`, `attachment4_size`, `unreadmark`, `pin_unpin`, `created_date`, `is_deleted`) VALUES
(1, 1, 22, 1, 1, 'I need a Quotes for the following items', 'Dear Sir<br>\r\nGreetings<br><br>\r\n\r\nPlease provide me with your best price for the item attached in your offer Titled: New Arrival....\r\n<br><br>\r\nOR\r\n<br><br>\r\nPlease provide me with your best price for the following item:', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, '0', '0', '', 0, 0, '', 1, 1, '0000-00-00 00:00:00', 0),
(2, 18, 1, 1, 4, 'test1', 'test message', 'images/business_images/1/inquiry/kunal.jpeg', '4855', 'images/business_images/1/inquiry/naksh.jpeg', '4132', 'images/business_images/1/inquiry/tara.jpeg', '5938', NULL, NULL, NULL, NULL, NULL, '0', '0', '', 0, 0, '', 0, 1, '2017-07-09 11:21:28', 0),
(3, 18, 1, 1, 4, 'test11', 'test message', 'images/business_images/1/inquiry/kunal.jpeg', '4855', 'images/business_images/1/inquiry/naksh.jpeg', '4132', 'images/business_images/1/inquiry/tara.jpeg', '5938', NULL, NULL, NULL, NULL, NULL, '0', '0', '', 0, 0, '', 1, 1, '2017-07-09 11:22:45', 1),
(4, 18, 1, 1, 4, 'test new', 'new test', 'images/business_images/1/inquiry/akashcom.jpg', '66583', 'images/business_images/1/inquiry/akashcom4.jpeg', '148053', 'images/business_images/1/inquiry/akashinfo2.jpeg', '11158', NULL, NULL, NULL, NULL, NULL, '0', '0', '', 0, 0, '', 1, 1, '2017-07-09 11:39:24', 1),
(5, 101, 102, 0, 3, 'Reply from seller', 'Sell Post Covers All Sellers/Shippers Requirements, Such As New Offers, New Arrivals, Wholesale Discount, Special Shipping Rates, Sourcing A Potential Buyer For A Particular Product, Looking For Agents For A Special Product And Much More..', 'images/user_images/190/selleroffer/1514949050_9798-comp1.jpg', '67060', 'images/user_images/190/selleroffer/1514949050_9972-comp2.jpg', '68685', 'images/user_images/190/selleroffer/1514949050_9979-comp3.jpg', '67526', 'images/user_images/190/selleroffer/1514949050_9984-comp4.jpg', 'Peter Cruise', 'info@udtalks.com', '13660638247', 'Mega Factory For Sofas Group', '1000', '12001', 'FOB', 51, 1, '58961', 0, 0, '2018-01-03 08:40:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offer_type`
--

CREATE TABLE IF NOT EXISTS `tbl_offer_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_type` varchar(300) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_offer_type`
--

INSERT INTO `tbl_offer_type` (`id`, `offer_type`, `created_date`) VALUES
(1, 'General Offer', '2017-06-26 00:00:00'),
(2, 'Product Offer', '2017-06-26 00:00:00'),
(3, 'Post Offer', '2017-06-26 00:00:00'),
(4, 'Offer Reply', '2017-06-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `sellerbusi_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `buyer_name` varchar(128) NOT NULL,
  `total` double NOT NULL,
  `confirmed_on` datetime NOT NULL,
  `started_on` datetime NOT NULL,
  `loaded_on` datetime NOT NULL,
  `shipped_on` datetime NOT NULL,
  `delivery_date` date NOT NULL,
  `delivery_time` time NOT NULL,
  `buyer_rate` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=EXCELLENT,2=good,2=Average,3=poor',
  `notes` text NOT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '1=Negotiations,2=confirmed,3=goods received by buyer',
  `selller_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=Negotiations,2=confirmed,3=goods received by buyer',
  `buyer_status` int(11) NOT NULL DEFAULT '1' COMMENT '1=Negotiations,2=confirmed,3=goods received by buyer',
  `invoice_id` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`orderid`, `sellerbusi_id`, `buyer_id`, `buyer_name`, `total`, `confirmed_on`, `started_on`, `loaded_on`, `shipped_on`, `delivery_date`, `delivery_time`, `buyer_rate`, `notes`, `status`, `selller_status`, `buyer_status`, `invoice_id`, `created_date`, `is_deleted`) VALUES
(1, 1, 1, 'Mrs Riddhi Vithalani', 1100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 1, '', 1, 2, 1, 2, '2017-07-17 15:20:03', 0),
(2, 46, 84, 'Mr Zako Daly', 52000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 1, '', 1, 2, 2, 3, '2017-10-07 17:12:51', 0),
(3, 102, 101, 'Mr Loka Buyer', 2400, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 1, '', 1, 1, 1, 0, '2017-11-10 05:25:07', 0),
(4, 48, 102, 'Mr Sadat Seller', 295000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00', '00:00:00', 1, '', 1, 1, 1, 4, '2018-01-04 12:48:33', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE IF NOT EXISTS `tbl_order_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` float NOT NULL DEFAULT '0',
  `total_product_price` float NOT NULL,
  `product_specification` varchar(800) DEFAULT NULL,
  `product_cbm` varchar(200) DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`id`, `item_id`, `order_id`, `quantity`, `product_price`, `total_product_price`, `product_specification`, `product_cbm`, `is_deleted`) VALUES
(1, 1, 1, 3, 200, 600, '<br>width: 6 inches<br>height: 21 inches', '2', 0),
(2, 2, 1, 1, 500, 500, '<br>Item Weight: 500 Kg<br>Product Dimensions: 44.2 x 40.8 x 22 cm', '5', 0),
(3, 2, 1, 1, 500, 500, '<br>Item Weight: 500 Kg<br>Product Dimensions: 44.2 x 40.8 x 22 cm', '5', 1),
(4, 1, 1, 1, 200, 200, '<br>width: 6 inches<br>height: 21 inches', '2', 1),
(5, 1, 2, 10, 200, 2000, '<br>RAM Size: 4 GB<br>Product Dimensions: 33 x 11.4 x 0.3 cm', '', 0),
(6, 2, 2, 1, 50000, 50000, '<br>Memory Type: DDR1 SDRAM<br>Input/Output Ports: SATA II, Ethernet (RJ-45), Parallel (IEEE 1284), PATA/IDE/EIDE', '', 0),
(7, 14, 3, 1, 250, 0, '<br>any: any<br>any: any', NULL, 0),
(8, 15, 3, 1, 2000, 0, '<br>safas: fasf<br>asf: asfasf', NULL, 0),
(9, 16, 3, 1, 120, 0, '<br>any: any<br>any: any<br>more: more', NULL, 0),
(10, 17, 3, 1, 30, 0, '<br>size: available<br>Package: yeah', NULL, 0),
(11, 3, 4, 60, 4500, 270000, '<br>Material Type: Leather<br>Lifestyle: Business', '', 0),
(12, 4, 4, 1, 25000, 25000, '<br>Material: Chiffon<br>Length: 36 Inch', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE IF NOT EXISTS `tbl_payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`payment_id`, `busi_id`, `plan_id`, `txn_id`, `payment_gross`, `currency_code`, `payer_email`, `payment_status`) VALUES
(1, 48, 2, 'PAY-2M689888VL602245PLGCW7AA', 1499.00, 'USD', 'er.pradeep007-buyer@gmail.com', 'approved'),
(2, 46, 3, 'PAY-7AH13580WP6644021LHXD3NI', 2999.00, 'USD', 'er.pradeep007-buyer@gmail.com', 'approved'),
(3, 102, 2, 'PAY-3D719291KK285971JLH7PFCY', 1499.00, 'USD', 'prashantmyname-buyer@gmail.com', 'approved'),
(4, 102, 0, 'PAY-0FN49937EK952680RLH7Q25A', 250.00, 'USD', 'prashantmyname-buyer@gmail.com', 'approved'),
(5, 99, 2, 'PAY-2RW488342M4775408LIBZP7Y', 999.00, 'USD', 'prashantmyname-buyer@gmail.com', 'approved'),
(6, 102, 0, 'PAY-98M1541060627770TLIHIEPY', 250.00, 'USD', 'prashantmyname-buyer@gmail.com', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_currency`
--

CREATE TABLE IF NOT EXISTS `tbl_payment_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_currency` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_payment_currency`
--

INSERT INTO `tbl_payment_currency` (`id`, `payment_currency`) VALUES
(1, 'USD'),
(2, 'EUR'),
(3, 'JPY'),
(4, 'CAD'),
(5, 'AUD'),
(6, 'HKD'),
(7, 'GBP'),
(8, 'CNY'),
(9, 'CHF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_terms`
--

CREATE TABLE IF NOT EXISTS `tbl_payment_terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_terms` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_payment_terms`
--

INSERT INTO `tbl_payment_terms` (`id`, `payment_terms`) VALUES
(1, 'T/T'),
(2, 'LC'),
(3, 'D/P'),
(4, 'Paypal'),
(5, 'Western Union'),
(6, 'Money Gram'),
(7, 'Cash'),
(8, 'Credit Card');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productvedio`
--

CREATE TABLE IF NOT EXISTS `tbl_productvedio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `product_item_id` int(11) NOT NULL,
  `vedio_file` varchar(500) NOT NULL,
  `vedio_size` varchar(200) NOT NULL,
  `video_likes` int(11) DEFAULT '0',
  `visit` bigint(20) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=not delete, 1= deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_productvedio`
--

INSERT INTO `tbl_productvedio` (`id`, `busi_id`, `product_item_id`, `vedio_file`, `vedio_size`, `video_likes`, `visit`, `shares`, `created_date`, `is_deleted`) VALUES
(1, 46, 1, 'images/business_images/46/Myvedio/1501868698.63vedio.mp4', '1.13', 3, 3, 0, '2017-08-04 23:14:58', 0),
(2, 48, 4, 'images/business_images/48/Myvedio/1501917149.24vedio.mp4', '1.48', 1, 1, 0, '2017-08-05 12:42:29', 1),
(3, 48, 4, 'images/business_images/48/Myvedio/1501917332.24vedio.mp4', '1.54', 7, 7, 0, '2017-08-05 12:45:32', 0),
(4, 48, 3, 'images/business_images/48/Myvedio/1501918004.97vedio.mp4', '1.83', 5, 5, 0, '2017-08-05 12:56:44', 0),
(5, 46, 2, 'images/business_images/46/Myvedio/1510853525.2034vedio.mp4', '7.48 MB', 0, 0, 0, '2017-11-16 23:02:05', 0),
(6, 102, 16, 'images/business_images/102/Myvedio/1510897979.8371vedio.mp4', '5.08 MB', 0, 0, 0, '2017-11-17 11:22:59', 0),
(7, 102, 16, 'images/business_images/102/Myvedio/1510899655.4467vedio.mp4', '3.46 MB', 1, 1, 0, '2017-11-17 11:50:55', 0),
(8, 102, 17, 'images/business_images/102/Myvedio/1511257660.8661vedio.mp4', '5.08 MB', 1, 1, 0, '2017-11-21 15:17:40', 0),
(9, 102, 15, 'images/business_images/102/Myvedio/1511878819.0943vedio.mp4', '5.08 MB', 0, 0, 0, '2017-11-28 19:50:19', 1),
(10, 102, 15, 'images/business_images/102/Myvedio/1511879065.0843vedio.mp4', '5.08 MB', 0, 0, 0, '2017-11-28 19:54:25', 1),
(11, 102, 15, 'images/business_images/102/Myvedio/1511879146.5574vedio.mp4', '5.08 MB', 0, 0, 0, '2017-11-28 19:55:46', 1),
(12, 102, 15, 'images/business_images/102/Myvedio/1511879484.9916vedio.mp4', '5.08 MB', 0, 0, 0, '2017-11-28 20:01:24', 1),
(13, 102, 15, 'images/business_images/102/Myvedio/1511879599.9865vedio.mp4', '5.08 MB', 0, 0, 0, '2017-11-28 20:03:19', 1),
(14, 102, 15, 'images/business_images/102/Myvedio/1512143498.8163vedio.mp4', '5.08 MB', 0, 0, 0, '2017-12-01 21:21:38', 1),
(15, 102, 15, 'images/business_images/102/Myvedio/1512143769.0636vedio.mp4', '5.08 MB', 0, 0, 0, '2017-12-01 21:26:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_productvedio_likes`
--

CREATE TABLE IF NOT EXISTS `tbl_productvedio_likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video_id` int(11) NOT NULL,
  `busi_id` int(11) NOT NULL,
  `type` tinyint(4) DEFAULT '0',
  `likes` int(11) NOT NULL,
  `shares` int(11) NOT NULL,
  `visit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_productvedio_likes`
--

INSERT INTO `tbl_productvedio_likes` (`id`, `video_id`, `busi_id`, `type`, `likes`, `shares`, `visit_date`) VALUES
(1, 1, 46, 1, 1, 0, '2017-10-24'),
(2, 1, 98, 1, 1, 0, '2017-10-24'),
(3, 4, 98, 0, 1, 0, '2017-10-24'),
(4, 4, 46, 0, 1, 0, '2017-10-24'),
(5, 1, 46, 0, 1, 0, '2017-10-24'),
(6, 3, 100, 0, 1, 0, '2017-10-24'),
(7, 4, 100, 0, 1, 0, '2017-10-24'),
(8, 1, 101, 1, 1, 0, '2017-11-01'),
(9, 4, 102, 0, 1, 0, '2017-11-09'),
(10, 3, 102, 0, 1, 0, '2017-11-09'),
(11, 2, 102, 0, 1, 0, '2017-11-09'),
(12, 1, 102, 1, 1, 0, '2017-11-09'),
(13, 1, 102, 0, 1, 0, '2017-11-09'),
(14, 7, 102, 0, 1, 0, '2017-12-05'),
(15, 8, 102, 0, 1, 0, '2017-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_catalogue`
--

CREATE TABLE IF NOT EXISTS `tbl_product_catalogue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `catalogue_title` varchar(128) DEFAULT NULL,
  `catalogue_cover` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `views` int(11) DEFAULT '0',
  `likes` int(11) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `pages` int(11) DEFAULT '3',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_product_catalogue`
--

INSERT INTO `tbl_product_catalogue` (`id`, `busi_id`, `catalogue_title`, `catalogue_cover`, `created_date`, `views`, `likes`, `shares`, `pages`, `status`) VALUES
(1, 46, 'UFO Products', 'images/user_images/94/1500196857new.jpg', '2017-07-16 14:51:51', 0, 0, 0, 3, 1),
(2, 102, 'Sofas 2016', 'images/user_images/190/1509885831new.jpg', '2017-11-05 18:16:37', 0, 8, 0, 2, 1),
(3, 102, 'ertert', '', '2017-11-07 23:56:43', 0, 0, 0, 2, 0),
(4, 102, '', '', '2017-11-14 14:52:50', 0, 0, 0, 2, 0),
(5, 102, '', '', '2017-11-14 15:13:37', 0, 0, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_catalogue_item`
--

CREATE TABLE IF NOT EXISTS `tbl_product_catalogue_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catalogue_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `sortorder` smallint(6) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_product_catalogue_item`
--

INSERT INTO `tbl_product_catalogue_item` (`id`, `catalogue_id`, `item_id`, `sortorder`) VALUES
(3, 1, 1, 1),
(4, 1, 2, 2),
(9, 4, 14, 1),
(10, 5, 14, 1),
(11, 2, 15, 1),
(12, 3, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_item`
--

CREATE TABLE IF NOT EXISTS `tbl_product_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `mproduct_id` int(11) NOT NULL,
  `sproduct_id` int(11) DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `unit_price` double DEFAULT '0',
  `model_no` varchar(128) DEFAULT NULL,
  `lead_time` smallint(6) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(128) NOT NULL,
  `country_id` int(11) NOT NULL,
  `brand` varchar(128) DEFAULT NULL,
  `about` text,
  `description` text,
  `cbm` varchar(255) DEFAULT '',
  `main_image` varchar(255) DEFAULT NULL,
  `sub_image1` varchar(255) DEFAULT NULL,
  `sub_image2` varchar(255) DEFAULT NULL,
  `sub_image3` varchar(255) DEFAULT NULL,
  `sub_image4` varchar(255) DEFAULT NULL,
  `flyr_image1` varchar(255) DEFAULT NULL,
  `flyr_image2` varchar(255) DEFAULT NULL,
  `visit` bigint(11) DEFAULT '0',
  `likes` bigint(11) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `created_date` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_product_item`
--

INSERT INTO `tbl_product_item` (`id`, `busi_id`, `mproduct_id`, `sproduct_id`, `name`, `unit_price`, `model_no`, `lead_time`, `quantity`, `unit`, `country_id`, `brand`, `about`, `description`, `cbm`, `main_image`, `sub_image1`, `sub_image2`, `sub_image3`, `sub_image4`, `flyr_image1`, `flyr_image2`, `visit`, `likes`, `shares`, `created_date`, `status`) VALUES
(1, 46, 9, 8, 'Kingston New 4 GB DDR3 RAM ', 200, 'KGN-4GB', 48, 2, 'Containers', 99, 'Kingston', 'Kingston Value RAM 4GB 1333MHz PC3-10600 DDR3 Non-ECC CL9 DIMM SR x8 STD Height 30mm Intel Motherboard Memory KVR13N9S8H 4', 'Kingston Value RAM 4GB 1333MHz PC3-10600 DDR3 Non-ECC CL9 DIMM SR x8 STD Height 30mm Intel Motherboard Memory KVR13N9S8H 4', '', 'images/user_images/94/product/1499844488.86main_product.jpg', 'images/user_images/94/product/1499844488.86sub_product.jpg', 'images/user_images/94/product/1499844488.86sub_product.jpg', 'images/user_images/94/product/1499844488.86sub_product.jpg', 'images/user_images/94/product/1499844488.86sub_product.jpg', 'images/user_images/94/product/1499844488.86sub_product.jpg', 'images/user_images/94/product/1499844488.86sub_product.jpg', 20, 0, 0, '2017-11-12 00:20:56', 1),
(2, 46, 1, 2, 'Motherboard ESYS', 50000, 'K8M800', 7, 10, 'Containers', 99, 'OEM PACK', 'All prices are inclusive of VAT. Octroi or any other local govt. charges, if applicable has to be borne by the buyer & paid directly to the courier delivery person. In case of returns due to any reason, the return courier charge has to be borne by the buyer. ', 'All prices are inclusive of VAT. Octroi or any other local govt. charges, if applicable has to be borne by the buyer & paid directly to the courier delivery person. In case of returns due to any reason, the return courier charge has to be borne by the buyer. ', '', 'images/user_images/94/product/1500196594.36main_product.jpg', 'images/user_images/94/product/1500196594.36sub_product.jpg', 'images/user_images/94/product/1500196594.36sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', 'images/user_images/94/product/1500196594.37sub_product.jpg', 'images/user_images/94/product/1500196594.41sub_product.jpg', 7, 0, 0, '2017-07-16 14:46:34', 1),
(3, 48, 11, 9, 'Bata Lace Up  (Black)', 4500, 'BATA-AW16', 10, 1, 'Container', 99, 'BATA', 'Lend a suave look to your personality with these uber-classy pair of casual shoes from the spectacular collection of Bata. These laced-up casual shoes for men in brown hue are a perfect example of elegance and comfort. The best part is that the shoes are not about good looks but great quality too. The shoes are crafted from printed leather and comprise of sturdy TPR sole for ease of wearability along with unmatched comfort.', 'Product warranty against manufacturing defects: 60 days\r\nCare Instructions: Clean your shoes with leather cleaner or leather shampoo, and use a good quality brush to remove loose surface dirt; if your shoes are wet after cleaning, let them air-dry before your proceed with the next step; dry shoes in room temperature only and never expose them to the sun, heat from the sun will cause the leather to shrink, wrinkle, harden, dry, and crack', '', 'images/user_images/96/product/1501915398.04main_product.jpg', 'images/user_images/96/product/1501915398.04sub_product.jpg', 'images/user_images/96/product/1501915398.04sub_product.jpg', 'images/user_images/96/product/1501915398.04sub_product.jpg', 'images/user_images/96/product/1501915398.05sub_product.jpg', 'images/user_images/96/product/1501915398.05sub_product.jpg', 'images/user_images/96/product/1501915398.05sub_product.jpg', 8, 1, 0, '2017-08-05 12:13:18', 1),
(4, 48, 17, 13, 'ALC Creations Chiffon Short Kurti', 25000, 'A-Line-WOMEN', 10, 10, 'Containers', 99, 'A LINE', 'Style this kurta with a pair of leggings and strappy sandals. Add on a chunky bracelet and a pair of hoop earrings to complete the look.', 'Wash Care : Machine Or Normal Hand Wash In Cold Water.\r\nNOTE:- ORIGINAL PRODUCT SOLD BY "Kenil Fabrics" ONLY.\r\nDisclaimer :- PRODUCT COLOR MAY SLIGHTLY VARY DUE TO PHOTOGRAPHIC LIGHTING SOURCES OR YOUR MONITOR SETTINGS.', '', 'images/user_images/96/product/1501917008.61main_product.jpg', 'images/user_images/96/product/1501917008.61sub_product.jpg', 'images/user_images/96/product/1501917008.61sub_product.jpg', 'images/user_images/96/product/1501917008.61sub_product.jpg', 'images/user_images/96/product/1501917008.61sub_product.jpg', 'images/user_images/96/product/1501917008.61sub_product.jpg', 'images/user_images/96/product/1501917008.61sub_product.jpg', 0, 0, 0, '2017-08-05 12:40:08', 1),
(5, 52, 35, 15, 'Brown High neck shoes', 10, 'H520-00', 35, 1, 'Container H/Q', 45, 'Cat', 'Release the shoe kraken! That’s how we imagine the introduction of the Polypodis went. Designed by Kermit Tesoro, these are high-heels without actual heels. The shoe is made from multiple intertwined tentacles, which will make your foot like the Nautilus on a particularly bad leg of the journey. Or you can imagine yourself like a sea princess on the hunt for Namor, Poseidon or Neptune.\r\n\r\nHeel-less high platform shoes are a staple of Tesoro’s creative work. This Filipino designer has made some of the weirdest shoes we’ve ever seen. “The implications of his cerebral and dark tendencies are not the primary source of inspiration but rather a reference rooting towards from his inclinations or even frustrations in arts, science, psychology, religion and his childhood fixations,” Tesoro explained on his website. “In short, all of the aesthetics shown on his works are just an intersection of his self advocacy on technology and unconventional materials translated in fashion context.”\r\nRelease the shoe kraken! That’s how we imagine the introduction of the Polypodis went. Designed by Kermit Tesoro, these are high-heels without actual heels. The shoe is made from multiple intertwined tentacles, which will make your foot like the Nautilus on a particularly bad leg of the journey. Or you can imagine yourself like a sea princess on the hunt for Namor, Poseidon or Neptune.\r\n\r\nHeel-less high platform shoes are a staple of Tesoro’s creative work. This Filipino designer has made some of the weirdest shoes we’ve ever seen. “The implications of his cerebral and dark tendencies are not the primary source of inspiration but rather a reference rooting towards from his inclinations or even frustrations in arts, science, psychology, religion and his childhood fixations,” Tesoro explained on his website. “In short, all of the aesthetics shown on his works are just an intersection of his self advocacy on technology and unconventional materials translated in fashion context.”Release the shoe kraken! That’s how we imagine the introduction of the Polypodis went. Designed by Kermit Tesoro, these are high-heels without actual heels. The shoe is made from multiple intertwined tentacles, which will make your foot like the Nautilus on a particularly bad leg of the journey. Or you can imagine yourself like a sea princess on the hunt for Namor, Poseidon or Neptune.\r\nHeel-less high platform shoes are a staple of Tesoro’s creative work. This Filipino designer has made some of the weirdest shoes.\r\n', 'Good price wholesale work safety boots with steel toe\r\nFeatures:\r\nMain functions: anti smashing, anti piercing.\r\nThe upper: folding resistance, good permeability.\r\nSole: Good flexibility, anti-skid, wear-resistant, moisture-proof, high temperature.\r\nMOQ: 500pcs\r\nPrice: satisfactory competitive price\r\n', '', 'images/user_images/101/product/1502991073.33main_product.jpg', 'images/user_images/101/product/1502991073.33sub_product.jpg', 'images/user_images/101/product/1502991073.33sub_product.jpg', 'images/user_images/101/product/1502991073.33sub_product.jpg', 'images/user_images/101/product/1502991073.33sub_product.jpg', 'images/user_images/101/product/1502991073.33sub_product.jpg', 'images/user_images/101/product/1502991073.33sub_product.jpg', 5, 0, 0, '2017-08-17 23:44:03', 1),
(6, 61, 66, 22, 'The best of navy color', 10, 'M520', 15, 1000, 'Pairs', 45, 'CAT', 'My Desksite icon\r\na)	In First step screen ( All Images are required) but it goes without I add some images please fix this.\r\nb)	In main products screen:\r\n- In fields ( type auto-correction ) is not there.\r\n- Please read the functions clarification file I send with this file.\r\n- When you add the main category please use the same way showing hereunder:\r\nhttp://purchase.made-in-china.com/trade-service/quotation-request.html\r\nc)	In Sub-products page:\r\n- In fields ( type auto-correction ) is not there.\r\n- Please read the functions clarification file I send with this file.\r\n\r\n\r\nIn Add product ( items) screen:\r\na)	In case filled in all the fields but forget to add the product under the Main/Sub-Product menu and press continue the validation mark the menu to be selected, then if IN THIS TIME select Main/Sub-Product, and click ” Add and Continue” Button, it stuck and never go and member has to close and refresh the page again..\r\n', 'In case filled in all the fields but forget to add the product under the Main/Sub-Product menu and press continue the validation mark the menu to be selected, then if IN THIS TIME select Main/Sub-Product, and click ” Add and Continue” Button, it stuck and never go and member has to close and refresh the page again..\r\n', '0.02', 'images/user_images/111/product/1504791354.5main_product.jpg', 'images/user_images/111/product/1504800501.93sub_product.jpg', 'images/user_images/111/product/1504800501.93sub_product.jpg', 'images/user_images/111/product/1504800501.93sub_product.jpg', 'images/user_images/111/product/1504800501.93sub_product.jpg', 'images/user_images/111/product/1504800501.93sub_product.jpg', 'images/user_images/111/product/1504791354.5sub_product.jpg', 3, 0, 0, '2017-09-07 21:38:21', 1),
(7, 93, 133, 33, 'shoes is our mission', 35, 'Af2013', 45, 500, 'Pairs', 45, 'CAT', 'No more specification for this shows, it just a rubber one with many other features such as:\r\nRubber\r\nPVC', 'Genuine Leather', '0.3', 'images/user_images/173/product/1507856191.39781.jpg', 'images/user_images/173/product/1507856191.39792.jpg', 'images/user_images/173/product/1507856191.39793.jpg', 'images/user_images/173/product/1507856191.39794.jpg', 'images/user_images/173/product/1507856191.39791.jpg', 'images/user_images/173/product/1507856191.3979poster2-1000.jpg', 'images/user_images/173/product/1507856191.3979poster1000.jpg', 5, 0, 0, '2017-10-13 06:58:56', 1),
(8, 93, 134, 36, 'Mom New Arrivals Sandals', 50, '52011', 45, 500, 'Pairs', 15, '', 'You can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyer', 'You can add 2 more images as a design or flyer', '0.4', 'images/user_images/173/product/1507860864.27932.jpg', 'images/user_images/173/product/1507860864.27931.jpg', 'images/user_images/173/product/1507860864.27932.jpg', 'images/user_images/173/product/1507860864.27943.jpg', 'images/user_images/173/product/1507860864.27954.jpg', 'images/user_images/173/product/1507860864.2795poster1000.jpg', 'images/user_images/173/product/1507860864.2795poster2-1000.jpg', 1, 0, 0, '2017-10-13 07:44:24', 1),
(9, 94, 149, 45, 'High Neck Navy Boot', 60, 'NL-0150', 45, 1, 'Container H/Q', 45, 'Nike', 'A stylish boot for both classic and casual styles matching each minute of your day and meets the requirements of your event, in a high style.\r\nTo be elegant and charming match the color of the boot with your trousers whether casual ones or jeans.\r\n\r\nThe boot made in china with high quality contents and can be last for 10 years of a continues wearing, it comes with charming package box, printed in colors and can match you country market or it could be according to you provided design.', 'The boot made in china with high quality contents and can be last for 10 years of a continues wearing, it comes with charming package box, printed in colors and can match you country market or it could be according to you provided design.\r\n\r\nThe boot made in china with high quality contents and can be last for 10 years of a continues wearing, it comes with charming package box, printed in colors and can match you country market or it could be according to you provided design.', '0.5', 'images/user_images/174/product/1507938513.4554.jpg', 'images/user_images/174/product/1507938513.4552.jpg', 'images/user_images/174/product/1507938513.4551.jpg', 'images/user_images/174/product/1507938513.4553.jpg', 'images/user_images/174/product/1507938513.4554.jpg', 'images/user_images/174/product/1507938513.4552poster1000.jpg', 'images/user_images/174/product/1507938513.4552poster2-1000.jpg', 2, 0, 0, '2017-10-14 05:18:33', 0),
(10, 94, 149, 46, 'hfhfhfh', 50, 'ghfhf', 45, 1, 'Container H/Q', 37, 'hjgh', 'jgjgj', 'gjgjj', '.25', 'images/user_images/174/product/1507939170.12361.jpg', 'images/user_images/174/product/1507939170.12372.jpg', 'images/user_images/174/product/1507939170.12373.jpg', 'images/user_images/174/product/1507939170.12374.jpg', 'images/user_images/174/product/1507939170.12371.jpg', 'images/user_images/174/product/1507939170.1237poster1000.jpg', 'images/user_images/174/product/1507939170.1237poster2-1000.jpg', 0, 0, 0, '2017-10-14 05:29:30', 0),
(11, 97, 151, 58, 'Hi Neck Bavy', 30, 'JS0215', 45, 1, 'Container', 45, 'Joystar', 'You can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyer', 'You can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyerYou can add 2 more images as a design or flyer', '.2', 'images/user_images/177/product/1507995253.50841.jpg', 'images/user_images/177/product/1507995253.50842.jpg', 'images/user_images/177/product/1507995253.50843.jpg', 'images/user_images/177/product/1507995253.50841.jpg', 'images/user_images/177/product/1507995253.50864.jpg', 'images/user_images/177/product/1507995253.5086poster1000.jpg', 'images/user_images/177/product/1507995253.5086poster2-1000.jpg', 1, 0, 0, '2017-10-14 21:04:13', 1),
(12, 100, 172, 62, 'High Neck Shoes', 20, 'HL520', 30, 10000, 'Pairs', 217, 'COCO', 'This a new boot in high neck theme with a great camel color, it''s suitable for all events, such as evening and going wild in oceans, deserts, or even hunting deer, elephants.\r\n\r\nThe high boot come with many accessories and spare parts, engines, gears and much more..\r\n\r\nEnjoy Wear It..', 'Three layers with bumps and air padding, flexible and soft, medical notes and healthy any thing to type.', '0.2', 'images/user_images/185/product/1508569003.03391.jpg', 'images/user_images/185/product/1508569003.03392.jpg', 'images/user_images/185/product/1508569003.03393.jpg', 'images/user_images/185/product/1508569003.03394.jpg', 'images/user_images/185/product/1508569003.0341.jpg', 'images/user_images/185/product/1508569003.034poster2-1000.jpg', 'images/user_images/185/product/1508569003.034poster1000.jpg', 1, 0, 0, '2017-10-21 12:28:22', 1),
(13, 100, 172, 61, 'Lady Sandals With Laces', 50, 'HL025', 30, 1, 'Container H/Q', 45, 'Bally', 'This Part Is About us part and should appear on the product information layer, and also in page details up as 2 or 3 lines with read more.\r\nWhen click on read more the screen scroll up to show ABOUT THIS PRODUCT in full text size.', 'This is the specification of the product, This is the specification of the product, This is the specification of the product, This is the specification of the product, This is the specification of the product, This is the specification of the product, ', '0.5', 'images/user_images/185/product/1508573101.4229L1.jpg', 'images/user_images/185/product/1508573101.4229L2.jpg', 'images/user_images/185/product/1508573101.4229L3.jpg', 'images/user_images/185/product/1508573101.423L4.jpg', 'images/user_images/185/product/1508573101.423L5.jpg', 'images/user_images/185/product/1508573101.423poster3-1000.jpg', 'images/user_images/185/product/1508573101.423poster1000.jpg', 2, 0, 0, '2017-10-21 13:35:01', 1),
(14, 102, 183, 68, 'Modern summer Leather Sofas', 250, 'HL520', 34, 1, 'container', 217, 'Sas', 'This is a new type of lather sofas, mentioned in 2017 collection and shown in Canton Fair session 115, This is a new type of lather sofas, mentioned in 2017 collection and shown in Canton Fair session 115This is a new type of lather sofas, mentioned in 2017 collection and shown in Canton Fair session 115', 'This is the description part of the product', '2', 'images/user_images/190/product/1509623080.1939sofa6.jpg', 'images/user_images/190/product/1509623080.1939sofa2.jpg', 'images/user_images/190/product/1509623080.194sofa1.jpg', 'images/user_images/190/product/1509623080.194sofa4.jpg', 'images/user_images/190/product/1509623080.194sofa5.jpg', 'images/user_images/190/product/1509623080.194poster4-1000.jpg', 'images/user_images/190/product/1509623080.194poster5-1000.jpg', 21, 2, 0, '2017-11-04 18:04:04', 1),
(15, 102, 183, 70, 'Gray Fabric Sofa for summer', 2000, 'HH0', 45, 1, 'container', 107, 'Sumo', 'Jpg format, Dimensions: 960 * 736 pixel, Resolution: 75 Dpi, with \r\nMax. size 160 KBJpg format, Dimensions: 960 * 736 pixel, Resolution: 75 Dpi, with \r\nMax. size 160 KB', 'Jpg format, Dimensions: 960 * 736 pixel, Resolution: 75 Dpi, with \r\nMax. size 160 KBJpg format, Dimensions: 960 * 736 pixel, Resolution: 75 Dpi, with \r\nMax. size 160 KB', '3', 'images/user_images/190/product/1509650428.2314sofa4.jpg', 'images/user_images/190/product/1509650428.2315sofa4.jpg', 'images/user_images/190/product/1509650428.2315sofa4.jpg', 'images/user_images/190/product/1509650428.2315sofa4.jpg', 'images/user_images/190/product/1509650428.2316sofa4.jpg', 'images/user_images/190/product/1509650428.2316poster5-1000.jpg', 'images/user_images/190/product/1509650428.2316poster3-1000.jpg', 2, 0, 0, '2017-11-04 18:03:44', 1),
(16, 102, 186, 0, 'Summer Navy men boots with laces', 120, 'HL000', 45, 1, 'Container H/Q', 107, 'CAT', 'Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.', 'Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.', '.5', 'images/user_images/190/product/1509798532.3014.jpg', 'images/user_images/190/product/1509798532.3011.jpg', 'images/user_images/190/product/1509798532.30112.jpg', 'images/user_images/190/product/1509798532.30113.jpg', 'images/user_images/190/product/1509798532.30114.jpg', 'images/user_images/190/product/1509798532.3011poster1000.jpg', 'images/user_images/190/product/1509798532.3011poster3-1000.jpg', 3, 0, 1, '2017-11-04 18:04:26', 1),
(17, 102, 186, 0, 'Lady Summer Sandal', 30, 'HL222', 30, 1, 'Container H/Q', 217, 'Sand', 'Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.', 'Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.Add unlimited No. of products to your Desksite/Website, under your the Main or Sub \r\nProducts you have created.', '.25', 'images/user_images/190/product/1509798700.4865L3.jpg', 'images/user_images/190/product/1509798700.4865L4.jpg', 'images/user_images/190/product/1509798700.4865L2.jpg', 'images/user_images/190/product/1509798700.4865L5.jpg', 'images/user_images/190/product/1509798700.4865L1.jpg', 'images/user_images/190/product/1509798700.4865poster3-1000.jpg', 'images/user_images/190/product/1509798700.4866poster2-1000.jpg', 6, 0, 0, '2017-11-04 18:01:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_item_color`
--

CREATE TABLE IF NOT EXISTS `tbl_product_item_color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `color_name` varchar(25) DEFAULT NULL,
  `color_code` varchar(25) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `tbl_product_item_color`
--

INSERT INTO `tbl_product_item_color` (`id`, `item_id`, `color_name`, `color_code`, `status`) VALUES
(1, 4, NULL, 'FF0000', 1),
(2, 4, NULL, 'f09090', 1),
(3, 4, NULL, '000000', 1),
(8, 5, NULL, 'ff6f00', 1),
(9, 5, NULL, 'c4c4c4', 1),
(10, 5, NULL, '030303', 1),
(11, 5, NULL, '005eff', 1),
(32, 6, NULL, 'ff7700', 1),
(33, 6, NULL, 'f0f0f0', 1),
(34, 6, NULL, '828282', 1),
(35, 6, NULL, '00ccff', 1),
(39, 7, NULL, 'c2610b', 1),
(40, 7, NULL, '969696', 1),
(41, 7, NULL, '6090a6', 1),
(42, 8, NULL, 'FF0000', 1),
(43, 8, NULL, '00FF00', 1),
(44, 8, NULL, '0000FF', 1),
(45, 8, NULL, 'FFFFFF', 1),
(46, 8, NULL, '000000', 1),
(47, 9, NULL, 'e8dcdc', 1),
(48, 9, NULL, '855252', 1),
(49, 9, NULL, '121212', 1),
(50, 9, NULL, 'a8481b', 1),
(51, 9, NULL, '5c5c5c', 1),
(52, 10, NULL, 'FF0000', 1),
(53, 10, NULL, '00FF00', 1),
(54, 10, NULL, '0000FF', 1),
(55, 10, NULL, 'FFFFFF', 1),
(56, 10, NULL, '000000', 1),
(57, 11, NULL, '522311', 1),
(58, 11, NULL, 'ffffff', 1),
(59, 11, NULL, '474747', 1),
(60, 11, NULL, '1658a8', 1),
(61, 11, NULL, '8c6666', 1),
(67, 12, NULL, 'ff6f00', 1),
(68, 12, NULL, '6f856f', 1),
(69, 12, NULL, '212124', 1),
(70, 12, NULL, 'ffffff', 1),
(71, 12, NULL, '9e9e9e', 1),
(72, 13, NULL, 'c3c4c9', 1),
(73, 13, NULL, 'c99d7b', 1),
(74, 13, NULL, 'ff8c00', 1),
(75, 13, NULL, 'ffffff', 1),
(76, 13, NULL, '000000', 1),
(99, 17, NULL, 'FF0000', 1),
(100, 17, NULL, '00FF00', 1),
(101, 17, NULL, '0000FF', 1),
(102, 17, NULL, 'FFFFFF', 1),
(103, 17, NULL, '000000', 1),
(104, 15, NULL, 'FF0000', 1),
(105, 15, NULL, '00FF00', 1),
(106, 15, NULL, '0000FF', 1),
(107, 15, NULL, 'FFFFFF', 1),
(108, 15, NULL, '000000', 1),
(109, 14, NULL, 'e3e3e3', 1),
(110, 14, NULL, 'd1a860', 1),
(111, 14, NULL, '3d3d3d', 1),
(112, 14, NULL, '964c39', 1),
(113, 16, NULL, 'd6815a', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_item_spec`
--

CREATE TABLE IF NOT EXISTS `tbl_product_item_spec` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `spec_name` varchar(128) DEFAULT NULL,
  `spec_value` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `tbl_product_item_spec`
--

INSERT INTO `tbl_product_item_spec` (`id`, `item_id`, `spec_name`, `spec_value`) VALUES
(3, 2, 'Memory Type', 'DDR1 SDRAM'),
(4, 2, 'Input/Output Ports', 'SATA II, Ethernet (RJ-45), Parallel (IEEE 1284), PATA/IDE/EIDE'),
(5, 3, 'Material Type', 'Leather'),
(6, 3, 'Lifestyle', 'Business'),
(7, 4, 'Material', 'Chiffon'),
(8, 4, 'Length', '36 Inch'),
(11, 5, 'Box Dimensions', '50*20*12'),
(12, 5, 'Material', ' Polly'),
(44, 6, 'Tension', '30 Pairs/Ctn'),
(45, 6, 'Packaging', 'Nice colored printed box'),
(46, 6, 'Shoes Material', 'Shamoazet'),
(47, 6, 'Footer', 'PVC'),
(48, 6, 'Available Colors', ' 5 colors'),
(49, 6, 'Available Sizes', '35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46'),
(50, 6, 'dsf', 'sdf'),
(54, 7, 'Size', '29, 30, 31, 32, 33, 34, to 45'),
(55, 7, 'Laces', 'Cotton 30% + Polyester 40%'),
(56, 7, 'Whatever', 'Yeah'),
(57, 8, 'no', 'na'),
(58, 8, 'no', 'na'),
(59, 9, 'Material', 'Pure Leather'),
(60, 9, 'Footer', 'Plastic with PVC'),
(61, 9, 'Laces', '30% Cotton and 70% Polyester'),
(62, 9, 'Size', 'From 25 to 46'),
(63, 9, 'Colors ', '5 Available charming Colors'),
(64, 9, 'Box Dimensions', '50*20*12'),
(65, 9, 'Box Printing Colors', '4 Colors with UV'),
(66, 10, 'ghjgj', 'ghjg'),
(67, 10, 'ghj', 'gjg'),
(68, 11, 'Leather ', 'PVC'),
(69, 11, 'sdfjasi', 'kldgidjg'),
(70, 11, 'sdgdf', 'gdfg'),
(71, 11, 'sdfgs', 'sfghdfg'),
(72, 11, 'sdfgsfdg', 'sgsfdg'),
(81, 12, 'Laces', '2 material laces with 30% cotton material and 20% polyester '),
(82, 12, 'Footer', 'Soft Rubber'),
(83, 12, 'Back ', 'Supported with 2 Wheels'),
(84, 12, 'Package', 'Colored printed catron'),
(85, 12, 'Design', 'We can make your own design'),
(86, 12, 'More', 'We Accept OEM'),
(87, 12, 'Colors', 'We can provide more 3 colors'),
(88, 12, 'Box Size', '20*30*20 Cm'),
(89, 13, 'Any', 'Any'),
(90, 13, 'Any ', 'Any'),
(104, 17, 'size', 'available'),
(105, 17, 'Package', 'yeah'),
(106, 15, 'safas', 'fasf'),
(107, 15, 'asf', 'asfasf'),
(108, 14, 'any', 'any'),
(109, 14, 'any', 'any'),
(110, 16, 'any', 'any'),
(111, 16, 'any', 'any'),
(112, 16, 'more', 'more'),
(113, 1, 'RAM Size', '4 GB'),
(114, 1, 'Product Dimensions', '33 x 11.4 x 0.3 cm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_main_category`
--

CREATE TABLE IF NOT EXISTS `tbl_product_main_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_product_main_category`
--

INSERT INTO `tbl_product_main_category` (`id`, `name`, `status`) VALUES
(1, 'Computer components', 1),
(2, 'Desktops and servers', 1),
(3, 'Laptop & accessories', 1),
(4, 'Storage devices & drives', 1),
(5, 'Clothing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_stage`
--

CREATE TABLE IF NOT EXISTS `tbl_product_stage` (
  `busi_id` int(11) NOT NULL,
  `step` tinyint(4) DEFAULT '0',
  UNIQUE KEY `busi_id` (`busi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product_stage`
--

INSERT INTO `tbl_product_stage` (`busi_id`, `step`) VALUES
(1, 4),
(18, 4),
(33, 0),
(34, 0),
(35, 0),
(36, 1),
(37, 0),
(38, 1),
(39, 1),
(40, 1),
(41, 0),
(42, 2),
(43, 1),
(44, 0),
(45, 0),
(46, 4),
(47, 0),
(48, 4),
(49, 0),
(50, 2),
(51, 2),
(52, 4),
(53, 0),
(54, 2),
(55, 2),
(56, 2),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 4),
(62, 0),
(63, 0),
(64, 2),
(65, 2),
(66, 0),
(67, 2),
(68, 1),
(69, 0),
(70, 0),
(71, 2),
(72, 2),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0),
(78, 0),
(79, 0),
(80, 0),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(86, 0),
(87, 2),
(88, 0),
(89, 0),
(90, 2),
(91, 0),
(92, 2),
(93, 4),
(94, 4),
(95, 0),
(96, 0),
(97, 4),
(98, 2),
(99, 2),
(100, 4),
(101, 2),
(102, 4),
(103, 0),
(104, 0),
(105, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_sub_category`
--

CREATE TABLE IF NOT EXISTS `tbl_product_sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mcat_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_product_sub_category`
--

INSERT INTO `tbl_product_sub_category` (`id`, `mcat_id`, `name`, `status`) VALUES
(1, 1, 'CPU', 1),
(2, 1, 'Computer case', 1),
(3, 1, 'Cooling fans & heatsinks', 1),
(4, 1, 'Display', 1),
(5, 1, 'Graphics card', 1),
(6, 1, 'Mainboard', 1),
(7, 1, 'Power supply', 1),
(8, 1, 'Sound card', 1),
(9, 2, 'Computer', 1),
(10, 2, 'Embedded computer & SCM ', 1),
(11, 2, 'Servers & workstation', 1),
(12, 3, 'Card reader', 1),
(13, 3, 'Notebook & Laptop computer', 1),
(14, 3, 'Parts', 1),
(15, 3, 'Tablet case & cover', 1),
(16, 3, 'Tablet PC', 1),
(17, 3, 'Palm computer, Pocket PC & PDA', 1),
(18, 4, 'Drive', 1),
(19, 4, 'Memory', 1),
(20, 4, 'Storage Device', 1),
(21, 5, 'Men', 1),
(22, 5, 'Women', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_visitors`
--

CREATE TABLE IF NOT EXISTS `tbl_product_visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) DEFAULT '0',
  `item_id` int(11) NOT NULL,
  `likes` tinyint(4) DEFAULT '0',
  `shares` tinyint(4) DEFAULT '0',
  `city` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `visit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_product_visitors`
--

INSERT INTO `tbl_product_visitors` (`id`, `busi_id`, `item_id`, `likes`, `shares`, `city`, `country`, `ip_address`, `visit_date`) VALUES
(1, 102, 14, 0, 0, 'Guangzhou', 'China', '121.9.142.228', '2017-12-22'),
(2, 102, 14, 1, 0, NULL, NULL, NULL, '2017-12-22'),
(3, NULL, 14, 0, 0, 'Foshan', 'China', '219.130.235.125', '2017-12-25'),
(4, NULL, 14, 0, 0, 'Foshan', 'China', '219.130.235.125', '2017-12-25'),
(5, 102, 2, 0, 0, 'Guangzhou', 'China', '121.9.140.78', '2018-01-04'),
(6, 104, 14, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(7, 104, 14, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(8, 104, 14, 1, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(9, 104, 14, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(10, 104, 14, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-10'),
(11, 104, 14, 0, 0, 'Bangalore', 'India', '122.171.177.230', '2018-01-11'),
(12, NULL, 14, 0, 0, 'Surat', 'India', '103.37.180.132', '2018-01-11'),
(13, NULL, 1, 0, 0, 'Surat', 'India', '103.37.180.132', '2018-01-11'),
(14, 46, 1, 0, 0, 'Asegaon', 'India', '49.35.118.4', '2018-01-11'),
(15, NULL, 17, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(16, NULL, 17, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(17, NULL, 16, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(18, NULL, 16, 0, 1, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(19, NULL, 14, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(20, NULL, 14, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(21, NULL, 15, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(22, NULL, 14, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(23, NULL, 14, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(24, NULL, 1, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(25, NULL, 1, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(26, NULL, 1, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(27, NULL, 1, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(28, NULL, 1, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12'),
(29, 101, 14, 0, 0, 'Foshan', 'China', '219.130.232.161', '2018-01-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rndcapacity_type`
--

CREATE TABLE IF NOT EXISTS `tbl_rndcapacity_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_rndcapacity_type`
--

INSERT INTO `tbl_rndcapacity_type` (`id`, `name`) VALUES
(1, 'OEM'),
(2, 'ODM'),
(3, 'OWN BRAND'),
(4, 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `role`) VALUES
(1, 'useradmin'),
(2, 'subuser'),
(3, 'contactperson');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicevedio`
--

CREATE TABLE IF NOT EXISTS `tbl_servicevedio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `vedio_file` varchar(300) NOT NULL,
  `vedio_title` varchar(300) NOT NULL,
  `vedio_description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `is_deleted` tinyint(4) NOT NULL COMMENT '0=not deleted,1=deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipper_service`
--

CREATE TABLE IF NOT EXISTS `tbl_shipper_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `shipping_cat_id` int(11) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `description` mediumtext,
  `is_special` tinyint(4) DEFAULT '0',
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `visit` bigint(20) DEFAULT '0',
  `likes` int(11) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_shipper_service`
--

INSERT INTO `tbl_shipper_service` (`id`, `busi_id`, `shipping_cat_id`, `name`, `description`, `is_special`, `image1`, `image2`, `image3`, `image4`, `visit`, `likes`, `shares`, `created_date`, `status`) VALUES
(1, 54, 1, 'Air Freight', 'Air Freight services.\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/103/services/1503236796.59comp3.jpg', 'images/user_images/103/services/1503236796.59comp1.jpg', 'images/user_images/103/services/1503236796.59comp2.jpg', 'images/user_images/103/services/1503236796.59comp3.jpg', 0, 0, 0, '2017-08-20 19:16:36', 1),
(2, 54, 5, 'Door2Door', 'Door to door.\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/103/services/1503236796.59comp4.jpg', '', '', '', 0, 0, 0, '2017-08-20 19:16:36', 1),
(3, 54, 4, 'Port Agencies', 'Door to door.\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, '', '', '', '', 0, 0, 0, '2017-08-20 19:16:36', 1),
(4, 54, 1, 'Door2Door Dubail', 'Door to door.\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 1, '', '', '', '', 0, 0, 0, '2017-08-20 19:17:25', 1),
(5, 54, 1, 'Air Freight', 'asfdasf sadff sadf', 0, '', '', '', '', 0, 0, 0, '2017-08-20 19:36:46', 0),
(6, 56, 2, 'Air Freight', 'Air Cargo has become increasingly important over the last years. As our customer you have the highest expectations regarding our service. Thus when selecting our airlines we employ exclusively reliable and qualified partners who can fulfill our – and more importantly, your – expectations to the fullest.\n\nDaily worldwide connections guarantee the fastest transport opportunities for your goods. Right after they are received in the destination country, our customs specialists take over and take care of quick and smooth customs clearance as well as the prompt delivery of your shipment.\n\nWe keep you informed about the status and location of your shipment at any point in time. Due to the reliable agents with our international Offices, local customs offices, reliable airlines and employees worldwide, we provide you with all relevant information – fast and secure.\n\nService categories customized for you enable you to select the perfectly adequate service package for your requirements.\n\nWe are one of the top airfreight forwarding specialists in the region. We provide full packages of air logistics solutions through major airlines. Our operations cover more than 185 countries via a worldwide freight network and our own managed offices in the Middle East and Levant region. Shipments are pre planned, scheduled and traced with its soft solution system. We take care of your cargo’s every need including urgent delivery, temperature control, special handling or door to door delivery as well as DDP & DDU from and to any destination in the world. We also provide occasional, dedicated charter shipments.', 0, 'images/user_images/105/services/1504368731.37service1.jpg', 'images/user_images/105/services/1504368731.37srvices2.jpg', 'images/user_images/105/services/1504368731.37service1.jpg', 'images/user_images/105/services/1504368731.37srvices2.jpg', 0, 0, 0, '2017-09-02 21:42:11', 1),
(7, 56, 1, 'Air Freight', 'Air Cargo has become increasingly important over the last years. As our customer you have the highest expectations regarding our service. Thus when selecting our airlines we employ exclusively reliable and qualified partners who can fulfill our – and more importantly, your – expectations to the fullest.\r\n\r\nDaily worldwide connections guarantee the fastest transport opportunities for your goods. Right after they are received in the destination country, our customs specialists take over and take care of quick and smooth customs clearance as well as the prompt delivery of your shipment.\r\n\r\nWe keep you informed about the status and location of your shipment at any point in time. Due to the reliable agents with our international Offices, local customs offices, reliable airlines and employees worldwide, we provide you with all relevant information – fast and secure.\r\n\r\nService categories customized for you enable you to select the perfectly adequate service package for your requirements.\r\n\r\nWe are one of the top airfreight forwarding specialists in the region. We provide full packages of air logistics solutions through major airlines. Our operations cover more than 185 countries via a worldwide freight network and our own managed offices in the Middle East and Levant region. Shipments are pre planned, scheduled and traced with its soft solution system. We take care of your cargo’s every need including urgent delivery, temperature control, special handling or door to door delivery as well as DDP & DDU from and to any destination in the world. We also provide occasional, dedicated charter shipments.', 0, 'images/user_images/105/services/1504368731.37service1.jpg', 'images/user_images/105/services/1504368731.37srvices2.jpg', 'images/user_images/105/services/1504368731.37service1.jpg', 'images/user_images/105/services/1504368731.37srvices2.jpg', 0, 0, 0, '2017-09-02 21:42:11', 1),
(8, 56, 1, 'Air Freight', 'Air Cargo has become increasingly important over the last years. As our customer you have the highest expectations regarding our service. Thus when selecting our airlines we employ exclusively reliable and qualified partners who can fulfill our – and more importantly, your – expectations to the fullest.\r\n\r\nDaily worldwide connections guarantee the fastest transport opportunities for your goods. Right after they are received in the destination country, our customs specialists take over and take care of quick and smooth customs clearance as well as the prompt delivery of your shipment.\r\n\r\nWe keep you informed about the status and location of your shipment at any point in time. Due to the reliable agents with our international Offices, local customs offices, reliable airlines and employees worldwide, we provide you with all relevant information – fast and secure.\r\n\r\nService categories customized for you enable you to select the perfectly adequate service package for your requirements.\r\n\r\nWe are one of the top airfreight forwarding specialists in the region. We provide full packages of air logistics solutions through major airlines. Our operations cover more than 185 countries via a worldwide freight network and our own managed offices in the Middle East and Levant region. Shipments are pre planned, scheduled and traced with its soft solution system. We take care of your cargo’s every need including urgent delivery, temperature control, special handling or door to door delivery as well as DDP & DDU from and to any destination in the world. We also provide occasional, dedicated charter shipments.', 0, 'images/user_images/105/services/1504368731.37service1.jpg', 'images/user_images/105/services/1504368731.37srvices2.jpg', 'images/user_images/105/services/1504368731.37service1.jpg', 'images/user_images/105/services/1504368731.37srvices2.jpg', 0, 0, 0, '2017-09-02 21:42:11', 1),
(9, 67, 1, 'Air Freight', '\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor', 0, 'images/user_images/118/services/1505451019.291.jpg', 'images/user_images/118/services/1505451019.292.jpg', 'images/user_images/118/services/1505451019.291.jpg', 'images/user_images/118/services/1505451019.292.jpg', 0, 0, 0, '2017-09-15 10:20:19', 0),
(10, 67, 2, 'Sea Fright', '\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a vis', 0, 'images/user_images/118/services/1505451019.291.jpg', 'images/user_images/118/services/1505451019.292.jpg', '', '', 0, 0, 0, '2017-09-15 10:20:19', 1),
(11, 67, 5, 'Land Freight', '\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\r\nThis description will be showing along with the 4 related images, as a web page, when a vis', 0, 'images/user_images/118/services/1505451019.291.jpg', 'images/user_images/118/services/1505451019.292.jpg', '', '', 0, 0, 0, '2017-09-15 10:20:19', 1),
(12, 67, 1, 'Air Freight', '\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a vis', 0, '', '', '', '', 0, 0, 0, '2017-09-15 10:23:34', 1),
(13, 67, 1, 'Air Freight', '\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\nThis description will be showing along with the 4 related images, as a web page, when a vis', 0, '', '', '', '', 0, 0, 0, '2017-09-15 10:24:00', 1),
(14, 67, 1, 'Air Freight', 'fgdcvsfs asfsfsdf sdfsf sdf', 0, '', '', '', '', 0, 0, 0, '2017-09-15 10:36:27', 0),
(15, 67, 4, 'safdsfsd', 'safsfsfs', 1, '', '', '', '', 0, 0, 0, '2017-09-15 10:56:28', 1),
(16, 72, 1, 'Air Freight', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/136/services/1506416722.711.jpg', 'images/user_images/136/services/1506416722.712.jpg', '', '', 0, 0, 0, '2017-09-26 14:35:22', 1),
(17, 72, 5, 'Sea Freight', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkg', 0, 'images/user_images/136/services/1506416722.712.jpg', '', '', '', 0, 0, 0, '2017-09-26 14:35:22', 1),
(18, 72, 5, 'Ocean Fright', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkgryr ', 0, 'images/user_images/136/services/1506416722.711.jpg', 'images/user_images/136/services/1506416882.982.jpg', '', '', 0, 0, 0, '2017-09-26 14:35:22', 0),
(19, 72, 5, 'Ocean Freight', 'sfrghrgdfr rhtry th thth', 0, 'images/user_images/136/services/1506417195.811.jpg', '', '', '', 0, 0, 0, '2017-09-26 14:43:15', 1),
(20, 72, 1, 'USD 20.00, Door to Door air cargo from china to dubai at great price', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\n400 Remining.....\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\n400 Remining.....\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\n400 Remining.....\nThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link\n400 Remining.....', 1, 'images/user_images/136/services/1506417274.961.jpg', '', '', '', 0, 0, 0, '2017-09-26 14:44:34', 1),
(21, 85, 1, 'Air Freight', 'we provide our customers with a great Door to Door, air freight services from any port in china to worlrdwide. We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.', 0, 'images/user_images/158/services/1507475069.92881.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:34:29', 1),
(22, 85, 5, 'Sea Freight', 'We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide. We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.', 0, 'images/user_images/158/services/1507475069.92882.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:34:29', 1),
(23, 85, 3, 'Land Freight', 'We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.', 0, 'images/user_images/158/services/1507475069.92892.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:34:29', 1),
(24, 85, 4, 'Door to Door', 'We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.', 0, 'images/user_images/158/services/1507475069.92891.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:34:29', 1),
(25, 85, 1, 'Door to Door air cargo from china to dubai at great price', 'We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.We provide our customers with a great Door to Door, ocean freight services from any port in china to worldwide.', 1, 'images/user_images/158/services/1507475258.71751.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:37:38', 1),
(26, 85, 3, 'Fourth Services', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/158/services/1507475503.71082.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:41:43', 1),
(27, 85, 4, 'Sea Cargo', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/158/services/1507475548.19911.jpg', '', '', '', 0, 0, 0, '2017-10-08 20:42:28', 1),
(28, 85, 4, 'Goods Inspections ', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/158/services/1507479363.75071.jpg', '', '', '', 0, 0, 0, '2017-10-08 21:46:03', 1),
(29, 85, 6, 'Container Loading ', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/158/services/1507479400.43762.jpg', '', '', '', 0, 0, 0, '2017-10-08 21:46:40', 1),
(30, 85, 3, 'lolo', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/158/services/1507479430.02281.jpg', '', '', '', 0, 0, 0, '2017-10-08 21:47:10', 1),
(31, 85, 5, 'door to door dubai', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/158/services/1507479470.99132.jpg', '', '', '', 0, 0, 0, '2017-10-08 21:47:50', 1),
(32, 90, 1, 'Door to Door', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/167/services/1507849087.36671.jpg', '', '', '', 0, 0, 0, '2017-10-13 04:28:07', 1),
(33, 90, 4, 'Port Agency', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/167/services/1507849132.62072.jpg', '', '', '', 0, 0, 0, '2017-10-13 04:28:52', 1),
(34, 90, 3, 'Door to Door air cargo from china to dubai at great price', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkxzcThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkxzcThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkxzcThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkxzcThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkxzcThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkxzc', 1, 'images/user_images/167/services/1507849176.72281.jpg', '', '', '', 0, 0, 0, '2017-10-13 04:29:36', 1);
INSERT INTO `tbl_shipper_service` (`id`, `busi_id`, `shipping_cat_id`, `name`, `description`, `is_special`, `image1`, `image2`, `image3`, `image4`, `visit`, `likes`, `shares`, `created_date`, `status`) VALUES
(35, 99, 1, 'Door to Door', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/183/services/1508488724.89452.jpg', '', '', '', 0, 0, 0, '2017-10-20 14:08:44', 1),
(36, 99, 1, 'Air Freight', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/183/services/1508488724.89461.jpg', '', '', '', 0, 0, 0, '2017-10-20 14:08:44', 1),
(37, 99, 1, 'Fast Cargo', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/183/services/1508488784.34611.jpg', '', '', '', 0, 0, 0, '2017-10-20 14:09:44', 1),
(38, 99, 5, 'Door to Door air cargo from china to dubai at great price', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 1, 'images/user_images/183/services/1508488923.73932.jpg', '', '', '', 0, 0, 0, '2017-10-20 14:12:03', 1),
(39, 99, 3, 'Door2Door Dubail', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 1, 'images/user_images/183/services/1508488945.96611.jpg', '', '', '', 0, 0, 0, '2017-10-20 14:12:25', 1),
(40, 99, 4, 'Logisti cs', 'This description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service linkThis description will be showing along with the 4 related images, as a web page, when a visitor click on the service link', 0, 'images/user_images/183/services/1510487971.36732.jpg', '', '', '', 0, 0, 0, '2017-11-12 17:29:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipper_service_visitors`
--

CREATE TABLE IF NOT EXISTS `tbl_shipper_service_visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) DEFAULT '0',
  `service_id` int(11) NOT NULL,
  `city` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `likes` int(11) DEFAULT '0',
  `shares` int(11) DEFAULT '0',
  `visit_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping_main_categories`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping_main_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_shipping_main_categories`
--

INSERT INTO `tbl_shipping_main_categories` (`id`, `name`, `alias`, `status`) VALUES
(1, 'Air Freight', 'Air Freight', 1),
(2, 'Express Services', 'Express Services', 1),
(3, 'Land Freight', 'Land Freight', 1),
(4, 'Logistics', 'Logistics', 1),
(5, 'Ocean Freight', 'Ocean Freight, Sea Freight', 1),
(6, 'Shipping Services', 'Shipping Services, FreightServices, Cargo Services', 1),
(7, 'Other Shipping', 'Other Shipping', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocks_buyer_request`
--

CREATE TABLE IF NOT EXISTS `tbl_stocks_buyer_request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `details` text,
  `attachment` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `additional_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocks_goods`
--

CREATE TABLE IF NOT EXISTS `tbl_stocks_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `product_item_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` text,
  `usd_price` varchar(255) NOT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `is_locked` tinyint(4) DEFAULT '0',
  `is_deleted` tinyint(4) DEFAULT '0',
  `created_date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_stocks_goods`
--

INSERT INTO `tbl_stocks_goods` (`id`, `busi_id`, `product_item_id`, `title`, `image1`, `image2`, `image3`, `image4`, `description`, `usd_price`, `quantity`, `is_locked`, `is_deleted`, `created_date`, `status`) VALUES
(1, 46, 1, 'GB DDR3 Ram available', 'assets/images/stock_images/product22.jpg', 'assets/images/stock_images/product12.jpg', 'assets/images/stock_images/mb32.JPG', 'assets/images/stock_images/mb2.JPG', 'Biostar Mini ITX DDR3 1333 Motherboards A68N-2100|CPU (Included): AMD Fusion APU E1-2100 Processor (Dual-Core)|Memory: 2x DDR3/DDR3L-1333/ 1066/ 800 DIMM Slots, Max Capacity of 16GB|Slots: 1x PCI-Express 2.0 x16 Slot (runs at x4)|SATA: 2x SATA3 Ports|Ports: 2x USB 3.0 Ports, 6x USB 2.0 Ports (2 rear, 4 via headers), 1x PS/2 Keyboard Port, 1x PS/2 Mouse Port, 1x VGA Port, 1x HDMI Port, 1x RJ45 LAN Port, Audio I/O Jacks|Biostar A68N-2100 AMD Fusion APU E1-2100/ DDR3&DDR3L/ SATA3&USB3.0/ A&V&GbE/ Mini-ITX Motherboard & CPU Combo', '50000', '2', 0, 0, '2017-07-16 15:04:28', 1),
(2, 46, 1, 'Post11', 'assets/images/stock_images/Koala.jpg', 'assets/images/stock_images/Lighthouse.jpg', 'assets/images/stock_images/Penguins.jpg', 'assets/images/stock_images/Tulips.jpg', 'desc', '56', '7', 0, 0, '2017-07-16 16:27:39', 1),
(3, 46, 2, 'test', 'assets/images/stock_images/mb21.JPG', 'assets/images/stock_images/product23.jpg', 'assets/images/stock_images/product13.jpg', 'assets/images/stock_images/mb33.JPG', 'test', '40000', '5', 0, 0, '2017-07-16 16:27:49', 1),
(4, 46, 1, 'Test Product', 'assets/images/stock_images/wb-4.jpg', 'assets/images/stock_images/wb-3.jpg', 'assets/images/stock_images/wb-2.jpg', 'assets/images/stock_images/wb-1.jpg', 'Be sure to use the parts of && in this order, because java will not proceed to evaluating the the second if the first part of && fails, thus ensuring you will not get a null pointer exception from str.isEmpty() if str is null.', '40', '2', 0, 0, '2017-07-16 16:38:57', 1),
(5, 98, 0, 'I Need This Post Covers All Kind Of Stock', 'images/bstation_images/shoes-slide.jpg', 'images/bstation_images/shoes-slide1.jpg', '', '', '" I Need This " Post Covers All Kind Of Stocks And Ready Goods Required By Worldwide Buyers ..\r\n\r\n" I Need This " Post Covers All Kind Of Stocks And Ready Goods Required By Worldwide Buyers ..\r\n\r\n" I Need This " Post Covers All Kind Of Stocks And Ready Goods Required By Worldwide Buyers ..\r\n\r\n" I Need This " Post Covers All Kind Of Stocks And Ready Goods Required By Worldwide Buyers ..\r\n\r\n" I Need This " Post Covers All Kind Of Stocks And Ready Goods Required By Worldwide Buyers ..\r\n\r\n', '', '0', NULL, 0, '2017-10-22 19:40:19', 1),
(6, 46, 0, 'Stylish Kurta For Women', 'images/bstation_images/1510164310.8766bstation.jpg', 'images/bstation_images/1510164310.8772bstation.jpg', 'images/bstation_images/1510164310.8773bstation.jpg', 'images/bstation_images/1510164310.8773bstation.jpg', 'Hand Wash or gentle machine wash in cold water with mild/liquid detergents recommended. Do not bleach. Do not wring. Do not iron on embellishments. Iron inside out. Dry in shade.', '45.75', '1 Container', NULL, 0, '2017-11-08 23:35:10', 1),
(7, 101, 0, 'Shoes required to be items', 'images/bstation_images/4qbiynvcp45.jpg', 'images/bstation_images/shoes-slide3.jpg', 'images/bstation_images/shoes-slide21.jpg', 'images/bstation_images/shoes42.jpg', 'i need this models in high quality, i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high quality i need this models in high qu', '', NULL, NULL, 0, '2017-12-20 14:46:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stocks_seller_offer`
--

CREATE TABLE IF NOT EXISTS `tbl_stocks_seller_offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `message` text,
  `details` text,
  `attachment` varchar(255) DEFAULT NULL,
  `price` double DEFAULT '0',
  `unit_type` varchar(45) DEFAULT '',
  `quantity` varchar(45) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `additional_email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscription_plan`
--

CREATE TABLE IF NOT EXISTS `tbl_subscription_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `price` double DEFAULT '0',
  `shipper_price` double NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_subscription_plan`
--

INSERT INTO `tbl_subscription_plan` (`id`, `name`, `icon`, `price`, `shipper_price`, `status`) VALUES
(1, 'Free', NULL, 0, 0, 1),
(2, 'Basic', NULL, 1499, 999, 1),
(3, 'VIP', NULL, 2999, 1999, 1),
(4, 'Elite', NULL, 4999, 3999, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscription_plan_item`
--

CREATE TABLE IF NOT EXISTS `tbl_subscription_plan_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `cust_type` tinyint(4) DEFAULT '1',
  `name` varchar(128) NOT NULL,
  `code` varchar(10) NOT NULL,
  `value` varchar(128) NOT NULL,
  `intvalue` varchar(40) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `subs_plan_index_1` (`plan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `tbl_subscription_plan_item`
--

INSERT INTO `tbl_subscription_plan_item` (`id`, `plan_id`, `cust_type`, `name`, `code`, `value`, `intvalue`) VALUES
(1, 1, 1, 'Member Logo', 'logo', '--', ''),
(2, 1, 1, 'Display Priority', 'display', '4', '4'),
(3, 1, 1, 'Ranking Percentage', 'rank', '0', '0'),
(4, 1, 1, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(5, 1, 1, 'Desksite/Website Slide Background', 'bg', 'Fixed Background', '0'),
(6, 1, 1, 'Storage Box ( With Unlimited Products Posting)', 'sb', '50MB', '50'),
(7, 1, 1, 'Business Station Posts (Send & Receive)', 'bsp', 'No', '0'),
(8, 1, 1, 'Stock Market Posts  (Send & Receive)', 'smp', 'No', '0'),
(9, 1, 1, 'Community + Adding Buyers ( And members)', 'cab', 'No', '0'),
(10, 1, 1, 'Community + Posts Storage', 'cps', '--', '0'),
(11, 1, 1, 'Offers + Inquiries Storage Box', 'ois', '10 MB', '10'),
(12, 1, 1, 'Videos Posting', 'vp', '--', '0'),
(13, 1, 1, 'Virtual Catalogues ( Interactive)', 'vc', '--', '0'),
(14, 1, 1, 'Real In 3D products', 'ri3p', '--', '0'),
(15, 1, 1, 'My Files', 'mf', '--', '0'),
(16, 1, 1, 'Sub Users', 'su', '--', '0'),
(17, 2, 1, 'Member Logo', 'logo', 'Black Horse member', ''),
(18, 2, 1, 'Display Priority', 'display', '3', '3'),
(19, 2, 1, 'Ranking Percentage', 'rank', '59', '59'),
(20, 2, 1, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(21, 2, 1, 'Desksite/Website Slide Background', 'bg', 'Fixed Background', '0'),
(22, 2, 1, 'Storage Box ( With Unlimited Products Posting)', 'sb', '2.5 GB', '2560'),
(23, 2, 1, 'Business Station Posts (Send & Receive)', 'bsp', 'Yes', '1'),
(24, 2, 1, 'Stock Market Posts  (Send & Receive)', 'smp', 'Yes', '1'),
(25, 2, 1, 'Community + Adding Buyers ( And members)', 'cab', 'No', '0'),
(26, 2, 1, 'Community + Posts Storage', 'cps', '--', '0'),
(27, 2, 1, 'Offers + Inquiries Storage Box', 'ois', '100 MB + 100 MB', '200'),
(28, 2, 1, 'Videos Posting', 'vp', '1 Videos', '1'),
(29, 2, 1, 'Virtual Catalogues ( Interactive)', 'vc', '1 Catalogues', '1'),
(30, 2, 1, 'Real In 3D products', 'ri3p', 'Up to 10', '10'),
(31, 2, 1, 'My Files', 'mf', 'Up to 5 MB', '5'),
(32, 2, 1, 'Sub Users', 'su', 'Up to 5', '5'),
(33, 3, 1, 'Member Logo', 'logo', 'Black Horse Member', ''),
(34, 3, 1, 'Display Priority', 'display', '2', '2'),
(35, 3, 1, 'Ranking Percentage', 'rank', '61', '61'),
(36, 3, 1, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(37, 3, 1, 'Desksite/Website Slide Background', 'bg', 'Yes', '1'),
(38, 3, 1, 'Storage Box ( With Unlimited Products Posting)', 'sb', '4 GB', '4096'),
(39, 3, 1, 'Business Station Posts (Send & Receive)', 'bsp', 'Yes', '1'),
(40, 3, 1, 'Stock Market Posts  (Send & Receive)', 'smp', 'Yes', '1'),
(41, 3, 1, 'Community + Adding Buyers ( And members)', 'cab', 'No', '0'),
(42, 3, 1, 'Community + Posts Storage', 'cps', '--', '0'),
(43, 3, 1, 'Offers + Inquiries Storage Box', 'ois', '150 MB + 150 MB', '300'),
(44, 3, 1, 'Videos Posting', 'vp', '2 Videos', '2'),
(45, 3, 1, 'Virtual Catalogues ( Interactive)', 'vc', '2 Catalogues', '2'),
(46, 3, 1, 'Real In 3D products', 'ri3p', 'Up to 20', '20'),
(47, 3, 1, 'My Files', 'mf', 'Up to 15 MB', '15'),
(48, 3, 1, 'Sub Users', 'su', 'Up to 5', '5'),
(49, 4, 1, 'Member Logo', 'logo', 'Black Horse Member', ''),
(50, 4, 1, 'Display Priority', 'display', '1', '1'),
(51, 4, 1, 'Ranking Percentage', 'rank', '63', '63'),
(52, 4, 1, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(53, 4, 1, 'Desksite/Website Slide Background', 'bg', 'Yes', '1'),
(54, 4, 1, 'Storage Box ( With Unlimited Products Posting)', 'sb', '6 GB', '6144'),
(55, 4, 1, 'Business Station Posts (Send & Receive)', 'bsp', 'Yes', '1'),
(56, 4, 1, 'Stock Market Posts  (Send & Receive)', 'smp', 'Yes', '1'),
(57, 4, 1, 'Community + Adding Buyers ( And members)', 'cab', 'Yes', '1'),
(58, 4, 1, 'Community + Posts Storage', 'cps', '600 MB', '600'),
(59, 4, 1, 'Offers + Inquiries Storage Box', 'ois', '200 MB + 200 MB', '400'),
(60, 4, 1, 'Videos Posting', 'vp', '5 Videos', '5'),
(61, 4, 1, 'Virtual Catalogues ( Interactive)', 'vc', '4 Catalogues', '4'),
(62, 4, 1, 'Real In 3D products', 'ri3p', 'Up to 30', '30'),
(63, 4, 1, 'My Files', 'mf', 'Up to 20 MB', '20'),
(64, 4, 1, 'Sub Users', 'su', 'Up to 5', '5'),
(65, 2, 2, 'Member Logo', 'logo', 'Black horse Member', ''),
(66, 2, 2, 'Display Priority', 'display', '3', '3'),
(67, 2, 2, 'Services Menu', 'sm', 'Yes', '1'),
(68, 2, 2, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(69, 2, 2, 'Desksite/Website Slide Background', 'bg', 'Fixed Background', '0'),
(70, 2, 2, 'Storage Box', 'sb', '1.5 GB', '1536'),
(71, 2, 2, 'Business Station Posts (Send & Receive)', 'bsp', 'Yes', '1'),
(72, 2, 2, 'Stock Market Posts  (Send & Receive)', 'smp', 'Yes', '1'),
(73, 2, 2, 'Community + Adding Members', 'cab', 'No', '0'),
(74, 2, 2, 'Community + Posts Storage', 'cps', '--', '0'),
(75, 2, 2, 'Offers + Inquiries Storage Box', 'ois', '100 MB + 100 MB', '200'),
(76, 2, 2, 'Videos Posting', 'vp', 'No', '0'),
(77, 2, 2, 'My Files', 'mf', 'Up to 5 MB', '5'),
(78, 2, 2, 'Sub Users', 'su', 'Up to 5', '5'),
(79, 3, 2, 'Member Logo', 'logo', 'Black horse Member', '0'),
(80, 3, 2, 'Display Priority', 'display', '2', '2'),
(81, 3, 2, 'Services Menu', 'sm', 'Yes', '1'),
(82, 3, 2, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(83, 3, 2, 'Desksite/Website Slide Background', 'bg', 'Yes', '1'),
(84, 3, 2, 'Storage Box', 'sb', '2 GB', '2048'),
(85, 3, 2, 'Business Station Posts (Send & Receive)', 'bsp', 'Yes', '1'),
(86, 3, 2, 'Stock Market Posts  (Send & Receive)', 'smp', 'Yes', '1'),
(87, 3, 2, 'Community + Adding Members', 'cab', 'No', '0'),
(88, 3, 2, 'Community + Posts Storage', 'cps', '--', '0'),
(89, 3, 2, 'Offers + Inquiries Storage Box', 'ois', '150 MB + 150 MB', '300'),
(90, 3, 2, 'Videos Posting', 'vp', '2 Videos', '2'),
(91, 3, 2, 'My Files', 'mf', 'Up to 15 MB', '15'),
(92, 3, 2, 'Sub Users', 'su', 'Up to 5', '5'),
(93, 4, 2, 'Member Logo', 'logo', 'Black horse Member', '0'),
(94, 4, 2, 'Display Priority', 'display', '1', '1'),
(95, 4, 2, 'Services Menu', 'sm', 'Yes', '1'),
(96, 4, 2, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(97, 4, 2, 'Desksite/Website Slide Background', 'bg', 'Yes', '1'),
(98, 4, 2, 'Storage Box', 'sb', '3 GB', '3072'),
(99, 4, 2, 'Business Station Posts (Send & Receive)', 'bsp', 'Yes', '1'),
(100, 4, 2, 'Stock Market Posts  (Send & Receive)', 'smp', 'Yes', '1'),
(101, 4, 2, 'Community + Adding Members', 'cab', 'Yes', '1'),
(102, 4, 2, 'Community + Posts Storage', 'cps', '600 MB', '600'),
(103, 4, 2, 'Offers + Inquiries Storage Box', 'ois', '200 MB + 200 MB', '400'),
(104, 4, 2, 'Videos Posting', 'vp', '3 Videos', '3'),
(105, 4, 2, 'My Files', 'mf', 'Up to 20 MB', '20'),
(106, 4, 2, 'Sub Users', 'su', 'Up to 5', '5'),
(107, 1, 3, 'My Files', 'mf', '5 MB', '5'),
(108, 1, 3, 'Sub Users', 'su', 'Up to 2', '2'),
(109, 1, 2, 'Member Logo', 'logo', '--', '0'),
(110, 1, 2, 'Display Priority', 'display', '4', '4'),
(111, 1, 2, 'Services Menu', 'sm', 'Yes', '1'),
(112, 1, 2, 'Customized Desksite & Website', 'desksite', 'Yes', '1'),
(113, 1, 2, 'Desksite/Website Slide Background', 'bg', 'Fixed Background', '0'),
(114, 1, 2, 'Storage Box', 'sb', '50 MB', '50'),
(115, 1, 2, 'Business Station Posts (Send & Receive)', 'bsp', 'No', '0'),
(116, 1, 2, 'Stock Market Posts  (Send & Receive)', 'smp', 'No', '0'),
(117, 1, 2, 'Community + Adding Members', 'cab', 'No', '0'),
(118, 1, 2, 'Community + Posts Storage', 'cps', '--', '0'),
(119, 1, 2, 'Offers + Inquiries Storage Box', 'ois', '10 MB', '10'),
(120, 1, 2, 'Videos Posting', 'vp', '--', '0'),
(121, 1, 2, 'My Files', 'mf', '--', '0'),
(122, 1, 2, 'Sub Users', 'su', '--', '0'),
(123, 1, 3, 'Storage Box', 'sb', '900 MB', '900');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_product`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mproduct_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sortorder` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `tbl_sub_product`
--

INSERT INTO `tbl_sub_product` (`id`, `mproduct_id`, `name`, `sortorder`, `status`) VALUES
(1, 2, 'I Ball Cabinet', 2, 1),
(2, 1, 'Main Board', 1, 1),
(3, 4, '21inch Monitor', 2, 1),
(5, 3, '3rd Gen CPU', 1, 1),
(6, 1, 'Side Board New', 1, 1),
(7, 16, 'Casual Shoes', 1, 1),
(8, 9, '4 GB RAM', 1, 1),
(9, 11, 'Casual Shoes', 1, 1),
(10, 11, 'Sports Shoes', 1, 1),
(11, 11, 'Casual Shoes', 2, 1),
(12, 11, 'Sports Shoes', 2, 1),
(13, 17, 'Kurti', 1, 1),
(14, 35, 'Sport', 1, 1),
(15, 35, 'Casual', 1, 1),
(17, 41, 'Plastic', 2, 1),
(18, 41, 'Leather', 2, 1),
(19, 35, 'Classic', 3, 1),
(20, 66, 'Classic Shoes', 2, 1),
(21, 66, 'Sport Shoes', 1, 1),
(22, 66, 'Casual Shoes', 1, 1),
(23, 66, 'Slippers', 1, 1),
(24, 67, 'Sandals', 2, 1),
(25, 67, 'Sport Shoes', 1, 1),
(27, 69, 'Casual Shoes', 1, 1),
(28, 69, 'Sport Shoes', 2, 1),
(29, 69, 'Classic Shoes', 3, 1),
(30, 69, 'Slippers', 4, 1),
(31, 133, 'Men Shoes', 2, 1),
(32, 133, 'Lady Shoes', 1, 1),
(33, 133, 'Kids Shoes', 1, 1),
(34, 134, 'Lady Sandals', 2, 1),
(35, 134, 'Girls Sandals', 2, 1),
(36, 134, 'Mom  Sndals', 1, 1),
(37, 134, 'Girls Sandals', 2, 0),
(38, 134, 'Girls Sandals', 2, 0),
(39, 146, 'anymore', 1, 1),
(40, 147, 'hgh', 1, 1),
(41, 147, 'ghg', 1, 1),
(42, 147, 'kkk', 1, 1),
(43, 148, 'lkl', 2, 1),
(44, 148, 'klk', 2, 1),
(45, 149, 'yuy', 3, 1),
(46, 149, 'huh', 3, 1),
(47, 149, 'iou', 3, 1),
(48, 149, 'jju', 3, 1),
(49, 149, 'jklgtf', 3, 1),
(50, 149, 'mklkjhl', 3, 1),
(51, 149, 'mjklhgu', 3, 1),
(52, 149, 'jjjjjj', 3, 1),
(53, 149, 'kkkkkkk', 3, 1),
(54, 149, 'uuuuuuu', 3, 1),
(55, 150, 'new', 1, 1),
(56, 151, 'Callsic', 1, 1),
(57, 151, 'Sport', 1, 1),
(58, 151, 'Casual', 1, 1),
(59, 152, 'Baby', 2, 1),
(60, 152, 'Man', 2, 1),
(61, 172, 'Lady Shoes', 1, 1),
(62, 172, 'Men Shoes', 1, 1),
(63, 172, 'Baby Shoes', 1, 1),
(64, 172, 'Baby Shoes', 1, 1),
(65, 174, 'Lady Slipper', 2, 0),
(66, 174, 'Men Slippers', 2, 1),
(67, 173, 'Any More', 1, 0),
(68, 183, 'Outdoors wooden furniture', 1, 1),
(69, 183, 'Leather Sofas', 1, 1),
(70, 183, 'Fabric Sofas', 1, 1),
(71, 183, 'Fabric Sofas', 1, 1),
(72, 185, 'Table', 1, 1),
(73, 183, 'Fabric Sofas', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trade_info`
--

CREATE TABLE IF NOT EXISTS `tbl_trade_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `main_market_ids` varchar(255) DEFAULT NULL,
  `part1` varchar(255) DEFAULT NULL,
  `part2` varchar(255) DEFAULT NULL,
  `part3` varchar(255) DEFAULT NULL,
  `terms_of_international_trade_ids` varchar(255) DEFAULT NULL,
  `terms_of_payment_ids` varchar(255) DEFAULT NULL,
  `payment_currency_ids` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_trade_info`
--

INSERT INTO `tbl_trade_info` (`id`, `busi_id`, `main_market_ids`, `part1`, `part2`, `part3`, `terms_of_international_trade_ids`, `terms_of_payment_ids`, `payment_currency_ids`, `created_date`) VALUES
(20, 38, '1,5', '8934893', '3485734345', '345345', '1,7', '1,7', '1,7', '2017-07-03 20:17:18'),
(21, 39, '2,6', '8876786', '87889', '9890', '8,3', '2,3', '8,3', '2017-07-03 22:42:45'),
(22, 44, '9', '12', '', '', '11', '4', '1', '2017-07-08 23:36:14'),
(23, 46, '1,2,7', 'Mumbai', 'Kolkata', '', '1,7,2,8', '1,7,8,4', '1,2,5', '2017-07-12 12:16:01'),
(24, 48, '5', '98', '', '', '2', '1', '1', '2017-07-15 13:47:15'),
(25, 52, '1,2', 'Shenzen', 'Yantian', '', '1,3', '1,2', '1,8', '2017-08-16 19:53:14'),
(26, 53, '1,5,9', 'Guangzhou', 'Guangzhou', '', '1,7', '1,7', '1', '2017-08-19 19:08:23'),
(27, 57, '1,5,9', 'Mumbai', 'Kolkata', '', '1,7', '1,7', '1,7', '2017-09-03 17:55:56'),
(28, 60, '1,5', '24424', '234234', '234', '1,7', '1,2,3', '1,2,3', '2017-09-03 18:45:08'),
(29, 61, '1,2,3,4,5,6,7,8,9,', 'Yantian', 'Shenzen', '', '1,7', '1,2,3,4,5,6,7', '1,2,3,4,5,6,7,8,9', '2017-09-05 21:07:11'),
(30, 75, '1,4,7', 'adssdf', 'asd', 'sdf', '1,2,3', '2,3', '2,3,4', '2017-09-26 21:19:12'),
(31, 75, '1,4,7', 'adssdf', 'asd', 'sdf', '1,2,3', '2,3', '2,3,4', '2017-09-26 21:20:26'),
(32, 86, '1,9', 'Shanghai', '', '', '1,7,2,8,3,9,4,10,5,11,6', '1,7,2', '1,8', '2017-10-09 18:35:57'),
(33, 93, '5,7,8', 'Reyadh', 'Reyadh', 'Geddah', '1,2,3', '1,7,2', '1,2,8', '2017-10-13 05:34:21'),
(34, 94, '1', 'Shenzen', 'Shenzen', 'shokkhina', '1,2,3', '1', '1,7,2', '2017-10-13 17:36:12'),
(35, 97, '2,7', 'Ningbo', 'Shenzen', 'Yantian', '1,3', '1,2,7', '1,2,8', '2017-10-14 20:32:38'),
(36, 100, '1,2,3,4,5,6,7,8,9,', 'Istanbul', 'Turkey', '', '1,7,2,8,3,9,4,10,5,11,6', '1,7,2', '1,2', '2017-10-21 11:50:25'),
(37, 102, '5,8', 'Instanbul', '', '', '1,2,3', '1,7,2', '1,2,8', '2017-11-02 14:34:22'),
(38, 104, '1,2,3,4,5,6,7,8,9,', 'sds', '', '', '1,7,2,8,3,9,4,10,5,11,6', '8', '1', '2018-01-10 01:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_udtalk_image`
--

CREATE TABLE IF NOT EXISTS `tbl_udtalk_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT '0',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tbl_udtalk_image`
--

INSERT INTO `tbl_udtalk_image` (`id`, `busi_id`, `image`, `is_deleted`, `created_date`) VALUES
(1, 46, 'images/user_images/94/udtalk/1504800581.56udt.jpg', 0, '2017-09-07 21:39:41'),
(2, 48, 'images/user_images/96/udtalk/1504813905.28udt.jpg', 0, '2017-09-08 01:21:45'),
(5, 61, 'images/user_images/111/udtalk/1504875744.36udt.jpg', 0, '2017-09-08 18:32:24'),
(6, 61, 'images/user_images/111/udtalk/1504875760.44udt.jpg', 0, '2017-09-08 18:32:40'),
(7, 64, 'images/user_images/115/udtalk/1505362331.97udt.jpg', 0, '2017-09-14 09:42:11'),
(10, 69, 'images/user_images/122/udtalk/1505890635.51udt.jpg', 0, '2017-09-20 12:27:15'),
(11, 69, 'images/user_images/122/udtalk/1505890664.78udt.jpg', 0, '2017-09-20 12:27:44'),
(12, 69, 'images/user_images/122/udtalk/1505890673.8udt.jpg', 0, '2017-09-20 12:27:53'),
(13, 69, 'images/user_images/122/udtalk/1505890821.43udt.jpg', 0, '2017-09-20 12:30:21'),
(15, 71, 'images/user_images/132/udtalk/1506331602.66udt.jpg', 0, '2017-09-25 14:56:42'),
(17, 81, 'images/user_images/148/udtalk/1506868150.43udt.jpg', 0, '2017-10-01 19:59:10'),
(19, 83, 'images/user_images/153/udtalk/1506968396.7168udt.jpg', 0, '2017-10-02 23:49:56'),
(20, 82, 'images/user_images/152/udtalk/1507048002.7686udt.gif', 0, '2017-10-03 21:56:42'),
(21, 68, 'images/user_images/121/udtalk/1507141642.1828udt.jpg', 0, '2017-10-04 23:57:22'),
(22, 84, 'images/user_images/154/udtalk/1507375906.7123udt.jpg', 0, '2017-10-07 17:01:46'),
(23, 84, 'images/user_images/154/udtalk/1507375926.8251udt.jpg', 0, '2017-10-07 17:02:06'),
(24, 85, 'images/user_images/158/udtalk/1507476042.5138udt.jpg', 0, '2017-10-08 20:50:42'),
(26, 90, 'images/user_images/167/udtalk/1507849283.8022udt.jpg', 0, '2017-10-13 04:31:23'),
(29, 98, 'images/user_images/178/udtalk/1508477645.4028udt.jpg', 0, '2017-10-20 11:04:05'),
(30, 98, 'images/user_images/178/udtalk/1508477676.1346udt.jpg', 0, '2017-10-20 11:04:36'),
(32, 99, 'images/user_images/183/udtalk/1510486092.5902udt.jpg', 0, '2017-11-12 16:58:12'),
(33, 102, 'images/user_images/190/udtalk/1512410948.8921udt.jpg', 0, '2017-12-04 23:39:08'),
(34, 102, 'images/user_images/190/udtalk/1512411058.5197udt.jpg', 0, '2017-12-04 23:40:58'),
(35, 102, 'images/user_images/190/udtalk/1512411072.6902udt.jpg', 0, '2017-12-04 23:41:12'),
(36, 102, 'images/user_images/190/udtalk/1512562672.6609udt.png', 0, '2017-12-06 17:47:52'),
(37, 101, 'images/user_images/187/udtalk/1513757673.7634udt.jpg', 0, '2017-12-20 13:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) DEFAULT NULL,
  `name_prefix` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nickname` varchar(128) DEFAULT NULL,
  `user_category_id` int(11) NOT NULL DEFAULT '0',
  `user_subcategory_id` int(11) NOT NULL DEFAULT '0',
  `user_role` tinyint(4) NOT NULL DEFAULT '1',
  `admin_user_id` int(11) NOT NULL DEFAULT '0',
  `account_activated` tinyint(4) DEFAULT '0' COMMENT '1=Active,0=Not Active',
  `password` varchar(255) DEFAULT NULL,
  `text_password` varchar(250) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `registration_step` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0=nostep,1=personal,2=company,3=factory,4=trad,5=certificate',
  `created_date` datetime DEFAULT NULL,
  `is_online` varchar(30) DEFAULT NULL,
  `is_subuser` tinyint(4) DEFAULT '0' COMMENT '0=not subuser,1=subuser',
  `is_contactperson` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 = not contact person,1=contact person',
  `is_suspend` tinyint(4) DEFAULT '0' COMMENT '1=suspense,0=not suspense',
  `is_deleted` tinyint(4) DEFAULT '0' COMMENT '1=deleted,0=not deleted',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=204 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `busi_id`, `email`, `name_prefix`, `name`, `nickname`, `user_category_id`, `user_subcategory_id`, `user_role`, `admin_user_id`, `account_activated`, `password`, `text_password`, `activation_code`, `registration_step`, `created_date`, `is_online`, `is_subuser`, `is_contactperson`, `is_suspend`, `is_deleted`) VALUES
(81, 38, 'akash@gmail.com', 'Mr', 'Akash', 'yea', 1, 3, 1, 0, 1, '94754d0abb89e4cf0a7f1c494dbb9d2c', 'akash', '6702', 5, '2017-07-03 19:53:57', 'online', 0, 1, 0, 0),
(82, 39, 'pooja@gmial.com', 'Mrs', 'Pooja', NULL, 1, 4, 1, 0, 1, '9cbb6aebcf5ae14a9248b4c08165212e', 'pooja', '9407', 5, '2017-07-03 22:34:25', NULL, 0, 1, 0, 0),
(83, 40, 'naksh@gmail.com', 'Mr', 'Naksh', NULL, 2, 5, 1, 0, 1, 'e5ca95b34ed87db2bc8206cc66794c8f', 'naksh', '2857', 5, '2017-07-04 08:36:11', NULL, 0, 1, 0, 0),
(84, 41, 'tara@gmail.com', 'Miss', 'Tara', NULL, 2, 7, 1, 0, 1, '2c842d72963554e4ca6286bb120777f6', 'tara', '3685', 5, '2017-07-04 09:52:38', NULL, 0, 1, 0, 0),
(85, 42, 'kartik@gmail.com', 'Mr', 'Kartik', NULL, 3, 10, 1, 0, 1, 'c8d39cdb56a46ad807969ee04c4e660b', 'kartik', '9719', 5, '2017-07-04 10:02:39', NULL, 0, 1, 0, 0),
(86, 43, 'nayara@gmail.com', 'Mrs', 'Nayara', NULL, 3, 10, 1, 0, 1, 'e745de87439175616094e568ea783548', 'nayara', '6762', 5, '2017-07-04 10:08:16', NULL, 0, 1, 0, 0),
(89, 38, 'zaki-hazem@hotmail.com', NULL, NULL, 'yea', 1, 3, 2, 81, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-07-10 16:57:49', 'online', 0, 1, 0, 1),
(90, 38, 'zaki@hotmail.com', NULL, NULL, 'yea', 1, 3, 2, 81, 1, 'dbc4d84bfcfe2284ba11beffb853a8c4', '4444', NULL, 5, '2017-07-10 17:02:23', 'online', 0, 1, 0, 0),
(91, 38, 'didigo@hotmail.com', NULL, NULL, 'yea', 1, 3, 2, 81, 1, '579d9ec9d0c3d687aaa91289ac2854e4', '123456123', NULL, 5, '2017-07-10 17:08:21', 'online', 0, 1, 1, 0),
(92, 38, 'gggg@hotmail.com', NULL, NULL, 'yea', 1, 3, 2, 81, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-07-10 17:23:28', 'online', 0, 1, 1, 0),
(93, 45, 'raginikhadke@yahoo.in', 'Mr', 'tester', NULL, 2, 5, 1, 0, 1, 'ae2b1fca515949e5d54fb22b8ed95575', 'testing', '3603', 5, '2017-07-12 00:58:14', NULL, 0, 1, 0, 0),
(94, 46, 'er.pradeep007@gmail.com', 'Mr', 'Pradeep Singh', NULL, 1, 1, 1, 0, 1, 'febc8f8ac083f5fc27e032c81e7b536a', 'pradeep', '1674', 5, '2017-07-12 12:01:50', NULL, 0, 1, 0, 0),
(95, 47, 'buyer@udtalks.com', 'Mr', 'Hosam Zaki', NULL, 3, 13, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '7148', 5, '2017-07-13 18:32:00', NULL, 0, 1, 0, 0),
(96, 48, 'prashantmyname@gmail.com', 'Mr', 'Prashant Sal', NULL, 1, 1, 1, 0, 1, 'cc03e747a6afbbcbf8be7668acfebee5', 'test123', '7361', 5, '2017-07-15 13:40:24', NULL, 0, 1, 0, 0),
(99, 40, 'hazem@hotmail.com', NULL, NULL, NULL, 2, 5, 2, 83, 1, '4297f44b13955235245b2497399d7a93', '123123', NULL, 5, '2017-08-14 18:29:09', NULL, 0, 1, 0, 1),
(100, 51, 'mybuyers@udtalks.com', 'Mr', 'Mohamed Ali', NULL, 3, 9, 1, 0, 1, '3164786e699ef4bcd2a43b031f53be2c', 'Howareyou2', '1537', 5, '2017-08-15 15:28:16', NULL, 0, 1, 0, 0),
(101, 52, 'iseller@udtalks.com', 'Mr', 'Ahmed Hazem Zaki', NULL, 1, 1, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '8874', 5, '2017-08-16 16:52:53', NULL, 0, 1, 0, 0),
(102, 53, 'isellers@udtalks.com', 'Miss', 'Tang Yang', NULL, 1, 4, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '7807', 5, '2017-08-19 18:50:06', NULL, 0, 1, 0, 0),
(103, 54, 'ishipper@udtalks.com', 'Mrs', 'Elizabith Dior', NULL, 2, 7, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '5813', 5, '2017-08-20 17:42:03', NULL, 0, 1, 0, 0),
(104, 55, 'btest@udtalks.com', 'Mr', 'Ahmed Mursy', NULL, 3, 13, 1, 0, 1, 'b085d1bf4cff8b1045750706b11f8662', 'TestTest', '5823', 5, '2017-08-30 16:51:21', NULL, 0, 1, 0, 0),
(105, 56, 'stest@udtalks.com', 'Mrs', 'Fatima Bazo', NULL, 2, 6, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '5548', 5, '2017-09-02 16:49:24', NULL, 0, 1, 0, 0),
(106, 56, 'zaki@hotmail.com', NULL, 'Hazem', NULL, 2, 6, 2, 105, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', NULL, 5, '2017-09-02 21:47:13', NULL, 1, 1, 0, 0),
(107, 57, 'er.pradeep00712345@gmail.com', 'Mr', 'Pradeep Singh', NULL, 1, 1, 1, 0, 1, 'febc8f8ac083f5fc27e032c81e7b536a', 'pradeep', '4747', 5, '2017-09-03 17:49:24', NULL, 0, 1, 0, 0),
(108, 58, 'chinaki@gmail.com', 'Miss', 'chinki', NULL, 1, 1, 1, 0, 0, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '4016', 2, '2017-09-03 18:16:08', NULL, 0, 1, 0, 0),
(109, 59, 'sujal@gmail.com', 'Mr', 'sujal', NULL, 1, 2, 1, 0, 0, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '4569', 2, '2017-09-03 18:35:24', NULL, 0, 1, 0, 0),
(110, 60, 'saurya@gmail.com', 'Mr', 'saurya', NULL, 1, 1, 1, 0, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '6200', 5, '2017-09-03 18:41:52', NULL, 0, 1, 0, 0),
(111, 61, 'sellertest@udtalks.com', 'Mr', 'Ahmed Hasan', NULL, 1, 1, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '9187', 5, '2017-09-05 20:12:56', NULL, 0, 1, 0, 0),
(112, 62, 'ragloves16@gmail.com', 'Mr', 'Pra Dance', NULL, 1, 1, 1, 0, 0, NULL, NULL, '5591', 0, '2017-09-08 01:07:31', NULL, 0, 1, 0, 0),
(113, 63, 'prashantmyname1@gmail.com', 'Mr', 'Dance ', NULL, 1, 1, 1, 0, 0, NULL, NULL, '6136', 0, '2017-09-08 01:14:55', NULL, 0, 1, 0, 0),
(114, 50, 'ragloves16@gmail.com', NULL, 'ragini', NULL, 3, 9, 2, 98, 1, 'cc03e747a6afbbcbf8be7668acfebee5', 'test123', NULL, 5, '2017-09-13 00:20:39', NULL, 1, 1, 0, 1),
(115, 64, 'buyertrd@udtalks.com', 'Mr', 'Bader Mutlaq', NULL, 3, 9, 1, 0, 1, '1bbd886460827015e5d605ed44252251', '11111111', '3384', 5, '2017-09-14 07:10:38', NULL, 0, 1, 0, 0),
(116, 65, 'zaki-hazem@hotmail.com', 'Mr', 'khalil ya', NULL, 3, 13, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '4045', 5, '2017-09-14 15:16:53', NULL, 0, 1, 0, 0),
(117, 66, 'shippertrd@udtalks.com', 'Mr', 'Tareq Shuail', NULL, 2, 7, 1, 0, 0, NULL, NULL, '4405', 0, '2017-09-15 08:02:43', NULL, 0, 1, 0, 0),
(118, 67, 'shipperstrd@udtalks.com', 'Mr', 'Tareq Shuail', NULL, 2, 7, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '1669', 5, '2017-09-15 08:20:14', NULL, 0, 1, 0, 0),
(119, 67, 'ads@hotmail.com', NULL, 'Hazem Zaki', NULL, 2, 7, 2, 118, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-15 09:42:01', NULL, 1, 1, 0, 1),
(120, 67, 'ads@hotmail.com', NULL, 'Hazem Zaki', NULL, 2, 7, 2, 118, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-15 09:43:57', NULL, 1, 1, 0, 0),
(121, 68, 'er.pradeep007singh@gmail.com', 'Mr', 'Pradeep Singh', NULL, 2, 5, 1, 0, 1, 'febc8f8ac083f5fc27e032c81e7b536a', 'pradeep', '7754', 5, '2017-09-19 00:12:34', NULL, 0, 1, 0, 0),
(122, 69, 'b123@udtalks.com', 'Mr', 'Mohamed Zaki', NULL, 3, 13, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '7224', 5, '2017-09-20 11:00:15', NULL, 0, 1, 0, 0),
(123, 69, 'zem@hotmail.com', NULL, 'Hazem Zaki', NULL, 3, 13, 2, 122, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-20 11:26:54', NULL, 1, 1, 1, 1),
(124, 69, 'zem@hotmail.com', NULL, 'Hazem Zaki', NULL, 3, 13, 2, 122, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-20 11:30:55', NULL, 1, 1, 0, 0),
(125, 69, 'mak@hotmail.com', NULL, 'Malak zaki', NULL, 3, 13, 2, 122, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-20 11:31:22', NULL, 1, 1, 0, 0),
(129, 61, 'pina@gmail.com', 'Mr', 'pina', NULL, 1, 1, 3, 111, 1, '4eae35f1b35977a00ebd8086c259d4c9', 'www', NULL, 5, '2017-09-21 15:33:36', NULL, 0, 1, 0, 0),
(130, 48, 'mycigar1234@gmail.com', NULL, 'Prash', NULL, 1, 1, 2, 96, 1, 'b32c70c9ad9691d8706d660442014596', 'mycigar123', NULL, 5, '2017-09-23 18:46:35', NULL, 1, 1, 0, 1),
(131, 70, 'b@udtalks.com', 'Mr', 'Omar Hazem Zaki', NULL, 1, 4, 1, 0, 0, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '6992', 2, '2017-09-25 11:55:02', NULL, 0, 1, 0, 0),
(132, 71, 's@udtalks.com', 'Mr', 'Mohamed Khalifa', NULL, 3, 13, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '6729', 5, '2017-09-25 12:21:48', NULL, 0, 1, 0, 0),
(133, 71, 'malak@hotmail.com', NULL, 'Malak', NULL, 3, 13, 2, 132, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-25 12:51:59', NULL, 1, 1, 0, 0),
(134, 71, 'omar@yahoo.com', NULL, 'Omar', NULL, 3, 13, 2, 132, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-25 12:52:21', NULL, 1, 1, 0, 1),
(135, 71, 'ahmed@udtalks.com', NULL, 'Ahmed', NULL, 3, 13, 2, 132, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-25 12:53:21', NULL, 1, 1, 0, 0),
(136, 72, 'sh@udtalks.com', 'Mr', 'Fouda Ammar', '', 2, 7, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '7333', 5, '2017-09-26 13:29:09', 'online', 0, 1, 0, 0),
(137, 72, 'hazem@udtalks.com', 'Mr', 'hazem zaki', '', 2, 7, 3, 136, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-26 14:10:19', 'online', 0, 1, 0, 0),
(138, 72, 'hanan@udtalks.com', NULL, 'Hanan', '', 2, 7, 2, 136, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-09-26 14:16:26', 'online', 1, 1, 0, 0),
(139, 73, 'admin@udtalks.com', 'Mr', 'Any Any', NULL, 2, 5, 1, 0, 0, NULL, NULL, '6243', 0, '2017-09-26 15:34:21', NULL, 0, 1, 0, 0),
(140, 74, 'riddhi@saanvad.com', 'Mr', 'riddhi', NULL, 3, 10, 1, 0, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '7536', 5, '2017-09-26 16:59:30', NULL, 0, 1, 0, 0),
(141, 75, 'rima@gmail.com', 'Miss', 'rima', NULL, 1, 4, 1, 0, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '8483', 5, '2017-09-26 20:53:49', NULL, 0, 1, 0, 0),
(142, 75, 'avani@gmail.com', 'Mr', 'avani1', NULL, 1, 4, 3, 141, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', NULL, 5, '2017-09-26 20:56:55', NULL, 0, 1, 0, 0),
(143, 76, 'raina@gmail.com', 'Miss', 'raina', NULL, 1, 4, 1, 0, 0, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '4300', 2, '2017-09-26 21:37:36', NULL, 0, 1, 0, 0),
(144, 77, 'ravi@gmail.com', 'Mr', 'ravi', NULL, 3, 10, 1, 0, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '2817', 5, '2017-09-26 22:52:34', NULL, 0, 1, 0, 0),
(145, 79, 'nilam@gmail.com', 'Mrs', 'nilam', NULL, 3, 12, 1, 0, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '7008', 5, '2017-09-26 22:58:20', NULL, 0, 1, 0, 0),
(146, 74, 'navya@gmail.com', NULL, 'navya', NULL, 3, 10, 2, 140, 1, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', NULL, 5, '2017-09-26 23:10:27', NULL, 1, 1, 0, 0),
(147, 80, 'vimala@gmail.com', 'Miss', 'vimala', NULL, 1, 1, 1, 0, 0, 'b2ca678b4c936f905fb82f2733f5297f', 'qqq', '3269', 2, '2017-09-26 23:52:33', NULL, 0, 1, 0, 0),
(148, 81, 'bb@udtalks.com', 'Mr', 'Ahmed Mursy', NULL, 3, 13, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '8835', 5, '2017-10-01 19:15:21', NULL, 0, 1, 0, 0),
(150, 81, 'toti@udtalks.com', NULL, 'toti', NULL, 3, 13, 2, 148, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-01 19:50:36', NULL, 1, 1, 0, 0),
(151, 81, 'koki@udtalks.com', NULL, 'koki', NULL, 3, 13, 2, 148, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-01 19:51:09', NULL, 1, 1, 0, 0),
(152, 82, 'bbb@udtalks.com', 'Mr', 'Any An', NULL, 3, 0, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '1361', 5, '2017-10-02 17:21:57', NULL, 0, 1, 0, 0),
(153, 83, 'er.pradeep007123456@gmail.com', 'Mr', 'Pradeep Singh1', NULL, 3, 9, 1, 0, 1, 'febc8f8ac083f5fc27e032c81e7b536a', 'pradeep', '3338', 5, '2017-10-02 20:09:25', NULL, 0, 1, 0, 0),
(154, 84, 'zako@udtalks.com', 'Mr', 'Zako Dali', NULL, 3, 13, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '3785', 5, '2017-10-07 15:35:15', NULL, 0, 1, 0, 0),
(155, 84, 'toleen@udtalks.com', 'Miss', 'toleen', NULL, 3, 13, 3, 154, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-07 15:58:05', NULL, 0, 1, 0, 0),
(156, 84, 'Dora@hotmail.com', NULL, 'Dora', NULL, 3, 13, 2, 154, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-07 16:01:38', NULL, 1, 1, 0, 0),
(157, 84, 'gogo@hotmail.com', NULL, 'Gogo', NULL, 3, 13, 2, 154, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-07 16:02:17', NULL, 1, 1, 0, 0),
(158, 85, 'do@udtalks.com', 'Mr', 'Donald Speeder', NULL, 2, 7, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '6130', 5, '2017-10-08 19:36:10', NULL, 0, 1, 0, 0),
(160, 85, 'halima@hotmail.com', 'Mr', 'Halima Altoni', NULL, 2, 7, 3, 158, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-08 20:11:52', NULL, 0, 1, 0, 0),
(161, 86, 'jack@udtalks.com', 'Mr', 'Mohamed Zaki', NULL, 1, 1, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '5585', 5, '2017-10-09 17:27:25', NULL, 0, 1, 0, 0),
(162, 86, 'zordi@udtalks.com', 'Mr', 'zordi yak', NULL, 1, 1, 3, 161, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-09 18:51:47', NULL, 0, 1, 0, 0),
(163, 87, 'noha@udtalks.com', 'Mr', 'Noha Hasan', NULL, 3, 12, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '1071', 5, '2017-10-10 20:00:39', NULL, 0, 1, 0, 0),
(165, 88, 'er.pradeep0071971345@gmail.com', 'Mr', 'Manisha Singh 5', NULL, 1, 1, 1, 0, 0, 'febc8f8ac083f5fc27e032c81e7b536a', 'pradeep', '7787', 1, '2017-10-11 21:14:35', NULL, 0, 1, 0, 0),
(166, 89, 'sho@udtalks.com', 'Mr', 'Tom Hover', NULL, 2, 8, 1, 0, 0, NULL, NULL, '4270', 0, '2017-10-12 02:27:20', NULL, 0, 1, 0, 0),
(167, 90, 'shoo@udtalks.com', 'Mr', 'Tom Hover', NULL, 2, 8, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '6605', 5, '2017-10-12 02:31:58', NULL, 0, 1, 0, 0),
(168, 90, 'lolo@hotmail.com', 'Miss', 'Lolo', NULL, 2, 8, 3, 167, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-12 02:41:44', NULL, 0, 1, 0, 0),
(169, 91, '619158313@qq.com', 'Miss', 'Tang Yan', NULL, 3, 12, 1, 0, 0, NULL, NULL, '7453', 0, '2017-10-12 22:05:36', NULL, 0, 1, 0, 0),
(170, 92, 'tangyan@udtalks.com', 'Miss', 'Tang Yan', NULL, 3, 12, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '1769', 5, '2017-10-12 22:10:48', NULL, 0, 1, 0, 0),
(171, 92, 'zak@udtalks.com', 'Mr', 'Hazem Zaki', NULL, 3, 12, 3, 170, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-12 22:27:33', NULL, 0, 1, 0, 0),
(172, 92, 'mala@hotmail.com', NULL, 'Malak', NULL, 3, 12, 2, 170, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-12 22:29:20', NULL, 1, 1, 0, 0),
(173, 93, 'fadi@udtalks.com', 'Mr', 'Fadi Hemsy', NULL, 1, 1, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '1739', 5, '2017-10-13 05:20:06', NULL, 0, 1, 0, 0),
(174, 94, 'mah@udtalks.com', 'Mr', 'Mahmoud Allam', NULL, 1, 4, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '5294', 5, '2017-10-13 17:29:40', NULL, 0, 1, 0, 0),
(175, 95, '291145965@qq.com', 'Mr', 'Xiao yan', NULL, 1, 1, 1, 0, 0, NULL, NULL, '3526', 0, '2017-10-14 19:59:33', NULL, 0, 1, 0, 0),
(176, 96, '562380553@qq.com', 'Miss', 'Rose ', NULL, 1, 1, 1, 0, 0, NULL, NULL, '7297', 0, '2017-10-14 20:01:23', NULL, 0, 1, 0, 0),
(177, 97, 'yangchengc036@126.com', 'Miss', 'Rose', NULL, 1, 1, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '4222', 5, '2017-10-14 20:04:53', NULL, 0, 1, 0, 0),
(178, 98, 'bhaz@udtalks.com', 'Mr', 'Buyer Test', NULL, 3, 9, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '6501', 5, '2017-10-20 10:06:38', NULL, 0, 1, 0, 0),
(179, 98, 'azem@hotmail.com', 'Mr', 'Hazem Zaki', NULL, 3, 9, 3, 178, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-20 10:34:53', NULL, 0, 1, 0, 0),
(180, 98, 'user1@udtalks.com', NULL, 'user1', NULL, 3, 9, 2, 178, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-20 10:35:47', NULL, 1, 1, 0, 1),
(181, 98, 'user2@udtalks.com', NULL, 'User2', NULL, 3, 9, 2, 178, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-20 10:36:06', NULL, 1, 1, 0, 0),
(182, 98, 'user1@udtalks.com', NULL, 'User1', NULL, 3, 9, 2, 178, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-20 10:36:43', NULL, 1, 1, 0, 0),
(183, 99, 'shhaz@udtalks.com', 'Mrs', 'Shipper Testera', NULL, 2, 8, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '8495', 5, '2017-10-20 13:19:20', NULL, 0, 0, 0, 0),
(184, 99, 'mona@hotmail.com', 'Mr', 'Mona trawly', NULL, 2, 8, 3, 183, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-20 14:04:46', NULL, 0, 1, 0, 0),
(185, 100, 'shaz@udtalks.com', 'Mrs', 'Seller Tester', NULL, 1, 1, 1, 0, 1, '50f78848caedb0489b1f645ad364a64e', 'Howareyou', '6116', 5, '2017-10-21 11:36:45', NULL, 0, 1, 0, 0),
(187, 101, 'loka@udtalks.com', 'Mr', 'Loka Buyer', '', 3, 13, 1, 0, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', '9983', 5, '2017-10-31 20:44:35', 'online', 0, 1, 0, 0),
(188, 101, 'rosita@hotmail.com', 'Miss', 'Rosita', '', 3, 13, 3, 187, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-10-31 21:00:47', 'online', 0, 1, 0, 0),
(189, 101, 'zaki@udtalks.com', NULL, 'hazem', '', 3, 13, 2, 187, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-01 14:16:02', 'online', 1, 1, 0, 0),
(190, 102, 'sadat@udtalks.com', 'Mr', 'Sadat Seller', '', 1, 1, 1, 0, 1, '4297f44b13955235245b2497399d7a93', '123123', '2049', 5, '2017-11-02 14:16:25', 'offline', 0, 0, 0, 0),
(191, 102, 'Malak@udtalks.com', NULL, 'Hazem', '', 1, 1, 2, 190, 1, '4297f44b13955235245b2497399d7a93', '123123', NULL, 5, '2017-11-05 17:07:29', 'offline', 1, 0, 0, 0),
(192, 102, 'omar@udtalks.com', NULL, 'Ahmed', '', 1, 1, 2, 190, 1, '4297f44b13955235245b2497399d7a93', '123123', NULL, 5, '2017-11-05 17:08:55', 'offline', 1, 0, 0, 0),
(193, 102, 'noor@udtalks.com', NULL, 'noor', '', 1, 1, 2, 190, 1, '4297f44b13955235245b2497399d7a93', '123123', NULL, 5, '2017-11-05 17:09:52', 'offline', 1, 0, 0, 0),
(194, 102, 'abdo@udtalks.com', NULL, 'Abdo', '', 1, 1, 2, 190, 1, '4297f44b13955235245b2497399d7a93', '123123', NULL, 5, '2017-11-05 17:10:12', 'offline', 1, 0, 0, 0),
(195, 102, 'loca@udtalks.com', NULL, 'loka', '', 1, 1, 2, 190, 1, '4297f44b13955235245b2497399d7a93', '123123', NULL, 5, '2017-11-05 17:10:38', 'offline', 1, 0, 0, 0),
(196, 102, 'info@udtalks.com', 'Mr', 'Peter Cruise', '', 1, 1, 3, 190, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-09 02:48:23', 'offline', 0, 1, 0, 0),
(197, 99, 'any@udtalks.com', NULL, 'Hazem', NULL, 2, 8, 2, 183, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-12 16:45:06', NULL, 1, 0, 0, 0),
(198, 99, 'any2@udtalks.com', NULL, 'second', NULL, 2, 8, 2, 183, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-12 16:46:00', NULL, 1, 0, 0, 0),
(199, 99, 'any3@udtalks.ocm', NULL, 'third', NULL, 2, 8, 2, 183, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-12 16:47:15', NULL, 1, 0, 0, 0),
(200, 99, 'any4@udtalks.com', NULL, 'rourth', NULL, 2, 8, 2, 183, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-12 16:47:38', NULL, 1, 0, 0, 0),
(201, 99, 'any5@udtalks.com', NULL, 'last', NULL, 2, 8, 2, 183, 1, 'e10adc3949ba59abbe56e057f20f883e', '123456', NULL, 5, '2017-11-12 16:48:00', NULL, 1, 0, 0, 1),
(202, 103, 'dfa@any.com', 'Mr', 'dewds af', NULL, 1, 1, 1, 0, 0, NULL, NULL, '2198', 0, '2017-12-22 14:24:18', NULL, 0, 0, 0, 0),
(203, 104, 'shettyanusha16@gmail.com', 'Mrs', 'ANUSHA SHETTY', NULL, 1, 1, 1, 0, 1, '6c970e9acc1e5bc3fe7d22db703ac1cc', 'anusha', '9319', 5, '2017-12-24 00:42:24', NULL, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userfactory_rndtype`
--

CREATE TABLE IF NOT EXISTS `tbl_userfactory_rndtype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `factory_id` int(11) NOT NULL,
  `rnd_type_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data for table `tbl_userfactory_rndtype`
--

INSERT INTO `tbl_userfactory_rndtype` (`id`, `factory_id`, `rnd_type_id`, `created_date`) VALUES
(3, 2, 1, '2017-04-12 23:58:54'),
(4, 2, 3, '2017-04-12 23:58:54'),
(5, 3, 2, '2017-04-13 10:35:13'),
(6, 4, 1, '2017-04-13 23:37:31'),
(7, 4, 3, '2017-04-13 23:37:31'),
(8, 5, 2, '2017-04-15 06:51:35'),
(10, 2, 2, '2017-04-17 16:19:00'),
(11, 3, 2, '2017-04-21 12:20:33'),
(12, 4, 1, '2017-05-03 21:59:22'),
(13, 5, 3, '2017-05-04 23:58:13'),
(14, 5, 4, '2017-05-04 23:58:13'),
(15, 6, 2, '2017-05-06 09:56:19'),
(16, 7, 3, '2017-05-06 14:38:21'),
(17, 1, 1, '2017-05-11 11:09:20'),
(18, 1, 2, '2017-05-11 11:09:20'),
(19, 8, 1, '2017-05-13 21:35:50'),
(20, 8, 2, '2017-05-13 21:35:50'),
(21, 8, 3, '2017-05-13 21:35:50'),
(23, 9, 2, '2017-05-18 00:06:11'),
(26, 10, 1, '2017-05-18 15:36:06'),
(27, 10, 2, '2017-05-18 15:36:06'),
(30, 11, 3, '2017-05-19 00:39:46'),
(32, 12, 2, '2017-05-21 23:49:07'),
(33, 13, 1, '2017-05-22 09:55:25'),
(34, 14, 1, '2017-05-24 01:54:02'),
(35, 14, 3, '2017-05-24 01:54:02'),
(36, 15, 1, '2017-05-28 16:16:30'),
(37, 15, 2, '2017-05-28 16:16:30'),
(40, 16, 2, '2017-07-08 23:37:44'),
(41, 16, 3, '2017-07-08 23:37:44'),
(42, 17, 1, '2017-07-12 12:15:19'),
(43, 17, 2, '2017-07-12 12:15:19'),
(44, 17, 3, '2017-07-12 12:15:19'),
(45, 18, 1, '2017-07-15 13:46:34'),
(46, 19, 1, '2017-08-16 19:51:19'),
(47, 19, 2, '2017-08-16 19:51:19'),
(48, 20, 1, '2017-09-03 17:55:41'),
(49, 20, 2, '2017-09-03 17:55:41'),
(50, 21, 2, '2017-09-03 18:44:47'),
(65, 22, 4, '2017-09-07 18:21:03'),
(66, 31, 1, '2017-09-26 21:18:47'),
(67, 31, 2, '2017-09-26 21:18:47'),
(73, 32, 1, '2017-10-09 18:47:49'),
(76, 33, 1, '2017-10-13 05:42:56'),
(77, 33, 4, '2017-10-13 05:42:56'),
(78, 34, 1, '2017-10-14 20:29:32'),
(79, 34, 2, '2017-10-14 20:29:32'),
(80, 34, 4, '2017-10-14 20:29:32'),
(85, 35, 1, '2017-10-21 11:55:36'),
(86, 35, 3, '2017-10-21 11:55:36'),
(87, 36, 1, '2017-11-02 14:33:49'),
(88, 36, 4, '2017-11-02 14:33:49'),
(89, 37, 1, '2018-01-10 01:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `alternative_email` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `mobile_code` varchar(10) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `reference` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`id`, `user_id`, `alternative_email`, `country`, `province`, `city`, `street`, `mobile_code`, `mobile_number`, `timezone`, `position`, `reference`, `profile_image`, `created_date`) VALUES
(39, 81, 'akash1@gmail.com', 'India', 'Gujarat', 'Rajkot', 'Vrundavan Park', '91', '9868437847', 'kolkata/mumbai', 'Manager', '', 'images/user_images/81/1499092413new.jpg', '2017-07-03 20:03:41'),
(40, 82, 'pooja1@gmail.com', 'India', 'Gujarat', 'Morbi', 'Govindpura', '91', '987676565454', 'mumbai/kolktta', 'Manager', '', 'images/user_images/82/1499101694new.jpg', '2017-07-03 22:38:28'),
(41, 83, 'naksh1@gmail.com', 'india', 'UP', 'Lakhnav', 'Ulasnagar', '91', '988724248723', 'mumbai/kolktta', 'Manager', '', 'images/user_images/83/1499137706new.jpg', '2017-07-04 08:38:33'),
(42, 84, 'tara1@gmail.com', 'India', 'UP', 'Kanpur', 'Vadki', '91', '923434323333', 'mumbai/kolktta', 'Manager', '', 'images/user_images/84/1499142305new.jpg', '2017-07-04 09:56:46'),
(43, 85, 'kartik1@gmail.com', 'India', 'Maharastra', 'Pune', 'Wakad', '91', '94423423333', 'mumbai/kolktta', 'Manager', '', 'images/user_images/85/1499142873new.jpg', '2017-07-04 10:04:41'),
(44, 86, 'nayara1@gmail.com', 'india', 'Maharastra', 'Pune', 'Vimannagar', '83', '92342234324', 'mumbai/kolktta', 'Manager', '', 'images/user_images/86/1499143162new.jpg', '2017-07-04 10:10:24'),
(45, 87, 'prashantmyname@gmail.com', 'india', 'mah', 'pune', '123', '91', '1234567890', '+5:30', 'Tester', '', 'images/user_images/87/1499536850new.jpg', '2017-07-08 23:31:31'),
(46, 93, 'prashantmyname@gmail.com', 'india', 'mah', 'pune', '1258', '00', '12345678901', '+5:30', 'Business', '', 'images/user_images/93/1499801412new.jpg', '2017-07-12 01:00:19'),
(47, 94, 'er.pradeep007@gmail.com', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '9021609385', 'Asia/Kolkata', 'CTO', '', 'images/user_images/94/1499841419new.jpg', '2017-07-12 12:07:34'),
(48, 95, 'buyer@udtalks.com', 'Egypt', 'Cairo', 'Nasier', '13 hengsheng building fakosan', '002', '13660638247', 'Cairo', 'G.M', '', 'images/user_images/95/1499951129new.jpg', '2017-07-13 18:36:58'),
(49, 96, 'mycigar123@gmail.com', 'india', 'mah', 'pune', 'ooo', '00', '12345678901', '+5:30', 'ABC', '', 'images/user_images/96/1506173190new.jpg', '2017-07-15 13:42:45'),
(50, 98, 'mycigar123@gmail.com', '3', '3', '2uu', '12', '3', '0000000000', '23', 'tester', '', 'images/user_images/98/1500111300new.jpg', '2017-07-15 15:06:17'),
(51, 100, 'zaki-hazem@udtalks.com', 'China', 'Giangdong', 'Guangzhou', 'Office no.207, Hengsheng Building No.205, Fakosan.', '0086', '13660638247', 'Beijing', 'Chairman', '', 'images/user_images/100/1502792195new.jpg', '2017-08-15 15:52:57'),
(52, 101, 'ahmed@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'Office No. 207, Hengsheng Building No. 205, Fakosan', '0086', '13660638223', 'Beijing', 'Chairman', '', 'images/user_images/101/1502883191new.jpg', '2017-08-16 17:03:22'),
(53, 102, 'other@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'Office no. 207 hensheng building', '0086', '13660638247', 'Beijing', 'Chairman', '', 'images/user_images/102/1503148904new.jpg', '2017-08-19 18:53:28'),
(54, 103, 'ishipp@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'Contact address, not company address', '0086', '13710951295', 'Beijing', 'Chairman', '', 'images/user_images/103/1503231229new.jpg', '2017-08-20 17:46:00'),
(55, 105, 'fa@hotmail.com', 'China', 'Guangdong', 'Guangzhou', 'This the contact personal address', '0086', '1366063824', 'Cairo', 'General Manager', '', 'images/user_images/105/1504351499new.jpg', '2017-09-02 17:04:36'),
(56, 107, 'er.pradeep007@gmail.com', 'India', 'Maharashtra', 'Pune', 'Mayur Kilbill', '91', '9021609385', 'Asia/Kolkata', 'CTO', '', 'images/user_images/107/1504441364new.jpg', '2017-09-03 17:53:09'),
(57, 108, 'akash1@gmail.com', 'india', 'asdfasdf', 'pune', 'qwq', '91', '9273687347', 'mumbai/kolktta', 'asdf', 'asdfasdf', 'images/user_images/108/1504442954new.jpg', '2017-09-03 18:20:00'),
(58, 109, 'akash1@gmail.com', 'Andorra', 'da', 'Pune', 'ad', '91', '9273687347', 'mumbai/kolktta', 'asdf', 'asdfasdf', 'images/user_images/109/1504443986new.jpg', '2017-09-03 18:36:59'),
(59, 110, 'akash1@gmail.com', 'Andorra', 'da', '2434', 'ad', '91', '9273687347', 'kolkata/mumbai', 'Manager', 'asdfasdf', 'images/user_images/110/1504444369new.jpg', '2017-09-03 18:43:17'),
(60, 111, 'seller@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'This is the contact address', '0086', '13660638248', 'Beijing', 'Chairman', '', 'images/user_images/111/1504622862new.jpg', '2017-09-05 20:29:47'),
(61, 115, 'zak@hotmail.com', 'Egypt', 'Giza', 'Faisal', '31, Okasha streent, Maryotayya', '002', '01148050077', 'Cairo', 'Chairman', NULL, 'images/user_images/115/1505353548new.jpg', '2017-09-14 07:16:07'),
(62, 116, 'ahmed@udtalk.com', 'china', 'Guangdong', 'Guangzhou', 'ASDK KLASD DKL;ASDJ', '0086', '613660638247', 'FFD', 'FDS', NULL, 'images/user_images/116/1505382579new.jpg', '2017-09-14 15:20:36'),
(63, 118, 'ab@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'This is the contact address', '0086', '613660638247', 'Beijing', 'Chairman', 'CCPIT', 'images/user_images/118/1505443916new.jpg', '2017-09-15 08:23:21'),
(64, 121, 'er.pradeep007@gmail.com', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '9021609385', 'Asia/Kolkata', 'CTO', '', 'images/user_images/121/1505836903new.jpg', '2017-09-19 21:32:09'),
(65, 122, 'zak@hotmail.com', 'China', 'Guangdong', 'Guangzhou', 'This is the register person address', '0086', '13660638244', 'Beiging', 'Chairman', NULL, 'images/user_images/122/1505885978new.jpg', '2017-09-20 11:11:02'),
(66, 129, NULL, NULL, NULL, NULL, NULL, '23', '07841069144', NULL, 'asfd', NULL, 'images/user_images/111/business/1505988204new.jpg', '2017-09-21 00:00:00'),
(67, 131, 'zoz@hotmail.com', 'Egypt', 'Giza', 'Faisal', '31, Mariottaya street', '002', '01148050077', 'Cairo', 'Chairman', 'CCPIT', 'images/user_images/131/1506321037new.jpg', '2017-09-25 12:02:12'),
(68, 132, 'any@udtalks.com', 'Egypt', 'Giza', 'Faisal', 'This is the register person contact address', '002', '01148050078', 'Cairo', 'Chairman', NULL, 'images/user_images/132/1506322433new.jpg', '2017-09-25 12:25:22'),
(69, 136, 'g@gmail.com', 'China', 'Guangdong', 'Guangzhou', 'This is the register person contact address', '0086', '61366063825', 'Beijing', 'Chairman', 'CCPIT', 'images/user_images/136/1506414723new.jpg', '2017-09-26 13:31:40'),
(70, 137, NULL, NULL, NULL, NULL, NULL, '0086', '13660638247', NULL, 'Marketing manager', NULL, 'images/user_images/136/business/1506415161new.jpg', '2017-09-26 00:00:00'),
(71, 140, 'asf@dsf.ws', 'asdf', 'asdf', 'sdf', 'asdf', '234', '9843525332', 'asf', 'asdf', NULL, 'images/user_images/140/1506425422new.jpg', '2017-09-26 17:00:50'),
(72, 141, 'sdf@g.asdf', 'asdf', 'asdf', 'asdf', 'asdf', '234', '2434324324', 'asf', 'fsdfads', 'sdfggsd', 'images/user_images/141/1506439490new.jpg', '2017-09-26 20:55:17'),
(73, 142, NULL, NULL, NULL, NULL, NULL, '23', '435345345', NULL, 'ssdfds', NULL, 'images/user_images/141/business/1506439587new.jpg', '2017-09-27 00:00:00'),
(74, 143, 'fd@df.sd', 'csdfas', 'asdf', 'sad', 'asdf', '32', '234234324234', '234', 'afsd', 'asdf', 'images/user_images/143/1506442212new.jpg', '2017-09-26 21:40:56'),
(75, 144, 'sdf@rg.dfg', 'xs', 'df', 'sdf', 'sdf', '34', '234342342344', 'dfafasd', 'easf', NULL, 'images/user_images/144/1506446613new.jpg', '2017-09-26 22:53:58'),
(76, 145, 'sdfsdf@dfggf.sdf', 'sd', 'sdf', 'sdfasf', 'asdf', '324', '345345435345', 'asdfsda', 'dsfasdf', NULL, 'images/user_images/145/1506447200new.jpg', '2017-09-26 23:03:53'),
(77, 147, 'sadfsad@weasdf.sadf', 'asdf', 'asdf', 'asdfa', 'sdfsdf', '234', '234234234234', 'asdsacs', 'adfasdf', 'asdf', 'images/user_images/147/1506450198new.jpg', '2017-09-26 23:53:41'),
(78, 148, 'kk@udtalks.com', 'Egypt', 'Giza', 'Faisal', 'This is the register person contact address', '002', '01148050077', 'Cairo', 'Chairman', NULL, 'images/user_images/148/1506865714new.jpg', '2017-10-01 19:19:40'),
(80, 152, 'ab@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'This is the register person contact address', '0086', '613660638247', 'Beijing', 'General Ma', NULL, 'images/user_images/152/1506945365new.jpg', '2017-10-02 17:26:10'),
(81, 153, 'er.pradeep007@gmail.com', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '9021609385', 'Asia/Kolkata', 'CTO', NULL, 'images/user_images/153/1506955249new.jpg', '2017-10-02 20:11:45'),
(82, 154, 's-s@udtalks.com', 'China', 'Guangdong', 'Guangzhou', 'This is the register person address', '0086', '613660638247', 'Beijing', 'Operation Manag', NULL, 'images/user_images/154/1507371965new.jpg', '2017-10-07 15:39:31'),
(83, 155, NULL, NULL, NULL, NULL, NULL, '008', '13660638888', NULL, 'operation Manager', NULL, 'images/user_images/154/business/1507372067new.jpg', '2017-10-07 00:00:00'),
(84, 158, 'ahox@udtalks.com', 'China', 'Guangdong', 'Shenzen', '13, xiaolian, lufan lu, Shenzen', '0081', '13660638240', 'Beijing', 'Operation Manager', 'CCPIT', 'images/user_images/158/1507471678new.jpg', '2017-10-08 19:40:41'),
(86, 160, NULL, NULL, NULL, NULL, NULL, '0086', '1366638247', NULL, 'Public Relation Manager', NULL, 'images/user_images/158/business/1507473706new.jpg', '2017-10-08 00:00:00'),
(87, 161, 'ann@udtalks.com', 'China', 'Shangahi', 'Shanghai``', 'This is the register person contact address', '0086', '13660638234', 'Beiging', 'Operation manager', 'CCPIT', 'images/user_images/161/1507553445new.jpg', '2017-10-09 18:27:08'),
(88, 162, NULL, NULL, NULL, NULL, NULL, '0086', '13660638247', NULL, 'Marketing Manager', NULL, 'images/user_images/161/business/1507555259new.jpg', '2017-10-09 00:00:00'),
(89, 163, 'noni@hotmail.com', 'Nigeria', 'Nigeria', 'Tori', 'This is the register person contact address', '0021', '13655522451', 'Niger', 'Operation Manager df', NULL, 'images/user_images/163/1507645954new.jpg', '2017-10-10 20:04:00'),
(91, 165, 'er.pradeep007@gmail.com', 'India', 'Maharashtra', 'Pune', 'Dhanori', '91', '9021609385', 'Asia/Kolkata', 'CTO', '', 'images/user_images/165/1507736740new.jpg', '2017-10-11 21:15:58'),
(92, 167, 'zz@hotmail.com', 'China', 'Guangdong', 'Sania', 'This is the register person contact address', '0086', '13660666666', 'Beijing', 'Marketing Manager', 'CCPIT', 'images/user_images/167/1507755847new.jpg', '2017-10-12 02:35:56'),
(93, 168, NULL, NULL, NULL, NULL, NULL, '0086', '13666666666', NULL, 'Operation Manager', NULL, 'images/user_images/167/business/1507756299new.jpg', '2017-10-13 00:00:00'),
(94, 170, 'adda@yahoo.com', 'China', 'Guangdong', 'Foshan', 'Office no. 207 hensheng building', '0086', '13710951294', 'Beijing', 'Operation Manager', NULL, 'images/user_images/170/1507826649new.jpg', '2017-10-12 22:15:31'),
(95, 171, NULL, NULL, NULL, NULL, NULL, '0086', '13660638247', NULL, 'CEO', NULL, 'images/user_images/170/business/1507827249new.jpg', '2017-10-12 00:00:00'),
(96, 173, 'dd@hotmail.com', 'Saudi Arabia', 'Reyadh', 'Reyadh', 'This is the register person contact address', '0086', '13660638244', 'Beijing', 'Operation Manager A', 'CCPIT', 'images/user_images/173/1507852507new.jpg', '2017-10-13 05:26:33'),
(97, 174, 'm@hotmail.com', 'China', 'Guangdong', 'Guangzhou', 'This is the register person contact address', '0086', '613660638247', 'Beijing', 'Operation Manager', '', 'images/user_images/174/1507896088new.jpg', '2017-10-13 17:32:25'),
(98, 177, 'rose@hotmail.com', 'China', 'Fonan', 'Changsha', 'This is the register person contact address', '0086', '139281299665', 'Beijing', 'Chairman', 'CCPIT', 'images/user_images/177/1507991906new.jpg', '2017-10-14 20:13:48'),
(99, 178, 'by@hotmail.com', 'Saudi Arabia', 'Reyadh', 'Reyadh', 'This is the register person contact address', '00966', '5052943922', 'Geddah', 'Operation Manager', NULL, 'images/user_images/178/1508474533new.jpg', '2017-10-20 10:22:54'),
(100, 179, NULL, NULL, NULL, NULL, NULL, '0086', '13660638247', NULL, 'Marketing Manager', NULL, 'images/user_images/178/business/1508475880new.jpg', '2017-10-20 00:00:00'),
(101, 183, 'zakoa@hotmail.com', 'Chinaa', 'Guangdonga', 'Guangzhoua', 'This is the register person contact address', '0086', '13660638247', 'Shangahia', 'Operation Managera', 'NAN', 'images/user_images/183/1508485876new.jpg', '2017-10-20 13:22:58'),
(102, 184, NULL, NULL, NULL, NULL, NULL, '0086', '13660638247', NULL, 'General Manager', NULL, 'images/user_images/183/business/1508488459new.jpg', '2017-11-12 00:00:00'),
(103, 185, 'sel@hotmail.com', 'Turkey', 'Istanbul', 'Istanbul', 'This is the register person contact address', '0086', '111111111', 'Insnbule', 'Operation Manager', 'NAS', 'images/user_images/185/1508566180new.jpg', '2017-10-21 11:42:31'),
(105, 187, 'lo@udtalks.com', 'Egypt', 'Alex', 'Alex', 'This is the register person contact address', '002', '1366063824', 'Cairo', 'General Manager', NULL, 'images/user_images/187/1513759737new.jpg', '2017-10-31 20:55:38'),
(106, 188, NULL, NULL, NULL, NULL, NULL, '006', '13662638247', NULL, 'Operation Manager okay ', NULL, 'images/user_images/187/business/1509463799new.jpg', '2017-11-01 00:00:00'),
(107, 190, 'sad@udtalks.com', 'Turkey', 'Istanbul', 'Istanbul', 'This is the register person contact address', '005', '1234567892', 'Istanbul', 'Projects Manager', '', 'images/user_images/190/1509612543new.jpg', '2017-11-02 14:20:24'),
(108, 196, NULL, NULL, NULL, NULL, NULL, '0086', '13660638247', NULL, 'Operation Manager', NULL, 'images/user_images/190/business/1510175846new.jpg', '2017-12-23 00:00:00'),
(109, 203, 'shettyanusha161@gmail.com', 'India', 'KARNATAKA', 'BANGALORE', 'MALLESHWARAM', '0', '9999999999', 'UTC', 'seller', '', 'images/user_images/203/1515527976new.jpg', '2018-01-10 01:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_old`
--

CREATE TABLE IF NOT EXISTS `tbl_users_old` (
  `usr_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `usr_title` varchar(5) NOT NULL,
  `usr_name` varchar(255) NOT NULL,
  `usr_email` varchar(255) NOT NULL,
  `usr_password` varchar(255) NOT NULL,
  `usr_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usr_type` enum('1','2','3') NOT NULL COMMENT '{1:Seller,2:Shippers,3:Buyer}',
  `usr_sub_type` int(11) NOT NULL,
  `usr_status` enum('A','I','D') NOT NULL,
  `usr_last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_users_old`
--

INSERT INTO `tbl_users_old` (`usr_id`, `usr_title`, `usr_name`, `usr_email`, `usr_password`, `usr_created_on`, `usr_type`, `usr_sub_type`, `usr_status`, `usr_last_login`) VALUES
(1, 'Mr.', 'mAYUR', 'mayur@trdstation.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-12-17 17:17:37', '1', 1, 'A', '2016-12-16 17:19:59'),
(2, 'Mr.', 'Aniket Gopal', 'aniket@trdstation', 'e10adc3949ba59abbe56e057f20f883e', '2016-12-17 17:22:49', '2', 5, 'A', '0000-00-00 00:00:00'),
(3, 'Mr.', 'Prashant', 'prashant@trdstation.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-12-17 17:19:14', '3', 9, 'A', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_international_trad`
--

CREATE TABLE IF NOT EXISTS `tbl_user_international_trad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `international_trad_id` int(11) NOT NULL,
  `trad_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=159 ;

--
-- Dumping data for table `tbl_user_international_trad`
--

INSERT INTO `tbl_user_international_trad` (`id`, `international_trad_id`, `trad_id`, `created_date`) VALUES
(4, 4, 3, '2017-04-17 16:20:27'),
(5, 1, 4, '2017-04-21 12:22:13'),
(6, 1, 5, '2017-05-03 21:59:39'),
(7, 10, 6, '2017-05-04 23:58:33'),
(8, 1, 7, '2017-05-06 09:56:31'),
(9, 1, 8, '2017-05-06 09:56:32'),
(10, 11, 9, '2017-05-06 14:38:38'),
(14, 2, 10, '2017-05-13 21:36:36'),
(15, 8, 10, '2017-05-13 21:36:36'),
(19, 1, 1, '2017-05-16 16:19:54'),
(20, 5, 1, '2017-05-16 16:19:54'),
(21, 9, 1, '2017-05-16 16:19:54'),
(23, 3, 11, '2017-05-18 00:06:44'),
(28, 1, 12, '2017-05-18 15:30:52'),
(29, 7, 12, '2017-05-18 15:30:52'),
(31, 8, 13, '2017-05-19 00:40:06'),
(33, 1, 14, '2017-05-21 23:49:20'),
(34, 2, 14, '2017-05-21 23:49:20'),
(35, 1, 15, '2017-05-22 09:55:34'),
(36, 1, 16, '2017-05-24 01:54:28'),
(37, 7, 16, '2017-05-24 01:54:28'),
(38, 1, 17, '2017-05-26 14:37:18'),
(39, 7, 18, '2017-05-28 16:16:58'),
(40, 9, 18, '2017-05-28 16:16:58'),
(41, 1, 19, '2017-06-14 10:04:05'),
(42, 7, 19, '2017-06-14 10:04:05'),
(43, 1, 20, '2017-07-03 20:17:18'),
(44, 7, 20, '2017-07-03 20:17:18'),
(45, 8, 21, '2017-07-03 22:42:45'),
(46, 3, 21, '2017-07-03 22:42:45'),
(47, 11, 22, '2017-07-08 23:36:14'),
(48, 1, 23, '2017-07-12 12:16:01'),
(49, 7, 23, '2017-07-12 12:16:01'),
(50, 2, 23, '2017-07-12 12:16:01'),
(51, 8, 23, '2017-07-12 12:16:01'),
(52, 2, 24, '2017-07-15 13:47:15'),
(53, 1, 25, '2017-08-16 19:53:15'),
(54, 3, 25, '2017-08-16 19:53:15'),
(55, 1, 26, '2017-08-19 19:08:23'),
(56, 7, 26, '2017-08-19 19:08:23'),
(57, 1, 27, '2017-09-03 17:55:56'),
(58, 7, 27, '2017-09-03 17:55:56'),
(61, 1, 28, '2017-09-03 18:47:22'),
(62, 7, 28, '2017-09-03 18:47:22'),
(105, 1, 29, '2017-09-07 18:34:06'),
(106, 7, 29, '2017-09-07 18:34:06'),
(107, 1, 30, '2017-09-26 21:19:12'),
(108, 2, 30, '2017-09-26 21:19:12'),
(109, 3, 30, '2017-09-26 21:19:12'),
(110, 1, 31, '2017-09-26 21:20:27'),
(111, 2, 31, '2017-09-26 21:20:27'),
(112, 3, 31, '2017-09-26 21:20:27'),
(113, 1, 32, '2017-10-09 18:35:57'),
(114, 7, 32, '2017-10-09 18:35:57'),
(115, 2, 32, '2017-10-09 18:35:57'),
(116, 8, 32, '2017-10-09 18:35:57'),
(117, 3, 32, '2017-10-09 18:35:57'),
(118, 9, 32, '2017-10-09 18:35:57'),
(119, 4, 32, '2017-10-09 18:35:57'),
(120, 10, 32, '2017-10-09 18:35:57'),
(121, 5, 32, '2017-10-09 18:35:57'),
(122, 11, 32, '2017-10-09 18:35:57'),
(123, 6, 32, '2017-10-09 18:35:57'),
(124, 1, 33, '2017-10-13 05:34:21'),
(125, 2, 33, '2017-10-13 05:34:21'),
(126, 3, 33, '2017-10-13 05:34:21'),
(127, 1, 34, '2017-10-13 17:36:12'),
(128, 2, 34, '2017-10-13 17:36:12'),
(129, 3, 34, '2017-10-13 17:36:12'),
(132, 1, 35, '2017-10-14 20:41:41'),
(133, 3, 35, '2017-10-14 20:41:41'),
(134, 1, 36, '2017-10-21 11:50:25'),
(135, 7, 36, '2017-10-21 11:50:25'),
(136, 2, 36, '2017-10-21 11:50:25'),
(137, 8, 36, '2017-10-21 11:50:25'),
(138, 3, 36, '2017-10-21 11:50:25'),
(139, 9, 36, '2017-10-21 11:50:25'),
(140, 4, 36, '2017-10-21 11:50:25'),
(141, 10, 36, '2017-10-21 11:50:25'),
(142, 5, 36, '2017-10-21 11:50:25'),
(143, 11, 36, '2017-10-21 11:50:25'),
(144, 6, 36, '2017-10-21 11:50:25'),
(145, 1, 37, '2017-11-02 14:34:22'),
(146, 2, 37, '2017-11-02 14:34:22'),
(147, 3, 37, '2017-11-02 14:34:22'),
(148, 1, 38, '2018-01-10 01:38:44'),
(149, 7, 38, '2018-01-10 01:38:44'),
(150, 2, 38, '2018-01-10 01:38:44'),
(151, 8, 38, '2018-01-10 01:38:44'),
(152, 3, 38, '2018-01-10 01:38:44'),
(153, 9, 38, '2018-01-10 01:38:44'),
(154, 4, 38, '2018-01-10 01:38:44'),
(155, 10, 38, '2018-01-10 01:38:44'),
(156, 5, 38, '2018-01-10 01:38:44'),
(157, 11, 38, '2018-01-10 01:38:44'),
(158, 6, 38, '2018-01-10 01:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_payment_currency`
--

CREATE TABLE IF NOT EXISTS `tbl_user_payment_currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_currency_id` int(11) NOT NULL,
  `trad_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=140 ;

--
-- Dumping data for table `tbl_user_payment_currency`
--

INSERT INTO `tbl_user_payment_currency` (`id`, `payment_currency_id`, `trad_id`, `created_date`) VALUES
(4, 4, 3, '2017-04-17 16:20:27'),
(5, 1, 4, '2017-04-21 12:22:13'),
(6, 2, 5, '2017-05-03 21:59:39'),
(7, 1, 6, '2017-05-04 23:58:33'),
(8, 7, 6, '2017-05-04 23:58:33'),
(9, 2, 6, '2017-05-04 23:58:33'),
(10, 2, 7, '2017-05-06 09:56:31'),
(11, 2, 8, '2017-05-06 09:56:32'),
(12, 2, 9, '2017-05-06 14:38:38'),
(16, 1, 10, '2017-05-13 21:36:36'),
(20, 3, 1, '2017-05-16 16:19:54'),
(21, 7, 1, '2017-05-16 16:19:54'),
(22, 8, 1, '2017-05-16 16:19:54'),
(24, 2, 11, '2017-05-18 00:06:44'),
(29, 1, 12, '2017-05-18 15:30:53'),
(30, 3, 12, '2017-05-18 15:30:53'),
(31, 7, 12, '2017-05-18 15:30:53'),
(33, 2, 13, '2017-05-19 00:40:06'),
(35, 1, 14, '2017-05-21 23:49:20'),
(36, 1, 15, '2017-05-22 09:55:34'),
(37, 1, 16, '2017-05-24 01:54:28'),
(38, 2, 16, '2017-05-24 01:54:28'),
(39, 1, 17, '2017-05-26 14:37:18'),
(40, 8, 18, '2017-05-28 16:16:58'),
(41, 3, 18, '2017-05-28 16:16:58'),
(42, 1, 19, '2017-06-14 10:04:05'),
(43, 7, 19, '2017-06-14 10:04:05'),
(44, 1, 20, '2017-07-03 20:17:18'),
(45, 7, 20, '2017-07-03 20:17:18'),
(46, 8, 21, '2017-07-03 22:42:45'),
(47, 3, 21, '2017-07-03 22:42:45'),
(48, 1, 22, '2017-07-08 23:36:14'),
(49, 1, 23, '2017-07-12 12:16:01'),
(50, 2, 23, '2017-07-12 12:16:01'),
(51, 5, 23, '2017-07-12 12:16:01'),
(52, 1, 24, '2017-07-15 13:47:15'),
(53, 1, 25, '2017-08-16 19:53:15'),
(54, 8, 25, '2017-08-16 19:53:15'),
(55, 1, 26, '2017-08-19 19:08:23'),
(56, 1, 27, '2017-09-03 17:55:56'),
(57, 7, 27, '2017-09-03 17:55:56'),
(61, 1, 28, '2017-09-03 18:47:22'),
(62, 2, 28, '2017-09-03 18:47:22'),
(63, 3, 28, '2017-09-03 18:47:22'),
(105, 1, 29, '2017-09-07 18:34:06'),
(106, 2, 29, '2017-09-07 18:34:06'),
(107, 3, 29, '2017-09-07 18:34:06'),
(108, 4, 29, '2017-09-07 18:34:06'),
(109, 5, 29, '2017-09-07 18:34:06'),
(110, 6, 29, '2017-09-07 18:34:06'),
(111, 7, 29, '2017-09-07 18:34:06'),
(112, 8, 29, '2017-09-07 18:34:06'),
(113, 9, 29, '2017-09-07 18:34:06'),
(114, 2, 30, '2017-09-26 21:19:12'),
(115, 3, 30, '2017-09-26 21:19:12'),
(116, 4, 30, '2017-09-26 21:19:12'),
(117, 2, 31, '2017-09-26 21:20:27'),
(118, 3, 31, '2017-09-26 21:20:27'),
(119, 4, 31, '2017-09-26 21:20:27'),
(120, 1, 32, '2017-10-09 18:35:57'),
(121, 8, 32, '2017-10-09 18:35:57'),
(122, 1, 33, '2017-10-13 05:34:21'),
(123, 2, 33, '2017-10-13 05:34:21'),
(124, 8, 33, '2017-10-13 05:34:21'),
(125, 1, 34, '2017-10-13 17:36:12'),
(126, 7, 34, '2017-10-13 17:36:12'),
(127, 2, 34, '2017-10-13 17:36:12'),
(131, 1, 35, '2017-10-14 20:41:41'),
(132, 2, 35, '2017-10-14 20:41:41'),
(133, 8, 35, '2017-10-14 20:41:41'),
(134, 1, 36, '2017-10-21 11:50:25'),
(135, 2, 36, '2017-10-21 11:50:25'),
(136, 1, 37, '2017-11-02 14:34:22'),
(137, 2, 37, '2017-11-02 14:34:22'),
(138, 8, 37, '2017-11-02 14:34:22'),
(139, 1, 38, '2018-01-10 01:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_payment_terms`
--

CREATE TABLE IF NOT EXISTS `tbl_user_payment_terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_terms_id` int(11) NOT NULL,
  `trad_id` int(11) NOT NULL DEFAULT '0',
  `busi_id` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=465 ;

--
-- Dumping data for table `tbl_user_payment_terms`
--

INSERT INTO `tbl_user_payment_terms` (`id`, `payment_terms_id`, `trad_id`, `busi_id`, `created_date`) VALUES
(4, 4, 3, 0, '2017-04-17 16:20:27'),
(5, 1, 4, 0, '2017-04-21 12:22:13'),
(6, 2, 5, 0, '2017-05-03 21:59:39'),
(7, 4, 6, 0, '2017-05-04 23:58:33'),
(8, 5, 6, 0, '2017-05-04 23:58:33'),
(9, 2, 7, 0, '2017-05-06 09:56:31'),
(10, 2, 8, 0, '2017-05-06 09:56:32'),
(11, 4, 9, 0, '2017-05-06 14:38:38'),
(15, 1, 10, 0, '2017-05-13 21:36:36'),
(16, 2, 10, 0, '2017-05-13 21:36:36'),
(20, 1, 1, 0, '2017-05-16 16:19:54'),
(21, 3, 1, 0, '2017-05-16 16:19:54'),
(22, 8, 1, 0, '2017-05-16 16:19:54'),
(24, 3, 11, 0, '2017-05-18 00:06:44'),
(29, 1, 12, 0, '2017-05-18 15:30:52'),
(30, 7, 12, 0, '2017-05-18 15:30:52'),
(32, 2, 13, 0, '2017-05-19 00:40:06'),
(34, 1, 0, 23, '2017-05-21 23:48:47'),
(35, 1, 14, 0, '2017-05-21 23:49:20'),
(36, 1, 0, 26, '2017-05-22 07:43:02'),
(37, 2, 0, 26, '2017-05-22 07:43:02'),
(38, 1, 0, 26, '2017-05-22 07:46:01'),
(39, 2, 0, 26, '2017-05-22 07:46:01'),
(41, 1, 0, 27, '2017-05-22 09:56:41'),
(42, 1, 16, 22, '2017-05-24 01:54:28'),
(43, 7, 16, 22, '2017-05-24 01:54:28'),
(44, 1, 0, 28, '2017-05-25 00:28:36'),
(45, 2, 0, 28, '2017-05-25 00:28:36'),
(53, 1, 0, 31, '2017-05-26 16:19:42'),
(54, 7, 18, 32, '2017-05-28 16:16:58'),
(55, 3, 18, 32, '2017-05-28 16:16:58'),
(56, 4, 18, 32, '2017-05-28 16:16:58'),
(57, 1, 19, 34, '2017-06-14 10:04:05'),
(58, 7, 19, 34, '2017-06-14 10:04:05'),
(59, 1, 0, 35, '2017-06-18 05:17:26'),
(60, 7, 0, 35, '2017-06-18 05:17:26'),
(61, 2, 0, 35, '2017-06-18 05:17:26'),
(62, 8, 0, 35, '2017-06-18 05:17:26'),
(63, 3, 0, 35, '2017-06-18 05:17:26'),
(64, 2, 0, 37, '2017-06-19 07:27:54'),
(65, 8, 0, 37, '2017-06-19 07:27:54'),
(66, 3, 0, 37, '2017-06-19 07:27:54'),
(67, 1, 20, 38, '2017-07-03 20:17:18'),
(68, 7, 20, 38, '2017-07-03 20:17:18'),
(69, 2, 21, 39, '2017-07-03 22:42:45'),
(70, 3, 21, 39, '2017-07-03 22:42:45'),
(71, 1, 0, 42, '2017-07-04 10:07:35'),
(72, 2, 0, 42, '2017-07-04 10:07:35'),
(73, 2, 0, 43, '2017-07-04 10:13:49'),
(74, 3, 0, 43, '2017-07-04 10:13:49'),
(75, 4, 22, 44, '2017-07-08 23:36:14'),
(76, 1, 23, 46, '2017-07-12 12:16:01'),
(77, 7, 23, 46, '2017-07-12 12:16:01'),
(78, 8, 23, 46, '2017-07-12 12:16:01'),
(79, 4, 23, 46, '2017-07-12 12:16:01'),
(80, 1, 0, 47, '2017-07-13 18:59:15'),
(81, 7, 0, 47, '2017-07-13 18:59:15'),
(82, 1, 24, 48, '2017-07-15 13:47:15'),
(83, 4, 0, 50, '2017-07-15 15:10:56'),
(84, 1, 0, 51, '2017-08-15 16:36:56'),
(85, 1, 0, 51, '2017-08-15 16:38:43'),
(86, 1, 0, 51, '2017-08-15 16:39:36'),
(87, 1, 25, 52, '2017-08-16 19:53:15'),
(88, 2, 25, 52, '2017-08-16 19:53:15'),
(89, 1, 26, 53, '2017-08-19 19:08:23'),
(90, 7, 26, 53, '2017-08-19 19:08:23'),
(91, 1, 0, 55, '2017-08-30 17:16:50'),
(92, 2, 0, 55, '2017-08-30 17:16:50'),
(93, 1, 27, 57, '2017-09-03 17:55:56'),
(94, 7, 27, 57, '2017-09-03 17:55:56'),
(98, 1, 0, 60, '2017-09-03 18:46:55'),
(99, 2, 0, 60, '2017-09-03 18:46:55'),
(100, 3, 0, 60, '2017-09-03 18:46:55'),
(101, 1, 28, 0, '2017-09-03 18:47:22'),
(102, 2, 28, 0, '2017-09-03 18:47:22'),
(103, 3, 28, 0, '2017-09-03 18:47:22'),
(165, 1, 29, 0, '2017-09-07 18:34:06'),
(166, 2, 29, 0, '2017-09-07 18:34:06'),
(167, 3, 29, 0, '2017-09-07 18:34:06'),
(168, 4, 29, 0, '2017-09-07 18:34:06'),
(169, 5, 29, 0, '2017-09-07 18:34:06'),
(170, 6, 29, 0, '2017-09-07 18:34:06'),
(171, 7, 29, 0, '2017-09-07 18:34:06'),
(202, 1, 0, 64, '2017-09-14 08:24:15'),
(203, 2, 0, 64, '2017-09-14 08:24:15'),
(204, 7, 0, 64, '2017-09-14 08:24:15'),
(205, 8, 0, 64, '2017-09-14 08:24:15'),
(208, 1, 0, 65, '2017-09-14 15:23:09'),
(209, 7, 0, 65, '2017-09-14 15:23:09'),
(233, 1, 0, 69, '2017-09-20 12:20:41'),
(234, 3, 0, 69, '2017-09-20 12:20:41'),
(235, 6, 0, 69, '2017-09-20 12:20:41'),
(236, 7, 0, 69, '2017-09-20 12:20:41'),
(246, 1, 0, 61, '2017-09-21 15:34:30'),
(247, 2, 0, 61, '2017-09-21 15:34:30'),
(248, 7, 0, 61, '2017-09-21 15:34:30'),
(277, 1, 0, 71, '2017-09-25 12:47:15'),
(278, 2, 0, 71, '2017-09-25 12:47:15'),
(279, 3, 0, 71, '2017-09-25 12:47:15'),
(280, 4, 0, 71, '2017-09-25 12:47:15'),
(281, 7, 0, 71, '2017-09-25 12:47:15'),
(282, 8, 0, 71, '2017-09-25 12:47:15'),
(283, 1, 0, 74, '2017-09-26 17:01:33'),
(284, 2, 0, 74, '2017-09-26 17:01:33'),
(289, 2, 0, 77, '2017-09-26 22:54:43'),
(290, 3, 0, 77, '2017-09-26 22:54:43'),
(291, 2, 0, 79, '2017-09-26 23:05:27'),
(292, 8, 0, 79, '2017-09-26 23:05:27'),
(295, 2, 0, 75, '2017-09-27 16:38:31'),
(296, 3, 0, 75, '2017-09-27 16:38:31'),
(333, 1, 0, 81, '2017-10-01 20:18:17'),
(334, 2, 0, 81, '2017-10-01 20:18:17'),
(335, 7, 0, 81, '2017-10-01 20:18:17'),
(336, 1, 0, 82, '2017-10-02 17:27:59'),
(337, 7, 0, 82, '2017-10-02 17:27:59'),
(340, 1, 0, 83, '2017-10-02 23:50:15'),
(341, 7, 0, 83, '2017-10-02 23:50:15'),
(358, 1, 0, 84, '2017-10-07 15:58:05'),
(359, 2, 0, 84, '2017-10-07 15:58:05'),
(360, 3, 0, 84, '2017-10-07 15:58:05'),
(361, 4, 0, 84, '2017-10-07 15:58:05'),
(362, 5, 0, 84, '2017-10-07 15:58:05'),
(363, 6, 0, 84, '2017-10-07 15:58:05'),
(364, 7, 0, 84, '2017-10-07 15:58:05'),
(365, 8, 0, 84, '2017-10-07 15:58:05'),
(381, 1, 0, 86, '2017-10-09 18:51:47'),
(382, 2, 0, 86, '2017-10-09 18:51:47'),
(383, 7, 0, 86, '2017-10-09 18:51:47'),
(388, 1, 0, 87, '2017-10-10 20:15:38'),
(389, 2, 0, 87, '2017-10-10 20:15:38'),
(390, 4, 0, 87, '2017-10-10 20:15:38'),
(391, 7, 0, 87, '2017-10-10 20:15:38'),
(394, 1, 0, 92, '2017-10-12 22:27:33'),
(395, 7, 0, 92, '2017-10-12 22:27:33'),
(399, 1, 0, 93, '2017-10-13 05:41:14'),
(400, 2, 0, 93, '2017-10-13 05:41:14'),
(401, 7, 0, 93, '2017-10-13 05:41:14'),
(402, 1, 34, 94, '2017-10-13 17:36:12'),
(406, 1, 35, 0, '2017-10-14 20:41:41'),
(407, 2, 35, 0, '2017-10-14 20:41:41'),
(408, 7, 35, 0, '2017-10-14 20:41:41'),
(421, 1, 0, 98, '2017-10-20 10:34:53'),
(422, 2, 0, 98, '2017-10-20 10:34:53'),
(423, 7, 0, 98, '2017-10-20 10:34:53'),
(427, 1, 0, 100, '2017-10-21 11:55:10'),
(428, 2, 0, 100, '2017-10-21 11:55:10'),
(429, 7, 0, 100, '2017-10-21 11:55:10'),
(438, 1, 0, 101, '2017-11-01 14:15:22'),
(439, 2, 0, 101, '2017-11-01 14:15:22'),
(440, 3, 0, 101, '2017-11-01 14:15:22'),
(441, 4, 0, 101, '2017-11-01 14:15:22'),
(442, 5, 0, 101, '2017-11-01 14:15:22'),
(443, 6, 0, 101, '2017-11-01 14:15:22'),
(444, 7, 0, 101, '2017-11-01 14:15:22'),
(445, 8, 0, 101, '2017-11-01 14:15:22'),
(461, 1, 0, 102, '2017-12-23 16:37:23'),
(462, 2, 0, 102, '2017-12-23 16:37:23'),
(463, 7, 0, 102, '2017-12-23 16:37:23'),
(464, 8, 38, 104, '2018-01-10 01:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_tradmarket`
--

CREATE TABLE IF NOT EXISTS `tbl_user_tradmarket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `market_id` int(11) NOT NULL,
  `trad_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=142 ;

--
-- Dumping data for table `tbl_user_tradmarket`
--

INSERT INTO `tbl_user_tradmarket` (`id`, `market_id`, `trad_id`, `created_date`) VALUES
(4, 5, 3, '2017-04-17 16:20:27'),
(5, 1, 4, '2017-04-21 12:22:13'),
(6, 1, 5, '2017-05-03 21:59:39'),
(7, 1, 6, '2017-05-04 23:58:33'),
(8, 5, 6, '2017-05-04 23:58:33'),
(9, 9, 6, '2017-05-04 23:58:33'),
(10, 2, 6, '2017-05-04 23:58:33'),
(11, 6, 6, '2017-05-04 23:58:33'),
(12, 3, 6, '2017-05-04 23:58:33'),
(13, 7, 6, '2017-05-04 23:58:33'),
(14, 4, 6, '2017-05-04 23:58:33'),
(15, 8, 6, '2017-05-04 23:58:33'),
(16, 1, 7, '2017-05-06 09:56:31'),
(17, 1, 8, '2017-05-06 09:56:32'),
(18, 1, 9, '2017-05-06 14:38:38'),
(19, 5, 9, '2017-05-06 14:38:38'),
(20, 9, 9, '2017-05-06 14:38:38'),
(21, 2, 9, '2017-05-06 14:38:38'),
(22, 6, 9, '2017-05-06 14:38:38'),
(23, 3, 9, '2017-05-06 14:38:38'),
(24, 7, 9, '2017-05-06 14:38:38'),
(25, 4, 9, '2017-05-06 14:38:38'),
(26, 8, 9, '2017-05-06 14:38:38'),
(31, 1, 10, '2017-05-13 21:36:35'),
(32, 5, 10, '2017-05-13 21:36:35'),
(33, 2, 10, '2017-05-13 21:36:35'),
(39, 1, 1, '2017-05-16 16:19:54'),
(40, 2, 1, '2017-05-16 16:19:54'),
(41, 4, 1, '2017-05-16 16:19:54'),
(42, 6, 1, '2017-05-16 16:19:54'),
(43, 7, 1, '2017-05-16 16:19:54'),
(53, 1, 11, '2017-05-18 00:06:44'),
(54, 2, 11, '2017-05-18 00:06:44'),
(55, 3, 11, '2017-05-18 00:06:44'),
(56, 5, 11, '2017-05-18 00:06:44'),
(57, 6, 11, '2017-05-18 00:06:44'),
(58, 7, 11, '2017-05-18 00:06:44'),
(59, 8, 11, '2017-05-18 00:06:44'),
(60, 9, 11, '2017-05-18 00:06:44'),
(67, 1, 12, '2017-05-18 15:30:52'),
(68, 5, 12, '2017-05-18 15:30:52'),
(69, 9, 12, '2017-05-18 15:30:52'),
(71, 4, 13, '2017-05-19 00:40:06'),
(72, 5, 13, '2017-05-19 00:40:06'),
(73, 6, 13, '2017-05-19 00:40:06'),
(75, 1, 14, '2017-05-21 23:49:20'),
(76, 1, 15, '2017-05-22 09:55:34'),
(77, 1, 16, '2017-05-24 01:54:28'),
(78, 5, 16, '2017-05-24 01:54:28'),
(79, 1, 17, '2017-05-26 14:37:18'),
(80, 1, 18, '2017-05-28 16:16:57'),
(81, 5, 18, '2017-05-28 16:16:57'),
(82, 1, 19, '2017-06-14 10:04:05'),
(83, 1, 20, '2017-07-03 20:17:18'),
(84, 5, 20, '2017-07-03 20:17:18'),
(85, 2, 21, '2017-07-03 22:42:45'),
(86, 6, 21, '2017-07-03 22:42:45'),
(87, 9, 22, '2017-07-08 23:36:14'),
(88, 1, 23, '2017-07-12 12:16:01'),
(89, 2, 23, '2017-07-12 12:16:01'),
(90, 7, 23, '2017-07-12 12:16:01'),
(91, 5, 24, '2017-07-15 13:47:15'),
(92, 1, 25, '2017-08-16 19:53:15'),
(93, 2, 25, '2017-08-16 19:53:15'),
(94, 1, 26, '2017-08-19 19:08:23'),
(95, 5, 26, '2017-08-19 19:08:23'),
(96, 9, 26, '2017-08-19 19:08:23'),
(97, 1, 27, '2017-09-03 17:55:56'),
(98, 5, 27, '2017-09-03 17:55:56'),
(99, 9, 27, '2017-09-03 17:55:56'),
(102, 1, 28, '2017-09-03 18:47:22'),
(103, 5, 28, '2017-09-03 18:47:22'),
(104, 1, 30, '2017-09-26 21:19:12'),
(105, 4, 30, '2017-09-26 21:19:12'),
(106, 7, 30, '2017-09-26 21:19:12'),
(107, 1, 31, '2017-09-26 21:20:26'),
(108, 4, 31, '2017-09-26 21:20:26'),
(109, 7, 31, '2017-09-26 21:20:26'),
(110, 1, 32, '2017-10-09 18:35:57'),
(111, 9, 32, '2017-10-09 18:35:57'),
(112, 5, 33, '2017-10-13 05:34:21'),
(113, 7, 33, '2017-10-13 05:34:21'),
(114, 8, 33, '2017-10-13 05:34:21'),
(115, 1, 34, '2017-10-13 17:36:12'),
(118, 2, 35, '2017-10-14 20:41:41'),
(119, 7, 35, '2017-10-14 20:41:41'),
(120, 1, 36, '2017-10-21 11:50:25'),
(121, 2, 36, '2017-10-21 11:50:25'),
(122, 3, 36, '2017-10-21 11:50:25'),
(123, 4, 36, '2017-10-21 11:50:25'),
(124, 5, 36, '2017-10-21 11:50:25'),
(125, 6, 36, '2017-10-21 11:50:25'),
(126, 7, 36, '2017-10-21 11:50:25'),
(127, 8, 36, '2017-10-21 11:50:25'),
(128, 9, 36, '2017-10-21 11:50:25'),
(129, 0, 36, '2017-10-21 11:50:25'),
(130, 5, 37, '2017-11-02 14:34:22'),
(131, 8, 37, '2017-11-02 14:34:22'),
(132, 1, 38, '2018-01-10 01:38:44'),
(133, 2, 38, '2018-01-10 01:38:44'),
(134, 3, 38, '2018-01-10 01:38:44'),
(135, 4, 38, '2018-01-10 01:38:44'),
(136, 5, 38, '2018-01-10 01:38:44'),
(137, 6, 38, '2018-01-10 01:38:44'),
(138, 7, 38, '2018-01-10 01:38:44'),
(139, 8, 38, '2018-01-10 01:38:44'),
(140, 9, 38, '2018-01-10 01:38:44'),
(141, 0, 38, '2018-01-10 01:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_3d`
--

CREATE TABLE IF NOT EXISTS `tb_product_3d` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `busi_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_product_3d`
--

INSERT INTO `tb_product_3d` (`id`, `busi_id`, `product_id`, `created_date`, `status`) VALUES
(1, 1, 1, '2018-01-08 19:00:00', 1),
(2, 46, 1, '2018-01-11 23:15:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_3dimage`
--

CREATE TABLE IF NOT EXISTS `tb_product_3dimage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_item_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tb_product_3dimage`
--

INSERT INTO `tb_product_3dimage` (`id`, `product_item_id`, `image`, `created_date`) VALUES
(1, 1, 'images/user_images/190/product/1509623080.1939sofa6.jpg', '2017-11-22 00:00:00'),
(3, 2, 'images/business_images/46/myProduct/frame1.jpg', '2018-01-11 23:15:58'),
(4, 2, 'images/business_images/46/myProduct/frame2.jpg', '2018-01-11 23:15:58'),
(5, 2, 'images/business_images/46/myProduct/frame3.jpg', '2018-01-11 23:15:58'),
(6, 2, 'images/business_images/46/myProduct/frame4.jpg', '2018-01-11 23:15:58'),
(7, 2, 'images/business_images/46/myProduct/frame5.jpg', '2018-01-11 23:15:58'),
(8, 2, 'images/business_images/46/myProduct/frame6.jpg', '2018-01-11 23:15:58'),
(9, 2, 'images/business_images/46/myProduct/frame7.jpg', '2018-01-11 23:15:58'),
(10, 2, 'images/business_images/46/myProduct/frame8.jpg', '2018-01-11 23:15:58'),
(11, 2, 'images/business_images/46/myProduct/frame9.jpg', '2018-01-11 23:15:58'),
(12, 2, 'images/business_images/46/myProduct/frame10.jpg', '2018-01-11 23:15:58'),
(13, 2, 'images/business_images/46/myProduct/frame11.jpg', '2018-01-11 23:15:58'),
(14, 2, 'images/business_images/46/myProduct/frame12.jpg', '2018-01-11 23:15:58'),
(15, 2, 'images/business_images/46/myProduct/frame13.jpg', '2018-01-11 23:15:58'),
(16, 2, 'images/business_images/46/myProduct/frame14.jpg', '2018-01-11 23:15:58'),
(17, 2, 'images/business_images/46/myProduct/frame15.jpg', '2018-01-11 23:15:58'),
(18, 2, 'images/business_images/46/myProduct/frame16.jpg', '2018-01-11 23:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_categories`
--

CREATE TABLE IF NOT EXISTS `user_categories` (
  `id` int(11) NOT NULL,
  `user_category` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_categories`
--

INSERT INTO `user_categories` (`id`, `user_category`) VALUES
(1, 'Seller'),
(2, 'Shipper'),
(3, 'Buyer');

-- --------------------------------------------------------

--
-- Table structure for table `user_subcategories`
--

CREATE TABLE IF NOT EXISTS `user_subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_subcategories`
--

INSERT INTO `user_subcategories` (`id`, `category_id`, `sub_category`) VALUES
(1, 1, 'Manufacturer'),
(2, 1, 'Supplier'),
(3, 1, 'Trading company'),
(4, 1, 'Product/Brand Agent'),
(5, 2, 'Shipping line'),
(6, 2, 'Shipping Agent'),
(7, 2, 'Forwarder'),
(8, 2, 'Shipping Company'),
(9, 3, 'Importer'),
(10, 3, 'Distributer'),
(11, 3, 'Trader'),
(12, 3, 'Wholesale Marker'),
(13, 3, 'Government Ministry/Office');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
