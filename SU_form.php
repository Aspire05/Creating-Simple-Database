<?php 
include 'connection.php';

if (isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
 
$checkrow= $conn->query("SELECT * FROM users WHERE username = '$username'") or die(mysqli_error($conn));
$checkrow = $checkrow->num_rows;

 
        if ($checkrow == 1) {
    echo '<script type="text/javascript">alert("username is already used"); window.location="sign_up.php";</script>';
        }else{

     $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
    mysqli_query($conn, $sql);
    echo '<script type="text/javascript">alert("user successfully signed up... log in your account now!"); window.location="index.php";</script>';
}
}

?>