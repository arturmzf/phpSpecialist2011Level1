<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="utf-8" />
        <title>Модуль 3 | Лабораторная работа 03</title>
    </head>
    <body>
        <h2>Модуль 3</h2>
        <h1>Лабораторная работа 03</h1>
        <?php
            $i = 1;
            while($i < 50){
                echo("i = ".$i."<br />");
                $k = 1;
                while($k < 50){
                    echo("\t k = ".$k."<br />");
                    $k += 2;
                    if($k == 17){
                        break;
                    }
                }
                $i += 2;
            }
        ?>
        <br />
        <a href="index.php">Вернуться назад</a>
    </body>
</html>