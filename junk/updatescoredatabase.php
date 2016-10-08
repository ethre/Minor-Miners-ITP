Put this in main index: remember to close after button
<!--<form method='post' action='index_current_main.php'>-->
<!--<span><input type='submit' name='upscore' value='upscore' /></span>-->
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

if(isset($_POST['upscore'])){

$gold = mysqli_real_escape_string($con,$_POST["gold"]);

$tempuser = $_SESSION["mail"];

$sel_user = "select * from users where user_email='$tempuser'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
/*
* @author Aaron Fitzgerald, x14715335
*/
$upd_score = "update users set gold='$gold' where user_email='$tempuser'";
$run = mysqli_query($con, $upd_score);
}

/*
* @reference http://www.onlinetuting.com/create-login-script-in-php/
*/
else {

echo "<script>alert('Error occurred, try again!')</script>";

}
}
?>