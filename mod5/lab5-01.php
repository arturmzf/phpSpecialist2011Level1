<?php

    /*
     * @Author: Artur Muzafarov
     * @Date: 2022.01.23
    */


    /*
    ЗАДАНИЕ 1
    - Создайте строковую переменную $login и присвойте ей значение "root"
    - Создайте строковую переменную $password и присвойте ей значение "megaP@ssw0rd"
    - Создайте строковую переменную $email и присвойте ей значение "ivan@petrov.ru"

    ЗАДАНИЕ 2
	- Используя строковые функции, сделайте первый символ значения переменной $login прописной(большой)
	- Используя строковые функции, сделайте первый символ значения переменной $password прописной(большой)
	- Используя строковые функции проверьте, имеет ли значение переменной $email символ "@"

    */

    $login = "root";
    $password = "magaP@ssw0rd";
    $email = "ivan@petrov.ru";
    $message = "";

    $login = ucfirst($login);
    $password = strrev(ucfirst(strrev($password)));

    if(strpbrk($email, '@')){
        $message = "В E-mail есть символ @";
    }else{
        $message = "В E-mail символа @ нет";
    }

    echo <<<VIEW
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Модуль 5 | Лабораторная работа 01</title>
    </head>
    <body>
        <h2>Модуль 5</h2>
        <h1>Лабораторная работа 01</h1>
        <p><b>Login:</b> $login</p>
        <p><b>Password:</b> $password</p>
        <p><b>$message</b></p>
        <br />
        <a href="index.php">Вернуться назад</a>
    </body>
</html>
VIEW;
?>