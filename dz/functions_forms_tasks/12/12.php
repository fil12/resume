<?php
	 mb_internal_encoding('UTF-8');
 $a = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь';

 
 function text1 ($a){
    $b = explode(". ",$a);
    krsort($b);
    $a= implode(". ", $b);
    echo $a;
 }
text1($a);
 
    
    
    
    
    
?>