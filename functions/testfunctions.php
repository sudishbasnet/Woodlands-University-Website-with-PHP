<?php 
	function loginTesting($user){
		$valid = true;

		if($user['username'] == '')
			$valid = false;
		if($user['password'] == '')
			$valid = false;
		return $valid;
	}
?>