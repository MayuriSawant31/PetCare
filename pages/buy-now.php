<?php
$plan = isset($_GET['plan']) ? htmlspecialchars($_GET['plan']) : 'Not Selected';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Buy Now - <?php echo $plan; ?> Plan</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="shortcut icon" href="../assets/Favicon.ico" type="image/jpeg">
</head>
<body>
    <section class="buy-now-form">
        <h1>Purchase Plan: <span><?php echo $plan; ?></span></h1>
        <form action="process-order.php" method="POST">
            <input type="hidden" name="plan" value="<?php echo $plan; ?>">

            <label for="name">Full Name:</label>
            <input type="text" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" required>

            <label for="address">Address:</label>
            <textarea name="address" required></textarea>

            <button type="submit" class="button">Confirm Purchase</button>
        </form>
    </section>
</body>
</html>
