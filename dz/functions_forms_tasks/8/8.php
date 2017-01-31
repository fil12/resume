<?php

    define('MAT', ['хуй','пизда','жопа']);
   
	function save_comment($comments){
	   return file_put_contents('base.txt',serialize($comments));
	}
    print_r($comments);
    function get_comment (){
        return unserialize(file_get_contents('base.txt'));
    }
    
    if (file_exists('base.txt')){
        $comments = get_comment();
    }
    if (isset($_POST['send'])){
        $comment = [
        'user' => $_POST['user'],
        'msg' => $_POST['msg']
        ];
    }
    
    foreach($comment as $k => $v){
        $comment[$k]=str_replace(MAT, '***', $v,$count);
        if($count>0){
            echo 'Некорректный комментарий. - '.$v ."<br>";
            die;
        }
        $comment [$k] = strip_tags($v,'<b>');
   }
        
        
    
    $comments []= $comment;
    save_comment($comments);
    
    require('index.php');
    
    
    
    
    
    
    
?>