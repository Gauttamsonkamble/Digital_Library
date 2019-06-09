<?php
error_reporting(0);
include 'dyp.php';
$dypuser1=$_SESSION["dypuser"];
$userid=$_SESSION["USERID"];
//echo $userid.$flockuser1;
//$gender=$_SESSION["GENDER"];
$obj=new user;
if($obj->loggedin()==""){
 $obj->url("index.php");
}

echo "welcome".$userid;
?>


