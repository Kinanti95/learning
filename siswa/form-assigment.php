<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Form Assigment</title>

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
    <div class="row-fluid">
      <!-- block -->
      <div class="block">
        <!-- <div class="navbar navbar-inner block-header" >
          <div class="muted pull-left">Form Example</div>
        </div> -->
        <div class="block-content collapse in" style="padding-left: 300px;padding-right: 300px" >
          <div class="span12">
              <form class="form-horizontal" method="POST" action="">
                <fieldset>
                  <legend>Form Assigment</legend>
                    <div class="control-group">
                      <label class="control-label" for="typeahead">Judul </label>
                      <div class="controls">
                        <input type="text" class="span6" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                          <p class="help-block">Judul Penugasan</p>
                      </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Date input</label>
                          <div class="controls">
                              <input type="text" class="input-xlarge datepicker" id="date01" value="">
                              <p class="help-block">penugasan diupload oleh guru pada tanggal?</p>
                          </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="optionsCheckbox">Checkbox</label>
                          <div class="controls">
                              <label class="uniform">
                                  <input class="uniform_on" type="checkbox" id="optionsCheckbox" value="option1">
                                    Option one is this and that&mdash;be sure to include why it's great
                              </label>
                          </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="select01">Jenis Penugasan</label>
                      <div class="controls">
                        <select id="select01" class="chzn-select">
                            <option>individu</option>
                            <option>grup</option>
                        </select>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="fileInput">File input</label>
                      <div class="controls">
                        <input class="input-file uniform_on" id="fileInput" type="file">
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" for="textarea2">Keterangan Penugasan</label>
                      <div class="controls">
                        <textarea class="input-xlarge textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
                      </div>
                    </div>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-primary">Save changes</button>
                      <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
              </form>

          </div>
        </div>
      </div>
    <!-- /block -->
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>