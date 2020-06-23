
<?php 

// 	$hostname = "localhost";
//     $dbname = "login";
//     $username = "root";

//     $conn = mysqli_connect($hostname, $username, '', $dbname);

    // if($conn){
    // 	echo "success";
    // }else{
    // 	echo "fail";
    // }


 ?>

<?php

$servername = "localhost";
$username = "ddhash";
$password = "1234";
$dbname = "logindb";

$conn = new mysqli('localhost', 'ddhash', '1234', 'logindb') or die(mysqli_error($mysqli));

if($conn->connect_error) {
    die("Conneciton failed: " . $conn->connect_error);
}

