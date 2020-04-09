<?php 
//In this example we have multiple dishes and sweet is included in one of the dish not for every dish so we declare sweet as trait

class SemiSpecialThali {
	public function Gravy(){
		echo "Gravy is Included<br>";
	}
	public function Rice(){
		echo "Rice is Included<br>";
	}
}
//Trait for Sweets because sweet and cold drinks are only allowed in special Dish
trait Sweets{
	public function sweet(){
		echo "Sweet is Included<br>";
	}
}
//Trait for cold drinks
trait Drinks{
	public function cold_drinks(){
		echo "Cold Drinks are Included<br>";
	}
}
class SpecialThali extends SemiSpecialThali {
	//Using above defined traits 
	use Sweets,Drinks;
}

//semi special thali
$semi = new SemiSpecialThali();
echo "******* You have ordered semi special thali.*******<br>";
echo $semi->Gravy();
echo $semi->Rice();

//special Thali
$spl = new SpecialThali();
echo "******* You have ordered Special thali******* <br>";
echo $spl->Gravy();
echo $spl->Rice();
echo $spl->sweet();
echo $spl->cold_drinks();


?>