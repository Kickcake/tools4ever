<?php
require 'database.php';
$sql = "SELECT * FROM `tools`;";
$tools = mysqli_query($conn, $sql);
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>tool_id</th>
                <th>tool_name</th>
                <th>tool_category</th>
                <th>tool_price</th>
                <th>tool_brand</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tools as $tool) { ?>
                <tr>
                    <td><?php echo $tool['tool_id'] ?></td>
                    <td><?php echo $tool['tool_name'] ?></td>
                    <td><?php echo $tool['tool_category'] ?></td>
                    <td><?php echo $tool['tool_price'] ?></td>
                    <td><?php echo $tool['tool_brand'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>