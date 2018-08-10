-- phpMyAdmin SQL Dump
-- version 4.0.10.8
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018-08-10 19:27:18
-- 服务器版本: 5.1.65-community
-- PHP 版本: 5.5.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sysnaica`
--

-- --------------------------------------------------------

--
-- 表的结构 `daan_admin`
--

CREATE TABLE IF NOT EXISTS `daan_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT '1' COMMENT '1:超级管理员,2:普通管理员',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:已禁用,1:已启动',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `daan_admin`
--

INSERT INTO `daan_admin` (`id`, `username`, `password`, `role`, `status`) VALUES
(1, 'admin', '123', '超级管理员', 0);

-- --------------------------------------------------------

--
-- 表的结构 `daan_admin_role`
--

CREATE TABLE IF NOT EXISTS `daan_admin_role` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL COMMENT '1:超级管理员,2:普通管理员',
  `rolerule` varchar(20) NOT NULL COMMENT '角色规则',
  `desc` varchar(20) NOT NULL COMMENT '角色描述',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0:已禁用,1:已启动',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `daan_admin_role`
--

INSERT INTO `daan_admin_role` (`id`, `role`, `rolerule`, `desc`, `status`) VALUES
(1, '1', '拥有歌列表的权限', '具有至高无上的权利1', 1),
(2, '2', '测试123', '啊啊啊啊', 0),
(3, '', '', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `daan_auth_rule`
--

CREATE TABLE IF NOT EXISTS `daan_auth_rule` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `controller` varchar(20) NOT NULL COMMENT '控/方',
  `method` varchar(20) NOT NULL COMMENT '方法名',
  `title` varchar(20) NOT NULL COMMENT '权限名称',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '状态',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
  `pid` int(9) NOT NULL,
  `level` int(9) NOT NULL,
  `sort` int(9) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `daan_auth_rule`
--

INSERT INTO `daan_auth_rule` (`id`, `controller`, `method`, `title`, `status`, `type`, `pid`, `level`, `sort`) VALUES
(1, 'admin', '', '管理员管理', 0, 0, 0, 1, 50);

-- --------------------------------------------------------

--
-- 表的结构 `daan_cate`
--

CREATE TABLE IF NOT EXISTS `daan_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `cate` varchar(20) NOT NULL COMMENT '栏目名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `daan_cate`
--

INSERT INTO `daan_cate` (`id`, `cate`) VALUES
(1, '答案茶总部'),
(2, '新闻动态'),
(3, '成功案例'),
(4, '答案奶茶'),
(5, '加盟答案');

-- --------------------------------------------------------

--
-- 表的结构 `daan_join`
--

CREATE TABLE IF NOT EXISTS `daan_join` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL COMMENT '留言',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `daan_naicha`
--

CREATE TABLE IF NOT EXISTS `daan_naicha` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `daan_naicha`
--

INSERT INTO `daan_naicha` (`id`, `pic`, `title`) VALUES
(19, '/uploads/20180806\\acc4701222eb7a28a20cfa6b16616842', ''),
(18, '/uploads/20180806\\6f5465f84b21c1e1301c7c3d2a22c958', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `daan_news`
--

CREATE TABLE IF NOT EXISTS `daan_news` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL COMMENT '标题',
  `time` int(10) NOT NULL COMMENT '时间',
  `number` varchar(9) NOT NULL COMMENT '序号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- 转存表中的数据 `daan_news`
--

INSERT INTO `daan_news` (`id`, `title`, `time`, `number`) VALUES
(27, '1', 1533201468, '1'),
(26, '有毒？', 1533102508, '02'),
(25, '111', 1533102484, '111'),
(24, '111', 1533022310, '111'),
(23, '添加功能有毒', 1533022269, '03'),
(22, '测试添加功能', 1533022191, '111'),
(21, '1', 1533021618, '2        '),
(18, '新闻添加测试', 1532934604, '01'),
(19, '添加的弹窗问题还没解决', 1532934647, '02       '),
(20, '为什么？', 1532934841, '为什么？');

-- --------------------------------------------------------

--
-- 表的结构 `daan_successful`
--

CREATE TABLE IF NOT EXISTS `daan_successful` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL COMMENT '标题',
  `desc` varchar(50) NOT NULL COMMENT '描述',
  `time` int(10) NOT NULL COMMENT '时间',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `click` int(9) NOT NULL COMMENT '点击数',
  `number` varchar(9) NOT NULL COMMENT '序号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `daan_successful`
--

INSERT INTO `daan_successful` (`id`, `title`, `desc`, `time`, `content`, `click`, `number`) VALUES
(1, '答案茶好机会需要及时把握', '占卜奶茶奶制品早在很久以前就开始被人们所关注，很多人开始品尝占卜奶茶只是为了解渴，但是随着后来的不断', 0, '占卜奶茶奶制品早在很久以前就开始被人们所关注，很多人开始品尝占卜奶茶只是为了解渴，但是随着后来的不断发展，占卜奶茶成为一种时尚，这就为答案茶带了广阔的发展空间，好机会需要及时把握，是一个前景无限的创业好项目！\n\n\n想要通过投资占卜奶茶行业获得成功其实并不是一件简单的事情，有很多创业者因为担心而止步不前。虽然这样的情况对大家的创业没有好处，但是大家还是应该鼓起信心，勇敢迈出创业的第一步。创业最关键的一步就是选择一个合适的好项目，对于看好奶制品行业的小本创业者来说，答案茶加盟是最明智的选择，独家推出新概念的特', 0, '01'),
(6, '123', '  111                ', 1532934131, '    111          ', 0, '1111'),
(7, '弹窗问题', '我也很绝望              ', 1532934882, '成不成功？            ', 0, '02'),
(8, '111', '11            ', 1533009765, '1          ', 0, '11'),
(9, '111', '111               ', 1533087623, '111          ', 0, '04'),
(10, '测试', '111                  ', 1533101825, '111              ', 0, '01'),
(11, '测试1', ' 为啥还是关闭窗口，而且还有报错，好迷啊                 ', 1533101929, '无语          ', 0, '002'),
(12, '测试2', '111                ', 1533102097, '111        ', 0, '003'),
(13, '测试3', 'ojbk                  ', 1533102202, 'ojbk              ', 0, '004'),
(14, 'ceshi4', '不成功，就自宫                  ', 1533102345, '求求你啦              ', 0, '005'),
(15, '1', '  1                ', 1533102452, '    1          ', 0, '1'),
(16, '123', '      123           ', 1533201281, '', 0, '111'),
(17, '1', ' 1                 ', 1533201447, '  1            ', 0, '1');

-- --------------------------------------------------------

--
-- 表的结构 `daan_tea`
--

CREATE TABLE IF NOT EXISTS `daan_tea` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) NOT NULL COMMENT '缩略图',
  `title` varchar(30) NOT NULL COMMENT '答案茶标题',
  `content` varchar(100) NOT NULL COMMENT '答案茶描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `daan_tea`
--

INSERT INTO `daan_tea` (`id`, `pic`, `title`, `content`) VALUES
(41, '20180806\\19c3ea53a3bbf825772642324da67699.jpg', '答案', '一杯可以占卜的茶\n\n答案茶是有史以来\n\n第一款可以为你寻找答案的神奇茶饮\n\n无论任何问题\n\n只要写下来并在心中默念5遍\n\n茶面上就会神奇的浮现出问题的答案\n\n你的答案由你开启\n\n           '),
(39, '20180806\\4bf4699f097f1d3064aecfd1c8c222b5.jpg', '添加还有点问题', '111                                    '),
(40, '20180806\\14280c28114eb9ca5927335a82642c3b.jpg', '测试', '嘿嘿嘿                  ');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_admin`
--

CREATE TABLE IF NOT EXISTS `gaocha_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `gaocha_admin`
--

INSERT INTO `gaocha_admin` (`id`, `username`, `password`) VALUES
(9, 'admin111', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'admin000', 'e10adc3949ba59abbe56e057f20f883e'),
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_auth_group`
--

CREATE TABLE IF NOT EXISTS `gaocha_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `gaocha_auth_group`
--

INSERT INTO `gaocha_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '超级管理员', 1, '10,31,33,34,35,36,32,1,5,7,29,28,2,22,25,26,27,21,23,24,16,3,6,44,45,55,56,57,42'),
(6, '文章管理员', 1, '44,45,55,56,57,42,43,52,53,54,37,41,48,47,46,39,40,49,50,51'),
(7, '加盟管理员', 1, '2,22,25,26,27,21,23,24,16,3,6');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `gaocha_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `gaocha_auth_group_access`
--

INSERT INTO `gaocha_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1),
(6, 5),
(7, 1),
(8, 6),
(9, 7),
(28, 3),
(29, 4);

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_auth_rule`
--

CREATE TABLE IF NOT EXISTS `gaocha_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `pid` mediumint(9) NOT NULL,
  `level` tinyint(1) NOT NULL,
  `sort` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- 转存表中的数据 `gaocha_auth_rule`
