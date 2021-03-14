/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : php

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-02-10 13:20:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `msg`
-- ----------------------------
DROP TABLE IF EXISTS `msg`;
CREATE TABLE `msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `content` varchar(500) NOT NULL DEFAULT '',
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of msg
-- ----------------------------
INSERT INTO `msg` VALUES ('18', 'ç”°ä¸€ç”·', 'æˆ‘å¥½åƒæˆåŠŸäº†', '2021-02-08 20:00:18');
INSERT INTO `msg` VALUES ('5', 'ç”°ä¸€ç”·', 'è¿™æ˜¯ç¬¬ä¸€æ¬¡ç•™è¨€', '0000-00-00 00:00:00');
INSERT INTO `msg` VALUES ('23', 'ç”°ä¸€ç”·', 'æŸ¥è¯¢åŠŸèƒ½å®Œæˆï¼ŒçŽ°åœ¨å¢žåˆ æ”¹æŸ¥éƒ½å·²å®žçŽ°ã€‚', '2021-02-10 12:41:05');
