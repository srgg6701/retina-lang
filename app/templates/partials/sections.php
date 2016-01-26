<?php
$section_contents = setSectionContents($field_type, $tag, $data);
if($tagName):?>
<section class="<?php
	echo $section_classes; ?>">
	<?php echo $section_contents;?>
</section>
<?php
else:
	echo $section_contents;
endif;?>