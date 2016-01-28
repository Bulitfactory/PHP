<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Функции | Functions</title>
</head>
<body>
	<?php

		/* Функции без параметри
		======================================*/
		function createDinamicHtmlTags() { // функция за изграждане на динамично съдържание.
			echo "<header>".
				 "<h1>".
				 "Заглавие".
				 "</h1>".
				 "</header>";
		}
		createDinamicHtmlTags(); // извикване на функция/изпълнение.
		
	?>
</body>
</html>
