<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello World</title>
</head>
<body>
	<!-- PHP може да бъде написан на всякъде във вашия HTML документ -->
	<!-- Когато искаме да изведем резултат или да изпишем нещо на HTML старницата, PHP тага и кодът трябва да са в <body> частта -->
	<?php
		// И echo и print извеждат / изписват резултат на HTML старницата.
		echo "Hello world!!!"; // Echo е по-използвания и предпочитан синтаксис.
		print "Hello world again!!!";
	?>
	<!-- Ето как може да се вгради php код съдържащ заглавие в HTML <h1> tag -->
	<h1><?php echo "Hello world title" ?></h1>
</body>
</html>
