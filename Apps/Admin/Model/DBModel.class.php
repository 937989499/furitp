<?php
namespace Admin\Model;
use Think\Model;
/**
* 
*/
class DBModel extends Model
{
	public function dbadd($a,$data)
	{
		//${$a} = M("{$b}");
		//${$a}->add($data);
		"$".$a = M("$a");
		"$".$a->add($data);
	}
	public function dbdel($b,$c)
	{
		"$".$b = M("$b");
		"$".$b->where("id=$c")->delete();
	}
	public function dbupdate($d,$e,$data)
	{
		"$".$d = M("$d");
		"$".$d->where("id=$e")->save($data);
	}
}
?>