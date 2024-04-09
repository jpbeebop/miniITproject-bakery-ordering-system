<?php 
	
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	else
	echo"already";


	if(isset($_SESSION['customerID'])){

?>

<html>
	<link rel="stylesheet"  href="../css/header.css">	
	<link rel="stylesheet"  href="../css/footer.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="shop.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<head>
		<meta charset="utf=8" />
		<title>Shop</title>
		<link rel="stylesheet" href="shop.css">
		
		<style>
			table {
				width: 260px;
				bottom: 25px;
				position: relative;
				border: none;
				height: 50px;
			}

			input[type="number"]{
				outline: none;
				background-color:white;
				font-family: Monaco, monospace;
				font-size:16px;
				width:150px;
				text-align: center;
				color: blue;
				bottom: -55px;
				position: relative;
				left: 5px;
			}

		</style>

	</head>

	<body>
			<header>
				<nav class="headerabc">
					<ul class="header123">
						<a href="home.html"><img class="logo" src="../images/logo.jpeg"></a>
						<li class="headernav"><a href="http://localhost/miniproject/index.php">Home</a></li>
						<li class="headernav"><a href="http://localhost/miniproject/portfolio/001portfolio.php">Portfolio</a></li>
						<li class="headernav"><a href="http://localhost/miniproject/shop/001shop.php">Shop</a></li>
						<li class="headernav"><a href="http://localhost/miniproject/enquiry/001sendMessage.php">Enquiry</a></li>
						<li class="headernav"><a href="http://localhost/miniproject/profile/001profile.php">Profile</a></li>
					</ul>
				</nav>

			</header>

	<form id="submitOrder">
		<div class="Wrap">
			<div class="B"></div>
			<div class="productrow1">
				<div class="Cake1">
					<table>
						<tr>
							<img src="../jpg/cake 1.jpeg" alt="Cake 1">
								<h1 class="prodcutname">Caramel Cream Cheese Cake</h1>
							<ul>
								<tr>
									<th><li>RM89.00/kg</li></th>		
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="00001" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>	

							</ul>
						</tr>	
					</table>	
				</div><!--Cake1-->	
							
				<div class="Cake2">
					<table>
						<tr>
							<img src="../jpg/cake 2.jpeg" alt="Cake 2">
							<h1 class="prodcutname">Dark Chocolate Cake</h1>
							<ul>
								<tr>
									<th><li>RM79.00/kg</li></th>
								</tr>
								
								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="00002" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>
							</ul>
						</tr>
					</table>
				</div><!--Cake2-->
							
				<div class="Cake3">
					<table>
						<tr>
							<img src="../jpg/cake 3.jpeg" alt="Cake 3">
							<h1 class="prodcutname">&nbsp;&nbsp;&nbsp;&nbsp; Carrot Cake &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h1>
							<ul>
								<tr>
									<th><li>RM69.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="00003" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>
							</ul>
						</tr>	
					</table>
				</div><!--Cake3-->
			</div><!--productrow1-->		
							
			<div class="productrow2">
				<div class="Cake4">
					<table>
						<tr>
							<img src="../jpg/cake 4.jpeg" alt="Cake 4">
							<h1 class="prodcutname">Cherry Coconut Cake</h1>
							<ul>
								<tr>
									<th><li>RM69.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="00004" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>
							</ul>
						</tr>
					</table>
				</div><!--Cake4-->

				<div class="Cake5">
					<table>
						<tr>
							<img src="../jpg/cake 5.jpeg" alt="Cake 5">
							<h1  class="prodcutname">Macaron in a box &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1>
							<ul>
								<tr>
									<th><li>RM49.00/16pcs</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="00005" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>
							</ul>
						</tr>
					</table>
				</div><!--Cake5-->
						
				<div class="Cake6">
					<table>
						<tr>
							<img src="../jpg/cake 6.jpeg" alt="Cake 6">
							<h1  class="prodcutname">Black Forest Gelato Cake</h1>
							<ul>
								<tr>
									<th><li>RM109.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="00006" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>
							</ul>
						</tr>
					</table>
				</div><!--Cake6-->	

			</div><!--productrow2-->	
					
			<div class="order">
				<button  class="button" onclick="submitOrder()" >order</button>
			</div><!--order-->

		</div><!--Wrap-->
	</form>

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

	</body>
		
</html>

<?php } 

else{
	
	header("Location:../login/login2.html");
	exit;
}
	

?>