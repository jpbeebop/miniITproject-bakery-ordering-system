<?php 
	
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	else
	echo"already";


	if(isset($_SESSION['customerID'])){

?>

<!DOCTYPE html>

<html>
	<link rel="stylesheet"  href="header.css">
	<link rel="stylesheet"  href="slider.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<head>
		<title>Home</title>
		<style type="text/css">
			.slider-section{
				background: white;
				width:100%;
				height: 725px;
			}

			.aboutus-section{
				display:flex;
				flex-direction: flexbox;
				padding:0px;
				padding-left:60px;
				padding-bottom: 00px;
			}

			.aboutus{
				width:40%;
				margin-top:0px;
				margin-right: 25px;
				overflow-wrap:break-word;
			}

			.aboutus h1{
				text-align:center;
				text-transform:capitalize;
				text-decoration:underline;
			}

			.aboutusimage{
				height:566.5px;
				width:500.5px;
			}

			img{
				width:170%;

			}

			h1{
				text-transform: uppercase;
				font-size: 13mm;
				color: black;
			}

			.description{
				font-size: 25px;
				font-family: Helvetica,Arial,sans-serif;
				color: black;
				text-align: justify;
				margin: 0px;
			}

			#grid-container{
				height:310px;
				display: grid;
				grid-template-columns: auto auto auto auto;
				background:url('images/bread_background1.png') center no-repeat;
				background-size:cover;
				background-color:black;
			}

			.follow-us,
			.working-hour,
			.address,
			.contact-us{
				text-align:center;
			}

			.working-hour{
				width:420px;
			}

			.address{
				width:280px;
			}

			.fa{
				justify-content:center;
				margin:10px;
				padding: 10px;
				font-size: 15px;
				width: 20px;
				text-align: center;
				text-decoration: none;
				
			}

			.fa:hover{
				transform:scale(1.1);
				cursor:pointer;
			}

			.fa-facebook{
				background: #3B5998;
				color:white;
			
			}

			.fa-instagram{
				background:#f09433;
				background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%); 
				background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
				background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); 
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
				color:white;
			}

			h3{
				text-align:center;
				color:white;
				font-size:19px;
			}

			p,
			#link-1{
				text-align:center;
				margin:0;
				color:white;
				font-size:17px;
			}

			.working-hour p,
			.address p,
			.contact-us p{
				margin:10px;
			}

			a#link-1:link{
				text-decoration:none;
				color:white;
			}

			a#link-1:visited{
				text-decoration:none;
				color:white;
			}

			a#link-1:hover{
				text-decoration:none;
				color:#87CEFA;
				cursor:pointer;
			}

			a#link-1:active{
				text-decoration:none;
				color:#173f5f;
			}

			a#email:link{
				text-decoration:none;
				color:white;
			}

			a#email:visited{
				text-decoration:none;
				color:white;
			}

			a#email:hover{
				text-decoration:none;
				color:#87CEFA;
				cursor:pointer;
			}

			a#email:active{
				text-decoration:none;
				color:#173f5f;
			}

			.copyright{
				transform:translateX(575px);
			}
						
		</style>
		
	</head>

	<body>

		<header>
			<nav class="headerabc">
				<ul class="header123">
					<a href="index.php"><img class="logo" src="images/logo.jpeg"></a>
					<li class="headernav"><a href="http://localhost/miniproject/index.php">Home</a></li>
					<li class="headernav"><a href="http://localhost/miniproject/portfolio/001portfolio.php">Portfolio</a></li>
					<li class="headernav"><a href="http://localhost/miniproject/shop/001shop.php">Shop</a></li>
					<li class="headernav"><a href="http://localhost/miniproject/enquiry/001sendMessage.php">Enquiry</a></li>
					<li class="headernav"><a href="http://localhost/miniproject/profile/001profile.php">Profile</a></li>
				</ul>
			</nav>
		</header>
		
		<section class="slider-section">
		
			<div class="slidershow middle">
				<div class="slider">
					<input type="radio" name="image" id="image1" checked>
					<input type="radio" name="image" id="image2">
					<input type="radio" name="image" id="image3">
					<input type="radio" name="image" id="image4">

					<div class="slideimage Id1">
						<img src="images/slider-image1.jpeg">
					</div>

					<div class="slideimage">
						<img src="images/sliderimage2.jpg">
					</div>

					<div class="slideimage">
						<img src="images/sliderimage3.jpg">
					</div>

					<div class="slideimage">
						<img src="images/sliderimage4.jpeg">
					</div>

				</div><!--.slider-->
				
				<div class="slider-navigation">
					<label for="image1" class="bar"></label>
					<label for="image2" class="bar"></label>
					<label for="image3" class="bar"></label>
					<label for="image4" class="bar"></label>		
				</div><!--.slider-navigation-->

			</div>

		</section>

		<section class="aboutus-section">

			<div class="aboutus">
				<h1>about us</h1>
				<p class="description">Wistoria Bakery is an award-winning bakery established since 2020, which concealed with a lot of passion in "baking happiness" for all kinds of occasions. </p>
				<br>
				<p class="description">At Wistoria Bakery, every pastries is baked with passion and quality, without preservatives and artificial ingredients to guarantee freshness and healthiness. We specialise in customised cakes for any occasion or purpose such as Birthdays, Wedding or Engagement, Anniversaries, Baby Showers, Corporate functions and etc.</p>
			</div><!--.aboutus-->

			<div class="aboutusimage">
				<img src="images/aboutus.jpg">
			</div><!--aboutusimage-->

		</section><!--aboutus-section-->

		<footer>
			
			<div id="grid-container">

				<div class="follow-us">
					<h3>About Wistoria Bakery</h3>
					<p>We make quality pastries with passion.</p>
					<br>
					<p>Currently accept customised cake for events, 
					<br>
					<p> birthday or any occasions.</p>
					<h3>Follow Us</h3>
					<a href="https://www.facebook.com/Wistoria-Bakery-113055653726539/?tn-str=k*F" class="fa fa-facebook"></a>
					<a href="https://instagram.com/wistoriabakery2020?igshid=1sly8jcceujxt" class="fa fa-instagram"></a>
				</div><!--follow-us-->

				<div class="working-hour">
					<h3>Working Hour</h3>
					<p>Monday 08:00am-08:00pm</p>
					<p>Tuesday 08:00am-08:00pm</p>
					<p>Wednesday 08:00am-08:00pm</p>
					<p>Thursday 08:00am-08:00pm</p>
					<p>Friday 08:00am-08:00pm</p>
					<p>Saturday 09:00am-05:00pm</p>
					<p>Closed on Sunday &amp; every Public Holiday</p>
				</div><!--working-hour-->

				<div class="address">
					<h3>Address</h3>
					<a href="https://goo.gl/maps/kohEBn7GGw8xJRKf8" id="link-1">Jalan Ayer Keroh Lama, Kampong Bukit Beruang, 75450 Malacca City, Malacca.</a>
				</div><!--address-->

				<div class="contact-us">
					<h3>Contact Number</h3>
					<p>012- 354 6789</p>
					<p>07-654 321</p>
					<p><a href = "mailto: wistoriabakery@gmail.com" id="email">askwistoriabakery@gmail.com</a></p>
				</div><!--contact-us-->

				<div class="copyright">
					<p>&copy; 2020 by Wistoria Bakery</p>
				</div><!--copyright-->

			</div><!--#grid-container-->

		</footer>

</html>

<?php } 

else{
	
	header("Location:login/login2.html");
	exit;
}
	

?>