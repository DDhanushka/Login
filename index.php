<?php

session_start();
if($_SESSION["loggedIn"] === true) {
    header("location:welcome.php");
    exit;
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
    </head>
    <body>
        <h2>Login Form</h2>
        <hr>
        <form method="POST" action="auth.php">
            <label>User Name: </label>
            <input type="text" name="username">
        </br>
            <label>Password: </label>
            <input type="text" name="password">
            <button name="enter" type="submit">Login</button>
        </form>
    </body>
</html>