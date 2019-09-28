<?php

	$username_invalid 	= 'coba12';
	$username_valid 	= 'devina';
	$password_invalid	= 'p@ssW0rd9';
	$password_valid     = '7Ark@demi';

	function valid_username($username){
		if(preg_match('/[^0-9]{6}/',$username)){
			echo $username." benar, "; 
		}
		else{
			echo $username." salah, ";
		}
	}

	function valid_password($password){
		if(preg_match('/^7{1,}+[A-Z]{1}/', $password)){
			echo $password." benar, ";
		}
		else{
			echo $password." salah, ";
		}
	}

	valid_username($username_invalid);
	valid_username($username_valid);
	valid_password($password_valid);
	valid_password($password_invalid);
?>