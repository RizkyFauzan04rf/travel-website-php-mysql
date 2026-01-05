<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id'];
$hari=$_POST['hari'];
$tanggal=$_POST['tanggal'];
$jam=$_POST['jam'];
$pesawat=$_POST['pesawat'];
$tujuan=$_POST['tujuan'];


$ubah=$koneksi->query("update penerbangan set hari='$hari', tanggal='$tanggal', jam='$jam', pesawat='$pesawat' , tujuan='$tujuan' where id='$id'");

if($ubah==true){

    header("location:tampil-penerbangan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>