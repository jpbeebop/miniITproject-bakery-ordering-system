<?php 
session_start();
$userID = $_SESSION["customerID"];
$userName = $_POST['userName'];
//$eMail = $_POST['eMail'];
$phoneNumber = $_POST['phone'];


if(!isset($_SESSION["customerID"])){
    echo"no session";
}

else{
    $connection = new mysqli("localhost","root","","wistoria_bakery");

    /*if($userName === "" && $eMail === "" && $phoneNumber === ""){
        echo "empty";
    }*/

    if($userName === "" && $phoneNumber === ""){
        echo "empty";
        return;
    }
    
    if($userName != ""){
    
        if (!preg_match("/^[a-zA-Z ]*$/",$userName)) {
            echo "invalid name";
            return;
          }
          
            $stmt = $connection->prepare("UPDATE customer SET name = ? WHERE customerid = ?");
            $stmt->bind_param("ss",$userName, $userID);
            if($stmt->execute())
                $stmt->close();
        
    }
    
    
    /*if($eMail != ""){
    
        if (!filter_var($eMail, FILTER_VALIDATE_EMAIL)) {
            echo "invalid email";
            return;
           }
    
        $stmt = $connection->prepare("UPDATE customer SET email = ? WHERE customerid = ?");
        $stmt->bind_param("ss",$eMail,$userID);
        if($stmt->execute())
            $stmt->close();
    
    }*/

        
    if($phoneNumber != ""){

        if(!preg_match("/[a-z]/i", $phoneNumber)){
            $stmt = $connection->prepare("UPDATE customer SET hp = ? WHERE customerid = ?");
            $stmt->bind_param("ss",$phoneNumber,$userID);
            if($stmt->execute())
                $stmt->close();
        }

        else{
            echo "invalid phone";
            return;
        }
       
    
    }
    
    echo "success";
}

?>