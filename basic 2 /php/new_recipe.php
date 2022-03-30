	<?php
		require 'get_db_handle_path.php';
		require GET_DB_HANDLE_PATH."/get_db_handle.php";
		
		$conn = get_db_handle();
		$name = $_REQUEST['name'];
		$data = $_REQUEST['details']
		echo $name;
		$stmt =$conn -> prepare("insert into recipe (recipe_id,recipe_name,vegan,vegetarian,dairy_free) values('201',:name,'1','1','1')"); 
		$stmt->bindParam(':name',$name);
		
		$stmt -> execute();
		$stmt = null;
		$stmt =$conn -> prepare("insert into instructions (recipe_id,recipe_name,instructions) values('201',:name,:data)"); 
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':data',$data);
		$stmt -> execute();
		
		$stmt = null;
		$conn = null;
	?>
