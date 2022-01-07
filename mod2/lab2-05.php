<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Модуль 2 | Лабораторная работа 05</title>
    </head>
    <body>
        <h2>Модуль 2</h2>
        <h1>Лабораторная работа 05</h1>
        <?php
            $bmw = array(
                "model" => 'X5',
                "speed" => 120,
                "doors" => 5,
                "year" => 2006
            );
            echo("<h2>BMW - ".$bmw["model"]." - ".$bmw["speed"]." - ".$bmw["doors"]."</h2>");
        ?>
    </body>
</html>
