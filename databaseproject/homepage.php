<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/homepage1.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
        <li><a class="active" href="homepage.php">Home</a></li>
        <li><a href="movie.php">Now Showing</a></li>
        <li><a href="comingsoon.php">Coming Soon</a></li>
        <li><a href="promotion.php">Promotion</a></li>
        <li><a href="Login.php">Sign Up/Login</a></li>
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
        <div class="head">
          <h2>Now Showing</h2>
          <p class="text-right"><a href="#">See all</a></p>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>First Slide</h3>
                <p>This is a description for the first slide.</p>
              </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Second Slide</h3>
                <p>This is a description for the second slide.</p>
              </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Third Slide</h3>
                <p>This is a description for the third slide.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <div id="main">
      <div id="content">
        <div class="box">
          <div class="head">
            <h2>Coming Soon</h2>
            <p class="text-right"><a href="#">See all</a></p>
          </div>
          <div class="movie">
            <div class="movie-image"> <span class="play"><span class="name">X-MAN</span></span> <a href="ComingSoonDetail.php"><img src="css/images/movie1.jpg" alt="" /></a> </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
          <div class="movie">
            <div class="movie-image"> <span class="play"><span class="name">SPIDER MAN 2</span></span> <a href="ComingSoonDetail.php"><img src="css/images/movie2.jpg" alt="" /></a> </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
          <div class="movie">
            <div class="movie1-image"> <span class="play"><span class="name">SPIDER MAN 3</span></span> <a href="ComingSoonDetail.php"><img src="css/images/movie3.jpg" alt="" /></a> </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
          <div class="movie">
            <div class="movie1-image"> <span class="play"><span class="name">VALKYRIE</span></span> <a href="ComingSoonDetail.php"><img src="css/images/movie4.jpg" alt="" /></a> </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
          <div class="movie">
            <div class="movie1-image"> <span class="play"><span class="name">GLADIATOR</span></span> <a href="ComingSoonDetail.php"><img src="css/images/movie5.jpg" alt="" /></a> </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
          <div class="movie last">
            <div class="movie-image"> <span class="play"><span class="name">ICE AGE</span></span> <a href="ComingSoonDetail.php"><img src="css/images/movie6.jpg" alt="" /></a> </div>
            <div class="rating">
              <p>RATING</p>
              <div class="stars">
                <div class="stars-in"> </div>
              </div>
              <span class="comments">12</span> </div>
          </div>
          <div class="cl">&nbsp;</div>
        </div>

  <div id="footer">
    <p class="lf">Copyright &copy; 2010 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">MovieHub <br>Krittikorn Kramgomut 5822771432<br>Thanapong Maleewan 5822790275 <br> Thanarath Piyakulpinyo</p>
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>
<!--sdsdsdsdd-->
