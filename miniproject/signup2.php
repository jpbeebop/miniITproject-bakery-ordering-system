<?php ob_start();


$name =  $_POST["name"];
$password =  $_POST["password"];
$email =  $_POST["email"];
$hp =  $_POST["hp"];
$index =$_GET["index"];
$number    = preg_match('@[0-9]@', $password);
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);

   
    
/*$link=mysqli_connect("localhost", "root", "") ;
mysqli_query($link, "SET CHARACTER SET gbk") ;
mysqli_query($link, "SET collation_connection='gbk_chinese_ci'") ;
mysqli_select_db($link, "wistoria_bakery") ;*/




$sql_user = "SELECT * FROM customer WHERE email = '$email'";
$result_user = mysqli_query($link,$sql_user);
$rows_user = mysqli_num_rows($result_user);
$field_data_user = mysqli_fetch_object($result_user); 








?>
<!DOCTYPE html>
<html>

    <head>
        <title>Sign Up</title>
        <link rel="stylesheet"  href="header.css">
		<link rel="stylesheet"  href="slider.css">
		<link rel="stylesheet"  href="footer.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <link rel="stylesheet" type="text/css" href="signup.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		

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
    <form method="post">

   
        <header>
            <nav class="headerabc">
                <ul class="header123">
                    <a href="index.php"><img class="logo" src="images/logo.jpeg"></a>
                    <li class="headernav"><a href="index.php">Home</a></li>
                    <li class="headernav"><a href="portfolio.php">Portfolio</a></li>
                    <li class="headernav"><a href="shop.php">Shop</a></li>
                    <li class="headernav"><a href="sendMessage.php">Enquiry</a></li>
                    <li class="headernav"><a href="login2.php">Login/Sign Up</a></li>
                </ul>
            </nav>
        </header>

        <div id="signup-box">

            <h1>Sign Up</h1>
            <h2>Sign Up With Your Email Address</h2>
            <div id="emailalreadyexist">
                <p>Already sign up</p>
            </div>

             <div class="textbox">
                <i class="fa fa-user icon"></i>
                <input type="text" name="name" placeholder="Name" required="required" autofocus="autofocus">
            </div>

            <div class="textbox">
				<i class="fa fa-envelope icon"></i>
                <input type="text" name="email" placeholder="Email" required="required" autofocus="autofocus">
            </div>
            
            <div class="textbox">
				<i class="fa fa-key icon"></i>
                <input type="password" name="password" placeholder="Password" required="required" autofocus="autofocus" >
            </div>

            <div class="textbox">
				<i class="fa fa-key icon"></i>
                <input type="password" name="confirmed-password" placeholder="Confirmed Password" required="required" autofocus="autofocus" >  
            </div>
            
            <div class="textbox">
                <i class="fa fa-phone icon"></i>
                <input type="text" name="hp" placeholder="Phone Number" required="required" autofocus="autofocus">
            </div>

              <?php

 if($email !="" and $password !="")
{
  if($email == $field_data_user->email)
  
  {
    echo "already sign up";
  }
}


if($email != $field_data_user->email)
  {  
	 if($password !=0 and !$uppercase || !$lowercase || !$number || strlen($password) < 8) 
   {
    echo 'Password should be at least 8 characters in length and should include at least one upper case letter and one number.';
  }
else
{
    echo 'Strong password.';
    $sql="INSERT customer SET
      email = '$email',
      password = '$password',
      name = '$name',
      hp = '$hp'";
           
      mysqli_query($link, $sql) ;
      $text = "1";
      
      header("Refresh:0; url=login2.php");
			//echo "<script>navigate('$url')</script>";
      
  }
           
		
}


?>
<br>
            <button type="submit" name="signup" class="button">Sign Up</button>
			<p class="haveanaccount">Already have an account? <a class="signuplink" href="login2.php">Log In</a></p>
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
                <p><a href = "mailto: wistoriabakery@gmail.com" id="email">wistoriabakery@gmail.com</a></p>
            </div><!--contact-us-->

            <div class="copyright">
                <p>&copy; 2020 by Wistoria Bakery</p>
             </div><!--copyright-->

        </div><!--#grid-container-->
    </footer>
</html>
