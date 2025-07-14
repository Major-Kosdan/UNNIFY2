<?php
session_start();
require_once 'includes/db.php';
if (!isset($_SESSION['email'])) {
    header("Location: auth/login.php");
    exit();
}

$email = $_SESSION['email'];
$stmt = $pdo->prepare("SELECT username FROM users WHERE email = ?");
$stmt->execute([$email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$username = $user ? $user['username'] : 'User';
?>

<?php include('includes/header.php'); ?>

<div class="dashboard-container">
    <div class="welcome-text">Welcome back, <?php echo htmlspecialchars($username); ?> 👋</div>
    <p class="tagline">Manage your activities, listings and more from one place</p>

    <div class="profile-box">
        <img src="assets/images/default_avatar.jpg" alt="Profile Picture">
        <div>
            <strong><?php echo $username; ?></strong><br>
            <?php echo $email; ?> <span style="color: green; font-size: 0.9em;">(verified)</span>
        </div>
    </div>

    <div class="dashboard-cards">
        <div class="dash-card">
            <h3>Items Posted</h3>
            <p>3</p>
        </div>
        <div class="dash-card">
            <h3>Email Verified</h3>
            <p>✔️</p>
        </div>
        <div class="dash-card">
            <h3>Recent Logins</h3>
            <p>2 this week</p>
        </div>
        <div class="dash-card">
            <h3>Messages</h3>
            <p>Coming Soon</p>
        </div>
    </div>

    <div class="dashboard-actions">
        <a href="/campus_buy_and_sell/listings/post_item.php" class="dash-action">📦 Post Item</a>
        <a href="view_listings.php" class="dash-action">🛍️ View Listings</a>
        <a href="profile.php" class="dash-action">👤 My Profile</a>
        <a href="logout.php" class="dash-action logout">🚪 Logout</a>
    </div>
</div>


<?php include('includes/footer.php'); ?>
