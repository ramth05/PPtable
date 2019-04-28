# prime_prod_table
Print the Prime numbers product table based on count ( how many numbers)

# Files & folders:
  PrimeNumber.php : Class for generating prime numbers and its product
  
  PrimeProdTable.php : Used to run from CLI to print the table
  
  ./test/PrimeNumberTest.php: Contains unit test for PrimeNumber class based on phpunit test framework.
  
# Uses:

From CLI just run:
```bash
php PrimeProdTable.php --count <pass the count for prime numbers> 
```
# How to run test file:
 Reuirement: [phpunit](https://phpunit.de/) must be installed.
 Go to test folder and run
 ```bash
 phpunit .
 
 or 
 
 phpunit PrimeNumberTest.php
 ```

