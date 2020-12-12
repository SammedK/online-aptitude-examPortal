<?php
$ques1 = $_POST['a'];
$con=mysqli_connect("localhost","root","","login");
$ques1 = stripcslashes($ques1);
$num = 0;

echo $ques1;
?>