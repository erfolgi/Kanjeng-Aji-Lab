<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "labkanjengaji";

$mysqli = new mysqli($host, $user, $pass, $dbnm);

if($mysqli->connect_errno){
  echo "Database Gagal Terkoneksi ".$mysqli->connect_error;
}
define ('_BASE_','http://'.$_SERVER['HTTP_HOST'].'/pemweb/admin');
define ('_POPUPTIME_','50000');
?>
