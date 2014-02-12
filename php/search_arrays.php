<?php



function check_array($names, $compare){
	if (is_array($names) || is_array($compare)) {
		echo 'TRUE' . PHP_EOL;
	}else{
		echo 'FALSE' . PHP_EOL;
	}
}




// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];



check_array($names, $compare);



