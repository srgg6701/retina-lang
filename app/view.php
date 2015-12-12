<form class="form-inline clearfix" id="form-query-params">
<?php
if($option):?>
	<h2 class="pull-left"><?php echo $option;?></h2><?php
	if($section):
		?>
<select class="pull-left form-control" name="select-subsection">
	<option selected="selected">-choose-</option>
	<?php
		foreach($section as $subsection):?>
	<option value="<?php echo $subsection;?>"><?php echo $subsection;?></option>
	<?php
		endforeach;?>
</select>
<?php
	endif;
endif;?>
	<div id="content-box">
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
}
?>
	</div>
</form><?php
echo "<pre>";
var_dump($data);
//var_dump(array('terms'=>$terms));
//var_dump(array('similarTerms'=>$similarTerms));
echo "</pre>";