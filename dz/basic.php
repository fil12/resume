<!DOCTYPE HTML>
<html>
<head>
<title>basic tasks</title>
</head>
<body>
    <p>Task 1</p>
    
    
            <?php
            
            
                $name = 'alex';
                $age = 29;
                $day =2;
                $s =160;
                $t = 2;
                $foo = 'bar';
                $bar = 10;
                echo "Меня зовут $name."; 
                            
            ?>
            <br />
                <?php
                 echo "Мне $age лет.";
                 ?>
                 <br />
                 
                <?php if(($age >= '18') && ($age <= '59') ) {
                    
                    echo "Вам еще работать и работать!";
                    }
                    if ($age > '59') {
                        echo "Вам пора на пенсию";
                    }
                    if (($age >= '0') && ($age <= '17') )
                    {
                        echo 'Вам еще рано работать!';
                    }
                    if ($age < '0'){
                        echo 'Неизвестный возраст';
                    }
                    ?>
                    <br />
                    <?php
                    
                switch ($day) {
                    case 1;                        
                    case 2;                        
                    case 3;                        
                    case 4;                        
                    case 5:
                        echo "Это рабочий день";
                        break;
                    case 6;                        
                    case 7:
                        echo "Это выходной";
                        break;
                    default:
                        echo "Неизвестный день";
                    }
                ?>
                <br />
                <?php
                    $v = $s/$t;
                    echo "$v км/ч <br/>";
                    $v1 = ($s*1000)/($t*3600);
                    echo  "$v1 м/с <br/>";
                    echo $$foo;
                    
                ?>
                
                <br />
                
                <?php
                    $a = 10 ;
                    $b = 2 ;
                    $operator = '*';
                    
                    switch ($operator) {
                        case '-' :
                            $c = $a-$b;
                            echo $c;
                            break;
                        case '+' :
                            $c = $a+$b;
                            echo $c;
                            break;
                        case  '*':
                            $c = $a*$b;
                            echo $c;
                            break;
                        case '/' :
                            if ($b == 0){
                                echo "делить на ноль нельзя";
                            } else {
                            $c = $a/$b;
                            echo $c;
                               }
                            break;
                        case '%';
                            $c = $a%$b;
                            echo $c;
                            break;
                        
                    }
                ?>
                <br />
                <?php
                     if   ($a>$b){
                        echo " $a <br/>";
                     }else{
                        echo " $b <br/>";
                     }
                     
                     $a = "78";
                     $b = 78;
                     if ($a == $b){
                        echo "переменные равны <br/>";
                     }else{
                        echo 'Пенеменные не равны<br/>';
                     }
                     if ($a === $b){
                        echo "переменные эквивалентны<br/>";
                     }else{
                        echo 'Пенеменные не эквивалентны<br/>';
                     }
                     
                     var_dump($a == $b);
                     var_dump($a === $b);
                     
                ?>
                <br />
                <?php
                     $a = (boolean)20;
                     $b = (boolean)0;
                     $c = (boolean)-20;

                     var_dump ($a );
                     var_dump ($b );
                     var_dump ($c );
                     
                ?>
                <br />
                <?php
                    $a=20;
                    echo $a;// первый способ
                  ?>  <br />
                  <?php
                    print($a); /* второй способ*/
                    ?><br />
                    <?php
                    var_dump($a);# третий способ
                ?><br />
                <?php 
               
                    define(MONTH_COUNT,12);
                
                ?>
                
                
                                    

</body>

</html>