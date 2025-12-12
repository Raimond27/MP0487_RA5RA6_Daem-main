<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/CreateAccount.css">
    <link rel="stylesheet" href="../View/js/slick/slick.css">
    <link rel="stylesheet" href="../View/js/slick/slick-theme.css">
    <script src="../View/js/jQuery/jquery-3.7.1.min.js"></script>
    <script src="../View/js/jQuery/jquery.validate.js"></script>
    <script src="../View/js/jQuery/additional-methods.js"></script>
    <script src="../View/js/validatorForm.js" defer></script>
    <script src="../View/js/admin-option.js" defer></script>
    <title>Create an Account</title>
</head>

<body>
    <span class="closeUser">
        <a href="../View/Login.php">
            &times;
        </a>
    </span>

    <div class="form">
        <h1>PERSONAL INFORMATION</h1>
        <form id="form_signup" action="../Controller/UserController.php" method="post">
            <div class="name">
                <input type="text" name="name" style="background-color:transparent;border: 0;" required placeholder="NAME" pattern="[A-Za-z\s]+" title="Only letters allowed">
            </div>
            <div class="surname">
                <input type="text" name="surname" style="background-color:transparent;border: 0;" required placeholder="SURNAME" pattern="[A-Za-z\s]+" title="Only letters allowed">
            </div>
            <div class="email">
                <input type="email" name="username" style="background-color:transparent;border: 0;" required placeholder="EMAIL">
            </div>
            <div class="password">
                <input type="password" name="password" style="background-color:transparent;border: 0;" required placeholder="PASSWORD" pattern="^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9]+$">
            </div>
            <input type="submit" value="CREATE ACCOUNT" id="submit" name="register">
        </form>
    </div>
    <!--POP UP MESSAGE -->
    <div id="overlay"></div>
    <div id="messagePopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <div id="messageContent">
                <!-- Aquí se mostrarán los mensajes -->
            </div>
        </div>
    </div>
    <?php
    if (isset($_SESSION['correctMessage'])) {
        $message = $_SESSION['correctMessage']['message'];
        $context = $_SESSION['correctMessage']['context'];
        echo "<script>document.addEventListener('DOMContentLoaded', function() { showMessage('$context','$message', false); });</script>";
        unset($_SESSION['correctMessage']);
    }

    if (isset($_SESSION['failMessage'])) {
        $message = $_SESSION['failMessage']['message'];
        $context = $_SESSION['failMessage']['context'];
        echo "<script>document.addEventListener('DOMContentLoaded', function() { showMessage('$context','$message', true); });</script>";
        unset($_SESSION['failMessage']);
    }
    ?>
</body>

</html>