<?php
class UserController{
	function redirect($path){
		header("Location:".$path);
	}
	
	public function login( ){
		$username = "";
		$password = "";
		$username = $_POST["username"];
		$password = $_POST["password"];
		if(strcmp($username, "admin") == 0 && strcmp($password, "admin") == 0){
			//redirect
			$this->redirect("index.php?controller=home&method=view");
		}
		else{
			//forward
			$_SESSION["message"] = "Username or password are incorrect";
			$this->redirect("index.php");
		}
	}
	
	function create(){
		$model = new User( );
		$model->attributes = $_POST['user'];
		$model->email = "a";
		echo $model->email;
	}
}
?>