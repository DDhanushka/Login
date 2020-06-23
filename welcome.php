<?php
session_start();
?>
<html>
    <head>
        <title>Welcome page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION['user']; ?></h1>
        <hr>
        <form action="logout.php" method="post">
            <button type="submit" name="out">Log Out</button>
        </form>
        <p>
            This is our user only site ! 
        </p>

    </body>

</html>    
