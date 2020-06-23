<?php
session_start();

require_once("config.php");
if(isset($_POST['logout'])) {
    session_unset();
    header("location:index.php");
    // $_SESSION["loggedIn"] = false;
}