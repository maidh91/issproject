<?php
include("PassportInterface.php");
class PassportLogic  implements PassportProcess{
    public function createQuery($query){
        oci_connect(USERNAME,PASSWORD,HOST);
    }
    
    public function savePassport(Passport $passport){
        
    }
}
?>
