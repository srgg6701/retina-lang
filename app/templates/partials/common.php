<div class="clearfix">
<?php	//
		setSelectBlock("Response Content Type", "response_content_type", "responseContentType");
		/** present always, but is hidden on the text/detect_language switch */
		setSelectBlock("Retina name", "retina_name");
	if($option_get=='Classify'):
		require_once TMPL_PATH_INPUTS . 'filter_name.php';
	endif;
?>
</div>
<?php
if($option_get!='Retina'&&$option_get!='Term'): ?>
<div class="clearfix" id="textarea-container">
	<?php
	require_once TMPL_PATH_INPUTS . 'body.php';
	?>
</div>
<?php
endif;
if ($option_get == 'Text'):?>
<div class="clearfix">
<?php
	require_once TMPL_PATH_INPUTS . 'POStags.php';?>
</div>
<?php
endif;