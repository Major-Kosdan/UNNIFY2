<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNNify - Buy. Sell. LionStyle.</title>
    <link rel="stylesheet" href="/campus_buy_and_sell/assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>

<header class="navbar">
    <div class="nav-container">
        <a href="/campus_buy_and_sell/index.php" class="logo">
            <img src="/campus_buy_and_sell/assets/images/unnify.png" alt="UNNify Logo">
            <span>UNNify</span>
        </a>

        <nav class="nav-links">
            <a href="/campus_buy_and_sell/index.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'index.php'){ echo 'active'; } ?>">Home</a>
            <a href="/campus_buy_and_sell/products/categories.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'categories.php'){ echo 'active'; } ?>">Categories</a>
            <a href="/campus_buy_and_sell/contact.php" class="<?php if(basename($_SERVER['PHP_SELF']) == 'contact.php'){ echo 'active'; } ?>">Contact</a>
            <a href="/campus_buy_and_sell/auth/login.php" class="login-btn <?php if(basename($_SERVER['PHP_SELF']) == 'login.php'){ echo 'active'; } ?>">Login</a>
            <a href="/campus_buy_and_sell/auth/register.php" class="register-btn <?php if(basename($_SERVER['PHP_SELF']) == 'register.php'){ echo 'active'; } ?>">Register</a>
        </nav>

        <!-- Hamburger Menu -->
        <div class="hamburger" onclick="toggleMenu()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <nav class="mobile-menu" id="mobileMenu">
        <a href="index.php">Home</a>
        <a href="products/categories.php">Categories</a>
        <a href="contact.php">Contact</a>
        <a href="auth/login.php" class="login-btn">Login</a>
        <a href="auth/register.php" class="register-btn">Register</a>
    </nav>
</header>
