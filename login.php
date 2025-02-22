<?php 

include 'connection.php';

session_start();

if(isset($_POST["submit"])){

 $username = $_POST["username"];  
 $password = $_POST["password"];
 

		$query =mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'")or die(mysqli_error($conn));

		   $row = mysqli_fetch_array($query);
           $id=$row['id'];
            $admin=$row['username'];
           $_SESSION["username"] = $row["username"];

           $counter= mysqli_num_rows($query);
            
		  	if ($counter == 0) 
			  {	
				   echo "<script type='text/javascript'>alert('Username and password is invalid');
				  document.location='index.php'</script>";
			  }
			  else
			  {
			  	if($password === $row['password']) 
                     {
				        
			  	echo "<script type='text/javascript'>alert('Log in successfully');document.location='home.php'</script>";  
			  	
			  }
			  else {
			  		 echo "<script type='text/javascript'>alert('Username or password is incorrect');
				  document.location='index.php'</script>"; 
			  }
	    }
   }



?>