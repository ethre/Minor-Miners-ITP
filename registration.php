<?php
session_start();
?>
<html>
	<head>
		<title> Registration Form</title>
			<link rel="stylesheet" type="text/css" href="css/login.css">
			<!-- Google Fonts -->
	        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	        <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
	        <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
	</head>

<body>
	
	<audio controls autoplay loop>
  <source src="audio/welcome4.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

		<div id="logo"><img style="width: 50%;" src="../img/MinorMinersLogoClearReallyWhite.png"/></div>
	<div id="wrapperlogin">
		<div id="formdivreg">
		<form id="regform" onsubmit="return validateForm()" method='post' action='registration.php'>
			<table>
				<span style="color: #fff; font-family: 'Press Start 2P'; font-size: 10px; line-height: 40px;"><h1>Registration Form</h1></span>
				<tr>
					<td>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">First Name:</span></td>
				<td>
					<span><input type='text' name='fname' /></span>
					</td>
				</tr>
				
				<tr>
					<td>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Last Name:</span></td>
				<td>
					<span><input type='text' name='lname' /></span>
					</td>
				</tr>
				
				<tr>
					<td>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Username:</span></td>
				<td>
					<span><input type='text' name='username' /></span>
					</td>
				</tr>
				
				<tr>
					<td>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Password:</span></td>
				<td>
					<span><input type='password' name='pass' /></span>
					</td>
				</tr>
				<tr>
					<td>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Email:</span></td>
				<td>
					<span><input type='text' name='email' /></span>
					</td>
				</tr>
			
			</table>
				</br></br>
		<input type='image' src="img/registerbtn.png" name="submit"/>
		</br></br>
		<p style="text-align:center;color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Already Registered? <a style="color:white;"href="index.php">Log in</a></p>

		</form>
	</div>
</div>
</body>
</html>
<?php
/*
 * registration.php
 *
 * Rev 1
 *
 * 24/03/2016
 *
 * @reference https://www.youtube.com/watch?list=PL3oMl9a6mutmCqVoHrhFd5LpQUbZR128v&v=vATsMnUA_1w
 * @author Abdul Khan
 *
 */ 
mysql_connect("localhost","root","");
mysql_select_db("users");

	if(isset($_POST['submit_x'])){
	
	 $first_name = $_POST['fname'];
	 $last_name = $_POST['lname'];
	 $username = $_POST['username'];
	 $user_email = $_POST['email'];
	 $user_pass = $_POST['pass'];
	
	if($first_name==null||$first_name == "" || strlen($first_name) < "2"){
	echo "<script>alert('First name must be filled out')</script>";
	exit();
	}
	
	if($last_name==''||$last_name==null||strlen($last_name)<"2"){
	echo "<script>alert('Last name must be filled out')</script>";
	exit();
	}
	
	if($username==''||$username==null|strlen($username)<"2"){
	echo "<script>alert('Username must be filled out')</script>";
	exit();
	}
	
	if($user_pass==''||$user_pass==null||strlen($user_pass)<"7"){
	echo "<script>alert('Password must be at least 7 characters long')</script>";
	exit();
	}
	
	if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
  	echo "<script>alert('Invalid email format')</script>";
  	exit();
	}
	
	$check_email = "select * from users where user_email='$user_email'";
	
	$run = mysql_query($check_email);
	
	if(mysql_num_rows($run)>0){
	
	echo "<script>alert('The email $user_email is already registered to another users account, please try a different one')</script>";
	exit();
	}
	
	$check_username = "select * from users where username='$username'";
	
	$run = mysql_query($check_username);
	
	if(mysql_num_rows($run)>0){
	
	echo "<script>alert('The username $username is already taken, please choose another one')</script>";
	exit();
	}
	
	$_SESSION["mail"] = $username;
	$query = "insert into users (username,user_email,first_name,last_name,user_password) values ('$username','$user_email','$first_name','$last_name','$user_pass')";
	if(mysql_query($query)){
	echo "<script>window.open('game.php','_self')</script>";
	
	}
	
}

?>
        

          