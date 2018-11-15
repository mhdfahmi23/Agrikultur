<h2>Data Wawasan</h2>

<table class="table table-bordered">
  <thead>
    <tr>
        <th>nomor</th>
        <th>judul</th>
        <th>foto</th>
        <th>waktu</th>
        <th>isi</th>
        <th>aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select *from wawasan"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['judul_w']; ?></td>
        <td><?php echo $pecah['foto_w']; ?></td>
        <td><?php echo $pecah['date_w']; ?></td>
        <td><?php echo $pecah['isi_w']; ?></td>
        <td>
            <a href="index.php?halaman=hapuswawasan&id=<?php echo $pecah['id_w']; ?>" class="btn-danger btn">hapus</a>
          <a href="" class="btn btn-warning">ubah</a>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>

</table>

<a href="index.php?halaman=tambahwawasan" class="btn btn-primary">Tambah Data</a>
