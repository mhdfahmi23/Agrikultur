<?php
    include 'header.php';
?>

<?php 
	$b=$data->row_array();
?>

<body>
	<div class="container">
		<div class="col-md-8 col-md-offset-2">
			<h2><?php echo $b['berita_judul'];?></h2><hr/>
			<img src="<?php echo base_url().'assets/images/'.$b['berita_image'];?>">
			<?php echo $b['berita_isi'];?>
		</div>
		
	</div>

	<script src="<?php echo base_url().'assets/jquery/jquery-2.2.3.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>


<?php
    include 'footer.php';
?>
