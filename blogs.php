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
        ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }

        li {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 10px;
        }

        li:hover {
            background-color: #f3f3f3;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        p{
            line-height: 24px;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "dckap", "Dckap2023Ecommerce", "ecommerce");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT blogs.id, blogs.title, blogs.content, blogs.status, users.author_name FROM blogs
            INNER JOIN users ON blogs.author_id = users.author_id
            WHERE blogs.status = 'published'";

            
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Blogs</h1>";
        echo "<ul>";

        while ($row = $result->fetch_assoc()) {
            echo "<li>";
            echo "<h3><a href='blog_detail.php?id=" . $row["id"] . "'>" . $row["title"] . "</a></h3>";
            echo "<p><strong>Id : </strong> " . $row["id"] . "</p>";
            echo "<p><strong>Content : </strong> " . $row["content"] . "</p>";
            echo "<p><strong>Status : </strong> " . $row["status"] . "</p>";
            echo "<p><strong>Author Name : </strong> " . $row["author_name"] . "</p>";
            echo "</li><br><br><br>";
        }

        echo "</ul>";
    } else {
        echo "<p>No published blogs found.</p>";
    }

    $conn->close();
?>
</body>
</html>
