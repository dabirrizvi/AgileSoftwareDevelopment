<?php
	function getAllergins(){
		$vegan=$_POST['vegan'];
		$vegitarian=$_POST['vegitarian'];
		$dairy=$_POST['dairy free'];
		$gluten=$_POST['gluten'];
		if($vegan=="1"){
			$vegan='1';
		}
		else{
			$vegan='0';
		}
		
		if($vegitarian=="1"){
			$vegitarian='1';
		}else{
			$vegitarian='0';
		}
		
		if($dairy=="1"){
			$dairy='1';
		}else{
			$dairy='0';
		}
		
		if($gluten=="1"){
			$gluten='1';
		}else{
			$gluten='0';
		}
		return array($vegan,$vegitarian,$dairy,$gluten);
		
	}


?>