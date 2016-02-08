<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Семпла HTML форма | A simple HTML form</title>
</head>
<body>
	
	<?php
		// Проверяваме дали е изпълнена POST заявка.
		// Ако е изпълнена показваме резултатите от POST заявката.
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			echo "Welcome: ".$_POST["username"]."<br />".
		 	     "Your emai is: ".$_POST["useremail"]."<br />";
		}
		// Ако не 
		else {
			echo "Please enter a form below!!!";
		}
	?>

	<hr />

	<!-- В action пускаме скрипт, който изпълнява заявката на същата страница -->
	<!--  echo htmlspecialchars ни помага да преобразуваме опасните спецялни символи <> за таг, в безопасни такива &lt; и &gt; -->
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

		<fieldset>

			<legend>My first HTM form</legend>

			<label for="username">Username: </label><br />
			<!-- required ни дава проста HTML валидация, която лесно може да бъде излъгана, затова е важно валидацията да мине през php -->
			<!-- Валидация с PHP ще намерите в слвдващия файл validation.php -->
			<input type="text" name="username" placeholder="Please enter an username" id="username" required />

			<br />

			<label for="useremail">Email: </label><br />
			<input type="email" name="useremail" placeholder="Please enter an email" id="useremail" required />

			<br /><br />

			<input type="submit" value="Send information">

		</fieldset>
		
	</form>

</body>
</html>
