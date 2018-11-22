<?php
    include 'header.php';

    $koneksi = new mysqli("localhost", "root", "", "agri");
?>

<h2>Wawasan</h2>

<table class="table table-bordered">


  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select *from wawasan"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <h3><?php echo $pecah['judul_w']; ?></h3>
    <?php echo $pecah['foto_w']; ?>
    <?php echo $pecah['date_w']; ?>
    <?php echo $pecah['isi_w']; ?>

      </td>
      </tr>
      <?php $nomor++; ?>
    <?php } ?>
  </tbody>

</table>






<?php
    include 'footer.php';
?>
