<?php

$a = file_get_contents('1.txt');

function sortword($a){
    $b = explode(" ",$a);
    
    asort($b);

    echo "<pre>";
    var_dump($b);
    echo "</pre>";
    
    
}
print_r(sortword($a)); 