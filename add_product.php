<?php
require_once("db.php");

if (isset($_GET["product_name"]) && isset($_GET["product_description"]) && isset($conn)) {
    $product_name = mysqli_real_escape_string($conn, $_GET["product_name"]);
    $product_description = mysqli_real_escape_string($conn, $_GET["product_description"]);

    $sql = "INSERT INTO `products` (`id`, `product_name`, `description`, `created_at`) VALUES (NULL, '$product_name', '$product_description', current_timestamp());";
    if ($conn->query($sql) === TRUE) {
        header('Location: ./index.php');
    } else {
        echo "error" . $conn->error;
    }
}

?>