<?php 

// isPrime:
// A prime number is a whole number greater than 1 whose only factors are 1 and itself. A factor is a whole numbers that can be divided evenly into another number. The first few prime numbers are 2, 3, 5, 7, 11, 13, 17, 19, 23 and 29. Numbers that have more than two factors are called composite numbers.

// Checks if the provided integer is a prime number.

// Tips
	// floor(0.60) -> Round numbers down to the nearest integer: (0.60) = 0, (5.1) = 5
	// sqrt(4) -> 2 -> Return the square root of different numbers: 4 = 2, 0.64 = 0.8, -9 = NAN

function isPrime($number){
	$boundary = floor(sqrt($number));
	for($i = 2; $i <= $boundary; $i++){
		if ($number % $i === 0) {
			echo 'Not prime Number';
			return false;
		}
	}
	return $number >=2;
}

// Example 
echo isPrime(3); // true or 1
echo isPrime(4); // false or Not prime Number
echo isPrime(5); // true or 1
