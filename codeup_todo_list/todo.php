<?php

// Create array to hold list of todo items
$items = array();

// List array items formatted for CLI
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN

function list_items($list){
   $newvar =  ""; 
    foreach ($list as $key => $value) {  
        $newvar .= "[" . ($key + 1) .  "]" . "$value\t" .  PHP_EOL;
    }
    return $newvar;
}

    
// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true

function get_input($upper = FALSE) {
    $input = trim(fgets(STDIN));

// Return filtered STDIN input

    return $upper ? strtoupper($input) : $input;
}
      
// The loop!
do {    

// Echo the list produced by the function    
    echo list_items($items);

 // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';
    $input = get_input(TRUE);

// Check for actionable input
    if ($input == 'N') {

// Ask for entry
        echo 'Enter item: ';
         
// Add entry to list array
        $items[] = trim(fgets(STDIN));  
    }
// Add (S)ort items to menu      

    elseif ($input == 'S') {
        echo '(A) to Z or (Z) to A? : ';
        $input = get_input(TRUE);
            if ($input == 'A') {
                sort($items);                
            }elseif ($input == 'Z') {
                rsort($items);
            }
    }
    elseif ($input == 'R') {
       
        // Remove which item?
        echo 'Enter item number to remove: ';
        
        // Get array key
        $key = get_input(TRUE)-1;
       
        // Remove from array
        unset($items[$key]);
        $items = array_values($items);
    }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);