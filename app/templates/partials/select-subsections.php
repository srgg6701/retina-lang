<select class="pull-left form-control" name="select-subsection">
	<option selected="selected">-choose-</option>
	<?php
	foreach ($section as $subsection):?>
		<option value="<?php echo $subsection; ?>"><?php echo $subsection; ?></option>
		<?php
	endforeach; ?>
</select>