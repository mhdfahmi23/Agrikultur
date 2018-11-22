<?php
    include 'header.php';
    $koneksi = new mysqli("localhost", "root", "", "agri");

?>

<style>
* {
    box-sizing: border-box;
}

.container input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

.container input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
}

.contaniner input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

h2{
    text-align:center;
    color:#2ecf67;
}

p{
    text-align:center;
}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
        width: 90%;
        margin-top: 0;
    }
}
</style>
</head>
<body>

<h2>KONSULTASI</h2>
<p>Silahkan isi Formulir dibawah untuk melakukan konsultasi</p>

<div class="container">
  <form method="post" action="">
    <div class="row">
      <div class="col-25">
        <label for="fname">Nama</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Masukkan nama..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Masukkan email..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Jenis Konsultasi</label>
      </div>
      <div class="col-75">
        <select id="country" name="pilihan">
          <option value="keluhan">Keluhan</option>
          <option value="tips">Tips</option>
          <option value="saran">Saran</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Konsultasi</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="isi" placeholder="Tulis sesuatu.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="save">
    </div>
  </form>
</div>



<?php
if (isset($_POST['save']))
{

  $nama = $_POST['firstname'];
  $email = $_POST['lastname'];
  $perihal = $_POST['pilihan'];
  $pertanyaan = $_POST['isi'];

  $koneksi->query("INSERT INTO konsultasi ( nama, email_k, perihal, pertanyaan)
    VALUES ('$nama', '$email', '$perihal', '$pertanyaan')");


  echo "<div class='alert alert-info'>Data Tersimpan</div>";
}
?>


<?php
    include 'footer.php';
?>
