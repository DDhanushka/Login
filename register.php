<!doctype html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h2>Registration Form</h2>
        <a href="index.php">Login here</a>
        <hr>
        <form method="POST" action="auth.php">
            <label>User Name: </label>
            <input type="text" name="username">
        </br>
            <label>Password: </label>
            <input type="text" name="password">
            </br>
            <button name="register" value="register" type="submit">Register</button>
        </form>
    </body>
</html>