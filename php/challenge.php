<?php






for ($i = 99; $i >= 1; $i--) {
$j = $i -1;
if ($i > 2) {
	echo "$i bottles of beer on the wall $i bottles of beer. Take one down and pass it around $j bottles of beer on the wall.\n";
}elseif ($i == 2) {
	echo "$i bottles of beer on the wall $i bottles of beer. Take one down and pass it around $j bottle of beer on the wall.\n";
}elseif ($i == 1) {
	echo "$i bottle of beer on the wall $i bottle of beer. Take one down and pass it around no more bottles of beer on the wall.\n";
}else{
	echo "nothing";
}
		
 }		 	


