<?php
	require 'get_db_path.php';
	require GET_DB_PATH."/php/get_db.php";
	$conn = get_db();
	
	$stmt=$conn ->
		prepare("insert in to recipes (name,data,pic)"."(:name,:data,:pic")
		
	$stmt bindParam(':name', $_POST['new_name']);
	$stmt bindParam(':data', $_POST['new_data']);
	$stmt bindParam(':pic',	$_POST['new_pic']);
	
	$stmt-> execute();
	echo "working;
	$stmt = null;
	$conn = null;
	
>