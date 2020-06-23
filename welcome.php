<?php
session_start();
echo 'Welcome ' . $_SESSION['user'];

?>

<form action="logout.php" method="post">
    <button type="submit" name="out">LOGOUT</button>
</form>