<?php
    /*
    ЗАДАНИЕ 1
    - Подключите файл lib.inc.php
    */
    // Список подключаемых файлов
    require("lib.inc.php");
    require("data.inc.php");
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
                        /*
                        ЗАДАНИЕ 2
                        - Подключите файл, содержащий код верхней части страницы (top.inc.php)
                        */
                        include("top.inc.php");
                    ?>
                </td>
            </tr>

            <tr>
                <td width="20%" valign="top">
                    <!-- Меню -->
                    <?php
                        /*
                        ЗАДАНИЕ 3
                        - Подключите файл, содержащий код меню (menu.inc.php)
                        */
                        require("menu.inc.php");
                    ?>
                </td>
                <td>
                    <!-- Область основного контента -->
                    &nbsp;
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <!-- Нижняя часть страницы -->
                    <?php
                        /*
                        ЗАДАНИЕ 4
                        - Подключите файл, содержащий код нижней части страницы (bottom.inc.php)
                        */
                        include("bottom.inc.php");
                    ?>
                </td>
            </tr>
        </table>

    </body>
</html>