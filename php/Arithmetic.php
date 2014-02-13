	<?php


//Validate all the arguments and display an error if not numeric

function validate($a, $b) {
	if (!is_numeric($a) || !is_numeric($b)) {
		echo "ERROR: both {$a} and {$b} must be numbers\n";
//Make the error messages show the values of the arguments.   
			var_dump($a);
			var_dump($b);
	    return true;	   
	}else{
		return false;
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
   if (validate ($a, $b) || ($b == 0)) {    
    echo "Cannot divide by 0 dummy\n"; 
	    return false; 
   }else{
      	return ($a / $b);
		}
}

function modulus($a, $b) {
	validate ($a, $b);
	return ($a % $b);
}

	 echo add(3, 5) . PHP_EOL;
	 echo subtract(2, 5) . PHP_EOL;
	 echo multiply(4, 4) . PHP_EOL;
	 echo divide(34, 13) . PHP_EOL;
	 echo modulus(3, 5) . PHP_EOL;

