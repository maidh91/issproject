<?php
require_once 'customSmarty.php';

class Controller {
	
	public $smarty;
	
	function __construct(){
		$this->smarty = new CustomSmarty();
		//$smarty->display($string);
	}
	
	function display($string){
		$this->smarty->display($string);
	}
}
?>
