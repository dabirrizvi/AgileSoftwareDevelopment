<?php
		function getIDVal(){
		
		
		$conn = get_db_handle();
		$stmt = $conn -> prepare("select max(recipe_id) as maxID from recipe");
		$stmt->execute();
		$max=$stmt -> fetch(PDO::FETCH_ASSOC);
		$maxId=$max['maxid'];
		echo $maxId;
		
		$stmt = null;
		$conn = null;
		return $maxId++;
		}
?>