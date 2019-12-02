<?php

class DataType {
    private $_name;
    private $_description;
    private $_field_type;

    private $fieldName;
    private $value;


    function __construct($name, $field_type, $description) {
        $this->_name = $name;
        $this->_field_type = $field_type;
        $this->_description = $description;
        $this->fieldName = $this->setFieldName($name);
    }

    public function value() {
        return $this->value;
    }
    
    public function setValue($value) {
        $this->$value = $value;
    }

    public function fieldName() {
        return $this->fieldName;
    }

    private function setFieldName($name) {
        $this->fieldName = slugify($name, "_");
    }
}