<?php

	function rdir($dir,$a){
	   $dir = scandir($dir);
	   $f = glob($a);

    return $f ;
}
    echo "<pre>";
    print_r (rdir('.','5*'));
    echo"</pre>";
    
    
    
?>