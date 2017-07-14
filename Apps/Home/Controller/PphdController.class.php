<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class PphdController extends Controller
{
	public function index()
	{
		$type = in_array($_GET['hid'], array('8','9'))?$_GET['hid']:'8';
		$this->assign('type',$type);

		$Pphd = M("Article");
		$where ="cateid=$type";
		$count = $Pphd->where($where)->count();
	    $p = getpage($count,1);
	    $list = $Pphd->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
	    $this->assign('select', $list); // 赋值数据集
	    $this->assign('page', $p->show());// 赋值分页输出
		$this->assign("pphd",$list);
		$this->display("pphd");
	}
}
?>