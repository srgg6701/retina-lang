<?php
require_once 'config.php';
//require_once 'api/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap-theme.min.css"/>
  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/default.js"></script>
</head>
<body>
<div class="container">
  <h1 class="row">Hello, hunter for sense!</h1>
</div>
<hr/>
<div class="container">
  <div class="row">
    <div id="content"></div>
  </div>
  <div class="row">
    <form id="form-data" class="form-inline">
      <input class="form-control" placeholder="input a term here" type="text" name="data-entry" required="required" />
      <button class="btn" id="btn-get-data" type="submit">Get data</button>
    </form>
  </div>
</div>
</body>
</html>