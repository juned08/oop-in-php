<?php 
//Overriding means defining same functions in child class with different logic
Class car {
	public function features(){
		echo "Car has power stearing";
	}
}
class smartCar extends car {
	public function features(){
		echo "Car has Smart Features";
	}
}

//Objects 
$car = new car();
$smcar = new smartCar();

$car->features();
echo "<br>";
$smcar->features();
?>