<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in form</title>
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
}

form {
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    width: 320px;
    background: #2C2C3E;
    border: 1px solidwhitesmoke;
    text-align: center;
    transition: transform 0.3s ease-in-out;
}

form:hover {
    transform: scale(1.05);
}

h1 {
    color:whitesmoke;
    font-size: 24px;
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    color: #E0E0E0;
    margin-bottom: 8px;
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 16px;
    box-sizing: border-box;
    border: 1px solid rgba(255, 255, 255, 0.5);
    border-radius: 5px;
    background: #1E1E2F;
    color: #fff;
}

input:focus {
    outline: none;
    border-color:whitesmoke;
}

input[type="submit"] {
    background:whitesmoke;
    color: #1E1E2F;
    font-weight: bold;
    border: none;
    cursor: pointer;
    padding: 10px;
    border-radius: 5px;
    transition: background 0.3s ease-in-out;
}

input[type="submit"]:hover {
    background:whitesmoke;
}

a {
    display: block;
    margin-top: 10px;
    color:whitesmoke;
    font-weight: bold;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

a:hover {
    color:whitesmoke;
}




</style>
</head>

<body>
<form action="login.php" method="post">
	<h1>Login your Account</h1>
        <b><center><label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="submit" value="Login">
        <a href="sign_up.php"><p>Sign up?</p></a>
</form>
</body>
</html>