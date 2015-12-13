<form class="form-inline clearfix" id="form-query-params">
	<?php
	if ($option):?>
		<h2 class="pull-left"><?php echo $option; ?></h2><?php
		if ($section):
			?>
			<select class="pull-left form-control" name="select-subsection">
				<option selected="selected">-choose-</option>
				<?php
				foreach ($section as $subsection):?>
					<option value="<?php echo $subsection; ?>"><?php echo $subsection; ?></option>
					<?php
				endforeach; ?>
			</select>
			<?php
		endif; ?>
		<div id="content-box">
			<div id="selects-common" class="clearfix">
				<?php
				setSelectBlock("Response Content Type", "select-response_content_type", "description-responseContentType");
				setSelectBlock("Retina name", "select-retina_name", "description-retina_name");?>
			</div>
		</div>
		<main>
			<div id="answers">
				<?php
				setHelpSections("description-responseContentType", "Response Content Type", "<p>Defines what type of data will come from the server. Currently it is only JSON.</p>");
				setHelpSections("description-retina_name", "Retina Name", "<p>Retina used for word space models. It allows to compute distances between terms, which can be used to determine the degree of similarity between terms.</p>
					<p>There are two types of retina:</p>
					<ol>
						<li>en_synonymous</li>
						<p>An english language retina focusing on synonymous similarity.</p>
						<li>en_associative</li>
						<p>An english language retina balancing synonymous and associative similarity.</p>
					</ol>");
				?>
			</div>
		</main>
		<?php
	endif; ?>
	<div class="container">
		<div class="row">
			<?php
			if ($template):
				require_once $template;
			endif;
			echo "<pre>";
			var_dump($data);
			//var_dump(array('terms'=>$terms));
			//var_dump(array('similarTerms'=>$similarTerms));
			echo "</pre>"; ?>
			<button type="submit" class="btn">Get data!</button>
		</div>
	</div>
</form>
