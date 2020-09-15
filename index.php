<?php
require_once("db.php");

echo "<table>";

echo "<tr>";
echo "<th>Product Name</th>";
echo "<th>Product Description</th>";
echo "</tr>";

if (isset($conn)) {
    $sql = "SELECT * FROM `products`";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<th>${row['product_name']}</th>";
        echo "<th>${row['description']}</th>";
        echo "</tr>";
    }
}

echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<body>

<h1>Add new product</h1>
<form action="add_product.php">
    <label for="product_name">Product name:</label><br>
    <input type="text" id="product_name" name="product_name"><br>
    <label for="Product description:">Product description:</label><br>
    <input type="text" id="product_description" name="product_description"><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>

