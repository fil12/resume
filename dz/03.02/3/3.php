<?php
require_once 'helpers.php';
require_once 'session.php';
//echo "<pre>";
//var_dump($_SESSION['pages']);
echo "Вы посетили:";
echo visited();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>какие страницы вы посещали </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h2>Меню</h2>
<ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="1.php">Страница 1</a></li>
        <li><a href="2.php">Страница 2</a></li>
        <li><a href="3.php">Страница 3</a></li>
</ul>
            
        
        
        
        
    </body>
</html>
