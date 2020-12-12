<?php

$con=mysqli_connect("localhost","root","","login");

if(isset($_POST['submit'])) 
{
	$un = $_POST['un'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$qurey="INSERT INTO users set username='$un', password='$pass' , name='$name' ,email='$mail'";
	$result = mysqli_query($con,$qurey);
	echo "Data added successfully.";
	while($res=mysqli_fetch_assoc($result))
	{
		<a href="ani.php?name=$res[name]&u_id=$res[u_id]">For result</a>
	}
	
}

?>
