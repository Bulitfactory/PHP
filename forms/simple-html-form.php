<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Валидация на HTML форма | Validate HTML form</title>
</head>
<body>
	
	<?php
		/* 
		* Задължително трябва да декларираме нулев стринг стойности на променливите, 
		* които ще държат съобщенията за грешки!!!
		*/
		$nameError     = "";
		$emailError    = "";
		$passwordError = "";

		// Проверяваме дали е изпълнена POST заявка.
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Ако е изпълнена такава заявка правим валидация на входните данни.
			if (empty($_POST["username"])) {
				$nameError = "The name field is required!!!";
			}
			if (empty($_POST["useremail"])) {
				$emailError = "The email field is required!!!";
			}
			if (empty($_POST["userepassword"])) {
				$passwordError = "The password field is required!!!";
			}
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
			<!-- Като в края на input полето използваме php script във value показваме old input на потребителя, за да не се налага да попълва полето на ново -->
			<!-- Ако потребителя реши може да допълни или промени стойността във input полето -->
			<input type="text" name="username" placeholder="Please enter an username" id="username" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST['username']; } ?>" />
			<!-- Показваме под полето грешките, ако има такива -->
			<?php echo $nameError ?>

			<br />

			<label for="useremail">Email: </label><br />
			<!-- Като в края на input полето използваме php script във value показваме old input на потребителя, за да не се налага да попълва полето на ново -->
			<!-- Ако потребителя реши може да допълни или промени стойността във input полето -->
			<input type="email" name="useremail" placeholder="Please enter an email" id="useremail" value="<?php if($_SERVER["REQUEST_METHOD"] == "POST") { echo $_POST['useremail']; } ?>" />
			<!-- Показваме под полето грешките, ако има такива -->
			<?php echo $emailError ?>

			<br />

			<label for="userpassword">Password: </label><br />
			<input type="password" name="userpassword" placeholder="Please enter a password" />
			<!-- Показваме под полето грешките, ако има такива -->
			<?php echo $passwordError ?>

			<br /><br />

			<input type="submit" value="Send information">

		</fieldset>
		
	</form>

</body>
</html>
