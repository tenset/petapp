<?php
 	//include database credentials
	require_once 'db_credentials.php';
	require_once 'sign_up_class.php';
	require_once 'sql_inj_prevent.php';
	//connect to database
	$db_server = mysql_connect($db_hostname, $db_username, $db_password);
		if(!$db_server) die("Unable to connect to database server".mysql_errno()."<br />".rmysql_error());
		
	//select database 
	$db_select = mysql_select_db($db_database);
		if(!$db_select) die("Unable to select databases".mysql_error());
		
	//get POST values
	if (!empty($_POST['firstname']) && !empty($_POST['lastname']) && 
	!empty($_POST['email']) && !empty($_POST['username']) && 
	!empty($_POST['password']) && !empty($_POST['password_confirm']) && 
	!empty($_POST['captcha']) && !empty($_POST['dateOfBirth']) &&
	(!empty($_POST['password']) == !empty($_POST['password_confirm']))) 
	{		session_start();
			//***to-do trim and strip to prevent sql injection
			if($_SESSION['pass_phrase'] == $_POST['captcha']) {
			$firstname 	= sanitizeMySQL($_POST['firstname']);  
			$lastname 	= sanitizeMySQL($_POST['lastname']);
			$email 		= sanitizeMySQL($_POST['email']); 
			$username 	= sanitizeMySQL($_POST['username']); 
			$password 	= sanitizeMySQL($_POST['password']);
			$dateOfBirth = $_POST['dateOfBirth'];
			
			if(!validate_dob($dateOfBirth) || !validate_email($email) || 
				!validate_name($firstname) || !validate_name($lastname) || !validate_username($username)){
					header('Location:errorpage.php');
					die();
				}
			
			//create User object
			$petbook_user = new User($firstname,$lastname,$email,$username,$password,$dateOfBirth);
			
			$query = "INSERT INTO user VALUES" .
			"('$firstname','$lastname','$username','$email','$password','$dateOfBirth')";

			$result = mysql_query($query);
			if(!$result) die(mysql_error());			
			}
	}
	//push validate page to browser
	else {
		
		
		
	}
	
	
	
	mysql_close($db_server);
	
	
	
	
	
	function validate_name($field){
		if(preg_match('/^s*[a-zA-Z]{2,20}$/', $field))
		return true;
		else return false;
	}
	
	function validate_email($field){
		if(preg_match('/^s*[\w_-&$]+@[\w]+.[\w]+(.\w)?$/', $field))
		return true;
		else return false;
	}
	
	function validate_username($field){
		if(pre_match('/^s*\w{8,10} $/'). $field)
		return true;
		else return false;
	}
	
	function validate_dob($field){
		if(preg_match('/^\d{4}-\d{2}-\d{2}$/', $field))
		return true;
		else return false;
	}
	
?>