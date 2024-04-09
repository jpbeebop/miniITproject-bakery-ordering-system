<?php 
session_start();
$userID = $_SESSION["customerID"];
$message = $_POST["message"];

if(!isset($_SESSION["customerID"])){
    echo "no session";
    return;
}

if($message === ""){
	echo "empty message";
	return;
}


   $to_email="askwistoriabakery@gmail.com";
   $subject="Message from user: ".$userID;
   $header="From: askwistoriabakery@gmail.com";

   if(mail($to_email,$subject,$message,$header)){
       echo "success";
   }
   else{
       echo "failed";
   }



?>