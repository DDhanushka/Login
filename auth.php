<?php
require('config.php');
session_start();
// if(isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] === true) {
//     header("location:welcome.php");
//     exit;
// }

if(isset($_POST['enter'])) {
   if($_POST['username'] != null && $_POST['username'] != null) {
       $username = $_POST['username'];
       $password = $_POST['password'];
    //    echo $password . ' ' . $username;
    $sql = "SELECT * FROM user_login WHERE username='$username' AND password='$password' ;";
    $result = $conn->query($sql);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
        $_SESSION["loggedIn"] = true;
        header("location:welcome.php");
    } else {
        header("location:index.php");
        echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
    }

    while($row = $result->fetch_assoc()) {
        echo $row['username'] . ' ' . $row['password'] . '<br>';
    }
   }
}