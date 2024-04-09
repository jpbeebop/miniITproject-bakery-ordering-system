<?php 

session_start();


if(isset($_SESSION["customerID"])){

	$connection = new mysqli("localhost","root","","wistoria_bakery");

	$stmt = $connection->prepare("SELECT * FROM customer WHERE customerid = ?");
	$stmt->bind_param("s",$_SESSION["customerID"]);
	$stmt->execute();
	$result = $stmt->get_result();
	$user = $result->fetch_object();

	echo json_encode($user);


}

?>