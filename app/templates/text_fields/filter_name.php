<div>
	<?php 	// name, type, params, text, classes, value
	setInputBlock( "filter_name", "text",
			$params=array(
					'minlength'=>"1", 'placeholder'=>"(required)"
			),
			'Filter name',
			'',
			$value=false
	);?>
</div>
