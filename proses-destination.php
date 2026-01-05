
<?php

include "koneksi.php";
$nik = $koneksi->real_escape_string($_POST['nik']); 
$nama = $koneksi->real_escape_string($_POST['nama']); 
$tujuan = $koneksi->real_escape_string($_POST['tujuan']); 
$tanggal = $koneksi->real_escape_string($_POST['tanggal']); 


$simpan=$koneksi->query("insert into destination1(nik,nama,tujuan,tanggal) 
                        values ('$nik', '$nama','$tujuan', '$tanggal')");

if($simpan==true){

    header("location:destination.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>