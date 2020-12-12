<?php

$con=mysqli_connect("localhost","root","","login");

if(isset($_POST['submit'])) 
{
	$un = $_POST['un'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$mail = $_POST['mail'];
    $qurey="INSERT INTO users set username='$un', password='$pass' , name='$name' ,email='$mail'";
    $query1="select * from users";
    $query2="insert into result (u_id, name) select (u_id, name) from users";
    $result = mysqli_query($con,$qurey);
    $result1=mysqli_query($con,$query1);
    $result2=mysqli_query($con,$query2);
	echo "Data added successfully.";
	while($res=mysqli_fetch_assoc($result1))
	{
		echo "<link rel='next' type='text/php' href='ani.php?name=$res[name]&u_id=$res[u_id]'>";
	}
}

?>

<!DOCTYPE html>
<head>
    <title>Registretion page</title>
</head>
<body>
    <form  method="POST">
    Username <input type="text" name="un" autocomplete="on" >
    password <input type="password" name="pass" autocomplete="on" >
    name  <input type="text" name="name" autocomplete="on" >
   email <input type="email" name="mail" autocomplete="on" >
   <input type="submit" name="submit" value="submit" >
    </form>
</body>
</html>
