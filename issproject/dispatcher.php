<?php
define("defaultController", "RegisterController");
define("defaultMethod", "register");
	class Dispatcher{
			function redirect($path){
				header("Location: $path");
			}
			
			public function controllerMapping($ctrlMap){
                            return $ctrlMap."Controller";
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