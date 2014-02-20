<?php
header("Content-type: text/html; charset=utf-8");
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value){
		$value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value); 
		return $value; 
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE); 
}
define('APP_DEBUG',"true");
define('APP_NAME', 'cms');
define('CONF_PATH','./YungowuData/conf/');
define('RUNTIME_PATH','./YungowuData/logs/');
define('TMPL_PATH','./tpl/');
define('HTML_PATH','./YungowuData/html/');
define('APP_PATH','./YunGoWu/');
define('CORE','./YunGoWu/_Core');
require(CORE.'/YunGoWu.php');
?>