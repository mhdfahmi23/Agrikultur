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

</style>


<section class="sec1">

    
  
    <br></br>
    <br></br>
    <br></br>
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
 
  
</section>

<section class="sec2">
  
  
    <h1>Acara Coming Soon</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    
  
  
</section>

<section class="sec3">
  
    <br></br>
    <br></br>
    <br></br>
    <h1>COMING SOON</h1>
    <hr>
    <p id="demo" style="font-size:30px"></p>
  
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
  <h1>COMING SOON</h1>
  <hr>
  <p id="demo" style="font-size:30px"></p>

</section>

<section class="sec6">
  
  
  <h1>Acara Coming Soon</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
  


</section>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Nov 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(countdownfunction);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>

</body>



<?php
    include 'footer.php';
?>