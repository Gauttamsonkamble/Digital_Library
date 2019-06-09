<?php
include 'dyp.php';
$obj= new user;
if(isset($_GET['msg'])){
	$obj->logout();
	$obj->url("index.php");
}

?>