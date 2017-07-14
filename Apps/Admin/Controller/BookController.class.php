<?php
	namespace Admin\Controller;
	use Think\Controller;
	class BookController extends Controller{
			public function index()
			{
				$this->display("index");
			}
			public function right()
			{
				$this->display("right");
			}
	}
?>