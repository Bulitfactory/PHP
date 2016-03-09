<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";

    // Създаваме връзка с базата данни
    $connection = mysqli_connect($host, $user, $password, $database);
    
    if (mysqli_connect_errno()){
        die("Нещо се обърка!!! Опитайте отново малко по късно.");
    }
    
    $value = $_POST["key"];
    
    $createItem = $connection->query("INSERT INTO nameOfTheTable (columnName, ...) VALUES ('$value', ... )");
    
    if ($createItem == TRUE) {
        echo "Успешен запис";
    }
    else {
        echo "Нещо се обърка!!!";
    }
    
    $connection->close();

?>
