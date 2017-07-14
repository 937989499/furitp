<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" />
<title>品牌活动</title>
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
          <p style="border-bottom:2px solid red;"><a href="<?php echo U("User/gsgk");?>?cid=1">关于孚日</a></p>
          <div class="submenu">
            <ul>
              <li><a href="<?php echo U("User/gsgk");?>?cid=1">公司概况</a></li>
              <li><a href="<?php echo U("User/gsgk");?>?cid=2">发展历程</a></li>
              <li><a href="<?php echo U("User/gsgk");?>?cid=3">企业文化</a></li>
              <li><a href="<?php echo U("User/gsgk");?>?cid=4">奖项荣誉</a></li>
              <li><a href="<?php echo U("User/gsgk");?>?cid=5">领导关怀</a></li>
              <li><a href="<?php echo U("User/gsgk");?>?cid=6">社会公益</a></li>
              <li><a href="<?php echo U("User/gsgk");?>?cid=7">联系我们</a></li>
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
          <p><a href="<?php echo U("User/pphd");?>?hid=1">新闻中心</a></p>
          <div class="submenu">
            <ul>
              <li><a href="<?php echo U("User/pphd");?>?hid=1">公司新闻</a></li>
              <li><a href="<?php echo U("User/pphd");?>?hid=2">品牌活动</a></li>
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
            		<?php
 if(isset($_GET['newid']) && $_GET['newid']!=''){ if ($_GET['newid']==9) { echo "<li class='last'><a href='pphd.php?newid=8'>公司新闻</a></li><li class='counent'><a href='pphd.php?newid=9'>品牌活动</a></li>"; } else{ echo "<li class='counent' ><a href='pphd.php?newid=8'>公司新闻</a></li><li class='last'><a href='pphd.php?newid=9'>品牌活动</a></li>"; } } ?>
            	</ul>
            </div>
		</div>
         <!-- 以下部分为可修改部分 -->
        <div class="fid_right">
    			<p><img src="/furitp/Public/img/activities_top.jpg" alt="品牌活动"/></p>
    			<p class="fid_rightimg"><a href="index.html"><img src="/furitp/Public/img/home.jpg" alt="HOME"/></a>><a href="#">新闻中心</a>><?php if ($_GET['newid']==8) { echo "公司新闻";} else{ echo "品牌活动";} ?></p>
    			<div class="fid_rightnews">
                <h1><?php if ($_GET['newid']==8) { echo "公司新闻";} else{ echo "品牌活动";} ?></h1>

                <div class="fid_newslist">
                	<!--<ul>
                  
    					<?php
 ?>-->
            
        </div> 
	   </div>
     </div>
	<div class="footer">
    <div>版权信息：&copy2012孚日集团？沪ICP备13005479号-2 <a  href="#"style="margin-left:110px;">联系孚日|</a><a  href="#">网站地图|</a><a  href="#">法律声明|</a><a  href="#" style="color:red;">（新）招投标网（网通 电信）</a><a  href="#">|（旧）招投标网（网通 电信）|</a/><a  href="#">ERP分销（网通 电信）</a/></div>
    
  </div>
<script src="/furitp/Public/js/jquery.min.js"></script>
<script>
$(function(){
	$(".top_ul_li").mouseover(function(){
		$(this).children(".submenu").show();
		$(this).children("p").css("border-bottom","3px solid red");
	})
	$(".top_ul_li").mouseout(function(){
		$(this).children(".submenu").hide();
		$(this).children("p").css("border-bottom","");
	})
	$(".submenu ul li").mouseover(function(){
		$(this).css("background-color","#e5e5e5");
	});
	$(".submenu ul li").mouseout(function(){
		$(this).css("background-color","");
	});
});

</script>
</body>
</html>