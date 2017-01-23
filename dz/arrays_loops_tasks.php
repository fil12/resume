
<!DOCTYPE HTML>
<html>
<head>
<title>arrays_loops_tasks</title>
</head>
<body>

<?php

$array = array('html', 'css', 'php', 'js', 'jq' );
    foreach($array as $value){
        echo "{$value}";
        echo "<br/>";
    }

?>
<hr />
<?php 
    $array = array(1, 20, 15, 17, 24, 35);
    
    foreach($array as $value){ 
        $result += $value;
    }
	echo "$result";
    
?>
<hr />
<?php 
    $array = array(26, 17, 136, 12, 79, 15);
    
    foreach($array as $value){
        $result += $value*$value;
    }
	echo "$result";echo("<br/>");
    
?>
<hr />
<?php 
    $array = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    
    foreach($array as $key => $value){
        echo "{$key}";
        echo("<br/>");
        
    }
    foreach($array as $key => $value){
        echo "{$value}";
        echo("<br/>");
        
    }
    echo "<hr/>";
    foreach ($array as $key => $value){
        $en = array("{$key}");
        $ru = array("{$value}");
        print_r($en);
        echo("<br/>");
        print_r($ru);
        echo("<br/>");
    }
?>
<hr />
<?php 
    $array = array('Коля'=>'200','Вася'=>'300','Петя'=>'400');
    
    foreach($array as $key => $value){
        echo "{$key} - зарплата {$value} долларов";
        echo("<br/>");
    }
    
    
?>
<hr />
<?php
	$arr = array(2, 5, 9, 15, 0, 4);
    
    foreach ($arr as $v){
        if(($v < 10) && ($v > 3)){
            echo "{$v}";
            echo("<br/>");
        }
    }
    
    
?>

<hr />

<?php
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    
    foreach ($arr as $v){
        echo "{$v}";
        
    }
        echo("<br/>");
    for ($v = 1; $v<=9;$v++){
            echo $v;
        }
        echo("<br/>");
    $v =1;
    while($v <=9):
        echo $v;
        $v++;
    endwhile;
    
?>

<hr />
<?php
	for($i = 1; $i <=100; $i++){
	   echo $i;
       echo "<br>";
	}
?>

<hr />

<?php
	$v =11;
    while($v <=33):
        echo $v;
        $v++;
         echo " <br/>";
    endwhile;
?>

<hr />

<?php
	$v =0;
    while($v <100):
       $v +=2;
        echo $v;
         echo " <br/>";
    endwhile;
?>

<hr />


<?php
	for($num=1000, $i = 0; $num >50; $num/=2, $i++);
    echo "Iteretion count {$i}<br>";
    echo $num;
?>


<hr />

<table>
<?php
    for($i =1;$i<=9;$i++){ 
        echo "<tr>";
        for($j=1; $j<=9; $j++){
            $tmp = $i*$j;
            echo "<td> {$tmp} </td>";
        }
        echo "</tr>";
    }




?>
</table>

<hr />
<?php
   $arr=array(4, 2, 5, 19, 13, 0, 10);
    $e =2;
    foreach($arr as $v){
        if($v == $e) {
            echo "Есть!";
            break;
        }
        else {echo "Нет";}
    }     
        echo " <br/>";
?>
<?php
   $arr=array(4, 2, 5, 19, 13, 0, 10);
    $e =3;
    foreach($arr as $v){
        if($v == $e) {
            echo "Есть!";
            break;
        }
        else {echo "Нет";}
        break;
    }     
        echo " <br/>";
?>
<?php
   $arr=array(4, 2, 5, 19, 13, 0, 10);
    $e =4;
    foreach($arr as $v){
        if($v == $e) {
            echo "Есть!";
            break;
        }
        else {echo "Нет";}
        break;
    }     
        echo " <br/>";
?>
<hr />
<?php
	$arr = array(4, 2, 5, 19, 13, 0, 10);
    $count = 0;
    foreach ($arr as $v){
        $count ++;
        
    }
    echo $count;
