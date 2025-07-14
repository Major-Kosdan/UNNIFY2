<?php
// post_item.php
session_start();
require_once '../includes/db.php';
if (!isset($_SESSION['email'])) {
  header("Location: ../auth/login.php");
  exit();
}
$email = $_SESSION['email'];
?>

<?php include('../includes/header.php'); ?>

<div class="container">
  <h2 class="form-title">📝 Post a New Item for Sale</h2>

  <div class="form-wrapper">
    <!-- Post Form -->
    <form action="handle_post_item.php" method="POST" enctype="multipart/form-data" class="post-form" id="postForm">
      <label for="title">Title:</label>
      <input type="text" name="title" id="title" placeholder="Item title (e.g., HP Laptop)" required oninput="updatePreview()">

      <label for="category">Category:</label>
      <select name="category" id="category" required onchange="updatePreview()">
        <option value="">-- Select Category --</option>
        <option value="Electronics">Electronics</option>
        <option value="Books">Books</option>
        <option value="Clothing">Clothing</option>
        <option value="Appliances">Appliances</option>
        <option value="Others">Others</option>
      </select>

      <label for="location">Location on Campus:</label>
      <select name="location" id="location" required onchange="updatePreview()">
        <option value="">-- Select Location --</option>
        <option>Zik’s Flats</option>
        <option>Abuja Hostel</option>
        <option>Mozart</option>
        <option>Hilltop</option>
        <option>Flat Hostel</option>
        <option>Other</option>
      </select>

      <label for="condition">Condition:</label>
      <select name="condition" id="condition" required onchange="updatePreview()">
        <option value="New">New</option>
        <option value="Used">Used</option>
      </select>

      <label for="price">Price (₦):</label>
      <input type="number" name="price" id="price" required oninput="updatePreview()">

      <label for="contact">WhatsApp or Phone Number:</label>
      <input type="text" name="contact" id="contact" required oninput="updatePreview()">

      <label for="description">Description:</label>
      <textarea name="description" id="description" rows="4" required oninput="updatePreview()"></textarea>

      <label for="image">Upload Image:</label>
      <input type="file" name="image" id="image" accept="image/*" required onchange="previewImage(event)">

      <button type="submit">📤 Post Item</button>
    </form>

    <!-- Live Preview -->
    <div class="preview-card" id="previewCard">
      <p class="preview-title">📦 <strong>Live Preview</strong></p>
      <img id="imagePreview" src="../assets/images/placeholder.png" alt="Image Preview">
      <h3 id="previewTitle">Item title</h3>
      <p><strong>₦<span id="previewPrice">0</span></strong> — <span id="previewCondition">Condition</span></p>
      <p>📍 <span id="previewLocation">Location</span></p>
      <p>📚 <span id="previewCategory">Category</span></p>
      <p id="previewDescription">Item description will appear here.</p>
      <p>📞 <a href="#" id="previewContact" target="_blank">Contact via WhatsApp/Call</a></p>
    </div>
  </div>
</div>

<?php include('../includes/footer.php'); ?>

<script>
  function updatePreview() {
    document.getElementById("previewTitle").innerText = document.getElementById("title").value || "Item title";
    document.getElementById("previewPrice").innerText = document.getElementById("price").value || "0";
    document.getElementById("previewCondition").innerText = document.getElementById("condition").value || "Condition";
    document.getElementById("previewLocation").innerText = document.getElementById("location").value || "Location";
    document.getElementById("previewCategory").innerText = document.getElementById("category").value || "Category";
    document.getElementById("previewDescription").innerText = document.getElementById("description").value || "Item description will appear here.";

    const contact = document.getElementById("contact").value;
    let contactLink = "#";
    if (contact.startsWith("0") || contact.startsWith("+234")) {
      const cleanNumber = contact.replace(/\D/g, '').replace(/^0/, '234');
      contactLink = "https://wa.me/" + cleanNumber;
    }
    document.getElementById("previewContact").href = contactLink;
    document.getElementById("previewContact").innerText = contact || "Contact via WhatsApp/Call";
  }

  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      document.getElementById("imagePreview").src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>