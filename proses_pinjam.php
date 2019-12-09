<?php
include("db.php");

$nama_peminjam			= $_POST['nama_peminjam'];
$alamat_peminjam		= $_POST['alamat_peminjam'];
$kode_barang			= $_POST['kode_barang'];
$tanggal_pinjam			= $_POST['tanggal_pinjam'];
$keterangan				= $_POST['keterangan'];

$sql=mysqli_query($bd,"select * from barang where kode_barang='$kode_barang' ");
while($data=mysqli_fetch_array($sql))
{
$alat_yangdipinjam		= $data['nama_alsin'];

$hasil = mysqli_query($bd,"INSERT INTO peminjaman 
(kode_pinjam,nama_peminjam,alamat_peminjam, alat_yangdipinjam,kode_barang,tanggal_pinjam,lama,
keterangan)
VALUES ('','$nama_peminjam','$alamat_peminjam','$alat_yangdipinjam'
,'$kode_barang','$tanggal_pinjam','30','$keterangan')");
}
if ($hasil) {  
  
  echo '<script type="text/javascript">
		alert("Data berhasil diinput..!");
		location="index.php?page=pinjam";</script>';
		
 }else{
  echo '<script type="text/javascript">
		alert("Data gagal diinput..!");
		location="index.php?page=pinjam";</script>';
 }


?>