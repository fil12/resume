<?php
    
    $a = $_POST['num'];
    
var_dump($a);
    $text = file_get_contents('text.txt');
    $content = preg_replace('/([^a-zа-я\s]|\s{2})/ui', "",$text);
    $w = explode(" ",$content);  
    foreach($w as $v){
        if (mb_strlen($v) == $a){
            $text = str_replace($v, "",$text);
            $ff = fopen('text.txt','w');
            fwrite($ff,$text);
            fclose($ff);
            
        }
    }
    
    
    
?>