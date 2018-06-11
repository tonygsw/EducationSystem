/*
Navicat MySQL Data Transfer

Source Server         : gsw
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : educationsystem

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-06-11 12:21:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_no` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL DEFAULT 'asdfghjkl',
  `admin_name` varchar(40) NOT NULL,
  PRIMARY KEY (`admin_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('a123', 'asdfghjkl', 'admin_3');
INSERT INTO `admin` VALUES ('a201508010412', '12345678', 'amdin_1');
INSERT INTO `admin` VALUES ('a201508010413', '123456', 'admin_2');

-- ----------------------------
-- Table structure for class
-- ----------------------------
DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `class_no` varchar(40) NOT NULL,
  `class_name` varchar(40) NOT NULL,
  `class_department_no` varchar(40) NOT NULL,
  `class_num` int(40) DEFAULT '30',
  PRIMARY KEY (`class_no`),
  KEY `a1` (`class_department_no`),
  CONSTRAINT `a1` FOREIGN KEY (`class_department_no`) REFERENCES `department` (`department_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of class
-- ----------------------------
INSERT INTO `class` VALUES ('1504', '计科15004', '080100', '30');

-- ----------------------------
-- Table structure for course
-- ----------------------------
DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_no` varchar(40) NOT NULL,
  `course_name` varchar(40) NOT NULL,
  `course_teacher_no` varchar(40) DEFAULT NULL,
  `course_maxnum` int(40) DEFAULT '100',
  `course_credit` int(40) NOT NULL,
  PRIMARY KEY (`course_no`),
  KEY `a2` (`course_teacher_no`),
  CONSTRAINT `a2` FOREIGN KEY (`course_teacher_no`) REFERENCES `teacher` (`teacher_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course
-- ----------------------------
INSERT INTO `course` VALUES ('00000', '数据库', 't201508010412', '30', '4');
INSERT INTO `course` VALUES ('00001', '编译原理', 't201508010413', '31', '3');
INSERT INTO `course` VALUES ('00002', '算法', 't201508010413', '100', '4');

-- ----------------------------
-- Table structure for department
-- ----------------------------
DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `department_no` varchar(40) NOT NULL,
  `department_name` varchar(40) DEFAULT NULL,
  `department_classnum` int(40) DEFAULT '30',
  PRIMARY KEY (`department_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of department
-- ----------------------------
INSERT INTO `department` VALUES ('', null, '30');
INSERT INTO `department` VALUES ('080100', 'CS', '10');

-- ----------------------------
-- Table structure for grade
-- ----------------------------
DROP TABLE IF EXISTS `grade`;
CREATE TABLE `grade` (
  `class_no` varchar(40) NOT NULL,
  `course_no` varchar(40) NOT NULL,
  `student_no` varchar(40) NOT NULL,
  `student_name` varchar(40) DEFAULT NULL,
  `grade` int(40) DEFAULT '-1',
  PRIMARY KEY (`course_no`,`student_no`),
  KEY `2` (`student_no`),
  KEY `3` (`class_no`),
  KEY `4` (`student_name`),
  CONSTRAINT `1` FOREIGN KEY (`course_no`) REFERENCES `course` (`course_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `2` FOREIGN KEY (`student_no`) REFERENCES `student` (`student_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `3` FOREIGN KEY (`class_no`) REFERENCES `class` (`class_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `4` FOREIGN KEY (`student_name`) REFERENCES `student` (`student_name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of grade
-- ----------------------------
INSERT INTO `grade` VALUES ('1504', '00000', '201508010412', '甘世维', '100');

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `student_no` varchar(40) NOT NULL COMMENT '学号',
  `student_name` varchar(40) DEFAULT NULL,
  `student_password` varchar(40) NOT NULL DEFAULT '12345678' COMMENT '学生密码',
  `student_entertime` date DEFAULT '2018-01-01' COMMENT '入学时间',
  `student_birthday` date DEFAULT '1990-01-01' COMMENT '出生日期',
  `student_class` varchar(40) DEFAULT NULL,
  `student_depart` char(40) DEFAULT NULL,
  `student_sex` varchar(40) DEFAULT '男',
  PRIMARY KEY (`student_no`),
  KEY `pass` (`student_password`) USING BTREE,
  KEY `stu_part` (`student_depart`),
  KEY `stu_class` (`student_class`),
  KEY `student_name` (`student_name`),
  CONSTRAINT `stu_class` FOREIGN KEY (`student_class`) REFERENCES `class` (`class_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `stu_part` FOREIGN KEY (`student_depart`) REFERENCES `department` (`department_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('200000000000', 'hheh', '12345678', '2018-01-01', '1990-01-01', '1504', '080100', '男');
INSERT INTO `student` VALUES ('201508010412', '甘世维', '12345678', '2018-01-01', '1990-01-01', '1504', '080100', '男');

-- ----------------------------
-- Table structure for teacher
-- ----------------------------
DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `teacher_no` varchar(40) NOT NULL COMMENT '老师编号',
  `teacher_password` varchar(40) NOT NULL DEFAULT '12345678',
  `teacher_name` varchar(40) NOT NULL,
  `teacher_department_no` varchar(40) DEFAULT NULL,
  `teacher_tel` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`teacher_no`),
  KEY `1aa` (`teacher_department_no`),
  CONSTRAINT `1aa` FOREIGN KEY (`teacher_department_no`) REFERENCES `department` (`department_no`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of teacher
-- ----------------------------
INSERT INTO `teacher` VALUES ('t201508010412', '12345678', '叶残风', '080100', null);
INSERT INTO `teacher` VALUES ('t201508010413', '123456', '心安', '080100', null);
