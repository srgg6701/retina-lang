<?php
require_once 'api/api.php';
require_once 'app/controller.php';
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/default.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <nav class="row navbar"><?php
    $menus=array('Retinas','Term','Text','Expression','Compare','Image','Classify');?>
    <ul class="nav navbar-nav pull-right">
    <?php
    foreach($menus as $menu):?>
    <li><a href="/?method=<?php echo $menu;?>"><?php echo $menu;?></a></li>
  <?php
    endforeach;?>
    </ul>
    <h1 class="pull-left"><a href="/">Retina.api</a></h1>
  </nav>
</div>
<?php

echo "<pre>";
var_dump(array('terms'=>$terms));
var_dump(array('similarTerms'=>$similarTerms));
echo "</pre>";
//echo serialize($termArr[0]->fingerprint->positions);?>
</body>
</html>