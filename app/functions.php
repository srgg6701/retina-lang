<?php

function setSelectBlock($header, $file_name, $data_ask_target){
	?>
	<div>
		<?php echo $header;?>:
		<?php require_once TMPL_PARTIALS_PATH .$file_name.'.php';
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