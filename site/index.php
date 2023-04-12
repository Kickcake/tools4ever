<?php
require 'database.php';
$sql = "SELECT tool_name FROM `tools` WHERE tool_id = 1;";
$result = mysqli_query($conn, $sql);
if (mysqli_connect_error()) {
    echo "orh no";
} else {
    echo "fotknighte gg";
}
