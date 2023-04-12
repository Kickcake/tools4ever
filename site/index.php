<?php
require 'database.php';
$sql = "SELECT * FROM `tools`;";
$result = mysqli_query($conn, $sql);
if (mysqli_connect_error()) {
    echo "orh no";
} else {
    echo "fotknighte gg";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php foreach ($tools as $tool) { ?>
            <div>
                <p><?php echo $tool['name'] ?></p>
            </div>
        <?php } ?>
    </div>
</body>

</html>