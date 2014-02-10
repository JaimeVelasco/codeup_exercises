<?php


$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

//construct a loop that iterates through each book and then each book's keys and values.
//Output the book's title and list the key value parts for the data.

foreach ($books as $title => $book) {
	// echo $title . "\n";
	// foreach ($book as $key => $value){ 
	//  	echo $key . " " . $value . "\n";	
	//  }
	if ($book['published'] > 1950 {
		echo $title . "\n";
		echo  . "\n";
	}








	// if ('published' >= 1950) {
	// 	echo "$key _ $value";
	// }
	// else "\n";
}
