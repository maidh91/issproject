<?php
class PassportLogic extends Logic{ 
    public function savePassport(Register $register){
        $sql = "select * from test2";
        $row = $this->createReadQuery($sql);
        var_dump($row);
        echo $row[1]['ID'];
        exit(0);
    }
}
?>
