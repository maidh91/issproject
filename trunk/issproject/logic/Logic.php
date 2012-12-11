<?php
class Logic{
    public $username = USERNAME;
    public $password = PASSWORD;
     public function createWriteQuery($sql){
        $conn = oci_connect($username,$password,HOST);
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
    
    public function createReadQuery($sql){
        $conn = oci_connect($username,$password,HOST);
        if($conn){
            $ociid = oci_parse($conn,$sql);
            oci_execute($ociid);
            $rows = array();
            $i = 0;
            while($row = oci_fetch_array($ociid)){
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
