<!-- addevent 만들때 쓴거 -->
<?php
    include_once 'dbh.inc.php';

    $nameoncard = $_POST['nameoncard'];
    $cardnumber = $_POST['cardnumber'];
    $cvv = $_POST['cvv'];
    $expirydate = $_POST['expirydate'];
    $money = $_POST['money'];

    $sql = "INSERT INTO money (nameoncard, cardnumber, cvv, expirydate, money) 
    VALUES ('$nameoncard', '$cardnumber', '$cvv', '$expirydate', '$money');";
    mysqli_query($conn, $sql);

    header("Location: ../payment.php?apply=success");