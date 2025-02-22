<?php
include 'connection.php';

if (isset($_POST['insert'])) {
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $color = $_POST['color'];
    $stocks = $_POST['stocks'];

    // Check if the user exists
    $checkrow = $conn->query("SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($conn));
    $checkrow = $checkrow->num_rows;

    if ($checkrow == 0) {
        // User doesn't exist, insert the user
        $user_sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        mysqli_query($conn, $user_sql);
    }

    // Insert the product
    $product_sql = "INSERT INTO products (brand, type, color, stocks) VALUES ('$brand','$type','$color','$stocks')";
    mysqli_query($conn, $product_sql);

    echo '<script type="text/javascript">alert("Product Successfully Inserted!"); window.location="home.php";</script>';
}
?>
