<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="UTF-8" />
<title>账户管理</title>
<link rel="stylesheet" type="text/css" href="/furitp/Public/css/admin.css">
</head>
<body>
<div style="width:100%;height:30px;" class="as_top">
	<a href="/furitp/admin.php/Admin/addshow.html">新增</a>
</div>
<table>
	<tr><td>序号</td><td>账号</td><td>姓名</td><td>电话</td><td>操作</td></tr>
	<?php if(is_array($adminlist)): $i = 0; $__LIST__ = $adminlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$admin): $mod = ($i % 2 );++$i; if(($mod) == "1"): ?><tr style="color:#333333;background-color:#F7F6F3;"><?php endif; ?>
		<?php if(($mod) == "2"): ?><tr style="color:#284775;background-color:white;"><?php endif; ?>
		<td><?php echo ($admin["id"]); ?></td><td><?php echo ($admin["adminid"]); ?></td><td><?php echo ($admin["username"]); ?></td><td><?php echo ($admin["phone"]); ?></td><td><a href="/furitp/admin.php/Admin/editshow/aid/<?php echo ($admin["id"]); ?>">编辑</a><a href="/furitp/admin.php/Admin/admindel/aid/<?php echo ($admin["id"]); ?>" target="_blank">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <table>
<tr class="content">
        <!--<td colspan="3" bgcolor="#FFFFFF"> <?php echo ($page); ?></td>-->
        <td colspan="5" bgcolor="#FFFFFF"><div class="pages">
            <?php echo ($page); ?>
        </div></td> 
      </tr>
</table>
</body>
</html>