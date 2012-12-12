<?php
class PassportLogic extends Logic{ 
    public function savePassport(Register $register){
        $CMND = '024525053';
        $Ho = 'Do Thi Tuyet';
        $Ten = 'Ngan';
        $PhaiNam = 'n';
        $NgaySinh = '1991-10-08';
        $DienThoai = '01667599037'
        $Email = 'dttngan91@yahoo.com';
        $DiaChi = '3B cc 162 Nguyen Thi Nho P15 Q11 TPHCM';
        $LyDo = 'Xin cap ho chieu pho thong de di du hoc';
        $LoaiPassport = '1'
        $sql = "
    begin
        ols_test.insert_register('$CMND',
'$Ho',
'$Ten',
'$PhaiNam',
'$NgaySinh',
'$DienThoai',
'$Email',
'$DiaChi',
'$LyDo',
'$LoaiPassport');
end;";
        $result = $this->createWriteQuery($sql);
        var_dump($result);
        exit(0);
        $session["message"] = $result;
    }
}
?>
