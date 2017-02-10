<?php
function savePages(){
                $_SESSION['pages'] .= $_SERVER['PHP_SELF']. "|";
           
}

function visited(){
    $pages = explode("|", $_SESSION["pages"]);
    if(is_array($pages))
        array_pop($pages);
        $pages = array_unique($pages);
        echo "<ol>";
        foreach($pages as $page){
                echo "<li>$page</li>";
        }
        echo "</ol>";
}