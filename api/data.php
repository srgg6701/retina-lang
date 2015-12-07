<?php
require_once 'api.php';
ob_start();
$data='';
foreach($data_source as $i=>$position){
	if($i) $data.=",";
	echo $data.=$position;
}	//echo serialize($terms[0]->fingerprint->positions);
$content=ob_get_clean();
echo $content;