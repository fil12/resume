<?php 

function rdir($dir){
    return scandir($dir);
}
    echo "<pre>";
    print_r (rdir('../../'));
    echo"</pre>";
   
?>