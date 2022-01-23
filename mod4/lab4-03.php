<?php
    /*
     * myCount() - аналог встроенной (внутренней) функции PHP count()
     *
     * Array => returns количество ячеек
     * NULL => returns 0
     * String, Int,... => returns 1
     *
     * Затронута тема рекурсии
     *
     * @Author: Artur Muzafarov
     * @Date: 2022.01.23
     */
    function myCount($data, $insideItems = 0){  // insedeItems = 0 => Элементы во вложенных массивах
                                                // (элементах искомого массива) учитывать НЕ будем
                                                // insideItems = 1 => Необходимо учесть
        $result = -1;
        // getType() - можно использовать, но лучше is_...
        if(is_array($data)){
            foreach($data as $item){
                if(($insideItems == 1) && (is_array($item))){
                    $result += myCount($item, 1);
                }
                $result++;
            }
        } else if(is_null($data)) {
            $result = 0;
        } else {
            $result = 1;
        }

        return $result;
    }

    echo <<<VIEW
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Модуль 4 | Лабораторная работа 03</title>
    </head>
    <body>
        <h2>Модуль 04</h2>
        <h1>Лабораторная работа 03</h1>
        <br />
        <p>Никакого вывода... См. код</p>
        <br />
        <a href="index.php">Вернуться назад</a>
    </body>
</html>
VIEW;
?>