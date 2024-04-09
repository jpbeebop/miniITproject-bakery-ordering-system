<?php 

session_start();


if(isset($_SESSION["customerID"])){
	echo"still";
	session_destroy();
}
else
	echo"no more";

?>