<?php 
class temp{
	//For accessing static member inside class then "self::" is used instead of $this
	public static $obj_cnt = 0;

	public static function objectCounter(){
		return self::$obj_cnt;
	}
	public function __construct(){
		self::$obj_cnt++;
	}
}
	$a1 = new temp();
	$a2 = new temp();
	$a3 = new temp();

	//For access static members outside of class we have to use classname::
	echo temp::objectCounter();
?>