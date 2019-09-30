<html>
	<head>
		<title>Work in Progress</title>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
			body{
				background: url('../../assets/Sky.jpg');
				background-size: cover;
			}
			.container{
				width: 80%;
				margin: 0 auto;
			}
			.image{
				width: 300px;
				height: 200px;
				margin-left: 30px;
			}
			#grid {
			  display: grid;
			  grid-template-rows: repeat(3, 1fr);
			  grid-template-columns: repeat(3, 1fr);
			  grid-gap: 20px;
			}
			#grid > div {
			  background-color: #ffeb99;
			  color: black;
			  font-size: 20px;
			  padding: 10px;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="#">Keysian Auction</a>
		    </div>
		    <ul class="nav navbar-nav">
		      <li class="active"><a href="#">Home</a></li>
		      <li><a href="keysianContactUs">Contact Us</a></li>
		      <li><a href="keysianAboutUs">About Us</a></li>
		      <li><a href="auctioneers">Admin</a></li>
		    </ul>
		 <ul class="nav navbar-nav navbar-right">
		       <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>  -->
		        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
		      </ul>
		  
		  </div>
		</nav>
		<h2>Welcome, Person</h2>
		<!-- Display the countdown timer in an element -->

		<h2 style="text-align: center;"><b>Time until next auction: </b></h2>
		<h2 style="text-align: center; color: white; font-family: sans-serif;" id="demo"></h2>

		<!-- Code to display auction items -->
		<div class="container">
			<div id="grid">
			  <div>
			  	<img src="../../assets/car1.jpg" class="image" alt="">
			  	<p><b>Model:</b> Datsun<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car2.jpg" class="image" alt="">
			  	<p><b>Model:</b> Mistubishi<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car3.jpg" class="image" alt="">
			  	<p><b>Model:</b> Toyota<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a></div>
			  <div>
			  	<img src="../../assets/car4.jpg" class="image" alt="">
			  	<p><b>Model:</b> Toyota<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car5.jpg" class="image" alt="">
			  	<p><b>Model:</b> Mitsubishi<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car1.jpg" class="image" alt="">
			  	<p><b>Model:</b> Datsun<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>&nbsp;
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car6.jpg" class="image" alt="">
			  	<p><b>Model:</b> Tata<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>&nbsp;
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car7.jpg" class="image" alt="">
			  	<p><b>Model:</b> Daweoo<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>&nbsp;
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			  <div>
			  	<img src="../../assets/car8.jpg" class="image" alt="">
			  	<p><b>Model:</b> Lexus<br><b>Year:</b> 2000<br><b>Price:</b> 1.2 M</p>
			  	<a href="#"><button>BID</button></a>&nbsp;
			  	<a href="#" style="float: left;"><button>ADD TO SHORTLIST</button></a>
			  </div>
			</div>
		</div>
		<br><br>
		
		<script>
		// Set the date we're counting down to
			var countDownDate = new Date("Nov 5, 2019 15:37:25").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

				  // Get today's date and time
				var now = new Date().getTime();

				  // Find the distance between now and the count down date
				var distance = countDownDate - now;

				  // Time calculations for days, hours, minutes and seconds
				  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

				  // Display the result in the element with id="demo"
				  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
				  + minutes + "m " + seconds + "s ";

				  // If the count down is finished, write some text
				  if (distance < 0) {
				    clearInterval(x);
				    document.getElementById("demo").innerHTML = "EXPIRED";
			  	}
			}, 1000);
		</script>

		<script>
		// Set the date we're counting down to
			var countDownDate = new Date("Nov 5, 2019 15:37:25").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

				  // Get today's date and time
				var now = new Date().getTime();

				  // Find the distance between now and the count down date
				var distance = countDownDate - now;

				  // Time calculations for days, hours, minutes and seconds
				  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
				  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
				  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
				  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

				  // Display the result in the element with id="demo"
				  document.getElementById("demo2").innerHTML = days + "d " + hours + "h "
				  + minutes + "m " + seconds + "s ";

				  // If the count down is finished, write some text
				  if (distance < 0) {
				    clearInterval(x);
				    document.getElementById("demo").innerHTML = "EXPIRED";
			  	}
			}, 1000);
		</script>
	</body>
</html>