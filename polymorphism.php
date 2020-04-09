<?php
//Polymorphism is achived by Interface or by abstract class
//In this example same function cal_salary is used for different purpose like : for permanent employees and for contract based employee
interface salary{
	public function cal_salary();
}

class Permanent implements salary{
	public $sal_amt;

	public function __construct($amount){
		$this->sal_amt = $amount;
	}
	//we dont use any formula to calcualte permanent staff's salary 
	public function cal_salary(){
		return $this->sal_amt;
	}
}

class Contract implements salary{
	public $per_day_amt;
	public $present_day_amt;

	public function __construct($p,$d){
		$this->per_day_amt = $p;
		$this->present_day_amt = $d;
	}

	//Contract based formula in amount * Present Days
	public function cal_salary(){
		return $this->per_day_amt * $this->present_day_amt;
	}
}

//Creating obejct and calling function respectively
$perm_staff = new Permanent(35000);
echo "Permanent Staff Salary : ";
echo $perm_staff->cal_salary();

echo "<br>";
echo "Contract Based Staff Salary : ";
$cont_staff = new Contract(500,29);
echo $cont_staff->cal_salary();

?>