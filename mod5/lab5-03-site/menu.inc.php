<?php
    /*
    ЗАДАНИЕ 1
    - Создайте ассоциативный массив $menu
    - Заполните массив следующими данными:
        "Номе"=>"index.php", "Page1"=>"page1.php", "Page2"=>"page2.php", "Page3"=>"page3.php", "Table"=>"table.php"

    ЭТО ПРОПИСАНО В data.inc.php
    */

?>	
<table width="100%">
	<tr>
		<td>
			<p>Меню</p>
			<?php
                /*
                ЗАДАНИЕ 2
                - Отрисуйте меню, вызывая функцию getMenu()
                */
                echo(getMenu($leftMenu));
			?>
		</td>
	</tr>
</table>