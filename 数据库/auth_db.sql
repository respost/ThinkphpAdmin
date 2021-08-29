/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : auth_db

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2021-08-29 12:09:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `auth_app`
-- ----------------------------
DROP TABLE IF EXISTS `auth_app`;
CREATE TABLE `auth_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pinyin` varchar(50) DEFAULT NULL COMMENT '拼音',
  `version` varchar(20) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `update_zip` varchar(255) DEFAULT NULL COMMENT '更新压缩包路径',
  `update_json` varchar(255) DEFAULT NULL COMMENT '更新版本文件路径',
  `desc` varchar(255) DEFAULT NULL COMMENT '更新说明',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_app
-- ----------------------------
INSERT INTO `auth_app` VALUES ('1', '元宝支付', 'yuanbaozhifu', '2.0.0', '/source/yuanbaozhifu', '/update/yuanbaozhifu/version2.0.0.zip', '/update/yuanbaozhifu/version.json', '2021-4-15常规更新补丁', '1618476149', '1621913868', null);

-- ----------------------------
-- Table structure for `auth_config`
-- ----------------------------
DROP TABLE IF EXISTS `auth_config`;
CREATE TABLE `auth_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `key` varchar(255) DEFAULT NULL,
  `val` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '1 文本框  2数值框 ',
  `sort` int(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `item` varchar(3000) DEFAULT NULL,
  `allowempty` tinyint(4) DEFAULT '1' COMMENT '是否允许为空：0不允许 1允许',
  `issys` tinyint(4) DEFAULT '0' COMMENT '1 系统默认 不能删除',
  `ishide` tinyint(4) DEFAULT '0' COMMENT '是否隐藏：0 显示 1隐藏',
  `ishead` tinyint(255) DEFAULT '0' COMMENT '顶部显示：0 否 1是',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_config
-- ----------------------------
INSERT INTO `auth_config` VALUES ('1', '0', '', '', '0', '0', '后台设置', '', '', '1', '0', '0', '1');
INSERT INTO `auth_config` VALUES ('2', '0', '', '', '0', '0', '前台设置', '', '', '1', '0', '0', '1');
INSERT INTO `auth_config` VALUES ('3', '0', '', '', '0', '0', '缓存配置', '', '', '1', '0', '0', '1');
INSERT INTO `auth_config` VALUES ('4', '0', '', '', '0', '0', '邮箱设置', '', '', '1', '0', '0', '1');
INSERT INTO `auth_config` VALUES ('5', '0', '', '', '0', '0', '支付设置', '', '', '1', '0', '1', '1');
INSERT INTO `auth_config` VALUES ('6', '0', null, null, '1', '0', '提现设置', null, null, '1', '0', '1', '1');
INSERT INTO `auth_config` VALUES ('7', '1', 'title', '极光', '1', '0', '后台名称', '后台标题名称', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('8', '1', 'name', '后台管理系统', '1', null, '系统名称', '系统显示名称', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('9', '1', 'company', '美奇工作室', '1', null, '公司名称', '', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('10', '1', 'version', 'Version 1.0.0', '1', null, '系统版权', '', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('11', '1', 'url', 'http://www.zy13.net', '1', null, '系统域名', '填写系统网址', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('12', '1', 'page_num', '30', '2', '0', '后台每页显示数', '后台表格中每页显示的数量', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('13', '1', 'defaulturl', '/admin/index/main', '1', '0', '后台默认路径', '进入后台时的默认网址，此标签不可删除', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('14', '1', 'uploadtype', 'jpg,png,gif,jpeg', '1', '0', '允许上传类型', '输入允许上传的文件类型  请用,分隔', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('15', '2', 'front_open', '1', '4', '0', '前台开关', '', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('16', '2', 'front_close_notice', '网站维护,请稍后再访问!', '1', '0', '网站关闭显示', '', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('17', '2', 'webname', '极光', '1', '0', '网站名字', '网站名字信息', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('18', '2', 'front_title', '极光 - 授权管理系统', '1', '0', '前台标题', '前台标题信息', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('19', '2', 'keywords', '', '1', '0', '网站关键词', '多个关键词请用竖线 , 隔开，建议3到4个关键词', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('20', '2', 'description', '', '1', '0', '网站描述', '网站描述信息', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('21', '2', 'beian', '蜀ICP备19029089号', '1', '0', '备案号', '工信部ICP备案号', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('22', '2', 'copyright', 'Copyright © 2020-2021 极光 All Rights Reserved.', '1', '0', '网站版权', '网站版权信息', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('23', '2', 'visit-interval', '5', '2', '0', '访问间隔(秒)', '请填写整数(单位:秒)', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('24', '2', 'front_num', '9', '2', '0', '前台每页显示数', '前台表格中每页显示的数量', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('25', '2', 'kefu', '15577969', '1', '0', '客服QQ', '客服QQ', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('26', '2', 'statcode', '<script type=\"text/javascript\" src=\"https://js.users.51.la/21069921.js\"></script>', '5', '0', '站点统计', '网站第三方统计代码', null, '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('27', '3', 'cache_sys', '1800', '2', '0', '系统缓存', '请根据服务器性能适当调节(秒)', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('28', '3', 'cache_token', '180', '2', '0', 'TOKEN缓存', '请根据服务器性能适当调节(秒)', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('29', '3', 'cache_data', '300', '2', '0', '数据缓存', '请根据服务器性能适当配置(秒)', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('30', '3', 'cache_ip', '60', '2', '0', 'IP缓存', '请根据服务器性能适当调节(秒)', '', '0', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('31', '4', 'email_smtp', 'smtp.qq.com', '1', '0', 'SMTP服务器', '填写SMTP服务器', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('32', '4', 'email_port', '465', '1', null, '端口', '填写服务器端口', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('33', '4', 'email_name', 'api999@qq.com', '1', '0', '邮箱账号', '填写邮箱账号', '', '1', '1', '0', '0');
INSERT INTO `auth_config` VALUES ('34', '4', 'email_pass', '', '1', '0', '授权码', '填写授权码', '', '1', '1', '0', '0');

-- ----------------------------
-- Table structure for `auth_member`
-- ----------------------------
DROP TABLE IF EXISTS `auth_member`;
CREATE TABLE `auth_member` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `roleid` bigint(11) DEFAULT NULL,
  `lastdate` datetime DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='会员表';

-- ----------------------------
-- Records of auth_member
-- ----------------------------
INSERT INTO `auth_member` VALUES ('1', 'admin', '3403a65125501a7f3f410fbbbe9aa9a5', '超级管理员', '', 'admin@qq.com', '1', '1', '2021-08-29 12:06:31', null, null, null);

-- ----------------------------
-- Table structure for `auth_member_log`
-- ----------------------------
DROP TABLE IF EXISTS `auth_member_log`;
CREATE TABLE `auth_member_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_member_log
-- ----------------------------
INSERT INTO `auth_member_log` VALUES ('58', '1', '113.12.30.80', '1614490912', null);
INSERT INTO `auth_member_log` VALUES ('59', '13', '113.12.30.80', '1614495621', null);
INSERT INTO `auth_member_log` VALUES ('60', '1', '192.168.240.1', '1614754796', null);
INSERT INTO `auth_member_log` VALUES ('61', '1', '192.168.240.1', '1614754961', null);
INSERT INTO `auth_member_log` VALUES ('62', '1', '192.168.240.1', '1614755084', null);
INSERT INTO `auth_member_log` VALUES ('63', '1', '192.168.240.1', '1614755150', null);
INSERT INTO `auth_member_log` VALUES ('64', '1', '192.168.240.1', '1614756089', null);
INSERT INTO `auth_member_log` VALUES ('65', '1', '192.168.240.1', '1614757533', null);
INSERT INTO `auth_member_log` VALUES ('66', '1', '192.168.240.1', '1614757554', null);
INSERT INTO `auth_member_log` VALUES ('67', '1', '192.168.240.1', '1614757566', null);
INSERT INTO `auth_member_log` VALUES ('68', '1', '192.168.240.1', '1614757568', null);
INSERT INTO `auth_member_log` VALUES ('69', '1', '192.168.240.1', '1614757589', null);
INSERT INTO `auth_member_log` VALUES ('70', '1', '192.168.240.1', '1614828625', null);
INSERT INTO `auth_member_log` VALUES ('71', '1', '192.168.240.1', '1614842709', null);
INSERT INTO `auth_member_log` VALUES ('72', '1', '192.168.240.1', '1614842731', null);
INSERT INTO `auth_member_log` VALUES ('73', '1', '192.168.240.1', '1614842941', null);
INSERT INTO `auth_member_log` VALUES ('74', '1', '192.168.240.1', '1615088767', null);
INSERT INTO `auth_member_log` VALUES ('75', '1', '192.168.240.1', '1616816097', null);
INSERT INTO `auth_member_log` VALUES ('76', '1', '192.168.240.1', '1617245254', null);
INSERT INTO `auth_member_log` VALUES ('77', '1', '192.168.240.1', '1617282201', null);
INSERT INTO `auth_member_log` VALUES ('78', '1', '192.168.240.1', '1617282233', null);
INSERT INTO `auth_member_log` VALUES ('79', '1', '192.168.240.1', '1618374927', null);
INSERT INTO `auth_member_log` VALUES ('80', '1', '192.168.240.1', '1618376422', null);
INSERT INTO `auth_member_log` VALUES ('81', '1', '192.168.240.1', '1618378473', null);
INSERT INTO `auth_member_log` VALUES ('82', '1', '192.168.240.1', '1618380471', null);
INSERT INTO `auth_member_log` VALUES ('83', '1', '192.168.240.1', '1618380654', null);
INSERT INTO `auth_member_log` VALUES ('84', '1', '192.168.240.1', '1618380714', null);
INSERT INTO `auth_member_log` VALUES ('85', '1', '192.168.240.1', '1618455217', null);
INSERT INTO `auth_member_log` VALUES ('86', '1', '192.168.240.1', '1618456988', null);
INSERT INTO `auth_member_log` VALUES ('87', '1', '192.168.240.1', '1618457930', null);
INSERT INTO `auth_member_log` VALUES ('88', '1', '192.168.240.1', '1618475213', null);
INSERT INTO `auth_member_log` VALUES ('89', '1', '192.168.240.1', '1618487057', null);
INSERT INTO `auth_member_log` VALUES ('90', '1', '127.0.0.1', '1621913765', null);
INSERT INTO `auth_member_log` VALUES ('91', '1', '127.0.0.1', '1621914390', null);
INSERT INTO `auth_member_log` VALUES ('92', '1', '127.0.0.1', '1629172084', null);
INSERT INTO `auth_member_log` VALUES ('93', '1', '127.0.0.1', '1629172338', null);
INSERT INTO `auth_member_log` VALUES ('94', '1', '127.0.0.1', '1629172553', null);
INSERT INTO `auth_member_log` VALUES ('95', '1', '127.0.0.1', '1629172887', null);
INSERT INTO `auth_member_log` VALUES ('96', '1', '192.168.240.1', '1630209455', null);
INSERT INTO `auth_member_log` VALUES ('97', '1', '192.168.240.1', '1630209991', null);

