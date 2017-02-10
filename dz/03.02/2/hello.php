<?php

session_start();

if ($_POST){
    $_SESSION ['auth'] = $_POST['name'];
    
}
require_once 'index.php';