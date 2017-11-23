<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MovieHub</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/Seat.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
  <div id="shell">
    <div id="header">
      <div class="Logo">
        <font size="6"><h1>MovieHub</h1></font>
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
          <li><a class="active" href="comingsoon.php">Coming Soon</a></li>
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
    <div class="content">
    	<h1>Movie Ticket Booking Widget</h1>
    	<div class="main">
    		<h2>Multiplex Theatre Showing Screen 1</h2>
    		<div class="demo">
          <div id="seat-map" class="seatCharts-container" tabindex="0">
				<div class="front">SCREEN</div>
    </div>
    			<div class="booking-details">
    				<ul class="book-left">
    					<li>Movie </li>
    					<li>Time </li>
    					<li>Tickets</li>
    					<li>Total</li>
    					<li>Seats :</li>
    				</ul>
    				<ul class="book-right">
    					<li>: Gingerclown</li>
    					<li>: April 3, 21:00</li>
    					<li>: <span id="counter">0</span></li>
    					<li>: <b><i>฿</i><span id="total">0</span></b></li>
    				</ul>
    				<div class="clear"></div>
    				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>


    				<button class="checkout-button">Buy Now</button>
    				<div id="legend" >
            </div>
    			</div>
    			<div style="clear:both"></div>
    	    </div>

    			<script type="text/javascript">
    				var price = 200; //price
    				$(document).ready(function() {
    					var $cart = $('#selected-seats'), //Sitting Area
    					$counter = $('#counter'), //Votes
    					$total = $('#total'); //Total money

    					var sc = $('#seat-map').seatCharts({
    						map: [  //Seating chart
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_',
    							'aaaaaaaaa_'
    						],
    						naming : {
    							top : false,
    							getLabel : function (character, row, column) {
    								return column;
    							}
    						},
    						legend : { //Definition legend
    							node : $('#legend'),
    							items : [
    								[ 'a', 'available',   'Available' ],
    								[ 'a', 'unavailable', 'Sold'],
    								[ 'a', 'selected', 'Selected']
    							]
    						},
    						click: function () { //Click event
    							if (this.status() == 'available') { //optional seat
    								$('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
    									.attr('id', 'cart-item-'+this.settings.id)
    									.data('seatId', this.settings.id)
    									.appendTo($cart);

    								$counter.text(sc.find('selected').length+1);
    								$total.text(recalculateTotal(sc)+price);

    								return 'selected';
    							} else if (this.status() == 'selected') { //Checked
    									//Update Number
    									$counter.text(sc.find('selected').length-1);
    									//update totalnum
    									$total.text(recalculateTotal(sc)-price);

    									//Delete reservation
    									$('#cart-item-'+this.settings.id).remove();
    									//optional
    									return 'available';
    							} else if (this.status() == 'unavailable') { //sold
    								return 'unavailable';
    							} else {
    								return this.style();
    							}
    						}
    					});
    					//sold seat
    					sc.get().status('unavailable');

    				});
    				//sum total money
    				function recalculateTotal(sc) {
    					var total = 0;
    					sc.find('selected').each(function () {
    						total += price;
    					});

    					return total;
    				}
    			</script>
    	</div>
    	<p class="copy_rights">&copy; 2016 Movie Ticket Booking Widget. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank"> W3layouts</a></p>
    </div>




  <div id="footer">
      <p class="lf">Copyright &copy; 2017 <a href="#">SiteName</a> - All Rights Reserved</p>
      <p class="rf">MovieHub <br>Krittikorn Kramgomut 5822771432<br>Thanapong Maleewan 5822790275 <br> Thanarath Piyakulpinyo</p>
      <div style="clear:both;"></div>
  </div>
  <script src="js/jquery.nicescroll.js"></script>
  <script src="js/scripts.js"></script>
  <!-- END PAGE SOURCE -->
</body>
  </html>