--

INSERT INTO `gaocha_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`, `pid`, `level`, `sort`) VALUES
(1, 'cate', '栏目管理', 1, 1, '', 0, 0, 7),
(2, 'join', '加盟管理', 1, 1, '', 0, 0, 4),
(3, 'join/lst', '加盟搞茶', 1, 1, '', 2, 1, 5),
(32, 'auth_rule/lst', '权限列表', 1, 1, '', 10, 1, 0),
(7, 'cate/edit', '栏目编辑', 1, 1, '', 5, 2, 50),
(6, 'join/tel', '删除加盟搞茶', 1, 1, '', 3, 2, 50),
(5, 'cate/lst', '栏目列表', 1, 1, '', 1, 1, 50),
(8, 'conf/add', '添加配置', 1, 1, '', 11, 2, 50),
(9, 'conf/del', '配置删除', 1, 1, '', 11, 2, 50),
(10, 'admin', '管理员', 1, 1, '', 0, 0, 50),
(34, 'admin/add', '添加管理员', 1, 1, '', 33, 2, 0),
(29, 'cate/add', '栏目添加', 1, 1, '', 5, 2, 0),
(31, 'auth_group/lst', '用户组列表', 1, 1, '', 10, 1, 0),
(35, 'admin/edit', '修改管理员', 1, 1, '', 33, 2, 0),
(28, 'cate/del', '栏目删除', 1, 1, '', 5, 2, 0),
(16, 'support/edit', '修改加盟支持', 1, 1, '', 21, 2, 50),
(21, 'support/lst', '加盟支持', 1, 1, '', 2, 1, 8),
(22, 'process/lst', '加盟流程', 1, 1, '', 2, 1, 9),
(23, 'support/add', '添加加盟支持', 1, 1, '', 21, 2, 50),
(24, 'support/del', '删除加盟支持', 1, 1, '', 21, 2, 50),
(25, 'process/edit', '修改加盟流程', 1, 1, '', 22, 2, 0),
(26, 'process/add', '添加加盟流程', 1, 1, '', 22, 2, 0),
(27, 'process/del', '删除加盟流程', 1, 1, '', 22, 2, 0),
(33, 'admin/lst', '管理列表', 1, 1, '', 10, 1, 0),
(36, 'admin/del', '删除管理员', 1, 1, '', 33, 2, 0),
(37, 'headquarters', '搞茶总部', 1, 1, '', 0, 0, 0),
(40, 'news/lst', '新闻列表', 1, 1, '', 39, 1, 0),
(39, 'news', '动态新闻', 1, 1, '', 0, 0, 0),
(41, 'headquarters/lst', '搞茶总部列表', 1, 1, '', 37, 1, 0),
(42, 'successful', '成功案列', 1, 1, '', 0, 0, 0),
(43, 'successful/lst', '案列列表', 1, 1, '', 42, 1, 0),
(44, 'produce', '产品展示', 1, 1, '', 0, 0, 0),
(45, 'produce/lst', '产品列表', 1, 1, '', 44, 1, 0),
(46, 'headquarters/add', '添加搞茶', 1, 1, '', 41, 2, 0),
(47, 'headquarters/del', '删除搞茶', 1, 1, '', 41, 2, 0),
(48, 'headquarters/edit', '编辑搞茶', 1, 1, '', 41, 2, 0),
(49, 'news/add', '添加新闻', 1, 1, '', 40, 2, 0),
(50, 'news/del', '删除新闻', 1, 1, '', 40, 2, 0),
(51, 'news/edit', '编辑新闻', 1, 1, '', 40, 2, 0),
(52, 'successful/add', '添加案例', 1, 1, '', 43, 2, 0),
(53, 'successful/del', '删除案例', 1, 1, '', 43, 2, 0),
(54, 'successful/edit', '编辑案例', 1, 1, '', 43, 2, 0),
(55, 'produce/add', '添加产品', 1, 1, '', 45, 2, 0),
(56, 'produce/del', '删除产品', 1, 1, '', 45, 2, 0),
(57, 'produce/edit', '编辑产品', 1, 1, '', 45, 2, 0);

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_cate`
--

CREATE TABLE IF NOT EXISTS `gaocha_cate` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `catename` varchar(20) NOT NULL COMMENT '栏目名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gaocha_cate`
--

