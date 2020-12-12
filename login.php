<?php

session_start();
if($_SESSION['uid'])
{
  header('location: prog1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index Page</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div
      class="hero-wrap"
      style="background-image: url('css/logo.jpg'); background-attachment:fixed;"
    >
      <section class="container-fluid">
        <section class="row justify-content-center">
          <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" method="POST">
             

              <div class="form-group">
                <label for="1w"><b>Email Address</b></label>
                <input
                  type="text"
                  class="form-control"
                  id="user"
                  name="user"
                  placeholder="Email"
                  style="border-radius: 5cm"
                />
              </div>

              <div class="form-group">
                <label for="1w"><b>Password</b></label>
                <input
                  type="password"
                  class="form-control"
                  id="pass"
                  name="pass"
                  placeholder="Password"
                  style="border-radius: 5cm"
                />
              </div>
              <pre>
   <input type="submit" class="btn btn-success" name="login" value="Login" />      <a class="btn btn-primary" href="prog2.html">Register</a>
   </pre>
            </form>
          </section>
        </section>
      </section>
    </div>
  </body>
</html>
<?php
$con=mysqli_connect("localhost","root","","login");
if(isset($_POST['login']))
{
  $username = $_POST['user'];
  $password = $_POST['pass'];

  $qury="SELECT * FROM users WHERE username = '$username' AND password = '$password'";
  $run=mysqli_query($con,$qury);
  $row=mysqli_num_rows($run);
  if($row < 1)
  {
    ?>
    <script>
      alert('Username or password does nt match');
      window.open('login.php','_self');
      </script><?php

  }
  else
  {
    $data=mysqli_fetch_array($run);
    $id=$data['u_id'];
    
    $_SESSION['uid']=$id;
    header('location: prog1.php');
  }
}
?>