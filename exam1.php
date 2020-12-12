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
    <title>Aptitude Test</title>
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
          <li class="nav-item"><a href="prog.html" class="nav-link">Home</a></li>
          <li class="nav-item active"><a href="exam1.html" class="nav-link">Aptitude Test</a></li>
          <li class="nav-item"><a href="course.html" class="nav-link">Number Series</a></li>
          <li class="nav-item"><a href="teacher.html" class="nav-link">Verbal Reasoning</a></li>
          <li class="nav-item"><a href="blog.html" class="nav-link">Train Problems</a></li>
          <li class="nav-item cta"><a href="login.html" class="nav-link"><span>Logout!</span></a></li>
        </ul>
      </div>
    </div>
  </nav><form action="result1.php" method="POST">
    <div class="hero-wrap" style="background-image: url('css/AptitudeTest.png'); background-attachment:fixed;">
      <div class="container"></div>
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-8 text-center">
      <h1>Aptitude Test</h1><div class="btn">
      <input type="button" value="Getting Start!" name="button" class="btn btn-outline-light btn-lg btn-block"></div>
      </div></div></div>
      
<div class="container" style="padding: 5%">
    1. Two trains of equal lengths take 10 seconds and 15 seconds respectively to cross a telegraph post. If the length of each train be 120 metres, in what time (in seconds) will they cross each other travelling in opposite direction?
      <div class="custom-control custom-radio">
        <input type="radio" id="1a" name="a" class="custom-control-input" value="a">
        <label class="custom-control-label" for="1a">A. 10</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="1b" name="a" class="custom-control-input" value="b">
        <label class="custom-control-label" for="1b">B. 12</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="1c" name="a" class="custom-control-input" value="c">
        <label class="custom-control-label" for="1c">C. 15</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="1d" name="a" class="custom-control-input" value="d">
        <label class="custom-control-label" for="1d">D. 20</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    2. 	Two pipes A and B can fill a cistern in 37(1/2) minutes and 45 minutes respectively. Both pipes are opened. The cistern will be filled in just half an hour, if the B is turned off after:
      <div class="custom-control custom-radio">
        <input type="radio" id="2a" name="b" class="custom-control-input" value="a">
        <label class="custom-control-label" for="2a">A. 5 mi n</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="2b" name="b" class="custom-control-input" value="b">
        <label class="custom-control-label" for="2b">B. 9 min</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="2c" name="b" class="custom-control-input" value="c">
        <label class="custom-control-label" for="2c">C. 10 min</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="2d" name="b" class="custom-control-input" value="d">
        <label class="custom-control-label" for="2d">D. 15 min</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    3. 	
    A shopkeeper sells one transistor for Rs. 840 at a gain of 20% and another for Rs. 960 at a loss of 4%. His total gain or loss percent is:
      <div class="custom-control custom-radio">
        <input type="radio" id="3a" name="c" class="custom-control-input" value="a">
        <label class="custom-control-label" for="3a">A. 5(15/17)%gain</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="3b" name="c" class="custom-control-input" value="b">
        <label class="custom-control-label" for="3b">B. 5(15/17)%gain</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="3c" name="customRadio" class="custom-control-input" value="c">
        <label class="custom-control-label" for="3c">C. 6(2/3)%gain</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="3d" name="c" class="custom-control-input" value="d">
        <label class="custom-control-label" for="3d">D. None of These</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    4. 	
    A man's speed with the current is 15 km/hr and the speed of the current is 2.5 km/hr. The man's speed against the current is:
      <div class="custom-control custom-radio">
        <input type="radio" id="4a" name="d" class="custom-control-input" value="a">
        <label class="custom-control-label" for="4a">A. 8.5 km/hr</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="4b" name="d" class="custom-control-input" value="b">
        <label class="custom-control-label" for="4b">B. 9 km/hr</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="4c" name="d" class="custom-control-input" value="c">
        <label class="custom-control-label" for="4c">C. 10 km/hr</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="4d" name="d" class="custom-control-input" value="d">
        <label class="custom-control-label" for="4d">D. 12.5 km/hr</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    5. A car travelling with (5/7) of its actual speed covers 42 km in 1 hr 40 min 48 sec. Find the actual speed of the car.
      <div class="custom-control custom-radio">
        <input type="radio" id="5a" name="e" class="custom-control-input" value="a">
        <label class="custom-control-label" for="5a">A. 17(6/7) km/hr</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="5b" name="e" class="custom-control-input" value="b">
        <label class="custom-control-label" for="5b">B. 25 km/hr</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="5c" name="e" class="custom-control-input" value="c">
        <label class="custom-control-label" for="5c">C. 30 km/hr</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="5d" name="e" class="custom-control-input" value="d">
        <label class="custom-control-label" for="5d">D. 35 km/hr</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    6. 	
    Excluding stoppages, the speed of a bus is 54 kmph and including stoppages, it is 45 kmph. For how many minutes does the bus stop per hour?
      <div class="custom-control custom-radio">
        <input type="radio" id="6a" name="f" class="custom-control-input" value="a">
        <label class="custom-control-label" for="6a">A.9 </label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="6b" name="f" class="custom-control-input" value="b">
        <label class="custom-control-label" for="6b">B. 10</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="6c" name="f" class="custom-control-input" value="c">
        <label class="custom-control-label" for="6c">C. 12</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="6d" name="f" class="custom-control-input" value="d">
        <label class="custom-control-label" for="6d">D. 20</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    7. A flagstaff 17.5 m high casts a shadow of length 40.25 m. The height of the building, which casts a shadow of length 28.75 m under similar conditions will be:
      <div class="custom-control custom-radio">
        <input type="radio" id="7a" name="g" class="custom-control-input" value="a">
        <label class="custom-control-label" for="7a">A. 10 m</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="7b" name="g" class="custom-control-input" value="b">
        <label class="custom-control-label" for="7b">B. 12.5 m</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="7c" name="g" class="custom-control-input" value="c">
        <label class="custom-control-label" for="7c">C. 17.5 m</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="7d" name="g" class="custom-control-input" value="d">
        <label class="custom-control-label" for="7d">D. 21.25 m</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    8. 	
    X can do a piece of work in 40 days. He works at it for 8 days and then Y finished it in 16 days. How long will they together take to complete the work?
      <div class="custom-control custom-radio">
        <input type="radio" id="8a" name="h" class="custom-control-input" value="a">
        <label class="custom-control-label" for="0a">A. 13(1/3)days</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="8b" name="h" class="custom-control-input" value="b">
        <label class="custom-control-label" for="0b">B. 15 days</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="8c" name="h" class="custom-control-input" value="c">
        <label class="custom-control-label" for="0c">C. 20 days</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="8d" name="h" class="custom-control-input" value="d">
        <label class="custom-control-label" for="0d">D.26 days</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    9. The sum of two number is 25 and their difference is 13. Find their product.
      <div class="custom-control custom-radio">
        <input type="radio" id="9a" name="i" class="custom-control-input" value="a">
        <label class="custom-control-label" for="9a">A. 104</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="9b" name="i" class="custom-control-input" value="b">
        <label class="custom-control-label" for="9b">B. 114</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="9c" name="i" class="custom-control-input" value="c">
        <label class="custom-control-label" for="9c">C. 315</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="9d" name="i" class="custom-control-input" value="d">
        <label class="custom-control-label" for="9d">D. 325</label>
      </div>
</div>
      
<div class="container" style="padding: 5%">
    10. The product of two numbers is 9375 and the quotient, when the larger one is divided by the smaller, is 15. The sum of the numbers is:
      <div class="custom-control custom-radio">
        <input type="radio" id="0a" name="j" class="custom-control-input" value="a">
        <label class="custom-control-label" for="0a">A. 380</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="0b" name="j" class="custom-control-input" value="b">
        <label class="custom-control-label" for="0b">B. 395</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="0c" name="j" class="custom-control-input" value="c">
        <label class="custom-control-label" for="0c">C. 400</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="0d" name="j" class="custom-control-input" value="d">
        <label class="custom-control-label" for="0d">D. 425</label>
      </div>
</div>


<div style="padding: 5%"><pre>
<input type="submit" class="btn btn-success" name="submit" value="submit">    <a href="ans1.html" class="btn btn-info">View Answer</a></pre></div>
</form>
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