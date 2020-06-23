<?php
session_start();
if(isset($_SESSION["loggedIn"])) {
    if($_SESSION["loggedIn"] === true && $_SESSION["loggedIn"]) {
        header("location:welcome.php");
        exit;
    }
}



// require_once("config.php");
// $username = $password = "";
// $username_err = $password_err = "";



?>

<!doctype html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Login Form</h2>
        <a href="register.php">Register</a>
        <hr>
        <form method="POST" action="auth.php">
            <label>User Name: </label>
            <input type="text" name="username">
        </br>
            <label>Password: </label>
            <input type="text" name="password">
            </br>
            <button name="login" type="submit">Login</button>
        </form>

    </body>
</html>