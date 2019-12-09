<?php
 
date_default_timezone_set("Asia/Jakarta");
// mendapatkan 90 hari sebelum tanggal 12 Desember 2014
$tgl_beli_tiket = mktime(11, 26-1, 2019);
//menampilkan tgl_beli_tiket dengan format namahari, tanggal-bulan-tahun
echo date("d-m-Y", $tgl_beli_tiket);
?>