?>
<hr />

<?php
	$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
	
	foreach ($arr as $v)
	{
		if ($v == 3 or $v == 6 or $v == 9)
		{
			$z .= $v.' ';
		}
		else
		{
			$z .= $v.' ,';
		}
	}
	echo $z;
?>

<hr />

<?php
	$arr = array('jan','fab','march','apr','may','jun','jul','aug','sep','oct','nov','des');
    $month = 'march';
    
    foreach ($arr as $v){
        
        if ($v == $month ){
            echo "<b>{$v}</b> <br/>";
        } else {
            echo "$v <br/>";
        }
    }
    
    
?>

<hr />

<?php
	$arr = array('mon','tue','wedn','thu','fri','sat','sun');
    $sat = 'sat';
    $sun = "sun";
    
    foreach($arr as $key => $v){
        if($key > 4){
             echo "<b>{$v}</b><br/>";
            
        }else {
            echo "$v <br/>";
        }
    }
    
?>

<hr />


<?php
	$arr = array('mon','tue','wedn','thu','fri','sat','sun');
    $day = 4;
    
    foreach($arr as $key => $v){
        if($key == $day){
             echo "<b>{$v}</b><br/>";
            
        }else {
            echo "$v <br/>";
        }
    }
?>

<hr />

<?php
	for ($i = 1; $i <= 20; $i++)
	{
		$s .= 'x';
		echo $s.'<br>';
	}
?>
<hr />

<?php
	for ($i = 1; $i <= 9; $i++)
	{
		for ($j = 0; $j < $i; $j++)
		{
			$str .= $i;
		}
		echo $str.'<br>';
		$str = '';
		$j = 0;
	}
?>
<hr/>
<?php
    $num = '153';

    $sum = 0;

    for ($i =0 ; $i <= strlen($num); $i++){
        $sum += $num [$i] ;
    }


    echo "$num <br/>";
    echo $sum;


?>
<hr />

<?php
        $num = "442158755745 ";
        $i = substr_count($num,4);
        echo $i;
?>
<hr />
<?php
    
    $arr = array();
for ($i=0; $i<=20; $i++) {
    $arr[] = mt_rand(0, 20);
}

echo "<pre>";
print_r($arr);
echo "<pre>";
$min = min(array_values($arr));
$max = max(array_values($arr));


foreach($arr as $k=>$v){
  if($v == $min){
    $arr[$k] = $max;
  }
  if($v == $max){
    $arr[$k] = $min;
  }
}
 
echo "<pre>";
print_r($arr);
echo "<pre>";

?>

<hr />

<?php
$min = rand(1, 50);
$max = rand(51, 100);
$a = range($min, $max);
$maxCount = count($a);
//var_dump($a);
$b = 1;
for($i=0; $i < $maxCount; $i=$i+2) {
    if($a[$i] > 0) {
	    $b = $b * $a[$i];
    }
    else
	    echo  $a[$i];
}
echo " ". $b ."<br>";
echo "Элементы больше нуля и не парные элементы ";
for($i=1; $i < $maxCount; $i=$i+2) {
	if($a[$i] > 0){
		echo " " . $a[$i]." ";
	}
}

?>

<hr />


<?php
    $rows = 5;
    $cols = 5;
    $colors= array('red','yellow','blue','gray','maroon','brown','green');
    
    echo '<table border="1">';
    
    
        
        for($tr = 1;$tr<=$rows;$tr++){
            
             echo '<tr>';
                        
                        
             for ($td = 1; $td<=$cols;$td++){
                
                        $num=rand();
                        $k = array_rand($colors, 2);
                        $b =$colors[$k[0]] ;
                 echo "<td style='background-color:{$b}' >".$num.'</td>';
                }
                 
             }
             echo '</tr>';
        
        
    
    
    
    
    echo '</table>';


?> 









</body>

</html>