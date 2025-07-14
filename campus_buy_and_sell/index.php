<!-- Loader -->
<div id="loader">
    <img src="assets/images/unnify.png" alt="Loading..." />
</div>

<?php include('includes/header.php'); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1 class="animate-slide">Welcome to <span>UNNify</span></h1>
        <p class="animate-fade">Your trusted campus marketplace for buying and selling, LionStyle 🦁</p>
        
        <form action="products/categories.php" method="GET" class="search-bar animate-up">
            <input type="text" name="search" placeholder="Search for items...">
            <button type="submit">Search</button>
        </form>

        <a href="auth/register.php" class="cta-btn animate-fade">Join Now</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>

