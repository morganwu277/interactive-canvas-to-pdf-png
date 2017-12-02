<?php
session_start();
if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
  echo '<meta http-equiv="refresh" content="0; url=login.php" />';
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./imports/bootstrap/css/bootstrap.min.css">
  </head>
  <body>

    <nav class="navbar navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Canvas to PDF / PNG</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="logout.php">Logi välja</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container main-list">
      <div id="img-canvas-list">
        
      </div>
    </div>
    <div id="my_mm" style="height: 1mm; display: none"></div>
    <script type="text/javascript" src="./imports/tether/tether.min.js"></script>
    <script type="text/javascript" src="./imports/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="./imports/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./imports/jqueryUI/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/image_canvas_view.js"></script>
    <script type="text/javascript" src="./imports/jspdf/jspdf.debug.js"></script>
  </body>
</html>