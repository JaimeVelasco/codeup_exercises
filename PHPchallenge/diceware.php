<?php 


//ask user for a # of words
echo "How many words would you like me to generate?\n";
$wordnumber = trim(fgets(STDIN));



function randomgen (){
	$randomnum ="";
	for ($i=0; $i < 5 ; $i++) { 
		$random = rand(1,6);
		$randomnum = $random.$randomnum;
	}

	return $randomnum;
}

// open word list

	$filename = 'diceware.wordlist.txt';
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	fclose($handle);

// Explode list into an array

	$WordListArray = explode("\n", $contents);

// capture each word and asociated number

	$WordList = array();
	foreach ($WordListArray as $key => $value) {
		$newkey = strval(trim(substr($value, 0, 6)));
		$newvalue = trim(substr($value, 6));
		$WordList[$newkey] = $newvalue;
	}

	$outputStr = '';

for ($i=0; $i < $wordnumber; $i++) { 
	$key = strval(randomgen());
	$outputStr .= $WordList[$key].' ';

}

echo "This are your words:\n$outputStr\n";




?>