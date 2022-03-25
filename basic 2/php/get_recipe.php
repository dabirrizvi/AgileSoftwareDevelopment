<?php
	require 'get_db_path.php';
	require GET_DB_PATH."/get_db.php";

    $conn = get_db();
	$name = $_GET['name']
	$stmt =$conn -> prepare("insert into recipe (recipe_name) values(?)"); 
	$stmt -> execute([$name]);
	
	
	
	$stmt = null;
	$conn = null;
?>
