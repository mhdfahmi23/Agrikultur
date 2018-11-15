<h2>Data Acara</h2>



<table class="table table-bordered">
  <thead>
    <tr>
        <th>nomor</th>
        <th>judul</th>
        <th>isi</th>
        <th>waktu</th>
        <th>foto</th>
        <th>aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select * from acara"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['judul_a']; ?></td>
        <td><?php echo $pecah['deskripsi_a']; ?></td>
        <td><?php echo $pecah['date_a']; ?></td>
        <td><?php echo $pecah['foto_a']; ?></td>


        <td>
          <a href="index.php?halaman=hapusacara&id=<?php echo $pecah['id_a']; ?>" class="btn-danger btn">hapus</a>
          <a href="" class="btn btn-warning">ubah</a>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>

</table>

<a href="index.php?halaman=tambahacara" class="btn btn-primary">Tambah Data</a>
