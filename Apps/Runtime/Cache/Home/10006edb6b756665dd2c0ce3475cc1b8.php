<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" />
<title>公司概况</title>
</head>
<link rel="stylesheet" type="text/css" href="/furitp/Public/css/index.css">
 <link href="/furitp/Public/css/fenye.css" rel="stylesheet" type="text/css"/>
<body>
<div class="top">
        <div class="top_inner">
            <div class="top_inner_left">
                <a href="<?php echo U("User/index");?>"><img src="/furitp/Public/img/logo.jpg" style="padding-top:30px;width:100%;height:auto;" /></a>
            </div>
            <div class="top_inner_right">
                <div class="top_search">
                    <img id="btnsearch" src="/furitp/Public/img/btnsearch.jpg" alt="搜索"/><input type="text" id="searchpa" name="sousuo" value="search" placeholder="搜索"/>
                    <p><a href="<?php echo U("User/index");?>">首页</a> | <a href="javascript:void(0);">中文</a> | <a href="">登录</a></p>
                </div>
                <ul class="top_ul">
                    <li class="top_ul_li">
                    <p style="border-bottom:2px solid red;"><a href="<?php echo U("About/index");?>?cid=1">关于孚日</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li>
                        </ul>
                    </div>
                    
                    </li>
                    <li class="top_ul_li">
                    <p><a href="javascript:void(0);">产业布局</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="">家纺</a></li>
                            <li><a href="">地产</a></li>
                            <li><a href="">热电</a></li>
                            <li><a href="">水业</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="top_ul_li">
                    <p><a href="<?php echo U("Pphd/index");?>?hid=8">新闻中心</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="<?php echo U("Pphd/index");?>?hid=8">公司新闻</a></li>
                            <li><a href="<?php echo U("Pphd/index");?>?hid=9">品牌活动</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="top_ul_li">
                    <p><a href="javascript:void(0);">品牌市场</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="">孚日品牌</a></li>
                            <li><a href="">洁玉品牌</a></li>
                            <li><a href="">国际市场</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="top_ul_li">
                    <p><a href="javascript:void(0);">网上商城</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="">孚日商城</a></li>
                            <li><a href="">孚日天猫商城</a></li>
                            <li><a href="">洁玉天猫商城</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="top_ul_li">
                    <p><a href="javascript:void(0);">人力资源</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="">人力招聘</a></li>
                            <li><a href="">职位发展</a></li>
                            <li><a href="">成长在孚日</a></li>
                        </ul>
                    </div>
                    </li>
                    <li class="top_ul_li">
                    <p><a href="javascript:void(0);">投资者关系</a></p>
                    <div class="submenu">
                        <ul>
                            <li><a href="">互动平台</a></li>
                            <li><a href="">股市行情</a></li>
                        </ul>
                    </div>
                    </li>
                </ul>
            </div>
        </div>
</div>
    <div class="fid">
    	<div class="fid_left">
        	<div class="sub_nav">
            	<ul>
                      
                    <?php if((isset($type)) AND ($type != '')): if($type == 2): ?><li><a  href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a class='counent' href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; ?>
                        <?php if($type == 3): ?><li><a href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a class='counent' href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; ?>
                        <?php if($type == 4): ?><li><a href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a class='counent' href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; ?>
                        <?php if($type == 5): ?><li><a href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a  href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a class='counent'href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; ?>
                        <?php if($type == 6): ?><li><a href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a  href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a class='counent'href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; ?>
                        <?php if($type == 7): ?><li><a href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a  href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a class='counent'href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; ?>
                        <?php if(($type <= 1) OR ($type > 7)): ?><li><a class='counent' href="<?php echo U("About/index");?>?cid=1">公司概况</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=2">发展历程</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=3">企业文化</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=4">奖项荣誉</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=5">领导关怀</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=6">社会公益</a></li>
                            <li><a href="<?php echo U("About/index");?>?cid=7">联系我们</a></li><?php endif; endif; ?>
            	</ul>
            </div>
            <div class="sub_news">
				<p><img src="/furitp/Public/img/201311081644346895.jpg" alt="公司新闻" style="width:217px;height:105px;" /></p>
				<p>公司新闻</p>
				<div class="sub_newsdiv"><p>2013中国家纺协会毛巾专业委员会年会在... </p><p>11月1日上午，由中国家纺协会主办、孚日集团承办的2013中国家纺协会毛巾专业...</p><p>孚日集团为员工提供夫妻房和周转房改善员工...</p> <p>日前，孚日集团接连出台保障员工住房措施，改善员工住房条件。在孚日工业园区8号楼...</p>
            </div>
			</div>
        </div>
       
        <div class="fid_right">
			<p><img src="/furitp/Public/img/about_top_gk.jpg" alt="公司概况"/></p>
            <?php if(is_array($gsgk)): $i = 0; $__LIST__ = $gsgk;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$articles): $mod = ($i % 2 );++$i;?><p class="fid_rightimg"><a href="index.php"><img src="/furitp/Public/img/home.jpg" alt="HOME"/></a>><a href="#">关于孚日</a>><?php echo ($articles["title"]); ?></p>
			<div class="fid_rightgai">
            <h1><?php echo ($articles["title"]); ?></h1>
            <p><?php echo ($articles["contents"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        </div>
	</div>
<div class="footer">
        <div>版权信息：&copy2012孚日集团？沪ICP备13005479号-2 <a  href="#"style="margin-left:110px;">联系孚日|</a><a  href="#">网站地图|</a><a  href="#">法律声明|</a><a  href="#" style="color:red;">（新）招投标网（网通 电信）</a><a  href="#">|（旧）招投标网（网通 电信）|</a/><a  href="#">ERP分销（网通 电信）</a/></div>
        
    </div>
<script src="/furitp/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/furitp/Public/js/index.js"></script>
</body>
</html>