<?php
session_start(); // Start the session

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct
    if ($username == "admin" && $password == "1234") {
        // Set the session variables
        $_SESSION['username'] = $username;

        // Redirect to the home page
        header("Location: q10b.php");
        exit();
    } else {
        // Show an error message
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form method="post">
		<label>Username:</label>
		<input type="text" name="username"><br>
		<label>Password:</label>
		<input type="password" name="password"><br>
		<input type="submit" value="Login">
	</form>
</body>
</html>
