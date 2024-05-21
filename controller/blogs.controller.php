<?php
   $config = require "config.php";
   $db=require "model/dbconnection.php";
       $databaseConnection = new DatabaseConnection($config);
       $conn = $databaseConnection->dbConnection();

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