<h2>Data Ebook</h2>



<table class="table table-bordered">
  <thead>
    <tr>
        <th>nomor</th>
        <th>judul</th>
        <th>file</th>
        <th>foto</th>
        <th>aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select * from ebook"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['judul_e']; ?></td>
        <td><?php echo $pecah['file_e']; ?></td>
        <td><?php echo $pecah['foto_e']; ?></td>


        <td>
          <a href="index.php?halaman=hapusebook&id=<?php echo $pecah['id_ebook']; ?>"  class="btn-danger btn">hapus</a>
          <a href="" class="btn btn-warning">ubah</a>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>

</table>

<a href="index.php?halaman=tambahebook" class="btn btn-primary">Tambah Data</a>
