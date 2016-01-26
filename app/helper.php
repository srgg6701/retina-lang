<?php
function outputContentData($dataContent){
	foreach($dataContent as $name=>$value):?>
		<p><?php echo "<b>$name</b>: $value";?></p>
	<?php
	endforeach;
}
function includeSelect($file_name){
	require_once TMPL_PATH_SELECTS . $file_name . '.php';
}
/**
 * @param $header
 * @param $file_name
 * @param $data_ask_target
 */
function setSelectBlock($header, $file_name, $data_ask_target){
	?>
	<div>
		<?php echo $header;?>:
		<?php includeSelect($file_name)
		?><span data-ask-target="<?php echo $data_ask_target;?>"
				class="glyphicon glyphicon-question-sign"></span>
	</div>
	<?php
}
/**
 * @param $id
 * @param $header_text
 * @param string $section_content
 */
function setHelpSections($id, $header_text, $section_content="...coming soon..."){
	?>
	<section id="<?php echo $id;?>" class="collapse">
		<span>+</span>
		<h4><?php echo $header_text;?></h4>
		<?php echo $section_content;?>
	</section>
	<?php
}

/**
 * @param $fieldsTypes
 * @param $tag
 */
function setFieldSections($fieldsTypes, $tagName=false){
	if(!($tag = $tagName)){
		reset($fieldsTypes);
		$tag = key($fieldsTypes);
	}
	foreach($fieldsTypes[$tag] as $field_type => $data){
		$section_classes = (is_array($data)) ?
			$data[0] : $data;
		require TMPL_PARTIALS_PATH . 'sections.php';
		echo "\n";
	}
}

/**
 * @param $field_type
 * @param $tag
 * @param $data
 */
function setSectionContents($field_type, $tag, $data){
	ob_start();?>
	<div><?php echo $field_type; ?></div>
	<div>
		<?php
		if ($tag == 'select')
			includeSelect($field_type);
		elseif ($tag == 'input') {
			?>
			<input class="form-control"<?php
			foreach ($data[1] as $param => $value):
				echo ' ' . $param . '="' . $value . '"';
			endforeach; ?>>
			<?php
		} ?>
	</div>
	<?php
	return ob_get_clean();
}