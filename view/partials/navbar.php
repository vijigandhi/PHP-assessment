<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<title>E-Commerce Website</title>
<style>
    
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }
    .navbar {
        top: 0;
        position: sticky;
        background-color: black;
        overflow: hidden;
        display: flex;
        justify-content: space-between;
        height: 80px;
        align-items: center;
        padding: 0 20px; 
        }
    .menu {
        color: white;
        text-align: center;
        padding: 20px;
        text-decoration: none;
    }
    .menu:hover {
        background-color: #ddd;
        color: black;
    }
    .signup-div {
        display: flex;
        align-items: center;
    }
    .signup-btn {
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
        background-color: #007bff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .signup-btn:hover {
        background-color: #0056b3;
    }
    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    img {
        width: 40px;
        height: 40px;
        margin-left: 10px;
    }
    span {
        display: flex;
        align-items: center;
    }
    .search-bar {
        margin-right: 20px;
    }
    .search-bar input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .search-bar button {
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 8px 12px;
        cursor: pointer;
    }
    .search-bar button:hover {
        background-color: #0056b3;
    }

    .logo{
        width: 14%;
        display: flex;
        gap: 8px;
        cursor: pointer;
    }
    svg{
        width: 90px;
        height: 100px;
    }
    #site-name{
        color: white;
        margin-top: 18%;
    }
</style>
</head>
<body>

<!-- Navbar -->
<div class="navbar">
    <div class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#005eff" d="M0 32C0 14.3 14.3 0 32 0h72.9c27.5 0 52 17.6 60.7 43.8L257.7 320c30.1 .5 56.8 14.9 74 37l202.1-67.4c16.8-5.6 34.9 3.5 40.5 20.2s-3.5 34.9-20.2 40.5L352 417.7c-.9 52.2-43.5 94.3-96 94.3c-53 0-96-43-96-96c0-30.8 14.5-58.2 37-75.8L104.9 64H32C14.3 64 0 49.7 0 32zM244.8 134.5c-5.5-16.8 3.7-34.9 20.5-40.3L311 79.4l19.8 60.9 60.9-19.8L371.8 59.6l45.7-14.8c16.8-5.5 34.9 3.7 40.3 20.5l49.4 152.2c5.5 16.8-3.7 34.9-20.5 40.3L334.5 307.2c-16.8 5.5-34.9-3.7-40.3-20.5L244.8 134.5z"/></svg>
        <h1 id="site-name">Shosify</h1>
    </div>
<div class="nav-menus">
        <a class="menu" href="index.php">Home</a>
        <a class="menu" href="products.php">Shop-Products</a>
        <a class="menu" href="blogs.php">Blogs</a>
    </div>

   
    
        <div class="search-bar">
            <form action="search.php" method="post">
                <input type="text" placeholder="Search products..." name="search">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    
            </form>
        </div>
        <div class="signup-div">
            <a href='#' class='signup-btn' id='signup-toggle'>Signup</a>
        </div>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> Shosify. All rights reserved.</p>
</footer>

</body>
</html>


