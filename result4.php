<html>
<link rel="next" type="text" href="regi.php">
</html>

<?php
$num=0;
$con=mysqli_connect("localhost","root","","login");
if(isset($_POST['submit']))
{
  $rad = $_POST['a'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 1";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(1) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(1) is wrong";
      echo "<br><br>";
    }}
    $rad = $_POST['2'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 2";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(2) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(2) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['3'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 3";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(3) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(3) is wrong";
      echo "<br><br>";
    }}
  
    $rad = $_POST['4'];
    $qury="SELECT exam4 FROM exam WHERE sr_no = 4";
    $run=mysqli_query($con,$qury);
    if ($row = $run->fetch_assoc()) {
      if($row["exam4"] == $rad){
        echo "Answere of Q(4) is correct";
        echo "<br><br>";
        $num=$num+1;
      }else{
        echo "Answere of Q(4) is wrong";
        echo "<br><br>";
      }}

      $rad = $_POST['5'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 5";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(5) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(5) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['6'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 6";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(6) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(6) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['7'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 7";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(7) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(7) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['8'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 8";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(8) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(8) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['9'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 9";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(9) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(9) is wrong";
      echo "<br><br>";
    }}

    $rad = $_POST['0'];
  $qury="SELECT exam4 FROM exam WHERE sr_no = 10";
  $run=mysqli_query($con,$qury);
  if ($row = $run->fetch_assoc()) {
    if($row["exam4"] == $rad){
      echo "Answere of Q(10) is correct";
      echo "<br><br>";
      $num=$num+1;
    }else{
      echo "Answere of Q(10) is wrong";
      echo "<br><br>";
    }}

    echo "Total marks is ".$num." out of 10";
  
}


if(isset($_POST['submit']))
{
  $_Get['name'];
  $_Get['u_id'];
	$result=$num;
	$name=$_POST['name'];
	$u_id=$_POST['u_id'];
	$ins="insert into result set result_e4='$result', name='$name', u_id='$u_id'";
	$q=mysqli_query($con , $ins);

	echo "Result added successfuly.";
}

?>