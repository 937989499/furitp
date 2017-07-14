<?php
namespace Admin\Controller;
use Think\Controller;
/**
* 
*/
class ImgController extends Controller
{
	public function index()
	{
		//创建Model对象
		$Img = M("Img");
		//全部获取图书信息(最新的数据排序)
		$imgresult = $Img->select();
		//数据传递给页面,把数据保存在变量中
		$this->assign("imglist",$imgresult);
		//该方法所对应的显示页面
		$this->display("imglist");
	}
}
?>