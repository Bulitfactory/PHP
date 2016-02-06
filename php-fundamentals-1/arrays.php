
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Variables / Променливи</title>
</head>
<body>
	<?php

		/*	Инициализиране на асоциативен масив.
		============================================================================================== */
		$myFirstArray = array(
			"key"  => "Value 1", // Ключът и стойноста се разделят по между си със знака =>
			"key2" => "Value 2", // Ключ и стойност се разделят от останалите ключ и стойност със запетая
			"key3" => "Value 3",
			100    => 100, // Името на ключа може да е цифра
			true   => true // Името на ключа може да е булева стойност
		);

		// Можем да проверим един масив с всичките му стойности като използваме var_dump(името на променливата, която държи стойностите)
		var_dump($myFirstArray);

		// Ако искаме да извикаме конкретна стойност, трябва да я повикаме по нейния ключ
		echo $myFirstArray["key3"];

		/* Инициализиране на асоциативен масив, по подобие на Javascript. Работи след версия PHP 5.4
		============================================================================================== */
		$personalInfo = [
			"firstName"  => "Svetoslav",
			"lastName"   => "Toshkin",
			"age" 	     => 36,
			"eyes"       => "Dark brown" 
		];

		echo $personalInfo["firstName"];

		/* Инициализиране на неасоциативен масив
		============================================================================================== */
		$fruits = array(
			"Bananas", 
			"Apples", 
			"Ananas"
		); // Тук индексацията е автоматична като първата стойност има индекс [0], втората [1] и тн.

		echo $fruits[1];

		/*	Инициализиране на неасоциативен масив, по подобие на Javascript. Работи след версия PHP 5.4
		============================================================================================== */
		$cars = [
			"Mercedes", 
			"Porshe", 
			"Bmw"
		]; // Тук индексацията е автоматична като първата стойност има индекс [0], втората [1] и тн.

		echo $cars[1];

		/*	Инициализиране на масив в масив
		============================================================================================== */
		$students = [
			"studentNames"  => [
				"Svetoslav",
				"Danaila",
				"Borislav",
				"Hrisimir"
			],
			"studentCourse" => [
				"HTML",
				"CSS",
				"JS",
				"PHP"
			]
		]; 

		echo $students["studentNames"][0]; // Достъпваме всеки масив по ключ, след това и съответния ключ на стойността в масива.
		
	?>
</body>
</html>
