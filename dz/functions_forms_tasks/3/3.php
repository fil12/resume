<?php
    
    $a = $_POST['num'];
    

    $text = file_get_contents('text.txt');
    $content = preg_replace('/([^a-zа-я\s]|\s{2})/ui', "",$text);
    $w = explode(" ",$content);  
    foreach($w as $v){
        if (mb_strlen($v) >= $a){
            $text = str_replace($v, "",$text);
            $ff = fopen('text.txt','w');
            fwrite($ff,$text);
            fclose($ff);
            
        }
    }
    
    $b = file_get_contents('text.txt');
    echo $b;
    
    
?>