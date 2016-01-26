<section id="section-api_params" class="padding10 clearfix">
	<div class="visibility none">
		<br/>
		<?php setFieldSections(
				array( 'input'=>array(
							'context_id'=>array( '',	array(
										'id'=>"context-id",
										'type'=>'text'
									)
								)
							)
						)
					);?>
	</div>
	<br/>
	<div id="results-length" class="clearfix">
		<?php setFieldSections($fieldsTypes,'input');?>
	</div>
	<br/>
	<div class="clearfix">
		<?php setFieldSections($fieldsTypes,'select');?>
	</div>
</section>