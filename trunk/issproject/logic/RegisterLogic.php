<?php

class RegisterLogic extends Logic {
    public function createRegister(Register $register) {
        $CMND = $register->CMND;
        $Ho = $register->Ho;
        $Ten = $register->Ten;
        $PhaiNam = $register->PhaiNam;
        $NgaySinh = $register->NgaySinh;
        $DienThoai = $register->DienThoai;
        $Email = $register->Email;
        $DiaChi = $register->Diachi;
        $LyDo = $register->LyDo;
        $LoaiPassport = $register->LoaiPassport;
        // validate
        $validate = "ols_test.validate_register('{$CMND}','{$PhaiNam}')";
        $error_code = $this->callFunction($validate, "ERROR_CODE");
        if($error_code != 0){
            return $error_code;
        }else{
             $sql = "call ols_test.insert_register2('" . $CMND . "','" . $Ho . "','" . $Ten . "','" . $PhaiNam . "','" . $NgaySinh . "','" . $DienThoai . "','" . $Email . "','" . $DiaChi . "','" . $LyDo . "'," . $LoaiPassport . ")";
             $result = $this->callProcedure($sql);
             return $error_code;
        }
    }

}

?>
