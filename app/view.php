<?php
if($option):?>
	<h2><?php echo $option;?></h2>
<?php
endif;?>
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
<?php
if($template) {
	require_once $template;
	//echo "<div>template: $template</div>";
}?>
</form><?php
echo "<pre>";
var_dump($data);
//var_dump(array('terms'=>$terms));
//var_dump(array('similarTerms'=>$similarTerms));
echo "</pre>";