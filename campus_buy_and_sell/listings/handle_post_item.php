<?php
session_start();
require_once '../includes/db.php';

// Redirect if user is not logged in
if (!isset($_SESSION['email'])) {
    header("Location: ../auth/login.php");
    exit();
}

$email = $_SESSION['email'];

// Get and sanitize inputs
$title = trim($_POST['title']);
$category = trim($_POST['category']);
$location = trim($_POST['location']);
$condition = trim($_POST['condition']);
$price = floatval($_POST['price']);
$contact = trim($_POST['contact']);
$description = trim($_POST['description']);

// Validate image upload
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $image = $_FILES['image'];
    $imageName = uniqid() . '_' . basename($image['name']);
   $imagePath = '../assets/images/upload/' . $imageName;
    $imageType = strtolower(pathinfo($imagePath, PATHINFO_EXTENSION));

    // Only allow JPG, PNG, JPEG
    $allowedTypes = ['jpg', 'jpeg', 'png', 'webp'];
    if (!in_array($imageType, $allowedTypes)) {
        die("❌ Invalid image type. Only JPG, PNG, JPEG, WEBP allowed.");
    }

    if (!move_uploaded_file($image['tmp_name'], $imagePath)) {
        die("❌ Failed to upload image.");
    }

} else {
    die("❌ No image selected or upload error.");
}

try {
    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO items (user_email, title, category, location, `condition`, price, contact, description, image)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$email, $title, $category, $location, $condition, $price, $contact, $description, $imageName]);

    // Redirect or show message
    header("Location: ../dashboard.php?success=Item+Posted+Successfully");
    exit();

} catch (PDOException $e) {
    echo "❌ Something went wrong while posting the item.";
    // Uncomment the line below during dev if needed:
    // echo $e->getMessage();
    exit();
}
?>
