<?php
	function countChar($string, $char){ 
		if(substr_count($string, $char) > 0){
			echo "O utput: ".substr_count($string, $char);
		}
		else{
			echo "Not found!";
		}
	}
	countChar("arkademy", "a");
	echo "<br>";
	countChar("javascript", "x");
?>