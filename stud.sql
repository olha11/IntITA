/*
Navicat MySQL Data Transfer

Source Server         : IntITA
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : stud

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2015-02-25 19:01:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for studentprofile
-- ----------------------------
DROP TABLE IF EXISTS `studentprofile`;
CREATE TABLE `studentprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `secondName` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` text,
  `education` varchar(255) DEFAULT NULL,
  `educform` decimal(60,0) DEFAULT NULL,
  `interests` text,
  `aboutUs` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentprofile
-- ----------------------------
INSERT INTO `studentprofile` VALUES ('1', 'Вова', 'Марля', 'Wizlight', '21.03.1988', 'Wizlightdragon@gmail.com', '123', '911', 'Ямайка', 'ВДПУ', '1', 'Реггі, ковбаска, колобки', 'Растафарай');
