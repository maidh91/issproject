<?php
class WelcomeController extends  Controller{
	
	function __construct(){
		parent::__construct();
	}
	public function view() {

		$this->display('templates/welcome/index.html');
	}

}
?>