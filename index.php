<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
</head>
<body>
<h1>Hello, researcher!</h1><?php

echo "<div>APP_PATH: ".APP_PATH."</div>";

/*require_once("ApiClient.php");
$API_KEY = "your_api_key";
$BASE_PATH = "http://api.cortical.io/rest";
$RETINA_NAME = "en_associative";
$apiClient = new APIClient($API_KEY, $BASE_PATH);
$termsApi = new TermsApi($apiClient);

$terms = $termsApi->getTerm("apple", true, $RETINA_NAME);
echo serialize($termArr[0]->fingerprint->positions);*/?>
</body>
</html>