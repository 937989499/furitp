<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class UserController extends Controller
{
	public function index()
	{
		$this->display("./Apps/Home/View/index.html");
	}
}
?>