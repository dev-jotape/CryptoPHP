<?php

	$con =mysqli_connect("localhost","root","","bd_login");
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$sql = "select username,password from users where username='$username' and password='$password' ";
	$result = mysqli_query($con,$sql);
	
	if(mysqli_num_rows($result) > 0 ){
		$json['success'] = 'Welcome '. $username;
		//$json['name'] = '$name'
 	}else{
		$json['error'] = 'Access denied';
	}
	
	echo json_encode($json);
	mysqli_close($con);
	
	
	
?>
