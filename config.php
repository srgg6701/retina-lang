<?php
$root = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
define('PHP_CLIENT_PATH',$root.'php-client-sdk'.DIRECTORY_SEPARATOR);
define('APP_PATH',$root.'app'.DIRECTORY_SEPARATOR);
define('API_PATH',$root.'api'.DIRECTORY_SEPARATOR);
define('TMPL_PATH',APP_PATH.'templates'.DIRECTORY_SEPARATOR);
define('TMPL_PATH_PARTIALS',TMPL_PATH.'partials'.DIRECTORY_SEPARATOR);
define('TMPL_PATH_INPUTS',TMPL_PATH.'text_fields'.DIRECTORY_SEPARATOR);
define('TMPL_PATH_SELECTS',TMPL_PATH.'selects'.DIRECTORY_SEPARATOR);
//-----------------
define('FORM_CLASS', 'form-control');
