<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Модуль 3 | Лабораторная работа 05</title>
    </head>
    <body>
        <h2>Модуль 3</h2>
        <h1>Лабораторная работа 05</h1>
        <?php
        /*
        ЗАДАЧА
        Отрисовать навигационное меню на странице, типа
        <a href="contact.php">Contact</a>
        используя массив в качестве структуры меню

        ЗАДАНИЕ 1
        - Создайте ассоциативный массив $menu
        - Заполните массив соблюдая следующие условия:
        - Название ячейки является пунктом меню, например: Home, About, Contact...
        - Значение ячейки является именем файла, на который будет указывать ссылка, например: index.php, about.php, contact.html...

        ЗАДАНИЕ 2
        - Используя цикл foreach отрисуйте вертикальное меню, структура которого описана в массиве $menu
        */
        $menu = array(
            "Home" => "index.php",
            "Contact" => "contact.php",
            "About" => "about.php",
            "Project" => "project.php",
            "Map" => "map.php"
        );

        foreach($menu as $button => $link){
            echo("<a href=\"".$link."\">".$button."</a><br />\n");
        }

        echo("<ul style=\"list-style-type: none\">");
        foreach($menu as $button => $link){
            echo("<li><a href=\"".$link."\">".$button."</a></li>");
        }
        echo("</ul>");

        ?>
        <br />
        <a href="index.php">Вернуться назад</a>
    </body>
</html>
