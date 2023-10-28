<?php

include 'config.php';
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reunion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <img src="Reunion.webp" alt="Your Startup Logo">
                    <h1>Reunion</h1>
                </div>
                <ul class="menu-right">
                    <li><a href="#login">Login</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Welcome to Reunion</h2>
            <p>A non-governmental military organization formed by persecuted Oripathy victims.</p>
            <a href="#contact" class="cta-button">Get Started</a>
        </div>
    </section>

    <section class="features" id="features">
        <div class="container">
            <h3>Key Features</h3>
            <div class="feature">
                <i class="fas fa-check-circle"></i>
                <h4>Fast</h4>
                <p>Arive at Sameday.</p>
            </div>
            <div class="feature">
                <i class="fas fa-check-circle"></i>
                <h4>Furious</h4>
                <p>Always Furious with gov.</p>
            </div>
            <div class="feature">
                <i class="fas fa-check-circle"></i>
                <h4>No Refund</h4>
                <p>Just No.</p>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <h3>Contact Us</h3>
            <p>Have questions or want to learn more? Get in touch with us!</p>
            <a href="mailto:samandias88@gmail.com" class="cta-button">Email Us</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date("Y"); ?> Reunion Inc.</p>
        </div>
    </footer>
</body>
</html>
