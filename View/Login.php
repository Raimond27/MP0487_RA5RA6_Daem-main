<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="../View/js/admin-option.js" defer></script>
    <link rel="stylesheet" href="../View/css/Login.css">
    <title>Login</title>
</head>

<body>
    <span class="x">
        <a href="../View/Home.php">
            &times;
        </a>
    </span>
    <div class="form">
        <h1>LOGIN</h1>
        <div class="social">
            <img src="../View/img/images/google.jpg" alt="google" class="redes">
            <img src="../View/img/images/facebook.png" alt="facebook" class="redes">
            <img src="../View/img/images/twitter.png" alt="twitter" class="redes">
        </div>
        <form action="../Controller/UserController.php" method="post">
            <div class="username">
                <input type="email" style="background-color:transparent;border: 0;" required placeholder="EMAIL" name="email">
            </div>
            <div class="password">
                <input type="password" style="background-color:transparent;border: 0;" required placeholder="PASSWORD" name="password">
            </div>
            <div class="forgot">
                Forgot your password?
            </div>

            <input type="submit" style="text-decoration: none;" value="SIGN IN" id="submit" name="login">
            <div class="register">
                <a href="../View/CreateAccount.php">
                    Need an account?
                </a>
                <br>
                <a href="../View/CreateAdminAccount.php">
                    Need an administrator account?
                </a>
            </div>
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