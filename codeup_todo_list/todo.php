<?php


$items = array();


function list_items($list){
   $newvar =  ""; 
    foreach ($list as $key => $value) {  
        $newvar .= "[" . ($key + 1) .  "]" . "$value\t" .  PHP_EOL;
    }
    return $newvar;
}

 
function open_file($file){
    $filename = $file;
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    return explode("\n", $contents);
}



function get_input($upper = FALSE){
    $input = trim(fgets(STDIN));

    return $upper ? strtoupper($input) : $input;
}

function write_file ($items, $file){
        $filename = $file;
        $handle = fopen($filename, "w");
        $item = implode("\n", $items);
        fwrite($handle, $item);
        fclose($handle);
    }

do {    


    echo list_items($items);

 
    echo '(N)ew item, (R)emove item, (S)ort items, (O)pen file, Sa(V)e, (Q)uit : ';
    $input = get_input(TRUE);


    if ($input == 'N') {

        echo 'Would you like to add it to the (B)eginning or the (E)nd of the list? : ';

            $order_input = get_input(TRUE);

            echo 'Enter item: ';  

            $todo_item = get_input();

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



    elseif ($input == 'O') {
            echo 'Please type the path to the file :'; 
            $file = get_input();
            $array = open_file($file);
            $items = array_merge($items, $array);
    } 



    elseif ($input == 'V') {
        echo 'Please type the path to the file :'; 
        $filename = (strtolower(get_input()));
        write_file($items, $filename);
    }



    elseif ($input == 'F') {
             echo 'You just removed the first item : ';
            
            array_shift($items);
    }


    elseif ($input == 'L') {
         echo 'You just removed the last item : ';
        // $admin_removelast = get_input(TRUE);
       
        array_pop($items);
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