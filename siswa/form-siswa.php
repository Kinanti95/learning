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
    <link rel="icon" href="../../favicon.ico">

    <title>Data Siswa</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

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

    

<h1 class="page-header">
    Student Form
</h1>
<form method="post" action="action_siswa.php">

  <div class="form-group">
    <input type="hidden" name="id" class="form-control"
            value="<?php echo $data['id_user']?>" >
  </div>

  <div class="form-group">
    <label>NIS</label>
    <input type="text" name="nis" class="form-control"
            value="<?php echo $data['nis']?>" placeholder="Student NIS">
  </div>
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control"
            value="<?php echo $data['nama'] ?>" placeholder="Nama">
  </div>
  <div class="form-group">
    <label>Username</label>
    <input name="username" class="form-control" placeholder="Username" value="<?php echo $data['username'] ?>"> </input>
  </div>
  <div class="form-group">
    <label>password</label>
    <input type="text" name="password" class="form-control"
            value="<?php echo $data['password'] ?>" placeholder="password">
  </div>
  <div class="form-group">
    <label>level</label>
    <input type="text" name="level" class="form-control"
            value="<?php echo $data['level'] ?>" placeholder="level">
  </div>
  <input type="hidden" name="action" value="edit">';
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!--<script src="js/vendor/holder.min.js"></script>-->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<script src="js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
