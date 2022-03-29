<?php
function setInstructions($ID){
		$conn = get_db_handle();
		$stmt =$conn -> prepare("insert into recipe (recipe_id,recipe_name,instructions) values(:id,:name,:instructions)"); 
		$stmt->bindParam(':name',$name);
		$stmt->bindParam(':id',$ID);
		$stmt->bindParam(':instructions',$data);
		
		$stmt->execute();
		
		$stmt = null;
		$conn = null;
}

?>