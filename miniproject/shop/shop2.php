<?php
ob_start();
session_start();

$name=$_POST["name"];
$email=$_POST["email"];
$hp=$_POST["hp"];
$signup = $_GET["code"];






?>
<html>
	<link rel="stylesheet"  href="header.css">	
	<link rel="stylesheet"  href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <?php 

$link=mysqli_connect("localhost", "root", "") ;
mysqli_query($link, "SET CHARACTER SET gbk") ;
mysqli_query($link, "SET collation_connection='gbk_chinese_ci'") ;
mysqli_select_db($link, "wistoria_bakery") ;

$sql = "SELECT * FROM product_item WHERE product_item_name = '$product_name'";
$result = mysqli_query($link,$sql);
$field_data = mysqli_fetch_object($result);







?>
			<header>
				<nav class="headerabc">
					<ul class="header123">
						<a href="index.php"><img class="logo" src="images/logo.jpeg"></a>
						<li class="headernav"><a href="home.php">Home</a></li>
                        <li class="headernav"><a href="portfolio2.php">Portfolio</a></li>
                        <li class="headernav"><a href="shop2.php">Shop</a></li>
                        <li class="headernav"><a href="sendMessage2.php">Enquiry</a></li>
                        <li class="headernav"><a href="profile.php">Profile</a></li>
                        <li class="headernav"><a href="logout.php">Logout</a></li>
					</ul>
				</nav>

			</header>

		<div class="Wrap">
			<div class="B"></div>
			<div class="productrow1">
				<div class="Cake1">
					<table>
						<tr>
							<img src="jpg/cake 1.jpeg" alt="Cake 1">
								<h1 class="prodcutname">Caramel Cream Cheese Cake</h1>
							<ul>
								<tr>
									<th><li>RM89.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="quantity" min="0" max="10">
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
							<img src="jpg/cake 2.jpeg" alt="Cake 2">
							<h1 class="prodcutname">Dark Chocolate Cake</h1>
							<ul>
								<tr>
									<th><li>RM79.00/kg</li></th>
								</tr>
								
								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="quantity" min="0" max="10">
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
							<img src="jpg/cake 3.jpeg" alt="Cake 3">
							<h1 class="prodcutname">&nbsp;&nbsp;&nbsp;&nbsp; Carrot Cake &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </h1>
							<ul>
								<tr>
									<th><li>RM69.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="quantity" min="0" max="10">
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
							<img src="jpg/cake 4.jpeg" alt="Cake 4">
							<h1 class="prodcutname">Cherry Coconut Cake</h1>
							<ul>
								<tr>
									<th><li>RM69.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="quantity" min="0" max="10">
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
							<img src="jpg/cake 5.jpeg" alt="Cake 5">
							<h1  class="prodcutname">Macaron in a box &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1>
							<ul>
								<tr>
									<th><li>RM49.00/16pcs</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="quantity" min="0" max="10">
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
							<img src="jpg/cake 6.jpeg" alt="Cake 6">
							<h1  class="prodcutname">Black Forest Gelato Cake</h1>
							<ul>
								<tr>
									<th><li>RM109.00/kg</li></th>
								</tr>

								<tr>
									<li>
										<div class="dropdown">
											<input type="number" placeholder="quantity" id="quantity" name="quantity" min="0" max="10">
										</div><!--dropdown-->
									</li>
								</tr>
							</ul>
						</tr>
					</table>
				</div><!--Cake6-->	

			</div><!--productrow2-->	
					
			<div class="order">
				<a href="orderSuccessfully.html"><button type="submit" class="button" >order</button></a>
			</div><!--order-->

		</div><!--Wrap-->

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
					<p><a href = "mailto: wistoriabakery@gmail.com" id="email">wistoriabakery@gmail.com</a></p>
				</div><!--contact-us-->

				<div class="copyright">
					<p>&copy; 2020 by Wistoria Bakery</p>
				</div><!--copyright-->

			</div><!--#grid-container-->
			
		</footer>

	</body>
		
</html>