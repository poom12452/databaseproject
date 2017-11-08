<!DOCTYPE html>
<html lang="en">
<head>
<style>

</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MovieHub</title>
  <link rel="stylesheet" href="homepage.css">
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="w3.css">
</head>
<body>

    <div id="container-fluid">
      <div class="topbar">
        <div class="logo">
          <a href="">MovieHub</a>
        </div>

        <div class="searchdiv">
          <input type="text" placeholder="search"/>
        </div>

        <div class="topmenudiv">
          <ul id="menu">
            <li><a href="footwear.html">Home</a></li>
            <li><a href="forumselect.html">Movies</a></li>
            <li><a href="login.php">Coming Soon</a></li>
            <li><a href="footwear.html">Promotion</a></li>
            <li><a href="footwear.html">Sign up/ Login</a></li>
          </div>

          <div class="w3-content w3-display-container">
            <img class="mySlides" src="image/movie1.jpg" style="width:60%">
              <img class="mySlides" src="image/movie2.jpg" style="width:60%">
            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          </div>

          <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
               x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
          }
          </script>


</body>
</html>
