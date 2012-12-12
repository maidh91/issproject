<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Register extends Model{
    public $IDREGISTER;
    public $Ho;
    public $Ten;
    public $CMND;
    public $PhaiNam;
    public $NgaySinh;
    public $DienThoai;
    public $Email;
    public $Diachi;
    public $LyDo;
    public $LoaiPassport;
    function __construct($array){
       parent::__construct($array);
    }
}
 
?>
