-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-11-18 14:38:26
-- 服务器版本: 5.5.46-0ubuntu0.14.04.2
-- PHP 版本: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `discuss`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `u_id` int(100) NOT NULL,
  `time` datetime NOT NULL,
  `picture` varchar(100) NOT NULL COMMENT '为文章列表的图片',
  `introduction` text NOT NULL,
  `tag` int(12) NOT NULL,
  `states` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `content`, `u_id`, `time`, `picture`, `introduction`, `tag`, `states`, `title`) VALUES
(1, '<p>当地时间中午12时许，习近平乘坐的专机抵达马尼拉尼诺·阿基诺国际机场。菲律宾财政部长等政府高级官员到机场迎接。身穿传统服装的菲律宾青年向习近平献上花环。　　王沪宁、栗战书、杨洁篪等陪同人员同机抵达。　　香港特区行政长官梁振英、中国驻菲律宾大使赵鉴华也到机场迎接。<img src="http://www.chinanews.com/2015/11-17/U601P4T8D7627835F107DT20151117153026.jpg" alt="enter image description here" title="">本次亚太经合组织领导人非正式会议的主题是“打造包容性经济，建设更美好世界”。与会各成员领导人将围绕区域经济一体化、中小企业、人力资源开发、可持续增长等议题展开讨论。习近平将发表重要讲话。　　与会期间，习近平还将出席亚太经合组织工商领导人峰会并发表主旨演讲，出席领导人与工商咨询理事会代表</p>', 2, '2015-11-17 16:58:29', 'http://www.chinanews.com/2015/11-17/U601P4T8D7627835F107DT20151117153026.jpg', '中国国家主席习近平17日抵达菲律宾首都马尼拉', 2, 1, '习近平飞抵马尼拉 进入“APEC时间”'),
(2, '<p>据韩媒报道，联合国一位消息人士15日透露，联合国秘书长潘基文将于本周对朝鲜平壤进行访问。这是继第四任秘书长瓦尔德海姆和第六任秘书长加利访朝后，联合国秘书长时隔二十余年再次访朝。由于潘基文是韩国籍人士，他的此行更加引人瞩目。</p><p>此行是由联合国和朝鲜哪一方先提出而成行尚不明确，但有观点认为，无论如何，潘基文在此行中很可能与朝鲜国防委员会第一委员长金正恩会面。<img src="http://www.chinanews.com/part/290/gj/U477P4T290D40F8775DT20151116155056.jpg" alt="enter image description here" title="">　　联合国的另一名消息人士称，联合国秘书长访问成员国之一的朝鲜，而不与成员国的最高领导人会面是不可能的事情。　　该人士还说，潘基文访朝不会空手而归，此行很有可能成为解决朝核等朝鲜半岛问题的重要契机。　　报道称，联合国秘书长虽与一国最高领导人的地位相当，但没有专机，因此潘基文一行将利用何种交通工具、通过何种渠道前往朝鲜也备受关注。　　潘基文就任后多次表示愿意访问朝鲜。他曾于今年5月19日公开访朝计划，但第二天朝方突然撤回同意其访问开城工业园区的决定，导致计划告吹。</p>', 2, '2015-11-17 17:01:52', 'http://www.chinanews.com/part/290/gj/U477P4T290D40F8775DT20151116155056.jpg', '潘基文此行可能与金正恩会面，或成为解决朝鲜半岛问题的重要契机……[详细]', 1, 1, '联合国秘书长本周访朝鲜 为20余年来首次'),
(3, '<p>在随后举行的晚餐会上，朴槿惠强调了国际社会共同应对恐怖主义活动和难民问题的必要性，并表示韩国政府愿意为此作出贡献。　　朴槿惠表示，恐怖主义在继续演进，这对人们的生活和基本价值以及世界和平与安全构成了威胁，已成为危害国际社会和世界和平的“毒瘤”。为了防止恐怖主义持续扩散，二十国集团有必要率先推动切断恐怖主义资金来源，并为解决叙利亚和利比亚等处于过渡期国家的不稳定问题拿出政治解决方案和努力化解大规模难民危机。<img src="http://image1.chinanews.com.cn/cnsupload/big/2015/10-17/4-426/79c09077ab664327b12b43c407ac53a9.jpg" alt="enter image description here" title="">　　另外，朴槿惠在与英国首相卡梅伦举行双边首脑会谈时决定，将加强韩英合作，共同应对恐怖袭击等紧急情况。</p>', 2, '2015-11-17 17:02:59', 'http://image1.chinanews.com.cn/cnsupload/big/2015/10-17/4-426/79c09077ab664327b12b43c407ac53a9.jpg', '朴槿惠强烈谴责巴黎恐怖袭击事件，强调国际社会应共同应对恐怖袭击......[详细]', 3, 1, '朴槿惠称恐怖主义是危害和平的毒瘤');

-- --------------------------------------------------------

--
-- 表的结构 `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `picture` varchar(100) NOT NULL,
  `a_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='保存每个文章内部的图片' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `picture`
--

INSERT INTO `picture` (`id`, `picture`, `a_id`) VALUES
(1, 'upload/2.jpg', 1);

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `a_id` int(100) NOT NULL COMMENT '对应于哪个文章',
  `u_id` int(100) NOT NULL COMMENT '对应哪个人评论的',
  `time` datetime NOT NULL,
  `r_id` int(100) NOT NULL COMMENT '对应于若是回复评论，则r_id为被评论的Id ,若只是评论文章 则该处为0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `reply`
--

INSERT INTO `reply` (`id`, `content`, `a_id`, `u_id`, `time`, `r_id`) VALUES
(1, 'v刚刚哈哈哈', 1, 0, '2015-11-17 17:00:29', 0),
(2, ' 好斤斤计较', 1, 0, '2015-11-17 17:01:18', 1),
(3, '                            高呼卡卡', 1, 0, '2015-11-17 17:01:48', 1);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `nickname`, `password`, `role`) VALUES
(1, 'lxc0694', 'orange', '123456', 0),
(2, 'nannan', '呆萌', 'e10adc3949ba59abbe56e057f20f883e', 0),
(3, 'dearnan', '女神', 'e10adc3949ba59abbe56e057f20f883e', 0),
(4, 'tmac', 'tmac', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, '熊', '小熊', '25d55ad283aa400af464c76d713c07ad', 0),
(6, 'auslandei', '小呆', '6496f32729baa1cb0416caddc6fc1977', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
