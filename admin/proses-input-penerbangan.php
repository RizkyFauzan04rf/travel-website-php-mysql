<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$hari=$_POST['hari'];
$tanggal=$_POST['tanggal'];
$jam=$_POST['jam'];
$pesawat=$_POST['pesawat'];
$tujuan=$_POST['tujuan'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into penerbangan(hari,tanggal,jam,pesawat,tujuan) 
                        values ('$hari', '$tanggal', '$jam', '$pesawat', '$tujuan')");

if($simpan==true){

    header("location:tampil-penerbangan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>