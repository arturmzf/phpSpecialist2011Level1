<?php
	/*
	ЗАДАНИЕ 1
	- Измените значения во всех ячейках массива на index.php
	- Добавьте к значению "index.php" параметр id, передаваемый методом GET
	- Добавьте к параметру id уникальные значения.
	ПРИМЕР: index.php?id=page1
	*/
	$menu = array(
		"Номе"=>"index.php", 
		"Page1"=>"index.php?id=page1",
		"Page2"=>"index.php?id=page2",
		"Page3"=>"index.php?id=page3",
		"Table"=>"index.php?id=table",
        "Calculator"=>"index.php?id=calculator");

?>	
<table width="100%">
	<tr>
		<td>
			<p>Меню</p>
			<?php
				getMenu($menu);
			?>
		</td>
	</tr>
</table>