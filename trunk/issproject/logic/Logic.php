<?php
class Logic{
    public $username = USERNAME;
    public $password = PASSWORD;
    public $return_value;
    public function setReturnValue($value){
        $this->return_value = $value;
    }
    public function setUser($name,$pass){
        $this->username = $name;
        $this->password = $pass;
    }
            
     public function callProcedure($sql){
        $conn = oci_connect($this->username,$this->password,HOST);
        if($conn){
            $ociid = oci_parse($conn,$sql);
            $result = oci_execute($ociid);        
            oci_close($conn);
            return $result;
        }
        else{
            echo "Cant connect oracle";
            exit(0);
        }
    }
    
    public function callFunction($function,$return){
        $this->return_value = $return;
        $sql = "select {$function} as {$this->return_value} from dual";
        $conn = oci_connect($this->username,$this->password,HOST);
        if($conn){
            $ociid = oci_parse($conn,$sql);
            oci_execute($ociid);
            $return = oci_fetch_array($ociid,OCI_ASSOC);
            oci_close($conn);
            return $return[$this->return_value];
        }
        else{
            echo "Cant connect oracle";
            exit(0);
        }
    }
    
    public function select($sql){
        $conn = oci_connect($this->username,$this->password,HOST);
        if($conn){
            $ociid = oci_parse($conn,$sql);
            oci_execute($ociid);
            $rows = array( );
            $i = 0;
            while($row = oci_fetch_array($ociid,OCI_ASSOC)){
                $rows[$i] = $row;
                $i++;                        
            }
            oci_close($conn);
            return $rows;
        }
        else{
            echo "Cant connect oracle";
            exit(0);
        }
    }
}
?>
