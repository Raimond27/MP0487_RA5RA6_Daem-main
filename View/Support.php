<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/admin-options.css">
    <link rel="stylesheet" href="../View/css/Support.css">
    <link rel="stylesheet" href="../View/css/Style.css">
    <script src="../View/js/menuHome.js"></script>
    <script src="../View/js/admin-option.js"></script>
    <title>Daem Game - Support</title>
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

    <div class="contact-container">
        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>If you have any questions or concerns, feel free to get in touch with us. We're here to help!</p>
            <div class="info">
                <img src="../View/img/images/ubication.png" alt="Location">
                <p>123 Gaming Street, Cityville, Countryland</p>
            </div>
            <div class="info">
                <img src="../View/img/images/mail.png" alt="Email">
                <p>Email: info@daemgames.com</p>
            </div>
            <div class="info">
                <img src="../View/img/images/phone.png" alt="Phone">
                <p>Phone: +123 456 7890</p>
            </div>
        </div>
        <div class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
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