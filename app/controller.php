<?php
if(isset($_GET['option'])){
	$option=$_GET['option'];
	$method = isset($_GET['method']) ? $_GET['method'] : null;
	$term = isset($_GET['term']) ? $_GET['term'] : null;
	switch($option){
	    case "Retinas":
			$data = $termsApi->$option();
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
}