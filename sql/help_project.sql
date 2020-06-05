/*
Navicat MySQL Data Transfer

Source Server         : Wamp
Source Server Version : 50726
Source Host           : localhost:3306
Source Database       : help_project

Target Server Type    : MYSQL
Target Server Version : 50726
File Encoding         : 65001

Date: 2020-06-05 14:15:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `action_login`
-- ----------------------------
DROP TABLE IF EXISTS `action_login`;
CREATE TABLE `action_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text,
  `action_time` datetime NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of action_login
-- ----------------------------
INSERT INTO `action_login` VALUES ('1', 'use Employees filter', '2020-06-05 14:08:04', 'ahmed');
INSERT INTO `action_login` VALUES ('2', 'use Employees filter', '2020-06-05 14:12:17', 'ahmed');

-- ----------------------------
-- Table structure for `employees`
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `employeeNumber` int(11) NOT NULL AUTO_INCREMENT,
  `jobTitle` varchar(255) NOT NULL,
  `reportsTo` int(11) DEFAULT NULL,
  `officeCode` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  PRIMARY KEY (`employeeNumber`)
) ENGINE=InnoDB AUTO_INCREMENT=1703 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of employees
-- ----------------------------
INSERT INTO `employees` VALUES ('1002', 'President', null, '11', 'dmurphy@classicmodelcars.', 'x5800', 'Diane', 'Murphy ');
INSERT INTO `employees` VALUES ('1056', 'VP Sales', '1002', '1', 'mpatterso@classicmodelcar', 'x4611', 'Mary', 'Patterson ');
INSERT INTO `employees` VALUES ('1076', 'VP Marketing', '1002', '1', 'jfirrelli@classicmodelcar', 'x9273', 'Jeff', 'Firrelli');
INSERT INTO `employees` VALUES ('1088', 'Sales Manager (', '1056', '6', 'wpatterson@classicmodelca', 'x4871', 'William', 'Patterson ');
INSERT INTO `employees` VALUES ('1102', 'Sale Manager (E', '1056', '4', 'gbondur@classicmodelcars.', 'x5408', 'Gerard', 'Bondur');
INSERT INTO `employees` VALUES ('1143', 'Sales Manager (', '1056', '1', 'abow@classicmodelcars.com', 'x5428', 'Anthony', 'Bow ');
INSERT INTO `employees` VALUES ('1165', 'Sales Rep', '1143', '1', 'ljennings@classicmodelcar', 'x3291', 'Leslie', 'Jennings ');
INSERT INTO `employees` VALUES ('1166', 'Sales Rep', '1143', '1', 'lthompson@classicmodelcar', 'x4065', 'Leslie', 'Thompson ');
INSERT INTO `employees` VALUES ('1188', 'Sales Rep', '1143', '2', 'jfirrelli@classicmodelcar', 'x2173', 'Julie', 'Firrelli');
INSERT INTO `employees` VALUES ('1216', 'Sales Rep', '1143', '2', 'spatterson@classicmodelca', 'x4334', 'Steve', 'Patterson ');
INSERT INTO `employees` VALUES ('1286', 'Sales Rep', '1143', '3', 'ftseng@classicmodelcars.c', 'x2248', 'Foon Yue', 'Tseng ');
INSERT INTO `employees` VALUES ('1323', 'Sales Rep', '1143', '3', 'gvanauf@classicmodelcars.', 'x4102', 'George', 'Vanauf');
INSERT INTO `employees` VALUES ('1337', 'Sales Rep', '1102', '4', 'lbondur@classicmodelcars.', 'x6493', 'Loui', 'Bondur');
INSERT INTO `employees` VALUES ('1370', 'Sales Rep', '1102', '4', 'ghernande@classicmodelcar', 'x2028', 'Gerard', 'Hernandez ');
INSERT INTO `employees` VALUES ('1401', 'Sales Rep', '1102', '4', 'pcastillo@classicmodelcar', 'x2759', 'Pamela', 'Castillo ');
INSERT INTO `employees` VALUES ('1611', 'Sales Rep', '1088', '6', 'afixter@classicmodelcars.', 'x101', 'Andy', 'Fixter');
INSERT INTO `employees` VALUES ('1612', 'Sales Rep', '1088', '6', 'pmarsh@classicmodelcars.c', 'x102', 'Peter', 'Marsh ');
INSERT INTO `employees` VALUES ('1619', 'Sales Rep', '1088', '6', 'tking@classicmodelcars.co', 'x103', 'Tom', 'King ');
INSERT INTO `employees` VALUES ('1621', 'Sales Rep', '1056', '5', 'mnishi@classicmodelcars.c', 'x101', 'Mami', 'Nishi ');
INSERT INTO `employees` VALUES ('1625', 'Sales Rep', '1621', '5', 'ykato@classicmodelcars.co', 'x102', 'Yoshimi', 'Kato ');
INSERT INTO `employees` VALUES ('1702', 'Sales Rep', '1102', '4', 'mgerard@classicmodelcars.', 'x2312', 'Martin', 'Gerard ');

-- ----------------------------
-- Table structure for `logintime`
-- ----------------------------
DROP TABLE IF EXISTS `logintime`;
CREATE TABLE `logintime` (
  `username` varchar(11) NOT NULL,
  `login_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logintime
-- ----------------------------
INSERT INTO `logintime` VALUES ('ahmed', '2020-06-05 12:03:31');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'ahmed', '123');
