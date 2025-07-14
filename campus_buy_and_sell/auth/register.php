<?php include('../includes/header.php'); ?>

<section class="auth-section">
    <div class="auth-container animate-slide">
        <h2>Create Your UNNify Account</h2>
        <p>Only verified <strong>students'</strong> emails will be accepted</p>

        <?php if (isset($_GET['error'])): ?>
            <div class="error-box"><?php echo htmlspecialchars($_GET['error']); ?></div>
        <?php endif; ?>

        <form action="process_register.php" method="POST" class="auth-form">
            <input type="text" name="username" placeholder="Enter your FullName" required>

            <input type="email" name="email" placeholder="Enter your UNN email" required>

            <input type="password" name="password" placeholder="Enter password" required>
            <input type="password" name="confirm_password" placeholder="Confirm password" required>

            <button type="submit" class="auth-btn">Register</button>
        </form>

        <p>Already registered? <a href="login.php">Login here</a></p>
    </div>
</section>

<?php include('../includes/footer.php'); ?>
