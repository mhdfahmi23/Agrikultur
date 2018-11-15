<?php

$ambil = $koneksi->query("SELECT * FROM inovator WHERE id_inovator='$_GET[id]'");
$pecah = $ambil->fetch_assoc();






$koneksi->query("DELETE FROM inovator WHERE id_inovator='$_GET[id]'");
echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=inovator';</script>";

 ?>
