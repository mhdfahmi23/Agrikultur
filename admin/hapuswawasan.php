<?php






$koneksi->query("DELETE FROM wawasan WHERE id_w='$_GET[id]'");
echo "<script>alert('Data Terhapus');</script>";
echo "<script>location='index.php?halaman=wawasan';</script>";

 ?>
