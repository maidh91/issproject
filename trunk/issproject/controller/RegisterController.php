<?php
class RegisterController extends AppController{
	
	function __construct(){
		parent::__construct();
	}
	public function index(){
            $this->display('templates/register/index.html');
	}
        public function register() {
             $username = "GUEST";
                $password = "GUEST";
            if(isset($_POST['register'])){
                //$register = new Register($register);
                $register = new Register($_POST['register']);
                $passportProcessing = new RegisterLogic();
                // auth
                $passportProcessing->setUser($username,$password);
                //validate and create
                $error_code = $passportProcessing->createRegister($register);
                
                switch ($error_code) {
                    case SEX_ERROR_CODE:
                        $_SESSION["message"] = "Phái Nam chỉ được có 2 giá trị la 'y' va 'n'";
                        break;
                    case FORMAT_CMND_CODE:
                       $_SESSION["message"] = "CMND phải có độ dài là 9 ký tự";
                        break;
                    case PREFIX_CMND_CODE:
                       $_SESSION["message"] = "2 ký tự đầu tiên của CMND phải là '11' hoặc '12'";
                        break;
                    case SUCCESS_CODE:
                        $_SESSION["message"] = "Bạn đã đăng kí passport thành công, chờ xét duyệt";
                        break;
                };
                
                if($error_code != SUCCESS_CODE){
                    echo $session["message"];
                    
                    $typepassportProcessing = new TypepassportLogic();
                $typepassportProcessing->setUser($username,$password);
                      $sex = array('y'=> 'Nam','n'=>'Nữ');
                    $types = $typepassportProcessing->findAll();  
                     $this->smarty->assign('types',$types);
                    $this->smarty->assign('sex',$sex);
                    $this->display('templates/register/index.html');
                }
                else{
                    $this->display('templates/register/register_success.html');
                }
                //$this->display('templates/passport/register_success.html');
            }
            else{
                $sex = array('y'=> 'Nam','n'=>'Nữ');
                $typepassportProcessing = new TypepassportLogic();
                $typepassportProcessing->setUser($username,$password);
                $types = $typepassportProcessing->findAll();  
                $this->smarty->assign('types',$types);
                $this->smarty->assign('sex',$sex);
                $this->display('templates/register/index.html');
            }
	}
}
?>