
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
    <header>
        <?php require("view/partials/navbar.php"); ?>
    </header>

    <main>
        <?php require("controller/blogs.controller.php"); ?>
    </main>
</body>
</html>
