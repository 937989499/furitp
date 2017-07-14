<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="utf-8" />
<title>公司概况</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/index.css">
 <link href="../css/fenye.css" rel="stylesheet" type="text/css"/>
<body>
    <div class="fid">
    	<div class="fid_left">
        	<div class="sub_nav">
            	<ul>
            	<?php
 if(isset($_GET['cid']) && $_GET['cid']!=''){ if ($_GET['cid']==1) { echo "<li><a class='counent' href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } elseif ($_GET['cid']==2) { echo "<li><a  href='gsgk.php?cid=1'>公司概况</a></li><li><a class='counent' href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } elseif ($_GET['cid']==3) { echo "<li><a  href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a class='counent' href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } elseif ($_GET['cid']==4) { echo "<li><a  href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a class='counent' href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } elseif ($_GET['cid']==5) { echo "<li><a  href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a class='counent' href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } elseif ($_GET['cid']==6) { echo "<li><a  href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a class='counent' href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } elseif ($_GET['cid']==7) { echo "<li><a  href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a class='counent' href='gsgk.php?cid=7'>联系我们</a></li>"; } else{ echo "<li><a class='counent' href='gsgk.php?cid=1'>公司概况</a></li><li><a href='gsgk.php?cid=2'>发展历程</a></li><li><a href='gsgk.php?cid=3'>企业文化</a></li><li><a href='gsgk.php?cid=4'>奖项荣誉</a></li><li><a href='gsgk.php?cid=5'>领导关怀</a></li><li><a href='gsgk.php?cid=6'>社会公益</a></li><li><a href='gsgk.php?cid=7'>联系我们</a></li>"; } } ?>
            	</ul>
            </div>
            <div class="sub_news">
				<p><img src="../img/201311081644346895.jpg" alt="公司新闻" style="width:217px;height:105px;" /></p>
				<p>公司新闻</p>
				<div class="sub_newsdiv"><p>2013中国家纺协会毛巾专业委员会年会在... </p><p>11月1日上午，由中国家纺协会主办、孚日集团承办的2013中国家纺协会毛巾专业...</p><p>孚日集团为员工提供夫妻房和周转房改善员工...</p> <p>日前，孚日集团接连出台保障员工住房措施，改善员工住房条件。在孚日工业园区8号楼...</p>
            </div>
			</div>
        </div>
        <?php
 require'../admin/conn/conn.php'; if(isset($_GET['cid']) && $_GET['cid']!=''){ $sql="select * from article where CateId=".$_GET['cid']; $rsl=mysqli_query($link,$sql); $row=mysqli_fetch_assoc($rsl); mysqli_close($link); } else{ echo"不存在！"; } ?>
        <div class="fid_right">
			<p><img src="/furitp/Public/img/about_top_gk.jpg" alt="公司概况"/></p>
			<p class="fid_rightimg"><a href="index.php"><img src="/furitp/Public/img/home.jpg" alt="HOME"/></a>><a href="#">关于孚日</a>><?php echo $row['Title'];?></p>
			<div class="fid_rightgai">
            <h1><?php echo $row['Title'];?></h1>
            <p><?php echo $row['Contents'];?></p>
        </div>
        </div>
	</div>
	<?php
 require './footer.php'; ?>
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
var a =0;
w = window.setInterval(show,2000);
function show(){
	if(a>2){
		a=0;
	}else{
		var b = a*1000;
		$(".banner").children("ul").css("margin-left","-"+ b +"px");
		a = a+1;
	}
}
</script>
</body>
</html>