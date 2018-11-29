<?php
    include 'header.php';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

<style>


hr {
    margin: auto;
    width: 40%;
}

section{
    
    height: 100vh;
    width : 100%;
    box-sizing: border-box;
}

section.sec1{
    
    background: url('assets/gambar1.jpg');
    background-size : cover;
    background-attachment : fixed;
   
}

section.sec1 h1{

    text-align: center;
    font-family: helvetica;
    font-size: 33px;
    background: mediumseagreen;
    margin-left: 395px;
    padding : 10px;
    color:wheat;
    width: 40%;

    
}

section.sec1 p{
    text-align: center;
    font-family: fantasy;
    background: black;
    color: white;
    width: 30%;
    margin-left: 410px;

}

section.sec2 h1{
    text-align: center;
    font-family: arial black;
    font-size: 20px;
    background: mediumseagreen;
    margin-left: 50px;
    padding : 10px;
    color:wheat;
    width: 30%;
}

section.sec2 p{

}

section.sec3{
    
    background: url('assets/gambar2.jpg');
    background-size : cover;
    background-attachment : fixed;
   
}
section.sec3 h1{

    text-align: center;
    font-family: helvetica;
    font-size: 33px;
    background: mediumseagreen;
    margin-left: 395px;
    padding : 10px;
    color:wheat;
    width: 40%;

    
}

section.sec3 p{
    text-align: center;
    font-family: fantasy;
    background: black;
    color: white;
    width: 30%;
    margin-left: 410px;

}

section.sec4 h1{
    
}

section.sec4 p{

}

section.sec5{
    
    background: url('assets/gambar3.jpg');
    background-size : cover;
    background-attachment : fixed;
   
}
section.sec5 h1{

    text-align: center;
    font-family: helvetica;
    font-size: 33px;
    background: mediumseagreen;
    margin-left: 395px;
    padding : 10px;
    color:wheat;
    width: 40%;

    
}

section.sec5 p{
    text-align: center;
    font-family: fantasy;
    background: black;
    color: white;
    width: 30%;
    margin-left: 410px;

}

section.sec6 h1{
    
}

section.sec6 p{

}

</style>


<section class="sec1">

    
  
    <br></br>
    <br></br>
    <br></br>
    <h1>ACARA AGRIKULTUR</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
 
  
</section>

<section class="sec2">
  
  <br></br>
    <center><h1>ACARA HARIAN INI </h1></center>
    <p> INDONESIA is one of the countries that has the potential to become one of the main producers of food in the world. With 39,5 million hectares of agricultural land, consisting of 8,1 million hectares of paddy fields, 11,9 million hectares of plantations, and 19,5 million hectares of other agricultural land area, the country has a large capital to develop the agricultural industry, both to meet domestic demands as well as to export their commodities and products to other countries.
    HIMPUNAN KERUKUNAN TANI INDONESIA (HKTI) or Indonesia Farmer Association aware about the importance of agriculture and allied fields. In past decades, agriculture was only concentrated in production of food crops. But in recent decades, agriculture has been associated with a large number of opportunities related to the main source of food and raw materials for livelihood and also serves as major economic backbone to the country. Many Indonesian agricultural products of high quality are yet to appear in the global market. This is a big concern of HKTI to provide an exceptional opportunity to interact with world-class Agriculture decision makers from business, government, investors, the development community and farmers to establish innovation and collaborative approaches to achieving food and nutrition national security. Taking the momentum of ASIAN GAMES 2018 wherein Indonesia will be in global spotlight, HKTI takes initiative to conduct the ASIAN AGRICULTURE & FOOD FORUM (ASAFF) 2018 in Jakarta on June 28th – July 1st 2018. ASAFF 2018 is the access for produced the actionable recommendations for enhancing farmer access to finance, technology, knowledge and markets across the commodities focusing on agricultural sustainability, product innovation, food safety and collaboration along the food chain holistically to promote Indonesian products in the Asian Region and the global. With the theme “Transforming Challenges into Opportunities: Agricultural Innovation and Food Security”, this event aims to become a synergy and collaboration event among Asian Corporation in Improving the positioning of Asian Agricultural Industry in the world. 
</section>

<section class="sec3">
  
    <br></br>
    <br></br>
    <br></br>
    <h1>BERITA HIDROPONIK</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  
</section>

<section class="sec4">
  
  
    <h1>Acara Coming Soon</h1>
    <p></p>
  
  
</section>

<section class="sec5">
  
  <br></br>
  <br></br>
  <br></br>
  <h1>BERITA TANAMAN LAMPUNG</h1>
  <hr>
  <p id="demo" style="font-size:30px"></p>

</section>

<section class="sec6">
  
  
  <h1>Acara Coming Soon</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  


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