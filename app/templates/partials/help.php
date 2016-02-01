<div id="help-contents">
	<?php
	setHelpSections("term", "Term", "<p>A term in the retina</p>");
	setHelpSections("responseContentType", "Response Content Type", "<p>Defines what type of data will come from the server. Currently it is only JSON.</p>");
	setHelpSections("retina_name", "Retina Name", "<p>Retina used for word space models. It allows to compute distances between terms, which can be used to determine the degree of similarity between terms.</p>
				<p>There are two types of retina:</p>
				<ol>
					<li>en_synonymous</li>
					<p>An english language retina focusing on synonymous similarity.</p>
					<li>en_associative</li>
					<p>An english language retina balancing synonymous and associative similarity.</p>
				</ol>");
	setHelpSections("context_id", "Context id", "<p>The identifier of a context</p>");
	setHelpSections("start_index", "Start index", "<p>The start-index for pagination</p>");
	setHelpSections("max_results", "Max results", "<p>Max results per page</p>");
	setHelpSections("pos_type", "Pos type", "<p>Part of speech</p>");
	?>
</div>