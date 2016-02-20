<?php

    $useremail = "svetlio.toshkin@gmail.com";

    // Свързваме глобалната променлива $connection към prepare statement.
    $stmt = $connection->prepare("SELECT useremail FROM users WHERE useremail = ?");

    // bind_param -> свързава променливите към  като параметър.
    $stmt->bind_param("s", $useremail);

    // Изпълнява се заявката.
    $stmt->execute();

    // Свързваме резултата с променлива.
    $stmt->bind_result($email);

    // Достъпваме стойността.
    $stmt->fetch();

    echo "<br>"."Резултатът от селект заявката е: ".$email."<br>";

?>
