<?php
$template = $option = $section = null;
if(isset($_GET['option'])){
	$option=$_GET['option'];
	$getMethod='get'.$option;
	$method = isset($_GET['method']) ? $_GET['method'] : null;
	$term = isset($_GET['term']) ? $_GET['term'] : null;
	$template = TMPL_PATH.$option.'.php';
	$className = $option;
	if($className[strlen($className)-1]!='s' && $className!='Text')
		$className.='s';
	$className.='Api';
	$getData = new $className($apiClient);
	// get sections
	require_once APP_PATH . 'model.php';
	$section = $sections[$option] || null;
	$params = array('term',);
	// extract methods
	switch($option){
	    case "Term":
			switch($method){
				case 'terms':
				$data = $getData->$getMethod();
					break;
				case 'terms/contexts':
					break;
				case 'terms/similar_terms':
					break;
			}
			break;
	    case "Text":
			switch($method){
				case 'text':
					break;
				case 'text/keywords':
					break;
				case 'text/tokenize':
					break;
				case 'text/slices':
					break;
				case 'text/bulk':
					break;
				case 'text/detect_language':
					break;
			}
			break;
		case "Expressions":
			switch($method){
				case 'expressions':
					break;
				case 'expressions/contexts':
					break;
				case 'expressions/similar_terms':
					break;
				case 'expressions/bulk':
					break;
				case 'expressions/contexts/bulk':
					break;
				case 'expressions/similar_terms/bulk':
					break;
			}
			break;
		case "Compare":
			switch($method){
				case 'compare':
					break;
				case 'compare/bulk':
					break;
			}
			break;
		case "Image":
			switch($method){
				case 'image':
					break;
				case 'image/compare':
					break;
				case 'image/bulk':
					break;
			}
			break;
	}
}
ob_start();
require_once APP_PATH.'view.php';
$content=ob_get_clean();