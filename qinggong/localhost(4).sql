-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 05 月 28 日 15:16
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
CREATE DATABASE `nurse` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `nurse`;

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
(1, '1004061087', '123');

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
  PRIMARY KEY (`stu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `aid_scholarship`
--

INSERT INTO `aid_scholarship` (`aidSch_time`, `stu_id`, `aidSch_applyReason`, `aidSch_collegeOpinion`, `aidSch_schoolOpinion`) VALUES
('2013', 1, '希尔反而给他如果让他更让工人停工', '', ''),
('2013', 2, '阿的萨芬四大古典风格大方', '', ''),
('2013', 3, '义工服务证用于证明入会义工的身份，记录入会义工参加义工服务的时间、内容和所获的义工服务荣誉。入会义工参加义工服务后，由服务对象提供该义工的服务时间、服务内容的证明，该义工所属的学院义工联盟予以认定并在其义工服务证中注明。义工服务证由学生发展与服务部、校学生勤工助学中心统一制作、盖章，根据各级义工联盟的申请发放。', '', '');

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
('2013', 1, '2013-05-26', 1, '0000-00-00', 1),
('2013', 2, '2013-05-27', 1, '0000-00-00', 2);

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
('<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:12pt;">杭州师范大学学生勤工助学中心（以下简称“中心”）成立于2003年\r\n3月，隶属于杭州师范大学学工部学生处。中心本着“扶贫帮困，服务同学，回报社会，完善自我”的宗旨，立足本校，面向社会，旨在培养同学勤俭节约的美德、\r\n艰苦奋斗的精神、自主创新的意识和社会工作能力，增强同学公平竞争、自立自强的意识，帮助经济困难的学生顺利完成学业。<br />\r\n&nbsp; &nbsp; &nbsp; 中心实行主任责任制，下设办公室、财务部、开发部、宣传网络部、人力资源部、家教部、培训部、义工联盟活动部8个部门，现有人员60余人。<br />\r\n&nbsp;\r\n &nbsp; &nbsp; \r\n中心始终积极帮助经济困难生解决学习、生活上的问题，开展如冬日送温暖、“小书大爱”送书活动等活动，为他们送上一份最真切的关爱。为给广大学生尤其是经\r\n济困难生提供一个展现自我、提升自我的平台，中心于4月特举办“自强之星”、“家教之星”、“义工之星”评比活动。为方便师生回家，中心与杭州长运合作，\r\n在学生事务中心设立汽车票代售点；春运期间，推出火车票代购服务。此外，中心特推出公共自行车“爱心借车卡”服务项目方便学生出行。<br />\r\n&nbsp; &nbsp; &nbsp; \r\n九年来，中心在学工部学生处的直接领导下，积极探索新形势下勤工助学模式和科学的操作平台，引导学生有序参加勤工助学工作。中心现已建立系统化的家教、校\r\n内外岗的管理制度，有着完善的信息发布渠道，实行定点定时面试制度，并定期举行暑期招聘会、学期初招聘会、企业专场招聘会等大型招聘会。“师大家教”作为\r\n中心的一大品牌，有着完善的管理制度与程序，建立了家教网站专栏、家教人才库、家教申请表、家教信息登记表、家教回访录等一系列管理体系。此外，中心于\r\n2012年初提出建立“十大安全勤工基地”这一目标，不断发展与优秀在杭公司的合作，现已与杭州肯德基、阳光家教网等知名企业建立了长期合作伙伴关系。<br />\r\n&nbsp; &nbsp; &nbsp; 同时，我们也积极提升勤工人的综合素质，积极推进与分中心、与各在杭高校之间的交流，努力打造一支一流的学生队伍。<br />\r\n&nbsp; &nbsp; &nbsp; 在今后的工作中，我们将继续坚持正确的工作方法，在“勤慎诚恕，博雅精进”校训的引领下，积极配合学校的扶贫帮困工作，切实做到“服务同学，回报社会”，使中心成为一个朝气蓬勃、不断发展壮大的学生组织。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">&nbsp;</span>\r\n</p>\r\n<br />', '<p>\r\n	&nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size:12pt;">杭州师范大学学生勤工助学中心（以下简称“中心”）成立于2003年\r\n3月，隶属于杭州师范大学学工部学生处。中心本着“扶贫帮困，服务同学，回报社会，完善自我”的宗旨，立足本校，面向社会，旨在培养同学勤俭节约的美德、\r\n艰苦奋斗的精神、自主创新的意识和社会工作能力，增强同学公平竞争、自立自强的意识，帮助经济困难的学生顺利完成学业。<br />\r\n&nbsp; &nbsp; &nbsp; 中心实行主任责任制，下设办公室、财务部、开发部、宣传网络部、人力资源部、家教部、培训部、义工联盟活动部8个部门，现有人员60余人。<br />\r\n&nbsp;\r\n中心始终积极帮助经济困难生解决学习、生活上的问题，开展如冬日送温暖、“小书大爱”送书活动等活动，为他们送上一份最真切的关爱。为给广大学生尤其是经\r\n济困难生提供一个展现自我、提升自我的平台，中心于4月特举办“自强之星”、“家教之星”、“义工之星”评比活动。为方便师生回家，中心与杭州长运合作，\r\n在学生事务中心设立汽车票代售点；春运期间，推出火车票代购服务。此外，中心特推出公共自行车“爱心借车卡”服务项目方便学生出行。<br />\r\n&nbsp; &nbsp; &nbsp; \r\n九年来，中心在学工部学生处的直接领导下，积极探索新形势下勤工助学模式和科学的操作平台，引导学生有序参加勤工助学工作。中心现已建立系统化的家教、校\r\n内外岗的管理制度，有着完善的信息发布渠道，实行定点定时面试制度，并定期举行暑期招聘会、学期初招聘会、企业专场招聘会等大型招聘会。“师大家教”作为\r\n中心的一大品牌，有着完善的管理制度与程序，建立了家教网站专栏、家教人才库、家教申请表、家教信息登记表、家教回访录等一系列管理体系。此外，中心于\r\n2012年初提出建立“十大安全勤工基地”这一目标，不断发展与优秀在杭公司的合作，现已与杭州肯德基、阳光家教网等知名企业建立了长期合作伙伴关系。<br />\r\n&nbsp; &nbsp; &nbsp; 同时，我们也积极提升勤工人的综合素质，积极推进与分中心、与各在杭高校之间的交流，努力打造一支一流的学生队伍。<br />\r\n&nbsp; &nbsp; &nbsp; 在今后的工作中，我们将继续坚持正确的工作方法，在“勤慎诚恕，博雅精进”校训的引领下，积极配合学校的扶贫帮困工作，切实做到“服务同学，回报社会”，使中心成为一个朝气蓬勃、不断发展壮大的学生组织。</span> \r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">&nbsp;</span> \r\n</p>\r\n<br />');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `data`
--

INSERT INTO `data` (`da_id`, `da_time`, `da_name`, `da_num`, `da_publish`, `data_file`) VALUES
(10, '2013-05-26', '艺术', 9, '张三', '../../../manage/data/编剧的艺术.jpg'),
(14, '2013-05-27', 'hhh', 2, '', '../../../manage/data/main.php');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `news_title`, `news_publish`, `news_time`, `news_content`, `class`) VALUES
(32, '我院组织学生学习安全教育与反邪教知识', '', '2013-05-26', '<p style="margin-left:0cm;">\r\n	<span style="font-size:16.0pt;font-family:仿宋;">&nbsp;&nbsp;&nbsp;&nbsp;<span></span>“安全”作为所有高校共同关注的话题，一直也是我校建设中的重中之重。为使我校学生的校园安全更有保障，将和谐校园建设进行到底，<span>5</span>月<span>8</span>日下午，我院思政剧场在<span>2</span>号实验楼<span>505</span>室顺利开展。此次剧场选用播放影片的方式来使同学们增强安全意识，提高辨别是非的能力。<span></span></span> \r\n</p>\r\n<p style="margin-left:0cm;text-indent:32.0pt;">\r\n	<span style="font-size:16.0pt;font-family:仿宋;">影片中通过对“全能神”这一邪教组织的详细介绍，使大家深刻地认识到了此不法组织对于社会和百姓的严重危害性。在场的同\r\n学纷纷意识到，作为当代大学生，应该树立坚决打击邪教的意识。同时，通过影片，同学们也发现了不少日常生活中存在的安全隐患，特别是如诈骗、盗窃、车祸等\r\n一类的事件在大学里仍时有发生，极易危害学生的生命安全与财产安全。影片中还列举了许多相关案列，让同学们真真切切地感受到了那些安全隐患带来的严重问\r\n题。同时影片也向大家讲解了在面对各种意外情况下应采取的应对措施，以此来强化学生们的安全意识，提高应急避险能力。<span></span></span> \r\n</p>\r\n<span style="font-size:16.0pt;font-family:仿宋;">&nbsp;&nbsp;&nbsp;&nbsp;通过本次思政剧场，不仅加强了同学们的安全防范意识，也让“反邪教 \r\n净校园”的风气深入到了每一个同学的心中。同学们观看影片以后纷纷表示要努力学习科学文化知识，树立正确的世界观、人生观、价值观，坚决反对邪教；以自己\r\n的实际行动，积极倡导、传播科学思想，普及科学知识，弘扬科学精神，共同促进校园的和谐发展。</span>', 3),
(28, '图书馆医学信息服务平台开通', '1', '2013-05-26', '<div>\r\n	<span style="font-family:宋体;font-size:12pt;">尊敬的各位老师、同学：</span> \r\n</div>\r\n<div>\r\n	<span style="font-family:宋体;font-size:12pt;">大家好！图书馆“医学学科服务组”成立近一年了，感谢学院师生一直以来对我们工作的支持和理解。近期我们为医学部师生设计制作了一个信息服务平台，该平台中集成了学科相关资源、图书馆服务、学术动态、</span><span style="font-size:12pt;">SCI</span><span style="font-family:宋体;font-size:12pt;">专栏、教参及精品课程等内容。</span> \r\n</div>\r\n<div>\r\n	<span style="font-family:宋体;font-size:12pt;">现该平台已经挂在学院网站“友情链接”的板块中，名为“医学信息服务平台”。请师生用后多多为我们提意见和建议，我们会根据大家的要求不断修改、完善该平台。</span> \r\n</div>\r\n<div>\r\n	<span style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-family:宋体;font-size:12pt;">最后，再次感谢！祝各位老师工作顺利、身体健康！</span> \r\n</div>', 1),
(30, '“律绎天下”班级风采大赛暨法律文化节闭幕式', '', '2013-05-26', '<span style="font-family:仿宋_GB2312;"><span style="line-height:1.6;"><span style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;寻法学风采，为班级代言，本着“具体展现班级风采并结合专业和所学知识”的宗旨，法学院“律绎天下”班级风采大赛暨法律文化节闭幕式于4月14日在模拟法庭举行。团委老师胡俊、学生会主席谈家栋、学长任凯应邀担任了此次比赛的评委。</span></span></span> \r\n<div style="text-align:left;" align="left">\r\n	<span style="font-family:仿宋_GB2312;"><span style="line-height:1.6;"><span style="font-size:14pt;">&nbsp;</span><span style="font-size:14pt;">在\r\n主持人激情的开场白之后，各班进行了第一环节“青春法条”的展示。每班选择任一部法律中的法条，通过PPT等形式，进行“合理”解释作为本班特色的初印象\r\n展现。第二环节的“青春演绎”可谓精彩纷呈，每班都按抽到的当红节目进行对应的表演。第一个上场的便是知产121班的“星光大道”，前奏的视频展给大家极\r\n大的视觉冲击，情歌对唱《不得不爱》道出了有爱的心声，其后一曲校园华尔兹更是将现场气氛带动到高潮，振奋过后，煽情的班歌合唱振动了大家的心弦，大家直\r\n呼知产121班是个温情有爱的大家庭。后来的法学113班的节目“非诚勿扰”创意十足，将班级特色与节目内在的性质联合在一起，贯彻了一条主线——展示班\r\n级风采。并且穿插了各种搞笑片段，引得台下观众欢笑连连。法学121的“鲁豫有约”也亮点频出，先抑后扬的风格，班歌的改编，班级成员的犀利介绍，还有帅\r\n气厉素燕的卖力表演，赢得台下掌声不断。</span></span></span> \r\n</div>\r\n<div style="text-align:left;" align="left">\r\n	<span style="font-family:仿宋_GB2312;"><span style="line-height:1.6;"><span style="font-size:14pt;">&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="font-size:14pt;">最后，胡俊老师就本次班级风采大赛进行了点评，有肯定有否定，有鼓励有憧憬，对未来的班级风采大赛寄予了深切厚望。经过各项评分，知产121班获得一等奖，法学121班获二等奖，法学113班获得三等奖。</span></span></span> \r\n</div>\r\n<div style="text-align:left;" align="left">\r\n	<span style="font-family:仿宋_GB2312;"><span style="line-height:1.6;"><span style="font-size:14pt;">&nbsp;</span><span style="font-size:14pt;">这次比赛展示了班级特色与风采，展现了班级凝聚力，也让我们看到了班级团结的力量。</span></span></span> \r\n</div>', 3),
(31, '关于端午节放假的通知', '1', '2013-05-26', '<div>\r\n	<span style="font-size:15pt;"><span style="line-height:1.8;">各位老师：</span></span>\r\n</div>\r\n<div>\r\n	<span style="font-size:15pt;"><span style="line-height:1.8;">&nbsp; &nbsp; 根据校办通知，2013年端午节放假安排如下：</span><span style="line-height:1.8;"><br />\r\n</span></span>\r\n</div>\r\n<div>\r\n	<span style="font-size:15pt;"><span style="line-height:1.8;">&nbsp; &nbsp; 2013年6月10日至6月12日（星期一至星期三）放假调休，共3天。6月8日（星期六）、6月9日（星期日）上班上课，补上6月10日（星期一）、6月11日（星期二）的课。</span></span>\r\n</div>\r\n<div>\r\n	<span style="font-size:15pt;">&nbsp; &nbsp; </span><span style="line-height:1.8;"><span style="font-size:15pt;">请各位老师放假前搞好办公室环境卫生，关闭电源、关好门窗。班主任对学生进行一次安全教育。&nbsp;</span></span>\r\n</div>\r\n<div>\r\n	<span style="line-height:1.8;"><span style="font-size:15pt;">&nbsp; &nbsp; 特此通知。</span></span>\r\n</div>\r\n<br />', 1),
(27, '杭州师范大学校训', '1', '2013-05-26', '勤慎诚恕 博雅精进', 1),
(26, '“健康进社区，光盘伴我行”——记临床医学院义工活动', '1', '2013-05-26', '<span style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;2013年3月16日，杭州师范大学临床医学院义工联盟组织展开了以“健康进社区，光盘伴我行”为主题的义工活动。</span><span style="font-size:12pt;"><br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;中午12点，11名青春洋溢的义工从校门口集合出发，骑着爱心公共自行车，将健康低碳的生活方式带进杭州市中沙社区。下午13：30左右，义工们抵达了\r\n中沙社区。当同学们穿起白大褂时，社区的居民已经迫不及待地坐到他们的面前向他们了解医学知识。这10多名义工分为“推拿组”、“血压组”、“光盘行动\r\n组”三个小组为社区居民服务。推拿组的同学为一些身体不适的居民做起了推拿，边做边询问他们力道是否合适；血压组的同学在为居民量血压的同时告诉他们平时\r\n应该多注意些什么来控制高血压或低血压；“光盘行动组”的同学一部分留在服务点让居民们了解光盘行动的意义，向他们提倡节俭的生活方式，一部分则去周围的\r\n饭店在餐桌上摆放“光盘”行动标志卡，倡导不浪费粮食，共创节俭低碳的生活。<br />\r\n　　在活动进行到尾声的时候，居民们对即将离开的义工们说“路上小心，下次一定还得来”。就这样同学们恋恋不舍得骑着自行车撑着伞踏上了回校的路。<br />\r\n　　一名同学在回校路上说：“活动虽然有点累，但看到他们脸上的笑容，一下子就轻松了许多。”是啊，谁说义工服务是没有回报的，相信没有什么是比笑容更加珍贵的回报了。任何苦累、风雨都抵挡不了义工前行的脚步，义工活动一直都在进行。</span>', 2),
(25, '畅谈就业——记理学院勤工助学中心里仁讲堂就业专题', '1', '2013-05-26', '<span style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;在当代社会，就业的形势十分严峻，越来越多的同学为将来的工作而揪心不已。理学\r\n院勤工助学中心举办了一期以就业为主题的里仁讲堂，帮助同学们解开对就业的疑问。12月2日下午三点半，里仁讲堂在E201准时开始。此次活动邀请到的嘉\r\n宾是杭州师范大学理学院08级的学长，来自应物的朱力伟和数学的张婧一。</span>\r\n<p>\r\n	<span style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;两位学长回想自己面对就业也曾迷茫过，后来通过各方面的了解慢慢学会了该如何应对。想要在将来找到理想的工作就必须从现在做起，提升个人能力，加强专业技\r\n能。生活中没有天上掉馅饼的好事，没有付出就不会有回报。两位学长也和大家分享了一些在应聘的时候的心得，其中最重要的一点就是充足的准备和充分的信心。\r\n整个里仁讲堂在轻松愉快的氛围下进行，偶尔穿插的几个玩笑也活动增添了许多乐趣。在提问环节中，嘉宾们针对同学们提出的种种疑惑给出了许多有用的建议。</span>\r\n</p>\r\n<p>\r\n	<span style="font-size:12pt;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;最后，大家与嘉宾合影留念，里仁讲堂结束。同学们的紧皱的眉头渐渐舒展，相信都堂获益匪浅。只要从现在做起，从小事着手，就业又有何惧？</span>\r\n</p>', 2);

-- --------------------------------------------------------

--
-- 表的结构 `note`
--

CREATE TABLE IF NOT EXISTS `note` (
  `note_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '留言主键',
  `user_no` varchar(11) COLLATE utf8_bin NOT NULL COMMENT '留言者ID',
  `note_cont` text COLLATE utf8_bin NOT NULL COMMENT '留言内容',
  `note_reply` text COLLATE utf8_bin NOT NULL COMMENT '留言回复',
  `note_date` varchar(100) COLLATE utf8_bin NOT NULL COMMENT '留言时间',
  `note_replydate` date NOT NULL COMMENT '回复时间',
  `admin_id` int(11) NOT NULL COMMENT '回复管理员ID',
  PRIMARY KEY (`note_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `note`
--

INSERT INTO `note` (`note_id`, `user_no`, `note_cont`, `note_reply`, `note_date`, `note_replydate`, `admin_id`) VALUES
(11, '1004061034', '很好\n', '', '1369714948', '0000-00-00', 0),
(3, '1004061034', 'terterter ', '我叫段瑞', '0000-00-00', '2013-05-26', 0),
(4, '1004061034', 'gdfg ', '很好', '0000-00-00', '2013-05-26', 0),
(5, '1004061034', 'dfg', '很好', '0000-00-00', '2013-05-26', 0),
(6, '1004061034', 'asfdsf', '阿桑达四方的萨芬', '0000-00-00', '2013-05-26', 0),
(7, '1004061034', '哈哈哈哈', 'oh no<br />', '0000-00-00', '2013-05-26', 0),
(12, '1004061034', '很差', '', '1369714951', '0000-00-00', 0);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

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
(9, 2, 'upload_images/2013513213926.jpg', '阿勒泰的角落', '《阿勒泰的角落》是关于新疆的最美丽文字，这是现代版《呼兰河传》。由作者1998-2003年之间陆续完成并在《文汇报》、《南方周末》 等发表的短篇散文集结成册。作者以天然而纯真的笔调描述阿勒泰地区哈萨克族日常生活点滴趣事：做裁缝、可爱的孩子、来来去去的陌生人。她刻画的不是一组有 关新疆的异域风情，她刻画的是我们内心的牧歌：白雪和阳光，青草和白桦林，优美、明亮。李娟 阿勒泰的角落，给你带来最生动的故事！\r\n《阿勒泰的角落》适用于：青年，女性，对新疆好奇的读者，文艺青年。\r\n'),
(10, 1, 'upload_images/2013526202237.jpg', '阿分的萨芬', '斯蒂芬森规定风格的规定风格'),
(11, 1, 'upload_images/201352713397.jpg', '中国合伙人', '《中国合伙人》讲述了“土鳖”黄晓明、“海龟”邓超和“愤青”佟大为从1980年代到21世纪，30年的大变革背景下，三兄弟为了改变自身命运，创办英语培训学校，最终实现“中国式梦想”的“屌丝逆袭”故事。其中，“土鳖”黄晓明有“高考失败、泡妞失败、教书失败”的不平，“海龟”邓超则遭遇“出国受挫、事业受挫、野心受挫”的尴尬，“愤青”佟大为历经“姑娘走了、兄弟走了、梦想走了”的悲剧，但他们最终携手创造了商业奇迹，谨以二B和牛B的岁月，致他们终将牛B的青春。'),
(12, 1, 'upload_images/2013527134141.jpg', '西游降魔篇', '大唐年间妖魔横行，一小渔村因为饱受鱼妖之害请来道士（冯勉恒 饰）除妖，年轻驱魔人陈玄奘（文章 饰）前来帮忙却被误认为骗子，幸亏职业赏金驱魔人段小姐（舒淇 饰）帮助玄奘制服了鱼妖真身（李尚正 饰）。二人又在高家庄为制服猪妖猪刚鬣（陈炳强 饰） 而再次相遇，这次除妖没有成功 ，但是段小姐却对玄奘二见钟情。玄奘求助师父，得知除妖的办法是去找被压在五指山下的孙悟空（黄渤 饰）帮忙，于是他准备前往五指山，途中又遇到段小姐和手下五煞，段小姐连蒙带哄想与玄奘在一起却屡次遭拒，在四妹（周秀娜 饰）调教下想变得更有女人味却适得其反。二人决裂后玄奘独自上路，与此同时降魔师（释延能 饰）、天残脚（张超理 饰）、空虚公子（罗志祥 饰）也一同前往除妖。经过千辛万苦玄奘终于找到孙悟空，段小姐又再次出现并交给玄奘一件重要的东西，猪妖终于被降服，但是更大的危机又出现在了玄奘面前，原来孙悟空与传闻中不一样，玄奘的除魔之路能否继续？');

-- --------------------------------------------------------

--
-- 表的结构 `recruitment`
--

CREATE TABLE IF NOT EXISTS `recruitment` (
  `Rec_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '招聘主键',
  `stu_id` int(100) NOT NULL COMMENT '学生id外键',
  `Rec_workid` int(11) NOT NULL COMMENT '对应岗位ID',
  `state` int(11) NOT NULL COMMENT '状态',
  `Rec_time` date NOT NULL COMMENT '报名时间',
  `work_time` date NOT NULL COMMENT '审核通过时间',
  PRIMARY KEY (`Rec_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=46 ;

--
-- 转存表中的数据 `recruitment`
--

INSERT INTO `recruitment` (`Rec_id`, `stu_id`, `Rec_workid`, `state`, `Rec_time`, `work_time`) VALUES
(43, 2, 21, 1, '2013-05-27', '2013-05-27'),
(42, 2, 22, 1, '2013-05-27', '2013-05-27'),
(41, 2, 31, 1, '2013-05-27', '2013-05-28'),
(39, 1, 28, 1, '2013-05-27', '2013-05-27'),
(38, 1, 31, 1, '2013-05-27', '2013-05-27'),
(45, 2, 34, 1, '2013-05-27', '2013-05-27'),
(44, 2, 32, 1, '2013-05-27', '2013-05-27');

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
(1, 3),
(2, 8),
(3, 7);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`stu_id`, `stu_num`, `stu_password`, `stu_college`, `stu_name`, `stu_class`, `stu_gender`, `stu_idCard`, `stu_major`, `stu_work`, `stu_politicalAppearance`, `stu_nation`, `stu_phoneNum`, `aidSch_household`, `family_sourceOfIncome`, `family_totalMonthlyIncome`, `family_familyPopulation`, `family_homeAddress`, `family_postalCode`, `family_familyMember`, `stu_hometown`, `stu_birthday`, `stu_periodAtSchool`, `type`, `family_intro`) VALUES
(1, '1004061034', '061034', '信工院', '陈敏清', '计算机102', 2, '352227199107053043', '计算机', NULL, '中共党员', '汉', '18768141111', 1, '务农', '3000', 3, '福建宁德', '352200', '陈敏-27-母女-务农;陈爸-47-父女-务农;;;;', '福建宁德', '1986 年1 月', '2010 年1 月', 1, '家中爸爸常年生病卧床，家里两个小孩上学全靠妈妈一人的辛苦工作。家里是真的吃不消了，感谢党，感谢人民，请给我这次机会吧。'),
(2, '1004061010', '061010', '杭州国际服务和工程', '段瑞', '计算机102', 1, '420821199107174533', '特任特任', NULL, '中共党员', '汉族', '18768143605', 2, '下载', '11400', 1, '下载', '154545', '就是说 -12-父子-正是旧;天干-31-母子-圩;;;;', '湖北金门', '2013年5月', '2013年1月', 2, 'yrtuytuiyiufdgfhfgjhghjghkhjkhjklhjkhjkghkhjklhjlkhjlhjlhjlhjkljhklhjkjhkhj'),
(4, '1004061087', '123', '杭州国际服务工程学院', '蔡优优', '计算机102班', 2, '123456789', '计算机', '木有', '团员', '汉', '123456789', 2, '123', '', 0, '', '', '', '', '', '', 0, ''),
(5, '1004061001', '123', '护理学院', '李四', '护理3班', 2, '123456789', '护理', '没有', '群众', '畲族', NULL, 0, '', '', 0, '', '', '', '', '', '', 0, ''),
(6, '100401002', '123', '护理', '王五', '123', 1, '123456789', '', NULL, '', '', NULL, 0, '', '', 0, '', '', '', '', '', '', 0, ''),
(7, '1004061003', '123456789', '杭州国际服务工程学院', '钱三强', '电子101班', 1, '123456789', '电子', NULL, '', '', NULL, 0, '', '', 0, '', '', '', '', '', '', 0, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `work`
--

INSERT INTO `work` (`work_id`, `work_classify`, `work_name`, `work_content`, `work_num`, `work_publish`, `work_endtime`, `work_admin`) VALUES
(24, 2, '暑假和现在聘辅导老师和教学助理', '<span>所在地：江干</span><br />\r\n<p>\r\n	<span>公司名称：浙江新希望教育中心</span>\r\n</p>\r\n<p>\r\n	<span></span><span>所属行业：教育/培训</span><span>公司类型：其他</span><span>公司规模：少于50人</span> \r\n</p>\r\n<div>\r\n</div>\r\n<p>\r\n	&nbsp;&nbsp;&nbsp;&nbsp;新希望教育中心因学期间晚上、双休日及其它节假日辅导中小学生需要,聘19名专兼职辅导老师和教学助\r\n理。兼职辅导老师要求\r\n</p>\r\n<p>\r\n	研究生、师范类大三以上本科生，兼职辅导老师分为初级、中级和高级，初级1680元/四周，中级2080元/四周，高级2680元\r\n/四\r\n</p>\r\n<p>\r\n	周，辅导老师两个月工作后考核合格升一级。兼职教学助理要求师范类大二以上本科生、非师范类大三以上本科生，兼职教学助理\r\n</p>\r\n<p>\r\n	分成初级和一级，初级\r\n1080元/四周，一级1280元/四周，教学助理一个月工作后考核合格升一级。培训考核时间可分开，合计四\r\n</p>\r\n<p>\r\n	天，必须到诸暨教育点培训，解决吃住，考核合\r\n格后安排工作，工作时必须每周五下午两点前到教育点，周日四点半结束。辅导科\r\n</p>\r\n<p>\r\n	目：数学、物理、化学、语文、英语、科学、语文等。以后工作地点：诸暨或杭\r\n州。有意者请马上把个人情况（姓名、年级、专业\r\n</p>\r\n<p>\r\n	等）发送到zxfuwu@163.com&nbsp;符合者我中心会与你联系.（最好周五没课，至少下午没课）\r\n</p>\r\n<p>\r\n	暑假解决吃住，工作30天辅导老师3600元，教育助理和大学生家政工2600元。大学生家政工：要求女性，能吃苦耐劳，爱干净，\r\n</p>\r\n<p>\r\n	会做饭烧菜洗衣服搞卫生，包吃住。\r\n</p>\r\n特别提醒：不要打电话，电话不对，愿意者发邮件。', 0, '2013-05-26', '2013-06-08', ''),
(21, 1, '急招水溶C周末促销员100+ 杭州和萧山', '直招杭州各大卖场水溶C100饮料促销员，非中介不收任何费用<br />\r\n招聘要求：身高160以上，形象佳，能说会到善于沟通，有经验者优先，需要健康证，放鸽子的不要<br />\r\n工作时间：6月份每个周六周日，共10天&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 10：00-20：30，工作8小时，中午12：00-13：00，晚上17：00-18：00为吃饭时间，轮流吃饭各一小时，特殊情况经准许可找符合人员替班。<br />\r\n工资待遇：底薪+提成，90/天，提成：按卖出10瓶提成1元的制度，上不封顶，多卖多得,只要你不偷懒每天工资都在100+。<br />\r\n工作地点：杭州（世纪联华和平店，世纪联华运河店，世纪联华庆春店，世纪联华外海店，世纪联华莲花店）萧山（世纪联华南环，萧山乐购，汇德隆）', 2, '2013-05-26', '2013-05-29', ''),
(22, 1, '经理助理', '1:月薪3800元+提成+奖金,限女性,20--40岁之间,无经验可培训!<br />\r\n2:沟通能力强,有一定的组织协调能力,<br />\r\n3:有一定的管理经验,业务能力强,善于沟通。<br />\r\n4:有相关工作经验者优先。<br />\r\n5:工作时间:晚7点到12点左右', 3, '2013-05-26', '2013-06-04', ''),
(23, 2, '三墩招兼全职中学文化辅导老师', '<span>所在地：<a href="http://hz.1010jz.com/123/">西湖</a></span><br />\r\n<span>公司名称：红星教育</span><br />\r\n<span>所属行业：教育/培训</span><span>公司类型：其他</span><span>公司规模：少于50人</span> \r\n<div>\r\n</div>\r\n本机构主要辅导中小学文化课,辅导时间是下午3点半—晚上6点半或晚上6点半—9点半,主要内容是家庭作业,复习及预习,工作简单,但需要有责任心,耐心!最好能长期做的!有效期:&nbsp;2个月,不发简历也可以电话联系孔老师面试谈。 <br />', 0, '2013-05-26', '2013-06-05', ''),
(28, 1, '招聘全职、兼职教师', '应杭州砺才教育咨询有限公司的需要，现招聘全职、兼职教师若干名<br />\r\n工作内容：初中数学、科学教师；高中数学、物理、化学教师<br />\r\n工作要求：全职教师，工作至少半年；工作认真负责<br />\r\n工作地点：萧山区瓜沥镇瓜南路107-109号,全职教师地点面议<br />\r\n工作时间：全职教师，周一至周五16:00-20:30，周末8:00-17:00；兼职教师，周末8:00-17:00；包午饭<br />\r\n<p>\r\n	工资待遇：全职教师基本工资3000元/月，兼职教师45-55元/小时\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n若有疑问，请与项同学（561718）联系。', 1, '2013-05-27', '2013-06-07', ''),
(29, 2, '后勤办公室工作人员', '因后勤办公室工作需要，现招聘工作人员1名<br />\r\n工作内容：新闻稿编辑、审阅等<br />\r\n工作要求：文字功底好，细心，耐心<br />\r\n工作时间：周一下午<br />\r\n工作地点：后勤办公室<br />\r\n工资待遇：11元/小时<br />\r\n面试时间：3月25日（周一）16:30--17:30<br />\r\n面试地点：艺术楼310', 0, '2013-05-27', '2013-06-08', ''),
(26, 3, '高薪招聘淘宝客服', '<span>所在地：<a href="http://hz.1010jz.com/131/">滨江</a></span><br />\r\n<span>职位性质：全职</span><br />\r\n<span>公司名称：杭州旷典电子商务有限公司</span><br />\r\n<span>所属行业：计算机/网络/通信</span><span>公司类型：其他</span><span>公司规模：50-150人</span> \r\n<div>\r\n</div>\r\n淘宝售前客服&nbsp;<br />\r\n任职要求：&nbsp;（请直接电话联系）<br />\r\n1、打字速度快&nbsp;<br />\r\n2.具备良好的网络沟通能力，语言表达能力，可以引导买家购买店铺产品，促成成交。<br />\r\n3.有良好的自我激励能力，有很强的抗工作压力。&nbsp;<br />\r\n4.能够很好的融入团队，配合团队完成任务。&nbsp;<br />\r\n5.有良好的服务意识，责任感强。&nbsp;<br />\r\n6、开过淘宝店，当过淘宝或者拍拍等客服者优先考虑 <br />', 0, '2013-05-26', '2013-06-05', ''),
(27, 3, '业务员招聘', '<span>所在地：<a href="http://hz.1010jz.com/129/">江干</a></span><br />\r\n<span>公司名称：杭州旭峰投资有限公司</span><br />\r\n<span>所属行业：计算机/网络/通信</span><span>公司类型：民营</span><span>公司规模：少于50人</span> \r\n<div>\r\n</div>\r\n1、负责公司产品的销售及推广；<br />\r\n2、根据市场营销计划，完成部门销售指标；<br />\r\n3、开拓新市场,发展新客户,增加产品销售范围；<br />\r\n4、负责辖区市场信息的收集及竞争对手的分析；<br />\r\n5、负责销售区域内销售活动的策划和执行，完成销售任务；<br />\r\n6、管理维护客户关系以及客户间的长期战略合作计划。', 0, '2013-05-26', '2013-06-05', ''),
(30, 1, '招聘交易员', '应中国(舟山)大宗商品交易中心的需要，现招聘交易员若干名<br />\r\n工作内容: 负责浙江舟山大宗商品交易所白银产品的交易<br />\r\n工作要求: 有耐心，有责任心，对工作认真负责，能服从公司安排，对金融行业有浓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 厚兴趣<br />\r\n工作地点: 杭州<br />\r\n工作时间: 全职，每周工作五天<br />\r\n工资待遇: 1、交易员试用期(一个月)底薪2000元，转正后底薪3000元+社保+奖金<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2、表现优异者升任主管，底薪5000元+社保+奖金<br />\r\n<br />\r\n如有意向，可联系谢经理（18858821792），邮箱hzgd6006@foxmail.com<br />\r\n特此通告！', 1, '2013-05-20', '2013-05-21', ''),
(31, 1, '新东方招聘暑期实习生', '应新东方的需要，现招聘暑期助教、教师、管理员、客服和销售实习生等相关兼职人员若干名<br />\r\n工作内容：助教，协助进行教学工作；教师，英语、数学教师；管理&nbsp; &nbsp;<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 员，管理教室、仓库等；客服，负责家长接待等；销售， <br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 负责采购、销售图书等<br />\r\n工作要求：工作认真负责、具体各项工作要求面议<br />\r\n工作地点：根据实际情况分配<br />\r\n工作时间：根据各项不同工作而定<br />\r\n工资待遇：根据各项不同工作而定<br />\r\n若有疑问，可于本周三(5月22号)下午13:00-16:00到艺术楼大厅进行现场报名咨询。', 2, '2013-05-27', '2013-06-07', ''),
(32, 1, '小学四年级奥数家教教员', '为了丰富杭师大学生的日常生活，更好的弘扬和传承杭州师范大学的家教特色，杭州师范大学学生勤工助学中心积极接收家教信息，现有一家教招聘，具体信息如下：<br />\r\n<br />\r\n家教编号：J-163<br />\r\n学员信息：四年级男生，基础较好<br />\r\n教学科目：高段奥数<br />\r\n工资待遇：面议<br />\r\n工作地点：下城区三塘菊苑<br />\r\n工作时间：暑假<br />\r\n工作要求：小学教育或数学专业优先<br />\r\n家教状态：招聘中<br />\r\n面试地点：艺术楼319<br />\r\n面试时间：2013年5月30日（周四）16：30-17：30', 5, '2013-05-27', '2013-06-18', ''),
(33, 2, '招聘图书馆工作人员', '<span style="font-size:14px;">杭师大勤工[2012］N-7号</span><br />\r\n<span style="font-size:14px;">因图书馆工作需要，现招聘工作人员2名</span><br />\r\n<strong>工作内容：</strong> 图书整理<br />\r\n<strong>工作要求： </strong>身高一米六以上，晚上空闲时间多者优先<br />\r\n<strong>工作时间：</strong> 20：30—21：45<br />\r\n<strong>工作地点：</strong> 图书馆<br />\r\n<strong>工资待遇：</strong> 11元/小时<br />\r\n<strong>面试时间：</strong> 11月5日（周一）16：30—17：30<br />\r\n<strong>面试地点：</strong> 艺术楼310<br />\r\n<br />\r\n<strong>说明：</strong>本学年没有注册个人信息的同学请登录杭州师范大学学生勤工助学中心网站，于校内岗位报名端完善信息后方可参加面试(校内岗位报名端信息每学年更新一次，非本学年注册无效)。<br />\r\n<br />\r\n特此通告！<br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 学生勤工助学中心 <br />\r\n<br />\r\n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2012年10月31日<br />\r\n<span></span>', 0, '2013-05-27', '2013-06-07', ''),
(34, 1, '后勤文印部工作人员', '因后勤文印部工作需要，现招聘工作人员2名<br />\r\n工作内容：柜台值班<br />\r\n工作要求：工作认真仔细，与人相处和洽，态度良好。（男生优先）<br />\r\n工作时间：具体可商议 <br />\r\n工作地点：文印中心（生活区11号楼）<br />\r\n工资待遇：11元/小时<br />\r\n面试时间：2月27日（周三）16:30--17:30<br />\r\n面试地点：艺术楼310', 1, '2013-05-27', '2013-06-06', '');
