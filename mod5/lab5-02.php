<?php
    /*
    * @Author: Artur Muzafarov
    * @Date: 2022.01.23
    */

    /*
    ЗАДАНИЕ 1
    - Создайте строковую переменную $now
    - Создайте строковую переменную $birthday
    - Присвойте переменной $now значение метки времени актуальной даты(сегодня)
    - Присвойте переменной $birthday значение метки времени Вашего дня рождения
    */

    /*
    ЗАДАНИЕ 2
    - Выведите фразу "До моего дня рождения осталось "
    - Выведите количество секунд оставшееся до Вашего дня рождения
    - Закончите фразу " секунд"
    */

    $now = "";
    $birthday = "";
    $difference = "";

    $now = time();
    $birthday = mktime(0, 0, 0, 4, 17, 2022);
    $difference = (mktime(0, 0, 0, 4, 17, 2022) - time());

    $message = "До моего следующего Дня рождения осталось:<br />".$difference." секунд.";

    echo("Powered by PHP".PHP_VERSION." on ".PHP_OS."<br />");
    echo("Powered by ".$_SERVER["SERVER_SOFTWARE"]."<br /><br />");
    print_r($GLOBALS);


echo <<<VIEW
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Модуль 5 | Лабораторная работа 02</title>
    </head>
    <body>
        <h2>Модуль 5</h2>
        <h1>Лабораторная работа 02</h1>
        <p>$message</p>
        <br />
        <a href="index.php">Вернуться назад</a>
    </body>
</html>
VIEW;
?>
