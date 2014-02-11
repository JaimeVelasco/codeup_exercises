<?php


//Validate all the arguments and display an error if not numeric
function validate($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {

//Make the error messages show the values of the arguments.   

	    return "ERROR: both values must be numbers\n";

	    var_dump($a);
	    var_dump($b);
	   
	}else
		{return (FALSE);
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
	return (FALSE);  
   }else{
      	return ($a / $b);
		}
}

function modulus($a, $b) {
	validate ($a, $b);
	return ($a % $b);
}

	echo add(4, 5) . PHP_EOL;
	echo subtract(2, 'three') . PHP_EOL;
	echo multiply(4, 8) . PHP_EOL;
	echo divide(0, 10) . PHP_EOL;
	echo modulus(3, 5) . PHP_EOL;

