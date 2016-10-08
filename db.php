
<!--
 *index
 *
 * Version information e.g. Rev 1
 *
 * Date e.g. 20/03/2016
 *
 * https://youtu.be/Dd9pbawCvgI?list=PL3oMl9a6mutnyRjxCANg5KmZzVKPJ-34_
 
 *
 * -->
 

<?php

$host = "localhost";
$user= "root";
$pass= "";
$db_name = "chat";

$con = new mysqli($host,$user,$pass,$db_name);

function formatDate($date){
    return date('g:i a', strtotime($date));
}





?>


