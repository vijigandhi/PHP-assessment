
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
<header>
        <?php require("view/partials/navbar.php"); ?>
    </header>
    <div class="container">
   
        <h1>Blog Details</h1>
        <main>
            <?php require("controller/blog_details.controller.php"); ?>
        </main>
        
    </div>
    <a href="blogs.php" class="back-link">Back</a>
</body>
</html>
