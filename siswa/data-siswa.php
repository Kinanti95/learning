<?php
include "../siswa.php";

$hasil=$siswa->getsiswaAllStatus();

$data = $siswa->getsiswa($_GET['id_user']);
// print_r($data);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../favicon.ico">

    <title>Data Siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">


        <!-- header -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="../?label=dashboard">Teacher Page</a>
            </div>
            <div class="navbar-header" style="padding-left: 35em">
              <a class="navbar-brand" href="#">E-Learning</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right"></ul>
              <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" action="../login.php" method="post">
                  <button type="submit" class="btn btn-default" name="logout">Logout</button>
                </form>
              </ul>
            </div>
          </div>
        </nav>
        <!-- end header -->

  </head>

  <body>
   <form method="post" action="siswa.php">
     <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-1 main" style="padding-top:100px">
          <h1 class="page-header">Data Siswa</h1>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>nis</th>
                  <th>nama</th>
                  <th>username</th>
                  <th>password</th>
                  <th>level</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                
              <?php

              while($data=$hasil->fetch())
              {
                echo '<tr>';
                echo '<td>'. $data['nis'].'</td>';
                echo '<td>'.$data['nama'].'</td>';
                echo '<td>'.$data['username'].'</td>';
                echo '<td>'.md5($data['password']).'</td>';
                echo '<td>'.$data['level'].'</td>';
                ?>
                <td><a href="form-siswa.php?id_user= <?=$data['id_user'];?> ">edit</a></td>
                
                <?php 
                 }
                ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="js/vendor/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
