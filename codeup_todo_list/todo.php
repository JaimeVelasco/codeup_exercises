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

        echo 'Would you like to add it to the (B)eginning ot the (E)nd of the list? : ';

            $order_input = get_input(TRUE);

            echo 'Enter item: ';  

            $todo_item = trim(fgets(STDIN));

            if ($order_input == 'B')  {    

                array_unshift($items, $todo_item);
                
            }else{
                 $items[] = $todo_item;
            }                         
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