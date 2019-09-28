<?php 
	
	function thirdHigest($test){
		if(!is_array($test)){
			echo "Parameter should be an array";
		}
		else{
			if(count($test) < 3){
				echo "Minimal array length is 3";
			}
			else{
				for($x = 0; $x < count($test); $x++){
					if(preg_match('/-[0-9]\d|\d/', $test[$x])){
						$number[$x] = (int)$test[$x] ;
					}
				}
				rsort($number);
				for($y = 0; $y < count($number); $y++){
					$number[$y];
				}
				echo $number[2];
			}
		}
	}

	thirdHigest([1,2,3,4,5,6]);
	echo "<br>";
	thirdHigest("bukan array nih");
	echo "<br>";
	thirdHigest([1,2]);
	echo "<br>";
	thirdHigest([107,1,-4,'a','true',0,-77]);
?>