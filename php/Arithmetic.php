<?php


//Validate all the arguments and display an error if not numeric
function validate($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		
//Make the error messages show the values of the arguments.   
	   
	    echo "ERROR: both values must be numbers\n";
	    var_dump($a);
	    var_dump($b);
	    
	}
}	


function add($a, $b) {
    validate ($a, $b);
    return ($a + $b);
}

function subtract($a, $b) {
    validate ($a, $b);
    return ($a - $b);
}

function multiply($a, $b) {
    validate ($a, $b);
    return ($a * $b);
}


//echo error if user tries to divide by 0.

function divide($a, $b) {
   validate ($a, $b);
   if ($a === 0 || $b === 0) {
      	echo "Cannot divide by 0 dummy";
   }else{
      	return ($a / $b);
		}
}

function modulus($a, $b) {
	validate ($a, $b);
	return ($a % $b);
}

	echo add(3, 5) . PHP_EOL;
	echo subtract('apples', 3) . PHP_EOL;
	echo multiply(4, 8) . PHP_EOL;
	echo divide(200, 0) . PHP_EOL;
	echo modulus(3, 5) . PHP_EOL;

