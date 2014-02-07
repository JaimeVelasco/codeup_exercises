<?php

//define variable as random number.

$number = rand(1 ,100);



//prompt user to guess a number.



//if guess is less tan the number, echo 'HIGHER'.

do {

	fwrite(STDOUT, 'Guess a number between 1 and 100. ');
	$guess = fgets(STDIN);

	if ($guess > $number) {
		echo 'LOWER';
	}

	if ($guess < $number) {
		echo 'HIGHER';
	}

	} while ($guess != $number);

if ($guess == $number) {
	echo "winner\n";
}


exit(0);

//end the program.







