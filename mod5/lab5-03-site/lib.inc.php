<?php
	/*
	ЗАДАНИЕ 1
	- Откройте файл mod4\menu.php
	- Скопируйте код функции getMenu()
	- Вставьте скопированный код в данный файл
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

	/*
	ЗАДАНИЕ 2
	- Откройте файл mod4\table.php
	- Скопируйте код функции getTable()
	- Вставьте скопированный код в данный файл
	*/

    function getTable($cols = 10, $rows = 10, $color="yellow"){ // Применил параметры по умолчанию
        static $cnt = 0;
        $cnt++;
        echo("<p>Таблица рисуется ".$cnt."-й раз:</p><br />");

        echo("<table border=\"7 \">");
        for($i = 1; $i <= $rows; $i++){

            echo("\n\t\t\t<tr>\n");
            for($j = 1; $j <= $cols; $j++){
                if(($i == 1) || ($j == 1)){
                    echo("\t\t\t\t<th bgcolor=\"".$color."\">".$i*$j."</th>\n");
                } else{
                    echo("\t\t\t\t<td>".$i*$j."</td>\n");
                }
            }

            echo("\t\t\t</tr>");
        }

        echo("\n\t\t</table>\n");
    }

?>