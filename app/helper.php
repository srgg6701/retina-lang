<?php
function outputContentData($dataContent){
	foreach($dataContent as $name=>$value):?>
		<p><?php echo "<b>$name</b>: $value";?></p>
	<?php
	endforeach;
}
/**
 * @param $file_name
 */
function includeSelect($file_name){
	require_once TMPL_PATH_SELECTS . $file_name . '.php';
}

/**
 * @param $name
 */
function setDataAskHint($name){
	?><span data-ask-target="<?php
	echo $name;
	?>" class="glyphicon glyphicon-question-sign"></span><?php
}
/**
 * @param $header
 * @param $nameFile
 * @param $data_ask_target
 */
function setSelectBlock($header, $nameFile=false, $nameField=false){
	?>
	<div>
		<?php echo $header;?>:
		<?php
	if(!$nameFile) $nameFile = $header;
	includeSelect($nameFile);
	if($nameFile!==false):
		$name=($nameField)? $nameField:$nameFile;
		setDataAskHint($name);
	endif;?>
	</div>
	<?php
}

/**
 * @param string $name
 * @param string $type
 * @param string $params
 * @param bool|false $data_ask
 * @param bool|false $text
 * @param bool|false $classes
 * @param bool|false $value
 */
function setInputBlock($name='', $type='', $params='', $value=false, $data_ask=false, $classes=false){?>
<div>
	<?php
	if($name):
		echo $name . ': ';
	endif;?>
	<input<?php
   	if($name):
		?> name="<?php echo $name;?>"<?php
	endif;
	if($type):
		?> type="<?php echo $type;?>"<?php
	endif;?> class="<?php
	echo FORM_CLASS;
	// set classes & params data
	setTagParams($classes, $params);
	if($value):?> value="<?php echo $value;?>"<?php endif;?>><?php
	if($data_ask!=='') {
		$arg = ($data_ask)? $data_ask:$name;
		setDataAskHint($arg);
	}?>
</div>
<?php
}
/**
 * @param string $name
 * @param bool|false $params
 * @param bool|false $classes
 */
function setTextArea($header='', $name='', $params=false, $classes=false){
	if($header):?>
	<div>
		<?php echo $header; ?>:&nbsp;
<?php
	endif;?>
		<textarea name="<?php echo $name;?>" class="<?php
	echo FORM_CLASS;
	setTagParams($classes, $params);?>">
		</textarea>
	</div>
<?php
}
/**
 * @param bool|false $classes
 * @param bool|false $params
 */
function setTagParams($classes=false, $params=false){
	if(is_array($classes)):
		echo ' ' . $classes;
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
	<section id="description-<?php echo $id;?>" class="collapse">
		<span>+</span>
		<h4><?php echo $header_text;?></h4>
		<?php echo $section_content;?>
	</section>
	<?php
}