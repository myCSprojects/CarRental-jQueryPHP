<?php
$host = "localhost";
$username = "root";
$password = "root";
$database_name = "car_rental";
$conn = mysqli_connect($host, $username, $password, $database_name);
$json = array();
if (isset($_POST["name"]) && isset($_POST["address"])){
	
          $name = $_POST["name"];
          $address = $_POST["address"];
          
        $sql = "INSERT into bank (B_Name,B_Addr,Owner_ID) values ('$name','$address','1')";
	$result = mysqli_query($conn,$sql);

       if ($result) {
        $json["success"]=1;
        $json["message"]="Bank added successfully." ;
		echo json_encode($json);
    }
    else{
        $json["success"]=0;
        $json["message"]="Error in Add Bank."; 
        echo json_encode($json);   
    }
    
 
}
	

?>

