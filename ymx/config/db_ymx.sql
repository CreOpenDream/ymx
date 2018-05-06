-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 年 05 月 03 日 15:23
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db_ymx`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_advice`
--

CREATE TABLE IF NOT EXISTS `tb_advice` (
  `advice_id` int(11) NOT NULL AUTO_INCREMENT,
  `advice_userid` int(11) NOT NULL,
  `advice_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `advice_content` text COLLATE utf8_unicode_ci NOT NULL,
  `advice_username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`advice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_cc`
--

CREATE TABLE IF NOT EXISTS `tb_cc` (
  `cc_id` int(11) NOT NULL AUTO_INCREMENT,
  `cc_user_id` int(11) NOT NULL,
  `cc_company_image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cc_brief_introduction` text COLLATE utf8_unicode_ci NOT NULL,
  `cc_company_tenet` text COLLATE utf8_unicode_ci NOT NULL,
  `cc_management_idea` text COLLATE utf8_unicode_ci NOT NULL,
  `cc_values` text COLLATE utf8_unicode_ci NOT NULL,
  `cc_excellent_team` text COLLATE utf8_unicode_ci NOT NULL,
  `cc_team_image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=40 ;

--
-- 转存表中的数据 `tb_cc`
--

INSERT INTO `tb_cc` (`cc_id`, `cc_user_id`, `cc_company_image`, `cc_brief_introduction`, `cc_company_tenet`, `cc_management_idea`, `cc_values`, `cc_excellent_team`, `cc_team_image`) VALUES
(20, 28, 'mould/cc/images/img_0.png', '易模秀网是一个具有原创模板、素材交易平台', '的网站，该网站提供了丰富模板和可在线内容编辑的服务。', '易模秀网提供的模板主要包括企业介绍、产品介绍、团队介绍，个人简历等模板。通过本网站，用户选取符合自身需求的模板，填入相应的内容，即可快速生成专属的定制页面。', '，从而让作品变得更加有价值意义。', '除此之外，本网站可为设计师提供原创作品交易平台', 'mould/cc/images/img_1.png'),
(29, 28, 'mould/cc/images/img_0.png', '易模秀网是一个具有原创模板、素材交易平台的网站', '本网站可为设计师提供原创作品交易平台，从而让作品变得更加有价值意义', '易模秀网提供的模板主要包括企业介绍、产品介绍、团队介绍，个人简历等模板', '已有的资源是最大的价值', '通过本网站，用户选取符合自身需求的模板，填入相应的内容，即可快速生成专属的定制页面', 'mould/cc/images/img_1.png'),
(34, 5, 'mould/cc/images/ccimg_0_1525094992_5.png', '为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', 'mould/cc/images/ccimg_1_1525094992_5.png'),
(33, 5, 'mould/cc/images/ccimg_0_.1525094750_5.png', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'mould/cc/images/ccimg_1_.1525094750_5.png'),
(35, 5, 'mould/cc/images/ccimg_0_1525095342_5.png', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', '为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息为定制你所需要的企业宣传模块，请您输入以下信息', 'mould/cc/images/ccimg_1_1525095342_5.png'),
(36, 5, 'mould/cc/images/ccimg_0_1525144076_5.png', '易模秀网是一个具有原创模板、素材交易平台的网站', '该网站提供了丰富模板和可在线内容编辑的服务。', '易模秀网提供的模板主要包括企业介绍、产品介绍、团队介绍，个人简历等模板。通过本网站，用户选取符合自身...', '从而让作品变得更加有价值意义。', '从而让作品变得更加有价值意义。从而让作品变得更加有价值意义。', 'mould/cc/images/ccimg_1_1525144076_5.png'),
(37, 5, '', '      1  ', '1', '1', '1', '1', 'mould/cc/images/ccimg_1_1525338887_5.png'),
(38, 5, '', '123434', '23432', '234', '234324324', '3243243', 'mould/cc/images/ccimg_1_1525339093_5.png'),
(39, 5, '', '123412424', '3424234', '23423', '4234324234', '32423432423', 'mould/cc/images/ccimg_1_1525339356_5.png');

-- --------------------------------------------------------

--
-- 表的结构 `tb_mould`
--

CREATE TABLE IF NOT EXISTS `tb_mould` (
  `mould_id` int(11) NOT NULL AUTO_INCREMENT,
  `mould_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `mould_type` int(6) unsigned NOT NULL,
  `mould_price` float unsigned NOT NULL,
  `mould_visit` int(11) unsigned NOT NULL,
  `mould_authorid` int(11) NOT NULL,
  `mould_date` date NOT NULL,
  `mould_coverimgurl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mould_expurl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mould_description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mould_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `tb_mould`
--

INSERT INTO `tb_mould` (`mould_id`, `mould_name`, `mould_type`, `mould_price`, `mould_visit`, `mould_authorid`, `mould_date`, `mould_coverimgurl`, `mould_expurl`, `mould_description`) VALUES
(1, '企业介绍', 1, 0, 1, 5, '2018-05-01', 'images/m1.png', 'www.ncgds.cn/ymx/mould/cc/', '企业介绍描述'),
(2, '个人简历', 2, 0, 1, 5, '2018-05-01', 'images/m2.png', 'www.ncgds.cn/ymx/mould/resume/', '个人简历描述');

-- --------------------------------------------------------

--
-- 表的结构 `tb_resume`
--

CREATE TABLE IF NOT EXISTS `tb_resume` (
  `resume_id` int(11) NOT NULL AUTO_INCREMENT,
  `resume_userid` int(11) NOT NULL,
  `resume_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_type` int(2) NOT NULL DEFAULT '1',
  `resume_like` int(11) NOT NULL DEFAULT '0',
  `resume_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_head_img` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `resume_age` tinyint(4) NOT NULL,
  `resume_native_place` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_education` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `resume_major` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `resume_hobby` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_personal_declaration` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience11` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience12` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience21` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience22` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience31` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience32` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience41` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_work_experience42` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_language_ability` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_software_capability` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_other_capability` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_ability_remark` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `resume_works1_imgurl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_works2_imgurl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_works3_imgurl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_works4_imgurl` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `resume_brief_resume` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`resume_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tb_resume`
--

INSERT INTO `tb_resume` (`resume_id`, `resume_userid`, `resume_url`, `resume_type`, `resume_like`, `resume_name`, `resume_head_img`, `resume_age`, `resume_native_place`, `resume_education`, `resume_major`, `resume_hobby`, `resume_personal_declaration`, `resume_work_experience11`, `resume_work_experience12`, `resume_work_experience21`, `resume_work_experience22`, `resume_work_experience31`, `resume_work_experience32`, `resume_work_experience41`, `resume_work_experience42`, `resume_language_ability`, `resume_software_capability`, `resume_other_capability`, `resume_ability_remark`, `resume_works1_imgurl`, `resume_works2_imgurl`, `resume_works3_imgurl`, `resume_works4_imgurl`, `resume_brief_resume`) VALUES
(1, 5, 'mould/resume', 1, 0, '1', '', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', 'mould/resume/images/ccimg_0_1525340309_5.png', '', 'mould/resume/images/ccimg_0_1525340309_5.png', '1'),
(2, 5, 'mould/resume', 1, 0, 'zzz', '', 12, 'fd', '43', '34', '34', '43', '34', '34', '23', '23', '23', '23', '23', '23', '23', '23', '2332', '2332', '', '', 'mould/resume/images/ccimg_0_3_1525340701_5.png', 'mould/resume/images/ccimg_0_4_1525340701_5.png', '32233'),
(3, 5, 'mould/resume', 1, 0, '1', '', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', 'mould/resume/images/ccimg_0_2_1525353430_5.png', 'mould/resume/images/ccimg_0_3_1525353430_5.png', 'mould/resume/images/ccimg_0_4_1525353430_5.png', '11'),
(4, 5, 'resume_1525353986_5.html', 1, 0, '1', 'mould/resume/images/resumeimg_0_0_1525353986_5.png', 1, '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'mould/resume/images/resumeimg_0_1_1525353986_5.png', 'mould/resume/images/resumeimg_0_2_1525353986_5.png', 'mould/resume/images/resumeimg_0_3_1525353986_5.png', 'mould/resume/images/resumeimg_0_4_1525353986_5.png', '222'),
(5, 5, 'resume_1525355510_5.html', 1, 0, '1', 'mould/resume/images/resumeimg_0_0_1525355510_5.png', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'mould/resume/images/resumeimg_0_1_1525355510_5.png', 'mould/resume/images/resumeimg_0_2_1525355510_5.png', 'mould/resume/images/resumeimg_0_3_1525355510_5.png', 'mould/resume/images/resumeimg_0_4_1525355510_5.png', '233'),
(6, 5, './mould/resume/resume_1525357896_5.html', 1, 0, '111', 'images/resumeimg_0_0_1525357896_5.png', 11, '11', '11', '11', '111', '111', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', '11', 'images/resumeimg_0_1_1525357896_5.png', 'images/resumeimg_0_2_1525357896_5.png', 'images/resumeimg_0_3_1525357896_5.png', 'images/resumeimg_0_4_1525357896_5.png', '2222'),
(7, 5, './mould/resume/resume_1525359827_5.html', 1, 0, '郭守金', 'images/resumeimg_0_0_1525359827_5.jpg', 20, '江西赣州', '本科', '软件工程', '看书，游戏，电音，绘画', '闻道有先后，术业有专攻', '2016年 新创游戏工作室 合作开发小游戏游戏', '2016年 新创游戏工作室 合作开发小游戏游戏', '2017 年 深圳BMJ商城搭建', '2017 年 深圳BMJ商城搭建', '2018年 机电系网站建设，担任后台', '2018年 机电系网站建设，担任后台', '2018年 易模秀后台', '2018年 易模秀后台', '精通各种语言', '熟悉各种软件', '合作能力', '开朗', 'images/resumeimg_0_1_1525359827_5.png', 'images/resumeimg_0_2_1525359827_5.png', 'images/resumeimg_0_3_1525359827_5.png', 'images/resumeimg_0_4_1525359827_5.png', '游戏作品');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nickname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_qq` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `user_qqopenid` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_pwd` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_imgurl` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `user_balance` int(11) NOT NULL DEFAULT '0',
  `user_type` int(2) NOT NULL DEFAULT '1',
  `user_sex` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `user_birthdate` date NOT NULL,
  `user_profession` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_occupation` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_wechat` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_weibo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_nickname`, `user_qq`, `user_qqopenid`, `user_name`, `user_pwd`, `user_imgurl`, `user_balance`, `user_type`, `user_sex`, `user_birthdate`, `user_profession`, `user_occupation`, `user_phone`, `user_email`, `user_wechat`, `user_weibo`) VALUES
(1, '', '', '', 'Donald Duck', 'Duckburg', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(2, '', '', '', 'ceshi001', '123', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(3, '', '', '', 'ceshi002', '123', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(4, '', '', '', 'asdfsfds', 'sdfasdfa', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(5, '小飞侠', '1321212112', '', 'admin', 'admin', '', 0, 1, '女', '1991-01-01', '互联网', '学生', '', '', '', ''),
(6, '', '', '', 'admin1234', '12345678', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(7, '', '', '', 's11223344', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(8, '', '', '', 's11223343', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(9, '', '', '', '2a222222', '22222222', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(10, '', '', '', 'd12341234', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(11, '', '', '', 'e1231231', '123123123', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(12, '', '', '', 'r12312312', '123123123', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(13, '', '', '', 'ff12341234', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(14, '', '', '', 'aaa2233', '2233', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(15, '', '', '', 'ef123', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(16, '', '', '', 'aaa321321', '123123123', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(17, '', '', '', 'n12344321', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(18, '', '', '', 'p123456789', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(19, '', '', '', '1r123444', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(20, '', '', '', 'cc22334455', '11223344', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(21, '', '', '', 'ff2233445', '2233445566', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(22, '', '', '', 'ert123412', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(23, '', '', '', 'za11223344', '11223344', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(24, '', '', '', 'lghlgh2020', '19971118sx', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(25, '', '', '', 's1231231', '123123123', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', ''),
(26, '', '', '', 'ert345345', '12341234', '', 0, 1, '0', '0000-00-00', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
