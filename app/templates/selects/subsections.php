<select class="<?php echo FORM_CLASS;?> pull-left gap-left" name="select-subsection">
	<option selected="selected">-choose-</option>
	<?php
	foreach ($section as $subsection):?>
	<option value="<?php echo $subsection; ?>"><?php
		echo $subsection;
	?></option>
		<?php
	endforeach; ?>
</select>