<?php
require_once 'config.php';
require_once APP_PATH.'functions.php';
require_once PHP_CLIENT_PATH.'ApiClient.php';
require_once API_PATH.'api.php';
require_once APP_PATH.'controller.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/default.css">
  <script src="assets/js/libs/jquery.min.js"></script>
  <script src="assets/js/libs/bootstrap.min.js"></script>
  <script src="assets/js/default.js"></script>
</head>
<body>
<div class="container">
  <nav class="row navbar"><?php
    $menus=array('Retina','Term', 'Text','Expression','Compare','Image','Classify');?>
    <ul class="nav navbar-nav pull-right">
    <?php
    foreach($menus as $menu):?>
    <li><a href="/?option=<?php echo $menu;?>"><?php echo $menu;?></a></li>
  <?php
    endforeach;?>
    </ul>
    <h1 class="pull-left">
      <a href="/"><span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span><b>Retina</b>.client</a>
      <div id="powered">Powered by <a href="http://cortical.io">cortical.io</a></div>
    </h1>
    <div id="visual-circuits"></div>
  </nav>
</div>
<div class="container" id="content">
  <div class="row"><?php
    echo $content;?>
  </div>
</div>
</body>
</html>