<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="utf-8"/>
<title>分类管理</title>
</head>
<link rel="stylesheet" type="text/css" href="/furitp/Public/css/admin.css">
<body>
<div style="width:100%;height:30px;" class="as_top">
	<a href="/furitp/admin.php/Cate/cateaddshow.html">新增</a>
</div>
	<table>
		<tr><td>序号</td><td>分类名称</td><td>PId</td><td>操作</td></tr>
		<?php if(is_array($catelist)): $i = 0; $__LIST__ = $catelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i; if(($mod) == "1"): ?><tr style="color:#333333;background-color:#F7F6F3;"><?php endif; ?>
		<?php if(($mod) == "2"): ?><tr style="color:#284775;background-color:white;"><?php endif; ?>
		<td><?php echo ($cate["id"]); ?></td><td><?php echo ($cate["catename"]); ?></td><td><?php echo ($cate["pid"]); ?></td><td><a href="">编辑</a><a href="">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
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