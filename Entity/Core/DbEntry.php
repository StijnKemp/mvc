<?php

class DbEntry {
    private $values;

    function __construct($args = false) {
        $this->values = $args;
    }

    public function name() {
        return $this->values['name'];
    }

    public function fieldName() {
        if(!isset($this->values['field_name'])) {
            $this->values['field_name'] = $this->createFieldName($this->name);
        }
        return $this->values['field_name'];
    }

    public function queryString() {
        if(isset($this->values['query_string'])) {
            return $this->values['query_string'];
        } else {
            return "{$this->fieldName()} VARCHAR(255)";
        }
    }

    public function description() {
        if(isset($this->values['description'])) {
            return $this->values['description'];
        } else {
            return false;
        }
    }

    public function primaryKey() {
        if(isset($this->values['primary_key'])) {
            return true;
        } else {
            return false;
        }
    }

    public function foreignKey() {
        if(isset($this->values['foreign_key'])) {
            return $this->values['foreign_key'];
        } else {
            return false;
        }
    }

    public function model() {
        return $this->values['model_name'];
    }

    public function setModel($name) {
        $this->values['model_name'] = $name;
    }

    private function createFieldName($name) {
        return strtolower(preg_replace("/\s/", "_", preg_replace("/-/", "_", $name)));
    }
}