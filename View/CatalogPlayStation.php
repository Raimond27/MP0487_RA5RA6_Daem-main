<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../View/css/admin-options.css">
    <link rel="stylesheet" href="../View/css/Catalog.css" />
    <link rel="stylesheet" href="../View/css/Style.css">
    <script src="../View/js/admin-option.js" defer></script>
    <script src="../View/js/showProducts.js"></script>
    <script src="../View/js/viewProduct.js"></script>
    <script src="../View/js/menuHome.js"></script>
    <script>
        $(document).ready(function() {
            showProducts('PlayStation');
        });
    </script>
    <title>Catalog PlayStation</title>
</head>

<body>
    <header>
        <div class="header">
            <div class="logo">
                <a href="../View/Home.php" style="text-decoration: none; color: black">
                    <h1 style="color: black">DAEM GAME</h1>
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
                <div class="login">
                    <?php if ($_SESSION['loggin'] == false) { ?>
                        <a href="../View/Login.php">
                            <img id="login" src="../View/img/images/login.png" alt="Login">
                        </a>
                    <?php } else { ?>
                        <a href="../View/UserAccount.php">
                            <?php if ($_SESSION['icon'] != "") { ?>
                                <img id="login" src="<?php echo $_SESSION['icon']; ?>" alt="Login">
                            <?php } else { ?>
                                <img id="login" src="../View/img/images/login.png" alt="Login">
                            <?php } ?>
                        </a>
                    <?php } ?>
                    </a>
                </div>
            </div>
        </div>
    </header>


    <div class="categories">
        <div class="center"></div>
        CATEGORIES
    </div>
    <div class="profile">
        <div class="center"></div>
        PRICE
    </div>


    <div id="productsContainer">
        <!-- Container for products -->
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