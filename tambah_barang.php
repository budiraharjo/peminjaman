<?php
include("db.php");

$kode_barang		= $_POST['kode_barang'];
$nama_alsin			= $_POST['nama_alsin'];
$jumlah_tersedia	= $_POST['jumlah_tersedia'];
$jumlah_dipinjam	= $_POST['jumlah_dipinjam'];


$hasil = mysqli_query($bd,"INSERT INTO barang (kode_barang,nama_alsin,jumlah_tersedia, jumlah_dipinjam)
VALUES ('$kode_barang','$nama_alsin','$jumlah_tersedia','$jumlah_dipinjam')");

if ($hasil) {  
  
  echo '<script type="text/javascript">
		alert("Data berhasil diinput..!");
		location="admin.php?page=input";</script>';
		
 }else{
  echo '<script type="text/javascript">
		alert("Data gagal diinput..!");
		location="admin.php?page=input";</script>';
 }


?>