<?php
class AppController extends  Controller{
    public $layout = "{ROOT_DIR}/templates/layout/app.html";
    function __construct(){
	parent::__construct();
        // set layout
        $this->smarty->assign('layout',$this->layout);        
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
