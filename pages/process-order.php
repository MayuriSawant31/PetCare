<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $plan = $_POST['plan'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // TODO: Save to database or send email
    echo "<h2>Thank you, $name!</h2>";
    echo "<p>You have successfully purchased the <strong>$plan</strong> plan.</p>";
} else {
    header("Location: pricing.php");
    exit();
}
?>
