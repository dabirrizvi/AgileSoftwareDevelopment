<?php
	require 'get_db_path.php';
	require GET_DB_PATH."/get_db.php";

    $conn = get_db();
	//getting all the recipes from the db
	$stmt =$conn -> query("select * from recipes"); //need to change the sql to match db
	
	echo json_encode($stmt -> fetch(PDO::FETCH_ASSOC));
	
	$stmt = null;
	$conn = null;
?>