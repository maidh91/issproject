<?php
class AppController extends  Controller{
    public $layout;
    function __construct(){
	parent::__construct();
        // set layout
        $this->layout = ROOT_DIR."/templates/layout/app.html";
        $this->smarty->assign('layout',$this->layout);        
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
