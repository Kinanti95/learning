<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Daftar Submit</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Teacher Page</a>
            </div>
            <div class="navbar-header">
              <a class="navbar-brand" href="#" style="padding-left:30em">E-Learning</a>
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

  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-1 main" style="padding-top:100px"  >
          <h1 class="page-header">Daftar Submit</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>id_Assigment</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Assigmnet</th>
                  <th>Kategori</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php

                  while($data=$hasil->fetch())
                  {
                    echo '<tr>';
                    echo '<td>'. $data['id_Assigment'].'</td>';
                    echo '<td>'.$data['nis'].'</td>';
                    echo '<td>'.$data['nama'].'</td>';
                    echo '<td>'.$data['assigment'].'</td>';
                    echo '<td>'.$data['kategori'].'</td>';
                    echo '<td>'.$data['tanggal'].'</td>';
                    echo '<td>'.$data['aksi'].'</td>';
                    ?>
                    <td><a href=" ">edit</a></td>
                    
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="js/vendor/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
