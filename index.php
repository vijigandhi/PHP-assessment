

<?php 

require("view/partials/navbar.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shosify - Your Online Shoe Store</title>
<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    font-size: 16px;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Style the hero section */
.hero {
    background-color: #f5f5f5;
    padding: 100px 0;
    text-align: center;
}

.hero h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

.hero p {
    color: #666;
    margin-bottom: 40px;
}

.hero .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.hero .btn:hover {
    background-color: #0056b3;
}

/* Style the featured products section */
.featured-products {
    background-color: #fff;
    padding: 80px 0;
    text-align: center;
}

.featured-products h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 40px;
}

/* Style the about us section */
.about-us {
    background-color: #f5f5f5;
    padding: 80px 0;
    text-align: center;
}

.about-us h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 40px;
}

.about-us p {
    color: #666;
    margin-bottom: 40px;
}

.about-us .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.about-us .btn:hover {
    background-color: #0056b3;
}

/* Style the contact section */
.contact {
    background-color: #fff;
    padding: 80px 0;
    text-align: center;
}

.contact h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 40px;
}

.contact p {
    color: #666;
    margin-bottom: 40px;
}

.contact .btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
}

.contact .btn:hover {
    background-color: #0056b3;
}




</style>
</head>
<body>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#005eff" d="M0 32C0 14.3 14.3 0 32 0h72.9c27.5 0 52 17.6 60.7 43.8L257.7 320c30.1 .5 56.8 14.9 74 37l202.1-67.4c16.8-5.6 34.9 3.5 40.5 20.2s-3.5 34.9-20.2 40.5L352 417.7c-.9 52.2-43.5 94.3-96 94.3c-53 0-96-43-96-96c0-30.8 14.5-58.2 37-75.8L104.9 64H32C14.3 64 0 49.7 0 32zM244.8 134.5c-5.5-16.8 3.7-34.9 20.5-40.3L311 79.4l19.8 60.9 60.9-19.8L371.8 59.6l45.7-14.8c16.8-5.5 34.9 3.7 40.3 20.5l49.4 152.2c5.5 16.8-3.7 34.9-20.5 40.3L334.5 307.2c-16.8 5.5-34.9-3.7-40.3-20.5L244.8 134.5z"/></svg>
        <h1>Welcome to Shosify </h1>
        <p>Your ultimate destination for trendy and comfortable shoes.</p>
        <a href="products.php" class="btn">Shop Now</a>
    </div>
</section>

<!-- Featured Products -->
<section class="featured-products">
    <div class="container">
        <h2>Featured Products</h2>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us">
    <div class="container">
        <h2>About Us</h2>
        <p>Learn more about our company and what we stand for.</p>
        <a href="#" class="btn">Read More</a>
    </div>
</section>

<!-- Contact Section -->
<section class="contact">
    <div class="container">
        <h2>Contact Us</h2>
        <p>Have questions or feedback? Get in touch with us.</p>
        <a href="#" class="btn">Contact Us</a>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 Shosify. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
