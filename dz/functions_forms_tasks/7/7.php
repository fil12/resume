<?php
    function save_comment($comments){
        return file_put_contents('base.txt',serialize($comments));
    }
    
    function get_comment(){
        return unserialize(file_get_contents('base.txt'));
    }
    if (file_exists('base.txt')){
    $comments = get_comment();
    }
    if (isset($_POST['send'])){
    $comment=[
    'user'=>$_POST['user'],
    'msg'=>$_POST['msg']
    ];
    }
    $comments[] = $comment;
    save_comment($comments);
    include('index.php');
?>                                                                        