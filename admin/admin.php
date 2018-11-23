<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
padding-top: 15px;
padding-left: 0px;
padding-right: 0px;
margin: 0;
font-family: "Helvetica";
font-size: 14px;
line-height: 28px;
color: #000000;
background-color: #ffffff;
}
  
.box {
width: 30%;
min-width: 300px;
max-width: 300px;
margin-left:auto; 
margin-right:auto; 
padding-top: 15px;
margin-bottom: 5px;
}
 
.box > .heading {
height: 48px;
padding-left: 5px;
padding-right: 5px;
border: 1px solid #DBDBDB;
-webkit-border-radius: 7px 7px 0px 0px;
-moz-border-radius: 7px 7px 0px 0px;
-khtml-border-radius: 7px 7px 0px 0px;
border-radius: 7px 7px 0px 0px;
}

.box > .heading h1 {
 margin: auto;
 padding: 11px;
 color: #003A88;
 font-size: 20px;
 float: center;
}

.box > .content {
 padding: 15px;
 border-left: 1px solid #CCCCCC;
 border-right: 1px solid #CCCCCC;
 border-bottom: 1px solid #CCCCCC;
 overflow: auto;
}

.span2 { 
text-align: center;
font-size: 18px;
} 
  
</style>
</head>
<body>   

<?php
$remember = array(
 'name' => 'remember',
 'id' => 'remember',
 'value' => 1,
 'checked' => set_value('remember'),
);
?>

<div id="content"> 
  <div align='center' class="box">   
 <div class="heading">
  <h1>Login Admin</h1>
 </div>
  <div class="content">
   <form class="form-horizontal well" method="POST" action="<?php echo base_url(); ?>#">
   <div>
    <label>Username :</label>        
    <input placeholder="Ketik username.." name="username" type="text" class="input" id="input01"  value="<?php echo set_value('username'); ?>">
   </div>
   <div>       
    <label>Password :</label>        
    <input placeholder="Ketik password.." name="password" type="text" class="input" id="input01" value="<?php echo set_value('password'); ?>">         
   </div>
   <div>
    <?php echo form_checkbox($remember); ?> Remember Me
   </div>
   <div class="control-group">
    <div class="controls">
    <button type="submit" id="submit" class="btn btn-primary button" >Masuk</button>
    <a href="<?php echo base_url(); ?>#"> 
     <button href="#" type="button" class="btn btn-secondary button" >Lupa Password</button>
    </a>
   </div>
  </div>
 </form>
   </div>
</div>
</div>

<div class="span2">
 <footer>   
  <p>&copy; jepretcode 2014.</p>
 </footer>
</div>
</body>
</html>