<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables / Променливи</title>
</head>
<body>
	<?php
	
		$myFirstName = "Svetoslav Toshkin"; // Декларираме променлива.
		echo $myFirstName; // Изваждаме стойноста на променливата на HTML страницата.
		// Като резултат ще се изведе Svetoslav Toshkin.
		
		// Внимавайте!!! Ако използвате име на една и съща променлива но зададете нова стойност то старата ще се презапише!!!
		$myFirstName = "New Value"; 
		echo $myFirstName; // Като резултат ще върне New Value.
		
	?>
</body>
</html>
