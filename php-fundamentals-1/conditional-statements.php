<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Условни опеаратори | Conditional statements</title>
</head>
<body>
	<?php
		/* IF ELSE ELSEIF
		=============================================*/
		$a = 5;
		$b = 20;

		if ($a == $b) {
			echo $a." is equal to ".$b."<hr/>";
		}
		elseif ($a > $b) {
			echo $a." is bigger than ".$b."<hr/>";
		}
		else {
			echo $a." is smaller than ".$b."<hr/>";
		}

		/* SWITCH
		=============================================*/
		$myFavoriteCar = "Aston Martin";

		switch ($myFavoriteCar) {
			case "Bmw":
				echo "It's not my favorite car";
				break;
			case "Mercedes":
				echo "It's not my favorite car";
				break;
			case "Aston Martin";
				echo "Yee Aston Martin it's my favorite car";
				break;
			default:
				echo "Your favorite car is not here!";
				break;
		}

	?>
</body>
</html>
