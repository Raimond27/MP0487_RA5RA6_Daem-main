<?php session_start();
// If session loggin is not defined, we defined new session
if (!isset($_SESSION['loggin'])) {
    $_SESSION['loggin'] = false;
}
// If session icon is not defined, we defined a new session
if (!isset($_SESSION['admin'])) {
    $_SESSION['admin'] = 0;
}
// If session icon is not defined, we defined a new session
if (!isset($_SESSION['icon'])) {
    $_SESSION['icon'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/Style.css">
    <link rel="stylesheet" href="../View/css/Home.css">
    <link rel="stylesheet" href="../View/js/jQuery/slick/slick.css">
    <link rel="stylesheet" href="../View/js/jQuery/slick/slick-theme.css">
    <link rel="stylesheet" href="../View/css/admin-options.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../View/js/jQuery/additional-methods.js"></script>
    <script src="../View/js/jQuery/jquery-3.7.1.min.js"></script>
    <script src="../View/js/jQuery/jquery.validate.js"></script>
    <script src="../View/js/jQuery/slick/slick.js"></script>
    <script src="../View/js/showProducts.js"></script>
    <script src="../View/js/admin-option.js"></script>
    <script src="../View/js/viewProduct.js"></script>
    <script src="../View/js/sliderHome.js" defer></script>
    <script src="../View/js/menuHome.js"></script>
    <script src="../View/js/cookies.js" defer></script>

    <script>
        $(document).ready(function() {
            showProducts(null);
        });
    </script>

    <title>Daem Game - Home</title>
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
    <div class="title" style="text-decoration: none; font-family:Roboto Condensed; color:black">
        NEW ARRIVALS
    </div>

    <div class="slider-container">
        <div class="slider">
            <div class="productTrend">
                <img src="../View/img/products/slider/vRising.jpg" alt="product">
                <div class="caption">
                    <h1>v Rising</h1>
                </div>
            </div>
            <div class="productTrend">
                <img src="../View/img/products/slider/ghost.jpg" alt="product">
                <div class="caption">
                    <h1>Ghost of Tsushima</h1>
                </div>
            </div>
            <div class="productTrend">
                <img src="../View/img/products/slider/hades.jpg" alt="product">
                <div class="caption">
                    <h1>Hades</h1>
                </div>
            </div>
            <div class="productTrend">
                <img src="../View/img/products/slider/fallout76.jpg" alt="product">
                <div class="caption">
                    <h1>Fallout 76: Atlantic City</h1>
                </div>
            </div>
            <div class="productTrend">
                <img src="../View/img/products/slider/hades2.jpg" alt="product">
                <div class="caption">
                    <h1>Hades II</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="trends" style="text-decoration: none; font-family:Roboto Condensed; color:black">
        TRENDS
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

    <div class="cookies-notice" id="cookies-notice">
        <img class="cookie" src="../View/img/images/cookie.png" alt="Cookie">
        <h3 class="title">Cookies</h3>
        <p class="paragraph">We use our own and third-party cookies to improve our services.</p>
        <button class="button" id="btn-accept-cookies">Agree</button>
        <a class="link" href="../View/html/cookieNotice.html">Cookie Notice</a>
    </div>
    <div class="background-cookies-notice" id="background-cookies-notice"></div>
    <script src="../View/js/cookies.js"></script>
</body>

</html>