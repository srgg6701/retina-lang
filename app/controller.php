<?php
$template = $option = $section = $methodDefaul = $filter_name = $body = $POStags = $term = $context_id = $pos_type = $get_fingerprint	 = $retina_name = $start_index = $max_results = $image_scalar = $plot_shape	 = $image_encoding = $sparsity = null;
if(isset($_REQUEST['option'])){
	$retina_name = (isset($_POST['retina_name'])) ?
		$_POST['retina_name'] : 'en_associative';
	$option=$_REQUEST['option'];
	$method = isset($_REQUEST['method']) ? $_REQUEST['method'] : null;
	$term = isset($_REQUEST['term']) ? $_REQUEST['term'] : null;
	$template = TMPL_PATH.$option.'.php';
	$className = $option;
	$excludeNames = array('Text', 'Compare', 'Image', 'Classify');
	if($className[strlen($className)-1]!='s' && !in_array($className, $excludeNames)){
		$className.='s';
		$methodDefault='get'.$className;
	}
	$className.='Api';
	// it will be passed to model
	$getData = new $className($apiClient);
	// get sections & data
	require_once APP_PATH.'model.php';
	// get aliases for active section
	if(isset($sections[$option])) $section = $sections[$option];
}else{
	$template = TMPL_PATH.'default.php';
}
ob_start();
require_once APP_PATH.'view.php';
$content=ob_get_clean();