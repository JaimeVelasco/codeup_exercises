<?php 


echo "How many people will eat only 1 slice of pizza: ";
$one_slice = trim(fgets(STDIN));
echo "How many people will eat 2 slices of pizza: ";
$two_slice = trim(fgets(STDIN));
echo "How many people will eat 3 slices of pizza: ";
$three_slice = trim(fgets(STDIN));
echo "How many people will eat 4 slices of pizza: ";
$four_slice = trim(fgets(STDIN));

$two_slice *= 2;
$three_slice *= 3;
$four_slice *= 4;

$total_slices = $one_slice + $two_slice + $three_slice + $four_slice;

if ($total_slices >= 7) {
	$large = $total_slices / 8;
	if ($large < 1) {
		$large_pizzas = ceil($large);
		$medium_pizzas = 0;
		$small_pizzas = 0;
	} else {
		$large_pizzas = floor($large);
		$remainder_large = $total_slices % 8;
		$medium = $remainder_large / 6;
		$medium_pizzas = floor($medium);
		$remainder_medium = $remainder_large % 6;
		$small = $remainder_large / 4;
		$small_pizzas = ceil($small);
	}
} elseif ($total_slices > 4 && $total_slices <= 6) {
	$medium = $total_slices / 6;
	$medium_pizzas = ceil($medium);
	$large_pizzas = 0;
	$small_pizzas = 0;
} elseif ($total_slices != 0) {
	$small_pizzas = 1;
	$large_pizzas = 0;
	$medium_pizzas = 0;
} else {
	$small_pizzas = 0;
	$large_pizzas = 0;
	$medium_pizzas = 0;
}

echo "Large Pizzas: $large_pizzas " . PHP_EOL;
echo "Medium Pizzas: $medium_pizzas " . PHP_EOL;
echo "Small Pizzas: $small_pizzas " . PHP_EOL;
