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
       <title>Order Successfully!</title>
       <link rel="stylesheet" type="text/css" href="order.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    </head>

    <body>
        <div class="grey-area">
            <h1 class="success">Success!</h1>
            <p>Thank You! Your order has been successfully placed!</p> 
            <a href="index.php" class="text-home">Click here to return to Home</a>
        </div>
        
    </body>

</html>
<?php } 

else{
	
	header("Location:../login/login2.php");
	exit;
}
	

?>
