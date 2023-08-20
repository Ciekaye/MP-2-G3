<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/Innovatech-1 (1).png" type="image/x-icon">
    <link rel="shortcut icon" href="Images/Innovatech-1 (1).png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <script type="text/javascript" src="JS/main.js"></script>
</head>
<body>
    <header class="header">
        <nav>
            <div class="logo">
                <a href="index.php">
                    <img src="Images/Innovatech-1.png" alt="Logo">
                </a>
            </div>
            <div class="navigation">
                <input type="checkbox" class="toggle-menu">
                <div class="hamburger"></div>
                <ul class="menu">
                    <li><a href="index.php" class="<?= isPageActive('index.php'); ?>">Home</a></li>
                    <li><a href="about-us.php" class="<?= isPageActive('about-us.php'); ?>">About Us</a></li>
                    <li><a href="why-us.php" class="<?= isPageActive('why-us.php'); ?>">Why Us</a></li>
                    <li class="submenu">
                        <a href="#" class="with-submenu <?= isPageActive('services.php'); ?>">Features<span class="arrow">▼</span></a>
                        <ul class="submenu-content">
                            <li><a href="services.php">Services</a></li>
                            <li><a href="course.php">Course</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="pricing.php" class="<?= isPageActive('pricing.php'); ?>">Pricing</a></li>
                    <li><a href="contact-us.php" class="<?= isPageActive('contact-us.php'); ?>">Contact Us</a></li>
                    <li class="user-icon">
                        <img src="Images/profile-user.png" alt="User Icon">
                    </li>
                    <li><a href="signin.php" class="sign-in-button">Sign In</a></li>
                </ul>
            </div>
        </nav>
    </header>