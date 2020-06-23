<?php 

	require_once('./config.php');

	if(isset($_POST['register'])){
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        $sql = "INSERT INTO user_login (username, password) VALUES ('$username','$password')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ./index.php");
        }
	}

 ?>