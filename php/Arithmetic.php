<?php


//Validate all the arguments and display an error if not numeric
function validate($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
    	
	    echo "ERROR: both values must be numbers" . "\n";
	    exit(0);
	}
}

function add($a, $b) {
    validate ($a, $b);
    echo ($a + $b) . "\n";
}

function subtract($a, $b) {
    validate ($a, $b);
    echo ($a - $b) . "\n";
}

function multiply($a, $b) {
    validate ($a, $b);
    echo ($a * $b) . "\n";
}


//echo error if user tries to divide by 0.

function divide($a, $b) {
   validate ($a, $b);
  //  if ($a === 0 || $b === 0) {
  //     	echo "Cannot divide by 0 dummy \n";
  //  }else{
  //     	echo ($a / $b) . "\n";
		// }
}

function modulus($a, $b) {
	validate ($a, $b);
	echo ($a % $b) . "\n";
}

    	add(3, 5);
		subtract(20, 12);
		multiply(4, 8);
		divide(200, 0);
		modulus(3, 5);

