<!DOCTYPE html>
<?php
include 'connection.php';
session_start();
if(!isset($_SESSION['username'])){
      header("location:index.php");
}
else {
  $uname = $_SESSION['username'];
}
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Home page</title>
<style>

body {
    margin: 0;
    display: flex;
    flex-direction: column; /* Display content in a column */
    align-items: center;
    height: 100vh;
    overflow-y: auto; /* Enable vertical scrolling */
    background-color:  #1E1E2F;
    color: whitesmoke;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
}

table{
    border-collapse: collapse;
    text-align: center;
    display: table;
    border: 1px solid black;
    width: 75%;
}
.table-container {

    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    margin: 0;
    width: 1000px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif
    font-size: 24px;
}
tr{
    border: 5px solid black;
    padding: 10px;
    margin: 50px;
    height: 10vh;
    width: 100px;
}


.form{

    display: flex;
    justify-content: center;
    align-items: center;
    height: 50vh;
    text-decoration: unset;
    font-family: cursive;
    font-size: 20px;


}
input{
    width: 100px;
    margin: 10px;
    padding: 10px;
    text-align: center;
    font-family:cursive;
    font-weight: bold;
    border-style: dashed double;
    
}
.button{
    width: 50%;
    margin: 10px;
    padding: 10px;
    background-color: lightgray;
    cursor: pointer;

}
a {
     font-weight: bold;
     text-decoration: none;
     color: whitesmoke;
     font-family: cursive;
     margin-left: 1300px;

}

</style>
</head>
<body>  


<div class="form">
    <form action="add_account.php" method="post">  
        <br>
        <br>
    <a href="logout.php"><p>Logout</p></a>
    <center><strong>Add Another User Here:</strong>
        <br>
    <input type="text" name="brand" placeholder="brand">
    <input type="text" name="type" placeholder="type">
    <input type="text" name="price" placeholder="price">
    <input type="text" name="stocks" placeholder="stocks">
    <br>
    <input class="button" type="submit" name="insert" value="ADD">
</form>
<br>
</div>
<center><h1>DATA LIST</h1></center>
<div class="table-container">
<table>
      <thead>
        <th>ID</th>
        <th>Brand</th>
        <th>Type</th>
        <th>Price</th>
        <th>Stocks</th>
        
      </thead>

<tbody>
<?php

       require_once("connection.php");

       $query=" SELECT * FROM users";
       $result= mysqli_query($conn,$query);
       $i=1;
       while ($row=mysqli_fetch_array($result)){
      ?>
      <tr>
        <td><?php echo$row['id'] ?></td>
        <td><?php echo$row['brand'] ?></td>
        <td><?php echo$row['type'] ?></td>
        <td><?php echo$row['price'] ?></td>
        <td><?php echo$row['stocks'] ?></td>
      </tr>
</tbody>

      <?php
      $i++;}
      ?>
       </table>
   </center>
</body>

</html>