<?php 
	
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	else
	echo"already";


	if(isset($_SESSION['customerID'])){

?>

<html>
        
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/miniproject/css/header.css">
        <link rel="stylesheet" type="text/css" href="http://localhost/miniproject/css/portfolioStyling.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
                <nav class="headerabc">
                    <ul class="header123">
                        <a href="home.html"><img class="logo" src="http://localhost/miniproject/images/logo.jpeg"></a>
                        <li class="headernav"><a href="http://localhost/miniproject/index.php">Home</a></li>
                        <li class="headernav"><a href="http://localhost/miniproject/portfolio/001portfolio.php">Portfolio</a></li>
                        <li class="headernav"><a href="http://localhost/miniproject/shop/001shop.php">Shop</a></li>
                        <li class="headernav"><a href="http://localhost/miniproject/enquiry/001sendMessage.php">Enquiry</a></li>
                        <li class="headernav"><a href="http://localhost/miniproject/profile/001profile.php">Profile</a></li>
                    </ul>
                </nav>
        
         </header>
        
        <div id="container-product">
            <a href="#chocolate-cupcake" class="product"><img src="../images/chocolate_cupcake.jpg" alt="Chocolate CupCake"></a>
            <div id="text-1">
                <h1 class="classA">Most Favourite: Chocolate Cherry Indulgence Cupcake</h1>
                <h3 class="classB">
                    <p>"The second you bite into the cupcake, 
                    the melted chocolate <span  style="color:#efff0c">flows smoothly </span> into your mouth.
                    Perfect indulgence."
                    -Mary Jane</p>
                </h3><!--.classB-->
            </div><!--text-1-->        

            <a href="#matcha-cake" class="product"><img src="../images/matcha_cake.jpg" alt="Matcha Cake"></a>
            <div id="text-2">
                <h1 class="classA">Wistoria's Recommendation: Kyoto Matcha Cake</h1>
                <h3 class="classC">
                    <p>"I'm a snob for matcha and <span style="color:#efff0c">this is exactly what I've been craving for!"</span> -Jane Doe</p>
                </h3><!--.classC-->
            </div><!--text-2-->            

            <a href="#macaron-cake" class="product"><img src="../images/macaron_cake.jpg" alt="Big Macaron Cake"></a>
            <div id="text-3">
                <h1 class="classA">Award Winning 2019: Big Macaron Cake</h1>
                <h3 class="classD">
                    <p>"This award winning piece of pastry <span style="color:#efff0c">surpasses the boundary of creativity</span>, gurantees to satisfy the sweetooth of a macaron lover." -Gordan Ron</p>
                </h3><!--.classD-->
            </div><!--text-3-->
            
        </div><!--.container-product-->

        <h2>More Products</h2>

        <div id="container">
            <a href="#oreo-cake" class="cake"><img src="http://localhost/miniproject/images/oreo_cake.jpg" alt="Oreo Cake"></a>
            <a href="#citrus-cupcake" class="cake"><img src="../images/citrus_cupcake.jpg" alt="Citrus Cupcake"></a>
            <a href="#blueberry-cake" class="cake"><img src="../images/blueberry_cake.jpg" alt="Blueberry Gelato Cake"></a>
            <a href="#flower-cake" class="cake"><img src="../images/flower_cake.jpg" alt="Flower Cake"></a>
            <a href="#tiramisu" class="cake"><img src="../images/tiramisu.jpg" alt="Tiramisu"></a>
        </div><!--.container-->        

    </body>

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
	
	header("Location:../login/login2.html");
	exit;
}
	

?>