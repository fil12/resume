<?php 
 mb_internal_encoding('UTF-8');
 $a = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь.';
 function text($a)
 {
     return preg_replace_callback('#((?:[.!?]|^)\s*)(\w)#us', function($matches) {
         return $matches[1] . mb_strtoupper($matches[2]);
     }, $a);
 }
  echo text($a);
 

 