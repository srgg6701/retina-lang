<form class="form-inline clearfix" id="form-query-params">
	<div id="selects-common" class="clearfix">
		<div>
			Response Content Type:
		<?php require_once TMPL_PARTIALS_PATH.'select-response_content_type.php';?>
		</div>
		<div>
			Retina name:
		<?php require_once TMPL_PARTIALS_PATH.'select-retina_name.php';?>
		</div>
	</div>
</form><?php
echo "<pre>";
var_dump($data);
//var_dump(array('terms'=>$terms));
//var_dump(array('similarTerms'=>$similarTerms));
echo "</pre>";