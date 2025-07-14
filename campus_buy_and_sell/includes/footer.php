<footer class="new-footer">

    <div class="footer-top">
        <h2>Stay Connected, Stay Updated with UNNify!</h2>
        <form action="#" method="POST" class="newsletter-form">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit"><i class='bx bx-send'></i></button>
        </form>
    </div>

    <div class="footer-main">
        <div class="footer-box">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Marketplace</a></li>
                <li><a href="#">Categories</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h4>Support</h4>
            <ul>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Help Desk</a></li>
            </ul>
        </div>

        <div class="footer-box">
            <h4>Contact</h4>
            <p>📞 +234 805 292 3367</p>
            <p>📧 support@unnify.com</p>

            <div class="social-icons">
                <a href="#"><i class='bx bxl-instagram'></i></a>
                <a href="#"><i class='bx bxl-whatsapp'></i></a>
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; 2025 UNNify | Built for UNN Students with ❤️</p>
    </div>
</footer>

<button class="dark-toggle" id="darkToggle">🌓</button>

<script>
    const toggle = document.getElementById("darkToggle");

    toggle.addEventListener("click", () => {
        const isDark = document.body.getAttribute("data-theme") === "dark";

        if (isDark) {
            document.body.removeAttribute("data-theme");
            localStorage.setItem("theme", "light");
        } else {
            document.body.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        }
    });

    // On page load, set theme from localStorage
    if (localStorage.getItem("theme") === "dark") {
        document.body.setAttribute("data-theme", "dark");
    }
</script>
