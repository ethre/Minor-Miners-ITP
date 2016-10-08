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

// checking the use

$tempuser = $_SESSION["mail"];

$sel_user = "select * from users where user_email='$tempuser' OR username ='$tempuser'";



$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
/*
* @author Aaron Fitzgerald, x14715335
*/
$gold = "select gold, auto_upgrade1, auto_upgrade2, auto_upgrade3, manual_upgrade1, manual_upgrade2, manual_upgrade3, cps, increment from users where user_email='$tempuser OR username = '$tempuser'";
$query = mysqli_query($con, $gold);
while($rs = mysqli_fetch_assoc($query)){
    $user_gold = $rs['gold'];
    $user_au1 = $rs['auto_upgrade1'];
    $user_au2 = $rs['auto_upgrade2'];
    $user_au3 = $rs['auto_upgrade3'];
    $user_mu1 = $rs['manual_upgrade1'];
    $user_mu2 = $rs['manual_upgrade2'];
    $user_mu3 = $rs['manual_upgrade3'];
    $user_cps = $rs['cps'];
    $user_incr = $rs['increment'];
}
}

/*
* @reference http://www.onlinetuting.com/create-login-script-in-php/
*/
else {

echo "<script>alert('Error occurred, try again!')</script>";

}
//fclose($myfile);
?>