-- ----------------------------
-- Table structure for `auth_product`
-- ----------------------------
DROP TABLE IF EXISTS `auth_product`;
CREATE TABLE `auth_product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alias` varchar(50) NOT NULL COMMENT '英文别名',
  `thumbnail` varchar(255) DEFAULT NULL COMMENT '缩略图',
  `status` tinyint(1) DEFAULT '1',
  `sort` tinyint(4) DEFAULT '0',
  `typeid` bigint(20) DEFAULT '0' COMMENT '授权类型',
  `month_amount` decimal(10,2) DEFAULT '30.00',
  `quarter_amount` decimal(10,2) DEFAULT '80.00',
  `year_amount` decimal(10,2) DEFAULT '300.00',
  `desc` varchar(255) DEFAULT NULL COMMENT '描述',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cfjz1` (`name`) USING BTREE,
  UNIQUE KEY `cfjz2` (`alias`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_product
-- ----------------------------

-- ----------------------------
-- Table structure for `auth_product_role`
-- ----------------------------
DROP TABLE IF EXISTS `auth_product_role`;
CREATE TABLE `auth_product_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL COMMENT '用户ID',
  `pid` bigint(20) DEFAULT NULL COMMENT '商品ID',
  `lotteryid` bigint(20) DEFAULT NULL,
  `total_num` bigint(20) DEFAULT '0' COMMENT '总次数',
  `current_num` bigint(20) DEFAULT '0' COMMENT '当前次数',
  `valid_time` datetime DEFAULT NULL,
  `ipbit` int(11) DEFAULT '3' COMMENT 'IP位',
  `create_time` int(11) DEFAULT NULL COMMENT '开始时间',
  `update_time` int(11) DEFAULT NULL COMMENT '结束时间',
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_product_role
-- ----------------------------

