<?php
class ActiveRecord{
	public function __get($property) {
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	public function __set($property, $value) {
		if (property_exists($this, $property)) {
			$this -> $property = $value;
		}

		return $this;
	}
        
       function __construct($array) {
            foreach($array as $key => $value){
                $this->$key = $value;
            }
        }
}
?>