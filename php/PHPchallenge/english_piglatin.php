<?php

//Prompt user for a sentence.
echo "please enter a sentence in English \n";
$input = trim(fgets(STDIN));
//Explode string inet_ntop(in_addr)
$sentence = explode(' ', $input);



//iterate through each value in the array and 

foreach ($sentence as $array) {
	$first_char = strtolower(substr($array, 0, 1));
 	$rem_char = substr($array, 1);	
 	$piglatin[] = $rem_char . $first_char . "ay";

}	

echo implode(' ', $piglatin);
