<?php
error_reporting(E_ALL & ~E_NOTICE);


if($_SERVER['REQUEST_METHOD']=='POST'){
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "schoolbustrackingdb";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);


 if($_SERVER['REQUEST_METHOD']=='POST'){
 $driver_number = $_POST['dnumber'];
 $bus_number = $_POST['bnumber'];

 $response = array(); 
 
 
 
 $sql = "SELECT * FROM  diver WHERE driver_number= '$driver_number' AND bus_number='$bus_number'";
 
 
 
        $result = mysqli_query($conn,$sql);
	$r=mysqli_num_rows($result);
		
		if($r>0)
		{
			//Existing User
			$code = "success";
			$message = "Proceed To Your Profile !!";
			array_push($response, array("code"=>$code, "message"=>$message));
			echo json_encode($response);
		}else{
			//New User
			$code = "failed";
			$message = "Entered wrong Credential !!";
			array_push($response, array("code"=>$code, "message"=>$message));
			echo json_encode($response);
		}
	
	mysqli_close($conn);

 }
 }
 ?>
 

 
 