<div id="content-box">
	<div id="selects-common" class="clearfix">
<?php
		setSelectBlock("Response Content Type", "response_content_type", "description-responseContentType");
		/** present always, but is hidden on the text/detect_language switch */
		setSelectBlock("Retina name", "retina_name", "description-retina_name");
	if($option_get=='Classify'):
		require_once TMPL_PATH_INPUTS . 'filter_name.php';
	endif;
?>
	</div>
<?php
if($option_get!='Retina'&&$option_get!='Term'):
	require_once TMPL_PATH_INPUTS . 'body.php';
endif;
if ($option_get == 'Text'):
	require_once TMPL_PATH_INPUTS . 'POStags.php';
endif;
?>
</div>