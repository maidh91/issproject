<?php
class RegisterController extends AppController{
	
	function __construct(){
		parent::__construct();
	}
	public function index(){
            $this->display('templates/passport/index.html');
	}
        public function register() {
             $username = "GUEST";
                $password = "GUEST";
            if(isset($_POST['register'])){
                //$register = new Register($register);
                $register = new Register($_POST['register']);
                $passportProcessing = new RegisterLogic();
                $passportProcessing->setUser($username,$password);
                $passportProcessing->createRegister($register);
                //$this->display('templates/passport/register_success.html');
            }
            else{
                $typepassportProcessing = new TypepassportLogic();
                $typepassportProcessing->setUser($username,$password);
                $types = $typepassportProcessing->findAll();  
                $this->smarty->assign('types',$types);     
                
                $this->display('templates/passport/index.html');
            }
	}
}
?>