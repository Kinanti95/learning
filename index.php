<?php
include_once 'model/config.php';
    $config = new Config();
    $db = $config->getConnection(); 
if(isset($_POST['loginadmin'])){
  include_once '../includes/login.php';
    $login = new Login($db);
    $login->userid = $_POST['fusername2'];
    $login->passid = md5($_POST['fpassword2']);
    
    $data=$login->admin($login->userid);
    foreach ($data as $d) {
      
  $data= $d['id_admin'] ;
    
         if($login->login()){
              echo "<script>location.href='guru/'</script>";  
          }else{
              echo "<script>alert('Maaf kombinasi Username dan Password yang anda masukkan salah, silahkan coba lagi!')</script>";       
          }

           }
}


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!--=======Font Open Sans======-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!--StyleSheet-->
  <link rel="stylesheet" href="css/style.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="forms">
  
    
    <form action="#" id="login1" method="post">
        <h1>Login Administrator</h1>
        <div class="input-field">
          <label for="username">Username</label>
          <input type="text" name="fusername2" placeholder="Masukkan Username"  required />
          <label for="password">Password</label> 
          <input type="password" name="fpassword2" placeholder="Masukkan Password" required/>
          <input type="submit" name="loginadmin" value="Login" class="button"/>
        </div>
    </form>
    
</div>

<div id="signUp" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block">
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password">
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block">Sign In</button>
              <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>  
      </div>
  </div>
  </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.tab a').on('click', function (e) {
    e.preventDefault();
    
    $(this).parent().addClass('active');
    $(this).parent().siblings().removeClass('active');
    
    var href = $(this).attr('href');
    $('.forms > form').hide();
    $(href).fadeIn(500);
  });
});
</script>
</body>
</html>