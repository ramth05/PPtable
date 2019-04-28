<?php
Class PrimeNumber{
	/*
	* Provide the prime numbers array for the given number of @count
	*/
	function getPrime($count=1){
		if($count < 1) return array();
		
		//we know least prime is 2
		$primeArr = array(2);
		$i = 3;
		while(count($primeArr) < $count){
			$isprime = true;
			for($j=2;$j<$i;$j++){
				if($i%$j == 0){ //if number divided by any other number, means not a prime
					$isprime = false;
					break;
				}
			}
			if($isprime)
				array_push($primeArr,$i);
			//because even number is not a prime number except 2
			$i += 2;
		}
		return $primeArr;
	}
	
	/*
	* Used to get the product of 2 numbers
	*/
	function getProduct($a,$b){
		if(is_numeric($a) && is_numeric($b))
			return $a * $b;
		else
			return null;
	}

}

?>
