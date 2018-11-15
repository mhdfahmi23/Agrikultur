<h2>Data Inovator</h2>


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
    <?php $ambil=$koneksi->query("select *from Inovator"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['judul_inovator']; ?></td>
        <td><?php echo $pecah['foto_inovator']; ?></td>
        <td><?php echo $pecah['date_i']; ?></td>
        <td><?php echo $pecah['isi_i']; ?></td>
        <td>
          <a href="index.php?halaman=hapusinovator&id=<?php echo $pecah['id_inovator']; ?>" class="btn-danger btn">hapus</a>
          <a href="" class="btn btn-warning">ubah</a>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>

</table>

<a href="index.php?halaman=tambahinovator" class="btn btn-primary">Tambah Data</a>
