<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "test";
    
    // Създаваме връзка с базата данни
    $connection = mysqli_connect($host, $user, $password, $database);
    
    // Подготовка и връзване
    $stmt = $conn->prepare("INSERT INTO nameOfTheTable (columnName, ...) VALUES (?, ...)");
    $stmt->bind_param("s..", $value, ...);

    // Сетваме параметрите от POST заявката и изпълняваме
    $value = $_POST["key"];
    $stmt->execute();
    
    // Затваряме връзката към конекцията към сървъра и затваряме prepare statement
    $stmt->close();
    $connection->close();
    
?>
