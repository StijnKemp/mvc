<?php

class SelectQuery {
    private $_query;

    function __construct($query) {
        $this->_query = $query;
    }

    public function Where($field, $operator, $value) {
        return new SelectQuery("{$this->_query} WHERE {$field->model()}.{$field->fieldName()} {$operator} {$value}");
    }

    public function Join($model, $f1, $f2) {
        $model = get_class($model);
        return new SelectQuery("{$this->_query} JOIN {$model} ON {$f1->model()}.{$f1->fieldName()} = {$f2->model()}.{$f2->fieldName()}");
    }

    public function Find($id) {
        $query = "{$this->_query} WHERE id = {$id}";
        $result = Database::Query($query);

        return $result[0];
    }

    public function ToArray() {
        $result = Database::Query($this->_query);

        return $result;
    }
}