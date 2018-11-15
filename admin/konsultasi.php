<h2>Data Konsultasi</h2>

<table class="table table-bordered">
  <thead>
    <tr>
        <th>nomor</th>
        <th>email</th>
        <th>nomor hp</th>
        <th>perihal</th>
        <th>pertanyaan</th>
        <th>aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select *from konsultasi"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $nomor; ?></td>
        <td><?php echo $pecah['email_k']; ?></td>
        <td><?php echo $pecah['hp_k']; ?></td>
        <td><?php echo $pecah['perihal']; ?></td>
        <td><?php echo $pecah['pertanyaan']; ?></td>
        <td>
          <a href="index.php?halaman=hapuskonsultasi&id=<?php echo $pecah['id_konsul']; ?>" class="btn-danger btn">hapus</a>
          <a href="" class="btn btn-warning">ubah</a>
        </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>

</table>
