<?php		
	$arr = range(20, 1000, 37);	
	
	function find_3_prime(){
		global $arr;
		$i=0;
		foreach($arr as $value){
			if(is_prime($value)){			
				$i++;
				if($i==3)
					echo 'The third prime number from the array is '.$value.'.<br/>';
			}	
		}
	}
	
	/*given number is prime, when devided by an integer number from 
	2 to the middle of its range, doesn't give an integer*/				
	function is_prime($num){
		$div_limit=$num/2;
		for($i=2; $i<=$div_limit; $i++){
			if(is_int($num/$i))
			return false;
		}
		return true;
	}
	
	function check_exists($num){
		global $arr;
		if(in_array($num, $arr))
			echo 'The number '.$num.' exist in the array.<br/>';
		else
			echo 'The number '.$num.' does not exist in the array.<br/>';
	}
	
	find_3_prime();
	check_exists(146);
	check_exists(284);
	check_exists(871);
	
?>