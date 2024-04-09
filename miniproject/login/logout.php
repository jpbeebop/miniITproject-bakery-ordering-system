<?php
session_start();

session_unregister(password);
session_unregister(email);

if ($_SESSION["password"] == "" and $_SESSION["email"] == "")
    {
	    $url = "index.php";
       header("Refresh:0; url=index.php");
	    //echo "<script>navigate('$url')</script>";
	    exit();
	}
?>