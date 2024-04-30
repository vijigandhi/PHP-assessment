<?php 
    require("view/partials/navbar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

.product-details-container {
    margin-top: 5%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

h1{
    text-align: center;
}

img{
    width: 100%;
    height: 300px;
}

.product-image{
    width: 50%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.product-content {
    width: 30%;
    margin-right: 10%;
}

p{
    line-height: 24px;
}

.back-link {
    display: block;
    text-align: center;
    margin-top: 20px;
}
</style>
</head>
<body>
    <h1>Product Details</h1>



<?php
    if(isset($_GET['id'])) {
        $product_id = $_GET['id'];

        $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "ecommerce");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $selectQuery = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($selectQuery);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            echo "<div class='product-details-container'>";
            echo "<div class='product-image'>";
            echo "<img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' alt='" . $row["product_name"] . "'>";
            echo "</div>";
            echo "<div class='product-content'>";
            echo "<h2>" . $row["product_name"] . "</h2>";
            echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
            echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
            echo "</div>";
            echo "</div>";

        } else {
            echo "Product not found";
        }

        $conn->close();

        
    } 
?>
<a href="products.php" class="back-link">Back</a>

</body>

</html>