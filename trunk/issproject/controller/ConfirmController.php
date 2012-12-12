<?php
class ConfirmController extends AppController{
	
	function __construct(){
		parent::__construct();
	}
        
	public function index(){
            $username = "xt_hcm";
            $password = "xt_hcm";
            $registerProcessing = new RegisterLogic();
            $registerProcessing->setUser($username, $password);
            $registers = $registerProcessing->findAll();
            $this->smarty->assign('registers', $registers);
            $this->display('templates/confirm/index.html');
	}
}
?>