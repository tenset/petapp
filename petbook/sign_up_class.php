<?php
    //create a class of users
    class User {
    	private $firstname, $lastname, 
    	$email, $username, $password, $date_of_birth; // add $date_of_birth of later
		
		function __construct($firstname, $lastname, $email,
		$username, $password, $date_of_birth) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->email = $email;
			$this->username = $username;
			$this->password = $password;
			$this->date_of_birth = $date_of_birth;
			
		}
		//setters
		function set_firstname($firstname){
			$this->firstname = $firstname;
		}
		
		function set_lastname($lastname){
			$this->lastname = $lastname;
		}
		
		function set_email($email){
			$this->email = $email;
		}
		
		function set_username($username){
			$this->username = $username;
		}
		function set_password($password){
			$this->password = $password;
		}
		//getters
		function get_firstname(){
			return $this->firstname;
		}
		
		function get_lastname(){
			return $this->lastname;
		}
		
		function get_email(){
			return $this->email;
		}
		
		function get_username(){
			return $this->username;
		}
		function get_password(){
			return $this->password;
		}
		function get_dob(){
			return $this->date_of_birth;
		}
    }
	
?>