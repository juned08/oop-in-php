<?php 
abstract class person {
	// abstract method for getdetails becoz we only know the name of that function and not the logic. the defination of this function will be in its child class
	abstract public function getDetails();

	public function bloodGrp(){
		echo "Blood Group is A.<br>";
	}
}

//Getdails is used for student and teacher 
class student extends person {
	// Get Details overriding here for students
	public function getDetails(){ 
		echo "Student Name is Juned <br>";
	}
}

class teacher extends person {
	// Get Details overriding here for teacher
	public function getDetails(){ 
		echo "Teacher Name is Kaify<br>";
	}
}

//creating objects of child class becoz we cannot create abstract class object
$stud = new student();
$teach = new teacher();

//For Student
$stud->getDetails();
$stud->bloodGrp();

//For Teacher
$teach->getDetails();
$teach->bloodGrp();
?>