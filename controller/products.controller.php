<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);

    $config = require "config.php";
    $db=require "model/dbconnection.php";
        $databaseConnection = new DatabaseConnection($config);
        $conn = $databaseConnection->dbConnection();

    $selectQuery = "SELECT * FROM products";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        echo "<h1 style='text-align: center; margin-top: 20px;'>Products</h1>";
        echo "<div class='grid-container'>";

        while ($row = $result->fetch_assoc()) {
            echo "<a href='product_detail.php?id=" . $row["id"] . "' class='product-link'>";
            echo "<div class='grid-item'>";
            echo "<h2>" . $row["product_name"] . "</h2>";
            echo "<img src='data:image/jpeg;base64," . base64_encode($row["image"]) . "' alt='" . $row["product_name"] . "'>";
            echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
            echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
            echo "</div>";
            echo "</a>";
        }
 
        echo "</div><br><br>"; 
    } else {
        echo "0 results";
    }

    $conn->close();
?>