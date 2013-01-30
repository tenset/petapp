<?php
 session_start();
 $_SESSION['peton']="start";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css_custom/home.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="twitter-bootstrap/docs/assets/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="twitter-bootstrap/docs/assets/css/docs.css" />
	<link rel="stylesheet" type="text/css" href="twitter-bootstrap/docs/assets/css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="css_custom/calendar.css" />


<title>index</title>

<meta name="author" content="Ten" />
<!-- Date: 2013-01-04 -->
</head>
<noscript>	YOU HAVE TO ENABLE JAVASCRIPT BEFORE PROCEEDING </noscript>
<body class="well" style="background-image: url('images/cutedog.jpg'); background-repeat: no-repeat; background-size: 100%">

<form class="form-horizontal" action="signup.php" method="post">
<legend> <label class="badge badge-important"><h2> Sign Up On PetBook</h2></label></legend>
		<div class="control-group ">
			<label class="control-label" for="firstname"> FIRST NAME </label>
			<div class="controls">
				<input type="text" class="input-large" id="firstname" name="firstname" maxlength="20" > 
				<span class="help-inline" id="fspan" style="font-weight:bold;font-size: 12px; color:red"></span>
			</div>
			<p> 
			</p>
			<label class="control-label" for="lastname"> LAST NAME  </label>
			<div class="controls">
				<input type="text" class="input-large" id="lastname" name="lastname" maxlength="20" >
				<span class="help-inline" id="lspan"style="font-weight:bold;font-size: 12px;color:red"></span>
			</div>
			<p>
			</p>
			<label class="control-label" for="email"> E-MAIL </label>
			<div class="controls">
				<input type="text" class="input-large" id="email" name="email" maxlength="40" > 
				<span class="help-inline" id="espan" style="font-weight:bold;font-size: 12px;color:red"></span>
			</div>
			<p> 
			</p>
			<label class="control-label" for="username"> USERNAME </label>
			<div class="controls">
				<input type="text" class="input-large" id="username" name="username" maxlength="10" value='<?php require_once 'usernameAjax.php'?>' > 
				<span class="help-inline" style="font-size: 12px; font-weight:bold;" id="check_username"></span>
				<br />
				<p class="help-inline" style="font-size:11px;color:black;font-weight:bold;"> Username must be at least 8 characters </p>
			</div>
			
			<label class="control-label" for="password"> PASSWORD </label>
			<div class="controls">
				<input type="password" class="input-large" id="password" name="password" maxlength="10" > 
				<span class="help-inline" style="font-size: 11px;"></span>
				<br />
				<p class="help-inline" style="font-size:11px;color:black;font-weight:bold;"> At least 8 alphanumeric characters </p>
			</div>
			
			<label class="control-label" for="password_confirm"> CONFIRM PASSWORD </label>
			<div class="controls">
				<input type="password" class="input-large" id="password_confirm" name="password_confirm" maxlength="10" >
				<span class="help-inline" style="font-size: 11px;"></span>
			</div>
			<p>
				
			</p>
			<label class="control-label" for="dob"> Date Of Birth	
			<span> <i class="icon-calendar" > </i> </span> </label>
			<div class="controls">
				<div class="input-append date">
			 	<input class="span2" size="16" type="text" id="dob" name="dateOfBirth" style="background-color: #fefefe ;"readonly>
				</div>
		</div>
		
		<p> </p>
			<label class="control-label" for="password_confirm"> CAPTCHA </label>
			<div class="controls">
				<input type="text" class="input-small" id="password_confirm" name="captcha" maxlength="6">
				<span class ="inline-help"><img src="captcha.php" /></span>
			</div>
			
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn btn-info" > SIGN-UP </button>
			<button type="reset" class="btn btn btn-danger"> CANCEL </button>
		</div>
</form>

	<form class="form-inline"action="login.php" method="post">
		<fieldset>
		<input type="text" class="input-medium" placeholder="Email or Username" name="username_email"maxlength="30">
		<input type="password" class="input-medium" placeholder="Password" name="sign_in_password" maxlength="10">
		<button type="submit" class="btn" ><i class="icon-ok-sign"></i> Sign In </button>
	</form>
		
		
		
		
		
		
		
		
		
<script type="text/javascript" src="validate.js"></script>
<script type="text/javascript" src ="datepickr.js"></script>
<script src="usernameAjax.js"></script>
<script type="text/javascript">
	calendar.set("dob");
</script>
			
	</body>		
</html>