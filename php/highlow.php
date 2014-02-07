<?php

//define variable as random number.


$number = rand($argv[1], $argv[2]);



do {

	//prompt user to guess a number.
	fwrite(STDOUT, 'Guess a number between 1 and 100. ');
	$guess = fgets(STDIN);

	//Hints
	if ($guess > $number) {
		echo "LOWER\n";
	}

	if ($guess < $number) {
		echo "HIGHER\n";
	}

} while($guess != $number);

if ($guess == $number) {
	echo "WINNER\n";
}


exit(0);

//end the program.







