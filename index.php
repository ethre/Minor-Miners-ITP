 <?php
session_start();
?>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Sigmar+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
    </head>
        
<body>
	
		<audio controls autoplay loop>
  <source src="audio/welcome.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

	<div style="width: 100%; height: 100%;">
		<div id="logo"><img style="width: 50%;" src="../img/MinorMinersLogoClearReallyWhite.png"/></div>
		<div id="wrapperlogin">
			<div id="formdivlogin">
				<form method='post' action='index.php'>
					<span style="text-align:center; font-family: 'Press Start 2P'; font-size: 12px; color: #fff;"><h1>Login form</h1></span>
					<br/>
					<br/>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 13px; line-height: 40px;">Email OR Username:</span>
					<br/>
					<span><input type='text' name='emailuser' /></span>
					
					
					<br/>
					<br/>
					<span style="color: #fff; font-family: 'Press Start 2P', cursive; font-size: 15px; line-height: 40px;">Password:</span>
					<br/>
					<span><input type='password' name='pass' /></span>
				
				
					<br/>
					<br/>
					<br/>
					<br/>
					<input type='image' src="img/loginbtn3.png" name="login"/>
				</form>
				<p style="text-align:right;color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Not registered yet? <br/><a href='registration.php'style="text-align:right;color: #fff; font-family: 'Press Start 2P', cursive; font-size: 10px; line-height: 40px;">Sign Up Here</a></p>
			</div>
		</div>
	</div>
<!--
 * Rev 1
 *
 * 22/03/2016
 *
 * @reference http://www.onlinetuting.com/create-login-script-in-php/
 * @author Aaron Fitzgerald, x14715335
 *
 *
 -->
<?php
// establishing the MySQLi connection

/*
* @author Aaron Fitzgerald, x14715335
*/
$con = mysqli_connect("localhost","root","","users");
/*
* @reference http://www.onlinetuting.com/create-login-script-in-php/
*/
if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

// checking the user

if(isset($_POST['login_x'])){

$emailuser = mysqli_real_escape_string($con,$_POST['emailuser']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

//$sel_user = "select * from users where user_email='$email' AND user_password='$pass'";

$sel_user = "SELECT * FROM users WHERE user_password = '$pass' AND (user_email = '$emailuser' OR username =  '$emailuser')";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
$retr = "select username from users where user_email='$emailuser' OR username = '$emailuser'";
$query = mysqli_query($con, $retr);
while($rs = mysqli_fetch_assoc($query)){
    $UserID= $rs['username'];
}
$_SESSION["mail"] = $UserID;

/*
* @author Aaron Fitzgerald, x14715335
*/
echo "<script>window.open('game.php','_self')</script>";

}

/*
* @reference http://www.onlinetuting.com/create-login-script-in-php/
*/
else if($emailuser == '') {

echo "<script>alert('Please enter email/username and try again')</script>";

}
else if($pass == '') {

echo "<script>alert('Please enter a password')</script>";

}
else{

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}

?>
<script src="js/main.js"></script>
</body>
</html>