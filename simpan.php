<?php

include('koneksi.php');

$nama_lengkap = $_POST['nama_lengkap'];
$jk = $_POST['jk'];
$pekerjaan = $_POST['pekerjaan'];
$ttl = $_POST['ttl'];
$ayah = $_POST['ayah'];
$ibu = $_POST['ibu'];
$address = $_POST['alamat'];
$gambar = $_POST['gambar'];


$query = "INSERT INTO pendaftaran (nama_lengkap, jk, pekerjaan, ttl, ayah, ibu, alamat, gambar)
VALUES ('$nama_lengkap', '$jk','$pekerjaan', '$ttl','$ayah','$ibu','$address','$gambar')";        

if($connection->query($query)) {
    
    echo "success";

} else {
    
    echo "error";

}