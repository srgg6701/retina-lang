<?php
// Contents
if ($option):?>
	<form class="form-inline" name="form-api-data" method="post">
		<div class="clearfix">
			<h2 class="pull-left gap-right">
				<?php echo $option; ?>
			</h2>
			<?php
			if ($section):
				?>
				<div>
					<?php
					require_once TMPL_PATH . 'selects' . DIRECTORY_SEPARATOR . 'subsections.php'; ?>
				</div>
				<?php
			endif;
			if ($option_get == 'Term'):
				?>
				<div>
					<?php
					require_once TMPL_PATH_INPUTS . 'term.php'; ?>
				</div>
				<?php
			endif;
			?>
		</div>
		<?php
		//
		require_once TMPL_PATH_PARTIALS . 'common.php';
		?>
		<main>
			<?php
			// if we get the service API answer
			if ($option_post):?>
				<div id="data-answer">
					<h4>Data</h4>
					<?php
					if ($template):
						require_once $template;
					endif;
					switch ($option_post) {
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
			else: // if we just load the section by clicking a link in menu
				require_once TMPL_PATH_PARTIALS . 'main.php';
			endif;
			//
			require_once TMPL_PATH_PARTIALS . 'help.php';
			?>
		</main>
		<?php
		//
		require_once TMPL_PATH_PARTIALS . 'raw_answer.php';
		?>
		<input type="hidden" name="option" value="<?php echo $option; ?>"/>
		<br/>
		<button type="submit" class="btn">Get data!</button>
	</form>
	<?php
// Welcome page
else:
	?>
	<main>
		<?php // default template
		if ($template) require_once $template; ?>
	</main>
	<?php
endif;