<?php

//Prompt user for a sentence.
echo"Hello, this is an english to piglatin translator.\n";
echo "Please enter a sentence in English \n";
$input = trim(fgets(STDIN));

$sentence = explode(' ', $input);



//iterate through each value in the array and 

foreach ($sentence as $array) {
	$first_char = strtolower(substr($array, 0, 1));
 	$rem_char = substr($array, 1);	
 	$piglatin[] = $rem_char . $first_char . "ay";

}	


echo"The translated sentence is:\n";
echo implode(' ', $piglatin);
echo"\n";
