/*
Navicat MySQL Data Transfer

Source Server         : mysql -u root -p
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2018-10-19 18:20:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for blog
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '博客id',
  `cate_id` int(11) NOT NULL COMMENT '分类id',
  `content` text COMMENT '内容',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `isdeleted` int(1) NOT NULL DEFAULT '0' COMMENT '软删除标识位 1 表示已经删除 0 未删除 ',
  `keywords` varchar(128) DEFAULT NULL COMMENT '关键字 逗号隔开',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`),
  CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of blog
-- ----------------------------

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) NOT NULL COMMENT '分类名称',
  `pid` int(11) DEFAULT NULL COMMENT '父类id',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of category
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(64) NOT NULL COMMENT '用户名称',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '更新时间',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT '创建时间',
  `password` char(32) NOT NULL COMMENT '密码',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `telephone` char(11) NOT NULL COMMENT '电话',
  `intro` varchar(255) DEFAULT NULL COMMENT '简介',
  `gender` char(1) DEFAULT NULL COMMENT '性别：男M 女F',
  `qq` varchar(32) NOT NULL COMMENT 'qq号',
  `addr` varchar(255) DEFAULT NULL COMMENT '地址',
  `job` varchar(64) DEFAULT NULL COMMENT '工作',
  `company` varchar(128) DEFAULT NULL COMMENT '公司',
  `birthday` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP COMMENT '出生日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
