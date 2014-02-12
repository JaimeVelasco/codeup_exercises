<?php



$nothing = NULL;
$something = '';
$array = array(1,2,3);

// Create a funciton that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"
function varCheck($var, $var_name) {
	unset($nothing);
	if (empty($var_name)) {
		echo "$var_name is EMPTY" . PHP_EOL;
	} else {
		echo "$var_name is Not EMPTY" . PHP_EOL;
	}
	if (isset($var_name)) {
		echo "$var_name is SET" . PHP_EOL;
	} else {
		echo "$var_name is Not SET" . PHP_EOL;
    }
}
// TEST: If var $nothing is set, display '$nothing is SET'
// TEST: If var $nothing is empty, display '$nothing is EMPTY'
echo varCheck($nothing, '$nothing');

// TEST: If var $something is set, display '$something is SET'
echo varCheck($something, '$something');
// Serialize the array $array, and output the results
$serialTest = serialize($array);

echo $serialTest . PHP_EOL;
// Unserialize the array $array, and output the results
$unserialTest = unserialize($serialTest);

var_dump($unserialTest);
