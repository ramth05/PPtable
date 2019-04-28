<?php
require "../PrimeNumber.php";

class PrimeNumberTest extends PHPUnit_Framework_TestCase
{
  private $objPrime;	
  
  function __construct(){
	  $this->objPrime = new PrimeNumber();
  }		
  public function test_getProduct()
  {
	
	$this->assertEquals(10, $this->objPrime->getProduct(2,5));
	$this->assertNotEquals(8, $this->objPrime->getProduct(3,2));
  }
  
  public function test_getPrime()
  {
	$this->assertEquals(array(), $this->objPrime->getPrime(0));
	$this->assertEquals(array(2), $this->objPrime->getPrime(1));
	$this->assertEquals(array(2,3,5,7), $this->objPrime->getPrime(4));
	$this->assertNotEquals(array(2,4,6,7), $this->objPrime->getPrime(4));
  }
}

?>
