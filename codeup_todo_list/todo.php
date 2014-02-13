<?php


$items = array();


function list_items($list){
   $newvar =  ""; 
    foreach ($list as $key => $value) {  
        $newvar .= "[" . ($key + 1) .  "]" . "$value\t" .  PHP_EOL;
    }
    return $newvar;
}

    

function get_input($upper = FALSE) {
    $input = trim(fgets(STDIN));



    return $upper ? strtoupper($input) : $input;
}
      

do {    


    echo list_items($items);

 
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';
    $input = get_input(TRUE);


    if ($input == 'N') {


        echo 'Enter item: ';
         

        $items[] = trim(fgets(STDIN));  
    }
     

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
       
        
        echo 'Enter item number to remove: ';
        
      
        $key = get_input(TRUE)-1;
       
        
        unset($items[$key]);
        $items = array_values($items);
    }


} while ($input != 'Q');


echo "Goodbye!\n";


exit(0);