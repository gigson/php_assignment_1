<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "phpooptest";

$conn = new mysqli($server, $username, $password, $db);
if ($conn->connect_error) {
    die("connection failed");
}
?>
