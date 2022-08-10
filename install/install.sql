DROP TABLE IF EXISTS `pre_config`;
create table `pre_config` (
  `k` varchar(32) NOT NULL,
  `v` text NULL,
  PRIMARY KEY  (`k`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `pre_config` VALUES ('cache', '');
INSERT INTO `pre_config` VALUES ('admin_user', 'admin');
INSERT INTO `pre_config` VALUES ('admin_pwd', '123456');
INSERT INTO `pre_config` VALUES ('blackip', '');
INSERT INTO `pre_config` VALUES ('title', 'XG外链网盘');
INSERT INTO `pre_config` VALUES ('keywords', '外链网盘,免费外链,免费图床,图片外链');
INSERT INTO `pre_config` VALUES ('description', 'XG外链网盘提供大容量云存储服务');
INSERT INTO `pre_config` VALUES ('url', 'http://idc.slycc.cn');
INSERT INTO `pre_config` VALUES ('storage', 'local');
INSERT INTO `pre_config` VALUES ('filepath', '');
INSERT INTO `pre_config` VALUES ('aliyun_ak', '');
INSERT INTO `pre_config` VALUES ('aliyun_sk', '');
INSERT INTO `pre_config` VALUES ('name_block', '');
INSERT INTO `pre_config` VALUES ('type_block', '');
INSERT INTO `pre_config` VALUES ('type_image', 'png|jpg|jpeg|gif|bmp|webp|ico|svg|svgz|tif|tiff');
INSERT INTO `pre_config` VALUES ('type_audio', 'mp3|wav|wma|ogg|m4a');
INSERT INTO `pre_config` VALUES ('type_video', 'mp4|webm|flv|f4v|mov|3gp|3gpp|avi|mpg|mpeg|wmv|mkv|ts');
INSERT INTO `pre_config` VALUES ('green_check', '0');
INSERT INTO `pre_config` VALUES ('green_check_region', 'cn-beijing');
INSERT INTO `pre_config` VALUES ('green_check_porn', '0');
INSERT INTO `pre_config` VALUES ('green_check_terrorism', '0');
INSERT INTO `pre_config` VALUES ('green_label_porn', 'sexy,porn');
INSERT INTO `pre_config` VALUES ('green_label_terrorism', 'bloody,explosion,outfit,logo,weapon,politics');
INSERT INTO `pre_config` VALUES ('gg_file', '网站所有文件内容均由用户自行上传分享，本站严格遵守国家相关法律法规，尊重著作权、版权等第三方权利，如果当前文件侵犯了您的相关权利，请邮件反馈至@qq.com，我们将及时处理。');

DROP TABLE IF EXISTS `pre_file`;
CREATE TABLE `pre_file` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `size` int(11) unsigned NOT NULL,
  `hash` varchar(32) NOT NULL,
  `addtime` datetime NOT NULL,
  `lasttime` datetime DEFAULT NULL,
  `ip` varchar(15) NOT NULL,
  `hide` int(1) NOT NULL DEFAULT '0',
  `pwd` varchar(255) DEFAULT NULL,
  `block` int(1) NOT NULL DEFAULT '0',
  `count` int(11) unsigned NOT NULL DEFAULT '0',
   PRIMARY KEY (`id`),
   KEY `hash` (`hash`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
