<!--
 * login.php
 *
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
session_start();
?>
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

if(isset($_POST['login'])){

$email = mysqli_real_escape_string($con,$_POST['email']);

$pass = mysqli_real_escape_string($con,$_POST['pass']);

$sel_user = "select * from users where user_email='$email' AND user_password='$pass'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){


/*
* @author Aaron Fitzgerald, x14715335
*/
echo "<script>window.open('index_current_main.php','_self')</script>";

}

/*
* @reference http://www.onlinetuting.com/create-login-script-in-php/
*/
else {

echo "<script>alert('Email or password is not correct, try again!')</script>";

}

}

?>