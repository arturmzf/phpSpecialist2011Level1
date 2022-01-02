<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Модуль 2 | Лабораторная работа 03</title>
	</head>
	<body>
		<h2>Модуль 2</h2>
		<h1>Лабораторная работа 03</h1>
		<?php
			$age = 27;
			if(($age >= 18) && ($age <=59)){
				echo("Вам ещё работать и работать!");
			}elseif($age > 59) {
				echo("Вам пора на пенсию!");
			}elseif(($age >= 1) && ($age < 18)) {
				echo("Вам ещё рано работать!");
			}else {
				echo("ОШИБКА: неизвестный возраст!");
			}
		?>
		<br />
		<a href="index.php">Вернуться назад</a>
	</body>
</html>