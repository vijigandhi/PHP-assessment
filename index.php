<?php

$request = $_SERVER['REQUEST_URI'];
// echo $request;

switch ($request){
    case '/':
        require 'home.php';
        break;

    case '/home';
            require 'home.php';
            break;

    case '/home.php';
            require 'home.php';
            break;
    
    case '/blog_detail':
        require 'blog_detail.php';
        break;
    
    case '/blogs':
        require 'blogs.php';
        break;

    case '/products':
        require 'products.php';
        break;
    
    case '/products':
        require 'products.php';
        break;

    case '/product_detail':
        require 'product_detail.php';
        break; 
        
    case '/search':
        require 'search.php';
        break;
}