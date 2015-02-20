/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50525
Source Host           : localhost:3306
Source Database       : stud

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2015-02-19 23:29:00
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
  `middleName` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `birthday` varchar(11) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `aboutMyself` text,
  `interests` text,
  `certificates` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `note` text,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of studentprofile
-- ----------------------------
INSERT INTO `studentprofile` VALUES ('1', 'Вова', 'Марля', 'Джа', 'Wizlight', '21.03.1988', 'ВДПУ', 'Растафарай', 'Реггі, ковбаска, колобки', 'Доктора Попова', '911', 'Wizlightdragon@gmail.com', 'Ямайка', 'Нон', '123');
