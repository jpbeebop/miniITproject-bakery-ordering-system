<?php 
	
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	else
	echo"already";


	if(!isset($_SESSION['customerID'])){

?>

<!DOCTYPE html>
<html>

    <head>
        <title>Sign Up</title>
        <link rel="stylesheet"  href="../css/header.css">
		<link rel="stylesheet"  href="../css/slider.css">
        <link rel="stylesheet"  href="../css/footer.css">
        <link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="signup.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="signup.js"></script>

        <style>	
            .icon {
            padding: 10px;
            background: none;
            color: black;
            min-width: 20px;
            text-align: left;
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

        <div id="signup-box">

            <h1>Sign Up</h1>
            <h2 id="promptSignUp">Sign Up With Your Email Address</h2>
            <h2 id="emailExist">Email already sign up!</h2>
            <h2 id="pswNotMatch">Passwords not matching!</h2>
            <h2 id="weakPassword">Please use a stronger password!</h2>
            <h2 id="emptyFields">Please fill in all the fields!</h2>
            <h2 id="invalidName">Use only letters and space for your name!</h2>
            <h2 id="invalidEmail">Invalid e-mail format!</h2>
            <h2 id="invalidPhone">Invalid phone number!</h2>


            <form id="submitSignUp" >

                <div class="textbox">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Name" name="userName">
                </div>
    
                <div class="textbox">
                    <i class="fa fa-envelope icon"></i>
                    <input type="text" placeholder="Email" name="eMail">
                </div>
                
                <div class="textbox">
                    <i class="fa fa-key icon"></i>
                    <input type="password" placeholder="Password" name="psw" required >
                </div>
    
                <div class="textbox">
                    <i class="fa fa-key icon"></i>
                    <input type="password" name="psw-confirm" placeholder="Confirmed Password" required autofocus="autofocus" name="psw-confirm" >  
                </div>
    
                <div class="textbox">
                    <i class="fa fa-phone icon"></i>
                    <input type="text" placeholder="Phone Number" name="phone">
                </div>
                
                <button class="button" onclick="submitSignUpData()">Sign Up</button>
                <p class="haveanaccount">Already have an account? <a class="signuplink" href="../login/login2.html">Log In</a></p>

            </form>

           
        </div><!--#signup-box-->

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
	
	header("Location:../index.php");
	exit;
}
	

?>
