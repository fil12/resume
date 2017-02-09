<?php
 mb_internal_encoding('UTF-8');
$a = file_get_contents('1.txt');
$b = file_get_contents('2.txt');
//print_r($b);
//print_r($h);

function getCommonWords_a($a, $b){
    $a=explode(' ',$a);
    $b=explode(' ',$b);
    $c = array_diff($a, $b);
    $c = implode(" ", $c);
    file_put_contents('4.txt', $c);
    
    print_r($c);
    
    
}
function getCommonWords_b($a, $b){
    $a=explode(' ',$a);
    $b=explode(' ',$b);
    
    foreach ($a as $v){
        foreach ($b as $k){
            if ($v === $k){
                $result[] =$v;
                
            }
        }
        
    }
    $result = implode(" ", $result);
    file_put_contents('3.txt', $result);
    return $result;
}
function getCommonWords_c($a, $b){
    $a=explode(' ',$a);
    $b=explode(' ',$b);
    $d = array_count_values($a);
    $f = array_count_values($b);
     while($k = current($d)){
         if ($k >= 2){
             $c[] .= key ($d)."<br>";
     }
    next($d);
     }
     while($k = current($f)){
         if ($k >= 2){
             $i[] .= key ($f)."<br>";
     }
    next($f);
     }
     
     $u = array_merge($c,$i);
     var_dump($u);
    file_put_contents('5.txt', $u);
}

print_r(getCommonWords_a($a,$b)."<br>");
print_r(getCommonWords_b($a,$b)."<br>");
print_r(getCommonWords_c($a,$b));

