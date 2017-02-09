
<?php
$dir_iterator = new RecursiveDirectoryIterator("../");
$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);
foreach ($iterator as $file) {
    echo "<pre>";
    echo $file. "\n";
    echo"</pre>";
}