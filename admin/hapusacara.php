<?php

$ambil = $koneksi->query("SELECT * FROM inovator WHERE id_inovator='$_GET[id]'");
$pecah = $ambil->fetch_assoc();






$koneksi->query("DELETE FROM acara WHERE id_a='$_GET[id]'");
echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=acara';</script>";

 ?>
