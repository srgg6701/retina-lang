<?php //
$sections = array( // get sections
				// 3
				'Term'=>array('terms','terms/contexts','terms/similar_terms'),
				// 6
				'Text'=>array('text','text/keywords','text/tokenize','text/slices','text/bulk','text/detect_language'),
				// 6
				'Expression'=>array('expressions','expressions/contexts','expressions/similar_terms','expressions/bulk','expressions/contexts/bulk','expressions/similar_terms/bulk'),
				// 2
				'Compare'=>array('compare','compare/bulk'),
				// 3
				'Image'=>array('image','image/compare','image/bulk'),
			);
// extract methods
switch($option_post){
	case "Retina":
		$data = $getData->getRetinas($retina_name);
		$form_method = 'GET';
		break;
	case "Term":
		switch($method){
			case 'terms':
				$data = $getData->getTerm($term, $get_fingerprint, $retina_name, $start_index, $max_results);
				break;
			case 'terms/contexts':
				if(!$term) $term = 'apple';
				$data = $getData->getContextsForTerm($term, $get_fingerprint, $retina_name, $start_index, $max_results);
				break;
			case 'terms/similar_terms':
				if(!$term) $term = 'apple';
				$data = $getData->getSimilarTerms($term, $context_id, $pos_type, $get_fingerprint, $retina_name, $start_index, $max_results);
				break;
		}
		$form_method = 'GET';
		break;
	case "Text":
		switch($method){
			case 'text':
				$data = $getData->getRepresentationForText($body, $retina_name);
				break;
			case 'text/keywords':
				$data = $getData->getKeywordsForText($body, $retina_name);
				break;
			case 'text/tokenize':
				$data = $getData->getTokensForText($body, $POStags, $retina_name);
				break;
			case 'text/slices':
				$data = $getData->getSlicesForText($body, $get_fingerprint, $retina_name, $start_index, $max_results);
				break;
			case 'text/bulk':
				$data = $getData->getRepresentationsForBulkText($body, $retina_name, $sparsity);
				break;
			case 'text/detect_language':
				$data = $getData->getLanguage($body);
				break;
		}
		$form_method = 'POST';
		break;
	case "Expression":
		switch($method){
			case 'expressions':
				$data = $getData->resolveExpression($body, $retina_name, $sparsity);
				break;
			case 'expressions/contexts':
				$data = $getData->getContextsForExpression($body, $get_fingerprint, $retina_name, $start_index, $max_results, $sparsity);
				break;
			case 'expressions/similar_terms':
				$data = $getData->getSimilarTermsForExpressionContext($body, $context_id, $pos_type, $get_fingerprint, $retina_name, $start_index, $max_results, $sparsity);
				break;
			case 'expressions/bulk':
				$data = $getData->resolveBulkExpression($body, $retina_name, $sparsity);
				break;
			case 'expressions/contexts/bulk':
				$data = $getData->getContextsForBulkExpression($body, $get_fingerprint, $retina_name, $start_index, $max_results, $sparsity);
				break;
			case 'expressions/similar_terms/bulk':
				$data = $getData->getSimilarTermsForBulkExpressionContext($body, $context_id, $pos_type, $get_fingerprint, $retina_name, $start_index, $max_results, $sparsity);
				break;
		}
		$form_method = 'POST';
		break;
	case "Compare":
		switch($method){
			case 'compare':
				$data = $getData->compare($body, $retina_name);
				break;
			case 'compare/bulk':
				$data = $getData->compareBulk($body, $retina_name);
				break;
		}
		$form_method = 'POST';
		break;
	case "Image":
		switch($method){
			case 'image':
				$data = $getData->getImageForExpression($body, $retina_name, $image_scalar, $plot_shape, $image_encoding, $sparsity);
				break;
			case 'image/compare':
				$data = $getData->getOverlayImage($body, $retina_name, $plot_shape, $image_scalar, $image_encoding);
				break;
			case 'image/bulk':
				$data = $getData->getImageForBulkExpressions($body, $get_fingerprint, $retina_name, $image_scalar, $plot_shape, $sparsity);
				break;
		}
		$form_method = 'POST';
		break;
	case "Classify":
		$data = $getData->createCategoryFilter($filter_name, $body, $retina_name);
		$form_method = 'POST';
		break;
}
