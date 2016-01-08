<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
     <!-- header -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Teacher Page</a>
            </div>
            <div class="form-header" style="padding-left: 45em">
              <a href="" class="navbar-brand">E-Learning</a>
            </div> 
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right"></ul>
              <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" action="../login.php">
                  <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Logout</button>
                </form>
              </ul>
            </div>
          </div>
        </nav>
    <!--end header  -->
  </head>
  <body>
        <div class="container-fluid">
             <div class="col" style="padding-top: 100px; padding-right: 100px padding-left: 50px">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="../../icon/siswa.png" class="rounded" />
                    <div class="caption">
                      <h3>Data Siswa</h3>
                      <p><a href="siswa/data-siswa.php" class="btn btn-primary" role="button">Detail</a></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col" style="padding-top: 3px">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="" alt="..." class="rounded">
                    <div class="caption">
                      <h3>Materi</h3>
                      <p><a href="upload-materi.php" class="btn btn-primary" role="button">Detail</a></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row" style="padding-top: 3px">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="" alt="..." class="rounded">
                    <div class="caption">
                      <h3>Upload Assigment</h3>
                      <p><a href="form-assigment.php" class="btn btn-primary" role="button">Submit</a></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col" style="padding-top: 3px">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="../../icon/materi.png" alt="..." class="rounded">
                    <div class="caption">
                      <h3>Daftar Submit</h3>
                      <p><a href="daftar-submit.php" class="btn btn-primary" role="button">Submit</a></p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col" style="padding-top: 3px">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img src="../../icon/materi.png" alt="..." class="rounded">
                    <div class="caption">
                      <h3>Penilaian</h3>
                      <p><a href="#" class="btn btn-primary" role="button">Submit</a></p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="table-responsive">

              </div>
            </div>
          </div>
        </div>

        <?php 
         error_reporting(0);
          switch($_GET['label']){
            case 'materi':
              include "list-materi.php";
              break;
            case 'data_siswa':
              include "data-siswa.php";
              break;
            case 'penugasan':
              include "form-assigment.php";
              break;
            // case 'upload_individu':
            //   include "upload_individu.php";
            //   break;

          }
         ?> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>