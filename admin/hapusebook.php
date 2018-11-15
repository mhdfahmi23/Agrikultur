<?php


$koneksi->query("DELETE FROM ebook WHERE id_ebook='$_GET[id]'");
echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=ebook';</script>";

 ?>
