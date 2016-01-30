<section id="section-api_params">
<?php
	if($option_get=='Term'||$option_get=='Expression'):
		?>
	<div class="clearfix">
<?php 	setInputBlock('context_id', 'text', array('name'=>'start-index'), 'context_id');?>
	</div>
<?php
	endif;
	if($option_get=='Term'||$option_get=='Text'||$option_get=='Expression'):?>
	<div class="clearfix">
<?php	setInputBlock('start_index', 'text', array('name'=>'start-index'), 'start_index', false, '0');
		setInputBlock('max_results', 'text', array('name'=>'max_results'), 'max_results', false, '10');?>
	</div>
<?php
	endif;
	if($option_get=='Term'||$option_get=='Text'||$option_get=='Expression'||$option_get=='Image'):?>
	<div class="clearfix">
<?php	if ($option_get!='Text'&&$option_get!='Image'):
			setSelectBlock('pos_type');
		endif;
		setSelectBlock('get_fingerprint');?>
	</div>
<?php
	endif;
	if ($option_get=='Image'):
?>
	<div class="clearfix">
<?php 	setSelectBlock("image_scalar", "image_scalar");
		setSelectBlock("plot_shape", "plot_shape");
		setSelectBlock("image_encoding", "image_encoding"); ?>
	</div>
<?php
	endif;?>
</section>