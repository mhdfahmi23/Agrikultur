<h2>Tambah Data Acara</h2>


<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="judul">
  </div>
  <div class="form-group">
    <label>File .pdf</label>
    <input type="file" class="form-control" name="file1">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
  </div>


  <button class="btn btn-primary" name="save" >Simpan</button>

</form>

<?php
if (isset($_POST['save']))
{
  $nama1 = $_FILES['file1']['name'];
  $nama = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['temp_name'];
  move_uploaded_file($lokasi, "/foto/".$nama);
  $koneksi->query("INSERT INTO ebook
    (judul_e, file_e, foto_e)
    VALUES ('$_POST[judul]', '$nama1', '$nama')");


  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=ebook'>";

}
 ?>
