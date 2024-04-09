<?php 
$userID = $_POST['userName'];
$eMail = $_POST['eMail'];
$password = $_POST['psw'];
$password_confirm = $_POST['psw-confirm'];
$hp = $_POST['phone'];

if($hp != ""){

	if(preg_match("/[a-z]/i", $hp)){
		echo "invalid phone";
		return;
	}  
}

if($userID == "" || $eMail == "" || $password == "" || $hp == ""){
	echo "empty fields";
	return;
}

if(strlen($password) < 8 || !preg_match("#[0-9]+#", $password) || !preg_match("#[a-zA-Z]+#", $password) ){
	
		if (!preg_match('/[^A-Za-z0-9]/', $password) || is_numeric($password)) 
	{
		echo"weak password";
		return;
	}
		
}



if (!preg_match("/^[a-zA-Z ]*$/",$userID)) {
  echo "invalid name";
  return;
}


if (!filter_var($eMail, FILTER_VALIDATE_EMAIL)) {
 echo "invalid email";
 return;
}

$hash = password_hash($password,PASSWORD_DEFAULT);

 $sqlQuery = "INSERT INTO customer(email,name,password,hp) 
 VALUES ('$eMail','$userID','$hash','$hp');";

if(!($connection = mysqli_connect("localhost","root","")))
	die("Could not connect to database </body></html>");

if(!mysqli_select_db($connection,"wistoria_bakery"))
	die("Could not open user database!");


$valid = "true";
$sqlPull = "SELECT email FROM customer;";
$pullResult = mysqli_query($connection,$sqlPull);

$num_rows = mysqli_num_rows($pullResult);

	//if passwords are not matching
if($password != $password_confirm ){

		echo "notMatching";			
}
// if passwords are matching and...
else{
		while($row = mysqli_fetch_row($pullResult)){

			foreach($row as $key => $value){
				if($value == $eMail){
					$valid = "false";
					break 2;
				}
			}
				
		}


		if($valid == "true"){

			if($connection->query($sqlQuery) === TRUE)
			echo "success";
			else
			echo "Error: ". $sqlQuery . "<br>" . $connection->error;
		}
		//email exists
		else{
				echo "fail";
		}
}


$connection->close();

?>