INSERT INTO `gaocha_cate` (`id`, `catename`) VALUES
(1, '搞茶总部'),
(2, '新闻动态'),
(3, '成功案例'),
(4, '产品展示'),
(5, '加盟搞茶');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_headquarters`
--

CREATE TABLE IF NOT EXISTS `gaocha_headquarters` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `desc` varchar(255) NOT NULL COMMENT '搞茶描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `gaocha_headquarters`
--

INSERT INTO `gaocha_headquarters` (`id`, `desc`) VALUES
(1, '这里，没有茶单，却有数以亿计的茶品类。LABOTHERY搞茶，一杯充满无限想象力与惊喜的茶！一款具有社交属性的互联网属性的茶饮品牌！一款极好缓解社会普遍性人际焦虑的趣味茶！茶+双色球1/12759183360概率味道=搞茶！'),
(2, '一杯减缓信任的茶、一杯挑战极限的茶、一杯回到解放前的茶、一杯可以自己做主的茶。一杯与TA心灵触碰的茶源于自然，高于自然。'),
(3, '搞到灵感'),
(4, '多伦多的每个角落，汇集了全世界各类优秀茶饮品牌！虽有很多很多种选择，但我觉得，没有一个地方可以定制我的Own Feeling！'),
(5, '你好啊！'),
(7, '你好啊，我是小可爱');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_join_in`
--

