<?php
$access = "./count.txt";
$visits = file($access);
$current_visitors = $visits[0];
$current_visitors++;
file_put_contents($access, $current_visitors);

echo $current_visitors;


        
        
        
        
        
  