<?php
include 'connection.php';

if (isset($_POST['insert'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $brand = $_POST['brand'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];

    // Using prepared statement to prevent SQL injection
    $checkstmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $checkstmt->bind_param("s", $username);
    $checkstmt->execute();
    $checkresult = $checkstmt->get_result();
    $checkrow = $checkresult->num_rows;

    if ($checkrow == 1) {
        echo '<script type="text/javascript">alert("Username is already used"); window.location="home.php";</script>';
    } else {
        // Omitting the $id if it's auto-incrementing
        $stmt = $conn->prepare("INSERT INTO users (username, password, brand, type, price, stocks) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssdd", $username, $password, $brand, $type, $price, $stocks);
        $stmt->execute();

        echo '<script type="text/javascript">alert("User successfully inserted"); window.location="home.php";</script>';
    }

    // Close prepared statements
    $checkstmt->close();
    $stmt->close();
}
?>
