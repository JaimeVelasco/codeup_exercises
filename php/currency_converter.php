<?php




echo "Enter the amount that you want want to convert: $";
$amount = trim(fgets(STDIN));
echo "What currency do you want to convert to? (E)uros, (P)esos, (B)ritish Pounds: ";
$input = strtoupper(trim(fgets(STDIN)))   ;

// echo var_dump($number);

$euro =  0.73;
$pound = 0.60;
$peso = 13;



if ($input == 'E') {
	$euros = $amount * $euro;
	echo "$amount USD is equivalent to $euros Euros\n";
}elseif ($input == 'P') {
	$pesos = $amount * $peso;
	echo "$amount USD is equivalent to $pesos Pesos\n";
}elseif ($input == 'B') {
	$pounds = $amount * $pound;
	echo "$amount USD is equivalent to $pounds Pounds\n";	
}

				

			




?>