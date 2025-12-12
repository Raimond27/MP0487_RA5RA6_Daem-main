<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/admin-options.css">
    <link rel="stylesheet" href="../View/css/UserAccount.css">
    <link rel="stylesheet" href="../View/css/Style.css">
    <script src="../View/js/jQuery/jquery-3.7.1.min.js"></script>
    <script src="../View/js/admin-option.js" defer></script>
    <script src="../View/js/menuHome.js"></script>
    <title>Account Page: Home</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <a href="../View/Home.php" style="text-decoration: none">
                    <h1 style="color:black">DAEM GAME</h1>
                </a>
            </div>
            <div class="menu">
                <script>
                    loadMenu();
                </script>
            </div>
            <div class="photos">
                <div class="cart">
                    <img id="cart" src="../View/img/images/carrito.png" alt="Cart" />
                </div>
                <a href="../View/UserAccount.php">
                    <?php if ($_SESSION['icon'] != "") { ?>
                        <img id="login" src="<?php echo $_SESSION['icon']; ?>" alt="loginIcon">
                    <?php } else { ?>
                        <img id="login" src="../View/img/images/login.png" alt="loginIcon">
                    <?php } ?>
                </a>
            </div>
    </header>

    <div class="rectangle">
        <div class="background">
            <div class="delivery-data">
                <a href="">
                    <div class="img">
                        <img src="../View/img/images/icon-envios.png" alt="Datos Envios">
                    </div>
                    <div class="text">
                        Delivery Detail
                    </div>
                </a>
            </div>
            <div class="Account-data">
                <a href="../View/AccountConfiguration.php">
                    <div class="img">
                        <img src="../View/img/images/icon-configuration.png" alt="Account Configuration">
                    </div>
                    <div class="text">
                        Account Configuration
                    </div>
                </a>
            </div>
            <div class="payment-data">
                <a href="">
                    <div class="img">
                        <img src="../View/img/images/icon-pago.png" alt="Payment Methods">
                    </div>
                    <div class="text">
                        My payment methods
                    </div>
                </a>
            </div>
            <div class="history-data">
                <a href="">
                    <div class="img">
                        <img src="../View/img/images/icon-history.png" alt="History">
                    </div>
                    <div class="text">
                        Purchase history
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="bottons">
        <form action="../Controller/UserController.php" method="post">
            <input type="submit" value="LOGOUT" name="logout" class="logout">
        </form>
    </div>
    <!-- If the user is logged and the user is admin show this options -->
    <?php if ($_SESSION['admin'] == 1) { ?>
        <div class="option-admin">
            <div class="options">
                <div class="admin-option">
                    <a href="../View/AdminConfiguration.php">
                        <img src="../View/img/images/control-panel.png" alt="Admin options" class="adminOption hidden" />
                    </a>
                </div>
                <div class="optionButton">
                    <img src="../View/img/images/plus.png" alt="Show options" class="optionButtonImg optionPlus" />
                    <img src="../View/img/images/close.png" alt="Exit options" class="optionButtonImg optionClose hidden" />
                </div>
            </div>
        </div>
    <?php } ?>
</body>

</html>