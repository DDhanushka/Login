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