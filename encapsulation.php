<?php 
// =============================== Encapsulation ===============================
class tv {
	protected $model;
	private $volumn;

	function __construct($model,$volumn){
		$this->model  = $model;
		$this->volumn = $volumn; 
	}
	public function volumn_up(){
		return $this->volumn+1;
	}

	public function volumn_down(){
		return $this->volumn-1;
	}

	//IF we want to use private member outside of that class then we have to use "Getter" and "Setter" methods like following
	function get_volumn(){
		return $this->volumn;
	}
}

class smart_tv extends tv{
	public $wifi = "yes";

	//If I want to access volumn variable inside this child class then that variable should be protected
	function get_model_child(){
		return $this->model;
	}
}
	$t1 = new tv("LG",20);
	echo $t1->volumn_up();
	echo $t1->volumn_down();

	$t_smart = new smart_tv("Sony",32);
	echo $t_smart->get_volumn(); //private member of base class is access by Getter metthod
	echo $t_smart->get_model_child(); 
?>