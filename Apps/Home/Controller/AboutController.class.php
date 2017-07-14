<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class AboutController extends Controller
{
	public function index()
	{
		$type = in_array($_GET['cid'], array('1','2','3','4','5','6','7'))?$_GET['cid']:'1';
		$this->assign('type',$type);
		$About = M("Article");
		$articlers = $About->where("cateid=$type")->select();
		$this->assign("gsgk",$articlers);
		$this->display("gsgk");
	}
}
?>