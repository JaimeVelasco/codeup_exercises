<?php



function check_array($names, $compare){
	if (!is_array($names) || !is_array($compare)) {
		echo "ERROR: both \$names and \$compare must be arrays\n";
		return false;
	}else{
		return true;
	}
}




// first names
$names = ['Tina', 'Dana', 'Mike', "Amy", 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


foreach ($names as $value) {
	$query = ['Tina', 'Bob'];
	$result = array_search($query, $names);
}

if ($result == false) {
	echo 'something';
}



check_array($names, $compare);




