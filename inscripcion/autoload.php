<?php
function __autoload($nombreclase){
	require (''.$nombreclase.'.php');
}
require ('../backoffice/define.php');
?>
