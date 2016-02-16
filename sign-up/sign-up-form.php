<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <fieldset>

        <legend>Регистрационна форма</legend>

        <label for="username">Въведете име: </label><br>
        <input type="text" name="username" placeholder="Моля въведете име" id="username">
        <br>
        <!-- Показваме съобщения с грешки ако има допуснати такива -->
        <span class="red"><?php echo $emptyError; ?></span>
        <span class="red"><?php echo $alphaError; ?></span>

        <br>

        <label for="useremail">Въведете email: </label><br>
        <input type="email" name="useremail" placeholder="Моля въведете emile адрес" id="useremail">
        <br>
        <!-- Показваме съобщения с грешки ако има допуснати такива -->
        <span class="red"><?php echo  $emptyError2; ?></span>
        <span class="red"><?php echo  $emailError; ?></span>

        <br>

        <label for="phone">Въведете телефон: </label><br>
        <input type="text" name="phone" placeholder="Моля въведете телефонен номер" id="phone">
        <br>
        <!-- Показваме съобщения с грешки ако има допуснати такива -->
        <span class="red"><?php echo $emptyError3; ?></span>
        <span class="red"><?php echo $phoneError; ?></span>

        <br>

        <label for="password">Въведете парола: </label><br>
        <input type="password" name="password" placeholder="Моля въведете парола" id="password">
        <br>
        <!-- Показваме съобщения с грешки ако има допуснати такива -->
        <span class="red"><?php echo $emptyError4; ?></span>
        <span class="red"><?php echo $largeSmallPass; ?></span>
        <span class="red"><?php echo $confirmPass; ?></span>

        <br>

        <label for="confirm_password">Повторете парола: </label><br>
        <input type="password" name="confirm_password" placeholder="Моля повторете паролата" id="confirm_password">
        <br>
        <!-- Показваме съобщения с грешки ако има допуснати такива -->
        <span class="red"><?php echo $emptyError5; ?></span>
        <span class="red"><?php echo $largeSmallPass; ?></span>
        <span class="red"><?php echo $confirmPass; ?></span>
        <br>

        <br><br>

        <input type="submit" value="Регистрирай се">

    </fieldset>
</form>
