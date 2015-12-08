<?php
require_once(__DIR__."/../config.php");
require_once(API_PATH."ApiClient.php");
require_once 'api.php';
// from api
foreach(array('retina_name', 'context_id', 'start_index', 'max_results', 'pos_type', 'get_fingerprint') as $var){
	${$var}=(isset($_REQUEST[$var])&&$_REQUEST[$var])? $_REQUEST[$var]:null;
}
if(!$retina_name) $retina_name = $RETINA_NAME;
$api_method = $_REQUEST['api_method'];
if($api_method=='getSimilarTerms'){
	// $term, $context_id = null, $pos_type = null, $get_fingerprint = null, $retina_name, $start_index = null, $max_results = null
	$terms = $termsApi->$api_method($_REQUEST['term'], $context_id, $pos_type, $get_fingerprint, $retina_name, $start_index, $max_results);
}elseif($api_method){
	// $term = null, $get_fingerprint = null, $retina_name, $start_index = null, $max_results = null
	$terms = $termsApi->$api_method($_REQUEST['term'], $get_fingerprint, $retina_name, $start_index, $max_results);
}

$data_source=$terms[0]->fingerprint->positions;

$test_data = false;
if($test_data){
	ob_start();
	echo "\napi_method:$api_method
	\nterm: $_REQUEST[term]
	\ncontext_id: $context_id
	\npos_type: $pos_type
	\nget_fingerprint: $get_fingerprint
	\nretina_name: $retina_name
	\nstart_index: $start_index
	\nmax_results: $max_results";
	var_dump($data_source);
	$vars=ob_get_clean();
	echo $vars; exit;
}
// --------------------------------------------
ob_start();
$data='';
try{
	foreach($data_source as $i=>$position){
		if($i) $data.=", ";
		echo $data.=$position;
	}	//echo serialize($terms[0]->fingerprint->positions);
}catch(Exception $e){
	echo $e->getMessage();
}
$content=ob_get_clean();
echo $content;