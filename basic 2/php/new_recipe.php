	<?php
		require 'get_db_handle_path.php';
		require GET_DB_HANDLE_PATH."/get_db_handle.php";
		require 'getID.php';
		$conn = get_db_handle();
		$name = $_POST['name'];
		//$data = $_REQUEST['details']
		$ID=getIDVal();
		
		//$name="Food3";
		echo $ID++;
		echo $name;
		$stmt =$conn -> prepare("insert into recipe (recipe_id,recipe_name,vegan,vegetarian,dairy_free) values(:id,:name,'1','1','1')"); 
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':id',$ID);
		$stmt -> execute();
		
		
		$stmt = null;
		$conn = null;
	?>