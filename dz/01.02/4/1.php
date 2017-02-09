<?php

$a = file_get_contents('1.txt');
$a = explode("\n",$a);

function UniqName($a){
foreach ($a as $k=> $v ){
    $b = explode(":", $v);
  foreach ($b as $v1){
      $c [] =  $b [0];
      $c = array_unique($c);
      foreach ($c as $k1=>$i){
                 if ( $k  == $k1){
                     $var[] = $v."\n";
                                 }
  file_put_contents('2.txt', $var);
                            }
     break;
                    }
   
    }
}   
     
function UniqEmail($a){
foreach ($a as $k=> $v ){
    $b = explode(":", $v);
  foreach ($b as $v1){
      $c [] =  $b [2];
      $c = array_unique($c);
      foreach ($c as $k1=>$i){
                 if ( $k  == $k1){
                     $var[] = $v."\n";
                                 }
  file_put_contents('3.txt', $var);
                            }
     break;
                    }
   
    }
}   

      UniqName($a);
     UniqEmail($a);