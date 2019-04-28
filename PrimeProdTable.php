<?php
require "PrimeNumber.php";

if (defined('STDIN')) {
	if($argv[1] === "--count" && is_numeric($argv[2])){
		$count = $argv[2];
		if($count < 1) exit;
	}else{
		exit;
	}
} else { 
  exit;
}


$objPrime = new PrimeNumber();
$primeArr = $objPrime->getPrime($count);


//create multiplication table
$lastPrime = $primeArr[count($primeArr)-1];
$maxprimeLen = strlen($lastPrime);
$maxPrdtLen = strlen($lastPrime * $lastPrime)+4;
$table1 = '';
$firstrow = str_repeat(" ",$maxprimeLen).str_pad(" | ",$maxPrdtLen-$maxprimeLen);
$secondrow = str_repeat("-",$maxPrdtLen);
$other="";
foreach($primeArr as $kh => $primeH){
	$firstrow .= str_pad($primeH,$maxPrdtLen);
	$secondrow .= str_repeat("-",$maxPrdtLen);
	$other .= str_pad($primeH . str_repeat(" ",$maxprimeLen-strlen($primeH)) ." | ",$maxPrdtLen);
	foreach($primeArr as $kv => $primeV){
		$other.= str_pad($objPrime->getProduct($primeH ,$primeV),$maxPrdtLen);
	}
	$other .= PHP_EOL;
}
$firstrow .= PHP_EOL;
$secondrow .= PHP_EOL;

$table1 .= $firstrow .$secondrow. $other ;
echo $table1;
?>