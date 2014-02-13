<?php


$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function search($name, $array) {
	$search = array_search($name, $array);
	if (is_numeric($search)) {
		return TRUE;
	} else{
		return FALSE;
	}
}

function compare($array1, $array2) {
	$count = 0;
	foreach ($array1 as $key => $value) {
		$search = array_search($value, $array2);
		if (is_numeric($search)) {
			$count++;
		}
	}
	return $count;
}




var_dump(search('Tina', $names));
var_dump(search('Bob', $names));

echo "There are " . compare($names, $compare) . " names in common.\n";




