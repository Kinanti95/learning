<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>E-Learning Teacher</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse" style="margin:0; border-radius:0">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <a class="navbar-brand" href="#">E-Learning</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- <ul class="nav navbar-nav"> -->
            <!-- <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li> -->
            <!-- <li><a href="page/home.php?page=materi">Home</a></li>
          </ul> -->
          
          <ul class="nav navbar-nav navbar-right">
          <form class="navbar-form navbar-left" role="search">
            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myModal">Login</button>
          </form>
          </ul>
        </div> <!-- /.navbar-collapse -->
      </div> <!-- /.container-fluid -->
  </nav>

    <div class="pager" style="padding-top: 30px;padding-left:500px; padding-right: 500px" id="form-signin">
      <form class="form-signin" action="otentikasi.php" method="POST">
        <h2 class="form-signin-heading">Teacher Login</h2>
        <p><label for="inputEmail" class="sr-only">Username</label></p>
        <p><input type="text" name="username" class="form-control" placeholder="Username" required autofocus></p>
        <p><label for="inputPassword" class="sr-only">password</label></p>
        <p><input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required></p>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      </form>
    </div> <!-- container -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>