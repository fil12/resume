<?php
function listdir_by_date($path){
        $dir = opendir($path);
        $list = array();
        while($file = readdir($dir)){
            if ($file != '.' && $file != '..' && $file[strlen($file)-1] != '~' ){
                $ctime = "время модификации  ".date_str(filemtime( $path . $file )).' размер файла  '. filesize($path.$file)  ;
                $list[$ctime] = $file;
            }
        }
        closedir($dir);
         
        return $list;
    }
    function date_str($timestamp)
{	$date_str = getdate($timestamp);
$year = $date_str["year"];
$mon = $date_str["mon"];
$mday = $date_str["mday"];
$hours = $date_str["hours"];
$minutes = $date_str["minutes"];
$seconds = $date_str["seconds"];
return "$hours:$minutes:$seconds $mday/$mon/$year";}
    
    $path = '../6/';
    echo "<pre>";
    print_r(listdir_by_date($path));
    echo "</pre>";