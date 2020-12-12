<?php

    $username = $_POST['user'];
    $password = $_POST['pass'];

$con=mysqli_connect("localhost","root","","login");

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($con,$username);
    $password = mysqli_real_escape_string($con,$password);

    //mysqli_connect("localhost", "root", "","login");

    $result = mysqli_query($con,"select * from users where username = '$username' and password='$password' ") 
    or die("Failed to query database" .mysql_error());

    $row = mysqli_fetch_array($result);
    if($row['username'] == $username && $row['password'] == $password){
header("location: prog1.html");
    }else{
echo "Failed to login";
    }
?>