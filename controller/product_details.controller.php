<?php
    if(isset($_GET['id'])) {
        $product_id = $_GET['id'];

        $config = require "config.php";
        $db=require "dbconnection.php";
            $databaseConnection = new DatabaseConnection($config);
            $conn = $databaseConnection->dbConnection();

        $selectQuery = "SELECT * FROM products WHERE id = $product_id";
        $result = $conn->query($selectQuery);

        if ($result->num_rows > 0) {
            echo "<div class='product-details-container'>"; 
            while ($row = $result->fetch_assoc()) {
                echo "<div class='product-image'>";
                echo "<img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' alt='" . $row["product_name"] . "'>";
                echo "</div>";
                echo "<div class='product-content'>";
                echo "<h2>" . $row["product_name"] . "</h2>";
                echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
                echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
                echo "</div>";
            }
            echo "</div>"; 
        }  else {
            echo "Product not found";
        }

        $conn->close();

        
    } 
?>