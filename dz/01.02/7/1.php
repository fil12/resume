<?php

$link = './link.txt';
$badLinks = "./badLinks.txt";
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
$a = file_get_contents($uploadfile);
$b = file_get_contents($link);
$c = file_get_contents($badLinks);
$a = explode("\n",$a);
foreach ($a as $k=>$v){
    $a[$k] = trim($v);    
}
$b = explode("\n", $b);
$c = explode("\n", $c);
//$d = array_merge($b,$a);
$d = array_diff($a,$c); // расхождения между userlinks и badLinks
$e = array_unique(array_merge($b,$d));
echo"<pre>";
var_dump($e);
$e = implode("\n", $e);
file_put_contents($link, $e);

