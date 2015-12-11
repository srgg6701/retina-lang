<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
</head>
<body><?php

require_once("php-client-sdk/ApiClient.php");
$API_KEY = "414898c0-9c58-11e5-9e69-03c0722e0d16";
$BASE_PATH = "http://api.cortical.io/rest";
$RETINA_NAME = "en_associative";
$apiClient = new APIClient($API_KEY, $BASE_PATH);
$termsApi = new TermsApi($apiClient);
$terms = $termsApi->getTerm("apple", true, $RETINA_NAME);
echo "<pre>";
var_dump(array('positions'=>$terms[0]->fingerprint->positions, 'terms'=>$terms));
echo "</pre>";
//echo serialize($termArr[0]->fingerprint->positions);?>
</body>
</html>