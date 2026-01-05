
<?php

include "koneksi.php";
$hotel = $koneksi->real_escape_string($_POST['hotel']); 
$nik = $koneksi->real_escape_string($_POST['nik']); 
$nama = $koneksi->real_escape_string($_POST['nama']); 
$jumlah = $koneksi->real_escape_string($_POST['jumlah']); 
$tanggal = $koneksi->real_escape_string($_POST['tanggal']); 
$alamat = $koneksi->real_escape_string($_POST['alamat']); 


$simpan=$koneksi->query("insert into Penginapan1(nama_penginapan,nik,nama,jumlah,tanggal,alamat) 
                        values ('$hotel', '$nik', '$nama','$jumlah', '$tanggal', '$alamat')");

if($simpan==true){

    header("location:hotel.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>