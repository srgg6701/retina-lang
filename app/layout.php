<?php
// Contents
if ($option):?>
	<h2 class="pull-left">
		<?php echo $option;?>
	</h2>
	<?php
	if ($section) require_once TMPL_PATH . 'selects' . DIRECTORY_SEPARATOR. 'subsections.php';
	require_once TMPL_PARTIALS_PATH.'input-term.php';
	//
	require_once TMPL_PATH . 'selects' . DIRECTORY_SEPARATOR . 'common.php';
	?>
	<main>
	<?php
	if($option_post):?>
		<div id="data-answer">
			<h4>Data</h4>
			<?php
			if ($template):
				require_once $template;
			endif;
			switch($option_post){
				case "Retina":
					outputContentData($data[0]);
					break;
				case "Term":

					break;
				case "Text":

					break;
				case "Expression":

					break;
				case "Compare":

					break;
				case "Image":

					break;
				case "Classify":

					break;
			}
			?>
		</div>
	<?php
	else:
		require_once TMPL_PARTIALS_PATH.'form.php';
	endif;
	//
	require_once TMPL_PARTIALS_PATH.'help.php';
	?>
	</main>
	<?php
	//
	require_once TMPL_PARTIALS_PATH.'raw_answer.php';
	?>
<input type="hidden" name="option" value="<?php echo $option;?>"/>
<button type="submit" class="btn">Get data!</button>
<?php

// Welcome page
else:
	?>
<main>
	<?php	// default template
	if ($template) require_once $template;?>
</main>
<?php

endif;