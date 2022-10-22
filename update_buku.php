<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$judulbuku = $_POST['judulbuku'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun'];
$jenisbuku = $_POST['jenisbuku'];
 
// update data ke database
mysqli_query($conn,"UPDATE databuku set judulbuku='$judulbuku', pengarang='$pengarang', penerbit = '$penerbit', tahun = '$tahun', jenisbuku = '$jenisbuku' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>