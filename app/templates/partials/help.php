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