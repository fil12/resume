<?php

$colors = array("blue",'red','green','yellow','violet');
if ($_POST){
    
    foreach ($colors as $v){
        if ($_POST['color'] == $v){
            $c = $v;
            setcookie ('color', $c, time()+300);
            
        }
    }
}

header("Location: http://resume1.ua/dz/03.02/1/index.php");
exit();
