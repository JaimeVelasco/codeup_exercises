<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($input){

	$array = explode(', ', $input);
	$sortArray = sort($array);
	$popped = array_pop($array);
	return $result = implode(', ', $array) . ", and " . $popped;
	 

	
}

// List of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}." . PHP_EOL;

?>