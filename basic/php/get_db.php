<?php

	function get_db(){
		$db_username = 'liskov';
		$db_password = 'F8G1rKhN'
		$db_host = 'db.dcs.aber.ac.uk';
        $db_name = 'csm2020_21_22_liskov';
		$db_type= ' '//need to add the db type 
		
		$db_data_name = "$db_type:host=$db_host;dbname=$db_name";
		
		try{
			return new PDO($db_data_name, $db_username, $db_password);
		catch{
			return null;
		
?>