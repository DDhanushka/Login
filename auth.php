<?php 

	require_once('./config.php');

	if(isset($_POST['register'])){
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        $options = [
		    // 'salt' => custom_function_for_salt(), //write your own code to generate a suitable salt
		    'cost' => 12 // the default cost is 10
		];

        $hash = password_hash($password, PASSWORD_DEFAULT, $options);

        $sql = "INSERT INTO user_login (username, password) VALUES ('$username','$hash')";

        if (mysqli_query($conn, $sql)) {
            header("Location: ./index.php");
        }
	}

 ?>