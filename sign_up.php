    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in form</title>
</head>
<style>
	body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    background: linear-gradient(135deg, #1E1E2F, #232F4D);
    color: white;
}

/* Form Styling */
form {
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    width: 90%;
    max-width: 350px;
    background: #2C2C3E;
    border: 2px solid whitesmoke;
    text-align: center;
}

h1 {
    color:whitesmoke;
    font-size: 24px;
}

/* Labels and Inputs */
label {
    display: block;
    margin: 10px 0 5px;
    font-weight: bold;
}

input {
    width: 93%;
    padding: 10px;
    margin-top: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid whitesmoke;
    background: #1E1E2F;
    color: white;
    font-size: 16px;
}

input:focus {
    outline: none;
    border-color: whitesmoke;
}

/* Submit Button */
input[type="submit"] {
    background: whitesmoke;
    width: 100%;
    color: #1E1E2F;
    font-weight: bold;
    border: none;
    margin-bottom: 20px;
    margin-top: 20px;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
    transition: background 0.3s ease-in-out;
}

input[type="submit"]:hover {
    background:whitesmoke;
    
}

/* Login Link */
a {
    display: inline-block;
    margin-top: 20px;
    color:whitesmoke;
    font-weight: bold;
    margin-bottom: 20px;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
 
}

a:hover {
    color: #FFD700;
}



</style>
<body>
<form action="SU_form.php" method="post">
        <h1>Sign up here</h1>
        <center><b><label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Sign up">
        <a href="index.php">Log in</a>
</form>
</body>
</html