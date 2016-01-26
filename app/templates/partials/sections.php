<?php
$section_contents = setSectionContents($field_type, $tag, $data);
if($section):?>
<section class="<?php
	echo $section_classes; ?>">
	<?php echo $section_contents;?>
</section>
<?php
else:
	echo $section_contents;
endif;?>