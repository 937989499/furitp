<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="UTF-8" />
<title>账户管理</title>
<style>
.as_top{
	width: 100%;
    background: #e5e5e5;
    height: 30px;
}
.as_top a{
	text-decoration: none;
    height: 30px;
    line-height: 30px;
    margin-left: 20px;
}
.as_form{
	padding-left: 15px;
    border: 1px solid #e5e5e5;
    width: 318px;
}
.as_form input{
	width: 300px;
	height: 20%;
	margin-top: 3%;
}
</style>
</head>
<body>
<div style="width:100%;height:30px;" class="as_top">
	<a href="<?php echo U("Admin/index");?>">列表</a>
</div>

<div style="width:100%;height:200px;" class="as_form">
	<form action="/furitp/admin.php/Admin/adminupdate/aid/<?php echo ($data['id']); ?>" method="post" >
		<input type="hidden"  value="<?php echo ($data['id']); ?>" name="aid" />
		<input type="text" placeholder="账号" value="<?php echo ($data['adminid']); ?>" name="uid" />
		<input type="text" placeholder="姓名" value="<?php echo ($data['username']); ?>" name="uname" />
		<input type="text" placeholder="电话" value="<?php echo ($data['phone']); ?>" name="uphone" />
		<input type="submit" placeholder="保存" />
	</form>
</div>
</body>
</html>