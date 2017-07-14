<?php
	namespace Admin\Controller;
	use Think\Controller;
	use Think\Session;
	//每个控制器都需要继承自Controller
	/**
	* 
	*/
	class UserController extends Controller
	{
		 public function login()
		{
			if (IS_GET) {//表示的是GET请求
				//display方法里表示的是页面的请求路径
				$this->display();
			}
			if(IS_POST){//表示的是POST的请求
				//获取从页面中传递过来的数据，直接存放在变量中
				//I方法就是一个快捷方法，就是用来获取get或者post传来的数据
				$username = I("AdminId","");
				$pwd = I("AdminPwd","");
				//首先实例化模型（可以认为就是从数据库得到的数据模型）
				$User = M("Admin");
				//查询之后的数据就是一个数组
				$reuslt = $User->where("adminid ='$username' and adminpwd = '$pwd'")->field('AdminId,AdminPwd')->select();
				echo U("User/login");
				if (count($reuslt)>0) {
					//保留用户名到session中
					// Session::set('AdminId',$_POST['AdminId']); 
					echo "登陆成功";
					$this->redirect("Book/index");
				}else{
					echo"登陆失败";
				}
			}
		}
		
		/*
		function validateImg(){
			$config = array('fontSize' => , );
		}*/
	}
?>