<?php
class TypepassportLogic extends Logic {
    public function findall() {
        $sql = "select * from ols_test.TYPEPASSPORT";
        $results = $this->select($sql);
        return $results;
    }
}
?>
