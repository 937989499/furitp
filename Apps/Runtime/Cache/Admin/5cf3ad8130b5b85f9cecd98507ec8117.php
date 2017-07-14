<?php if (!defined('THINK_PATH')) exit();?>
<html>
<head>
<meta charset="utf-8"/>
<title>文章管理</title>
<link rel="stylesheet" type="text/css" href="/furitp/Public/css/admin.css">
</head>
<body>
<div style="width:100%;height:30px;" class="as_top">
	<a href="/furitp/admin.php/Article/articleaddshow.html">新增</a>
</div>
	<table>
		<tr><td>序号</td><td>标题</td><td>文章内容</td><td>图片地址</td><td>作者</td><td>增加时间</td><td>更新时间</td><td>类别</td><td>操作</td></tr>
		<?php if(is_array($articlelist)): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i; if(($mod) == "1"): ?><tr style="color:#333333;background-color:#F7F6F3;"><?php endif; ?>
		<?php if(($mod) == "2"): ?><tr style="color:#284775;background-color:white;"><?php endif; ?>
		<td><?php echo ($article["id"]); ?></td><td><?php echo ($article["title"]); ?></td><td><?php echo (msubstr($article["contents"],0,30,'utf-8',true)); ?></td><td><?php echo ($article["imgurl"]); ?></td><td><?php echo ($article["author"]); ?></td><td><?php echo ($article["adddatetime"]); ?></td><td><?php echo ($article["updatedatetime"]); ?></td><td><?php echo ($article["cateid"]); ?></td><td><a href="/furitp/admin.php/Article/articleditshow/aid/<?php echo ($article["id"]); ?>">编辑</a><a href="/furitp/admin.php/Article/articledel/aid/<?php echo ($article["id"]); ?>">删除</a></td></tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
  <table>
     <tr class="content">
        <!--<td colspan="3" bgcolor="#FFFFFF"> <?php echo ($page); ?></td>-->
        <td colspan="9" bgcolor="#FFFFFF"><div class="pages">
            <?php echo ($page); ?>
        </div></td> 
      </tr>
  </table>
</body>
</html>