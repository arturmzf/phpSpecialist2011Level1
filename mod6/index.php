<?php
	include "lib.inc.php";
?>
<!DOCTYPE html>

<html lang="ru">
    <head>
        <title>Шаблон сайта</title>
        <meta charset="utf-8" />
    </head>
    <body>

        <table width="100%" border="1">

            <tr>
                <td colspan="2" align="center">
                    <!-- Верхняя часть страницы -->
                    <?php
                        include "top.inc.php";
                    ?>
                </td>
            </tr>

            <tr>
                <td width="20%" valign="top">
                    <!-- Меню -->
                    <?php
                        include "menu.inc.php";
                    ?>
                </td>
                <td>
                    <!-- Область основного контента -->
                    <?php
                    /*
                    ЗАДАНИЕ 1
                    - Создайте переменную $id
                    - Присвойте переменной $id значение параметра id переданного при запросе методом GET
                    - С помощью конструкции switch, в зависимости от значения переменной $id, выведите содержимое области основного контента страницы
                    */

                    $id=strip_tags($_GET["id"]);

                    switch($id){
                        case page1:
                            echo("<h1>Страница 1</h1>");
                            include("page1.php");
                            break;
                        case page2:
                            echo("<h1>Страница 2</h1>");
                            include("page2.php");
                            break;
                        case page3:
                            echo("<h1>Страница 3</h1>");
                            include("page3.php");
                            break;
                        case table:
                            getTable();
                            break;
                        case calculator:
                            // echo("<h1>Калькулятор</h1>"); // Там уже есть заголовок...
                            include("calculator.php");
                            break;
                        default:
                            echo("<h1>Главная</h1>");
                            break;
                    }

                    ?>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <!-- Нижняя часть страницы -->
                    <?php
                        include "bottom.inc.php";
                    ?>
                </td>
            </tr>
        </table>

    </body>
</html>