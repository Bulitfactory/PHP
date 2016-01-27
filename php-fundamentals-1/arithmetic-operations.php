<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Аритметични операции</title>
</head>
<body>
	<?php
		// Събиране
		$a = 5;
		$b = 10;
		$result = $a + $b;
		echo $a."+".$b."=".$result."<br />"."<hr />";

		// Умножение
		$c = 100;
		$d = 50;
		$result2 = $c * $d;
		echo $c."*".$d."=".$result2."<br />"."<hr />";

		// Деление
		$i = 25;
		$j = 30;
		$result3 = $i / $j;
		echo $i."/".$j."=".$result3."<br />"."<hr />";

		// Деление с остатък
		$y = 5 % 2;
		echo "Остатък от целочисленото деление на 5 % 2 е = ".$y."<br />"."<hr />";
		$z = 10 % 2;
		echo "Остатък от целочисленото деление на 10 % 2 е = ".$z."<br />"."<hr />";

		// С инкремент увеличаваме стойността с единица
		echo "Increment:"."<br/>";
		$f = 5;
		$f++;
		echo $f."<br />"."<hr />";

		// С декремент намаляваме стойността с единица
		echo "Decrement:"."<br/>";
		$h = 5;
		$h--;
		echo $h."<br />"."<hr />";

		// Други аритметични операции.
		$myNumber = 10;
		$myNumber += 20;
		echo "Резултата на 10 += 20 е: ".$myNumber."<br />"."<hr />";;
	?>
</body>
</html>
