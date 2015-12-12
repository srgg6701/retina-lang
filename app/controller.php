<?php
$template = $option = null;
if(isset($_GET['option'])){
	$option=$_GET['option'];
	$getMethod='get'.$option;
	$method = isset($_GET['method']) ? $_GET['method'] : null;
	$term = isset($_GET['term']) ? $_GET['term'] : null;
	$template = TMPL_PATH.$option.'.php';
	$className = $option;
	if($className[strlen($className)-1]!='s')
		$className.='s';
	$className.='Api';
	$data = (new $className($apiClient))->$getMethod();
	/*switch($option){
	    case "Retinas":
			$data = (new RetinasApi($apiClient))->$getMethod();
	        break;
	    case "Term":
			if($method)
				$data = (new TermsApi($apiClient))->$method();
			break;
	    case "Text":
			$data = (new TextApi($apiClient))->$getMethod();
			break;
		case "Expression":
			$data = (new ExpressionApi($apiClient))->$getMethod();
			break;
		case "Compare":
			$data = (new CompareApi($apiClient))->$getMethod();
			break;
		case "Image":
			$data = (new ImageApi($apiClient))->$getMethod();
			break;
		case "Classify":
			$data = (new ClassifyApi($apiClient))->$getMethod();
			break;
	}*/
}
ob_start();
require_once APP_PATH.'view.php';
$content=ob_get_clean();