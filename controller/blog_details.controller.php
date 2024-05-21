<?php
        if(isset($_GET['id'])) {
            $blog_id = $_GET['id'];

            $config = require "config.php";
            $db=require "model/dbconnection.php";
                $databaseConnection = new DatabaseConnection($config);
                $conn = $databaseConnection->dbConnection();

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