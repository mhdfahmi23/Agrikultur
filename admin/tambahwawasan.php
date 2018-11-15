<h2>Tambah Berita Wawasan</h2>


<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label>Judul</label>
    <input type="text" class="form-control" name="judul">
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="foto">
  </div>
  <div class="form-group">
    <label>Waktu</label>
    <input type="date" class="form-control" name="waktu">
  </div>
  <div class="form-group">
    <label>Isi</label>
    <textarea class="form-control" name="isi" rows="10" ></textarea>
  </div>


  <button class="btn btn-primary" name="save" >Simpan</button>

</form>

<?php
if (isset($_POST['save']))
{
  $nama = $_FILES['foto']['name'];
  $lokasi = $_FILES['foto']['temp_name'];
  move_uploaded_file($lokasi, "/foto/".$nama);
  $koneksi->query("INSERT INTO wawasan
    (judul_w,foto_w, date_w, isi_w)
    VALUES ('$_POST[judul]','$nama', '$_POST[waktu]', '$_POST[isi]')");


  echo "<div class='alert alert-info'>Data Tersimpan</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=wawasan'>";

}
 ?>
