<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables / Променливи</title>
</head>
<body>
	<?php
	
		$myFirstName = "Svetoslav"; // Декларираме променлива.
		echo $myFirstName.'<br />'; // Изваждаме стойноста на променливата на HTML страницата. С точка извършваме конкатенация сливане/събиране на два буквени низа от край до край.
		// Като резултат ще се изведе Svetoslav + нов ред.
		
		// Внимавайте!!! Ако използвате име на една и съща променлива, но зададем нова стойност, старата ще се презапише!!!
		$myFirstName = "New Value"; 
		echo $myFirstName.'<br />'; // Като резултат ще върне New Value.
		
		/* Типове променливи!
		==========================================*/
		
		// String
		$myStringVar = "Some text";
		echo $myStringVar.'<br />';

		// Integer
		$myIntegerVar = 20;
		echo $myIntegerVar.'<br />';

		// Float
		$myFloatVar = 3.14;
		echo $myIntegerVar.'<br />';

		// Boolean
		$myBooleanVar = true;
		echo $myBooleanVar.'<br />';

		// Array
		$myArray = array(20, 3.14, true, "Some text");
		echo $myArray[2].'<br />';
	?>
</body>
</html>
