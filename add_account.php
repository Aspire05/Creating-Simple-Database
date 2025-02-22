<?php
include 'connection.php';

if (isset($_POST['insert'])) {
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];

    // Insert data into the users table
    $stmt = $conn->prepare("INSERT INTO users (brand, type, price, stocks) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdd", $brand, $type, $price, $stocks);
    $stmt->execute();

    echo '<script type="text/javascript">alert("Data successfully inserted"); window.location="home.php";</script>';

    // Close prepared statement
    $stmt->close();
}
?>
