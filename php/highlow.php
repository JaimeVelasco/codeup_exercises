<?php

//define variable as random number.


$number = rand($argv[1], $argv[2]);

//prompt user to guess a number.
fwrite(STDOUT, "Guess a number between $argv[1] and $argv[2]. ");
	$guess = fgets(STDIN);	

do {
	
	
	//Hints
	if ($guess > $number) {
		echo "LOWER\n";
	}

	if ($guess < $number) {
		echo "HIGHER\n";
	} 
	fwrite(STDOUT, "Try again!");
	$guess = fgets(STDIN);

} while($guess != $number); 


if ($guess == $number) {
	echo "WINNER\n";
}




//end the program.

exit(0);





