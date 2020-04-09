<?php
Class Fruits{
	//Constructor 
	public function __construct(){
		echo "Constructor Called.<br>";
	}
	// Member variables
	public $name  = "Mango";
	public $price = 100;

	//Member Functions
	public function increase_rate(){
		// When you are using -> Operator then $ should be removed from variable
		echo $this->price+10;
		echo "<br>";
	}

	public function decrese_rate(){
		echo $this->price-10;
		echo "<br>";
	}
}

	// Object Creation
	$fr = new Fruits;
	echo "Fruit : ".$fr->name."<br>";

	// Calling function using Object
	$fr->increase_rate();

  //===============================  Inheritance  ================================= 
  // In this example we are using all properties of fruit class in export class with export class functionality as well
	
	class Export extends Fruits { //Derived class, Child class, Sub class
		public $is_importable = "yes";
	}	

	//Creating object of child class
	echo "<br>Inheritance Starts";
	$ex = new Export();
	echo $ex->name;
	$ex->decrese_rate();
	echo " Importable : ";
	echo $ex->is_importable;
  //============================== Inheritance Ends =============================== 
?>