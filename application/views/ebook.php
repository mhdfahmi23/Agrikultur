<?php
    include 'header.php';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

<style>


section{
    
    height: 90vh;
    width : 100%;
    box-sizing: border-box;
}

section.sec1{
    
    background: url('assets/coming1.png');
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec1 h1{

    text-align: center;
    font-family: helvetica;
    font-size: 33px;
    background: mediumseagreen;
    margin-left: 361px;
    padding : 10px;
    color:wheat;
    width: 40%;
    margin-bottom:3rem;

    
}

section.sec1 p{
    text-align: center;
    font-family: fantasy;
    background: black;
    color: white;
    width: 30%;
    margin-left: 410px;

}

section.sec2 {
    
    background:green transparant;

}

section.sec2 h1{
    
}

section.sec2 p{

}

section.sec3{
    
   
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec4 h1{
    
}

section.sec4 p{

}

section.sec5{
    
    background: url('assets/coming3.png');
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec6 h1{
    
}

section.sec6 p{

}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #2ecf67;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

section.sec2 .container  p{
    text-align:center;
    color: black;
}

section.sec2 h2{
    text-align:center;
    color: black;
}

section.sec2 button a{
    text-decoration:none;
    color:#ffff;
    cursor: pointer;
    transition: 0.7s all;

}

section.sec3 .container  p{
    text-align:center;
    color: black;
}

section.sec3 h2{
    text-align:center;
    color: black;
}

section.sec3 button a{
    text-decoration:none;
    color:#ffff;
    cursor: pointer;
    transition: 0.7s all;

}


</style>


<section class="sec1">

    
  
    <br></br>
    <br></br>
    <br></br>
    <h1>Ebook Agrikultur</h1>
  
    
 
  
</section>

<section class="sec2">
  
  
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="assets/ebook1.png" alt="Logo Umpasa" style= width:100%>
                <div class="container">
                  <h2>Pertanian Organik</h2>
                  <p>  Kumpulan inovator di bidang agrikultur yang menginspirasi dan memotivasi</p>
                  
                  <p><button class="button">Download</button></p>
                </div>
              </div>
            </div>

          
            <div class="column">
              <div class="card">
              <img src="assets/ebook2.png" alt="Logo Umpasa" style= width:100%>  
                <div class="container">
                  <h2>Pupuk organik</h2>
                  <p>Kumpulan informasi dan wawasan mengenai agrikultur</p>
                  
                  <p><button class="button">Download</button></p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
              <img src="assets/ebook3.png" alt="Logo Umpasa" style= width:100%>
                <div class="container">
                  <h2>Bisnis Pertanian</h2>
                  <p>Konsultasi mengenai perkembangan Agrikultur</p>
                  
                  <p><button class="button">Download</button></p>
                </div>
              </div>
            </div>
          </div>
            
  
</section>

<section class="sec3">
  
  
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="assets/ebook4.png" alt="Logo Umpasa" style= width:100%>
        <div class="container">
          <h2>Halaman Organik</h2>
          <p>  Kumpulan inovator di bidang agrikultur yang menginspirasi dan memotivasi</p>
          
          <p><button class="button">Download</button></p>
        </div>
      </div>
    </div>

  
    <div class="column">
      <div class="card">
      <img src="assets/ebook5.png" alt="Logo Umpasa" style= width:100%>  
        <div class="container">
          <h2>Rumah organik</h2>
          <p>Kumpulan informasi dan wawasan mengenai agrikultur</p>
          
          <p><button class="button">Download</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
      <img src="assets/ebook6.png" alt="Logo Umpasa" style= width:100%>
        <div class="container">
          <h2>Budidaya Stroberi</h2>
          <p>Konsultasi mengenai perkembangan Agrikultur</p>
          
          <p><button class="button">Download</button></p>
        </div>
      </div>
    </div>
  </div>
    

</section>


</section>
            <script type="text/javascript">

                function showTime(){
                    var date = new Date();
                    var h = date.getHours();
                    var m = date.getMinutes();
                    var s = date.getSeconds();
                    var session = "A.M";

                    if(h==0){
                        h=12;
                    }
                    if(h>12){
                        h= h-12;
                        session= "P.M";
                    }

                    h = (h<10) ? "0" + h : h;
                    m = (m<10) ? "0" + m : m;
                    s = (s<10) ? "0" + s : s;

                    var time = h + ":" + m + ":" + s + " " + session;
                    document.getElementById("clock").innerText = time;
                    document.getElementById("clock").textContent = time;

                    setTimeout(showTime, 1000);


                }
                    showTime();
                </script>
            <br><br>

</body>

<?php
    include 'footer.php';
?>