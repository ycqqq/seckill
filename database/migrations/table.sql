# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.18-log)
# Database: qyc_kill
# Generation Time: 2017-12-05 13:13:54 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table ms_ active
# ------------------------------------------------------------

CREATE TABLE `ms_ active` (
  `active_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '活动id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '活动名称',
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '开始时间',
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '结束时间',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后更新时间',
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '状态',
  `create_ip` varchar(50) NOT NULL DEFAULT '' COMMENT '创建人ip',
  PRIMARY KEY (`active_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动信息表';



# Dump of table ms_admin_user
# ------------------------------------------------------------

CREATE TABLE `ms_admin_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `telephone` char(11) NOT NULL DEFAULT '' COMMENT '手机号码',
  `password` varchar(255) NOT NULL DEFAULT '' COMMENT '密码',
  `username` varchar(16) NOT NULL DEFAULT '' COMMENT '姓名',
  PRIMARY KEY (`id`),
  UNIQUE KEY `telephone` (`telephone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ms_admin_user` WRITE;
/*!40000 ALTER TABLE `ms_admin_user` DISABLE KEYS */;

INSERT INTO `ms_admin_user` (`id`, `telephone`, `password`, `username`)
VALUES
	(2,'18258855800','$2y$10$bIe3ZAr.uSYmJOnthude3u3jwsQJn6h7ll9MzuPVuuUv7FTfDW..u','喵了个咪');

/*!40000 ALTER TABLE `ms_admin_user` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ms_goods
# ------------------------------------------------------------

CREATE TABLE `ms_goods` (
  `good_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品id',
  `active_id` int(11) NOT NULL DEFAULT '0' COMMENT '活动id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '商品名称',
  `desc` text NOT NULL COMMENT '描述信息',
  `img` varchar(255) NOT NULL DEFAULT '' COMMENT '图标',
  `original_price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '原价',
  `discount_price` decimal(10,2) NOT NULL COMMENT '折扣价格',
  `num_total` int(11) NOT NULL DEFAULT '0' COMMENT '商品总数',
  `num_per_user` int(11) NOT NULL DEFAULT '0' COMMENT '每个用户限购数量',
  `num_left` int(11) NOT NULL DEFAULT '0' COMMENT '剩余商品',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '修改时间',
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '状态',
  `ip` varchar(50) DEFAULT NULL COMMENT '创建人ip',
  PRIMARY KEY (`good_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品信息表';



# Dump of table ms_log
# ------------------------------------------------------------

CREATE TABLE `ms_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '日志id',
  `active_id` int(11) NOT NULL COMMENT '活动id',
  `uid` int(11) NOT NULL COMMENT '用户id',
  `action` varchar(50) NOT NULL DEFAULT '' COMMENT '操作',
  `result` varchar(50) NOT NULL DEFAULT '' COMMENT '返回信息',
  `info` text NOT NULL COMMENT '操作详情',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改时间',
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '状态',
  `ip` varchar(50) NOT NULL DEFAULT '' COMMENT '用户ip',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='日志信息表';



# Dump of table ms_order
# ------------------------------------------------------------

CREATE TABLE `ms_order` (
  `order_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `active_id` int(11) NOT NULL DEFAULT '0' COMMENT '活动id',
  `good_id` int(11) NOT NULL DEFAULT '0' COMMENT '商品id',
  `num_total` int(11) NOT NULL DEFAULT '0' COMMENT '商品数量',
  `num_good` int(11) NOT NULL DEFAULT '0' COMMENT '种类数量',
  `price_total` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '总金额',
  `price_discount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '优惠后价格',
  `confirm_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '确认订单时间',
  `pay_time` timestamp NULL DEFAULT NULL COMMENT '支付时间',
  `over_time` timestamp NULL DEFAULT NULL COMMENT '过期时间',
  `cancel_time` timestamp NULL DEFAULT NULL COMMENT '取消时间',
  `goods_info` mediumtext NOT NULL COMMENT '订单商品详情',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '最后修改时间',
  `status` enum('0','1','2','3','4','5','6','7','8','9') NOT NULL DEFAULT '0' COMMENT '状态',
  `ip` varchar(50) NOT NULL DEFAULT '' COMMENT '用户ip',
  `uid` int(11) NOT NULL COMMENT '用户Id',
  `uname` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单信息表';




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
