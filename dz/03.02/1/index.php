<!DOCTYPE html>

<html>
    <head>
        <title>choose your color </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Refresh" content="300" />
    </head>
    <body style="background-color: <?= $c ;?>">
        <div>
            <form action="1.php" method="post">
                    <p><select   name="color">
                        <option disabled>Выберите цвет</option>
                        <option value="green">зеленый</option>
                        <option selected value="red">красный</option>
                        <option value="blue">синий</option>
                        <option value="yellow">желтый</option>
                        <option value="violet">фиолетовый</option>
                    </select></p>
                    <p><input type="submit" value="Отправить"></p>
            </form>
            
        </div>
    </body>
</html>
