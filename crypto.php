<?php

	$con =mysqli_connect("localhost","root","","bd_login");
	
	$msgEncrypted = $_POST["msgEncrypted"];
	
	$sql = "UPDATE MsgEncrypted 
			SET mensagem='$msgEncrypted'
			WHERE id='1';";
	
	if($con->query($sql) == TRUE){
		$json['insert'] = true;
		//$json['name'] = '$name'
 	}else{
		$json['insert'] = false;
	}
	
	echo json_encode($json);
	mysqli_close($con);
	

	
	
	?>