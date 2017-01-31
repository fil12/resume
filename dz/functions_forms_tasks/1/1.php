<?php


$a = $_POST ['a'];
$b = $_POST ['b'];

function getCommonWords($a, $b){
    $a=explode(' ',$a);
    $b=explode(' ',$b);
    
    
    
    foreach ($a as $v){
        foreach ($b as $k){
            if ($v === $k){
                $result[] = $v;
                
            }
        }
        
    }return $result;
}



print_r(getCommonWords($a,$b));
?>