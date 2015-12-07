<?php	// native (almost) cortical.io php API
require_once(__DIR__."/../config.php");
require_once(API_PATH."ApiClient.php");
$API_KEY = "414898c0-9c58-11e5-9e69-03c0722e0d16";
$BASE_PATH = "http://api.cortical.io/rest";
$RETINA_NAME = "en_associative";
$apiClient = new APIClient($API_KEY, $BASE_PATH);
$termsApi = new TermsApi($apiClient);
$terms = $termsApi->getTerm($_POST['term'], true, $RETINA_NAME);
$data_source=$terms[0]->fingerprint->positions;