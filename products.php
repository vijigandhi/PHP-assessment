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
   
        .grid-container {
            font-family: Arial, sans-serif;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-row: 1 /2;
            gap: 50px;
        }

    
        .grid-item {
            border: 2px solid #ddd;
            padding: 15px;
            box-shadow: 2px 2px 5px 3px gray;
            
        }

        .grid-item img {
            width: 90%;
            height: 150px;
        }
        a{
            text-decoration: none;
            color:black;
        }
    </style>
</head>

<body>
<?php
    $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "ecommerce");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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

</body>
</html>
