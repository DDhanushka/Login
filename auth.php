<?php 

	require_once('./config.php');

	if(isset($_POST['register'])){
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        $hash = md5($password);

        $sql = "INSERT INTO user_login (username, password) VALUES ('$username','$hash')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ./index.php");
        }
	}elseif(issed($_POST['login'])){
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        if (password_verify($password, $hash)) {
		    echo "login";
		}
		else {
		    echo "login failed";
		}

	}

 ?>