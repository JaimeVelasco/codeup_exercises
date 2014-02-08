<?php

//prompt the user for a number
fwrite(STDOUT, "Hello! Pick a number please. ");
	$first_num = trim(fgets(STDIN));

//prompt the user for a second, higher number
fwrite(STDOUT, "Pick a second, greater number. ");
	$second_num = fgets(STDIN);	

//allow the user to choose an increment 
fwrite(STDOUT, "Choose an increment. ");
	$incre = trim(fgets(STDIN));	

//default increment to 1 if user doesn't imput anything
$incre = (empty($incre)) ? 1 : $incre;

//error mesagge for non-numeric values
// do{
// 	if(!is_numeric($incre)){
// 		echo 'I';
// 	}
// }while ($incre) {
// 	# code...
// }




for($i = $first_num; $i <= $second_num; $i += $incre){
	echo "{$i}\n";
}






// $var = (condition) ? this : else;

