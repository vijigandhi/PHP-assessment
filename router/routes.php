<?php 

return [
    '/' => function(){
        require "home.php";
    },

    '/home' => function() {
        require "home.php";
    },

    '/blogs' => function() {
        require "blogs.php";
    },

    '/blog_detail' => function() {
        require "blog_detail.php";
    },

    '/products' => function() {
        require "products.php";
    },

    '/product_detail' => function() {
        require "product_detail.php";
    },

    '/search' => function() {
        require "search.php";
    }
];

