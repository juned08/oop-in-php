<?php
interface userdata{
	//We cannot declare variables in interface 
	//only function declaration is allowed 
	//only public access specifier is allowed
	//It is used to achive multiple interitance
	public function fullname();
}
class user implements userdata{
	public function fullname(){
		return "Full Name : Juned Shakur Shaikh";
	}
}

//Object 
$u = new user();
echo $u->fullname();
?>