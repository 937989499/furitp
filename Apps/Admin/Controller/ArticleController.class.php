<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
/**
* 
*/
class ArticleController extends Controller
{
	public function index()
	{
		//创建Model对象
		$Article = M("Article");
		//全部获取图书信息(最新的数据排序)
		$where ="1=1";
		$count = $Article->where($where)->count();
	    $p = getpage($count,5);
	    $list = $Article->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
		//数据传递给页面,把数据保存在变量中
		$this->assign('select', $list); // 赋值数据集
	    $this->assign('page', $p->show());// 赋值分页输出
		$this->assign("articlelist",$list);
		//该方法所对应的显示页面
		$this->display("articlelist");
	}
	public function articleadd()
	{
		//过滤数据
			$title= I("wztitle","");
			$contants = I("wzcontants","");
			$url = I("wzurl","");
			$author = I("wzauthor","");
			$addtime = I("wzaddtime","");
			$uptime = I("wzuptime","");
			$cate = I("wzcate","");
		//把数据按顺序存入$data
			$data["Title"] = $title;
			$data["Contents"] = $contants;
			$data["ImgUrl"] = $url;
			$data["Author"] = $author;
			$data["AddDateTime"] = $addtime;
			$data["UpdateDateTime"] = $uptime;
			$data["CateId"] = $cate;
		//实例化Model层
			$dbceshi = D("Article");
			$dbceshi->dbadd("Article",$data);
			$this->redirect("Article/index");
	}
	public function articledel()
	{
		$dbceshi = D("Article");
		$m = $_GET['aid'];
		$dbceshi->dbdel("Article",$m);
		$this->redirect("Article/index");
	}
	public function articleupdate()
	{
		//过滤数据
			$title= I("wztitle","");
			$contants = I("wzcontants","");
			$url = I("wzurl","");
			$author = I("wzauthor","");
			$addtime = I("wzaddtime","");
			$uptime = I("wzuptime","");
			$cate = I("wzcate","");
		//把数据按顺序存入$data
			$data["Title"] = $title;
			$data["Contents"] = $contants;
			$data["ImgUrl"] = $url;
			$data["Author"] = $author;
			$data["AddDateTime"] = $addtime;
			$data["UpdateDateTime"] = $uptime;
			$data["CateId"] = $cate;
		//实例化Model层
			$dbceshi = D("Article");
			$m = $_GET['aid'];
			$dbceshi->dbupdate("Article",$m,$data);
			$this->redirect("Article/index");
	}
	public function articleditshow(){
	    $Article = M("Article");
	    $id=(int)$_GET['aid'];
	    $list=$Article->where("id=$id")->find();
	    $this->assign('data',$list);
	    $this->assign('title','显示用户编辑信息'); 
	    $this->display();
   }
}
?>