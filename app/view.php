<form class="form-inline clearfix" id="form-query-params" method="post">
	<?php	//  action="?option=<?php echo $option;
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
			<div id="data-answer">
				<h4>Data</h4>
				<?php
				if ($template):
					require_once $template;
				endif;
				switch($option){
					case "Retina":
						outputContentData($data[0]);
						/*	array(1) {
						  [0]=>
						  object(Retina)#4 (5) {
							["retinaName"]=>
							string(14) "en_associative"
							["numberOfTermsInRetina"]=>
							int(854523)
							["numberOfRows"]=>
							int(128)
							["numberOfColumns"]=>
							int(128)
							["description"]=>
							string(75) "An English language retina balancing synonymous and associative similarity."
						  }
						}	*/
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
			<div id="help-contents">
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
	<div class="container">
		<div class="row">
<pre id="pre-raw-data"><h4>show raw data</h4><section class="collapse"><span>+</span><?php
var_dump($data);
?></section>
</pre>
			<button type="submit" class="btn">Get data!</button>
		</div>
	</div>
	<input type="hidden" name="option" value="<?php echo $option;?>"/>
	<?php
		else:?>
	<main>
	<?php
			if ($template):
				require_once $template;
			endif;?>
	</main>
	<?php
	endif; ?>
</form>
