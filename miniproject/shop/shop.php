<?php 
session_start();
if(isset($_SESSION["customerID"])){
	$userID = $_SESSION["customerID"];
}
else{
	echo "no session";
	return;
}
$CaramelCreamCheese = $_POST['00001'];
$DarkChocolate = $_POST['00002'];
$CarrotCake = $_POST['00003'];
$CherryCoconut = $_POST['00004'];
$Macaron = $_POST['00005'];
$BlackForest = $_POST['00006'];

if($CaramelCreamCheese === 0 && $DarkChocolate === 0 && $CarrotCake === 0 && $CherryCoconut === 0 && $Macaron === 0 && $BlackForest === 0){
	echo "no order";
	return;
}

$cakes = array($CaramelCreamCheese,$DarkChocolate,$CarrotCake,$CherryCoconut,$Macaron,$BlackForest);

$totalPrice = 0;

$connection = new mysqli("localhost","root","","wistoria_bakery");

$sqlPull = "SELECT product_item_price FROM product_item;";
$pullResult = mysqli_query($connection,$sqlPull);

$num_rows = mysqli_num_rows($pullResult);

$prices = [];

while($row = mysqli_fetch_array($pullResult)){

	foreach(array_unique($row) as $key=>$value){
		//echo $value;
		array_push($prices,(double)$value);
	}
}


for($i = 0; $i < count($prices); ++$i){
	$totalPrice += $prices[$i] * (double)$cakes[$i];
}

//echo $totalPrice . "is total price ";


//echo '<pre>'; print_r($rows); echo '</pre>';

/*while($row = mysqli_fetch_row($pullResult)){

	foreach($row as $key => $value){
		$totalPrice += $cakes[0] * $value; 
	}
		
}*/

$sqlQuery = "INSERT INTO order_list (customerid,totalprice) VALUES ('$userID','$totalPrice');";

if($connection->query($sqlQuery) === TRUE){

	
	//get order ids
	$stmt = $connection->prepare("SELECT orderid FROM order_list ORDER BY orderid DESC LIMIT 1;");

	$stmt->execute();
	
	$orderIDfromDB = $stmt->get_result();

	$latestOrderID = $orderIDfromDB->fetch_object();

	$orderID = "";

	foreach($latestOrderID as $key=>$value){
		$orderID = (string)$value;
		//echo $orderID . "is order id ";
	}

	//get product ids
	$pullProductIDs = "SELECT productitemid FROM product_item;";

	$productIDfromDB = mysqli_query($connection,$pullProductIDs);

	$num_rows = mysqli_num_rows($productIDfromDB);

	$productItemIDs = [];

	while($id = mysqli_fetch_array($productIDfromDB)){
		
		foreach(array_unique($id)as $key => $value){
			//echo $value.",";
			array_push($productItemIDs,$value);
	
				
			}
	}

	

	//$products = [];

	/*foreach($productItemIDs as $id){
		array_push($products,(string)$id);
	}*/

	/*print_r($productItemIDs);
	echo gettype($productItemIDs[0]);
	echo gettype($cakes[0]+0);*/

	$orderItemID;

	$result = "";

	for($i = 0; $i < $num_rows; ++$i){

		if($cakes[$i] > 0){

			$orderItemID =  $orderID . $productItemIDs[$i] ;
			//echo gettype($orderItemID);
			
			$aQuery = "INSERT INTO order_item (orderitemid,quantity)
			VALUES ($orderItemID,$cakes[$i]);";

			//echo"ok";

			if($connection->query($aQuery) === TRUE){
				$result = "success";
			}

			else{
				$result = "failed";
			}
		}
	}

	if($result === "success"){
		echo "success";
	}
	
	else{
		echo "failed";
	}

}
	
else
	echo "Error: ". $sqlQuery . "<br>" . $connection->error;

?>