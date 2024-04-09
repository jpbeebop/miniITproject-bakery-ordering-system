<?php 

session_start();


if(isset($_SESSION["customerID"])){


	$connection = new mysqli("localhost","root","","wistoria_bakery");

	$stmt = $connection->prepare("SELECT orderid FROM order_list WHERE customerid = ?");
	$stmt->bind_param("s",$_SESSION["customerID"]);
	$stmt->execute();
	$result = $stmt->get_result();
	$order = $result->fetch_all(PDO::FETCH_ASSOC);

    //echo json_encode($order);

    //echo gettype($order);
    //echo mysqli_num_rows($result);

    $iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($order));
    $anArray = [];
    
    foreach ($iterator as $key => $value) {
        array_push($anArray,$value);

    }


    echo implode(" ,",$anArray);
   

}

?>