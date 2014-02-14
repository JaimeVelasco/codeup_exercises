<?php




echo "Enter the amount that you want want to convert: $";
$amount = trim(fgets(STDIN));
echo "What currency do you want to convert to? (E)uros, (P)esos, (B)ritish Pounds: ";
$input = trim(fgets(STDIN));

// echo var_dump($number);

$euro =  0.73;
$pound = 0.60;
$peso = 13;



	if ($input == "E || e") {
	$euro = $amount * $euro;
	echo "$amount USD amounts to $euro Euros";
}elseif ($input == "P || p") {
	$pound = $amount * $peso;
	echo "$amount USD amounts to $pound Pounds";
}elseif ($input == "B || b") {
	$peso = $amount * $pound;
	echo "$amount USD amounts to $peso Pesos";	
}
				

			




?>