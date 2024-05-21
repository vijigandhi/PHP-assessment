
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
    <header>
        <?php require("view/partials/navbar.php"); ?>
    </header>

    <main>
        <?php require("controller/products.controller.php"); ?>
    </main>
</body>
</html>
