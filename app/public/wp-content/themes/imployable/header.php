<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?> <?php bloginfo( 'imployable' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/dist/css/main.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="nav-header">
    <h1><a href="http://starter-theme.local/" id="logo">im<span class="navItem">ploy</span>able</a></h1>
        <nav class="main-nav">
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'main-nav', 
                    'container_class' => 'custom-menu-class' ) ); 
            ?>
        </nav> 
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
    </div>
</header>  

<nav class="nav-bar">
    <ul class="nav-links">
        <li><a href="http://starter-theme.local/about">About us</a></li>
        <li><a href="/">Social impact</a></li>
        <li><a href="/">Partnerships</a></li>
        <li><a href="/">News</a></li>
        <li><a href="http://starter-theme.local/contact">Contact</a></li>
    </ul>
    <div class="contact">
    <h2>Stay connected.</h2>
    <p>
        imployable provides an ecosystem of employment innovation
    </p>
    </div>
</nav>

<div class="cursor">
    <span class="cursor-text"></span>
</div>


    
