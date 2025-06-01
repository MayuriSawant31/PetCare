<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetCare</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./assets/Favicon.ico" type="image/jpeg">
</head>
<body>
    <header class="header">
        <a href="./index.php" class="logo"><i class="fa-solid fa-paw"></i>Pet<span>Care</span></a>
        <nav class="navbar">
            <a href="./index.php">Home</a>
            <a href="./pages/services.php">Services</a>
            <a href="./pages/pricing.php">Pricing</a>
            <a href="./pages/about.php">About Us</a>
            <a href="./pages/contact.php">Contact Us</a>
           <div class="dropdown">
                <a onclick="toggleDropdown()">Login</a>
                <div id="loginDropdown" class="dropdown-content">
                <a href="./pages/user_login.php">User Login</a>
                <a href="./pages/admin_login.php">Admin Login</a>
                </div>
            </div>
        </nav>
        <i id="menu-btn" class="fas fa-bars"></i>
    </header>
    
    <!-- home section starts -->
    <section class="home">
        <div class="home-content">
            <h3>PetCare</h3>
            <p class="desc">We Care <span>Your Pets</span></p>
            <p>Hello Guys, we are team Petcare. We take care of your pets. We massage them, provide showers, vaccinations, day-care and more...</p>
            <a href="./pages/about.php" class="btn">About Us</a>
        </div>
    </section>

    <section class="icons-container">
        <div class="icons">
            <i class="fa-solid fa-users"></i>
            <h3>Trustable</h3>
            <p>Staffs' Team </p>
        </div>

        <div class="icons">
            <i class="fa-solid fa-dog"></i>
            <h3>Comfort</h3>
            <p>Space for your Pets</p>
        </div>
        
        <div class="icons">
            <i class="fa-solid fa-bed"></i>
            <h3>Modern</h3>
            <p>Equipments and Methods</p>
        </div>

        <div class="icons">
            <i class="fa-solid fa-house-medical-flag"></i>
            <h3>Good Space</h3>
            <p>For waiting of clients</p>
        </div>      
    </section>
    <!-- home section ends -->

    <!-- review sections starts -->
    <section class="review">
        <h1 class="heading">Client's <span>Reviews</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="./assets/.jpg" alt="">
                <h3>Priya</h3>
                <p class="job">Client</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Amazing Place, Amazing Facilities, Amazing Staff and Very Good Environment!</p>
            </div>
            <div class="box">
                <img src="./assets/.jpg" alt="">
                <h3>Advait</h3>
                <p class="job">Client</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Very Nice and cool environment! I really had a very good experience here. My Dog Loved It!</p>
            </div>
            <div class="box">
                <img src="./assets/.jpg" alt="">
                <h3>Krutuja</h3>
                <p class="job">Client</p>
                <div class="stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    <i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Very Good! Here, there are many good facilities for dogs and cats.</p>
            </div>
        </div>
    </section>
    <!-- review ends -->

    <!-- footer starts -->
    <section class="footer">
        <div class="footer-content">
           <h3><i class="fa-solid fa-paw"></i>Pet<span>Care</span></h3> 
           <p>PetCare is a pet caring shop, where we provide facilities and various useful treatments. We offer Massage, a good ground, expert staff, good facilities and much more! Visit us anytime :). We are closed only on Thursday and our regular timings are 9:00AM to 10:00PM.</p>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/cb8535f973.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>
</html>
