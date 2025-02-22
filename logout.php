<?php

require_once("connection.php");

session_start();
unset($_SESSION['username']);
session_destroy();

echo "<script type='text/javascript'> alert ('logout successfully'); document.location='index.php'</script>";

?>