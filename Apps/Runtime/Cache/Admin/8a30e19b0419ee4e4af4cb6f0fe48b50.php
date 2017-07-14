<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta charset="UTF-8" />
<title>账户管理</title>
<link rel="stylesheet" type="text/css" href="/furitp/Public/css/editshow.css">
<script type="text/javascript">
	function chakong(){
		var uid = document.getElementById('uid').value;
		var uname = document.getElementById('uname').value;
		var uphone =document.getElementById('uphone').value;
		if(uid==''){
			alert('请填写您的账号！');
			return false;
		}
		if(uname==''){
			alert('请填写您的姓名！');
			return false;
		}
		if(uphone==''){
			alert('请填写您的手机号！');
			return false;
		}
	}
</script>
</head>
<body>
<div class="as_top" style="width:100%;height:30px;">
	<a href="<?php echo U("Admin/index");?>">列表</a>
</div>
<div style="width:100%;height:200px;">
	<form  class="as_form" action="<?php echo U("Admin/adminadd");?>" method="post" onsubmit="return chakong()" >
		<input type="text" placeholder="账号" name="uid" id="uid"/><br/>
		<input type="text" placeholder="姓名" name="uname" id="uname" /><br/>
		<input type="text" placeholder="电话" name="uphone"  id="uphone"/><br/>
		<input type="submit" placeholder="提交" style="margin-top: 10px;width: 100px;height: 30px;" />
	</form>
</div>
</body>
</html>