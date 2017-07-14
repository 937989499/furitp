<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class CateController extends Controller
{
	public function index()
	{
		//创建Model对象
		$Cate = M("Cate");
		//全部获取图书信息(最新的数据排序)
		$cateresult = $Cate->select();
		//数据传递给页面,把数据保存在变量中
		$this->assign("catelist",$cateresult);
		//该方法所对应的显示页面
		$this->display("catelist");
	}
}
?>