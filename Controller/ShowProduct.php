<?php

session_start();

$showProduct = new showProduct();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receives through an AJAX request the type of platform that the product is.
    if (isset($_POST['getProductByPlataform'])) {
        $platform = $_POST['getProductByPlataform'];
        if ($platform != null) {
            $showProduct->getProducts($platform);
        } else {
            $showProduct->getTrendingProducts();
        }
    }
    // Show the information of the product in the page product.php
    if (isset($_POST['idProduct'])) {
        $idProduct = $_POST['idProduct'];
        $idPlatform = $_POST['idPlatform'];
        $showProduct->showProductDetails($idProduct, $idPlatform);
    }
    // Receives through an AJAX request, and show all products of the shop in a select
    if (isset($_POST['getProduct'])) {
        $showProduct->renderProductOptions();
    }
    // Get the information of the product selected
    if (isset($_POST['getProductDetails'])) {
        $idProduct = $_POST['getProductDetails'];
        $showProduct->getProductDetails($idProduct);
    }
}


class showProduct
{
    private $conn;
    // Constructor of the class ProductController
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mp0487_daemgame";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $_SESSION['error'] = "Connection failed: " . $e->getMessage();
        }
    }

    public function getProducts($platform)
    {
        $query = "SELECT p.*, CONCAT(ROUND(p.Precio - (p.Precio * p.Oferta / 100), 2), ' €') AS FinalPrice,
                  pp.Imagen, plt.id
                  FROM PRODUCTO p
                  INNER JOIN producto_plataforma pp ON p.IdProducto = pp.id_producto
                  INNER JOIN plataforma plt ON pp.id_plataforma = plt.id
                  WHERE plt.nombre = :platform";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':platform', $platform);
        $stmt->execute();
        $dataProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->conn = null;

        header('Content-Type: application/json');
        echo json_encode($dataProduct);
    }

    public function getTrendingProducts()
    {
        $query = "SELECT p.*, CONCAT(ROUND(Precio - (Precio * Oferta / 100), 2), ' €') AS FinalPrice,
                  pp.Imagen, plt.id 
                  FROM PRODUCTO p
                  INNER JOIN producto_plataforma pp ON p.IdProducto = pp.id_producto
                  INNER JOIN plataforma plt ON pp.id_plataforma = plt.id
                  WHERE pp.Tendencia = 1";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $dataProduct = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->conn = null;

        header('Content-Type: application/json');
        echo json_encode($dataProduct);
    }

    public function showProductDetails($idProduct, $idPlatform)
    {
        $sql = "SELECT p.*, CONCAT(p.Oferta, '%') AS Offer, CONCAT(p.Precio, '€') AS Price, 
                CONCAT(ROUND(p.Precio - (p.Precio * p.Oferta / 100), 2), '€') AS FinalPrice, pp.*, pl.*
                FROM Producto p 
                INNER JOIN producto_plataforma pp ON p.IdProducto = pp.id_producto
                INNER JOIN plataforma pl ON pp.id_plataforma = pl.id
                WHERE p.IdProducto = :idProduct AND pp.id_plataforma = :idPlaftorm";

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':idProduct', $idProduct);
        $stmt->bindParam(':idPlaftorm', $idPlatform);
        $stmt->execute();
        $productDetails = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->conn = null;

        header('Content-Type: application/json');
        echo json_encode($productDetails);
    }


    public function renderProductOptions()
    {
        $stmt = $this->conn->prepare("SELECT idProducto, Nombre FROM PRODUCTO ORDER BY Nombre");
        $stmt->execute();
        $productOptions = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->conn = null;

        header('Content-Type: application/json');
        echo json_encode($productOptions);
    }

    public function getProductDetails($productId)
    {
        $stmt = $this->conn->prepare("SELECT * FROM producto WHERE idProducto = :id");
        $stmt->bindParam(':id', $productId, PDO::PARAM_INT);
        $stmt->execute();
        $product = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->conn = null;

        header('Content-Type: application/json');
        echo json_encode($product);
    }
}
