<?php 
namespace demo { // namescpace declaration should be first line of you code
	class abc{
		function test(){
			echo "calling from abc class of Demo namespace";
		}
	}
}
namespace demo2 {
	class abc{
		function test(){
			echo "Calling from abc of Demo2 namespace";
		}
	}
	//Creating object of abc class from demo namspace(another namespace)
	/* 
		1. Using "use" keyword */
		use demo\abc as demo;	
		$obj = new demo(); 
		echo $obj->test();
}

?>