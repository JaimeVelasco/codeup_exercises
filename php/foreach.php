<?php


$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//Construct a loop that iterates through each value and outputs its type as either integer, 
//float, boolean, array, null, or string.


foreach ($things as $data_type) {

	// if (is_int($data_type)){
	// 	echo "{$data_type} is an integer\n";
	// }
	// elseif(is_float($data_type)) {
	// 	echo "{$data_type} is a float\n";	
	// }
	// elseif (is_bool($data_type)) {
	// 	echo "{$data_type} is a boolean\n";	
	// }
	// elseif (is_array($data_type)) {
	// 	echo "Array is an array\n";
	// }
	// elseif (is_null($data_type)) {
	// 	echo "{$data_type} is null\n";
	// }
	// elseif (is_string($data_type)) {
	// 	echo "{$data_type} is a string\n";
	// }

	if (is_scalar($data_type)){ 
		echo "$data_type\n";
	}
	else {
		echo "\n";
	}


}
