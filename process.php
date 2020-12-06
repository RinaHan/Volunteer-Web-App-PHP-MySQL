<!-- checkevents랑 세트 -->
<?php
session_start();

$id = 0;
$update = false;
$title = '';
$name = '';
$date = '';
$contact = '';


$mysqli = new mysqli('localhost', 'root', 'root', 'phpproject01') or die(mysqli_error($mysqli));

if (isset($_POST['save'])){
        $title = $_POST['title'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $contact = $_POST['contact'];

        $mysqli->query("INSERT INTO events (events, volunteers, causes, contact)
        VALUES ('$title', '$name', '$date', '$contact')") or
        die($mysqli->error);

        $_SESSION['message'] = "Saved!";
        $_SESSION['msg_type'] = "success";

        header("location: manageevents.php");
}

if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM events WHERE id=$id") or die($mysqli->error());

        $_SESSION['message'] = "Deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: manageevents.php");
}    

if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM events WHERE id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $title = $row['events'];
        $name = $row['volunteers'];
        $date = $row['causes'];
        $contact = $row['contact'];

    }
}

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $events = $_POST['title'];
    $volunteers = $_POST['name'];
    $causes = $_POST['date'];
    $contact = $_POST['contact'];

    $mysqli->query("UPDATE events SET events='$events', volunteers='$volunteers', causes='$causes', contact='$contact' 
    WHERE id=$id") or die($mysqli->error);

    $_SESSION['message'] = "Updated!";
    $_SESSION['msg_type'] = "warning";

    header('location: manageevents.php');
}





