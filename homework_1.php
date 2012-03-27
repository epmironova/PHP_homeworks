<?php
	$number=htmlspecialchars($_GET["number"]);

	if (!is_numeric($number))
		echo 'The parameter is not a number!';
	elseif($number<0 or $number>19999)
		echo 'The parameter is not within the range [0,19999]!';
		elseif(isPrime($number))
			echo 'The number '.$number.' is prime !';
			else
				echo 'The number '.$number.' is NOT prime!"';

					
	/*given number is prime, when devided by an integer number from 
	2 to the middle of its range, doesn't give an integer*/				
	function isPrime($num){
		$div_limit=$num/2;
		for($i=2; $i<=$div_limit; $i++){
			if(is_int($num/$i))
			return false;
		}
		return true;
	}			
?>


