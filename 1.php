<?php 

	function biodata(){
		$myObj = new \stdClass();
	    $myObj->name = "Bella Sintya Dewi";
	    $myObj->age = 21;
	    $myObj->address = "Bandung";
	    $myObj->hobbies = array("Membaca Buku", "Traveling", "Taekwondo");
	    $myObj->is_married = false;
	    $myObj->list_school = array('name'=>'TelkomUniversity', 'year_in' => 2016, 'year_out'=> 2019, 'major'=>'Diploma of Information System');
	    $myObj->skills = array('skill_name' => 'programming', 'level' => 'beginner');
	    $myObj->interest_in_coding = true;

	    $myJSON = json_encode($myObj);
	    echo $myJSON; 
	}

	biodata();
?>