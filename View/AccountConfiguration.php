<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/js/jQuery/slick/slick-theme.css">
    <link rel="stylesheet" href="../View/js/jQuery/slick/slick.css">
    <link rel="stylesheet" href="../View/css/admin-options.css">
    <link rel="stylesheet" href="../View/css/ProfilePage.css">
    <link rel="stylesheet" href="../View/css/Style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../View/js/jQuery/jquery-3.7.1.min.js"></script>
    <script src="../View/js/jQuery/jquery.validate.js"></script>
    <script src="../View/js/admin-option.js" defer></script>
    <script src="../View/js/data-user.js"></script>
    <script src="../View/js/menuHome.js"></script>

    <title>Account Page: Profile</title>
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

    <div class="header-form">
        <div class="account">
            <a href="../View/UserAccount.php">
                My account
            </a>
        </div>
        <div class="simbol">
            >
        </div>
        <div class="settings"> Settings</div>
    </div>
    <div class="all-form">
        <div class="profile-icon">
            <?php if ($_SESSION['icon'] != "") { ?>
                <img id="icon" src="<?php echo $_SESSION['icon']; ?>" alt="loginIcon">
            <?php } else { ?>
                <img id="icon" src="../View/img/images/login.png" alt="loginIcon">
            <?php } ?>
        </div>
        <div class="form-container <?php echo $_SESSION['admin'] == 1 ? 'admin' : 'not-admin'; ?>">
            <div class="form-background">
                <div class="form">
                    <form action="../Controller/UserController.php" method="post">
                        <div class="first-name">
                            <label for="name">Name User:</label>
                            <input type="text" style="background-color:transparent;border: 0;" required placeholder="FIRST NAME" name="name">
                        </div>
                        <div class="last-name">
                            <label for="surname">Surname User:</label>
                            <input type="text" style="background-color:transparent;border: 0;" required placeholder="LAST NAME" name="surname">
                        </div>
                        <div class="password">
                            <label for="password">New Password:</label>
                            <input type="password" style="background-color:transparent;border: 0;" required placeholder="NEW PASSWORD" name="password">
                        </div>
                        <div class="password">
                            <label for="confirmPassword">Confirm New Password:</label>
                            <input type="password" style="background-color:transparent;border: 0;" required placeholder="CONFIRM PASSWORD" name="confirmPassword">
                        </div>
                </div>
                <div class="edit">
                    <input type="submit" value="SAVE CHANGES" class="save" name="update">
                </div>
                </form>
            </div>
            <?php if ($_SESSION['admin'] == 1) { ?>
                <div class="rectangle">
                    <div class="addProduct">
                        <button class="add" onclick="showPopup('createProduct')">1. Add Product</button>
                    </div>
                    <div class="updateProduct">
                        <button class="update" onclick="showPopup('editProduct')">2. Update Product</button>
                    </div>
                    <div class="addPlatform">
                        <button class="addPlatformProduct" onclick="showPopup('addProduct-Platform')">3. Add Platform to a Product</button>
                    </div>
                    <div class="deleteProduct">
                        <button class="deleteproducts" onclick="showPopup('deleteProductPopup')">4. Delete Product</button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if ($_SESSION['admin'] == 1) { ?>
        <div class="option-admin">
            <div class="options">
                <div class="admin-option">
                    <a href="../View/AccountConfiguration.php">
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

    <div class="bottons">
        <form action="../Controller/UserController.php" method="post">
            <input type="submit" value="DELETE ACCOUNT" name="delete" class="delete">
        </form>
    </div>

    <!--POP UP ADD PRODUCT -->
    <div id="overlay"></div>
    <div id="createProduct" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Add a new Product</h2>
            <form action="../Controller/ProductController.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend>Create a Product</legend>
                    <div>
                        <label for="productName">Product name:</label>
                        <input type="text" name="newProductName" class="productName" required>
                    </div>
                    <div>
                        <label for="description">Description:</label>
                        <textarea class="description" name="newDescription" cols="80" rows="2" required></textarea>
                    </div>
                    <div>
                        <label for="stock">Stock:</label>
                        <input type="number" name="newStock" class="stock" required>
                    </div>
                    <div>
                        <label for="discount">Percentage discount:</label>
                        <input type="number" name="newDiscount" class="discount" required>
                    </div>
                    <div>
                        <label for="totalPrice">Total price:</label>
                        <input type="text" name="newTotalPrice" class="totalPrice" required>
                    </div>
                    <div class="platformProduct">
                        <legend>Platform</legend>
                        <label><input type="radio" name="type" value="Pc" require>PC</label>
                        <label><input type="radio" name="type" value="Xbox">Xbox</label>
                        <label><input type="radio" name="type" value="Playstation">PlayStation</label>
                        <label><input type="radio" name="type" value="Nintendo">Nintendo</label>
                    </div>
                    <div class="newImageUpload">
                        <label for="platformImage">Upload Image:</label><br>
                        <input type="file" name="imagesGames" id="fileUpload" require>
                    </div>

                </fieldset>
                <div class="send">
                    <button type="submit" name="createNewProduct" class="create">Create Product</button>
                </div>
            </form>
        </div>
    </div>

    <!--POP UP UPDATE -->
    <div id="overlay"></div>
    <div id="editProduct" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Update Information Product</h2>
            <form id="updateProduct" action="../Controller/ProductController.php" method="POST">
                <fieldset>
                    <legend>Product Details</legend>
                    <div id="selectUpdate">
                        <!-- Aquí irán los selectores -->
                    </div>
                    <div>
                        <label for="productName">Product name:</label>
                        <input type="text" name="productName" class="productName" required>
                    </div>
                    <div>
                        <input type="text" name="productId" hidden>
                    </div>
                    <div>
                        <label for="description">Description:</label>
                        <textarea class="description" name="description" cols="80" rows="2" required></textarea>
                    </div>
                    <div>
                        <label for="stock">Stock:</label>
                        <input type="number" name="stock" class="stock" required>
                    </div>
                    <div>
                        <label for="discount">Percentage discount:</label>
                        <input type="number" name="discount" class="discount" required>
                    </div>
                    <div>
                        <label for="totalPrice">Total price:</label>
                        <input type="text" name="totalPrice" class="totalPrice" required>
                    </div>
                </fieldset>
                <button type="submit" name="updateProduct">Update Data</button>
            </form>
        </div>
    </div>
    <!--POP UP ADD PLATAFORM TO PRODUCT -->
    <div id="overlay"></div>
    <div id="addProduct-Platform" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Add a new Platform to a Product</h2>
            <form id="updateProduct-Platform" action="../Controller/ProductController.php" method="POST" enctype="multipart/form-data">
                <div id="selectAddProduct-Platform">
                    <!-- Aquí irán los selectores -->
                </div>
                <div id="radioPlatformAvaible">
                    <!-- Aquí se agregarán los radios -->
                </div>
                <div id="addImagePlatform" style="display: none;">
                    <label for="platformImage">Upload Image:</label><br>
                    <input type="file" id="platformImage" name="platformImage" required>
                </div>
                <button type="submit" name="addProductPlatform">Add Plataform to a Product</button>
            </form>
        </div>
    </div>
    <!--POP UP DELETE -->
    <div id="overlay"></div>
    <div id="deleteProductPopup" class="popup">
        <div class="popup-content">
            <span class="close">&times;</span>
            <h2>Delete Product</h2>
            <form action="../Controller/ProductController.php" method="POST">
                <div id="selectDelete">
                    <!-- Aquí irán los selectores -->
                </div>
                <button type="submit" name="deleteProduct">Delete Product</button>
            </form>
        </div>
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