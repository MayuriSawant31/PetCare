<?php
// contact.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/contact.css">
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
        </nav>
        <i id="menu-btn" class="fas fa-bars"></i>
    </header>

    <section class="contact">
        <h1 class="heading">Contact Us</h1>
        <div class="box-container">
            <div class="box">
                <i class="fa-solid fa-headphones"></i>
                <br>
                <p class="center">
                    People can Live Chat with our support
                </p>
                <a href="#" class="btn">Support</a>
            </div>
            <div class="box">
                <i class="fa-regular fa-envelope"></i>
                <p class="center">
                    Use this Email to send us about the problem faced at xyz@gmail.com
                </p>
            </div>
            <div class="box">
                <i class="fa-solid fa-phone"></i>
                <p class="center">
                    Toll Free Number: +1800 200 300 400
                </p>
            </div>
        </div>
    </section>

    <section class="form">
        <h1 class="heading">Contact Us By Filling Form</h1>
        <div class="container">
            <form method="post" action="#">
                <h3>Fill Up This Form</h3>
                <input type="text" placeholder="Enter Your Full Name" class="box" name="fullname" required>
                <input type="email" placeholder="Enter Your Email" class="box" name="email" required>
                <textarea placeholder="Write About Your Problem" class="problem" name="message" rows="5" required></textarea>
                <input type="submit" value="Send Us" class="btn">
            </form>
        </div>
    </section>

    <!-- footer starts -->
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
