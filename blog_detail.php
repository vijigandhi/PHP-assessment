<?php 
require("view/partials/navbar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .blog-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-top: 30px;
            color: #333;
        }
        .blog-details h2 {
            color: #333;
            margin-bottom: 10px;
        }
        .blog-details p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .blog-details p strong {
            color: #333;
        }
        .blog-details .author-info {
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
        .blog-details .author-info p {
            margin: 0;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog Details</h1>
        <?php
        if(isset($_GET['id'])) {
            $blog_id = $_GET['id'];

            $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "ecommerce");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $selectQuery = "SELECT blogs.id, blogs.title, blogs.content, blogs.status, users.author_name FROM blogs
            INNER JOIN users ON blogs.author_id = users.author_id
            WHERE blogs.id = $blog_id AND blogs.status = 'published'";
            $result = $conn->query($selectQuery);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                echo "<div class='blog-details'>";
                echo "<h2>" . $row["title"] . "</h2>";
                echo "<p><strong>ID:</strong> " . $row["id"] . "</p>";
                echo "<p><strong>Content:</strong> " . $row["content"] . "</p>";
                echo "<p><strong>Status:</strong> " . $row["status"] . "</p>";
                echo "<div class='author-info'>";
                echo "<p><strong>Author Name:</strong> " . $row["author_name"] . "</p>";
                echo "</div>";
                echo "</div>";

            } else {
                echo "<p>No blog found.</p>";
            }

            $conn->close();
        } else {
            echo "<p>No blog ID provided.</p>";
        }
        ?>
        <a href="blogs.php" class="back-link">Back</a>
    </div>
</body>
</html>
