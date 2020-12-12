<?php
session_start();
if($_SESSION['uid'])
{
  echo "Your login ID is ";
  echo $_SESSION['uid'];
  echo "<br><br>";
}
else
{
  header('location: login.php');
}
$mt=$_SESSION['uid'];

$num=0;
$con=mysqli_connect("localhost","root","","login");
if(isset($_POST['submit']))
{
  $rad = $_POST['a'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 1";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "<br><br>Answere of Q(1) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "<br><br>Answere of Q(1) is wrong";
      echo "<br><br>";
    }}
    $rad = $_POST['b'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 2";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(2) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(2) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['c'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 3";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(3) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(3) is wrong";
      echo "<br><br>";
    }}
  
    $rad = $_POST['d'];
    $qury="SELECT exam1 FROM exam WHERE sr_no = 4";
    $run=mysqli_query($con,$qury);
    if ($row = $run->fetch_assoc()) {
      if($row["exam1"] == $rad){
        echo "Answere of Q(4) is correct";
        echo "<br><br>";
        $num=$num+1;
      }else{
        echo "Answere of Q(4) is wrong";
        echo "<br><br>";
      }}

      $rad = $_POST['e'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 5";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(5) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(5) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['f'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 6";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(6) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(6) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['g'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 7";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(7) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(7) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['h'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 8";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(8) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(8) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['i'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 9";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(9) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(9) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['j'];
  $qury="SELECT exam1 FROM exam WHERE sr_no = 10";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam1"] == $rad){
      echo "Answere of Q(10) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(10) is wrong";
      echo "<br><br>";
    }}

    echo "<br><br>Total marks is ".$num." out of 10<br>";
$query="update result set result_e1='$num' where u_id='$mt'";
$rt=mysqli_query($con,$query);
	echo "<br><br>Result added successfuly.";
}

?>