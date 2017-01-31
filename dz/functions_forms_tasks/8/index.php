<head>
    <meta charset="utf-8" />
    <title>Гостевая книга</title>
</head>
<body>
    <? if   (! empty ($comments)) {?>
        <? foreach ($comments as $v):?>
                <table style="width: 30%; margin: 20px auto; background: greenyellow; ">
                    <tr>
                        <td>
                            <div>
                                <span style="font-size: 20px; margin: 20px 0; " >User:   <?=$v['user'];?></span> <br /> Massage:   <?=$v['msg'];?><br /> 
                            </div>
                        </td>
                    </tr>
                </table>
        <? endforeach;?>
    <?}?>
    <form  action="8.php" method="post" style="width:20%; padding: 10px; 
    margin: 20px auto; text-align: center; border: 1px solid blue; background: aqua;">
        <label>User name:</label><br />
        <input type="text" name="user" /><br /><br />
        <label>Enter Massage: </label>
        <textarea name="msg" style="width: 90%;"></textarea><br /><br />
        <input  type="submit" name="send"/>
    </form>
</body>
</html>