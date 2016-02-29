<?php

    function dbConnect() {
    
        // Декларираме променливи, чиито стойности ще са данните осъществяващи връзката със сървъра.
        $server = "localhost";
        $dbname = "mysite";
        $user   = "root";
        $pass   = "";
        
        // Декларираме глобална променлива за да може да я използваме извън функцията.
        // Ако искаме да я използваме другаде в скрипта или в друга функция отново трябва да декларираме global $pdo.
        global $pdo;
    
        // PDO е клас създаден предварително за нас. Можем да го ползваме навсякъде където имаме нужда от него.
        // try е равно на условния оператор if{} else{}
        try {
            $pdo = new PDO("mysql:host=$server; dbname=$dbname", $user, $pass);
            echo "Connection  Successfully";
        }
        catch(PDOException $e) {
            echo 'Connection failed: '.$e->getMessage();
        }
        
    }
    
    // Накрая извикваме функцията тук или във всеки файл, в който ще използваме конекцията.
    dbConnect();
    
?>
