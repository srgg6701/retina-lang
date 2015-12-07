<?php
require_once 'config.php';
//require_once 'api/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/js/default.js"></script>
</head>
<body>
<h1>Hello, researcher!</h1>
<div id="content"></div><?php
//echo "<div>API_PATH: ".API_PATH."</div>";
//echo $content;
/**/?>
<form id="form-data">
  <input type="text" name="data-entry"/>
  <button id="btn-get-data">Get data</button>
</form>
</body>
</html>