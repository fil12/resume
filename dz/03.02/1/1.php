<?php

$colors = array("blue",'red','green','yellow','violet');
if ($_POST){
    
    foreach ($colors as $v){
        if ($_POST['color'] == $v){
            $c = $v;
        }
    }
}


