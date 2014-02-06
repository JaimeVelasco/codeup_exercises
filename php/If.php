<?php 


$a = 1;
$b = 31;
$c = 10;

if ($a < $b) {
	echo "$a is smaller than $b\n";
}
else {
	echo "$b is not greater than $a\n";
}



if ($b >= $c) {
	echo "$b is greater than or equal to $c\n";
}
else {
	echo "$b is less than or equal to $c\n";
}



if ($b == $c) {
	echo "$b is equal to $c\n";
}
elseif ($b != $c){
	echo "$b is not equal to $c\n";
}
else {
	echo "$b is nothing like $c\n";
}

?>


