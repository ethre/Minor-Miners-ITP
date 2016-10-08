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

//$_GET['gold'] = $gold;
$gold = $_GET['gold'];
$autoup1 = $_GET['autoup1'];
$autoup2 = $_GET['autoup2'];
$autoup3 = $_GET['autoup3'];
$manup1 = $_GET['manup1'];
$manup2 = $_GET['manup2'];
$manup3 = $_GET['manup3'];
$cps = $_GET['cps'];
$incr = $_GET['incr'];
$autocost1 = $_GET['autocost1'];
$autocost2 = $_GET['autocost2'];
$autocost3 = $_GET['autocost3'];
$mancost1 = $_GET['mancost1'];
$mancost2 = $_GET['mancost2'];
$mancost3 = $_GET['mancost3'];

$tempuser = $_SESSION["mail"];

$sel_user = "select * from users where user_email='$tempuser' OR username ='$tempuser'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){
/*
* @author Aaron Fitzgerald, x14715335
*/
$upd_score = "update users set gold ='$gold', auto_upgrade1 = '$autoup1', auto_upgrade2 = '$autoup2', auto_upgrade3 = '$autoup3', manual_upgrade1 = '$manup1', manual_upgrade2 = '$manup2', manual_upgrade3 = '$manup3', cps = '$cps' , increment = '$incr', auto_up1 = '$autocost1', auto_up2 = '$autocost2', auto_up3 = '$autocost3', man_up1 = '$mancost1', man_up2 = '$mancost2', man_up3 = '$mancost3' where user_email='$tempuser' OR username ='$tempuser'";
$run = mysqli_query($con, $upd_score);

$retr = "select username from users where user_email='$tempuser' OR username = '$tempuser'";
$query = mysqli_query($con, $retr);
while($rs = mysqli_fetch_assoc($query)){
    $User_Name = $rs['username'];
}
}
$sel_upd = "select * from leader where user='$User_Name'";
$run_user2 = mysqli_query($con, $sel_upd);
while($rs2 = mysqli_fetch_assoc($run_user2)){
    $db_gold = $rs2['score'];
}
$check_leader = mysqli_num_rows($run_user2);
if($check_leader=0||$gold>$db_gold){
    $del_lead = "delete from leader where user ='$User_Name'";
    $run3 = mysqli_query($con, $del_lead);
    $upd_lead = "insert into leader (user, score) values ('$User_Name','$gold')";
    $run4 = mysqli_query($con, $upd_lead);
}

header("Refresh:0; url=game.php");
//fclose($myfile);
?>