-- ----------------------------
-- Table structure for `auth_product_type`
-- ----------------------------
DROP TABLE IF EXISTS `auth_product_type`;
CREATE TABLE `auth_product_type` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sort` tinyint(4) DEFAULT '0',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of auth_product_type
-- ----------------------------
INSERT INTO `auth_product_type` VALUES ('1', '网站', '2', null, '1621921341', null);
INSERT INTO `auth_product_type` VALUES ('2', '软件', '3', null, '1621921350', null);

-- ----------------------------
-- Table structure for `auth_role`
-- ----------------------------
DROP TABLE IF EXISTS `auth_role`;
CREATE TABLE `auth_role` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `rolename` varchar(20) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `roleval` varchar(2000) DEFAULT NULL COMMENT '菜单值',
  `cmark` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_role
-- ----------------------------
INSERT INTO `auth_role` VALUES ('1', '超级管理员', '1', '1,3,4,5,7,9,10,11,12,13,6,8,14,15,16,17,18,19,20,21,22,23,24,2', '超级管理员拥有超级管理员权限');
INSERT INTO `auth_role` VALUES ('2', '普通管理员', '1', ',2,10,11,12,13,14,15,16,17,18,22,23,24,6,7,8,9,19,20,21', '普通管理员拥有普通管理员权限');

-- ----------------------------
-- Table structure for `auth_role_action`
-- ----------------------------
DROP TABLE IF EXISTS `auth_role_action`;
CREATE TABLE `auth_role_action` (
  `roleid` bigint(20) NOT NULL,
  `action` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_role_action
-- ----------------------------

-- ----------------------------
-- Table structure for `auth_user`
-- ----------------------------
DROP TABLE IF EXISTS `auth_user`;
CREATE TABLE `auth_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `appid` varchar(20) NOT NULL COMMENT '商户编号',
  `appkey` varchar(255) NOT NULL COMMENT '商户密钥',
  `username` varchar(20) NOT NULL COMMENT '用户账号',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `nick` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '余额',
  `lastdate` datetime DEFAULT NULL COMMENT '最后登录的时间',
  `address` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL COMMENT 'Token密钥',
  `tel` varchar(11) DEFAULT NULL COMMENT '电话',
  `qq` varchar(20) DEFAULT NULL COMMENT 'QQ号',
  `wechat` varchar(20) DEFAULT NULL COMMENT '微信号',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱账号',
  `wxopenid` varchar(100) DEFAULT NULL COMMENT '微信开放ID',
  `qqopenid` varchar(100) DEFAULT NULL COMMENT 'QQ开放ID',
  `agent` int(11) NOT NULL DEFAULT '0' COMMENT '上级（推荐人）',
  `payaccount` varchar(10) DEFAULT NULL COMMENT '真实姓名',
  `payname` varchar(20) DEFAULT NULL COMMENT '收款账号',
  `paycode` varchar(100) DEFAULT NULL COMMENT '收款码',
  `avatar` varchar(200) DEFAULT NULL COMMENT '用户头像',
  `status` tinyint(1) DEFAULT '1' COMMENT '0禁用,1启用',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`id`,`username`,`token`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_user
