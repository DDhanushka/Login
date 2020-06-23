<?php
session_start();
echo $_SESSION['user'];

?>

<form action="logout.php" method="post">
    <button type="submit" name="out">OUT</button>
</form>