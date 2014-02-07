<?php

//define variable as random number.

$number = rand(1 ,100);
$guess = 0;


while ($guess != $number){

	fwrite(STDOUT, 'Guess a number between 1 and 100. ');
	$guess = fgets(STDIN);

	if ($guess > $number) {
		echo "LOWER\n";
	}

	if ($guess < $number) {
		echo "HIGHER\n";
	}

} 

echo "WINNER\n";

exit(0);

//end the program.