CREATE TABLE IF NOT EXISTS `gaocha_join_in` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(12) NOT NULL COMMENT '姓名',
  `phonenumber` varchar(20) NOT NULL COMMENT '联系电话',
  `address` varchar(100) NOT NULL COMMENT '地址',
  `message` varchar(255) NOT NULL COMMENT '留言内容',
  `time` int(10) NOT NULL COMMENT '留言的时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `gaocha_join_in`
--

INSERT INTO `gaocha_join_in` (`id`, `name`, `phonenumber`, `address`, `message`, `time`) VALUES
(3, '李坤霖', '13226409497', '火星', '你好，我不是什么好人！', 0);

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_news`
--

CREATE TABLE IF NOT EXISTS `gaocha_news` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '新闻id',
  `title` varchar(60) NOT NULL COMMENT '新闻标题',
  `keywords` varchar(20) NOT NULL COMMENT '关键字',
  `desc` varchar(255) NOT NULL COMMENT '新闻描述',
  `time` int(10) NOT NULL COMMENT '时间',
  `content` varchar(255) NOT NULL COMMENT '新闻内容',
  `click` int(9) NOT NULL COMMENT '点击数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `gaocha_news`
--

INSERT INTO `gaocha_news` (`id`, `title`, `keywords`, `desc`, `time`, `content`, `click`) VALUES
(1, ' 加盟搞茶收获丰厚的市场利润回报', '搞茶加盟， 加盟搞茶', '在悠闲的午后，还是在意境朦胧的夜晚，一杯美味的奶茶，都能让你的身心，得到前所未有的放松。所以有很大的一部分人，就爱上了奶茶，奶茶的市场需求量，自然也就更多了。开方便面店赚钱不就在这种情况下，吸...', 1533893311, '<p>在悠闲的午后，还是在意境朦胧的夜晚，一杯美味的奶茶，都能让你的身心，得到前所未有的放松。所以有很大的一部分人，就爱上了奶茶，奶茶的市场需求量，自然也就更多了。开方便面店赚钱不就在这种情况下，吸引了市场的目光，变成了人人都青睐的餐饮投资项目。它的市场潜力大，发展快，广受消费者的喜爱，一直都坚信，所有的茶饮，消费者喝的都是一种享受，品位的都是一种独特的幸福，所以总部一直在对产品进行改良，收获丰厚的市场利润回报。\r\n搞茶加盟在市场上已经拥有了特别好的发展，口碑和知名度都非常高。作为口感齐全，美味，营养价值', 90),
(2, '搞茶奶茶实验室加盟实力强吗', '测试成功了？', '面对庞大的市场，有很多投资商十分迷茫。而奶茶饮品在市场中销量高，口碑好，成为了创业的好机会。搞茶奶茶实验室是哪里的？总部实力强吗？它是行业中较为突出的品牌，全新的美味，迅速的打开了市场，成为了...', 1533892943, '<p>hhhh123</p>', 42),
(3, '搞茶奶茶实验室加盟的扶持多吗', '', '相信大家对搞茶奶茶实验室都不陌生，这个品牌在业界有着很高的人气，吸引了大量的品牌粉丝，很多投资者都想要加盟这个品牌，那么，加盟总部能给予加盟商什么扶持呢？加盟这个品牌的扶持多多，而且它对加盟商...', 1533885471, '<p>666</p>', 26),
(4, '搞茶奶茶实验室加盟单店利润有多少', '', '在我们享受休闲娱乐时光的时候，饮品是很好的伴侣，随着更多的品牌入驻市场，使其市场的发展趋势更加火爆。很多的投资者对于这一行业也很是感兴趣的，并且更加希望了解火爆市场的搞茶奶茶实验室饮品单店月利润有多少？今天我们就...', 1532145813, 'sdfgds', 31),
(8, '测试1', '', '在我们享受休闲娱乐时光的时候，饮品是很好的伴侣，随着更多的品牌入驻市场，使其市场的发展趋势更加火爆。很多的投资者对于这一行业也很是感兴趣的，并且更加希望了解火爆市场的搞茶奶茶实验室饮品单店月利润有多少？今天我们就...', 1532160207, '新闻测试内容', 9),
(9, '测试2', '', '在我们享受休闲娱乐时光的时候，饮品是很好的伴侣，随着更多的品牌入驻市场，使其市场的发展趋势更加火爆。很多的投资者对于这一行业也很是感兴趣的，并且更加希望了解火爆市场的搞茶奶茶实验室饮品单店月利润有多少？今天我们就...', 1532160254, '新闻内容2', 4),
(10, '标题，，', '', '在我们享受休闲娱乐时光的时候，饮品是很好的伴侣，随着更多的品牌入驻市场，使其市场的发展趋势更加火爆。很多的投资者对于这一行业也很是感兴趣的，并且更加希望了解火爆市场的搞茶奶茶实验室饮品单店月利润有多少？今天我们就...', 1532160237, '内容，内容', 5),
(11, '新闻测试', '', '相信大家对搞茶奶茶实验室都不陌生，这个品牌在业界有着很高的人气，吸引了大量的品牌粉丝，很多投资者都想要加盟这个品牌，那么，加盟总部能给予加盟商什么扶持呢？加盟这个品牌的扶持多多，而且它对加盟商...', 1532164855, 'sadfs', 4),
(12, '新闻测试2', '', '相信大家对搞茶奶茶实验室都不陌生，这个品牌在业界有着很高的人气，吸引了大量的品牌粉丝，很多投资者都想要加盟这个品牌，那么，加盟总部能给予加盟商什么扶持呢？加盟这个品牌的扶持多多，而且它对加盟商...', 1532164872, 'afd', 2),
(13, '1', '', '1', 1532576624, '1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_process`
--

