<?php 
	
	$conn = new mysqli("localhost","root","","bd_login");

	$sql = "select pubKey from chaves";
	$result = $conn->query($sql);

	$row = mysqli_fetch_assoc($result);

	$cvPub = $row['pubKey'];

	$json['PubKey'] = $cvPub;
	echo json_encode($json);

	/*
	$op = $_POST['op'];
	
	if ($op == "pub")
	{

		$json['PubKey'] = $cvPub;
		echo json_encode($json);


	}
	else
	{
		$json['PubKey'] = "fail";
		echo json_encode($json);
	}
	
*/

	
?>