-- ----------------------------
INSERT INTO `auth_user` VALUES ('1', '20206491', '33bf70Af7350ccdAc7c92FD2B47370e1', '13800138000', '3403a65125501a7f3f410fbbbe9aa9a5', null, '20.00', '2021-08-17 11:47:52', '广西壮族自治区玉林市', '6b2B00FE30c23f9010105448911cDbC2', null, '123456', 'aher', '123456@qq.com', null, null, '0', '', '', '', '', '1', null, '1629172073', null);
INSERT INTO `auth_user` VALUES ('2', '20211385', 'A10a59b6E3Ceea17f112eC307aaC6Cf6', '13900139000', '3403a65125501a7f3f410fbbbe9aa9a5', null, '0.00', null, null, null, null, null, null, null, null, null, '0', null, null, null, null, '1', '1617779484', '1617779484', null);

-- ----------------------------
-- Table structure for `auth_user_log`
-- ----------------------------
DROP TABLE IF EXISTS `auth_user_log`;
CREATE TABLE `auth_user_log` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of auth_user_log
-- ----------------------------
INSERT INTO `auth_user_log` VALUES ('1', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('2', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('3', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('4', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('5', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('6', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('7', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('8', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('9', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('10', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('11', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('12', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('13', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('14', '1', '127.0.0.1', '2020');
INSERT INTO `auth_user_log` VALUES ('15', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('16', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('17', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('18', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('19', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('20', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('21', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('22', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('23', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('24', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('25', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('26', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('27', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('28', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('29', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('30', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('31', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('32', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('33', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('34', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('35', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('36', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('37', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('38', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('39', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('40', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('41', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('42', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('43', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('44', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('45', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('46', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('47', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('48', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('49', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('50', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('51', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('52', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('53', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('54', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('55', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('56', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('57', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('58', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('59', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('60', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('61', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('62', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('63', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('64', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('65', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('66', '1', '192.168.240.1', '2020');
INSERT INTO `auth_user_log` VALUES ('67', '1', '127.0.0.1', '2021');
INSERT INTO `auth_user_log` VALUES ('68', '1', '192.168.240.1', '2021');
INSERT INTO `auth_user_log` VALUES ('69', '1', '192.168.240.1', '2021');
INSERT INTO `auth_user_log` VALUES ('70', '1', '192.168.240.1', '1614834759');
INSERT INTO `auth_user_log` VALUES ('71', '1', '192.168.240.1', '1614834794');
INSERT INTO `auth_user_log` VALUES ('72', '1', '192.168.240.1', '1614835076');
INSERT INTO `auth_user_log` VALUES ('73', '1', '192.168.240.1', '1614835268');
INSERT INTO `auth_user_log` VALUES ('74', '1', '192.168.240.1', '1614835358');
INSERT INTO `auth_user_log` VALUES ('75', '1', '192.168.240.1', '1614835441');
INSERT INTO `auth_user_log` VALUES ('76', '1', '192.168.240.1', '1614835549');
INSERT INTO `auth_user_log` VALUES ('77', '1', '192.168.240.1', '1614835724');
INSERT INTO `auth_user_log` VALUES ('78', '1', '192.168.240.1', '1614837375');
INSERT INTO `auth_user_log` VALUES ('79', '1', '192.168.240.1', '1614838165');
INSERT INTO `auth_user_log` VALUES ('80', '1', '192.168.240.1', '1614838184');
INSERT INTO `auth_user_log` VALUES ('81', '1', '192.168.240.1', '1614838292');
INSERT INTO `auth_user_log` VALUES ('82', '1', '192.168.240.1', '1614838429');
INSERT INTO `auth_user_log` VALUES ('83', '1', '192.168.240.1', '1614838826');
INSERT INTO `auth_user_log` VALUES ('84', '1', '192.168.240.1', '1614838988');
INSERT INTO `auth_user_log` VALUES ('85', '1', '192.168.240.1', '1614839075');
INSERT INTO `auth_user_log` VALUES ('86', '1', '192.168.240.1', '1614839457');
INSERT INTO `auth_user_log` VALUES ('87', '1', '192.168.240.1', '1614840089');
INSERT INTO `auth_user_log` VALUES ('88', '1', '192.168.240.1', '1614840903');
INSERT INTO `auth_user_log` VALUES ('89', '1', '192.168.240.1', '1614840937');
INSERT INTO `auth_user_log` VALUES ('90', '1', '192.168.240.1', '1614840962');
INSERT INTO `auth_user_log` VALUES ('91', '1', '192.168.240.1', '1614842966');
INSERT INTO `auth_user_log` VALUES ('92', '1', '192.168.240.1', '1614843091');
INSERT INTO `auth_user_log` VALUES ('93', '1', '192.168.240.1', '1614843113');
INSERT INTO `auth_user_log` VALUES ('94', '1', '192.168.240.1', '1614843120');
INSERT INTO `auth_user_log` VALUES ('95', '1', '192.168.240.1', '1614861691');
INSERT INTO `auth_user_log` VALUES ('96', '1', '192.168.240.1', '1615087132');
INSERT INTO `auth_user_log` VALUES ('97', '1', '192.168.240.1', '1615103448');
INSERT INTO `auth_user_log` VALUES ('98', '1', '192.168.240.1', '1616767812');
INSERT INTO `auth_user_log` VALUES ('99', '1', '192.168.240.1', '1616822785');
INSERT INTO `auth_user_log` VALUES ('100', '1', '192.168.240.1', '1617259158');
INSERT INTO `auth_user_log` VALUES ('101', '1', '127.0.0.1', '1617776759');
INSERT INTO `auth_user_log` VALUES ('102', '1', '127.0.0.1', '1617776796');
INSERT INTO `auth_user_log` VALUES ('103', '1', '192.168.240.1', '1618377874');
INSERT INTO `auth_user_log` VALUES ('104', '1', '192.168.240.1', '1618378136');
INSERT INTO `auth_user_log` VALUES ('105', '1', '192.168.240.1', '1618378294');
INSERT INTO `auth_user_log` VALUES ('106', '1', '192.168.240.1', '1618378357');
INSERT INTO `auth_user_log` VALUES ('107', '1', '192.168.240.1', '1618378364');
INSERT INTO `auth_user_log` VALUES ('108', '1', '192.168.240.1', '1618378454');
INSERT INTO `auth_user_log` VALUES ('109', '1', '127.0.0.1', '1621913753');
INSERT INTO `auth_user_log` VALUES ('110', '1', '127.0.0.1', '1621914221');
INSERT INTO `auth_user_log` VALUES ('111', '1', '127.0.0.1', '1629172072');
