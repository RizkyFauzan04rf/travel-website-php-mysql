
<?php

include "koneksi.php";
$nama = $koneksi->real_escape_string($_POST['nama']); 
$email = $koneksi->real_escape_string($_POST['email']); 
$tour = $koneksi->real_escape_string($_POST['tour']); 
$tujuan = $koneksi->real_escape_string($_POST['tujuan']); 
$tanggal = $koneksi->real_escape_string($_POST['tanggal']); 
$jumlah = $koneksi->real_escape_string($_POST['jumlah']); 


$simpan=$koneksi->query("insert into booking(nama,email,tour,tujuan,tanggal,jumlah) 
                        values ('$nama', '$email', '$tour','$tujuan', '$tanggal', '$jumlah')");

if($simpan==true){

    header("location:booking.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>