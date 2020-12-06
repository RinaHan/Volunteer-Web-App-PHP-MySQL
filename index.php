<?php
    include_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <section class="index-intro">
     <h1>Volunteer your skills virtually</h1>
     <p>All nonprofits have been affected by COVID-19. Help lift up critical, at-risk missions below.</p>
    </section>
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
                </tr>
            </thead>

            <?php
            while ($row = $result -> fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['events']; ?></td>
                    <td><?php echo $row['volunteers']; ?></td>
                    <td><?php echo $row['causes']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
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
</body>
</html>

