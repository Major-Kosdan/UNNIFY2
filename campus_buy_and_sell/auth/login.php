<?php include('../includes/header.php'); ?>

<section class="auth-section">
    <div class="auth-container animate-slide">
        <h2>Welcome Back 👋</h2>
        <p>Enter your  <strong>details</strong> correctly</p>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-box"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <form action="process_login.php" method="POST" class="auth-form">
            <input type="email" name="email" placeholder="UNN Email" required>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit" class="auth-btn">Login</button>
        </form>

        <p>Don’t have an account? <a href="register.php">Register</a></p>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
