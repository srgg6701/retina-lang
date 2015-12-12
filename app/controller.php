<?php
if(isset($_GET['option'])){
	$option='get'.$_GET['option'];
	$method = isset($_GET['method']) ? $_GET['method'] : null;
	$term = isset($_GET['term']) ? $_GET['term'] : null;
	switch($_GET['option']){
	    case "Retinas":
			$RetinasApi=new RetinasApi();
			$data = $RetinasApi->$option();
	        break;
	    case "Term":
			$data = $termsApi->$method();
			break;
	    case "Text":
			$data = $termsApi->$option();
			break;
		case "Expression":
			$data = $termsApi->$option();
			break;
		case "Compare":
			$data = $termsApi->$option();
			break;
		case "Image":
			$data = $termsApi->$option();
			break;
		case "Classify":
			$data = $termsApi->$option();
			break;
	}

	//$terms = $termsApi->getTerm($term, true, $RETINA_NAME);
	//$similarTerms = $termsApi->getSimilarTerms($term, null, null, null, $RETINA_NAME);
	echo "<h3>option=".$option."</h3>";
}
ob_start();
require_once APP_PATH.'view.php';
$content=ob_get_clean();