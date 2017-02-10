<html>
    <head>
        <title>Say Hello! </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
            <?php if (!$_SESSION['auth']):?>
            <form action="hello.php" method="post">
                <input type="text" name="name">
                <input type="submit" name="send">
            </form>
            <?php else:?>
            <p style="text-align: center;margin: 100px auto;font-size: 30px;">Hello <span style="text-align: center;font-size: 50px; color: green;"><?=$_SESSION['auth']?>!</span></p>
        
        <?php endif;?>
        </div>
    </body>
</html>

