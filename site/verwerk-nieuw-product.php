<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST")
    header($_SERVER["SERVER_PROTOCOL"] . " 405 Method Not Allowed", true, 405);
include '405.php';
exit;
$naam = $_POST['naamp'];
$categorie = $_POST['categoriep'];
$prijs = $_POST['prijsp'];
$merk = $_POST['merkp'];

$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) 
                   VALUES ('$naam', '$categorie', '$prijs', '$merk')";

var_dump(mysqli_query($conn, $sql));
