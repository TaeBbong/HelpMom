<?php
	$con = mysqli_connect("localhost", "mok05289", "aorqnr980*", "mok05289");
	
	$pinNum = $_POST["pinNum"];

	$statement = mysqli_prepare($con, "select * from PIN where pinNum = ?");
	
	mysqli_stmt_bind_params($statement, "s", $pinNum);
	mysqli_stmt_execute($statement);

	mysqli_stmt_store_result($statement);
	mysqli_stmt_store_result($statement, $pinNum);

	$response = array();
	$response["success"] = false;

	while(mysqli_stmt_fetch($statement)){
		$response["success"] = true;
		$response["pinNum"] = $pinNum;
	}

	echo json_encode($response);
?>