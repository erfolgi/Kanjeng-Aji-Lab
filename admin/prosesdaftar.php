<?php
include("include/connect.php");

if($_POST['nama'] != ""){
  $sql = $mysqli->query("INSERT INTO pasien (NO_PAS,NAMA_PAS,PASS_PAS,ALAMAT_PAS,TELP_PAS)
                                VALUES ('".$_POST['nopas']."','".$_POST['nama']."','".$_POST['pwd']."','".$_POST['alamat']."','".$_POST['telp']."')");
  $sql2 = $mysqli->query("UPDATE max_no_pas SET KODE=KODE+1");
  echo "sukses".$_POST['nama'].$_POST['nopas'].$_POST['pwd'].$_POST['alamat'].$_POST['telp'];
  header("location:tablepasien.php");
}
else{
  echo "NAMA TIDAK BOLEH KOSONG";
}
?>
