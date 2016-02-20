<?php

    /*
     *  Селектиране на всички данни от базата.
     * ===================================================== */

    // Декларираме променливи, които ще използваме по време на скрипта.
    $id = $username = $useremail = $phone = $password = "";

    // Свързваме глобалната променлива $connection към prepare statement.
    $stmt2 = $connection->prepare("SELECT * FROM users");

    // Изпълнява се заявката.
    $stmt2->execute();

    // Свързваме резултатите с променливи.
    $stmt2->bind_result($id, $username, $useremail, $phone, $password);

    // While цикъл който ще се завърти през всички редове и колони в базата и ще ги отпечата в таблица.
    echo  "<table border='1' width='100%'>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Useremail</th>
                    <th>User Phone</th>
                    <th>User Password</th>
                </tr>";
            while($stmt2->fetch()) {
                echo "
                    <tr>
                        <td>".$id."</td>
                        <td>".$username."</td>
                        <td>".$useremail."</td>
                        <td>".$phone."</td>
                        <td>".$password."</td>
                    </tr>";
            }
          echo "</table>";

?>
