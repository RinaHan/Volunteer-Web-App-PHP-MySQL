<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/lala.css"> -->
</head>
<body>
<?php require_once 'process.php'; ?>





<?php
    $mysqli = new mysqli('localhost', 'root', 'root', 'phpproject01') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM events") or die($mysqli->error);
    ?>

    <div class="table">
        <table class="data_table">
            <thead>
                <tr class="data_tr">
                    <th>Events</th>
                    <th>Volunteers</th>
                    <th>Date</th>
                    <th>Contact</th>
                    <th colspan="4">Action</th>
                </tr>
            </thead>

            <?php
            while ($row = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['events']; ?></td>
                    <td><?php echo $row['volunteers']; ?></td>
                    <td><?php echo $row['causes']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td>
                    <!-- buttons -->
                    <div class="buttons">
                        <div >
                            <a href="manageevents.php?edit=<?php echo $row['id']; ?>"
                            class="edit_btn">Edit</a>
                        </div>
                        <div>
                            <a href="process.php?delete=<?php echo $row['id']; ?>"
                            class="delete_btn">Delete</a>
                        </div>
                        <div>



                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>  

    <?php
    function pre_r($array) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
?>

<div class="manage_form">

<form action="process.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="form_group">
        <lable>Events</lable>
        <input type="text" name="title" 
        value="<?php echo $title; ?>" placeholder="Event name">
    </div>
    <div class="form_group">
        <lable>Volunteers</lable>
        <input type="text" name="name" 
        value="<?php echo $name; ?>" placeholder="Volunteer name">
    </div>
    
    <div class="form_group">
        <lable>Date</lable>
        <input type="text" name="date" 
        value="<?php echo $date; ?>" placeholder="Date">
    </div>
    <div class="form_group">
        <lable>Contact Number</lable>
        <input type="text" name="contact" 
        value="<?php echo $contact; ?>" placeholder="Contact number">
    </div>
    <?php
    if ($update == true):
    ?>
    <button class="update_btn" type="submit" name="update">Update</button>
    <?php else: ?>
    <button class="save_btn" type="submit" name="save">Save</button>
    <?php endif; ?>
</form>

<div class="error">
<?php
if (isset($_SESSION['message'])): ?>
<div class="alert_msg" alert-<?=$_SESSION['msg_type']?>">
    <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    ?>
</div>
<?php endif ?>
</div>

</div>
</body>
</html>