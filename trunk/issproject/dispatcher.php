<?php
define("defaultController", "PassportController");
define("defaultMethod", "index");
	class Dispatcher{
			function redirect($path){
				header("Location: $path");
			}
			
			public function controllerMapping($ctrlMap){
				switch ($ctrlMap) {
					case "user":
						return "UserController";
						break;
					case "media":
						return "MediaController";
						break;
					case "home":
						return "HomeController";
						break;
                                        case "passport":
                                            return "PassportController";
                                            break;
					default:
                                            return "NoController";
				}
			}
			
			public function methodMapping($methodMap){
				return $methodMap;
			}
						
			public function run($ctrlMap = null,$methodMap = null){
				if($ctrlMap != null && $methodMap != null){
					$className  = $this->controllerMapping($ctrlMap);
					$methodName = $this->methodMapping($methodMap);
                                        $instance = new $className;
                                        call_user_func( array( $instance, $methodName ));
				}
				else{
					$className = defaultController;
					$methodName = defaultMethod;
					$instance = new $className;
					call_user_func( array( $instance, $methodName ));
				}
			}
	}
?>