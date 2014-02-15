<?php


//Prompt user for a sentence.
echo "please enter a sentence in Piglatin \n";
$input = trim(fgets(STDIN));

$sentence = explode(' ', $input);



foreach ($sentence as $array) {
	$ay_gone = substr($array, 0, -2);
	$last_char = substr($ay_gone, -1);
	$rema_cha = substr($ay_gone, 0, -1);
	$english[] = $last_char . $rema_cha;

}

echo implode(' ', $english);
echo "\n";







