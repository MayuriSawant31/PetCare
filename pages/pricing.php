<?php
// pricing.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/pricing.css">
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

    <section class="pricing">
        <h1 class="heading">Our Pricings</h1>
        <div class="pricelist">
            <div class="columns">
                <h3 class="headers">Basic</h3>
                <ul class="price">
                    <li class="grey">20000 / year</li>
                    <li class="offers">2 hour free shelter</li>
                    <li class="offers">Grooming per month</li>
                    <li class="offers">1 hour/month Training And Gym Facility</li>
                    <li class="offers">1 time quality food a week</li>
                    <li class="offers">Checkup 1 per 3 months</li>
                    <li class="grey"><a href="buy-now.php?plan=Basic" class="button">Buy Now</a></li>

                </ul>
            </div>

            <div class="columns">
                <h3 class="headers">Pro</h3>
                <ul class="price">
                    <li class="grey">28000 / year</li>
                    <li class="offers">8 hour free shelter</li>
                    <li class="offers">Grooming per month</li>
                    <li class="offers">2 Hour/Week Training And Gym Facility</li>
                    <li class="offers">2 times quality food per 4 days</li>
                    <li class="offers">Checkup twice per 3 months</li>
                    <li class="grey"><a href="#" class="button">Buy Now</a></li>
                </ul>
            </div>

            <div class="columns">
                <h3 class="headers">Premium</h3>
                <ul class="price">
                    <li class="grey"> 50000 / year</li>
                    <li class="offers">Unlimited free shelter</li>
                    <li class="offers">Grooming per month</li>
                    <li class="offers">Unlimited Training And Gym Facility</li>
                    <li class="offers">4 times quality food per day</li>
                    <li class="offers">Checkup 1 time per month</li>
                    <li class="grey"><a href="#" class="button">Buy Now</a></li>
                </ul>
            </div>
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
