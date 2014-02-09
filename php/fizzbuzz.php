<?php

// //count from 1 to 100

for ($i = 1; $i <= 100; $i++){
	
	
 	

// print fizz for multiples of three, buzz for multiples of five and fizzbuzz
// for multiples of both three and five.



 	if($i%3 == 0 && $i%5 == 0){
 		echo "fizzbuzz\n";
 	}
 	elseif($i%5 == 0){
 		echo "buzz\n";
 	}
 	elseif($i%3 == 0){
 		echo "fizz\n";
 	}
 	else{
 		echo"$i\n";
 	}

}


