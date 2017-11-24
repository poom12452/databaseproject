<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <div class="Logo">
      <img src="image/Movie.png">
  </div>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
        <li><a class="rss" href="#">rss</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="movie.php">Now Showing</a></li>
        <li><a href="comingsoon.php">Coming Soon</a></li>
        <li><a href="promotion.php">Promotion</a></li>
        <li><a class="active" href="Login.php">Sign Up/Login</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
      </ul>
    </div>
    <div id="sub-navigation">
      <ul>

      </ul>
      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <input type="submit" value="GO!" class="search-button" />
        </form>
      </div>
    </div>
  </div>


  <div id="main">
    <div id="content">
      <div class="box">
        <form method="post">
          <div class="container" id="content">
          <h1 class="text-center">Please Signup</h1>
          <div class="row">
            <div class="col-md-4 col-md-offset-4" id="col">

            <div class="form-group">
                 <label>First Name</label>
                 <input type="text" placeholder="First Name" class="form-control" name="firstname">
            </div>
            <div class="form-group">
                 <label>Last Name</label>
                 <input type="text" placeholder="Last Name" class="form-control" name="lastname">
          </div>

          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>

          <div class="form-group">
            <label for="cpassword">Confirm Password:</label>
            <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
          </div>

          <div class="form-group">
          <label for="email">Email address:</label>
          <input type="email" class="form-control" placeholder="Email Address" name="email">
        </div>

          <div class="form-group">
          <label for="phonenum">Phone number:</label>
          <input type="text" class="form-control" placeholder="Phone Number" name="phonenum">
        </div>
        <div class="form-group">
        <input type="submit" value="Sign up" class="btn btn-blue btn-lg btn-block" name="btn-signup"/>
        </div>
          </form>
      </div>
    </div>
  </div>












  <div id="footer">
      <p class="lf">Copyright &copy; 2017 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="rf">MovieHub <br>Krittikorn Kramgomut 5822771432<br>Thanapong Maleewan 5822790275 <br> Thanarath Piyakulpinyo</p>
      <div style="clear:both;"></div>
  </div>
  <!-- END PAGE SOURCE -->
  </body>
  </html>
