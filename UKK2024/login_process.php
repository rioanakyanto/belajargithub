<?php
session_start();

$con = $conn = mysqli_connect("localhost", "username", "password", "digitallibary");

if(!$con) {
    die("connection failed:" . mysqli_connect_error());
}

$username =$_POST['username'];
$password =$_POST['password'];

$query ="SELECT * FROM users WHERE username='$username' AND password='$password'"
$result =mysqli_query($conn, $query);

if(mysqli_num_rows($result)== 1){
    $-SESSION['username'] = $username;
    header("location: home.php");
}else{
    echo"login failed. invaid username or password.";
}

mysql.close($conn);
?>