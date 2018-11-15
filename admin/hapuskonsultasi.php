<?php

$koneksi->query("DELETE FROM konsultasi WHERE id_konsul='$_GET[id]'");
echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=inovator';</script>";

 ?>
