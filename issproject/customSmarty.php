<?php
set_include_path(get_include_path().PATH_SEPARATOR.'./lib');
require_once('smarty/Smarty.class.php');
defined('TMP_PATH') || define('TMP_PATH', realpath(__DIR__.'/tmp'));

class CustomSmarty extends Smarty{

	public function __construct(){
		parent::__construct();

		/*
		$this->force_compile = true;
		$this->caching = true;
		$this->cache_lifetime = 120;		
		*/

	
		//$this->setDebugging(true);	
		$this->setConfigDir(__DIR__.'/configs');
		$this->setTemplateDir(__DIR__.'/templates');
		$this->setCompileDir(TMP_PATH.'/templates_c');
		$this->setCacheDir(TMP_PATH.'/cache');

	}

}

?>
