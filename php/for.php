<?php


fwrite(STDOUT, "Hello! Pick a number please. ");
	$first_num = trim(fgets(STDIN));

fwrite(STDOUT, "Pick another number. ");
	$second_num = fgets(STDIN);	

fwrite(STDOUT, "Choose an increment. ");
	$incre = trim(fgets(STDIN));	

$incre = (empty($incre)) ? 1 : $incre;


for($i = $first_num; $i <= $second_num; $i += $incre){
	echo "{$i}\n";
}


// $var = (condition) ? this : else;

