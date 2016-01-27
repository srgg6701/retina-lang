<section id="section-api_params" class="padding10 clearfix">
	<div class="visibility none">
<?php
	if($option_get!='Retina'):?>
		<br/>
<?php	// context_id
		setFieldSections(
			'input',
			array(
				'context_id'=>array(
					'',
					array(
						'id' => "context-id",
						'type' => 'text'
					)
				)
			)
		);?>
	</div>
	<br/>
	<div id="results-length" class="clearfix">
<?php	// start_index
		setFieldSections(
			'input',
			array(
				'start_index'=>array(
					"pull-left",
					array(
						'id'=>"start-index",
						'type'=>"text",
						'value'=>"0"
					)
				)
			), true);
		// max_results
		setFieldSections(
			'input',
			array(
				'max_results'=>array(
					"pull-left gap-left",
					array(
						'id'=>"max-results",
						'type'=>"text",
						'value'=>"10",
						'minlength'=>"0"
					)
				)
			), true);
		?>
	</div>
	<br/>
	<div class="clearfix">
<?php	// pos_type
		setFieldSections(
			'select',
			array(
				'pos_type'=>'pull-left visibility none'
			), true
		);
		// get_fingerprint
		setFieldSections(
			'select',
			array(
				'get_fingerprint'=>'pull-left gap-left'
			), true);
	endif;
?>
	</div>
</section>