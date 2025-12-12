<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/admin-options.css">
    <link rel="stylesheet" href="../View/css/Style.css">
    <link rel="stylesheet" href="../View/css/faq.css">
    <script src="../View/js/admin-option.js"></script>
    <script src="../View/js/menuHome.js"></script>
    <script src="../View/js/faq.js" defer></script>
    <title>FAQ - Daem Games</title>
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
    <div class="faq-container">
        <header class="faq-header">
            <h1>FAQ Daem Game</h1>
            <p>Everything you need to know about Daem Games.</p>
            <div class="search-container">🔍
                <input type="text" id="searchInput" placeholder="Search" class="search-box">
            </div>
        </header>

        <div class="faq-section">
            <h2>Ordering and products</h2>
            <div class="faq-item">
                <button class="faq-question">What types of games do you sell?</button>
                <div class="faq-answer">
                    <p>Our platform sells a wide variety of video games for different platforms. You can find video
                        games for the following platforms: PC, PlayStation, Xbox, or Nintendo. We sell both digital and
                        physical products for all these platforms.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Are there any age restrictions for buying certain games?</button>
                <div class="faq-answer">
                    <p>The games are classified by recommended age, this classification is made by organizations such as
                        PEGI (Pan European Game Information), which provide guidance on the appropriate age to play
                        certain games depending on their content. But users can buy video games by skipping this age
                        recommendation.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How long does it take for my game to arrive after purchasing it?</button>
                <div class="faq-answer">
                    <p>The delivery time may vary depending on the type of product purchased. If the purchased product
                        is a digital one, you will receive an email with the product download code once the payment is
                        made. However, if the product is physical, the waiting time may vary depending on the shipping
                        company.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Can I buy download codes to give as gifts?</button>
                <div class="faq-answer">
                    <p>Yes, users can purchase download codes to give as gifts. The purchased codes will be received by
                        the user via email. If the code has not been used, it can be given to another person outside.
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you offer discounts or special promotions?</button>
                <div class="faq-answer">
                    <p>Yes, we regularly offer discounts and special promotions on a variety of games. We recommend
                        subscribing to our newsletter to receive updates on our offers.</p>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Payment</h2>
            <div class="faq-item">
                <button class="faq-question">Do you accept different forms of payment?</button>
                <div class="faq-answer">
                    <p>Yes, we accept a variety of payment methods, including credit cards, debit cards, PayPal, and
                        other online payment options.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">How long does it take to process my payment?</button>
                <div class="faq-answer">
                    <p>The processing time for your payment may vary depending on the payment method that users choose.
                        Typically, payments made with credit/debit cards are processed immediately, while payments via
                        PayPal may take up to 1-2 business days to fully process.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Are there any additional charges for using certain payment
                    methods?</button>
                <div class="faq-answer">
                    <p>No, we don’t charge any additional fees for using any payment method on our online store.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do additional taxes apply to my purchases?</button>
                <div class="faq-answer">
                    <p>Yes, applicable taxes may vary depending on your location and local tax laws. Taxes will be
                        automatically calculated during the checkout process and added to the total of your purchase.
                    </p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do they offer refunds?</button>
                <div class="faq-answer">
                    <p>We offer refunds for our services, as long as the purchase date of the product has not exceeded
                        30 days or they have not played more than 7 hours. If users meet these requirements, they have
                        the possibility of requesting a refund for the desired product.</p>
                </div>
            </div>
        </div>

        <div class="faq-section">
            <h2>Account and security</h2>
            <div class="faq-item">
                <button class="faq-question">Do you offer customer service in case of issues with my order?</button>
                <div class="faq-answer">
                    <p>Yes, our platform offers customer service. To find the information, you can go to the Contact
                        section of our website, or you can send us an email at prueba@gmail.com or call us at the
                        following phone number: +34 (XXX-XXX-XXX).</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Do you offer any kind of warranty on the games you sell?</button>
                <div class="faq-answer">
                    <p>Yes, we offer a quality guarantee on all the games we sell. If you experience any technical or
                        operational issues with a game, feel free to contact our support team for assistance and
                        possible solutions.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What security measures do you have to protect customer information during
                    transactions?</button>
                <div class="faq-answer">
                    <p>We have robust security measures in place to protect customer information during transactions,
                        including SSL encryption and compliance with industry security standards.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">What should I do if I forgot my password or am having trouble accessing my
                    account?</button>
                <div class="faq-answer">
                    <p>If you have forgotten your password or are having trouble logging in to your account, don't
                        worry. You can easily reset your password by following the "Forgot your password?" link on the
                        login page. You will be asked to enter the email address associated with your account, and then
                        you will receive instructions on how to reset your password.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Is it possible to delete the account?</button>
                <div class="faq-answer">
                    <p>Yes, it is possible to delete a Daem Game account. In order for the user to delete an account,
                        they first need to log in with their account. Once logged in, they should go to their profile
                        account. In their profile account, they will find a button labeled "Delete account"; clicking on
                        it will delete their account.</p>
                </div>
            </div>
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