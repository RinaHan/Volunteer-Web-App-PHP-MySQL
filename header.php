<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>rina project</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lala.css">

</head>
<body>
    <nav>
        <div class="header">
            <ul>

                <li><a href="index.php">Home</a></li>
                <li><a href="payment.php">Payment</a></li>


                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='manageevents.php'>Manage Events</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else {
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
                }
                ?>

                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<div id='name'>Hello " . $_SESSION["useruid"] . " !</div>";
                    }
                ?>
            </ul>
        </div>
    </nav>

<div class="body">