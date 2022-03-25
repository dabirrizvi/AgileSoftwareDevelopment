<?php
	require 'get_db_handle_path.php';
	require GET_DB_HANDLE_PATH."/get_db_handle.php";

    $conn = get_db_handle();
	
	$stmt = $conn -> prepare("select * from recipe");
	$stmt -> execute();
	
	echo json_encode($stmt ->fetch(PDO::FETCH_ASSOC));
	
	$stmt = null;
	$conn = null;


?>
