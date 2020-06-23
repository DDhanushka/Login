<?php
session_start();
?>
<html>
    <head>
        <title>Welcome page</title>
    </head>
    <body>
        <h1>Welcome <?php echo $_SESSION['user']; ?></h1>
        <hr>
        <form action="logout.php" method="post">
            <button type="submit" name="out">LOGOUT</button>
        </form>
        <p>
            This is our user only site ! 
        </p>

    </body>

</html>    
