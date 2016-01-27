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
 * @param string $name
 * @param string $type
 * @param string $params
 * @param bool|false $classes
 * @param bool|false $value
 * @param string $text
 */
function setInputBlock($name='', $type='', $params='', $text='', $classes=false, $value=false){
	echo $text . ': ';?>
	<input<?php
   	if($name):
		?> name="<?php echo $name;?>"<?php
	endif;
	if($type):
		?> type="<?php echo $type;?>"<?php
	endif;?> class="form-control<?php

	// set classes & params data
	setInputTagContent($classes, $params);

	if($value):?> value="<?php echo $value;?>"<?php endif;?>>
<?php
}

/**
 * @param string $name
 * @param bool|false $params
 * @param bool|false $classes
 */
function setTextArea($name='', $params=false, $classes=false){
	?>
	<textarea name="<?php echo $name;?>" class="body-textarea"<?php
	setInputTagContent($classes, $params);?>></textarea>
<?php
}
/**
 * @param bool|false $classes
 * @param bool|false $params
 */
function setInputTagContent($classes=false, $params=false){
	if(is_array($classes)):
		echo $classes;
	endif;?>"<?php
	if(is_array($params)):
		foreach($params as $param=>$val):
			echo ' ' . $param . '="' . $val . '"';
		endforeach;
	endif;
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
 * @param $tag string is used in the template
 * @param $dataArray
 * @param bool|false $section
 */
function setFieldSections($tag, $dataArray, $section=false){
	foreach($dataArray as $field_type => $data){
		$section_classes = (is_array($data)) ?
			$data[0] : $data;
		require TMPL_PATH_PARTIALS . 'sections.php';
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