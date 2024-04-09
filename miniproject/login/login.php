<?php 	

	
	if(!empty($_POST)){

		if(isset($_POST['eMail']) && isset($_POST['psw'])){

			$connection = new mysqli("localhost","root","","wistoria_bakery");

			$stmt = $connection->prepare("SELECT * FROM customer WHERE email = ?");
			$stmt->bind_param("s",$_POST["eMail"]);
			$stmt->execute();
			$result = $stmt->get_result();
			$user = $result->fetch_object();

		
			if(password_verify($_POST['psw'], $user->password)){
					session_start();

					$_SESSION['customerID'] = $user->customerid;
					echo "success!";
			}
			else 
				echo "fail";
		}

		$stmt->close();
	}	

?>	