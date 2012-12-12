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
    function __construct($array) {
        $this->Ho = $array['Ho'];
        $this->Ten = $array['Ten'];
        $this->CMND = $array['CMND'];
        $this->PhaiNam = $array['PhaiNam'];
        $this->NgaySinh = $array['NgaySinh'];
        $this->DienThoai = $array['DienThoai'];
        $this->Email = $array['Email'];
        $this->Diachi = $array['Diachi'];
        $this->LyDo = $array['LyDo'];
        $this->LoaiPassport = $array['LoaiPassport'];
    }
}
 
?>
