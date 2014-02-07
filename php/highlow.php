<?php

//define variable as random number.

$number = rand(1 ,100);



//prompt user to guess a number.

fwrite(STDOUT, 'Guess a number between 1 and 100. ');

$guess = fgets(STDIN);

//if guess is less tan the number, echo 'HIGHER'.

if ($guess < $number) {
	echo "HIGHER\n";
}

//if guess is more tan the number, echo 'LOWER.

if ($guess > $number) {
	echo "LOWER\n";
}

//if user is right, echo 'WINNER'.

if ($guess == $number) {
	echo "WINNER!\n";
}

//end the program.

exit(0);





