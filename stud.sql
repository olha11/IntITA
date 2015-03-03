/*
Navicat MySQL Data Transfer

Source Server         : IntITA
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : stud

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2015-03-02 21:01:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for studentprofile
-- ----------------------------
DROP TABLE IF EXISTS `studentprofile`;
CREATE TABLE `studentprofile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(255) DEFAULT NULL,
  `middleName` varchar(255) DEFAULT NULL,
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
  `aboutMy` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentprofile
-- ----------------------------
INSERT INTO `studentprofile` VALUES ('1', 'Вова', 'Джа', 'Марля', 'Wizlight', '21.03.1988', 'Wizlightdragon@gmail.com', '123', '911', 'Ямайка', 'ВДПУ', '1', 'Реггі, ковбаска, колобки', 'Растафарай', 'Володію албанською. Люблю м\'ясо та до м\'яса. Розвожу королів.   ', null);
