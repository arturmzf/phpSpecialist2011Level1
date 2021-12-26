<!DOCTYPE html>
<html>
	<head>
		<mate charset="utf-8" />
		<title>Модуль 2 | Лабораторная работа 01</title>
	</head>
	<body>
		<h2>Модуль 2</h2>
		<h1>Лабораторная работа 01</h1>
		<?php
			$name = "Артур";
			$age = 29;
			$love = "Я люблю Камиллу!";

			echo "Меня зовут: ".$name."<br />";
			echo "Мне ".$age." лет.\n"; // /n не отработает!
			echo $love;

			unset($age);
		?>
		<br />
		<a href="index.php">Вернуться назад</a>
	</body>
</html>