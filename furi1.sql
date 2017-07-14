-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-05-10 13:16:52
-- 服务器版本： 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furi1`
--

-- --------------------------------------------------------

--
-- 表的结构 `fu_admin`
--

CREATE TABLE `fu_admin` (
  `Id` bigint(20) NOT NULL,
  `AdminId` char(20) DEFAULT NULL,
  `AdminPwd` char(32) DEFAULT NULL,
  `UserName` char(100) DEFAULT NULL,
  `Phone` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fu_admin`
--

INSERT INTO `fu_admin` (`Id`, `AdminId`, `AdminPwd`, `UserName`, `Phone`) VALUES
(1, 'admin', '12345678', '测试', '13785143215'),
(3, 'admin3', '96e79218965eb72c92a549dd5a330112', '管理员3', '158222545521'),
(6, '546456', NULL, '54121', '45646'),
(7, '212', NULL, '6555', '2556');

-- --------------------------------------------------------

--
-- 表的结构 `fu_article`
--

CREATE TABLE `fu_article` (
  `Id` bigint(20) NOT NULL,
  `Title` char(200) DEFAULT NULL,
  `Contents` longtext,
  `ImgUrl` varchar(300) DEFAULT NULL,
  `Author` char(100) DEFAULT NULL,
  `AddDateTime` datetime DEFAULT NULL,
  `UpdateDateTime` datetime DEFAULT NULL,
  `CateId` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `fu_article`
--

INSERT INTO `fu_article` (`Id`, `Title`, `Contents`, `ImgUrl`, `Author`, `AddDateTime`, `UpdateDateTime`, `CateId`) VALUES
(1, '石家庄', '销合作总社是全省供销合作社的联合组织，为省政府事业机构，承担着为“三农”服务的重要责任。       省供销社机关的主要职能和任务是：1、贯彻党中央、国务院和省委、省政府有关农村工作和社会发展的方针、政策，制定全省供销合作社的发展战略和发展规划，指导全省供销合作社的改革与发展；2、维护供销合作社章程赋予的合法权益，促进合作经济的发展；3、对重要农业生产资料、农副产品、烟花爆竹和再生资源经营进行组织、协调、管理，负责管理棉花、化肥、农药、羊毛、救灾物资等国家和省级重要物资的储备工作；4、负责全省流通领域盐业行政管理，负责食盐批发、零售的监督管理和许可证管理，负责市场工业用盐的归口经营，做好全省食盐专营工作；5、指导全省供销合作社的业务活动，参与推动农业产业化经营，开拓城乡市场；6、指导全省供销合作社社属企业改革，建立现', '../img/activities_top.jpg', '作者', '2017-04-10 14:38:57', '2017-04-03 14:39:00', 9),
(4, '公司概况', '创立于1987年的孚日集团股份有限公司，秉承“以诚求成、共创共赢”的企业理念，从小到大，从弱到强，迅速发展成为一家以家用纺织品为主导产业，集国内外贸易、地产、热电、电机等多元产业于一体的综合性企业集团，出口额自1999年以来一直蝉联全国家纺行业第一位，2006年在深圳证券交易所上市。<br/>作为一家大型家用纺织品制造商，公司致力于向全球市场提供品质卓越、健康环保的家纺产品，拥有国家级技术中心、实验室和博士后科研工作站，配套完备的中试基地及检测实验室，形成了强大的技术研发能力。公司三大主导产品巾被、床上用品、装饰布艺，均已通过质量、环境、安全健康等系列国际认证，近几年来参与制定了10多项国家行业标准，40多项核心技术获得国家专利，开发出1000多个品种的产品，充分满足了不同消费群体的各种需求。<br/>经过三十年的发展，公司形成了领跑行业的技术装备优势，拥有世界一流水平的织造、印染及后整理等各类生产设备，配套热电、自来水等关联企业，形成了研发设计、棉纺加工、家用纺织品制造、国内外销售一体化的完整产业链。<br/>凭借优质的产品和良好的信誉，公司与国际主要家纺品牌形成了长期的、全方位、多层次的紧密合作关系，产品出口亚洲、欧洲、美洲、澳洲以及中东等多个国家和地区，在世界家纺市场上建立起良好的声誉。公司依靠多品牌战略布局国内市场，形成了品牌特色鲜明、营销渠道多元的高、中档品牌运营架构，连续四年登上中国品牌价值评价榜。<br/>多年来，集团荣获“全国出口商品质量稳定企业”、“全国精神文明建设工作先进单位”、“全国模范劳动关系和谐企业”、“国家高新技术企业”、“全国民营企业500强”、“ 中华慈善突出贡献奖”等多项荣誉称号。</p><p>', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, '企业文化', '<p>“诚信铸就永恒”。自企业创建以来，公司坚持把“诚信”作为孚日文化的灵魂，在经营实践中持之以恒的进行推广，以不断地变革创新适应企业的快速发展，实现企业与社会的共同进步。孚日文化把所有孚日人凝聚成一个具有共同价值取向的利益共同体，使公司形成强大的吸引力和凝聚力，使员工对企业有着强烈的归宿感和向心力，以发自内心的活力和动力，推动着孚日从小到大、从大到强、从中国走向世界。</p>             <p>核心价值观：诚信铸就永恒</p>             <p>企业愿景：领航世界家纺  创享精彩生活</p>             <p>企业使命：为客户谋价值 为员工谋幸福 为社会谋发展</p>             <p>企业精神：逐日求新  永攀高峰</p>             <p>经营哲学：以诚求成 共创共赢</p>', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3),
(6, '奖项荣誉', '<div class="honour">                 <ul>                     <li><span>中国名牌产品</span> <span>全国精神文明建设先进单位</span></li>                     <li><span>中国驰名商标</span> <span>中国专利山东明星企业</span></li>                     <li><span>中国出口名牌 </span><span>山东省劳动关系和谐单位</span></li>                     <li><span>孚日牌毛巾荣列同类产品市场综合占有率第一位</span> <span>山东企业100强</span></li>                     <li><span>全国出口商品质量稳定企业</span> <span>山东省外经贸先进企业</span></li>                     <li><span>全国高新技术企业</span> <span>山东省产品质量奖</span></li>                     <li><span>全国民营企业500强</span> <span>山东省著名商标</span></li>                     <li><span>全国守合同重信用企业</span> <span>山东省认定企业技术中心</span></li>                     <li><span>全国模范劳动关系和谐企业</span> <span>山东省质量管理奖</span></li>                     <li><span>全国模范职工之家</span> <span>潍坊市市长质量奖（潍坊）</span></li>                 </ul>             </div>', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4),
(7, '23', '231', '323', '232', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 32323);

-- --------------------------------------------------------

--
-- 表的结构 `fu_cate`
--

CREATE TABLE `fu_cate` (
  `Id` bigint(20) NOT NULL,
  `CateName` char(150) DEFAULT NULL,
  `PId` bigint(20) DEFAULT '0' COMMENT '0 代表顶级分类 '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `fu_img`
--

CREATE TABLE `fu_img` (
  `Id` bigint(20) NOT NULL,
  `Url` char(200) DEFAULT NULL,
  `Title` char(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fu_admin`
--
ALTER TABLE `fu_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fu_article`
--
ALTER TABLE `fu_article`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fu_cate`
--
ALTER TABLE `fu_cate`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `fu_img`
--
ALTER TABLE `fu_img`
  ADD PRIMARY KEY (`Id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `fu_admin`
--
ALTER TABLE `fu_admin`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `fu_article`
--
ALTER TABLE `fu_article`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `fu_cate`
--
ALTER TABLE `fu_cate`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `fu_img`
--
ALTER TABLE `fu_img`
  MODIFY `Id` bigint(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
