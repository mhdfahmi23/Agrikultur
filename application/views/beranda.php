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
    
    background: url('assets/coming2.png');
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

</style>


<section class="sec1">

    
  
    <br></br>
    <br></br>
    <br></br>
    <h1>Agrikultur.id</h1>
  
    
 
  
</section>

<section class="sec2">
  
  
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="assets/1.png" alt="Logo Umpasa" style= width:100%>
                <div class="container">
                  <h2>Inovator</h2>
                  <p>  Kumpulan inovator di bidang agrikultur yang menginspirasi dan memotivasi</p>
                  
                  <p><button class="button"><a href="<?php echo site_url('inovator')?>">Selengkapnya</a></button></p>
                </div>
              </div>
            </div>

          
            <div class="column">
              <div class="card">
              <img src="assets/2.png" alt="Logo Umpasa" style= width:100%>  
                <div class="container">
                  <h2>Wawasan</h2>
                  <p>Kumpulan informasi dan wawasan mengenai agrikultur</p>
                  
                  <p><button class="button"><a href="<?php echo site_url('wawasan')?>">Selengkapnya</a></button></p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
              <img src="assets/3.png" alt="Logo Umpasa" style= width:100%>
                <div class="container">
                  <h2>Konsultasi</h2>
                  <p>Konsultasi mengenai perkembangan Agrikultur</p>
                  
                  <p><button class="button"><a href="<?php echo site_url('konsultasi')?>">Selengkapnya</a></button></p>
                </div>
              </div>
            </div>
          </div>
            
  
</section>

<section class="sec3">
  
    <br></br>
    <br></br>
    <br></br>
    
  
</section>

<section class="sec4">
  
  
    <h1>Acara Coming Soon</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  
  
</section>

<section class="sec5">
  
  <br></br>
  <br></br>
  <br></br>
  

</section>

<section class="sec6">
  
  
  <h1>Acara Coming Soon</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  


</section>




</body>
