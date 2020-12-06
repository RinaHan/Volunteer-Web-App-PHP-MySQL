<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<section class="index-intro">
     <h1>Payment System</h1>
     <!-- <p>All nonprofits have been affected by COVID-19. Help lift up critical, at-risk missions below.</p> -->
    </section>
</head>
<body class="payment_form">
<form action="includes/pay.inc.php" method="POST">
    <input type="text" name="nameoncard" placeholder="Name on card">
    <br>
    <input type="text" name="cardnumber" placeholder="Card numbe">
    <br>
    <input type="text" name="cvv" placeholder="cvv number">
    <br>
    <input type="text" name="expirydate" placeholder="Expiry date">
    <br>
    <input type="text" name="money" placeholder="Amount..">
    <br>
    <button class="log_btn" type="submit" name="submit">Checkout</button>
</form>


</body>
</html>