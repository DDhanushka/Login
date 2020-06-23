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
	}elseif(isset($_POST['login'])){
		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

        $pwd = md5($password);

        $sql = "SELECT username FROM user_login WHERE username = '$username' AND password ='$pwd'";

        if($result=mysqli_query($conn,$sql))
        {
            if (mysqli_num_rows($result) > 0) {
			  while($row = mysqli_fetch_assoc($result)) {
			    echo "logged in";
			  }
			} else {
			  echo "no results found";
			}
        }else{
        	echo "didn't work";
        }

	}

 ?>