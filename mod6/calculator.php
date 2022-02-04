<?php
    /*
    ЗАДАНИЕ 1
    - Проверьте, была ли корректно отправлена форма
    - Если она была отправлена, отфильтруйте полученные значения
    - В зависимости от оператора производите различные математические действия
    - В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
    - Сохраните полученный результат вычисления в переменной
    */

    // Функция - Обрабатываем входные данные в зависимости от их типа
    function clearData($data, $type = "flt"){
        switch($type){
            case "flt":
                return (float)$data;
                break;
            case "str":
                return trim(strip_tags($data));
                break;
        }
    }

    $result = 0.000;
    $num1 = 0.000;
    $num2 = 0.000;
    $operator = "";
    $outputMessage = "";

    // Проверяем, зашёл ли пользователь "со стороны", либо же перешёл сюда, заполнив форму
    if(($_SERVER["REQUEST_METHOD"] == "POST") || ($_SERVER["REQUEST_METHOD"] == "GET")){
        //TODO: Проверить, все ли поля пришли
        $num1 = clearData($_POST["num1"]);
        $operator = clearData($_POST["operator"], "str");
        $num2 = clearData($_POST["num2"]);

        $outputMessage = "$num1 $operator $num2 = ";

        switch($operator){
            case "+":
                $result = (float)($num1 + $num2);
                break;
            case "-":
                $result = (float)($num1 - $num2);
                break;
            case "*":
                $result = (float)($num1 * $num2);
                break;
            case "/":
                if($num2 == 0){
                    $result = "ОШИБКА! На нуль делить нельзя!";
                }else{
                    $result = (float)($num1 / $num2);
                }
                break;
            default:
                $result = "Неизвестный оператор";
        }

        if($result == "ОШИБКА! На нуль делить нельзя!") {
            $outputMessage = $result;
        } elseif($result == "Неизвестный оператор"){
            $outputMessage = $result." \"$operator\"";
        } else{
            $outputMessage .= $result;
        }
    }
?>

<!DOCTYPE html>

<html lang="ru">
    <head>
        <title>Калькулятор</title>
        <meta charset="utf-8" />
    </head>
    <body>

        <h1>Калькулятор</h1>

        <?php
            /*
            ЗАДАНИЕ 2
            - Если результат существует, выведите его
            */

            if($outputMessage){
                echo("<h2>Результат:<br />".$outputMessage."</h2>");
            }
        ?>

         <form action="<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
         <!--<form action="calculator.php" method="post">-->

            Число 1:<br />
            <input type="text" name="num1" /><br /><br />

            Оператор:<br />
            <input type="text" name="operator" /><br /><br />

            Число 2:<br />
            <input type="text" name="num2" /><br /><br />

            <input type="submit" value="Считать!" />

        </form>

    </body>
</html>