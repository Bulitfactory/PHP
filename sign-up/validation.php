<?php
    // Дефинираме променливи които ще използваме по време на изпълнението на скрипта.
    $emptyError = $emptyError2 = $emptyError3 = $emptyError4 = $emptyError5 = null;
    $alphaError = $emailError = $phoneError = $largeSmallPass = $confirmPass = null;
    $valUserName = $valUserEmail = $valUserPhone = $valUserPass = null;
    // Масив, който ще държи текста със съобщенията за грешки.
    $errors = [
        "*Всички полета са задължителни!",
        "*Потребителското име може да съдържа само букви!",
        "*Моля въведете реален email адрес!",
        "Полето за телефон може да съдържа само цифри и знакът '+' !",
        "Паролата, която се опитвате да въведете трябва да е минимум от 5 или максимум 12 символа!",
        "Въведените от вас пароли не съвпадат, опитайте отново!"
    ];
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Проверка за липса на data в input полето.
        if (empty($_POST["username"])) {
            // декларираме нова променлива, която ще държи съобщението за грешка съответстващо на определения индекс в масива.
            $emptyError = $errors[0];
        }
        // Проверка дали името на потребителя съдържа различни символи от букви.
        elseif (!preg_match("/^([a-zA-Z]+|[\p{Cyrillic}]+)$/u", $_POST["username"])) {
            // декларираме нова променлива, която ще държи съобщението за грешка съответстващо на определения индекс в масива.
            $alphaError = $errors[1];
        }
        // Ако преминат горните проверки се прилага функцията function validateData($data);
        else {
            $valUserName = validateData($_POST["useremail"]);
        }
        // Проверка за липса на data в input полето.
        if (empty($_POST["useremail"])) {
            $emptyError2 = $errors[0];
        }
        // Проверка дали email адреса съдържа всички необходими символи за да приемем, че е реален.
        elseif (!filter_var($_POST["useremail"], FILTER_VALIDATE_EMAIL)){
            $emailError = $errors[2];
        }
        // Ако преминат горните проверки се прилага функцията function validateData($data);
        else {
            $valUserEmail = validateData($_POST["useremail"]);
        }
        // Проверка за липса на data в input полето.
        if (empty($_POST["phone"])){
            $emptyError3 = $errors[0];
        }
        // Проверка на входните данни дали съдържат нещо различно от цифри и знакът +
        elseif(!preg_match("/^\+?\d+$/", $_POST["phone"])){
            $phoneError = $errors[3];
        }
        // Ако преминат горните проверки се прилага функцията function validateData($data);
        else {
            $valUserPhone = validateData($_POST["phone"]);
        }
        // Проверка за липса на data в input полето.
        if (empty($_POST["password"])){
            $emptyError4 = $errors[0];
        }
        // Проверка за дължината на въвежданата парола strlen = string length.
        elseif(mb_strlen($_POST["password"]) < 5 || mb_strlen($_POST["password"]) > 12) {
            $largeSmallPass = $errors[4];
        }
        // Правим проверка дали между въведените пароли има съвпадение и ако няма пускаме съобщение за грешка.
        elseif($_POST["password"] != $_POST["confirm_password"]) {
            $confirmPass = $errors[5];
        }
        // Ако преминат горните проверки се прилага функцията function validateData($data);
        else {
            $valUserPass = validateData($_POST["password"]);
            // Преди да запишем паролата в базата, към променливата, която я пази прибавяме и хеш алгоритъм mb5.
            // mb5 - ще я преобразува в 16 битов случаен символен низ.
            $valUserPass = md5($valUserPass);
        }
        // Проверка за липса на data в input полето.
        if(empty($_POST["confirm_password"])){
            $emptyError5 = $errors[0];
        }
    }
    // Функция предпазваща входните данни от опасни символи и знаци, които могат да внедряд потенциално опасен код.
    function validateData($data) {
        $data = trim($data); // Премахва интервали от началото и края на символен низ.
        $data = stripcslashes($data); // Премахва наклонените черти.
        $data = htmlspecialchars($data); // Променя HTML символите пр. <> и ги превръща в &lt;article&gt;
        return $data;
    }
?>
