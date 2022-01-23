<?php
    /*
    ЗАДАНИЕ 1
    - Опишите функцию getMenu()
    - Задайте для функции первый аргумент $menu, в него будет передаваться массив, содержащий структуру меню
    - Задайте для функции второй аргумент $vertical со значением по умолчанию равным TRUE. Данный параметр указывает, каким образом будет отрисовано меню - вертикально или горизонтально
    */
    /*
    ЗАДАНИЕ 2
    - Откройте файл mod3\menu.php
    - Скопируйте код, который создает массив $menu и вставьте скопированный код в данный документ
    - Скопируйте код, который отрисовывает меню
    - Вставьте скопированный код в тело функции getMenu()
    - Измените код таким образом, чтобы меню отрисовывалась в зависимости от входящих параметров $menu и $vertical
    */
    /*
    ЗАДАНИЕ 3
    - Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
    */
    /*
    ЗАДАНИЕ 4
    - Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным FALSE
    */
    function getMenu($menus, $vertical = true){
        $horizontal = "";

        if(!$vertical){
            $horizontal = " style=\"display: inline; margin-right: 15px\""; // Добавляем свойство для горизонтального отображения пунктов списка
        }
        //echo($horizontal); // Для проверки
        $result = "\n\t\t<ul style=\"list-style-type: none\">\n"; // style="list-style-type: none" - чтобы не отрисовывались точки перед пунктами списка

        foreach($menus as $button => $link){
            $result.="\t\t\t<li".$horizontal."><a href=\"".$link."\">".$button."</a></li>\n";
        }

        $result.="\t\t</ul>\n";

        return $result;
    }

    $menu = array(
        "Главная" => "index.php",
        "Расписание сеансов" => "timetable.php",
        "Стоимость билетов и бронирование" => "price.php",
        "Ближайшие премьеры" => "premiers.php",
        "О нас" => "about.php"
    );

    $result1 = getMenu($menu);
    $result2 = getMenu($menu, false);

    echo <<<VIEW
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Модуль 4 | Лабораторная работа 02</title>
    </head>
    <body>
        <h2>Модуль 4</h2>
        <h1>Лабораторная работа 02</h1>
        <div>$result1</div>
        <div>$result2</div>
        <br />
        <a href="index.php">Вернуться назад</a>
    </body>
</html>
VIEW;
?>