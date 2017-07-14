<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="utf-8"/>
<title>图片管理</title>
<link rel="stylesheet" type="text/css" href="/furitp/Public/css/admin.css">
</head>
<body>
<div style="width:100%;height:30px;" class="as_top">
	<a href="/furitp/admin.php/Img/imgaddshow.html">新增</a>
</div>
	<table>
		<tr><td>序号</td><td>标题</td><td>图片地址</td><td>操作</td></tr>
		<?php if(is_array($imglist)): $i = 0; $__LIST__ = $imglist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i; if(($mod) == "1"): ?><tr style="color:#333333;background-color:#F7F6F3;"><?php endif; ?>
		<?php if(($mod) == "2"): ?><tr style="color:#284775;background-color:white;"><?php endif; ?>
		<td><?php echo ($img["id"]); ?></td><td><?php echo ($img["title"]); ?></td><td><?php echo ($img["url"]); ?></td><td><a href="">编辑</a><a href="">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	 <table>
<tr class="content">
        <!--<td colspan="3" bgcolor="#FFFFFF"> <?php echo ($page); ?></td>-->
        <td colspan="4" bgcolor="#FFFFFF"><div class="pages">
            <?php echo ($page); ?>
        </div></td> 
      </tr>
</body>
</html>