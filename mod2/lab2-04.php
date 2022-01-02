<!DOCTYPE htnl>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Модуль 2 | Лабораторная работа 04</title>
	</head>
	<body>
		<h2>Модуль 2</h2>
		<h1>Лабораторная работа 04</h1>
		<br />
		<?php
		$size = ini_get('post_max_size');
		$letter = $size{strlen($size) - 1};
		$size = (integer)$size;
		switch($letter){
			case 'G': $size *= 1024;
			case 'M': $size *= 1024;
			case 'K': $size *= 1024;
		}
		echo ("POST_MAX_SIZE = ".$size." bytes.");
		?>
		<br />
		<a href="index.php">Вернуться назад</a>
	</body>
</html>