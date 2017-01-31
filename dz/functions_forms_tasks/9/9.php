<?php
function sort_arr(){
	
	   $a = $_POST['text'];
       $b = str_split($a);
       krsort($b);
       $b = implode("",$b);
    return $b;
   }
    echo sort_arr();
?>