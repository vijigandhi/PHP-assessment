<?php 
require("product_detail.php");

$conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "ecommerce");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['search'])) {
    $searchTerm = $conn->real_escape_string(strtolower($_POST['search']));

    $productQuery = "SELECT * FROM products WHERE product_name LIKE '%$searchTerm%'";
    $productResult = $conn->query($productQuery);

    if ($productResult->num_rows > 0) {
        echo "<div class='product-details-container'>"; 
        while ($row = $productResult->fetch_assoc()) {
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
    } 

    $blogQuery = "SELECT blogs.id, blogs.title, blogs.content, blogs.status, users.author_name FROM blogs
            INNER JOIN users ON blogs.author_id = users.author_id
            WHERE blogs.status = 'published' AND (blogs.title LIKE '%$searchTerm%' OR blogs.content LIKE '%$searchTerm%')";
    
    $blogResult = $conn->query($blogQuery);

    if ($blogResult->num_rows > 0) {
        echo "<h1>Blogs</h1>";
        echo "<ul>";

        while ($row = $blogResult->fetch_assoc()) {
            echo "<li>";
            echo "<h3>Title : " . $row["title"] . "</h3>";
            echo "<p><strong>Id : </strong> " . $row["id"] . "</p>";
            echo "<p><strong>Content : </strong> " . $row["content"] . "</p>";
            echo "<p><strong>Status : </strong> " . $row["status"] . "</p>";
            echo "<p><strong>Author Name : </strong> " . $row["author_name"] . "</p>";
            echo "</li>";
        }

        echo "</ul>";
    } 
}

$conn->close(); 
?>
