<?php
class AutoLoader{
	public function loadController(){
		function controller_autoload($classname){
			$filename = "controller/".$classname . ".php";
			if(file_exists($filename)){
			include_once($filename);
			}
		}
		spl_autoload_register('controller_autoload');
	}
        
	public function loadModel(){
		function model_autoload($classname){
			$filename = "model/".$classname . ".php";
			if(file_exists($filename)){
			include_once($filename);
			}
		}
		spl_autoload_register('model_autoload');
	}

        public function loadLogic(){
		function logic_autoload($classname){
			$filename = "logic/".$classname . ".php";
			if(file_exists($filename)){
			include_once($filename);
			}
		}
		spl_autoload_register('logic_autoload');
	}
}
?>