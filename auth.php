
<?php 

// 	require_once('./config.php');

// 	if(isset($_POST['register'])){
// 		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
//         $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

//         $hash = md5($password);

//         $sql = "INSERT INTO user_login (username, password) VALUES ('$username','$hash')";

//         if (mysqli_query($conn, $sql)) {
//             header("Location: ./index.php");
//         }
// 	}elseif(isset($_POST['login'])){
// 		$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
//         $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

//         $pwd = md5($password);

//         $sql = "SELECT username FROM user_login WHERE username = '$username' AND password ='$pwd'";

//         if($result=mysqli_query($conn,$sql))
//         {
//             if (mysqli_num_rows($result) > 0) {
// 			  while($row = mysqli_fetch_assoc($result)) {
// 			    echo "logged in";
// 			  }
// 			} else {
// 			  echo "no results found";
// 			}
//         }else{
//         	echo "didn't work";
//         }

// 	}

 ?>

<?php
require('config.php');

if(isset($_POST['enter'])) {
    if($_POST['username'] != null && $_POST['username'] != null) {
        $username = $_POST['username'];
        $entered_password = $_POST['password'];
     $sql = "SELECT * FROM user_login WHERE username='$username';";
     $result = $conn->query($sql);
     $count = mysqli_num_rows($result);
 
     if($count == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password'];
        if($stored_password == md5($entered_password)) {

            echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
            session_start();
            $_SESSION["loggedIn"] = true;
            $_SESSION["user"] = $username;
            header("location:welcome.php");
        } else {
            echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
        }
     } else {
         // header("location:index.php");
         echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
 
     }
 
    //  while($row = $result->fetch_assoc()) {
    //      echo $row['username'] . ' ' . $row['password'] . '<br>';
    //  }
    }
 }

