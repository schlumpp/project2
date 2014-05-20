-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 05 月 26 日 02:34
-- 服务器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `nurse`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员主键',
  `admin_name` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '管理员名字',
  `admin_pwd` varchar(12) COLLATE utf8_bin NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pwd`) VALUES
(1, '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `aid_scholarship`
--

CREATE TABLE IF NOT EXISTS `aid_scholarship` (
  `aidSch_time` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '助学金申请时间年份',
  `stu_id` int(11) NOT NULL COMMENT '学生id—外键',
  `aidSch_applyReason` text COLLATE utf8_bin NOT NULL COMMENT '申请理由',
  `aidSch_collegeOpinion` text COLLATE utf8_bin NOT NULL COMMENT '院系意见',
  `aidSch_schoolOpinion` text COLLATE utf8_bin NOT NULL COMMENT '学校意见',
  PRIMARY KEY (`aidSch_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `aid_scholarship`
--

INSERT INTO `aid_scholarship` (`aidSch_time`, `stu_id`, `aidSch_applyReason`, `aidSch_collegeOpinion`, `aidSch_schoolOpinion`) VALUES
('2013', 1, '本人家庭人口众多，难以承担众多学费负担。。。 	', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `applyfor`
--

CREATE TABLE IF NOT EXISTS `applyfor` (
  `applyfor_year` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '奖学金申请的年份',
  `apply_id` int(11) NOT NULL COMMENT '学生学号（外键）',
  `stu_time` date NOT NULL COMMENT '申请时间（系统生成',
  `apply_type` int(11) NOT NULL COMMENT '审核状态 1-入库申请，2-奖学金，3-助学金',
  `applySch_time` date NOT NULL COMMENT '批准时间',
  `applySch_state` int(11) NOT NULL COMMENT '审核状态 1-审核中，2-审核通过'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学生申请奖学金表 学生申请奖学金表在老师进行审核之前均可修改。';

--
-- 转存表中的数据 `applyfor`
--

INSERT INTO `applyfor` (`applyfor_year`, `apply_id`, `stu_time`, `apply_type`, `applySch_time`, `applySch_state`) VALUES
('2013', 1, '2013-05-26', 3, '0000-00-00', 1),
('2013', 2, '2013-05-21', 2, '0000-00-00', 1),
('2013', 1, '2013-05-21', 2, '2013-05-21', 2),
('2013', 1, '2013-05-21', 1, '2013-05-21', 2);

-- --------------------------------------------------------

--
-- 表的结构 `basic_info`
--

CREATE TABLE IF NOT EXISTS `basic_info` (
  `center_info` text COLLATE utf8_bin NOT NULL COMMENT '中心介绍',
  `depar_info` text COLLATE utf8_bin NOT NULL COMMENT '部门设置'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `basic_info`
--

INSERT INTO `basic_info` (`center_info`, `depar_info`) VALUES
('轻轻巧巧', '轻轻巧巧水水水水水水水水水水水水水水水水水水');

-- --------------------------------------------------------

--
-- 表的结构 `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `da_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '资料ID',
  `da_time` date NOT NULL COMMENT '上传时间',
  `da_name` varchar(400) COLLATE utf8_bin NOT NULL COMMENT '资料名',
  `da_num` int(11) NOT NULL COMMENT '下载次数',
  `da_publish` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '上传者',
  `data_file` varchar(400) COLLATE utf8_bin NOT NULL COMMENT '文件',
  PRIMARY KEY (`da_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `data`
--


-- --------------------------------------------------------

--
-- 表的结构 `economic_definedetail`
--

CREATE TABLE IF NOT EXISTS `economic_definedetail` (
  `defineDetail_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '贫困生认定详细资料id 主键',
  `define_pid` int(11) NOT NULL COMMENT '贫困生认定等级id    外键',
  `defineDetail_content` varchar(300) COLLATE utf8_bin NOT NULL COMMENT '贫困生认定详细资料内容',
  PRIMARY KEY (`defineDetail_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='经济认定表详细' AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `economic_definedetail`
--


-- --------------------------------------------------------

--
-- 表的结构 `national_scholarship`
--

CREATE TABLE IF NOT EXISTS `national_scholarship` (
  `nationalSch_year` varchar(11) COLLATE utf8_bin NOT NULL COMMENT '国家励志奖学金id—主键',
  `stu_id` int(11) NOT NULL COMMENT '学生id—外键',
  `nationalSch_applyReason` text COLLATE utf8_bin NOT NULL COMMENT '申请理由',
  `nationalSch_collegeOpinion` text COLLATE utf8_bin NOT NULL COMMENT '院系意见',
  `nationalSch _schoolOpinion` text COLLATE utf8_bin NOT NULL COMMENT '学校意见',
  `ranking1` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '成绩排名',
  `ranking2` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '综合排名',
  `Com_Course` int(11) NOT NULL COMMENT '必修课课程门数',
  `pass_num` int(11) NOT NULL COMMENT '通过门数',
  `main_award` text COLLATE utf8_bin NOT NULL COMMENT '主要获奖情况',
  PRIMARY KEY (`nationalSch_year`),
  UNIQUE KEY `nationalSch_id` (`nationalSch_year`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `national_scholarship`
--

INSERT INTO `national_scholarship` (`nationalSch_year`, `stu_id`, `nationalSch_applyReason`, `nationalSch_collegeOpinion`, `nationalSch _schoolOpinion`, `ranking1`, `ranking2`, `Com_Course`, `pass_num`, `main_award`) VALUES
('2013', 1, '学习认真刻苦', '', '', '2/34', '2/34', 8, 8, '2012-一等奖-杭州师范大学;2013-二等奖-杭州师范大学;;;;');

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '公告主键',
  `news_title` varchar(400) COLLATE utf8_bin NOT NULL COMMENT '新闻标题',
  `news_publish` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '新闻发布者',
  `news_time` date NOT NULL COMMENT '公告发布时间',
  `news_content` text COLLATE utf8_bin NOT NULL COMMENT '公告内容',
  `class` int(11) NOT NULL COMMENT '活动类型',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_publish`, `news_time`, `news_content`, `class`) VALUES
(13, '特体', '', '2013-03-25', '人特他发发', 3),
(14, '人尽其责,诚实守信', '1', '2013-04-25', '&nbsp;为了解学院勤工助学工作的开展情况、加强校院两级勤工助学组织的交流与沟通，学生勤工助学中心于4月23日下午开展了走访临床医学院的活动。出席本次交流会议的人员有学工部学生处斯庆和老师、惠秀老师，临床医学院团委书记韩鹏老师，以及勤工贫困生代表。\r\n<p>\r\n	<span style="font-size:12pt;">会议伊始，临床医学院勤工主任詹进来以及学院老师表达了对来访人员的热烈欢迎，并简单介绍了勤工组织的发展现状。随后，临床医学院主任詹进来介绍了学院勤工工作，其中重点讲述了临床医学院开展的诚信教育活动。临床医院勤工从上学期开展了诚信教育，其中包括了学风督察、考前诚信教育、诚信考场等活动。惠秀老师就诚信问题谈到了贫困生申请和助学贷款问题，她告诉同学们申请贫困生需要实事求是，不要弄虚作假，要将助学资金留给真正需要帮助的人。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">在交流环节，韩鹏书记详细介绍了临床医学院困难生的特点。针对此问题斯庆和老师给出了建议。她建议临床医学院的学生应该充分发挥专业特色，要做科研勤工项目，如农村绿色医疗等科研项目，将勤工助学和学习更加紧密的结合起来。她还推荐阿里巴巴商学院的走进贫困生家庭的暑期实践活动，这既体现了勤工助学的精神又与暑期实践结合，对走访学生也是一次十分宝贵的经历和锻炼。最后，斯庆和老师和惠秀老师认真为参加活动的同学们解答问题，解答了他们心中的很多疑惑。 最后，本次走访活动在轻松愉悦的讨论氛围中圆满结束。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">交流促进了解，沟通迸出思想的火花。相信，此次走访活动中达成的共识与提出的新形式、新方法会促进勤工助学事业的发展。</span>\r\n</p>', 2),
(15, '沟通促交流', '1', '2013-04-25', '为了解学院勤工助学工作的开展情况,加强校院两级勤工助学中心的交流与沟通，学生勤工助学中心于4月19日下午开展走访教育科学学院勤工助学中心的活动。参加本次会议的有学工部学生处斯庆和老师，学生勤工助学中心主任倪菁菠、副主任王伟，学院勤工部分人员以及部分贫困生代表。\r\n<p style="text-align:left;">\r\n	<span style="font-size:12pt;"><span style="font-family:宋体;">会议伊始，教科院勤工主任表达了对来访人员的热烈欢迎，简单介绍了教科院勤工助学中心的发展现状并对本学期的勤工工作做了总结。除了一些夏日送清凉、春秋游、冬日送温暖、等传统老牌项目，与教育科学学院六星社团一起举办志愿者活动是教科院勤工助学中心的一大特色！部分志愿者发表心得，表述学会了如何与老人小孩相处，学会了奉献，获得了很多知识。主任倪菁菠表示，院勤工可以多搞一些像志愿者活动这样的特色活动，在新的形式下，为同学们提供丰富多彩、具有趣味的活动和服务，以此来提高同学们参与的积极性。</span></span>\r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:12pt;"><span style="font-family:宋体;">随后，斯老师为大家开展了“我们是八九点钟的太阳”专题活动，为大家带来了一堂关于身边的礼仪的人生课。在愉悦的气氛中我们认识到了礼仪的重要性，也学会了实用的礼仪。更加明白：言谈体现风度，举止体现素质。</span></span>\r\n</p>\r\n<p style="text-align:left;">\r\n	<span style="font-size:12pt;"><span style="font-family:宋体;">此次交流，我们对教科院学院勤工有了更深入的了解，对之后的沟通打下坚实的基础。相信，此次走访活动中达成的共识与提出的新形式、新方法会促进勤工助学事业的发展。</span></span>\r\n</p>', 2),
(16, '两院交流，放飞纸鸢', '1', '2013-04-25', '&nbsp;为了加强学院之间的联系与友谊，护理学院勤工助学中心与政治经济学院勤工助学中心于4月14日开展交流会及放风筝活动。参加本次活动的有两院勤工助学中心的委员及困难生代表。\r\n<p>\r\n	<span style="font-size:12pt;">上午9点，两院勤工助学中心成员在阿里巴巴商学院社工实验室进行交流会。会议伊始，两院勤工助学中心同学简单介绍了学院情况并相互交流心得和经验，极大程度上体现了同学们团结友爱、相互帮助、敏而好学的精神。接着是游戏环节，简单的小游戏让交流更进一步，尤其“谁是卧底”的游戏，大家玩的不亦乐乎，在游戏中结束了上午的交流会。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">下午2点，阳光明媚，和风习习，护理、政经勤工成员及困难生代表在钱塘江畔的草坪上开展了“纸鸢情怀”放风筝活动。裁判的一声令下，同学们马上开始放起风筝，一张纸、一根线、几根细竹，编织成一只只纸鸢。选手们经过合作努力，乘着风势，大家的风筝很快便放上天去。看着这些在天空中翱翔的风筝，他们似乎也承载着梦想与希望，把最美好的祝福送给了杭师大。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">一年一度的两院交流会在欢声笑语中落下帷幕。此次两院交流会，同学们分享经验，感受春韵。衷心祝愿护理学院勤工的干部干事们在以后的工作中都能更好地展示自己的能力。</span>\r\n</p>', 2),
(17, '河南一副局长被判有罪仍留任', '', '2013-05-21', '<p>\r\n	据新华社电在河南洛宁县，一名房屋管理所所长几年前因违规办理商品房预售许可证，被法院判犯有滥用职权罪，免予刑事处罚。在所长职务被免后，他仍担任县住建局副局长至今。\r\n</p>\r\n<p>\r\n	　　不久前，多位河南信阳籍农民工反映，在向河南洛宁县住建局举报被欠薪一事时，遭到涉事开发商阻挠。农民工向德广介绍，房产开发公司一工作人员说“受理欠薪举报的领导被判了刑，都没耽误继续当局长，几个农民能把企业怎么”。并一再警告称“再闹下去没好果子吃”。\r\n</p>\r\n<p>\r\n	　　记者调查发现，早在2010年7月29日，现任洛宁县住建局副局长侯少军确曾被河南省宜阳县法院判处滥用职权罪，且侯少军并未上诉，法院判决随后生效。\r\n</p>\r\n<p>\r\n	　　宜阳县法院判决书显示，2005年10月19日，洛阳一房产开发公司与洛宁县回族镇王东村委达成联合开发村集体土地意向，建设商品房小区。2007年8月，房产开发公司向洛宁县房屋管理所申请办理商品房预售事项，时任房管所所长的侯少军明知该小区没有办理土地手续，仍然违反《城市商品房预售管理办法》规定授意违法办理商品房预售许可证，致使该小区188套住房得以顺利销售，业主无法办理房产证，造成恶劣社会影响。法院据此作出判决：被告人侯少军犯滥用职权罪，免予刑事处罚。\r\n</p>\r\n<p>\r\n	　　侯少军在接受采访时表示，由于上述房产开发项目是当时县里招商引资的重点工程，所以自己只好“明知故犯”。他同时承认，判决下来后，“房屋管理所所长”这一职务被免掉了，但同时兼任的“住建局副局长”这一职务没受影响\r\n</p>', 2);

-- --------------------------------------------------------

--
-- 表的结构 `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言主键',
  `user_id` int(11) NOT NULL COMMENT '留言者ID',
  `note_cont` text COLLATE utf8_bin NOT NULL COMMENT '留言内容',
  `note_reply` text COLLATE utf8_bin NOT NULL COMMENT '留言回复',
  `note_date` date NOT NULL COMMENT '留言时间',
  `note_replydate` date NOT NULL COMMENT '回复时间',
  `admin_id` int(11) NOT NULL COMMENT '回复管理员ID',
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `note`
--

INSERT INTO `note` (`note_id`, `user_id`, `note_cont`, `note_reply`, `note_date`, `note_replydate`, `admin_id`) VALUES
(1, 0, 'chenminqing', 'eeeeee', '2013-05-13', '2013-05-13', 0);

-- --------------------------------------------------------

--
-- 表的结构 `recom_infos`
--

CREATE TABLE IF NOT EXISTS `recom_infos` (
  `recom_id` int(11) NOT NULL AUTO_INCREMENT,
  `recom_type` int(11) NOT NULL,
  `recom_pic` varchar(100) COLLATE utf8_bin NOT NULL,
  `recom_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `recom_content` text COLLATE utf8_bin NOT NULL COMMENT '书籍内容简介',
  PRIMARY KEY (`recom_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `recom_infos`
--

INSERT INTO `recom_infos` (`recom_id`, `recom_type`, `recom_pic`, `recom_name`, `recom_content`) VALUES
(2, 2, 'upload_images/2013513212132.jpg', '平凡的世界', '《平凡的世界》是一部现实主义小说，也是一部小说形式的家族史。作者浓缩了中国西北农村的历史变迁过程，在小说中全景式地表现了中国当代城 乡的社会生活。在近十年的广阔背景下，通过复杂的矛盾纠葛，刻划社会各阶层众多普通人的形象。劳动与爱情，挫折与追求，痛苦与欢乐，日常生活与巨大社会冲 突，纷繁地交织在一起，深刻地展示了普通人在大时代历史进程中所走过的艰难曲折的道路。'),
(3, 2, 'upload_images/2013513212849.jpg', '史记', '史记是我国第一部通史。在史记之前，有以年代为次的“编年史”如春秋，有以地域为限的“国别史”如国语、战国策，有以文告档卷形式保存下来的“政治史”如尚书，可是没有上下几千年，包罗各方面，而又融会贯通，�络分明，像史记那样的通史。\r\n唐 刘知几的史通分叙六家，统归二体。所谓“二体”，就是“编年体”和“纪传体”，而史记是纪传体的创始。从此以后，历代的所谓“正史，从汉书到明史，尽管名 目有改变（例如汉书改“书”为“志”，晋书改世家”为“载记”），门类有短缺（例如汉书无“世家”，后汉书、三国志等都无“表”、“志及世家”），但都有 “纪”有“传”，绝无例外地沿袭了史记的体例。\r\n据司马迁自序，史记全书本纪十二篇，表十篇，书八篇，世家三十篇，列传七十篇（包括太史公自序），共一百三十篇。今本史记一百三十卷，篇数跟司马迁自序所说的相符。但汉书司马迁传说其中“十篇缺，有录无书。\r\n'),
(4, 2, 'upload_images/2013513212849.jpg', '一九八四•动物农场', '《一九八四》和《动物农场》是奥威尔的传世之作，堪称世界文坛上最著名的政治讽喻小说。他在小说中他创造的“老大哥”、“双重思想”、“新 话”等词汇都已收入权威的英语词典，甚至由他的姓衍生了一个形容词“奥威尔式”不断出现在报道国际新闻的记者笔下，足见其作品在英语国家影响之深远。“多 一个人看奥威尔，就多了一份自由的保障”，有评家如是说。'),
(5, 2, 'upload_images/2013513213151.jpg', '时光捕手', '雕刻时光缔造者的创业独白：\r\n这不仅仅是一本教你如何开咖啡馆的工具书，它更想让你感受到有态度、有信仰的生活和那些“粗鲁”但真诚的青春。\r\n《时 光捕手:庄崧冽与雕刻时光》中，作为雕光创始人的庄仔分三部分对如何创办并经营一家咖啡馆做了详细阐释。第一部分，庄仔从咖啡馆选址、食物等角度阐述了创 办一个咖 啡馆所必备的元素。第二部分，通过与柏邦妮、阿北（豆瓣CEO）、耀阳（藏红花西餐厅创办人）等人的对谈，讨论了咖啡与阅读、电影、旅行、美食的关系以及 对生活方式的选择。第三部分中，作者分享了自己多年来经营雕刻时光的心得和秘诀，给所有希望拥有一个咖啡馆的人提供一些经验。\r\n'),
(6, 2, 'upload_images/201351321330.jpg', '追风筝的人', '12岁的阿富汗富家少爷阿米尔与仆人哈桑情同手足。然而，在一场风筝比赛后，发生了一件悲惨不堪的事，阿米尔为自己的懦弱感到自责和痛苦，逼走了哈桑，不久，自己也跟随父亲逃往美国。\r\n成年后的阿米尔始终无法原谅自己当年对哈桑的背叛。为了赎罪，阿米尔再度踏上暌违二十多年的故乡，希望能为不幸的好友尽最后一点心力，却发现一个惊天谎言，儿时的噩梦再度重演，阿米尔该如何抉择？\r\n'),
(7, 2, 'upload_images/2013513213723.jpg', '霍乱时期的爱情', '★马尔克斯唯一正式授权，首次完整翻译\r\n★《霍乱时期的爱情》是我最好的作品，是我发自内心的创作。——加西亚•马尔克斯\r\n★这部光芒闪耀、令人心碎的作品是人类有史以来最伟大的爱情小说。——《纽约时报》\r\n《霍乱时期的爱情》是加西亚•马尔克斯获得诺贝尔文学奖之后完成的第一部小说。讲述了一段跨越半个多世纪的爱情史诗，穷尽了所有爱情的可能性：忠贞的、隐秘 的、粗暴的、羞怯的、柏拉图式的、放荡的、转瞬即逝的、生死相依的……再现了时光的无情流逝，被誉为“人类有史以来最伟大的爱情小说”，是20世纪最重要 的经典文学巨著之一。\r\n'),
(8, 2, 'upload_images/2013513213851.jpg', '瓦尔登湖', '这本书的思想是崇尚简朴生活，热爱大自然的风光，内容丰厚，意义深远，语言生动，意境深邃，就像是个智慧的老人，闪现哲理灵光，又有高山流水那样的境界。\r\n书中记录了作者隐居瓦尔登湖畔，与大自然水乳交融、在田园生活中感知自然重塑自我的奇异历程。读本书，能引领人进入一个澄明、恬美、素雅的世界。\r\n'),
(9, 2, 'upload_images/2013513213926.jpg', '阿勒泰的角落', '《阿勒泰的角落》是关于新疆的最美丽文字，这是现代版《呼兰河传》。由作者1998-2003年之间陆续完成并在《文汇报》、《南方周末》 等发表的短篇散文集结成册。作者以天然而纯真的笔调描述阿勒泰地区哈萨克族日常生活点滴趣事：做裁缝、可爱的孩子、来来去去的陌生人。她刻画的不是一组有 关新疆的异域风情，她刻画的是我们内心的牧歌：白雪和阳光，青草和白桦林，优美、明亮。李娟 阿勒泰的角落，给你带来最生动的故事！\r\n《阿勒泰的角落》适用于：青年，女性，对新疆好奇的读者，文艺青年。\r\n');

-- --------------------------------------------------------

--
-- 表的结构 `recruitment`
--

CREATE TABLE IF NOT EXISTS `recruitment` (
  `Rec_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '招聘主键',
  `stu_id` int(100) NOT NULL COMMENT '学生id外键',
  `Rec_workid` int(11) NOT NULL COMMENT '对应岗位ID',
  `state` int(11) NOT NULL COMMENT '状态',
  `Rec_time` date NOT NULL COMMENT '招聘时间',
  `work_time` date NOT NULL COMMENT '上岗时间',
  PRIMARY KEY (`Rec_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `recruitment`
--

INSERT INTO `recruitment` (`Rec_id`, `stu_id`, `Rec_workid`, `state`, `Rec_time`, `work_time`) VALUES
(17, 1, 6, 0, '2013-05-20', '0000-00-00'),
(16, 1, 9, 1, '2013-05-13', '2013-05-13'),
(15, 1, 8, 1, '2013-05-10', '2013-05-10'),
(14, 1, 7, 1, '2013-05-09', '2013-05-09');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `stu_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '学生id—主键',
  `stu_num` varchar(11) COLLATE utf8_bin NOT NULL COMMENT '学号',
  `stu_password` varchar(20) COLLATE utf8_bin NOT NULL COMMENT '密码',
  `stu_college` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '学院',
  `stu_name` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '学生姓名',
  `stu_class` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '班级',
  `stu_gender` int(2) NOT NULL COMMENT '性别  1--男  2—女',
  `stu_idCard` varchar(18) COLLATE utf8_bin NOT NULL COMMENT '身份证号',
  `stu_major` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '专业',
  `stu_work` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT '岗位',
  `stu_politicalAppearance` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '政治面貌',
  `stu_nation` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '民族',
  `stu_phoneNum` varchar(11) COLLATE utf8_bin DEFAULT NULL COMMENT '练习电话',
  `aidSch_household` int(11) NOT NULL COMMENT '家庭户口 1--城镇 2--农村',
  `family_sourceOfIncome` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '家庭收入来源',
  `family_totalMonthlyIncome` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '月总收入',
  `family_familyPopulation` int(11) NOT NULL COMMENT '家庭人口总数',
  `family_homeAddress` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '家庭住址',
  `family_postalCode` varchar(11) COLLATE utf8_bin NOT NULL COMMENT '邮政编码',
  `family_familyMember` text COLLATE utf8_bin NOT NULL COMMENT '家庭成员 最多只能填五个存储时使用如下格式：姓名-年龄-与本人关系-工作或学习单位；',
  `stu_hometown` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '生源地',
  `stu_birthday` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '出生年月',
  `stu_periodAtSchool` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '开学日期',
  `type` int(11) NOT NULL COMMENT '学生类型',
  `family_intro` text COLLATE utf8_bin NOT NULL COMMENT '家庭具体情况',
  PRIMARY KEY (`stu_id`),
  UNIQUE KEY `stu_id` (`stu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`stu_id`, `stu_num`, `stu_password`, `stu_college`, `stu_name`, `stu_class`, `stu_gender`, `stu_idCard`, `stu_major`, `stu_work`, `stu_politicalAppearance`, `stu_nation`, `stu_phoneNum`, `aidSch_household`, `family_sourceOfIncome`, `family_totalMonthlyIncome`, `family_familyPopulation`, `family_homeAddress`, `family_postalCode`, `family_familyMember`, `stu_hometown`, `stu_birthday`, `stu_periodAtSchool`, `type`, `family_intro`) VALUES
(1, '1004061034', '061034', '信工院', '陈敏清', '计算机102', 0, '352227199107053043', '计算机', NULL, '中共党员', '汉', '18768141111', 0, '务农', '3000', 3, '福建宁德', '352200', '陈敏-27-父子-务农;陈爸-47-父子-务农;;;;', '福建宁德', '1986 年1 月', '2010 年1 月', 2, '            】啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊的辅导班'),
(2, '1004061010', '061010', '杭州国际服务和工程', '段瑞', '计算机102', 0, '352227199107053043', '计算机', NULL, '中共党员', '汉', '18768143563', 0, '', '', 0, '', '', '', '湖北金门', '1986 年1 月', '2010 年1 月', 0, '  技术大赛的合法回复是否好看和司法考试你发');

-- --------------------------------------------------------

--
-- 表的结构 `stu_define`
--

CREATE TABLE IF NOT EXISTS `stu_define` (
  `stu_id` int(11) NOT NULL COMMENT '学生id',
  `defineDetail_id` int(11) NOT NULL COMMENT '贫困生认定详细资料id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='学生经济认定表';

--
-- 转存表中的数据 `stu_define`
--

INSERT INTO `stu_define` (`stu_id`, `defineDetail_id`) VALUES
(1, 10),
(2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `work`
--

CREATE TABLE IF NOT EXISTS `work` (
  `work_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '岗主键位',
  `work_classify` int(11) NOT NULL COMMENT '岗位种类',
  `work_name` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '岗位名称',
  `work_content` text COLLATE utf8_bin NOT NULL COMMENT '岗位内容',
  `work_num` int(11) NOT NULL COMMENT '岗位报名人数',
  `work_publish` date NOT NULL COMMENT '岗位发布时间',
  `work_endtime` date NOT NULL COMMENT '岗位截止时间',
  `work_admin` varchar(200) COLLATE utf8_bin NOT NULL COMMENT '岗位发布人',
  PRIMARY KEY (`work_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `work`
--

INSERT INTO `work` (`work_id`, `work_classify`, `work_name`, `work_content`, `work_num`, `work_publish`, `work_endtime`, `work_admin`) VALUES
(4, 3, '不能水是', '特体qq', 0, '2013-03-29', '2012-11-15', '1'),
(2, 2, '不能', '特体', 0, '2013-03-25', '2012-11-15', ''),
(3, 2, '不能', '特体', 0, '2013-03-25', '2013-03-23', ''),
(5, 1, '西湖家教', '西湖家教', 0, '2013-03-30', '2013-03-26', '1'),
(6, 1, '西湖家教', '西湖家教', 0, '2013-03-30', '0000-00-00', '1'),
(7, 1, 'ss', 'ss', 0, '2013-03-30', '0000-00-00', '1'),
(8, 3, '初三数学、科学家教教员', '<p style="text-indent:13.5pt;">\r\n	000\r\n</p>', 0, '2013-04-25', '2013-04-24', '1'),
(9, 3, '初三数学家教', '杭州精锐教育为您服务，请问有什么可以帮您', 0, '2013-05-13', '2013-05-16', ''),
(10, 2, '图书馆工作人员', '<p>\r\n	<span>因图书馆需要工作需要，现招聘工作人员1名</span><span></span>\r\n</p>\r\n<p>\r\n	<span>工作内容： 图书整理、上架工作</span><span></span>\r\n</p>\r\n<p style="text-indent:-77pt;margin-left:77pt;">\r\n	<span>工作要求： 晚上空余时间较多、个子高的男生</span><span></span>\r\n</p>\r\n<p style="text-indent:-68.88pt;margin-left:68.9pt;">\r\n	<span>工作时间： 20：00-22：00</span><span></span>\r\n</p>\r\n<p>\r\n	<span>工作地点： 图书馆</span><span></span>\r\n</p>\r\n<p>\r\n	<span>工资待遇： 11元/小时</span><span></span>\r\n</p>\r\n<p>\r\n	<span>面试时间： 5月15日（周三）16:30--17:30</span><span></span>\r\n</p>\r\n<p>\r\n	<span>面试地点： 艺术楼310</span>\r\n</p>', 0, '2013-05-20', '2013-05-23', '');
