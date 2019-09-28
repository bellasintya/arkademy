<?php 
	function sortNumber($string){
		$match = array();
		if(preg_match_all('!\d+!',$string, $match)){
			$length = count($match);
			for($x = 0; $x < $length; $x++){
				for($y = 0; $y < count($match[$x]); $y++){
					$result[$y] = $match[$x][$y];
				}
			}
			$result = implode($result);
			$split 	= str_split($result);
			sort($split);
			for($x = 0; $x < count($split); $x++){
				echo $split[$x];
			}
		}
		else{
			echo "No number found in parameter";
		}
	}
	sortNumber("48172a94");
	echo "<br>";
	sortNumber("abc");
	echo "<br>";
	sortNumber("94a");
?>