<?php
session_start();
if($_SESSION['uid'])
{
  echo "Your login ID is ";
  echo $_SESSION['uid'];
}
else
{
  header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Index Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
        
  <nav class="navbar navbar-expand-lg navbar-light ftco_navbar bg-light ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand"><img src="css/ani1.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span> 
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active"><a href="prog.html" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="exam1.html" class="nav-link">Aptitude Test</a></li>
          <li class="nav-item"><a href="course.html" class="nav-link">Number Series</a></li>
          <li class="nav-item"><a href="teacher.html" class="nav-link">Verbal Reasoning</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Train Problems</a></li>
          <li class="nav-item cta"><a href="login.html" class="nav-link"><span>Logout!</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
    <div class="hero-wrap" style="background-image: url('css/green.jpg'); background-attachment:fixed;">
      <div class="container"></div>
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center">
      <h1>Welcome to Crack Aptitude</h1><div class="btn">
      <input type="button" value="Getting Start!" name="button" class="btn btn-outline-light btn-lg btn-block"></div>
      </div></div></div>
  </div>

<div class="row" style="padding: 5%">

  <div class="col-sm-3">
  <div class="card" style="width: 18 rem">
    <div class="card-body">
  <img class="card-img-top" src="css/yellow.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Aptitude</h5>
    <div class="card-text">Aptitude tests are used to determine an individual's ability/potential to succeed in a certain task, with no prior knowledge or training.</div>
    </div>
    <a href="exam1.php" class="btn btn-primary ">Start Exam</a></div>
  </div></div>

  <div class="col-sm-3">
      <div class="card" style="width: 18 rem">
        <div class="card-body">
      <img class="card-img-top" src="css/number.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Number Series</h5>
        <div class="card-text">In Number Series the Examiner has to predict which of the given optins will be the right option for the given number series</div>
        </div>
        <a href="exam2.php" class="btn btn-primary ">Start Exam</a></div>
      </div></div>
    
      <div class="col-sm-3">
          <div class="card" style="width: 18 rem">
            <div class="card-body">
          <img class="card-img-top" src="css/course-1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Verbal Ability</h5>
            <div class="card-text">Verbal reasoning is the ability to understand and logically work through concepts and problems expressed in words.</div>
            </div>
            <a href="exam3.php" class="btn btn-primary ">Start Exam</a></div>
          </div></div>

          <div class="col-sm-3">
              <div class="card" style="width: 18 rem">
                <div class="card-body">
              <img class="card-img-top" src="css/train1.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Train Problems</h5>
                <div class="card-text">It is type of Quantitative Problems that are asked in some Exams. In the problems their are three types of problems based on different situations.</div>
                </div>
                <a href="exam4.php" class="btn btn-primary ">Start Exam</a></div>
              </div></div>
    
    </div>

  <div class="col-sm-12" style="background-color:yellow; padding: 5%">
    <div class="container"><div class="row"><div class="col">
  <h2>Start with one simple Test</h2></div>
  <div class="w-100"></div>
  <div class="col"><h5>Lets start with one simple tests</h5></div>
  <div class="col-center"><a href="exam3.php" class="btn btn-primary ">Start Exam</a></div>
  </div></div></div>

  <footer class="ftco-footer ftco-bg-dark ftco-section img" >
   <div class="overlay"></div>
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2><a class="navbar-brand" href="index.html"><i class="flaticon-university"></i>Crack <br><small>Aptitude</small></a></h2>
            <p>All the aspirants and the students who are preparing to exam should follow some things.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2 text-left">Recent Blog</h2>
            <div class="block-21 mb-4 d-flex">
              <div class="text">
                <h3 class="heading"><a href="#">The question reasoning is good.</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> July 12, 201</a></div>
                  <div><a href="#"><span class="icon-person"></span> Vivek</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
            <div class="block-21 mb-4 d-flex">
              <div class="text">
                <h3 class="heading"><a href="#">Practice is importent factor to solve the problem.</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="icon-calendar"></span> May 14, 2019</a></div>
                  <div><a href="#"><span class="icon-person"></span> Sammed</a></div>
                  <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2> Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="text">298-B, 15 August Chowk, Somwar Peth, Pune-11, Maharashtra, India</span></li>
                <li><span class="text">+91 9552379075</span></li>
                <li><span class="text">CrackApti@gmail.com</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>All rights reserved | This website is made with by Group ENTREPRENEURS</p>
        </div>
      </div>
    </div>
  </footer>
  </body>
</html>