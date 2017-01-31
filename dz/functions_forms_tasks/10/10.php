<?php

function uniq(){
       $b = explode(" ",$_POST['text']);
       $unique_array = array_count_values(array_unique($b));
     echo "уникальных слов в тексте " .count($unique_array);
  }
uniq();    
    
?>