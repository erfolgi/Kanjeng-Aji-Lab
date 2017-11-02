<?php
session_start();
include("include/connect.php");

$sql		="SELECT * FROM m_login WHERE USERNAME = '". $_REQUEST['usn']."' AND PASS_LOGIN = '".$_REQUEST['pwd']."'";
$query 		= $mysqli->query($sql);
if($query->num_rows > 0){
	if($query->KODE_GROUP='PETUGAS'){
		header("location:../admin/index.php");
	}else{
		header("location:login.php");
	}
}
else{
	header("location:login.php");
}

?>
