<?php
    
    function sanitizeString($var){
    	$var = strip_tags($var);
		$var = stripslashes($var);
		$var = htmlentities($var);
		return $var;
    }
	
	function sanitizeMySQL($var){
		$var = mysql_real_escape_string($var);
		$var = sanitizeString($var);
		return $var;
	}
	
	
	
	//String Manipulation to Cap first Letters of names
	
	
	function db_text($var){
		$var = strtolower($var);
		$var = ucfirst($var);
		return $var;
	}
?>