<?php
include 'db.php';
$kode = $_GET['id'];
$kembali= date('Y-m-d');

$sql=mysqli_query($bd,"select * from peminjaman where kode_pinjam='$kode' ");
while($data=mysqli_fetch_array($sql))
{

$nama_peminjam = $data['nama_peminjam'];
$alamat_peminjam = $data['alamat_peminjam'];
$alat_yangdipinjam = $data['alat_yangdipinjam'];
$kode_barang = $data['kode_barang'];
$tanggal_pinjam = $data['tanggal_pinjam'];
$lama = $data['lama'];
$keterangan = $data['keterangan'];
	
$sql= mysqli_query($bd,"INSERT INTO pengembalian (kode_kembali, 
nama_peminjam, alamat_peminjam, 
alat_yangdipinjam, kode_barang,tanggal_pinjam,jml_hari,keterangan,tanggal_pengembalian)
VALUES ('','$nama_peminjam','$alamat_peminjam',
'$alat_yangdipinjam',
'$kode_barang',
'$tanggal_pinjam',
'$lama',
'$keterangan',
'$kembali')");
}

if($sql)
//setelah record berpindah ke tbl anggota, kemudian hapus di tbl 
$query=mysqli_query($bd,"DELETE FROM peminjaman WHERE kode_pinjam='$kode'");

header("location:admin.php?page=pengembalian");

?>