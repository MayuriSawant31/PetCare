<?php
// services.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="shortcut icon" href="../assets/Favicon.ico" type="image/jpeg">
</head>
<body>
    <header class="header">
        <a href="../index.php" class="logo"><i class="fa-solid fa-paw"></i>Pet<span>Care</span></a>
        <nav class="navbar">
            <a href="../index.php">Home</a>
            <a href="../pages/services.php">Services</a>
            <a href="../pages/pricing.php">Pricing</a>
            <a href="../pages/about.php">About Us</a>
            <a href="../pages/contact.php">Contact Us</a>
            <a href="../pages/login.php">Login</a>
        </nav>
        <i id="menu-btn" class="fas fa-bars"></i>
    </header>

    <!-- Services Intro -->
    <section class="service-info">
        <div class="service-content">
            <div class="img">
                <img src="../assets/Pet1.png" alt="Pet Image">
            </div>
            <div class="content">
                <h3>Pets Are Our Best Friends</h3>
                <p>They never talk about themselves but listen to you while you talk about yourself, and keep up an appearance of being interested in the conversation.</p>
            </div>
        </div>
    </section>

    <!-- Services Card Section -->
    <section class="services">
        <h1 class="heading">Our Services</h1>
        <div class="box-container">

            <div class="box">
                <i class="fa-solid fa-house-circle-check"></i>
                <h3>Pet Boarding</h3>
                <p>Many houses with facilities for your pets!</p>
                <a href="pet_boarding.php" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>

            <div class="box">
                <i class="fa-solid fa-scissors"></i>
                <h3>Pet Grooming</h3>
                <p>Hair cutting of your pets!</p>
                <a href="pet_grooming.php" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fa-solid fa-notes-medical"></i>
                <h3>Pet Treatment</h3>
                <p>We assure your pet will be healthy</p>
                <a href="pet_treatment.php" class="btn">Learn More <span class="fas fa-chevron-right"></span></a>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <div class="footer-content">
            <h3><i class="fa-solid fa-paw"></i>Pet<span>Care</span></h3>
            <p>PetCare is a pet caring shop, where we provide facilities and various useful treatments. We offer Massage, a good ground, expert staff, good facilities and much more! Visit us anytime :). We are closed only on Thursday and our regular timings are 9:00AM to 10:00PM.</p>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/cb8535f973.js" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
</body>
</html>
