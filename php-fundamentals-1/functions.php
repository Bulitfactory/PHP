<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Функции | Functions</title>
</head>
<body>
	<?php

		/* Функции без параметри / аргументи
		======================================*/
		function createDinamicHtmlTags() { // функция за изграждане на динамично съдържание.
			echo "<header>".
				 "<h1>".
				 "Заглавие".
				 "</h1>".
				 "</header>";
		}
		createDinamicHtmlTags(); // извикване на функция/изпълнение.


		/* Функции с параметри / аргументи
		======================================*/
		function showFullName($firstname, $lastName) {
			echo "My full name is: ".$firstname." ".$lastName;
		}
		showFullName("Svetoslav", "Toshkin");
		
		
		/* Капсолиране на имената на променливите като ги дефинираме в тялото на функцията
		===================================================================================*/
		function fooArguments() {
			$a = 5;
			$b =10;
		    $result = $a + $b;
		    echo $result;
		}
		//echo $result; ако се опитаме да изведем $result ще получим грешка undefinded variable / недефинирана променлива.
		// Единствения начин да достъпим променливата е като извикаме функцията.
		echo fooArguments();
		
	?>
</body>
</html>