CREATE TABLE IF NOT EXISTS `gaocha_process` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT '流程id',
  `process` varchar(40) NOT NULL COMMENT '加盟流程',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `gaocha_process`
--

INSERT INTO `gaocha_process` (`id`, `process`) VALUES
(1, '投资咨询'),
(3, '实地考察'),
(5, '选址评估'),
(6, '店面设计'),
(7, '人员培训'),
(8, '技能考核'),
(9, '装修支持'),
(10, '开业统筹'),
(11, '隆重开业'),
(4, '签订合同');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_produce`
--

CREATE TABLE IF NOT EXISTS `gaocha_produce` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `pic` varchar(100) NOT NULL COMMENT '缩略图',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `gaocha_produce`
--

INSERT INTO `gaocha_produce` (`id`, `pic`) VALUES
(1, '/uploads/20180721\\dd8e1a0457757b514a0cf23e628443f4.jpg'),
(5, '/uploads/20180810\\8853e34cee8807bd52eeda9933d25aa4.jpg'),
(3, '/uploads/20180721\\6bafbe4b1dcd255cc20f04c8d41c1cd4.jpg'),
(4, '/uploads/20180721\\5f58e1ace9e4bf0aa6b2977d08a2edfb.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_successful`
--

CREATE TABLE IF NOT EXISTS `gaocha_successful` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `time` int(10) NOT NULL COMMENT '时间',
  `keywords` varchar(20) NOT NULL COMMENT '关键字',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `title` varchar(30) NOT NULL COMMENT '标题title',
  `content` text NOT NULL COMMENT '案例内容',
  `click` int(9) NOT NULL COMMENT '点击数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `gaocha_successful`
--

