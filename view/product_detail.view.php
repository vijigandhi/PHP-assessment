
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<style>

.product-details-container {
    margin-top: 5%;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

h1{
    text-align: center;
}

img{
    width: 100%;
    height: 300px;
}

.product-image{
    width: 50%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}
.product-content {
    width: 30%;
    margin-right: 10%;
}

p{
    line-height: 24px;
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
    <h1>Product Details</h1>
    <main>
        <?php require("controller/product_details.controller.php"); ?>
    </main>
    <a href="products.php" class="back-link">Back</a>

</body>

</html>