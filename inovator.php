<?php
    include 'header.php';

    $koneksi = new mysqli("localhost", "root", "", "agri");
?>

<h2>Wawasan</h2>

<table class="table table-bordered">


  <tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("select *from inovator"); ?>
    <?php while($pecah = $ambil->fetch_assoc()){ ?>
    <h3><?php echo $pecah['judul_inovator']; ?></h3>

    <img src="<?php echo site_url(); ?>assets/<?php echo $pecah['foto_inovator']; ?>">

    <br> posted : <?php echo $pecah['date_i']; ?></br>
    <p><?php echo $pecah['isi_i']; ?></p>

      </td>
      </tr>
      <br></br>

      <br></br>

      <br></br>
      <?php $nomor++; ?>
    <?php } ?>

  </tbody>

</table>






<?php
    include 'footer.php';
?>
