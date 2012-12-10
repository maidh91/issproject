<?php
	define("ROOT_DIR", "localhost/task1");
	//require_once 'customSmarty.php';
	require_once 'AutoLoader.php';
	require_once 'dispatcher.php';
	$autoload = new AutoLoader();
	$autoload->loadController();
	$autoload->loadModel();
        $autoload->loadLogic();
	
	$dispatcher = new Dispatcher;
	
	if(isset($_GET['r'])){
		$ctrl = $_GET['r'];
		$method = $_GET['m'];
		$dispatcher->run($ctrl,$method);
	}
	else{
		$dispatcher->run();
	}
?>