INSERT INTO `gaocha_successful` (`id`, `time`, `keywords`, `desc`, `title`, `content`, `click`) VALUES
(1, 0, '关键字，隔开', '自上世纪八十年代，奶茶引进中国以来，就在国内的美食界掀起了一阵火热狂潮。新颖时尚的外形、美味的口感、创新的出餐模式，无一不成为吸睛的焦点。外酥里嫩的炸鸡、有料满足的奶茶实验室 、金黄脆香的薯条...', '广西南宁张先生加盟搞茶奶茶实验室', '<p>自上世纪八十年代，奶茶引进中国以来，就在国内的美食界掀起了一阵火热狂潮。新颖时尚的外形、美味的口感、创新的出餐模式，无一不成为吸睛的焦点。外酥里嫩的炸鸡、有料满足的奶茶实验室、金黄脆香的薯条……多种美食荟萃，带来不一样的异国风味，加上随点随取的模式，完全迎合满足了快节奏时代下的需求。\r\n来自广西南宁的张先生在社会上摸打滚爬多年，早就看中了奶茶项目的前景，七年前就默默关注了搞茶奶茶实验室 项目，并且全方位考察过上海搞茶奶茶实验室总部，当时就决定加盟搞茶奶茶实验室! 可不凑巧的是，由于自身的其他事情耽搁，导致张先生开奶茶实验室店的计划遭到了搁浅。\r\n7年，这是个不短的时间，张先生在这7年里经历过打工的挫折，创业的失败，一番苦楚之后，张先生觉得还是搞茶奶茶实验室总部可靠。为什么奶茶看好搞茶奶茶实验室呢?就品牌知名度而言，张先生是见证着搞茶奶茶实验室这7年是如何发展壮大的，无论是实力还是口碑都历历可见;就产品而言，张先生亲自考察过，也到处品尝过，产品口味完全不逊色于肯德基;而从学习技术上讲，奶茶实验室加盟店里的产品多半是半成品加工，制作流程标准化，哪怕没有经验，也可以很快上手。\r\n天时地利人和，张先生一直蠢蠢欲动寻找合适的时机。这不，自从看中一个店面9月份就能交房后，张先生果断打通上海总部的项目经理的电话，聊了聊加盟相关的事宜，在没来总部考察的情况下就直接签订了加盟合同，先出手合作绝对不会吃亏!\r\n张先生看好奶茶加盟行业，并且果断的付诸行动加盟搞茶奶茶实验室，所以才能实现自己的梦想。机会只留给有眼光的人，马上毕业季就要来了，与其为一个岗位争得头破血流，不如加盟奶茶，立下目标并敢于去实现，成功其实触手可及。</p>', 14),
(2, 0, '', '对大多数人来说，都认为创业开一家奶茶实验室店是件不容易的事。因为他不仅需要你有资金和好的项目，还需要战略性的布局以及天时、地利、人和等方面。不过这些特点比较多的体现在个人创业的道路上，当选择加...', '广东深圳陈先生加盟搞茶奶茶实验室', '<p>对大多数人来说，都认为创业开一家奶茶实验室店是件不容易的事。因为他不仅需要你有资金和好的项目，还需要战略性的布局以及天时、地利、人和等方面。不过这些特点比较多的体现在个人创业的道路上，当选择加盟一个专业的奶茶实验室加盟品牌后，就能少走很多弯路，避免很多风险。\r\n奶茶市场大火，创业选它准没错。随着时代的发展，城市化进程逐步加快，快节奏生活下每个人的脚步也都越来越快，有事忙的时候连口热饭也来不及吃。奶茶最大的优势就是带给人方便和快捷，是一份温暖，是一份贴心，还能外带出门边走边吃，试问谁不喜欢又方便又能快速填饱肚子的美食呢?陈先生就看到了这背后隐藏的商机，所以他开始着手准备开一家奶茶实验室加盟店的事宜。\r\n93年的广东小伙陈先生自毕业后一直在上海工作，相比较忙碌的人群和快节奏的生活，再回首看看不是很景气的行业，陈先生涌起了很强的无力感，便想用几年的积蓄回家自己创业。奶茶加盟连锁市场拥有标准化的管理体系，更简单的出餐环节以及广大的消费群体。走在大街上，到处可见生意火爆的炸鸡奶茶实验室店，可以说是陈先生心目中理想的创业选择。\r\n那么，为什么要选择搞茶奶茶实验室呢?一定的品牌知名度打动了陈先生!陈先生在老家见过多家搞茶奶茶实验室的加盟店，感觉产品口味比当地其他品牌的奶茶实验室店都要好。同时，搞茶奶茶实验室加盟有三大优点：即门槛低，风险低，回报高。像他这样没有过多相关经验的人，也可以轻松开店。\r\n确定了搞茶奶茶实验室项目，又看到合适的店铺位置。陈先生无比兴奋，立刻订票到上海速洁餐饮总部考察签约。陈先生表示：“一开始就想在老家开个店，没想那么多。我也是在创业路上一步步摸索，搞茶奶茶实验室让我更加明确自己的目标和规划，广东开家搞茶奶茶实验室怎么样，让我们一起拭目以待吧!”\r\n让我们预祝陈先生早日开业，生意兴隆!12345</p>', 3),
(3, 0, '', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的...', '浙江杭州岳先生加盟搞茶奶茶实验室', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的售后服务等方面，成功为创业人士开启财富大门，成为众多学生、白领、回乡创业者、全职妈妈、退休员工等等人群致富的康庄大道。这不，今天搞茶总部就迎来了一位比较特殊的加盟商——刚毕业的小岳和他的父母。\r\n为人父母，岳先生一直在为儿子更好的面对社会做准备。人各有志，在苏州上班的岳先生听闻刚刚高中毕业的儿子已经不想再上学了，便积极开始筹划儿子以后的生存途径，想要找个项目个儿子做。\r\n相信平时多留意创业方向的人，都会看到奶茶加盟市场这块“味美利丰”的大蛋糕。为什么说开一家奶茶实验室加盟店能赚钱呢?首先就是奶茶的行业特性，标准化的生产实现了制作流程的简易化，成熟的门店管理模式使行业门槛变低，男女老少都能轻松上手。正是因为这几个突出的优势，让更多的人更加轻松的开店赚钱，所以奶茶加盟项目自然的成为2018大热的创业话题。那么奶茶实验室加盟哪家好呢?就让我们听听岳先生推荐的奶茶实验室加盟品牌吧!\r\n为什么选择搞茶奶茶实验室项目?选择奶茶实验室项目去考察，还是少不了儿子的兴趣爱好，岳先生敏锐的发现，儿子上学的时候特别喜欢吃奶茶实验室炸产品，这类项目绝对是有项目前景的。那么，儿子是否有意愿呢?问了小岳的想法，儿子表示很是赞同，一家人便决定给他开一家奶茶实验室加盟店!\r\n奶茶实验室加盟哪家好，实地考察最直观。有了这个想法后，岳先生更相信实地考察的结果，这样不仅能品尝到产品口味，也能直观的看到加盟品牌效果。岳先生带着儿子考察了好几个品牌，因为儿子对产品的口味不满意，最终都放弃了，最后来到搞茶总部，在直营店看到儿子把总部做的产品吃光了，还问项目经理多要了些小吃，当即决定就是搞茶这个品牌了!\r\n奶茶实验室加盟哪家好?撇开儿子喜欢口味不谈，事实表明，18年发展历程的搞茶奶茶实验室各方各面对加盟商都很有保障，岳先生安心多了，毕竟是为儿子打拼的店，这次创业的决定可能会影响未来的十几年，所以他格外的谨慎。搞茶奶茶实验室专业、成熟的加盟模式令岳先生非常信赖和放心，相信有搞茶奶茶实验室总部在背后全程帮扶，一定能干出一番事业，让小岳的人生更精彩!', 8),
(4, 1532140200, '', 'dfas', 'fad', 'adfsaf', 4),
(5, 1532160423, '', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的...', '测试', '123', 3),
(6, 1532160453, '', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的...', '测试2', '123', 0),
(7, 1532160474, '', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的...', '测试3', '123', 0),
(8, 1532160492, '', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的...', '测试4', '123', 4),
(9, 1532160529, '', '高中毕业的学子，看好奶茶市场。近年来，国内奶茶实验室加盟品牌如雨后春笋般涌出，在良莠不齐的奶茶实验室加盟品牌中，搞茶奶茶实验室凭借成熟的加盟体系、具有市场竞争力的产品、战略性的营销策划、完善的...', '测试5', 'asd', 2);

-- --------------------------------------------------------

--
-- 表的结构 `gaocha_support`
--

CREATE TABLE IF NOT EXISTS `gaocha_support` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `desc1` varchar(255) NOT NULL COMMENT '开业前描述',
  `desc2` varchar(255) NOT NULL COMMENT '开业中描述',
  `desc3` varchar(255) NOT NULL COMMENT '开业后描述',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `gaocha_support`
--

INSERT INTO `gaocha_support` (`id`, `desc1`, `desc2`, `desc3`) VALUES
(1, '总部专业人士协助加盟商招人，减轻加盟商工作量。', '总部运营部协助加盟商正式运营后的营运管理。', '总部资深专家不定期上门协助解决经营中的问题，针对各层管理干部开设相应的课程。'),
(2, '总部提供专业培训课程，帮助加盟店人员迅速上手。', '所有食料包由总部工厂直接配送，保证产品口味统一。', '技术部不断研发新品，根据不同节日给丰富产品。'),
(3, '总部专业团队协助门店选址，选择最合适的门店', '信息部全面管理资料让加盟商的经营管理井井有条。', '提供开业后期营销策划、指导及帮助深造提升。'),
(4, '总部工程部协助装修设计和指导开业筹备期的工作', '总部强大的物流中心，为加盟商配送最新货品。', '');

-- --------------------------------------------------------

--
-- 表的结构 `lujiaoxiang_about`
--

CREATE TABLE IF NOT EXISTS `lujiaoxiang_about` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL COMMENT '标题',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `content` varchar(255) NOT NULL COMMENT '内容',
  `content1` varchar(255) NOT NULL COMMENT '内容1',
  `content2` varchar(255) NOT NULL COMMENT '内容2',
  `content3` varchar(255) NOT NULL COMMENT '内容3',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `lujiaoxiang_about`
--

INSERT INTO `lujiaoxiang_about` (`id`, `title`, `desc`, `content`, `content1`, `content2`, `content3`) VALUES
(1, '鹿角巷', 'It’s time for Tea', '鹿角巷秉持着一杯用心看待的好茶，还原记忆中的感动。', '每个人的心中，都有一杯好茶，在那悠闲的午后，阳光洒落的温度，微风轻拂的快适，情人甜蜜的微笑，口中回甘的韵味。忆起初次喝到好茶的感动，也想把这份美好带给所有的人，鹿角巷奶茶秉持这份初衷，「The Alley」就这样诞生了。', 'The Alley鹿角巷奶茶坚信，茶饮，喝的是一份感受，品的是一份幸福，希望将那些藏在你我心底，难以形容却令人神往的写意，透过The Alley的饮品，再度勾勒出一个美好生活应有的样貌。', '');

-- --------------------------------------------------------

--
-- 表的结构 `lujiaoxiang_addarticle`
--

CREATE TABLE IF NOT EXISTS `lujiaoxiang_addarticle` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `column` varchar(20) NOT NULL COMMENT '3:新闻动态,4:成功案例',
  `title` varchar(40) NOT NULL COMMENT '文章标题',
  `date` date NOT NULL COMMENT '发布时间',
  `keywords` varchar(20) NOT NULL COMMENT '关键字',
  `description` varchar(60) NOT NULL COMMENT '文章描述',
  `content` varchar(255) NOT NULL COMMENT '文章内容',
  `click` varchar(10) NOT NULL DEFAULT '0' COMMENT '点击数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `lujiaoxiang_addarticle`
--

INSERT INTO `lujiaoxiang_addarticle` (`id`, `column`, `title`, `date`, `keywords`, `description`, `content`, `click`) VALUES
(1, '4', '我觉得OK了啊', '2018-08-10', '111', '', '', '0'),
(2, '3', '测试', '2018-08-10', '123', '', '', '0'),
(4, '3', '测试1', '2018-08-07', '哈哈哈哈', '添加成功', '<p>耶耶耶</p>', '0'),
(6, '3', 'sdfds', '2018-08-07', 'sdfsd', 'fds', '<p>sdfds</p>', '0'),
(23, '3', '怎么编辑不了的？', '2018-08-10', '41854441654', '好像又可以了', '', '0');

-- --------------------------------------------------------

--
-- 表的结构 `lujiaoxiang_admin`
--

CREATE TABLE IF NOT EXISTS `lujiaoxiang_admin` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `lujiaoxiang_admin`
--

INSERT INTO `lujiaoxiang_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- 表的结构 `lujiaoxiang_join`
--

CREATE TABLE IF NOT EXISTS `lujiaoxiang_join` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL COMMENT '地址',
  `message` varchar(255) NOT NULL COMMENT '留言信息',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `lujiaoxiang_join`
--

INSERT INTO `lujiaoxiang_join` (`id`, `name`, `phone`, `email`, `address`, `message`) VALUES
(16, '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `lujiaoxiang_news`
--

CREATE TABLE IF NOT EXISTS `lujiaoxiang_news` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL COMMENT '标题',
  `keywords` varchar(20) NOT NULL COMMENT '关键字',
  `desc` varchar(255) NOT NULL COMMENT '描述',
  `time` datetime NOT NULL COMMENT '时间',
  `content` varchar(255) NOT NULL COMMENT '新闻内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `lujiaoxiang_news`
--

INSERT INTO `lujiaoxiang_news` (`id`, `title`, `keywords`, `desc`, `time`, `content`) VALUES
(1, '测试', '', '天然、严选、反璞归真的单一蔗糖，坚持每日熬煮，呈现最原始胡糖蜜风味，甜不是腻。', '2018-08-01 09:19:15', '天然、严选、反璞归真的单一蔗糖，坚持每日熬煮，呈现最原始胡糖蜜风味，甜不是腻。。。。。。。。。。。。。。。。。。。。。。。。。。');

-- --------------------------------------------------------

--
-- 表的结构 `lujiaoxiang_pinzhi`
--

CREATE TABLE IF NOT EXISTS `lujiaoxiang_pinzhi` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `pic` varchar(40) NOT NULL COMMENT '缩略图',
  `tiltle` varchar(40) NOT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '内容',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `lujiaoxiang_pinzhi`
--

INSERT INTO `lujiaoxiang_pinzhi` (`id`, `pic`, `tiltle`, `content`) VALUES
(1, '', '光调特饮', '天然、严选、反璞归真的单一蔗糖，坚持每日熬煮，呈现最原始胡糖蜜风味，甜不是腻。'),
(2, '', ' 新鲜熬煮鹿丸珍珠', '从筛粉、火候、时间、调制到成形，要求都很严格，熬煮出的鹿丸珍珠Q弹，独特、健康。');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
