<?php
class PassportController extends AppController{
	
	function __construct(){
		parent::__construct();
	}
	public function index(){
            $this->display('templates/passport/index.html');
	}
        public function register() {
            //$register = $_POST['register'];
            //$register = new Register($register);
            $username = "GUEST";
            $password = "GUEST";
            $register = new Register();
            $passportProcessing = new PassportLogic();
            $passportProcessing->setUser($username,$password);
            $passportProcessing->savePassport($register);
            //$this->display('templates/passport/register_success.html');
	}
}
?>