<?php

$a = file_get_contents('1.txt');
$b = file_get_contents('2.txt');
//var_dump($b);
//var_dump($a);

function  sentenceUniq($a,$b){
    $a = explode(".", $a);
    $b = explode(".", $b);
    $c = array_diff($a, $b);
    $c = implode(".", $c);
    var_dump($c);
    file_put_contents('3.txt', $c);
}

print_r(sentenceUniq($a,$b));