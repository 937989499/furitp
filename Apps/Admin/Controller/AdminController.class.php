<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class AdminController extends Controller
{
	public function index()
	{
		$Admin = M("Admin");
		$where ="1=1";
		$count = $Admin->where($where)->count();
	    $p = getpage($count,1);
	    $list = $Admin->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
	    $this->assign('select', $list); // 赋值数据集
	    $this->assign('page', $p->show());// 赋值分页输出
	    $this->assign("adminlist",$list); 
		$this->display("adminlist");
		
	}
	public function adminadd()
	{
		$myid = I("uid","");
		$myname = I("uname","");
		$myphone = I("uphone","");
		$data["AdminId"] = $myid;
		$data["UserName"] = $myname;
		$data["Phone"] = $myphone;
		$dbceshi = D("Admin");
		$dbceshi->dbadd("Admin",$data);
		$this->redirect("Admin/index");
	}
	public function admindel()
	{
		$dbceshi = D("Admin");
		$m = $_GET['aid'];
		$dbceshi->dbdel("Admin",$m);
		$this->redirect("Admin/index");
	}
	public function adminupdate()
	{
		$myid = I("uid","");
		$myname = I("uname","");
		$myphone = I("uphone","");
		$data["AdminId"] = $myid;
		$data["UserName"] = $myname;
		$data["Phone"] = $myphone;
		$dbceshi = D("Admin");
		$m = $_GET['aid'];
		$dbceshi->dbupdate("Admin",$m,$data);
		$this->redirect("Admin/index");
	}
	public function editshow(){
	    $Admin=M('Admin');
	    $id=(int)$_GET['aid'];
	    $list=$Admin->where("id=$id")->find();
	    $this->assign('data',$list);
	    $this->assign('title','显示用户编辑信息'); 
	    $this->display();
   }
	public function userLogout()
    {
        session(null);
        //session_destroy();
        //unset($_SESSION);
        $this->redirect("User/login");
    }
}
?>